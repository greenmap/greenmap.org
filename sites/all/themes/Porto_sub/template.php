<?php
/*
 * Prefix your custom functions with porto_sub. For example:
 * porto_sub_form_alter(&$form, &$form_state, $form_id) { ... }
 */



/**
 * Modify theme_field()
 */
function porto_sub_field($variables) {

  $output = '';
  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<div class="field-label"' . $variables['title_attributes'] . '>' . $variables['label'] . ':&nbsp;</div>';
  }
  switch ($variables['element']['#field_name']) {
	  case 'field_tags':
	  case 'field_product_categories':
	  case 'field_product_tags':
	  case 'field_team_category':
	  case 'field_testimonial_content':
	  case 'field_testimonial_name':
	  case 'field_testimonial_info':
	  case 'field_background_position':
	  case 'field_parallax_icon':
	  case 'field_big_caption':
	  case 'field_small_caption':
	  case 'field_text_color':
	  case 'field_team_bio':
    case 'field_twitter_link':
    case 'field_facebook_link':
    case 'field_linkedin_link':
    case 'field_personal_website_link':
    case 'field_active':
  //  case 'field_name':
  //  case 'field_activity_year':
	    foreach ($variables['items'] as $delta => $item) {
	      $rendered_tags[] = drupal_render($item);
	    }
	    $output .= implode(', ', $rendered_tags);
	  break;
	  case 'field_image':
	    if ($variables['element']['#bundle'] =='article') {
		    if (count($variables['items']) >= 2 && theme_get_setting('blog_image_slider') == 1) {
			    $output .= '<div class="post-image"><div class="owl-carousel" data-plugin-options=\'{"items":1}\'>';
		      foreach ($variables['items'] as $delta => $item) {
		        $output .= '<div><div class="img-thumbnail">' . drupal_render($item) . '</div></div>';
		      }
		      $output .= '</div></div>';
		    }
		    else {
			    foreach ($variables['items'] as $delta => $item) {
		        $output .= '<div class="post-image single"><div class="img-thumbnail">' . drupal_render($item) . '</div></div>';
		      }
		    }
	    }
	    else if ($variables['element']['#entity_type'] =='commerce_product') {
		    if (count($variables['items']) >= 2) {
			    $output .= '<div class="owl-carousel" data-plugin-options=\'{"items":1}\'>';
		      foreach ($variables['items'] as $delta => $item) {
		        $output .= '<div>' . drupal_render($item) . '</div>';
		      }
		      $output .= '</div>';
		    }
		    else {
			    foreach ($variables['items'] as $delta => $item) {
		        $output .= '<div class="img-responsive">' . drupal_render($item) . '</div>';
		      }
		    }
		  }
	    else if ($variables['element']['#bundle'] =='portfolio') {
		    if ($variables['element']['#view_mode'] == 'teaser') {
			    $output .=  drupal_render($variables['items'][0]);
		    }
		    else {
		    foreach ($variables['items'] as $delta => $item) {
		      $output .= '<div class="thumbnail">' . drupal_render($item) . '</div>';
		    }
		    }
	    }
	    else {
		    $output .= '<div class="field-items"' . $variables['content_attributes'] . '>';
		    // Default rendering taken from theme_field().
		    foreach ($variables['items'] as $delta => $item) {
		      $classes = 'field-item ' . ($delta % 2 ? 'odd' : 'even');
		      $output .= '<div class="' . $classes . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</div>';
		    }
		    $output .= '</div>';
	    }
	  break;
    case 'field_start_date':
	    foreach ($variables['items'] as $delta => $item) {
	      $output .= '<li><i class="icon icon-calendar"></i>' . drupal_render($item) . '</li>';
	    }
	  break;
    case 'field_project_type':
	    foreach ($variables['items'] as $delta => $item) {
	      $output .= '<li><i class="icon icon-check-circle"></i>' . drupal_render($item) . '</li>';
	    }
	  break;
    case 'field_project_theme':
      foreach ($variables['items'] as $delta => $item) {
        $output .= '<li><i class="icon icon-check-circle"></i>' . drupal_render($item) . '</li>';
      }
    break;
    case 'field_project_user_group':
      foreach ($variables['items'] as $delta => $item) {
        $output .= '<li><i class="icon icon-check-circle"></i>' . drupal_render($item) . '</li>';
      }
    break;
    case 'field_project_scale':
      foreach ($variables['items'] as $delta => $item) {
        $output .= '<li><i class="icon icon-check-circle"></i>' . drupal_render($item) . '</li>';
      }
    break;
    case 'field_project_scale_name':
      foreach ($variables['items'] as $delta => $item) {
        $output .= '<li><i class="icon icon-check-circle"></i>' . drupal_render($item) . '</li>';
      }
    break;
    case 'field_project_funding':
      foreach ($variables['items'] as $delta => $item) {
        $output .= '<li><i class="icon icon-check-circle"></i>' . drupal_render($item) . '</li>';
      }
    break;
    case 'field_tags':
      foreach ($variables['items'] as $delta => $item) {
        $output .= '<li><i class="icon icon-check-circle"></i>' . drupal_render($item) . '</li>';
      }
    break;
	  default:
	    $output .= '<div class="field-items"' . $variables['content_attributes'] . '>';
	    // Default rendering taken from theme_field().
	    foreach ($variables['items'] as $delta => $item) {
	      $classes = 'field-item ' . ($delta % 2 ? 'odd' : 'even');
	      $output .= '<div class="' . $classes . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</div>';
	    }
	    $output .= '</div>';
	    // Render the top-level DIV.
	    $output = '<div class="' . $variables['classes'] . '"' . $variables['attributes'] . '>' . $output . '</div>';
	  break;
  }

  return $output;
}
