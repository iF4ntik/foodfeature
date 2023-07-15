<?php

get_header();

?>

<?php 

/* Template Name: Home */

?>

		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="descriptionHome">
						<h2>
							<?php echo get_post_meta( $post->ID, 'upheader', true ); ?>
						</h2>
						<h1><?php echo get_post_meta( $post->ID, 'firstsectionheader', true ); ?></h1>
						<p><?php echo get_post_meta( $post->ID, 'firstsectionunderheader', true ); ?></p>
						<a href="#aboutsection">Узнать больше</a>
					</div>
				</div>
			</div>
		</div>
	</main>
	<section id="aboutsection" class="about">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-0 col-md-6">
					<div class="aboutHeader">
						<p><?php echo get_post_meta( $post->ID, 'secondsectionupheader', true ); ?></p>
					</div>
					<div class="aboutInfo">
						<h1><?php echo get_post_meta( $post->ID, 'secondsectionheader', true ); ?></h1>
						<p><?php echo get_post_meta( $post->ID, 'secondsectionunderheader', true ); ?></p>
						<a href="#sectionadvantages">Узнать больше</a>
					</div>
				</div>
				<div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-0 col-md-6">
					<div class="aboutImg">
						<?php
						$image = get_field('secondsectionimg');
						if ($image) {
						    $image_url = $image['url'];
						    $alt = $image['alt'];
						    ?>
						    <img src="<?php echo $image_url; ?>" alt="<?php echo $alt; ?>">
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="services">
		<div class="container">
			<div class="servicesHeader">
				<p><?php echo get_post_meta( $post->ID, 'thirdsectionupheader', true ); ?></p>
				<h1><?php echo get_post_meta( $post->ID, 'thirdsectionheader', true ); ?></h1>
			</div>
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
					'post_type'   => 'service',
					'suppress_filters' => true,
				) );

				global $post;

				foreach( $my_posts as $post ){
					setup_postdata( $post );

				?>



				<div class="col-xl-4 offset-xl-0 col-lg-6 offset-lg-0 col-md-6 offset-md-0">
					<div class="servicesCard">
						<div class="servicesCardImg">
							<?php
							$pods = pods('service', get_the_ID());
							$image = $pods->field('_serviceimg');

							if ($image) {
    						$image_url = wp_get_attachment_image_url($image['ID'], 'full');
    						echo '<img src="' . esc_url($image_url) . '" alt="Image">';
								}
							?>
						</div>
						<div class="servicesCardInfo">
							<h1><?php echo get_post_meta(get_the_ID(), '_serviceheader', true); ?></h1>
							<p><?php echo get_post_meta(get_the_ID(), '_servicedescription', true); ?></p>
							<a href="<?php echo get_post_meta(get_the_ID(), '__servicelink', true); ?>">Забронировать</a>
						</div>
					</div>
				</div>

				<?php
					
				}

				wp_reset_postdata();
				?>


			</div>
		</div>
	</section>
	<section class="discount">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-0 col-lg-7">
					<div class="discountInfo">
						<h1><?php echo get_post_meta( $post->ID, 'fourthsectionheader', true ); ?></h1>
						<p><?php echo get_post_meta( $post->ID, 'fourthsectionunderheader', true ); ?></p>
						<button>Узнать больше</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="sectionadvantages" class="advantages">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-0 col-lg-7">
					<div class="advantagesHeader">
						<h2><?php echo get_post_meta( $post->ID, 'fifthsectionupheader', true ); ?></h2>
						<h1><?php echo get_post_meta( $post->ID, 'fifthsectionheader', true ); ?></h1>
					</div>
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
							'post_type'   => 'advantages',
							'suppress_filters' => true,
						) );

						global $post;

						foreach( $my_posts as $post ){
							setup_postdata( $post );

						?>


					<div class="col-xl-6 offset-xl-0 col-lg-6">
						<div class="advantagesItem">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/advantages/check.svg'; ?>" alt="check">
							<h1><?php echo get_post_meta(get_the_ID(), '_advantagesheader', true); ?></h1>
							<p><?php echo get_post_meta(get_the_ID(), '_advantagestext', true); ?></p>
						</div>
					</div>

					<?php
						
					}

					wp_reset_postdata();
					?>

                    </div>
				</div>
				<div class="col-xl-6 offset-xl-0 col-lg-5">
					<div class="advantagesImg">
						<?php
						$image = get_field('fifthsectionimg1');
						if ($image) {
						    $image_url = $image['url'];
						    $alt = $image['alt'];
						    ?>
						    <img src="<?php echo $image_url; ?>" alt="<?php echo $alt; ?>">
						<?php } ?>
						<?php
						$image = get_field('fifthsectionimg2');
						if ($image) {
						    $image_url = $image['url'];
						    $alt = $image['alt'];
						    ?>
						    <img src="<?php echo $image_url; ?>" alt="<?php echo $alt; ?>">
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="reviews">
		<div class="container">
			<div class="row">
				<div class="reviewsHeader">
					<h2><?php echo get_post_meta( $post->ID, 'sixthsectionupheader', true ); ?></h2>
					<h1><?php echo get_post_meta( $post->ID, 'sixthsectionheader', true ); ?></h1>
				</div>

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
					'post_type'   => 'review',
					'suppress_filters' => true,
				) );

				global $post;

				foreach( $my_posts as $post ){
					setup_postdata( $post );

				?>


				<div class="col-xl-4 offset-xl-0 col-lg-4">
					<div class="reviewsCard">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/reviews/dots.svg'; ?>" alt="dots">
						<p><?php echo get_post_meta(get_the_ID(), '_reviewtext', true); ?></p>
						<ul>
							<li><img src="<?php echo get_template_directory_uri() . '/assets/img/reviews/star.svg'; ?>" alt="star"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/assets/img/reviews/star.svg'; ?>" alt="star"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/assets/img/reviews/star.svg'; ?>" alt="star"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/assets/img/reviews/star.svg'; ?>" alt="star"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/assets/img/reviews/star.svg'; ?>" alt="star"></li>
						</ul>
					</div>
					<div class="client">
						<?php
							$pods = pods('review', get_the_ID());
							$image = $pods->field('_reviewpic');

							if ($image) {
    						$image_url = wp_get_attachment_image_url($image['ID'], 'full');
    						echo '<img src="' . esc_url($image_url) . '" alt="Image">';
								}
							?>
						<h1><?php echo get_post_meta(get_the_ID(), '_reviewname', true); ?></h1>
						<h2><?php echo get_post_meta(get_the_ID(), '_reviewtype', true); ?></h2>
					</div>
				</div>

				<?php
					
				}

				wp_reset_postdata();
				?>

			</div>
		</div>
	</section>


<?php

get_footer();

?>