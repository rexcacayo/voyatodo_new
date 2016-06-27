/* ----------------- Start JS Document ----------------- */

var ticket_date_finish;
var ticket_start;
var ticket_end_date;
var cont;
var cont2;
var idbank;
var idcreditcard;
var idticket;
var code=Math.floor((Math.random() * 1000) + 9999);
var comision;
var discount;
var meta_crowfunding;
var days_crowfunding;
var total_tickets;
var pkproposal;
var pkpublicity;
var baseurl = window.location.protocol +"//" + window.location.host + '/voyatodo/web/';
var btn_favorite_name;

function right_(topAlign, parent, child) {
	var rectTop = $(topAlign).offset().top;
	var rectLeft = $(parent).offset().left;
	child.style.top = rectTop + 'px';
	child.style.left = rectLeft + $(parent).width() + 30 + 'px';
}

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
			child.style.left = rectLeft + $(parent).width() + 45 + 'px';
		}
	}

	placeRight(".dashboard-row", "#dashboard-summary", ".summary-modal");
	placeRight(".dashboard-row", "#dashboard-information", ".information-modal");
	placeRight(".dashboard-row", "#dashboard-design", ".design-modal");
	placeRight(".dashboard-row", "#dashboard-bank", ".bank-modal");
	placeRight(".dashboard-row", "#dashboard-tickets", ".tickets-modal");
	placeRight(".dashboard-row", "#dashboard-share", ".share-modal");
	placeRight(".dashboard-row", "#dashboard-sponsor", ".sponsor-modal");
	placeRight(".dashboard-row", "#dashboard-asistent", ".asistent-modal");
	placeRight(".dashboard-row", "#dashboard-access", ".access-modal");
	placeRight(".dashboard-row", "#dashboard-publicity", ".publicity-modal");  

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

    $('.btn_create_ticket').click(function(){
    	$(".tickets_principal").removeClass('animated fadeInLeft');
    	$(".tickets_principal").addClass("animated fadeOutLeft");
    	$("#error_tickets").html('');
     	setTimeout(function(){
     		$(".ticket-name").val("");
     		$(".ticket-description").val("");
     		$(".ticket-value").val("");
     		$(".ticket-pay-user").val("");
     		$(".meta-financiera").val("");
     		$(".ticket-insentive").val("");
     		$(".ticket-qty").val("");
     		$(".btn_update_ticket").addClass('hidden');
			$(".btn_save_ticket").removeClass('hidden');
		    $(".tickets_principal").addClass("hidden");
			right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".create_tickets")[0]);
			$(".create_tickets").removeClass("animated fadeOutLeft");
			$(".create_tickets").addClass('animated fadeInLeft');
			$(".create_tickets").removeClass('hidden');
	    	$(".create_tickets").css('visibility','visible');
		}, 1000);
    }); 

    $('.btn_accept_proposal').click(function(){
    	$(".chat_sponsor").removeClass('animated fadeInLeft');
    	$(".chat_sponsor").addClass("animated fadeOutLeft");
     	setTimeout(function(){
		    $(".chat_sponsor").addClass("hidden");
		    $.ajax({
		    	type: 'post',
		        data: {
		        	pkproposal: pkproposal,
		        	pkevent: $('#pkevent').val(),
		        },
				url: baseurl + 'account/acceptproposal',
		    	success: function(data){
		    		if(data == '1'){
		    			swal("Muy bien", "Haz aceptado la propuesta", "success");
		    		}
		    		else{
						swal({
				          title: "",
				          text: "Tu propuesta no se pudo procesar.",
				          type: "error"
				        });
			    	}
		    	}
			});
			right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".sponsor_principal")[0]);
			$(".sponsor_principal").removeClass("animated fadeOutLeft");
			$(".sponsor_principal").addClass('animated fadeInLeft');
			$(".sponsor_principal").removeClass("hidden");
	    	$(".sponsor_principal").css('visibility','visible');
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
				url: baseurl + 'account/getcomisionpublicity',
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
	    	$(".btn_update_publicity").addClass('hidden');
	    	$(".btn_new_publicity").removeClass('hidden');
		}, 1000);
    }); 

    $('.btn_new_publicity').click(function(){
	    if(!isNaN(parseFloat($(".advertising_total").val())) && $(".name_advertiser").val() != ''
	    	&& $('.tipeacount_advertiser').val() != ''){
			$.ajax({
		    	type: 'post',
		        data: {
		        	value: $(".advertising_total").val(),
		        	pkevent: $("#pkevent").val(),
		        	pkcreditcard: $('.tipeacount_advertiser').val(),
		        	name: $(".name_advertiser").val(),
		        },
				url: baseurl + 'evento/createpublicity',
		    	success: function(data){
		    		if(data != ''){
		    			var publicity = JSON.parse(data);
		        		var div = '<div class="col-md-8 div_banco top div_update_publicity" name="'
		        			+publicity.pkpublicity+'"><label class="lbl_bnc">'+publicity.publicity_name
		        			+'<br/><span class="ttl_blue">0 de '+publicity.buy_value+' COP</span></label></div>';
		        		$(".new_publicity").append(div);
						$(".advertising_total").val("");
						$(".name_advertiser").val("");
		    		}
		    		else{
						swal({
				          title: "",
				          text: "Tu requerimiento no se pudo procesar.",
				          type: "error"
				        });
			    	}
		    	}
			});
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
		}
    });

    $('.btn_update_publicity').click(function(){
    	if(!isNaN(parseFloat($(".advertising_total").val())) && $(".name_advertiser").val() != ''
    		&& $('.tipeacount_advertiser').val() != ''){
			$.ajax({
		    	type: 'post',
		        data: {
		        	value: $(".advertising_total").val(),
		        	pkpublicity: pkpublicity,
		        	pkcreditcard: $('.tipeacount_advertiser').val(),
		        	name: $(".name_advertiser").val(),
		        	pkevent: $('#pkevent').val(),
		        },
				url: baseurl + 'evento/updatepublicity',
		    	success: function(data){
		    		if(data != ''){
		    			var publicity = JSON.parse(data);
		    			var div='';
		        		$.each(eval(data.replace(/[\r\n]/, "")), function(i,item){
			        		div += '<div class="col-md-8 div_banco top div_update_publicity" name="'
			        			+item.pkpublicity+'"><label class="lbl_bnc">'+item.publicity_name
			        			+'<br/><span class="ttl_blue">'+item.publicity_value+' de '+item.buy_value+' COP</span></label></div>';
						});
		        		$(".new_publicity").html(div);
						$(".advertising_total").val("");
						$(".name_advertiser").val("");
		    		}
		    		else{
						swal({
				          title: "",
				          text: "Tu requerimiento no se pudo procesar.",
				          type: "error"
				        });
			    	}
		    	}
			});
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
		}
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

$(document).ready(function () {

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

	$(".event-name").keyup(function() { 
		if($(this).val() == ''){
			$(".titulo").html('Nombre de tu evento');
			$('.cont_name').html('0/80');
		}
		else{
	    	$(".titulo").html($(this).val());
	    	$('.cont_name').html($(this).val().length+'/80');
	    	var url = $(this).val();
	    	$(".text-url").val(normalize(url));
	    	$("#txt_url").val(baseurl+'evento/v/'+normalize(url)); 
		}
    });
    $(".text-email-send").keyup(function() { 
		if($(this).val() == '')
			$('.cont_email').html('0/140');
		else
	    	$('.cont_email').html($(this).val().length+'/140');
    });
    $(".text-address").keyup(function() { 
		if($(this).val() == '')
			$(".lbl_address").html('Calle 00 # 00 - 00, ');
		else
	    	$(".lbl_address").html($(this).val().concat(', ')); 
    });
    $(document).on("change",".cmb-city",function() { 
		$(".lbl_city").html($(".cmb-city option:selected").html().concat(', '));
	});
	$(document).on("change",".cmb-country",function() { 
		$(".lbl_country").html($(".cmb-country option:selected").html().concat('.'));
	});
	$(".text-review").keyup(function() { 
		if($(this).val() == ''){
			$(".review").html('Resumen de tu evento');
			$('.cont_review').html('0/140');
		}
		else{
	    	$(".review").html($(this).val());
	    	$('.cont_review').html($(this).val().length+'/140');
		}
	}); 
	$(".text-description").keyup(function() { 
		if($(this).val() == '')
			$(".text_description").html('En este lugar coloca la descripción de tu evento.');
		else
	    	$(".text_description").html($(this).val()); 
	});
	$(".text-terms").keyup(function() { 
		if($(this).val() == '')
			$(".text_terms").html('En esta parte agrega los términos y condiciones de tu evento');
		else
	    	$(".text_terms").html($(this).val()); 
	});
	$(".event-place").keyup(function() { 
		if($(this).val() == '')
			$(".lbl_place").html('Lugar');
		else
	    	$(".lbl_place").html($(this).val()); 
    });
	$("#formcreateevent-event_stardate").change(function(){ 
		var stardate = new Date($(this).datepicker('getDate'));
		days = ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'];
		months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
	    $(".text_date").html(days[stardate.getDay()]+" "+stardate.getUTCDate()+" de "+months[stardate.getMonth()]+" de "+stardate.getFullYear()); 
    });
    $("#formcreateevent-event_enddate").change(function(){ 
		var enddate = new Date($(this).datepicker('getDate'));
		days = ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'];
		months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
	    $(".text_date_finish").html(days[enddate.getDay()]+" "+enddate.getUTCDate()+" de "+months[enddate.getMonth()]+" de "+enddate.getFullYear()); 
    });
    $(".type_response").change(function() {
	    var type = $(this).val();
	    if(type == 0)
	    	$(".opt_mail").addClass("hidden");
	    if(type == 1)
	    	$(".opt_mail").removeClass("hidden");
    });


	/************ Todo lo de los Tickets *************/

	$(".ticket-name").keyup(function() { 
		if($(this).val() == '')
			$('.cont_ticket-name').html('0/35');
		else
	    	$('.cont_ticket-name').html($(this).val().length+'/35');
	});

	$(".ticket-description").keyup(function() { 
		if($(this).val() == '')
			$('.cont_ticket-description').html('0/50');
		else
	    	$('.cont_ticket-description').html($(this).val().length+'/50');
	}); 

	$("#formcreateevent-ticket_finish").change(function(){ 
	   finish = new Date($(this).datepicker('getDate'));
       var dd = finish.getDate();
	   var mm = finish.getMonth()+1; 
	   var yyyy = finish.getFullYear();
	   if(dd<10) 
			dd='0'+dd;
	   if(mm<10)
		    mm='0'+mm;
		ticket_date_finish = yyyy+"-"+mm+'-'+dd; 
	});

	$("#formcreateevent-ticket_enddate").change(function(){ 
	   	enddate = new Date($(this).datepicker('getDate'));
	   	var dd = enddate.getDate();
	   	var mm = enddate.getMonth()+1; 
	   	var yyyy = enddate.getFullYear();
		var tiempo=enddate.getTime();
		var milisegundos=parseInt(-days_crowfunding*24*60*60*1000);
		total=enddate.setTime(tiempo+milisegundos);
	    var day=enddate.getDate();
	    var month=enddate.getMonth()+1;
	    var year=enddate.getFullYear();
	    if(day<10) 
			day='0'+day;
	   	if(month<10)
		    month='0'+month;
    	ticket_end_date = year+"/"+month+'/'+day;
	    $(".ticket_limit_date").html(ticket_end_date);
	});
	
	$("#formcreateevent-ticket_start").change(function(){ 
	   startdate = new Date($(this).datepicker('getDate'));
	   var dd = startdate.getDate();
	   var mm = startdate.getMonth()+1; 
	   var yyyy = startdate.getFullYear();
	   if(dd<10) 
			dd='0'+dd;
	   if(mm<10)
		    mm='0'+mm; 
	    ticket_start = yyyy+"-"+mm+'-'+dd; 
	});

	$(".start_date").change( function() {
	    if( this.checked ) {
	       today = new Date();
	       var dd = today.getDate();
		   var mm = today.getMonth()+1; 
		   var yyyy = today.getFullYear();
		   if(dd<10) 
				dd='0'+dd;
		   if(mm<10)
			    mm='0'+mm;
			today = dd +'/'+mm+'/'+yyyy;
			$('#formcreateevent-ticket_start').datepicker('setDate',today);
			$("#formcreateevent-ticket_start").datepicker("option","format","dd-mm-yyyy");
			$("#formcreateevent-ticket_start").datepicker({minDate:-1,maxDate:-2}).attr('disabled','true');  
	    }
	    else
	    	$("#formcreateevent-ticket_start").datepicker({minDate:-1,maxDate:-2}).removeAttr('disabled');  
	});

	$(".end_date").change( function() {
	    if( this.checked ) {
	       var end = $('#formcreateevent-event_enddate').val();
	       $('#formcreateevent-ticket_finish').val(end.replaceAll("-","/"));
	    }
	    else
	    	$("#formcreateevent-ticket_finish").datepicker({minDate:-1,maxDate:-2}).removeAttr('disabled');  
	});
	
	$(".out_limit").change( function() {
	    if( this.checked ) {
			$('.ticket-qty').attr('readonly','true');
			$('.ticket-qty').val('');  
	    }
	    else
	    	$(".ticket-qty").removeAttr('readonly');  
	});

	$(".ticket-value").keyup(function() { 
      	if($(this).val() != ''){
      		total_tickets = $(this).val()-($(this).val()*(comision/100));
        	$(".ticket-pay-user").val(total_tickets);
        }
        else
        	$(".ticket-pay-user").val('');
	});

	$(".ticket-pay-user").keyup(function() { 
      	if($(this).val() != ''){
      		var porcentain = parseInt($(this).val())+parseInt(($(this).val()*(comision/100)));
        	$(".ticket-value").val(porcentain);
        	total_tickets = $(this).val();
        }
        else
        	$(".ticket-value").val('');
	});

	$('.meta_financiera').keyup(function(){
		meta_crowfunding = $(this).val();
	});

	$(".ticket_value_crw").keyup(function() { 
      	if($(this).val() != ''){
      		var porcentain_1 = $(this).val()*(discount/100);
      		var porcentain_2 = $(this).val()*(comision/100);
      		total_tickets = parseInt($(this).val())-parseInt((porcentain_1+porcentain_2));
        	$(".ticket_pay_crw").val(total_tickets);
        	var cant = parseInt(meta_crowfunding)/parseInt($(".ticket_pay_crw").val());
        	$(".qty_crowfunding").val(Math.ceil(cant));
        	$(".ticket-qty").val(Math.ceil(cant));
        }
        else
        	$(".ticket_pay_crw").val('');
	});

	$(".ticket_pay_crw").keyup(function() { 
      	if($(this).val() != ''){
      		var porcentain_1 = $(this).val()*(discount/100);
      		var porcentain_2 = $(this).val()*(comision/100) + porcentain_1;
      		var porcentain = parseInt($(this).val())+parseInt(porcentain_2);
        	$(".ticket_value_crw").val(porcentain);
        	total_tickets = $(this).val();
        	var cant = parseInt(meta_crowfunding)/parseInt($(".ticket_pay_crw").val());
        	$(".qty_crowfunding").val(Math.ceil(cant));
        	$(".ticket-qty").val(Math.ceil(cant));
        }
        else
        	$(".ticket_value_crw").val('');
	});

	$("#increase_discount").on("change",function(){
	    $(".discount-ticket").val($(this).val()+"%");
	    discount = $(this).val();
	    if($(".ticket_value_crw").val() != ''){
	    	var porcentain_1 = $(".ticket_value_crw").val()*(discount/100);
      		var porcentain_2 = $(".ticket_value_crw").val()*(comision/100);
      		total_tickets = parseInt($(".ticket_value_crw").val())-parseInt((porcentain_1+porcentain_2));
        	$(".ticket_pay_crw").val(total_tickets);
        	var cant = parseInt(meta_crowfunding)/parseInt($(".ticket_pay_crw").val());
        	$(".qty_crowfunding").val(Math.ceil(cant));
        	$(".ticket-qty").val(Math.ceil(cant));
	    }
	});

    $(".type_tic").change(function() {
	    var type = $(this).val();
	    if(type == 1){
	    	$(".options-pay").addClass("hidden");
	    	$(".options-crowfunding").addClass("hidden");
	    	$('.menu_tickets').unbind('click', false);
	    	$('.menu_banks').bind('click', false);
	    }
	    if(type == 2){
	    	$(".options-crowfunding").addClass("hidden");
	    	$(".options-pay").removeClass("hidden");
	    	$('.menu_tickets').unbind('click', false);
	    	$('.menu_banks').unbind('click', false);
	    	$.ajax({
		    	type: 'post',
		        data: {
		        },
				url: baseurl + 'account/getcomision',
		    	success: function(data){
	    			comision = data;
	    			$(".ticket-comision").val(Number(comision).toFixed(1)+"%");
		    	}
			});
	    }
	    else
	    	if(type == 3){
	    		$(".options-pay").addClass("hidden");
	    		$(".options-crowfunding").removeClass("hidden");
	    		$('.menu_tickets').unbind('click', false);
				$.ajax({
			    	type: 'post',
			        data: {
			        },
					url: baseurl + 'account/getcrowfunding',
			    	success: function(data){
			    		config = JSON.parse(data);
			    		comision = config.config_comision1;
		    			discount = config.config_discount_crowfunding;
		    			days_crowfunding = config.config_days;
		    			$(".ticket-comision").val(Number(comision).toFixed(1)+"%");
		    			$(".discount-ticket").val(Number(discount).toFixed(1)+"%");
		    			$("#increase_discount").val(discount);
		    			$("#increase_discount").attr('min',discount);
			    	}
				});
	    	}
	    	else
	    		if(type == 4){
	    			$('.menu_tickets').bind('click', false);
	    			$('.menu_banks').bind('click', false);
	    			$(".options-pay").addClass("hidden");
	    			$(".options-crowfunding").addClass("hidden");
	    		}
    });

	/************ Todo lo de los Tickets *************/ 


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

	/************ Previsualización del correo ***********/
    $(".upload_email").change(function(event) {
      $.each(event.target.files, function(index, file) {
        var reader = new FileReader();
        reader.onload = function(event) {  
			object = {};
			object.filename = file.name;
			object.data = event.target.result;
			$("#img_email").css("background-size", "100% auto" );
			$("#img_email").attr("src",object.data);
			$("#img_email").css("background-repeat", "no-repeat");
        };  
        reader.readAsDataURL(file);
      });
    });
	/************ Fin Previsualización del correo ***********/

    $(".upload-banner").change(function(event) {
      $.each(event.target.files, function(index, file) {
        var reader = new FileReader();
        reader.onload = function(event) {  
			object = {};
			object.filename = file.name;
			object.data = event.target.result;
			$("#img-banner").css("background-size", "100% auto" );
			$("#img-banner").css("background-image", "url(" + object.data + ")");
			$("#img-banner").css("background-repeat", "no-repeat");
        };  
        reader.readAsDataURL(file);
      });
    });

    $('#opacity-banner').on("change", function() {
      $(".shadow").css("opacity", $(this).val());
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
						div+='<div class="item active"><img src="'+object.data+'" alt="galery_event" style="width: 100%"></div>';
					}
					else{
						divli+='<li data-target="#carousel-example-generic" data-slide-to="'+cont2+'"></li>';
						div+='<div class="item"><img src="'+object.data+'" alt="galery_event" style="width: 100%"></div>';
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

	var url = window.location.href;
	if(gup('open',url) == 'true')
		$("#dashboard-information").click();

    /***************  Obtener token del video  **************/
    function gup( name, link ){
      var regexS = "[\\?&]"+name+"=([^&#]*)";
      var regex = new RegExp ( regexS );
      var tmpURL = link;
      var results = regex.exec( tmpURL );
      if( results == null )
        return"";
      else
        return results[1];
    }

    $('#search-video').on('click', function() {
      var link = $('.text-video').val();
      if (link.indexOf("youtube.com") > -1) {
        var $iframe = $('.text-youtube');
        if ( $iframe.length ) {
          var token = gup("v",link);
          $iframe.attr('src','https://www.youtube.com/embed/' + token);
          $(".vm").addClass("hidden");
          $(".vy").removeClass("hidden");
        }
      }
      else
        if(link.indexOf("vimeo.com") > -1)
        {
          var $iframe = $('.text-vimeo');
          if ( $iframe.length ) {
            var token = link.split("/");
            $iframe.attr('src','https://player.vimeo.com/video/' + token[3]);
            $(".vy").addClass("hidden");
          	$(".vm").removeClass("hidden");
          }
        }
        else {
        	$(".vy").addClass("hidden");
        	$(".vm").addClass("hidden");
          swal({
            title: "",
            text: "Ingresa una dirección válida",
            type: "warning"
          });
        }
    });

    /**** Formulario Dinámico ****/

    $("#otro").hide();
    
    function makeid(limit)
    {  
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for(var i=0; i < limit; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));

        return text;
    }


    var wrapper = $("#divotro");
    var x = 1;
    $("#btnagregar_campo").click(function(){
      var cod = makeid(10);
         $(wrapper).append('<div class="input-group '+cod+'"><input required autofocus class="form-control form_regist" style="margin-top:15px; border-right:0px !important;" type="text" name="generic[]"/><span class="input-group-btn"><a class="btn btn-default btn_delete" id="'+cod+'"  style="height: 98%; margin-right:-10px;"><span class="glyphicon glyphicon-trash"></span></a></span></div><hr class="'+cod+'"/>');  
        
       $(".btn_delete").click(function(){
        $( "."+$(this).attr("id")).remove();    
      });     
    });    

    $(".btn_delete").click(function(){
      $(".divciudad").remove();
    });
    /**** Formulario Dinámico ****/

    var base64 = "";
    $(".upload").change(function(event) {
      $.each(event.target.files, function(index, file) {
        var reader = new FileReader();
        reader.onload = function(event) {  
          object = {};
          object.filename = file.name;
          object.data = event.target.result;
          base64 = object.data;
          $(".fileUpload").css("background-size", "100% auto");
          $(".fileUpload").css("background-image", "url(" + base64 + ")");
        };  
        reader.readAsDataURL(file);
      });
    });
});

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
		url: baseurl + 'account/createcredit',
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
			url: baseurl + 'account/getcredit',
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
		url: baseurl + 'account/updatecredit',
    	success: function(data){
    		if(data != 0){
    			$(".messagec").addClass("hidden");
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
    			$(".messagec").removeClass("hidden");
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
		url: baseurl + 'account/createbank',
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
			url: baseurl + 'account/getbank',
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
		url: baseurl + 'account/updatebank',
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
			url: baseurl + 'account/deletebank',
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
		url: baseurl + 'account/createbank',
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
		url: baseurl + 'account/updatebank',
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

/********* Funcionalidades de tickets ****/

function fadeoptionTickets(){
	$(".create_tickets").removeClass('animated fadeInLeft');
    $(".create_tickets").addClass("animated fadeOutLeft");
    setTimeout(function(){
	    $(".create_tickets").addClass("hidden");
	    $(".ticket-name").val("");
 		$(".ticket-description").val("");
 		$(".ticket-value").val("");
 		$(".ticket-pay-user").val("");
 		$(".ticket-insentive").val("");
 		$(".ticket-qty").val("");
 		$(".ticket_value_crw").val("");
 		$(".ticket_pay_crw").val("");
 		$(".qty_crowfunding").val("");
 		$('#formcreateevent-event_enddate').val("");
	    $('#formcreateevent-ticket_start').val("");
	    $('#formcreateevent-ticket_finish').val("");
 		$(".ticket_limit_date").html("");
		right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".tickets_principal")[0]);
		$(".tickets_principal").removeClass("animated fadeOutLeft");
		$(".tickets_principal").addClass('animated fadeInLeft');
		$(".tickets_principal").removeClass("hidden");
    	$(".tickets_principal").css('visibility','visible');
	}, 1000);
}

$(document).on('click',".btn_save_ticket",function(){
	$('.ticket-name').val($.trim($('.ticket-name').val()));
	$('.ticket-description').val($.trim($('.ticket-description').val()));
	if(!$.trim($('.ticket-name').val())){
		$("#error_tickets").html('Ingrese el nombre de la entrada');
		return false;
	}
	if(!$.trim($('.ticket-description').val())){
		$("#error_tickets").html('Ingrese una descripción para la entrada');
		return false;
	}
	if($('.ticket-name').val().length > 35){
		$("#error_tickets").html('El nombre de la entrada no debe contener más de 35 caracteres');
		return false;
	}
	if($('.ticket-description').val().length > 50){
		$("#error_tickets").html('La descripción de la entrada no debe contener más de 50 caracteres');
		return false;
	}

	ticket_start = new Date($("#formcreateevent-ticket_start").val()).getTime();
	ticket_date_finish = new Date($('#formcreateevent-ticket_finish').val()).getTime();
	console.log("Fecha de inicio: " + ticket_start);
	console.log("Fecha de finalización: " + ticket_date_finish);
	if(ticket_start != '' && ticket_date_finish != '' && ticket_start <= ticket_date_finish){
		var type = $(".radios input[type='radio']:checked").val();
	    var entrance = $(".entrance_tic input[type='radio']:checked").val();
		if(type == 1){
			$.ajax({
		    	type: 'post',
		        data: {
		        	ticket_name: $('.ticket-name').val(),
		        	ticket_description: $('.ticket-description').val(),
		        	typeticket_name: type,
		        	ticket_value: '',
		        	ticket_comision: '',
		        	ticket_insentive: '',
		        	ticket_enddate: '',
		        	ticket_qty: $(".ticket-qty").val(),
		        	ticket_seeclaim: entrance,
		        	ticket_start: $("#formcreateevent-ticket_start").val(),
		        	ticket_finish: $('#formcreateevent-ticket_finish').val(),
		        	ticket_code: code,
		        },
				url: baseurl + 'account/createticket',
	        	success: function(data){
	        		if(data != ''){
		        		var obj = JSON.parse(data);
		        		var div = '<div class="col-md-8 div_banco top div_update_ticket" name="'+obj.pkticket+'" id="'+obj.pkticket+
		        			'"><label class="lbl_bnc">'+obj.ticket_name+'<br/><span class="ttl_blue">gratis</span></label></div>';
		        		$(".new_ticket").append(div);
		        		var items = '<option>0</option>';
				    	for(var i=0; i<obj.ticket_qty; i++)
				    		items += " <option>"+(i+1)+"</option>";
				    	$("#space_ticket_free").append('<li><div class="pull-left"> <h3>GRATIS</h3></div><div class="pull-right"><select>'
				    		+ items +'</select></div><div class="clearfix"></div><h4>' + obj.ticket_name + '</h4><p>'+ obj.ticket_description 
				    		+ '</p><div class="clearfix"></div><div class="row clear-list"><div class="col-md-6"><span>0 de '
				    		+ obj.ticket_qty +'</span>Compradas</div><div class="col-md-6 pull-left0"><span>' + obj.ticket_finish 
				    		+ '</span>Fecha límite</div><div class="clearfix"></div></div></li>');
		        		var json = $(".json_tickets").val();
		        		$(".json_tickets").val(json.concat(obj.pkticket+','));
		        		fadeoptionTickets();
		        		$('input[name="FormCreateEvent[typeticket_name]"]').attr('disabled', 'disabled');
	        		}
	        		else{
	        			swal({
				          title: "",
				          text: "No se pudo guardar tu ticket.",
				          type: "error"
				        });
	        		}
			    }
			});
		}
		else
			if(type == 2){
		    	$.ajax({
			    	type: 'post',
			        data: {
			        	ticket_name: $('.ticket-name').val(),
		        		ticket_description: $('.ticket-description').val(),
			        	typeticket_name: type,
			        	ticket_value: $(".ticket-value").val(),
			        	ticket_comision: total_tickets,
			        	ticket_insentive: '',
			        	ticket_enddate: '',
			        	ticket_qty: $(".ticket-qty").val(),
			        	ticket_seeclaim: entrance,
			        	ticket_start: ticket_start,
			        	ticket_finish: ticket_date_finish,
			        	ticket_code: code,
			        },
					url: baseurl + 'account/createticket',
		        	success: function(data){
		        		if(data != ''){
			        		var obj = JSON.parse(data);
			        		var div = '<div class="col-md-8 div_banco top div_update_ticket" name="'+obj.pkticket+'" id="'+obj.pkticket+
			        			'"><label class="lbl_bnc">'+obj.ticket_name+'<br/><span class="ttl_blue">'+obj.ticket_value+' cop</span></label></div>';
			        		$(".new_ticket").append(div);
			        		var items = '<option>0</option>';
					    	for(var i=0; i<obj.ticket_value; i++)
					    		items += " <option>"+(i+1)+"</option>";
					    	$("#space_ticket_pay").append('<li><div class="pull-left"><h3>'+obj.ticket_value+' COP<span>Despu&eacute;s de '+obj.ticket_value
					    		+' COP</span></h3></div><div class="pull-right"><select>'+items+'</select></div><div class="clearfix"></div><h4>'+obj.ticket_name+'</h4><p>'
					    		+obj.ticket_description+'</p><div class="clearfix"></div><div class="row clear-list"><div class="col-md-6"><span>0 de '
					    		+obj.ticket_value+'</span>Compradas</div><div class="col-md-6 pull-left0"><span>'+obj.ticket_finish+'</span>Fecha límite</div><div class="clearfix"></div></div></li>');
			        		var json = $(".json_tickets").val();
			        		$(".json_tickets").val(json.concat(obj.pkticket+','));
			        		fadeoptionTickets();
			        		$('input[name="FormCreateEvent[typeticket_name]"]').attr('disabled', 'disabled');
		        		}
		        		else{
		        			swal({
					          title: "",
					          text: "No se pudo guardar tu ticket.",
					          type: "error"
					        });
		        		}
				    }
				});
			}
			else
				if(type == 3){
					if(ticket_end_date != '' && (new Date(ticket_end_date).getTime() <= new Date(ticket_date_finish).getTime())){
						if($('.ticket-insentive').val() == '')
							$("#error_tickets").html('Debes de dar un incentivo.');
						else{
					    	var meta = meta_crowfunding-(total_tickets*$(".ticket-qty").val());
					    	$.ajax({
						    	type: 'post',
						        data: {
						        	ticket_name: $('.ticket-name').val(),
		        					ticket_description: $('.ticket-description').val(),
						        	typeticket_name: type,
						        	ticket_value: $(".ticket_value_crw").val(),
						        	ticket_comision: total_tickets,
						        	ticket_insentive: $('.ticket-insentive').val(),
						        	ticket_enddate: ticket_end_date,
						        	ticket_qty: $(".ticket-qty").val(),
						        	ticket_seeclaim: entrance,
						        	ticket_start: ticket_start,
						        	ticket_finish: ticket_date_finish,
						        	ticket_code: code,
						        },
								url: baseurl + 'account/createticket',
					        	success: function(data){
					        		if(data != ''){
						        		var obj = JSON.parse(data);
						        		var div = '<div class="col-md-8 div_banco top div_update_ticket" name="'+obj.pkticket+'" id="'+obj.pkticket+
						        			'"><label class="lbl_bnc">'+obj.ticket_name+'<br/><span class="ttl_blue">'+obj.ticket_value+' cop - crowdfunding</span></label></div>';
						        		$(".new_ticket").append(div);
						        		$("#space_ticket_crowfundig").append('<li><div class="pull-left"><h3><span class="cb">META FINANCIERA</span>'
					    					+obj.ticket_value+' COP</h3></div><div class="clearfix"></div><h4>'+obj.ticket_name+'</h4><p>'+obj.ticket_description+'</p><h4>INCENTIVO</h4><p>'
					    					+$('.ticket-insentive').val()+'</p><div class="team-member modern"><div class="progress">'
					    					+'<div class="progress-bar progress-bar-primary" data-progress-animation="0%" data-appear-animation-delay="400"><span class="percentage">0%</span>'
					    					+'</div></div></div><div class="clearfix"></div><div class="row clear-list"><div class="col-md-4"><span>0%</span>Financiado</div>'
					    					+'<div class="col-md-4"><span>0</span>Contribuido</div><div class="col-md-4"><span>0</span>Días más</div><div class="clearfix"></div></div></li>');
						        		var json = $(".json_tickets").val();
						        		$(".json_tickets").val(json.concat(obj.pkticket+','));
						        		fadeoptionTickets();
						        		$('input[name="FormCreateEvent[typeticket_name]"]').attr('disabled', 'disabled');
					        			meta_crowfunding = meta;
					        			if(meta_crowfunding < 0){
					        				$('.btn_create_ticket').addClass('hidden');
					        				$('#goal_complete').html('Ya cumpliste tu meta financiera');
					        			}
					        			$('.meta_financiera').attr('readonly','true'); 
					        		}
					        		else{
					        			swal({
								          title: "",
								          text: "No se pudo guardar tu ticket.",
								          type: "error"
								        });
					        		}
							    }
							});
						}
					}
					else
						$("#error_tickets").html('La fecha de recaudación debe de ser menor a la de finalización.');
				}
	}
	else
		$("#error_tickets").html('La fecha de finalización debe de ser mayor a la de inicio.');
});

$(document).on('click',".div_update_ticket",function(){
	$(".tickets_principal").removeClass('animated fadeInLeft');
    $(".tickets_principal").addClass("animated fadeOutLeft");
    $(".btn_save_ticket").addClass('hidden');
    $(".btn_update_ticket").removeClass('hidden');
    idticket = $(this).attr('name');
    setTimeout(function(){
		$(".tickets_principal").addClass("hidden");
		$.ajax({
	    	type: 'post',
	        data: {
	        	id: idticket,
	        },
			url: baseurl + 'account/getticket',
        	success: function(data){
        		if(data != ''){
	        		var obj = JSON.parse(data);
	        		$('.ticket-name').val(obj.ticket_name);
	        		$('.ticket-description').val(obj.ticket_description);
	        		$(".ticket-qty").val(obj.ticket_value);
	        		if(obj.fktipetickect == 2){
	        			$(".ticket-value").val(obj.ticket_value);
	        			$(".ticket-pay-user").val(obj.ticket_comision);
	        		}
	        		else
	        			if(obj.fktipetickect == 3){
 							$(".ticket_value_crw").val(obj.ticket_value);
 							$(".ticket_pay_crw").val(obj.ticket_comision);
 							$(".qty_crowfunding").val(obj.ticket_qty);
	        				$(".ticket-insentive").val(obj.ticket_insentive);
	        				$("#formcreateevent-ticket_enddate").datepicker({ format: "mm-dd-yy"});
	        				$('#formcreateevent-ticket_enddate').datepicker('setDate',new Date(obj.ticket_enddate));
	        			}
	        		$(".ticket-qty").val(obj.ticket_qty);
					$("#formcreateevent-ticket_start").datepicker({ format: "mm-dd-yy"});
	        		$('#formcreateevent-ticket_start').datepicker('setDate',new Date(obj.ticket_start));
	        		$("#formcreateevent-ticket_finish").datepicker({ format: "mm-dd-yy"});
	        		$('#formcreateevent-ticket_finish').datepicker('setDate',new Date(obj.ticket_finish));
        		}
		    }
		});
		right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".create_tickets")[0]);
		$(".create_tickets").removeClass("animated fadeOutLeft");
		$(".create_tickets").addClass('animated fadeInLeft');
		$(".create_tickets").removeClass('hidden');
		$(".create_tickets").css('visibility','visible');
	}, 1000);
});

function fadeupdateTickets(){
	$(".create_tickets").removeClass('animated fadeInLeft');
	$(".create_tickets").addClass("animated fadeOutLeft");
 	setTimeout(function(){
	    $(".create_tickets").addClass("hidden");
	    $(".ticket-name").val("");
 		$(".ticket-description").val("");
 		$(".ticket-value").val("");
 		$(".ticket-pay-user").val("");
 		$(".meta-financiera").val("");
 		$(".ticket-insentive").val("");
 		$(".ticket-qty").val("");
		right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".tickets_principal")[0]);
		$(".tickets_principal").removeClass("animated fadeOutLeft");
		$(".tickets_principal").addClass('animated fadeInLeft');
		$(".tickets_principal").removeClass("hidden");
    	$(".tickets_principal").css('visibility','visible');
	}, 1000);
}

