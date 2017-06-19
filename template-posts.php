<?php /* Template Name: Posts Template */ get_header(); ?>

	<section class="wrapper posts">

	<?php
		$args = array('post_type' => 'post', 'posts_per_page' => 5 );
		$query = new WP_Query($args);
		while($query -> have_posts()) : $query -> the_post();?>

		<div class="posts__post">

			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<!-- post thumbnail -->
			    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			    <?php the_post_thumbnail( 'small' );?>
			    <?php endif; ?>
			<!-- /post thumbnail -->
			</a>

			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_author(); ?><?php the_title(); ?></h2></a>

			<p><?php the_excerpt(); ?></p>

			<p class="bold"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read more about the event</a></p>

		</div>

	<?php endwhile; ?>

	</section>

<?php get_footer(); ?>
