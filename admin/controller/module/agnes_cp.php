<?php 
// ----------------------------------------------------------------------------
// Agnes Theme Version 1.0.2  For support: http://www.unique-pixel.com/support/
// ----------------------------------------------------------------------------
?>
<?php
class ControllerModuleAgnesCP extends Controller {
	private $error = array(); 
	
	public function index() {   
		$this->load->language('module/agnes_cp');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('setting/setting');
		$this->load->model('tool/image');
		
		//ColorPicker
		$this->document->addScript('view/agnes/js/colorpicker.js');
		$this->document->addStyle('view/agnes/stylesheet/colorpicker/css/colorpicker.css');
		
		//TipTip
		$this->document->addStyle('view/agnes/stylesheet/tipTip.css');
		$this->document->addScript('view/agnes/js/jquery.tipTip.js');
		$this->document->addScript('view/agnes/js/jquery.tipTip.minified.js');
		
		//markItUp
		$this->document->addScript('view/agnes/js/markitup/jquery.markitup.js');
		$this->document->addScript('view/agnes/js/markitup/sets/default/set.js');
		$this->document->addStyle('view/agnes/js/markitup/skins/simple/style.css');
		$this->document->addStyle('view/agnes/js/markitup/sets/default/style.css');
		
		// Theme CP 
		$this->document->addStyle('view/agnes/stylesheet/agnes.css');
		
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('agnes_cp', $this->request->post);	
	
			$this->session->data['success'] = $this->language->get('text_success');
		
			if ($this->request->post['save_continue'] == "0"){
			$this->redirect($this->url->link('module/agnes_cp', 'token=' . $this->session->data['token'], 'SSL'));
			}
		}
			
		
		$text_strings = array(
    // Various other elements // Start
      // General Tabs
      'tab_introduction',
      'tab_background',
      'tab_page_layout',
      'tab_header',
      'tab_links',
      'tab_menu',
      'tab_body',
      'tab_column_and_block',
      'tab_product_box_and_info',
      'tab_other_elements',
      'tab_footer',
      'tab_font_style_and_color',
      'tab_social_network',
      'tab_additional_effects',
      'tab_maintenance',
      'tab_custom_code',
      
      // Other
      'someclass_info',
      
      'text_enabled',
      'text_disabled',
      'text_on',
      'text_off',
      'text_yes',
      'text_no',
      'text_browse',
      'text_top',
      'text_right',
      'text_bottom',
      'text_left',
      'text_px',
      'text_clear',
      'text_normal',
      'text_bold',
      'text_italic',
      'text_oblique',
      'text_none',
      'text_uppercase',
      'text_lowercase',
      'text_capitalize',
      'text_border',
      'text_activate_changes',
      'button_save',
      'button_save_continue',
      'button_cancel',
			
			'tab_font_settings',
			// Various other elements // End
			
		
		// Background // Start
      'h3_background_status',
      'heading_bg_settings',
      'heading_bg_slideshow',
      'h3_bg_color',
      'h3_bg_pattern',
      'h3_bg_pattern_upload',
      'h4_bg_pattern_upload',
      'h3_bg_shadows',
      'h3_full_bg_image',
      'h4_full_bg_image',
      'h3_bg_slideshow_images',
		// Background // End
		
		// Page Layout // Start
      'h3_layout_status',
      'heading_page_layout',
      'h3_responsive',
      'h3_page_layout',
      'h3_custom_layout',
      'heading_page_layout_margin',
      'radio_page_layout_margin_options',
      'h3_page_layout_margin_top',
      'h3_page_layout_margin_bottom',
      'h3_page_layout_margin_left',
      'h3_page_layout_margin_right',
      'heading_page_layout_shadow',
      'h3_page_layout_shadow_size',
		// Page Layout // End
		
		// Header // Start
    	'h3_header_status',
      
      // Top Header // Start
        'tab_top_header',
        'heading_top_header_color',
        'h3_top_header_color_transparent',
        'h3_top_header_bg_color',
        'h3_top_header_slightly_transparent',
        'h3_top_header_pattern',
        'h3_top_header_pattern_upload',
        'h4_top_header_pattern_upload',
				'h3_top_header_border_color',
        
        // Header text
        'heading_top_header_text',
        'h3_top_header_text',
        
        // Follow Us
        'heading_top_header_soc_net',
        
      // Top Header // End
      
      // Middle Header // Start
        'tab_middle_header',
				
				// Color & Background
				'heading_header_color',
        'h3_header_color_transparent',
        'h3_header_color',
        'h3_header_slightly_transparent',
        'h3_header_pattern',
        'h3_header_pattern_upload',
        'h4_header_pattern_upload',
        'h3_header_full_bg_image',
        'h4_header_full_bg_image',
        'note_header_full_bg_image',
				
				// Heder Size
        'heading_header_size',
        'h3_header_size',
        'h3_header_size_mobile',
        'h3_header_size_tablet',
        
        // Logo
        'heading_logo',
        'h3_header_logo_position',
        'h3_header_logo_color',
        'h3_header_logo_image',
        'h3_header_logo',
        'h3_header_logo_text',
        
        // Shopping Basket
        'heading_basket',
        'h3_header_basket_switch',
        'h3_header_basket_position',
        'h3_header_basket_position_tablet',
        'h3_header_basket_size',
        
        // Search
        'heading_search',
        'h3_header_search_switch',
        'h3_header_search_position',
        'h3_header_search_position_tablet',
        'h3_header_search_size',
        
        // Login
        'heading_login',
        'h3_header_login_switch',
        'h3_header_login_position',
        'h3_header_login_position_tablet',
        'h3_header_login_size',
				
				// Button Color
        'heading_header_button_color',
        'h3_header_button_color',
        'h3_header_button_color_hover',
      // Middle Header // End
      
			// Bottom Header // Start
				'tab_bottom_header',
				'heading_bottom_header_color',
				'h3_bottom_header_color_transparent',
				'h3_bottom_header_bg_color',
				'h3_bottom_header_slightly_transparent',
				'h3_bottom_header_pattern',
				'h3_bottom_header_pattern_upload',
				'h4_bottom_header_pattern_upload',
				'h3_additional_space',
				'h3_add_space_text_ore_code',
			// Bottom Header // End
			
    // Header // End
		
      // Links // Start
        'h3_link_status',
      
        // Link Settings // Start
          'tab_link_settings',
          'heading_link_options',		
          'heading_sub_link_options',		
           
           // Link Color combination
          'h3_link_color',
          'h3_link_color_transparent',
          'h3_link_bg_pattern',
					'h3_link_slightly_transparent',
          'h3_link_pattern_upload',
          'h4_link_pattern_upload',
          'h3_link_border_color',
          
          // Sub Color combination
					'h3_link_color_sub_transparent',
          'h3_link_color_sub',
					'h3_link_sub_slightly_transparent',
          'h3_link_shadow',
          'h3_link_shadow_size',
          'h3_sub_link_pattern_upload',
          'h4_sub_link_pattern_upload',
          
          // Movement options
          'heading_movement_options',
          'h3_link_position',
          'h3_link_align',
          
          // Spacing option
          'heading_spacing_option',
          'h3_link_text_spacing',
          'h3_link_text_sub_spacing',
          
        // Link Settings // End
      
        // elements activation // Start
          'tab_element_activation',
          'heading_link_activation',
          'h3_link_home',
          'h3_link_home_color',
          'h3_link_home_color_hover',
          'h3_link_my_account',
          'h3_link_information',
          'h3_link_extras',
          'h3_link_shopping_cart',
          'h3_link_checkout',
          'h3_link_language',
          'h3_link_currency',
          'h3_link_search',
          'h3_link_shopping_cart_large',
          'h3_link_login',
        // Elements activation // Start
        
        // Fonts & Color // Start
          
          // Link Font & Color combination
          'heading_link_font_options',
          'heading_sub_link_font_options',
          'h3_link_sub_border_color',
          'h3_link_text_size',
          'h3_link_text_color',
          'h3_link_text_color_hover',
          'h3_link_background_color',
          'h3_link_background_color_hover',
          
          // Sub Link Font & Color combination
          'h3_link_sub_text_size',
          'h3_link_sub_text_color',
          'h3_link_sub_text_color_hover',
          'h3_link_sub_background_color_hover',
        // Fonts & Color // Start
      
      // Links // End
      
      
      // Menu // Start
        'h3_menu_status',
        
        // Menu Settings
        'heading_menu_style',
        'heading_menu_options',
        'heading_menu_sub_options',
        'heading_menu_spacing_option',
        
        'tab_menu_settings',
        'h3_menu_font_spacing',
        'h3_menu_font_sub_spacing',
        'h3_menu_font_sub_level3_spacing',
        'h3_menu_size',
        'h3_menu_color',
        'h3_menu_color_transparent',
        'h3_menu_pattern',
        'h3_menu_pattern_upload',
        'h4_menu_pattern_upload',
        'h3_menu_border_color',
        'h3_menu_color_sub',
        'h3_menu_color_sub_transparent',
        'h3_menu_pattern_sub',
        'h3_sub_menu_pattern_upload',
        'h4_sub_menu_pattern_upload',
        'h3_menu_sub_border_color',
        'h3_menu_shadow',
        'h3_menu_shadow_size',
        
        // Menu Font size & Font Color
        'heading_menu_font_options',
        'heading_menu_sub_font_options',
        'heading_menu_sub_level3_font_options',
        
        'heading_menu_style',
        'heading_menu_options',
        'heading_menu_sub_options',
        'heading_menu_spacing_option',
        'h3_menu_sub_font_size',
        'h3_menu_sub_font_color',
        'h3_menu_sub_font_color_hover',
        'h3_menu_sub_level3_font_size',
        'h3_menu_sub_level3_font_color',
        'h3_menu_sub_level3_font_color_hover',
       
      // Menu // End
		
		// Body // Start
		'h3_body_status',
		'heading_body_color_bg',
		'h3_body_color',
		'h3_body_color_transparent',
		'h3_body_color_slightly_transparent',
		'h3_body_border_color',
		'h3_body_border',
		// Body // End
		
		
		// Block // Start
    'tab_block_settings',
		'heading_left_block',
		'h3_left_block_color',
		'h3_left_block_color_transparent',
		'h3_left_block_slightly_transparent',
		'h3_left_block_border_color',
		'h3_left_block_border',
		
		'heading_middle_block',
		'h3_middle_block_color',
		'h3_middle_block_color_transparent',
		'h3_middle_block_slightly_transparent',
		'h3_middle_block_border_color',
		'h3_middle_block_border',
		
		'heading_right_block',
		'h3_right_block_color',
		'h3_right_block_color_transparent',
		'h3_right_block_slightly_transparent',
		'h3_right_block_border_color',
		'h3_right_blockn_border',
		// Block // End
		
		// Column // Start
		'h3_column_status',
		'heading_column',
		'note_left_right_size',
		'h3_left_column_size',
		'h3_center_column_margin_left',
		'h3_center_column_margin_right',
		'note_center_column_margin',
		'h3_right_column_size',
		// Column // End
    
    //Product Box & Info // Start
      'h3_product_status',
       
      // Product Box Settings
       
       // Tab Names
       'tab_product_box_settings',
       'tab_product_box_font',
       
       // Box Styles
       'heading_box_style',
       'h3_box_style',
       
       // Box Settings
       'heading_box_settings',
       'h3_box_shadow',
       'h3_box_zoom',
			 'h3_box_size',
			 'h3_box_size_left',
			 'h3_box_size_right',
			 'h3_box_size_both',
			 'h3_box_border_color',
       'h3_box_add_to_wish_list',
       'h3_box_add_to_compare',
       'h3_box_add_to_cart',
       'h3_box_bg_color',
       'h3_box_wish_list_bg_color',
       'h3_box_compare_bg_color',
       'h3_box_cart_bg_color',
       'h3_box_standart_button',
       
        // Product Box Font Style & Color
        'heading_font_pro_box_name',
        'heading_font_pro_old_price',
      
      // Product info Setting
      
        // Tab Names
       'tab_product_info_settings',
       'tab_product_info_font',
       
       // Breadcrumbs 
       'heading_product_info_bread',
       'heading_product_info_tabs',
       'h3_prod_info_bread_bg_color',
       'h3_prod_info_bread_bg_color_transparent',
       'h3_prod_info_bread_bg_pattern',
       'h3_prod_info_bread_bg_pattern_upload',
       'h4_prod_info_bread_bg_pattern_upload',
       'h3_prod_info_bread_full_bg_image',
       'h4_prod_info_bread_full_bg_image',
       
       // Tabs
       'h3_prod_info_tab_bg_color',
       'h3_prod_info_tab_hover_bg_color',
       'h3_prod_info_tab_selected_bg_color',
       
       // Button
       'heading_product_info_button',
       'h3_prod_info_button_bg_color',
       'h3_prod_info_button_hover_bg_color',
       
      // Product Info Font Style & Color
      
        // Product Info Name
        'heading_font_pro_info_name',
        
        // Product info Breadcrumb Hyperlink Font
        'heading_font_pro_info_bread_a',
        
        // Product Price
        'heading_font_pro_price',
        
        // Product info Price
        'heading_font_pro_info_old_price',
        'heading_font_pro_info_price',
        
        // Product info Paragraphs
        'heading_font_pro_info_p',
        
        // Product info Paragraphs Hyperlink
        'heading_font_pro_info_p_a',
        
        // Tabs
        'heading_font_tab',
			
    //Product Box & Info // End
		
    // Other Elements // Start
      'h3_other_ele_status',

      // Category
      'tab_category',
      'heading_other_ele_category',
      
      // Breadcrumb
      'tab_breadcrumb',
      'heading_other_ele_bread',
      'h3_other_elements_status',
      'h3_other_ele_bread_bg_color',
      'h3_other_ele_bread_bg_color_transparent',
      'h3_other_ele_bread_bg_pattern',
			'h3_other_ele_slightly_transparent',
      'h3_other_ele_bread_bg_pattern_upload',
      'h4_other_ele_bread_bread_bg_pattern_upload',
      'h3_other_ele_bread_full_bg_image',
      'h4_other_ele_bread_full_bg_image',
      
      // Breadcrumb font
      'heading_other_ele_bread_font',
      'heading_other_ele_bread_a_font',
      
      // Payment Method
      'tab_payment_method',
      'heading_other_ele_payment',
      'h3_payment_heading_name',
      'h3_americanexpress',
      'h3_cirrus',
      'h3_delta',
      'h3_dinersclub',
      'h3_directdebit',
      'h3_discover',
      'h3_egold',
      'h3_maestro',
      'h3_mastercard',
      'h3_paypal',
      'h3_solo',
      'h3_switch',
      'h3_visa',
      'h3_visaelectron',
      'h3_westernunion',
      'h3_wirecard',
      'h3_worldpay',
      
    // Other Elements // End
		
		// Footer // Start
		'h3_footer_status',
    
      // Tabs
      'tab_top_footer',
      'tab_middle_footer',
      'tab_bottom_footer',
    
      // Top Footer
      'heading_footer_background',
      'h3_footer_bg_color',
      'h3_footer_color_transparent',
      'h3_footer_slightly_transparent',
      'h3_footer_bg_pattern',
      'h3_footer_bg_pattern_upload',
      'h4_footer_bg_pattern_upload',
      'h3_footer_full_bg_image',
      'h4_footer_full_bg_image',
      
      'heading_footer_about',
      'h3_footer_about_heading_name',
      'h3_footer_about_us',
      
      'heading_footer_follow_us',
      'h3_footer_follow_heading_name',
      'h3_footer_fan_id',
      'h3_footer_fan_color',
      'h3_footer_fan_width',
      'h3_footer_fan_height',
      'h3_footer_fan_faces',
      'h3_footer_fan_location',
      
      'heading_footer_service',
      'h3_footer_service_contact',
      'h3_footer_service_returns',
      'h3_footer_service_sitemap',
      
      'heading_footer_extra',
      'h3_footer_extra_brand',
      'h3_footer_extra_voucher',
      'h3_footer_extra_affiliates',
      'h3_footer_extra_specials',
      
      'heading_footer_contact',
      'h3_footer_contact_icons',
      'h3_footer_contact_heading_name',
      'h3_footer_contact_us',
      'h3_footer_phone',
      'h3_footer_mobile',
      'h3_footer_skype',
      'h3_footer_send_us',
      
      'heading_footer_payment',
      'h3_footer_payment_top',
      'h3_footer_payment_bottom',
		
      // Middle Footer
      'heading_footer_info',
      'h3_footer_info_bg_color',
      'h3_footer_info_color_transparent',
      'h3_footer_info_slightly_transparent',
      'h3_footer_info_bg_pattern',
      'h3_footer_info_bg_pattern_upload',
      'h4_footer_info_bg_pattern_upload',
      'h3_footer_info_full_bg_image',
      'h4_footer_info_full_bg_image',
      
      // Middle Footer // Information Link
      'heading_footer_info_link',
		
      // Bottom footer
      'heading_footer_powered',
      'h3_footer_powered_bg_color',
      'h3_footer_powered_color_transparent',
      'h3_footer_powered_slightly_transparent',
      'h3_footer_powered_bg_pattern',
      'h3_footer_powered_bg_pattern_upload',
      'h4_footer_powered_bg_pattern_upload',
      'h3_footer_powered_full_bg_image',
      'h4_footer_powered_full_bg_image',
      
      // Bottom footer // Powered By
      'heading_footer_powered',
      'h3_footer_powered_text_options',
      'h3_footer_powered_text',
      
      // Bottom Footer // Go Up
      'heading_footer_go_up',
      
      // Font Size & Font Color // Heading Font
      'heading_footer_heading',
      'h3_footer_separator_color',

		//Footer // End
		
		// Font Style // Start
		'h3_font_status',
		
			// Google Font
			'heading_google_code',
			'h3_google_code',
			
			// Font
			'heading_font_style',
			'h3_font_style_font',
			'h3_font_style_font_size',
			'h3_font_style_selected_font_color',
			'h3_font_style_hover_font_color',
      'h3_font_style_font_color',
			'h3_font_style_font_sub_color',
			'h3_font_style_hyperlink_font_color',
      'h3_font_style_font_color_hover',
			'h3_font_style_font_sub_color_hover',
			'h3_font_style_font_weight',
			'h3_font_style_font_style',
			'h3_font_style_font_transform',
			'h3_font_style_font_google',
			'h3_font_style_font_shadow',
			
			// H1, Welcome
			'heading_font_h1',
			
			// H2 Title
			'heading_font_h2',
      
      // Hyperlink
      'heading_font_hyperlink',
			
			// Title font
			'heading_font_box_heading',

		// Font Style // End
		
		// Social Network // Start
		'h3_social_network_status',
		
			// Follow Us
			'heading_follow_us',
			'h3_follow_us_connect_name',
      'h3_follow_us_bg_color',
			'h3_follow_us_facebook_url',
			'h3_follow_us_flicker_url',
			'h3_follow_us_google_url',
			'h3_follow_us_instagram_url',
			'h3_follow_us_linkedin_url',
			'h3_follow_us_pinterest_url',
			'h3_follow_us_twitter_url',
			'h3_follow_us_vimeo_url',
			'h3_follow_us_youtube_url',
			'h3_follow_us_blogger_url',
			'h3_follow_us_envato_url',
		// Social Network // End
    
    // Additional Effects // Start
    'h3_effects_status',
      
      // TipTip
      'heading_tiptip',
      'h3_tiptip_options',
			
			// Box Slider
			'heading_box_slider',
			'h3_box_slider_options',
      
			// Slideshow at home page layout
			'heading_slideshow',
			'h3_slideshow_options',
			'note_slideshow',
			
      // Product Box shadow
      'heading_product_box_shadow',
      'h3_product_box_shadow_options',
		
		// Maintenance // Start
		'h3_maintenance_status',
		
			// Maintenance text
			'heading_maintenance_text',
			'h3_maintenance_text',
			
		// Maintenance // End
		
		// Custom Code // Start
		'h3_custom_code_status',
			// CSS
			'heading_css',
			
			// JavaScript
			'heading_js',
		// Custom Code // End
		
		);
		
