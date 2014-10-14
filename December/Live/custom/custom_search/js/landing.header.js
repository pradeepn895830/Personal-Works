(function($){
   Drupal.behaviors.landingHeader = {
     attach: function (context, settings) {
		var lang = Drupal.settings.landingheader.language;
		var image = (lang != 'en')?'governance-hindi.jpg':'governance.jpg';
		var overlayBox = $('<div></div>');
		var overlayWrap = $('<div></div>');
		overlayBox.attr({'class':'overlay', 'id':'landingGovernancePop', 'style':'display:none;'});
		overlayWrap.attr({'class':'overlayWrap'});
		overlayWrap.append('<div class="closeBtn-overlay" id="closeBtnoverlay">X</div>');
		overlayWrap.append('<div class="content"><img src="../sites/all/themes/project2welve/images/'+image+'"></div>');
		overlayBox.append(overlayWrap);
		overlayBox.append('<div class="black_overlay"></div>');
		//Append to body
		$('body').append(overlayBox);
		//Open Governance Overlay
		$('a#governanceOverlay').click(function(event){
		    event.preventDefault();
			overlayBox.fadeIn('slow');
		});
		//destroy Governance Overlay
		$('#closeBtnoverlay').click(function(event){
		    event.preventDefault();
			overlayBox.fadeOut('slow');
		});
		
		//Why join I AMIN toggle
		/*$('.joinSite  h3').click(function() {
			$( ".joinSite .whyJoin.clearfix" ).slideToggle( 'slow', function() {
			    $('.joinSite  h3').toggleClass('open', $(this).is(':visible'),500);
			});
		});*/
	 }
    };
})(jQuery);