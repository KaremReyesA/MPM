<?php if (($this->config->get('tsettings_status') == '1') && ($this->config->get('select_header_status') == '1')) { ?>
  <?php if (($this->config->get('radio_search_size') == "s_search") && ($this->config->get('radio_header_search_options') == "1")) { ?>
  <div id="search">
    <div class="button-search"></div>
    <input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
  </div>
		<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
			<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?>  
			<?php /* Header // Mobile Search // Start *******************/	?>
				<div id="mini-search">
					<div class="button-search"></div>
				</div>
		
				<div id="hyperlink-search">
					<div id="search">
						<div class="button-search"></div>
						<input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
					</div>
				</div>
			<?php /* Header // Mobile Search // End *********************/	?>
		<?php } ?>
  <?php } else if (($this->config->get('radio_search_size') == "m_search") && ($this->config->get('radio_header_search_options') == "1")) { ?>
    <div id="search">
      <div class="button-search"></div>
      <input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
    </div>
		<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
			<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?>  
			<?php /* Header // Mobile Search // Start *******************/	?>
				<div id="mini-search">
					<div class="button-search"></div>
				</div>
		
				<div id="hyperlink-search">
					<div id="search">
						<div class="button-search"></div>
						<input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
					</div>
				</div>
			<?php /* Header // Mobile Search // End *********************/	?>
		<?php } ?>
  <?php } else if (($this->config->get('radio_search_size') == "mi_search") && ($this->config->get('radio_header_search_options') == "1")) { ?>
    <div id="search">
      <div class="button-search"></div>
    </div>
		<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
			<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
			<?php /* Header // Mobile Search // Start *******************/	?>
				<div id="mini-search">
					<div class="button-search"></div>
				</div>
		
				<div id="hyperlink-search">
					<div id="search">
						<div class="button-search"></div>
						<input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
					</div>
				</div>
			<?php /* Header // Mobile Search // End *********************/	?>
		<?php } ?>
  <?php } ?>
<?php } else if (($this->config->get('radio_link_search') == '1') && ($this->config->get('select_link_status') == '1') && ($this->config->get('tsettings_status') == '0')) { ?>
  <div id="search">
    <div class="button-search"></div>
    <input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
  </div>
	<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
		<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
    <?php /* Header // Mobile Search // Start *******************/	?>
      <div id="mini-search">
        <div class="button-search"></div>
      </div>
  
      <div id="hyperlink-search">
        <div id="search">
          <div class="button-search"></div>
          <input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
        </div>
      </div>
    <?php /* Header // Mobile Search // End *********************/	?>
	<?php } ?>
<?php } else if (($this->config->get('radio_header_search_options') == '0') && ($this->config->get('select_header_status') == '1') && ($this->config->get('tsettings_status') == '1')) { ?>
  <?php /* Show nothing *********************/	?>
<?php } else if ($this->config->get('select_header_status') == '0') { ?>
  <?php if ($this->config->get('radio_link_search') != "1") { ?>
  <div id="search">
    <div class="button-search"></div>
    <input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
  </div>
  <?php } ?>
	<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
		<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
    <?php /* Header // Mobile Search // Start *******************/	?>
      <div id="mini-search">
        <div class="button-search"></div>
      </div>
  
      <div id="hyperlink-search">
        <div id="search">
          <div class="button-search"></div>
          <input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
        </div>
      </div>
    <?php /* Header // Mobile Search // End *********************/	?>
	<?php } ?>
<?php } else if (($this->config->get('tsettings_status')!= "none") && ($this->config->get('select_header_status') != "none")) { ?>
  <div id="search">
    <div class="button-search"></div>
    <input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
  </div>
	<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
		<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?>
		<?php /* Header // Mobile Search // Start *******************/	?>
			<div id="mini-search">
				<div class="button-search"></div>
			</div>

			<div id="hyperlink-search">
				<div id="search">
					<div class="button-search"></div>
					<input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
				</div>
			</div>
		<?php /* Header // Mobile Search // End *********************/	?>
	<?php } ?>
<?php } ?>

<?php if (($this->config->get('tsettings_status') == '1') && ($this->config->get('select_link_status') == '1')) { ?>
  <?php if ($this->config->get('radio_link_search') == "1") { ?>
    <li><a>Search</a>
      <div>
        <ul>
          <li>
            <a style="padding: 0px;">
                <div id="search">
                  <div class="button-search"></div>
                  <input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
                </div>
            </a>
          </li>
        </ul>
      </div>
    </li>
  <?php } ?>
<?php } ?>