		foreach ($text_strings as $text) {
			$this->data[$text] = $this->language->get($text);
		}


		if (isset($this->error['warning'])) {
			$this->data['error_warning'] = $this->error['warning'];
		} else {
			$this->data['error_warning'] = '';
		}
		
		$this->data['breadcrumbs'] = array();

		$this->data['breadcrumbs'][] = array(
				'text'      => $this->language->get('text_home'),
		'href'      => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL'),
				'separator' => false
		);

		$this->data['breadcrumbs'][] = array(
				'text'      => $this->language->get('text_module'),
		'href'      => $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'),
				'separator' => ' :: '
		);
	
		$this->data['breadcrumbs'][] = array(
				'text'      => $this->language->get('heading_title'),
		'href'      => $this->url->link('module/welcome', 'token=' . $this->session->data['token'], 'SSL'),
				'separator' => ' :: '
		);
		
		$this->data['action'] = $this->url->link('module/agnes_cp', 'token=' . $this->session->data['token'], 'SSL');
		
		$this->data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');
		
		$this->data['token'] = $this->session->data['token'];
		
		
		$config_data = array(
		'tsettings_status',
		
		// Background // Start
		'select_background_status',
		'radio_bg_settings_options',
		'input_main_bg_color',
		'select_main_bg_pattern',
		'radio_main_bg_pattern_image',
		'upload_main_bg_pattern_image',
		'image_pattern_preview',
		'select_main_bg_shadows',
		'radio_main_full_background_image',
		'upload_main_full_bg_image',
		'image_main_full_bg_preview',
		'radio_slideshow_options',
		'upload_bg_slideshow_first',
		'image_bg_slideshow_first_preview',
		'upload_bg_slideshow_second',
		'image_bg_slideshow_second_preview',
		'upload_bg_slideshow_third',
		'image_bg_slideshow_third_preview',
		'upload_bg_slideshow_fourth',
		'image_bg_slideshow_fourth_preview',
		// Background // End
		
		// Page layout // Start
		'select_layout_status',
		'radio_page_layout_options',
		'radio_responsive_options',
		'radio_layout_page',
		'input_custom_layout',
		'input_layout_margin_top',
		'input_layout_margin_bottom',
		'input_layout_margin_left',
		'input_layout_margin_right',
		'select_page_layout_shadow_options',
		'input_layout_shadow_size',
		// Page layout // End
				
		// Header
		'select_header_status',
		'radio_box_layout',

    // Top Header
    'radio_top_h_color_options',
    'radio_top_header_color_transparent',
    'input_top_header_bg_color',
    'select_top_header_slightly_transparent',
    'select_top_header_pattern',
    'radio_top_header_bg_pattern_image',
		'upload_top_header_bg_pattern_image',
		'input_top_header_border_color',
		'input_top_header_border_bottom',
    'radio_top_header_text_options',
    'radio_top_header_soc_net_options',
    'radio_top_header_soc_net_color',
		
		// Middle Header
			'radio_header_settings_options',
			'input_header_color',
			'radio_header_color_transparent',
			'select_header_slightly_transparent',
			'select_header_pattern',
			'radio_header_bg_pattern_image',
			'upload_header_bg_pattern_image',
			'image_header_pattern_preview',
			'radio_header_full_background_image',
			'upload_header_full_bg_image',
			'image_header_full_bg_preview',
			'radio_header_size_options',
			'input_header_size',
			'input_header_size_mobile',
			'input_header_size_tablet',
		
			// Logo
      'radio_header_logo_options',
      'input_header_logo_position_top',
      'input_header_logo_position_left',
      'input_header_logo_color',
      'radio_header_logo_image',
      'radio_header_logo',
      'input_header_logo_text',
      
      // Logo Font
      'select_logo_font_family',
      'input_logo_font_size',
      'select_logo_font_weight',
      'select_logo_font_style',
      'select_logo_font_transform',
      'radio_logo_font_google',
      'input_logo_font_google',
      'radio_logo_font_shadow',
      'input_logo_font_shadow',
		
			'radio_header_basket_options',
			'input_header_basket_position_top',
			'input_header_basket_position_right',
			'input_header_basket_position_tablet_top',
			'input_header_basket_position_tablet_right',
			'radio_basket_size',
			'radio_header_search_options',
			'input_header_search_position_top',
			'input_header_search_position_right',
			'input_header_search_position_tablet_top',
			'input_header_search_position_tablet_right',
			'radio_search_size',
			'radio_header_login_options',
			'input_header_login_position_top',
			'input_header_login_position_right',
			'input_header_login_position_tablet_top',
			'input_header_login_position_tablet_right',
			'radio_login_size',
			'radio_header_button_color_options',
			'input_header_button_color',
			'input_header_button_color_hover',
		
		// Bottom Header
			'radio_bottom_h_color_options',
			'radio_bottom_header_color_transparent',
			'input_bottom_header_bg_color',
			'select_bottom_header_slightly_transparent',
			'select_bottom_header_pattern',
			'radio_bottom_header_bg_pattern_image',
			'radio_header_additional_space_options',
			'upload_bottom_header_bg_pattern_image',
		// Header // End
		
		// Links // Start
		'select_link_status',
    
		'radio_link_color_options',
		'radio_link_color_transparent',
    'input_link_color',
		'select_link_bg_pattern',
		'select_link_slightly_transparent',
		'radio_link_pattern_image',
		'input_link_border_color',
		'input_link_border_top',
		'input_link_border_right',
		'input_link_border_bottom',
		'input_link_border_left',
    
		'radio_link_color_sub_options',
		'radio_link_color_sub_transparent',
    'input_link_color_sub',
		'select_link_sub_slightly_transparent',
		'radio_sub_link_pattern_image',
		'upload_link_pattern_image',
		'upload_sub_link_pattern_image',
		'input_link_sub_border_color',
		'input_link_sub_border_top',
		'input_link_sub_border_right',
		'input_link_sub_border_bottom',
		'input_link_sub_border_left',
		'radio_link_shadow',
		'input_link_shadow_size',
		
		'radio_link_position_options',
		'radio_link_position',
		'input_link_position_top',
		'input_link_position_right',
		'radio_link_align',
    
		'radio_link_text_spacing_options',
		'input_link_text_spacing_topbottom',
		'input_link_text_spacing_leftright',
		'input_link_text_sub_spacing_topbottom',
		'input_link_text_sub_spacing_leftright',
    
    'radio_link_options',
		'radio_link_home',
		'radio_link_home_icon',
		'radio_link_home_icon_hover',
		'radio_link_my_account',
		'radio_link_information',
		'radio_link_extras',
		'radio_link_shopping_cart',
		'radio_link_checkout',
		'radio_link_language',
		'radio_link_currency',
		'radio_link_search',
		'radio_link_shopping_cart_large',
    'radio_link_login',
		
		
		'radio_style_link_options',
		'input_link_text_size',
		'input_link_text_color',
		'input_link_text_color_hover',
    'radio_link_text_background_transparent',
		'input_link_background_color',
		'input_link_background_color_hover',
    'select_link_font_family',
    'select_link_font_weight',
    'select_link_font_style',
    'select_link_font_transform',
    'radio_link_font_google',
    'input_link_font_google',
    'radio_link_font_shadow',
    'input_link_font_shadow',

		'radio_style_sub_link_options',
		'input_link_sub_text_size',
		'input_link_sub_text_color',
		'input_link_sub_text_color_hover',
		'input_link_sub_background_color_hover',
    'select_sub_link_font_family',
    'select_sub_link_font_weight',
    'select_sub_link_font_style',
    'select_sub_link_font_transform',
    'radio_sub_link_font_google',
    'input_sub_link_font_google',
    'radio_sub_link_font_shadow',
    'input_sub_link_font_shadow',
		
		// Menu // Start
      'select_menu_status',
    
      // Menu Setting // Start
        'radio_style_menu_options',
        'radio_menu_size',
        
        // Menu Color combination
        'radio_menu_color_options',
        'input_menu_color',
        'radio_menu_color_transparent',
        'select_menu_pattern',
        'radio_menu_pattern_image',
        'input_menu_border_color',
        'input_menu_border_top',
        'input_menu_border_right',
        'input_menu_border_bottom',
        'input_menu_border_left',
        
        // Sub Menu Color combination
        'radio_menu_color_sub_options',
        'input_menu_color_sub',
        'radio_menu_color_sub_transparent',
        'select_menu_pattern_sub',
        'radio_sub_menu_pattern_image',
        'upload_menu_pattern_image',
        'upload_sub_menu_pattern_image',
        'input_menu_sub_border_color',
        'input_menu_sub_border_top',
        'input_menu_sub_border_right',
        'input_menu_sub_border_bottom',
        'input_menu_sub_border_left',
        'radio_menu_sub_shadow',
        'input_menu_shadow_size',
        
        // Spacing option
        'radio_menu_spacing_options',
        'input_menu_font_spacing_topbottom',
        'input_menu_font_spacing_leftright',
        'input_menu_font_sub_spacing_topbottom',
        'input_menu_font_sub_spacing_leftright',
        'input_menu_font_sub_level3_spacing_topbottom',
        'input_menu_font_sub_level3_spacing_leftright',
        
      // Menu Setting // End
    
      // Font size & Font Color // Start
      
        // Menu Font & Color combination
        'radio_menu_font_options',
        'input_menu_font_size',
        'input_menu_font_color',
        'input_menu_font_color_hover',
        'radio_menu_font_options',
        'select_menu_font_family',
        'select_menu_font_weight',
        'select_menu_font_style',
        'select_menu_font_transform',
        'radio_menu_font_google',
        'input_menu_font_google',
        'radio_menu_font_shadow',
        'input_menu_font_shadow',
    
        //Sub Menu Font & Color combination
        'input_menu_sub_font_size',
        'input_menu_sub_font_color',
        'input_menu_sub_font_color_hover',
        'radio_menu_sub_font_options',
        'select_menu_sub_font_family',
        'select_menu_sub_font_weight',
        'select_menu_sub_font_style',
        'select_menu_sub_font_transform',
        'radio_menu_sub_font_google',
        'input_menu_sub_font_google',
        'radio_menu_sub_font_shadow',
        'input_menu_sub_font_shadow',
    
        // Sub Level 3 Menu Font & Color combination
        'radio_menu_sub_level3_font_options',
        'input_menu_sub_level3_font_size',
        'input_menu_sub_level3_font_color',
        'input_menu_sub_level3_font_color_hover',
        'radio_menu_sub_level3_font_options',
        'select_menu_sub_level3_font_family',
        'select_menu_sub_level3_font_weight',
        'select_menu_sub_level3_font_style',
        'select_menu_sub_level3_font_transform',
        'radio_menu_sub_level3_font_google',
        'input_menu_sub_level3_font_google',
        'radio_menu_sub_level3_font_shadow',
        'input_menu_sub_level3_font_shadow',
        
      // Font size & Font Color // End
    
		// Menu // End
		
		// Body // Start
		'select_body_status',
		'radio_body_options',
		'input_body_color',
		'radio_body_color_transparent',
		'select_body_color_slightly_transparent',
		'input_body_border_color',
		'radio_body_border',
    'input_body_border_top',
    'input_body_border_right',
    'input_body_border_bottom',
    'input_body_border_left',
		// Body // End
		
		// Column & Block // Start
    'select_column_block_status',
    
      // Column
      'radio_column_options',
      'input_left_column_size',
      'input_center_column_left',
      'input_center_column_right',
      'input_right_column_size',
		
      // Block
      'radio_left_block_options',
      'input_left_block_color',
      'radio_left_block_transparent',
      'select_left_block_slightly_transparent',
      'input_left_block_border_color',
      'radio_left_block_border',
      
      'radio_middle_block_options',
      'input_middle_block_color',
      'radio_middle_block_transparent',
      'select_middle_block_slightly_transparent',
      'input_middle_block_border_color',
      'radio_middle_block_border',
      
      'radio_right_block_options',
      'input_right_block_color',
      'radio_right_block_transparent',
      'select_right_block_slightly_transparent',
      'input_right_block_border_color',
      'radio_right_block_border',

    // Column & Block // Start
    
    //Product Box & Info // Start
      'select_product_status',
       
       // Product Box
       'radio_box_style',
       'radio_box_shadow',
       'radio_box_zoom',
       'input_pro_box_size',
       'input_pro_box_size_left',
       'input_pro_box_size_right',
       'input_pro_box_size_both',
       'input_box_border_line_color',
       'radio_box_add_to_wish_list',
       'radio_box_add_to_compare',
       'radio_box_add_to_cart',
       'input_box_bg_color',
       'input_box_wish_list_bg_color',
       'input_box_compare_bg_color',
       'input_box_cart_bg_color',
       'radio_box_standart_button',
       
    // Product Box Font Style & Color
      
      //Product Box Name
      'radio_pro_box_name_font_options',
      'select_pro_box_name_font_family',
      'input_pro_box_name_font_size',
      'input_pro_box_name_font_color',
      'select_pro_box_name_font_weight',
      'select_pro_box_name_font_style',
      'select_pro_box_name_font_transform',
      'radio_pro_box_name_font_google',
      'input_pro_box_name_font_google',
      'radio_pro_box_name_font_shadow',
      'input_pro_box_name_font_shadow',
      
      // Product Box Old Price
      'radio_pro_old_price_font_options',
      'select_pro_old_price_font_family',
      'input_pro_old_price_font_size',
      'input_pro_old_price_font_color',
      'select_pro_old_price_font_weight',
      'select_pro_old_price_font_style',
      'radio_pro_old_price_font_google',
      'input_pro_old_price_font_google',
      'radio_pro_old_price_font_shadow',
      'input_pro_old_price_font_shadow',
      
      // Product Box Price
      'radio_pro_price_font_options',
      'select_pro_price_font_family',
      'input_pro_price_font_size',
      'input_pro_price_font_color',
      'select_pro_price_font_weight',
      'select_pro_price_font_style',
      'select_pro_price_font_transform',
      'radio_pro_price_font_google',
      'input_pro_price_font_google',
      'radio_pro_price_font_shadow',
      'input_pro_price_font_shadow',
       
       // Product info
       
         //Breadcrumbs 
        'radio_prod_info_bread_options',
        'input_prod_info_bread_bg_color',
        'radio_prod_info_bread_bg_color_transparent',
        'select_prod_info_bread_bg_pattern',
        'radio_prod_info_bread_bg_pattern_image',
        'radio_prod_info_bread_full_background_image',
        'upload_prod_info_bread_bg_pattern_image',
        'upload_prod_info_bread_full_bg_image',
        
        // Tabs
        'input_prod_info_tab_bg_color',
        'input_prod_info_tab_hover_bg_color',
        'input_prod_info_tab_selected_bg_color',
        
        // Button color
        'radio_prod_info_button_options',
        'input_prod_info_button_bg_color',
        'input_prod_info_button_hover_bg_color',
      
      // Product Info Font Style & Color
      
        // Product info Name
        'radio_pro_info_name_font_options',
        'select_pro_info_name_font_family',
        'input_pro_info_name_font_size',
        'input_pro_info_name_font_color',
        'select_pro_info_name_font_weight',
        'select_pro_info_name_font_style',
        'select_pro_info_name_font_transform',
        'radio_pro_info_name_font_google',
        'input_pro_info_name_font_google',
        'radio_pro_info_name_font_shadow',
        'input_pro_info_name_font_shadow',
        
        // Product info Breadcrumb Hyperlink Font
        'radio_pro_info_bread_a_font_options',
        'input_pro_info_bread_a_font_size',
        'input_pro_info_bread_a_font_color',
        'select_pro_info_bread_a_font_family',
        'select_pro_info_bread_a_font_weight',
        'select_pro_info_bread_a_font_style',
        'select_pro_info_bread_a_font_transform',
        'radio_pro_info_bread_a_font_google',
        'input_pro_info_bread_a_font_google',
        'radio_pro_info_bread_a_font_shadow',
        'input_pro_info_bread_a_font_shadow',
      
        // Product info Old Price
        'radio_pro_info_old_price_font_options',
        'select_pro_info_old_price_font_family',
        'input_pro_info_old_price_font_size',
        'input_pro_info_old_price_font_color',
        'select_pro_info_old_price_font_weight',
        'select_pro_info_old_price_font_style',
        'select_pro_info_old_price_font_transform',
        'radio_pro_info_old_price_font_google',
        'input_pro_info_old_price_font_google',
        'radio_pro_info_old_price_font_shadow',
        'input_pro_info_old_price_font_shadow',
        
        // Product info Price
        'radio_pro_info_price_font_options',
        'select_pro_info_price_font_family',
        'input_pro_info_price_font_size',
        'input_pro_info_price_font_color',
        'select_pro_info_price_font_weight',
        'select_pro_info_price_font_style',
        'select_pro_info_price_font_transform',
        'radio_pro_info_price_font_google',
        'input_pro_info_price_font_google',
        'radio_pro_info_price_font_shadow',
        'input_pro_info_price_font_shadow',
        
        // Product info Paragraphs
        'radio_pro_info_p_font_options',
        'select_pro_info_p_font_family',
        'input_pro_info_p_font_size',
        'input_pro_info_p_font_color',
        'select_pro_info_p_font_weight',
        'select_pro_info_p_font_style',
        'select_pro_info_p_font_transform',
        'radio_pro_info_p_font_google',
        'input_pro_info_p_font_google',
        'radio_pro_info_p_font_shadow',
        'input_pro_info_p_font_shadow',
        
        // Product info Paragraphs Hyperlink
        'radio_pro_info_p_a_font_options',
        'select_pro_info_p_a_font_family',
        'input_pro_info_p_a_font_size',
        'input_pro_info_p_a_font_color',
        'select_pro_info_p_a_font_weight',
        'select_pro_info_p_a_font_style',
        'select_pro_info_p_a_font_transform',
        'radio_pro_info_p_a_font_google',
        'input_pro_info_p_a_font_google',
        'radio_pro_info_p_a_font_shadow',
        'input_pro_info_p_a_font_shadow',
			
        // Product info Tabs
        'radio_tab_font_options',
        'select_tab_font_family',
        'input_tab_font_size',
        'input_tab_font_color',
        'input_tab_selected_font_color',
        'input_tab_hover_font_color',
        'select_tab_font_weight',
        'select_tab_font_style',
        'select_tab_font_transform',
        'radio_tab_font_google',
        'input_tab_font_google',
        'radio_tab_font_shadow',
        'input_tab_font_shadow',

    // Product Box & Info // End
    
    // Other Elements // Start

      // Category
      'radio_other_ele_category_font_options',
      'input_other_ele_category_font_size',
      'input_other_ele_category_font_color',
      'input_other_ele_category_font_color_hover',
      'input_other_ele_category_font_sub_color',
      'input_other_ele_category_font_sub_color_hover',
      'select_other_ele_category_font_family',
      'select_other_ele_category_font_weight',
      'select_other_ele_category_font_style',
      'select_other_ele_category_font_transform',
      'radio_other_ele_category_font_google',
      'input_other_ele_category_font_google',
      'radio_other_ele_category_font_shadow',
      'input_other_ele_category_font_shadow',
      
      // Breadcrumb
      'select_other_ele_status',
      'radio_other_ele_bread_options',
      'input_other_ele_bread_bg_color',
      'radio_other_ele_bread_bg_color_transparent',
      'select_other_ele_bread_bg_pattern',
			'select_other_ele_slightly_transparent',
      'radio_other_ele_bread_bg_pattern_image',
      'upload_other_ele_bread_bg_pattern_image',
      'image_other_ele_bread_pattern_preview',
      'radio_other_ele_bread_full_background_image',
      'upload_other_ele_bread_full_bg_image',
      'image_other_ele_bread_full_bg_preview',
      
      // Breadcrumb H1 Font
      'radio_other_ele_bread_font_options',
      'input_other_ele_bread_font_size',
      'input_other_ele_bread_font_color',
      'select_other_ele_bread_font_family',
      'select_other_ele_bread_font_weight',
      'select_other_ele_bread_font_style',
      'select_other_ele_bread_font_transform',
      'radio_other_ele_bread_font_google',
      'input_other_ele_bread_font_google',
      'radio_other_ele_bread_font_shadow',
      'input_other_ele_bread_font_shadow',
      
      // Breadcrumb Hyperlink Font
      'radio_other_ele_bread_a_font_options',
      'input_other_ele_bread_a_font_size',
      'input_other_ele_bread_a_font_color',
      'select_other_ele_bread_a_font_family',
      'select_other_ele_bread_a_font_weight',
      'select_other_ele_bread_a_font_style',
      'select_other_ele_bread_a_font_transform',
      'radio_other_ele_bread_a_font_google',
      'input_other_ele_bread_a_font_google',
      'radio_other_ele_bread_a_font_shadow',
      'input_other_ele_bread_a_font_shadow',
      
      // Payment Method
      'radio_other_ele_payment_options',
      'radio_radio_other_ele_americanexpress',
      'radio_radio_other_ele_cirrus',
      'radio_radio_other_ele_delta',
      'radio_radio_other_ele_dinersclub',
      'radio_radio_other_ele_directdebit',
      'radio_radio_other_ele_discover',
      'radio_radio_other_ele_egold',
      'radio_radio_other_ele_maestro',
      'radio_radio_other_ele_mastercard',
      'radio_radio_other_ele_paypal',
      'radio_radio_other_ele_solo',
      'radio_radio_other_ele_switch',
      'radio_radio_other_ele_visa',
      'radio_radio_other_ele_visaelectron',
      'radio_radio_other_ele_westernunion',
      'radio_radio_other_ele_wirecard',
      'radio_radio_other_ele_worldpay',
    // Other Elements // End

		// Footer // Start
		'select_footer_status',
		
			// Top Footer
			'radio_footer_background_options',
			'input_footer_bg_color',
			'radio_footer_color_transparent',
			'select_footer_slightly_transparent',
			'select_footer_bg_pattern',
			'upload_footer_bg_pattern_image',
			'radio_footer_bg_pattern_image',
			'radio_footer_full_background_image',
			'upload_footer_full_bg_image',
      
      // Top Footer // About Text
			'radio_footer_about_options',
      
      // Top Footer	// Facebook Fan Page
			'radio_footer_follow_options',
			'input_footer_fan_id',
			'radio_footer_fon_color',
			'input_footer_fan_width',
			'input_footer_fan_height',
			'radio_footer_fan_faces',
			'input_footer_fan_location',
			
			// Top Footer // Customer Service
			'radio_footer_service_options',
			'radio_footer_service_contact',
			'radio_footer_service_returns',
			'radio_footer_service_sitemap',
			
			// Top Footer // Extras
			'radio_footer_extra_options',
			'radio_footer_extra_brand',
			'radio_footer_extra_voucher',
			'radio_footer_extra_affiliates',
			'radio_footer_extra_specials',
      
      // Top Footer	// Contact Us
			'radio_footer_contact_options',
			'radio_footer_contact_icons',
      
      // Top Footer // Payment Method
      'radio_footer_payment_options',
      'radio_footer_payment_top',
      'radio_footer_payment_bottom',
			
			// Middle footer
			'radio_footer_info_options',
			'input_footer_info_bg_color',
			'radio_footer_info_color_transparent',
			'select_footer_info_slightly_transparent',
			'select_footer_info_bg_pattern',
			'radio_footer_info_bg_pattern_image',
			'upload_footer_info_bg_pattern_image',
			'radio_footer_info_full_background_image',
			'upload_footer_info_full_bg_image',
      
      // Middle footer // Information link
			'radio_footer_info_link_options',
			
			// Bottom footer
			'radio_footer_powered_options',
			'input_footer_powered_bg_color',
			'radio_footer_powered_color_transparent',
			'select_footer_powered_slightly_transparent',
			'select_footer_powered_bg_pattern',
			'radio_footer_powered_bg_pattern_image',
			'upload_footer_powered_bg_pattern_image',
			'radio_footer_powered_full_background_image',
			'upload_footer_powered_full_bg_image',
			
			// Bottom footer // Powered By
			'radio_footer_powered_text_options',
      
      // Bottom footer // Go Up
      'radio_footer_go_up_options',
      
      // Footer Font Size & Font Color // Heading
      'radio_footer_heading_font_options',
      'input_footer_heading_font_size',
      'input_footer_heading_font_color',
      'select_footer_heading_font_family',
      'select_footer_heading_font_weight',
      'select_footer_heading_font_style',
      'select_footer_heading_font_transform',
      'radio_footer_heading_font_google',
      'input_footer_heading_font_google',
      'radio_footer_heading_font_shadow',
      'input_footer_heading_font_shadow',
           
      // Footer Font Size & Font Color // About Us
      'radio_footer_about_font_options',
      'input_footer_about_font_size',
      'input_footer_about_font_color',
      'input_footer_about_hyperlink_font_color',
      'input_footer_about_font_color_hover',
      'select_footer_about_font_family',
      'select_footer_about_font_weight',
      'select_footer_about_font_style',
      'select_footer_about_font_transform',
      'radio_footer_about_font_google',
      'input_footer_about_font_google',
      'radio_footer_about_font_shadow',
      'input_footer_about_font_shadow',
      
      // Footer Font Size & Font Color // Customer Service & Extras
      'radio_footer_cust_extra_font_options',
      'input_footer_cust_extra_font_size',
      'input_footer_cust_extra_font_color',
      'input_footer_cust_extra_font_color_hover',
      'select_footer_cust_extra_font_family',
      'select_footer_cust_extra_font_weight',
      'select_footer_cust_extra_font_style',
      'select_footer_cust_extra_font_transform',
      'radio_footer_cust_extra_font_google',
      'input_footer_cust_extra_font_google',
      'radio_footer_cust_extra_font_shadow',
      'input_footer_cust_extra_font_shadow',
      
      // Footer Font Size & Font Color // Contact Us
      'radio_footer_contact_us_font_options',
      'input_footer_contact_us_font_size',
      'input_footer_contact_us_font_color',
      'input_footer_contact_us_hyperlink_font_color',
      'input_footer_contact_us_font_color_hover',
      'select_footer_contact_us_font_family',
      'select_footer_contact_us_font_weight',
      'select_footer_contact_us_font_style',
      'select_footer_contact_us_font_transform',
      'radio_footer_contact_us_font_google',
      'input_footer_contact_us_font_google',
      'radio_footer_contact_us_font_shadow',
      'input_footer_contact_us_font_shadow',
      
      // Footer Font Size & Font Color // Information
      'radio_footer_infor_font_options',
      'input_footer_infor_font_size',
      'input_footer_infor_font_color',
      'input_footer_infor_font_color_hover',
      'input_footer_infor_separator_color',
      'select_footer_infor_font_family',
      'select_footer_infor_font_weight',
      'select_footer_infor_font_style',
      'select_footer_infor_font_transform',
      'radio_footer_infor_font_google',
      'input_footer_infor_font_google',
      'radio_footer_infor_font_shadow',
      'input_footer_infor_font_shadow',
      
      // Footer Font Size & Font Color // Powered By
      'radio_footer_powered_font_options',
      'input_footer_powered_font_size',
      'input_footer_powered_font_color',
      'input_footer_powered_hyperlink_font_color',
      'input_footer_powered_font_color_hover',
      'select_footer_powered_font_family',
      'select_footer_powered_font_weight',
      'select_footer_powered_font_style',
      'select_footer_powered_font_transform',
      'radio_footer_powered_font_google',
      'input_footer_powered_font_google',
      'radio_footer_powered_font_shadow',
      'input_footer_powered_font_shadow',
      
		// Footer // End
		
		// Font Family // Start
		'select_font_status',

			// Google Font
			'radio_google_code_options',
			'textarea_google_code',
			
			// Body Font
			'radio_body_font_options',
			'select_body_font_family',
			'input_body_font_size',
			'input_body_font_color',
			'select_body_font_weight',
			'select_body_font_style',
			'select_body_font_transform',
			'radio_body_font_google',
			'input_body_font_google',
			'radio_body_font_shadow',
			'input_body_font_shadow',
			
			// H1, Welcome Font
			'radio_h1_font_options',
			'select_h1_font_family',
			'input_h1_font_size',
			'input_h1_font_color',
			'select_h1_font_weight',
			'select_h1_font_style',
			'select_h1_font_transform',
			'radio_h1_font_google',
			'input_h1_font_google',
			'radio_h1_font_shadow',
			'input_h1_font_shadow',
			
			// H2, Title Font
			'radio_h2_font_options',
			'select_h2_font_family',
			'input_h2_font_size',
			'input_h2_font_color',
			'select_h2_font_weight',
			'select_h2_font_style',
			'select_h2_font_transform',
			'radio_h2_font_google',
			'input_h2_font_google',
			'radio_h2_font_shadow',
			'input_h2_font_shadow',
      
      // Hyperlink Font
      'radio_hyperlink_font_options',
      'select_hyperlink_font_family',
      'input_hyperlink_font_size',
      'input_hyperlink_font_color',
      'input_hyperlink_font_color_hover',
      'select_hyperlink_font_weight',
      'select_hyperlink_font_style',
      'select_hyperlink_font_transform',
      'radio_hyperlink_font_google',
      'input_hyperlink_font_google',
      'radio_hyperlink_font_shadow',
      'input_hyperlink_font_shadow',
			
			// Box Heading Font
			'radio_box_heading_font_options',
			'select_box_heading_font_family',
			'input_box_heading_font_size',
			'input_box_heading_font_color',
			'select_box_heading_font_weight',
			'select_box_heading_font_style',
			'select_box_heading_font_transform',
			'radio_box_heading_font_google',
			'input_box_heading_font_google',
			'radio_box_heading_font_shadow',
			'input_box_heading_font_shadow',
			
		// Font Family // End

		
		// Social Network // Start
		'select_social_network_status',
		
			// Follow Us
			'radio_follow_us_options',
			'radio_follow_us_facebook',
			'input_follow_us_facebook_url',
      'input_follow_us_bg_color_facebook',
			'radio_follow_us_flicker',
			'input_follow_us_flicker_url',
      'input_follow_us_bg_color_flicker',
			'radio_follow_us_google',
			'input_follow_us_google_url',
      'input_follow_us_bg_color_google',
			'radio_follow_us_instagram',
			'input_follow_us_instagram_url',
      'input_follow_us_bg_color_instagram',
			'radio_follow_us_linkedin',
			'input_follow_us_linkedin_url',
      'input_follow_us_bg_color_linkedin',
			'radio_follow_us_pinterest',
			'input_follow_us_pinterest_url',
      'input_follow_us_bg_color_pinterest',
			'radio_follow_us_twitter',
			'input_follow_us_twitter_url',
      'input_follow_us_bg_color_twitter',
			'radio_follow_us_vimeo',
			'input_follow_us_vimeo_url',
      'input_follow_us_bg_color_vimeo',
			'radio_follow_us_youtube',
			'input_follow_us_youtube_url',
      'input_follow_us_bg_color_youtube',
			'radio_follow_us_blogger',
			'input_follow_us_blogger_url',
      'input_follow_us_bg_color_blogger',
			'radio_follow_us_envato',
			'input_follow_us_envato_url',
      'input_follow_us_bg_color_envato',
		// Social Network // End
    
    // Additional Effects // Start
    'select_effects_status',
      
      // TipTip
      'radio_tiptip_options',
			
			// Box Slider
			'radio_box_slider_options',
      
			// Slideshow at home page layout
			'radio_slideshow_home_options',
			
      // Product Box shadow
      'radio_product_box_shadow_options',
		
		// Maintenance // Start
		'select_maintenance_status',
		
			// Maintenance text
			'radio_maintenance_options',

		// Maintenance // End
		
		// Custom Code // Start
		'select_custom_code_status',
			// CSS
			'textarea_css',
			'radio_css_options',
			
			// JavaScript
			'radio_js_options',
			'textarea_js'
      
		// Custom Code // End
		
		);
		
