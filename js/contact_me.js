"use strict";

(function () {
	var form = document.getElementById("contactForm");
	if (!form) {
		return;
	}

	var success = document.getElementById("success");
	var button = document.getElementById("sendMessageButton");

	function notice(kind, message) {
		success.innerHTML = "";
		var div = document.createElement("div");
		div.className = "notice " + kind;
		div.textContent = message;
		success.appendChild(div);
	}

	form.addEventListener("submit", function (event) {
		event.preventDefault();

		if (!form.reportValidity()) {
			return;
		}

		var data = new URLSearchParams({
			name: form.name.value,
			email: form.email.value,
			phone: form.phone.value,
			message: form.message.value
		});

		button.disabled = true;

		fetch("https://contactme.saltos.org/php/contact_me.php", {
			method: "POST",
			body: data
		}).then(function (response) {
			if (!response.ok) {
				throw new Error("bad response");
			}
			notice("ok", form.getAttribute("data-validation-ok-message"));
			form.reset();
		}).catch(function () {
			notice("ko", form.getAttribute("data-validation-ko-message"));
		}).finally(function () {
			setTimeout(function () {
				button.disabled = false;
			}, 1000);
		});
	});

	form.name.addEventListener("focus", function () {
		success.innerHTML = "";
	});
})();
