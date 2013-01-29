<?php

function theme304_preprocess_page(&$vars) {
  	
  	if (isset($vars['node'])) {
    	$vars['template_files'][] = 'page-node-' . $vars['node']->type;
  	}
  	 if (stripos($vars['head_title'],'icon_users.png')) {
    $vars['head_title'] = 'User account | ' . variable_get('site_name', '');
  }
  if (stripos($vars['title'],'icon_users.png')) {
    $vars['title'] = 'User account';
  }
  	
}

function theme304_preprocess_node(&$vars, $hook) {
  $node = $vars['node'];
  $vars['template_file'] = 'node-'. $node->type;
}


function theme304_menu_local_task($link, $active = FALSE) {
  return '<li '. ($active ? 'class="active" ' : '') .'><span><span>'. $link ."</span></span></li>\n";
}

function theme304_links($links, $attributes = array('class' => 'links')) {
  $output = '';

	$classes = array('about', 'blog', 'solutions', 'book', 'links', 'faq');

	$item_ct = 0;
	
  if (count($links) > 0) {
    $output = '<ul'. drupal_attributes($attributes) .'>';

    $num_links = count($links);
    $i = 0;

    foreach ($links as $key => $link) {
      $class = $key;

		if ($item_ct == 6) $item_ct = 0;
		
		
      // Automatically add a class to each link and also to each LI
      if (isset($link['attributes']) && isset($link['attributes']['class'])) {
        $link['attributes']['class'] .= ' ' . $key;
      }
      else {
        $link['attributes']['class'] = $key;
      }

      // Add first and last classes to the list of links to help out themers.
      $extra_class = '';
      if ($i == 1) {
        $extra_class .= 'first ';
      }
      if ($i == $num_links) {
        $extra_class .= 'last ';
      }
      $output .= '<li '. drupal_attributes(array('class' => $extra_class . $class . ' '.$classes[$item_ct] )) .'>';

      // Is the title HTML?
      $html = isset($link['html']) && $link['html'];

      // Initialize fragment and query variables.
      $link['query'] = isset($link['query']) ? $link['query'] : NULL;
      $link['fragment'] = isset($link['fragment']) ? $link['fragment'] : NULL;

      if (isset($link['href'])) {
        $output .= l($link['title'], $link['href'], $link['attributes'], $link['query'], $link['fragment'], FALSE, $html);
      }
      else if ($link['title']) {
        //Some links are actually not links, but we wrap these in <span> for adding title and class attributes
        if (!$html) {
          $link['title'] = check_plain($link['title']);
        }
        $output .= '<span'. drupal_attributes($link['attributes']) .'>'. $link['title'] .'</span>';
      }
		
		$item_ct++;
      $i++;
      $output .= "</li>\n";
    }

    $output .= '</ul>';
  }

  return $output;
}

?>