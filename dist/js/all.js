(function ($) {
	"use strict"; // Start of use strict

	/* ---------------------------------------------
     Scripts initialization
     --------------------------------------------- */

	$(window).load(function () {
		// Page loader

		$("body").imagesLoaded(function () {
			$(".page-loader div").fadeOut();
			$(".page-loader").delay(200).fadeOut("slow");
		});

		init_scroll_navigate();

		$(window).trigger("scroll");
		$(window).trigger("resize");

		// Hash menu forwarding
		if (window.location.hash && $(window.location.hash).length) {
			var hash_offset = $(window.location.hash).offset().top;
			$("html, body").animate({
				scrollTop: hash_offset,
			});
		}
	});

	$(document).ready(function () {
		$(window).trigger("resize");
		init_classic_menu();
		// init_shortcodes();
		init_tooltips();
	});

	$(window).resize(function () {
		init_classic_menu_resize();
		js_height_init();
		split_height_init();
	});

	/* --------------------------------------------
     Platform detect
     --------------------------------------------- */
	var mobileTest;
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
		mobileTest = true;
		$("html").addClass("mobile");
	} else {
		mobileTest = false;
		$("html").addClass("no-mobile");
	}

	var mozillaTest;
	if (/mozilla/.test(navigator.userAgent)) {
		mozillaTest = true;
	} else {
		mozillaTest = false;
	}
	var safariTest;
	if (/safari/.test(navigator.userAgent)) {
		safariTest = true;
	} else {
		safariTest = false;
	}

	// Detect touch devices
	if (!("ontouchstart" in document.documentElement)) {
		document.documentElement.className += " no-touch";
	}

	/* ---------------------------------------------
     Sections helpers
     --------------------------------------------- */

	// Sections backgrounds

	var pageSection = $(
		".home-section, .page-section, .small-section, .split-section"
	);
	pageSection.each(function (indx) {
		if ($(this).attr("data-background")) {
			$(this).css(
				"background-image",
				"url(" + $(this).data("background") + ")"
			);
		}
	});

	// Function for block height 100%
	function height_line(height_object, height_donor) {
		height_object.height(height_donor.height());
		height_object.css({
			"line-height": height_donor.height() + "px",
		});
	}

	// Function equal height
	!(function (a) {
		(a.fn.equalHeights = function () {
			var b = 0,
				c = a(this);
			return (
				c.each(function () {
					var c = a(this).innerHeight();
					c > b && (b = c);
				}),
				c.css("height", b)
			);
		}),
			a("[data-equal]").each(function () {
				var b = a(this),
					c = b.data("equal");
				b.find(c).equalHeights();
			});
	})(jQuery);

	// Progress bars
	var progressBar = $(".progress-bar");
	progressBar.each(function (indx) {
		$(this).css("width", $(this).attr("aria-valuenow") + "%");
	});

	/* ---------------------------------------------
     Nav panel classic
     --------------------------------------------- */

	var mobile_nav = $(".mobile-nav");
	var desktop_nav = $(".desktop-nav");

	function init_classic_menu_resize() {
		// Mobile menu max height
		$(".mobile-on .desktop-nav > ul").css(
			"max-height",
			$(window).height() - $(".main-nav").height() - 20 + "px"
		);

		// Mobile menu style toggle
		if ($(window).width() <= 1024) {
			$(".main-nav").addClass("mobile-on");
		} else if ($(window).width() > 1024) {
			$(".main-nav").removeClass("mobile-on");
			desktop_nav.show();
		}
	}

	function init_classic_menu() {
		// Navbar sticky

		// $(".js-stick").sticky({
		// 	topSpacing: 0,
		// });

		height_line($(".inner-nav > ul > li > a"), $(".main-nav"));
		height_line(mobile_nav, $(".main-nav"));

		mobile_nav.css({
			width: $(".main-nav").height() + "px",
		});

		// Transpaner menu

		if ($(".main-nav").hasClass("transparent")) {
			$(".main-nav").addClass("js-transparent");
		}

		$(window).scroll(function () {
			if ($(window).scrollTop() > 10) {
				$(".js-transparent").removeClass("transparent");
				$(".main-nav, .nav-logo-wrap .logo, .mobile-nav").addClass(
					"small-height"
				);
			} else {
				$(".js-transparent").addClass("transparent");
				$(".main-nav, .nav-logo-wrap .logo, .mobile-nav").removeClass(
					"small-height"
				);
			}
		});

		// Mobile menu toggle

		mobile_nav.click(function () {
			if (desktop_nav.hasClass("js-opened")) {
				desktop_nav.slideUp("slow", "easeOutExpo").removeClass("js-opened");
				$(this).removeClass("active");
			} else {
				desktop_nav.slideDown("slow", "easeOutQuart").addClass("js-opened");
				$(this).addClass("active");

				// Fix for responsive menu
				if ($(".main-nav").hasClass("not-top")) {
					$(window).scrollTo(".main-nav", "slow");
				}
			}
		});

		desktop_nav.find("a:not(.mn-has-sub)").click(function () {
			if (mobile_nav.hasClass("active")) {
				desktop_nav.slideUp("slow", "easeOutExpo").removeClass("js-opened");
				mobile_nav.removeClass("active");
			}
		});

		// Sub menu

		var mnHasSub = $(".mn-has-sub");
		var mnThisLi;

		$(".mobile-on .mn-has-sub")
			.find(".fa:first")
			.removeClass("fa-angle-right")
			.addClass("fa-angle-down");

		mnHasSub.click(function () {
			if ($(".main-nav").hasClass("mobile-on")) {
				mnThisLi = $(this).parent("li:first");
				if (mnThisLi.hasClass("js-opened")) {
					mnThisLi.find(".mn-sub:first").slideUp(function () {
						mnThisLi.removeClass("js-opened");
						mnThisLi
							.find(".mn-has-sub")
							.find(".fa:first")
							.removeClass("fa-angle-up")
							.addClass("fa-angle-down");
					});
				} else {
					$(this)
						.find(".fa:first")
						.removeClass("fa-angle-down")
						.addClass("fa-angle-up");
					mnThisLi.addClass("js-opened");
					mnThisLi.find(".mn-sub:first").slideDown();
				}

				return false;
			} else {
			}
		});

		mnThisLi = mnHasSub.parent("li");
		mnThisLi.hover(
			function () {
				if (!$(".main-nav").hasClass("mobile-on")) {
					$(this).find(".mn-sub:first").stop(true, true).fadeIn("fast");
				}
			},
			function () {
				if (!$(".main-nav").hasClass("mobile-on")) {
					$(this)
						.find(".mn-sub:first")
						.stop(true, true)
						.delay(100)
						.fadeOut("fast");
				}
			}
		);

		/* Keyboard navigation for main menu */

		$(".inner-nav a").focus(function () {
			if (!$(".main-nav").hasClass("mobile-on")) {
				$(this)
					.parent("li")
					.parent()
					.children()
					.find(".mn-sub:first")
					.stop(true, true)
					.delay(100)
					.fadeOut("fast");
			}
		});

		$(".inner-nav a")
			.first()
			.keydown(function (e) {
				if (!$(".main-nav").hasClass("mobile-on")) {
					if (e.shiftKey && e.keyCode == 9) {
						$(this)
							.parent("li")
							.find(".mn-sub:first")
							.stop(true, true)
							.delay(100)
							.fadeOut("fast");
					}
				}
			});

		$(".mn-sub li:last a").keydown(function (e) {
			if (!$(".main-nav").hasClass("mobile-on")) {
				if (!e.shiftKey && e.keyCode == 9) {
					$(this)
						.parent("li")
						.parent()
						.stop(true, true)
						.delay(100)
						.fadeOut("fast");
				}
			}
		});

		$(document).keydown(function (e) {
			if (!$(".main-nav").hasClass("mobile-on")) {
				if (e.keyCode == 27) {
					if (
						mnHasSub
							.parent("li")
							.find(".mn-sub:first li .mn-sub")
							.is(":visible")
					) {
						mnHasSub
							.parent("li")
							.find(".mn-sub:first li .mn-sub")
							.stop(true, true)
							.delay(100)
							.fadeOut("fast");
					} else {
						mnHasSub
							.parent("li")
							.find(".mn-sub:first")
							.stop(true, true)
							.delay(100)
							.fadeOut("fast");
					}
				}
			}
		});

		mnHasSub.focus(function () {
			if (!$(".main-nav").hasClass("mobile-on")) {
				$(this)
					.parent("li")
					.find(".mn-sub:first")
					.stop(true, true)
					.fadeIn("fast");
			}
		});
	}

	/* ---------------------------------------------
     Scroll navigation
     --------------------------------------------- */

	function init_scroll_navigate() {
		$(".local-scroll").localScroll({
			target: "body",
			duration: 1500,
			offset: -55,
			easing: "easeInOutExpo",
		});

		var sections = $(".home-section, .split-section, .page-section");
		var menu_links = $(".scroll-nav li a");

		$(window).scroll(function () {
			sections.filter(":in-viewport:first").each(function () {
				var active_section = $(this);
				var active_link = $(
					'.scroll-nav li a[href="#' + active_section.attr("id") + '"]'
				);
				menu_links.removeClass("active");
				active_link.addClass("active");
			});
		});
	}

	/* ---------------------------------------------
     Tooltips (bootstrap plugin activated)
     --------------------------------------------- */

	function init_tooltips() {
		$(".tooltip-bot, .tooltip-bot a, .nav-social-links a").tooltip({
			placement: "bottom",
		});

		$(".tooltip-top, .tooltip-top a").tooltip({
			placement: "top",
		});
	}
})(jQuery); // End of use strict

/* ---------------------------------------------
 Height 100%
 --------------------------------------------- */
function js_height_init() {
	(function ($) {
		$(".js-height-full").height($(window).height());
		$(".js-height-parent").each(function () {
			$(this).height($(this).parent().first().height());
		});
	})(jQuery);
}

/* ---------------------------------------------
 Split section
 --------------------------------------------- */

function split_height_init() {
	(function ($) {
		$(".ssh-table, .split-section-content").css("height", "auto");

		if ($(window).width() > 992) {
			$(".split-section").each(function () {
				var split_section_height = $(this)
					.find(".split-section-content")
					.innerHeight();
				$(this).find(".ssh-table").height(split_section_height);
			});
		}
	})(jQuery);
}

/**
 * Subscription when the DOM is ready
 * @param {Function} callback
 */
function onDOMReady(callback) {
	var loaded;

	/**
	 * Callback wrapper for check loaded state
	 */
	function load() {
		if (!loaded) {
			loaded = true;

			callback();
		}
	}

	if (["interactive", "complete"].indexOf(document.readyState) >= 0) {
		callback();
	} else {
		loaded = false;
		document.addEventListener("DOMContentLoaded", load, false);
		window.addEventListener("load", load, false);
	}
}
