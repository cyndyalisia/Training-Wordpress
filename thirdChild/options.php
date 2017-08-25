<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

function optionsframework_options() {
  // Test data
  $options[] = array(
		'name' => __( 'Footer Copyright', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$test_array = array(
		'one' => __( 'Yes', 'theme-textdomain' ),
		'two' => __( 'No', 'theme-textdomain' ),
	);

	$test_post = array(
		'1' => __( '1', 'theme-textdomain' ),
		'2' => __( '2', 'theme-textdomain' ),
		'3' => __( '3', 'theme-textdomain' ),
		'4' => __( '4', 'theme-textdomain' ),
		'5' => __( '5', 'theme-textdomain' ),
	);
	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

  $options[] = array(
		'name' => __('Upload Logo', 'theme-textdomain'),
		'desc' => 'Images for Logo',
		'id' => 'logo_images',
		'type' => 'upload',
	);

	$options[] = array(
		'name' => __( 'Maintenance Mode / Normal Page', 'theme-textdomain' ),
		'desc' => __( 'Maintenance Mode page', 'theme-textdomain' ),
		'id' => 'page_checkbox',
		'std' => '1',
		'type' => 'checkbox'
	);
	return $options;
}
?>
