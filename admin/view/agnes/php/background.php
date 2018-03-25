<!-- Tab2 // Start // Background -->
  <div id="tab2">
    <table class="red">
      <tr><td class="h3"><?php echo $h3_background_status; ?></td>
          <td>
            <select name="select_background_status">
              <?php if ($select_background_status) { ?>
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
    <!-- Background Settings // Start -->
      <div class="box"><div class="box-heading"><?php echo $heading_bg_settings; ?></div>
        <div class="box-content">
          <table class="yellow">
            <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
              <td>
                <?php if(isset($radio_bg_settings_options) && $radio_bg_settings_options == '1'){ ?>
                  <input type="radio"  name="radio_bg_settings_options" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_bg_settings_options" value="0"> <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_bg_settings_options" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_bg_settings_options" value="0" CHECKED> <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
          </table>
          <div class="left-margin">
            <table class="blue">
              <tr><td class="h3"><?php echo $h3_bg_color; ?></td>
                <td><div class="color" style="background-color: #<?php echo $input_main_bg_color; ?>"></div><input id="input_main_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_main_bg_color" value="<?php echo $input_main_bg_color; ?>"></td>	
              </tr>
            </table>
            <table class="blue">
              <tr><td class="h3"><?php echo $h3_bg_pattern; ?></td>
                <td>
                  <select name="select_main_bg_pattern">
                    <?php if (isset($select_main_bg_pattern)) {$selected = "selected";?>
                      <option value="none" <?php if($select_main_bg_pattern=='none'){echo $selected;} ?>>None</option>
                      <option value="scan-lines" <?php if($select_main_bg_pattern=='scan-lines'){echo $selected;} ?>>Scan lines</option>
                      <option value="noise" <?php if($select_main_bg_pattern=='noise'){echo $selected;} ?>>Noise</option>
                      <option value="noise2" <?php if($select_main_bg_pattern=='noise2'){echo $selected;} ?>>Noise_2</option>
                      <option value="texture" <?php if($select_main_bg_pattern=='texture'){echo $selected;} ?>>Texture</option>
                      <option value="jeans" <?php if($select_main_bg_pattern=='jeans'){echo $selected;} ?>>Jeans</option>
                      <option value="leather" <?php if($select_main_bg_pattern=='leather'){echo $selected;} ?>>Leather</option>
                      <option value="square" <?php if($select_main_bg_pattern=='square'){echo $selected;} ?>>Squares</option>
                      <option value="grid" <?php if($select_main_bg_pattern=='grid'){echo $selected;} ?>>Grid</option>
                      <option value="grid2" <?php if($select_main_bg_pattern=='grid2'){echo $selected;} ?>>Grid_2</option>
                      <option value="circle" <?php if($select_main_bg_pattern=='circle'){echo $selected;} ?>>Circle</option>
                      <option value="fabric_of_squares_gray" <?php if($select_main_bg_pattern=='fabric_of_squares_gray'){echo $selected;} ?>>Fabric of squares gray</option>
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
              <tr><td class="h3"><?php echo $h3_bg_pattern_upload; ?><br>
                  <h4><?php echo $h4_bg_pattern_upload; ?></h4></td>
                <td>
                  <?php if(isset($radio_main_bg_pattern_image) && $radio_main_bg_pattern_image == '1'){ ?>
                    <input type="radio"  name="radio_main_bg_pattern_image" value="1" CHECKED/> <?php echo $text_yes; ?>
                    <input type="radio" name="radio_main_bg_pattern_image" value="0"> <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_main_bg_pattern_image" value="1" /> <?php echo $text_yes; ?>
                    <input type="radio" name="radio_main_bg_pattern_image" value="0" CHECKED> <?php echo $text_no; ?>
                  <?php } ?>
                </td>
                <td>
                  <input type="hidden" name="upload_main_bg_pattern_image" value="<?php echo $upload_main_bg_pattern_image; ?>" id="upload_main_bg_pattern_image" />
                  <div class="selected_image" style="text-align:center;">
                    <img src="<?php echo $image_pattern_preview; ?>" alt="" id="image_pattern_preview" onclick="image_upload('upload_main_bg_pattern_image', 'image_pattern_preview');" /><br>
                    <a onclick="image_upload('upload_main_bg_pattern_image', 'image_pattern_preview');"><?php echo $text_browse; ?></a>
                  </div>
                </td> 
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td class="h3"><?php echo $h3_bg_shadows; ?></td>
                <td>
                  <select name="select_main_bg_shadows">
                    <?php if (isset($select_main_bg_shadows)) {$selected = "selected";?>
                      <option value="none" <?php if($select_main_bg_shadows=='none'){echo $selected;} ?>>None</option>
                      <option value="blur_black" <?php if($select_main_bg_shadows=='blur_black'){echo $selected;} ?>>Blur Black</option>
                      <option value="blur_white" <?php if($select_main_bg_shadows=='blur_white'){echo $selected;} ?>>Blur White</option>
                      <option value="top_black_1" <?php if($select_main_bg_shadows=='top_black_1'){echo $selected;} ?>>Top black 1</option>
                      <option value="top_black_2" <?php if($select_main_bg_shadows=='top_black_2'){echo $selected;} ?>>Top black 2</option>
                      <option value="top_white_1" <?php if($select_main_bg_shadows=='top_white_1'){echo $selected;} ?>>Top white 1</option>
                      <option value="top_white_2" <?php if($select_main_bg_shadows=='top_white_2'){echo $selected;} ?>>Top white 2</option>
                      <option value="top_white_3" <?php if($select_main_bg_shadows=='top_white_3'){echo $selected;} ?>>Top white 3</option>
                    <?php } else { ?>
                      <option value="none"selected="selected">None</option>
                      <option value="blur_black">Blur Black</option>
                      <option value="blur_white">Blur White</option>
                      <option value="top_black_1">Top black 1</option>
                      <option value="top_black_2">Top black 2</option>
                      <option value="top_white_1">Top white 1</option>
                      <option value="top_white_2">Top white 2</option>
                      <option value="top_white_3">Top white 3</option>
                    <?php } ?>
                  </select>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr><td class="h3"><?php echo $h3_full_bg_image; ?><br>
                  <h4><?php echo $h4_full_bg_image; ?></h4></td>
                <td>
                  <?php if(isset($radio_main_full_background_image) && $radio_main_full_background_image == '1'){ ?>
                    <input type="radio"  name="radio_main_full_background_image" value="1" CHECKED/> <?php echo $text_yes; ?>
                    <input type="radio" name="radio_main_full_background_image" value="0"> <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_main_full_background_image" value="1" /> <?php echo $text_yes; ?>
                    <input type="radio" name="radio_main_full_background_image" value="0" CHECKED> <?php echo $text_no; ?>
                  <?php } ?>
                </td>
                <td>
                  <input type="hidden" name="upload_main_full_bg_image" value="<?php echo $upload_main_full_bg_image; ?>" id="upload_main_full_bg_image" />
                  <div class="selected_image" style="text-align:center;">
                    <img src="<?php echo $image_main_full_bg_preview; ?>" alt="" id="image_main_full_bg_preview" onclick="image_upload('upload_main_full_bg_image', 'image_main_full_bg_preview');" /><br>
                    <a onclick="image_upload('upload_main_full_bg_image', 'image_main_full_bg_preview');"><?php echo $text_browse; ?></a>
                  </div>
                </td> 
              </tr>
            </table>
          </div>
        </div>
      </div>
    <!-- Background Settings // End -->
    
    <!-- Background Slideshow // Start -->
      <div class="box"><div class="box-heading"><?php echo $heading_bg_slideshow; ?></div>
        <div class="box-content">
          <table class="yellow">
            <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
              <td>
                <?php if(isset($radio_slideshow_options) && $radio_slideshow_options == '1'){ ?>
                  <input type="radio"  name="radio_slideshow_options" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_slideshow_options" value="0"> <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_slideshow_options" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_slideshow_options" value="0" CHECKED> <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
          </table>
          <div class="left-margin">
            <table class="blue">
              <tr>
                <td class="h3"><?php echo $h3_bg_slideshow_images; ?></td>
                <td>
                  <input type="hidden" name="upload_bg_slideshow_first" value="<?php echo $upload_bg_slideshow_first; ?>" id="upload_bg_slideshow_first" />
                  <div class="selected_image" style="text-align:center;">
                    <img src="<?php echo $image_bg_slideshow_first_preview; ?>" alt="" id="image_bg_slideshow_first_preview" onclick="image_upload('upload_bg_slideshow_first', 'image_bg_slideshow_first_preview');" /><br>
                    <a onclick="image_upload('upload_bg_slideshow_first', 'image_bg_slideshow_first_preview');"><?php echo $text_browse; ?></a>
                  </div>
                </td> 
                <td>
                  <input type="hidden" name="upload_bg_slideshow_second" value="<?php echo $upload_bg_slideshow_second; ?>" id="upload_bg_slideshow_second" />
                  <div class="selected_image" style="text-align:center;">
                    <img src="<?php echo $image_bg_slideshow_second_preview; ?>" alt="" id="image_bg_slideshow_second_preview" onclick="image_upload('upload_bg_slideshow_second', 'image_bg_slideshow_second_preview');" /><br>
                    <a onclick="image_upload('upload_bg_slideshow_second', 'image_bg_slideshow_second_preview');"><?php echo $text_browse; ?></a>
                  </div>
                </td> 
                <td>
                  <input type="hidden" name="upload_bg_slideshow_third" value="<?php echo $upload_bg_slideshow_third; ?>" id="upload_bg_slideshow_third" />
                  <div class="selected_image" style="text-align:center;">
                    <img src="<?php echo $image_bg_slideshow_third_preview; ?>" alt="" id="image_bg_slideshow_third_preview" onclick="image_upload('upload_bg_slideshow_third', 'image_bg_slideshow_third_preview');" /><br>
                    <a onclick="image_upload('upload_bg_slideshow_third', 'image_bg_slideshow_third_preview');"><?php echo $text_browse; ?></a>
                  </div>
                </td> 
                <td>
                  <input type="hidden" name="upload_bg_slideshow_fourth" value="<?php echo $upload_bg_slideshow_fourth; ?>" id="upload_bg_slideshow_fourth" />
                  <div class="selected_image" style="text-align:center;">
                    <img src="<?php echo $image_bg_slideshow_fourth_preview; ?>" alt="" id="image_bg_slideshow_fourth_preview" onclick="image_upload('upload_bg_slideshow_fourth', 'image_bg_slideshow_fourth_preview');" /><br>
                    <a onclick="image_upload('upload_bg_slideshow_fourth', 'image_bg_slideshow_fourth_preview');"><?php echo $text_browse; ?></a>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    <!-- Background Slideshow // Start -->
  </div>
<!-- Tab2 // End // Background -->