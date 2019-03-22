<?php
/**
* Template Name: Full Width
 */

get_header(); ?>
	<?php if ( has_post_thumbnail() ) {	?>
		<div class="full-width-page-banner" style="background-image: url('<?php echo get_the_post_thumbnail_url( null, $size ); ?>')"></div>        
    <?php } ?>
	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">
            <div class="container">
	            <?php dynamic_sidebar( 'bread-crumb' ); ?>
    			<?php
    			while ( have_posts() ) : the_post();
    
    				get_template_part( 'template-parts/content', 'page' );
    
    				// If comments are open or we have at least one comment, load up the comment template.
    				if ( comments_open() || get_comments_number() ) :
    					comments_template();
    				endif;
    
    			endwhile; // End of the loop.
    			?>                
            </div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
