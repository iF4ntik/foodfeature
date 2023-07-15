<?php

function ff_assets() {

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );

    if ( is_front_page() ) {
        wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.css' );
      } 
    elseif ( is_page( 'form' ) ) {
        wp_enqueue_style( 'formcss', get_template_directory_uri() . '/assets/css/form.css' );
      }
    elseif ( is_page( 'private' ) ) {
        wp_enqueue_style( 'privatecss', get_template_directory_uri() . '/assets/css/private.css' );
      }
    elseif ( is_page( 'thank' ) ) {
        wp_enqueue_style( 'privatecss', get_template_directory_uri() . '/assets/css/private.css' );
    }

	wp_enqueue_script( 'jqueryHeader', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
    
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&family=Marck+Script&display=swap' );

    wp_enqueue_script( 'maska', get_template_directory_uri() . '/assets/js/maska.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'ff_assets' );

show_admin_bar(false);

add_theme_support( 'post-thumbnails' );


//Поддержка логотипов
function custom_theme_logo() {
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'custom_theme_logo');

// Обработчик отправки формы
function process_form_data() {

    if (isset($_POST['action']) && $_POST['action'] === 'submit_form') {
        $name = sanitize_text_field($_POST['name']);
        $phone = sanitize_text_field($_POST['phone']);
        $date = sanitize_text_field($_POST['date']);
        $time = sanitize_text_field($_POST['time']);
        $quantity = sanitize_text_field($_POST['quantity']);
        $event = sanitize_text_field($_POST['event']);

        $to = 'help@foodfeature.ru';
        $subject = 'Новая форма от ' . $name;
        $message = "Имя: " . $name . "\n"
            . "Номер телефона: " . $phone . "\n"
            . "Дата: " . $date . "\n"
            . "Время: " . $time . "\n"
            . "Количество человек: " . $quantity . "\n"
            . "Мероприятие: " . $event;

        wp_mail($to, $subject, $message);

        wp_redirect('/thank/');

        exit;
    }
}
add_action('admin_post_nopriv_submit_form', 'process_form_data');
add_action('admin_post_submit_form', 'process_form_data');