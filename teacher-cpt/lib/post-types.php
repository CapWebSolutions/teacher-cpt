<?php
namespace CapWeb\CapWebTeachers;

function cptui_register_my_cpts_teacher() {
	
		/**
		 * Post Type: Teachers.
		 */
	
		$labels = array(
			"name" => __( "Teachers", "CapWeb/Teachers" ),
			"singular_name" => __( "Teacher", "CapWeb/Teachers" ),
			"menu_name" => __( "Our Teachers", "CapWeb/Teachers" ),
			"all_items" => __( "All Teachers", "CapWeb/Teachers" ),
			"add_new" => __( "Add New Teacher", "CapWeb/Teachers" ),
			"add_new_item" => __( "Add New Teacher", "CapWeb/Teachers" ),
			"edit_item" => __( "Edit Teacher", "CapWeb/Teachers" ),
			"new_item" => __( "New Teacher", "CapWeb/Teachers" ),
			"view_item" => __( "View Teacher", "CapWeb/Teachers" ),
			"view_items" => __( "View Teachers", "CapWeb/Teachers" ),
			"search_items" => __( "Search Teachers", "CapWeb/Teachers" ),
			"not_found" => __( "No Teachers Found", "CapWeb/Teachers" ),
			"not_found_in_trash" => __( "No Teachers found in trash", "CapWeb/Teachers" ),
			"featured_image" => __( "Teacher Photo", "CapWeb/Teachers" ),
			"set_featured_image" => __( "Set Teacher Photo for this teacher", "CapWeb/Teachers" ),
			"remove_featured_image" => __( "Remove Teacher Photo", "CapWeb/Teachers" ),
			"use_featured_image" => __( "Use as Teacher Photo for this teacher", "CapWeb/Teachers" ),
			"archives" => __( "Teacher Archives", "CapWeb/Teachers" ),
			"insert_into_item" => __( "Insert into Teacher", "CapWeb/Teachers" ),
			"uploaded_to_this_item" => __( "Uploaded to this Teacher", "CapWeb/Teachers" ),
			"filter_items_list" => __( "Filter Teacher List", "CapWeb/Teachers" ),
			"items_list" => __( "Teacher List", "CapWeb/Teachers" ),
			"attributes" => __( "Teacher Attributes", "CapWeb/Teachers" ),
		);
	
		$args = array(
			"label" => __( "Teachers", "CapWeb/Teachers" ),
			"labels" => $labels,
			"description" => "Manages teachers for website",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => false,
			"rest_base" => "",
			"has_archive" => "teachers",
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array( "slug" => "teacher", "with_front" => true ),
			"query_var" => true,
			"menu_icon" => "dashicons-groups",
			"supports" => array( "title", "editor", "thumbnail", "revisions", "genesis-cpt-archives-settings" ),
		);
	
		register_post_type( "teacher", $args );
	}
	
	add_action( 'init', __NAMESPACE__ . '\cptui_register_my_cpts_teacher' );
	
	
	function capweb_teacher_title( $input ) {
	
		global $post_type;
	
		if( is_admin() && 'Enter title here' == $input && 'teacher' == $post_type )
			return 'Teacher\'s Name';
		return $input;
	}
	add_filter('gettext',__NAMESPACE__ . '\capweb_teacher_title');