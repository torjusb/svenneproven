<?php get_header(); ?>
<section id="intro">
	<?php
	$introId = 7;
	$intro = get_page($introId);
	?>
	<h1><?php echo $intro->post_title; ?></h1>
	<div class="entry">
		<?php
			$content = apply_filters('the_content', $intro->post_content);
			$content = str_replace(']]>', ']]&gt;', $content);
			echo $content;
		?>
	</div>
	<p class="continue-reading">
		<a href="#">Les hele oppgaven</a> »
	</p>
</section>
<div id="pages">
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