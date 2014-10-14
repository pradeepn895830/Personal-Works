(function($){
    $(document).ready(function(){
	
	    $('form#volunteer-signup-form').submit(function(event){
		     event.preventDefault();
			 alert('You Have already applied for Karma Yogi.');
		});
		
	});
})(jQuery);
