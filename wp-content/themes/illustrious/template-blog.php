<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

<div id="content">
    <?php if(have_posts()) while(have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" class="entry">
        <h1 class="title"><?php the_title(); ?></h1>

        <div class="content">
            <?php the_content(); ?>
            <?php wp_link_pages(array('before' => '<div class="page-link">'.__('Pages:', 'cpotheme'), 'after' => '</div>')); ?>
        </div>
    </div>
    <?php endwhile; ?>
    
    <?php if(get_query_var('paged')) $current_page = get_query_var('paged'); else $current_page = 1; ?>
    <?php query_posts("post_type=post&paged=$current_page&posts_per_page=8"); ?>
    <?php if(have_posts()) while(have_posts()) : the_post(); ?>   
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
    
    <?php cpotheme_post_pagination(); ?>
    
</div>

<?php get_sidebar('blog'); ?>
<?php get_footer(); ?>