<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Настройки темы',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-general-settings',
//        'capability'	=> 'edit_posts',
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Контактной информации',
		'menu_title'	=> 'Контактная информация',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройка 404',
		'menu_title'	=> 'Настройка 404',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройка списка городов',
		'menu_title'	=> 'Настройка списка городов',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Карта сайта',
		'menu_title'	=> 'Карта сайта',
		'parent_slug'	=> 'theme-general-settings',
	));



	/* Повторяемые блоки */
	acf_add_options_page(array(
		'page_title' 	=> 'Повторяемые блоки',
		'menu_title'	=> 'Повторяемые блоки',
		'menu_slug' 	=> 'repeatable-blocks',
//        'capability'	=> 'edit_posts',
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Этапы работы',
		'menu_title'	=> 'Этапы работы',
		'parent_slug'	=> 'repeatable-blocks',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Форма - Оставить заявку',
		'menu_title'	=> 'Форма - Оставить заявку ',
		'parent_slug'	=> 'repeatable-blocks',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Информпроект в цифрах',
		'menu_title'	=> 'Информпроект в цифрах',
		'parent_slug'	=> 'repeatable-blocks',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Наши награды и сертификаты',
		'menu_title'	=> 'Наши награды и сертификаты',
		'parent_slug'	=> 'repeatable-blocks',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Форма - Узнать стоимость проекта',
		'menu_title'	=> 'Форма - Узнать стоимость проекта',
		'parent_slug'	=> 'repeatable-blocks',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Реализованные проекты',
		'menu_title'	=> 'Реализованные проекты',
		'parent_slug'	=> 'repeatable-blocks',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Отзывы клиентов',
		'menu_title'	=> 'Отзывы клиентов',
		'parent_slug'	=> 'repeatable-blocks',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Форма - Остались вопросы',
		'menu_title'	=> 'Форма - Остались вопросы',
		'parent_slug'	=> 'repeatable-blocks',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Форма - Заказать презентацию',
		'menu_title'	=> 'Форма - Заказать презентацию',
		'parent_slug'	=> 'repeatable-blocks',
	));


}
