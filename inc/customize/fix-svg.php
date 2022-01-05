<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Added new type file SVG
 */
add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}


add_filter( 'wp_prepare_attachment_for_js', 'show_svg_in_media_library' );
# Формирует данные для отображения SVG как изображения в медиабиблиотеке.
function show_svg_in_media_library( $response ) {
	if ( $response['mime'] === 'image/svg+xml' ) {
		// С выводом названия файла
		$response['image'] = [
			'src' => $response['url'],
		];
	}

	return $response;
}





add_filter( 'upload_mimes', 'upload_allow_types' );
function upload_allow_types( $mimes ) {

    // разрешаем новые типы
    $mimes['doc']  = 'application/msword';
    //$mimes['woff'] = 'font/woff';
    $mimes['psd']  = 'image/vnd.adobe.photoshop';
    $mimes['djv']  = 'image/vnd.djvu';
    $mimes['djvu'] = 'image/vnd.djvu';
    $mimes['webp'] = 'image/webp';
    //$mimes['fb2']  = 'text/xml';
    //$mimes['epub'] = 'application/epub+zip';

    // запрещаем (отключаем) имеющиеся
    // unset( $mimes['mp4a'] );

    return $mimes;
}