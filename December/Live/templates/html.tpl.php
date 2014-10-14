<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>
 
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lte IE 7]>
<link type="text/css" rel="stylesheet" href="http://www.iamin.in/sites/all/themes/project2welve/css/ie-7.css?lu1txi" media="all" />
<![endif]-->
<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"3xIih1aMQV00g0", domain:"iamin.in",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=3xIih1aMQV00g0" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->
<script type='text/javascript' src="http://www.consumergenepool.com/_gp_tracker.js"></script>
<script type='text/javascript'> tracker = new gp_tracker("_gpcid,CGP_524a5a9b28458"); </script>
</head>

<?php //flush(); ?>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <div id="constituency" class="element-invisible">
	  <?php 
		if(user_is_logged_in() && module_exists('custom_constituency')){
		   print l(t('Locality Finder'), 'consfinder/mylocality/nojs', array('attributes' => array('class' => array('ctools-use-modal', 'ctools-modal-ctools-ajax-register-style'), 'id' => 'global-mylocality-finder')));
           print l(t('Constituency Finder'), 'consfinder/constituency/nojs', array('attributes' => array('class' => array('ctools-use-modal', 'ctools-modal-ctools-ajax-register-style'), 'id' => 'global-constituency-finder')));
		}
	  ?>
  </div>


 <script type="text/javascript">
//This function will hide the err msgs on click...
    (function($) {
      //messages
	  $("#messages").live('click',function(){
            $('#messages').slideUp('slow');
       })
	   
	  
    })(jQuery);
	
	
</script>



 <?php 
  //This Code is moved in custom_search module, refer custom-search.js 
  //if( drupal_is_front_page() || current_path()=='node/19916' ){  
  /*if( drupal_is_front_page()){  ?>
 	 <script type="text/javascript">
    (function($) {
		
        $(window).load(function(){
	    $('#custom_search_form_wrapper').delay('slow').slideDown('slow');
        });
		
	$("#custom_search_form_wrapper .closeBtn").live('click',function(){
            $('#custom_search_form_wrapper').slideUp('slow');
        })	
			
		
			
			
    })(jQuery);
</script>
   
<?php }*/?>
  <?php
   if( drupal_is_front_page()){  ?>
    
  <script type="text/javascript">
/*    (function($) {
        $(window).load(function(){
			$('.joinSite  h3').click(function() {
			  $( ".joinSite .whyJoin.clearfix" ).slideToggle( 'slow', function() {
				$('.joinSite  h3').toggleClass('open', $(this).is(':visible'),500);
			  });
			});
        });
    })(jQuery);

(function($) {
  $(document).ready(function(){
  
   $('.closeBtn-overlay').live('click',function(){
     $('#landingGovernancePop').fadeOut('slow');
     })
   });
   
   $('.logoMessage a').live('click',function(){
     $('#landingGovernancePop').fadeIn('slow');
     });
   
  })(jQuery);*/
</script>

<!-- <div id="landingGovernancePop" class="overlay" style="display:none;">
<div class="overlayWrap">
<div class="closeBtn-overlay" >X</div>
<div class="content"><img src="../sites/all/themes/project2welve/images/governance.jpg"></div>
</div>
<div class="black_overlay"></div>
</div> -->

  <?php } ?>
  
  <!--   <script type="text/javascript">
var fby = fby || [];
fby.push(['showTab', {id: '5744', position: 'right', color: '#FDAE19'}]);
(function () {
    var f = document.createElement('script'); f.type = 'text/javascript'; f.async = true;
    f.src = '//cdn.feedbackify.com/f.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(f, s);
})();
</script>
  
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-40275746-10']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> -->



</body>
</html>
