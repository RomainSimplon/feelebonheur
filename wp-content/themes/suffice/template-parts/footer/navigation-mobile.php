<?php
/**
 * Displays a mobile menu on footer
 *
 * @package suffice
 */

?>
<nav id="mobile-navigation" class="mobile-navigation" role="navigation">
	<header class="nav-header">
		<h3 class="nav-title"><?php bloginfo( 'name' ); ?></h3>
		<a href="#" class="nav-close"><?php esc_html_e( 'close', 'suffice' ); ?></a>
	</header>

	<?php
	wp_nav_menu(
		array(
			'theme_location' => '',
			'theme_location' => 'primary',
			'menu' => '',
			'container' => 'div',
			'container_class' => 'menu-primary',
			'menu_class' => 'primary-menu',
		)
	);
	?>
</nav><!-- #site-navigation -->
