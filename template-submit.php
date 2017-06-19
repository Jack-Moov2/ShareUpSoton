<?php /* Template Name: Submit Template */ get_header(); ?>

<section class="form__content">

	<h1>Submit your content</h1>

	<p>If you have a creation you would like to share with the community, you can do so by filling out some information about your creation. Once you have submitted your post, it will be approved an admin before becoming live on the website for everyone to see.</p>

	<?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>

</section>

<?php get_footer(); ?>
