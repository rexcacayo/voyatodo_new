/* ----------------- Start JS Document ----------------- */
var months			= ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
	days			= ['Lun','Mar','Mie','Jue','Vie','Sab','Dom'],
	errorMessage	= 'No se cargaron los eventos...';

var comision;
var idproduct = '';
var baseurl = window.location.protocol +"//" + window.location.host + '/voyatodo/web/';

// Page Loader
$(window).load(function () {
    "use strict";    
	$('#loader').fadeOut();
});
$(document).ready(function ($) {
	"use strict";	
	////	Hidder Header	
	var headerEle = function () {
		var $headerHeight = $('header').height();
		$('.hidden-header').css({ 'height' : $headerHeight  + "px" });
	};

	function placeRight(topAlign, parent, child) {
		var topAlignElement = $(topAlign)[0];
		var parentElement = $(parent)[0];
		var childElement = $(child)[0];

		$(parentElement).click(function() {
			if (childElement.style.visibility == "hidden" ||
					childElement.style.visibility == "") {
				$(".menu-modal").attr("style","visibility:hidden");
				$(".menu-modal").removeClass('animated fadeOutLeft');
				$(".menu-modal").addClass('animated fadeInLeft');
				right(topAlignElement, parentElement, childElement);
				//$(child).fadeOut(3000);	
				childElement.style.visibility = "visible";
			} else {

				$(".menu-modal").removeClass('animated fadeInLeft');
					$(".menu-modal").addClass('animated fadeOutLeft');
				setTimeout(function(){
					childElement.style.display = "none";
					childElement.style.visibility = "hidden";
				}, 2000);

			}
		});

		function right(topAlign, parent, child) {
			var rectTop = $(topAlign).offset().top;
			var rectLeft = $(parent).offset().left;

			child.style.top = rectTop + 'px';
			child.style.left = rectLeft + $(parent).width() + 30 + 'px';
		}
	}

	placeRight(".dashboard-row", "#dashboard-summary", ".summary-modal");
	placeRight(".dashboard-row", "#dashboard-information", ".information-modal");
	placeRight(".dashboard-row", "#dashboard-sale", ".sale-modal");
	placeRight(".dashboard-row", "#dashboard-bank", ".bank-modal");
	placeRight(".dashboard-row", "#dashboard-share", ".share-modal");
	placeRight(".dashboard-row", "#dashboard-publicity", ".publicity-modal");

    $('.btn_new_product').click(function(){
		$(".information-modal").removeClass('animated fadeInLeft');
    	$(".information-modal").addClass("animated fadeOutLeft");
     	setTimeout(function(){
		    $(".information-modal").addClass("hidden");
		    $.ajax({
		    	type: 'post',
		        data: {
		        },
				url: baseurl + 'advertiser/getcomision',
		    	success: function(data){
	    			comision = data;
	    			$(".product-comision").val(Number(comision).toFixed(1)+"%");
		    	}
			});
			right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".information-product")[0]);
			$(".information-product").removeClass("animated fadeOutLeft");
			$(".information-product").addClass('animated fadeInLeft');
			$(".information-product").removeClass('hidden');
	    	$(".information-product").css('visibility','visible');
		}, 1000);
    });

    $('.btn_preview').click(function(){
		$(".information-product").removeClass('animated fadeInLeft');
		$(".information-product").addClass("animated fadeOutLeft");
	 	setTimeout(function(){
		    $(".information-product").addClass("hidden");
			right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".information-product")[0]);
			$(".information-modal").removeClass("animated fadeOutLeft");
			$(".information-modal").addClass('animated fadeInLeft');
			$(".information-modal").removeClass('hidden');
	    	$(".information-modal").css('visibility','visible');
		}, 1000);
	});

    $('.create_acount').click(function(){
    	$(".edit_account").removeClass('animated fadeInLeft');
    	$(".edit_account").addClass("animated fadeOutLeft");
     	setTimeout(function(){
		    $(".edit_account").addClass("hidden");
			right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".bank_acount")[0]);
			$(".bank_acount").removeClass("animated fadeOutLeft");
			$(".bank_acount").addClass('animated fadeInLeft');
	    	$(".bank_acount").removeClass('hidden');
	    	$(".bank_acount").css('visibility','visible');
		}, 1000);
    });

    $('.update_acount').click(function(){
    	$(".edit_account").removeClass('animated fadeInLeft');
    	$(".edit_account").addClass("animated fadeOutLeft");
     	setTimeout(function(){
		    $(".edit_account").addClass("hidden");
			right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".bank_acount")[0]);
			$(".bank_acount").removeClass("animated fadeOutLeft");
			$(".bank_acount").addClass('animated fadeInLeft');
	    	$(".bank_acount").removeClass('hidden');
	    	$(".bank_acount").css('visibility','visible');
		}, 1000);
    });

    $('.btn_delete_bank').click(function(){
    	$(".edit_account").removeClass('animated fadeInLeft');
    	$(".edit_account").addClass("animated fadeOutLeft");
     	setTimeout(function(){
		    $(".edit_account").addClass("hidden");
			right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".bank_acount")[0]);
			$(".bank_acount").removeClass("animated fadeOutLeft");
			$(".bank_acount").addClass('animated fadeInLeft');
	    	$(".bank_acount").removeClass('hidden');
	    	$(".bank_acount").css('visibility','visible');
		}, 1000);
    });

    $('.btn_target').click(function(){
    	$(".bank_acount").removeClass('animated fadeInLeft');
    	$(".bank_acount").addClass("animated fadeOutLeft");
     	setTimeout(function(){
		    $(".bank_acount").addClass('hidden');
		    $(".create_target").removeClass("hidden");
		    $(".update_target").addClass("hidden");
			right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".edit_target")[0]);
			$(".edit_target").removeClass('animated fadeOutLeft');
			$(".edit_target").addClass('animated fadeInLeft');
			$(".edit_target").removeClass('hidden');
	    	$(".edit_target").css('visibility','visible');
		}, 1000);
    });

    $('.create_target').click(function(){
    	$(".edit_target").removeClass('animated fadeInLeft');
    	$(".edit_target").addClass("animated fadeOutLeft");
     	setTimeout(function(){
		    $(".edit_target").addClass("hidden");
			right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".bank_acount")[0]);
			$(".bank_acount").removeClass("animated fadeOutLeft");
			$(".bank_acount").addClass('animated fadeInLeft');
			$(".bank_acount").removeClass('hidden');
	    	$(".bank_acount").css('visibility','visible');
		}, 1000);
    }); 

    $('.update_target').click(function(){
    	$(".edit_target").removeClass('animated fadeInLeft');
    	$(".edit_target").addClass("animated fadeOutLeft");
     	setTimeout(function(){
		    $(".edit_target").addClass("hidden");
			right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".bank_acount")[0]);
			$(".bank_acount").removeClass("animated fadeOutLeft");
			$(".bank_acount").addClass('animated fadeInLeft');
			$(".bank_acount").removeClass('hidden');
	    	$(".bank_acount").css('visibility','visible');
		}, 1000);
    }); 

	$('.btn_publicity').click(function(){
		$(".publicity_principal").removeClass('animated fadeInLeft');
    	$(".publicity_principal").addClass("animated fadeOutLeft");
     	setTimeout(function(){
		    $(".publicity_principal").addClass("hidden");
		    $.ajax({
		    	type: 'post',
		        data: {
		        },
				url: baseurl + 'advertiser/getcomisionpublicity',
		    	success: function(data){
	    			$(".advertising_comision").val(data);
	    			$(".advertising_comision").attr('readonly','true');
		    	}
			});
			right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".create_publicity")[0]);
			$(".create_publicity").removeClass("animated fadeOutLeft");
			$(".create_publicity").addClass('animated fadeInLeft');
			$(".create_publicity").removeClass('hidden');
	    	$(".create_publicity").css('visibility','visible');
		}, 1000);
    }); 

    $('.btn_save_publicity').click(function(){
    	$(".create_publicity").removeClass('animated fadeInLeft');
    	$(".create_publicity").addClass("animated fadeOutLeft");
     	setTimeout(function(){
		    $(".create_publicity").addClass("hidden");
			right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".publicity_principal")[0]);
			$(".publicity_principal").removeClass("animated fadeOutLeft");
			$(".publicity_principal").addClass('animated fadeInLeft');
			$(".publicity_principal").removeClass("hidden");
	    	$(".publicity_principal").css('visibility','visible');
		}, 1000);
    });

	function menuable(parent, child) {
		var childElement = $(child)[0];
		var parentElement = $(parent)[0];

		$(parentElement).keypress(function() {
			placeDown(parentElement, childElement);
		});

		$(parentElement).focusin(function() {
			placeDown(parentElement, childElement);
		});

		$(childElement).focusout(function() {
			childElement.style.visibility = "hidden";
		});

		$(child + " li a").click(function() {
			childElement.style.visibility = "hidden";
			console.log("Clicked");
		});

		$(parent + " + button").click(function() {
			if (childElement.style.visibility == "") {
				placeDown(parentElement, childElement);
			} else if (childElement.style.visibility == "visible") {
				childElement.style.visibility = "hidden";
			} else if (childElement.style.visibility == "hidden") {
				childElement.style.visibility = "visible";
			}
		});

		function placeDown(parent, element) {
			var rect = $(parent).offset();

			element.style.top = rect.top + 15 + $(parent).height() + 'px';
			element.style.left = rect.left + 'px';
			element.style.visibility = "visible";
		}
	}

	menuable("#search-categories", ".categories-choice");
	menuable("#filter-by", ".filter-by-choice");

	$(window).load(function () {
	    headerEle();
	});
	
	$(window).resize(function () {
	    headerEle();
	});
	
    
    /*---------------------------------------------------*/
    /* Progress Bar
    /*---------------------------------------------------*/    
    $('.skill-shortcode').appear(function() {
  		$('.progress').each(function(){ 
    		$('.progress-bar').css('width',  function(){ 
    			return ($(this).attr('data-percentage')+'%')});
  		});
	},{accY: -100});	
	
	
    /*--------------------------------------------------*/
    /* Counter
    /*--------------------------------------------------*/   
        
    $('.timer').countTo();
    $('.counter-item').appear(function() {
        $('.timer').countTo();
    },{
    	accY: -100
    });    
    
	
	/*----------------------------------------------------*/
	/*	Nice-Scroll
	/*----------------------------------------------------*/
	
	$("html").niceScroll({
		scrollspeed: 100,
		mousescrollstep: 38,
		cursorwidth: 5,
		cursorborder: 0,
		cursorcolor: '#333',
		autohidemode: true,
		zindex: 999999999,
		horizrailenabled: false,
		cursorborderradius: 0,
	});
		
	/*----------------------------------------------------*/
	/*	Nav Menu & Search
	/*----------------------------------------------------*/
	
	$(".nav > li:has(ul)").addClass("drop");
	$(".nav > li.drop > ul").addClass("dropdown");
	$(".nav > li.drop > ul.dropdown ul").addClass("sup-dropdown");
	
	$('.show-search').click(function() {
		$('.search-form').fadeIn(300);
		$('.search-form input').focus();
	});
	$('.search-form input').blur(function() {
		$('.search-form').fadeOut(300);
	});
				
	/*----------------------------------------------------*/
	/*	Back Top Link
	/*----------------------------------------------------*/
	
    var offset = 200;
    var duration = 500;
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
            $('.back-to-top').fadeIn(400);
        } else {
            $('.back-to-top').fadeOut(400);
        }
    });
    $('.back-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 600);
        return false;
    })
		
	/*----------------------------------------------------*/
	/*	Sliders & Carousel
	/*----------------------------------------------------*/
	
	////------- Touch Slider
	var time = 3.0,
		$progressBar,
		$bar,
		$elem,
		isPause,
		tick,
		percentTime;
	$('.touch-slider').each(function(){
		var owl = jQuery(this),
			sliderNav = $(this).attr('data-slider-navigation'),
			sliderPag = $(this).attr('data-slider-pagination'),
			sliderProgressBar = $(this).attr('data-slider-progress-bar');
			
		if ( sliderNav == 'false' || sliderNav == '0' ) {
			var returnSliderNav = false
		}else {
			var returnSliderNav = true
		}
		
		if ( sliderPag == 'true' || sliderPag == '1' ) {
			var returnSliderPag = true
		}else {
			var returnSliderPag = false
		}
		
		if ( sliderProgressBar == 'true' || sliderProgressBar == '1' ) {
			var returnSliderProgressBar = progressBar
			var returnAutoPlay = false
		}else {
			var returnSliderProgressBar = false
			var returnAutoPlay = true
		}
		
		owl.owlCarousel({
			navigation : returnSliderNav,
			pagination: returnSliderPag,
			slideSpeed : 400,
			paginationSpeed : 400,
			lazyLoad : true,
			singleItem: true,
			autoHeight : true,
			autoPlay: returnAutoPlay,
			stopOnHover: returnAutoPlay,
			transitionStyle : "fade",
			afterInit : returnSliderProgressBar,
			startDragging : pauseOnDragging
		});
		
	});

    function progressBar(elem){
		$elem = elem;
		buildProgressBar();
		start();
    }
	
    function buildProgressBar(){
		$progressBar = $("<div>",{
			id:"progressBar"
		});
		$bar = $("<div>",{
			id:"bar"
		});
		$progressBar.append($bar).prependTo($elem);
    }
	
    function pauseOnDragging(){
      isPause = true;
    }
	
	////------- Projects Carousel
	$(".projects-carousel").owlCarousel({
		navigation : true,
		pagination: false,
		slideSpeed : 400,
		stopOnHover: true,
    	autoPlay: 3000,
    	items : 4,
    	itemsDesktopSmall : [900,3],
		itemsTablet: [600,2],
		itemsMobile : [479, 1]
	});
	
	////------- Testimonials Carousel
	$(".testimonials-carousel").owlCarousel({
		navigation : true,
		pagination: false,
		slideSpeed : 2500,
		stopOnHover: true,
    	autoPlay: 3000,
    	singleItem:true,
		autoHeight : true,
		transitionStyle : "fade"
	});
		
	////------- Custom Carousel
	$('.custom-carousel').each(function(){
		var owl = jQuery(this),
			itemsNum = $(this).attr('data-appeared-items'),
			sliderNavigation = $(this).attr('data-navigation');
			
		if ( sliderNavigation == 'false' || sliderNavigation == '0' ) {
			var returnSliderNavigation = false
		}else {
			var returnSliderNavigation = true
		}
		if( itemsNum == 1) {
			var deskitemsNum = 1;
			var desksmallitemsNum = 1;
			var tabletitemsNum = 1;
		} 
		else if (itemsNum >= 2 && itemsNum < 4) {
			var deskitemsNum = itemsNum;
			var desksmallitemsNum = itemsNum - 1;
			var tabletitemsNum = itemsNum - 1;
		} 
		else if (itemsNum >= 4 && itemsNum < 8) {
			var deskitemsNum = itemsNum -1;
			var desksmallitemsNum = itemsNum - 2;
			var tabletitemsNum = itemsNum - 3;
		} 
		else {
			var deskitemsNum = itemsNum -3;
			var desksmallitemsNum = itemsNum - 6;
			var tabletitemsNum = itemsNum - 8;
		}
		owl.owlCarousel({
			slideSpeed : 300,
			stopOnHover: true,
			autoPlay: false,
			navigation : returnSliderNavigation,
			pagination: false,
			lazyLoad : true,
			items : itemsNum,
			itemsDesktop : [1000,deskitemsNum],
			itemsDesktopSmall : [900,desksmallitemsNum],
			itemsTablet: [600,tabletitemsNum],
			itemsMobile : false,
			transitionStyle : "goDown",
		});
	});
	
    ////------- Testimonials Carousel
	$(".fullwidth-projects-carousel").owlCarousel({
		navigation : false,
		pagination: false,
		slideSpeed : 400,
		stopOnHover: true,
    	autoPlay: 3000,
    	items : 5,
    	itemsDesktopSmall : [900,3],
		itemsTablet: [600,2],
		itemsMobile : [479, 1]
	});
	
	
	/*----------------------------------------------------*/
	/*	Tabs
	/*----------------------------------------------------*/
	
	$('#myTab a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	})
	
	/*----------------------------------------------------*/
	/*	Css3 Transition
	/*----------------------------------------------------*/
	
	$('*').each(function(){
		if($(this).attr('data-animation')) {
			var $animationName = $(this).attr('data-animation'),
				$animationDelay = "delay-"+$(this).attr('data-animation-delay');
			$(this).appear(function() {
				$(this).addClass('animated').addClass($animationName);
				$(this).addClass('animated').addClass($animationDelay);
			});
		}
	});
	
	/*----------------------------------------------------*/
	/*	Pie Charts
	/*----------------------------------------------------*/
	
	var pieChartClass = 'pieChart',
        pieChartLoadedClass = 'pie-chart-loaded';
		
	function initPieCharts() {
		var chart = $('.' + pieChartClass);
		chart.each(function() {
			$(this).appear(function() {
				var $this = $(this),
					chartBarColor = ($this.data('bar-color')) ? $this.data('bar-color') : "#F54F36",
					chartBarWidth = ($this.data('bar-width')) ? ($this.data('bar-width')) : 150
				if( !$this.hasClass(pieChartLoadedClass) ) {
					$this.easyPieChart({
						animate: 2000,
						size: chartBarWidth,
						lineWidth: 2,
						scaleColor: false,
						trackColor: "#eee",
						barColor: chartBarColor,
					}).addClass(pieChartLoadedClass);
				}
			});
		});
	}
	initPieCharts();
		
	/*----------------------------------------------------*/
	/*	Animation Progress Bars
	/*----------------------------------------------------*/
	
	$("[data-progress-animation]").each(function() {
		
		var $this = $(this);
		
		$this.appear(function() {
			
			var delay = ($this.attr("data-appear-animation-delay") ? $this.attr("data-appear-animation-delay") : 1);
			
			if(delay > 1) $this.css("animation-delay", delay + "ms");
			
			setTimeout(function() { $this.animate({width: $this.attr("data-progress-animation")}, 800);}, delay);

		}, {accX: 0, accY: -50});

	});
	
	/*----------------------------------------------------*/
	/*	Milestone Counter
	/*----------------------------------------------------*/
	
	jQuery('.milestone-block').each(function() {
		jQuery(this).appear(function() {
			var $endNum = parseInt(jQuery(this).find('.milestone-number').text());
			jQuery(this).find('.milestone-number').countTo({
				from: 0,
				to: $endNum,
				speed: 4000,
				refreshInterval: 60,
			});
		},{accX: 0, accY: 0});
	});
	
	/*----------------------------------------------------*/
	/*	Nivo Lightbox
	/*----------------------------------------------------*/
	
	$('.lightbox').nivoLightbox({
		effect: 'fadeScale',
		keyboardNav: true,
		errorMessage: 'The requested content cannot be loaded. Please try again later.'
	});
	
	/*----------------------------------------------------*/
	/*	Change Slider Nav Icons
	/*----------------------------------------------------*/
	
	$('.touch-slider').find('.owl-prev').html('<i class="fa fa-angle-left"></i>');
	$('.touch-slider').find('.owl-next').html('<i class="fa fa-angle-right"></i>');
	$('.touch-carousel, .testimonials-carousel').find('.owl-prev').html('<i class="fa fa-angle-left"></i>');
	$('.touch-carousel, .testimonials-carousel').find('.owl-next').html('<i class="fa fa-angle-right"></i>');
	$('.read-more').append('<i class="fa fa-angle-right"></i>');
	
	/*----------------------------------------------------*/
	/*	Tooltips & Fit Vids & Parallax & Text Animations
	/*----------------------------------------------------*/
	
	$("body").fitVids();
	
	$('.itl-tooltip').tooltip();
	
	$('.bg-parallax').each(function() {
		$(this).parallax("30%", 0.2);
	});
	
	$('.tlt').textillate({
		loop: true,
		in: {
			effect: 'fadeInUp',
			delayScale: 2,
			delay: 50,
			sync: false,
			shuffle: false,
			reverse: true,
		},
		out: {
			effect: 'fadeOutUp',
			delayScale: 2,
			delay: 50,
			sync: false,
			shuffle: false,
			reverse: true,
		},
	});
	
	/*----------------------------------------------------*/
	/*	Sticky Header
	/*----------------------------------------------------*/
	
	(function() {
		//
//		var docElem = document.documentElement,
//			didScroll = false,
//			changeHeaderOn = 100;
//			document.querySelector( 'header' );
//			
		//function init() {
//			window.addEventListener( 'scroll', function() {
//				if( !didScroll ) {
//					didScroll = true;
//					setTimeout( scrollPage, 250 );
//				}
//			}, false );
//		}
//		
		//function scrollPage() {
//			var sy = scrollY();
//			if ( sy >= changeHeaderOn ) {
//				$('.top-bar').slideUp(300);
//				$("header").addClass("fixed-header");
//				$('.navbar-brand').css({ 'padding-top' : 19 + "px", 'padding-bottom' : 19 + "px" });
//				
//				if (/iPhone|iPod|BlackBerry/i.test(navigator.userAgent) || $(window).width() < 479 ){
//					$('.navbar-default .navbar-nav > li > a').css({ 'padding-top' : 0 + "px", 'padding-bottom' : 0 + "px" })
//				}else{
//					$('.navbar-default .navbar-nav > li > a').css({ 'padding-top' : 20 + "px", 'padding-bottom' : 20 + "px" })
//					$('.search-side').css({ 'margin-top' : -7 + "px" });
//				};
//				
//			}
//			else {
//				$('.top-bar').slideDown(300);
//				$("header").removeClass("fixed-header");
//				$('.navbar-brand').css({ 'padding-top' : 27 + "px", 'padding-bottom' : 27 + "px" });
//				
//				if (/iPhone|iPod|BlackBerry/i.test(navigator.userAgent) || $(window).width() < 479 ){
//					$('.navbar-default .navbar-nav > li > a').css({ 'padding-top' : 0 + "px", 'padding-bottom' : 0 + "px" })
//				}else{
//					$('.navbar-default .navbar-nav > li > a').css({ 'padding-top' : 28 + "px", 'padding-bottom' : 28 + "px" })
//					$('.search-side').css({ 'margin-top' : 0  + "px" });
//				};
//				
//			}
//			didScroll = false;
//		}
		
	//	function scrollY() {
//			return window.pageYOffset || docElem.scrollTop;
//		}
//		
//		init();
//		
		
		
	})();
});


