import './_hero.scss';

// document.body.style.backgroundColor = 'red';
// change background color of body to red
// javascript on page load

const divElement = document.querySelector('#open_ai_button');

document.addEventListener('click', event => {
  if (!divElement.contains(event.target)) {
    divElement.classList.add('close-animation');
    setTimeout(() => {
      divElement.classList.remove('close-animation');
    }, 500);
  }
});