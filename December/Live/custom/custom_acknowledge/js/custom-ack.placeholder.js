(function ($) {

Drupal.behaviors.customAcknowledgePlaceholder = {
  attach: function (context){
	
   //Remove field lable and put as placeholder
    $('form#custom-acknowledge-form').find('div.form-type-textfield').each(function(index, element){
	    var label = $(this).find('label').text();
		if(label.length > 0){
			$(this).find('label').addClass('element-invisible');
			$(this).find('input').attr('placeholder', label);
		}
	});	

  }
}

})(jQuery);
