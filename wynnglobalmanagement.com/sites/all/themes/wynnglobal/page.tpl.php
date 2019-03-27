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
?>
    <div id="animation-container"></div>
    <div id="page-container">
        <header id="mast-header">
            <section>
                <img src="/<?php print drupal_get_path('theme', 'wynnglobal'); ?>/assets/images/print-logo.png" alt="" class="offpage" />
                <nav id="skip-navigation">
                    <ul class="nav">
                        <li><a href="#page-content">Skip to Content</a></li>
                        <li><a href="#main-navigation">Skip to Main Navigation</a></li>
                    </ul>
                </nav>
            </section>
        </header>
        <hr />
        <div id="page-content">
            <?php //print render($page['content']); ?>
            <div id="text-content-container">
            <section id="text-content">
                <header>
                    <h1>Heading</h1>
                </header>
                <div id="text-content-scroll"></div>
            </section>
            </div>
            <section id="nav-content">
                <header>
                    <h2 class="offpage">Main Navigation</h2>
                </header>
                <nav>
                    <?php if (is_array($main_menu)) : ?>
                    <?php print __build_menu(menu_tree_all_data('main-menu',NULL,2),NULL); ?>
                    <?php endif; ?>
                </nav>
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
                        <li><a href="<?php print request_uri(); ?>" title="Back to WYNN Global home page">Back to WYNN Global home page</a></li>
                    </ul>
                    <?php 
                        $block = module_invoke('wynnglobal_site', 'block_view', 'site_login_menu');
                        print $block['content'];
                    ?>
                </nav>
            </section>
        </div>
    </div>
    <hr />
    <footer id="page-footer">
        <section id="page-footer-inner" class="clearfix">
            <div id="footer-image-container">
                <ul class="nav">
                    
                </ul>
            </div>
            <div id="disclaimer-container">
                <p><?php $disclaimer = page_content_node(32,1); print $disclaimer['text']; ?></p>
            </div>
        </section>
    </footer>