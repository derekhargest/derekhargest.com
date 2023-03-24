set -e

echo "Installing NVM"
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.1/install.sh | bash
export NVM_DIR="$HOME/.nvm"
echo "Load Bash Completion"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"
[ -s "$NVM_DIR/bash_completion" ] && \. "$NVM_DIR/bash_completion"

echo "Install and Use NVM 15"
nvm install 15
nvm use 15

echo "Initiating NPM Install"
npm install

echo "Building Theme"
npm run prod

sudo chown -R ${{ secrets.RASPBERRY_PI_USERNAME }}:${{ secrets.RASPBERRY_PI_USERNAME }} .