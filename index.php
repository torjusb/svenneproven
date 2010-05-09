<?php get_header(); ?>
<section id="intro">
	<?php query_posts( array('page_id' => 7)); ?>
	<?php while (have_posts()) : the_post() ?>
		<?php $more = 0; ?>
		<h1><?php the_title(); ?></h1>
		<div class="entry">
			<?php the_content(''); ?>
		</div>
		<p class="continue-reading">
			<a href="<?php the_permalink(); ?>">Les hele oppgaven</a> »
		</p>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
</section>
<div id="pages">
	<?php query_posts('orderby=menu_order & order=asc'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post() ?>
		<article>
			<a href="<?php the_permalink(); ?>">	
				<p><span><?php the_title(); ?></span></p>
				<?php the_post_thumbnail(); ?>
			</a>
		</article>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>