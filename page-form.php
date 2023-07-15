<?php

get_header();

?>

<?php
/*
 * Template name: Form Page
 */
?>

		<div class="orderForm">
			<div class="container">
				<div class="row">
					<div class="col-xxl-8 offset-xxl-2 col-xl-10 offset-xl-1 col-lg-12 offset-lg-0">
						<div class="orderFormBlock">
							<div class="row">
							<div class="col-xxl-5 offset-xxl-0 col-xl-5 offset-xl-0 col-lg-5 offset-lg-0">
								<div class="phoneOrder">
									<h2><?php echo get_post_meta( $post->ID, 'formpagephoneorderupheader', true ); ?></h2>
									<h1><?php echo get_post_meta( $post->ID, 'formpagephoneorderheader', true ); ?></h1>
									<div class="phoneOrderLine"></div>
									<?php
									$image = get_field('formpagephoneicon');
										if ($image) {
										$image_url = $image['url'];
										$alt = $image['alt'];
										?>
									<img src="<?php echo $image_url; ?>" alt="<?php echo $alt; ?>">
									<?php } ?>
									<a href="tel:<?php echo get_post_meta( $post->ID, 'formpagephonetech', true ); ?>"><?php echo get_post_meta( $post->ID, 'formpagephone', true ); ?></a>
								</div>
							</div>
								<div class="col-xxl-7 offset-xxl-0 col-xl-7 offset-xl-0 col-lg-7 offset-lg-0">
									<div class="onlineOrder">
									<h2><?php echo get_post_meta( $post->ID, 'formpageonlineorderupheader', true ); ?></h2>
									<h1><?php echo get_post_meta( $post->ID, 'formpageonlineorderheader', true ); ?></h1>
									<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
									  <input type="hidden" name="action" value="submit_form">

									  <div class="row">
									    <div class="col-xxl-12 offset-xxl-0 col-xl-12 offset-xl-0 col-lg-12 offset-lg-0">
									      <label class="labelForm" for="name">Имя</label>
									      <input class="inputForm nameInput" placeholder="Иван" type="text" name="name">
									    </div>

									    <div class="col-xxl-12 offset-xxl-0 col-xl-12 offset-xl-0 col-lg-12 offset-lg-0">
									      <label class="labelForm" for="phone">Номер телефона</label>
									      <input class="inputForm phoneInput maska" placeholder="+7" type="tel" name="phone">
									    </div>

									    <div class="col-xxl-6 offset-xxl-0 col-xl-6 offset-xl-0 col-lg-6 offset-lg-0">
									      <label class="labelForm" for="date">Дата</label>
									      <input class="inputForm dateInput" type="date" name="date">
									    </div>

									    <div class="col-xxl-6 offset-xxl-0 col-xl-6 offset-xl-0 col-lg-6 offset-lg-0">
									      <label class="labelForm" for="time">Время</label>
									      <input class="inputForm timeInput" type="time" name="time">
									    </div>

									    <div class="col-xxl-6 offset-xxl-0 col-xl-6 offset-xl-0 col-lg-6 offset-lg-0">
									      <label class="labelForm" for="quantity">Количество человек</label>
									      <input class="inputForm quantityInput" placeholder="Например: 30" type="number" min="1" step="1" name="quantity">
									    </div>

									    <div class="col-xxl-6 offset-xxl-0 col-xl-6 offset-xl-0 col-lg-6 offset-lg-0">
									      <div class="eventList">
									        <div class="selectArrow">
									          <img src="<?php echo get_template_directory_uri() . '/assets/img/formPage/select.svg'; ?>">
									        </div>
									        <label class="labelForm" for="event">Мероприятие</label>
									        <select id="event" name="event">
									          <option value="private">Частное</option>
									          <option value="public">Публичная встреча</option>
									          <option value="ann">Юбилей</option>
									          <option value="corp">Корпоратив</option>
									          <option value="wedding">Свадебный прием</option>
									          <option value="birth">День рождения</option>
									        </select>
									      </div>
									    </div>

									    <div class="col-xxl-12 offset-xxl-0 col-xl-12 offset-xl-0 col-lg-12 offset-lg-0">
									      <button class="buttonForm" type="submit">Отправить</button>
									    </div>
									  </div>
									</form>
								</div>
							</div>
                          </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<?php

	get_footer();

	?>