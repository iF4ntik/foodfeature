<?php

get_header();

?>

<?php
/*
 * Template name: Event page
 */
?>


			<div class="pageHeader">
				<h1><?php echo get_post_meta( $post->ID, 'privatepageheader', true ); ?></h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xl-4">
						<div class="pageHeaderBlock">
							<h1><?php echo get_post_meta( $post->ID, 'privatepageheaderblock', true ); ?></h1>
							<p><?php echo get_post_meta( $post->ID, 'privatepageunderheaderblock', true ); ?></p>
							<a href="#sectionmenu">Посмотреть меню</a>
						</div>
					</div>
					<div class="col-xl-8">
						<div class="pageHeaderDescription">
							<p><?php echo get_post_meta( $post->ID, 'privatepagedesc', true ); ?></p>
						</div>
					</div>
				</div>
			</div>
	</main>
	<section class="servicesList">
		<div class="container">
			<div class="servicesListHeader">
				<p><?php echo get_post_meta( $post->ID, 'privatepageservicesupheader', true ); ?></p>
				<h1><?php echo get_post_meta( $post->ID, 'privatepageservicesheader', true ); ?></h1>
			</div>
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="servicesListBlock">
						<div class="row">


						<?php
						$my_posts = get_posts( array(
							'numberposts' => -1,
							'category'    => 0,
							'orderby'     => 'date',
							'order'       => 'DESC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'eventservice',
							'suppress_filters' => true,
						) );

						global $post;

						foreach( $my_posts as $post ){
							setup_postdata( $post );

						?>

						<div class="col-xl-6 offset-xl-0 col-lg-6">
							<div class="servicesListBlockItem">
								<?php
							$pods = pods('eventservice', get_the_ID());
							$image = $pods->field('_eventserviceicon');

							if ($image) {
    						$image_url = wp_get_attachment_image_url($image['ID'], 'full');
    						echo '<img src="' . esc_url($image_url) . '" alt="Image">';
								}
							?>
								<p><?php echo get_post_meta(get_the_ID(), 'eventserviceitem', true); ?></p>
							</div>
						</div>

						<?php
							
						}

						wp_reset_postdata();
						?>


						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="sectionmenu" class="pageMenu">
		<div class="container">
			<div class="pageMenuHeader">
				<p><?php echo get_post_meta( $post->ID, 'privatepagemenuupheader', true ); ?></p>
				<h1><?php echo get_post_meta( $post->ID, 'privatepagemenuheader', true ); ?></h1>
			</div>
			<div class="row">
				<div class="col-xl-2">
					<div class="options">
						<div class="option">
							<a class="standartBtn active">Стандарт</a>
						</div>
						<div class="option">
							<a class="standartPlusBtn">Стандарт +</a>
						</div>
						<div class="option">
							<a class="businessBtn">Бизнес</a>
						</div>
					</div>
				</div>
				<div class="col-xl-10 offset-xl-0">
					<div class="pageMenuList">
						<div class="standart">
						<table>
							<tbody>
						<?php
						$my_posts = get_posts( array(
							'numberposts' => -1,
							'category'    => 0,
							'orderby'     => 'date',
							'order'       => 'ASC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'privatemenustandart',
							'suppress_filters' => true,
						) );

						global $post;

						foreach( $my_posts as $post ){
							setup_postdata( $post );

						?>



								<tr>
									<td colspan="2"><strong><?php echo get_post_meta(get_the_ID(), 'privatemenustandartheader', true); ?></strong></td>
								</tr>
								<?php
								$pods_field = pods('privatemenustandart', get_the_ID());
								if ($pods_field->exists()) {
								    $additional_field_1 = $pods_field->field('privatemenustandartname');
								    $additional_field_2 = $pods_field->field('privatemenustandarweight');

								    if (count($additional_field_1) === count($additional_field_2)) {
								        $count = count($additional_field_1);

								        for ($i = 0; $i < $count; $i++) {
								            echo '<tr><td>'.$additional_field_1[$i].'</td><td class="weight">'.$additional_field_2[$i].'</td></tr>';
								        }
								    }
								}
								?>


						<?php
							
						}

						wp_reset_postdata();
						?>
								</tbody>
						</table>
						<div class="totalPrice">
							<h1>Стоимость: <?php echo get_post_meta( $post->ID, 'privatepagestandartprice', true ); ?> руб/чел</h1>
							<a href="/form/">Оформить</a>
						</div>
						</div>


						<div class="standartPlus">
						<table>
							<tbody>
								<?php
								$my_posts = get_posts( array(
									'numberposts' => -1,
									'category'    => 0,
									'orderby'     => 'date',
									'order'       => 'ASC',
									'include'     => array(),
									'exclude'     => array(),
									'meta_key'    => '',
									'meta_value'  =>'',
									'post_type'   => 'privatemenustandartp',
									'suppress_filters' => true,
								) );

								global $post;

								foreach( $my_posts as $post ){
									setup_postdata( $post );

								?>

								<tr>
									<td colspan="2"><strong><?php echo get_post_meta(get_the_ID(), 'privatemenustandartplusheader', true); ?></strong></td>
								</tr>
								<?php
								$pods_field = pods('privatemenustandartp', get_the_ID());
								if ($pods_field->exists()) {
								    $additional_field_1 = $pods_field->field('privatemenustandartplusname');
								    $additional_field_2 = $pods_field->field('privatemenustandartplusweight');

								    if (count($additional_field_1) === count($additional_field_2)) {
								        $count = count($additional_field_1);

								        for ($i = 0; $i < $count; $i++) {
								            echo '<tr><td>'.$additional_field_1[$i].'</td><td class="weight">'.$additional_field_2[$i].'</td></tr>';
								        }
								    }
								}
								?>


						<?php
							
						}

						wp_reset_postdata();
						?>
							</tbody>
						</table>
						<div class="totalPrice">
							<h1>Стоимость: <?php echo get_post_meta( $post->ID, 'privatepagestandartplusprice', true ); ?> руб/чел</h1>
							<a href="/form/">Оформить</a>
						</div>
						</div>


						<div class="business">
						<table>
							<tbody>
								<?php
								$my_posts = get_posts( array(
									'numberposts' => -1,
									'category'    => 0,
									'orderby'     => 'date',
									'order'       => 'ASC',
									'include'     => array(),
									'exclude'     => array(),
									'meta_key'    => '',
									'meta_value'  =>'',
									'post_type'   => 'privatemenubusiness',
									'suppress_filters' => true,
								) );

								global $post;

								foreach( $my_posts as $post ){
									setup_postdata( $post );

								?>

								<tr>
									<td colspan="2"><strong><?php echo get_post_meta(get_the_ID(), 'privatemenubusinessheader', true); ?></strong></td>
								</tr>
								<?php
								$pods_field = pods('privatemenubusiness', get_the_ID());
								if ($pods_field->exists()) {
								    $additional_field_1 = $pods_field->field('privatemenubusinessname');
								    $additional_field_2 = $pods_field->field('privatemenubusinessweight');

								    if (count($additional_field_1) === count($additional_field_2)) {
								        $count = count($additional_field_1);

								        for ($i = 0; $i < $count; $i++) {
								            echo '<tr><td>'.$additional_field_1[$i].'</td><td class="weight">'.$additional_field_2[$i].'</td></tr>';
								        }
								    }
								}
								?>


						<?php
							
						}

						wp_reset_postdata();
						?>
							</tbody>
						</table>
						<div class="totalPrice">
							<h1>Стоимость: <?php echo get_post_meta( $post->ID, 'privatepagebusinessprice', true ); ?> руб/чел</h1>
							<a href="/form/">Оформить</a>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php

get_footer();

?>