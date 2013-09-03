            <div id="clear"></div>
        </div><!-- /#main -->
    </div><!-- /#wrapper -->
    
    <div class="wrapper_footer">
        <div id='footersidebar'>
            <?php get_sidebar('footer'); ?>
        </div>
        <div id='footer'>  
            <div id='footermenu'>
                <?php wp_nav_menu(array('menu_class' => 'nav_footer', 'theme_location' => 'footer_menu', 'depth' => '1', 'fallback_cb' => false)); ?>
            </div>
            &copy; <?php _e('Theme designed by <a href="http://www.srijan.net">Srijan Dhauladhar</a>.', 'cpotheme'); ?>
      </div>
    </div>
<?php wp_footer(); ?>

</body>
</html>
