(function($){
     $(document).ready(function(){
		 /*$.post(Drupal.settings.basePath + '?q=constituencydefault',{},function(data){ 
			    if(data == 0){
				//$('a#global-constituency-finder').trigger('click');
			    }  
		 });*/ 
		 $('ul#main-menu').find('li.menu-641 > a').click(function(event){
		     event.preventDefault();
		     $('a#global-mylocality-finder').trigger('click');
		 });
		 //Hide Child Item
		 $('ul#main-menu').find('li.menu-641 > ul').attr('class', 'element-invisible');
	 });
})(jQuery);
