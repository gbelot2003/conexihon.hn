<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * conexihon2 theme.
 */

function conexihon2_preprocess_html(&$variables) {
  // Code borrowed/adapted from D7 core.
  // Classes originally added by D7 core, then removed by Omega 4 and now put back (ish) by this function.
  // NOTE: D7 core used hyphens in class names, we need to use different classes so we're
  // replacing hyphens with underscores (make sure your CSS is expecting this).
  if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
    $variables['classes_array'][] = 'two_sidebars';
  }
  elseif (!empty($variables['page']['sidebar_first'])) {
    $variables['classes_array'][] = 'one_sidebar sidebar_first';
  }
  elseif (!empty($variables['page']['sidebar_second'])) {
    $variables['classes_array'][] = 'one_sidebar sidebar_second';
  }
  else {
    $variables['classes_array'][] = 'no_sidebars';
  }
}


// menus customization
function conexihon2_menu_tree__main_menu($variables){
   if (preg_match("/\bmenu-subnavigation\b/i", $variables['tree'])){
    return '<ul id="menu-navigation">' . $variables['tree'] . '</ul>';
  } else {
    return '<ul class="menu-subnavigation">' . $variables['tree'] . '</ul>';
  }
}

function conexihon2_form_alter(&$form, &$form_state, $form_id){
	//$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Buscar';}";
	if ($form_id == 'search_block_form') 
	{
		$form['search_block_form']['#attributes']['placeholder'] = t('Buscar');
		$form['search_block_form']['#attributes']['title'] = t('Ingresa el texto que deseas buscar');
		$form['actions']['#attributes']['class'][] = 'element-invisible';
		//$form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search.png');
	}
}

function conexion2_sub_preprocess_page(&$vars){ 
  if(isset($vars['node'])){
    $node = $vars['node'];
    $type = $node->type;
    if(isset($type)){
      $types = node_type_get_types();
      $name = $types[$type]->name; 
      $vars['subtitle'] = t($name);
    } else {
      $type = t("Todo esta aquí");
    }
  } 
}

function conexihon2_preprocess_node(&$variables) {
  if ($variables['submitted']) {
    	//$variables['submitted'] = t('Posted| !datetime', array( '!datetime' => format_date($variables['node']->created, 'custom', 'F j, Y')));
  		$variables['submitted'] = t('Posted by !author | !datetime', array('!datetime' => format_date($variables['node']->created, 'custom', 'F j \d\e\l Y'), '!author' => $variables['node']->name));
  }
}
