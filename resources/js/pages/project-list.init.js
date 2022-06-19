/*
Template Name: BUMASIS - Admin & Dashboard Template
Author: Bumicode
Website: https://Bumicode.com/
Contact: Bumicode@gmail.com
File: Project list init js
*/

// favourite btn
var favouriteBtn = document.querySelectorAll(".favourite-btn");
if (favouriteBtn) {
    document.querySelectorAll(".favourite-btn").forEach(function (item) {
        item.addEventListener("click", function (event) {
            this.classList.toggle("active");
        });
    });
}

// Remove product from cart
var removeProduct = document.getElementById('removeProjectModal')
if (removeProduct) {
    removeProduct.addEventListener('show.bs.modal', function (e) {
        document.getElementById('remove-project').addEventListener('click', function (event) {
            e.relatedTarget.closest('.project-card').remove();
            document.getElementById("close-modal").click();
        });
    });
}
