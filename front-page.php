
<?php
/**
 * Template Name: Static Front Page1
 *
 * @package WordPress
 * @subpackage luxury
 * @since luxury 1.0
 */
get_header(); ?>
<div class="banner" style = "background: url(<?php echo get_theme_mod('banner_section_image', '/img/banner-bg.png');?>);">
	<div class="container text-section wow fadeInUp">
		<h1><?php echo get_theme_mod('banner_title') ;?></h1>
		<p><?php echo get_theme_mod('banner_subtitle') ;?></p>
</div>
</div>
<div class="top-form fixed-bottom">
<div class="d-flex justify-content-center">
	<div class="display">
		<img src="<?php echo get_theme_mod('plane_image') ;?>">
	</div>
	<div class="vanish">
		<img src="img/iconx.png">
	</div>
</div>
<div id="target">
	<div class="container">
		<form class="form-inline upper-form">
		<div class="input-group col-md-3">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="far fa-flag"></i></div>
		</div>
		<input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Country">
	</div>
		<div class="input-group col-md-3">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="far fa-clock"></i></div>
		</div>
		<input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Duration">
	</div>
	<div class="input-group col-md-3">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
		</div>
		<input type="date" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Travelling Date">
	</div>
	<button type="submit" class="btn btn-primary form-btn col-md-3">Get a Quote</button>
</form>
	</div>
</div>
</div>


<div class="d-part">
	<div class="container">
		<div class="destination wow fadeInRight" data-wow-delay="0.2s">
			<h5><?php echo get_theme_mod('destination_title') ;?></h5>
			<h3><?php echo get_theme_mod('destination_subtitle') ;?></h3>
		</div>



		<div class="owl-carousel owl-one owl-theme wow fadeInRight" data-wow-delay="0.2s">
			<div class="item">

				<?php 

				$cards = get_theme_mod('my_repeater_setting1'); 

				$i = 1;
				if(is_array($cards)){
					foreach($cards as $card){
						$img_id = $card['img'];

						$img_url = wp_get_attachment_image_src($img_id, 'full');
																	// echo '<pre>'; print_r( wp_get_attachment_image_src($img_id, 'full'));
						$title = $card['title'];
						$subtitle = $card['subtitle'];
						?>
						<div class="inner-item"> 
							<img src="<?php echo $img_url[0] ;?>">
							<h3><?php echo $title;?></h3>
							<h6><?php echo $subtitle;?></h6>
							<?php ($card);?> </div>
							<?php if($i%2 == 0){ ?>
							</div>
							<div class="item">
							<?php }
							$i++;
						}
					}
					?>
				</div>
			</div>                 
		</div>
		<div class="slider-control-1">
			<div class="owl-nav flex-container">
				<div class="prebtn-a"><i class="fas fa-chevron-left"></i></div>
				<div class="nextbtn-a"><i class="fas fa-chevron-right"></i></div>
			</div>
		</div>

	</div>
</div>
</div>

<div class="offer-part">
		<div class="container">
				<div class="offer wow fadeInLeft" data-wow-delay="0.2s">
						<h5><?php echo get_theme_mod('offer_title') ;?></h5>
						<h3><?php echo get_theme_mod('offer_subtitle') ;?></h3>
				</div>
				<div class="owl-two owl-carousel owl-theme wow fadeInLeft" data-wow-delay="0.5s">
						<div class="item">
								<?php
								$scenes = get_theme_mod('my_repeater_setting2');
								$j = 1;
								if(is_array($scenes)) {
								foreach($scenes as $scene){
										$img_id = $scene['img'];
										$img_url = wp_get_attachment_image_src($img_id, 'full');
										$title = $scene['title'];
										$subtitle = $scene['subtitle'];
										?>
										<div class="inner-item">
												<div class="card">
														<img src="<?php echo $img_url[0] ;?>" class="card-img-top">
														<div class="card-body bottom">
																<h3><?php echo $title;?></h3>
																<div class="row">
																		<div class="col-md-6 tour-time">
																				<h5><?php echo $subtitle;?></h5>
																		</div>
																		<div class="col-md-6">
																				<span class="fa fa-star checked"></span>
																				<span class="fa fa-star checked"></span>
																				<span class="fa fa-star checked"></span>
																				<span class="fa fa-star checked"></span>
																				<span class="fa fa-star checked"></span>
																		</div>
																</div>
														</div>
												</div>
										</div>
										<?php if($j%2 == 0 && $j<count($scenes)){ ?> </div><div class="item"> <?php } ?>
										<?php $j++ ; }} ?> 
								</div>
						</div>
						<div class="slider-control-2">
								<div class="owl-nav flex-container">
										<div class="prebtn-b"><i class="fas fa-chevron-left"></i></div>
										<div class="nextbtn-b"><i class="fas fa-chevron-right"></i></div>
								</div>
						</div>
				</div>
		</div>

