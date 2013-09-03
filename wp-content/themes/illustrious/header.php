<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <?php cpotheme_description(); ?>
    <?php cpotheme_keywords(); ?>
    
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    
    <title><?php cpotheme_title(); ?></title>
    
    <?php if(is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
</head>

<?php $bg_color = cpotheme_get_option('cpo_bg_color'); if($bg_color == '') $bg_color = '#ddd'; ?>
<body <?php body_class(); ?> style='background-color:<?php echo $bg_color; ?>'>	    
    <div class="wrapper">        

        <div id='header'>
            <div class="logo">
                <?php if(cpotheme_get_option('cpo_general_texttitle') == 0): ?>
                <?php if(cpotheme_get_option('cpo_general_logo') == ''): ?>
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri().'/images/logo.png'; ?>" alt="<?php echo bloginfo('name'); ?>"/></a>
                <?php else: ?>
                <a href="<?php echo home_url(); ?>"><img src="<?php echo cpotheme_get_option('cpo_general_logo'); ?>" alt="<?php echo bloginfo('name'); ?>"/></a>
                <?php endif; ?>
                <?php endif; ?>

                <?php if(is_singular() && !is_front_page()): ?>
                    <span class="title<?php if(cpotheme_get_option('cpo_general_texttitle') == 0){ ?> hidden<?php } ?>"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></span>
                <?php else: ?>
                    <h1 class="title<?php if(cpotheme_get_option('cpo_general_texttitle') == 0){ ?> hidden<?php } ?>"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <?php endif; ?>
                <span class="description"><?php bloginfo('description'); ?></span>
            </div>
            <div id='menu'>
                <?php wp_nav_menu(array('menu_class' => 'nav_main', 'theme_location' => 'main_menu')); ?>
            </div>
            <div id='clear'></div>
        </div>

    
		<?php if(cpotheme_get_option('cpo_slider_always') == 1 || is_home() || is_front_page()){ ?>
		<?php $slider_posts = new WP_Query('post_type=cpo_slide&posts_per_page=-1&order=ASC&orderby=menu_order'); ?>
        <?php if($slider_posts->post_count > 0): $slide_count = 0; ?>
        <div id='slider'>
            <?php if($slider_posts->post_count > 1): ?>
            <div class='prev'></div>
            <div class='next'></div>
            <?php endif; ?>
            <ul class="slider_container">
                <?php while($slider_posts->have_posts()): $slider_posts->the_post(); ?>
                <?php $slide_count++; ?>
                <?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), array(960, 700), false, ''); ?>
                <li id="slider_slide_<?php echo $slide_count; ?>" style="background:url(<?php echo $image_url[0]; ?>) no-repeat center;">
                    <div class="content">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php if($slider_posts->post_count > 1): ?>
            <div class='pages'></div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php } ?>
            
        <?php if(!is_home() && !is_front_page()){ ?>
        <div id='breadcrumb'>
            <?php cpotheme_layout_breadcrumb(); ?>
        </div>
        <?php } ?>
        
        <div id='main'>
			<?php if(is_home() || is_front_page()){ ?>
			<?php $feature_posts = new WP_Query('post_type=cpo_feature&posts_per_page=-1&order=ASC&orderby=menu_order'); ?>
			<?php if($feature_posts->have_posts()): $feature_count = 0; ?>
			<div id="features">
				<?php while($feature_posts->have_posts()): $feature_posts->the_post(); $feature_count++; ?>
				<div class="feature<?php if($feature_count % 3 == 0) echo ' feature_right'; ?>">
					<?php the_post_thumbnail('portfolio'); ?>
					<h2><?php the_title(); ?></h2>
					<div class="content"><?php the_content(); ?></div>
				</div>
				<?php if($feature_count % 3 == 0) echo '<div class="separator"></div>'; ?>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
			<?php } ?>