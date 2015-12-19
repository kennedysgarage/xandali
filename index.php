<?php get_header(); ?>



<section class="blog">
  <div class="row">
    <div class="col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2">

      <ul id="article-list">

					<?php get_template_part('loop'); ?>
			</ul>

<?php get_template_part('pagination'); ?>

    </div><!--/col-->


  </div><!--/row-->

</section>




<?php get_footer(); ?>
