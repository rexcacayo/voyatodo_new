/* ----------------- Start JS Document ----------------- */

var name_event = '';
var name_user = '';
var name_sponsor = '';
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

$(document).on('click',".accept",function(){
	$.ajax({
    	type: 'post',
        data: {
        	id: $(this).attr('name'),
        },
		url: baseurl + 'admin/accept',
    	success: function(data){
    		if(data != ''){
    			var div = "";
    			var cont = 0;
    			var tipo = "";
    			div += '<table class="table"><thead><tr><td><p>NOMBRES</p></td><td><p>APELLIDOS</p></td><td><p>EMAIL</p></td>'+
    				'<td><p>TELÉFONO 1</p></td><td><p>TELÉFONO 2</p></td><td><p>TIPO DE USUARIO</p></td><td></td><td></td></tr></thead><tbody>';            
    			$.each(eval(data.replace(/[\r\n]/, "")), function(i,item){
    				if(item.rol == 2)
    					tipo = "Patrocinador";
    				else
    					if(item.rol == 4)
    						tipo = "Proveedor";
    					else
    						if(item.rol == 3)
    							tipo = "Empresa";
    				div += '<tr><td>'+item.username+'</td><td>'+item.last_name+'</td><td>'+
    					item.email+'</td><td>'+item.user_phone1+'</td><td>'+item.user_phone2+'</td><td>'
    					+tipo+'</td><td><a class="btn_ok accept" name="'+item.id+
    					'">ACEPTAR</a></td><td><a class="btn_ok refuse" name="'+item.id+'">RECHAZAR</a></td></tr>';
    				cont++;
    			});
    			div += '<tr class="bluish"><td class="ttl_blue">TOTAL DE SOLICITUDES</td><td class="ttl_blue">'+cont+'</td></tr></tbody></table>';
    			$(".new_table").html(div);
    			swal("Muy bien", "El usuario ha sido aceptado", "success");
    		}
    		else{
    			swal({
		          title: "",
		          text: "No se pudo procesar tu requerimiento.",
		          type: "error"
		        });
	    	}
    	}
	});
});

$(document).on('click',".refuse",function(){
	$.ajax({
    	type: 'post',
        data: {
        	id: $(this).attr('name'),
        },
		url: baseurl + 'admin/refuse',
    	success: function(data){
    		if(data != ''){
    			var div = "";
    			var cont = 0;
    			var tipo = "";
    			div += '<table class="table"><thead><tr><td><p>NOMBRES</p></td><td><p>APELLIDOS</p></td><td><p>EMAIL</p></td>'+
    				'<td><p>TELÉFONO 1</p></td><td><p>TELÉFONO 2</p></td><td><p>TIPO DE USUARIO</p></td><td></td><td></td></tr></thead><tbody>';            
    			$.each(eval(data.replace(/[\r\n]/, "")), function(i,item){
    				if(item.rol == 2)
    					tipo = "Patrocinador";
    				else
    					if(item.rol == 4)
    						tipo = "Proveedor";
    				div += '<tr><td>'+item.username+'</td><td>'+item.last_name+'</td><td>'+
    					item.email+'</td><td>'+item.user_phone1+'</td><td>'+item.user_phone2+'</td><td>'
    					+tipo+'</td><td><a class="btn_ok accept" name="'+item.id+
    					'">ACEPTAR</a></td><td><a class="btn_ok refuse" name="'+item.id+'">RECHAZAR</a></td></tr>';
    				cont++;
    			});
    			div += '<tr class="bluish"><td class="ttl_blue">TOTAL DE SOLICITUDES</td><td class="ttl_blue">'+cont+'</td></tr></tbody></table>';
    			$(".new_table").html(div);
    			swal("Muy bien", "El usuario ha sido rechazado", "success");
    		}
    		else{
    			swal({
		          title: "",
		          text: "No se pudo procesar tu requerimiento.",
		          type: "error"
		        });
	    	}
    	}
	});
});

