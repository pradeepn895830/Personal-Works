(function($){
    Drupal.behaviors.view = {
     attach: function (context, settings) {
	    $('div.view').find('.sharelinks-wrapper').each(function(index,element){
		    $(this).mouseenter(function(event){
			   event.preventDefault();
			   $(element).find('span').removeClass('element-invisible');
		     }).mouseleave(function(event){
                           event.preventDefault();
                           $(element).find('span').addClass('element-invisible');
                     });
		});
	 }
   };	 
})(jQuery);
