	
<?php
$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');
?>
	<section class="footer">
		<div class="container">
			<div class="row">


				<?php
				$my_posts = get_posts( array(
					'numberposts' => 1,
					'category'    => 0,
					'orderby'     => 'date',
					'order'       => 'DESC',
					'include'     => array(),
					'exclude'     => array(),
					'meta_key'    => '',
					'meta_value'  =>'',
					'post_type'   => 'footerinfo',
					'suppress_filters' => true,
				) );

				global $post;

				foreach( $my_posts as $post ){
					setup_postdata( $post );

				?>




				<div class="col-xl-3 offset-xl-0 col-lg-3 offset-lg-0 col-md-6 offset-md-0 col-sm-12">
					<div class="contactsFooter">
						<h1>Контакты</h1>
						<div class="placeContactsFooter">
						<?php
							$pods = pods('footerinfo', get_the_ID());
							$image = $pods->field('footericonlocate');

							if ($image) {
    						$image_url = wp_get_attachment_image_url($image['ID'], 'full');
    						echo '<img src="' . esc_url($image_url) . '" alt="Image">';
								}
							?>
						<p><?php echo get_post_meta(get_the_ID(), 'footerlocate', true); ?></p>
						</div>
						<div class="emailContactsFooter">
						<?php
							$pods = pods('footerinfo', get_the_ID());
							$image = $pods->field('footermailicon');

							if ($image) {
    						$image_url = wp_get_attachment_image_url($image['ID'], 'full');
    						echo '<img src="' . esc_url($image_url) . '" alt="Image">';
								}
							?>
						<a href="mailto:<?php echo get_post_meta(get_the_ID(), 'footermail', true); ?>"><?php echo get_post_meta(get_the_ID(), 'footermail', true); ?></a>
						</div>
						<div class="phoneContactsFooter">
						<?php
							$pods = pods('footerinfo', get_the_ID());
							$image = $pods->field('footericonphone');

							if ($image) {
    						$image_url = wp_get_attachment_image_url($image['ID'], 'full');
    						echo '<img src="' . esc_url($image_url) . '" alt="Image">';
								}
							?>
						<a href="tel:<?php echo get_post_meta(get_the_ID(), 'footerphonetech', true); ?>"><?php echo get_post_meta(get_the_ID(), 'footerphone', true); ?></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 offset-xl-0 col-lg-3 offset-lg-0 col-md-6 offset-md-0 col-sm-12">
					<div class="openingHours">
						<h1>Часы работы</h1>
						<div class="openingHoursItem">
						<?php
							$pods = pods('footerinfo', get_the_ID());
							$image = $pods->field('footericonclock');

							if ($image) {
    						$image_url = wp_get_attachment_image_url($image['ID'], 'full');
    						echo '<img src="' . esc_url($image_url) . '" alt="Image">';
								}
							?>
						<p><?php echo get_post_meta(get_the_ID(), 'footeropeninghourswd', true); ?></p>
						</div>
						<div class="openingHoursItem">
						<?php
							$pods = pods('footerinfo', get_the_ID());
							$image = $pods->field('footericonclock');

							if ($image) {
    						$image_url = wp_get_attachment_image_url($image['ID'], 'full');
    						echo '<img src="' . esc_url($image_url) . '" alt="Image">';
								}
							?>
						<p><?php echo get_post_meta(get_the_ID(), 'footeropeninghourswe', true); ?></p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 offset-xl-2 col-lg-4 offset-lg-1 col-md-6 offset-md-2 col-sm-8 offset-sm-1 col-xs-12">
					<div class="footerBlock">
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
						<p><?php echo get_post_meta(get_the_ID(), 'footerslogan', true); ?></p>
						<div class="footerblockLine"></div>
						<div class="footerBlockSocial">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/footer/insta.svg'; ?>" alt="instagramIcon">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/footer/vk.svg'; ?>" alt="vkIcon">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/footer/pint.svg'; ?>" alt="pinterestIcon">
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

	<?php wp_footer(); ?>

	<!-- Маска номера -->
	<script src="src/js/maska.js" type="text/javascript"></script>
	<script>
	$('.maska').mask('+7 (999) 999-99-99');

	$.fn.setCursorPosition = function(pos) {
	  if ($(this).get(0).setSelectionRange) {
	    $(this).get(0).setSelectionRange(pos, pos);
	  } else if ($(this).get(0).createTextRange) {
	    var range = $(this).get(0).createTextRange();
	    range.collapse(true);
	    range.moveEnd('character', pos);
	    range.moveStart('character', pos);
	    range.select();
	  }
	};


	$('input[type="tel"]').click(function(){
	    $(this).setCursorPosition(4);  // set position number
	  });
	</script>

</body>
</html>