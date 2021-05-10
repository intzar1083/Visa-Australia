$readMoreJS.init({
  target: '.member-bio',
  numOfWords: 50,
  toggle: true,
  moreLink: '+ Read more',
  lessLink: '- Read less'
});

//Sub-menu
let subMenuOverlay = document.querySelector('.sub-menu-overlay');
let menuItemHasChildren = document.querySelector('.menu-item-has-children a');
menuItemHasChildren.addEventListener('mouseenter', function () {
  subMenuOverlay.classList.toggle('d-none');
})
menuItemHasChildren.addEventListener('mousemove', function () {
  subMenuOverlay.classList.toggle('d-none');
})
//let subMenuHeight = document.querySelector('.sub-menu');
//console.log(subMenuHeight.offsetHeight);
//console.log(subMenuOverlay.offsetHeight);

let burgerBtn = document.querySelector(".burger");
let menuOpen = false;
burgerBtn.addEventListener("click", () => {
  if (!menuOpen) {
    burgerBtn.classList.add("open");
    menuOpen = true;
  } else {
    burgerBtn.classList.remove("open");
    menuOpen = false;
  }
});