<div class="insta">
	<div class="container wow fadeInUp" data-wow-delay="0.5s">
		<h5><?php echo get_theme_mod('insta_subtitle') ;?></h5>
		<h3><?php echo get_theme_mod('insta_title') ;?></h3>
	<div class="row">
		<div class="col-md-4 post">
			<img src="<?php echo get_theme_mod('first_insta_image', get_template_directory_uri() . '/img/mustangjeep-2.png') ?>" alt="">
		</div>
		<div class="col-md-4 post">
		<img src="<?php echo get_theme_mod('second_insta_image', get_template_directory_uri() . '/img/post-6.png') ?>" alt="">
		</div>
		<div class="col-md-4 post">
		 <img src="<?php echo get_theme_mod('third_insta_image', get_template_directory_uri() . '/img/post4.png') ?>" alt="">
		</div>
	</div>
	</div>
</div>

<div class="blog-part">
<div class="container">
	<div class="blog wow fadeInLeft" data-wow-delay="0.5s">
		<h5><?php echo get_theme_mod('blog_title') ;?></h5>
		<h3><?php echo get_theme_mod('blog_subtitle') ;?></h3>
	</div>

<div class="owl-three owl-carousel owl-theme wow fadeInRight" data-wow-delay="0.5s">
	
		
				<?php 

$the_query = new WP_Query( 'posts_per_page=5' ); ?>
<?php 

while ($the_query -> have_posts()) : $the_query -> the_post(); 

?>
	<div class="item"> 
			<div class="inner-item blog-item">
				<?php the_post_thumbnail() ;?>
				<h6><?php the_title() ;?></h6>
				<h3><?php echo get_theme_mod('blog_subdescription') ;?></h3>
				 <p><?php the_content() ;?></p>

					</div>  
	 </div>
				<?php endwhile ;?>
		
</div>

		
<div class="slider-control-3">
	 <div class="owl-nav flex-container">
				<div class="prebtn-c"><i class="fas fa-chevron-left"></i></div>
				<div class="nextbtn-c"><i class="fas fa-chevron-right"></i></div>
		</div>
</div>
</div>
</div>


<div class="about-part">
	<div class="container">
		<div class="row">
			<div class="col-md-6 wow fadeInRight" data-wow-delay="0.5s">
				<?php
						$post_id = get_theme_mod('my_setting4');
						$the_query = new WP_Query('page_id=' . $post_id);
						while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<h5><?php the_title() ;?></h5>
							<h3><?php echo get_theme_mod('about_title');?></h3>
							<p><?php the_content() ;?></p>
						<!--  <button type="button" href= "<?php the_permalink() ;?>" class="btn btn-primary about-btn">Read More</button> -->
						<a class="btn btn-primary about-btn" href="<?php the_permalink();?>" role="button">Read More</a>
							<?php endwhile; ?>


		
			</div>
			<div class="col-md-6 wow fadeInLeft" data-wow-delay="0.5s">
				<div class="owl-four owl-carousel owl-theme">
		<div class="item">
			 <img src="<?php echo get_theme_mod('first_about_image', get_template_directory_uri() . '/img/a.jpg') ?>" alt="">
		</div>
		 <div class="item">
			<img src="<?php echo get_theme_mod('second_about_image', get_template_directory_uri() . '/img/277.png') ?>" alt="">
		</div>
	 
