const burgerIcon = document.querySelector('#burger');
const navbarMenu = document.querySelector('#nav-links');

burgerIcon.addEventListener('click', () => {
	navbarMenu.classList.toggle('is-active')
})

bulmaCarousel.attach('#slider', {
	slidesToScroll: 1,
	slidesToShow: 3,
	infinite: true,
});
