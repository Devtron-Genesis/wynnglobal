<?php
// $Id: page.tpl.php,v 1.47 2010/11/05 01:25:33 dries Exp $

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
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */

    //$block = module_invoke('slas_site', 'block_view', 'slas_search');
    //print $block['content'];
?>
    <div id="page-container">
        <header id="mast-header">
            <section>
                <img src="assets/images/print-logo.png" alt="" class="offpage" />
                <nav id="skip-navigation">
                    <ul class="nav">
                        <li><a href="#page-content">Skip to Content</a></li>
                        <li><a href="#main-navigation">Skip to Main Navigation</a></li>
                    </ul>
                </nav>
            </section>
        </header>
        <hr />
        <div id="page-content" style="padding-top: 200px; width: 400px; margin: 0 auto;">
            <section>
                <header>
                    <h1>User Login</h1>
                </header>
                <?php
                    if(!empty($messages)){
                         print $messages;
                    }
                ?>
                <?php print render($page['content']); ?>
            </section>
        </div>
        <hr />
        <div id="page-header">
            <section>
                <header>
                    <h2 class="offpage">Top Navigation</h2>
                </header>
                <nav>
                    <ul id="home-navigation" class="nav">
                        <li><a href="/" title="Back to Wynn Global home page">Back to Wynn Global home page</a></li>
                    </ul>
                    <?php /*<ul id="top-navigation" class="nav">
                        <li id="espanol"><a href="">Espanol</a></li>
                        <li id="portuguese"><a href="">Portuguese</a></li>
                        <li id="login"><a href="">Login</a></li>
                    </ul>*/ ?>
                </nav>
            </section>
        </div>
    </div>
    <hr />
    <footer id="page-footer">
        <?php /*<section id="page-footer-inner">
            <div id="footer-image-container">
                <ul class="nav clearfix">
                    <li><img src="/<?php print drupal_get_path('theme', 'wynnglobal'); ?>/assets/images/image01.jpg" alt="" /></li>
                    <li><img src="/<?php print drupal_get_path('theme', 'wynnglobal'); ?>/assets/images/image01.jpg" alt="" /></li>
                    <li><img src="/<?php print drupal_get_path('theme', 'wynnglobal'); ?>/assets/images/image01.jpg" alt="" /></li>
                    <li><img src="/<?php print drupal_get_path('theme', 'wynnglobal'); ?>/assets/images/image01.jpg" alt="" /></li>
                    <li><img src="/<?php print drupal_get_path('theme', 'wynnglobal'); ?>/assets/images/image01.jpg" alt="" /></li>
                </ul>
            </div>
            <div id="disclaimer-container">
                <p>This site is presented for informational purposes only. Neither the information nor any opinion contained in this site constitutes a solicitation to sell or buy any product or service. OIIA hold distribution and marketing agreements with financial product providers, and said products are promoted via Independent Financial Advisors namely OIIA Strategic Partners who are independently contracted to OIIA. OIIA cannot guarantee the suitability of the information contained in this site for any particular purpose.</p>
            </div>
        </section>*/ ?>
    </footer>