$(document).on('click',".btn_update_ticket",function(){
	if(ticket_start != '' && ticket_start != '' && (new Date(ticket_start).getTime() <= new Date(ticket_date_finish).getTime())){
		var type = $(".radios input[type='radio']:checked").val();
		var title = $('.ticket-name').val();
	    var description = $('.ticket-description').val();
	    var entrance = $(".entrance_tic input[type='radio']:checked").val();
	    var div = "";
	    var div_ul = "";
		if(type == 1){
			$.ajax({
		    	type: 'post',
		        data: {
		        	id: idticket,
		        	ticket_name: title,
		        	ticket_description: description,
		        	typeticket_name: type,
		        	ticket_value: '',
		        	ticket_comision: '',
		        	ticket_insentive: '',
		        	ticket_enddate: '',
		        	ticket_qty: $(".ticket-qty").val(),
		        	ticket_seeclaim: entrance,
		        	ticket_start: ticket_start,
		        	ticket_finish: ticket_date_finish,
		        },
				url: baseurl + 'account/updateticket',
	        	success: function(data){
	        		if(data != ''){
	        			div += updateViewMenu(data);
	        			div_ul += updateView(data);
	        			div += '<div class="new_ticket"></div>';
						$('.div_tickets').html(div);
						div_ul += '<div id="space_ticket_free"></div><div id="space_ticket_pay"></div><div id="space_ticket_crowfundig"></div>';
						$('.space_tickets').html(div_ul);
						fadeupdateTickets();
	        		}
	        		else{
	        			swal({
				          title: "",
				          text: "No se pudo actualizar tu ticket.",
				          type: "error"
				        });
	        		}
			    }
			});
		}
		else
			if(type == 2){
		    	var value = $(".ticket-value").val();
		    	$.ajax({
			    	type: 'post',
			        data: {
			        	id: idticket,
			        	ticket_name: title,
			        	ticket_description: description,
			        	typeticket_name: type,
			        	ticket_value: $(".ticket-value").val(),
			        	ticket_comision: total_tickets,
			        	ticket_insentive: '',
			        	ticket_enddate: '',
			        	ticket_qty: $(".ticket-qty").val(),
			        	ticket_seeclaim: entrance,
			        	ticket_start: ticket_start,
			        	ticket_finish: ticket_date_finish,
			        },
					url: baseurl + 'account/updateticket',
		        	success: function(data){
		        		if(data != ''){
							div += updateViewMenu(data);
							div_ul += updateView(data);
							div += '<div class="new_ticket"></div>';
							$('.div_tickets').html(div);
							div_ul += '<div id="space_ticket_free"></div><div id="space_ticket_pay"></div><div id="space_ticket_crowfundig"></div>';
							$('.space_tickets').html(div_ul);
							fadeupdateTickets();	        		
						}
		        		else{
		        			swal({
					          title: "",
					          text: "No se pudo guardar tu ticket.",
					          type: "error"
					        });
		        		}
				    }
				});
			}
			else
				if(type == 3){
					if((new Date(ticket_end_date).getTime() <= new Date(ticket_date_finish).getTime())){
				    	if($('.ticket-insentive').val() == '')
							$("#error_tickets").html('Debes de dar un incentivo.');
						else{
					    	$.ajax({
						    	type: 'post',
						        data: {
						        	id: idticket,
						        	ticket_name: title,
						        	ticket_description: description,
						        	typeticket_name: type,
						        	ticket_value: $(".ticket_value_crw").val(),
						        	ticket_comision: total_tickets,
						        	ticket_insentive: $('.ticket-insentive').val(),
						        	ticket_enddate: ticket_end_date,
						        	ticket_qty: $(".ticket-qty").val(),
						        	ticket_seeclaim: entrance,
						        	ticket_start: ticket_start,
						        	ticket_finish: ticket_date_finish,
						        },
								url: baseurl + 'account/updateticket',
					        	success: function(data){
					        		if(data != ''){
					        			div += updateViewMenu(data);
					        		    div_ul += updateView(data);
					        		    div += '<div class="new_ticket"></div>';
										$('.div_tickets').html(div);
										div_ul += '<div id="space_ticket_free"></div><div id="space_ticket_pay"></div><div id="space_ticket_crowfundig"></div>';
										$('.space_tickets').html(div_ul);
										fadeupdateTickets();
					        		}
					        		else{
					        			swal({
								          title: "",
								          text: "No se pudo guardar tu ticket.",
								          type: "error"
								        });
					        		}
							    }
							});
					    }
			    	}
			    	else
			    		$("#error_tickets").html('La fecha de recaudación debe de ser menor a la de finalización.');
				}
	}
	else
		$("#error_tickets").html('La fecha de recaudación debe de ser menor a la de finalización.');
});

