<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="events__logo">
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php echo(types_render_field( "hosts-twitter", array( 'raw' => true) )); ?>" target="_blank" title="<?php the_title(); ?>">
						<?php the_post_thumbnail('small'); // Fullsize image for the single post ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->
			</div>

			<!-- event map -->
			<div class="responsive-map">
			    <?php echo(types_render_field( "google-map-embed-code", array( 'raw' => true) )); ?>
			</div>
			<!-- /event map -->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<h2><?php echo(types_render_field( "event-date", array( 'raw' => false) )); ?></h2>

			<?php the_content(); // Dynamic Content ?>

			<a href="/events/" class="cta-event cta-event--return">« Return to Events</a>

			<?php comments_template(); ?>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

	<?php endif; ?>

<?php
	if( isthis_latest_post( get_the_ID(), array( 'post_type' => 'events' ) )){ ?>

					</article>
					<!-- /article -->

				</section>
				<!-- /section -->
			</main>
		</div>

		<?php

		$args = array('post_type' => 'events', 'posts_per_page' => 1 );
		$query = new WP_Query($args);
		while($query -> have_posts()) : $query -> the_post();

		$current = time();
		$current = $current - 86400;

		if ($current > types_render_field( "event-date", array( 'raw' => true) )) {

		} else { ?>

					</article>
					<!-- /article -->

				</section>
				<!-- /section -->
			</main>

		<div class="cta">
			<a target="_blank" href="<?php echo(types_render_field( "eventbrite-url", array( 'raw' => true) )); ?>"><div class="cta__button">Sign up for your free ticket now!</div></a>
		</div>

		<?php } ?>

	<?php endwhile; ?>

	<?php } else {

		$args = array('post_type' => 'events', 'posts_per_page' => 1 );
		$query = new WP_Query($args);
		while($query -> have_posts()) : $query -> the_post();

		$current = time();

		if ($current > types_render_field( "event-date", array( 'raw' => true) )) {?>

					</article>
					<!-- /article -->

				</section>
				<!-- /section -->
			</main>
		</div>

		<?php } else { ?>

		<a class="cta-event cta-event--next" href="<?php the_permalink(); ?>">View Upcoming Event »</a>

					</article>
					<!-- /article -->

				</section>
				<!-- /section -->
			</main>
		</div>

		<?php } ?>

	<?php endwhile; ?>

	<?php } ?>

<?php get_footer(); ?>
