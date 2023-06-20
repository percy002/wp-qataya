jQuery(document).ready(($) => {
    $('.slider').slider({
        indicators:false,        
    }).css('height','90vh');

    // carousel
    $(".carousel-product").carousel({
        fullWidth: true,
        indicators: false,
        // nowrap: true,
        duration: 200,
    });

         // next carousel
    $(".moveNextCarousel").click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(".carousel").carousel("next");
    });

    // prev carousel
    $(".movePrevCarousel").click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(".carousel").carousel("prev");
    });
    //   navbar
    $(".sidenav").sidenav();
    
    $('.materialboxed').materialbox();


    // dropdown menu principal
	$(".dropdown-trigger").dropdown({
		hover: true,
    autoTrigger:false,
    // coverTrigger:false,
    // constrainWidth: false,
	});
    //submenu materialize wordpress
    // midificacion para submenu principal
  // agregar clases y id
	$( "#main-menu .sub-menu" ).each(function(index1) {
		$(this).addClass( "dropdown-content" );
		$(this).attr('id', 'dropdown' + index1);
	});

	// Get li parents, identify which have sub-menus
	$( "ul#main-menu li.menu-item-has-children > a" ).each(function(index) {
		$(this).addClass('dropdown-trigger');
		$(this).attr('data-target', 'dropdown' + index);
	});
	

	// dropdown menu principal
	$(".dropdown-trigger").dropdown({
		hover: true,
    autoTrigger:false,
		coverTrigger:false,
    constrainWidth: false,
	});

    // modificacion para submenu mobile
    
  $( "#slide-out li.menu-item-has-children" ).wrapInner("<li class=''/>").wrapInner("<ul class='collapsible' />");
  
  $( "#slide-out li.menu-item-has-children > ul>li>a" ).each(function() {
    $(this).addClass('collapsible-header');
    $(this).removeAttr("href");
    $(this).append(`<i class="material-icons right" style="font-size: 3rem;">arrow_drop_down</i>`)
  
	});
  
  $( "#slide-out > li.menu-item-has-children ul>li>ul" ).each(function() {
    $(this).wrapAll("<div class='collapsible-body' />");
	});
    //collapsible
  $(".collapsible").collapsible();
})