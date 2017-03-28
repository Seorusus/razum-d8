jQuery(document).ready(function($) {
  if($(".banner .slideshow-fullscreen").length>0) {
    $(".header-container").addClass("js-transparent-header");
    $(".header-container header.header").addClass(" region--dark-background region--light-typography");
    $(".header-container .header-top").addClass(" region--dark-background region--light-typography");
    $(".header-container header.header").removeClass("region--dark-typography region--white-background");
    $(".header-container .header-top").removeClass("region--dark-typography region--white-background");
  } else {
    $(".header-container").removeClass("js-transparent-header");
    $(".header-container header.header").removeClass("region--dark-background region--light-typography");
    $(".header-container .header-top").removeClass("region--dark-background region--light-typography");
    $(".header-container header.header").addClass("region--dark-typography region--white-background");
    $(".header-container .header-top").addClass("region--dark-typography region--white-background");
  };
  var color = $(".header-container.js-transparent-header header.header").css("background-color").replace(")", "," + drupalSettings.enterpriseplus.transparentHeader.transparentHeaderOpacity + ")").replace("rgb", "rgba");
  $(".header-container.js-transparent-header header.header").css("background-color", color);
});