$(document).on('click',".watch_messages",function(){
	name_event = ($(this).attr('data-name-event'));
	name_user = ($(this).attr('data-name-user'));
	name_sponsor = ($(this).attr('data-name-sponsor'));
	$.ajax({
    	type: 'post',
        data: {
        	id: $(this).attr('name'),
        },
		url: baseurl + 'admin/getmessage',
    	success: function(data){
    		if(data != ''){
    			var div = "";
    			div += '<center><label class="col-md-12 top txt_red">'+name_event+'</label><div class="col-md-12"><div class="area-message-admin">';
    			$.each(eval(data.replace(/[\r\n]/, "")), function(i,item){
    				if(item.message_senduser == '1'){
    					div += '<label class="col-md-5 pull-left top txt_red">'+name_user+'</label><div class="col-md-8 div_message1">'+
    						'<label class="col-md-6 pull-right txt_red">'+item.message_date+'</label>'+item.message_message
    						+'<div class="col-md-3 col-md-offset-5"><a class="btn_chat btn_update_message" name="'+item.pkmessage+'" data-toggle="modal" data-target="#modal-edit-message">EDITAR</a></div><div class="col-md-3">'+
    						'<a class="btn_chat btn_approve_message" name="'+item.pkmessage+'">APROBAR</a></div></div>';
    				}
    				else{
    					div += '<label class="col-md-5 pull-left top txt_red">'+name_sponsor+'</label><div class="col-md-8 div_message2">'+
    						'<label class="col-md-6 pull-right txt_red">'+item.message_date+'</label>'+item.message_message
    						+'<div class="col-md-3 col-md-offset-5"><a class="btn_chat btn_update_message" name="'+item.pkmessage+'" data-toggle="modal" data-target="#modal-edit-message">EDITAR</a></div><div class="col-md-3">'+
    						'<a class="btn_chat btn_approve_message" name="'+item.pkmessage+'">APROBAR</a></div></div>';
    				}
    			});
    			div += '</div></div></center>';
			    $(".new_chat").html(div);
			    $('html, body').animate({
			        scrollTop: $(".new_chat").offset().top
			    }, 600);
    		}
    		else{
    			swal({
		          title: "",
		          text: "No se pudo procesar tu requerimiento.",
		          type: "error"
		        });
	    	}
    	}
	});
});

$(document).on('click',".btn_update_message",function(){
	$.ajax({
    	type: 'post',
        data: {
        	id: $(this).attr('name'),
        },
		url: baseurl + 'admin/getmessagevalue',
    	success: function(data){
    		if(data != ''){
    			var msg = JSON.parse(data);
    			var div = '<textarea cols="12" rows="12" class="form-control txt_message" autofocus="">'+msg.message_message+'</textarea>';
    			$(".content_message").html(div);
    			$(".btn_modal_save").attr('name',msg.pkmessage);
    		}
    		else{
    			swal({
		          title: "",
		          text: "No se pudo procesar tu requerimiento.",
		          type: "error"
		        });
	    	}
    	}
	});
});

$(document).on('click',".btn_modal_save",function(){
	$.ajax({
    	type: 'post',
        data: {
        	id: $(this).attr('name'),
        	message: $(".txt_message").val(),
        },
		url: baseurl + 'admin/editmessage',
    	success: function(data){
    		if(data != ''){
    			$(".new_chat").html("");
    			$(".close").click();
			    var div = "";
    			var cont = 0;
    			div += '<table class="table"><thead><tr><td><p>EVENTO</p></td><td><p>USUARIO</p></td><td><p>PATROCINADOR</p></td>'
    				+'<td><p>MENSAJES PENDIENTES</p></td><td></td></tr></thead><tbody>';
    			$.each(eval(data.replace(/[\r\n]/, "")), function(i,item){
    				div += '<tr><td>'+item.event_name+'</td><td>'+item.user_name+'</td><td>'
    					+item.sponsor_name+'</td><td><center class="number_center">'+item.cant_message
    					+'</center></td><td><a class="btn_ok watch_messages" data-name-event="'+item.event_name
    					+'" name="'+item.fkproposal+'" data-name-user="'+item.user_name+'" data-name-sponsor="'+
    					+item.sponsor_name+'">VER</a></td></tr>';
                    cont += item.cant_message;
    			});
    			div += '<tr class="bluish"><td class="ttl_blue">TOTAL DE MENSAJES</td><td class="ttl_blue">'
    				+cont+'</td></tr></tbody></table>';
    			$(".new_table").html(div);
			    swal("Muy bien", "El mensaje ha sido editado", "success");
    		}
    		else{
    			swal({
		          title: "",
		          text: "No se pudo procesar tu requerimiento.",
		          type: "error"
		        });
	    	}
    	}
	});
});

