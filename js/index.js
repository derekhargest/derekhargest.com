import '@fortawesome/fontawesome-free/js/fontawesome'
import '@fortawesome/fontawesome-free/js/solid'
import '@fortawesome/fontawesome-free/js/regular'
import '@fortawesome/fontawesome-free/js/brands'

import { library, dom } from '@fortawesome/fontawesome-svg-core'

document.addEventListener('DOMContentLoaded', function() {
	library.add(faAngleRight);
	dom.watch();
	config.searchPseudoElements = true
});
