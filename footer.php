
<footer class="site-footer">
    <!-- footer widgets -->
        <div class="footer-widgets flex">
            
            <?php if(is_active_sidebar('footer1')):?>

                <div class="footer-widget-area">
                    <?php dynamic_sidebar('footer1')?>
                </div>

            <?php endif;?>


            <?php if(is_active_sidebar('footer2')):?>

                <div class="footer-widget-area">
                    <?php dynamic_sidebar('footer2')?>
                </div>

            <?php endif;?>


        </div>
    <!-- footer widgets -->
    <nav>
        <?php
        $args = [
            'theme_location' => 'footer'
        ];
        wp_nav_menu($args);?>
    </nav>
        <p><?= bloginfo('name').' &copy;'. date('Y')?></p>
</footer>

</div>
<!-- site container end -->
<?php wp_footer()?>

</body>

</html>