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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
