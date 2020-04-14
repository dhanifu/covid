/*!
 * JS Custom - SKI
 * Last Update : Jul 28, 2018
 */
	
// ---> Addon & Additional Bootstrap

	// Center modal
	function centerModals(){
	  $('.modal').each(function(i){
		var $clone = $(this).clone().css('display', 'block').appendTo('body');
		var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
		top = top > 0 ? top : 0;
		$clone.remove();
		$(this).find('.modal-content').css("margin-top", top);
	  });
	}
	$('.modal').on('show.bs.modal', centerModals);
	$(window).on('resize', centerModals);
	
	
// ---> Bootstrap Accordion Mobile
	$(document).ready(function(){
	  var windowWidth = $(window).width();
	  if(windowWidth <= 767) //for iPad & smaller devices
		 $('.panel-collapse').removeClass('in')
		 
	});


	jQuery(document).on('click', '.dropdown-menu', function(e) {
	  e.stopPropagation()
	})


// ---> Megamenu
	$(document).ready(function() {
	 // executes when HTML-Document is loaded and DOM is ready

	// breakpoint and up  
	$(window).resize(function(){
		if ($(window).width() >= 980){	

	      // when you hover a toggle show its dropdown menu
	      $(".navbar .dropdown-toggle").hover(function () {
	         $(this).parent().toggleClass("show");
	         $(this).parent().find(".dropdown-menu").toggleClass("show"); 
	       });

	        // hide the menu when the mouse leaves the dropdown
	      $( ".navbar .dropdown-menu" ).mouseleave(function() {
	        $(this).removeClass("show");  
	      });
	  
			// do something here
		}	
	});  
	  
	  

	// document ready  
	});
	

// ---> Form Label Float

	$('.float-form input').on('blur', function(){
	  if( !$(this).val() == "" ){
		$(this).next().addClass('stay');
	  } else {
		$(this).next().removeClass('stay');
	  }
	});


// ---> Swiper

   	$(document).ready(function(){

   		var swiper = new Swiper('.popular-slider', {
	      slidesPerView: 3,
	      spaceBetween: 10,	  	         
	  	});

	  	var swiper = new Swiper('.popular-category', {
	      slidesPerView: 4,
	      spaceBetween: 10,	  
	      navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	      },
	      breakpoints: {
		    // when window width is >= 320px
		    767: {
		      slidesPerView: 1,
		      spaceBetween: 10
		    },
		    // when window width is >= 480px
		    991: {
		      slidesPerView: 2,
		      spaceBetween: 10
		    },
		    // when window width is >= 640px
		    1199: {
		      slidesPerView: 3,
		      spaceBetween: 10
		  	},
		  },	         
	  	});

	  	var swiper = new Swiper('.slider-main', {
	      slidesPerView: 1,
	      navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	      },
	      pagination: {
	        el: '.swiper-pagination',
	        dynamicBullets: true,
	        clickable: true,
	      },
	      autoplay: {
	        delay: 4000,
	        disableOnInteraction: false,
	      },
	  	});

	  	var swiper = new Swiper('.slider-block', {
	      slidesPerView: 1,
	      effect: 'fade',
	      pagination: {
	        el: '.swiper-pagination',
	        clickable: true,
	      },
	      autoplay: {
	        delay: 5000,
	        disableOnInteraction: false,
	      },
	  	});

	  	var swiper = new Swiper('.slider-hot', {
	      slidesPerView: 3,
	      spaceBetween: 10,	   
	      navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	      },    
	      autoplay: {
	        delay: 5000,
	        disableOnInteraction: false,
	      },
	      breakpoints: {
		    // when window width is >= 320px
		    767: {
		      slidesPerView: 1,
		      spaceBetween: 10
		    },
		    // when window width is >= 480px
		    991: {
		      slidesPerView: 2,
		      spaceBetween: 10
		    },
		    // when window width is >= 640px
		    1199: {
		      slidesPerView: 3,
		      spaceBetween: 10
		  	},
		  },
	  	});

	  	var swiper = new Swiper('.slider-special', {
	      slidesPerView: 5,
	      spaceBetween: 10,	   
	      navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	      },    
	      autoplay: {
	        delay: 7000,
	        disableOnInteraction: false,
	      },
	      breakpoints: {
		    // when window width is >= 320px
		    767: {
		      slidesPerView: 1,
		      spaceBetween: 10
		    },
		    // when window width is >= 480px
		    991: {
		      slidesPerView: 3,
		      spaceBetween: 10
		    },
		    // when window width is >= 640px
		    1199: {
		      slidesPerView: 4,
		      spaceBetween: 10
		  	},
		  },
	  	});
   	});

   	$(document).ready(function(){
		var galleryTop = new Swiper('.gallery-top', {
	      spaceBetween: 10,	      
	      navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	      },
	    });
		var galleryThumbs = new Swiper('.gallery-thumbs', {
	      spaceBetween: 10,
	      slidesPerView: 4,
	      centeredSlides: true,
	      slideToClickedSlide: true,
	    });	    
	    galleryThumbs.controller.control = galleryTop;
	    galleryTop.controller.control = galleryThumbs;
	});


