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
		'one' => __( 'One', 'theme-textdomain' ),
		'two' => __( 'Two', 'theme-textdomain' ),
		'three' => __( 'Three', 'theme-textdomain' ),
		'four' => __( 'Four', 'theme-textdomain' ),
		'five' => __( 'Five', 'theme-textdomain' )
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	$options[] = array(
		'name' => __( 'Footer', 'theme-textdomain' ),
		'desc' => __( 'A text input field.', 'theme-textdomain' ),
		'id' => 'footer_text',
		'std' => '',
		'type' => 'text'
	);

  $options[] = array(
		'name' => __('Upload Logo', 'theme-textdomain'),
		'desc' => 'Images for Logo',
		'id' => 'logo_images',
		'type' => 'upload',
	);

	$options[] = array(
		'name' => __( 'description', 'theme-textdomain' ),
		'desc' => __( 'Textarea description.', 'theme-textdomain' ),
		'id' => 'description_textarea',
		'std' => '',
		'type' => 'textarea'
	);

	return $options;
}

?>
