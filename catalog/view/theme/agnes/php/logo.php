<?php if (($this->config->get('radio_header_logo_options') == '1') && ($this->config->get('select_header_status') == '1') && ($this->config->get('tsettings_status') == '1')) { ?>
  <?php if ($this->config->get('radio_header_logo_image') == '1') { ?>
    <?php if ($logo) { ?>
      <div id="logo"><a href="<?php echo $home; ?>" title="<?php echo $name; ?>"><?php if ($this->config->get('radio_header_logo') == '1') { ?><?php echo $this->config->get('input_header_logo_text') ?><?php } ?></a></div>
    <?php } ?>
  <?php } else if ($this->config->get('radio_header_logo_image') == '0') { ?>
    <?php if ($logo) { ?>
      <div id="logo"><a href="<?php echo $home; ?>" title="<?php echo $name; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /><?php if ($this->config->get('radio_header_logo') == '1') { ?><?php echo $this->config->get('input_header_logo_text') ?><?php } ?></a></div>
    <?php } ?>
  <?php } ?>
<?php } else if (($this->config->get('tsettings_status')!= "none") && ($this->config->get('select_menu_status') != "none")) { ?>
  <?php if ($logo) { ?>
    <div id="logo"><a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a></div>
  <?php } ?>
<?php } ?>