function updateViewMenu(data){
	var div = '';
	$.each(eval(data.replace(/[\r\n]/, "")), function(i,item){
		if(item.fktipetickect == 1){
			div += '<div class="col-md-8 div_banco top div_update_ticket" name="'+item.pkticket+'" id="'+item.pkticket+
			'"><label class="lbl_bnc">'+item.ticket_name+'<br/><span class="ttl_blue">gratis</span></label></div>';
		}
		else
			if(item.fktipetickect == 2){
				div += '<div class="col-md-8 div_banco top div_update_ticket" name="'+item.pkticket+'" id="'+item.pkticket+
			'"><label class="lbl_bnc">'+item.ticket_name+'<br/><span class="ttl_blue">'+item.ticket_value+' cop</span></label></div>';
			}
			else{
				div += '<div class="col-md-8 div_banco top div_update_ticket" name="'+item.pkticket+'" id="'+item.pkticket+
    			'"><label class="lbl_bnc">'+item.ticket_name+'<br/><span class="ttl_blue">'+item.ticket_value+' cop - crowdfunding</span></label></div>';
			}
	});
	if(div == ''){
		$('input[name="FormCreateEvent[typeticket_name]"]').attr('disabled', false);
		$('.btn_create_ticket').removeClass('hidden');
		$('#goal_complete').html('');
		$('.meta_financiera').removeAttr('readonly'); 
	}
	return div;
}

