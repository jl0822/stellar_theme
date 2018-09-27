<DOCTYPE HTML
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo('name'); ?></title>
		<meta <?php bloginfo('charset'); ?> />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		
		<?php wp_head(); ?>
	</head>
	<body>
		<!-- Wrapper -->
				<div id="wrapper">

					<!-- Header -->


					<?php 
							$header_section_post_type = array (
								'post_type'=>'header_section'
							);
							$header_section = new WP_Query( $header_section_post_type );
							if( $header_section->have_posts()) {
								while( $header_section->have_posts()){
									$header_section->the_post();
					?>

									<header id="header" class="alt">
										<span class="logo">
										<?php the_post_thumbnail('thumbnail'); ?>	
										</span>
										<h1><?php the_title(); ?></h1>
										<p>
										<?php the_content(); ?>
										</p>
									</header>

					<?php
								} // end while
							} //end if
					?>

					<!-- Nav -->
						<?php 
							wp_nav_menu( array(

								'menu'=>'primary',
								'theme_location'=> 'primary',
								'container'=>'nav',
								'container_id'=>'nav',
								'container_class'=>'none',
								'menu_id'=>'none',
								'menu_class'=>'none',
							));

						?>




