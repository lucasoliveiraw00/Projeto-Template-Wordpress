<?php

	add_theme_support("title-tag");
	add_theme_support("description");

	add_theme_support("custom-logo",
		array(
			"width"			=>300,
			"height"		=>76,
			"flex-height"	=>true
		)
    );
    
    add_theme_support("post-thumbnails");
    set_post_thumbnail(800,600,true);

	register_nav_menus(
		array (
			"primary"  	=>__("Primary Menu","Principal")
		)
	);


		if ( function_exists('register_sidebar') )
		{
				register_sidebar(array(
						'name' => __( 'Menu footer'),
						'id' => 'sidebar-1',
						'before_widget' => '<hr class="clearfix w-100 d-md-none">',
						'before_title' => '<h5 class="font-weight-bold text-uppercase ">',
						'after_title' => '</h5>',
				) );
		} 
		

		


