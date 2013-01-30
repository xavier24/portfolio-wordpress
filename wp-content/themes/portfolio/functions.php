<?php
add_action('init','add_taxonomies');
add_action('widgets_init','portfolio_sidebars');
add_action('after_setup_theme','portfolio_setup');
add_action('init','create_post_type');


	if(! function_exists('create_post_type') ){
	
		function create_post_type(){
			register_post_type('travaux',
							array(
									'labels'=> array(
													'name'=>__('Travaux'),
													'singular_name'=>__('Travail')
												),
									'supports'=>array('title','editor','thumbnail','post-formats'),
									'public'=>true,
									'has_archive'=>true
								)
						);
		
			register_post_type('competences',
							array(
									'labels'=> array(
													'name'=>__('Compétences'),
													'singular_name'=>__('Compétence')
												),
									'supports'=>array('title','editor','thumbnail','post-formats'),
									'public'=>true,
									'has_archive'=>true
								)
						);
			
			register_post_type('projets',
							array(
									'labels'=> array(
													'name'=>__('Projets'),
													'singular_name'=>__('Projet')
												),
									'supports'=>array('title','editor','thumbnail','post-formats'),
									'public'=>true,
									'has_archive'=>true
								)
						);
		}
	}
	
	if(! function_exists('portfolio_setup') ){
	
		function portfolio_setup(){
			add_theme_support('automatic-feed-links');
			add_theme_support('post-formats',array('aside','link','gallery','status','quote','image') );
			add_theme_support('post-thumbnails');
			
			register_nav_menu('header-menu',__('Header Menu','portfolio'));
			$args = array(
				'theme_location'  => '',
				'menu'            => '', 
				'container'       => 'nav', 
				'container_class' => 'menu-{menu slug}-container', 
				'container_id'    => '',
				'menu_class'      => 'menu', 
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			);
			
			if(function_exists('add_image_size') ){
			add_image_size('folio-work',640,480,false); //sans rogner
			
			}
		}
	}

	if(! function_exists('add_taxonomies') ){
		function add_taxonomies(){
			register_taxonomy('techniques','post',array(
														'label'=>'Techniques utilisées',
														'hierarchical'=>true,
														'query_var'=>true,
														'rewrite'=>true
														)
			);
		}
	}