/*----------------------------------------------------*/
/*	Portfolio Isotope
/*----------------------------------------------------*/

jQuery(window).load(function(){
	
	
	$('.portfolio-filter ul a').click(function(){
		var selector = $(this).attr('data-filter');
		$container.isotope({
			filter: selector,
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false,
			}
		});
	  return false;
	});

	var $optionSets = $('.portfolio-filter ul'),
	    $optionLinks = $optionSets.find('a');
	$optionLinks.click(function(){
		var $this = $(this);
		if ( $this.hasClass('selected') ) { return false; }
		var $optionSet = $this.parents('.portfolio-filter ul');
		$optionSet.find('.selected').removeClass('selected');
		$this.addClass('selected'); 
	});
	
});
/* ----------------- End JS Document ----------------- */




// Styles Switcher JS
function setActiveStyleSheet(title) {
  var i, a, main;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
      a.disabled = true;
      if(a.getAttribute("title") == title) a.disabled = false;
    }
  }
}

function getActiveStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled) return a.getAttribute("title");
  }
  return null;
}

function getPreferredStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1
       && a.getAttribute("rel").indexOf("alt") == -1
       && a.getAttribute("title")
       ) return a.getAttribute("title");
  }
  return null;
}

function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}

window.onload = function(e) {
  var cookie = readCookie("style");
  var title = cookie ? cookie : getPreferredStyleSheet();
  setActiveStyleSheet(title);
}

