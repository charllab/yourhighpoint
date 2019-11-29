jQuery(function () {

    // Slow Font Observing
    var font = new FontFaceObserver('NexaRustSans-Black-Free');

    font.load(null, 5000).then(function () {
        console.log('Font is available');
    }, function () {
        console.log('Font is not available after waiting 5 seconds');
    });

    // set animated heights on carousel
    jQuery('.carousel').carousel({
        interval: 9000
    }).on('slide.bs.carousel', function (e) {
        var nextH = jQuery(e.relatedTarget).innerHeight();

        jQuery(this).find('.active.carousel-item').parent().animate({
            height: nextH
        }, 500);
    });

    // developer window resizing trigger slide next to fix height
    var resizeTimer;

    jQuery(window).on('resize', function(e) {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            jQuery('.carousel').carousel('next');
        }, 250);
    });

    // find the highest of the ping-pong blocks
    var maxHeight = -1;
    var win = jQuery(window); //this = window

    if (win.width() >= 1279) {

        jQuery('.js--ping-pong__content-block').each(function() {
            maxHeight = maxHeight > jQuery(this).height() ? maxHeight : jQuery(this).height();
        });

        jQuery('.js--ping-pong__content-block').each(function() {
            jQuery(this).css('min-height', maxHeight + 'px');
        });
    }

    jQuery(window).on('resize', function(){
        var win = jQuery(this); //this = window

        if (win.width() >= 1279) {
            var maxHeight = -1;

            jQuery('.js--ping-pong__content-block').each(function() {
                maxHeight = maxHeight > jQuery(this).height() ? maxHeight : jQuery(this).height();
            });

            jQuery('.js--ping-pong__content-block').each(function() {
                jQuery(this).css('min-height', maxHeight + 'px');
            });
        }
    });

    // services hover-state trigger

    jQuery('.js-services__sub-block--item').hover(
        function() {
            jQuery(this).find('.services__sub-blocks--heading').addClass('d-none');
            jQuery(this).find('.services__sub-blocks--content').addClass('d-flex');
        }, function() {
            jQuery(this).find('.services__sub-blocks--heading').removeClass('d-none');
            jQuery(this).find('.services__sub-blocks--content').removeClass('d-flex');

        }
    );

    // set page main-element mt to height of header-element
    var getHeaderHeight = function () {

        jQuery('#header').each(function() {
            headerHeight = jQuery(this).height();
            console.log(headerHeight);
            jQuery('main').css('margin-top', headerHeight + 'px');
        });
    };

    getHeaderHeight();

    jQuery(window).on('resize', function(){
        getHeaderHeight();
    });

    // remove data-toggle and expand dropdowns on mobile
    jQuery('#main-menu-mobile').find('a').removeAttr('data-toggle');

    // enable touch for bootstrap carousel
    jQuery(".carousel").on("touchstart", function(event){
        var xClick = event.originalEvent.touches[0].pageX;
        jQuery(this).one("touchmove", function(event){
            var xMove = event.originalEvent.touches[0].pageX;
            if( Math.floor(xClick - xMove) > 5 ){
                jQuery(this).carousel('next');
            }
            else if( Math.floor(xClick - xMove) < -5 ){
                jQuery(this).carousel('prev');
            }
        });
        jQuery(".carousel").on("touchend", function(){
            jQuery(this).off("touchmove");
        });
    });

    // remove empty wp-tags
    jQuery('p:empty').remove();

    // owl carousel sponsors
    jQuery('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        smartSpeed: 500,
        autoplay: true,
        navContainer: '.owl-nav-outside',
        navText: '',
        responsive:{
            0: {
                items:1
            },
            600: {
                items:3
            },
            1000: {
                items:6
            }
        }
    })

    // Animate sections
    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 200, // offset (in px) from the original trigger point
        delay: 200, // values from 0 to 3000, with step 50ms
        duration: 1200, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
    });


    // Auto target _blank external links
    targetBlankExternalLinks();

    // Remove WP Block element iframe classes
    if (jQuery('.wp-block-embed-youtube').length) {
        jQuery('.wp-block-embed-youtube').removeClass().addClass('embed-responsive-item');
    }

    // Scrolling anchors
    jQuery('.scrollable-anchor').on('click', function (e) {
        e.preventDefault();

        jQuery('html,body').animate({
            scrollTop: jQuery(this.hash).offset().top
        }, 1000);
    });
});

var trackEvent = function (name, options) {
    trackGA(name, options);
    trackPixel(name, options);
};

var trackGA = function (name, options) {
    if (typeof gtag !== 'undefined') {
        gtag('event', name, {
            'event_category': options.category,
            'event_label': options.label,
            'value': options.value || 0
        });
    }
};

var trackPixel = function (name, options) {
    if (typeof gtag !== 'undefined') {
        fbq('track', 'Lead', {
            'event_category': options.category,
            'event_action': name,
            'value': options.value || 0,
            'currency': 'CAD'
        });
    }
};

var targetBlankExternalLinks = function () {
    var internalLinkRegex = new RegExp('^((((http:\\/\\/|https:\\/\\/)(www\\.)?)?'
        + window.location.hostname
        + ')|(localhost:\\d{4})|(\\/.*))(\\/.*)?$', '');

    jQuery('a').filter(function () {
            var href = jQuery(this).attr('href');
            return !internalLinkRegex.test(href);
        })
        .each(function () {
            jQuery(this).attr('target', '_blank');
        });
};

