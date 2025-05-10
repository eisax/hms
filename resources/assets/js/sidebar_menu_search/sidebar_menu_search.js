'use strict';

$(document).ready(function () {
    // Search functionality
    listenKeyup('#menuSearch', function () {
        let value = $(this).val().toLowerCase();
        $('.nav-item').filter(function () {
            $('.no-record').addClass('d-none');
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            checkEmpty();
        });
    });

    function checkEmpty() {
        if ($('.nav-item:visible').length === 0) {
            $('.no-record').removeClass('d-none');
        }
    }

    // Menu toggle functionality
    listenClick('.menu-toggle', function() {
        $('.sidebar-menu').toggleClass('active');
        $('body').toggleClass('menu-open');
    });

    // Close menu when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.sidebar-menu').length && 
            !$(e.target).closest('.menu-toggle').length) {
            $('.sidebar-menu').removeClass('active');
            $('body').removeClass('menu-open');
        }
    });

    // Handle window resize
    $(window).on('resize', function() {
        if (window.innerWidth > 991.98) {
            $('.sidebar-menu').removeClass('active');
            $('body').removeClass('menu-open');
        }
    });

});
