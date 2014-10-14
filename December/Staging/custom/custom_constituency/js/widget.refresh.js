(function($) {
  Drupal.behaviors.custom_constituency = {
  attach: function (context, settings) {
      // Fix easy_social.
      $('.easy_social_box').once('easy-social-box', function() {
        if (twttr && twttr.widgets && twttr.widgets.load) {
          twttr.widgets.load();
        }
        if (gapi && gapi.plusone && gapi.plusone.go) {
          gapi.plusone.go();
        }
      });
  }
  };
})(jQuery);