<?php get_header(); ?>
		<section id="content">
			<div id="content">
				<h2 class="title">
					Search Results for "<?php the_search_query(); ?>"
				</h2>
				<?php if (have_posts()): ?>		
				<?php while (have_posts()) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" class="post">
					<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<div class="entry">
						<?php the_excerpt(); ?>				
					</div>
					<div class="meta">
						<p class="byline"><?php the_author_posts_link() ?> on <?php the_time('F jS, Y') ?></p>
						<p class="links">
							<span class="category"><?php the_category(','); ?></span>
						</p>
					</div>
				</div>	
				<?php endwhile; ?>
				<div class="navigation">
					<div class="alignleft"><?php previous_posts_link('&laquo; Older Entries') ?></div>
					<div class="alignright"><?php next_posts_link('Newer Entries &raquo;') ?></div>
				</div>
				<?php else : ?>
					<p class="center">Sorry, but you are looking for something that isn't here.</p>
				<?php endif; ?>
			</div>
<?php get_footer(); ?>
