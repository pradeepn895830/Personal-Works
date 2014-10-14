(function($){
   Drupal.behaviors.modalContent = {
     attach: function (context, settings) {
	    //Add jScrollPane js in modal window
		
		$('form#constituency-search-list').find('div.form-radios').jScrollPane();
		$('form#constituency-finder-adv').find('div.form-radios').jScrollPane();
		var defaultCons, setDeafult = '';
		if(Drupal.settings.customConstituency){
		   defaultCons = Drupal.settings.customConstituency.defaultCons;
		   for(var i=0;i<defaultCons.length;i++){ if(defaultCons[i].length !=0){ setDeafult = defaultCons[i];}}
		}  
        var container = $('form#constituency-finder-form').find('div.form-radios').jScrollPane();
		api = container.data('jsp');
		if(api && setDeafult){api.scrollToElement('#edit-constituency-'+setDeafult,true);}
		
		$('#modalContent').find('a.close').click(function(){
		    $('#custom_search_form_wrapper').show();
		});
		$(document).keyup(function(e) {
			if (e.keyCode == 27) { $('#custom_search_form_wrapper').show(); }   
        });
	 }
    };
})(jQuery);
