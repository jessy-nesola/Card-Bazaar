import "bootstrap";
import "./bootstrap";

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

var mySwiper = new Swiper('.swiper-container', {
    autoplay: {
        delay: 3000, // Tempo in millisecondi tra le slide
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