function updateView(data){
	var div = '';
	$.each(eval(data.replace(/[\r\n]/, "")), function(i,item){
		var title = item.ticket_name;
	    var description = item.ticket_description;
	    var qty = item.ticket_qty;
		if(item.fktipetickect == 1){
	    	var items = '<option>0</option>';
	    	for(var i=0; i<qty; i++)
	    		items += " <option>"+(i+1)+"</option>";
	    	div += '<li><div class="pull-left"> <h3>GRATIS</h3></div><div class="pull-right"><select>'
	    		+ items +'</select></div><div class="clearfix"></div><h4>' + title + '</h4><p>'+ description + '</p><div class="clearfix"></div><div class="row clear-list"><div class="col-md-6"><span>0 de '
	    		+ qty +'</span>Compradas</div><div class="col-md-6 pull-left0"><span>' + item.ticket_finish + '</span>Fecha límite</div><div class="clearfix"></div></div></li>';
		}
		else
			if(item.fktipetickect == 2){
		    	var items = '<option>0</option>';
		    	for(var i=0; i<qty; i++)
		    		items += "<option>"+(i+1)+"</option>";
		    	div += '<li><div class="pull-left"><h3>'+item.ticket_value+' COP<span>Despu&eacute;s de '+item.ticket_value+' COP</span></h3></div><div class="pull-right"><select>'
		    		+items+'</select></div><div class="clearfix"></div><h4>'+title+'</h4><p>'+description+'</p><div class="clearfix"></div><div class="row clear-list"><div class="col-md-6"><span>0 de '
		    		+qty+'</span>Compradas</div><div class="col-md-6 pull-left0"><span>'+item.ticket_finish+'</span>Fecha límite</div><div class="clearfix"></div></div></li>';
			}
			else
				if(item.fktipetickect == 3){
			    	div += '<li><div class="pull-left"><h3><span class="cb">META FINANCIERA</span>'
			    	+item.ticket_value+' COP</h3></div><div class="clearfix"></div><h4>'+title+'</h4><p>'+description+'</p><h4>INCENTIVO</h4><p>'
			    	+item.ticket_insentive+'</p><div class="team-member modern"><div class="progress"><div class="progress-bar progress-bar-primary" data-progress-animation="0%" data-appear-animation-delay="400"><span class="percentage">0%</span>'
			    	+'</div></div></div><div class="clearfix"></div><div class="row clear-list"><div class="col-md-4"><span>0%</span>Financiado</div><div class="col-md-4"><span>0</span>Contribuido</div><div class="col-md-4"><span>0</span>Días más</div><div class="clearfix"></div></div></li>';
					
				}
	});
	return div;
}