window.onunload = function(e) {
  var title = getActiveStyleSheet();
  createCookie("style", title, 365);
}

var cookie = readCookie("style");
var title = cookie ? cookie : getPreferredStyleSheet();
setActiveStyleSheet(title);



$(document).ready(function(){

	var normalize = (function() {
	var from = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç", 
	    to   = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc",
	    mapping = {};
	for(var i = 0, j = from.length; i < j; i++ )
	    mapping[ from.charAt( i ) ] = to.charAt( i );
	return function( str ) {
	    var ret = [];
	    for( var i = 0, j = str.length; i < j; i++ ) {
	        var c = str.charAt( i );
	        if( mapping.hasOwnProperty( str.charAt( i ) ) )
	            ret.push( mapping[ c ] );
            else
	            ret.push( c );
	    }      
	    return ret.join( '' ).replace( /[^-A-Za-z0-9]+/g, '-' ).toLowerCase();
	}
	})();
	
	// Styles Switcher
	$(document).ready(function(){
		$('.open-switcher').click(function(){
			if($(this).hasClass('show-switcher')) {
				$('.switcher-box').css({'left': 0});
				$('.open-switcher').removeClass('show-switcher');
				$('.open-switcher').addClass('hide-switcher');
			}else if(jQuery(this).hasClass('hide-switcher')) {
				$('.switcher-box').css({'left': '-212px'});
				$('.open-switcher').removeClass('hide-switcher');
				$('.open-switcher').addClass('show-switcher');
			}
		});
	});
	
	//Top Bar Switcher
	$(".topbar-style").change(function(){
		if( $(this).val() == 1){
			$(".top-bar").removeClass("dark-bar"),
			$(".top-bar").removeClass("color-bar"),
			$(window).resize();
		} else if( $(this).val() == 2){
			$(".top-bar").removeClass("color-bar"),
			$(".top-bar").addClass("dark-bar"),
			$(window).resize();
		} else if( $(this).val() == 3){
			$(".top-bar").removeClass("dark-bar"),
			$(".top-bar").addClass("color-bar"),
			$(window).resize();
		}
	});
	
	//Layout Switcher
	$(".layout-style").change(function(){
		if( $(this).val() == 1){
			$("#container").removeClass("boxed-page"),
			$(window).resize();
		} else{
			$("#container").addClass("boxed-page"),
			$(window).resize();
		}
	});
	
	//Background Switcher
	$('.switcher-box .bg-list li a').click(function() {
		var current = $('.switcher-box select[id=layout-style]').find('option:selected').val();
		if(current == '2') {
			var bg = $(this).css("backgroundImage");
			$("body").css("backgroundImage",bg);
		} else {
			alert('Please select boxed layout');
		}
	});

	$(".product-name").keyup(function() { 
		if($(this).val() == ''){
			$(".txt_name").html('En esta parte el nombre de tu Producto o Servicio');
			$('#cont_name').html('0/80');
		}
		else{
	    	$(".txt_name").html($(this).val());
	    	var url = $(this).val();
	    	$(".txt_url").val(normalize(url));
	    	$("#txt_url").val(baseurl+'producto/v/'+normalize(url));
	    	$("#cont_name").html($(this).val().length+'/80');  
		}
	});
	$(".product-review").keyup(function() { 
		if($(this).val() == ''){
			$(".txt_review").html('En esta parte el resumen de tu Producto o Servicio');
			$('#cont_review').html('0/140');
		}
		else{
	    	$(".txt_review").html($(this).val()); 
	    	$("#cont_review").html($(this).val().length+'/140'); 
		}
	});
	$(".text-description").keyup(function() { 
		if($(this).val() == '')
			$(".txt_description").html('En esta parte la descripción de tu Producto o Servicio');
		else
	    	$(".txt_description").html($(this).val()); 
	});
	$(".text-terms").keyup(function() { 
		if($(this).val() == '')
			$(".txt_terms").html('En esta parte los términos y condiciones de tu Producto o Servicio');
		else
	    	$(".txt_terms").html($(this).val()); 
	});
	$(".product-value").keyup(function() { 
		if($(this).val() == ''){
			$(".price").html('Precio de tu producto');
			$(".product-pay-user").val('');
		}
		else{
			var porcentain = $(this).val()-($(this).val()*(comision/100));
        	$(".product-pay-user").val(porcentain);
	    	$(".price").html(Moneda(""+porcentain)); 
		}
	});
	$(".product-pay-user").keyup(function() { 
		if($(this).val() == ''){
			$(".price").html('Precio de tu producto');
			$(".product-value").val('');
		}
		else{
			var porcentain = parseInt($(this).val())+parseInt(($(this).val()*(comision/100)));
        	$(".product-value").val(porcentain);
	    	$(".price").html(Moneda(""+$(".product-value").val())); 
		}
	});
	$(".out_limit").change( function() {
	    if( this.checked ) {
			$('.product-qty').attr('readonly','true');
			$('.product-qty').val('');  
	    }
	    else
	    	$(".product-qty").removeAttr('readonly');  
	});
	$('.product-qty').keyup( function() {
	    if($(this).val() == '')
			$('.qty_product').html('<select class="form-control"><option>CANTIDAD</option></select>');
		else{
			var items = '<option>0</option>';
			var qty = Number($(this).val());
			for(var i=0; i<qty; i++)
				items += " <option>"+(i+1)+"</option>";
			$('.qty_product').html('<select class="form-control">'+items+'</select>');
		}  
	});

	/***** Galeria de imagenes ****/
    $(".upload-img").change(function(event) {
    	$(".galeria").removeClass("hidden");
    	cont = 0;
    	$('.divli').html(""); 
		$('.divimg').html("");
		$('.tumbnails-content').html("");
      	$.each(event.target.files, function(index, file) {
	        var reader = new FileReader();
	        cont++;
	        cont2 = null;
	        var divli = '';
	        var div = '';
	        if(cont <= 3){
		        reader.onload = function(event) {
		        	object = {};
					object.filename = file.name;
					object.data = event.target.result;
					if(cont2 == null){
						cont2= 1;
						divli+='<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
						div+='<div class="item active"><img src="'+object.data+'" alt="galery_event" style="width: 100%;height: 100%;"></div>';
					}
					else{
						divli+='<li data-target="#carousel-example-generic" data-slide-to="'+cont2+'"></li>';
						div+='<div class="item"><img src="'+object.data+'" alt="galery_event" style="width: 100%;height: 100%;"></div>';
						cont2++;
					}
					var tumb = '<div class="item col-lg-4 col-sm-4 col-md-4 col-xs-4 top20 tumb' + cont2 + '">';
		            tumb += '<div class="product"><div class="image"><div class="quickview">';
		            tumb += '<div class="centro"><i class="fa fa-trash-o fa-lg trash delete_tumb" data-number="' + cont2 + '">';
		            tumb += '</i></div>';
		            tumb += '</div><center><img src="' + object.data + '" class="imgtrash"></center></div></div></div>';
		            $(".tumbnails-content").append(tumb);
					$('.divli').append(divli); 
					$('.divimg').append(div);
					$('.carousel').carousel();
	        	};  
	        	reader.readAsDataURL(file);
			}
    	});
    });
	/***** Galeria de imagenes ****/

    /************ Imagenes de menu ***********/
    $('.img_click').on("click", function() {
		var name1 = $(this).attr('name');
		$(".img_click").each(function(){
			var name = $(this).attr('name');
			$('.img_'+name).attr('src', baseurl+"/images/"+name+"gray.png");
		});
		$('.img_'+name1).attr('src', baseurl+"/images/"+name1+"blue.png")
    });

	/************ Imagenes de menu ***********/

});

