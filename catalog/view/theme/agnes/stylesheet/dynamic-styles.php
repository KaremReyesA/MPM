<style type="text/css">
	
<?php /* Background Settings // Start **********************/ ?>
  <?php if($this->config->get('select_background_status') == '1'){ ?>
    <?php if($this->config->get('radio_bg_settings_options') == '1'){ ?>
      body {background-color: #<?php echo $this->config->get('input_main_bg_color') ?>; background-image: none;}
      <?php if ($this->config->get('radio_main_bg_pattern_image') == '1') { ?>
        #own-pattern-bg {background: url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_main_bg_pattern_image') ?>");}
      <?php } else if ($this->config->get('select_main_bg_pattern')!= "none") { ?>
        #pattern-bg {background: url("catalog/view/theme/agnes/image/layout/pattern/<?php echo  $this->config->get('select_main_bg_pattern');?>.png");}
      <?php } ?>
    <?php } ?>
  <?php } ?>
<?php /* Background Settings // End ************************/ ?>
	

  
<?php /* Page Layout // Start ******************************/ ?>
  <?php if(($this->config->get('select_layout_status') == '1') && ($this->config->get('tsettings_status') == '1')){ ?>
    <?php if($this->config->get('radio_page_layout_options') == '1'){ ?>
      <?php if($this->config->get('radio_layout_page') == 'standart'){ ?>
        #container-s-top {width: 980px;}
      <?php } else if($this->config->get('radio_layout_page') == 'midle'){ ?>
        #container-s-top {width: 1300px;}
      <?php } else if($this->config->get('radio_layout_page') == 'full'){ ?>
        #container-s-top {width: 100%;}
      <?php } else if($this->config->get('radio_layout_page') == 'custom'){ ?>
        #container-s-top {width: <?php echo  $this->config->get('input_custom_layout');?>px;}
      <?php } ?>
    <?php } ?>
      
    <?php if($this->config->get('select_page_layout_shadow_options') == '1'){ ?>
      #container-s-top {-webkit-box-shadow: 0px 0px <?php echo  $this->config->get('input_layout_shadow_size');?>px 0px rgba(0,0,0,0.1); -moz-box-shadow: 0px 0px <?php echo  $this->config->get('input_layout_shadow_size');?>px 0px rgba(0,0,0,0.1); box-shadow: 0px 0px <?php echo  $this->config->get('input_layout_shadow_size');?>px 0px rgba(0,0,0,0.1);}
      <?php } else if($this->config->get('select_page_layout_shadow_options') == '0'){ ?>
      #container-s-top {-webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none;}
    <?php } ?>
    
    <?php if($this->config->get('radio_page_layout_margin_options') == '1'){ ?>
      #container-s-top {margin-top: <?php echo  $this->config->get('input_layout_margin_top');?>px; margin-right: <?php echo  $this->config->get('input_layout_margin_left');?>px; margin-bottom: <?php echo  $this->config->get('input_layout_margin_bottom');?>px; margin-left: <?php echo  $this->config->get('input_layout_margin_left');?>px;}
    <?php } ?>
  <?php } ?>
<?php /* Page Layout // End ******************************/ ?>
	

  
<?php /* Header // Start *********************************/ ?>
  <?php if (($this->config->get('select_header_status') == '1') && ($this->config->get('tsettings_status') == '1')){ ?>
		<?php /* top Header // Start *****************************/ ?>
      <?php if ($this->config->get('radio_top_h_color_options') == '1') { ?>
          <?php if ($this->config->get('radio_top_header_bg_pattern_image') == '0'){ ?>
            #header-top {background: <?php if ($this->config->get('radio_top_header_color_transparent') == '0') { ?>#<?php echo $this->config->get('input_top_header_bg_color');?><?php } ?> url('catalog/view/theme/agnes/image/layout/pattern/<?php echo $this->config->get('select_top_header_pattern') ?>.png') repeat; <?php if($this->config->get('input_top_header_border_color') != 'none'){ ?>border-bottom: <?php echo $this->config->get('input_top_header_border_bottom') ?>px solid #<?php echo $this->config->get('input_top_header_border_color') ?>;<?php } else if($this->config->get('input_top_header_border_color') == 'none'){ ?>border: none;<?php } ?>}
          <?php } else if ($this->config->get('radio_top_header_bg_pattern_image') == '1'){ ?>
            #header-top {background: <?php if ($this->config->get('radio_top_header_color_transparent') == '0') { ?>#<?php echo $this->config->get('input_top_header_bg_color');?><?php } ?> url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_top_header_bg_pattern_image') ?>") repeat; <?php if($this->config->get('input_top_header_border_color') != 'none'){ ?>border-bottom: <?php echo $this->config->get('input_top_header_border_bottom') ?>px solid #<?php echo $this->config->get('input_top_header_border_color') ?>;<?php } else if($this->config->get('input_top_header_border_color') == 'none'){ ?>border: none;<?php } ?>}
					<?php } ?>
						#header-top {background: <?php if ($this->config->get('select_top_header_slightly_transparent') != 'none') { ?> url("catalog/view/theme/agnes/image/layout/t_color/<?php echo  $this->config->get('select_top_header_slightly_transparent');?>.png") repeat;<?php } ?>}
      <?php } ?>
    <?php /* top Header // End *******************************/ ?>
		
    <?php if($this->config->get('radio_header_settings_options') == '1'){ ?>
        #header {background: #<?php echo $this->config->get('input_header_color') ?>;}
      <?php if ($this->config->get('radio_header_bg_pattern_image') == '1') { ?>
        #header {background: #<?php echo $this->config->get('input_header_color') ?> url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_header_bg_pattern_image') ?>");}
      <?php } else if ($this->config->get('select_header_pattern')!= "none") { ?>
        #header {background: #<?php echo $this->config->get('input_header_color') ?> url("catalog/view/theme/agnes/image/layout/pattern/<?php echo  $this->config->get('select_header_pattern');?>.png");}
      <?php } ?>
      
      <?php if ($this->config->get('radio_header_full_background_image') == '1') { ?>
        #header {background: #<?php echo $this->config->get('input_header_color') ?> url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_header_full_bg_image') ?>") top center no-repeat;}
      <?php } ?>
    <?php } ?>
      
      #header {background: <?php if ($this->config->get('radio_header_color_transparent') != '0') { ?><?php echo $this->config->get('radio_header_color_transparent') ?><?php } ?><?php if ($this->config->get('select_header_slightly_transparent') != 'none') { ?> url("catalog/view/theme/agnes/image/layout/t_color/<?php echo  $this->config->get('select_header_slightly_transparent');?>.png") repeat;<?php } ?>;<?php if ($this->config->get('radio_header_size_options') == '1') { ?>height: <?php echo  $this->config->get('input_header_size');?>px;<?php } ?>}
      #header-middle #cart {top: <?php echo  $this->config->get('input_header_basket_position_top');?>px; right: <?php echo  $this->config->get('input_header_basket_position_right');?>px;}
      #header #search {top: <?php echo  $this->config->get('input_header_search_position_top');?>px; right: <?php echo  $this->config->get('input_header_search_position_right');?>px;}
      #welcome, #mini-welcome-button {top: <?php echo  $this->config->get('input_header_login_position_top');?>px; right: <?php echo  $this->config->get('input_header_login_position_right');?>px;}
 
   <?php if ($this->config->get('radio_header_button_color_options') == '1') { ?>
      <?php /* Button Color // Start ***************************/ ?>
        #header .button-search,#header #cart .heading .bag, #mini-welcome-button {background-color: #<?php echo  $this->config->get('input_header_button_color');?>;}
        #header .button-search:hover, #header #cart .heading .bag:hover, #mini-welcome-button:hover {background-color: #<?php echo  $this->config->get('input_header_button_color_hover');?>;}
				
				#header #mini-cart .heading .bag, #header #m-mini-welcome-button, #header #mini-search .button-search {background-color: #<?php echo  $this->config->get('input_header_button_color');?> !important;}
				#header #mini-cart .heading .bag:hover, #header #m-mini-welcome-button:hover, #header #mini-search .button-search:hover {background-color: #<?php echo  $this->config->get('input_header_button_color_hover');?> !important;}
      <?php /* Button Color // End *****************************/ ?>
    <?php } ?>
    
    <?php if ($this->config->get('radio_header_logo_options') == '1') { ?>
      <?php /* Logo // Start ***********************************/ ?>
        #logo {top: <?php echo  $this->config->get('input_header_logo_position_top');?>px; left: <?php echo  $this->config->get('input_header_logo_position_left');?>px;}
        #logo a {
          font-family: <?php if ($this->config->get('radio_logo_font_google') == '0') { ?><?php echo $this->config->get('select_logo_font_family') ?>;<?php } else if ($this->config->get('radio_logo_font_google') == '1') { ?><?php echo $this->config->get('input_logo_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_logo_font_size') ?>px;
          font-weight: <?php echo $this->config->get('select_logo_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_logo_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_logo_font_transform') ?> ;
          <?php if ($this->config->get('radio_logo_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_logo_font_shadow') ?>;
        <?php } ?>}
      <?php /* Logo // End *************************************/ ?>
    <?php } ?>
		
		<?php /* Bottom Header // Start ***************************/ ?>
      <?php if ($this->config->get('radio_bottom_h_color_options') == '1') { ?>
          <?php if ($this->config->get('radio_bottom_header_bg_pattern_image') == '0'){ ?>
            #header-bottom {background: <?php if ($this->config->get('radio_bottom_header_color_transparent') == '0') { ?>#<?php echo $this->config->get('input_bottom_header_bg_color');?><?php } ?> url('catalog/view/theme/agnes/image/layout/pattern/<?php echo $this->config->get('select_bottom_header_pattern') ?>.png') repeat;}
          <?php } else if ($this->config->get('radio_bottom_header_bg_pattern_image') == '1'){ ?>
            #header-bottom {background: <?php if ($this->config->get('radio_bottom_header_color_transparent') == '0') { ?>#<?php echo $this->config->get('input_bottom_header_bg_color');?><?php } ?>url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_bottom_header_bg_pattern_image') ?>") repeat;}
          <?php } ?>
						<?php if ($this->config->get('select_bottom_header_slightly_transparent') != 'none') { ?> #header-bottom {background: url("catalog/view/theme/agnes/image/layout/t_color/<?php echo  $this->config->get('select_bottom_header_slightly_transparent');?>.png") repeat;}<?php } ?>
      <?php } ?>
    <?php /* Bottom Header // End *****************************/ ?>
  <?php } ?>
<?php /* Header // End ***********************************/ ?>



<?php /* Link // Start ***********************************/ ?>
  <?php if (($this->config->get('select_link_status') == '1') && ($this->config->get('tsettings_status') == '1')) { ?>
    <?php if ($this->config->get('radio_link_color_options') == '1') { ?>
        #header-links {background: <?php if ($this->config->get('radio_link_color_transparent') != 'transparent') { ?>#<?php echo $this->config->get('input_link_color') ?><?php } else if ($this->config->get('radio_link_color_transparent') == 'transparent') { ?><?php echo $this->config->get('radio_link_color_transparent') ?><?php } ?>;border-top: <?php echo $this->config->get('input_link_border_top') ?>px solid #<?php echo $this->config->get('input_link_border_color') ?>; border-right: <?php echo $this->config->get('input_link_border_right') ?>px solid #<?php echo $this->config->get('input_link_border_color') ?>; border-bottom: <?php echo $this->config->get('input_link_border_bottom') ?>px solid #<?php echo $this->config->get('input_link_border_color') ?>; border-left: <?php echo $this->config->get('input_link_border_left') ?>px solid #<?php echo $this->config->get('input_link_border_color') ?>;}
      <?php if ($this->config->get('select_link_bg_pattern') != 'none') { ?>
        #header-links{background: <?php if ($this->config->get('radio_link_color_transparent') != 'transparent') { ?>#<?php echo $this->config->get('input_link_color') ?><?php } else if ($this->config->get('radio_link_color_transparent') == 'transparent') { ?><?php echo $this->config->get('radio_link_color_transparent') ?><?php } ?> url('catalog/view/theme/agnes/image/layout/header/<?php echo $this->config->get('select_link_bg_pattern') ?>.png') repeat;}
      <?php } ?>
      
      <?php if ($this->config->get('radio_link_pattern_image') == '1') { ?>
        #header-links {background: <?php if ($this->config->get('radio_link_color_transparent') != 'transparent') { ?>#<?php echo $this->config->get('input_link_color') ?><?php } else if ($this->config->get('radio_link_color_transparent') == 'transparent') { ?><?php echo $this->config->get('radio_link_color_transparent') ?><?php } ?> url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_link_pattern_image') ?>") repeat;}
      <?php } ?>
      
      <?php if (($this->config->get('radio_link_color_transparent') == '0') && ($this->config->get('select_link_bg_pattern') == 'none')) { ?>
        #header-links {background-color: #<?php echo $this->config->get('input_link_color') ?>;}
      <?php } ?>
			
			<?php if ($this->config->get('select_link_slightly_transparent') != 'none') { ?>#header-links {background: url("catalog/view/theme/agnes/image/layout/t_color/<?php echo  $this->config->get('select_link_slightly_transparent');?>.png") repeat;}<?php } ?>
    <?php } ?>
    
    <?php if ($this->config->get('radio_link_color_sub_options') == '1') { ?>
      <?php if ($this->config->get('radio_link_color_sub_transparent') == 'transparent') { ?>
        #switcher > ul > li > div, #links > ul > li > div { background: <?php echo $this->config->get('radio_link_color_sub_transparent') ?> <?php if ($this->config->get('radio_sub_link_pattern_image') == '1') { ?>url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_sub_link_pattern_image') ?>") repeat<?php } ?>;}
      <?php } else if ($this->config->get('radio_link_color_sub_transparent') == '0') { ?>
        #switcher > ul > li > div, #links > ul > li > div { background: #<?php echo $this->config->get('input_link_color_sub') ?> <?php if ($this->config->get('radio_sub_link_pattern_image') == '1') { ?>url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_sub_link_pattern_image') ?>") repeat<?php } ?>;}
      <?php } ?>
      #switcher > ul > li > div, #links > ul > li > div {border-top: <?php echo $this->config->get('input_link_sub_border_top') ?>px solid #<?php echo $this->config->get('input_link_sub_border_color') ?>; border-right: <?php echo $this->config->get('input_link_sub_border_right') ?>px solid #<?php echo $this->config->get('input_link_sub_border_color') ?>; border-bottom: <?php echo $this->config->get('input_link_sub_border_bottom') ?>px solid #<?php echo $this->config->get('input_link_sub_border_color') ?>; border-left: <?php echo $this->config->get('input_link_sub_border_left') ?>px solid #<?php echo $this->config->get('input_link_sub_border_color') ?>; <?php if ($this->config->get('radio_link_shadow') == "1") { ?> -moz-box-shadow: 0px 3px <?php echo $this->config->get('input_link_shadow_size') ?>px rgba(0, 0, 0, 0.2); -webkit-box-shadow: 0px 3px <?php echo $this->config->get('input_link_shadow_size') ?>px rgba(0, 0, 0, 0.2); box-shadow: 0px 3px <?php echo $this->config->get('input_link_shadow_size') ?>px rgba(0, 0, 0, 0.2);  <?php } else if ($this->config->get('radio_link_shadow') == '0') { ?> -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none; <?php } ?>}
    	<?php if ($this->config->get('select_link_sub_slightly_transparent') != 'none') { ?>#switcher > ul > li > div, #links > ul > li > div  {background: url("catalog/view/theme/agnes/image/layout/t_color/<?php echo  $this->config->get('select_link_sub_slightly_transparent');?>.png") repeat;}<?php } ?>
		<?php } ?>
          
    <?php if ($this->config->get('radio_link_position_options') == '1') { ?>
      #header-links {<?php if ($this->config->get('radio_link_position') == '1') { ?>position: absolute; top: <?php echo $this->config->get('input_link_position_top') ?>px; right: <?php echo $this->config->get('input_link_position_right') ?>px; z-index: 100; width: auto;<?php } ?>}
      <?php if ($this->config->get('radio_link_align') == '0') { ?>
      #links {float: right;}
      #links > ul > li > div {right: 0px;}
      <?php } ?>
		
    <?php } ?>
    
    <?php if ($this->config->get('radio_link_text_spacing_options') == '1') { ?>
      #switcher > ul > li > a, #links > ul > li > a, #links > ul > li #home-i {padding: <?php echo $this->config->get('input_link_text_spacing_topbottom') ?>px <?php echo $this->config->get('input_link_text_spacing_leftright') ?>px <?php echo $this->config->get('input_link_text_spacing_topbottom') ?>px <?php echo $this->config->get('input_link_text_spacing_leftright') ?>px;}
      #switcher > ul > li ul > li > a, #links > ul > li ul > li > a {padding: <?php echo $this->config->get('input_link_text_sub_spacing_topbottom') ?>px <?php echo $this->config->get('input_link_text_sub_spacing_leftright') ?>px <?php echo $this->config->get('input_link_text_sub_spacing_topbottom') ?>px <?php echo $this->config->get('input_link_text_sub_spacing_leftright') ?>px;}
    <?php } ?>

    <?php if ($this->config->get('radio_link_options') == '1') { ?>
      #links #home-i {background: url('catalog/view/theme/agnes/image/layout/header/<?php echo $this->config->get('radio_link_home_icon') ?>.png') center center no-repeat;}
      #links #home-i:hover {background: url('catalog/view/theme/agnes/image/layout/header/<?php echo $this->config->get('radio_link_home_icon_hover') ?>.png') center center no-repeat;}	
    <?php } ?>

    <?php if ($this->config->get('radio_style_link_options') == '1') { ?>
      #switcher > ul > li > a, #links > ul > li > a, #links > ul > li #home-i, .mobile-link-tab, .mobile-link > ul > li > span {
      font-family: <?php if ($this->config->get('radio_link_font_google') == '0') { ?><?php echo $this->config->get('select_link_font_family') ?>;<?php } else if ($this->config->get('radio_link_font_google') == '1') { ?><?php echo $this->config->get('input_link_font_google') ?>;<?php } ?>
      font-size: <?php echo $this->config->get('input_link_font_size') ?>px;
      color: #<?php echo $this->config->get('input_link_text_color') ?> !important;
      font-weight: <?php echo $this->config->get('select_link_font_weight') ?>;
      font-style: <?php echo $this->config->get('select_link_font_style') ?>;
      text-transform: <?php echo $this->config->get('select_link_font_transform') ?> ;
      <?php if ($this->config->get('radio_link_font_shadow') == '1') { ?>
      text-shadow: <?php echo $this->config->get('input_link_font_shadow') ?>;
      <?php } ?>
      }
      #switcher > ul > li > a:hover, #links > ul > li > a:hover, .mobile-link-tab:hover, .mobile-link > ul > li > span:hover {color: #<?php echo $this->config->get('input_link_text_color_hover') ?>;}
      #switcher > ul > li:hover > a, #links > ul > li:hover > a, #links > ul > li:hover > a.none, #links > ul > li:hover > a#home-i {<?php if ($this->config->get('radio_link_text_background_transparent') == '0') { ?>background-color: #<?php echo $this->config->get('input_link_background_color_hover') ?>;<?php } ?> color: #<?php echo $this->config->get('input_link_text_color_hover') ?>; }
      #switcher > ul > li > a, #links > ul > li > a, #links > ul > li #home-i {<?php if ($this->config->get('radio_link_text_background_transparent') == '0') { ?>background-color: #<?php echo $this->config->get('input_link_background_color') ?>;<?php } ?>}
    <?php } ?>
    
    <?php if ($this->config->get('radio_style_sub_link_options') == '1') { ?>
      #switcher > ul > li ul > li > a, #links > ul > li ul > li > a, .mobile-link > ul > li ul > li > a {
      font-family: <?php if ($this->config->get('radio_sub_link_font_google') == '0') { ?><?php echo $this->config->get('select_sub_link_font_family') ?>;<?php } else if ($this->config->get('radio_sub_link_font_google') == '1') { ?><?php echo $this->config->get('input_sub_link_font_google') ?>;<?php } ?>
      font-size: <?php echo $this->config->get('input_link_sub_text_size') ?>px;
      color: #<?php echo $this->config->get('input_link_sub_text_color') ?> !important;
      font-weight: <?php echo $this->config->get('select_sub_link_font_weight') ?>;
      font-style: <?php echo $this->config->get('select_sub_link_font_style') ?>;
      text-transform: <?php echo $this->config->get('select_sub_link_font_transform') ?> ;
      <?php if ($this->config->get('radio_sub_link_font_shadow') == '1') { ?>
      text-shadow: <?php echo $this->config->get('input_sub_link_font_shadow') ?>;
      <?php } ?>
      }
      #switcher > ul > li ul > li > a:hover, #links > ul > li ul > li > a:hover, .mobile-link > ul > li ul > li > a:hover { color: #<?php echo $this->config->get('input_link_sub_text_color_hover') ?> !important; background-color: #<?php echo $this->config->get('input_link_sub_background_color_hover') ?> !important;}
    <?php } ?>
  <?php } ?>
<?php /* Link // End *************************************/ ?>



<?php /* Menu // Start ***********************************/ ?>
  <?php if(($this->config->get('select_menu_status') == '1') && ($this->config->get('tsettings_status') == '1')){ ?>
    <?php if ($this->config->get('radio_menu_color_options') == '1') { ?>
      <?php if ($this->config->get('radio_menu_pattern_image') == '0'){ ?>
        #menu {background: <?php if ($this->config->get('radio_menu_color_transparent') == '0') { ?>#<?php echo $this->config->get('input_menu_color');?><?php } ?> url('catalog/view/theme/agnes/image/layout/pattern/<?php echo $this->config->get('select_menu_pattern') ?>.png') repeat; <?php if ($this->config->get('input_menu_border_top') != '0'){ ?>border-top: <?php echo $this->config->get('input_menu_border_top');?>px solid #<?php echo $this->config->get('input_menu_border_color');?>;<?php } ?> <?php if ($this->config->get('input_menu_border_right') != '0'){ ?>border-right: <?php echo $this->config->get('input_menu_border_right');?>px solid #<?php echo $this->config->get('input_menu_border_color');?>;<?php } ?> <?php if ($this->config->get('input_menu_border_bottom') != '0'){ ?>border-bottom: <?php echo $this->config->get('input_menu_border_bottom');?>px solid #<?php echo $this->config->get('input_menu_border_color');?>;<?php } ?> <?php if ($this->config->get('input_menu_border_left') != '0'){ ?>border-left: <?php echo $this->config->get('input_menu_border_left');?>px solid #<?php echo $this->config->get('input_menu_border_color');?>;<?php } ?>}
      <?php } else if ($this->config->get('radio_menu_pattern_image') == '1'){ ?>
        #menu {background: <?php if ($this->config->get('radio_menu_color_transparent') == '0') { ?>#<?php echo $this->config->get('input_menu_color');?><?php } ?> url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_menu_pattern_image') ?>") repeat; <?php if ($this->config->get('input_menu_border_top') != '0'){ ?>border-top: <?php echo $this->config->get('input_menu_border_top');?>px solid #<?php echo $this->config->get('input_menu_border_color');?>;<?php } ?> <?php if ($this->config->get('input_menu_border_right') != '0'){ ?>border-right: <?php echo $this->config->get('input_menu_border_right');?>px solid #<?php echo $this->config->get('input_menu_border_color');?>;<?php } ?> <?php if ($this->config->get('input_menu_border_bottom') != '0'){ ?>border-bottom: <?php echo $this->config->get('input_menu_border_bottom');?>px solid #<?php echo $this->config->get('input_menu_border_color');?>;<?php } ?> <?php if ($this->config->get('input_menu_border_left') != '0'){ ?>border-left: <?php echo $this->config->get('input_menu_border_left');?>px solid #<?php echo $this->config->get('input_menu_border_color');?>;<?php } ?>}
      <?php } ?>
    <?php } ?>
    
    <?php if ($this->config->get('radio_menu_color_sub_options') == '1') { ?>
      <?php if ($this->config->get('radio_sub_menu_pattern_image') == '0'){ ?>
        #menu > ul > li > div {background: <?php if ($this->config->get('radio_menu_color_sub_transparent') == '0') { ?>#<?php echo $this->config->get('input_menu_color_sub');?><?php } ?> url('catalog/view/theme/agnes/image/layout/pattern/<?php echo $this->config->get('select_menu_pattern_sub') ?>.png') repeat; <?php if ($this->config->get('input_menu_sub_border_top') != '0'){ ?>border-top: <?php echo $this->config->get('input_menu_sub_border_top');?>px solid #<?php echo $this->config->get('input_menu_sub_border_color');?>;<?php } ?> <?php if ($this->config->get('input_menu_sub_border_right') != '0'){ ?>border-right: <?php echo $this->config->get('input_menu_sub_border_right');?>px solid #<?php echo $this->config->get('input_menu_sub_border_color');?>;<?php } ?> <?php if ($this->config->get('input_menu_sub_border_bottom') != '0'){ ?>border-bottom: <?php echo $this->config->get('input_menu_sub_border_bottom');?>px solid #<?php echo $this->config->get('input_menu_sub_border_color');?>;<?php } ?> <?php if ($this->config->get('input_menu_sub_border_left') != '0'){ ?>border-left: <?php echo $this->config->get('input_menu_sub_border_left');?>px solid #<?php echo $this->config->get('input_menu_sub_border_color');?>;<?php } ?> <?php if ($this->config->get('radio_menu_sub_shadow') == '1'){ ?>-moz-box-shadow: 0px 3px <?php echo $this->config->get('input_menu_shadow_size');?>px rgba(0, 0, 0, 0.2); -webkit-box-shadow: 0px 3px <?php echo $this->config->get('input_menu_shadow_size');?>px rgba(0, 0, 0, 0.2);box-shadow: 0px 3px <?php echo $this->config->get('input_menu_shadow_size');?>px rgba(0, 0, 0, 0.2);<?php } ?>}
      <?php } else if ($this->config->get('radio_sub_menu_pattern_image') == '1'){ ?>
        #menu > ul > li > div {background: <?php if ($this->config->get('radio_menu_color_sub_transparent') == '0') { ?>#<?php echo $this->config->get('input_menu_color_sub');?><?php } ?> url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_sub_menu_pattern_image') ?>") repeat; <?php if ($this->config->get('input_menu_sub_border_top') != '0'){ ?>border-top: <?php echo $this->config->get('input_menu_sub_border_top');?>px solid #<?php echo $this->config->get('input_menu_sub_border_color');?>;<?php } ?> <?php if ($this->config->get('input_menu_sub_border_right') != '0'){ ?>border-right: <?php echo $this->config->get('input_menu_sub_border_right');?>px solid #<?php echo $this->config->get('input_menu_sub_border_color');?>;<?php } ?> <?php if ($this->config->get('input_menu_sub_border_bottom') != '0'){ ?>border-bottom: <?php echo $this->config->get('input_menu_sub_border_bottom');?>px solid #<?php echo $this->config->get('input_menu_sub_border_color');?>;<?php } ?> <?php if ($this->config->get('input_menu_sub_border_left') != '0'){ ?>border-left: <?php echo $this->config->get('input_menu_sub_border_left');?>px solid #<?php echo $this->config->get('input_menu_sub_border_color');?>;<?php } ?> <?php if ($this->config->get('radio_menu_sub_shadow') == '1'){ ?>-moz-box-shadow: 0px 3px <?php echo $this->config->get('input_menu_shadow_size');?>px rgba(0, 0, 0, 0.2); -webkit-box-shadow: 0px 3px <?php echo $this->config->get('input_menu_shadow_size');?>px rgba(0, 0, 0, 0.2);box-shadow: 0px 3px <?php echo $this->config->get('input_menu_shadow_size');?>px rgba(0, 0, 0, 0.2);<?php } ?>}
      <?php } ?>
    <?php } ?>
    
    <?php if ($this->config->get('radio_menu_spacing_options') == '1') { ?>
      #menu > ul > li > a {padding: <?php echo $this->config->get('input_menu_font_spacing_topbottom') ?>px <?php echo $this->config->get('input_menu_font_spacing_leftright') ?>px <?php echo $this->config->get('input_menu_font_spacing_topbottom') ?>px <?php echo $this->config->get('input_menu_font_spacing_leftright') ?>px;}
      #menu > ul > li > div > ul > li > a, #full-menu > ul > li > div > ul > span > li > a {padding: <?php echo $this->config->get('input_menu_font_sub_spacing_topbottom') ?>px <?php echo $this->config->get('input_menu_font_sub_spacing_leftright') ?>px <?php echo $this->config->get('input_menu_font_sub_spacing_topbottom') ?>px <?php echo $this->config->get('input_menu_font_sub_spacing_leftright') ?>px;}
      #full-menu > ul > li ul > li > a {padding: <?php echo $this->config->get('input_menu_font_sub_level3_spacing_topbottom') ?>px <?php echo $this->config->get('input_menu_font_sub_level3_spacing_leftright') ?>px <?php echo $this->config->get('input_menu_font_sub_level3_spacing_topbottom') ?>px <?php echo $this->config->get('input_menu_font_sub_level3_spacing_leftright') ?>px;}
    <?php } ?>

    <?php if ($this->config->get('radio_menu_font_options') == '1') { ?>
      #menu > ul > li > a, .mobile-menu > ul > li > a, .mobile-menu-tab {
        font-family: <?php if ($this->config->get('radio_menu_font_google') == '0') { ?><?php echo $this->config->get('select_menu_font_family') ?>;<?php } else if ($this->config->get('radio_menu_font_google') == '1') { ?><?php echo $this->config->get('input_menu_font_google') ?>;<?php } ?>
        font-size: <?php echo $this->config->get('input_menu_font_size') ?>px;
        color: #<?php echo $this->config->get('input_menu_font_color') ?> !important;
        font-weight: <?php echo $this->config->get('select_menu_font_weight') ?>;
        font-style: <?php echo $this->config->get('select_menu_font_style') ?>;
        text-transform: <?php echo $this->config->get('select_menu_font_transform') ?>;
        <?php if ($this->config->get('radio_menu_font_shadow') == '1') { ?>
        text-shadow: <?php echo $this->config->get('input_menu_font_shadow') ?> !important;
      <?php } ?>}
      #menu > ul > li > a:hover, .mobile-menu > ul > li > a:hover, .mobile-menu-tab:hover {color: #<?php echo $this->config->get('input_menu_font_color_hover') ?> !important;}
    <?php } ?>

    <?php if ($this->config->get('radio_menu_sub_font_options') == '1') { ?>
      #menu > ul > li > div > ul > li > a, #full-menu > ul > li > div > ul > span > li > a, .mobile-menu > ul > li ul > li > a {
        font-family: <?php if ($this->config->get('radio_menu_sub_font_google') == '0') { ?><?php echo $this->config->get('select_menu_sub_font_family') ?>;<?php } else if ($this->config->get('radio_menu_sub_font_google') == '1') { ?><?php echo $this->config->get('input_menu_sub_font_google') ?>;<?php } ?>
        font-size: <?php echo $this->config->get('input_menu_sub_font_size') ?>px;
        color: #<?php echo $this->config->get('input_menu_sub_font_color') ?> !important;
        font-weight: <?php echo $this->config->get('select_menu_sub_font_weight') ?>;
        font-style: <?php echo $this->config->get('select_menu_sub_font_style') ?>;
        text-transform: <?php echo $this->config->get('select_menu_sub_font_transform') ?> ;
        <?php if ($this->config->get('radio_menu_sub_font_shadow') == '1') { ?>
        text-shadow: <?php echo $this->config->get('input_menu_sub_font_shadow') ?>;
      <?php } ?>}
      #menu > ul > li > div >ul > li > a:hover, #full-menu > ul > li > div > ul > span > li > a:hover, .mobile-menu > ul > li ul > li > a:hover {color: #<?php echo $this->config->get('input_menu_sub_font_color_hover') ?> !important;}
    <?php } ?>

    <?php if ($this->config->get('radio_menu_sub_level3_font_options') == '1') { ?>
      #full-menu > ul > li ul > li > a {
        font-family: <?php if ($this->config->get('radio_menu_sub_level3_font_google') == '0') { ?><?php echo $this->config->get('select_menu_sub_level3_font_family') ?>;<?php } else if ($this->config->get('radio_menu_sub_level3_font_google') == '1') { ?><?php echo $this->config->get('input_menu_sub_level3_font_google') ?>;<?php } ?>
        font-size: <?php echo $this->config->get('input_menu_sub_level3_font_size') ?>px;
        color: #<?php echo $this->config->get('input_menu_sub_level3_font_color') ?>;
        font-weight: <?php echo $this->config->get('select_menu_sub_level3_font_weight') ?>;
        font-style: <?php echo $this->config->get('select_menu_sub_level3_font_style') ?>;
        text-transform: <?php echo $this->config->get('select_menu_sub_level3_font_transform') ?> ;
        <?php if ($this->config->get('radio_menu_sub_level3_font_shadow') == '1') { ?>
        text-shadow: <?php echo $this->config->get('input_menu_sub_level3_font_shadow') ?>;
      <?php } ?>}
      #full-menu > ul > li ul > li > a:hover {color: #<?php echo $this->config->get('input_menu_sub_level3_font_color_hover') ?>;}
    <?php } ?>
  <?php } ?>
