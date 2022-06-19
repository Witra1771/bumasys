/*
Template Name: BUMASIS - Admin & Dashboard Template
Author: Bumicode
Website: https://Bumicode.com/
Contact: Bumicode@gmail.com
File: Project overview init js
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
