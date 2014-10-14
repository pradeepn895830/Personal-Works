(function($){

    $(window).load(function(){
	 $('#custom_search_form_wrapper').delay('slow').slideDown('slow');
    });
		
    Drupal.behaviors.customSearch = {
     attach: function (context, settings) {
         $('#custom_search_form_wrapper').delegate('.closeBtn', 'click', function(){
            $('#custom_search_form_wrapper').slideUp('slow');
         });
     }
    }
     /*$(document).ready(function(){
	 
		 //Force Submit
		$("input#edit-keys").keypress(function(event){
		    if(event.keyCode == 13){
		        $(this).ajaxStop(function(){ 
				   this.form.submit();
                });  
		    }
		});	
		
		//Submit form on selection
		Drupal.jsAC.prototype.select = function (node) {
			this.input.value = $(node).data("autocompleteValue");
				if(jQuery(this.input).hasClass("auto_submit")){
					this.input.form.submit();
				}
		};
	
		Drupal.jsAC.prototype.hidePopup = function (keycode) {
                    // Select item if the right key or mousebutton was pressed.
                    if (this.selected && ((keycode && keycode != 46 && keycode != 8 && keycode != 27) || !keycode)) {
                        this.input.value = $(this.selected).data("autocompleteValue");
                        if(jQuery(this.input).hasClass("auto_submit")){
                            this.input.form.submit();
                        }
                    }
					
					// Hide popup.
                    var popup = this.popup;
                    if (popup) {
                        this.popup = null;
                        $(popup).fadeOut("fast", function () { $(popup).remove(); });
                    }
                    this.selected = false;
                    $(this.ariaLive).empty();
        };
		
	 });*/
}(jQuery));
