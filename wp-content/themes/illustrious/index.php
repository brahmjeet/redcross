<?php get_header(); ?>
        
<?php $feature_posts = new WP_Query('post_type=cpo_portfolio&posts_per_page=6&order=ASC&orderby=menu_order'); ?>
<?php if($feature_posts->have_posts()): $feature_count = 0; ?>
<div id="portfolio">
	<hr/>
	<h2 class="title">Latest Work</h2>
	<?php while($feature_posts->have_posts()): $feature_posts->the_post(); ?>
	<?php if($feature_count % 3 == 0 && $feature_count != 0) echo '<div class="separator"></div>'; $feature_count++; ?>
	<a href="<?php the_permalink(); ?>" class="item<?php if($feature_count % 3 == 0) echo ' item_right'; ?>">
		<div class="thumbnail">
			<?php the_post_thumbnail('portfolio'); ?>
		</div>
		<h3 class="title"><?php the_title(); ?></h3>
	</a>
	<?php endwhile; ?>
    <div class='clear'></div>
</div>
<?php endif; ?>

<hr/>
<div id="content">        
	<?php 
	$home_posts = cpotheme_get_option('cpo_home_limit');
	if($home_posts == '' || !is_numeric($home_posts)) $home_posts = 5;
	query_posts('posts_per_page='.$home_posts); ?>
	<?php while(have_posts()): the_post(); ?>
	<div class="entry">
		
			<?php if(has_post_thumbnail()): ?>
		<a class="thumbnail alignleft" href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'cpotheme'), the_title_attribute('echo=0')); ?>" rel="bookmark">
			<?php the_post_thumbnail(array(100,200)); ?>
		</a>
		<?php endif; ?>
		<h2 class="title">
			<a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'cpotheme'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
		<div class="meta"><?php cpotheme_post_byline(); ?></div>
		<div class="preview"><?php the_excerpt(); ?></div>
	</div>
	<?php endwhile; ?>
</div>
 
<?php get_sidebar('home'); ?>
<?php get_footer(); ?>
