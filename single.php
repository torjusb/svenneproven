<?php get_header(); ?>
<?php $currentPageId = $post->ID; ?>
<nav id="navlist">
	<?php query_posts('orderby=menu_order & order=asc'); ?>
	<ul>
		<?php if (have_posts()) : while (have_posts()) : the_post() ?>
			<?php if ($post->ID === $currentPageId) : ?>
				<li class="current"><?php the_title(); ?></li>
			<?php else : ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endif; ?>
		<?php endwhile; endif; ?>
	</ul>
	<?php wp_reset_query(); ?>
</nav>
<div id="content" role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
			<div class="entry">
				
				<table class="chart">
					<tbody>
						<tr>
							<th scope="row" rowspan="2">Research</th>
							<th scope="row">Antatt</th>
							<td><div><span>3</span></div></td>
						</tr>
						<tr>
							<th scope="row">Reell</th>
							<td><div><span>4</span></div></td>
						</tr>
						<tr>
							<th scope="row" rowspan="2">Forbredelser</th>
							<th scope="row">Antatt</th>
							<td><div><span>3.5</span></div></td>
						</tr>
						<tr>
							<th scope="row">Reell</th>
							<td><div><span>4</span></div></td>
						</tr>
						<tr>
							<th scope="row" rowspan="2">Implementering</th>
							<th scope="row">Antatt</th>
							<td><div><span>16</span></div></td>
						</tr>
						<tr>
							<th scope="row">Reell</th>
							<td><div><span>18</span></div></td>
						</tr>
						<tr>
							<th scope="row" rowspan="2">Dokumentasjon</th>
							<th scope="row">Antatt</th>
							<td><div><span>5</span></div></td>
						</tr>
						<tr>
							<th scope="row">Reell</th>
							<td><div><span>6</span></div></td>
						</tr>
					</tbody>
				</table>
			
				<?php //the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
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
				<?php next_post_link_menu('<li class="prev">&laquo; %link</li>'); ?>
				<?php previous_post_link_menu('<li class="next">%link &raquo;</li>') ?>
			</ul>
		</nav>
	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
