/**
 * Webpack configuration.
 */

const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const cssnano = require("cssnano"); // https://cssnano.co/
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const UglifyJsPlugin = require("uglifyjs-webpack-plugin");
const CopyPlugin = require("copy-webpack-plugin"); // https://webpack.js.org/plugins/copy-webpack-plugin/
const DependencyExtractionWebpackPlugin = require("@wordpress/dependency-extraction-webpack-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const glob_entries = require("webpack-glob-folder-entries");
const component_entries = glob_entries("components/**/index.js", true);
const fs = require("fs");
const RemoveEmptyScriptsPlugin = require("webpack-remove-empty-scripts");
const webpack = require("webpack");
const nodeModulesPath = path.resolve(__dirname, 'node_modules');

// JS Directory path.
const JS_DIR = path.resolve(__dirname, "js");
const IMG_DIR = path.resolve(__dirname, "img");

const appDirectory = fs.realpathSync(process.cwd());

function resolveApp(relativePath) {
  return path.resolve(appDirectory, relativePath);
}

const output = {
  filename: "js/[name].min.js",
  path: path.resolve(__dirname, "dist"),
  clean: true
};

const entries = {
  index: "./js/index.js",
  styles: "./styles/styles.scss"
};

// Add Component entries to the entries object

function addComponentEntries(entries, component_entries) {
  for (const [key, value] of Object.entries(component_entries)) {
	entries[key] = value;
  }
}

for (const [key, value] of Object.entries(component_entries)) {
  const resolvedValue = resolveApp(`${value}`);
  entries[key] = resolvedValue;
}

/**
 * Note: argv.mode will return 'development' or 'production'.
 */
const plugins = (argv) => [
	new webpack.ProvidePlugin({
		$: require.resolve('jquery'),
		jQuery: require.resolve('jquery'),
		'window.jQuery': require.resolve('jquery'),
		}),
  new CleanWebpackPlugin({
    cleanStaleWebpackAssets: "production" === argv.mode // Automatically remove all unused webpack assets on rebuild, when set to true in production. ( https://www.npmjs.com/package/clean-webpack-plugin#options-and-defaults-optional )
  }),

  new MiniCssExtractPlugin({
    filename: "styles/[name].css"
  }),

  new BrowserSyncPlugin(
    {
      host: "localhost",
      port: "3791",
      proxy: {
        target: "https://groundlevel.local",
        proxyReq: [
          function (proxyReq) {
            proxyReq.setHeader("X-MG-Development-Webpack-Proxy-Header", "true");
          }
        ]
      },
      files: [
        "dist/**/*.*",
        {
          match: ["**/*.php"],
          fn: function (event, file) {
            if (event === "change") {
              const bs = require("browser-sync").get("bs-webpack-plugin");
              bs.reload();
            }
          }
        }
      ]
    },
    {
      reload: false
    }
  ),

  new DependencyExtractionWebpackPlugin({
    injectPolyfill: true,
    combineAssets: true
  }),
  new RemoveEmptyScriptsPlugin()
];

const rules = [
  {
    test: /\.js$/,
    include: [JS_DIR],
    exclude: /node_modules/,
    use: "babel-loader"
  },
  {
    test: /\.scss$/,
    exclude: /node_modules/,
	  use: [MiniCssExtractPlugin.loader, "css-loader", {
		  loader: "sass-loader",
		  options: {
			  additionalData: `@import "styles/utilities/_variables.scss";`,
			  sassOptions: {
                includePaths: [nodeModulesPath],
              }
		  },
	  }],
  },
  {
    test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
    use: {
      loader: "file-loader",
      options: {
        name: "img/[name].[ext]",
        publicPath: "production" === process.env.NODE_ENV ? "../" : "../../"
      }
    }
  },
  {
    test: /\.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
    exclude: [IMG_DIR, /node_modules/],
    use: {
      loader: "file-loader",
      options: {
        name: "[path][name].[ext]",
        publicPath: "production" === process.env.NODE_ENV ? "../" : "../../"
      }
    }
  }
];

module.exports = (env, argv) => ({
  entry: entries,

  output: output,

  devtool: "source-map",

  module: {
    rules: rules
  },

  optimization: {
    minimizer: [
		new CssMinimizerPlugin()
    ]
  },

	plugins: plugins(argv),
  
});
