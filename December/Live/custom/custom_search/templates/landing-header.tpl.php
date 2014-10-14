<?php global $language; ?>
<!-- Site Branding -->
<div class="siteBrand clearfix">
	<div class="siteLogo">                	
		<div class="logoMessage">
			<p><?php print t('A pledge, to make the DNA of India stronger.'); ?></p>
			<p class="msg">
			  <?php print t("India’s first hyper-local digital platform to promote better");?>
			  <a href="javascript:void(0);" id="governanceOverlay"><?php print t('governance.'); ?></a>
			  <!-- Bad Practices to add Hindi Translation -->
			  <?php if($language->language == 'hi'): ?>
			    <?php print t('lane ke liye'); ?>
			  <?php endif; ?>
			</p>
		</div>
		<div class="calltoAction">
			<!-- <p>Are you ready to participate? </p> -->
			<?php
				/*if (user_is_logged_in()){
				  // Logged in user
				$classes = array();
				  $classes[] = 'buttonLink';

				  $options = array();
				  $options = array('attributes' => array('class' => $classes, 'rel' => 'nofollow'));
				  print l('Yes, I am in', 'node/add/volunteer-registration', $options);
				}
				else {
				 _ajax_register_include_modal();
				  $classes = array();
				  $classes[] = 'ctools-use-modal';
				  $classes[] = 'ctools-modal-ctools-ajax-register-style';

				  // Provide default options for ajax modal link.
				  $options = array('attributes' => array('class' => $classes, 'rel' => 'nofollow'));

				  print l('Yes, I am in', 'ajax_register/register/nojs', $options);
				}*/
				$form_state = array('markup' => TRUE);//t('Connect with your locality to know it better.');
				print drupal_render(drupal_build_form('explore_localities_form', $form_state));
			?>
		</div> 
	</div>  
	<div class="siteBanner">           
		<div class="map">
			<img src="../sites/all/themes/project2welve/images/banner-india-map.png"> 
		</div>
	</div>
</div>


<!-- Why Join Site ? -->
<div class="joinSite">
	<div class="wrapper">
    	<!-- <h3><?php //print t('Why join I AM IN ?'); ?></h3> -->
        <div class="whyJoin clearfix" style="display:block;">
            	<!-- <div class="subTitle"><?php print t('It\'s a way for every Indian to make 2 vital things part of their DNA.'); ?></div> -->
            	<div class="vitalThings">
                	<div class="image">
               	    	<img src="../sites/all/themes/project2welve/images/stay-informed-vital.png"> 
                    </div>
                    <div class="details">
                      <h4><?php print t('Stay Informed'); ?></h4>
                      <p><?php print t('Get local news, know about your rights and responsibilities, get all relevant Government Data and much more.'); ?></p>
                    </div>
                </div>                	
                    <div class="divider">
               	    	<img src="../sites/all/themes/project2welve/images/vital-divider.png"> 
                    </div>                    
                <div class="vitalThings">
                	<div class="image">
               	    	<img src="../sites/all/themes/project2welve/images/getting-involved-vital.png"> 
                    </div>
                    <div class="details">
                    	<h4><?php print t('Get Involved'); ?></h4>
                        <p><?php print t('Report and support local issues, discuss with the community, find solutions and follow your local representatives.'); ?></p>
                    </div>
                </div>                
             </div>
             </div>    
</div>