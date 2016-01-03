<?php
get_header(); ?>

<!-- Page Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="text-center">We do stuff</h1>
		</div>
	</div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<div class="col-lg-12 post-container">
			<div class="post">
				<h2 class="post-title text-center"><?php the_title(); ?></h2>
				<p class="post-description"><?php the_content(); ?><small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small></p>
			</div>
		</div>
	</div>
	<?php endwhile; endif; ?>
</div>
<!-- /.container -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
		</div>
	<?php endwhile; endif; ?>

</div><!-- #content -->
</body>
</html>