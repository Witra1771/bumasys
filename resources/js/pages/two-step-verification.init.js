/*
Template Name: BUMASIS - Admin & Dashboard Template
Author: Bumicode
Website: https://Bumicode.com/
Contact: Bumicode@gmail.com
File: Two step verification Init Js File
*/

// move next
function moveToNext(elem, count) {
    if (elem.value.length > 0) {
        document.getElementById("digit" + count + "-input").focus();
    }
}