<?php /* Menu // End *************************************/ ?>



<?php /* Body // Start ***********************************/ ?>
  <?php if ($this->config->get('select_body_status') == '1') { ?>
    <?php if ($this->config->get('radio_body_options') == '1') { ?>
    
      <?php if ($this->config->get('radio_body_color_transparent') != 'transparent') { ?>
        #container {background-color: #<?php echo $this->config->get('input_body_color');?>;
        
        <?php if ($this->config->get('radio_body_border') == '1') { ?>
          <?php if ($this->config->get('input_body_border_top') != '0') { ?>
            border-top: <?php echo $this->config->get('input_body_border_top');?>px solid #<?php echo $this->config->get('input_body_border_color');?>;
          <?php } ?>
          
          <?php if ($this->config->get('input_body_border_right') != '0') { ?>
            border-right: <?php echo $this->config->get('input_body_border_right');?>px solid #<?php echo $this->config->get('input_body_border_color');?>;
          <?php } ?>
          
          <?php if ($this->config->get('input_body_border_bottom') != '0') { ?>
            border-bottom: <?php echo $this->config->get('input_body_border_bottom');?>px solid #<?php echo $this->config->get('input_body_border_color');?>;
          <?php } ?>
          
          <?php if ($this->config->get('input_body_border_left') != '0') { ?>
          border-left: <?php echo $this->config->get('input_body_border_left');?>px solid #<?php echo $this->config->get('input_body_border_color');?>;
          <?php } ?>

        <?php } ?>}
        
        
      <?php } else if ($this->config->get('radio_body_color_transparent') != '0') { ?>
      
        #container {background: <?php echo $this->config->get('radio_body_color_transparent') ?> url("catalog/view/theme/agnes/image/layout/t_color/<?php echo  $this->config->get('select_body_color_slightly_transparent');?>.png") repeat;
       
       <?php if ($this->config->get('radio_body_border') == '1') { ?>
          border-top: <?php echo $this->config->get('input_body_border_top');?>px solid #<?php echo $this->config->get('input_body_border_color');?>;
          border-right: <?php echo $this->config->get('input_body_border_right');?>px solid #<?php echo $this->config->get('input_body_border_color');?>;
          border-bottom: <?php echo $this->config->get('input_body_border_bottom');?>px solid #<?php echo $this->config->get('input_body_border_color');?>;
          border-left: <?php echo $this->config->get('input_body_border_left');?>px solid #<?php echo $this->config->get('input_body_border_color');?>;
        <?php } else if ($this->config->get('radio_body_border') == '0') { ?>
          border: none;
        <?php } ?>}
      <?php } ?>
    <?php } ?>
  <?php } ?>
