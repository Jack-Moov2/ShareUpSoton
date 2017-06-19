<?php get_header(); ?>

<section class="events">

<?php
    $args = array('post_type' => 'events', 'posts_per_page' => 10 );
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
            <a target="_blank" href="<?php echo(types_render_field( "google-calendar-url", array( 'raw' => true) )); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/calendar.svg"></a>
            <a target="_blank" href="<?php echo(types_render_field( "google-map-url", array( 'raw' => true) )); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/location.svg"></a>
            <a target="_blank" href="https://twitter.com/ShareUpSoton"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.svg"></a>
        </nav>

        <p><?php the_excerpt(); ?></p>

        <p class="bold"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read more about the event</a></p>

    </div>

<?php endwhile; ?>

<?php echo paginate_links( $args ); ?>

</section>

<?php get_footer(); ?>
