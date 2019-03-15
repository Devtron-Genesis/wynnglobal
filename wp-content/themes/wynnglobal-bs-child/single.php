<?php
/**
* The template for displaying all single posts
* Template Name: Full Width
* Template Post Type: partners
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package WP_Bootstrap_Starter
*/

get_header(); ?>
<?php if ( has_post_thumbnail() ) {	?>
    <div class="full-width-page-banner" style="background-image: url('<?php echo get_the_post_thumbnail_url( null, $size ); ?>')"></div>        
<?php } ?>
<section id="primary" class="content-area col-sm-12">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <?php
            while ( have_posts() ) : the_post();
            ?>
            <h2 style="margin: 30px 10px 0px"><?php the_title();?><small> <?php echo get_field('partner_code'); ?></small></h2>
            <?php
                get_template_part( 'template-parts/content', 'page' );

            endwhile; // End of the loop.
            ?>              
        </div>
    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
