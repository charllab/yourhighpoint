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

    if (win.width() >= 1379) {

        jQuery('.js--ping-pong__content-block').each(function() {
            maxHeight = maxHeight > jQuery(this).height() ? maxHeight : jQuery(this).height();
        });

        jQuery('.js--ping-pong__content-block').each(function() {
            jQuery(this).css('min-height', maxHeight + 'px');
        });
    }

    jQuery(window).on('resize', function(){
        var win = jQuery(this); //this = window

        if (win.width() >= 1379) {
            var maxHeight = -1;

            jQuery('.js--ping-pong__content-block').each(function() {
                maxHeight = maxHeight > jQuery(this).height() ? maxHeight : jQuery(this).height();
            });

            jQuery('.js--ping-pong__content-block').each(function() {
                jQuery(this).css('min-height', maxHeight + 'px');
            });
        }
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