$(document).on('click',".btn_approve_message",function(){
	$.ajax({
    	type: 'post',
        data: {
        	id: $(this).attr('name'),
        },
		url: baseurl + 'admin/acceptmessage',
    	success: function(data){
    		if(data != ''){
			    $(".new_chat").html("");
			    var div = "";
    			var cont = 0;
    			div += '<table class="table"><thead><tr><td><p>EVENTO</p></td><td><p>USUARIO</p></td><td><p>PATROCINADOR</p></td>'
    				+'<td><p>MENSAJES PENDIENTES</p></td><td></td></tr></thead><tbody>';
    			$.each(eval(data.replace(/[\r\n]/, "")), function(i,item){
    				div += '<tr><td>'+item.event_name+'</td><td>'+item.user_name+'</td><td>'
    					+item.sponsor_name+'</td><td><center class="number_center">'+item.cant_message
    					+'</center></td><td><a class="btn_ok watch_messages" data-name-event="'+item.event_name
    					+'" name="'+item.fkproposal+'" data-name-user="'+item.user_name+'" data-name-sponsor="'+
    					+item.sponsor_name+'">VER</a></td></tr>';
                    cont += item.cant_message;
    			});
    			div += '<tr class="bluish"><td class="ttl_blue">TOTAL DE MENSAJES</td><td class="ttl_blue">'
    				+cont+'</td></tr></tbody></table>';
    			$(".new_table").html(div);
			    swal("Muy bien", "El mensaje ha sido aprobado", "success");
    		}
    		else{
    			swal({
		          title: "",
		          text: "No se pudo procesar tu requerimiento.",
		          type: "error"
		        });
	    	}
    	}
	});
});

$(document).on('click',".btn_filter_users",function() {
	if($('.slc_rol option:selected').val() != ''){
		$.ajax({
	    	type: 'post',
	        data: {
	        	rol: $('.slc_rol option:selected').val(),
	        },
			url: baseurl + 'admin/getuser',
	    	success: function(data){
	    		if(data != ''){
	    			var div = '';
	    			var cont = 0;
    				var tipo = "";
	    			div += '<table class="table"><thead><tr><td><p>NOMBRES</p></td><td><p>APELLIDOS</p></td>'
	    				+'<td><p>EMAIL</p></td><td><p>TELÉFONO 1</p></td><td><p>TELÉFONO 2</p></td>'
	    				+'<td><p>TIPO DE USUARIO</p></td><td><p>CALIFICACIÓN DEL USUARIO</p></td></tr></thead><tbody>';
	    			$.each(eval(data.replace(/[\r\n]/, "")), function(i,item){
	    				if(item.rol == 1)
    						tipo = "Administrador";
	    				else
	    					if(item.rol == 2)
	    						tipo = "Patrocinador";
	    					else
	    						if(item.rol == 3)
	    							tipo = "Usuario";
			    				else
			    					if(item.rol == 4)
			    						tipo = "Proveedor";
	    				div += '<tr><td>'+item.username+'</td><td>'+item.last_name+'</td><td>'+
	    					item.email+'</td><td>'+item.user_phone1+'</td><td>'+item.user_phone2+'</td><td>'
	    					+tipo+'</td><td style="text-align: center;">'+item.user_calification+'</td></tr>';
	    				cont++;
	    			});
    				div += '<tr class="bluish"><td class="ttl_blue">TOTAL DE USUARIOS</td><td class="ttl_blue">'+cont+'</td></tr></tbody></table>';
	    			$('.new_table').html(div);
	    		}
	    		else{
	    			swal({
			          title: "",
			          text: "No se pudo procesar tu requerimiento.",
			          type: "error"
			        });
		    	}
	    	}
		});
	}
});

