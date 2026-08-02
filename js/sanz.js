"use strict";

// Remember the chosen language for one year, read by the redirect in index.html
(function () {
	var lang = window.location.pathname.split("/").pop().split(".")[1];
	if (lang) {
		var expires = new Date(Date.now() + 365 * 24 * 60 * 60 * 1000).toUTCString();
		document.cookie = "lang=" + lang + "; expires=" + expires + "; path=/";
	}
})();

// Nav links are plain anchors (content always visible, no JS required to read it).
// This only adds scroll-spy highlighting of the current section in the sidebar.
(function () {
	var navlinks = Array.prototype.slice.call(document.querySelectorAll(".navlink"));
	var panels = Array.prototype.slice.call(document.querySelectorAll(".panel"));
	if (!navlinks.length || !panels.length || !("IntersectionObserver" in window)) {
		return;
	}

	function setActive(id) {
		navlinks.forEach(function (link) {
			if (link.getAttribute("data-target") === id) {
				link.setAttribute("aria-current", "page");
			} else {
				link.removeAttribute("aria-current");
			}
		});
	}

	var observer = new IntersectionObserver(function (entries) {
		entries.forEach(function (entry) {
			if (entry.isIntersecting) {
				setActive(entry.target.id);
			}
		});
	}, { rootMargin: "-40% 0px -55% 0px" });

	panels.forEach(function (panel) {
		observer.observe(panel);
	});
})();
