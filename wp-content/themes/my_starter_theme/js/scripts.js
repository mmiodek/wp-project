
$(document).ready(function() {


	$("#mobileMenu").hide();

// ================= Mobile Menu Slide Out ========================

	$(".toggleMobile").click(function() {
		$(this).toggleClass("active");
		$("#mobileMenu").slideToggle(500);
	});

// ================== Slider =======================================	

	var slider = {
		el: {
			slider: $(".slide-holder"),
			oneSlide: $(".slide"),
			sliderNav: $(".slider-nav"),
			slideNavButton: $(".slider-nav > a")
		},

		timing: 800,
		slideWidth: 1349,


		changeActiveNav: function(el) {
			this.el.slideNavButton.removeClass("current-slider-nav");
			$(el).addClass("current-slider-nav");
		},

		autoslider: function() {
			var nav = this.el.sliderNav.children();
		  var navLength = nav.length;
			var i = 1;
			window.timer = setInterval(function() {			
				var slide = $(".slider-nav").find(".current-slider-nav").next();
		
			  	slide.trigger("click");
			  	if (i == navLength) {
			  	i = 0;
			  	slide = $(".slider-nav").children().first();		
			  	slide.trigger("click");
			  	}
			  	i += 1;
			}, 5000);
		},


		handleNavClick: function(event, el) {
			event.preventDefault();
			var slideNr = $(el).attr("href").split("-").pop();
			var position = slideNr -1;
			var currentSlide = "#slide-" + slideNr;
			var trans = -(position*this.slideWidth) + "px";
			var translate = "translate3d("+trans+", 0px, 0px)";
			var currentContent = $("#slider_content" + slideNr);
			var visibleContent = $(".slider_content_visible");

			this.el.oneSlide.removeClass("visible-slide");
			$(currentSlide).addClass("visible-slide");

			this.el.slider.css('transform', translate);
			this.el.slider.css('-webkit-transform', translate);

			visibleContent.removeClass("slider_content_visible");
			currentContent.addClass("slider_content_visible");


			slider.changeActiveNav(el);


		},

		bindUIEvents: function() {
			 this.el.slideNavButton.hover(function(){
		    	clearInterval(timer);
			 });

		    this.el.sliderNav.on("click", "a", function(event) {
		    	slider.handleNavClick(event, this);
		    });

		    this.autoslider();

		},

		init: function() {
    		this.bindUIEvents();
  		}
	}

	slider.init();

// ================== Hide mobile menu on resize ==============================

	$(window).on("resize", function() {
		if ($(this).width() > 500) {
			$("#mobileMenu").hide();
			$(".toggleMobile").removeClass("active");
		}
	});

// ================== Portfolio tags ==============================

	
	// init Isotope
	var $container = $('.portfolio-holder').isotope({
	  itemSelector: '.portfolio-item-wrapper',
    layoutMode: 'fitRows'
	});
	// filter items on button click
	$('#filters').on( 'click', 'ul li', function() {
	  var filterValue = $(this).attr('data-filter');
	  $container.isotope({ filter: filterValue });
	// set clicked filter as active
	var  span = $(this).find('span');
	$(this).parent().find('.active').removeClass('active');
	span.addClass('active');

	});
			
	
});
