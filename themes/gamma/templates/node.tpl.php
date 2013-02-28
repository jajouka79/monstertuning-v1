<?php
// $Id: node.tpl.php,v 1.3 2011/02/14 00:32:25 himerus Exp $

/**
 * @file
 * Default theme implementation to display a node.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>

<article<?php print $attributes; ?>>
  <!--gamma - node.tpl.php<br>-->

  <?php
  $title=drupal_get_title();
  /*print "drupal_get_title - " . drupal_get_title() . "<br>"; 
  echo "page - $page <br>";
  echo "title - $title<br>";*/
  ?>
  <?php
  #node_load();
 # echo "title - " . $title . "<br>";
  ?>  
  <?php #if (!$page && $title): ?>
  <?php if ($title && $title!="Shop"): ?>

  <header>
    <?php print render($title_prefix); ?>
    
    <h1 <?php print $title_attributes; ?>>
    
    
    <?php 
	if(stripos($_SERVER['REQUEST_URI'],'news') !== false){ 
	
   		echo "<a href=\"$node_url\" title=\"print $title\">";
    }
	
    echo "$title";
	
	if(stripos($_SERVER['REQUEST_URI'],'news-view') !== false){ 
	
   		echo "</a>";
    }	
    
	
	?>
    </h1>
    
    <?php print render($title_suffix); ?>
  </header>
  <?php endif; ?>



  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      //hide($content['field_node_terms']);
	  #echo "page - $page<br>";

		
      print render($content);
    ?>
  </div>
  
<!--  <?php if (!empty($content['links'])): ?>
    <nav class="links"><?php //print render($content['links']); ?></nav>
  <?php endif; ?>-->
  
  
  <?php if($user_picture || $display_submitted || $terms): ?>
  <footer class="clearfix node-info">
    <?php print $user_picture; ?>
    
    
    <?php //if (isset($display_submitted)):?>
   <!-- <div class="submitted"><?php //print $submitted; ?></div>-->
    <?php //endif; ?>
    
    <?php
	//echo "submitted - $submitted<br>";
	//SIE EDIT

if ($submitted){
$mydate=format_date($node->created, $type = 'medium', $format = 'F j - Y', $timezone = NULL, $langcode = 'es');
echo "<div class=\"submitted\">Posted: $mydate</div>";
}


?>


    <?php if (isset($terms)): ?>
      <div class="terms"><?php print $terms; ?></div>
    <?php endif; ?>
  </footer>
  <?php endif; ?>
  <div class="clearfix">
    <?php print render($content['comments']); ?>
  </div>
</article>