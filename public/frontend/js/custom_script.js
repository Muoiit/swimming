jQuery(document).ready(function($) {
    "use strict";
	//Accordion 
	if ($('.accordion_cp').length) {
    $.fn.slideFadeToggle = function(speed, easing, callback) {
        return this.animate({
            opacity: 'toggle',
            height: 'toggle'
        }, speed, easing, callback);
    };
    $('.accordion_cp').accordion({
        defaultOpen: 'section1',
        cookieName: 'nav',
        speed: 'slow',
        animateOpen: function(elem, opts) { //replace the standard slideUp with custom function
            elem.next().stop(true, true).slideFadeToggle(opts.speed);
        },
        animateClose: function(elem, opts) { //replace the standard slideDown with custom function
            elem.next().stop(true, true).slideFadeToggle(opts.speed);
        }
    });
	}
	
	//HOME BANNER
    if ($('#home-banner').length) {
        $("#home-banner").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            autoplayTimeout: 1000,
            singleItem: true


        });
    }
	
	//Testimonials BANNER
    if ($('#testimonials-slide').length) {
        $("#testimonials-slide").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            autoplayTimeout: 1000,
            singleItem: true


        });
    }
	
	
	
	//MAP
	    if ($('#map_contact_1').length) {
        var map;
        var myLatLng = new google.maps.LatLng(40.82540, -73.92620);
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                stylers: [{
                    hue: '#cacaca'
                }, {
                    saturation: -100,
                }, {
                    lightness: 10
                }]
            }],
        }
        map = new google.maps.Map(document.getElementById('map_contact_1'), myOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon-2.png'
        });
        marker.getPosition();
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            zoom: 7,
            center: new google.maps.LatLng(originalLocation[0], originalLocation[1]),
            scrollwheel: false
        });
    }
	
	
	
	
	
	
	    
});