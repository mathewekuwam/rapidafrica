'use strict';

/*global
    jQuery
 */

/**
 * File navigation-search.js
 *
 * Theme enhancements for the search bar selected in the customizer
 */

(function ($) {

    /**
     * jQuery plugin that makes the selected element into an animated search bar
     *
     * @returns {jQuery}
     */
    $.fn.animateSearch = function () {
        var $this = $(this),
            $searchIcon = $this.find('.search-icon'),
            $searchField = $this.find('.search-field');

        $searchIcon.on('mousedown', function (e) {
            e.preventDefault();
            if ($this.hasClass('navbar-search--open')) {
                $this.removeClass('navbar-search--open');
                $searchField.blur();
            }
            else {
                $this.addClass('navbar-search--open');
                $searchField.focus();
            }
        });

        $searchField.blur(function () {
            $this.removeClass('navbar-search--open');
        });

        return this;
    };

    $(document).ready(function () {

        /**
         * Toggle navigation search form
         */
        $('.navbar-search').animateSearch();

    });

})(jQuery);
