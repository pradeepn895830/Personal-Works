(function($){
   Drupal.behaviors.custom_constituency = {
     attach: function (context, settings) {
	    var sid = Drupal.settings.constituency.sid;
        var cid = Drupal.settings.constituency.cid;
		$.post(Drupal.settings.basePath + 'statecons/'+sid+'/'+cid+'/list',{},function(data){
		   $('div#block-views-constituency-page-block-main').find('.view-display-id-block_main').append(data);
		});
	 }
    };
})(jQuery);