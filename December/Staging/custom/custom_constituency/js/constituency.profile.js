(function($){
   Drupal.behaviors.constituencyProfile = {
     attach: function (context, settings) {
	    //Hide Mime mail settings
		$('#edit-mimemail').attr('class', 'element-invisible');
	    //Hide Fb Connect field
        $('#edit-fboauth').attr('class', 'element-invisible');
		//Hide Private message setting fieldset
		$('#edit-privatemsg').attr('class', 'element-invisible');
		//Clone Email field and place after dob
		var Email = $('#edit-account');
		$('#edit-profile-main-field-gender').after(Email);
		//Preferred Language
		var Lang = $('#edit-locale');
		$('#edit-locale').find('legend').remove();
		$('#edit-locale').find('.description').remove();
		$('#edit-profile-main-field-qualification').after(Lang);
		$('label[for=edit-language]').html('Preferred Language');
	 }
    };
})(jQuery);