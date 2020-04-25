<?php /*
Template name: Главная страница
*/

get_header();

global $redux_demo;
while (have_posts()): the_post();
?>

<section class="main">
	<div class="container">
		<div class="row">
			<div class="col-7">
				<h1 class="main-title">
					<?php the_field('title');?>
				</h1>
				<p class="main-offer">
					<?php the_field('description');?>
				</p>
				<?php if(get_field('link')) { ?>
					<a href="#" class="main-link">Скачать бесплатно</a>
				<?php } ?>
			</div>
			<div class="col-5">
				<?php $photo = get_field('photo');?>
				<img src="<?php echo $photo['url'];?>" alt="приложение">
			</div>
		</div>
	</div>
</section>
<section class="skill">
	<div class="container">
		<div class="row">
			<div class="col-4">
				<div class="card">
					<div class="card-img">
						<svg width="50" height="50" viewBox="0 0 50 50" fill="#5788E9" xmlns="http://www.w3.org/2000/svg">
							<path d="M22.9167 19.0833V4.16666C12.5 5.20832 4.16669 14.1458 4.16669 25C4.16669 35.8542 12.5 44.7917 22.9167 45.8333V30.9167C20.8334 30.0625 18.75 27.75 18.75 25C18.75 22.25 20.8334 19.9375 22.9167 19.0833ZM30.9584 22.9167H45.8334C44.8334 13.0208 37.5 5.14582 27.0834 4.16666V19.0833C29.1667 19.7083 30.25 21.125 30.9584 22.9167ZM27.0834 30.9167V45.8333C37.5 44.8542 44.8334 36.9792 45.8334 27.0833H30.9584C30.25 28.875 29.1667 30.2917 27.0834 30.9167Z" fill="url(#paint0_linear)"/>
							<defs>
								<linearGradient id="paint0_linear" x1="25" y1="4.16666" x2="25" y2="45.8333" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6F8DD9"/>
									<stop offset="1" stop-color="#3677E0"/>
								</linearGradient>
							</defs>
						</svg>
					</div>
					<h3 class="card-title">
						<?php the_field('title_service_1');?>
					</h3>
					<p class="card-offer">
						<?php the_field('description_service_1');?>
					</p>
				</div>
			</div>
			<div class="col-4">
				<div class="card">
					<div class="card-img">
						<svg width="50" height="50" viewBox="0 0 50 50" fill="#5788E9" xmlns="http://www.w3.org/2000/svg">
							<path d="M22.9167 19.0833V4.16666C12.5 5.20832 4.16669 14.1458 4.16669 25C4.16669 35.8542 12.5 44.7917 22.9167 45.8333V30.9167C20.8334 30.0625 18.75 27.75 18.75 25C18.75 22.25 20.8334 19.9375 22.9167 19.0833ZM30.9584 22.9167H45.8334C44.8334 13.0208 37.5 5.14582 27.0834 4.16666V19.0833C29.1667 19.7083 30.25 21.125 30.9584 22.9167ZM27.0834 30.9167V45.8333C37.5 44.8542 44.8334 36.9792 45.8334 27.0833H30.9584C30.25 28.875 29.1667 30.2917 27.0834 30.9167Z" fill="url(#paint0_linear)"/>
							<defs>
								<linearGradient id="paint0_linear" x1="25" y1="4.16666" x2="25" y2="45.8333" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6F8DD9"/>
									<stop offset="1" stop-color="#3677E0"/>
								</linearGradient>
							</defs>
						</svg>
					</div>
					<h3 class="card-title">
						<?php the_field('title_service_2');?>
					</h3>
					<p class="card-offer">
						<?php the_field('description_service_2');?>
					</p>
				</div>
			</div>
			<div class="col-4">
				<div class="card">
					<div class="card-img">
						<svg width="50" height="50" viewBox="0 0 50 50" fill="#5788E9" xmlns="http://www.w3.org/2000/svg">
							<path d="M22.9167 19.0833V4.16666C12.5 5.20832 4.16669 14.1458 4.16669 25C4.16669 35.8542 12.5 44.7917 22.9167 45.8333V30.9167C20.8334 30.0625 18.75 27.75 18.75 25C18.75 22.25 20.8334 19.9375 22.9167 19.0833ZM30.9584 22.9167H45.8334C44.8334 13.0208 37.5 5.14582 27.0834 4.16666V19.0833C29.1667 19.7083 30.25 21.125 30.9584 22.9167ZM27.0834 30.9167V45.8333C37.5 44.8542 44.8334 36.9792 45.8334 27.0833H30.9584C30.25 28.875 29.1667 30.2917 27.0834 30.9167Z" fill="url(#paint0_linear)"/>
							<defs>
								<linearGradient id="paint0_linear" x1="25" y1="4.16666" x2="25" y2="45.8333" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6F8DD9"/>
									<stop offset="1" stop-color="#3677E0"/>
								</linearGradient>
							</defs>
						</svg>
					</div>
					<h3 class="card-title">
						<?php the_field('title_service_3');?>
					</h3>
					<p class="card-offer">
						<?php the_field('description_service_3');?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="video">
	<div class="container">
		<div class="row">
			<div class="col-7">
				<iframe width="100%" height="375" src="<?php the_field('video', false, false)?>"
				frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
				allowfullscreen></iframe>
			</div>
			<div class="col-5">
				<h3 class="video-title">
					<?php the_field('title_video')?>
				</h3>
				<p class="video-offer">
					<?php the_field('description_video')?>
				</p>
			</div>
		</div>
	</div>
</section>
<section class="form">
	<div class="container">
		<div class="row">
			<div class="col-5 offset-1">
				<h3 class="form-title">
					<?php the_field('title_contact');?>
				</h3>
				<p class="form-offer">
					<?php the_field('description_contact');?>
				</p>
				<!-- <a href="tel:88004444444" class="header-phone form-link">8 (800) 444 44 44</a> -->
				<a href="tel:<?php echo preg_replace("/[^0-9]/", '', $redux_demo['phone']);?>" class="header-phone form-link"><?php echo $redux_demo['phone'];?></a>
				<p class="form-address">
					<?php the_field('address_contact');?>
				</p>
			</div>
			<div class="col-5">
				<?php echo do_shortcode(get_field('form_shortcode'));?>
			</div>
		</div>
	</div>
</section>

<?php
endwhile;
get_footer();
?>