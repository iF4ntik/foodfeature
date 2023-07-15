<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Food Feature</title>
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png" sizes="32x32">
	<?php
		wp_head();
	?>

	<?php
	$custom_logo_id = get_theme_mod('custom_logo');
	$image = wp_get_attachment_image_src($custom_logo_id, 'full');
	?>

</head>
<body class="bodySett">
	<main>
		<div class="menuBg">
			<div class="container">
				<div class="header">
					<button class="burgerBtn" id="burger">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<div class="logo">
						<?php
						if (function_exists('the_custom_logo')) {
						    $custom_logo_id = get_theme_mod('custom_logo');
						    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
						 
						    if (has_custom_logo()) {
						        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
						    } else {
						        echo '<h1>' . get_bloginfo('name') . '</h1>';
						    }
						}
						?>
					</div>
					<div class="menu">
						<ul>
							<a href="/">Главная</a>
							<a href="#">О нас</a>
							<a href="/private/">Меню</a>
							<a href="/form/">Контакты</a>
						</ul>
					</div>
					<div class="orderButton">
						<a href="/form/">Забронировать</a>
					</div>
				</div>
		</div>
	</div>