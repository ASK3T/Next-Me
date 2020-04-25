<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Next_Me
 */

global $redux_demo;
?>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-2 d-flex align-items-center">
					<a href="<?php echo home_url("/");?>"><img src="<?php echo $redux_demo['logofooter']['url'];?>" alt="logo" class="logo"></a>
				</div>
				<div class="col-3 offset-7">
					<a href="<?php echo $redux_demo['link'];?>" class="main-link footer-link">
						Скачать бесплатно
					</a>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
