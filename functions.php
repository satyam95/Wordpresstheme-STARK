<?php

// Script and Style Includes.
require get_template_directory(). '/inc/filesincludes.php';


// Support
require get_template_directory(). '/inc/support.php';


// customizer 
require get_template_directory(). '/inc/customizer.php';


// Blocks
require get_template_directory(). '/inc/acfblocks.php';


function acf_portfolio_item_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'portfolio-item',
			'title'				=> __('Portfolio Item'),
			'description'		=> __('A custom block for portfolio items.'),
			'render_template'	=> 'template-parts/blocks/portfolio-item/block-portfolio-item.php',
			'category'			=> 'design',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'portfolio' ),
		));
	}
}

add_action('acf/init', 'acf_portfolio_item_block');
