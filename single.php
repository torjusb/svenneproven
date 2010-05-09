<?php get_header(); ?>
<div id="content" role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
			</div>
			<?php $postNotes = get_post_custom_values('post-note'); ?>
			<?php if ($postNotes) : ?>
				<div class="footnotes">
					<ol>
						<?php foreach ($postNotes as $i => $note) : ?>
							<li	id="note-<?php echo $i + 1; ?>"><?php echo $note; ?></li>
						<?php endforeach; ?>
					</ol>
				</div>
			<?php endif; ?>
		</article>
		<nav class="pagination">
			<ul>
				<?php previous_post_link('<li class="prev">&laquo; %link</li>'); ?>
				<?php next_post_link('<li class="next">%link &raquo;</li>') ?>
			</ul>
		</nav>
	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