<?php /* Body // End *************************************/ ?>



<?php /* Column & Block // Start *************************/ ?>
  <?php if ($this->config->get('select_column_block_status') == '1') { ?>
    <?php if ($this->config->get('radio_column_options') == '1') { ?>
      #column-left {width: <?php echo  $this->config->get('input_left_column_size');?>px;}
      #column-left + #column-right + #content, #column-left + #content { margin-left: <?php echo  $this->config->get('input_center_column_left');?>px; }
      #column-right + #content { margin-right: <?php echo  $this->config->get('input_center_column_right');?>px; }
      #column-right {width: <?php echo  $this->config->get('input_right_column_size');?>px;}
    <?php } ?>
    
    <?php /* Left Block // Start *****************************/ ?>
      <?php if ($this->config->get('radio_left_block_options') == '1') { ?>
        <?php if ($this->config->get('radio_left_block_transparent') != 'transparent') { ?>
          #column-left .box .box-content, #column-left .side-box .side-box-content {background-color: #<?php echo  $this->config->get('input_left_block_color');?>; <?php if ($this->config->get('radio_left_block_border') == '1') { ?>border-left: 1px solid #<?php echo $this->config->get('input_left_block_border_color');?>; border-right: 1px solid #<?php echo $this->config->get('input_left_block_border_color');?>; border-bottom: 1px solid #<?php echo $this->config->get('input_left_block_border_color');?>;<?php } else if ($this->config->get('radio_left_block_border') == '0') { ?>border: none;<?php } ?>}
        <?php } else if ($this->config->get('radio_left_block_transparent') != '0') { ?>
          #column-left .box .box-content, #column-left .side-box .side-box-content  {background: <?php echo $this->config->get('radio_left_block_transparent') ?> url("catalog/view/theme/agnes/image/layout/t_color/<?php echo  $this->config->get('select_left_block_slightly_transparent');?>.png") repeat; <?php if ($this->config->get('radio_left_block_border') == '1') { ?>border-left: 1px solid #<?php echo $this->config->get('input_left_block_border_color');?>; border-right: 1px solid #<?php echo $this->config->get('input_left_block_border_color');?>; border-bottom: 1px solid #<?php echo $this->config->get('input_left_block_border_color');?>;<?php } else if ($this->config->get('radio_left_block_border') == '0') { ?>border: none;<?php } ?>}
        <?php } ?>
      <?php } ?>
    <?php /* Left Block // End *******************************/ ?>
    
    <?php /* Middle Block // Start ***************************/ ?>
      <?php if ($this->config->get('radio_middle_block_options') == '1') { ?>
        <?php if ($this->config->get('radio_middle_block_transparent') != 'transparent') { ?>
          #content .box .box-content {background-color: #<?php echo  $this->config->get('input_middle_block_color');?>; <?php if ($this->config->get('radio_middle_block_border') == '1') { ?>border-left: 1px solid #<?php echo $this->config->get('input_middle_block_border_color');?>; border-right: 1px solid #<?php echo $this->config->get('input_middle_block_border_color');?>; border-bottom: 1px solid #<?php echo $this->config->get('input_middle_block_border_color');?>;<?php } else if ($this->config->get('radio_middle_block_border') == '0') { ?>border: none;<?php } ?>}
        <?php } else if ($this->config->get('radio_middle_block_transparent') != '0') { ?>
          #content .box .box-content {background: <?php echo $this->config->get('radio_middle_block_transparent') ?> url("catalog/view/theme/agnes/image/layout/t_color/<?php echo  $this->config->get('select_middle_block_slightly_transparent');?>.png") repeat; <?php if ($this->config->get('radio_middle_block_border') == '1') { ?>border-left: 1px solid #<?php echo $this->config->get('input_middle_block_border_color');?>; border-right: 1px solid #<?php echo $this->config->get('input_middle_block_border_color');?>; border-bottom: 1px solid #<?php echo $this->config->get('input_middle_block_border_color');?>;<?php } else if ($this->config->get('radio_middle_block_border') == '0') { ?>border: none;<?php } ?>}
        <?php } ?>
      <?php } ?>
    <?php /* Middle Block // End *****************************/ ?>
    
    <?php /* Right Block // Start ****************************/ ?>
      <?php if ($this->config->get('radio_right_block_options') == '1') { ?>
        <?php if ($this->config->get('radio_right_block_transparent') != 'transparent') { ?>
          #column-right .box .box-content, #column-right .side-box .side-box-content  {background-color: #<?php echo  $this->config->get('input_right_block_color');?>; <?php if ($this->config->get('radio_right_block_border') == '1') { ?>border-left: 1px solid #<?php echo $this->config->get('input_right_block_border_color');?>; border-right: 1px solid #<?php echo $this->config->get('input_right_block_border_color');?>; border-bottom: 1px solid #<?php echo $this->config->get('input_right_block_border_color');?>;<?php } else if ($this->config->get('radio_right_block_border') == '0') { ?>border: none;<?php } ?>}
        <?php } else if ($this->config->get('radio_right_block_transparent') != '0') { ?>
          #column-right .box .box-content, #column-right .side-box .side-box-content  {background: <?php echo $this->config->get('radio_right_block_transparent') ?> url("catalog/view/theme/agnes/image/layout/t_color/<?php echo  $this->config->get('select_right_block_slightly_transparent');?>.png") repeat; <?php if ($this->config->get('radio_right_block_border') == '1') { ?>border-left: 1px solid #<?php echo $this->config->get('input_right_block_border_color');?>; border-right: 1px solid #<?php echo $this->config->get('input_right_block_border_color');?>; border-bottom: 1px solid #<?php echo $this->config->get('input_right_block_border_color');?>;<?php } else if ($this->config->get('radio_right_block_border') == '0') { ?>border: none;<?php } ?>}
        <?php } ?>
      <?php } ?>
    <?php /* Right Block // End ******************************/ ?>
  <?php } ?>
