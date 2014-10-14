<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 
function project2welve_preprocess_page(&$vars) {
     //Hide Taxonomy Term Page title Set Constituency Logo
	 if (arg(0) == 'taxonomy' && is_numeric(arg(2))) {
	    $vars['title'] = '';
		$term = (array) taxonomy_term_load(arg(2));
		if(isset($term['field_logo']['und'][0]['uri']) && !empty($term['field_logo']['und'][0]['uri']))
		   $vars['logo'] = file_create_url($term['field_logo']['und'][0]['uri']);
	 }
	 if (arg(0) == 'stats' && !is_numeric(arg(1))){
	    $path = drupal_lookup_path('source', arg(1));
		$path = explode('/', $path);
		$tid = end($path);
		if(is_numeric($tid)){
	       $term = (array) taxonomy_term_load($tid);
		   if(isset($term['field_logo']['und'][0]['uri']) && !empty($term['field_logo']['und'][0]['uri']))
		     $vars['logo'] = file_create_url($term['field_logo']['und'][0]['uri']);
	    }		 
	 }	
	 
	 if((arg(0) == 'latest-issues' && !is_numeric(arg(1))) || (arg(0) == 'discussions' && !is_numeric(arg(1))) || (arg(0) == 'coc' && !is_numeric(arg(1))) || (arg(0) == 'photo-reel' && !is_numeric(arg(1))) || (arg(0) == 'news' && !is_numeric(arg(1)))) {
		$path = drupal_lookup_path('source', arg(1));
		$path = explode('/', $path);
		$tid = end($path);
     	if(is_numeric($tid)){
	       $term = (array) taxonomy_term_load($tid);
		   if(isset($term['field_logo']['und'][0]['uri']) && !empty($term['field_logo']['und'][0]['uri']))
		     $vars['logo'] = file_create_url($term['field_logo']['und'][0]['uri']);
	    }		 
	 }
	 
	 //Set Default Logo for Content type
	 if(arg(0) == 'node' && is_numeric(arg(1))){
	    $node = node_load(arg(1));
		if(isset($node->field_constituency['und'][0]['tid']) && !empty($node->field_constituency['und'][0]['tid'])){
		   $term = (array) taxonomy_term_load($node->field_constituency['und'][0]['tid']);
		   if(isset($term['field_logo']['und'][0]['uri']) && !empty($term['field_logo']['und'][0]['uri']))
		      $vars['logo'] = file_create_url($term['field_logo']['und'][0]['uri']);
		}
	 }
	 //Constituency Details Page Logo
	 if(arg(0) == 'constituency-details' && is_numeric(arg(1))){
		$term = (array) taxonomy_term_load(arg(1));
		if(isset($term['field_logo']['und'][0]['uri']) && !empty($term['field_logo']['und'][0]['uri']))
		   $vars['logo'] = file_create_url($term['field_logo']['und'][0]['uri']);
	 
	 }
	 //User pages Default logo
	 if(arg(0) == 'user' && (isset($_SESSION['defaultCons']) && !empty($_SESSION['defaultCons']))){
		$term = (array) taxonomy_term_load($_SESSION['defaultCons']);
		if(isset($term['field_logo']['und'][0]['uri']) && !empty($term['field_logo']['und'][0]['uri']))
		   $vars['logo'] = file_create_url($term['field_logo']['und'][0]['uri']);
	 }
	 
	 //Hide Page Title in Volunteer Node Form
	 if(arg(0) == 'node' && arg(1) == 'add' & arg(2) == 'volunteer-registration'){
	    $vars['title'] = '';
	 }
	 //Hide Page Title in User's Profile Page
	 if(arg(0) == 'user' && user_is_logged_in()){
	    $vars['title'] = '';
	 }

    //Add Superfish Menu
	drupal_add_css(libraries_get_path('superfish') . '/superfish.css');
	drupal_add_js(libraries_get_path('superfish') . '/jquery.hoverIntent.minified.js');
	drupal_add_js(libraries_get_path('superfish') . '/superfish.js');
	$js = "(function($){
			$(document).ready(function(){
				 $('ul#main-menu').superfish({cssArrows:false});
				
			});  
	})(jQuery)";
	drupal_add_js($js, 'inline');	 
	 
}

/**
 * Implements hook_preprocess_comment().
 */
function project2welve_preprocess_comment(&$vars) {

    // e.g. for an article content type, the template file will be comment--custom-article.tpl.php
    $vars['theme_hook_suggestion'] = 'comment__custom_' . $vars['node']->type;
} 


/**
 * Implements template_preprocess_user_picture().
 */
function project2welve_preprocess_user_picture(&$vars){
   $account = $vars['account'];
   if(isset($account->cid) && empty($account->picture)){
      if(variable_get('user_picture_default', '')){
	      $filepath = variable_get('user_picture_default', '');
		  if (isset($filepath)) {
		      $filepath = str_replace('sites/default/files/', 'public://', $filepath);
		      $alt = t("@user's picture", array('@user' => format_username($account)));
		      $vars['user_picture'] = theme('image_style', array('style_name' => '50x50', 'path' => $filepath, 'alt' => $alt, 'title' => $alt));
			  $vars['user_picture'] = l($vars['user_picture'], 'user/'.$account->uid, array('html'=>TRUE));
		  }
	  }
   }	
}

