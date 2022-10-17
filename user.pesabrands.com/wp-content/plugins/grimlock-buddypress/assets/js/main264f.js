'use strict';

/*global
 jQuery
 */

/*eslint
 yoda: [2, "always"]
 */

/**
 * main.js
 *
 * BuddyPress enhancements.
 */

jQuery(function ($) {

    priorityNav.init({
        mainNavWrapper: '#buddypress div.profile-content__nav-wrapper',
        mainNav: '#buddypress div.profile-content__nav-wrapper .priority-ul',
        navDropdownLabel: '<i class="fa fa-ellipsis-v"></i>',
        throttleDelay: 0,
        breakPoint: 768,
        navDropdownBreakpointLabel: grimlock_buddypress.priority_nav_dropdown_breakpoint_label
    });

    /**
     * Filter select enhancements
     */

    var $filterSelects = $( '.dir-filter .select-style select' );

    $filterSelects.each( function() {

        var $this = $( this );

        // Auto size filter select according to selected option width
        var $tmpSelect = $( '<select></select>' );
        var $tmpOption = $( '<option></option>' );

        $tmpSelect.html( $tmpOption );
        $tmpSelect.css( {width: 'auto', display: 'none'} );
        $tmpOption.html( $this.find( 'option:selected' ).text() );
        $this.after( $tmpSelect );
        $this.width( $tmpSelect.width() );

        // Add class to filter select parent according to selected option
        var filterValue = $this.val().split( ',' )[ 0 ];
        $this.closest( '.select-style' ).addClass( 'option-' + filterValue );

        $this.change( function() {
            $tmpOption.html( $this.find( 'option:selected' ).text() );
            $this.width( $tmpSelect.width() );

            $this.closest( '.select-style' ).removeClass( 'option-' + filterValue );
            filterValue = $this.val().split( ',' )[ 0 ];
            $this.closest( '.select-style' ).addClass( 'option-' + filterValue );

            $loadingList = $( '.loading-list' );

            // Add loading class to loading list when content is loading
            if ( $loadingList.length ) {
                $loadingList.addClass( 'loading' );
            }
        } );

    } );

    /**
     * Member swap ajax + touch support
     */

    var $membersContainer = $( '#members-index-swap ul#members-list' );
    var $members = $( '#members-index-swap ul#members-list li' );
    var $previousButton = $( '.bp-swap-pagination button.prev' );
    var $nextButton = $( '.bp-swap-pagination button.next' );
    var currentIndex = 0;
    var maxPage = $( '.bp-swap-pagination .pagination-links' ).data( 'max-page' );
    var currentPage = 1;

    $previousButton.hide().removeClass( 'd-none' );

    if ( $membersContainer.length && $members.length ) {
        var hammer = new Hammer( $membersContainer.get( 0 ) );
        var onSwapPrevious = function() {
            if ( $members[ currentIndex - 1 ] ) {
                $( $members[ currentIndex ] ).hide( 'drop', {direction: 'right'} );
                $( $members[ currentIndex - 1 ] ).show( 'drop', {direction: 'left'} );
                currentIndex--;
                $nextButton.show();
            }

            if ( 0 === currentIndex ) {
                $previousButton.hide();
            }
        };

        var onSwapNext = function() {
            if ( $members[ currentIndex + 1 ] ) {
                $( $members[ currentIndex + 1 ] ).hide().removeClass( 'd-none' );
                $( $members[ currentIndex ] ).hide( 'drop', {direction: 'left'} );
                $( $members[ currentIndex + 1 ] ).show( 'drop', {direction: 'right'} );
                currentIndex++;
                $previousButton.show();
            }

            if ( currentIndex === $members.length - 11 && currentPage !== maxPage ) {
                currentPage++;
                var data = {
                    'action': 'load_member_swap_page',
                    'page': currentPage
                };
                jQuery.post( grimlock_buddypress.ajax_url, data, function( response ) {
                    if ( response.success ) {
                        $membersContainer.append( response.data );
                        $members = $( '#members-list li' );
                        $nextButton.removeClass( 'loading' );
                    }
                } );
            }

            if ( currentIndex + 1 >= $members.length ) {
                if ( currentPage >= maxPage ) {
                    $nextButton.hide();
                } else {
                    $nextButton.addClass( 'loading' );
                }
            }
        };

        $previousButton.on( 'click', function( e ) {
            e.preventDefault();
            onSwapPrevious();
        } );
        hammer.on( 'swiperight', function() {
            onSwapPrevious();
        } );

        $nextButton.on( 'click', function( e ) {
            e.preventDefault();
            onSwapNext();
        } );
        hammer.on( 'swipeleft', function() {
            onSwapNext();
        } );
    }


    /**
     * Theme enhancements for BuddyPress Members Single Messages Compose.
     */

    var sendToInput = document.getElementById( 'send-to-input' );

    if ( null !== sendToInput ) {
        sendToInput.focus();
    }


    /**
     * Enhance BuddyPress loading directories
     */

        // Remove loading class from loading list when content is loaded
    var $loadingList = $( '.loading-list' );

    if ( $loadingList.length ) {
        var loadingListObserver = new MutationObserver( function() {
            if ( $loadingList.hasClass( 'loading' ) ) {
                $loadingList.removeClass( 'loading' );
            }
        } );

        loadingListObserver.observe( $loadingList.get( 0 ), {childList: true, characterData: true, subtree: true} );
    }

    // Add loading class to loading list when changing tab
    var $tabListItems = $( '.item-list-tabs ul > li' );
    var tabObserver = new MutationObserver( function( mutations ) {
        mutations.forEach( function( mutation ) {
            var $tab = $( mutation.target );

            if ( $tab.hasClass( 'loading' ) ) {
                $loadingList.addClass( 'loading' );
                $( 'html, body' ).animate( {scrollTop: '0px'}, 300 );
            }
        } );
    } );

    $tabListItems.each( function() {
        tabObserver.observe( this, {attributes: true} );
    } );


    /**
     * BuddyPress Profil animate cover image
     */

    var $itemHeader = $( '#item-header' );
    var $coverImage = $( '#header-cover-image' );

    if ( $itemHeader.length && $coverImage.length ) {

        // Increase this value to decrease the effect and vice versa
        var headerOffsetBottom = $itemHeader.offset().top + $itemHeader.height();

        var scrollTop = $( window ).scrollTop();
        var opacity = scrollTop < headerOffsetBottom ? 1 - ( scrollTop / headerOffsetBottom * 1.3 ) : 0;

		$coverImage.css({
			"opacity": opacity
		});

        $( window ).on( 'scroll', function() {
            scrollTop = $( window ).scrollTop();
            opacity = scrollTop < headerOffsetBottom ? 1 - ( scrollTop / headerOffsetBottom * 1.3 ) : 0;

			$coverImage.css({
				"opacity": opacity
			});
        } );
    }


    /**
     * Prevent max from being lower than min in age range in homepage search form
     */

    var $bpsForms = $( 'form[id^="bps_"]' );
    $bpsForms.each( function() {
        var $ageRangeSelects = $( this ).find( '.bps-range, .bps-integer-range, .bps-date-range, .bps-range-select' );
        $ageRangeSelects.each( function() {
            var $minSelect = $( this ).find( 'select[name$="[min]"]' );
            var $maxSelect = $( this ).find( 'select[name$="[max]"]' );
            var $maxSelectOptions = $maxSelect.find( 'option' );

            $minSelect.change( function() {
                var minVal = $minSelect.val();
                var maxVal = $maxSelect.val();

                if ( maxVal && minVal > maxVal ) {
                    $maxSelect.val( minVal );
                }

                $maxSelectOptions.each( function() {
                    var optionVal = $( this ).val();
                    if ( parseInt( minVal ) > parseInt( optionVal ) ) {
                        $( this ).hide();
                    } else {
                        $( this ).show();
                    }
                } );
            } );
        } );
    } );


    /**
     * Enhance BuddyPress Search form
     */

    var $filterButton = $( '.bps_header .last:not(.bps-btn--grimlock-buddypress)' );
    var $modal = $( '.bps_form-wrapper' );

    // Click on filter btn to show form modal
    $filterButton.on( 'click', function() {
        if ( $modal.length ) {
            $( 'body' ).addClass( 'ov-h' );
            $modal.removeClass( 'd-none' ).addClass( 'd-block' );
            $modal.after( '<div class="bps_directory_close close_bps"></div>' );

            // Click to hide form modal
            var $closeModal = $( '.close_bps' );
            $closeModal.on( 'click', function() {
                $( 'body' ).removeClass( 'ov-h' );
                $modal.removeClass( 'd-block' ).addClass( 'd-none' );
                $closeModal.remove();
            } );
        }
    } );

    $( document ).on( 'click', '.bps_form-wrapper', function( e ) {
        var $closeModal = $( '.close_bps' );
        if ( $( e.target ).hasClass( 'bps_form-wrapper' ) ) {
            $( 'body' ).removeClass( 'ov-h' );
            $modal.removeClass( 'd-block' ).addClass( 'd-none' );
            $closeModal.remove();
        }
    } );


    /**
     * Enhance BuddyPress match percent button
     */

    var $matchButton = $( '.hmk-trigger-match div.hmk-get-percent' );
    var matchButtonObserver = new MutationObserver( function( mutations ) {
        mutations.forEach( function( mutation ) {
            var $button = $( mutation.target );
            var buttonText = $button.html();

            if ( buttonText.includes( 'Please wait' ) ) {
                $button.addClass( 'loading' );
            } else {
                $button.removeClass( 'loading' );
            }

            var $matchText = $button.find( '.hmk-member-match-percent' );
            if ( $matchText.length && ! $matchText.find( '.hmk-match-value' ).length ) {
                var matchTextSplit = $matchText.html().split( '%' );

                if ( 25 > matchTextSplit[ 0 ] ) {
                    $button.addClass( 'hmk-match-value-lower' );
                } else if ( 50 > matchTextSplit[ 0 ] ) {
                    $button.addClass( 'hmk-match-value-low' );
                } else if ( 75 > matchTextSplit[ 0 ] ) {
                    $button.addClass( 'hmk-match-value-high' );
                } else if ( 100 >= matchTextSplit[ 0 ] ) {
                    $button.addClass( 'hmk-match-value-higher' );
                }

                $matchText.html( '<span class="hmk-match-value">' + matchTextSplit[ 0 ] + '%</span> <span class="hmk-match-text">' + matchTextSplit[ 1 ] + '</span>' );
            }
        } );
    } );

    $matchButton.each( function() {
        matchButtonObserver.observe( this, {childList: true, characterData: true} );
    } );


    /**
     * Enhance BuddyPress group actions loading
     */

    var $groupButtons = $( 'div.group-button' );
    var groupButtonObserver = new MutationObserver( function( mutations ) {
        mutations.forEach( function( mutation ) {
            var $button = $( mutation.target );

            $button.removeClass( 'loading' );
        } );
    } );

    $groupButtons.each( function() {
        groupButtonObserver.observe( this, {childList: true, characterData: true} );
    } );

    $groupButtons.on( 'click', function() {
        $( this ).addClass( 'loading' );
    } );


    /**
     * Enhance BuddyPress friend requests actions
     */

    var $friendRequestsActions = $( '.bp-card-list--members__item .card-body-actions' );
    var friendRequestsActionsObserver = new MutationObserver( function( mutations ) {
        mutations.forEach( function( mutation ) {
            var $acceptButton = $( mutation.target ).find( '.button.accept' );
            var $rejectButton = $( mutation.target ).find( '.button.reject' );

            if ( ! $acceptButton.length && $rejectButton.length ) {
                $( mutation.target ).closest( '.bp-card-list--members__item' ).addClass( 'state--accepted' );
            } else if ( $acceptButton.length && ! $rejectButton.length ) {
                $( mutation.target ).closest( '.bp-card-list--members__item' ).addClass( 'state--rejected' );
            }
        } );
    } );

    $friendRequestsActions.each( function() {
        friendRequestsActionsObserver.observe( this, {childList: true, characterData: true} );
    } );


    /**
     * Enhance BuddyPress message star actions loading
     */

    var $starButtons = $( '.thread-star .icon-state' );
    var starButtonObserver = new MutationObserver( function( mutations ) {
        mutations.forEach( function( mutation ) {
            var $button = $( mutation.target ).closest( '.thread-star .icon-state' );

            $button.removeClass( 'loading' );
        } );
    } );

    $starButtons.each( function() {
        starButtonObserver.observe( this, {childList: true, characterData: true, subtree: true} );
    } );

    $starButtons.on( 'click', function() {
        $( this ).addClass( 'loading' );
    } );


    /**
     * Enhance BuddyPress item lists
     */

    // Add loading state to message staring icons
    $( document ).on( 'click', '.message-action-star, .message-action-unstar', function() {
        $( '.icon-state' ).addClass( 'loading' );
    } );
    setTimeout( function() {
        $( '.icon-state' ).removeClass( 'loading' );
    }, 2000 );


    /**
     * Remove scroll-content event to prevent Bp message content form non scrolling
     */

    jQuery( '.bp-messages-wrap' ).off( 'mousewheel DOMMouseScroll', '.scroll-content' );
    jQuery( '.bp-messages-wrap:not(.bp-better-messages-list)' ).off( 'touchstart', '.scroll-wrapper' );


    /**
     * Add Tooltip to BP action button.
     */

    $( function() {

        var $tooltipElements = $( 'body.bp-user:not(.grimlock-buddypress--members-actions-text-displayed) #item-buttons > div > a, body.groups.single-item:not(.grimlock-buddypress--groups-actions-text-displayed) #item-buttons > div > a, body:not(.grimlock-buddypress--groups-actions-text-displayed) .bp-card-list--groups__item div.action > div > a, body:not(.grimlock-buddypress--groups-actions-text-displayed) .bp-card-list--groups__item div.action > a, body:not(.grimlock-buddypress--members-actions-text-displayed) .bp-card-list--members__item div.action > div > a, body:not(.grimlock-buddypress--members-actions-text-displayed) .bp-card-list--members__item div.action > a, #rtmedia-add-media-button-post-update, body:not(.grimlock-buddypress--members-actions-text-displayed) .bp-member-swipe-list__item div.action > div > a');

        $tooltipElements.tooltip({
            title: function() {
                return $(this).text();
            },
            offset: '0, 5',
            trigger: 'hover',
            delay: { "show": 0, "hide": 0 },
        });

        $tooltipElements.on( 'click', function() {
            $tooltipElements.tooltip('hide');
        });

    } );


});
