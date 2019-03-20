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
				<?php
				$args = array(
					'post_type' => 'product_providers',
                    'orderby' => 'publish_date',
					'post_status' => 'publish',
				);
				$arr_posts = new WP_Query( $args );
				if ( $arr_posts->have_posts() ) :
					$counter = -1;
					while ( $arr_posts->have_posts()) :
						$arr_posts->the_post();
						?>
                        <div class="row">
                            <div class="col-md-2">
                                <a href="<?php echo the_field('website_title'); ?>">
                                    <img src="<?php echo the_field('prodect_provider_logo'); ?>" />
                                </a>
                            </div>
                            <div class="col-md-10">
                                <p><?php echo the_field('product_provider_description'); ?></p>
                            </div>
                        </div>
                        <hr>
		    	        <?php
	    	        endwhile;
    	        endif;
    	    	?>
    			<?php
    			while ( have_posts() ) : the_post();
    
    				get_template_part( 'template-parts/content', 'page' );
    
    				// If comments are open or we have at least one comment, load up the comment template.
    				if ( comments_open() || get_comments_number() ) :
    					comments_template();
    				endif;
    
    			endwhile; // End of the loop.
    			?> 
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