		foreach ($config_data as $conf) {
			if (isset($this->request->post[$conf])) {
				$this->data[$conf] = $this->request->post[$conf];
			} else {
				$this->data[$conf] = $this->config->get($conf);
			}
		}
		
		
		$this->load->model('localisation/language');
		
		$languages = $this->model_localisation_language->getLanguages();

		foreach ($languages as $language) {
			$multi_strings = array(
			'textarea_top_header_text_',
			'textarea_add_space_text_',
			'input_footer_about_name_',
			'textarea_footer_about_',
			'input_footer_follow_name_',
			'input_footer_contact_name_',
			'textarea_footer_contact_',
			'input_footer_phone_',
			'input_footer_mobile_',
			'input_footer_skype_',
			'textarea_footer_send_us_',
			'textarea_footer_powered_',
			'input_follow_us_connect_name_',
			'input_payment_name_',
			'textarea_maintenance_text_'
			);

			foreach ($multi_strings as $multi) {
				if (isset($this->request->post[$multi . $language['language_id']])) {
					$this->data[$multi . $language['language_id']] = $this->request->post[$multi . $language['language_id']];
				} else {
					$this->data[$multi . $language['language_id']] = $this->config->get($multi . $language['language_id']);
				}
			}
		}

		$this->data['text_image_manager'] = 'Image manager';
		
