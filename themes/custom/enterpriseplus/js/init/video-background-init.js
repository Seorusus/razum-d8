jQuery(document).ready(function($) {
  $("body").addClass("video-bg-active");
  $(".video-bg-active .media-background").vide({
    mp4: drupalSettings.enterpriseplus.VideoBackgroundInit.PathToVideo_mp4,
    webm: drupalSettings.enterpriseplus.VideoBackgroundInit.PathToVideo_webm,
    poster: drupalSettings.enterpriseplus.VideoBackgroundInit.pathToVideo_jpg
  },{
    posterType: 'jpg',
    className: 'video-container'
  });
});