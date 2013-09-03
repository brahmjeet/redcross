<?php get_header(); ?>


<div id="content">
    
    <div class="entry">
        <?php if(is_category()){ ?>
        <h1 class="title"><?php echo single_cat_title(); ?></h1>
        <div class="meta">
            <?php $cat_obj = $wp_query->get_queried_object(); 
            echo '<a href="'.get_category_feed_link($cat).'"><img src="'.get_bloginfo('url').'/wp-includes/images/rss.png" alt="RSS"/></a>'; ?> 
            <?php _e('Subscribe', 'cpotheme'); ?>
        </div>

        <?php }elseif(is_day()){ ?>
        <h1 class="title"><?php _e('Archive', 'cpotheme'); ?></h1>
        <div class="meta"><?php the_time(get_option('date_format')); ?></div>

        <?php }elseif(is_month()){ ?>
        <h1 class="title"><?php _e('Archive', 'cpotheme'); ?></h1>
        <div class="meta"><?php the_time(get_option('date_format')); ?></div>

        <?php }elseif(is_year()){ ?>
        <h1 class="title"><?php _e('Archive', 'cpotheme'); ?></h1>
        <div class="meta"><?php the_time(get_option('date_format')); ?></div>

        <?php }elseif(is_author()){ ?>
        <h1 class="title"><?php _e('Archive', 'cpotheme'); ?></h1>
        <div class="meta"><?php _e('Author archive', 'cpotheme'); ?></div>

        <?php }elseif(is_tag()){ ?>
        <h1 class="title"><?php _e('Archive', 'cpotheme'); ?></h1>
        <div class="meta"><?php _e('Tag', 'cpotheme'); ?> <?php echo single_tag_title('', true); ?></div>
        <?php } ?>
    </div>
    
    <?php if(have_posts()): $count = 0; ?>
    <?php while(have_posts()): the_post(); ?>													
    <div class="entry">
        <?php if(has_post_thumbnail()): ?>
        <div class="thumbnail alignleft"><?php the_post_thumbnail(array(100,200)); ?></div>
        <?php endif; ?>
        
        <h2 class="title">
            <a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'cpotheme'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2>
        
        <div class="meta"><?php cpotheme_post_byline(); ?></div>

        <div class="preview"><?php the_excerpt(); ?></div>

    </div>
    <?php endwhile; ?>
    
    <div id="navigation">
    	<div class="prev"><?php previous_posts_link(__('Newer', 'cpotheme')); ?></div>
        <div class="next"><?php next_posts_link(__('Older', 'cpotheme')); ?></div>
    </div>
    
    <?php else: ?>

    <div class="entry"><p><?php _e('No posts found.', 'cpotheme') ?></p></div>

    <?php endif; ?> 
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