$(document).on('click',".btn_delete_ticket",function(){
	var divMenu = '';
	var divView = '';
   	setTimeout(function(){
	    $(".create_tickets").addClass("hidden");
	    $(".ticket-name").val("");
 		$(".ticket-description").val("");
 		$(".ticket-value").val("");
 		$(".ticket-pay-user").val("");
 		$(".meta-financiera").val("");
 		$(".ticket-insentive").val("");
 		$(".ticket-qty").val("");
		$.ajax({
	    	type: 'post',
	        data: {
	        	id: idticket,
	        	ticket_code: code,
	        },
			url: baseurl + 'account/deleteticket',
	    	success: function(data){
	    		if(data != ''){
	        		divMenu += updateViewMenu(data);
	        		divView += updateView(data);
	        		divMenu += '<div class="new_ticket"></div>';
					$('.div_tickets').html(divMenu);
					divView += '<div id="space_ticket_free"></div><div id="space_ticket_pay"></div><div id="space_ticket_crowfundig"></div>';
					$('.space_tickets').html(divView);
	    		}
	    		else{
	    			swal({
			          title: "",
			          text: "No se pudo guardar tu ticket.",
			          type: "error"
			        });
	    		}
		    }
		});
		right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".tickets_principal")[0]);
		$(".tickets_principal").removeClass("animated fadeOutLeft");
		$(".tickets_principal").addClass('animated fadeInLeft');
		$(".tickets_principal").removeClass("hidden");
    	$(".tickets_principal").css('visibility','visible');
	}, 1000);
});

