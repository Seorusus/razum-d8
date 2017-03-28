var Drupal = Drupal || {};

(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.searchBlock = {
    attach: function (context, settings) {
        $('.search-icon')
          .click(function () {
            console.log(1);
            $('.region-top-first .menu').fadeOut(300);
             $('.search').addClass('active');
          });
        $('.search-clear')
          .click(function () {
            console.log(2);
            $('.search').removeClass('active');
            $('.region-top-first .menu').fadeIn(600);
          });
    }
  };

})(jQuery, Drupal);

//(function ($,Drupal) {
//
//  Drupal.behaviors.sampleTab = {
//    attach: function (context, settings) {
//      $(document).ready(function() {
//        console.log("ready");
//        /* This portion is not working */
//        $("body").on('click',".title",function () {
//          console.log( $( this ).text() );
//          alert("clicked");
//        });
//
//        /* This portion is working fine */
//        $("body").click(function() {
//          console.log("clicked");
//        });
//
//      });
//    }
//  };
//})(jQuery,Drupal);