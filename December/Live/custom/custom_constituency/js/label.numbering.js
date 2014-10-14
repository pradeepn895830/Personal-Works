(function($){
    $(document).ready(function(){
        $('label[for^=edit-title-field]').html($('label[for^=edit-title-field]').prepend('1. ').html());
        $('label[for^=edit-body-und]').html($('label[for^=edit-body-und]').prepend('2. ').html());
        $('span.fieldset-legend').html($('span.fieldset-legend').prepend('3. ').html());
        $('label[for^=edit-field-constituency-und]').html($('label[for^=edit-field-constituency-und]').prepend('4. ').html());
		
		//Move Error message inside field Wrapper
		var error = $('#edit-field-constituency').find('.messages-inline');
		if(error.length != 0){
		  $('div.form-item-field-constituency-und').append(error);
		}
	});	
})(jQuery);