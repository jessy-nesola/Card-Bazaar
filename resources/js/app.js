import "bootstrap";
// import "./bootstrap.js";
// import "./bootstrap.bundle.min.js";
// import "./custom.js";
// import "./tiny-slider.js";
import "./custom_swiper";
var sitePlusMinus = function () {
    var value,
        quantity = document.getElementsByClassName("quantity-container");

    function createBindings(quantityContainer) {
        var quantityAmount =
            quantityContainer.getElementsByClassName("quantity-amount")[0];
        var increase = quantityContainer.getElementsByClassName("increase")[0];
        var decrease = quantityContainer.getElementsByClassName("decrease")[0];
        increase.addEventListener("click", function (e) {
            increaseValue(e, quantityAmount);
        });
        decrease.addEventListener("click", function (e) {
            decreaseValue(e, quantityAmount);
        });
    }

    function init() {
        for (var i = 0; i < quantity.length; i++) {
            createBindings(quantity[i]);
        }
    }

    function increaseValue(event, quantityAmount) {
        value = parseInt(quantityAmount.value, 10);

        console.log(quantityAmount, quantityAmount.value);

        value = isNaN(value) ? 0 : value;
        value++;
        quantityAmount.value = value;
    }

    function decreaseValue(event, quantityAmount) {
        value = parseInt(quantityAmount.value, 10);

        value = isNaN(value) ? 0 : value;
        if (value > 0) value--;

        quantityAmount.value = value;
    }

    init();
};
sitePlusMinus();

/**
* Scroll top button
*/
const scrollTop = document.querySelector('.scroll-top');
if (scrollTop) {
    const togglescrollTop = function () {
        window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
        top: 0,
        behavior: 'smooth'
    }));
}
/**
     * Init swiper slider with 1 slide at once in desktop view
     */
new Swiper('.slides-1', {
    speed: 600,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
});
