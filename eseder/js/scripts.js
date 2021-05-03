/** navigation adding and removing active class from span elements **/ 
const ul = document.querySelector('.header ul');
const homeLi = document.querySelector('.header ul li:first-child');

// clear default active class on first li
homeLi.classList.remove('active');
homeLi.firstChild.firstChild.classList.add('active');

const liList = document.querySelectorAll('.header ul li span');

ul.addEventListener('click', () => {
  // remove active class from all span elements
  liList.forEach(item => {
    item.classList.remove('active');
  });

  // add active class to clicked navigation item
  if (event.target.tagName === 'SPAN') {
    event.target.classList.add('active');
  }
});




