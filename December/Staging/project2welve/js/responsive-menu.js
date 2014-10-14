(function($){
   Drupal.behaviors.responsiveMenu = {
     attach: function (context) {
		//Get Window & Content Size
		/*var windowsize = $(window).width();
		if(windowsize > 600)
		  $('.responsive-menu-wrapper').hide()
		else
		  $('.navigation').show();
		
		$(window).resize(function() {
		    windowsize = $(window).width();
			if(windowsize > 600){
			  $('.responsive-menu-wrapper').hide();
			  $('.navigation').show();
			}else{
			  $('.responsive-menu-wrapper').show();
			  $('.navigation').hide();
			}  
		});	*/
		  
		$('div#mobnav-btn',context).click(function(){
			$('.sf-menu').toggleClass("xactive");
		});
		$('div.mobnav-subarrow', context).parent().addClass("xpopdrop");
	 }
    };    
})(jQuery);