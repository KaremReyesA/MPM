<?php echo $header; ?><div style="clear:both;"></div>
<?php include ('view/agnes/php/th_settings.php'); ?>
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form">
	<input type="hidden" name="save_continue" value="0" id="save_continue">
	<!-- Header Bar // Start -->
    <div id="header_bar" class="default">
      <div id="logo_box">
        <div id="logo"></div>
      </div>
      <div id="save_button">
        <select name="tsettings_status">
          <?php	if ($tsettings_status) { ?>
          <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
          <option value="0"><?php	echo $text_disabled; ?></option>
          <?php } else { ?>
          <option value="1"><?php echo $text_enabled; ?></option>
          <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
          <?php	} ?>
        </select>
        <a onclick="location = '<?php echo $cancel; ?>';" class="button"><span><?php echo $button_cancel; ?></span></a>
        <a onclick="$('#form').submit();" class="button"><span><?php echo $button_save; ?></span></a>
        <a id="save_edit" class="button"><span><?php echo $button_save_continue; ?></span></a>
      </div>
      <div id="info" class="someClass" title="<?php echo $someclass_info; ?>"></div>
    </div>
  <!-- Header Bar // End -->
	<div style="clear:both;"></div>
  <!-- Tab Container // Start -->
    <div id="tab-container">
      <ul>
        <li><a href="#tab1"><?php echo $tab_introduction; ?></a></li>
        <li><a href="#tab2"><?php echo $tab_background; ?></a></li>
        <li><a href="#tab3"><?php echo $tab_page_layout; ?></a></li>
        <li><a href="#tab4"><?php echo $tab_header; ?></a></li>
        <li><a href="#tab5" style="padding-left: 35px;"><?php echo $tab_links; ?></a></li>
        <li><a href="#tab6" style="padding-left: 35px;"><?php echo $tab_menu; ?></a></li>
        <li><a href="#tab7"><?php echo $tab_body; ?></a></li>
        <li><a href="#tab8"><?php echo $tab_column_and_block; ?></a></li>
        <li><a href="#tab9"><?php echo $tab_product_box_and_info; ?></a></li>
        <li><a href="#tab10"><?php echo $tab_other_elements; ?></a></li>
        <li><a href="#tab11"><?php echo $tab_footer; ?></a></li>
        <li><a href="#tab12"><?php echo $tab_font_style_and_color; ?></a></li>
        <li><a href="#tab13"><?php echo $tab_social_network; ?></a></li>
        <li><a href="#tab14"><?php echo $tab_additional_effects; ?></a></li>
        <li><a href="#tab15"><?php echo $tab_maintenance; ?></a></li>
        <li><a href="#tab16"><?php echo $tab_custom_code; ?></a></li>
      </ul>
    </div>
  <!-- Tab Container // End -->

  <!-- Main Container // Start -->
    <div id="main-container">
      <?php include ('view/agnes/php/introduction.php'); ?>
      <?php include ('view/agnes/php/background.php'); ?>
      <?php include ('view/agnes/php/page_layout.php'); ?>
      <?php include ('view/agnes/php/header.php'); ?>
      <?php include ('view/agnes/php/link.php'); ?>
      <?php include ('view/agnes/php/menu.php'); ?>
      <?php include ('view/agnes/php/body.php'); ?>
      <?php include ('view/agnes/php/colu_block.php'); ?>
      <?php include ('view/agnes/php/box_info.php'); ?>
      <?php include ('view/agnes/php/other_ele.php'); ?>
      <?php include ('view/agnes/php/footer.php'); ?>
      <?php include ('view/agnes/php/font_style.php'); ?>
      <?php include ('view/agnes/php/soc_net.php'); ?>
      <?php include ('view/agnes/php/addi_effe.php'); ?>
      <?php include ('view/agnes/php/mainten.php'); ?>
      <?php include ('view/agnes/php/cus_code.php'); ?>
      <!-- Go Up // Start  -->
        <div id="go_up_block"><div id="go_up"><a href="#top"></a></div></div>
      <!-- Go Up // End -->
    </div>
  <!-- Main Container // End -->
</form>
	<div style="clear:both;"></div>
