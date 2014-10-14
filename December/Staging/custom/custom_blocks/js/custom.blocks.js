(function($){
   Drupal.behaviors.custom_blocks = {
     attach: function (context, settings) {
	    $('form#custom-blocks-form').find('label').addClass('element-invisible');
		$('form#custom-blocks-form').find('div.form-textarea-wrapper').removeClass('resizable resizable-textarea');
		$('form#custom-blocks-form').find('div#success-message').delay(1000).fadeOut('slow');
		$('form#custom-blocks-form').find('textarea').val('');
	 }
    };
})(jQuery);