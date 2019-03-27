<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WP_Bootstrap_Starter
*/

get_header(); ?>

<section id="primary" class="content-area col-sm-12">
	<main id="main" class="site-main" role="main">
		<div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">
			<div class="carousel-indicators-main">
			<ul class="carousel-indicators">
				<?php
				$args = array(
					'post_type' => 'team_member',
					'orderby' => 'publish_date',
					'post_status' => 'publish',
				);
				$arr_posts = new WP_Query( $args );
				if ( $arr_posts->have_posts() ) :
					$counter = -1;
					while ( $arr_posts->have_posts()) :
						$counter++;
						$arr_posts->the_post();
						?>
						<?php
						if ( has_post_thumbnail() ) :

							?>
							    <li data-target="#demo" data-slide-to="<?php echo $counter; ?>" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></li>
							<?php
						endif;
						?>
						<?php
					endwhile;
				endif;
				?>
			</ul>
			</div>
			<div class="carousel-inner">
				<?php
				$args = array(
					'post_type' => 'team_member',
					'orderby' => 'publish_date',
					'post_status' => 'publish',
				);
				$arr_posts = new WP_Query( $args ); 
				if ( $arr_posts->have_posts() ) :
					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
						?>  
                    	<?php if ( has_post_thumbnail() ) {	?>    
                    	    <div class="carousel-item" style="background-image: url('<?php echo get_the_post_thumbnail_url( null, $size ); ?>')">
                        <?php } ?>
							<div class="carousel-caption">
								<div class="carousel-caption-inner">
									<h2 class="name-position"><?php the_title(); ?> <span><?php the_field('member_position'); ?></span></h2>
									<div class="member-bio clickable-overlay">
										<?php
										$inputstring = get_field('member_details');
										echo substr($inputstring, 0 ,80);
										?>... <span> Find out more...</span>
									</div>
									<div class="modal-outer">
										<div class="modal-iner">
											<button type="button" class="close">&times;</button>
											<div class="row">
												<div class="col-md-8">
													<h2 class="name-position"><?php the_title(); ?> <span><?php the_field('member_position'); ?></span></h2>
													<h2 class="name-position"><span>Details of my role</span></h2><br />
													<p class="member-bio"><?php echo get_field('member_details'); ?>
												</p>
											</div>
											<div class="col-md-4">
												<br />
												<br />
												<br />
												<?php if(get_field('member_email')) { ?>
												    <p class="member-bio">E: <a href="#"><?php echo get_field('member_email'); ?></a><br />
												<?php } ?>
												<?php if(get_field('linkdin_profile_link')) { ?>
												    <a href="<?php echo get_field('linkdin_profile_link'); ?>" target="_blank">LinkedIn Profile</a></p>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> 
					</div>
					<?php
				endwhile;
			endif;
			?> 
		</div>
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
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