function deleteViewMenu(data){
	var div = '';
	var json = '';
	$.each(eval(data.replace(/[\r\n]/, "")), function(i,item){
		if(item.fktipetickect == 1){
			div += '<div class="col-md-8 div_banco top div_update_ticket" name="'+item.pkticket+'" id="'+item.pkticket+
			'"><label class="lbl_bnc">'+item.ticket_name+'<br/><span class="ttl_blue">gratis</span></label></div>';
			$(".json_tickets").val(json.concat(item.pkticket+','));
		}
		else
			if(item.fktipetickect == 2){
				div += '<div class="col-md-8 div_banco top div_update_ticket" name="'+item.pkticket+'" id="'+item.pkticket+
					'><label class="lbl_bnc">'+item.ticket_name+'<br/><span class="ttl_blue">'+item.ticket_value+' cop</span></label></div>';
				$(".json_tickets").val(json.concat(item.pkticket+','));
			}
			else{
				div += '<div class="col-md-8 div_banco top div_update_ticket" name="'+item.pkticket+'" id="'+item.pkticket+
    			'"><label class="lbl_bnc">'+item.ticket_name+'<br/><span class="ttl_blue">'+item.ticket_value+' cop - crowdfunding</span></label></div>';
				$(".json_tickets").val(json.concat(item.pkticket+','));
			}
	});
	return div;
}

