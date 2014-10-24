<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['branding']: Items for the branding region.
 * - $page['header']: Items for the header region.
 * - $page['navigation']: Items for the navigation region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see omega_preprocess_page()
 */
?>
<div class=" l-header-warp">
  <div class="l-branding">
    <div class="l-page">
      <?php print render($page['branding']); ?>
    </div>
  </div>
  
    <header class="l-header" role="banner">
      <div class="l-page">
        <div class="l-head-1">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
          <?php endif; ?>
          
          <?php print render($page['header']); ?>
        </div>
        <div class="l-head-2"><?php print render($page['head_right']); ?>
          <div class="redes-sociales">
            <a href="https://www.facebook.com/conexihon?fref=ts" target="_black"><i class="fa-facebook"></i></a>  
            <a href="https://twitter.com/conexihon" target="_black"><i class="fa-twitter"></i></a>
            <a href="https://www.youtube.com/channel/UCX_V7qJx4Pq7zxGXKcfddPg" target="_black"><i class="fa-youtube"></i></a>
          </div>
          
        </div>
      </div>
    </header>
</div>

<div class="l-slider-warp">
  <div class="l-navigation">
    <div class="l-page">
      <?php print render($page['navigation']); ?>
    </div>
  </div>
</div>

<div class="l-slider-warper">
  <div class="l-slider">
    <div class="l-page">
      <?php print render($page['slider']); ?>
    </div>
  </div>
</div>

<div class="l-main-warp">
  <div class="l-page">
    <div class="l-main">
      <div class="l-content" role="main">
        <?php print render($page['highlighted']); ?>
        <?php print $breadcrumb; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
           <h1 class="node-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
        <div class="content_down_pre">
          <div class="panel-region-first">
            <?php print render($page['panels_1']); ?>
            <?php print render($page['panels_2']); ?>
          </div>
          <div class="panel-region-secund">
            <?php print render($page['panels_3']); ?>
            <?php print render($page['panels_4']); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="l-down-warp">
  <div class="l-page">
      <?php print render($page['content_down']) ?>
  </div>
</div>

<div class="l-footer-warp">
  <div class="l-page">
    <footer class="l-footer" role="contentinfo">
      <div class="l-footer-panel-1 footer-panel">
        <?php print render($page['footer_panel_1']) ?>
      </div>

      <div class="l-footer-panel-2 footer-panel">
        <?php print render($page['footer_panel_2']) ?>
      </div>

      <div class="l-footer-panel-3 footer-panel">
      <h2 class="block__title">Información de Contacto</h2>
        <address class="vcard"> 
          <div class="adr">
            <div class="street-address">Colonia Palmira, contiguo Centro Cultural España, 
                <span class="br">25 metros norte del redondel de Los  Artesanos.</span>
            </div>
            <span class="locality">Tegucigalpa,</span>
            <span class="contry-name">Honduras</span>
          </div>
          <span class="tel">Tel: (504)2237-9966, </span>
          <span class="tel"> Alertas: (504) 3229-6241, </span>
          <span class="tel">Fax: <span class="fax">(504)2237-9966</span></span>
          <div class="emal"><a href="mailto:clibre@clibrehonduras.com">clibre@clibrehonduras.com</a></div>
          <div class="emal"><a href="mailto:alertas@clibrehonduras.com">alertas@clibrehonduras.com</a></div>
        </address>
        
        <div class="logos">
          <a href="#"><i class="fa-html5"></i></a>
          <a href="#"><i class="fa-css3"></i></a>
          <a href="ie"><i class="fa-IE"></i></a>
        </div>

        <div class="licence"><a href="https://creativecommons.org" target="_black">
          <img src="http://conexihon.hn/site/sites/default/files/pictures/88x31.png">
          </a>
        </div>
      </div>
    
    </footer>
  </div>
</div>
