<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wedoweb
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/css/style.css">
	<?php wp_head(); ?>
</head>

<body class="home blog logged-in admin-bar hfeed customize-support">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between px-5" id="navbar">
			<a class="navbar-brand" href="#">
			<svg xmlns="http://www.w3.org/2000/svg" width="197.392" height="38.7" viewBox="0 0 197.392 38.7">
				<g id="Grupo_6" data-name="Grupo 6" transform="translate(-85.29 -22.91)">
					<g id="logo" transform="translate(-1319.317 -750.643)">
					<path id="Trazado_2" data-name="Trazado 2" d="M9.942-23.694l3.744-10.548h.081L17.39-23.694Zm3.744-25.754L-.324-12.582H6.037l2.255-6.4H19.041l2.174,6.4h6.562L13.767-49.448ZM47.947-31.665h6.119A11.586,11.586,0,0,0,52.7-36.094a10.77,10.77,0,0,0-2.758-3.241,12.152,12.152,0,0,0-3.784-1.993,14.483,14.483,0,0,0-4.489-.684,14.519,14.519,0,0,0-5.938,1.168,12.7,12.7,0,0,0-4.449,3.221A14.361,14.361,0,0,0,28.5-32.812a17.961,17.961,0,0,0-.966,5.979,17.361,17.361,0,0,0,.966,5.858,13.99,13.99,0,0,0,2.778,4.731,12.724,12.724,0,0,0,4.449,3.16,14.74,14.74,0,0,0,5.938,1.147,14.16,14.16,0,0,0,4.871-.805A11.3,11.3,0,0,0,50.4-15.078a11.668,11.668,0,0,0,2.657-3.7,14.613,14.613,0,0,0,1.248-4.871H48.189a8.192,8.192,0,0,1-1.993,4.67,5.849,5.849,0,0,1-4.529,1.771,7.379,7.379,0,0,1-3.623-.825,6.913,6.913,0,0,1-2.416-2.194,9.52,9.52,0,0,1-1.349-3.08,14.633,14.633,0,0,1-.423-3.523,15.73,15.73,0,0,1,.423-3.664,9.7,9.7,0,0,1,1.349-3.16,6.841,6.841,0,0,1,2.416-2.214,7.379,7.379,0,0,1,3.623-.825,6.571,6.571,0,0,1,2.234.382,6.5,6.5,0,0,1,1.912,1.067,6.354,6.354,0,0,1,1.409,1.59A5.161,5.161,0,0,1,47.947-31.665Zm9.179-9.662v28.745h5.918v-20.17h.081l7.045,20.17h4.871l7.045-20.371h.081v20.371h5.918V-41.327h-8.9L72.828-21.56h-.081L66.024-41.327Zm35.026,0v28.745h21.821V-17.9h-15.5v-7.045H112.4v-4.912H98.474v-6.16h15.178v-5.314Z" transform="translate(1404.931 823.001)" fill="#c23f81"/>
					<text id="gallery" transform="translate(1520.042 806.254)" fill="#74667e" font-size="23" font-family="SegoeUI-Bold, Segoe UI" font-weight="700"><tspan x="0" y="0">gallery</tspan></text>
					<g id="arrow" transform="translate(1601.999 776.536) rotate(90)">
						<rect id="Rectángulo_10" data-name="Rectángulo 10" width="12.366" height="12.366" transform="translate(3.191)" fill="#c23f81"/>
						<rect id="Rectángulo_11" data-name="Rectángulo 11" width="12.765" height="12.765" transform="translate(0 2.792)" fill="#fff"/>
					</g>
					</g>
				</g>
			</svg>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" viewBox="0 0 30 25">
				<g id="Grupo_7" data-name="Grupo 7" transform="translate(-323 -12)">
					<rect id="menu-bg" width="30" height="25" rx="4" transform="translate(323 12)" fill="#c23f81"/>
					<g id="Grupo_5" data-name="Grupo 5" transform="translate(2 1)">
					<rect id="Rectángulo_15" data-name="Rectángulo 15" width="19" height="2" rx="1" transform="translate(327 17)" fill="#fff"/>
					<rect id="Rectángulo_16" data-name="Rectángulo 16" width="13" height="2" rx="1" transform="translate(327 23)" fill="#fff"/>
					<rect id="Rectángulo_17" data-name="Rectángulo 17" width="19" height="2" rx="1" transform="translate(327 29)" fill="#fff"/>
					</g>
				</g>
			</svg>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<button class="btn btn-login">LOGIN</button>    
			</div>
		</nav>
	</header><!-- #masthead -->
	<header class="d-flex header px-5 align-items-end">
		<h1 class="title">Gallery</h1>
    </header>