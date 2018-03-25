<!-- Tab10 // Start // Other Elements -->
  <div id="tab10">
    <table class="red">
      <tr><td class="h3"><?php echo $h3_other_ele_status; ?></td>
          <td>
            <select name="select_other_ele_status">
              <?php if ($select_other_ele_status) { ?>
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
    
    <!-- Other Elements Tabs // Start -->
      <div class="box">
        <div class="box-content">
          <div id="other-ele-tab" class="horizontal-tabs">
            <a href="#tab-other-ele-category"><?php echo $tab_category; ?></a>
            <a href="#tab-other-ele-breadcrumb"><?php echo $tab_breadcrumb; ?></a>
            <a href="#tab-other-ele-payment_method"><?php echo $tab_payment_method; ?></a>
          </div>
        </div>
      </div>
    <!-- Other Elements Tabs // End -->

    <!-- Category // Start -->
      <div id="tab-other-ele-category">
        <div class="box"><div class="box-heading"><?php echo $heading_other_ele_category; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_other_ele_category_font_options) && $radio_other_ele_category_font_options == '1'){ ?>
                    <input type="radio"  name="radio_other_ele_category_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_other_ele_category_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_other_ele_category_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_other_ele_category_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                  <td>
                    <input id="input_other_ele_category_font_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_other_ele_category_font_size" value="<?php echo $input_other_ele_category_font_size; ?>"> <?php echo $text_px; ?>
                  </td>
                </tr>
                <tr><td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_other_ele_category_font_color; ?>"></div>
                    <input id="input_other_ele_category_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_other_ele_category_font_color" value="<?php echo $input_other_ele_category_font_color; ?>">
                  </td>
                </tr>
                <tr><td class="h3"><?php echo $h3_font_style_font_color_hover; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_other_ele_category_font_color_hover; ?>"></div>
                    <input id="input_other_ele_category_font_color_hover" style="text-align: center" type="text" size="6" maxlength="6"  name="input_other_ele_category_font_color_hover" value="<?php echo $input_other_ele_category_font_color_hover; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_font_sub_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_other_ele_category_font_sub_color; ?>"></div>
                    <input id="input_other_ele_category_font_sub_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_other_ele_category_font_sub_color" value="<?php echo $input_other_ele_category_font_sub_color; ?>">
                  </td>
                </tr>
                <tr><td class="h3"><?php echo $h3_font_style_font_sub_color_hover; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_other_ele_category_font_sub_color_hover; ?>"></div>
                    <input id="input_other_ele_category_font_sub_color_hover" style="text-align: center" type="text" size="6" maxlength="6"  name="input_other_ele_category_font_sub_color_hover" value="<?php echo $input_other_ele_category_font_sub_color_hover; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_other_ele_category_font_family">
                      <?php if (isset($select_other_ele_category_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_other_ele_category_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_other_ele_category_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_other_ele_category_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_other_ele_category_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_other_ele_category_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_other_ele_category_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_other_ele_category_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_other_ele_category_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_other_ele_category_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_other_ele_category_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_other_ele_category_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_other_ele_category_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_other_ele_category_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_other_ele_category_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                    <select name="select_other_ele_category_font_weight">
                      <?php if (isset($select_other_ele_category_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_other_ele_category_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_other_ele_category_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_other_ele_category_font_style">
                      <?php if (isset($select_other_ele_category_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_other_ele_category_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_other_ele_category_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_other_ele_category_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_other_ele_category_font_transform">
                      <?php if (isset($select_other_ele_category_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_other_ele_category_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_other_ele_category_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_other_ele_category_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_other_ele_category_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_other_ele_category_font_google) && $radio_other_ele_category_font_google == '1'){ ?>
                      <input type="radio"  name="radio_other_ele_category_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_other_ele_category_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_other_ele_category_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_other_ele_category_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_other_ele_category_font_google" type="text" size="100" name="input_other_ele_category_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_other_ele_category_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_other_ele_category_font_shadow) && $radio_other_ele_category_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_other_ele_category_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_other_ele_category_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_other_ele_category_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_other_ele_category_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_other_ele_category_font_shadow" type="text" size="100" name="input_other_ele_category_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_other_ele_category_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- Category // End -->
    
    <!-- Breadcrumb // Start -->
      <div id="tab-other-ele-breadcrumb">
        <div class="box"><div class="box-heading"><?php echo $heading_other_ele_bread; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_other_ele_bread_options) && $radio_other_ele_bread_options == '1'){ ?>
                    <input type="radio"  name="radio_other_ele_bread_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_other_ele_bread_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_other_ele_bread_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_other_ele_bread_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_other_ele_bread_bg_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_other_ele_bread_bg_color; ?>"></div><input id="input_other_ele_bread_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_other_ele_bread_bg_color" value="<?php echo $input_other_ele_bread_bg_color; ?>"></td>	
                </tr>
                <tr><td class="h3"><?php echo $h3_other_ele_bread_bg_color_transparent; ?></td>
                <td>
                  <?php if(isset($radio_other_ele_bread_bg_color_transparent) && $radio_other_ele_bread_bg_color_transparent == '1'){ ?>
                    <input type="radio"  name="radio_other_ele_bread_bg_color_transparent" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_other_ele_bread_bg_color_transparent" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_other_ele_bread_bg_color_transparent" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_other_ele_bread_bg_color_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_other_ele_bread_bg_pattern; ?></td>
                  <td>
                    <select name="select_other_ele_bread_bg_pattern">
                      <?php if (isset($select_other_ele_bread_bg_pattern)) {$selected = "selected";?>
                        <option value="none" <?php if($select_other_ele_bread_bg_pattern=='none'){echo $selected;} ?>>None</option>
                        <option value="scan-lines" <?php if($select_other_ele_bread_bg_pattern=='scan-lines'){echo $selected;} ?>>Scan lines</option>
                        <option value="noise" <?php if($select_other_ele_bread_bg_pattern=='noise'){echo $selected;} ?>>Noise</option>
                        <option value="noise2" <?php if($select_other_ele_bread_bg_pattern=='noise2'){echo $selected;} ?>>Noise_2</option>
                        <option value="texture" <?php if($select_other_ele_bread_bg_pattern=='texture'){echo $selected;} ?>>Texture</option>
                        <option value="jeans" <?php if($select_other_ele_bread_bg_pattern=='jeans'){echo $selected;} ?>>Jeans</option>
                        <option value="leather" <?php if($select_other_ele_bread_bg_pattern=='leather'){echo $selected;} ?>>Leather</option>
                        <option value="square" <?php if($select_other_ele_bread_bg_pattern=='square'){echo $selected;} ?>>Squares</option>
                        <option value="grid" <?php if($select_other_ele_bread_bg_pattern=='grid'){echo $selected;} ?>>Grid</option>
                        <option value="grid2" <?php if($select_other_ele_bread_bg_pattern=='grid2'){echo $selected;} ?>>Grid_2</option>
                        <option value="circle" <?php if($select_other_ele_bread_bg_pattern=='circle'){echo $selected;} ?>>Circle</option>
                        <option value="fabric_of_squares_gray" <?php if($select_other_ele_bread_bg_pattern=='fabric_of_squares_gray'){echo $selected;} ?>>Fabric of squares gray</option>
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
                  <tr><td class="h3"><?php echo $h3_other_ele_slightly_transparent; ?></td>
                    <td>
                      <select name="select_other_ele_slightly_transparent">
                        <?php if (isset($select_other_ele_slightly_transparent)) {$selected = "selected";?>
                          <option value="none" <?php if($select_other_ele_slightly_transparent=='none'){echo $selected;} ?>>None</option>
                          <option value="b_50" <?php if($select_other_ele_slightly_transparent=='b_50'){echo $selected;} ?>>Black 50%</option>
                          <option value="b_40" <?php if($select_other_ele_slightly_transparent=='b_40'){echo $selected;} ?>>Black 40%</option>
                          <option value="b_30" <?php if($select_other_ele_slightly_transparent=='b_30'){echo $selected;} ?>>Black 30%</option>
                          <option value="b_20" <?php if($select_other_ele_slightly_transparent=='b_20'){echo $selected;} ?>>Black 20%</option>
                          <option value="b_10" <?php if($select_other_ele_slightly_transparent=='b_10'){echo $selected;} ?>>Black 10%</option>
                          <option value="w_50" <?php if($select_other_ele_slightly_transparent=='w_50'){echo $selected;} ?>>White 50%</option>
                          <option value="w_40" <?php if($select_other_ele_slightly_transparent=='w_40'){echo $selected;} ?>>White 40%</option>
                          <option value="w_30" <?php if($select_other_ele_slightly_transparent=='w_30'){echo $selected;} ?>>White 30%</option>
                          <option value="w_20" <?php if($select_other_ele_slightly_transparent=='w_20'){echo $selected;} ?>>White 20%</option>
                          <option value="w_10" <?php if($select_other_ele_slightly_transparent=='w_10'){echo $selected;} ?>>White 10%</option>
                        <?php } else { ?>
                          <option value="none"selected="selected">None</option>
                          <option value="b_50">Black 50%</option>
                          <option value="b_40">Black 40%</option>
                          <option value="b_30">Black 30%</option>
                          <option value="b_20">Black 20%</option>
                          <option value="b_10">Black 10%</option>
                          <option value="w_50">White 50%</option>
                          <option value="w_40">White 40%</option>
                          <option value="w_30">White 30%</option>
                          <option value="w_20">White 20%</option>
                          <option value="w_10">White 10%</option>
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_other_ele_bread_bg_pattern_upload; ?><br>
                    <h4><?php echo $h4_other_ele_bread_bread_bg_pattern_upload; ?></h4></td>
                  <td>
                    <?php if(isset($radio_other_ele_bread_bg_pattern_image) && $radio_other_ele_bread_bg_pattern_image == '1'){ ?>
                      <input type="radio"  name="radio_other_ele_bread_bg_pattern_image" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_other_ele_bread_bg_pattern_image" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_other_ele_bread_bg_pattern_image" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_other_ele_bread_bg_pattern_image" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td>
                    <input type="hidden" name="upload_other_ele_bread_bg_pattern_image" value="<?php echo $upload_other_ele_bread_bg_pattern_image; ?>" id="upload_other_ele_bread_bg_pattern_image" />
                    <div class="selected_image" style="text-align:center;">
                      <img src="<?php echo $image_other_ele_bread_pattern_preview; ?>" alt="" id="image_other_ele_bread_pattern_preview" onclick="image_upload('upload_other_ele_bread_bg_pattern_image', 'image_other_ele_bread_pattern_preview');" /><br>
                      <a onclick="image_upload('upload_other_ele_bread_bg_pattern_image', 'image_other_ele_bread_pattern_preview');"><?php echo $text_browse; ?></a>
                    </div>
                  </td> 
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_other_ele_bread_full_bg_image; ?><br>
                    <h4><?php echo $h4_other_ele_bread_full_bg_image; ?></h4></td>
                  <td>
                    <?php if(isset($radio_other_ele_bread_full_background_image) && $radio_other_ele_bread_full_background_image == '1'){ ?>
                      <input type="radio"  name="radio_other_ele_bread_full_background_image" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_other_ele_bread_full_background_image" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_other_ele_bread_full_background_image" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_other_ele_bread_full_background_image" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td>
                    <input type="hidden" name="upload_other_ele_bread_full_bg_image" value="<?php echo $upload_other_ele_bread_full_bg_image; ?>" id="upload_other_ele_bread_full_bg_image" />
                    <div class="selected_image" style="text-align:center;">
                      <img src="<?php echo $image_other_ele_bread_full_bg_preview; ?>" alt="" id="image_other_ele_bread_full_bg_preview" onclick="image_upload('upload_other_ele_bread_full_bg_image', 'image_other_ele_bread_full_bg_preview');" /><br>
                      <a onclick="image_upload('upload_other_ele_bread_full_bg_image', 'image_other_ele_bread_full_bg_preview');"><?php echo $text_browse; ?></a>
                    </div>
                  </td> 
                </tr>
              </table>
            </div>
          </div>
        </div>
        <!-- Breadcrumb Font H1 // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_other_ele_bread_font; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr>
                  <td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_other_ele_bread_font_options) && $radio_other_ele_bread_font_options == '1'){ ?>
                      <input type="radio"  name="radio_other_ele_bread_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_other_ele_bread_font_options" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_other_ele_bread_font_options" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_other_ele_bread_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                    <td>
                      <input id="input_other_ele_bread_font_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_other_ele_bread_font_size" value="<?php echo $input_other_ele_bread_font_size; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                  <tr><td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_other_ele_bread_font_color; ?>"></div>
                      <input id="input_other_ele_bread_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_other_ele_bread_font_color" value="<?php echo $input_other_ele_bread_font_color; ?>">
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font; ?></td>
                    <td>
                      <select name="select_other_ele_bread_font_family">
                        <?php if (isset($select_other_ele_bread_font_family)) {$selected = "selected";?>
                        <option value="default" <?php if($select_other_ele_bread_font_family=='default'){echo $selected;} ?>>By Default</option>
                        <option value="Verdana, Geneva, sans-serif" <?php if($select_other_ele_bread_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_other_ele_bread_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_other_ele_bread_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                        <option value="Arial, Helvetica, sans-serif" <?php if($select_other_ele_bread_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                        <option value="Tahoma, Geneva, sans-serif" <?php if($select_other_ele_bread_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_other_ele_bread_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_other_ele_bread_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_other_ele_bread_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_other_ele_bread_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_other_ele_bread_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_other_ele_bread_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_other_ele_bread_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_other_ele_bread_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                      <select name="select_other_ele_bread_font_weight">
                        <?php if (isset($select_other_ele_bread_font_weight)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_other_ele_bread_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="bold" <?php if($select_other_ele_bread_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                      <select name="select_other_ele_bread_font_style">
                        <?php if (isset($select_other_ele_bread_font_style)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_other_ele_bread_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="italic" <?php if($select_other_ele_bread_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                          <option value="oblique" <?php if($select_other_ele_bread_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                      <select name="select_other_ele_bread_font_transform">
                        <?php if (isset($select_other_ele_bread_font_transform)) {$selected = "selected";?>
                          <option value="none" <?php if($select_other_ele_bread_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                          <option value="uppercase" <?php if($select_other_ele_bread_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                          <option value="lowercase" <?php if($select_other_ele_bread_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                          <option value="capitalize" <?php if($select_other_ele_bread_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                      <?php if(isset($radio_other_ele_bread_font_google) && $radio_other_ele_bread_font_google == '1'){ ?>
                        <input type="radio"  name="radio_other_ele_bread_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_other_ele_bread_font_google" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_other_ele_bread_font_google" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_other_ele_bread_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_other_ele_bread_font_google" type="text" size="100" name="input_other_ele_bread_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_other_ele_bread_font_google; ?>"></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                    <td>
                      <?php if(isset($radio_other_ele_bread_font_shadow) && $radio_other_ele_bread_font_shadow == '1'){ ?>
                        <input type="radio"  name="radio_other_ele_bread_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_other_ele_bread_font_shadow" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_other_ele_bread_font_shadow" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_other_ele_bread_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_other_ele_bread_font_shadow" type="text" size="100" name="input_other_ele_bread_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_other_ele_bread_font_shadow; ?>"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Breadcrumb Font H1 // End -->
        
        <!-- Breadcrumb Hyperlink Font // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_other_ele_bread_a_font; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr>
                  <td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_other_ele_bread_a_font_options) && $radio_other_ele_bread_a_font_options == '1'){ ?>
                      <input type="radio"  name="radio_other_ele_bread_a_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_other_ele_bread_a_font_options" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_other_ele_bread_a_font_options" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_other_ele_bread_a_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                    <td>
                      <input id="input_other_ele_bread_a_font_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_other_ele_bread_a_font_size" value="<?php echo $input_other_ele_bread_a_font_size; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                  <tr><td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_other_ele_bread_a_font_color; ?>"></div>
                      <input id="input_other_ele_bread_a_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_other_ele_bread_a_font_color" value="<?php echo $input_other_ele_bread_a_font_color; ?>">
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_font_style_font; ?></td>
                    <td>
                      <select name="select_other_ele_bread_a_font_family">
                        <?php if (isset($select_other_ele_bread_a_font_family)) {$selected = "selected";?>
                        <option value="default" <?php if($select_other_ele_bread_a_font_family=='default'){echo $selected;} ?>>By Default</option>
                        <option value="Verdana, Geneva, sans-serif" <?php if($select_other_ele_bread_a_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                        <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_other_ele_bread_a_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                        <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_other_ele_bread_a_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                        <option value="Arial, Helvetica, sans-serif" <?php if($select_other_ele_bread_a_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                        <option value="Tahoma, Geneva, sans-serif" <?php if($select_other_ele_bread_a_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                        <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_other_ele_bread_a_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                        <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_other_ele_bread_a_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                        <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_other_ele_bread_a_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                        <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_other_ele_bread_a_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                        <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_other_ele_bread_a_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                        <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_other_ele_bread_a_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                        <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_other_ele_bread_a_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                        <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_other_ele_bread_a_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                      <select name="select_other_ele_bread_a_font_weight">
                        <?php if (isset($select_other_ele_bread_a_font_weight)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_other_ele_bread_a_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="bold" <?php if($select_other_ele_bread_a_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                      <select name="select_other_ele_bread_a_font_style">
                        <?php if (isset($select_other_ele_bread_a_font_style)) {$selected = "selected";?>
                          <option value="normal" <?php if($select_other_ele_bread_a_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                          <option value="italic" <?php if($select_other_ele_bread_a_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                          <option value="oblique" <?php if($select_other_ele_bread_a_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                      <select name="select_other_ele_bread_a_font_transform">
                        <?php if (isset($select_other_ele_bread_a_font_transform)) {$selected = "selected";?>
                          <option value="none" <?php if($select_other_ele_bread_a_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                          <option value="uppercase" <?php if($select_other_ele_bread_a_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                          <option value="lowercase" <?php if($select_other_ele_bread_a_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                          <option value="capitalize" <?php if($select_other_ele_bread_a_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                      <?php if(isset($radio_other_ele_bread_a_font_google) && $radio_other_ele_bread_a_font_google == '1'){ ?>
                        <input type="radio"  name="radio_other_ele_bread_a_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_other_ele_bread_a_font_google" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_other_ele_bread_a_font_google" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_other_ele_bread_a_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_other_ele_bread_a_font_google" type="text" size="100" name="input_other_ele_bread_a_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_other_ele_bread_a_font_google; ?>"></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                    <td>
                      <?php if(isset($radio_other_ele_bread_a_font_shadow) && $radio_other_ele_bread_a_font_shadow == '1'){ ?>
                        <input type="radio"  name="radio_other_ele_bread_a_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_other_ele_bread_a_font_shadow" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_other_ele_bread_a_font_shadow" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_other_ele_bread_a_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input id="input_other_ele_bread_a_font_shadow" type="text" size="100" name="input_other_ele_bread_a_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_other_ele_bread_a_font_shadow; ?>"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Breadcrumb Hyperlink Font // End -->
      </div>
    <!-- Breadcrumb // End -->
    
    <!-- Payment Method // Start -->
    <div id="tab-other-ele-payment_method">
      <div class="box"><div class="box-heading"><?php echo $heading_other_ele_payment; ?></div>
        <div class="box-content">
          <table class="yellow">
            <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
              <td>
                <?php if(isset($radio_other_ele_payment_options) && $radio_other_ele_payment_options == '1'){ ?>
                  <input type="radio"  name="radio_other_ele_payment_options" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_other_ele_payment_options" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_other_ele_payment_options" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_other_ele_payment_options" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
          </table>
          <div class="left-margin">
            <div id="language-payment" class="horizontal-tabs">
              <?php foreach ($languages as $language) { ?>
                <a href="#tab-language-payment-<?php echo $language['language_id']; ?>"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" alt="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a>
              <?php } ?>
            </div>
            <?php foreach ($languages as $language) { ?>
              <div id="tab-language-payment-<?php echo $language['language_id']; ?>">
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_payment_heading_name; ?></td>
                    <td><input type="text" name="input_payment_name_<?php echo $language['language_id']; ?>" id="input_payment_name_<?php echo $language['language_id']; ?>" size="50" value="<?php echo isset(${'input_payment_name_' . $language['language_id']}) ? ${'input_payment_name_' . $language['language_id']} : ''; ?>" /></td>
                  </tr>
                </table>
              </div>
            <?php } ?>
            <table class="blue">
              <tr>
                <td><div id="americanexpress"></div></td>
                <td class="h3"><?php echo $h3_americanexpress; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_americanexpress) && $radio_radio_other_ele_americanexpress == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_americanexpress" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_americanexpress" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_americanexpress" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_americanexpress" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="cirrus"></div></td>
                <td class="h3"><?php echo $h3_cirrus; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_cirrus) && $radio_radio_other_ele_cirrus == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_cirrus" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_cirrus" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_cirrus" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_cirrus" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="delta"></div></td>
                <td class="h3"><?php echo $h3_delta; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_delta) && $radio_radio_other_ele_delta == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_delta" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_delta" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_delta" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_delta" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="dinersclub"></div></td>
                <td class="h3"><?php echo $h3_dinersclub; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_dinersclub) && $radio_radio_other_ele_dinersclub == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_dinersclub" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_dinersclub" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_dinersclub" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_dinersclub" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="directdebit"></div></td>
                <td class="h3"><?php echo $h3_directdebit; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_directdebit) && $radio_radio_other_ele_directdebit == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_directdebit" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_directdebit" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_directdebit" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_directdebit" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="discover"></div></td>
                <td class="h3"><?php echo $h3_discover; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_discover) && $radio_radio_other_ele_discover == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_discover" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_discover" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_discover" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_discover" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="egold"></div></td>
                <td class="h3"><?php echo $h3_egold; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_egold) && $radio_radio_other_ele_egold == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_egold" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_egold" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_egold" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_egold" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="maestro"></div></td>
                <td class="h3"><?php echo $h3_maestro; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_maestro) && $radio_radio_other_ele_maestro == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_maestro" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_maestro" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_maestro" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_maestro" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="mastercard"></div></td>
                <td class="h3"><?php echo $h3_mastercard; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_mastercard) && $radio_radio_other_ele_mastercard == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_mastercard" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_mastercard" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_mastercard" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_mastercard" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="paypal"></div></td>
                <td class="h3"><?php echo $h3_paypal; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_paypal) && $radio_radio_other_ele_paypal == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_paypal" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_paypal" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_paypal" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_paypal" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="solo"></div></td>
                <td class="h3"><?php echo $h3_solo; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_solo) && $radio_radio_other_ele_solo == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_solo" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_solo" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_solo" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_solo" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="switch"></div></td>
                <td class="h3"><?php echo $h3_switch; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_switch) && $radio_radio_other_ele_switch == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_switch" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_switch" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_switch" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_switch" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="visa"></div></td>
                <td class="h3"><?php echo $h3_visa; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_visa) && $radio_radio_other_ele_visa == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_visa" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_visa" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_visa" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_visa" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="visaelectron"></div></td>
                <td class="h3"><?php echo $h3_visaelectron; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_visaelectron) && $radio_radio_other_ele_visaelectron == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_visaelectron" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_visaelectron" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_visaelectron" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_visaelectron" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="westernunion"></div></td>
                <td class="h3"><?php echo $h3_westernunion; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_westernunion) && $radio_radio_other_ele_westernunion == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_westernunion" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_westernunion" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_westernunion" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_westernunion" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="wirecard"></div></td>
                <td class="h3"><?php echo $h3_wirecard; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_wirecard) && $radio_radio_other_ele_wirecard == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_wirecard" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_wirecard" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_wirecard" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_wirecard" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td><div id="worldpay"></div></td>
                <td class="h3"><?php echo $h3_worldpay; ?></td>
                <td>
                  <?php if(isset($radio_radio_other_ele_worldpay) && $radio_radio_other_ele_worldpay == '1'){ ?>
                    <input type="radio"  name="radio_radio_other_ele_worldpay" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_worldpay" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_radio_other_ele_worldpay" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_radio_other_ele_worldpay" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Payment Method // End -->
  </div>
<!-- Tab10 // End // Other Elements -->