/********* Funcionalidades de tickets ****/

/********* Funcionalidades patrocinio ****/
$(document).on('click',".div_sponsor_chat",function(){
	$(".sponsor_principal").removeClass('animated fadeInLeft');
	$(".sponsor_principal").addClass("animated fadeOutLeft");
	pkproposal = $(this).attr('name');
	var div = "";
 	setTimeout(function(){
	    $(".sponsor_principal").addClass("hidden");
	    $.ajax({
	    	type: 'post',
	        data: {
	        	pkproposal: pkproposal,
	        },
			url: baseurl + 'account/getmessage',
	    	success: function(data){
	    		if(data != ''){
	    			$.each(eval(data.replace(/[\r\n]/, "")), function(i,item){
	    				if(item.message_senduser == 1)
	    					div += '<div class="col-md-8 div_message1">'+item.message_message+'</div>';
	    				else
	    					div += '<div class="col-md-8 div_message2">'+item.message_message+'</div>';
	    			});
	    			$(".message_new").html(div);
	    		}
	    		else{
	    			swal({
			          title: "",
			          text: "No se pudo obtener los datos del chat.",
			          type: "error"
			        });
	    		}
	    	}
		});
	    $.ajax({
	    	type: 'post',
	        data: {
	        	pkproposal: pkproposal,
	        },
			url: baseurl + 'account/getproposal',
        	success: function(data){
        		if(data != ''){
        			var obj = JSON.parse(data);
        			$(".val_contributions").val(obj.proposal_contributions);
        			$(".val_money").val(obj.proposal_total1);
        		}
        		else{
        			swal({
			          title: "",
			          text: "No se pudo obtener los datos de la propuesta.",
			          type: "error"
			        });
        		}
		    }
		});
		right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".chat_sponsor")[0]);
		$(".chat_sponsor").removeClass("animated fadeOutLeft");
		$(".chat_sponsor").addClass('animated fadeInLeft');
		$(".chat_sponsor").removeClass('hidden');
    	$(".chat_sponsor").css('visibility','visible');
	}, 1000);
});