<script type="text/javascript"><!--
$(document).ready(function(){
  $('#save_edit').click(function(){
  $('#save_continue').val('1');
  $('#form').submit();
 });
});
//--></script>
  
<script type="text/javascript"><!--
$(document).ready(function () {
 var location = window.location;
 var found = false;
 $("#tab-container a").each(function(){
    var href = $(this).attr("href");
    if(href==location){
       $(this).parent().addClass("selected");
       found = true;
    }
 });
 if(!found){
    $("#tab-container li:first").addClass("selected");
 }
});
//--></script> 

<script type="text/javascript"><!--
$(document).ready(function(){
 $('#tab-container ul li a').tabs();
 $('#header-htabs a').tabs();
 $('#link-htabs a').tabs();
 $('#menu-htabs a').tabs();
 $('#column-htabs a').tabs();
 $('#pro-box-info-htabs a').tabs();
 $('#language-top-header a').tabs();
 $('#language-bottom-header a').tabs();
 $('#language-about a').tabs();
 $('#language-follow a').tabs();
 $('#language-contact a').tabs();
 $('#language-payment a').tabs();
 $('#language-powered a').tabs();
 $('#language-maintenance a').tabs();
 $('#language-connect a').tabs();
 $('#tab-container ul li ul li a').tabs();
 $('#other-ele-tab a').tabs();
 $('#font-tab a').tabs();
 $('#footer-tab a').tabs();
 $('#product-tab a').tabs();
 $('#custom-code-tab a').tabs();
});
//--></script>

<script type="text/javascript"><!--
$(document).ready(function() {
  $('#input_main_bg_color, #input_header_color, #input_header_logo_color, #input_header_button_color, #input_header_button_color_hover, #input_top_header_bg_color, #input_top_header_border_color, #input_bottom_header_bg_color, #input_link_color, #input_link_border_color, #input_link_color_sub, #input_link_sub_border_color, #input_link_text_color, #input_link_text_color_hover, #input_link_background_color, #input_link_background_color_hover, #input_link_sub_text_color, #input_link_sub_text_color_hover, #input_link_sub_background_color_hover, #input_menu_color, #input_menu_color_sub, #input_menu_border_color, #input_menu_sub_border_color, #input_menu_font_color, #input_menu_font_color_hover, #input_menu_sub_font_color, #input_menu_sub_font_color_hover, #input_menu_sub_level3_font_color, #input_menu_sub_level3_font_color_hover, #input_body_color, #input_body_border_color, #input_left_block_color, #input_left_block_border_color, #input_middle_block_color, #input_middle_block_border_color, #input_right_block_color, #input_right_block_border_color, #input_box_border_line_color, #input_box_bg_color, #input_box_wish_list_bg_color, #input_box_compare_bg_color, #input_box_cart_bg_color, #input_pro_box_name_font_color, #input_pro_old_price_font_color, #input_pro_price_font_color, #input_prod_info_bread_bg_color, #input_prod_info_tab_bg_color, #input_prod_info_tab_hover_bg_color, #input_prod_info_tab_selected_bg_color, #input_prod_info_button_bg_color, #input_prod_info_button_hover_bg_color, #input_pro_info_name_font_color, #input_pro_info_bread_a_font_color, #input_pro_info_old_price_font_color, #input_other_ele_bread_font_color, #input_other_ele_bread_a_font_color, #input_footer_bg_color, #input_footer_info_bg_color, #input_footer_powered_bg_color, #input_footer_heading_font_color, #input_footer_about_font_color, #input_footer_about_hyperlink_font_color, #input_footer_about_font_color_hover, #input_footer_cust_extra_font_color, #input_footer_cust_extra_font_color_hover, #input_footer_contact_us_font_color, #input_footer_contact_us_hyperlink_font_color, #input_footer_infor_font_color, #input_footer_infor_font_color_hover, #input_footer_infor_separator_color, #input_footer_contact_us_font_color_hover, #input_footer_powered_font_color, #input_footer_powered_hyperlink_font_color, #input_footer_powered_font_color_hover, #input_follow_us_bg_color_facebook, #input_follow_us_bg_color_flicker, #input_follow_us_bg_color_google, #input_follow_us_bg_color_instagram, #input_follow_us_bg_color_linkedin, #input_follow_us_bg_color_pinterest, #input_follow_us_bg_color_twitter, #input_follow_us_bg_color_vimeo, #input_follow_us_bg_color_youtube, #input_follow_us_bg_color_blogger, #input_follow_us_bg_color_envato, #input_body_font_color, #input_breadcrumbs_font_color, #input_h1_font_color, #input_h2_font_color, #input_hyperlink_font_color, #input_hyperlink_font_color_hover, #input_box_heading_font_color, #input_pro_name_font_color, #input_pro_info_name_font_color #input_pro_price_font_color, #input_pro_info_price_font_color, #input_pro_info_p_font_color, #input_pro_info_p_a_font_color, #input_tab_font_color, #input_other_ele_category_font_color, #input_other_ele_category_font_color_hover, #input_other_ele_category_font_sub_color, #input_other_ele_category_font_sub_color_hover, #input_other_ele_bread_bg_color, #input_tab_selected_font_color, #input_tab_hover_font_color, #input_buttons_font_color').ColorPicker({
    onSubmit: function(hsb, hex, rgb, el) {
      $(el).val(hex);
      $(el).ColorPickerHide();
    },
    onBeforeShow: function () {
      $(this).ColorPickerSetColor(this.value);
    }
  })
  .bind('keyup', function(){
    $(this).ColorPickerSetColor(this.value);
  });
});
//--></script>

