<?php if (($this->config->get('tsettings_status') == '1') && ($this->config->get('select_header_status') == '1')) { ?>
  <?php if (($this->config->get('radio_login_size') == "s_login") && ($this->config->get('radio_header_login_options') == "1")) { ?>
    <div id="welcome">
      <?php if (!$logged) { ?>
        <?php echo $text_welcome; ?>
      <?php } else { ?>
        <?php echo $text_logged; ?>
      <?php } ?>
    </div>
    
		<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
		<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
			<?php /* Header // Mobile Login // Start *******************/	?>
				<span><a href="<?php echo $account; ?>"><span id="m-mini-welcome-button"></span></a></span>
			<?php /* Header // Mobile Login // End *********************/	?>
		<?php } ?>
  <?php } else if (($this->config->get('radio_login_size') == "mi_login") && ($this->config->get('radio_header_login_options') == "1")) { ?>
    <span>
      <a href="<?php echo $account; ?>"><div id="mini-welcome-button"></div></a>
    </span>
    <?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
			<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
			<?php /* Header // Mobile Login // Start *******************/	?>
				<span><a href="<?php echo $account; ?>"><span id="m-mini-welcome-button"></span></a></span>
			<?php /* Header // Mobile Login // End *********************/	?>
    <?php } ?>
  <?php } ?>
<?php } else if (($this->config->get('radio_link_login') == '1') && ($this->config->get('select_link_status') == '1') && ($this->config->get('tsettings_status') == '0')) { ?>
  <li><a href="#">Login</a></li>
  
	<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
		<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
		<?php /* Header // Mobile Login // Start *******************/	?>
			<span><a href="<?php echo $account; ?>"><span id="m-mini-welcome-button"></span></a></span>
		<?php /* Header // Mobile Login // End *********************/	?>
  <?php } ?>
	
<?php } else if (($this->config->get('radio_header_login_options') == '0') && ($this->config->get('select_header_status') == '1') && ($this->config->get('tsettings_status') == '1')) { ?>
  <?php /* Show nothing *********************/	?>
<?php } else if ($this->config->get('select_header_status') == '0') { ?>
  <div id="welcome">
    <?php if (!$logged) { ?>
      <?php echo $text_welcome; ?>
    <?php } else { ?>
      <?php echo $text_logged; ?>
    <?php } ?>
  </div>
  
	<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
		<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
		<?php /* Header // Mobile Login // Start *******************/	?>
			<span><a href="<?php echo $account; ?>"><span id="m-mini-welcome-button"></span></a></span>
		<?php /* Header // Mobile Login // End *********************/	?>
	<?php } ?>
  
<?php } else if (($this->config->get('tsettings_status')!= "none") && ($this->config->get('select_header_status') != "none")) { ?>
  <div id="welcome">
    <?php if (!$logged) { ?>
      <?php echo $text_welcome; ?>
    <?php } else { ?>
      <?php echo $text_logged; ?>
    <?php } ?>
  </div>
  
	<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
		<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
  <?php /* Header // Mobile Login // Start *******************/	?>
    <span><a href="<?php echo $account; ?>"><span id="m-mini-welcome-button"></span></a></span>
  <?php /* Header // Mobile Login // End *********************/	?>
	<?php } ?>
<?php } ?>

<?php if (($this->config->get('tsettings_status') == '1') && ($this->config->get('select_link_status') == '1')) { ?>
  <?php if ($this->config->get('radio_link_login') == "1") { ?>
    <li><a href="<?php echo $account; ?>">Login</a></li>
  <?php } ?>
<?php } ?>
