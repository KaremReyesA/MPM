<!-- Tab09 // Start // Product Box & Info -->
  <div id="tab9">
    <table class="red">
      <tr><td class="h3"><?php echo $h3_product_status; ?></td>
          <td>
            <select name="select_product_status">
              <?php if ($select_product_status) { ?>
                <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                <option value="0"><?php echo $text_disabled; ?></option>
              <?php } else { ?>
                <option value="1"><?php echo $text_enabled; ?></option>
                <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
              <?php } ?>
            </select>
          </td>
        </tr>
    </table>
    
    <!-- Product Box Tabs // Start -->
      <div class="box">
        <div class="box-content">
          <div id="pro-box-info-htabs" class="horizontal-tabs">
            <a href="#tab-product-box-settings"><?php echo $tab_product_box_settings; ?></a>
            <a href="#tab-product-box-font"><?php echo $tab_product_box_font; ?></a>
            <a href="#tab-product-info-settings"><?php echo $tab_product_info_settings; ?></a>
            <a href="#tab-product-info-font"><?php echo $tab_product_info_font; ?></a>
          </div>
        </div>
      </div>
    <!-- Product Box Tabs // End -->
    
    
    <!-- Product Box Settings // Start -->
      <div id="tab-product-box-settings">
        <!-- Product Box Style // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_box_style; ?></div>
            <div class="box-content">
              <table class="blue">
                <tr>
                  <td rowspan="2" class="h3"><?php echo $h3_box_style; ?></td>
                  <td id="box_a"></td>
                  <!--<td id="box_a"></td>-->
                </tr>
                <tr>
                  <?php if (isset($radio_box_style)) {$checked = "CHECKED"; ?>
                    <td class="center"><input type="radio" name="radio_box_style" value="a_product" <?php if($radio_box_style=='a_product'){echo $checked;} ?>></td>
                    <!--<td class="center"><input type="radio" name="radio_box_style" value="two" <?php if($radio_box_style=='two'){echo $checked;} ?>></td>-->
                  <?php } else { ?>
                    <td align="center"><input type="radio" name="radio_box_style" value="a_product" CHECKED></td>
                    <!--<td align="center"><input type="radio" name="radio_box_style" value="b_product"></td>-->
                  <?php } ?>
                </tr>
              </table>
            </div>
          </div>
          
          <div class="box"><div class="box-heading"><?php echo $heading_box_settings; ?></div>
            <div class="box-content">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_box_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_box_shadow) && $radio_box_shadow == '1'){ ?>
                      <input type="radio"  name="radio_box_shadow" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_box_shadow" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_box_shadow" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_box_shadow" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                  <td rowspan="2" id="box_a_shadow"></td>
                </tr>
                <tr><td class="h3"><?php echo $h3_box_zoom; ?></td>
                  <td>
                    <?php if(isset($radio_box_zoom) && $radio_box_zoom == '1'){ ?>
                      <input type="radio"  name="radio_box_zoom" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_box_zoom" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_box_zoom" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_box_zoom" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
							<table class="blue">
								<tr>
									<td class="h3"><?php echo $h3_box_size; ?></td>
                  <td><input id="input_pro_box_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_box_size" value="<?php echo $input_pro_box_size; ?>"> <?php echo $text_px; ?></td>
								</tr>
							</table>
							<table class="blue">
								<tr>
									<td class="h3"><?php echo $h3_box_size_left; ?></td>
                  <td><input id="input_pro_box_size_left" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_box_size_left" value="<?php echo $input_pro_box_size_left; ?>"> <?php echo $text_px; ?></td>
								</tr>
							</table>
							<table class="blue">
								<tr>
									<td class="h3"><?php echo $h3_box_size_right; ?></td>
                  <td><input id="input_pro_box_size_right" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_box_size_right" value="<?php echo $input_pro_box_size_right; ?>"> <?php echo $text_px; ?></td>
								</tr>
							</table>
							<table class="blue">
								<tr>
									<td class="h3"><?php echo $h3_box_size_both; ?></td>
                  <td><input id="input_pro_box_size_both" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_box_size_both" value="<?php echo $input_pro_box_size_both; ?>"> <?php echo $text_px; ?></td>
								</tr>
							</table>
							<table class="blue">
								<tr>
									<td class="h3"><?php echo $h3_box_border_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_box_border_line_color; ?>"></div><input id="input_box_border_line_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_box_border_line_color" value="<?php echo $input_box_border_line_color; ?>"></td>
									<td id="box_border_color"></td>
								</tr>
							</table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_box_add_to_wish_list; ?></td>
                  <td>
                    <?php if(isset($radio_box_add_to_wish_list) && $radio_box_add_to_wish_list == '1'){ ?>
                      <input type="radio"  name="radio_box_add_to_wish_list" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_box_add_to_wish_list" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_box_add_to_wish_list" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_box_add_to_wish_list" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                  <td rowspan="7" id="box_a_buttons"></td>
                </tr>
                <tr><td class="h3"><?php echo $h3_box_add_to_compare; ?></td>
                  <td>
                    <?php if(isset($radio_box_add_to_compare) && $radio_box_add_to_compare == '1'){ ?>
                      <input type="radio"  name="radio_box_add_to_compare" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_box_add_to_compare" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_box_add_to_compare" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_box_add_to_compare" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr><td class="h3"><?php echo $h3_box_add_to_cart; ?></td>
                  <td>
                    <?php if(isset($radio_box_add_to_cart) && $radio_box_add_to_cart == '1'){ ?>
                      <input type="radio"  name="radio_box_add_to_cart" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_box_add_to_cart" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_box_add_to_cart" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_box_add_to_cart" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr><td class="h3"><?php echo $h3_box_bg_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_box_bg_color; ?>"></div><input id="input_box_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_box_bg_color" value="<?php echo $input_box_bg_color; ?>"></td>
                </tr>
                <tr><td class="h3"><?php echo $h3_box_wish_list_bg_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_box_wish_list_bg_color; ?>"></div><input id="input_box_wish_list_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_box_wish_list_bg_color" value="<?php echo $input_box_wish_list_bg_color; ?>"></td>
                </tr>
                <tr><td class="h3"><?php echo $h3_box_compare_bg_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_box_compare_bg_color; ?>"></div><input id="input_box_compare_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_box_compare_bg_color" value="<?php echo $input_box_compare_bg_color; ?>"></td>
                </tr>
                <tr><td class="h3"><?php echo $h3_box_cart_bg_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_box_cart_bg_color; ?>"></div><input id="input_box_cart_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_box_cart_bg_color" value="<?php echo $input_box_cart_bg_color; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_box_standart_button; ?></td>
                  <td>
                    <?php if(isset($radio_box_standart_button) && $radio_box_standart_button == '1'){ ?>
                      <input type="radio"  name="radio_box_standart_button" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_box_standart_button" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_box_standart_button" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_box_standart_button" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                  <td id="box_a_standart_buttons"></td>
                </tr>
              </table>
            </div>
          </div>
        <!-- Product Box Style // End -->		
      </div>
    <!-- Product Box Settings // End -->
    
    <!-- Product Box Font style & Color // Start -->
    <div id="tab-product-box-font">
      <!-- Product box Name // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_font_pro_box_name; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_pro_box_name_font_options) && $radio_pro_box_name_font_options == '1'){ ?>
                    <input type="radio"  name="radio_pro_box_name_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_pro_box_name_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_pro_box_name_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_pro_box_name_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_pro_box_name_font_family">
                      <?php if (isset($select_pro_box_name_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_pro_box_name_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_pro_box_name_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_pro_box_name_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_pro_box_name_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_pro_box_name_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_pro_box_name_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_pro_box_name_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_pro_box_name_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_pro_box_name_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_pro_box_name_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_pro_box_name_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_pro_box_name_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_pro_box_name_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_pro_box_name_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
                      <?php } else { ?>
                      <option value="default"selected="selected">By Default</option>
                      <option value="Verdana, Geneva, sans-serif">Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif">Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace">Courier New</option>
                      <option value="Arial, Helvetica, sans-serif">Arial</option>
                      <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif">Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif">Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif">Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif">Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif">Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif">MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace">Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive">Comic Sans MS</option>
                      <?php } ?>
                    </select>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                  <td><input id="input_pro_box_name_font_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_box_name_font_size" value="<?php echo $input_pro_box_name_font_size; ?>"> <?php echo $text_px; ?></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_pro_box_name_font_color; ?>"></div>
                    <input id="input_pro_box_name_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_box_name_font_color" value="<?php echo $input_pro_box_name_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                  <td>
                    <select name="select_pro_box_name_font_weight">
                      <?php if (isset($select_pro_box_name_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_pro_box_name_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_pro_box_name_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
                      <?php } else { ?>
                        <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                        <option value="bold"><?php echo $text_bold; ?></option>    
                      <?php } ?>
                    </select>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_style; ?></td>
                  <td>
                    <select name="select_pro_box_name_font_style">
                      <?php if (isset($select_pro_box_name_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_pro_box_name_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_pro_box_name_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_pro_box_name_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
                      <?php } else { ?>
                        <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                        <option value="italic"><?php echo $text_italic; ?></option>    
                        <option value="oblique"><?php echo $text_oblique; ?></option>    
                      <?php } ?>
                    </select>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_transform; ?></td>
                  <td>
                    <select name="select_pro_box_name_font_transform">
                      <?php if (isset($select_pro_box_name_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_pro_box_name_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_pro_box_name_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_pro_box_name_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_pro_box_name_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
                      <?php } else { ?>
                        <option value="normal" selected="selected"><?php echo $text_none; ?></option>
                        <option value="uppercase"><?php echo $text_uppercase; ?></option>    
                        <option value="lowercase"><?php echo $text_lowercase; ?></option>    
                        <option value="capitalize"><?php echo $text_capitalize; ?></option>    
                      <?php } ?>
                    </select>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_google; ?></td>
                  <td>
                    <?php if(isset($radio_pro_box_name_font_google) && $radio_pro_box_name_font_google == '1'){ ?>
                      <input type="radio"  name="radio_pro_box_name_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_box_name_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_pro_box_name_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_box_name_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_pro_box_name_font_google" type="text" size="100" name="input_pro_box_name_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_pro_box_name_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_pro_box_name_font_shadow) && $radio_pro_box_name_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_pro_box_name_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_box_name_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_pro_box_name_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_box_name_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_pro_box_name_font_shadow" type="text" size="100" name="input_pro_box_name_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_pro_box_name_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      <!-- Product Box Name // End -->
      
      <!-- Product box Old Price // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_font_pro_old_price; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_pro_old_price_font_options) && $radio_pro_old_price_font_options == '1'){ ?>
                    <input type="radio"  name="radio_pro_old_price_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_pro_old_price_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_pro_old_price_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_pro_old_price_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_pro_old_price_font_family">
                      <?php if (isset($select_pro_old_price_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_pro_old_price_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_pro_old_price_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_pro_old_price_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_pro_old_price_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_pro_old_price_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_pro_old_price_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_pro_old_price_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_pro_old_price_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_pro_old_price_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_pro_old_price_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_pro_old_price_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_pro_old_price_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_pro_old_price_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_pro_old_price_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
                      <?php } else { ?>
                      <option value="default"selected="selected">By Default</option>
                      <option value="Verdana, Geneva, sans-serif">Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif">Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace">Courier New</option>
                      <option value="Arial, Helvetica, sans-serif">Arial</option>
                      <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif">Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif">Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif">Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif">Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif">Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif">MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace">Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive">Comic Sans MS</option>
                      <?php } ?>
                    </select>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                  <td><input id="input_pro_old_price_font_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_old_price_font_size" value="<?php echo $input_pro_old_price_font_size; ?>"> <?php echo $text_px; ?></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_pro_old_price_font_color; ?>"></div>
                    <input id="input_pro_old_price_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_old_price_font_color" value="<?php echo $input_pro_old_price_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                  <td>
                    <select name="select_pro_old_price_font_weight">
                      <?php if (isset($select_pro_old_price_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_pro_old_price_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_pro_old_price_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
                      <?php } else { ?>
                        <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                        <option value="bold"><?php echo $text_bold; ?></option>    
                      <?php } ?>
                    </select>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_style; ?></td>
                  <td>
                    <select name="select_pro_old_price_font_style">
                      <?php if (isset($select_pro_old_price_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_pro_old_price_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_pro_old_price_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_pro_old_price_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
                      <?php } else { ?>
                        <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                        <option value="italic"><?php echo $text_italic; ?></option>    
                        <option value="oblique"><?php echo $text_oblique; ?></option>    
                      <?php } ?>
                    </select>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_transform; ?></td>
                  <td>
                    <select name="select_pro_old_price_font_transform">
                      <?php if (isset($select_pro_old_price_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_pro_old_price_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_pro_old_price_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_pro_old_price_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_pro_old_price_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
                      <?php } else { ?>
                        <option value="normal" selected="selected"><?php echo $text_none; ?></option>
                        <option value="uppercase"><?php echo $text_uppercase; ?></option>    
                        <option value="lowercase"><?php echo $text_lowercase; ?></option>    
                        <option value="capitalize"><?php echo $text_capitalize; ?></option>    
                      <?php } ?>
                    </select>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_google; ?></td>
                  <td>
                    <?php if(isset($radio_pro_old_price_font_google) && $radio_pro_old_price_font_google == '1'){ ?>
                      <input type="radio"  name="radio_pro_old_price_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_old_price_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_pro_old_price_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_old_price_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_pro_old_price_font_google" type="text" size="100" name="input_pro_old_price_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_pro_old_price_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_pro_old_price_font_shadow) && $radio_pro_old_price_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_pro_old_price_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_old_price_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_pro_old_price_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_old_price_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_pro_old_price_font_shadow" type="text" size="100" name="input_pro_old_price_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_pro_old_price_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      <!-- Product box Old Price // End -->
      
      <!-- Product box Price // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_font_pro_price; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_pro_price_font_options) && $radio_pro_price_font_options == '1'){ ?>
                    <input type="radio"  name="radio_pro_price_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_pro_price_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_pro_price_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_pro_price_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_pro_price_font_family">
                      <?php if (isset($select_pro_price_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_pro_price_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_pro_price_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_pro_price_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_pro_price_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_pro_price_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_pro_price_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_pro_price_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_pro_price_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_pro_price_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_pro_price_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_pro_price_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_pro_price_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_pro_price_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_pro_price_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
                      <?php } else { ?>
                      <option value="default"selected="selected">By Default</option>
                      <option value="Verdana, Geneva, sans-serif">Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif">Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace">Courier New</option>
                      <option value="Arial, Helvetica, sans-serif">Arial</option>
                      <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif">Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif">Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif">Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif">Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif">Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif">MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace">Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive">Comic Sans MS</option>
                      <?php } ?>
                    </select>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                  <td><input id="input_pro_price_font_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_price_font_size" value="<?php echo $input_pro_price_font_size; ?>"> <?php echo $text_px; ?></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_pro_price_font_color; ?>"></div>
                    <input id="input_pro_price_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_price_font_color" value="<?php echo $input_pro_price_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                  <td>
                    <select name="select_pro_price_font_weight">
                      <?php if (isset($select_pro_price_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_pro_price_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_pro_price_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
                      <?php } else { ?>
                        <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                        <option value="bold"><?php echo $text_bold; ?></option>    
                      <?php } ?>
                    </select>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_style; ?></td>
                  <td>
                    <select name="select_pro_price_font_style">
                      <?php if (isset($select_pro_price_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_pro_price_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_pro_price_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_pro_price_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
                      <?php } else { ?>
                        <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                        <option value="italic"><?php echo $text_italic; ?></option>    
                        <option value="oblique"><?php echo $text_oblique; ?></option>    
                      <?php } ?>
                    </select>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_transform; ?></td>
                  <td>
                    <select name="select_pro_price_font_transform">
                      <?php if (isset($select_pro_price_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_pro_price_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_pro_price_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_pro_price_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_pro_price_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
                      <?php } else { ?>
                        <option value="normal" selected="selected"><?php echo $text_none; ?></option>
                        <option value="uppercase"><?php echo $text_uppercase; ?></option>    
                        <option value="lowercase"><?php echo $text_lowercase; ?></option>    
                        <option value="capitalize"><?php echo $text_capitalize; ?></option>    
                      <?php } ?>
                    </select>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_google; ?></td>
                  <td>
                    <?php if(isset($radio_pro_price_font_google) && $radio_pro_price_font_google == '1'){ ?>
                      <input type="radio"  name="radio_pro_price_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_price_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_pro_price_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_price_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_pro_price_font_google" type="text" size="100" name="input_pro_price_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_pro_price_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_pro_price_font_shadow) && $radio_pro_price_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_pro_price_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_price_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_pro_price_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_price_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_pro_price_font_shadow" type="text" size="100" name="input_pro_price_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_pro_price_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      <!-- Product box Price // End -->
    </div>
    <!-- Product Box Font style & Color // End -->
    
    <!-- Product info Settings // Start -->
      <div id="tab-product-info-settings">
        <div class="box"><div class="box-heading"><?php echo $heading_product_info_bread; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_prod_info_bread_options) && $radio_prod_info_bread_options == '1'){ ?>
                    <input type="radio"  name="radio_prod_info_bread_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_prod_info_bread_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_prod_info_bread_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_prod_info_bread_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_prod_info_bread_bg_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_prod_info_bread_bg_color; ?>"></div><input id="input_prod_info_bread_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_prod_info_bread_bg_color" value="<?php echo $input_prod_info_bread_bg_color; ?>"></td>	
                </tr>
                <tr><td class="h3"><?php echo $h3_prod_info_bread_bg_color_transparent; ?></td>
                <td>
                  <?php if(isset($radio_prod_info_bread_bg_color_transparent) && $radio_prod_info_bread_bg_color_transparent == '1'){ ?>
                    <input type="radio"  name="radio_prod_info_bread_bg_color_transparent" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_prod_info_bread_bg_color_transparent" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_prod_info_bread_bg_color_transparent" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_prod_info_bread_bg_color_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_prod_info_bread_bg_pattern; ?></td>
                  <td>
                    <select name="select_prod_info_bread_bg_pattern">
                      <?php if (isset($select_prod_info_bread_bg_pattern)) {$selected = "selected";?>
                        <option value="none" <?php if($select_prod_info_bread_bg_pattern=='none'){echo $selected;} ?>>None</option>
                        <option value="scan-lines" <?php if($select_prod_info_bread_bg_pattern=='scan-lines'){echo $selected;} ?>>Scan lines</option>
                        <option value="noise" <?php if($select_prod_info_bread_bg_pattern=='noise'){echo $selected;} ?>>Noise</option>
                        <option value="noise2" <?php if($select_prod_info_bread_bg_pattern=='noise2'){echo $selected;} ?>>Noise_2</option>
                        <option value="texture" <?php if($select_prod_info_bread_bg_pattern=='texture'){echo $selected;} ?>>Texture</option>
                        <option value="jeans" <?php if($select_prod_info_bread_bg_pattern=='jeans'){echo $selected;} ?>>Jeans</option>
                        <option value="leather" <?php if($select_prod_info_bread_bg_pattern=='leather'){echo $selected;} ?>>Leather</option>
                        <option value="square" <?php if($select_prod_info_bread_bg_pattern=='square'){echo $selected;} ?>>Squares</option>
                        <option value="grid" <?php if($select_prod_info_bread_bg_pattern=='grid'){echo $selected;} ?>>Grid</option>
                        <option value="grid2" <?php if($select_prod_info_bread_bg_pattern=='grid2'){echo $selected;} ?>>Grid_2</option>
                        <option value="circle" <?php if($select_prod_info_bread_bg_pattern=='circle'){echo $selected;} ?>>Circle</option>
                        <option value="fabric_of_squares_gray" <?php if($select_prod_info_bread_bg_pattern=='fabric_of_squares_gray'){echo $selected;} ?>>Fabric of squares gray</option>
                      <?php } else { ?>
                        <option value="none"selected="selected">None</option>
                        <option value="scan-lines">Scan lines</option>    
                        <option value="noise">Noise</option>
                        <option value="noise2">Noise_2</option>
                        <option value="texture">Texture</option>
                        <option value="jeans">Jeans</option>
                        <option value="leather">Leather</option>  
                        <option value="square">Squares</option>
                        <option value="grid">Grid</option>
                        <option value="grid2">Grid_2</option>
                        <option value="circle">Circle</option> 
                        <option value="fabric_of_squares_gray">Fabric of squares gray</option> 
                      <?php } ?>
                    </select>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_prod_info_bread_bg_pattern_upload; ?><br>
                    <h4><?php echo $h4_prod_info_bread_bg_pattern_upload; ?></h4></td>
                  <td>
                    <?php if(isset($radio_prod_info_bread_bg_pattern_image) && $radio_prod_info_bread_bg_pattern_image == '1'){ ?>
                      <input type="radio"  name="radio_prod_info_bread_bg_pattern_image" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_prod_info_bread_bg_pattern_image" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_prod_info_bread_bg_pattern_image" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_prod_info_bread_bg_pattern_image" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td>
                    <input type="hidden" name="upload_prod_info_bread_bg_pattern_image" value="<?php echo $upload_prod_info_bread_bg_pattern_image; ?>" id="upload_prod_info_bread_bg_pattern_image" />
                    <div class="selected_image" style="text-align:center;">
                      <img src="<?php echo $image_prod_info_bread_pattern_preview; ?>" alt="" id="image_prod_info_bread_pattern_preview" onclick="image_upload('upload_prod_info_bread_bg_pattern_image', 'image_prod_info_bread_pattern_preview');" /><br>
                      <a onclick="image_upload('upload_prod_info_bread_bg_pattern_image', 'image_prod_info_bread_pattern_preview');"><?php echo $text_browse; ?></a>
                    </div>
                  </td> 
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_prod_info_bread_full_bg_image; ?><br>
                    <h4><?php echo $h4_prod_info_bread_full_bg_image; ?></h4></td>
                  <td>
                    <?php if(isset($radio_prod_info_bread_full_background_image) && $radio_prod_info_bread_full_background_image == '1'){ ?>
                      <input type="radio"  name="radio_prod_info_bread_full_background_image" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_prod_info_bread_full_background_image" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_prod_info_bread_full_background_image" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_prod_info_bread_full_background_image" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td>
                    <input type="hidden" name="upload_prod_info_bread_full_bg_image" value="<?php echo $upload_prod_info_bread_full_bg_image; ?>" id="upload_prod_info_bread_full_bg_image" />
                    <div class="selected_image" style="text-align:center;">
                      <img src="<?php echo $image_prod_info_bread_full_bg_preview; ?>" alt="" id="image_prod_info_bread_full_bg_preview" onclick="image_upload('upload_prod_info_bread_full_bg_image', 'image_prod_info_bread_full_bg_preview');" /><br>
                      <a onclick="image_upload('upload_prod_info_bread_full_bg_image', 'image_prod_info_bread_full_bg_preview');"><?php echo $text_browse; ?></a>
                    </div>
                  </td> 
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="box"><div class="box-heading"><?php echo $heading_product_info_tabs; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_prod_info_tabs_options) && $radio_prod_info_tabs_options == '1'){ ?>
                    <input type="radio"  name="radio_prod_info_tabs_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_prod_info_tabs_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_prod_info_tabs_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_prod_info_tabs_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_prod_info_tab_bg_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_prod_info_tab_bg_color; ?>"></div><input id="input_prod_info_tab_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_prod_info_tab_bg_color" value="<?php echo $input_prod_info_tab_bg_color; ?>"></td>	
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_prod_info_tab_hover_bg_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_prod_info_tab_hover_bg_color; ?>"></div><input id="input_prod_info_tab_hover_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_prod_info_tab_hover_bg_color" value="<?php echo $input_prod_info_tab_hover_bg_color; ?>"></td>	
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_prod_info_tab_selected_bg_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_prod_info_tab_selected_bg_color; ?>"></div><input id="input_prod_info_tab_selected_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_prod_info_tab_selected_bg_color" value="<?php echo $input_prod_info_tab_selected_bg_color; ?>"></td>	
                </tr>
              </table>
            </div>
          </div>
        </div>
        
        <div class="box"><div class="box-heading"><?php echo $heading_product_info_button; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_prod_info_button_options) && $radio_prod_info_button_options == '1'){ ?>
                    <input type="radio"  name="radio_prod_info_button_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_prod_info_button_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_prod_info_button_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_prod_info_button_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_prod_info_button_bg_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_prod_info_button_bg_color; ?>"></div><input id="input_prod_info_button_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_prod_info_button_bg_color" value="<?php echo $input_prod_info_button_bg_color; ?>"></td>	
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_prod_info_button_hover_bg_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_prod_info_button_hover_bg_color; ?>"></div><input id="input_prod_info_button_hover_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_prod_info_button_hover_bg_color" value="<?php echo $input_prod_info_button_hover_bg_color; ?>"></td>	
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- Product info Settings // End -->
    
    <!-- Product Info Font style & Color // Start -->
      <div id="tab-product-info-font">
        <!-- Product info Name // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_font_pro_info_name; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr>
                  <td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_pro_info_name_font_options) && $radio_pro_info_name_font_options == '1'){ ?>
                      <input type="radio"  name="radio_pro_info_name_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_info_name_font_options" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_pro_info_name_font_options" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_info_name_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font; ?></td>
                    <td>
                      <select name="select_pro_info_name_font_family">
                        <?php if (isset($select_pro_info_name_font_family)) {$selected = "selected";?>
                        <option value="default" <?php if($select_pro_info_name_font_family=='default'){echo $selected;} ?>>By Default</option>
                        <option value="Verdana, Geneva, sans-serif" <?php if($select_pro_info_name_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_pro_info_name_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_pro_info_name_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                        <option value="Arial, Helvetica, sans-serif" <?php if($select_pro_info_name_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                        <option value="Tahoma, Geneva, sans-serif" <?php if($select_pro_info_name_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_pro_info_name_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_pro_info_name_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_pro_info_name_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_pro_info_name_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_pro_info_name_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_pro_info_name_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_pro_info_name_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_pro_info_name_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
                        <?php } else { ?>
                        <option value="default"selected="selected">By Default</option>
                        <option value="Verdana, Geneva, sans-serif">Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif">Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace">Courier New</option>
                        <option value="Arial, Helvetica, sans-serif">Arial</option>
                        <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif">Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif">Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif">Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif">Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif">Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif">MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace">Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive">Comic Sans MS</option>
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                    <td><input id="input_pro_info_name_font_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_info_name_font_size" value="<?php echo $input_pro_info_name_font_size; ?>"> <?php echo $text_px; ?></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_pro_info_name_font_color; ?>"></div>
                      <input id="input_pro_info_name_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_info_name_font_color" value="<?php echo $input_pro_info_name_font_color; ?>">
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                    <td>
                      <select name="select_pro_info_name_font_weight">
                        <?php if (isset($select_pro_info_name_font_weight)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_pro_info_name_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="bold" <?php if($select_pro_info_name_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                          <option value="bold"><?php echo $text_bold; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_style; ?></td>
                    <td>
                      <select name="select_pro_info_name_font_style">
                        <?php if (isset($select_pro_info_name_font_style)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_pro_info_name_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="italic" <?php if($select_pro_info_name_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                          <option value="oblique" <?php if($select_pro_info_name_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                          <option value="italic"><?php echo $text_italic; ?></option>    
                          <option value="oblique"><?php echo $text_oblique; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_transform; ?></td>
                    <td>
                      <select name="select_pro_info_name_font_transform">
                        <?php if (isset($select_pro_info_name_font_transform)) {$selected = "selected";?>
                          <option value="none" <?php if($select_pro_info_name_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                          <option value="uppercase" <?php if($select_pro_info_name_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                          <option value="lowercase" <?php if($select_pro_info_name_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                          <option value="capitalize" <?php if($select_pro_info_name_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_none; ?></option>
                          <option value="uppercase"><?php echo $text_uppercase; ?></option>    
                          <option value="lowercase"><?php echo $text_lowercase; ?></option>    
                          <option value="capitalize"><?php echo $text_capitalize; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_google; ?></td>
                    <td>
                      <?php if(isset($radio_pro_info_name_font_google) && $radio_pro_info_name_font_google == '1'){ ?>
                        <input type="radio"  name="radio_pro_info_name_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_name_font_google" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_pro_info_name_font_google" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_name_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_pro_info_name_font_google" type="text" size="100" name="input_pro_info_name_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_pro_info_name_font_google; ?>"></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                    <td>
                      <?php if(isset($radio_pro_info_name_font_shadow) && $radio_pro_info_name_font_shadow == '1'){ ?>
                        <input type="radio"  name="radio_pro_info_name_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_name_font_shadow" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_pro_info_name_font_shadow" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_name_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_pro_info_name_font_shadow" type="text" size="100" name="input_pro_info_name_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_pro_info_name_font_shadow; ?>"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Product info Name // End -->
        
        <!-- Product info Breadcrumb Hyperlink Font // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_font_pro_info_bread_a; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr>
                  <td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_pro_info_bread_a_font_options) && $radio_pro_info_bread_a_font_options == '1'){ ?>
                      <input type="radio"  name="radio_pro_info_bread_a_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_info_bread_a_font_options" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_pro_info_bread_a_font_options" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_info_bread_a_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                    <td>
                      <input id="input_pro_info_bread_a_font_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_pro_info_bread_a_font_size" value="<?php echo $input_pro_info_bread_a_font_size; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                  <tr><td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_pro_info_bread_a_font_color; ?>"></div>
                      <input id="input_pro_info_bread_a_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_info_bread_a_font_color" value="<?php echo $input_pro_info_bread_a_font_color; ?>">
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font; ?></td>
                    <td>
                      <select name="select_pro_info_bread_a_font_family">
                        <?php if (isset($select_pro_info_bread_a_font_family)) {$selected = "selected";?>
                        <option value="default" <?php if($select_pro_info_bread_a_font_family=='default'){echo $selected;} ?>>By Default</option>
                        <option value="Verdana, Geneva, sans-serif" <?php if($select_pro_info_bread_a_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_pro_info_bread_a_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_pro_info_bread_a_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                        <option value="Arial, Helvetica, sans-serif" <?php if($select_pro_info_bread_a_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                        <option value="Tahoma, Geneva, sans-serif" <?php if($select_pro_info_bread_a_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_pro_info_bread_a_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_pro_info_bread_a_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_pro_info_bread_a_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_pro_info_bread_a_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_pro_info_bread_a_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_pro_info_bread_a_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_pro_info_bread_a_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_pro_info_bread_a_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
                        <?php } else { ?>
                        <option value="default"selected="selected">By Default</option>
                        <option value="Verdana, Geneva, sans-serif">Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif">Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace">Courier New</option>
                        <option value="Arial, Helvetica, sans-serif">Arial</option>
                        <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif">Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif">Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif">Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif">Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif">Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif">MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace">Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive">Comic Sans MS</option>
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                    <td>
                      <select name="select_pro_info_bread_a_font_weight">
                        <?php if (isset($select_pro_info_bread_a_font_weight)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_pro_info_bread_a_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="bold" <?php if($select_pro_info_bread_a_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                          <option value="bold"><?php echo $text_bold; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_style; ?></td>
                    <td>
                      <select name="select_pro_info_bread_a_font_style">
                        <?php if (isset($select_pro_info_bread_a_font_style)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_pro_info_bread_a_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="italic" <?php if($select_pro_info_bread_a_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                          <option value="oblique" <?php if($select_pro_info_bread_a_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                          <option value="italic"><?php echo $text_italic; ?></option>    
                          <option value="oblique"><?php echo $text_oblique; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_transform; ?></td>
                    <td>
                      <select name="select_pro_info_bread_a_font_transform">
                        <?php if (isset($select_pro_info_bread_a_font_transform)) {$selected = "selected";?>
                          <option value="none" <?php if($select_pro_info_bread_a_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                          <option value="uppercase" <?php if($select_pro_info_bread_a_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                          <option value="lowercase" <?php if($select_pro_info_bread_a_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                          <option value="capitalize" <?php if($select_pro_info_bread_a_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_none; ?></option>
                          <option value="uppercase"><?php echo $text_uppercase; ?></option>    
                          <option value="lowercase"><?php echo $text_lowercase; ?></option>    
                          <option value="capitalize"><?php echo $text_capitalize; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_google; ?></td>
                    <td>
                      <?php if(isset($radio_pro_info_bread_a_font_google) && $radio_pro_info_bread_a_font_google == '1'){ ?>
                        <input type="radio"  name="radio_pro_info_bread_a_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_bread_a_font_google" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_pro_info_bread_a_font_google" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_bread_a_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_pro_info_bread_a_font_google" type="text" size="100" name="input_pro_info_bread_a_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_pro_info_bread_a_font_google; ?>"></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                    <td>
                      <?php if(isset($radio_pro_info_bread_a_font_shadow) && $radio_pro_info_bread_a_font_shadow == '1'){ ?>
                        <input type="radio"  name="radio_pro_info_bread_a_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_bread_a_font_shadow" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_pro_info_bread_a_font_shadow" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_bread_a_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_pro_info_bread_a_font_shadow" type="text" size="100" name="input_pro_info_bread_a_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_pro_info_bread_a_font_shadow; ?>"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Product info Breadcrumb Hyperlink Font // End -->
        
        <!-- Product info Old Price // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_font_pro_info_old_price; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr>
                  <td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_pro_info_old_price_font_options) && $radio_pro_info_old_price_font_options == '1'){ ?>
                      <input type="radio"  name="radio_pro_info_old_price_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_info_old_price_font_options" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_pro_info_old_price_font_options" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_info_old_price_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font; ?></td>
                    <td>
                      <select name="select_pro_info_old_price_font_family">
                        <?php if (isset($select_pro_info_old_price_font_family)) {$selected = "selected";?>
                        <option value="default" <?php if($select_pro_info_old_price_font_family=='default'){echo $selected;} ?>>By Default</option>
                        <option value="Verdana, Geneva, sans-serif" <?php if($select_pro_info_old_price_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_pro_info_old_price_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_pro_info_old_price_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                        <option value="Arial, Helvetica, sans-serif" <?php if($select_pro_info_old_price_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                        <option value="Tahoma, Geneva, sans-serif" <?php if($select_pro_info_old_price_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_pro_info_old_price_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_pro_info_old_price_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_pro_info_old_price_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_pro_info_old_price_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_pro_info_old_price_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_pro_info_old_price_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_pro_info_old_price_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_pro_info_old_price_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
                        <?php } else { ?>
                        <option value="default"selected="selected">By Default</option>
                        <option value="Verdana, Geneva, sans-serif">Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif">Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace">Courier New</option>
                        <option value="Arial, Helvetica, sans-serif">Arial</option>
                        <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif">Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif">Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif">Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif">Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif">Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif">MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace">Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive">Comic Sans MS</option>
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                    <td><input id="input_pro_info_old_price_font_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_info_old_price_font_size" value="<?php echo $input_pro_info_old_price_font_size; ?>"> <?php echo $text_px; ?></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_pro_info_old_price_font_color; ?>"></div>
                      <input id="input_pro_info_old_price_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_info_old_price_font_color" value="<?php echo $input_pro_info_old_price_font_color; ?>">
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                    <td>
                      <select name="select_pro_info_old_price_font_weight">
                        <?php if (isset($select_pro_info_old_price_font_weight)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_pro_info_old_price_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="bold" <?php if($select_pro_info_old_price_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                          <option value="bold"><?php echo $text_bold; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_style; ?></td>
                    <td>
                      <select name="select_pro_info_old_price_font_style">
                        <?php if (isset($select_pro_info_old_price_font_style)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_pro_info_old_price_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="italic" <?php if($select_pro_info_old_price_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                          <option value="oblique" <?php if($select_pro_info_old_price_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                          <option value="italic"><?php echo $text_italic; ?></option>    
                          <option value="oblique"><?php echo $text_oblique; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_transform; ?></td>
                    <td>
                      <select name="select_pro_info_old_price_font_transform">
                        <?php if (isset($select_pro_info_old_price_font_transform)) {$selected = "selected";?>
                          <option value="none" <?php if($select_pro_info_old_price_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                          <option value="uppercase" <?php if($select_pro_info_old_price_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                          <option value="lowercase" <?php if($select_pro_info_old_price_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                          <option value="capitalize" <?php if($select_pro_info_old_price_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_none; ?></option>
                          <option value="uppercase"><?php echo $text_uppercase; ?></option>    
                          <option value="lowercase"><?php echo $text_lowercase; ?></option>    
                          <option value="capitalize"><?php echo $text_capitalize; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_google; ?></td>
                    <td>
                      <?php if(isset($radio_pro_info_old_price_font_google) && $radio_pro_info_old_price_font_google == '1'){ ?>
                        <input type="radio"  name="radio_pro_info_old_price_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_old_price_font_google" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_pro_info_old_price_font_google" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_old_price_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_pro_info_old_price_font_google" type="text" size="100" name="input_pro_info_old_price_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_pro_info_old_price_font_google; ?>"></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                    <td>
                      <?php if(isset($radio_pro_info_old_price_font_shadow) && $radio_pro_info_old_price_font_shadow == '1'){ ?>
                        <input type="radio"  name="radio_pro_info_old_price_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_old_price_font_shadow" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_pro_info_old_price_font_shadow" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_old_price_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_pro_info_old_price_font_shadow" type="text" size="100" name="input_pro_info_old_price_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_pro_info_old_price_font_shadow; ?>"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Product box Old Price // End -->
      
        <!-- Product info Price // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_font_pro_info_price; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr>
                  <td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_pro_info_price_font_options) && $radio_pro_info_price_font_options == '1'){ ?>
                      <input type="radio"  name="radio_pro_info_price_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_info_price_font_options" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_pro_info_price_font_options" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_info_price_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font; ?></td>
                    <td>
                      <select name="select_pro_info_price_font_family">
                        <?php if (isset($select_pro_info_price_font_family)) {$selected = "selected";?>
                        <option value="default" <?php if($select_pro_info_price_font_family=='default'){echo $selected;} ?>>By Default</option>
                        <option value="Verdana, Geneva, sans-serif" <?php if($select_pro_info_price_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_pro_info_price_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_pro_info_price_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                        <option value="Arial, Helvetica, sans-serif" <?php if($select_pro_info_price_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                        <option value="Tahoma, Geneva, sans-serif" <?php if($select_pro_info_price_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_pro_info_price_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_pro_info_price_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_pro_info_price_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_pro_info_price_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_pro_info_price_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_pro_info_price_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_pro_info_price_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_pro_info_price_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
                        <?php } else { ?>
                        <option value="default"selected="selected">By Default</option>
                        <option value="Verdana, Geneva, sans-serif">Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif">Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace">Courier New</option>
                        <option value="Arial, Helvetica, sans-serif">Arial</option>
                        <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif">Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif">Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif">Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif">Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif">Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif">MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace">Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive">Comic Sans MS</option>
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                    <td><input id="input_pro_info_price_font_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_info_price_font_size" value="<?php echo $input_pro_info_price_font_size; ?>"> <?php echo $text_px; ?></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_pro_info_price_font_color; ?>"></div>
                      <input id="input_pro_info_price_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_info_price_font_color" value="<?php echo $input_pro_info_price_font_color; ?>">
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                    <td>
                      <select name="select_pro_info_price_font_weight">
                        <?php if (isset($select_pro_info_price_font_weight)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_pro_info_price_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="bold" <?php if($select_pro_info_price_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                          <option value="bold"><?php echo $text_bold; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_style; ?></td>
                    <td>
                      <select name="select_pro_info_price_font_style">
                        <?php if (isset($select_pro_info_price_font_style)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_pro_info_price_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="italic" <?php if($select_pro_info_price_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                          <option value="oblique" <?php if($select_pro_info_price_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                          <option value="italic"><?php echo $text_italic; ?></option>    
                          <option value="oblique"><?php echo $text_oblique; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_transform; ?></td>
                    <td>
                      <select name="select_pro_info_price_font_transform">
                        <?php if (isset($select_pro_info_price_font_transform)) {$selected = "selected";?>
                          <option value="none" <?php if($select_pro_info_price_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                          <option value="uppercase" <?php if($select_pro_info_price_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                          <option value="lowercase" <?php if($select_pro_info_price_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                          <option value="capitalize" <?php if($select_pro_info_price_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_none; ?></option>
                          <option value="uppercase"><?php echo $text_uppercase; ?></option>    
                          <option value="lowercase"><?php echo $text_lowercase; ?></option>    
                          <option value="capitalize"><?php echo $text_capitalize; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_google; ?></td>
                    <td>
                      <?php if(isset($radio_pro_info_price_font_google) && $radio_pro_info_price_font_google == '1'){ ?>
                        <input type="radio"  name="radio_pro_info_price_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_price_font_google" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_pro_info_price_font_google" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_price_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_pro_info_price_font_google" type="text" size="100" name="input_pro_info_price_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_pro_info_price_font_google; ?>"></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                    <td>
                      <?php if(isset($radio_pro_info_price_font_shadow) && $radio_pro_info_price_font_shadow == '1'){ ?>
                        <input type="radio"  name="radio_pro_info_price_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_price_font_shadow" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_pro_info_price_font_shadow" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_price_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_pro_info_price_font_shadow" type="text" size="100" name="input_pro_info_price_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_pro_info_price_font_shadow; ?>"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Product box Price // End -->
        
        <!-- Product info Paragraphs // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_font_pro_info_p; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr>
                  <td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_pro_info_p_font_options) && $radio_pro_info_p_font_options == '1'){ ?>
                      <input type="radio"  name="radio_pro_info_p_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_info_p_font_options" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_pro_info_p_font_options" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_info_p_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font; ?></td>
                    <td>
                      <select name="select_pro_info_p_font_family">
                        <?php if (isset($select_pro_info_p_font_family)) {$selected = "selected";?>
                        <option value="default" <?php if($select_pro_info_p_font_family=='default'){echo $selected;} ?>>By Default</option>
                        <option value="Verdana, Geneva, sans-serif" <?php if($select_pro_info_p_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_pro_info_p_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_pro_info_p_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                        <option value="Arial, Helvetica, sans-serif" <?php if($select_pro_info_p_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                        <option value="Tahoma, Geneva, sans-serif" <?php if($select_pro_info_p_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_pro_info_p_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_pro_info_p_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_pro_info_p_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_pro_info_p_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_pro_info_p_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_pro_info_p_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_pro_info_p_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_pro_info_p_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
                        <?php } else { ?>
                        <option value="default"selected="selected">By Default</option>
                        <option value="Verdana, Geneva, sans-serif">Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif">Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace">Courier New</option>
                        <option value="Arial, Helvetica, sans-serif">Arial</option>
                        <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif">Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif">Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif">Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif">Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif">Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif">MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace">Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive">Comic Sans MS</option>
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                    <td><input id="input_pro_info_p_font_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_info_p_font_size" value="<?php echo $input_pro_info_p_font_size; ?>"> <?php echo $text_px; ?></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_pro_info_p_font_color; ?>"></div>
                      <input id="input_pro_info_p_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_info_p_font_color" value="<?php echo $input_pro_info_p_font_color; ?>">
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                    <td>
                      <select name="select_pro_info_p_font_weight">
                        <?php if (isset($select_pro_info_p_font_weight)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_pro_info_p_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="bold" <?php if($select_pro_info_p_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                          <option value="bold"><?php echo $text_bold; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_style; ?></td>
                    <td>
                      <select name="select_pro_info_p_font_style">
                        <?php if (isset($select_pro_info_p_font_style)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_pro_info_p_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="italic" <?php if($select_pro_info_p_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                          <option value="oblique" <?php if($select_pro_info_p_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                          <option value="italic"><?php echo $text_italic; ?></option>    
                          <option value="oblique"><?php echo $text_oblique; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_transform; ?></td>
                    <td>
                      <select name="select_pro_info_p_font_transform">
                        <?php if (isset($select_pro_info_p_font_transform)) {$selected = "selected";?>
                          <option value="none" <?php if($select_pro_info_p_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                          <option value="uppercase" <?php if($select_pro_info_p_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                          <option value="lowercase" <?php if($select_pro_info_p_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                          <option value="capitalize" <?php if($select_pro_info_p_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_none; ?></option>
                          <option value="uppercase"><?php echo $text_uppercase; ?></option>    
                          <option value="lowercase"><?php echo $text_lowercase; ?></option>    
                          <option value="capitalize"><?php echo $text_capitalize; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_google; ?></td>
                    <td>
                      <?php if(isset($radio_pro_info_p_font_google) && $radio_pro_info_p_font_google == '1'){ ?>
                        <input type="radio"  name="radio_pro_info_p_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_p_font_google" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_pro_info_p_font_google" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_p_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_pro_info_p_font_google" type="text" size="100" name="input_pro_info_p_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_pro_info_p_font_google; ?>"></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                    <td>
                      <?php if(isset($radio_pro_info_p_font_shadow) && $radio_pro_info_p_font_shadow == '1'){ ?>
                        <input type="radio"  name="radio_pro_info_p_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_p_font_shadow" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_pro_info_p_font_shadow" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_p_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_pro_info_p_font_shadow" type="text" size="100" name="input_pro_info_p_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_pro_info_p_font_shadow; ?>"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Product info Paragraphs // End -->
        
        <!-- Product info Paragraphs Hyperlink // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_font_pro_info_p_a; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr>
                  <td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_pro_info_p_a_font_options) && $radio_pro_info_p_a_font_options == '1'){ ?>
                      <input type="radio"  name="radio_pro_info_p_a_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_info_p_a_font_options" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_pro_info_p_a_font_options" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_pro_info_p_a_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font; ?></td>
                    <td>
                      <select name="select_pro_info_p_a_font_family">
                        <?php if (isset($select_pro_info_p_a_font_family)) {$selected = "selected";?>
                        <option value="default" <?php if($select_pro_info_p_a_font_family=='default'){echo $selected;} ?>>By Default</option>
                        <option value="Verdana, Geneva, sans-serif" <?php if($select_pro_info_p_a_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_pro_info_p_a_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_pro_info_p_a_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                        <option value="Arial, Helvetica, sans-serif" <?php if($select_pro_info_p_a_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                        <option value="Tahoma, Geneva, sans-serif" <?php if($select_pro_info_p_a_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_pro_info_p_a_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_pro_info_p_a_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_pro_info_p_a_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_pro_info_p_a_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_pro_info_p_a_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_pro_info_p_a_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_pro_info_p_a_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_pro_info_p_a_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
                        <?php } else { ?>
                        <option value="default"selected="selected">By Default</option>
                        <option value="Verdana, Geneva, sans-serif">Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif">Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace">Courier New</option>
                        <option value="Arial, Helvetica, sans-serif">Arial</option>
                        <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif">Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif">Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif">Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif">Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif">Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif">MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace">Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive">Comic Sans MS</option>
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                    <td><input id="input_pro_info_p_a_font_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_info_p_a_font_size" value="<?php echo $input_pro_info_p_a_font_size; ?>"> <?php echo $text_px; ?></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_pro_info_p_a_font_color; ?>"></div>
                      <input id="input_pro_info_p_a_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_pro_info_p_a_font_color" value="<?php echo $input_pro_info_p_a_font_color; ?>">
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                    <td>
                      <select name="select_pro_info_p_a_font_weight">
                        <?php if (isset($select_pro_info_p_a_font_weight)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_pro_info_p_a_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="bold" <?php if($select_pro_info_p_a_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                          <option value="bold"><?php echo $text_bold; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_style; ?></td>
                    <td>
                      <select name="select_pro_info_p_a_font_style">
                        <?php if (isset($select_pro_info_p_a_font_style)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_pro_info_p_a_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="italic" <?php if($select_pro_info_p_a_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                          <option value="oblique" <?php if($select_pro_info_p_a_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                          <option value="italic"><?php echo $text_italic; ?></option>    
                          <option value="oblique"><?php echo $text_oblique; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_transform; ?></td>
                    <td>
                      <select name="select_pro_info_p_a_font_transform">
                        <?php if (isset($select_pro_info_p_a_font_transform)) {$selected = "selected";?>
                          <option value="none" <?php if($select_pro_info_p_a_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                          <option value="uppercase" <?php if($select_pro_info_p_a_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                          <option value="lowercase" <?php if($select_pro_info_p_a_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                          <option value="capitalize" <?php if($select_pro_info_p_a_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_none; ?></option>
                          <option value="uppercase"><?php echo $text_uppercase; ?></option>    
                          <option value="lowercase"><?php echo $text_lowercase; ?></option>    
                          <option value="capitalize"><?php echo $text_capitalize; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_google; ?></td>
                    <td>
                      <?php if(isset($radio_pro_info_p_a_font_google) && $radio_pro_info_p_a_font_google == '1'){ ?>
                        <input type="radio"  name="radio_pro_info_p_a_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_p_a_font_google" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_pro_info_p_a_font_google" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_p_a_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_pro_info_p_a_font_google" type="text" size="100" name="input_pro_info_p_a_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_pro_info_p_a_font_google; ?>"></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                    <td>
                      <?php if(isset($radio_pro_info_p_a_font_shadow) && $radio_pro_info_p_a_font_shadow == '1'){ ?>
                        <input type="radio"  name="radio_pro_info_p_a_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_p_a_font_shadow" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_pro_info_p_a_font_shadow" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_pro_info_p_a_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_pro_info_p_a_font_shadow" type="text" size="100" name="input_pro_info_p_a_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_pro_info_p_a_font_shadow; ?>"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Product info Paragraphs Hyperlink // End -->
        
        <!-- Product info Tab Font // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_font_tab; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr>
                  <td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_tab_font_options) && $radio_tab_font_options == '1'){ ?>
                      <input type="radio"  name="radio_tab_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_tab_font_options" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_tab_font_options" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_tab_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font; ?></td>
                    <td>
                      <select name="select_tab_font_family">
                        <?php if (isset($select_tab_font_family)) {$selected = "selected";?>
                        <option value="default" <?php if($select_tab_font_family=='default'){echo $selected;} ?>>By Default</option>
                        <option value="Verdana, Geneva, sans-serif" <?php if($select_tab_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_tab_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_tab_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                        <option value="Arial, Helvetica, sans-serif" <?php if($select_tab_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                        <option value="Tahoma, Geneva, sans-serif" <?php if($select_tab_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_tab_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_tab_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_tab_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_tab_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_tab_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_tab_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_tab_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_tab_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
                        <?php } else { ?>
                        <option value="default"selected="selected">By Default</option>
                        <option value="Verdana, Geneva, sans-serif">Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif">Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace">Courier New</option>
                        <option value="Arial, Helvetica, sans-serif">Arial</option>
                        <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif">Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif">Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif">Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif">Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif">Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif">MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace">Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive">Comic Sans MS</option>
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                    <td><input id="input_tab_font_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_tab_font_size" value="<?php echo $input_tab_font_size; ?>"> <?php echo $text_px; ?></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_tab_font_color; ?>"></div>
                      <input id="input_tab_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_tab_font_color" value="<?php echo $input_tab_font_color; ?>">
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_selected_font_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_tab_selected_font_color; ?>"></div>
                      <input id="input_tab_selected_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_tab_selected_font_color" value="<?php echo $input_tab_selected_font_color; ?>">
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_hover_font_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_tab_hover_font_color; ?>"></div>
                      <input id="input_tab_hover_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_tab_hover_font_color" value="<?php echo $input_tab_hover_font_color; ?>">
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                    <td>
                      <select name="select_tab_font_weight">
                        <?php if (isset($select_tab_font_weight)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_tab_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="bold" <?php if($select_tab_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                          <option value="bold"><?php echo $text_bold; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_style; ?></td>
                    <td>
                      <select name="select_tab_font_style">
                        <?php if (isset($select_tab_font_style)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_tab_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="italic" <?php if($select_tab_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                          <option value="oblique" <?php if($select_tab_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_normal; ?></option>
                          <option value="italic"><?php echo $text_italic; ?></option>    
                          <option value="oblique"><?php echo $text_oblique; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font_transform; ?></td>
                    <td>
                      <select name="select_tab_font_transform">
                        <?php if (isset($select_tab_font_transform)) {$selected = "selected";?>
                          <option value="none" <?php if($select_tab_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                          <option value="uppercase" <?php if($select_tab_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                          <option value="lowercase" <?php if($select_tab_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                          <option value="capitalize" <?php if($select_tab_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
                        <?php } else { ?>
                          <option value="normal" selected="selected"><?php echo $text_none; ?></option>
                          <option value="uppercase"><?php echo $text_uppercase; ?></option>    
                          <option value="lowercase"><?php echo $text_lowercase; ?></option>    
                          <option value="capitalize"><?php echo $text_capitalize; ?></option>    
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_google; ?></td>
                    <td>
                      <?php if(isset($radio_tab_font_google) && $radio_tab_font_google == '1'){ ?>
                        <input type="radio"  name="radio_tab_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_tab_font_google" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_tab_font_google" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_tab_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_tab_font_google" type="text" size="100" name="input_tab_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_tab_font_google; ?>"></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                    <td>
                      <?php if(isset($radio_tab_font_shadow) && $radio_tab_font_shadow == '1'){ ?>
                        <input type="radio"  name="radio_tab_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_tab_font_shadow" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_tab_font_shadow" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_tab_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_tab_font_shadow" type="text" size="100" name="input_tab_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_tab_font_shadow; ?>"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Product info Tab Font // End -->
      </div>
    <!-- Product Info Font style & Color // End -->
  </div>
<!-- Tab9 // End // Product Box Info-->