<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container">

		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
var geotargetlypopup1552564439939 = document.createElement('script');
geotargetlypopup1552564439939.setAttribute('type','text/javascript');
geotargetlypopup1552564439939.async = 1;
var w = window, d = document, e = d.documentElement, g = d.getElementsByTagName('body')[0], w = w.innerWidth || e.clientWidth || g.clientWidth, h = w.innerHeight|| e.clientHeight|| g.clientHeight;
var geotargetlypopup1552564439939url = '//geotargetly-1a441.appspot.com/geopopup?id=-L_w2JdgzWVjuwrD9FSP&cw='+w+'&ch='+h;
geotargetlypopup1552564439939.setAttribute('src', geotargetlypopup1552564439939url);
document.getElementsByTagName('head')[0].appendChild(geotargetlypopup1552564439939);
</script>

</body>
</html>