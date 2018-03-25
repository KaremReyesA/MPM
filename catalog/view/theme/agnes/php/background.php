<?php /* Background Slideshow // Start ******************/ ?>
	<?php if ($this->config->get('radio_slideshow_options') == '1' ) { ?>
		<div id="slide-bg">
      <?php if ($this->config->get('upload_bg_slideshow_first') != '0') { ?>
				<img class="active" src="<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_bg_slideshow_first') ?>" alt="Slideshow Image 1" />
      <?php } ?>
      <?php if ($this->config->get('upload_bg_slideshow_second') != '0') { ?>
				<img src="<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_bg_slideshow_second') ?>" alt="Slideshow Image 2" />
      <?php } ?>
      <?php if ($this->config->get('upload_bg_slideshow_third') != '0') { ?>
				<img src="<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_bg_slideshow_third') ?>" alt="Slideshow Image 3" />
      <?php } ?>
      <?php if ($this->config->get('upload_bg_slideshow_fourth') != '0') { ?>
				<img src="<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_bg_slideshow_fourth') ?>" alt="Slideshow Image 4" />
      <?php } ?>
		</div>
		<script type="text/javascript">
			function slideSwitch() {
					var $active = $('#slide-bg IMG.active');
				
					if ( $active.length == 0 ) $active = $('#slide-bg IMG:last');
				
					// use this to pull the images in the order they appear in the markup
					var $next =  $active.next().length ? $active.next()
							: $('#slide-bg IMG:first');
				
					// uncomment the 3 lines below to pull the images in random order
				
					// var $sibs  = $active.siblings();
					// var rndNum = Math.floor(Math.random() * $sibs.length );
					// var $next  = $( $sibs[ rndNum ] );
				
					$active.addClass('last-active');
				
					$next.css({opacity: 0.0})
							.addClass('active')
							.animate({opacity: 1.0}, 1000, function() {
									$active.removeClass('active last-active');
							});
			}
			$(function() {
					setInterval( "slideSwitch()", 5000 );
			});
		</script>
	<?php } ?>
<?php /* Background Slideshow // End ********************/ ?>


<?php /* Background Settings // Start *******************/ ?>

	<?php if ($this->config->get('radio_bg_settings_options') == '1' ) { ?>
		<?php /* Background image // Start ******************/ ?>
			<?php if ($this->config->get('radio_main_full_background_image') == '1') { ?>
				<div id="image-bg"><img id="bg" src="<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_main_full_bg_image') ?>" alt="Background image"></div>
			<?php } ?>
		<?php /* Background image // End ********************/ ?>


		<?php /* Background Pattern // Start ******************/ ?>
			<?php if ($this->config->get('select_main_bg_pattern') != 'none') { ?>
			<div id="pattern-bg"></div>
			<?php } ?>
		<?php /* Background Pattern // End ********************/ ?>
		
		<?php /* Own Background Pattern // Start ******************/ ?>
			<?php if ($this->config->get('radio_main_bg_pattern_image') == '1') { ?>
			<div id="own-pattern-bg"></div>
			<?php } ?>
		<?php /* Own background Pattern // End ********************/ ?>


		<?php /* Background Shadow // Start ******************/ ?>
			<?php if ($this->config->get('select_main_bg_shadows') != 'none') { ?>
			<div id="shadow-bg"><img id="bg" src="catalog/view/theme/agnes/image/layout/shadows/<?php echo  $this->config->get('select_main_bg_shadows');?>.png" alt="Background shadow"></div>
			<?php } ?>
		<?php /* Background Shadow // End ********************/ ?>
	<?php } ?>
	
<?php /* Background Settings // End *********************/ ?>