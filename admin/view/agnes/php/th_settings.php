<?php 
// ----------------------------------------------------------------------------
// Agnes Theme Version 1.0! For support: http://themeforest.net/user/upixel
// ----------------------------------------------------------------------------
?>

<?php foreach ($languages as $language) { ?>
  <?php
  // Background Settings
    if(empty($input_main_bg_color)) {$input_main_bg_color ="f7f7f7";}
    if(empty($select_main_bg_pattern)) {$select_main_bg_pattern ="fabric_of_squares_gray";}
    if(empty($upload_bg_slideshow_first)) {$upload_bg_slideshow_first ="0";}
    if(empty($upload_bg_slideshow_second)) {$upload_bg_slideshow_second ="0";}
    if(empty($upload_bg_slideshow_third)) {$upload_bg_slideshow_third ="0";}
    if(empty($upload_bg_slideshow_fourth)) {$upload_bg_slideshow_fourth ="0";}

    
  // Page Layout
    if(empty($input_layout_margin_top)) {$input_layout_margin_top ="15";}
    if(empty($input_layout_margin_bottom)) {$input_layout_margin_bottom ="15";}
    if(empty($input_layout_margin_left)) {$input_layout_margin_left ="auto";}
    if(empty($input_layout_margin_right)) {$input_layout_margin_right ="auto";}
    if(empty($input_layout_shadow_size)) {$input_layout_shadow_size ="15";}
    
    
  // Header settings
    if(empty($input_header_color)) {$input_header_color ="ffffff";}
    if(empty($input_header_size)) {$input_header_size ="120";}
    if(empty($input_header_size_mobile)) {$input_header_size_mobile ="140";}
    if(empty($input_header_size_tablet)) {$input_header_size_tablet ="140";}
    if(empty($input_header_button_color)) {$input_header_button_color ="65C0FA";}
    if(empty($input_header_button_color_hover)) {$input_header_button_color_hover ="65C0FA";}
    
    
  // Top Header
    if(empty($input_top_header_bg_color)) {$input_top_header_bg_color ="ffffff";}
    if(empty($input_top_header_border_color)) {$input_top_header_border_color ="e5e8ea";}
    if(empty($input_top_header_border_bottom)) {$input_top_header_border_bottom ="1";}
    if(empty(${'textarea_top_header_text_' . $language['language_id']})) {${'textarea_top_header_text_' . $language['language_id']} ="Here you can add your text of your choice";}
    if(empty($input_logo_font_size)) {$input_logo_font_size ="26";}
  
  
  // Middle Header // Logo
    if(empty($input_header_logo_position_top)) {$input_header_logo_position_top ="20";}
    if(empty($input_header_logo_position_left)) {$input_header_logo_position_left ="20";}
    if(empty($input_header_logo_color)) {$input_header_logo_color ="3E4548";}
    
    
  // Middle Header // Shopping Basket
    if(empty($input_header_basket_position_top)) {$input_header_basket_position_top ="35";}
    if(empty($input_header_basket_position_right)) {$input_header_basket_position_right ="380";}
    if(empty($input_header_basket_position_tablet_top)) {$input_header_basket_position_tablet_top ="35";}
    if(empty($input_header_basket_position_tablet_right)) {$input_header_basket_position_tablet_right ="220";}
    
    
  // Middle Header // Search
    if(empty($input_header_search_position_top)) {$input_header_search_position_top ="35";}
    if(empty($input_header_search_position_right)) {$input_header_search_position_right ="10";}
    if(empty($input_header_search_position_tablet_top)) {$input_header_search_position_tablet_top ="35";}
    if(empty($input_header_search_position_tablet_right)) {$input_header_search_position_tablet_right ="10";}
    
    
  // Middle Header // Login
    if(empty($input_header_login_position_top)) {$input_header_login_position_top ="85";}
    if(empty($input_header_login_position_right)) {$input_header_login_position_right ="15";}
    if(empty($input_header_login_position_tablet_top)) {$input_header_login_position_tablet_top ="85";}
    if(empty($input_header_login_position_tablet_right)) {$input_header_login_position_tablet_right ="15";}
		
	// Bottom Header
    if(empty($input_bottom_header_bg_color)) {$input_bottom_header_bg_color ="ffffff";}
    
    
  // Links
    if(empty($input_link_color)) {$input_link_color ="ffffff";}
    if(empty($input_link_border_color)) {$input_link_border_color ="5DB2E7";}
    if(empty($input_link_border_top)) {$input_link_border_top ="0";}
    if(empty($input_link_border_right)) {$input_link_border_right ="0";}
    if(empty($input_link_border_bottom)) {$input_link_border_bottom ="2";}
    if(empty($input_link_border_left)) {$input_link_border_left ="0";}
    if(empty($input_link_color_sub)) {$input_link_color_sub ="ffffff";}
    if(empty($input_link_sub_border_color)) {$input_link_sub_border_color ="DBDEE1";}
    if(empty($input_link_sub_border_top)) {$input_link_sub_border_top ="0";}
    if(empty($input_link_sub_border_right)) {$input_link_sub_border_right ="1";}
    if(empty($input_link_sub_border_bottom)) {$input_link_sub_border_bottom ="1";}
    if(empty($input_link_sub_border_left)) {$input_link_sub_border_left ="1";}
    if(empty($input_link_shadow_size)) {$input_link_shadow_size ="10";}
    if(empty($input_link_text_spacing_topbottom)) {$input_link_text_spacing_topbottom ="11";}
    if(empty($input_link_text_spacing_leftright)) {$input_link_text_spacing_leftright ="10";}
    if(empty($input_link_text_sub_spacing_topbottom)) {$input_link_text_sub_spacing_topbottom ="8";}
    if(empty($input_link_text_sub_spacing_leftright)) {$input_link_text_sub_spacing_leftright ="20";}
    if(empty($input_link_text_size)) {$input_link_text_size ="14";}
    if(empty($input_link_text_color)) {$input_link_text_color ="464646";}
    if(empty($input_link_text_color_hover)) {$input_link_text_color_hover ="EE2849";}
    if(empty($input_link_background_color)) {$input_link_background_color ="ffffff";}
    if(empty($input_link_background_color_hover)) {$input_link_background_color_hover ="ffffff";}
    if(empty($input_link_sub_text_size)) {$input_link_sub_text_size ="12";}
    if(empty($input_link_sub_text_color)) {$input_link_sub_text_color ="7E7E7E";}
    if(empty($input_link_sub_text_color_hover)) {$input_link_sub_text_color_hover ="EE2849";}
    if(empty($input_link_sub_background_color_hover)) {$input_link_sub_background_color_hover ="ffffff";}

    
  // Menu
    if(empty($input_menu_color)) {$input_menu_color ="ffffff";}
    if(empty($input_menu_border_color)) {$input_menu_border_color ="E7E7E7";}
    if(empty($input_menu_border_top)) {$input_menu_border_top ="0";}
    if(empty($input_menu_border_right)) {$input_menu_border_right ="0";}
    if(empty($input_menu_border_bottom)) {$input_menu_border_bottom ="1";}
    if(empty($input_menu_border_left)) {$input_menu_border_left ="0";}
    if(empty($input_menu_color_sub)) {$input_menu_color_sub ="ffffff";}
    if(empty($input_menu_sub_border_color)) {$input_menu_sub_border_color ="DBDEE1";}
    if(empty($input_menu_sub_border_top)) {$input_menu_sub_border_top ="0";}
    if(empty($input_menu_sub_border_right)) {$input_menu_sub_border_right ="1";}
    if(empty($input_menu_sub_border_bottom)) {$input_menu_sub_border_bottom ="1";}
    if(empty($input_menu_sub_border_left)) {$input_menu_sub_border_left ="1";}
    if(empty($input_menu_shadow_size)) {$input_menu_shadow_size ="10";}
    if(empty($input_menu_font_size)) {$input_menu_font_size ="13";}
    if(empty($input_menu_font_color)) {$input_menu_font_color ="464646";}
    if(empty($input_menu_font_color_hover)) {$input_menu_font_color_hover ="38B0E3";}
    if(empty($input_menu_sub_font_size)) {$input_menu_sub_font_size ="13";}
    if(empty($input_menu_sub_font_color)) {$input_menu_sub_font_color ="7E7E7E";}
    if(empty($input_menu_sub_font_color_hover)) {$input_menu_sub_font_color_hover ="38B0E3";}
    if(empty($input_menu_sub_level3_font_size)) {$input_menu_sub_level3_font_size ="13";}
    if(empty($input_menu_sub_level3_font_color)) {$input_menu_sub_level3_font_color ="7E7E7E";}
    if(empty($input_menu_sub_level3_font_color_hover)) {$input_menu_sub_level3_font_color_hover ="38B0E3";}
    
    
    // Spacing option
    if(empty($input_menu_font_spacing_topbottom)) {$input_menu_font_spacing_topbottom ="6";}
    if(empty($input_menu_font_spacing_leftright)) {$input_menu_font_spacing_leftright ="10";}
    if(empty($input_menu_font_sub_spacing_topbottom)) {$input_menu_font_sub_spacing_topbottom ="8";}
    if(empty($input_menu_font_sub_spacing_leftright)) {$input_menu_font_sub_spacing_leftright ="15";}
    if(empty($input_menu_font_sub_level3_spacing_topbottom)) {$input_menu_font_sub_level3_spacing_topbottom ="5";}
    if(empty($input_menu_font_sub_level3_spacing_leftright)) {$input_menu_font_sub_level3_spacing_leftright ="15";}

  
  // Body
    if(empty($input_body_color)) {$input_body_color ="ffffff";}
    if(empty($input_body_border_color)) {$input_body_border_color ="none";}
    if(empty($input_body_border_top)) {$input_body_border_top ="0";}
    if(empty($input_body_border_right)) {$input_body_border_right ="0";}
    if(empty($input_body_border_bottom)) {$input_body_border_bottom ="0";}
    if(empty($input_body_border_left)) {$input_body_border_left ="0";}
  
  
  // Social Network
    if(empty($input_follow_us_bg_color_facebook)) {$input_follow_us_bg_color_facebook ="3A589B";}
    if(empty($input_follow_us_bg_color_flicker)) {$input_follow_us_bg_color_flicker ="FF0084";}
    if(empty($input_follow_us_bg_color_google)) {$input_follow_us_bg_color_google ="DA4936";}
    if(empty($input_follow_us_bg_color_instagram)) {$input_follow_us_bg_color_instagram ="643628";}
    if(empty($input_follow_us_bg_color_linkedin)) {$input_follow_us_bg_color_linkedin ="005CA0";}
    if(empty($input_follow_us_bg_color_pinterest)) {$input_follow_us_bg_color_pinterest ="CA2128";}
    if(empty($input_follow_us_bg_color_twitter)) {$input_follow_us_bg_color_twitter ="32CEFF";}
    if(empty($input_follow_us_bg_color_vimeo)) {$input_follow_us_bg_color_vimeo ="17B2E8";}
    if(empty($input_follow_us_bg_color_youtube)) {$input_follow_us_bg_color_youtube ="C02C2A";}
    if(empty($input_follow_us_bg_color_blogger)) {$input_follow_us_bg_color_blogger ="F47722";}
    if(empty($input_follow_us_bg_color_envato)) {$input_follow_us_bg_color_envato ="30740B";}
    
    
  // Product Box Settings
    if(empty($input_pro_box_size)) {$input_pro_box_size ="195";}
    if(empty($input_pro_box_size_left)) {$input_pro_box_size_left ="215";}
    if(empty($input_pro_box_size_right)) {$input_pro_box_size_right ="215";}
    if(empty($input_pro_box_size_both)) {$input_pro_box_size_both ="240";}
    if(empty($input_box_bg_color)) {$input_box_bg_color ="999999";}
    if(empty($input_box_border_line_color)) {$input_box_border_line_color ="5db2e7";}
    if(empty($input_box_wish_list_bg_color)) {$input_box_wish_list_bg_color ="5DB2E7";}
    if(empty($input_box_compare_bg_color)) {$input_box_compare_bg_color ="5DB2E7";}
    if(empty($input_box_cart_bg_color)) {$input_box_cart_bg_color ="E02222";}
    if(empty($input_pro_box_name_font_size)) {$input_pro_box_name_font_size ="15";}
    if(empty($input_pro_box_name_font_color)) {$input_pro_box_name_font_color ="444444";}
    if(empty($input_pro_old_price_font_size)) {$input_pro_old_price_font_size ="14";}
    if(empty($input_pro_old_price_font_color)) {$input_pro_old_price_font_color ="E02222";}
    if(empty($input_pro_price_font_size)) {$input_pro_price_font_size ="14";}
    if(empty($input_pro_price_font_color)) {$input_pro_price_font_color ="666666";}
    
  // Product Info Settings
    if(empty($input_prod_info_bread_bg_color)) {$input_prod_info_bread_bg_color ="EDECFF";}
    if(empty($input_pro_info_bread_a_font_size)) {$input_pro_info_bread_a_font_size ="13";}
    if(empty($input_pro_info_bread_a_font_color)) {$input_pro_info_bread_a_font_color ="373a41";}
    if(empty($input_prod_info_tab_bg_color)) {$input_prod_info_tab_bg_color ="F4F4F4";}
    if(empty($input_prod_info_tab_hover_bg_color)) {$input_prod_info_tab_hover_bg_color ="0DA3E2";}
    if(empty($input_prod_info_tab_selected_bg_color)) {$input_prod_info_tab_selected_bg_color ="0DA3E2";}
    if(empty($input_prod_info_button_bg_color)) {$input_prod_info_button_bg_color ="0DA3E2";}
    if(empty($input_prod_info_button_hover_bg_color)) {$input_prod_info_button_hover_bg_color ="EE2849";}
    if(empty($input_pro_info_name_font_size)) {$input_pro_info_name_font_size ="36";}
    if(empty($input_pro_info_name_font_color)) {$input_pro_info_name_font_color ="5C676D";}
    if(empty($input_pro_info_old_price_font_size)) {$input_pro_info_old_price_font_size ="24";}
    if(empty($input_pro_info_old_price_font_color)) {$input_pro_info_old_price_font_color ="E02222";}
    if(empty($input_pro_info_price_font_size)) {$input_pro_info_price_font_size ="24";}
    if(empty($input_pro_info_price_font_color)) {$input_pro_info_price_font_color ="4D4D4D";}
    if(empty($input_pro_info_p_font_size)) {$input_pro_info_p_font_size ="13";}
    if(empty($input_pro_info_p_font_color)) {$input_pro_info_p_font_color ="4D4D4D";}
    if(empty($input_tab_font_color)) {$input_tab_font_color ="000000";}
    if(empty($input_tab_selected_font_color)) {$input_tab_selected_font_color ="FFFFFF";}
    if(empty($input_tab_hover_font_color)) {$input_tab_hover_font_color ="FFFFFF";}
    
    
  // Footer Font Size & Font Color // Heading Font
    if(empty($input_footer_heading_font_size)) {$input_footer_heading_font_size ="16";}
    if(empty($input_footer_heading_font_color)) {$input_footer_heading_font_color ="DDDDDD";}
    
    
  // Footer Font Size & Font Color // About Us
    if(empty($input_footer_about_font_size)) {$input_footer_about_font_size ="13";}
    if(empty($input_footer_about_font_color)) {$input_footer_about_font_color ="B2B2B2";}
    if(empty($input_footer_about_hyperlink_font_color)) {$input_footer_about_hyperlink_font_color ="D1D1D1";}
    if(empty($input_footer_about_font_color_hover)) {$input_footer_about_font_color_hover ="FFFFFF";}
   
   
  // Footer Font Size & Font Color // Customer Service & Extras
    if(empty($input_footer_cust_extra_font_size)) {$input_footer_cust_extra_font_size ="13";}
    if(empty($input_footer_cust_extra_font_color)) {$input_footer_cust_extra_font_color ="D1D1D1";}
    if(empty($input_footer_cust_extra_font_color_hover)) {$input_footer_cust_extra_font_color_hover ="FFFFFF";}
    
    
  // Footer Font Size & Font Color // Contact Us
    if(empty($input_footer_contact_us_font_size)) {$input_footer_contact_us_font_size ="13";}
    if(empty($input_footer_contact_us_font_color)) {$input_footer_contact_us_font_color ="B2B2B2";}
    if(empty($input_footer_contact_us_hyperlink_font_color)) {$input_footer_contact_us_hyperlink_font_color ="D1D1D1";}
    if(empty($input_footer_contact_us_font_color_hover)) {$input_footer_contact_us_font_color_hover ="FFFFFF";}
    
    
  // Footer Font Size & Font Color // Information
    if(empty($input_footer_infor_font_size)) {$input_footer_infor_font_size ="13";}
    if(empty($input_footer_infor_font_color)) {$input_footer_infor_font_color ="B2B2B2";}
    if(empty($input_footer_infor_font_color_hover)) {$input_footer_infor_font_color_hover ="D1D1D1";}
    if(empty($input_footer_infor_separator_color)) {$input_footer_infor_separator_color ="343843";}
    
    
  // Footer Font Size & Font Color // Powered By
    if(empty($input_footer_powered_font_size)) {$input_footer_powered_font_size ="13";}
    if(empty($input_footer_powered_font_color)) {$input_footer_powered_font_color ="B2B2B2";}
    if(empty($input_footer_powered_hyperlink_font_color)) {$input_footer_powered_hyperlink_font_color ="B2B2B2";}
    if(empty($input_footer_powered_font_color_hover)) {$input_footer_powered_font_color_hover ="D1D1D1";}
    
    
  // Font Size & Font Color // Body
    if(empty($input_body_font_size)) {$input_body_font_size ="13";}
    if(empty($input_body_font_color)) {$input_body_font_color ="292929";}
  
  
  // Font Size & Font Color // H1, Welcome
    if(empty($input_h1_font_size)) {$input_h1_font_size ="32";}
    if(empty($input_h1_font_color)) {$input_h1_font_color ="292929";}
    
    
  // Font Size & Font Color // H2, Title
    if(empty($input_h2_font_size)) {$input_h2_font_size ="16";}
    if(empty($input_h2_font_color)) {$input_h2_font_color ="292929";}
    
    
  // Font Size & Font Color // Hyperlink
    if(empty($input_hyperlink_font_size)) {$input_hyperlink_font_size ="13";}
    if(empty($input_hyperlink_font_color)) {$input_hyperlink_font_color ="38B0E3";}
    if(empty($input_hyperlink_font_color_hover)) {$input_hyperlink_font_color_hover ="38B0E3";}
    
    
  // Font Size & Font Color // Box Heading
    if(empty($input_box_heading_font_size)) {$input_box_heading_font_size ="18";}
    if(empty($input_box_heading_font_color)) {$input_box_heading_font_color ="505967";}

  // Other Elements // Category
    if(empty($input_other_ele_category_font_size)) {$input_other_ele_category_font_size ="13";}
    if(empty($input_other_ele_category_font_color)) {$input_other_ele_category_font_color ="464646";}
    if(empty($input_other_ele_category_font_color_hover)) {$input_other_ele_category_font_color_hover ="38b0e3";}
    if(empty($input_other_ele_category_font_sub_color)) {$input_other_ele_category_font_sub_color ="818181";}
    if(empty($input_other_ele_category_font_sub_color_hover)) {$input_other_ele_category_font_sub_color_hover ="38b0e3";}
  ?>
<?php } ?>