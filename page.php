<?php get_header(); ?>

<section class="blog">
  <div class="row">
    <div class="col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2">

			<ul id="article-list">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <li>

						<?php the_content(); ?>
						<?php comments_template( '', true ); // Remove if you don't want comments ?>
						<br class="clear">
						<?php edit_post_link(); ?>

				</li>
				<?php endwhile; ?>

				<?php else: ?>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>


		<?php endif; ?>
	</ul>

	</div><!--/col-->
</div><!--/row-->

</section>


<?php get_footer(); ?>