// ---> Cart Qty
	$('.btn-number').click(function(e){
	    e.preventDefault();
	    
	    fieldName = $(this).attr('data-field');
	    type      = $(this).attr('data-type');
	    var input = $("input[name='"+fieldName+"']");
	    var currentVal = parseInt(input.val());
	    if (!isNaN(currentVal)) {
	        if(type == 'minus') {
	            
	            if(currentVal > input.attr('min')) {
	                input.val(currentVal - 1).change();
	            } 
	            if(parseInt(input.val()) == input.attr('min')) {
	                $(this).attr('disabled', true);
	            }

	        } else if(type == 'plus') {

	            if(currentVal < input.attr('max')) {
	                input.val(currentVal + 1).change();
	            }
	            if(parseInt(input.val()) == input.attr('max')) {
	                $(this).attr('disabled', true);
	            }

	        }
	    } else {
	        input.val(0);
	    }
	});
	$('.input-number').focusin(function(){
	   $(this).data('oldValue', $(this).val());
	});
	$('.input-number').change(function() {
	    
	    minValue =  parseInt($(this).attr('min'));
	    maxValue =  parseInt($(this).attr('max'));
	    valueCurrent = parseInt($(this).val());
	    
	    name = $(this).attr('name');
	    if(valueCurrent >= minValue) {
	        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
	    } else {
	        alert('Sorry, the minimum value was reached');
	        $(this).val($(this).data('oldValue'));
	    }
	    if(valueCurrent <= maxValue) {
	        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
	    } else {
	        alert('Sorry, the maximum value was reached');
	        $(this).val($(this).data('oldValue'));
	    }
	    
	    
	});
	$(".input-number").keydown(function (e) {
	        // Allow: backspace, delete, tab, escape, enter and .
	        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
	             // Allow: Ctrl+A
	            (e.keyCode == 65 && e.ctrlKey === true) || 
	             // Allow: home, end, left, right
	            (e.keyCode >= 35 && e.keyCode <= 39)) {
	                 // let it happen, don't do anything
	                 return;
	        }
	        // Ensure that it is a number and stop the keypress
	        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
	            e.preventDefault();
	        }
	    });
      

	
// ---> Smooth anchor
	$(function() {
	  $('a.smooth[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html, body').animate({
			  scrollTop: target.offset().top
			}, 1500);
			return false;
		  }
		}
	  });
	});


// ---> Modal Image Pop
	$(function() {
		$('.pop').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imagemodal').modal('show');   
		});		
	});

// ---> Countdown
	// Set the date we're counting down to
	var countDownDate = new Date("Apr 30, 2019 12:00:00").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

	  // Get todays date and time
	  var now = new Date().getTime();

	  // Find the distance between now and the count down date
	  var distance = countDownDate - now;

	  // Time calculations for days, hours, minutes and seconds
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	  // Display the result in the element with id="demo"
	  // document.getElementById("counter").innerHTML = (days + " : " + hours + " : " + minutes + " : " + seconds + "");

	  // If the count down is finished, write some text 
	  if (distance < 0) {
	    clearInterval(x);
	    // document.getElementById("demo").innerHTML = "EXPIRED";
	  }
	}, 1000);


// ---> Fluid youtube By Chris Coyier & tweaked by Mathias Bynens

	// By Chris Coyier & tweaked by Mathias Bynens

	$(function() {
	
		// Find all YouTube videos
		var $allVideos = $("iframe[src^='http://www.youtube.com']"),
	
			// The element that is fluid width
			$fluidEl = $(".video-fluid-wrapper");
	
		// Figure out and save aspect ratio for each video
		$allVideos.each(function() {
	
			$(this)
				.data('aspectRatio', this.height / this.width)
				
				// and remove the hard coded width/height
				.removeAttr('height')
				.removeAttr('width');
	
		});
	
		// When the window is resized
		// (You'll probably want to debounce this)
		$(window).resize(function() {
	
			var newWidth = $fluidEl.width();
			
			// Resize all videos according to their own aspect ratio
			$allVideos.each(function() {
	
				var $el = $(this);
				$el
					.width(newWidth)
					.height(newWidth * $el.data('aspectRatio'));
	
			});
	
		// Kick off one resize to fix all videos on page load
		}).resize();
	
	});
	

