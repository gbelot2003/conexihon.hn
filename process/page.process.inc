<?php

/**
 * Implements hook_process_page().
 */


function conexihon2_process_page(&$variables) {
  // You can use process hooks to modify the variables before they are passed to
  // the theme function or template file.
}


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