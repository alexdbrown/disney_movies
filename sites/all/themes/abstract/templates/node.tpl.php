<?php
?>

<div id="node-<?php print $node->nid; ?>" class="node <?//php print $node_classes; ?> <?//php print $skinr; ?>">
  <div class="inner">
    <?php print $picture ?>
  
    <?php if ($page == 0): ?>
    <h2 class="title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
    <?php endif; ?>
  
    <div class="meta">
      <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted ?></span>
      <?php endif; ?>
    </div>
  
    <div class="content clearfix">
      	<?php
	      // We hide the comments and links now so that we can render them later.
	      hide($content['links']);
	      print render($content);
	    ?>
    </div>
  
    <?//php if ($terms): ?>
    <div class="terms">
      <?//php //print $terms; ?>
    </div>
    <?//php endif;?>
    
    <?php if ($content['links']): ?>
    <div class="links">
      <?php print render($content['links']); ?>
    </div>
    <?php endif; ?>
  </div><!-- /inner -->

  <?//php //if ($node_bottom && !$teaser): ?>
  <div id="node-bottom" class="node-bottom row nested">
    <div id="node-bottom-inner" class="node-bottom-inner inner">
      <?//php //print $node_bottom; ?>
    </div><!-- /node-bottom-inner -->
  </div><!-- /node-bottom -->
  <?//php// endif; ?>

</div><!-- /node-<?php print $node->nid; ?> -->
