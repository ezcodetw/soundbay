$(function() {

//Adds last grid items margin-right: 0;
var grid_items = jQuery('.grid-section-single .grid-1-12:nth-child(12n), .grid-section-single .grid-1-6:nth-child(6n), .grid-section-single .grid-1-4:nth-child(4n), .grid-section-single .grid-1-3:nth-child(3n), .grid-section-single .grid-1-2:nth-child(2n), .grid-1-1, .grid-section-multi li:last-child, .grid-section-multi>div:last-child');
grid_items.addClass('no-margin-right');

//Adds other last items margin-right: 0;
var last_items = jQuery('#sidebar .widget:last-child, #breadcrumbs li:last-child, .contacts-sidebar-widget:last-child, #contact-info li:last-child, #testimonials li:last-child, .sub-section-header li:last-child');
last_items.addClass('last-item');

//Adds custom items class .custom-item
var custom_items = jQuery('#sidebar #search');
custom_items.addClass('custom-item');

//Adds twitter bootstrap active accordion class .active-acordion
$('.accordion-body.in').parent().addClass('active-accordion');

$('.accordion-body').on('show', function () {
	$(this).parent().addClass('active-accordion');
})

$('.accordion-body').on('hide', function () {
	$(this).parent().removeClass('active-accordion');
})


// Menu slide down + delays 
var config = {    
over: makeTall, // function = onMouseOver callback (REQUIRED)    
timeout: 300, // number = milliseconds delay before onMouseOut    
out: makeShort // function = onMouseOut callback (REQUIRED)    
};
$("#menu-topmenu > ul > li:has(ul)").append('<div class="sub-menu-triangle"></div>');

$("#menu-topmenu ul li").hoverIntent( config );


function makeTall(){ $(this).find('>.sub-menu').stop().slideDown(200); $(this).find('>.sub-menu-triangle').stop().slideDown(200); }
function makeShort(){ $(this).find('>.sub-menu').stop().hide(); $(this).find('>.sub-menu-triangle').stop().hide(); }


//IF li have child, then add class
$("#menu-topmenu li:has(ul)").addClass("parent");

//Twitter widget
$(".tweet").tweet({
            username: "applenws",
            join_text: false,
            avatar_size: 0,
            template: "{text} {time}",
            count: 2,
            loading_text: "loading tweets..."
});


//flexSlider large (front page)
$('.flexslider-large').flexslider({
	controlsContainer: "#slider-nav",
	directionNav: true
});
$('#slider-nav-section .flex-direction-nav').appendTo('.flexslider-large ul.slides > li');

//FlexSlider
$('.flexslider').flexslider({

});


//quickSand
function portfolio_quicksand() {  

	// Setting up our variables  
	var $filter;  
	var $container;  
	var $containerClone;  
	var $filterLink;  
	var $filteredItems


	//Remove No Margin Right class, needs to be fixed to work in cross browser 		
	if (!($.browser.msie)) {
		$('.grid-section-single ul li:nth-child(3n)').removeClass('no-margin-right');
	}
	// Set our filter  
	$filter = $('.filter .section-menu li.section-menu-current a').attr('class');  

	// Set our filter link  
	$filterLink = $('.filter .section-menu li a');

	// Set our container  
	$container = $('.filter .grid-section-single ul');  

	// Clone our container  
	$containerClone = $container.clone();  

	// Apply our Quicksand to work on a click function  
	// for each of the filter li link elements  

	$filterLink.click(function(e) {

		// Remove the active class
		$('.filter .section-menu li').removeClass('section-menu-current');

		// Split each of the filter elements and override our filter  
		$filter = $(this).attr('class').split(' '); 

		// Apply the 'active' class to the clicked link  
		$(this).parent().addClass('section-menu-current');

		// If 'all' is selected, display all elements  
		// else output all items referenced by the data-type  
		if ($filter == 'all') {
			$filteredItems = $containerClone.find('li');
		}else {
			$filteredItems = $containerClone.find('li[data-type~=' + $filter + ']');
		}  

		// Finally call the Quicksand function  
		$container.quicksand($filteredItems, function() {

			//Fancybox 1
			$("a.portfolio-fancybox").fancybox({
				'padding'   :   15,
				'modal' :   false,
				'showCloseButton'   :   false,
				'speedIn'       :   600, 
				'speedOut'      :   200,
				'iframe'        :   true,
				'autoDimensions' : false,
				'showNavArrows' : false,
				'autoScale' : false,
				'overlayOpacity' : 0.9,
				'hideOnOverlayClick' : true,
				'overlayColor' : '#000',
				'height' : 'auto',
				'width' : 740
			 });

			//Fancybox 2
			$('a.fancybox').fancybox();

			$('.grid-section-single ul li').removeClass('no-margin-right');
			if ($.browser.msie) {
				$('.grid-section-single ul li:nth-child(3n)').addClass('no-margin-right');
			}

			//Snippet img hover zoom (quicksand fix)
			// Snippets hover zoom effect
			$('.snippet-img').not('.blog-snippet .snippet-img').append('<div class="zoomOverlay"><div class="snippet-img-hover"></div></div>');
			$('.snippet-img').not('.blog-snippet .snippet-img').find('.zoomOverlay, .snippet-img-hover').css({
				opacity:0, 
				display: 'block'
			 }); 

			// 300px width snippet images
			$('.snippet-img').not('.list-view .snippet-img').hover(function() {
				$('img', this).stop().animate({
					height: 178,
					marginLeft: -7,
					marginTop: -7
				}, 200);

				$(this).parent().find('.zoomOverlay, .snippet-img-hover').stop().animate({
					opacity: 1
				}, 200);

				}, function() {
				$('img', this).stop().animate({
					height: 171,
					marginLeft: 0,
					marginTop: 0
				}, 200);

				$(this).parent().find('.zoomOverlay, .snippet-img-hover').stop().animate({
					opacity: 0
				}, 200);
			});

			// 540px width snippet images
			$('.list-view .snippet-img').hover(function() {
				$('img', this).stop().animate({
					height: 264,
					marginLeft: -7,
					marginTop: -7
				}, 200);

				$(this).parent().find('.zoomOverlay, .snippet-img-hover').stop().animate({
					opacity: 1
				}, 200);

				}, function() {
				$('img', this).stop().animate({
					height: 257,
					marginLeft: 0,
					marginTop: 0
				}, 200);

				$(this).parent().find('.zoomOverlay, .snippet-img-hover').stop().animate({
					opacity: 0
				}, 200);
			});

			//Buttons classes quicksand fix
			// ****************************Buttons
			// button inside elements
			$('.filter .button, .filter .big-button').click(function(e) {
				e.preventDefault();
			});

			//button inside elements (spans)
			jQuery('.filter .button').wrapInner('<span class="button-text" />');
			jQuery('.filter .button').prepend('<span class="button-left" /><span class="button-right" />');
			jQuery('.filter .big-button').wrapInner('<span class="big-button-text" />');
			jQuery('.filter .big-button').prepend('<span class="big-button-left" /><span class="big-button-right" />');

			// button hover
			jQuery('.filter .button, .filter .big-button').on('hover', function(){
				jQuery(this).toggleClass('hover-button');
			});

			// button active
			jQuery('.filter .button, .filter .big-button').on('mousedown', function(){
				jQuery(this).addClass('active-button');
			});
			jQuery('.filter .button, .filter .big-button').on('mouseup', function(){
				jQuery(this).removeClass('active-button');
			});

		}); // $container.quicksand($filteredItems, function() {
	});  
}

portfolio_quicksand();


// ****************************Buttons
// button inside elements
$('.button, .big-button').click(function(e) {
	e.preventDefault();
});

//button inside elements (spans)
jQuery('.button').wrapInner('<span class="button-text" />');
jQuery('.button').prepend('<span class="button-left" /><span class="button-right" />');
jQuery('.big-button').wrapInner('<span class="big-button-text" />');
jQuery('.big-button').prepend('<span class="big-button-left" /><span class="big-button-right" />');

// button hover
jQuery('.button, .big-button').on('hover', function(){
	jQuery(this).toggleClass('hover-button');
});

// button active
jQuery('.button, .big-button').on('mousedown', function(){
	jQuery(this).addClass('active-button');
});
jQuery('.button, .big-button').on('mouseup', function(){
	jQuery(this).removeClass('active-button');
});

//Add span to numbers pagination li a
jQuery('.numbers-pagination li a').wrapInner('<span />');


// Snippets hover zoom effect
$('.snippet-img').append('<div class="zoomOverlay"><div class="snippet-img-hover"></div></div>');
$('.snippet-img').find('.zoomOverlay, .snippet-img-hover').css({
	opacity:0, 
	display: 'block'
 }); 

// 300px width snippet images
$('.snippet-img').not('.list-view .snippet-img').hover(function() {
	$('img', this).stop().animate({
		height: 178,
		marginLeft: -7,
		marginTop: -7
	}, 200);

	$(this).parent().find('.zoomOverlay, .snippet-img-hover').stop().animate({
		opacity: 1
	}, 200);

	}, function() {
	$('img', this).stop().animate({
		height: 171,
		marginLeft: 0,
		marginTop: 0
	}, 200);

	$(this).parent().find('.zoomOverlay, .snippet-img-hover').stop().animate({
		opacity: 0
	}, 200);
});

// 540px width snippet images
$('.list-view .snippet-img').hover(function() {
	$('img', this).stop().animate({
		height: 264,
		marginLeft: -7,
		marginTop: -7
	}, 200);

	$(this).parent().find('.zoomOverlay, .snippet-img-hover').stop().animate({
		opacity: 1
	}, 200);

	}, function() {
	$('img', this).stop().animate({
		height: 257,
		marginLeft: 0,
		marginTop: 0
	}, 200);

	$(this).parent().find('.zoomOverlay, .snippet-img-hover').stop().animate({
		opacity: 0
	}, 200);
});

// Validate contact form
jQuery('#contact-form').validate({
    highlight: function(element, errorClass, validClass) {
        $(element).addClass(errorClass).removeClass(validClass);
        $(element).parent().addClass(errorClass).removeClass(validClass);
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass(errorClass).addClass(validClass);
        $(element).parent().removeClass(errorClass).addClass(validClass);
    }
});



//Show social hidden sidebar or header line
$('#show-hide-social').on('click', function(){

    if ($("body").hasClass("fixed-header") || $("#frame-container").hasClass("frame-active") || $("body").hasClass('hidden-social-2')) {
	$('#hidden-social').animate({
		width: 'toggle'
	});
	} else {
    $('body').toggleClass('social-sidebar-open');
	$('#hidden-sidebar').animate({
		width: 'toggle'
	});
	}
	
	$('#show-hide-social').toggleClass('hidden-sidebar-close');

});

//Fixed Header
$(document).scroll(
	function(){
		if( $(document).scrollTop() > 1 ){
			$('.header-section').addClass('docked');
			}else{
			$('.header-section').removeClass('docked');
		}
	}
);



// Featured blocks h3, if two lines decrease padding so it stays in the middle.	
$('.featured-header h3').each(function() {

	if( $(this).height() > 22 ) {
		$(this).css('padding-top', '13px'); 
		$(this).parent().css('margin-bottom', '10px'); 
	}

});


});