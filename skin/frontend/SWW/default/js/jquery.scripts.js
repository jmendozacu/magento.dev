// This is important!
jQuery.noConflict();
jQuery(document).ready(function() {
    jQuery('.navbar .parent').addClass('dropdown dropdown-toggle');
    //Adding the menu effects
    jQuery('.navbar .parent').attr("data-toggle", "dropdown");
    jQuery('.navbar .parent').attr("data-hover", "dropdown");
    jQuery('.navbar .parent').attr("data-animations", "flip flip fadeInLeft bounce");


    jQuery('.navbar a.level-top').addClass('dropdown-toggle');
    jQuery('.navbar li.parent ul').addClass('dropdown-menu');
    jQuery('.navbar li.level1 ul').wrap('<li class="dropdown-submenu"/>');
    jQuery('.navbar ul.nav li.level0.dropdown').hover(function() {
        jQuery(this).find('.level0.dropdown-menu').stop(true, true).fadeIn();
    }, function() {
        jQuery(this).find('.level0.dropdown-menu').stop(true, true).fadeOut();
    });

    jQuery("#zoom").click(function() {
        jQuery("a[rel^='prettyPhoto']:first").click();
    });
    jQuery("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'facebook',
        opacity: 0.50
    });
});