/**
 * Override default user login/register template 
 */

function project2welve_theme() {

	$items = array();
	 
	$items['user_login'] = array(
			'render element' => 'form',
			'path' => drupal_get_path('theme', 'project2welve') . '/templates/user',
			'template' => 'user-login-register',
	);
	$items['user_register_form'] = array(
			'render element' => 'form',
			'path' => drupal_get_path('theme', 'project2welve') . '/templates/user',
			'template' => 'user-login-register',
	);
	$items['user_pass'] = array(
			'render element' => 'form',
			'path' => drupal_get_path('theme', 'project2welve') . '/templates/user',
			'template' => 'user-password',
	);
   return $items;
}

/**
 * Add Subchild and superfish js to main menu
 */
 
function project2welve_menu_tree__main_menu($variables) {
  return '<ul id="main-menu" class="links inline clearfix main-menu">' . $variables['tree'] . '</ul>';
}

function project2welve_menu_link__main_menu(array $variables) {
    $element = $variables['element'];
    $sub_menu = '';
	if ($element['#below']) {
		$sub_menu = drupal_render($element['#below']);
	}
	$output = l($element['#title'], $element['#href'], $element['#localized_options']);
	$element['#attributes']['class'][] = 'menu-'.$element['#original_link']['mlid'];
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

/**
 * Implements template_preprocess_region().
 */
function project2welve_preprocess_region(&$vars) {

  $headings = $sub_headings = array();
  // Get the entire main menu tree
  $main_menu_tree = menu_tree_output(menu_tree_all_data('main-menu'));

  foreach ($main_menu_tree as $key => $items) {
    if(is_numeric($key)) {
      if(empty($items['#below'])) {
        $headings[$key] = l(t($items['#title']), $items['#href']);        
      }
      else {
        $headings[$key] = l(t($items['#title']), $items['#href']); 
        foreach ($items['#below'] as $k => $sub_items) {
          if(is_numeric($k)) {
            $sub_headings[$sub_items['#original_link']['plid']][] = l(t($sub_items['#title']), $sub_items['#href']);
          }
        }
      }
    }    
  }
  
  $vars['mainMenuParent'] = $headings;
  $vars['mainMenuChild'] = $sub_headings;
}

/**
 * Remove the inline width height attribute from images.
 */

function project2welve_preprocess_image(&$variables) {
  $attributes = &$variables['attributes'];

  foreach (array('width', 'height') as $key) {
    unset($attributes[$key]);
    unset($variables[$key]);
  }
}

/**
 * Alter theme_fboauth_action__connect theme
 */
function project2welve_fboauth_action__connect($variables) {
  $action = $variables['action'];
  $link = $variables['properties'];
  $link['query']['display'] = 'popup';
  $url = url($link['href'], array('query' => $link['query']));
  $link['attributes']['class'] = isset($link['attributes']['class']) ? $link['attributes']['class'] : 'facebook-action-connect';
  $link['attributes']['rel'] = 'nofollow';
  $attributes = isset($link['attributes']) ? drupal_attributes($link['attributes']) : '';
  $title = isset($link['title']) ? check_plain($link['title']) : '';
  $src = ($GLOBALS['is_https'] ? 'https' : 'http') . '://www.facebook.com/images/fbconnect/login-buttons/connect_light_medium_short.gif';
  drupal_add_js(array('fboauth' => array('loginPath' => $url)), 'setting');
  return '<a ' . $attributes . ' href="javascript:void(0);"><img src="' . $src . '" alt="' . $title . '" /></a>';
} 

/**
 * Implements theme_breadcrumb().
 */
function project2welve_breadcrumb($vars) {
  $breadcrumb = $vars['breadcrumb'];
  if (!empty($breadcrumb)) {
    //Set Custom Bread Crumb
	$argA = arg(0);
	$argB = arg(1);
	$argC = arg(2);
	$argD = arg(3);
	
    // Adding the title of the current page to the breadcrumb.
    $breadcrumb[] = drupal_get_title();
	
	//Set Constituency Page BreadCrumb
    if($argA == 'taxonomy' && $argB = 'term' && is_numeric($argC)) { 
	   unset($breadcrumb);
	   $breadcrumb[] = l(t('Home'),'<front>');
	   $breadcrumb[] = drupal_get_title();
	}
	//Set Constituency Stat Breadcrumb
	if($argA == 'stats' && isset($argB)){
	   unset($breadcrumb);
	   $breadcrumb[] = l(t('Home'),'<front>');

	   $path = drupal_lookup_path('source', $argB);
	   $path = explode('/', $path);
	   $tid = end($path);
	   if(is_numeric($tid)){
	     $term = taxonomy_term_load($tid);
	     $breadcrumb[] = l($term->name,'taxonomy/term/'.$term->tid);
	   }
	   $breadcrumb[] = t('Stats');
	}
	//Set list page breadcrumb
	$urlPattern = array('latest-issues' => t('Issues'), 'discussions' => t('Discussions'), 'coc' => t('Citizen Videos'), 'photo-reel' => t('Photo Reel'), 'news' => t('News')); 
	if(array_key_exists($argA,$urlPattern) && isset($argB)){
	   unset($breadcrumb);
	   $breadcrumb[] = l(t('Home'),'<front>');

	   $path = drupal_lookup_path('source', $argB);
	   $path = explode('/', $path);
	   $tid = end($path);
	   if(is_numeric($tid)){
	     $term = taxonomy_term_load($tid);
	     $breadcrumb[] = l($term->name,'taxonomy/term/'.$term->tid);
	   }
	   $breadcrumb[] = $urlPattern[$argA];	
	}
	//Set Breadcrumb For blogs list page
	if($argA == 'blogs' && !isset($argB)){
	   unset($breadcrumb);
	   $breadcrumb[] = l(t('Home'),'<front>');
	   $breadcrumb[] = t('Blogs');	
	}

      
        //Set Breadcrumb for issues
        if($argA == 'node' && is_numeric($argB)){
           $node = node_load($argB);
           $allownode = array('issues'=>t('Issues'), 'news' => t('News'), 'forum' => t('Discussions'));
           $backOp = array('issues'=>t('latest-issues'), 'news' => t('news'), 'forum' => t('discussions'));
           if(array_key_exists($node->type,$allownode)){
              unset($breadcrumb);
              $source = explode('/', $_SERVER['HTTP_REFERER']);
              $path = drupal_lookup_path('source', end($source));
              $path = explode('/', $path);
	          $tid = end($path);
              if(is_numeric($tid)){
				$term = taxonomy_term_load($tid);
				$breadcrumb[] = l(t('Home'),'<front>');
				$breadcrumb[] = l($term->name,'taxonomy/term/'.$term->tid);
				$breadcrumb[] = l($allownode[$node->type], $backOp[$node->type].'/'.end($source));
				$breadcrumb[] = drupal_get_title();
	          }else{
                $breadcrumb[] = l(t('Home'),'<front>');
                $breadcrumb[] = $allownode[$node->type];
                $breadcrumb[] = drupal_get_title();
              }
           }elseif($node->type == 'mp'){
		        $const = $node->field_constituency['und'][0]['tid'];
				if(is_numeric($const)){
				   $term = taxonomy_term_load($const);
				   unset($breadcrumb);
				   $breadcrumb[] = l(t('Home'),'<front>');
				   $breadcrumb[] = l($term->name,'taxonomy/term/'.$term->tid);
				   $breadcrumb[] = drupal_get_title();
				}
		   }
        }
	//Set BreadCrum for node add Page
	if($argA == 'node' && $argB == 'add'){
	   unset($breadcrumb);
	   $breadcrumb[] = l(t('Home'),'<front>');
	   switch($argC){
	      case 'issues':
		     $breadcrumb[] = t('Raise an Issue');
		  break;
	      case 'volunteer-registration':
		     $breadcrumb[] = t('Volunteer Registration');
		  break;
	      case 'forum':
		     $breadcrumb[] = t('Create Discussions');
		  break;
	      case 'photo-reel':
		     $breadcrumb[] = t('Create Photo Reel');
		  break;
		  case 'news':
		     $breadcrumb[] = t('Create News');
		  break;
	   }
	}
	//Set Breadcrumb for user profile
	if($argA == 'user' && $argC == 'edit'){
	   $name = $breadcrumb[1];
	   unset($breadcrumb);
	   $breadcrumb[] = l(t('Home'),'<front>');
	   $breadcrumb[] = $name;
	   $breadcrumb[] = ($argD)?t('Change Password'):t('Edit Details');
	}
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    //$output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    $output = '<div class="breadcrumb">' . implode(' > ', array_unique($breadcrumb)) . '</div>';
    return $output;
  }
}


/**
 * Implements hook_preprocess_html().
 **/
function project2welve_preprocess_html(&$vars) {
  $vars['doctype'] = '<!DOCTYPE html>' . "\n";
  $vars['rdf'] = new stdClass;
  $vars['rdf']->version = '';
  $vars['rdf']->namespaces = '';
  $vars['rdf']->profile = '';

  // Serialize RDF Namespaces into an RDFa 1.1 prefix attribute.
  if ($vars['rdf_namespaces']) {
    $prefixes = array();
    foreach (explode("\n  ", ltrim($vars['rdf_namespaces'])) as $namespace) {
      // Remove xlmns: and ending quote and fix prefix formatting.
      $prefixes[] = str_replace('="', ': ', substr($namespace, 6, -1));
    }
    $vars['rdf']->namespaces = ' prefix="' . implode(' ', $prefixes) . '"';
  }
  switch(arg(0))
        {
		case 'user':
		$vars['head_title']= "Profile | I am IN - DNA of India";
		break;
	}
}