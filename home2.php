<?php /* Template Name: Home Page */ get_header(); ?>

<?php get_header(); ?>


<section>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>

		<?php endwhile; ?>

		<?php else: ?>

			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		<?php endif; ?>




</div><!--/col-->
</div><!--/row-->

</section>

<?php get_footer(); ?>
