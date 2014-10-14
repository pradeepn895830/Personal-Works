(function($){
   Drupal.behaviors.removeUpload = {
     attach: function (context) {
	   //Remove Upload image button
	   $('#edit-field-photo-und-0-upload-button').attr('class', 'element-invisible');
	   $('#edit-field-issue-image-und-0-upload-button').attr('class', 'element-invisible');
	 }
	}
})(jQuery);	