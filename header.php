<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chile_California_Council
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
 <!-- Fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'chilecalifornia' ); ?></a>

	<header class="header">
        <nav class="max-width navbar">
            <a href="#" class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.png" alt="Logo Chile California"></a>
            <button class="btn btn-gradient open-form-search mob"><img src="<?php echo get_template_directory_uri(); ?>/img/lupa.svg" alt=""></button>
            <button class="btn btn-toggle-menu" id="btn-toggle-menu"><span></span><span></span><span></span></button>
            <div class="menu-container">
                <ul class="menu">
                    <li class="menu-item"><a href="#" class="text-black">Home</a></li>
                    <li class="menu-item"><a href="#" class="text-black">About</a></li>
                    <li class="menu-item has-submenu">
                        <a href="" class="text-black">Resources</a>
                        <button class="btn btn-toggle-submenu">
                            <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.42 0.451988L13.48 1.51299L7.70301 7.29199C7.61044 7.38514 7.50037 7.45907 7.37912 7.50952C7.25787 7.55997 7.12784 7.58594 6.99651 7.58594C6.86518 7.58594 6.73515 7.55997 6.6139 7.50952C6.49265 7.45907 6.38258 7.38514 6.29001 7.29199L0.51001 1.51299L1.57001 0.452987L6.99501 5.87699L12.42 0.451988Z" fill="currentcolor"/>
                            </svg>
                        </button>
                        <div class="submenu-container">
                            <ul class="submenu">
                                <li><a href="#" class="text-black">Articulos</a></li>
                                <li><a href="#" class="text-black">Noticias</a></li>
                                <li><a href="#" class="text-black">Videos y Multimedia</a></li>
                                <li><a href="#" class="text-black">Eventos</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item"><a href="#" class="text-black">Contact</a></li>
                    <li class="menu-item desk"><button class="btn btn-gradient open-form-search"><img src="<?php echo get_template_directory_uri(); ?>/img/lupa.svg" alt="icono lupa"></button></li>
                    <li class="menu-item has-submenu">
                        <a href="javascript:void(0)" class="btn change-lang text-black"><img src="<?php echo get_template_directory_uri(); ?>/img/lenguaje.svg" alt="icono"><span>ESP</span></a>
                        <button class="btn btn-toggle-submenu">
                            <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.42 0.451988L13.48 1.51299L7.70301 7.29199C7.61044 7.38514 7.50037 7.45907 7.37912 7.50952C7.25787 7.55997 7.12784 7.58594 6.99651 7.58594C6.86518 7.58594 6.73515 7.55997 6.6139 7.50952C6.49265 7.45907 6.38258 7.38514 6.29001 7.29199L0.51001 1.51299L1.57001 0.452987L6.99501 5.87699L12.42 0.451988Z" fill="currentcolor"/>
                            </svg>
                        </button>
                        <div class="submenu-container">
                            <ul class="submenu">
                                <li class="active lang"><a href="javascript:void(0)" class="text-black">ESP</a></li>
                                <li class="lang"><a href="javascript:void(0)" class="text-black">ENG</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item"><a href="#" class="btn btn-gradient">Dona aquí <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.16659 5L11.8333 5M11.8333 5L7.83325 9M11.8333 5L7.83325 1" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a></li>
                </ul>
            </div>
        </nav>
    </header>