$(document).on('click',".btn_save_comisions",function() {
	if($('.val_1').val() != '' && $('.val_2').val() != '' && $('.val_3').val() != ''
		&& $('.val_4').val() != '' && $('.val_5').val() != ''){
		$.ajax({
	    	type: 'post',
	        data: {
	        	comision_1: $('.val_1').val(),
	        	comision_2: $('.val_2').val(),
	        	comision_3: $('.val_3').val(),
	        	comision_4: $('.val_6').val(),
	        	days: $('.val_4').val(),
	        	comision_5: $('.val_5').val(),
	        },
			url: baseurl + 'admin/setcomisions',
	    	success: function(data){
	    		if(data != ''){
	    			$.each(eval(data.replace(/[\r\n]/, "")), function(i,item){
	    				$('.val_1').val(item.config_comision1);
	    				$('.val_2').val(item.config_comision2);
	    				$('.val_3').val(item.config_comision3);
	    				$('.val_6').val(item.config_comision4);
	    				$('.val_4').val(item.config_days);
	    				$('.val_5').val(item.config_discount_crowfunding);
	    			});
	    			swal({
			          title: "",
			          text: "Los datos fueron guardados",
			          type: "success"
			        });
	    		}
	    		else{
	    			swal({
			          title: "",
			          text: "No se pudo procesar tu requerimiento.",
			          type: "error"
			        });
		    	}
	    	}
		});
	}
	else{
		swal({
          title: "",
          text: "Completa todos los datos.",
          type: "error"
        });
	}
});

$(document).on('click',".btn_hidden_event",function() {
	var id = $(this).attr('name');
	swal({
		title: "Confirmar",   
		text: "Si bloquea el evento ya no sera visible para los usuarios, ",   
		type: "warning",   
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Si, bloquear",   
		cancelButtonText: "No, cerrar",   
		closeOnConfirm: false,   closeOnCancel: false 
	}, function(isConfirm){
	    if (isConfirm) {
			$.ajax({
				type: 'post',
			    data: {
			    	id:id,
			    },
				url: baseurl + 'evento/hiddenevent',
				success: function(data){
					if(data == '1'){
						$(".btn_hidden_event").html('<i class="fa fa-unlock" aria-hidden="true"></i> DESBLOQUEAR/MOSTRAR');
						$(".btn_hidden_event").addClass("btn_show_event");
						$(".btn_show_event").removeClass("btn_hidden_event");
						swal("Muy bien", "El evento ha sido bloqueado", "success");
					}
					else
					   	swal("Cancelado", "Tu solicitud no se pudo procesar", "error");   
				}
			});
	    } 
	    else    
	   		swal("Cancelado", "Tu solicitud ha sido cancelada", "error");   
	});
});

$(document).on('click',".btn_show_event",function() {
	var id = $(this).attr('name');
	swal({
		title: "Confirmar",   
		text: "El evento sera visible para todos los usuarios, ",   
		type: "warning",   
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Si, Desbloquear",   
		cancelButtonText: "No, cerrar",   
		closeOnConfirm: false,   closeOnCancel: false 
	}, function(isConfirm){
	    if (isConfirm) {
			$.ajax({
				type: 'post',
			    data: {
			    	id:id,
			    },
				url: baseurl + 'evento/showevent',
				success: function(data){
					if(data == '1'){
						$(".btn_show_event").html('<i class="fa fa-lock" aria-hidden="true"></i> BLOQUEAR/OCULTAR');
						$(".btn_show_event").addClass("btn_hidden_event");
						$(".btn_hidden_event").removeClass("btn_show_event");
						swal("Muy bien", "El evento ha sido desbloqueado", "success");
					}
					else
					   	swal("Cancelado", "Tu solicitud no se pudo procesar", "error");   
				}
			});
	    } 
	    else    
	   		swal("Cancelado", "Tu solicitud ha sido cancelada", "error");   
	});
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