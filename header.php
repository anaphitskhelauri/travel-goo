<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php
		/* translators: Hidden accessibility text. */
		esc_html_e( 'Skip to content', 'twentytwentyone' );
		?>
	</a>

	<?php

$navLinks = array(
    "Home" => "#",
    "About Us" => "#",
    "Packages" => "#"
);


$imageSources = array(
    "favorite" => get_template_directory_uri() . '/assets/images/clarity_favorite-line.png',
    "user" => get_template_directory_uri() . '/assets/images/healthicons_ui-user-profile-outline.png'
);
?>

<header id="header">
    <div class="logo">
        <a href="">Travel <span>Goo</span></a>
    </div>
    <div class="nav">
        <?php
        foreach ($navLinks as $text => $url) {
            echo "<a href='$url'>$text</a>";
        }
        ?>
    </div>
    <div class="header-icons">
        <?php
        echo "<img src='" . $imageSources['favorite'] . "' alt='' />";
        echo "<img src='" . $imageSources['user'] . "' alt='' />";
        ?>
    </div>
</header>



