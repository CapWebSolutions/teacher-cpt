<?php

/*
 * Plugin Name: CapWeb Teachers
 * Plugin URI: https://github.com/CapWebSolutions/teacher-cpt
 * Description: Adds the teacher post type for the theme.
 * Author: Cap Web Solutions
 * Version: 1.0.0
 * Author URI: https://capwebsolutions.com/
 * @package    capweb teachers
 * @copyright  2020 Matt Ryan 
 */

namespace CapWeb\CapWebTeachers;

// Get all the things
require_once( dirname( __FILE__ ) . '/lib/post-types.php' );
require_once( dirname( __FILE__ ) . '/lib/metaboxes.php' );
require_once( dirname( __FILE__ ) . '/lib/helper-functions.php' );


// Load Translations
add_action( 'plugins_loaded', __NAMESPACE__ . '\capweb_teachers_init' );
function capweb_teachers_init() {
	load_plugin_textdomain( 'teacher-cpt', false, 'teacher-cpt/languages' );
}

// Enqueue Teacher styles
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_capweb_teachers_style');

// Setup new teach image sizes. 
__NAMESPACE__ . '\add_new_teachers_image_sizes()';

// Set up templates for new post type
add_filter( 'archive_template', __NAMESPACE__ . '\load_archive_template' );
add_filter( 'single_template', __NAMESPACE__ . '\load_single_template' );
