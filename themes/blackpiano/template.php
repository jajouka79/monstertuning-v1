<?php 
// $Id: template.php,v 1.3 2011/01/23 10:50:15 webmatter Exp $ 
drupal_add_js('
  Drupal.behaviors.stark2 = function (context) {
    $("#collapse-all-fieldsets").click( function () {
      $(".pseudo-fieldset-content").hide();
      $(".pseudo-fieldset").addClass("collapsed");
    });
    $("#open-all-fieldsets").click( function () {
      $(".pseudo-fieldset-content").show();
      $(".pseudo-fieldset").addClass("collapsed");
    });
    
    $(".collapsible .pseudo-fieldset-title").click( function () {
      var thisFieldset = $(this).parent();
      $(".pseudo-fieldset-content", thisFieldset).slideToggle();
      $(thisFieldset).toggleClass("collapsed");
    });
  };
', 'inline');

function blackpiano_breadcrumb($variables){
     $breadcrumb = $variables['breadcrumb'];
     if (!empty($breadcrumb)) {
        $breadcrumb[] = drupal_get_title();
        return '<div class="breadcrumb">'. implode(' &raquo; ', $breadcrumb) .'</div>';
    }
     else {
    return t("<div class=\"breadcrumb\">&nbsp;</div>");
  }
 }


function blackpiano_field__taxonomy_term_reference($vars) {
  $output = '';

  // Render the label, if it's not hidden.
  if (!$vars['label_hidden']) {
    $output .= '<h3>' . $vars['label'] . '</h3>';
  }

  // Render the items.
  $output .= '<div class="meta"><ul class="taxonomy-list">';
  foreach ($vars['items'] as $delta => $item) {
    $output .= '<li>' . drupal_render($item) . '</li>';
  }
  $output .= '<li class="t-icon">&nbsp;</li></ul></div>';

  // Render the top-level DIV.
  $output = '<div class="terms clearfix">' . $output . '</div>';

  return $output;
}