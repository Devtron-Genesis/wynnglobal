<?php

function wynnglobal_preprocess_page(&$vars) {
    drupal_add_library('system', 'ui.dialog');
}

function wynnglobal_css_alter(&$css) {
    unset($css['misc/ui/jquery.ui.core.css']); 
    unset($css['misc/ui/jquery.ui.theme.css']);
    unset($css['misc/ui/jquery.ui.dialog.css']);
}

/**
 * Overriding drupal form.inc
 * Return a themed form element.
 */
function wynnglobal_form($variables) {
    
    // print '<pre>'; print_r($variables['element']); exit;
    $action = $variables['element']['#action'] ? 'action="'. check_url($variables['element']['#action']) .'" ' : '';
    $wrapper_ul_start = '';
    $wrapper_ul_end = '';
    
    return '<form '. $action .' accept-charset="UTF-8" method="'. $variables['element']['#method'] .'" id="'. $variables['element']['#id'] .'"'. drupal_attributes($variables['element']['#attributes']) .">\n<fieldset><ol>".$wrapper_ul_start."\n". $variables['element']['#children'] ."\n".$wrapper_ul_end."\n</ol></fieldset></form>\n";
}

function wynnglobal_fieldset($variables) {
    $variables['element']['#theme_wrappers'] = array();
    return '<fieldset'. drupal_attributes($variables['element']['#attributes']) .'>'. ($variables['element']['#title'] ? '<legend>'. $variables['element']['#title'] .'</legend><ol>' : '') . (isset($element['#description']) && $element['#description'] ? '<div class="description">'. $element['#description'] .'</div>' : '') . (!empty($variables['element']['#children']) ? $variables['element']['#children'] : '') . (isset($variables['element']['#value']) ? $variables['element']['#value'] : '') ."</ol></fieldset>\n";
}

function wynnglobal_container($variables) {
  $element = $variables['element'];
  
  return $element['#children'];
}

function wynnglobal_form_element($variables) {
    
    // comment_body
    
        $variables['element']['#theme'] = NULL;
        $variables['element']['#theme_wrappers'] = NULL;
        $variables['element']['#array_parents'] = NULL;
        
    //if ($variables['element']['#id'] == 'edit-mail'){
    //    print '----------------------------------------------------<br /><pre>';
    //    print_r($variables['element']); print '</pre><br />';
    //    exit;
    //}
    
    $t = get_t();
    
    $output = '';

    $required = !empty($variables['element']['#required']) ? '<span class="form-required" title="'. $t('This field is required.') .'">*</span>' : '';
    
    if (!empty($variables['element']['#title'])) {
        $title = $variables['element']['#title'];
        if (!empty($variables['element']['#id'])) {
            $output .= '<li><label for="'. $variables['element']['#id'] .'">'. $t('!title: !required', array('!title' => filter_xss_admin($title), '!required' => $required)) ."</label>\n";
        }
        else {
            $output .= '<li><label>'. $t('!title: !required', array('!title' => filter_xss_admin($title), '!required' => $required)) ."</label>\n";
        }
    }
    else {
        $output .= '<li>';
    }
    
    $output .= $variables['element']['#children']."</li>\n";
    
    if (!empty($variables['element']['#description'])){
        unset($variables['element']['#description']);
    }
    
    return $output;
}

?>