! function ($) {
	"use strict";

	function dropDown() {
		var mDropdown;
		$(".m-dropdown-toggle").on("click", function () {
			$(this).parent().toggleClass("open-menu-parent"), $(this).next("ul").toggleClass("open-menu"), $(this).toggleClass("open")
		}), $(".submenu").attr("style", "display: none!important"), $(".dropdowns").on("mouseover", function () {
			$(".submenu").attr("style", "display: block!important")
		}), $(".dropdowns").on("mouseleave", function () {
			$(".submenu").attr("style", "display: none!important")
		})
	}

	function navbarScrol() {
		var wind = $(window),
			HHeight = $(".header-height .fixed-header-bar").height();
		wind.on("scroll", function () {
			var bodyScroll;
			$("header").height(HHeight), wind.scrollTop() > 300 ? ($("header").addClass("fixed-header"), TweenMax.to(".hero", 1, {
				scale: 1.2,
				autoAlpha: 0
			})) : ($("header").removeClass("fixed-header"), TweenMax.to(".hero", 1, {
				scale: 1,
				autoAlpha: 1
			}))
		})
	}

	function iconAnimation() {
		var icons = $(".icon-round i"),
			dots = $(".dots"),
			dots2 = $(".dots-2"),
			dots3 = $(".dots-3"),
			dots4 = $(".dots-4"),
			boxesTL, dotsTL;
		new TimelineLite({
			onComplete: function () {
				this.restart()
			}
		}).staggerFrom(icons, 3, {
			rotation: "-=360deg",
			delay: 1
		}, 2), new TimelineLite({
			onComplete: function () {
				this.restart()
			}
		}).to(dots, 6, {
			x: "-=70",
			y: "+=10",
			scale: "2"
		}).to(dots, 2, {
			y: "-=10"
		}, "-=3").to(dots, 1, {
			autoAlpha: 0
		}, "-=1").to(dots2, 6, {
			x: "+=70",
			scale: "2"
		}, "-=5").to(dots2, 2, {
			y: "+=20"
		}, "-=3").to(dots2, 1, {
			autoAlpha: 0
		}, "-=2").to(dots3, 6, {
			y: "+=60",
			scale: "2"
		}, "-=4").to(dots3, 2, {
			x: "+=5"
		}, "-=3").to(dots3, 1, {
			autoAlpha: 0
		}, "-=2").to(dots4, 4, {
			y: "-=50",
			x: "-10",
			scale: "2"
		}, "-=7").to(dots4, 1, {
			autoAlpha: 0
		}, "-=4")
	}

	function aboutSlider() {
		var aboutSlide;
		$(".about-image .owl-carousel").owlCarousel({
			loop: !0,
			margin: 30,
			mouseDrag: !1,
			autoplay: !0,
			center: !1,
			dots: !1,
			dragEndSpeed: 700,
			smartSpeed: 2e3,
			responsiveClass: !0,
			autoplayHoverPause: !0,
			autoplayTimeout: 3e3,
			responsive: {
				0: {
					items: 1,
					margin: 0
				},
				600: {
					items: 1,
					margin: 0
				},
				1000: {
					items: 1,
					margin: 0
				}
			}
		})
	}

	function workSlder() {
		var owl = $(".work .owl-carousel");
		owl.children().each(function (index) {
			$(this).attr("data-position", index)
		}), owl.owlCarousel({
			loop: !1,
			margin: 30,
			mouseDrag: !0,
			autoplay: !1,
			center: !0,
			dots: !0,
			nav: !1,
			slideBy: "page",
			dragEndSpeed: 700,
			smartSpeed: 1e3,
			responsiveClass: !0,
			responsive: {
				0: {
					items: 1,
					margin: 20
				},
				600: {
					items: 2,
					margin: 30
				},
				1000: {
					items: 2,
					margin: 0
				}
			}
		}), $(document).on("click", ".work .owl-item>div", function () {
			owl.trigger("to.owl.carousel", $(this).data("position"))
		}), owl.trigger("refresh.owl.carousel")
	}

	function teamSlider() {
		var teamSlide;
		$(".team .owl-carousel").owlCarousel({
			loop: !0,
			margin: 30,
			mouseDrag: !0,
			autoplay: !1,
			center: !1,
			dots: !0,
			nav: !1,
			dragEndSpeed: 700,
			smartSpeed: 1e3,
			responsiveClass: !0,
			responsive: {
				0: {
					items: 1,
					margin: 20
				},
				600: {
					items: 2,
					margin: 30
				},
				1000: {
					items: 4,
					margin: 30
				}
			}
		})
	}

	function testiSlider() {
		var testiSlide = $(".testi-content .owl-carousel");
		testiSlide.owlCarousel({
			loop: !0,
			margin: 30,
			mouseDrag: !1,
			autoplay: !1,
			center: !1,
			dots: !1,
			dragEndSpeed: 700,
			smartSpeed: 1e3,
			responsiveClass: !0,
			animateOut: "fadeOut",
			responsive: {
				0: {
					items: 1,
					margin: 20
				},
				600: {
					items: 1,
					margin: 30
				},
				1000: {
					items: 1,
					margin: 0
				}
			}
		}), $(".nav-left").on("click", function () {
			testiSlide.trigger("next.owl.carousel")
		}), $(".nav-right").on("click", function () {
			testiSlide.trigger("prev.owl.carousel")
		})
	}

	function partnerSlider() {
		var partnerSlide;
		$(".partner .owl-carousel").owlCarousel({
			loop: !0,
			margin: 30,
			mouseDrag: !0,
			autoplay: !1,
			center: !1,
			dots: !1,
			dragEndSpeed: 700,
			smartSpeed: 2e3,
			responsiveClass: !0,
			responsive: {
				0: {
					items: 2,
					margin: 20
				},
				600: {
					items: 3,
					margin: 30
				},
				1000: {
					items: 5,
					margin: 0
				}
			}
		})
	}

	function serviceSlide2() {
		var service2Slide = $(".service-2 .owl-carousel");
		service2Slide.children().each(function (index) {
			$(this).attr("data-position", index)
		}), service2Slide.owlCarousel({
			loop: !1,
			margin: 30,
			startPosition: "1",
			mouseDrag: !1,
			autoplay: !1,
			dots: !1,
			dragEndSpeed: 700,
			smartSpeed: 1e3,
			responsiveClass: !0,
			responsive: {
				0: {
					center: !0,
					items: 1,
					margin: 20
				},
				600: {
					items: 3,
					center: !0,
					margin: 30
				},
				1000: {
					items: 3,
					margin: 0,
					center: !0
				}
			}
		}), $(".nav-left-service-2").on("click", function () {
			service2Slide.trigger("prev.owl.carousel")
		}), $(".nav-right-service-2").on("click", function () {
			service2Slide.trigger("next.owl.carousel")
		}), $(document).on("click", ".service-2 .owl-item>div", function () {
			service2Slide.trigger("to.owl.carousel", $(this).data("position"))
		})
	}
	$(".navbar-toggler").on("click", function (a) {
		a.preventDefault(), $("header").addClass("fixed-header")
	}), $(".navbar-nav .nav-link").on("click", function () {
		var toggle;
		$(".navbar-toggler").is(":visible") && $(".navbar-collapse").collapse("hide")
	}), dropDown(), navbarScrol(), TweenMax.staggerFrom(".nav-link", 1, {
		y: -200
	}, .1), TweenMax.staggerFrom(".fading", 1, {
		y: 90,
		autoAlpha: 0,
		delay: 2
	}, .7), iconAnimation(), aboutSlider(), workSlder(), teamSlider(), testiSlider(), partnerSlider(), serviceSlide2(), $(".dropdown-top").on("click", function () {
		$(this).parent(".dropdown-faq").hasClass("open") ? ($(this).parent(".dropdown-faq").removeClass("open"), $(this).siblings(".dropdown-btm").slideUp(500)) : ($(".dropdown-faq").removeClass("open"), $(".dropdown-faq .dropdown-btm").slideUp(500), $(this).parent(".dropdown-faq").addClass("open"), $(this).siblings(".dropdown-btm").slideDown(500))
	}), $.scrollIt({
		upKey: 38,
		downKey: 40,
		easing: "linear",
		scrollTime: 600,
		activeClass: "active",
		onPageChange: null,
		topOffset: -100
	})
}(jQuery);

