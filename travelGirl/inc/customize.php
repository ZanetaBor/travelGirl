<?php    
/**
 *Travel Girl Theme Customizer
 *
 */

function travelGirl_customize_register( $wp_customize ) {
    function travelGirl_sanitize_dropdown_pages( $page_id, $setting ) {
        // Ensure $input is an absolute integer.
        $page_id = absint( $page_id );
      
        // If $page_id is an ID of a published page, return it; otherwise, return the default.
        return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
      }
  
      function travelGirl_sanitize_checkbox( $checked ) {
          // Boolean check.
          return ( ( isset( $checked ) && true == $checked ) ? true : false );
      } 

    // About us Section 
	$wp_customize->add_section('travelGirl_aboutus_sections', array(
		'title' => __('About Us Section','travelGirl'),
		'description' => __('Select Pages from the dropdown for About Us section','travelGirl'),
		'priority' => null,
		'panel' => 	'travelGirl_panel_section',          
	));		
	
	$wp_customize->add_setting('travelGirl_createpagefor_aboutus',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'travelGirl_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'travelGirl_createpagefor_aboutus',array(
		'type' => 'dropdown-pages',			
		'section' => 'travelGirl_aboutus_sections',
	));	
	
	
	$wp_customize->add_setting('travelGirl_aboutus_sections',array(
		'default' => false,
		'sanitize_callback' => 'travelGirl_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'travelGirl_aboutus_sections', array(
	    'settings' => 'travelGirl_show_aboutus_sections',
	    'section'   => 'travelGirl_aboutus_sections',
	    'label'     => __('Check To Show This Section','travelGirl'),
	    'type'      => 'checkbox'
));//Show About Us Section 
}
add_action( 'customize_register', 'travelGirl_customize_register' );