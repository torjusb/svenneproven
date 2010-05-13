<?php get_header(); ?>
<section id="intro">
	<?php query_posts( array('pagename' => 'Oppgaven') ); ?>
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
<<<<<<< HEAD
<nav id="pages">
	<?php query_posts('orderby=menu_order & order=asc'); ?>
	<ul>
		<?php if (have_posts()) : while (have_posts()) : the_post() ?>
			<li class="article">
				<a href="<?php the_permalink(); ?>">	
					<p><?php the_title(); ?></p>
					<?php the_post_thumbnail(); ?>
				</a>
			</li>
		<?php endwhile; endif; ?>
	</ul>
</nav>
=======
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
>>>>>>> 07797739d5a7a0e656060c32d2a4cf8e5b320da5
<?php get_footer(); ?>