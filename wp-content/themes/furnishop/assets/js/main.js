"use strict";

(function ($) {
  $(document).ready(function (e) {
    $('p:empty').remove();
    $('.woocommerce-loop-product__title').matchHeight();
  });
})(jQuery);