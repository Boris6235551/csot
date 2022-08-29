jQuery(document).ready(function($){

	// показ окна с описанием продукции

	$(".button-opisanie").click(function (e){
		e.preventDefault();
		$(".opisanie").css({'opacity':'1', 'z-index':'999', 'position':'static', 'display':'block'});
		$(".tekhnicheskie-harakteristiki").css({'display':'none'});
		$(".opisanie_pdf").css({'display':'none', 'position':'absolute', 'opacity':'0'});
		$(".button-opisanie").css({'color':'rgb(235 236 236)', 'background-color':'rgb(9 95 133)'});
		$(".button-tekhnicheskie-harakteristiki").css({'color':'rgb(9 95 133)', 'background-color':'rgb(235 236 236)'});
		$(".button-pdf").css({'color':'rgb(9 95 133)', 'background-color':'rgb(235 236 236)'});
	});
	$(".button-tekhnicheskie-harakteristiki").click(function (e){
		e.preventDefault();
		$(".opisanie").css({'display':'none'});
		$(".tekhnicheskie-harakteristiki").css({'opacity':'1', 'z-index':'999', 'position':'static', 'display':'block'});
		$(".opisanie_pdf").css({'display':'none', 'position':'absolute', 'opacity':'0'});
		$(".button-opisanie").css({'color':'rgb(9 95 133)', 'background-color':'rgb(235 236 236)'});
		$(".button-tekhnicheskie-harakteristiki").css({'color':'rgb(235 236 236)', 'background-color':'rgb(9 95 133)'});
		$(".button-pdf").css({'color':'rgb(9 95 133)', 'background-color':'rgb(235 236 236)'});	
	});
	$(".button-pdf").click(function (e){
		e.preventDefault();
		$(".opisanie").css({'display':'none'});
		$(".tekhnicheskie-harakteristiki").css({'display':'none', 'position':'absolute', 'opacity':'0'});
		$(".opisanie_pdf").css({'opacity':'1', 'z-index':'999', 'position':'static', 'display':'block'});
		$(".button-opisanie").css({'color':'rgb(9 95 133)', 'background-color':'rgb(235 236 236)'});
		$(".button-tekhnicheskie-harakteristiki").css({'color':'rgb(9 95 133)', 'background-color':'rgb(235 236 236)'});
		$(".button-pdf").css({'color':'rgb(235 236 236)', 'background-color':'rgb(9 95 133)'});
	});
	let mql1 = window.matchMedia('all and (max-width: 768px)');
		if (mql1.matches) {
		    // размер окна 768px или меньше
		    $("#colophon").css({"display":"none"});		    
			$(".left_menu_sidebar").toggleClass("stellarnav");
			$('#main-nav').stellarNav({

				  // adds default color to nav. (light, dark)
				  theme     : 'plain', 

				  // number in pixels to determine when the nav should turn mobile friendly
				  breakpoint: 810, 

				  // label for the mobile nav
				  menuLabel: '<a href="https://www.jqueryscript.net/menu/"></a>', 

				  // adds a click-to-call phone link to the top of menu - i.e.: "18009084500"
				  phoneBtn: false, 

				  // adds a location link to the top of menu - i.e.: "/location/", "http://site.com/contact-us/"
				  locationBtn: false, 

				  // makes nav sticky on scroll
				  sticky     : false, 

				  // how fast the dropdown should open in milliseconds
				  openingSpeed: 250, 

				  // controls how long the dropdowns stay open for in milliseconds
				  closingDelay: 250, 

				  // 'static', 'top', 'left', 'right'
				  position: 'static', 

				  // shows dropdown arrows next to the items that have sub menus
				  showArrows: false, 

				  // adds a close button to the end of nav
				  closeBtn     : false, 

				  // fixes horizontal scrollbar issue on very long navs
				  scrollbarFix: false,

				  // enables mobile mode
				  mobileMode: true
			  
			});
		}
		else {
			$("#colophon-mini").css({"display":"none"});
		}
	$(".navbar-menu").find("#primary-menu").toggleClass("menu-listing");
	$(".menu-burger").click(function() {
		$(".menu-burger").toggleClass("active");
		$(".navbar-menu").toggleClass("active");
	});


	if ( $(".opisanie_pdf").find(".pdf_1").attr("href") == "" ) {
		$(".pdf_1").css({'display':'none'});
	};	
	if ( $(".opisanie_pdf").find(".pdf_2").attr("href") == "" ) {
		$(".pdf_2").css({'display':'none'});
	};	
	if ( $(".opisanie_pdf").find(".pdf_3").attr("href") == "" ) {
		$(".pdf_3").css({'display':'none'});
	};	
	if ( $(".opisanie_pdf").find(".pdf_4").attr("href") == "" ) {
		$(".pdf_4").css({'display':'none'});
	};	
	if ( $(".opisanie_pdf").find(".pdf_5").attr("href") == "" ) {
		$(".pdf_5").css({'display':'none'});
	};	
	if ( $(".opisanie_pdf").find(".pdf_6").attr("href") == "" ) {
		$(".pdf_6").css({'display':'none'});
	};	
	if ( $(".opisanie_pdf").find(".pdf_7").attr("href") == "" ) {
		$(".pdf_7").css({'display':'none'});
	};	
	if ( $(".opisanie_pdf").find(".pdf_8").attr("href") == "" ) {
		$(".pdf_8").css({'display':'none'});
	};	
	if ( $(".opisanie_pdf").find(".pdf_9").attr("href") == "" ) {
		$(".pdf_9").css({'display':'none'});
	};	
	if ( $(".opisanie_pdf").find(".pdf_10").attr("href") == "" ) {
		$(".pdf_10").css({'display':'none'});
	};	

	if ( $(".foto_2").find("img").attr("src") == "" ) {
		$(".foto_2").remove();
	};
	if ( $(".foto_3").find("img").attr("src") == "" ) {
		$(".foto_3").remove();
	};		
	if ( $(".foto_4").find("img").attr("src") == "" ) {
		$(".foto_4").remove();
	};	
	if ( $(".foto_5").find("img").attr("src") == "" ) {
		$(".foto_5").remove();
	};			





			(function () {
			  let a = document.querySelectorAll('.menu a');
			    for (let i=a.length; i--;) {
			      if (a[i].href === window.location.pathname || a[i].href === window.location.href) {a[i].className += ' activ-button';} 
			    }
			})();	
});