<script type="text/javascript"><!--
function image_upload(field, thumb) {
	$('#dialog').remove();
	
	$('#main-container').prepend('<div id="dialog" style="padding: 3px 0px 0px 0px;"><iframe src="index.php?route=common/filemanager&token=<?php echo $token; ?>&field=' + encodeURIComponent(field) + '" style="padding:0; margin: 0; display: block; width: 100%; height: 100%;" frameborder="no" scrolling="auto"></iframe></div>');
	
	$('#dialog').dialog({
		title: '<?php echo $text_image_manager; ?>',
		close: function (event, ui) {
			if ($('#' + field).attr('value')) {
				$.ajax({
					url: 'index.php?route=common/filemanager/image&token=<?php echo $token; ?>&image=' + encodeURIComponent($('#' + field).attr('value')),
					dataType: 'text',
					success: function(data) {
						$('#' + thumb).replaceWith('<img src="' + data + '" alt="" id="' + thumb + '" />');
					}
				});
			}
		},	
		bgiframe: false,
		width: 700,
		height: 400,
		resizable: false,
		modal: false
	});
};
//--></script>

<script type="text/javascript"><!--
$(document).ready(function(){
	var header_bar = $('#header_bar'),
		pos = header_bar.offset();
		
		$(window).scroll(function(){
			if($(this).scrollTop() > pos.top+header_bar.height() && header_bar.hasClass('default')){
				header_bar.fadeOut('slow', function(){
					$(this).removeClass('default').addClass('fixed').fadeIn('slow');
				});
			} else if($(this).scrollTop() <= pos.top && header_bar.hasClass('fixed')){
				header_bar.fadeOut('fast', function(){
					$(this).removeClass('fixed').addClass('default').fadeIn('fast');
				});
			}
		});
});
//--></script>

<script type="text/javascript"><!--
$(document).ready(function(){
	$("#go_up_block").hide();
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$('#go_up_block').fadeIn();
				} else {
					$('#go_up_block').fadeOut();
				}
			});
			
			$('#go_up_block #go_up a').click(function () {
				$('body,html').animate({
					scrollTop: 0 }, 500);
				return false;
			});
		});
});
//--></script>
<script type="text/javascript" src="view/javascript/ckeditor/ckeditor.js"></script> 
<script type="text/javascript"><!--
<?php foreach ($languages as $language) { ?>
CKEDITOR.replace('description<?php echo $language['language_id']; ?>', {
	filebrowserBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserImageBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserFlashBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserImageUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserFlashUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>'
});
<?php } ?>
//--></script> 
<script type="text/javascript"><!--
	$('.css').markItUp(mySettings_css);
	$('.html').markItUp(mySettings);			
	$('.js').markItUp(mySettings_js);			
//--></script>

<script type="text/javascript"><!--
$(document).ready(function(){
	$(".someClass").tipTip();
});
//--></script>
</div>
</body></html>