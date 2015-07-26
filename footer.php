<?php
/**
 * @package WordPress
 * @subpackage wordpress-skeleton-theme
 */
?>
    <footer>
        &copy; <?php echo date('Y') . ' ' . get_bloginfo('name'); ?>
    </footer>
    <!-- Modernizr -->
    <script src="<?php bloginfo('template_url'); ?>/static/modernizr.custom.js"></script>
    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php bloginfo('template_path'); ?>/static/jquery-1.11.3.min.js"><\/script>')</script>
    <!-- Scripts -->
    <script src="<?php bloginfo('template_url'); ?>/static/scripts.js"></script>
    <!-- Google Analytics -->
    <script>var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'));</script>
    <?php wp_footer(); ?>
</body>
</html>