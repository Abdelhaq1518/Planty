<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr(oceanwp_html_classes()); ?>" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="./oceanwp-child/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup('html'); ?>>

	<header class="header">
		<a href="http://localhost/Planty5/wordpress-6.3-fr_FR/wordpress">
			<img class="logo"
				src="http://localhost/Planty5/wordpress-6.3-fr_FR/wordpress/wp-content/uploads/2023/09/Logo-300x28.png"
				alt="logo Planty">
		</a>
		<nav>
			<ul class="liste-liens">
				<li>
					<a href="http://localhost/Planty5/wordpress-6.3-fr_FR/wordpress/nous-rencontrer/"
						class="lien-rencontrer">Nous rencontrer</a>
				</li>
				<?php
				if (is_user_logged_in()) {
					// Condition pour vérifier si l'utilisateur est connecté à WordPress
					echo '<li><a href="http://localhost/Planty5/wordpress-6.3-fr_FR/wordpress/wp-admin/" class="lien-admin">Admin</a></li>';
				}
				?>
				<li>
					<a href="http://localhost/Planty5/wordpress-6.3-fr_FR/wordpress/commander"
						class="button">Commander</a>
				</li>
			</ul>
		</nav>

	</header>