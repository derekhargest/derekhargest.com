import '@fortawesome/fontawesome-free/js/fontawesome';
import '@fortawesome/fontawesome-free/js/solid';
import '@fortawesome/fontawesome-free/js/regular';
import '@fortawesome/fontawesome-free/js/brands';
import { Accordion } from 'bootstrap';
import { library, dom, config } from '@fortawesome/fontawesome-svg-core';
import { faAngleRight } from '@fortawesome/free-solid-svg-icons';

library.add(faAngleRight);
dom.watch();
config.searchPseudoElements = true;

document.addEventListener('DOMContentLoaded', function () {
  // Select the element you want to toggle the class on
//  https://github.com/piersrueb/inViewport

const inViewport = (elem) => {
	let allElements = document.getElementsByClassName(elem);
    let windowHeight = window.innerHeight;
    const elems = () => {
        for (let i = 0; i < allElements.length; i++) {  //  loop through the sections
            let viewportOffset = allElements[i].getBoundingClientRect();  //  returns the size of an element and its position relative to the viewport
            let top = viewportOffset.top;  //  get the offset top
            if(top < windowHeight){  //  if the top offset is less than the window height
                allElements[i].classList.add('in-viewport');  //  add the class
            } else{
                allElements[i].classList.remove('in-viewport');  //  remove the class
            }
        }
    }
    elems();
    window.addEventListener('scroll', elems);
}

inViewport('component');  //  run the function on all section elements

});
