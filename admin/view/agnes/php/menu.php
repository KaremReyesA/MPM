<!-- Tab6 // Start // Menu -->
  <div id="tab6">
    <table class="red">
      <tr><td class="h3"><?php echo $h3_menu_status; ?></td>
          <td>
            <select name="select_menu_status">
              <?php if ($select_menu_status) { ?>
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
    
    <!-- Menu // Menu Tabs // Start -->
      <div class="box">
        <div class="box-content">
          <div id="menu-htabs" class="horizontal-tabs">
            <a href="#menu-settings"><?php echo $tab_menu_settings; ?></a>
            <a href="#menu-font-settings"><?php echo $tab_font_settings; ?></a>
          </div>
        </div>
      </div>
    <!--  Menu // Menu Tabs // End -->
    
    <!-- Menu settings // Start -->
      <div id="menu-settings">
        <div class="box"><div class="box-heading"><?php echo $heading_menu_style; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_style_menu_options) && $radio_style_menu_options == '1'){ ?>
                    <input type="radio"  name="radio_style_menu_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_style_menu_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_style_menu_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_style_menu_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
            <table class="blue">
              <?php if (isset($radio_menu_size)) {$checked = "CHECKED"; ?>
                <tr><td class="h3" rowspan="2"><?php echo $h3_menu_size; ?></td>
                  <td align="center"><input type="radio" name="radio_menu_size" value="s_menu" <?php if($radio_menu_size=='s_menu'){echo $checked;} ?>></td>
                  <td id="small_menu"></td>
                </tr>
                <tr>
                  <td align="center"><input type="radio" name="radio_menu_size" value="b_menu" <?php if($radio_menu_size=='b_menu'){echo $checked;} ?>></td>
                  <td id="big_menu"></td>
                </tr>
              <?php } else { ?>
                <tr><td class="h3" rowspan="2"><?php echo $h3_menu_size; ?></td>
                  <td align="center"><input type="radio" name="radio_menu_size" value="s_menu" CHECKED></td>
                  <td id="small_menu"></td>
                </tr>
                <tr>
                  <td align="center"><input type="radio" name="radio_menu_size" value="b_menu"></td>
                <td id="big_menu"></td>
                </tr>
              <?php } ?>
            </table>
            </div>
          </div>
        </div>
        <div class="box"><div class="box-heading"><?php echo $heading_menu_options; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_menu_color_options) && $radio_menu_color_options == '1'){ ?>
                    <input type="radio"  name="radio_menu_color_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_menu_color_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_menu_color_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_menu_color_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_menu_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_menu_color; ?>"></div>
                    <input id="input_menu_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_menu_color" value="<?php echo $input_menu_color; ?>">
                  </td>
                  <td rowspan="2" id="menu_color"></td>
                </tr>
                <tr><td class="h3"><?php echo $h3_menu_color_transparent; ?></td>
                  <td>
                    <?php if(isset($radio_menu_color_transparent) && $radio_menu_color_transparent == '1'){ ?>
                      <input type="radio"  name="radio_menu_color_transparent" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_color_transparent" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_menu_color_transparent" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_color_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_menu_pattern; ?></td>
                  <td>
                    <select name="select_menu_pattern">
                      <?php if (isset($select_menu_pattern)) {$selected = "selected";?>
                        <option value="none" <?php if($select_menu_pattern=='none'){echo $selected;} ?>>None</option>
                        <option value="scan-lines" <?php if($select_menu_pattern=='scan-lines'){echo $selected;} ?>>Scan lines</option>
                        <option value="noise" <?php if($select_menu_pattern=='noise'){echo $selected;} ?>>Noise</option>
                        <option value="noise2" <?php if($select_menu_pattern=='noise2'){echo $selected;} ?>>Noise_2</option>
                        <option value="texture" <?php if($select_menu_pattern=='texture'){echo $selected;} ?>>Texture</option>
                        <option value="jeans" <?php if($select_menu_pattern=='jeans'){echo $selected;} ?>>Jeans</option>
                        <option value="leather" <?php if($select_menu_pattern=='leather'){echo $selected;} ?>>Leather</option>
                        <option value="square" <?php if($select_menu_pattern=='square'){echo $selected;} ?>>Squares</option>
                        <option value="grid" <?php if($select_menu_pattern=='grid'){echo $selected;} ?>>Grid</option>
                        <option value="grid2" <?php if($select_menu_pattern=='grid2'){echo $selected;} ?>>Grid_2</option>
                        <option value="circle" <?php if($select_menu_pattern=='circle'){echo $selected;} ?>>Circle</option>
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
                      <?php } ?>
                    </select>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_menu_pattern_upload; ?><br>
                    <h4><?php echo $h4_menu_pattern_upload; ?></h4>
                  </td>
                  <td>
                    <?php if(isset($radio_menu_pattern_image) && $radio_menu_pattern_image == '1'){ ?>
                      <input type="radio"  name="radio_menu_pattern_image" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_pattern_image" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_menu_pattern_image" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_pattern_image" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td>
                    <input type="hidden" name="upload_menu_pattern_image" value="<?php echo $upload_menu_pattern_image; ?>" id="upload_menu_pattern_image" />
                    <div class="selected_image" style="text-align:center;">
                      <img src="<?php echo $image_menu_pattern_preview; ?>" alt="" id="image_menu_pattern_preview" onclick="image_upload('upload_menu_pattern_image', 'image_menu_pattern_preview');" /><br>
                      <a onclick="image_upload('upload_menu_pattern_image', 'image_menu_pattern_preview');"><?php echo $text_browse; ?></a>
                    </div>
                  </td>
                  <td id="menu_color_patt"></td>
                </tr>
              </table>
              <table class="blue">
              <tr><td class="h3"><?php echo $h3_menu_border_color; ?></td>
                <td><div class="color" style="background-color: #<?php echo $input_menu_border_color; ?>"></div>
                  <input id="input_menu_border_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_menu_border_color" value="<?php echo $input_menu_border_color; ?>">
                </td>
                <td rowspan="5" id="menu_border"></td>
              </tr>
              <tr>
                <td class="h3"><?php echo $text_border; ?> <?php echo $text_top; ?></td>
                <td>
                  <input id="input_menu_border_top" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_border_top" value="<?php echo $input_menu_border_top; ?>"> <?php echo $text_px; ?>
                </td>
              </tr>
              <tr>
                <td class="h3"><?php echo $text_border; ?> <?php echo $text_right; ?></td>
                <td>
                  <input id="input_menu_border_right" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_border_right" value="<?php echo $input_menu_border_right; ?>"> <?php echo $text_px; ?>
                </td>
              </tr>
              <tr>
                <td class="h3"><?php echo $text_border; ?> <?php echo $text_bottom; ?></td>
                <td>
                  <input id="input_menu_border_bottom" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_border_bottom" value="<?php echo $input_menu_border_bottom; ?>"> <?php echo $text_px; ?>
                </td>
              </tr>
              <tr>
                <td class="h3"><?php echo $text_border; ?> <?php echo $text_left; ?></td>
                <td>
                  <input id="input_menu_border_left" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_border_left" value="<?php echo $input_menu_border_left; ?>"> <?php echo $text_px; ?>
                </td>
              </tr>
            </table>
            </div>
          </div>
        </div>
        <div class="box"><div class="box-heading"><?php echo $heading_menu_sub_options; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_menu_color_sub_options) && $radio_menu_color_sub_options == '1'){ ?>
                    <input type="radio"  name="radio_menu_color_sub_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_menu_color_sub_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_menu_color_sub_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_menu_color_sub_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_menu_color_sub; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_menu_color_sub; ?>"></div>
                    <input id="input_menu_color_sub" style="text-align: center" type="text" size="6" maxlength="6"  name="input_menu_color_sub" value="<?php echo $input_menu_color_sub; ?>">
                  </td>
                  <td rowspan="2" id="menu_color_sub"></td>
                </tr>
                <tr><td class="h3"><?php echo $h3_menu_color_sub_transparent; ?></td>
                  <td>
                    <?php if(isset($radio_menu_color_sub_transparent) && $radio_menu_color_sub_transparent == '1'){ ?>
                      <input type="radio"  name="radio_menu_color_sub_transparent" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_color_sub_transparent" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_menu_color_sub_transparent" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_color_sub_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_menu_pattern_sub; ?></td>
                  <td>
                    <select name="select_menu_pattern_sub">
                      <?php if (isset($select_menu_pattern_sub)) {$selected = "selected";?>
                        <option value="none" <?php if($select_menu_pattern_sub=='none'){echo $selected;} ?>>None</option>
                        <option value="scan-lines" <?php if($select_menu_pattern_sub=='scan-lines'){echo $selected;} ?>>Scan lines</option>
                        <option value="noise" <?php if($select_menu_pattern_sub=='noise'){echo $selected;} ?>>Noise</option>
                        <option value="noise2" <?php if($select_menu_pattern_sub=='noise2'){echo $selected;} ?>>Noise_2</option>
                        <option value="texture" <?php if($select_menu_pattern_sub=='texture'){echo $selected;} ?>>Texture</option>
                        <option value="jeans" <?php if($select_menu_pattern_sub=='jeans'){echo $selected;} ?>>Jeans</option>
                        <option value="leather" <?php if($select_menu_pattern_sub=='leather'){echo $selected;} ?>>Leather</option>
                        <option value="square" <?php if($select_menu_pattern_sub=='square'){echo $selected;} ?>>Squares</option>
                        <option value="grid" <?php if($select_menu_pattern_sub=='grid'){echo $selected;} ?>>Grid</option>
                        <option value="grid2" <?php if($select_menu_pattern_sub=='grid2'){echo $selected;} ?>>Grid_2</option>
                        <option value="circle" <?php if($select_menu_pattern_sub=='circle'){echo $selected;} ?>>Circle</option>
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
                      <?php } ?>
                    </select>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_sub_menu_pattern_upload; ?><br>
                    <h4><?php echo $h4_sub_menu_pattern_upload; ?></h4>
                  </td>
                  <td>
                    <?php if(isset($radio_sub_menu_pattern_image) && $radio_sub_menu_pattern_image == '1'){ ?>
                      <input type="radio"  name="radio_sub_menu_pattern_image" value="1" CHECKED/> Yes
                      <input type="radio" name="radio_sub_menu_pattern_image" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_sub_menu_pattern_image" value="1" /> Yes
                      <input type="radio" name="radio_sub_menu_pattern_image" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td>
                    <input type="hidden" name="upload_sub_menu_pattern_image" value="<?php echo $upload_sub_menu_pattern_image; ?>" id="upload_sub_menu_pattern_image" />
                    <div class="selected_image" style="text-align:center;">
                      <img src="<?php echo $image_sub_menu_pattern_preview; ?>" alt="" id="image_sub_menu_pattern_preview" onclick="image_upload('upload_sub_menu_pattern_image', 'image_sub_menu_pattern_preview');" /><br>
                      <a onclick="image_upload('upload_sub_menu_pattern_image', 'image_sub_menu_pattern_preview');"><?php echo $text_browse; ?></a>
                    </div>
                  </td>
                  <td id="menu_color_patt_sub"></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_menu_sub_border_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_menu_sub_border_color; ?>"></div>
                    <input id="input_menu_sub_border_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_menu_sub_border_color" value="<?php echo $input_menu_sub_border_color; ?>">
                  </td>
                  <td rowspan="5" id="menu_border_sub"></td>
                </tr>
                <tr>
                  <td class="h3"><?php echo $text_border; ?> <?php echo $text_top; ?></td>
                  <td>
                    <input id="input_menu_sub_border_top" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_sub_border_top" value="<?php echo $input_menu_sub_border_top; ?>"> <?php echo $text_px; ?>
                  </td>
                </tr>
                <tr>
                  <td class="h3"><?php echo $text_border; ?> <?php echo $text_right; ?></td>
                  <td>
                    <input id="input_menu_sub_border_right" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_sub_border_right" value="<?php echo $input_menu_sub_border_right; ?>"> <?php echo $text_px; ?>
                  </td>
                </tr>
                <tr>
                  <td class="h3"><?php echo $text_border; ?> <?php echo $text_bottom; ?></td>
                  <td>
                    <input id="input_menu_sub_border_bottom" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_sub_border_bottom" value="<?php echo $input_menu_sub_border_bottom; ?>"> <?php echo $text_px; ?>
                  </td>
                </tr>
                <tr>
                  <td class="h3"><?php echo $text_border; ?> <?php echo $text_left; ?></td>
                  <td>
                    <input id="input_menu_sub_border_left" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_sub_border_left" value="<?php echo $input_menu_sub_border_left; ?>"> <?php echo $text_px; ?>
                  </td>
                </tr>
              </table>
              <table class="blue">
              <tr><td class="h3"><?php echo $h3_menu_shadow; ?></td>
                <td>
                  <?php if(isset($radio_menu_sub_shadow) && $radio_menu_sub_shadow == '1'){ ?>
                    <input type="radio"  name="radio_menu_sub_shadow" value="1" CHECKED> <?php echo $text_yes; ?>
                    <input type="radio" name="radio_menu_sub_shadow" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_menu_sub_shadow" value="1"> <?php echo $text_yes; ?>
                    <input type="radio" name="radio_menu_sub_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
                <td rowspan="2" id="menu_shadow"></td>
              </tr>
              <tr><td class="h3"><?php echo $h3_menu_shadow_size; ?></td>
                <td>
                  <input id="input_menu_shadow_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_shadow_size" value="<?php echo $input_menu_shadow_size; ?>"> <?php echo $text_px; ?>
                </td>
              </tr>
            </table>
            </div>
          </div>
        </div>
        
        <!-- Spacing options // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_menu_spacing_option; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_menu_spacing_options) && $radio_menu_spacing_options == '1'){ ?>
                      <input type="radio"  name="radio_menu_spacing_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_menu_spacing_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_menu_spacing_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_menu_spacing_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr><td class="h3" rowspan="2"><?php echo $h3_menu_font_spacing; ?></td>
                    <td>
                      <?php echo $text_top; ?>, <?php echo $text_bottom; ?> <input id="input_menu_font_spacing_topbottom" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_font_spacing_topbottom" value="<?php echo $input_menu_font_spacing_topbottom; ?>"> <?php echo $text_px; ?>
                    </td>
                    <td rowspan="2" id="menu_font_spacing"></td>
                  </tr>
                  <tr>
                    <td>
                      <?php echo $text_left; ?>, <?php echo $text_right; ?> <input id="input_menu_font_spacing_leftright" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_font_spacing_leftright" value="<?php echo $input_menu_font_spacing_leftright; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3" rowspan="2"><?php echo $h3_menu_font_sub_spacing; ?></td>
                    <td>
                      <?php echo $text_top; ?>, <?php echo $text_bottom; ?> <input id="input_menu_font_sub_spacing_topbottom" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_font_sub_spacing_topbottom" value="<?php echo $input_menu_font_sub_spacing_topbottom; ?>"> <?php echo $text_px; ?>
                    </td>
                    <td rowspan="2" id="menu_font_sub_spacing"></td>
                  </tr>
                  <tr>
                    <td>
                      <?php echo $text_left; ?>, <?php echo $text_right; ?> <input id="input_menu_font_sub_spacing_leftright" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_font_sub_spacing_leftright" value="<?php echo $input_menu_font_sub_spacing_leftright; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                <tr><td class="h3" rowspan="2"><?php echo $h3_menu_font_sub_level3_spacing; ?></td>
                  <td>
                    <?php echo $text_top; ?>, <?php echo $text_bottom; ?> <input id="input_menu_font_sub_level3_spacing_topbottom" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_font_sub_level3_spacing_topbottom" value="<?php echo $input_menu_font_sub_level3_spacing_topbottom; ?>"> <?php echo $text_px; ?>
                  </td>
                  <td rowspan="2" id="menu_font_sub_level3_spacing"></td>
                </tr>
                <tr>
                  <td>
                    <?php echo $text_left; ?>, <?php echo $text_right; ?> <input id="input_menu_font_sub_level3_spacing_leftright" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_font_sub_level3_spacing_leftright" value="<?php echo $input_menu_font_sub_level3_spacing_leftright; ?>"> <?php echo $text_px; ?>
                  </td>
                </tr>
              </table>
              </div>
            </div>
          </div>
        <!-- Spacing options // End --> 
      </div>
    <!-- Menu settings // End -->
    
    <!-- Menu Font size & Font Color options // Start -->
      <div id="menu-font-settings">
        <div class="box"><div class="box-heading"><?php echo $heading_menu_font_options; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_menu_font_options) && $radio_menu_font_options == '1'){ ?>
                    <input type="radio"  name="radio_menu_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_menu_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_menu_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_menu_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                  <td>
                    <input id="input_menu_font_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_font_size" value="<?php echo $input_menu_font_size; ?>"> <?php echo $text_px; ?>
                  </td>
                  <td rowspan="2" id="menu_text_color"></td>
                </tr>
                <tr><td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_menu_font_color; ?>"></div>
                    <input id="input_menu_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_menu_font_color" value="<?php echo $input_menu_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_font_color_hover; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_menu_font_color_hover; ?>"></div>
                    <input id="input_menu_font_color_hover" style="text-align: center" type="text" size="6" maxlength="6"  name="input_menu_font_color_hover" value="<?php echo $input_menu_font_color_hover; ?>">
                  </td>
                  <td id="menu_text_color_hover"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_menu_font_family">
                      <?php if (isset($select_menu_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_menu_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_menu_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_menu_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_menu_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_menu_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_menu_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_menu_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_menu_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_menu_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_menu_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_menu_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_menu_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_menu_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_menu_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                    <select name="select_menu_font_weight">
                      <?php if (isset($select_menu_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_menu_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_menu_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_menu_font_style">
                      <?php if (isset($select_menu_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_menu_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_menu_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_menu_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_menu_font_transform">
                      <?php if (isset($select_menu_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_menu_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_menu_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_menu_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_menu_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_menu_font_google) && $radio_menu_font_google == '1'){ ?>
                      <input type="radio"  name="radio_menu_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_menu_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_menu_font_google" type="text" size="100" name="input_menu_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_menu_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_menu_font_shadow) && $radio_menu_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_menu_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_menu_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_menu_font_shadow" type="text" size="100" name="input_menu_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_menu_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="box"><div class="box-heading"><?php echo $heading_menu_sub_font_options; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_menu_sub_font_options) && $radio_menu_sub_font_options == '1'){ ?>
                    <input type="radio"  name="radio_menu_sub_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_menu_sub_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_menu_sub_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_menu_sub_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_menu_sub_font_size; ?></td>
                  <td>
                    <input id="input_menu_sub_font_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_sub_font_size" value="<?php echo $input_menu_sub_font_size; ?>"> <?php echo $text_px; ?>
                  </td>
                  <td rowspan="2" id="menu_sub_text_color"></td>
                </tr>
                <tr><td class="h3"><?php echo $h3_menu_sub_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_menu_sub_font_color; ?>"></div>
                    <input id="input_menu_sub_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_menu_sub_font_color" value="<?php echo $input_menu_sub_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_menu_sub_font_color_hover; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_menu_sub_font_color_hover; ?>"></div>
                    <input id="input_menu_sub_font_color_hover" style="text-align: center" type="text" size="6" maxlength="6"  name="input_menu_sub_font_color_hover" value="<?php echo $input_menu_sub_font_color_hover; ?>">
                  </td>
                  <td id="menu_sub_text_color_hover"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_menu_sub_font_family">
                      <?php if (isset($select_menu_sub_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_menu_sub_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_menu_sub_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_menu_sub_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_menu_sub_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_menu_sub_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_menu_sub_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_menu_sub_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_menu_sub_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_menu_sub_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_menu_sub_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_menu_sub_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_menu_sub_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_menu_sub_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_menu_sub_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                    <select name="select_menu_sub_font_weight">
                      <?php if (isset($select_menu_sub_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_menu_sub_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_menu_sub_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_menu_sub_font_style">
                      <?php if (isset($select_menu_sub_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_menu_sub_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_menu_sub_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_menu_sub_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_menu_sub_font_transform">
                      <?php if (isset($select_menu_sub_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_menu_sub_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_menu_sub_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_menu_sub_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_menu_sub_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_menu_sub_font_google) && $radio_menu_sub_font_google == '1'){ ?>
                      <input type="radio"  name="radio_menu_sub_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_sub_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_menu_sub_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_sub_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_menu_sub_font_google" type="text" size="100" name="input_menu_sub_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_menu_sub_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_menu_sub_font_shadow) && $radio_menu_sub_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_menu_sub_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_sub_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_menu_sub_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_sub_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_menu_sub_font_shadow" type="text" size="100" name="input_menu_sub_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_menu_sub_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="box"><div class="box-heading"><?php echo $heading_menu_sub_level3_font_options; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_menu_sub_level3_font_options) && $radio_menu_sub_level3_font_options == '1'){ ?>
                    <input type="radio"  name="radio_menu_sub_level3_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_menu_sub_level3_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_menu_sub_level3_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_menu_sub_level3_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_menu_sub_level3_font_size; ?></td>
                  <td>
                    <input id="input_menu_sub_level3_font_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_menu_sub_level3_font_size" value="<?php echo $input_menu_sub_level3_font_size; ?>"> <?php echo $text_px; ?>
                  </td>
                  <td rowspan="2" id="menu_sub_level3_text_color"></td>
                </tr>
                <tr><td class="h3"><?php echo $h3_menu_sub_level3_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_menu_sub_level3_font_color; ?>"></div>
                    <input id="input_menu_sub_level3_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_menu_sub_level3_font_color" value="<?php echo $input_menu_sub_level3_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_menu_sub_level3_font_color_hover; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_menu_sub_level3_font_color_hover; ?>"></div>
                    <input id="input_menu_sub_level3_font_color_hover" style="text-align: center" type="text" size="6" maxlength="6"  name="input_menu_sub_level3_font_color_hover" value="<?php echo $input_menu_sub_level3_font_color_hover; ?>">
                  </td>
                  <td id="menu_sub_level3_text_color_hover"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_menu_sub_level3_font_family">
                      <?php if (isset($select_menu_sub_level3_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_menu_sub_level3_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_menu_sub_level3_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_menu_sub_level3_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_menu_sub_level3_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_menu_sub_level3_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_menu_sub_level3_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_menu_sub_level3_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_menu_sub_level3_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_menu_sub_level3_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_menu_sub_level3_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_menu_sub_level3_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_menu_sub_level3_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_menu_sub_level3_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_menu_sub_level3_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                    <select name="select_menu_sub_level3_font_weight">
                      <?php if (isset($select_menu_sub_level3_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_menu_sub_level3_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_menu_sub_level3_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_menu_sub_level3_font_style">
                      <?php if (isset($select_menu_sub_level3_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_menu_sub_level3_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_menu_sub_level3_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_menu_sub_level3_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_menu_sub_level3_font_transform">
                      <?php if (isset($select_menu_sub_level3_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_menu_sub_level3_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_menu_sub_level3_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_menu_sub_level3_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_menu_sub_level3_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_menu_sub_level3_font_google) && $radio_menu_sub_level3_font_google == '1'){ ?>
                      <input type="radio"  name="radio_menu_sub_level3_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_sub_level3_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_menu_sub_level3_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_sub_level3_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_menu_sub_level3_font_google" type="text" size="100" name="input_menu_sub_level3_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_menu_sub_level3_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_menu_sub_level3_font_shadow) && $radio_menu_sub_level3_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_menu_sub_level3_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_sub_level3_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_menu_sub_level3_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_menu_sub_level3_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_menu_sub_level3_font_shadow" type="text" size="100" name="input_menu_sub_level3_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_menu_sub_level3_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- Menu Font size & Font Color options // End -->
  </div>
<!-- Tab6 // End // Menu -->