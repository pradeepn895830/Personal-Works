(function($){
   Drupal.behaviors.custom_volunteer = {
     attach: function (context, settings) {
	   var intro = $('div#body-add-more-wrapper').find('div#intro');
	   $('div#body-add-more-wrapper').find('.form-textarea-wrapper').prepend(intro);
	   $('div#body-add-more-wrapper').find('.form-textarea-wrapper').removeClass('resizable resizable-textarea');
	   $('label[for=edit-field-terms-comdition-und]').addClass('element-invisible');
	   $('label[for=edit-field-disclaimers-und]').addClass('element-invisible');
	   //Remove Upload image button
	   $('input[id=edit-field-upload-photo-und-0-upload-button]').attr('class', 'element-invisible');
	   //Remove form labels and put as placeholder
	   $('form#volunteer-registration-node-form').find('div.field-type-text').not('div.field-name-field-disclaimer').each(function(index, element){
	       var label = $(this).find('label').text();
		   $(this).find('label').addClass('element-invisible');
		   $(this).find('input').attr('placeholder', label);
	   });
	   /*$('form#volunteer-registration-node-form').find('div.field-type-taxonomy-term-reference').each(function(index, element){
	       var label = $(this).find('label').text();
		   $(this).find('label').addClass('element-invisible');
		   $(this).find('input').attr('placeholder', label);
	   });*/
	   $('form#volunteer-registration-node-form').find('div.field-type-email').each(function(index, element){
	       var label = $(this).find('label').text();
		   $(this).find('label').addClass('element-invisible');
		   $(this).find('input').attr('placeholder', label);
	   });
	   /*$('form#volunteer-registration-node-form').find('div.field-type-phone-number').each(function(index, element){
	       var label = $(this).find('label').text();
		   $(this).find('label').addClass('element-invisible');
		   $(this).find('input').attr('placeholder', label);
	   });*/
	   $('form#volunteer-registration-node-form').find('div.field-widget-options-select').each(function(index, element){
	       var label = $(this).find('label').text();
		   $(this).find('label').addClass('element-invisible');
		   $(this).find('select > option:first-child').text(label);
	   });
	   
	   //Change text to url
	   var link = Drupal.settings.customvolunteer.tpath;
	   var text = $('label[for=edit-field-terms-comdition-und-1]').text();
	   var termcondition = $('<a href="'+link+'" target="_blank">'+text+'</a>');
       $('label[for=edit-field-terms-comdition-und-1]').html(termcondition);
	 }
    };   
})(jQuery);