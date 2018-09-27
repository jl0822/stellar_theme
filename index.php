<?php
	get_header();
?>
<div id="main">
<?php 
	$introduction_array = array (
		'post_type'=>'introduction'
	);
	$introduction_section = new WP_Query( $introduction_array );

	if( $introduction_section->have_posts()) {
		while( $introduction_section->have_posts()){
			$introduction_section->the_post();
			?>

			<!--introduction -->

				<section id="intro" class="main">
					<div class="spotlight">
						<div class="content">
							<header class="major">
								<h2><?php the_title(); ?></h2>
							</header>
							<p><?php the_content(); ?></p>
							<ul class="actions">
								<li><a href="<?php the_field('button_link'); ?>" class="button"><?php the_field('button_text'); ?></a></li>
							</ul>
						</div>
						<span class="image"><?php the_post_thumbnail( array (299, 299)); ?></span>
					</div>
				</section>
			<?php
		} //end while
	} // end if
?>

<!-- First Section -->

			<?php 
				$args_first_section = array(
					'post_type'=>'first_section'
				);
				$first_section = new WP_Query( $args_first_section );
				if( $first_section->have_posts()) {
					while( $first_section->have_posts()) {
						$first_section->the_post();
						?>

						<section id="first" class="main special">
							<header class="major">
								<h2><?php the_title(); ?></h2>
							</header>
							<ul class="features">
							<?php
								if( have_rows('sub_field_rows')) {
									while( have_rows( 'sub_field_rows' )) {
										the_row();
										?>
												<li>
												<?php echo get_sub_field('section_icon'); ?>
												<h3><?php echo get_sub_field('title'); ?></h3>
												<p><?php echo get_sub_field('content'); ?></p>
											</li>
										<?php
								    } //end while
							    } // end if

						    ?>


						</ul>
						<footer class="major">
							<ul class="actions special">
							<li><a href="generic.html" class="button">Learn More</a></li>
						</ul>
					</footer>
				</section>


			<?php
		} //end while
	} // end if

?>
<!-- Second Section -->
<?php 
	$args_second_section = array(
		'post_type'=>'second_section'
	);
	$second_section = new WP_Query( $args_second_section );
			if( $second_section->have_posts()) {
				while( $second_section->have_posts()) {
					$second_section->the_post();
					?>
						<section id="second" class="main special">
							<header class="major">
								<h2><?php the_title(); ?></h2>
								<p><?php the_content(); ?></p>
									</header>
									<ul class="statistics">
								<?php 
									if( have_rows('repeater_second_section')) {
										while( have_rows( 'repeater_second_section')) {
											the_row();
											$background_color = get_sub_field('background_color');
											?>
											<?php
												if(in_array('Pink', $background_color)) {
												?>
													 	<li class="style1">
													<?php
												}
												if( in_array('Light Purple', $background_color)) {
													?>
															 	<li class="style2">
													<?php
												}
												if( in_array('Dark Purple', $background_color)) {
													?>
															 	<li class="style3">
													<?php
												}
												if( in_array('Light Blue', $background_color)) {
													?>
															 	<li class="style4">
													<?php
												}
												?>
									
												<?php echo get_sub_field('icon'); ?>
												<strong><?php echo get_sub_field('numbers'); ?></strong><?php echo get_sub_field('title'); ?>
											</li>
											<?php
										}// end if
									} // end while
								?>

							</ul>
							<p class="content"><?php the_field('content_1'); ?></p>
							<footer class="major">
								<ul class="actions special">
									<li><a href="<?php the_field('learn_more_link'); ?>" class="button"><?php the_field('learn_more_text'); ?></a></li>
									</ul>
								</footer>
							</section>		
						<?php
				    } //end while
		  	  } // end if
	    // end second section 
		?>
		<?php
			$args_last_section = array(
			'post_type'=>'last_section'
			);
			$last_section = new WP_Query( $args_last_section );

			if( $last_section->have_posts()) {
				while( $last_section->have_posts()) {
					$last_section->the_post();
					?>

						<section id="cta" class="main special">
						<header class="major">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</header>
						<footer class="major">
							<ul class="actions special">
								<li><a href="<?php the_field('first_button_text'); ?>" class="button primary"><?php the_field('first_button_text'); ?>
									
								</a>
							</li>
								<li>
								<a href="<?php the_field('second_button_text'); ?>" class="button"><?php the_field('second_button_text'); ?></a></li>
							</ul>
						</footer>
					</section>
				<?php
			} // end while
		} // end while
	?>
	<!-- main div ends -->

	<?php
			$args_footer_section = array(
			'post_type'=>'footer_section'
			);
			$footer_section = new WP_Query( $args_footer_section );

			if( $footer_section->have_posts()) {
				while( $footer_section->have_posts()) {
					$footer_section->the_post();
					?>

					<footer id="footer">
						<section>
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?>.</p>
							<ul class="actions">
								<li><a href="<?php the_field('button_text'); ?>" class="button"><?php the_field('button_link'); ?></a></li>
							</ul>
						</section>
						<section>
							<h2>Etiam feugiat</h2>
							<dl class="alt">
								<dt><?php the_field('address_heading'); ?></dt>
								<dd><?php the_field('address_'); ?></dd>
								<dt><?php the_field('phone_heading'); ?></dt>
								<dd><?php the_field('phone_number'); ?></dd>
								<dt><?php the_field('email_heading'); ?></dt>
								<dd><a href="#"><?php the_field('email_address'); ?></a></dd>
							</dl>
							<ul class="icons">
								<?php
									$social_media_icons = get_field('social_media_icons');

									if( in_array('facebook', $social_media_icons)) {
										?>
											<li><a href="#" class="icon fa-facebook alt"><span class="label">Facebook</span></a></li>
										<?php
									} //end if facebook
									if( in_array('instagram', $social_media_icons)) {
										?>

											<li><a href="#" class="icon fa-instagram alt"><span class="label">Instagram</span></a></li>
										<?php
									} // end of Instagram
									if( in_array('twitter', $social_media_icons)) {
										?>

											<li><a href="#" class="icon fa-twitter alt"><span class="label">Twitter</span></a></li>
										<?php
									} // end of Twitter
									if( in_array('Github', $social_media_icons)) {
										?>

											<li><a href="#" class="icon fa-GitHub alt"><span class="label">GitHub</span></a></li>
										<?php
									} // end of GitHub
									if( in_array('Dribble', $social_media_icons)) {
										?>

											<li><a href="#" class="icon fa-Dribble alt"><span class="label">Dribble</span></a></li>
										<?php
									} // end of Dribble
								?>
								
							</ul>
						</section>
						<p class="copyright">&copy; Starting Monday Design: <a href="https://html5up.net"></a>.</p>
					</footer>


					<?php
				} // end while
			} // end if
		?>


<?php
	get_footer();
?>