<?php /* Column & Block // End ***************************/ ?>



<?php /* Product Box & Info // Start ***********************/ ?>
  <?php if ($this->config->get('select_product_status') == '1') { ?>
    <?php /* Product Box Shadow // Start ***********************/ ?>
      <?php if ($this->config->get('radio_box_shadow') == '0') { ?>
        .agnes-product > div:hover, .box-product  > div:hover, .product-list > div:hover, .product-grid  > div:hover {-moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;}
      <?php } ?>
    <?php /* Product Box Shadow // End *************************/ ?>
    
    <?php /* Product Box Zoom // Start *************************/ ?>
      <?php if ($this->config->get('radio_box_zoom') == '0') { ?>
        .imageOver {background: none;}
      <?php } ?>
    <?php /* Product Box Zoom // End ***************************/ ?>
		
    <?php /* Product Box size // Start *************************/ ?>
		#content .product-grid > div, #content .agnes-product > div {	width: <?php echo $this->config->get('input_pro_box_size') ?>px;}
		#column-left + #content .product-grid > div, #column-left + #content .agnes-product > div {	width: <?php echo $this->config->get('input_pro_box_size_left') ?>px;}
		#column-right + #content .product-grid > div, #column-right + #content .agnes-product > div {	width: <?php echo $this->config->get('input_pro_box_size_right') ?>px;}
		#column-left + #column-right + #content .product-grid > div, #column-left + #column-right + #content .agnes-product > div {	width: <?php echo $this->config->get('input_pro_box_size_both') ?>px;}
    <?php /* Product Box size // End ***************************/ ?>
    
    <?php /* Buttun Background Color // Start ******************/ ?>
			.agnes-product .div-button, .product-list .list-bottom, .product-grid .div-button {Border-top: 1px solid #<?php echo $this->config->get('input_box_border_line_color') ?>;}
      .button-wishlist, .button-addToCompare, .button-addToCart { background-color: #<?php echo $this->config->get('input_box_bg_color') ?>;}
      .button-wishlist:hover {background-color: #<?php echo $this->config->get('input_box_wish_list_bg_color') ?>;}
      .button-addToCompare:hover {background-color: #<?php echo $this->config->get('input_box_compare_bg_color') ?>;}
      .button-addToCart:hover {background-color: #<?php echo $this->config->get('input_box_cart_bg_color') ?>;}
    <?php /* Buttun Background Color // End ********************/ ?>
    
    <?php /* Product Box Name // Start *************************/ ?>
      <?php if ($this->config->get('radio_pro_box_name_font_options') == '1') { ?>
        .agnes-product .name a {
          font-family: <?php if ($this->config->get('radio_pro_box_name_font_google') == '0') { ?><?php echo $this->config->get('select_pro_box_name_font_family') ?>;<?php } else if ($this->config->get('radio_pro_box_name_font_google') == '1') { ?><?php echo $this->config->get('input_pro_box_name_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_pro_box_name_font_size') ?>px;
          color: #<?php echo $this->config->get('input_pro_box_name_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_pro_box_name_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_pro_box_name_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_pro_box_name_font_transform') ?> ;
          <?php if ($this->config->get('radio_pro_box_name_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_pro_box_name_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* Product Box Name // End ***************************/ ?>
    
    <?php /* Product Box Old Price // Start ********************/ ?>
      <?php if ($this->config->get('radio_pro_old_price_font_options') == '1') { ?>
        .agnes-product .price-old {
          font-family: <?php if ($this->config->get('radio_pro_old_price_font_google') == '0') { ?><?php echo $this->config->get('select_pro_old_price_font_family') ?>;<?php } else if ($this->config->get('radio_pro_old_price_font_google') == '1') { ?><?php echo $this->config->get('input_pro_old_price_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_pro_old_price_font_size') ?>px;
          color: #<?php echo $this->config->get('input_pro_old_price_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_pro_old_price_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_pro_old_price_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_pro_old_price_font_transform') ?> ;
          <?php if ($this->config->get('radio_pro_old_price_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_pro_old_price_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* Product Box Old Price // End **********************/ ?>
    
    <?php /* Product Box Price // Start ************************/ ?>
      <?php if ($this->config->get('radio_pro_price_font_options') == '1') { ?>
        .agnes-product .price-new,  .agnes-product .price {
          font-family: <?php if ($this->config->get('radio_pro_price_font_google') == '0') { ?><?php echo $this->config->get('select_pro_price_font_family') ?>;<?php } else if ($this->config->get('radio_pro_price_font_google') == '1') { ?><?php echo $this->config->get('input_pro_price_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_pro_price_font_size') ?>px;
          color: #<?php echo $this->config->get('input_pro_price_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_pro_price_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_pro_price_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_pro_price_font_transform') ?> ;
          <?php if ($this->config->get('radio_pro_price_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_pro_price_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* Product Box Price // End **************************/ ?>
    
    <?php /* Product info Breadcrumb // Start ****************/ ?>
      <?php if ($this->config->get('radio_prod_info_bread_options') == '1') { ?>
        <?php if ($this->config->get('radio_prod_info_bread_full_background_image') == '0'){ ?>
          <?php if (($this->config->get('radio_prod_info_bread_full_background_image') == '0') && ($this->config->get('radio_prod_info_bread_bg_pattern_image') == '0')){ ?>
            .agnes-breadcrumb {background: <?php if ($this->config->get('radio_prod_info_bread_bg_color_transparent') == '0') { ?>#<?php echo $this->config->get('input_prod_info_bread_bg_color');?><?php } ?> url('catalog/view/theme/agnes/image/layout/pattern/<?php echo $this->config->get('select_prod_info_bread_bg_pattern') ?>.png') repeat;}
          <?php } else if ($this->config->get('radio_prod_info_bread_bg_pattern_image') == '1'){ ?>
            .agnes-breadcrumb {background: <?php if ($this->config->get('radio_prod_info_bread_bg_color_transparent') == '0') { ?>#<?php echo $this->config->get('input_prod_info_bread_bg_color');?><?php } ?> url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_prod_info_bread_bg_pattern_image') ?>") repeat;}
          <?php } ?>
        <?php } else if ($this->config->get('radio_prod_info_bread_full_background_image') == '1'){ ?>
          .agnes-breadcrumb {background: <?php if ($this->config->get('radio_prod_info_bread_bg_color_transparent') == '0') { ?>#<?php echo $this->config->get('input_prod_info_bread_bg_color');?><?php } ?> url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_prod_info_bread_full_bg_image') ?>") repeat ;}
        <?php } ?>
      <?php } ?>
    <?php /* Product info Breadcrumb // End ******************/ ?>
    
    <?php /* Product info Tabs // Start **********************/ ?>
      <?php if ($this->config->get('radio_prod_info_tabs_options') == '1') { ?>
        .htabs a {background-color: #<?php echo $this->config->get('input_prod_info_tab_bg_color') ?>;}
        .htabs a:hover {background-color: #<?php echo $this->config->get('input_prod_info_tab_hover_bg_color') ?>;}
        .htabs a.selected {background-color: #<?php echo $this->config->get('input_prod_info_tab_selected_bg_color') ?>;}
      <?php } ?>
      
      <?php if ($this->config->get('radio_tab_font_options') == '1') { ?>
        .htabs a {
          font-family: <?php if ($this->config->get('radio_tab_font_google') == '0') { ?><?php echo $this->config->get('select_tab_font_family') ?>;<?php } else if ($this->config->get('radio_tab_font_google') == '1') { ?><?php echo $this->config->get('input_tab_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_tab_font_size') ?>px;
          color: #<?php echo $this->config->get('input_tab_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_tab_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_tab_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_tab_font_transform') ?> ;
          <?php if ($this->config->get('radio_tab_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_tab_font_shadow') ?>;
        <?php } ?>}
        .htabs a:hover {color: #<?php echo $this->config->get('input_tab_hover_font_color') ?>;}
        .htabs a.selected {color: #<?php echo $this->config->get('input_tab_selected_font_color') ?>;}
      <?php } ?>
    <?php /* Product info Tabs // End ************************/ ?>

    
    <?php /* Product info Button // Start ********************/ ?>
      <?php if ($this->config->get('radio_prod_info_button_options') == '1') { ?>
        input.cart-button { background-color: #<?php echo $this->config->get('input_prod_info_button_bg_color') ?>;}
        input.cart-button:hover { background-color: #<?php echo $this->config->get('input_prod_info_button_hover_bg_color') ?>; -webkit-transition: 0.3s ease all; -moz-transition: 0.3s ease all; -ms-transition: 0.3s ease all; -o-transition: 0.3s ease all; transition: 0.3s ease all;}
      <?php } ?>
    <?php /* Product info Button // End **********************/ ?>
    
    
    <?php /* Product info Name // Start ************************/ ?>
      <?php if ($this->config->get('radio_pro_info_name_font_options') == '1') { ?>
        .agnes-breadcrumb .h1 {
          font-family: <?php if ($this->config->get('radio_pro_info_name_font_google') == '0') { ?><?php echo $this->config->get('select_pro_info_name_font_family') ?>;<?php } else if ($this->config->get('radio_pro_info_name_font_google') == '1') { ?><?php echo $this->config->get('input_pro_info_name_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_pro_info_name_font_size') ?>px;
          color: #<?php echo $this->config->get('input_pro_info_name_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_pro_info_name_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_pro_info_name_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_pro_info_name_font_transform') ?> ;
          <?php if ($this->config->get('radio_pro_info_name_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_pro_info_name_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* Product info Name // End **************************/ ?>
    
    <?php /* Product info Breadcrumb Hyperlink Font // Start ***/ ?>
      <?php if ($this->config->get('radio_pro_info_bread_a_font_options') == '1') { ?>
        .agnes-breadcrumb span, .agnes-breadcrumb a {
          font-family: <?php if ($this->config->get('radio_pro_info_bread_a_font_google') == '0') { ?><?php echo $this->config->get('select_pro_info_bread_a_font_family') ?>;<?php } else if ($this->config->get('radio_pro_info_bread_a_font_google') == '1') { ?><?php echo $this->config->get('input_pro_info_bread_a_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_pro_info_bread_a_font_size') ?>px;
          color: #<?php echo $this->config->get('input_pro_info_bread_a_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_pro_info_bread_a_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_pro_info_bread_a_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_pro_info_bread_a_font_transform') ?> ;
          <?php if ($this->config->get('radio_pro_info_bread_a_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_pro_info_bread_a_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* Product info Breadcrumb Hyperlink Font // End *****/ ?>
    
    <?php /* Product info Old Price // Start *******************/ ?>
      <?php if ($this->config->get('radio_pro_info_old_price_font_options') == '1') { ?>
        .product-info .price-old {
          font-family: <?php if ($this->config->get('radio_pro_info_old_price_font_google') == '0') { ?><?php echo $this->config->get('select_pro_info_old_price_font_family') ?>;<?php } else if ($this->config->get('radio_pro_info_old_price_font_google') == '1') { ?><?php echo $this->config->get('input_pro_info_old_price_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_pro_info_old_price_font_size') ?>px;
          color: #<?php echo $this->config->get('input_pro_info_old_price_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_pro_info_old_price_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_pro_info_old_price_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_pro_info_old_price_font_transform') ?> ;
          <?php if ($this->config->get('radio_pro_info_old_price_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_pro_info_old_price_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* Product info Old Price // End *********************/ ?>
    
    <?php /* Product info Price // Start ***********************/ ?>
      <?php if ($this->config->get('radio_pro_info_price_font_options') == '1') { ?>
        .product-info .other-price, .product-info .price-new {
          font-family: <?php if ($this->config->get('radio_pro_info_price_font_google') == '0') { ?><?php echo $this->config->get('select_pro_info_price_font_family') ?>;<?php } else if ($this->config->get('radio_pro_info_price_font_google') == '1') { ?><?php echo $this->config->get('input_pro_info_price_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_pro_info_price_font_size') ?>px;
          color: #<?php echo $this->config->get('input_pro_info_price_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_pro_info_price_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_pro_info_price_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_pro_info_price_font_transform') ?> ;
          <?php if ($this->config->get('radio_pro_info_price_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_pro_info_price_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* Product info Price // End ***********************/ ?>
    
    <?php /* Product info Paragraphs // Start ****************/ ?>
      <?php if ($this->config->get('radio_pro_info_p_font_options') == '1') { ?>
        .product-info .description, .product-info .price .price-tax,  .product-info .price .reward, .product-info .price .discount, .product-info .options h2, .product-info .options b, .product-info .cart div, .product-info .cart .ore, .product-info .cart .minimum {
          font-family: <?php if ($this->config->get('radio_pro_info_p_font_google') == '0') { ?><?php echo $this->config->get('select_pro_info_p_font_family') ?>;<?php } else if ($this->config->get('radio_pro_info_p_font_google') == '1') { ?><?php echo $this->config->get('input_pro_info_p_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_pro_info_p_font_size') ?>px;
          color: #<?php echo $this->config->get('input_pro_info_p_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_pro_info_p_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_pro_info_p_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_pro_info_p_font_transform') ?> ;
          <?php if ($this->config->get('radio_pro_info_p_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_pro_info_p_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* Product info Paragraphs // End ******************/ ?>
    
    <?php /* Product info Paragraphs Hyperlink // Start ******/ ?>
      <?php if ($this->config->get('radio_pro_info_p_a_font_options') == '1') { ?>
         .product-info .description span, .product-info .description span a, .product-info .options, .product-info .add-box a, .product-info .review a{
          font-family: <?php if ($this->config->get('radio_pro_info_p_a_font_google') == '0') { ?><?php echo $this->config->get('select_pro_info_p_a_font_family') ?>;<?php } else if ($this->config->get('radio_pro_info_p_a_font_google') == '1') { ?><?php echo $this->config->get('input_pro_info_p_a_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_pro_info_p_a_font_size') ?>px;
          color: #<?php echo $this->config->get('input_pro_info_p_a_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_pro_info_p_a_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_pro_info_p_a_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_pro_info_p_a_font_transform') ?> ;
          <?php if ($this->config->get('radio_pro_info_p_a_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_pro_info_p_a_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* Product info Paragraphs Hyperlink // End ********/ ?>
  <?php } ?>
<?php /* Product Box & Info // End *************************/ ?>



<?php /* Other Elements // Start ***************************/ ?>
  <?php if ($this->config->get('select_other_ele_status') == '1') { ?>
    <?php /* Category // Start *********************************/ ?>
      <?php if ($this->config->get('radio_other_ele_category_font_options') == '1') { ?>
         .box-category > ul > li > a {
          font-family: <?php if ($this->config->get('radio_other_ele_category_font_google') == '0') { ?><?php echo $this->config->get('select_other_ele_category_font_family') ?>;<?php } else if ($this->config->get('radio_other_ele_category_font_google') == '1') { ?><?php echo $this->config->get('input_other_ele_category_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_other_ele_category_font_size') ?>px;
          color: #<?php echo $this->config->get('input_other_ele_category_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_other_ele_category_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_other_ele_category_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_other_ele_category_font_transform') ?> ;
          <?php if ($this->config->get('radio_other_ele_category_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_other_ele_category_font_shadow') ?>;
        <?php } ?>}
        .box-category > ul > li > a:hover, .box-category > ul > li a.active:hover {color: #<?php echo $this->config->get('input_other_ele_category_font_color_hover') ?>;}
				.box-category > ul > li ul > li > a {color: #<?php echo $this->config->get('input_other_ele_category_font_sub_color') ?>;}
				.box-category > ul > li ul > li > a:hover, .box-category > ul > li ul > li > a.active:hover {color: #<?php echo $this->config->get('input_other_ele_category_font_sub_color_hover') ?>;}
      <?php } ?>
    <?php /* Category // End ***********************************/ ?>

    <?php /* Breadcrumb Settings // Start **********************/ ?>
      <?php if ($this->config->get('radio_other_ele_bread_options') == '1') { ?>
        <?php if ($this->config->get('radio_other_ele_bread_full_background_image') == '0'){ ?>
          <?php if (($this->config->get('radio_other_ele_bread_full_background_image') == '0') && ($this->config->get('radio_other_ele_bread_bg_pattern_image') == '0')){ ?>
            .other-breadcrumb {background: <?php if ($this->config->get('radio_other_ele_bread_bg_color_transparent') == '0') { ?>#<?php echo $this->config->get('input_other_ele_bread_bg_color');?><?php } ?> url('catalog/view/theme/agnes/image/layout/pattern/<?php echo $this->config->get('select_other_ele_bread_bg_pattern') ?>.png') repeat;}
          <?php } else if ($this->config->get('radio_other_ele_bread_bg_pattern_image') == '1'){ ?>
            .other-breadcrumb {background: <?php if ($this->config->get('radio_other_ele_bread_bg_color_transparent') == '0') { ?>#<?php echo $this->config->get('input_other_ele_bread_bg_color');?><?php } ?> url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_other_ele_bread_bg_pattern_image') ?>") repeat;}
          <?php } ?>
        <?php } else if ($this->config->get('radio_other_ele_bread_full_background_image') == '1'){ ?>
          .other-breadcrumb {background: <?php if ($this->config->get('radio_other_ele_bread_bg_color_transparent') == '0') { ?>#<?php echo $this->config->get('input_other_ele_bread_bg_color');?><?php } ?> url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_other_ele_bread_full_bg_image') ?>") repeat ;}
        <?php } ?>
				<?php if ($this->config->get('select_other_ele_slightly_transparent') != 'none') { ?> .other-breadcrumb {background: url("catalog/view/theme/agnes/image/layout/t_color/<?php echo  $this->config->get('select_other_ele_slightly_transparent');?>.png") repeat;}<?php } ?>
      <?php } ?>
    <?php /* Breadcrumb Settings // End ************************/ ?>
    
    <?php /* Breadcrumb H1 Font // Start */ ?>
      <?php if ($this->config->get('radio_other_ele_bread_font_options') == '1') { ?>
        .other-breadcrumb .h1 {
          font-family: <?php if ($this->config->get('radio_other_ele_bread_font_google') == '0') { ?><?php echo $this->config->get('select_other_ele_bread_font_family') ?>;<?php } else if ($this->config->get('radio_other_ele_bread_font_google') == '1') { ?><?php echo $this->config->get('input_other_ele_bread_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_other_ele_bread_font_size') ?>px;
          color: #<?php echo $this->config->get('input_other_ele_bread_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_other_ele_bread_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_other_ele_bread_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_other_ele_bread_font_transform') ?> ;
          <?php if ($this->config->get('radio_other_ele_bread_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_other_ele_bread_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* Breadcrumb H1 Font // End */ ?>
    
    <?php /* Breadcrumb Hyperlink Font // Start */ ?>
      <?php if ($this->config->get('radio_other_ele_bread_a_font_options') == '1') { ?>
        .other-breadcrumb a {
          font-family: <?php if ($this->config->get('radio_other_ele_bread_a_font_google') == '0') { ?><?php echo $this->config->get('select_other_ele_bread_a_font_family') ?>;<?php } else if ($this->config->get('radio_other_ele_bread_a_font_google') == '1') { ?><?php echo $this->config->get('input_other_ele_bread_a_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_other_ele_bread_a_font_size') ?>px;
          color: #<?php echo $this->config->get('input_other_ele_bread_a_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_other_ele_bread_a_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_other_ele_bread_a_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_other_ele_bread_a_font_transform') ?> ;
          <?php if ($this->config->get('radio_other_ele_bread_a_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_other_ele_bread_a_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* Breadcrumb Hyperlink Font // End */ ?>
  <?php } ?>
<?php /* Other Elements // End *****************************/ ?>



<?php /* Footer // Start ***********************************/ ?>
  <?php if ($this->config->get('select_footer_status') == '1') { ?>
    <?php /* Top Footer Block // Start *************************/ ?>
      <?php if ($this->config->get('radio_footer_background_options') == '1') { ?>
        <?php if ($this->config->get('radio_footer_color_transparent') != 'transparent') { ?>
          #footer {background-color: #<?php echo  $this->config->get('input_footer_bg_color');?>;}
        <?php } else if ($this->config->get('radio_footer_color_transparent') != '0') { ?>
          #footer {background: <?php echo $this->config->get('radio_footer_color_transparent') ?> url("catalog/view/theme/agnes/image/layout/t_color/<?php echo  $this->config->get('select_footer_slightly_transparent');?>.png") repeat;}
        <?php } ?>
        <?php if ($this->config->get('radio_footer_bg_pattern_image') == '1') { ?>
          #footer-content {background: transparent url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_footer_bg_pattern_image') ?>");}
        <?php } else if ($this->config->get('select_footer_bg_pattern')!= "none") { ?>
          #footer-content {background: transparent url("catalog/view/theme/agnes/image/layout/pattern/<?php echo  $this->config->get('select_footer_bg_pattern');?>.png");}
        <?php } ?>
        <?php if ($this->config->get('radio_footer_full_background_image') == '1') { ?>
          #footer {background: #<?php echo $this->config->get('input_footer_bg_color') ?> url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_footer_full_bg_image') ?>") top center no-repeat;}
        <?php } ?>
      <?php } ?>
    <?php /* Top Footer Block // End ***************************/ ?>

    <?php /* Middle Footer Block // Start **********************/ ?>
      <?php if ($this->config->get('radio_footer_info_options') == '1') { ?>
        <?php if ($this->config->get('radio_footer_info_color_transparent') != 'transparent') { ?>
          #footer-middle {background-color: #<?php echo  $this->config->get('input_footer_info_bg_color');?>;}
        <?php } else if ($this->config->get('radio_footer_info_color_transparent') != '0') { ?>
          #footer-middle {background: <?php echo $this->config->get('radio_footer_info_color_transparent') ?> url("catalog/view/theme/agnes/image/layout/t_color/<?php echo  $this->config->get('select_footer_info_slightly_transparent');?>.png") repeat;}
        <?php } ?>
        <?php if ($this->config->get('radio_footer_info_bg_pattern_image') == '1') { ?>
          #footer-middle-content {background: transparent url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_footer_info_bg_pattern_image') ?>");}
        <?php } else if ($this->config->get('select_footer_info_bg_pattern')!= "none") { ?>
          #footer-middle-content {background: transparent url("catalog/view/theme/agnes/image/layout/pattern/<?php echo  $this->config->get('select_footer_info_bg_pattern');?>.png");}
        <?php } ?>
        <?php if ($this->config->get('radio_footer_info_full_background_image') == '1') { ?>
          #footer-middle {background: #<?php echo $this->config->get('input_footer_info_bg_color') ?> url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_footer_info_full_bg_image') ?>") top center no-repeat;}
        <?php } ?>
      <?php } ?>
    <?php /* Middle Footer Block // End ************************/ ?>
  
    <?php /* Bottum Footer Block // Start **********************/ ?>
      <?php if ($this->config->get('radio_footer_powered_options') == '1') { ?>
        <?php if ($this->config->get('radio_footer_powered_color_transparent') != 'transparent') { ?>
          #footer-bottom {background-color: #<?php echo  $this->config->get('input_footer_powered_bg_color');?>;}
        <?php } else if ($this->config->get('radio_footer_powered_color_transparent') != '0') { ?>
          #footer-bottom {background: <?php echo $this->config->get('radio_footer_powered_color_transparent') ?> url("catalog/view/theme/agnes/image/layout/t_color/<?php echo  $this->config->get('select_footer_powered_slightly_transparent');?>.png") repeat;}
        <?php } ?>
        <?php if ($this->config->get('radio_footer_powered_bg_pattern_image') == '1') { ?>
          #footer-bottom-content {background: transparent url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_footer_powered_bg_pattern_image') ?>");}
        <?php } else if ($this->config->get('select_footer_powered_bg_pattern')!= "none") { ?>
          #footer-bottom-content {background: transparent url("catalog/view/theme/agnes/image/layout/pattern/<?php echo  $this->config->get('select_footer_powered_bg_pattern');?>.png");}
        <?php } ?>
        <?php if ($this->config->get('radio_footer_powered_full_background_image') == '1') { ?>
          #footer-bottom {background: #<?php echo $this->config->get('input_footer_powered_bg_color') ?> url("<?php echo HTTPS_SERVER . 'image/'. $this->config->get('upload_footer_powered_full_bg_image') ?>") top center no-repeat;}
        <?php } ?>
      <?php } ?>
    <?php /* Bottum Footer Block // End ************************/ ?>
    
    <?php /* Footer Heading Font // Start **********************/ ?>
      <?php if ($this->config->get('radio_footer_heading_font_options') == '1') { ?>
        .footer-heading {
          font-family: <?php if ($this->config->get('radio_footer_heading_font_google') == '0') { ?><?php echo $this->config->get('select_footer_heading_font_family') ?>;<?php } else if ($this->config->get('radio_footer_heading_font_google') == '1') { ?><?php echo $this->config->get('input_footer_heading_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_footer_heading_font_size') ?>px;
          color: #<?php echo $this->config->get('input_footer_heading_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_footer_heading_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_footer_heading_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_footer_heading_font_transform') ?> ;
          <?php if ($this->config->get('radio_footer_heading_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_footer_heading_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* Footer Heading Font // End ************************/ ?>
    
    <?php /* Footer About Font // Start ************************/ ?>
      <?php if ($this->config->get('radio_footer_about_font_options') == '1') { ?>
        .footer-about-content ul li p{
          font-family: <?php if ($this->config->get('radio_footer_about_font_google') == '0') { ?><?php echo $this->config->get('select_footer_about_font_family') ?>;<?php } else if ($this->config->get('radio_footer_about_font_google') == '1') { ?><?php echo $this->config->get('input_footer_about_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_footer_about_font_size') ?>px;
          color: #<?php echo $this->config->get('input_footer_about_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_footer_about_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_footer_about_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_footer_about_font_transform') ?> ;
          <?php if ($this->config->get('radio_footer_about_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_footer_about_font_shadow') ?>;
        <?php } ?>}
        
        .footer-about-content ul li p a {
          font-family: <?php if ($this->config->get('radio_footer_about_font_google') == '0') { ?><?php echo $this->config->get('select_footer_about_font_family') ?>;<?php } else if ($this->config->get('radio_footer_about_font_google') == '1') { ?><?php echo $this->config->get('input_footer_about_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_footer_about_font_size') ?>px;
          color: #<?php echo $this->config->get('input_footer_about_hyperlink_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_footer_about_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_footer_about_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_footer_about_font_transform') ?> ;
          <?php if ($this->config->get('radio_footer_about_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_footer_about_font_shadow') ?>;
        <?php } ?>}
        
        .footer-about-content ul li p a:hover {
          font-family: <?php if ($this->config->get('radio_footer_about_font_google') == '0') { ?><?php echo $this->config->get('select_footer_about_font_family') ?>;<?php } else if ($this->config->get('radio_footer_about_font_google') == '1') { ?><?php echo $this->config->get('input_footer_about_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_footer_about_font_size') ?>px;
          color: #<?php echo $this->config->get('input_footer_about_font_color_hover') ?>;
          font-weight: <?php echo $this->config->get('select_footer_about_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_footer_about_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_footer_about_font_transform') ?> ;
          <?php if ($this->config->get('radio_footer_about_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_footer_about_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* Footer About Font // End **************************/ ?>
  
    <?php /* Customer Service & Extras // Start ****************/ ?>
      <?php if ($this->config->get('radio_footer_cust_extra_font_options') == '1') { ?>
        .footer-content ul li p a {
          font-family: <?php if ($this->config->get('radio_footer_cust_extra_font_google') == '0') { ?><?php echo $this->config->get('select_footer_cust_extra_font_family') ?>;<?php } else if ($this->config->get('radio_footer_cust_extra_font_google') == '1') { ?><?php echo $this->config->get('input_footer_cust_extra_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_footer_cust_extra_font_size') ?>px;
          color: #<?php echo $this->config->get('input_footer_cust_extra_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_footer_cust_extra_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_footer_cust_extra_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_footer_cust_extra_font_transform') ?> ;
          <?php if ($this->config->get('radio_footer_cust_extra_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_footer_cust_extra_font_shadow') ?>;
        <?php } ?>}
        .footer-content ul li p a:hover {color: #<?php echo $this->config->get('input_footer_cust_extra_font_color_hover') ?>;}
      <?php } ?>
    <?php /* Customer Service & Extras // End **************/ ?>
  
    <?php /* Contact Us // Start *******************************/ ?>
      <?php if ($this->config->get('radio_footer_contact_us_font_options') == '1') { ?>
        .footer-contact-content ul li p {
          font-family: <?php if ($this->config->get('radio_footer_contact_us_font_google') == '0') { ?><?php echo $this->config->get('select_footer_contact_us_font_family') ?>;<?php } else if ($this->config->get('radio_footer_contact_us_font_google') == '1') { ?><?php echo $this->config->get('input_footer_contact_us_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_footer_contact_us_font_size') ?>px;
          color: #<?php echo $this->config->get('input_footer_contact_us_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_footer_contact_us_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_footer_contact_us_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_footer_contact_us_font_transform') ?> ;
          <?php if ($this->config->get('radio_footer_contact_us_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_footer_contact_us_font_shadow') ?>;
        <?php } ?>}
        .footer-contact-content ul li p a {
          font-family: <?php if ($this->config->get('radio_footer_contact_us_font_google') == '0') { ?><?php echo $this->config->get('select_footer_contact_us_font_family') ?>;<?php } else if ($this->config->get('radio_footer_contact_us_font_google') == '1') { ?><?php echo $this->config->get('input_footer_contact_us_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_footer_contact_us_font_size') ?>px;
          color: #<?php echo $this->config->get('input_footer_contact_us_hyperlink_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_footer_contact_us_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_footer_contact_us_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_footer_contact_us_font_transform') ?> ;
          <?php if ($this->config->get('radio_footer_contact_us_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_footer_contact_us_font_shadow') ?>;
        <?php } ?>}
        .footer-contact-content ul li p a:hover {color: #<?php echo $this->config->get('input_footer_contact_us_font_color_hover') ?>;}
      <?php } ?>
    <?php /* Contact Us // End *********************************/ ?>
  
    <?php /* Information // Start ******************************/ ?>
      <?php if ($this->config->get('radio_footer_infor_font_options') == '1') { ?>
        #footer-middle-content #information > ul > li > a {
          font-family: <?php if ($this->config->get('radio_footer_infor_font_google') == '0') { ?><?php echo $this->config->get('select_footer_infor_font_family') ?>;<?php } else if ($this->config->get('radio_footer_infor_font_google') == '1') { ?><?php echo $this->config->get('input_footer_infor_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_footer_infor_font_size') ?>px;
          color: #<?php echo $this->config->get('input_footer_infor_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_footer_infor_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_footer_infor_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_footer_infor_font_transform') ?> ;
          <?php if ($this->config->get('radio_footer_infor_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_footer_infor_font_shadow') ?>;
        <?php } ?>}
        #footer-middle-content #information > ul > li > a:hover {color: #<?php echo $this->config->get('input_footer_infor_font_color_hover') ?>;}
        #footer-middle-content #information > ul > li + li {border-left: 1px solid #<?php echo $this->config->get('input_footer_infor_separator_color') ?>;}
      <?php } ?>
    <?php /* Information // Start ******************************/ ?>
  
    <?php /* Powered By // Start *******************************/ ?>
      <?php if ($this->config->get('radio_footer_powered_font_options') == '1') { ?>
        #powered p {
          font-family: <?php if ($this->config->get('radio_footer_powered_font_google') == '0') { ?><?php echo $this->config->get('select_footer_powered_font_family') ?>;<?php } else if ($this->config->get('radio_footer_powered_font_google') == '1') { ?><?php echo $this->config->get('input_footer_powered_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_footer_powered_font_size') ?>px;
          color: #<?php echo $this->config->get('input_footer_powered_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_footer_powered_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_footer_powered_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_footer_powered_font_transform') ?> ;
          <?php if ($this->config->get('radio_footer_powered_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_footer_powered_font_shadow') ?>;
        <?php } ?>}
        #powered p a {
          font-family: <?php if ($this->config->get('radio_footer_powered_font_google') == '0') { ?><?php echo $this->config->get('select_footer_powered_font_family') ?>;<?php } else if ($this->config->get('radio_footer_powered_font_google') == '1') { ?><?php echo $this->config->get('input_footer_powered_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_footer_powered_font_size') ?>px;
          color: #<?php echo $this->config->get('input_footer_powered_hyperlink_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_footer_powered_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_footer_powered_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_footer_powered_font_transform') ?> ;
          <?php if ($this->config->get('radio_footer_powered_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_footer_powered_font_shadow') ?>;
        <?php } ?>}
        #powered p a:hover {color: #<?php echo $this->config->get('input_footer_powered_font_color_hover') ?>;}
      <?php } ?>
    <?php /* Powered By // Start *******************************/ ?>
  <?php } ?>
<?php /* Footer // End *************************************/ ?>


	
<?php /* Font style // Start *******************************/ ?>
  <?php if ($this->config->get('select_font_status') == '1') { ?>
  
    <?php /* Body // Start *************************************/ ?>
      <?php if ($this->config->get('radio_body_font_options') == '1') { ?>
        body, td, th, input, textarea, select, a {
          font-family: <?php if ($this->config->get('radio_body_font_google') == '0') { ?><?php echo $this->config->get('select_body_font_family') ?>;<?php } else if ($this->config->get('radio_body_font_google') == '1') { ?><?php echo $this->config->get('input_body_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_body_font_size') ?>px;
          color: #<?php echo $this->config->get('input_body_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_body_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_body_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_body_font_transform') ?> ;
          <?php if ($this->config->get('radio_body_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_body_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* Body // End ***************************************/ ?>
    
    <?php /* H1, Welcome // Start ******************************/ ?>
      <?php if ($this->config->get('radio_h1_font_options') == '1') { ?>
        h1, .welcome {
          font-family: <?php if ($this->config->get('radio_h1_font_google') == '0') { ?><?php echo $this->config->get('select_h1_font_family') ?>;<?php } else if ($this->config->get('radio_h1_font_google') == '1') { ?><?php echo $this->config->get('input_h1_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_h1_font_size') ?>px;
          color: #<?php echo $this->config->get('input_h1_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_h1_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_h1_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_h1_font_transform') ?> ;
          <?php if ($this->config->get('radio_h1_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_h1_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* H1, Welcome // End ********************************/ ?>
    
    <?php /* H2, Title // Start ********************************/ ?>
      <?php if ($this->config->get('radio_h2_font_options') == '1') { ?>
        h2 {
          font-family: <?php if ($this->config->get('radio_h2_font_google') == '0') { ?><?php echo $this->config->get('select_h2_font_family') ?>;<?php } else if ($this->config->get('radio_h2_font_google') == '1') { ?><?php echo $this->config->get('input_h2_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_h2_font_size') ?>px;
          color: #<?php echo $this->config->get('input_h2_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_h2_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_h2_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_h2_font_transform') ?> ;
          <?php if ($this->config->get('radio_h2_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_h2_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* H2, Title // End **********************************/ ?>
    
    <?php /* Hyperlink // Start ********************************/ ?>
      <?php if ($this->config->get('radio_hyperlink_font_options') == '1') { ?>
        a, a:visited, a b {
          font-family: <?php if ($this->config->get('radio_hyperlink_font_google') == '0') { ?><?php echo $this->config->get('select_hyperlink_font_family') ?>;<?php } else if ($this->config->get('radio_hyperlink_font_google') == '1') { ?><?php echo $this->config->get('input_hyperlink_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_hyperlink_font_size') ?>px;
          color: #<?php echo $this->config->get('input_hyperlink_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_hyperlink_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_hyperlink_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_hyperlink_font_transform') ?> ;
          <?php if ($this->config->get('radio_hyperlink_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_hyperlink_font_shadow') ?>;
        <?php } ?>}
        a:hover {color: #<?php echo $this->config->get('input_hyperlink_font_color_hover') ?>;}
      <?php } ?>
    <?php /* Hyperlink // End **********************************/ ?>
    
    <?php /* Box Heading // Start ********************************/ ?>
      <?php if ($this->config->get('radio_box_heading_font_options') == '1') { ?>
        .box .box-heading {
          font-family: <?php if ($this->config->get('radio_box_heading_font_google') == '0') { ?><?php echo $this->config->get('select_box_heading_font_family') ?>;<?php } else if ($this->config->get('radio_box_heading_font_google') == '1') { ?><?php echo $this->config->get('input_box_heading_font_google') ?>;<?php } ?>
          font-size: <?php echo $this->config->get('input_box_heading_font_size') ?>px;
          color: #<?php echo $this->config->get('input_box_heading_font_color') ?>;
          font-weight: <?php echo $this->config->get('select_box_heading_font_weight') ?>;
          font-style: <?php echo $this->config->get('select_box_heading_font_style') ?>;
          text-transform: <?php echo $this->config->get('select_box_heading_font_transform') ?> ;
          <?php if ($this->config->get('radio_box_heading_font_shadow') == '1') { ?>
          text-shadow: <?php echo $this->config->get('input_box_heading_font_shadow') ?>;
        <?php } ?>}
      <?php } ?>
    <?php /* Box Title // End **********************************/ ?>    
  <?php } ?>
<?php /* Font style // End *********************************/ ?>


  
<?php /* Custom CSS // Start *******************************/ ?>
  <?php if (($this->config->get('radio_css_options') == '1') && ($this->config->get('select_custom_code_status') == '1')) { ?>
    <?php echo $this->config->get('textarea_css') ?>
  <?php } ?>
<?php /* Custom CSS // End *********************************/ ?>
</style>