/**
 * Slick Nav 
 */

$('.wpb-mobile-menu').slicknav({
  prependTo: '.navbar-header',
  parentTag: 'margo',
  allowParentLinks: true,
  duplicate: false,
  label: '',
  closedSymbol: '<i class="fa fa-angle-right"></i>',
  openedSymbol: '<i class="fa fa-angle-down"></i>',
});

function right_(topAlign, parent, child) {
	var rectTop = $(topAlign).offset().top;
	var rectLeft = $(parent).offset().left;
	child.style.top = rectTop + 'px';
	child.style.left = rectLeft + $(parent).width() + 30 + 'px';
}

function Moneda(entrada){
	var num = entrada.replace(/\./g,"");
	if(!isNaN(num)){
		num = num.toString().split("").reverse().join("").replace(/(?=\d*\.?)(\d{3})/g,"$1.");
		num = num.split("").reverse().join("").replace(/^[\.]/,"");
		entrada = num;
	}
	else
		entrada = input.value.replace(/[^\d\.]*/g,"");
	return entrada;
}

/********** Todo lo de los bancos *******/

$(document).on('click','.btn_pay',function(){
	$(".bank_acount").removeClass('animated fadeInLeft');
 	$(".bank_acount").addClass("animated fadeOutLeft");
 	setTimeout(function(){
     	$(".bank_acount").addClass('hidden');
     	$(".create_acount").removeClass('hidden');
		$(".update_acount").addClass('hidden');		
		right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".edit_account")[0]);
		$(".create_acount").removeClass('hidden');
		$(".edit_account").removeClass("animated fadeOutLeft");
		$(".edit_account").addClass('animated fadeInLeft');
		$(".edit_account").removeClass('hidden');
    	$(".edit_account").css('visibility','visible');
	}, 1000);
}); 


