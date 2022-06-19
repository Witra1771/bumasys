/*
Template Name: BUMASIS - Admin & Dashboard Template
Author: Bumicode
Website: https://Bumicode.com/
Contact: Bumicode@gmail.com
File: Password addon Js File
*/

// password addon
if (document.getElementById('password-addon'))
	document.getElementById('password-addon').addEventListener('click', function () {
		var passwordInput = document.getElementById("password-input");
		if (passwordInput.type === "password") {
			passwordInput.type = "text";
		} else {
			passwordInput.type = "password";
		}
	});
