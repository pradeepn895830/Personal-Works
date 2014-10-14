(function($){
    $(document).ready(function(){
	    //Remove lable and 
	    $('form#custom-blocks-form, form#comment-form').find('label').addClass('element-invisible');
		$('form#custom-blocks-form, form#comment-form').find('div.form-textarea-wrapper').removeClass('resizable resizable-textarea');
	    //Trigger Login form on clicking on comment body
	    $('form#volunteer-signup-form').submit(function(event){
		    event.preventDefault();
		    $('div.block-views-constituency-page-block-main').find('a.ctools-use-modal').trigger('click');
	    });
	    $('form#custom-blocks-form').submit(function(event){
		    event.preventDefault();
		    $('div.block-views-constituency-page-block-main').find('a.ctools-use-modal').trigger('click');
	    });
	    $('form#comment-form').submit(function(event){
		    event.preventDefault();
		    $('div.block-views-constituency-page-block-main').find('a.ctools-use-modal').trigger('click');
	    });
	});
})(jQuery);
