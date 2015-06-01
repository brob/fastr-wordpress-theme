<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fastr
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <a class="back-to-top" href="#">&uarr;</a>
        <div class="container">
            <div>
                <nav id="site-navigation" class="main-navigation" role="navigation">
			        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		        </nav><!-- #site-navigation -->
            </div>
		    <div class="site-info">
			    <?php do_action( 'fastr_credits' ); ?>
			    <?php printf( __( 'Proudly powered by %s', 'fastr' ), '<a href="http://wordpress.org/" rel="generator"  target="_blank">WordPress</a>' ); ?>
			    <span class="sep"> | </span>
			    <?php printf( __( 'Theme: %1$s by %2$s.', 'fastr' ), 'A modified Fastr', '<a href="http://kanishkkunal.in" rel="designer" target="_blank">Kanishk</a>. Modded by <a href="https://github.com/brob/fastr-wordpress-theme">me</a>' ); ?>
		    </div><!-- .site-info -->
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<script>
	var disqusDiv = document.getElementById('disqus_thread');
	if (disqusDiv != undefined) {
		disqusDiv.setAttribute('class', 'container');
	}
</script>

<?php wp_footer(); ?>

</body>
</html>