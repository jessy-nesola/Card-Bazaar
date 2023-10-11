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

// Trova gli elementi del carosello
const testimonialSlider = document.querySelector('.testimonial-slider');
const testimonialItems = testimonialSlider.querySelectorAll('.item');
const testimonialNavPrev = document.querySelector('[data-controls="prev"]');
const testimonialNavNext = document.querySelector('[data-controls="next"]');

let currentIndex = 0;

function showTestimonial(index) {
    // Nascondi tutti gli elementi del carosello
    testimonialItems.forEach(item => {
        item.classList.remove('active');
    });

    // Mostra l'elemento corrente
    testimonialItems[index].classList.add('active');
}

function nextTestimonial() {
    currentIndex = (currentIndex + 1) % testimonialItems.length;
    showTestimonial(currentIndex);
}

function prevTestimonial() {
    currentIndex = (currentIndex - 1 + testimonialItems.length) % testimonialItems.length;
    showTestimonial(currentIndex);
}

// Inizializza il carosello mostrando il primo elemento
showTestimonial(currentIndex);

// Aggiungi gestori di eventi per i pulsanti di navigazione
testimonialNavNext.addEventListener('click', nextTestimonial);
testimonialNavPrev.addEventListener('click', prevTestimonial);
