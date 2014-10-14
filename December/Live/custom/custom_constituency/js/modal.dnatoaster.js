(function($){
   Drupal.behaviors.dnatoaster = {
     attach: function (context) {
	    //console.log(Drupal.settings.basePath);

		var dnatoasterBox = $('<div></div>');
		dnatoasterBox.attr({'class':'toasterWrapper', 'id':'dnatoaster', 'style':'display:none;'});
		var html = '<div class="toasterPage"><div class="closeBtn" id="closetoaster"><a href="javascript:void(0);"><img src="'+Drupal.settings.basePath+'sites/all/themes/project2welve/images/x-btn.jpg" width="34" height="34" /></a></div><div class="toasterInnerContent"><div class="dnaLogoBig" style="display:block"><a href="void:javascript()"><img src="'+Drupal.settings.basePath+'sites/all/themes/project2welve/images/new-delhi-logo.png" width="145" height="90"/></a></div><div class="toasterDesc"><p class="desc1">Keep your finger on the Pulse of your locality</p><p class="desc2">Hyper local <span>NEWS</span> from the by-lanes of <span>'+Drupal.settings.dnatoaster.consname+'</span><a class="readMore" href=" http://dna.iamin.in/'+Drupal.settings.dnatoaster.pathtrail+'" target="_blank">READ MORE</a></p></div><div class="dnaLogoMob" style="display:none"><a href=""><img src="'+Drupal.settings.basePath+'sites/all/themes/project2welve/images/new-delhi-logo-mob.png" width="100" height="62"/></a></div><div class="clear"></div></div></div>';
		dnatoasterBox.append(html);
		
		//Append to body
		$('body').append(dnatoasterBox);
		
		//Open DNA Toaster
		$('div#dnatoaster').slideDown('slow');
		
		//destroy Governance Overlay
		$('#closetoaster').click(function(event){
		    event.preventDefault();
			dnatoasterBox.slideUp();
		});
	 }
    };
})(jQuery);