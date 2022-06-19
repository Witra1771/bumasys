/*
Template Name: BUMASIS - Admin & Dashboard Template
Author: Bumicode
Website: https://Bumicode.com/
Contact: Bumicode@gmail.com
File: Form input spin Js File
*/

// input spin
isData();

function isData() {
    var plus = document.getElementsByClassName('plus');
    var minus = document.getElementsByClassName('minus');
    var product = document.getElementsByClassName("product");

    if (plus) {
        plus.forEach(function (e) {
            e.addEventListener('click', function (event) {
                // if(event.target.previousElementSibling.value )
                if (parseInt(e.previousElementSibling.value) < event.target.previousElementSibling.getAttribute('max')) {
                    event.target.previousElementSibling.value++;
                    if (product) {
                        product.forEach(function (x) {
                            updateQuantity(event.target);
                        })
                    }

                }
            });
        });
    }

    if (minus) {
        minus.forEach(function (e) {
            e.addEventListener('click', function (event) {
                if (parseInt(e.nextElementSibling.value) > event.target.nextElementSibling.getAttribute('min')) {
                    event.target.nextElementSibling.value--;
                    if (product) {
                        product.forEach(function (x) {
                            updateQuantity(event.target);
                        })
                    }
                }
            });
        });
    }
}
