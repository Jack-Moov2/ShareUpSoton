<?php /* Template Name: Home Template */ get_header(); ?>


	<!-- section -->
	<section class="fold fold--home">

		<img src="<?php bloginfo('template_directory'); ?>/img/share.svg" alt="ShareUp Soton Logo">
		<h1><?php the_field('one_liner_intro');?></h1>
		<?php

			$args = array('post_type' => 'events', 'posts_per_page' => 1 );
			$query = new WP_Query($args);
			while($query -> have_posts()) : $query -> the_post();?>

			<?php

			$current = time();
			$current = $current - 86400;

			if ($current > types_render_field( "event-date", array( 'raw' => true) )) {

			?>



			<?php } else { ?>

			<h2><?php echo(types_render_field( "event-date", array( 'raw' => false) )); ?>, 6pm</h2>
			<br>
			<a href="<?php echo(types_render_field( "eventbrite-url", array( 'raw' => true) )); ?>" target="_blank" class="bold link link--signup">Register your free ticket!</a>

			<?php } ?>

		<?php endwhile; ?>
		<?php wp_reset_query(); //resetting the page query ?>
	</section>
	<!-- /section -->

</div>

	<section class="wrapper events">

	<?php
		$args = array('post_type' => 'events', 'posts_per_page' => 5 );
		$query = new WP_Query($args);
		while($query -> have_posts()) : $query -> the_post();?>

		<?php get_template_part( 'datelogic' ); ?>

			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<!-- post thumbnail -->
			    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			    <?php the_post_thumbnail( 'small' );?>
			    <?php endif; ?>
			<!-- /post thumbnail -->
			</a>

			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?> - <?php echo(types_render_field( "event-date", array( 'raw' => false) )); ?></h2></a>

			<nav>
				<a target="_blank" href="<?php echo(types_render_field( "google-calendar-url", array( 'raw' => true) )); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/calendar.svg" alt="shareup-calendar"></a>
				<a target="_blank" href="<?php echo(types_render_field( "google-map-url", array( 'raw' => true) )); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/location.svg" alt="shareup-host-location"></a>
				<a target="_blank" href="<?php echo(types_render_field( "hosts-twitter", array( 'raw' => true) )); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.svg" alt="shareup-host-twitter-handle"></a>
			</nav>

			<p><?php the_excerpt(); ?></p>

			<p class="bold"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read more about the event</a></p>

		</div>

	<?php endwhile; ?>
	<?php wp_reset_query(); //resetting the page query ?>

	</section>

<div class="wrapper background--dark padding--vertical">

	<?php the_content(); ?>

</div>

	<?php

		$args = array('post_type' => 'event', 'posts_per_page' => 1 );
		$query = new WP_Query($args);
		while($query -> have_posts()) : $query -> the_post();?>

		<?php

		$current = time();

		if ($current > types_render_field( "event-date", array( 'raw' => true) )) {

		?>

		<?php } else { ?>

		<div class="cta">
			<a target="_blank" href="<?php echo(types_render_field( "eventbrite-url", array( 'raw' => true) )); ?>"><div class="cta__button">Sign up for your free ticket now!</div></a>
		</div>

		<?php } ?>

	<?php endwhile; ?>
	<?php wp_reset_query(); //resetting the page query ?>

<?php get_footer(); ?>
