<?php


/**
 * @file
 *
 * Page display
 */
?>
<div id="page-top"></div>
<div id="page-link"><a class="link-top" href="#page-top">Top</a><a class="link-bottom" href="#page-bottom">Bottom</a></div>
<div class="wrapper-outer">
  <div id="container" class="wrapper">
    <?php print $breadcrumb; ?>
    <div id="container-inner" class="wrapper-inner">
      <?php print om_content_elements(render($tabs), render($title_prefix), $title, render($title_suffix), $messages, render($page['help']), render($action_links)); ?>
      <?php print om_region_wrapper('content', render($page['content']), 0); ?>
    </div> <!-- /#container-inner -->
  </div> <!-- /#container -->
</div> <!-- /#wrapper-outer -->
<div id="page-bottom"></div>
