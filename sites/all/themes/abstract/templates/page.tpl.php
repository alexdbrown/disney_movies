<?php
?>

  <div id="page" class="page">
    <div id="page-inner" class="page-inner row <?php print $grid_width; ?>">
      <?php //print theme('grid_row', $header_top, 'header-top', 'full-width'); ?>

      <?php print render($page['header_top']); ?>

      <!-- header-group row: width = grid_width -->
      <div id="header-group-wrapper" class="header-group-wrapper full-width <?php print $grid_width; ?>">
        <div id="header-group" class="header-group row">
          <div id="header-group-inner" class="header-group-inner inner">
	
            <?php //print theme('grid_block', theme('links', $primary_links), 'primary-menu'); ?>
            <?php //print theme('grid_block', theme('links', $secondary_links), 'secondary-menu'); ?>
            <?php //print theme('grid_block', $search_box, 'search-box'); ?>
            <?php print render($page['main_menu']); ?>

            <?php if ($logo || $site_name || $site_slogan): ?>
            <div id="header-site-info" class="header-site-info block">
              <div id="header-site-info-inner" class="header-site-info-inner gutter">
                <?php if ($logo): ?>
                <div id="logo">
                  <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
                </div>
                <?php endif; ?>
                <?php if ($site_name): ?>
                <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
                <?php endif; ?>
                <?php if ($site_slogan): ?>
                <span id="slogan"><?php print $site_slogan; ?></span>
                <?php endif; ?>
              </div><!-- /header-site-info-inner -->
            </div><!-- /header-site-info -->
            <?php endif; ?>

            <?//php //print theme('grid_row', $header, 'header', 'nested'); ?>
            <?php print render($page['header']); ?>
          </div><!-- /header-group-inner -->
        </div><!-- /header-group -->
      </div><!-- /header-group-wrapper -->

      <!-- preface-top row: width = grid_width -->
      <?//php //print theme('grid_row', $preface_top, 'preface-top', 'full-width', $grid_width); ?>
      <?php print render($page['preface_top']); ?>            

      <!-- main row: width = grid_width -->
      <div id="main-wrapper" class="main-wrapper full-width clearfix <?php print $grid_width; ?>">
        <div id="main" class="main row">
          <div id="main-inner" class="main-inner inner clearfix">
            <?//php// print theme('grid_row', $sidebar_first, 'sidebar-first', 'nested', $sidebar_first_width); ?>
            <?php print render($page['sidebar_first']); ?>
            
            <!-- main group: width = grid_width - sidebar_first_width -->
            <div id="main-group" class="main-group row nested <?//php print $content_group_width; ?>">
              <div id="main-group-inner" class="main-group-inner inner">
                <?//php //print theme('grid_row', $preface_bottom, 'preface-bottom', 'nested'); ?>
                <?php print render($page['preface_bottom']); ?>
                
                <div id="main-content" class="main-content row nested">
                  <div id="main-content-inner" class="main-content-inner inner">
                    <!-- content group: width = grid_width - (sidebar_first_width + sidebar_second_width) -->
                    <div id="content-group" class="content-group row nested <?php print $content_group_width; ?>">
                      <div id="content-group-inner" class="content-group-inner inner">
                        <?php //print theme('grid_block', $breadcrumb, 'breadcrumbs'); ?>
                        <?php print theme('grid_block', array('content' => $breadcrumb, 'id' => 'breadcrumbs')); ?>

                        <?php //if ($content_top || $help || $messages): ?>
                        <?php //REVIEW CONTENT_TOP REGION. ?>
                        <div id="content-top" class="content-top row nested">
                          <div id="content-top-inner" class="content-top-inner inner">
                            <?php print theme('grid_block', array('content' => render($page['help']), 'id' => 'content-help')); ?>
                            <?php print theme('grid_block', array('content' => $messages, 'id' => 'content-messages')); ?>
                            <?//php //print $content_top; ?>
                          </div><!-- /content-top-inner -->
                        </div><!-- /content-top -->
                        <//?php endif; ?>

                        <div id="content-region" class="content-region row nested">
                          <div id="content-region-inner" class="content-region-inner inner">
                            <a name="main-content-area" id="main-content-area"></a>
                            <?php print theme('grid_block', array('content' => render($tabs), 'id' => 'content-tabs')); ?>
                            <div id="content-inner" class="content-inner block">
                              <div id="content-inner-inner" class="content-inner-inner inner">

                                <?php // COPIED FROM FUSION CORE's page.tpl.php ?>
                                <?php print render($title_prefix); ?>
                                <?php if ($title): ?>
                                <h1 class="title gutter"><?php print $title; ?></h1>
                                <?php endif; ?>
                                <?php print render($title_suffix); ?>
                                <?php if ($action_links): ?>
                                <ul class="action-links"><?php print render($action_links); ?></ul>
                                <?php endif; ?>                            
                                <?php if ($page['content']): ?>
                                <div id="content-content" class="content-content">
                                   <?php print render($page['content']); ?>
                                  <?php //print $feed_icons; ?>
                                </div><!-- /content-content -->
                                <?php endif; ?>
                              </div><!-- /content-inner-inner -->
                            </div><!-- /content-inner -->
                          </div><!-- /content-region-inner -->
                        </div><!-- /content-region -->
                        <?php print render($page['content_bottom']); ?>
                        <?php //print //theme('grid_row', $content_bottom, 'content-bottom', 'nested'); ?>
                      </div><!-- /content-group-inner -->
                    </div><!-- /content-group -->
                    <?//php //print //theme('grid_row', $sidebar_last, 'sidebar-last', 'nested', $sidebar_last_width); ?>
                    <?php print render($page['sidebar_second']); ?>
                  </div><!-- /main-content-inner -->
                </div><!-- /main-content -->

                <?php //print theme('grid_row', $postscript_top, 'postscript-top', 'nested'); ?>
                <?php print render($page['postscript_top']); ?>
              </div><!-- /main-group-inner -->
            </div><!-- /main-group -->
          </div><!-- /main-inner -->
        </div><!-- /main -->
      </div><!-- /main-wrapper -->

      <!-- postscript-bottom row: width = grid_width -->
      <?//php //print theme('grid_row', $postscript_bottom, 'postscript-bottom', 'full-width', $grid_width); ?>
      <?php print render($page['postscript_bottom']); ?>
      <?//php print theme('grid_block', array('content' => render($page['postscript_bottom']), 'id' => 'full-width')); ?>

      <!-- footer row: width = grid_width -->
      <?//php //print theme('grid_row', $footer, 'footer'); ?>

      <!-- footer-message row: width = grid_width -->
      <?php if ($page['footer']): ?>
      <div id="footer-message-wrapper" class="footer-message-wrapper full-width">
        <div id="footer-message" class="footer-message">
          <div id="footer-message-inner" class="footer-message-inner inner">
            <?php print render($page['footer']); ?>
          </div><!-- /footer-message-inner -->
        </div><!-- /footer-message -->
      </div><!-- /footer-message-wrapper -->
      <?php endif; ?>

    </div><!-- /page-inner -->
  </div><!-- /page -->
  <?//php print $closure; ?>