$(document).on('click','.create_target',function(){
	var id="";
	$.ajax({
    	type: 'post',
        data: {
        	creditcard_titularname: $(".creditcard-name").val(),
        	creditcard_numbercard: $(".creditcard-number").val(),
        	creditcard_type: $(".creditcard-type").val(),
        },
		url: baseurl + 'advertiser/createcredit',
    	success: function(data){
    		if(data != 0){
    			$(".messagec").addClass("hidden");
        		var cred = JSON.parse(data);
        		var size = cred.creditcard_numbercard.length;
        		var div = '<div class="col-md-8 div_banco top div_update_card" name="'+cred.pkcreditcard+'" id="'+
        			cred.pkcreditcard+'"><label class="lbl_bnc">'+cred.creditcard_type+'<br/><span class="ttl_blue">##########'+
        			cred.creditcard_numbercard.substring(size-4)+'</span></label></div>';
        		$("#new").append(div);
        		$("#new1").append(div);
				$(".creditcard-name").val("");
				$(".creditcard-number").val("");
				$(".creditcard-type").val("");
    		}
    		else{
    			$(".messagec").removeClass("hidden");
	    	}
    	}
	});
});

$(document).on('click','.div_update_card',function(){
	$(".bank_acount").removeClass('animated fadeInLeft');
	$(".bank_acount").addClass("animated fadeOutLeft");
	$(".create_target").addClass("hidden");
	$(".update_target").removeClass("hidden");
	idcreditcard = $(this).attr('name');
 	setTimeout(function(){
	    $(".bank_acount").addClass('hidden');
		$.ajax({
	    	type: 'post',
	        data: {
	        	id: idcreditcard,
	        },
			url: baseurl + 'advertiser/getcredit',
        	success: function(data){
        		var obj = JSON.parse(data);
        		$(".creditcard-name").val(obj.creditcard_titularname);
        		$(".creditcard-number").val(obj.creditcard_numbercard);
        		$(".creditcard-type").val(obj.creditcard_type);	        		
		    }
		});
		right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".edit_target")[0]);
		$(".edit_target").removeClass('animated fadeOutLeft');
		$(".edit_target").addClass('animated fadeInLeft');
		$(".edit_target").removeClass('hidden');
    	$(".edit_target").css('visibility','visible');
	}, 1000);
});

