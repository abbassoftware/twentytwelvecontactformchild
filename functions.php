<?php

 function contactform_add_scripts() {
	    // Register the style for the Contact form
	    wp_register_style( 'contactform-style',  get_stylesheet_directory_uri(). '/contactform.css');
	    wp_enqueue_style( 'contactform-style' );

	     wp_register_script( 'jquery-validate-script', get_stylesheet_directory_uri() . '/jquery.validate.min.js' ,array( 'jquery'));
 		wp_enqueue_script( 'jquery-validate-script' );

	    wp_register_script( 'contactform-script', get_stylesheet_directory_uri() . '/contactform.js' ,array( 'jquery','jquery-validate-script'));
 		wp_enqueue_script( 'contactform-script' );

	}


 //Add CSS for the Contact form.
 add_action('wp_enqueue_scripts', contactform_add_scripts);