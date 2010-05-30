<?php get_header(); ?>
<?php query_posts( array('pagename' => 'Oppgaven', 'post_status' => 'publish') ); ?>
<?php while (have_posts()) : the_post() ?>
	<?php printA($post); ?>
	<?php $more = 0; ?>
	<section id="intro">
		<h1><?php the_title(); ?></h1>
		<div class="entry">
			<?php the_content(''); ?>
		</div>
		<p class="continue-reading">
			<a href="<?php the_permalink(); ?>">Les hele oppgaven</a> »
		</p>
	</section>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<nav id="pages">
	<?php query_posts('orderby=menu_order & order=asc'); ?>
	<ul>
		<?php $i = 0; ?>
		<?php if (have_posts()) : while (have_posts()) : the_post() ?>
			<li class="article<?php echo $i % 2 === 0 ? ' row' : ''; ?>">
				<a href="<?php the_permalink(); ?>">	
					<p><?php the_title(); ?></p>
					<?php the_post_thumbnail(); ?>
				</a>
			</li>
			<?php $i++; ?>
		<?php endwhile; endif; ?>
	</ul>
</nav>
<?php get_footer(); ?>