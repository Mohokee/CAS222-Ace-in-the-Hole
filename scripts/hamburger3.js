/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

/*
File Name: hamburger3.js
Date: 5/04/18
Programmer: Jasmin Kissinger
*/


$(document).ready(function () {


    $('.menuBtn').click(function () {
        $('.responsiveMenu').slideToggle('slow');
    });


});
