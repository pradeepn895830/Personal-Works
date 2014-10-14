(function($){
   $(document).ready(function(){
      //Get Window & Content Size
      var windowsize = $(window).width();
      var contentPane = $('#region-content').width();
      //Add Window Resize event
      $(window).resize(function() {
         windowsize = $(window).width();
         contentPane = $('#region-content').width();
         if(contentPane > 750 || windowsize > 750){
           $('#frame-wide').show();
           $('#frame-narrow').hide();
           $('#quiz-frame').css({'width':'100%','height':'840px'});
         }else{
           $('#frame-wide').hide();
           $('#frame-narrow').show();
           $('#quiz-frame').css({'width':'100%','height':'900px'});
         }
      });
   });
})(jQuery);
