<?php
// $Id: html.tpl.php,v 1.2 2011/02/14 00:32:25 himerus Exp $

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE tag.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()


*/
?>

<?php 

global $base_url;

?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <?php //print $head;?>
  <title><?php print $head_title;?></title>

  <?php print $styles;?>
  <?php print $scripts;?>  
  
  <?php #echo "base_url - $base_url<br>";?>
  
<?php if($is_front):?>
<!--base_url-->
      <script type="text/javascript" src="<?php echo $base_url; ?>/wowslider/engine1/wowslider.js"></script>
<?php endif; ?>

<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  

<?php if($is_front):?>
      <script type="text/javascript" src="<?php echo $base_url; ?>/wowslider/engine1/script.js"></script><!---->
<?php endif; ?>

<div id="medusa">
<a href="http://www.medusamediacreations.co.uk/" target="_blank"><img class="border-glow" src="<?php echo $base_url; ?>/sites/default/files/medusa-logo.png" /></a>
<br />
<br />

<a href="http://www.medusamediacreations.co.uk/" target="_blank">www.medusamediacreations.co.uk</a>
</div>
</body>
</html>