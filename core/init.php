<?php

/**
 * Remove Image sizes
 */
add_filter( 'intermediate_image_sizes', function ( $default_sizes ) {
	$targets = [ 'thumbnail', 'medium', 'medium_large', 'large', '1536x1536', '2048x2048' ];

	return array_diff( $default_sizes, $targets );
} );

/**
 * Remove WordPress's default image sizes
 */
add_filter( 'intermediate_image_sizes_advanced', function ( $default_sizes ) {
	$targets = [ 'thumbnail', 'medium', 'medium_large', 'large', '1536x1536', '2048x2048' ];

	return array_diff( $default_sizes, $targets );
} );

/**
 * Load styles by $folderPath
 *
 * @param string $folderPath path to folder
 * @param array $ends files load latest
 *
 * @return void
 */
function loadStylesByFolderPath( string $folderPath, array $ends = [] ): void {
	$suffix  = '.css';
	$handles = [];
	foreach ( glob( THEME_DIR . '/' . $folderPath . "/*$suffix" ) as $filePath ) {
		$fileName              = basename( $filePath );
		$fileNameWithoutSuffix = basename( $filePath, $suffix );
		$handle                = 'wp-style-' . str_replace( '.', '-', $fileNameWithoutSuffix );
		wp_register_style( $handle, THEME_URL . '/' . $folderPath . '/' . $fileName );
		if ( in_array( $fileNameWithoutSuffix, $ends ) ) {
			$handles[] = $handle;
		} else {
			array_unshift( $handles, $handle );
		}
	}
	foreach ( $handles as $handle ) {
		wp_enqueue_style( $handle );
	}
}

/**
 * Load styles
 */
function theme_enqueue_styles(): void {
	loadStylesByFolderPath( 'assets/css', [ 'app' ] );

	// Load css by page template
	foreach ( glob( THEME_DIR . '/assets/css/*', GLOB_ONLYDIR ) as $folderPath ) {
		$folderName   = basename( $folderPath );
		$pageTemplate = basename( get_page_template(), '.php' );
		if ( $pageTemplate == $folderName ) {
			loadStylesByFolderPath( 'assets/css/' . $folderName, [ $folderName ] );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/**
 * Load files scripts by $folderPath
 *
 * @param string $folderPath path to folder
 * @param array $ends files load latest
 * @param array $deps files depends on
 *
 * @return void
 */
function loadScriptsByFolderPath( string $folderPath, array $ends = [], array $deps = [] ): void {
	$suffix  = '.js';
	$handles = [];
	foreach ( glob( THEME_DIR . '/' . $folderPath . "/*$suffix" ) as $filePath ) {
		$fileName              = basename( $filePath );
		$fileNameWithoutSuffix = basename( $filePath, $suffix );
		$handle                = 'wp-script-' . str_replace( '.', '-', $fileNameWithoutSuffix );
		$depends               = array_diff( $deps, [ $fileNameWithoutSuffix ] );
		wp_register_script( $handle, THEME_URL . '/' . $folderPath . '/' . $fileName, $depends, false, true );
		if ( in_array( $fileNameWithoutSuffix, $ends ) ) {
			$handles[] = $handle;
		} else {
			array_unshift( $handles, $handle );
		}
	}
	foreach ( $handles as $handle ) {
		wp_enqueue_script( $handle );
	}
}

/**
 * Load scripts
 */
function theme_enqueue_scripts(): void {
	loadScriptsByFolderPath( 'assets/js', [ 'app' ], [ 'jquery' ] );

	// Load js by page template
	foreach ( glob( THEME_DIR . '/assets/js/*', GLOB_ONLYDIR ) as $folderPath ) {
		$folderName   = basename( $folderPath );
		$pageTemplate = basename( get_page_template(), '.php' );
		if ( $pageTemplate == $folderName ) {
			loadScriptsByFolderPath( 'assets/js/' . $folderName, [ $folderName ] );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

/**
 * Loại bỏ file css, js ở các trang không dùng
 */
function dequeue_resource_not_unused(): void {
	// Plugin Contact Form chỉ có ở template contact.php
	$pageTemplateHasContactForm = [ 'contact' ];
	$pageTemplate               = basename( get_page_template(), '.php' );
	if ( in_array( $pageTemplate, $pageTemplateHasContactForm ) ) {
		wp_dequeue_style( 'contact-form-7' );
		wp_dequeue_script( 'contact-form-7' );
	}
}

add_action( 'wp_enqueue_scripts', 'dequeue_resource_not_unused' );
