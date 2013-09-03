<?php get_header(); ?>

<div id="content">

    <div class="entry">
    	<h1 class="title"><?php _e('Search Results', 'cpotheme') ?></h1>
        <div id="search_form">
            <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                <input type="text" value="<?php echo the_search_query(); ?>" name="s" id="s" /><input type="submit" id="searchsubmit" value="Buscar" />
            </form>
        </div>
    </div>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="entry">
	<?php if(has_post_thumbnail()): ?>
        <div class="thumbnail alignleft"><?php the_post_thumbnail(array(100,200)); ?></div>
        <?php endif; ?>
        <h2 class="title">
            <a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Go to %s', 'cpotheme'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2>
        
        <?php if(get_post_type(get_the_ID()) == 'post'): ?>
            <div class="meta"><?php cpotheme_post_byline(); ?></div>
        <?php endif; ?>
        
        <div class="preview"><?php the_excerpt(); ?></div>
    </div>
    <?php endwhile; ?>
    
    <?php cpotheme_post_pagination(); ?>

    
	<?php else: ?>
    
    <div class="entry">
        <div class="content"><?php _e('No results have been found.', 'cpotheme'); ?></div>
    </div>
    
    <?php endif; ?>  

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
