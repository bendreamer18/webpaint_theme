<?php 
// Template Name: Main Page 
?>

<?php get_header(); ?>


<!-- We are Block -->
<div class="row" id="weare_row">
	<div id="we-are-text">
		<p>We are <span id="webpaint"> <?php echo ale_get_option('company-name'); ?> </span></p>
		<span id="small_weare"> <?php echo ale_get_option('we-want'); ?> </span>
	</div>

	<div align="center"><button id="weare_button">See Portfolio</button></div>
</div>

<!-- Icon Section -->
<div class="row" id="icon_sec">

	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 icon_col" id="a">
		<img src="http://webpaint/wp-content/themes/webpaint-theme/css/images/b-icon1.png" width="47" height="54">

		<div class="icon_header"> <?php echo ale_get_option('icon_header_1'); ?> </div>

		<div class="icon_text">
			<?php echo ale_get_option('icon_desc_1'); ?>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 icon_col" id="b">
		<img src="http://webpaint/wp-content/themes/webpaint-theme/css/images/b-icon2.png" width="47" height="54">

		<div class="icon_header"> <?php echo ale_get_option('icon_header_2'); ?> </div>

		<div class="icon_text">
			<?php echo ale_get_option('icon_desc_2'); ?>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 icon_col" id="c">
		<img src="http://webpaint/wp-content/themes/webpaint-theme/css/images/b-icon3.png" width="60" height="56">

		<div class="icon_header"> <?php echo ale_get_option('icon_header_3'); ?> </div>

		<div class="icon_text">
			<?php echo ale_get_option('icon_desc_3'); ?>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 icon_col" id="last_icon">
		<img src="http://webpaint/wp-content/themes/webpaint-theme/css/images/b-icon4.png" width="55" height="65">

		<div class="icon_header"> <?php echo ale_get_option('icon_header_4'); ?> </div>

		<div class="icon_text">
			<?php echo ale_get_option('icon_desc_4'); ?>
		</div>
	</div>
</div> <!-- the end of icon_sec -->


<!-- Featured Works  -->
<div class="row" id="featured_row">

	<div id="galley_header">Our Featured Works</div>

	<div id="curabitur">
		<?php echo ale_get_option('feat_text'); ?>
	</div>

	<div id="gallery_buttons">
		<ul class="hidden-xs hidden-sm">

			<li>
				<a href="#" class="g_but">All</a>
			</li>


			<li>
				<a href="#" class="g_but">graphic</a>
			</li>

			<li>
				<a href="#" class="g_but">ıllustration</a>
			</li>

			<li>
				<a href="#" class="g_but">motion</a>
			</li>
		</ul>

	</div> 

	<!-- Gallery -->
	<div class="row" id="pic_gallery">

		<div class="gallery">

			<a href="<?php echo ale_get_option('pic1'); ?>" class="flipLightBox">
				<img src="<?php echo ale_get_option('pic1'); ?>" width="251" height="200" alt="Image 2" />
				<span><i>Description of the project</i></span>
			</a>

			<a href="<?php echo ale_get_option('pic2'); ?>" class="flipLightBox">
				<img src="<?php echo ale_get_option('pic2'); ?>" width="251" height="200" alt="Image 2" />
				<span><i>Description of the project</i></span>
			</a>

			<a href="<?php echo ale_get_option('pic3'); ?>" class="flipLightBox">
				<img src="<?php echo ale_get_option('pic3'); ?>" width="251" height="200" alt="Image 3" />
				<span><i>Description of the project</i></span>
			</a>

			<a href="<?php echo ale_get_option('pic4'); ?>" class="flipLightBox">
				<img src="<?php echo ale_get_option('pic4'); ?>" width="251" height="200" alt="Image 3" />
				<span><i>Description of the project</i></span>
			</a>

			<a href="<?php echo ale_get_option('pic5'); ?>" class="flipLightBox">
				<img src="<?php echo ale_get_option('pic5'); ?>" width="251" height="200" alt="Image 1" / class="image-responsive">
				<span><i>Description of the project</i></span>
			</a>

			<a href="<?php echo ale_get_option('pic6'); ?>" class="flipLightBox">
				<img src="<?php echo ale_get_option('pic6'); ?>" width="251" height="200" alt="Image 2" />
				<span><i>Description of the project</i></span>
			</a>
			<a href="<?php echo ale_get_option('pic7'); ?>" class="flipLightBox">
				<img src="<?php echo ale_get_option('pic7'); ?>" width="251" height="200" alt="Image 3" />
				<span><i>Description of the project</i></span>
			</a>

			<a href="<?php echo ale_get_option('pic8'); ?>" class="flipLightBox">
				<img src="<?php echo ale_get_option('pic8'); ?>" width="251" height="200" alt="Image 3" />
				<span><i>Description of the project</i></span>
			</a>

			<a href="<?php echo ale_get_option('pic9'); ?>" class="flipLightBox">
				<img src="<?php echo ale_get_option('pic9'); ?>" width="251" height="200" alt="Image 1" / class="image-responsive">
				<span><i>Description of the project</i></span>
			</a>

			<a href="<?php echo ale_get_option('pic10'); ?>" class="flipLightBox">
				<img src="<?php echo ale_get_option('pic10'); ?>" width="251" height="200" alt="Image 2" />
				<span><i>Description of the project</i></span>
			</a>

			<a href="<?php echo ale_get_option('pic11'); ?>" class="flipLightBox">
				<img src="<?php echo ale_get_option('pic11'); ?>" width="251" height="200" alt="Image 3" />
				<span><i>Description of the project</i></span>
			</a>

			<a href="<?php echo ale_get_option('pic12'); ?>" class="flipLightBox">
				<img src="<?php echo ale_get_option('pic12'); ?>" width="251" height="200" alt="Image 3" />
				<span><i>Description of the project</i></span>
			</a>

		</div>
	</div>

</div>


<?php get_footer(); ?>