$(document).on('click','.update_target',function(){
	$.ajax({
    	type: 'post',
        data: {
        	id: idcreditcard,
        	creditcard_titularname: $(".creditcard-name").val(),
        	creditcard_numbercard: $(".creditcard-number").val(),
        	creditcard_type: $(".creditcard-type").val(),
        },
		url: baseurl + 'advertiser/updatecredit',
    	success: function(data){
    		if(data != 0){
    			$(".message").addClass("hidden");
        		var div='';
        		$.each(eval(data.replace(/[\r\n]/, "")), function(i,item){
	        		var size = item.creditcard_numbercard.length;
	        		div += '<div class="col-md-8 div_banco top div_update_card" name="'+item.pkcreditcard+'" id="'+
		        		item.pkcreditcard+'"><label class="lbl_bnc">'+item.creditcard_type+'<br/><span class="ttl_blue">##########'+
		        		item.creditcard_numbercard.substring(size-4)+'</span></label></div>';
				});
				var div_cards = div;
				div_cards += '<div id="new"></div><div class="col-md-12 top"><a class="btn btn-yellow btn-block btn_target">A&Ntilde;ADIR TARJETA</a>'
							+'</div><div class="alert alert-danger hidden messagec" role="alert"><strong>Tu tarjeta no se guardo</strong></div>';
				var div_pays = '<span class="col-md-12 ttl_blue">54.000 cop <br/></span><span class="col-md-12"> Pagar con:</span>';
				div_pays += div+'<div id="new1"></div>';
        		$(".div_cards").html(div_cards);
        		$(".div_pays").html(div_pays);
				$(".creditcard-name").val("");
				$(".creditcard-number").val("");
				$(".creditcard-type").val("");
    		}
    		else{
    			$(".message").removeClass("hidden");
	    	}
    	}
	});
});