$(document).on('click',".send_message",function(){
	if($(".text-input-message").val() != ''){
		$.ajax({
	    	type: 'post',
	        data: {
	        	message: $(".text-input-message").val(),
	        	pkproposal: pkproposal,
	        },
			url: baseurl + 'account/setmessage',
	    	success: function(data){
	    		if(data == '1'){
	    			var div = '<div class="col-md-8 div_message1">'+$(".text-input-message").val()+'</div>';
	    			$(".message_new").append(div);
	    			$(".text-input-message").val("");
	    		}
	    		else{
	    			swal({
			          title: "",
			          text: "No se pudo enviar tu mensaje.",
			          type: "error"
			        });
	    		}
		    }
		});
	}
});
/********* Fin funcionalidades patrocinio ****/

$(document).on('click',"#valite_PIN",function(){
	if($(".txt_pin").val() != ''){
		$.ajax({
	    	type: 'post',
	        data: {
	        	code: $(".txt_pin").val(),
	        	pkevent: $("#pkevent").val(),
	        },
			url: baseurl + 'evento/validatepin',
	    	success: function(data){
	    		if(data != ''){
					$('.txt_error').addClass('hidden');
	    			$('.txt_success').removeClass('hidden');
	    		}
	    		else{
					$('.txt_success').addClass('hidden');
					$('.txt_error').removeClass('hidden');	    		
				}
		    }
		});
	}
	else{
		$('.txt_success').addClass('hidden');
		$('.txt_error').removeClass('hidden');
	}
});

$(document).on('click',".div_update_publicity",function(){
	$(".publicity_principal").removeClass('animated fadeInLeft');
	$(".publicity_principal").addClass("animated fadeOutLeft");
	pkpublicity = $(this).attr('name');
 	setTimeout(function(){
	    $(".publicity_principal").addClass("hidden");
	    $.ajax({
	    	type: 'post',
	        data: {
	        },
			url: baseurl + 'account/getcomisionpublicity',
	    	success: function(data){
    			$(".advertising_comision").val(data.toFixed(2));
    			$(".advertising_comision").attr('readonly','true');
	    	}
		});
	    $.ajax({
	    	type: 'post',
	        data: {
	        	id:pkpublicity,
	        },
			url: baseurl + 'evento/getpublicity',
	    	success: function(data){
    			if(data != ''){
					var publicity = JSON.parse(data);
					$(".advertising_total").val(publicity.buy_value);
					$(".name_advertiser").val(publicity.publicity_name);
    			}
	    	}
		});
		right_($(".dashboard-row")[0], $("#dashboard-bank")[0], $(".create_publicity")[0]);
		$(".create_publicity").removeClass("animated fadeOutLeft");
		$(".create_publicity").addClass('animated fadeInLeft');
		$(".create_publicity").removeClass('hidden');
    	$(".create_publicity").css('visibility','visible');
    	$(".btn_update_publicity").removeClass('hidden');
    	$(".btn_new_publicity").addClass('hidden');
	}, 1000);
});

$(document).on('click',".btn_favorites",function(){
	btn_favorite_name = $(this).attr('data-id');
	$.ajax({
		type: 'post',
	    data: {
	    	id: btn_favorite_name,
	    },
		url: baseurl + 'account/setfavorites',
		success: function(data){
			if(data == '1')
				$(".btn_favorites"+btn_favorite_name).css('background','url('+baseurl+'images/icon-favorite-blue.png) center no-repeat');
			else
				$(".btn_favorites"+btn_favorite_name).css('background','url('+baseurl+'images/icon-favorite-gray.png) center no-repeat');
		}
	});
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
					url: baseurl + 'account/setpassword',
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
			url: baseurl + 'account/setsocial',
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
		$('.txt_facebook').val('');
		$('.txt_twitter').val('');
		$('.txt_google').val('');
		$("#error3").html('');
	}
	else
		$("#error3").html('Completa por lo menos un campo.');
});

$(document).on('click',".btn_url_email",function(){
	$('#information_url').html('Al hacer click redireccionará a tu evento.');
});

$(document).on('click',"#preview_email",function(){
	if($(".text-email-send").val() == '')
		$("#md_text").html('Titulo de tu correo');
	else
		$("#md_text").html($(".text-email-send").val());
	if($(".text-description-email").val() == '')
		$("#md_description").html('Descripción de tu correo');
	else		
		$("#md_description").html($(".text-description-email").val());
	$("#md_response").html($(".text-email-response").val());
	$('#information_url').html('');
	$('#mail_event_name').val($(".event-name").val());
	$('#mail_event_stardate').val($(".text_date").html());
	$('#mail_event_place').val($(".text-address").val());
	$('#mail_event_starthour').val($(".event-starthour").val());
	$('#mail_event_url').val($("#txt_url").val());
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
       	text: "Cuando publiques tu evento lo pordrás compartir",
       	type: "warning"
       }
    );
});

$(document).on('click', '.delete_tumb', function(){
	$(".tumb" + $(this).attr("data-number")).remove();
});