</div>
<div class="slider-control-4">
	 <div class="owl-nav flex-container">
				<div class="prebtn-d"><i class="fas fa-chevron-left"></i></div>
				<div class="nextbtn-d"><i class="fas fa-chevron-right"></i></div>
		</div>
</div>
			</div>
		</div>
	</div>
</div>

	<div class="why-us-part">
	<div class="container wow fadeInUp" data-wow-delay="0.5s">
		 <h5><?php echo get_theme_mod('why_choose_us_title'); ?></h5>
		<h3><?php echo get_theme_mod('why_choose_us_subtitle'); ?></h3>
		<div class="row whyus-top wow fadeInRight" data-wow-delay="0.5s">
		
 
<?php
				 

				$cards = get_theme_mod('my_repeater_setting5'); ?>
			
						<?php 
						if(is_array($cards)) {
						foreach($cards as $card):

							 

								$title = $card['title'];
								$subtitle = $card['subtitle'];
								?>
								 <div class="col-md-4 col-sm-6">
									<div class="card whyus-card">
										<div class="card-body">

										 <img src="<?php echo get_template_directory_uri() .'/img/icon-location.png' ?>">
										 <h5 class="card-title"><?php echo $title;?></h5>
										 <p class="card-text"><?php echo $subtitle; ?></p>
											</div>
								
								</div>
								
								 </div>     
						
					 
				<?php endforeach; } ?>

			</div>
			</div>
			</div>




		<div class="testimonial-part">
	<div class="container">
		<div class="row">
			<div class="col-md-6 wow fadeInLeft" data-wow-delay="0.5s">
				<div class="owl-five owl-carousel owl-theme">
		<div class="item">
			<img src="<?php echo get_theme_mod('first_testi_image', get_template_directory_uri() . '/img/8.png') ?>" alt="">
		</div>
		 <div class="item">
			<img src="<?php echo get_theme_mod('second_testi_image', get_template_directory_uri() . '/img/8.png') ?>" alt="">
		</div>
</div>
<div class="slider-control-5">
	 <div class="owl-nav flex-container">
				<div class="prebtn-e"><i class="fas fa-chevron-left"></i></div>
				<div class="nextbtn-e"><i class="fas fa-chevron-right"></i></div>
		</div>
</div>
			</div>
					 <div class="col-md-6 testimonial wow fadeInRight" data-wow-delay="0.5s">
				<h5><?php echo get_theme_mod('testimonial_title') ;?></h5>
		<h3><?php echo get_theme_mod('testimonial_subtitle') ;?></h3>
		 <?php 
						 $args = array('post_type'=>'testimonials', 'posts_per_page'=> 1);

						 $loop = new WP_Query($args);
						 while($loop->have_posts()):
								$loop->the_post();

								?> 
		<p><?php the_content() ;?></p>
		<div class="row">
			<div class="col-md-6">
				<?php if (has_post_thumbnail( $post->ID ) ): ?>
			 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID )); ?>
			 <img src ="<?php echo $image[0]; ?>">
			 <?php endif; ?>
			</div>
			<div class="col-md-6 test-title wow fadeInUp" data-wow-delay="0.5s">
				<h4><?php the_title() ;?></h4>
				<h6><?php echo get_post_meta(get_the_ID(),'designation',true);?></h6>
			</div>
		</div>
		<?php endwhile ;?>
			</div>    </div>
	</div>
</div>
 
 <div class="subscribe">
	 <div class="container">
		<div class="row">
			<div class="col-md-6 subscribe-text wow fadeInLeft" data-wow-delay="0.5s">
				<!-- <h2><?php echo get_theme_mod('subscribe_title') ;?></h2> -->
			</div>
		 
			<!-- <div class="col-sm-4 my-1 button-part"> -->
			<a class="btn btn-primary contacts-btn" href="<?php echo get_theme_mod('subscribe_button_link');?>" role="button">Read More</a>
		</div>
	<!-- <div class="form-row"> -->
		<!-- <div class="col-sm-8 my-1"> -->
			 <!-- <?php echo do_shortcode( get_theme_mod( 'contactform_title' ) ); ?> -->

		
	</div>
</form>
			</div>
		</div>
	 </div>
 </div>

 <?php get_footer() ;?>