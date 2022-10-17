jQuery(function ($) {
    /**
     * Parallax
     */
    var scrollCenter = $(window).scrollTop() + ($(window).height() / 2);

    // Get parallax elements
    var $parallaxElements = $('[data-grimlock-animate-parallax]');

    var calcPos = function ($el, scrollCenter) {
        // Get effect speed
        var speed = ($el.data('grimlock-animate-parallax') / 2) || 0.2;

        // Reset transform3d before getting the position of the element
        $el.css('transform', function () {
            return 'translate3d(0px, 0px, 0)';
        });
        var elementCenter = $el.offset().top + ($el.height() / 2);

        // Change the position of the element
        $el.css('transform', function () {
            var offset = parseInt((elementCenter - scrollCenter) * speed);
            return 'translate3d(0px, ' + offset + 'px, 0)';
        });
    };

    // Initialize parallax elements positions on page load
    $parallaxElements.each(function () {
        $(this).css('will-change', 'transform');

        calcPos($(this), scrollCenter);
    });

    $(window).scroll(function() {
        scrollCenter = $(window).scrollTop() + ($(window).height() / 2);

        $parallaxElements.each(function () {
            calcPos($(this), scrollCenter);
        });
    });

    /**
     * Scroll Reveal
     */
    window.sr = ScrollReveal();
    var $revealElements = $('[data-grimlock-animate-scroll-reveal]');

    $revealElements.each(function () {
        var revealOptions = $(this).data('grimlock-animate-scroll-reveal') || {};

        var $elements = $(this);
        if (revealOptions.selector) {
            $elements = $(this).find(revealOptions.selector);
        }

        $elements.css('visibility', 'hidden');

        if ($elements.length) {
            sr.reveal( $elements.get(), revealOptions, revealOptions.interval );
        }
    });
});