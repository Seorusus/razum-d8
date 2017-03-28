jQuery(document).ready(function($) {
  $(".mt-carousel-collections").owlCarousel({
    items: 4,
    itemsDesktopSmall: [992,2],
    itemsTablet: [768,2],
    autoPlay: drupalSettings.enterpriseplus.owlCarouselCollectionsInit.owlCollectionsEffectTime,
    navigation: true,
    pagination: false,
    navigationText: false
  });
});
