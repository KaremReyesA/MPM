<?php if($this->config->get('tsettings_status') == '1'){ ?>
  <?php if (($this->config->get('select_effects_status') == '1') && ($this->config->get('radio_slideshow_home_options') == '1') && ($this->config->get('tsettings_status') == '1')) { ?>
		<?php echo $content_top; ?>
	<?php } ?>
<?php echo $column_left; ?><?php echo $column_right; ?>
<div id="content"><?php if ($this->config->get('radio_slideshow_home_options') == '0') { ?><?php echo $content_top; ?><?php } ?>
<?php echo $content_bottom; ?></div>
<?php echo $footer; ?>