$(document).on('click','.create_acount',function(){
	$(".edit_account").removeClass('animated fadeInLeft');
    $(".edit_account").addClass("animated fadeOutLeft");
    setTimeout(function(){
	    $(".edit_account").addClass("hidden");
	    right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".bank_acount")[0]);
		$(".bank_acount").removeClass("animated fadeOutLeft");
		$(".bank_acount").addClass('animated fadeInLeft');
	    $(".bank_acount").removeClass('hidden');
	    $(".bank_acount").css('visibility','visible');
	}, 1000);
	idbank="";
	$.ajax({
    	type: 'post',
        data: {
        	fkbank: $(".bank-name").val(),
        	userbank_titularname: $(".bank-titular").val(),
        	userbank_identification: $(".bank-identification").val(),
        	userbank_numberacount: $(".bank-numberacount").val(),
        	userbank_tipeacount: $(".bank-type").val(),
        },
		url: baseurl + 'advertiser/createbank',
    	success: function(data){
    		if(data != 0){
    			$(".message").addClass("hidden");
    			bank = JSON.parse(data);
	        	var div = '<div class="col-md-8 div_banco div_update_acount top" name="'+bank.pkuserbank+'" id="'+bank.pkuserbank+
	        		'"><label class="lbl_bnc">'+bank.userbank_tipeacount+' - '+$(".bank-name option:selected").text()+
	       			'<br/><span class="ttl_blue">'+bank.userbank_identification+'</span></label></div>';
        		div += '<div class="alert alert-danger hidden message" role="alert"><strong>No se pudo procesar tu requerimiento</strong></div>';
        		$(".div_bank").html(div);
				$(".bank-titular").val("");
				$(".bank-name").val("");
				$(".bank-identification").val("");
				$(".bank-numberacount").val("");
				$(".bank-type").val("");
    		}
    		else{
    			$(".message").removeClass("hidden");
	    	}
    	}
	});
});

$(document).on('click','.div_update_acount',function(){
	$(".bank_acount").removeClass('animated fadeInLeft');
	$(".bank_acount").addClass("animated fadeOutLeft");
	$(".create_acount").addClass('hidden');
	$(".update_acount").removeClass('hidden');
	idbank=$(this).attr('name');
 	setTimeout(function(){
	    $(".bank_acount").addClass('hidden');
		$.ajax({
	    	type: 'post',
	        data: {
	        	id: idbank,
	        },
			url: baseurl + 'advertiser/getbank',
        	success: function(data){
        		var obj = JSON.parse(data);
        		$(".bank-name").val(obj.pkbank);
        		$(".bank-name option:selected").text(obj.bank_name);
        		$(".bank-titular").val(obj.userbank_titularname);
				$(".bank-identification").val(obj.userbank_identification);
				$(".bank-numberacount").val(obj.userbank_numberacount);
				$(".bank-type").val(obj.userbank_tipeacount);
		    }
		});
		right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".edit_account")[0]);
		$(".edit_account").removeClass('animated fadeOutLeft');
		$(".edit_account").addClass('animated fadeInLeft');
		$(".edit_account").removeClass('hidden');
    	$(".edit_account").css('visibility','visible');
	}, 1000);
});

$(document).on('click','.update_acount',function(){
	$.ajax({
    	type: 'post',
        data: {
        	id: idbank,
        	fkbank: $(".bank-name").val(),
        	userbank_titularname: $(".bank-titular").val(),
        	userbank_identification: $(".bank-identification").val(),
        	userbank_numberacount: $(".bank-numberacount").val(),
        	userbank_tipeacount: $(".bank-type").val(),
        },
		url: baseurl + 'advertiser/updatebank',
    	success: function(data){
    		if(data != 0){
    			$(".message").addClass("hidden");
    			bank = JSON.parse(data);
	        	var div = '<div class="col-md-8 div_banco div_update_acount top" name="'+bank.pkuserbank+'" id="'+bank.pkuserbank+
	        		'"><label class="lbl_bnc">'+bank.userbank_tipeacount+' - '+$(".bank-name option:selected").text()+
	       			'<br/><span class="ttl_blue">'+bank.userbank_identification+'</span></label></div>';
        		div += '<div class="alert alert-danger hidden message" role="alert"><strong>No se pudo procesar tu requerimiento</strong></div>';
        		$(".div_bank").html(div);
				$(".bank-titular").val("");
				$(".bank-name").val("");
				$(".bank-identification").val("");
				$(".bank-numberacount").val("");
				$(".bank-type").val("");
    		}
    		else
    			$(".message").removeClass("hidden");
    	}
	});
});

$(document).on('click','.btn_delete_bank',function(){
	if(idbank != ''){
		$.ajax({
	    	type: 'post',
	        data: {
	        	id: idbank,
	        },
			url: baseurl + 'advertiser/deletebank',
	    	success: function(data){
	    		if(data != ''){
	    			$(".message").addClass("hidden");
		        	var div = '<div class="col-md-12 top"><a class="btn btn-yellow btn-block btn_pay">AÑADIR CUENTA</a></div>'
		        		+'<div class="alert alert-danger hidden message" role="alert"><strong>No se pudo procesar tu requerimiento</strong></div>';
	        		$(".div_bank").html(div);
					$(".bank-titular").val("");
					$(".bank-name").val("");
					$(".bank-identification").val("");
					$(".bank-numberacount").val("");
					$(".bank-type").val("");
	    		}
	    		else
	    			$(".message").removeClass("hidden");
	    	}
		});
	}
});

$(document).on('click','.create_acount_per',function(){
	$.ajax({
    	type: 'post',
        data: {
        	fkbank: $(".fkbank").val(),
        	userbank_titularname: $(".txt_titularname").val(),
        	userbank_identification: $(".txt_identification").val(),
        	userbank_numberacount: $(".txt_numberacount").val(),
        	userbank_tipeacount: $(".bank-type").val(),
        },
		url: baseurl + 'advertiser/createbank',
    	success: function(data){
    		if(data != 0){
    			bank = JSON.parse(data);
				$(".txt_titularname").val(bank.userbank_titularname);
				$(".txt_identification").val(bank.userbank_identification);
				$(".txt_numberacount").val(bank.userbank_numberacount);
				swal("Muy bien", "Tu cuenta fue creada correctamente", "success");
				location.reload();
    		}
    		else{
    			swal({
			      title: "Oh! no",
			      text: "Hubo un error al procesar tu requerimiento. Revisa la información que ingresaste.",
			      type: "error"
			    });
	    	}
    	}
	});
});

