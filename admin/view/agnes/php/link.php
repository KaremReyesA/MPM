<!-- Tab5 // Start // Link -->
  <div id="tab5">
    <table class="red">
      <tr><td class="h3"><?php echo $h3_link_status; ?></td>
          <td>
            <select name="select_link_status">
              <?php if ($select_link_status) { ?>
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
    
    <!-- Link // Link Tabs // Start -->
      <div class="box">
        <div class="box-content">
          <div id="link-htabs" class="horizontal-tabs">
            <a href="#link-settings"><?php echo $tab_link_settings; ?></a>
            <a href="#element-activation"><?php echo $tab_element_activation; ?></a>
            <a href="#font-color"><?php echo $tab_font_settings; ?></a>
          </div>
        </div>
      </div>
    <!-- Link // Link Tabs // End -->
    
    <!-- Link settings // Start -->
      <div id="link-settings">
        <!-- Link Color combination // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_link_options; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_link_color_options) && $radio_link_color_options == '1'){ ?>
                      <input type="radio"  name="radio_link_color_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_link_color_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_color_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_link_color_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_link_color_transparent; ?></td>
                    <td>
                      <?php if(isset($radio_link_color_transparent) && $radio_link_color_transparent == 'transparent'){ ?>
                        <input type="radio"  name="radio_link_color_transparent" value="transparent" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_link_color_transparent" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_link_color_transparent" value="transparent" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_link_color_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td rowspan="3" class="link_color"></td>
                  </tr>
                  <tr><td class="h3"><?php echo $h3_link_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_link_color; ?>"></div>
                      <input id="input_link_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_link_color" value="<?php echo $input_link_color; ?>">
                    </td>
                  </tr>
                  <tr><td class="h3"><?php echo $h3_link_bg_pattern; ?></td>
                    <td>
                      <select name="select_link_bg_pattern">
                        <?php if (isset($select_link_bg_pattern)) {$selected = "selected";?>
                          <option value="none" <?php if($select_link_bg_pattern=='none'){echo $selected;} ?>>None</option>
                          <option value="links_white" <?php if($select_link_bg_pattern=='links_white'){echo $selected;} ?>>links_white</option>
                          <option value="links_black" <?php if($select_link_bg_pattern=='links_black'){echo $selected;} ?>>links_black</option>
                        <?php } else { ?>
                          <option value="none"selected="selected">None</option>
                          <option value="links_white">links_white</option>    
                          <option value="links_black">links_black</option>
                        <?php } ?>
                      </select>
                    </td>
                  </tr>
                </table>
								<table class="blue">
                  <tr><td class="h3"><?php echo $h3_link_slightly_transparent; ?></td>
                    <td>
                      <select name="select_link_slightly_transparent">
                        <?php if (isset($select_link_slightly_transparent)) {$selected = "selected";?>
                          <option value="none" <?php if($select_link_slightly_transparent=='none'){echo $selected;} ?>>None</option>
                          <option value="b_50" <?php if($select_link_slightly_transparent=='b_50'){echo $selected;} ?>>Black 50%</option>
                          <option value="b_40" <?php if($select_link_slightly_transparent=='b_40'){echo $selected;} ?>>Black 40%</option>
                          <option value="b_30" <?php if($select_link_slightly_transparent=='b_30'){echo $selected;} ?>>Black 30%</option>
                          <option value="b_20" <?php if($select_link_slightly_transparent=='b_20'){echo $selected;} ?>>Black 20%</option>
                          <option value="b_10" <?php if($select_link_slightly_transparent=='b_10'){echo $selected;} ?>>Black 10%</option>
                          <option value="w_50" <?php if($select_link_slightly_transparent=='w_50'){echo $selected;} ?>>White 50%</option>
                          <option value="w_40" <?php if($select_link_slightly_transparent=='w_40'){echo $selected;} ?>>White 40%</option>
                          <option value="w_30" <?php if($select_link_slightly_transparent=='w_30'){echo $selected;} ?>>White 30%</option>
                          <option value="w_20" <?php if($select_link_slightly_transparent=='w_20'){echo $selected;} ?>>White 20%</option>
                          <option value="w_10" <?php if($select_link_slightly_transparent=='w_10'){echo $selected;} ?>>White 10%</option>
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
                  <tr><td class="h3"><?php echo $h3_link_border_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_link_border_color; ?>"></div>
                      <input id="input_link_border_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_link_border_color" value="<?php echo $input_link_border_color; ?>">
                    </td>
                    <td rowspan="5" id="link_border"></td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $text_border; ?> <?php echo $text_top; ?></td>
                    <td>
                      <input id="input_link_border_top" style="text-align: center" type="text" size="2" maxlength="2"  name="input_link_border_top" value="<?php echo $input_link_border_top; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $text_border; ?> <?php echo $text_right; ?></td>
                    <td>
                      <input id="input_link_border_right" style="text-align: center" type="text" size="2" maxlength="2"  name="input_link_border_right" value="<?php echo $input_link_border_right; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $text_border; ?> <?php echo $text_bottom; ?></td>
                    <td>
                      <input id="input_link_border_bottom" style="text-align: center" type="text" size="2" maxlength="2"  name="input_link_border_bottom" value="<?php echo $input_link_border_bottom; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $text_border; ?> <?php echo $text_left; ?></td>
                    <td>
                      <input id="input_link_border_left" style="text-align: center" type="text" size="2" maxlength="2"  name="input_link_border_left" value="<?php echo $input_link_border_left; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_link_pattern_upload; ?><br>
                      <h4><?php echo $h4_link_pattern_upload; ?></h4>
                    </td>
                    <td>
                      <?php if(isset($radio_link_pattern_image) && $radio_link_pattern_image == '1'){ ?>
                        <input type="radio"  name="radio_link_pattern_image" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_link_pattern_image" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_link_pattern_image" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_link_pattern_image" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td>
                      <input type="hidden" name="upload_link_pattern_image" value="<?php echo $upload_link_pattern_image; ?>" id="upload_link_pattern_image" />
                      <div class="selected_image" style="text-align:center;">
                        <img src="<?php echo $image_link_pattern_preview; ?>" alt="" id="image_link_pattern_preview" onclick="image_upload('upload_link_pattern_image', 'image_link_pattern_preview');" /><br>
                        <a onclick="image_upload('upload_link_pattern_image', 'image_link_pattern_preview');"><?php echo $text_browse; ?></a>
                      </div>
                    </td>
                    <td class="link_color"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Link Color combination // End-->
        
        <!-- Sub Color combination // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_sub_link_options; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_link_color_sub_options) && $radio_link_color_sub_options == '1'){ ?>
                      <input type="radio"  name="radio_link_color_sub_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_link_color_sub_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_color_sub_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_link_color_sub_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_link_color_sub_transparent; ?></td>
                    <td>
                      <?php if(isset($radio_link_color_sub_transparent) && $radio_link_color_sub_transparent == 'transparent'){ ?>
                        <input type="radio"  name="radio_link_color_sub_transparent" value="transparent" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_link_color_sub_transparent" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_link_color_sub_transparent" value="transparent" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_link_color_sub_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td rowspan="3" class="link_sub_color"></td>
                  </tr>
                  <tr><td class="h3"><?php echo $h3_link_color_sub; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_link_color_sub; ?>"></div>
                      <input id="input_link_color_sub" style="text-align: center" type="text" size="6" maxlength="6"  name="input_link_color_sub" value="<?php echo $input_link_color_sub; ?>">
                    </td>
                  </tr>
                  <tr><td class="h3"><?php echo $h3_link_sub_slightly_transparent; ?></td>
                    <td>
                      <select name="select_link_sub_slightly_transparent">
                        <?php if (isset($select_link_sub_slightly_transparent)) {$selected = "selected";?>
                          <option value="none" <?php if($select_link_sub_slightly_transparent=='none'){echo $selected;} ?>>None</option>
                          <option value="b_50" <?php if($select_link_sub_slightly_transparent=='b_50'){echo $selected;} ?>>Black 50%</option>
                          <option value="b_40" <?php if($select_link_sub_slightly_transparent=='b_40'){echo $selected;} ?>>Black 40%</option>
                          <option value="b_30" <?php if($select_link_sub_slightly_transparent=='b_30'){echo $selected;} ?>>Black 30%</option>
                          <option value="b_20" <?php if($select_link_sub_slightly_transparent=='b_20'){echo $selected;} ?>>Black 20%</option>
                          <option value="b_10" <?php if($select_link_sub_slightly_transparent=='b_10'){echo $selected;} ?>>Black 10%</option>
                          <option value="w_50" <?php if($select_link_sub_slightly_transparent=='w_50'){echo $selected;} ?>>White 50%</option>
                          <option value="w_40" <?php if($select_link_sub_slightly_transparent=='w_40'){echo $selected;} ?>>White 40%</option>
                          <option value="w_30" <?php if($select_link_sub_slightly_transparent=='w_30'){echo $selected;} ?>>White 30%</option>
                          <option value="w_20" <?php if($select_link_sub_slightly_transparent=='w_20'){echo $selected;} ?>>White 20%</option>
                          <option value="w_10" <?php if($select_link_sub_slightly_transparent=='w_10'){echo $selected;} ?>>White 10%</option>
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
                  <tr><td class="h3"><?php echo $h3_link_sub_border_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_link_sub_border_color; ?>"></div>
                      <input id="input_link_sub_border_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_link_sub_border_color" value="<?php echo $input_link_sub_border_color; ?>">
                    </td>
                    <td rowspan="5" id="link_sub_border"></td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $text_border; ?><?php echo $text_top; ?></td>
                    <td>
                      <input id="input_link_sub_border_top" style="text-align: center" type="text" size="2" maxlength="2"  name="input_link_sub_border_top" value="<?php echo $input_link_sub_border_top; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $text_border; ?><?php echo $text_right; ?></td>
                    <td>
                      <input id="input_link_sub_border_right" style="text-align: center" type="text" size="2" maxlength="2"  name="input_link_sub_border_right" value="<?php echo $input_link_sub_border_right; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $text_border; ?><?php echo $text_bottom; ?></td>
                    <td>
                      <input id="input_link_sub_border_bottom" style="text-align: center" type="text" size="2" maxlength="2"  name="input_link_sub_border_bottom" value="<?php echo $input_link_sub_border_bottom; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $text_border; ?><?php echo $text_left; ?></td>
                    <td>
                      <input id="input_link_sub_border_left" style="text-align: center" type="text" size="2" maxlength="2"  name="input_link_sub_border_left" value="<?php echo $input_link_sub_border_left; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_link_shadow; ?></td>
                    <td>
                      <?php if(isset($radio_link_shadow) && $radio_link_shadow == '1'){ ?>
                        <input type="radio"  name="radio_link_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_link_shadow" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_link_shadow" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_link_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td rowspan="2" id="link_sub_shadow"></td>
                  </tr>
                  <tr><td class="h3"><?php echo $h3_link_shadow_size; ?></td>
                    <td>
                      <input id="input_link_shadow_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_link_shadow_size" value="<?php echo $input_link_shadow_size; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_sub_link_pattern_upload; ?><br>
                      <h4><?php echo $h4_sub_link_pattern_upload; ?></h4>
                    </td>
                    <td>
                      <?php if(isset($radio_sub_link_pattern_image) && $radio_sub_link_pattern_image == '1'){ ?>
                        <input type="radio"  name="radio_sub_link_pattern_image" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_sub_link_pattern_image" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_sub_link_pattern_image" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_sub_link_pattern_image" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td>
                      <input type="hidden" name="upload_sub_link_pattern_image" value="<?php echo $upload_sub_link_pattern_image; ?>" id="upload_sub_link_pattern_image" />
                      <div class="selected_image" style="text-align:center;">
                        <img src="<?php echo $image_sub_link_pattern_preview; ?>" alt="" id="image_sub_link_pattern_preview" onclick="image_upload('upload_sub_link_pattern_image', 'image_sub_link_pattern_preview');" /><br>
                        <a onclick="image_upload('upload_sub_link_pattern_image', 'image_sub_link_pattern_preview');"><?php echo $text_browse; ?></a>
                      </div>
                    </td>
                    <td class="link_sub_color"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Sub Color combination // End -->
        
        <!-- Movement options // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_movement_options; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_link_position_options) && $radio_link_position_options == '1'){ ?>
                      <input type="radio"  name="radio_link_position_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_link_position_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_position_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_link_position_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_link_position; ?></td>
                    <td>
                      <?php if(isset($radio_link_position) && $radio_link_position == '1'){ ?>
                        <input type="radio"  name="radio_link_position" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_link_position" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_link_position" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_link_position" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td><?php echo $text_top; ?> <input id="input_link_position_top" type="text" size="3" maxlength="3"  name="input_link_position_top" value="<?php echo $input_link_position_top; ?>"> <?php echo $text_px; ?></td>
                    <td><?php echo $text_right; ?> <input id="input_link_position_right" type="text" size="3" maxlength="3"  name="input_link_position_right" value="<?php echo $input_link_position_right; ?>"> <?php echo $text_px; ?></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_link_align; ?></td>
                    <td>
                      <?php if(isset($radio_link_align) && $radio_link_align == '1'){ ?>
                        <input type="radio"  name="radio_link_align" value="1" CHECKED > <?php echo $text_left; ?>
                        <input type="radio" name="radio_link_align" value="0"> <?php echo $text_right; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_link_align" value="1" > <?php echo $text_left; ?>
                        <input type="radio" name="radio_link_align" value="0" CHECKED> <?php echo $text_right; ?>
                      <?php } ?>
                    </td>
                    <td id="link_align"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Movement options // End -->
      
        <!-- Spacing options // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_spacing_option; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_link_text_spacing_options) && $radio_link_text_spacing_options == '1'){ ?>
                      <input type="radio"  name="radio_link_text_spacing_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_link_text_spacing_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_text_spacing_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_link_text_spacing_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr><td class="h3" rowspan="2"><?php echo $h3_link_text_spacing; ?></td>
                    <td>
                      Top, Bottom <input id="input_link_text_spacing_topbottom" style="text-align: center" type="text" size="2" maxlength="2"  name="input_link_text_spacing_topbottom" value="<?php echo $input_link_text_spacing_topbottom; ?>"> <?php echo $text_px; ?>
                    </td>
                    <td rowspan="2" id="link_text_spacing"></td>
                  </tr>
                  <tr>
                    <td>
                      Left, Right <input id="input_link_text_spacing_leftright" style="text-align: center" type="text" size="2" maxlength="2"  name="input_link_text_spacing_leftright" value="<?php echo $input_link_text_spacing_leftright; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3" rowspan="2"><?php echo $h3_link_text_sub_spacing; ?></td>
                    <td>
                      Top, Bottom <input id="input_link_text_sub_spacing_topbottom" style="text-align: center" type="text" size="2" maxlength="2"  name="input_link_text_sub_spacing_topbottom" value="<?php echo $input_link_text_sub_spacing_topbottom; ?>"> <?php echo $text_px; ?>
                    </td>
                    <td rowspan="2" id="link_text_sub_spacing"></td>
                  </tr>
                  <tr>
                    <td>
                      Left, Right <input id="input_link_text_sub_spacing_leftright" style="text-align: center" type="text" size="2" maxlength="2"  name="input_link_text_sub_spacing_leftright" value="<?php echo $input_link_text_sub_spacing_leftright; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Spacing options // End -->
      </div>
    <!-- Link settings // End -->
    
    <!-- Element activation // Start -->
      <div id="element-activation">
        <div class="box"><div class="box-heading"><?php echo $heading_link_activation; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_link_options) && $radio_link_options == '1'){ ?>
                    <input type="radio"  name="radio_link_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_link_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_link_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_link_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_home; ?></td>
                  <td>
                    <?php if(isset($radio_link_home) && $radio_link_home == '1'){ ?>
                      <input type="radio"  name="radio_link_home" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_home" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_home" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_home" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td id="home" rowspan="3"></td>
                </tr>
                <tr><td class="h3"><?php echo $h3_link_home_color; ?></td>
                  <td>
                    <?php if(isset($radio_link_home_icon) && $radio_link_home_icon == 'h_white'){ ?>
                      <input type="radio"  name="radio_link_home_icon" value="h_white" CHECKED > Light
                      <input type="radio" name="radio_link_home_icon" value="h_grey"> Dark
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_home_icon" value="h_white" > Light
                      <input type="radio" name="radio_link_home_icon" value="h_grey" CHECKED> Dark
                    <?php } ?>
                  </td>
                </tr>
                <tr><td class="h3"><?php echo $h3_link_home_color_hover; ?></td>
                  <td>
                    <?php if(isset($radio_link_home_icon_hover) && $radio_link_home_icon_hover == 'h_white'){ ?>
                      <input type="radio"  name="radio_link_home_icon_hover" value="h_white" CHECKED > Light
                      <input type="radio" name="radio_link_home_icon_hover" value="h_grey"> Dark
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_home_icon_hover" value="h_white" > Light
                      <input type="radio" name="radio_link_home_icon_hover" value="h_grey" CHECKED> Dark
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_my_account; ?></td>
                  <td>
                    <?php if(isset($radio_link_my_account) && $radio_link_my_account == '1'){ ?>
                      <input type="radio"  name="radio_link_my_account" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_my_account" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_my_account" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_my_account" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td id="my_account"></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_information; ?></td>
                  <td>
                    <?php if(isset($radio_link_information) && $radio_link_information == '1'){ ?>
                      <input type="radio"  name="radio_link_information" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_information" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_information" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_information" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td id="information"></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_extras; ?></td>
                  <td>
                    <?php if(isset($radio_link_extras) && $radio_link_extras == '1'){ ?>
                      <input type="radio"  name="radio_link_extras" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_extras" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_extras" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_extras" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td id="extras"></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_shopping_cart; ?></td>
                  <td>
                    <?php if(isset($radio_link_shopping_cart) && $radio_link_shopping_cart == '1'){ ?>
                      <input type="radio"  name="radio_link_shopping_cart" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_shopping_cart" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_shopping_cart" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_shopping_cart" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td id="shopping_cart"></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_checkout; ?></td>
                  <td>
                    <?php if(isset($radio_link_checkout) && $radio_link_checkout == '1'){ ?>
                      <input type="radio"  name="radio_link_checkout" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_checkout" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_checkout" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_checkout" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td id="checkout"></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_language; ?></td>
                  <td>
                    <?php if(isset($radio_link_language) && $radio_link_language == '1'){ ?>
                      <input type="radio"  name="radio_link_language" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_language" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_language" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_language" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td id="language"></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_currency; ?></td>
                  <td>
                    <?php if(isset($radio_link_currency) && $radio_link_currency == '1'){ ?>
                      <input type="radio"  name="radio_link_currency" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_currency" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_currency" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_currency" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td id="currency"></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_search; ?></td>
                  <td>
                    <?php if(isset($radio_link_search) && $radio_link_search == '1'){ ?>
                      <input type="radio"  name="radio_link_search" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_search" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_search" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_search" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td id="search"></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_shopping_cart_large; ?></td>
                  <td>
                    <?php if(isset($radio_link_shopping_cart_large) && $radio_link_shopping_cart_large == '1'){ ?>
                      <input type="radio"  name="radio_link_shopping_cart_large" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_shopping_cart_large" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_shopping_cart_large" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_shopping_cart_large" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td id="shopping_cart_big"></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_login; ?></td>
                  <td>
                    <?php if(isset($radio_link_login) && $radio_link_login == '1'){ ?>
                      <input type="radio"  name="radio_link_login" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_login" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_login" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_login" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td id="login"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- Element activation // Start -->
    
    <!-- Link Font size & Font Color options // Start -->
      <div id="font-color">
        <div class="box"><div class="box-heading"><?php echo $heading_link_font_options; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_style_link_options) && $radio_style_link_options == '1'){ ?>
                    <input type="radio"  name="radio_style_link_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_style_link_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_style_link_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_style_link_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_text_size; ?></td>
                  <td>
                    <input id="input_link_text_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_link_text_size" value="<?php echo $input_link_text_size; ?>"> <?php echo $text_px; ?>
                  </td>
                  <td rowspan="2" id="link_text_color"></td>
                </tr>
                <tr><td class="h3"><?php echo $h3_link_text_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_link_text_color; ?>"></div>
                    <input id="input_link_text_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_link_text_color" value="<?php echo $input_link_text_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_text_color_hover; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_link_text_color_hover; ?>"></div>
                    <input id="input_link_text_color_hover" style="text-align: center" type="text" size="6" maxlength="6"  name="input_link_text_color_hover" value="<?php echo $input_link_text_color_hover; ?>">
                  </td>
                  <td id="link_text_color_hover"></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_color_transparent; ?></td>
                  <td>
                    <?php if(isset($radio_link_text_background_transparent) && $radio_link_text_background_transparent == 'transparent'){ ?>
                      <input type="radio"  name="radio_link_text_background_transparent" value="transparent" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_text_background_transparent" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_text_background_transparent" value="transparent" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_text_background_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td id="link_text_background" rowspan="2"></td>
                </tr>
                <tr><td class="h3"><?php echo $h3_link_background_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_link_background_color; ?>"></div>
                    <input id="input_link_background_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_link_background_color" value="<?php echo $input_link_background_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_background_color_hover; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_link_background_color_hover; ?>"></div>
                    <input id="input_link_background_color_hover" style="text-align: center" type="text" size="6" maxlength="6"  name="input_link_background_color_hover" value="<?php echo $input_link_background_color_hover; ?>">
                  </td>
                  <td id="link_text_background_hover"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_link_font_family">
                      <?php if (isset($select_link_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_link_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_link_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_link_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_link_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_link_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_link_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_link_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_link_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_link_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_link_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_link_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_link_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_link_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_link_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                    <select name="select_link_font_weight">
                      <?php if (isset($select_link_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_link_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_link_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_link_font_style">
                      <?php if (isset($select_link_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_link_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_link_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_link_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_link_font_transform">
                      <?php if (isset($select_link_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_link_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_link_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_link_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_link_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_link_font_google) && $radio_link_font_google == '1'){ ?>
                      <input type="radio"  name="radio_link_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_link_font_google" type="text" size="100" name="input_link_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_link_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_link_font_shadow) && $radio_link_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_link_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_link_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_link_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_link_font_shadow" type="text" size="100" name="input_link_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_link_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="box"><div class="box-heading"><?php echo $heading_sub_link_font_options; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_style_sub_link_options) && $radio_style_sub_link_options == '1'){ ?>
                    <input type="radio"  name="radio_style_sub_link_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_style_sub_link_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_style_sub_link_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_style_sub_link_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_sub_text_size; ?></td>
                  <td>
                    <input id="input_link_sub_text_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_link_sub_text_size" value="<?php echo $input_link_sub_text_size; ?>"> <?php echo $text_px; ?>
                  </td>
                  <td rowspan="2" id="link_sub_text_color"></td>
                </tr>
                <tr><td class="h3"><?php echo $h3_link_sub_text_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_link_sub_text_color; ?>"></div>
                    <input id="input_link_sub_text_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_link_sub_text_color" value="<?php echo $input_link_sub_text_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_sub_text_color_hover; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_link_sub_text_color_hover; ?>"></div>
                    <input id="input_link_sub_text_color_hover" style="text-align: center" type="text" size="6" maxlength="6"  name="input_link_sub_text_color_hover" value="<?php echo $input_link_sub_text_color_hover; ?>">
                  </td>
                  <td id="link_sub_text_color_hover"></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_link_sub_background_color_hover; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_link_sub_background_color_hover; ?>"></div>
                    <input id="input_link_sub_background_color_hover" style="text-align: center" type="text" size="6" maxlength="6"  name="input_link_sub_background_color_hover" value="<?php echo $input_link_sub_background_color_hover; ?>">
                  </td>
                  <td id="link_text_sub_background_hover"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_sub_link_font_family">
                      <?php if (isset($select_sub_link_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_sub_link_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_sub_link_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_sub_link_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_sub_link_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_sub_link_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_sub_link_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_sub_link_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_sub_link_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_sub_link_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_sub_link_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_sub_link_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_sub_link_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_sub_link_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_sub_link_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                    <select name="select_sub_link_font_weight">
                      <?php if (isset($select_sub_link_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_sub_link_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_sub_link_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_sub_link_font_style">
                      <?php if (isset($select_sub_link_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_sub_link_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_sub_link_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_sub_link_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_sub_link_font_transform">
                      <?php if (isset($select_sub_link_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_sub_link_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_sub_link_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_sub_link_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_sub_link_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_sub_link_font_google) && $radio_sub_link_font_google == '1'){ ?>
                      <input type="radio"  name="radio_sub_link_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_sub_link_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_sub_link_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_sub_link_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_sub_link_font_google" type="text" size="100" name="input_sub_link_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_sub_link_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
              <tr>
                <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                <td>
                  <?php if(isset($radio_sub_link_font_shadow) && $radio_sub_link_font_shadow == '1'){ ?>
                    <input type="radio"  name="radio_sub_link_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_sub_link_font_shadow" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_sub_link_font_shadow" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_sub_link_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td><input id="input_sub_link_font_shadow" type="text" size="100" name="input_sub_link_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_sub_link_font_shadow; ?>"></td>
              </tr>
            </table>
            </div>
          </div>
        </div>
      </div>
    <!-- Link Font size & Font Color options // Start -->
  </div>
<!-- Tab5 // End // Link -->