		$this->load->model('localisation/language');
		
		$this->data['languages'] = $this->model_localisation_language->getLanguages();
		
		$this->load->model('design/banner');
		
		$this->data['banners'] = $this->model_design_banner->getBanners();
		
		
		$this->template = 'agnes/agnes_cp.tpl';
		$this->children = array(
			'common/header',
			'common/footer',
		);
		
				// BG SLIDESHOW
		if (isset($this->data['upload_bg_slideshow_first']) && $this->data['upload_bg_slideshow_first'] != "" && file_exists(DIR_IMAGE . $this->data['upload_bg_slideshow_first'])) {
			$this->data['image_bg_slideshow_first_preview'] = $this->model_tool_image->resize($this->data['upload_bg_slideshow_first'], 100, 100);
		} else {
			$this->data['image_bg_slideshow_first_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}

		if (isset($this->data['upload_bg_slideshow_second']) && $this->data['upload_bg_slideshow_second'] != "" && file_exists(DIR_IMAGE . $this->data['upload_bg_slideshow_second'])) {
			$this->data['image_bg_slideshow_second_preview'] = $this->model_tool_image->resize($this->data['upload_bg_slideshow_second'], 100, 100);
		} else {
			$this->data['image_bg_slideshow_second_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}

		if (isset($this->data['upload_bg_slideshow_third']) && $this->data['upload_bg_slideshow_third'] != "" && file_exists(DIR_IMAGE . $this->data['upload_bg_slideshow_third'])) {
			$this->data['image_bg_slideshow_third_preview'] = $this->model_tool_image->resize($this->data['upload_bg_slideshow_third'], 100, 100);
		} else {
			$this->data['image_bg_slideshow_third_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		if (isset($this->data['upload_bg_slideshow_fourth']) && $this->data['upload_bg_slideshow_fourth'] != "" && file_exists(DIR_IMAGE . $this->data['upload_bg_slideshow_fourth'])) {
			$this->data['image_bg_slideshow_fourth_preview'] = $this->model_tool_image->resize($this->data['upload_bg_slideshow_fourth'], 100, 100);
		} else {
			$this->data['image_bg_slideshow_fourth_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  BG PATTERN IMAGE
		if (isset($this->data['upload_main_bg_pattern_image']) && $this->data['upload_main_bg_pattern_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_main_bg_pattern_image'])) {
			$this->data['image_pattern_preview'] = $this->model_tool_image->resize($this->data['upload_main_bg_pattern_image'], 100, 100);
		} else {
			$this->data['image_pattern_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  BG FULL IMAGE
		if (isset($this->data['upload_main_full_bg_image']) && $this->data['upload_main_full_bg_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_main_full_bg_image'])) {
			$this->data['image_main_full_bg_preview'] = $this->model_tool_image->resize($this->data['upload_main_full_bg_image'], 100, 100);
		} else {
			$this->data['image_main_full_bg_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  TOP HEADER BG PATTERN IMAGE
		if (isset($this->data['upload_top_header_bg_pattern_image']) && $this->data['upload_top_header_bg_pattern_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_top_header_bg_pattern_image'])) {
			$this->data['image_top_header_pattern_preview'] = $this->model_tool_image->resize($this->data['upload_top_header_bg_pattern_image'], 100, 100);
		} else {
			$this->data['image_top_header_pattern_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  MIDDLE HEADER BG PATTERN IMAGE
		if (isset($this->data['upload_header_bg_pattern_image']) && $this->data['upload_header_bg_pattern_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_header_bg_pattern_image'])) {
			$this->data['image_header_pattern_preview'] = $this->model_tool_image->resize($this->data['upload_header_bg_pattern_image'], 100, 100);
		} else {
			$this->data['image_header_pattern_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  HEADER BG FULL IMAGE
		if (isset($this->data['upload_header_full_bg_image']) && $this->data['upload_header_full_bg_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_header_full_bg_image'])) {
			$this->data['image_header_full_bg_preview'] = $this->model_tool_image->resize($this->data['upload_header_full_bg_image'], 100, 100);
		} else {
			$this->data['image_header_full_bg_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  BOTTOM HEADER BG PATTERN IMAGE
		if (isset($this->data['upload_bottom_header_bg_pattern_image']) && $this->data['upload_bottom_header_bg_pattern_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_bottom_header_bg_pattern_image'])) {
			$this->data['image_bottom_header_pattern_preview'] = $this->model_tool_image->resize($this->data['upload_bottom_header_bg_pattern_image'], 100, 100);
		} else {
			$this->data['image_bottom_header_pattern_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}

		//  LINK BG PATTERN IMAGE
		if (isset($this->data['upload_link_pattern_image']) && $this->data['upload_link_pattern_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_link_pattern_image'])) {
			$this->data['image_link_pattern_preview'] = $this->model_tool_image->resize($this->data['upload_link_pattern_image'], 100, 100);
		} else {
			$this->data['image_link_pattern_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  SUB LINK BG PATTERN IMAGE
		if (isset($this->data['upload_sub_link_pattern_image']) && $this->data['upload_sub_link_pattern_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_sub_link_pattern_image'])) {
			$this->data['image_sub_link_pattern_preview'] = $this->model_tool_image->resize($this->data['upload_sub_link_pattern_image'], 100, 100);
		} else {
			$this->data['image_sub_link_pattern_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}

		//  MENU BG PATTERN IMAGE
		if (isset($this->data['upload_menu_pattern_image']) && $this->data['upload_menu_pattern_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_menu_pattern_image'])) {
			$this->data['image_menu_pattern_preview'] = $this->model_tool_image->resize($this->data['upload_menu_pattern_image'], 100, 100);
		} else {
			$this->data['image_menu_pattern_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  SUB MENU BG PATTERN IMAGE
		if (isset($this->data['upload_sub_menu_pattern_image']) && $this->data['upload_sub_menu_pattern_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_sub_menu_pattern_image'])) {
			$this->data['image_sub_menu_pattern_preview'] = $this->model_tool_image->resize($this->data['upload_sub_menu_pattern_image'], 100, 100);
		} else {
			$this->data['image_sub_menu_pattern_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  PRODUCT INFO BREADCRUMB PATTERN IMAGE
		if (isset($this->data['upload_prod_info_bread_bg_pattern_image']) && $this->data['upload_prod_info_bread_bg_pattern_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_prod_info_bread_bg_pattern_image'])) {
			$this->data['image_prod_info_bread_pattern_preview'] = $this->model_tool_image->resize($this->data['upload_prod_info_bread_bg_pattern_image'], 100, 100);
		} else {
			$this->data['image_prod_info_bread_pattern_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  PRODUCT INFO BREADCRUMB FULL IMAGE
		if (isset($this->data['upload_prod_info_bread_full_bg_image']) && $this->data['upload_prod_info_bread_full_bg_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_prod_info_bread_full_bg_image'])) {
			$this->data['image_prod_info_bread_full_bg_preview'] = $this->model_tool_image->resize($this->data['upload_prod_info_bread_full_bg_image'], 100, 100);
		} else {
			$this->data['image_prod_info_bread_full_bg_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  OTHER BREADCRUMB PATTERN IMAGE
		if (isset($this->data['upload_other_ele_bread_bg_pattern_image']) && $this->data['upload_other_ele_bread_bg_pattern_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_other_ele_bread_bg_pattern_image'])) {
			$this->data['image_other_ele_bread_pattern_preview'] = $this->model_tool_image->resize($this->data['upload_other_ele_bread_bg_pattern_image'], 100, 100);
		} else {
			$this->data['image_other_ele_bread_pattern_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  OTHER BREADCRUMB FULL IMAGE
		if (isset($this->data['upload_other_ele_bread_full_bg_image']) && $this->data['upload_other_ele_bread_full_bg_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_other_ele_bread_full_bg_image'])) {
			$this->data['image_other_ele_bread_full_bg_preview'] = $this->model_tool_image->resize($this->data['upload_other_ele_bread_full_bg_image'], 100, 100);
		} else {
			$this->data['image_other_ele_bread_full_bg_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  FOOTER BG PATTERN IMAGE
		if (isset($this->data['upload_footer_bg_pattern_image']) && $this->data['upload_footer_bg_pattern_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_footer_bg_pattern_image'])) {
			$this->data['image_footer_pattern_preview'] = $this->model_tool_image->resize($this->data['upload_footer_bg_pattern_image'], 100, 100);
		} else {
			$this->data['image_footer_pattern_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  FOOTER BG FULL IMAGE
		if (isset($this->data['upload_footer_full_bg_image']) && $this->data['upload_footer_full_bg_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_footer_full_bg_image'])) {
			$this->data['image_footer_full_bg_preview'] = $this->model_tool_image->resize($this->data['upload_footer_full_bg_image'], 100, 100);
		} else {
			$this->data['image_footer_full_bg_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  FOOTER MIDDLE BG PATTERN IMAGE
		if (isset($this->data['upload_footer_info_bg_pattern_image']) && $this->data['upload_footer_info_bg_pattern_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_footer_info_bg_pattern_image'])) {
			$this->data['image_footer_info_pattern_preview'] = $this->model_tool_image->resize($this->data['upload_footer_info_bg_pattern_image'], 100, 100);
		} else {
			$this->data['image_footer_info_pattern_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  FOOTER MIDDLE BG FULL IMAGE
		if (isset($this->data['upload_footer_info_full_bg_image']) && $this->data['upload_footer_info_full_bg_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_footer_info_full_bg_image'])) {
			$this->data['image_footer_info_full_bg_preview'] = $this->model_tool_image->resize($this->data['upload_footer_info_full_bg_image'], 100, 100);
		} else {
			$this->data['image_footer_info_full_bg_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  FOOTER BOTTOM BG PATTERN IMAGE
		if (isset($this->data['upload_footer_powered_bg_pattern_image']) && $this->data['upload_footer_powered_bg_pattern_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_footer_powered_bg_pattern_image'])) {
			$this->data['image_footer_powered_pattern_preview'] = $this->model_tool_image->resize($this->data['upload_footer_powered_bg_pattern_image'], 100, 100);
		} else {
			$this->data['image_footer_powered_pattern_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		//  FOOTER BOTTOM BG FULL IMAGE
		if (isset($this->data['upload_footer_powered_full_bg_image']) && $this->data['upload_footer_powered_full_bg_image'] != "" && file_exists(DIR_IMAGE . $this->data['upload_footer_powered_full_bg_image'])) {
			$this->data['image_footer_powered_full_bg_preview'] = $this->model_tool_image->resize($this->data['upload_footer_powered_full_bg_image'], 100, 100);
		} else {
			$this->data['image_footer_powered_full_bg_preview'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);
		}
		
		// NO IMAGE
		$this->data['no_image'] = $this->model_tool_image->resize('no_image.jpg', 100, 100);

		$this->response->setOutput($this->render());
	}
	
	
	private function validate() {
		if (!$this->user->hasPermission('modify', 'module/agnes_cp')) {
      		$this->error['warning'] = $this->language->get('error_permission');  
		}
		
		if (!$this->error) {
	  		return true;
		} else {
	  		return false;
		}
	}
}
?>