$(document).on('click','.update_acount_per',function(){
	$.ajax({
    	type: 'post',
        data: {
        	id: $(".update_acount_per").attr('data-id'),
        	fkbank: $(".fkbank").val(),
        	userbank_titularname: $(".txt_titularname").val(),
        	userbank_identification: $(".txt_identification").val(),
        	userbank_numberacount: $(".txt_numberacount").val(),
        	userbank_tipeacount: $(".bank-type").val(),
        },
		url: baseurl + 'advertiser/updatebank',
    	success: function(data){
    		if(data != 0){
    			bank = JSON.parse(data);
				$(".txt_titularname").val(bank.userbank_titularname);
				$(".txt_identification").val(bank.userbank_identification);
				$(".txt_numberacount").val(bank.userbank_numberacount);
				swal("Muy bien", "Tu cuenta fue actualizada correctamente", "success");
				location.reload();
    		}
    		else{
    			swal({
			      title: "Oh! no",
			      text: "Hubo un error al procesar tu requerimiento. Revisa la información que ingresaste.",
			      type: "error"
			    });
	    	}
    	}
	});
});

/********** Todo lo de los bancos *******/

$(document).on('click','.div_update_product',function(){
	$(".information-modal").removeClass('animated fadeInLeft');
	$(".information-modal").addClass("animated fadeOutLeft");
	idproduct = $(this).attr('name');
 	setTimeout(function(){
	    $(".information-modal").addClass("hidden");
	    $.ajax({
	    	type: 'post',
	        data: {
	        	id: idproduct,
	        },
			url: baseurl + 'advertiser/getproduct',
	    	success: function(data){
    			if(data != ''){
    				var product = JSON.parse(data);
    				$('.product-name').val(product.product_name);
    				$('.product-review').val(product.product_review);
    				$('.text-description').val(product.product_description);
    				$('.text-terms').val(product.product_terms);
    				$('.product-pay-user').val(product.product_value);
    				$('.product-qty').val(product.product_qty);
    				$(function(){
						$('#calendar').eCalendar();
				    });
    			}
	    	}
		});
		right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".information-product")[0]);
		$(".information-product").removeClass("animated fadeOutLeft");
		$(".information-product").addClass('animated fadeInLeft');
		$(".information-product").removeClass('hidden');
    	$(".information-product").css('visibility','visible');
	}, 1000);
});

$(document).on('click','.delete_product',function(){
	$(".information-product").removeClass('animated fadeInLeft');
	$(".information-product").addClass("animated fadeOutLeft");
 	setTimeout(function(){
	    $(".information-product").addClass("hidden");
	    $.ajax({
	    	type: 'post',
	        data: {
	        	id: idproduct,
	        },
			url: baseurl + 'advertiser/deleteproduct',
	    	success: function(data){
    			if(data != ''){
    				var div = '';
					$.each(eval(data.replace(/[\r\n]/, "")), function(i,item){
						div += '<div class="col-md-8 div_banco top div_update_product" name="'+item.pkproduct+
							'"><label class="lbl_bnc">'+item.product_name+'<br/><span class="ttl_blue">'+
							item.product_value+' COP</span></label></div>';
					});
    				$('.new_product').html(div);
    			}
	    	}
		});
		right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".information-product")[0]);
		$(".information-modal").removeClass("animated fadeOutLeft");
		$(".information-modal").addClass('animated fadeInLeft');
		$(".information-modal").removeClass('hidden');
    	$(".information-modal").css('visibility','visible');
	}, 1000);
});

$(document).on('click',".save_password",function(){
	if($(".password").val() != '' && $(".password_repeat").val() != ''){
		var dimension = $(".password").val().length;
		if(dimension > 5 && dimension < 17){
			if($(".password").val() == $(".password_repeat").val()){
				$.ajax({
					type: 'post',
				    data: {
				    	data: $('.password').val(),
				    },
					url: baseurl + 'advertiser/setpassword',
					success: function(data){
						if(data == '1'){
							swal("Muy bien", "Tu contraseña fue actualizada correctamente", "success");
						}
						else{
							swal({
						      title: "Oh! no",
						      text: "Hubo un error al procesar tu requerimiento.",
						      type: "error"
						    });
						}
					}
				});
				$('.password').val('');
				$('.password_repeat').val('');
				$("#error1").html('');
				$("#error2").html('');
			}
			else
			  $("#error2").html('Las contraseñas no coinciden.');
		}
		else{
			$("#error1").html('Mínimo 6 y máximo 16 caracteres.');
			$("#error2").html('Mínimo 6 y máximo 16 caracteres.');
		}
	}
	else{
		$("#error1").html('Campo requerido.');
		$("#error2").html('Campo requerido.');
	}
});

$(document).on('click',".save_social",function(){
	if($(".txt_facebook").val() != '' || $(".txt_twitter").val() != '' || $(".txt_google").val() != ''
		|| $(".txt_youtube").val() != ''){
		$.ajax({
			type: 'post',
		    data: {
		    	facebook: $('.txt_facebook').val(),
		    	twitter: $('.txt_twitter').val(),
		    	google: $('.txt_google').val(),
		    	youtube: $('.txt_youtube').val(),
		    },
			url: baseurl + 'advertiser/setsocial',
			success: function(data){
				if(data == '1')
					swal("Muy bien", "Tu requerimiento fue procesado correctamente", "success");
				else{
					swal({
				      title: "Oh! no",
				      text: "Hubo un error al procesar tu requerimiento.",
				      type: "error"
				    });
				}
			}
		});
		$("#error3").html('');
	}
	else
		$("#error3").html('Completa por lo menos un campo.');
});

$(document).on('click',".share_google",function(){
	$(this).attr('href','https://plus.google.com/share?url='+window.location.href);
	window.open($(this).attr('href'),'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
	return false;
});

$(document).on('click',".share_twitter",function(){
	window.open($(this).attr('href'),'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=600');
	return false;
});

$(document).on('click',".share_linkedin",function(){
	$(this).attr('href','https://www.linkedin.com/cws/share?url='+window.location.href);
	window.open($(this).attr('href'),'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');
	return false;
});
$(document).on('click',".share_facebook",function(){
	$(this).attr('href','http://www.facebook.com/sharer.php?u='+window.location.href);
	window.open($(this).attr('href'),'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');
	return false;
});
$(document).on('click',".no_share",function(){
	swal({
    	title: "",
       	text: "Cuando guardes tu producto/servicio lo pordrás compartir",
       	type: "warning"
       }
    );
});

$(document).on('click', '.delete_tumb', function(){
	$(".tumb" + $(this).attr("data-number")).remove();
});