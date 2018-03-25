<!-- Tab4 // Start // Header -->
  <div id="tab4">
    <table class="red">
      <tr><td class="h3"><?php echo $h3_header_status; ?></td>
          <td>
            <select name="select_header_status">
              <?php if ($select_header_status) { ?>
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
    
    <!-- Header // Header Tabs // Start -->
      <div class="box">
        <div class="box-content">
          <div id="header-htabs" class="horizontal-tabs">
            <a href="#top-header"><?php echo $tab_top_header; ?></a>
            <a href="#middle-header"><?php echo $tab_middle_header; ?></a>
            <a href="#bottom-header"><?php echo $tab_bottom_header; ?></a>
          </div>
        </div>
      </div>
    <!-- Header // Header Tabs // End -->
    
    <!-- Header // Top Header // Start -->
      <div id="top-header">
        <!-- Header // Top Header // Color & Background // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_top_header_color; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_top_h_color_options) && $radio_top_h_color_options == '1'){ ?>
                      <input type="radio"  name="radio_top_h_color_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_top_h_color_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_top_h_color_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_top_h_color_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_top_header_color_transparent; ?></td>
                    <td>
                      <?php if(isset($radio_top_header_color_transparent) && $radio_top_header_color_transparent == 'transparent'){ ?>
                        <input type="radio"  name="radio_top_header_color_transparent" value="transparent" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_top_header_color_transparent" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_top_header_color_transparent" value="transparent" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_top_header_color_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_top_header_bg_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_top_header_bg_color; ?>"></div>
                      <input id="input_top_header_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_top_header_bg_color" value="<?php echo $input_top_header_bg_color; ?>">
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_top_header_slightly_transparent; ?></td>
                    <td>
                      <select name="select_top_header_slightly_transparent">
                        <?php if (isset($select_top_header_slightly_transparent)) {$selected = "selected";?>
                          <option value="none" <?php if($select_top_header_slightly_transparent=='none'){echo $selected;} ?>>None</option>
                          <option value="b_50" <?php if($select_top_header_slightly_transparent=='b_50'){echo $selected;} ?>>Black 50%</option>
                          <option value="b_40" <?php if($select_top_header_slightly_transparent=='b_40'){echo $selected;} ?>>Black 40%</option>
                          <option value="b_30" <?php if($select_top_header_slightly_transparent=='b_30'){echo $selected;} ?>>Black 30%</option>
                          <option value="b_20" <?php if($select_top_header_slightly_transparent=='b_20'){echo $selected;} ?>>Black 20%</option>
                          <option value="b_10" <?php if($select_top_header_slightly_transparent=='b_10'){echo $selected;} ?>>Black 10%</option>
                          <option value="w_50" <?php if($select_top_header_slightly_transparent=='w_50'){echo $selected;} ?>>White 50%</option>
                          <option value="w_40" <?php if($select_top_header_slightly_transparent=='w_40'){echo $selected;} ?>>White 40%</option>
                          <option value="w_30" <?php if($select_top_header_slightly_transparent=='w_30'){echo $selected;} ?>>White 30%</option>
                          <option value="w_20" <?php if($select_top_header_slightly_transparent=='w_20'){echo $selected;} ?>>White 20%</option>
                          <option value="w_10" <?php if($select_top_header_slightly_transparent=='w_10'){echo $selected;} ?>>White 10%</option>
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
                  <tr><td class="h3"><?php echo $h3_top_header_pattern; ?></td>
                    <td>
                      <select name="select_top_header_pattern">
                        <?php if (isset($select_top_header_pattern)) {$selected = "selected";?>
                          <option value="none" <?php if($select_top_header_pattern=='none'){echo $selected;} ?>>None</option>
                          <option value="scan-lines" <?php if($select_top_header_pattern=='scan-lines'){echo $selected;} ?>>Scan lines</option>
                          <option value="noise" <?php if($select_top_header_pattern=='noise'){echo $selected;} ?>>Noise</option>
                          <option value="noise2" <?php if($select_top_header_pattern=='noise2'){echo $selected;} ?>>Noise_2</option>
                          <option value="texture" <?php if($select_top_header_pattern=='texture'){echo $selected;} ?>>Texture</option>
                          <option value="jeans" <?php if($select_top_header_pattern=='jeans'){echo $selected;} ?>>Jeans</option>
                          <option value="leather" <?php if($select_top_header_pattern=='leather'){echo $selected;} ?>>Leather</option>
                          <option value="square" <?php if($select_top_header_pattern=='square'){echo $selected;} ?>>Squares</option>
                          <option value="grid" <?php if($select_top_header_pattern=='grid'){echo $selected;} ?>>Grid</option>
                          <option value="grid2" <?php if($select_top_header_pattern=='grid2'){echo $selected;} ?>>Grid_2</option>
                          <option value="circle" <?php if($select_top_header_pattern=='circle'){echo $selected;} ?>>Circle</option>
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
                  <tr><td class="h3"><?php echo $h3_top_header_pattern_upload; ?><br>
                      <h4><?php echo $h4_top_header_pattern_upload; ?></h4>
                    </td>
                    <td>
                      <?php if(isset($radio_top_header_bg_pattern_image) && $radio_top_header_bg_pattern_image == '1'){ ?>
                        <input type="radio"  name="radio_top_header_bg_pattern_image" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_top_header_bg_pattern_image" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_top_header_bg_pattern_image" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_top_header_bg_pattern_image" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td>
                      <input type="hidden" name="upload_top_header_bg_pattern_image" value="<?php echo $upload_top_header_bg_pattern_image; ?>" id="upload_top_header_bg_pattern_image" />
                      <div class="selected_image" style="text-align:center;">
                        <img src="<?php echo $image_top_header_pattern_preview; ?>" alt="" id="image_top_header_pattern_preview" onclick="image_upload('upload_top_header_bg_pattern_image', 'image_top_header_pattern_preview');" /><br>
                        <a onclick="image_upload('upload_top_header_bg_pattern_image', 'image_top_header_pattern_preview');"><?php echo $text_browse; ?></a>
                      </div>
                    </td>
                  </tr>
                </table>
								<table class="blue">
                  <tr><td class="h3"><?php echo $h3_top_header_border_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_top_header_border_color; ?>"></div>
                      <input id="input_top_header_border_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_top_header_border_color" value="<?php echo $input_top_header_border_color; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $text_border; ?> Size <?php echo $text_bottom; ?></td>
                    <td>
                      <input id="input_top_header_border_bottom" style="text-align: center" type="text" size="2" maxlength="2"  name="input_top_header_border_bottom" value="<?php echo $input_top_header_border_bottom; ?>"> <?php echo $text_px; ?>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Header // Top Header // Color & Background // End -->
        
        <!-- Header // Top Header // Text // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_top_header_text; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                    <td>
                      <?php if(isset($radio_top_header_text_options) && $radio_top_header_text_options == '1'){ ?>
                        <input type="radio"  name="radio_top_header_text_options" value="1" CHECKED > <?php echo $text_on; ?>
                        <input type="radio" name="radio_top_header_text_options" value="0" > <?php echo $text_off; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_top_header_text_options" value="1" > <?php echo $text_on; ?>
                        <input type="radio" name="radio_top_header_text_options" value="0" CHECKED > <?php echo $text_off; ?>
                      <?php } ?>
                    </td>
                  </tr>
              </table>
            
              <div id="language-top-header" class="horizontal-tabs">
                <?php foreach ($languages as $language) { ?>
                  <a href="#tab-top-header-text-<?php echo $language['language_id']; ?>"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" alt="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a>
                <?php } ?>
              </div>
              <?php foreach ($languages as $language) { ?>
                <div id="tab-top-header-text-<?php echo $language['language_id']; ?>">
                  <table class="clear">
                    <tr>
                      <td class="h3"><?php echo $h3_top_header_text; ?></td>
                      <td><textarea name="textarea_top_header_text_<?php echo $language['language_id']; ?>" class="ckeditor" id="textarea_top_header_text_<?php echo $language['language_id']; ?>"><?php echo isset(${'textarea_top_header_text_' . $language['language_id']}) ? ${'textarea_top_header_text_' . $language['language_id']} : ''; ?></textarea></td>
                    </tr>
                  </table>
                </div>
              <?php } ?>
            </div>
          </div>
        <!-- Header // Top Header // Text // End -->
        
        <!-- Header // Top Header // Social Network // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_top_header_soc_net; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                    <td>
                      <?php if(isset($radio_top_header_soc_net_options) && $radio_top_header_soc_net_options == '1'){ ?>
                        <input type="radio"  name="radio_top_header_soc_net_options" value="1" CHECKED > <?php echo $text_on; ?>
                        <input type="radio" name="radio_top_header_soc_net_options" value="0" > <?php echo $text_off; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_top_header_soc_net_options" value="1" > <?php echo $text_on; ?>
                        <input type="radio" name="radio_top_header_soc_net_options" value="0" CHECKED > <?php echo $text_off; ?>
                      <?php } ?>
                    </td>
                  </tr>
              </table>
							<div class="left-margin">
                <table class="blue">
                  <tr><td class="h3">Icons color</td>
                    <td>
                      <?php if(isset($radio_top_header_soc_net_color) && $radio_top_header_soc_net_color == '1'){ ?>
                        <input type="radio"  name="radio_top_header_soc_net_color" value="1" CHECKED > White
                        <input type="radio" name="radio_top_header_soc_net_color" value="0" > Gray
                      <?php } else { ?>
                        <input type="radio"  name="radio_top_header_soc_net_color" value="1" > White
                        <input type="radio" name="radio_top_header_soc_net_color" value="0" CHECKED > Gray
                      <?php } ?>
                    </td>
                    <td id="heder_soc_icons"></td>
                  </tr>
                </table>
							</div>
            </div>
          </div>
        <!-- Header // Top Header Social Network // End -->
      </div>
    <!-- Header // Top Header // End -->
    
    <!-- Header // middle // Start -->
      <div id="middle-header">
				<!-- Header Color & Background // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_header_color; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_header_settings_options) && $radio_header_settings_options == '1'){ ?>
                      <input type="radio"  name="radio_header_settings_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_header_settings_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_header_settings_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_header_settings_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_header_color_transparent; ?></td>
                    <td>
                      <?php if(isset($radio_header_color_transparent) && $radio_header_color_transparent == 'transparent'){ ?>
                        <input type="radio"  name="radio_header_color_transparent" value="transparent" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_header_color_transparent" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_header_color_transparent" value="transparent" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_header_color_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_header_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_header_color; ?>"></div>
                      <input id="input_header_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_header_color" value="<?php echo $input_header_color; ?>">
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_header_slightly_transparent; ?></td>
                    <td>
                      <select name="select_header_slightly_transparent">
                        <?php if (isset($select_header_slightly_transparent)) {$selected = "selected";?>
                          <option value="none" <?php if($select_header_slightly_transparent=='none'){echo $selected;} ?>>None</option>
                          <option value="b_50" <?php if($select_header_slightly_transparent=='b_50'){echo $selected;} ?>>Black 50%</option>
                          <option value="b_40" <?php if($select_header_slightly_transparent=='b_40'){echo $selected;} ?>>Black 40%</option>
                          <option value="b_30" <?php if($select_header_slightly_transparent=='b_30'){echo $selected;} ?>>Black 30%</option>
                          <option value="b_20" <?php if($select_header_slightly_transparent=='b_20'){echo $selected;} ?>>Black 20%</option>
                          <option value="b_10" <?php if($select_header_slightly_transparent=='b_10'){echo $selected;} ?>>Black 10%</option>
                          <option value="w_50" <?php if($select_header_slightly_transparent=='w_50'){echo $selected;} ?>>White 50%</option>
                          <option value="w_40" <?php if($select_header_slightly_transparent=='w_40'){echo $selected;} ?>>White 40%</option>
                          <option value="w_30" <?php if($select_header_slightly_transparent=='w_30'){echo $selected;} ?>>White 30%</option>
                          <option value="w_20" <?php if($select_header_slightly_transparent=='w_20'){echo $selected;} ?>>White 20%</option>
                          <option value="w_10" <?php if($select_header_slightly_transparent=='w_10'){echo $selected;} ?>>White 10%</option>
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
                  <tr><td class="h3"><?php echo $h3_header_pattern; ?></td>
                    <td>
                      <select name="select_header_pattern">
                        <?php if (isset($select_header_pattern)) {$selected = "selected";?>
                          <option value="none" <?php if($select_header_pattern=='none'){echo $selected;} ?>>None</option>
                          <option value="scan-lines" <?php if($select_header_pattern=='scan-lines'){echo $selected;} ?>>Scan lines</option>
                          <option value="noise" <?php if($select_header_pattern=='noise'){echo $selected;} ?>>Noise</option>
                          <option value="noise2" <?php if($select_header_pattern=='noise2'){echo $selected;} ?>>Noise_2</option>
                          <option value="texture" <?php if($select_header_pattern=='texture'){echo $selected;} ?>>Texture</option>
                          <option value="jeans" <?php if($select_header_pattern=='jeans'){echo $selected;} ?>>Jeans</option>
                          <option value="leather" <?php if($select_header_pattern=='leather'){echo $selected;} ?>>Leather</option>
                          <option value="square" <?php if($select_header_pattern=='square'){echo $selected;} ?>>Squares</option>
                          <option value="grid" <?php if($select_header_pattern=='grid'){echo $selected;} ?>>Grid</option>
                          <option value="grid2" <?php if($select_header_pattern=='grid2'){echo $selected;} ?>>Grid_2</option>
                          <option value="circle" <?php if($select_header_pattern=='circle'){echo $selected;} ?>>Circle</option>
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
                  <tr><td class="h3"><?php echo $h3_header_pattern_upload; ?><br>
                      <h4><?php echo $h4_header_pattern_upload; ?></h4>
                    </td>
                    <td>
                      <?php if(isset($radio_header_bg_pattern_image) && $radio_header_bg_pattern_image == '1'){ ?>
                        <input type="radio"  name="radio_header_bg_pattern_image" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_header_bg_pattern_image" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_header_bg_pattern_image" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_header_bg_pattern_image" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td>
                      <input type="hidden" name="upload_header_bg_pattern_image" value="<?php echo $upload_header_bg_pattern_image; ?>" id="upload_header_bg_pattern_image" />
                      <div class="selected_image" style="text-align:center;">
                        <img src="<?php echo $image_header_pattern_preview; ?>" alt="" id="image_header_pattern_preview" onclick="image_upload('upload_header_bg_pattern_image', 'image_header_pattern_preview');" /><br>
                        <a onclick="image_upload('upload_header_bg_pattern_image', 'image_header_pattern_preview');"><?php echo $text_browse; ?></a>
                      </div>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td rowspan="2" class="h3"><?php echo $h3_header_full_bg_image; ?><br>
                      <h4><?php echo $h4_header_full_bg_image; ?></h4>
                    </td>
                    <td>
                      <?php if(isset($radio_header_full_background_image) && $radio_header_full_background_image == '1'){ ?>
                        <input type="radio"  name="radio_header_full_background_image" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_header_full_background_image" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_header_full_background_image" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_header_full_background_image" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td>
                      <input type="hidden" name="upload_header_full_bg_image" value="<?php echo $upload_header_full_bg_image; ?>" id="upload_header_full_bg_image" />
                        <div class="selected_image" style="text-align:center;">
                          <img src="<?php echo $image_header_full_bg_preview; ?>" alt="" id="image_header_full_bg_preview" onclick="image_upload('upload_header_full_bg_image', 'image_header_full_bg_preview');" /><br>
                          <a onclick="image_upload('upload_header_full_bg_image', 'image_header_full_bg_preview');"><?php echo $text_browse; ?></a>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"><span class="note"><?php echo $note_header_full_bg_image; ?></span></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Header Color & Background // End -->
				
        <!-- Logo Position // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_logo; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_header_logo_options) && $radio_header_logo_options == '1'){ ?>
                      <input type="radio"  name="radio_header_logo_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_header_logo_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_header_logo_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_header_logo_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_header_logo_position; ?></td>
                    <td><?php echo $text_top; ?> <input id="input_header_logo_position_top" type="text" size="6" maxlength="6" style="text-align: center" name="input_header_logo_position_top" value="<?php echo $input_header_logo_position_top; ?>"> <?php echo $text_px; ?></td>
                    <td><?php echo $text_left; ?> <input id="input_header_logo_position_left" type="text" size="6" maxlength="6" style="text-align: center" name="input_header_logo_position_left" value="<?php echo $input_header_logo_position_left; ?>"> <?php echo $text_px; ?></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_header_logo_image; ?></td>
                    <td>
                      <?php if(isset($radio_header_logo_image) && $radio_header_logo_image == '1'){ ?>
                        <input type="radio"  name="radio_header_logo_image" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_header_logo_image" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_header_logo_image" value="1"  > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_header_logo_image" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_header_logo; ?></td>
                    <td>
                      <?php if(isset($radio_header_logo) && $radio_header_logo == '1'){ ?>
                        <input type="radio"  name="radio_header_logo" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_header_logo" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_header_logo" value="1"  > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_header_logo" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                </table>
                  <table class="blue">
                    <tr>
                      <td class="h3"><?php echo $h3_header_logo_color; ?></td>
                      <td><div class="color" style="background-color: #<?php echo $input_header_logo_color; ?>"></div>
                      <input id="input_header_logo_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_header_logo_color" value="<?php echo $input_header_logo_color; ?>"></td>
                    </tr>
                  </table>
                  <table class="blue">
                    <tr>
                      <td class="h3"><?php echo $h3_header_logo_text; ?></td>
                      <td><input id="input_header_logo_text" type="text" size="50" maxlength="50"  name="input_header_logo_text" placeholder="You logo text go here" value="<?php echo $input_header_logo_text; ?>"></td>
                    </tr>
                  </table>
                  <!-- Logo Font // Start -->
                    <table class="blue">
                      <tr>
                        <td class="h3"><?php echo $h3_font_style_font; ?></td>
                        <td>
                          <select name="select_logo_font_family">
                            <?php if (isset($select_logo_font_family)) {$selected = "selected";?>
                            <option value="default" <?php if($select_logo_font_family=='default'){echo $selected;} ?>>By Default</option>
                            <option value="Verdana, Geneva, sans-serif" <?php if($select_logo_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                            <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_logo_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                            <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_logo_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                            <option value="Arial, Helvetica, sans-serif" <?php if($select_logo_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                            <option value="Tahoma, Geneva, sans-serif" <?php if($select_logo_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                            <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_logo_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                            <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_logo_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                            <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_logo_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                            <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_logo_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                            <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_logo_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                            <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_logo_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                            <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_logo_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                            <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_logo_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                        <td><input id="input_logo_font_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_logo_font_size" value="<?php echo $input_logo_font_size; ?>"> <?php echo $text_px; ?></td>
                      </tr>
                    </table>
                    <table class="blue">
                      <tr>
                        <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                        <td>
                          <select name="select_logo_font_weight">
                            <?php if (isset($select_logo_font_weight)) {$selected = "selected";?>
                              <option value="normal" <?php if($select_logo_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                              <option value="bold" <?php if($select_logo_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                          <select name="select_logo_font_style">
                            <?php if (isset($select_logo_font_style)) {$selected = "selected";?>
                              <option value="normal" <?php if($select_logo_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                              <option value="italic" <?php if($select_logo_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                              <option value="oblique" <?php if($select_logo_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                          <select name="select_logo_font_transform">
                            <?php if (isset($select_logo_font_transform)) {$selected = "selected";?>
                              <option value="none" <?php if($select_logo_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                              <option value="uppercase" <?php if($select_logo_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                              <option value="lowercase" <?php if($select_logo_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                              <option value="capitalize" <?php if($select_logo_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                          <?php if(isset($radio_logo_font_google) && $radio_logo_font_google == '1'){ ?>
                            <input type="radio"  name="radio_logo_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                            <input type="radio" name="radio_logo_font_google" value="0" > <?php echo $text_no; ?>
                          <?php } else { ?>
                            <input type="radio"  name="radio_logo_font_google" value="1" > <?php echo $text_yes; ?>
                            <input type="radio" name="radio_logo_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                          <?php } ?>
                        </td>
                      </tr>
                      <tr>
                        <td><input id="input_logo_font_google" type="text" size="100" name="input_logo_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_logo_font_google; ?>"></td>
                      </tr>
                    </table>
                    <table class="blue">
                      <tr>
                        <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                        <td>
                          <?php if(isset($radio_logo_font_shadow) && $radio_logo_font_shadow == '1'){ ?>
                            <input type="radio"  name="radio_logo_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                            <input type="radio" name="radio_logo_font_shadow" value="0" > <?php echo $text_no; ?>
                          <?php } else { ?>
                            <input type="radio"  name="radio_logo_font_shadow" value="1" > <?php echo $text_yes; ?>
                            <input type="radio" name="radio_logo_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                          <?php } ?>
                        </td>
                      </tr>
                      <tr>
                        <td><input id="input_logo_font_shadow" type="text" size="100" name="input_logo_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_logo_font_shadow; ?>"></td>
                      </tr>
                    </table>
                  <!-- Logo Font // End -->
              </div>
            </div>
          </div>
        <!-- Logo Position // End -->

        <!-- Shopping Basket // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_basket; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $h3_header_basket_switch; ?></td>
                  <td>
                    <?php if(isset($radio_header_basket_options) && $radio_header_basket_options == '1'){ ?>
                      <input type="radio"  name="radio_header_basket_options" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_header_basket_options" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_header_basket_options" value="1"  > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_header_basket_options" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_header_basket_position; ?></td>
                    <td><?php echo $text_top; ?> <input id="input_header_basket_position_top" type="text" size="6" maxlength="6" style="text-align: center" name="input_header_basket_position_top" value="<?php echo $input_header_basket_position_top; ?>"> <?php echo $text_px; ?></td>
                    <td><?php echo $text_right; ?> <input id="input_header_basket_position_right" type="text" size="6" maxlength="6" style="text-align: center" name="input_header_basket_position_right" value="<?php echo $input_header_basket_position_right; ?>"> <?php echo $text_px; ?></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_header_basket_position_tablet; ?></td>
                    <td><?php echo $text_top; ?> <input id="input_header_basket_position_tablet_top" type="text" size="6" maxlength="6" style="text-align: center" name="input_header_basket_position_tablet_top" value="<?php echo $input_header_basket_position_tablet_top; ?>"> <?php echo $text_px; ?></td>
                    <td><?php echo $text_right; ?> <input id="input_header_basket_position_tablet_right" type="text" size="6" maxlength="6" style="text-align: center" name="input_header_basket_position_tablet_right" value="<?php echo $input_header_basket_position_tablet_right; ?>"> <?php echo $text_px; ?></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td rowspan="2" class="h3"><?php echo $h3_header_basket_size; ?></td>
                    <td id="s_cart"></td>
                    <td id="h_cart"></td>
                    <td id="m_cart"></td>
                  </tr>
                  <tr>
                    <?php if (isset($radio_basket_size)) {$checked = "CHECKED"; ?>
                      <td align="center"><input type="radio" name="radio_basket_size" value="s_cart" <?php if($radio_basket_size=='s_cart'){echo $checked;} ?>><span class="note_white">Standart</span></td>
                      <td align="center"><input type="radio" name="radio_basket_size" value="h_cart" <?php if($radio_basket_size=='h_cart'){echo $checked;} ?>><span class="note_white">hyperlink</span></td>
                      <td align="center"><input type="radio" name="radio_basket_size" value="m_cart" <?php if($radio_basket_size=='m_cart'){echo $checked;} ?>><span class="note_white">Mini</span></td>
                    <?php } else { ?>
                      <td align="center"><input type="radio" name="radio_basket_size" value="s_cart" CHECKED><span class="note_white">Standart</span></td>
                      <td align="center"><input type="radio" name="radio_basket_size" value="h_cart"><span class="note_white">hyperlink</span></td>
                      <td align="center"><input type="radio" name="radio_basket_size" value="m_cart"><span class="note_white">Mini</span></td>
                    <?php } ?>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Shopping Basket // End -->

        <!-- Search // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_search; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $h3_header_search_switch; ?></td>
                  <td>
                    <?php if(isset($radio_header_search_options) && $radio_header_search_options == '1'){ ?>
                      <input type="radio"  name="radio_header_search_options" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_header_search_options" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_header_search_options" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_header_search_options" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_header_search_position; ?></td>
                    <td><?php echo $text_top; ?> <input id="input_header_search_position_top" type="text" size="6" maxlength="6" style="text-align: center" name="input_header_search_position_top" value="<?php echo $input_header_search_position_top; ?>"> <?php echo $text_px; ?></td>
                    <td><?php echo $text_right; ?> <input id="input_header_search_position_right" type="text" size="6" maxlength="6" style="text-align: center" name="input_header_search_position_right" value="<?php echo $input_header_search_position_right; ?>"> <?php echo $text_px; ?></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_header_search_position_tablet; ?></td>
                    <td><?php echo $text_top; ?> <input id="input_header_search_position_tablet_top" type="text" size="6" maxlength="6" style="text-align: center" name="input_header_search_position_tablet_top" value="<?php echo $input_header_search_position_tablet_top; ?>"> <?php echo $text_px; ?></td>
                    <td><?php echo $text_right; ?> <input id="input_header_search_position_tablet_right" type="text" size="6" maxlength="6" style="text-align: center" name="input_header_search_position_tablet_right" value="<?php echo $input_header_search_position_tablet_right; ?>"> <?php echo $text_px; ?></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td rowspan="2" class="h3"><?php echo $h3_header_search_size; ?></td>
                    <td id="s_search"></td>
                    <td id="m_search"></td>
                    <td id="mi_search"></td>
                  </tr>
                  <tr>
                    <?php if (isset($radio_search_size)) {$checked = "CHECKED"; ?>
                      <td align="center"><input type="radio" name="radio_search_size" value="s_search" <?php if($radio_search_size=='s_search'){echo $checked;} ?>><span class="note_white">Standart</span></td>
                      <td align="center"><input type="radio" name="radio_search_size" value="m_search" <?php if($radio_search_size=='m_search'){echo $checked;} ?>><span class="note_white">Medium</span></td>
                      <td align="center"><input type="radio" name="radio_search_size" value="mi_search" <?php if($radio_search_size=='mi_search'){echo $checked;} ?>><span class="note_white">Mini</span></td>
                    <?php } else { ?>
                      <td align="center"><input type="radio" name="radio_search_size" value="s_search" CHECKED><span class="note_white">Standart</span></td>
                      <td align="center"><input type="radio" name="radio_search_size" value="m_search"><span class="note_white">Medium</span></td>
                      <td align="center"><input type="radio" name="radio_search_size" value="mi_search"><span class="note_white">Mini</span></td>
                    <?php } ?>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Search // End -->

        <!-- Login Size // End -->
          <div class="box"><div class="box-heading"><?php echo $heading_login; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $h3_header_login_switch; ?></td>
                  <td>
                    <?php if(isset($radio_header_login_options) && $radio_header_login_options == '1'){ ?>
                      <input type="radio" name="radio_header_login_options" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_header_login_options" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio" name="radio_header_login_options" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_header_login_options" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_header_login_position; ?></td>
                    <td><?php echo $text_top; ?> <input id="input_header_login_position_top" type="text" size="6" maxlength="6" style="text-align: center" name="input_header_login_position_top" value="<?php echo $input_header_login_position_top; ?>"> <?php echo $text_px; ?></td>
                    <td><?php echo $text_right; ?> <input id="input_header_login_position_right" type="text" size="6" maxlength="6" style="text-align: center" name="input_header_login_position_right" value="<?php echo $input_header_login_position_right; ?>"> <?php echo $text_px; ?></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_header_login_position_tablet; ?></td>
                    <td><?php echo $text_top; ?> <input id="input_header_login_position_tablet_top" type="text" size="6" maxlength="6" style="text-align: center" name="input_header_login_position_tablet_top" value="<?php echo $input_header_login_position_tablet_top; ?>"> <?php echo $text_px; ?></td>
                    <td><?php echo $text_right; ?> <input id="input_header_login_position_tablet_right" type="text" size="6" maxlength="6" style="text-align: center" name="input_header_login_position_tablet_right" value="<?php echo $input_header_login_position_tablet_right; ?>"> <?php echo $text_px; ?></td>
                  </tr>
                </table>
                <table class="blue">
                  <tr>
                    <td rowspan="2" class="h3"><?php echo $h3_header_login_size; ?></td>
                    <td id="s_login"></td>
                    <td id="mi_login"></td>
                  </tr>
                  <tr>
                    <?php if (isset($radio_login_size)) {$checked = "CHECKED"; ?>
                      <td align="center"><input type="radio" name="radio_login_size" value="s_login" <?php if($radio_login_size=='s_login'){echo $checked;} ?>><span class="note_white">Standart</span></td>
                      <td align="center"><input type="radio" name="radio_login_size" value="mi_login" <?php if($radio_login_size=='mi_login'){echo $checked;} ?>><span class="note_white">Mini</span></td>
                    <?php } else { ?>
                      <td align="center"><input type="radio" name="radio_login_size" value="s_login" CHECKED><span class="note_white">Standart</span></td>
                      <td align="center"><input type="radio" name="radio_login_size" value="mi_login"><span class="note_white">Mini</span></td>
                    <?php } ?>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Login Size // End -->
				
				<!-- Header Button Color // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_header_button_color; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_header_button_color_options) && $radio_header_button_color_options == '1'){ ?>
                      <input type="radio"  name="radio_header_button_color_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_header_button_color_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_header_button_color_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_header_button_color_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_header_button_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_header_button_color; ?>"></div>
                      <input id="input_header_button_color" style="text-align: center" type="text" size="6" maxlength="6" name="input_header_button_color" value="<?php echo $input_header_button_color; ?>">
                    </td>
                    <td rowspan="2" id="heder_button"></td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $h3_header_button_color_hover; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_header_button_color_hover; ?>"></div>
                      <input id="input_header_button_color_hover" style="text-align: center" type="text" size="6" maxlength="6" name="input_header_button_color_hover" value="<?php echo $input_header_button_color_hover; ?>">
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Header Button Color // End -->
				
				<!-- Header Size // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_header_size; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_header_size_options) && $radio_header_size_options == '1'){ ?>
                      <input type="radio"  name="radio_header_size_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_header_size_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_header_size_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_header_size_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr>
                    <td class="h3"><?php echo $h3_header_size; ?></td>
                    <td><input id="input_header_size" style="text-align: center" type="text" size="6" maxlength="6" name="input_header_size" value="<?php echo $input_header_size; ?>"><?php echo $text_px; ?></td>
                    <td id="header_size" rowspan="2"></td>
                  </tr>
                  <tr>
                  <td class="h3"><?php echo $h3_header_size_tablet; ?></td>
                  <td><input id="input_header_size_tablet" style="text-align: center" type="text" size="6" maxlength="6" name="input_header_size_tablet" value="<?php echo $input_header_size_tablet; ?>"><?php echo $text_px; ?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Header Size // End -->
				
      </div>
    <!-- Header // middle // End -->
		
    <!-- Header // Bottom // Start -->
		  <div id="bottom-header">
				<!-- Header // Bottom Header // Color & Background // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_bottom_header_color; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_bottom_h_color_options) && $radio_bottom_h_color_options == '1'){ ?>
                      <input type="radio"  name="radio_bottom_h_color_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_bottom_h_color_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_bottom_h_color_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_bottom_h_color_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_bottom_header_color_transparent; ?></td>
                    <td>
                      <?php if(isset($radio_bottom_header_color_transparent) && $radio_bottom_header_color_transparent == 'transparent'){ ?>
                        <input type="radio"  name="radio_bottom_header_color_transparent" value="transparent" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_bottom_header_color_transparent" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_bottom_header_color_transparent" value="transparent" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_bottom_header_color_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_bottom_header_bg_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_bottom_header_bg_color; ?>"></div>
                      <input id="input_bottom_header_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_bottom_header_bg_color" value="<?php echo $input_bottom_header_bg_color; ?>">
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_bottom_header_slightly_transparent; ?></td>
                    <td>
                      <select name="select_bottom_header_slightly_transparent">
                        <?php if (isset($select_bottom_header_slightly_transparent)) {$selected = "selected";?>
                          <option value="none" <?php if($select_bottom_header_slightly_transparent=='none'){echo $selected;} ?>>None</option>
                          <option value="b_50" <?php if($select_bottom_header_slightly_transparent=='b_50'){echo $selected;} ?>>Black 50%</option>
                          <option value="b_40" <?php if($select_bottom_header_slightly_transparent=='b_40'){echo $selected;} ?>>Black 40%</option>
                          <option value="b_30" <?php if($select_bottom_header_slightly_transparent=='b_30'){echo $selected;} ?>>Black 30%</option>
                          <option value="b_20" <?php if($select_bottom_header_slightly_transparent=='b_20'){echo $selected;} ?>>Black 20%</option>
                          <option value="b_10" <?php if($select_bottom_header_slightly_transparent=='b_10'){echo $selected;} ?>>Black 10%</option>
                          <option value="w_50" <?php if($select_bottom_header_slightly_transparent=='w_50'){echo $selected;} ?>>White 50%</option>
                          <option value="w_40" <?php if($select_bottom_header_slightly_transparent=='w_40'){echo $selected;} ?>>White 40%</option>
                          <option value="w_30" <?php if($select_bottom_header_slightly_transparent=='w_30'){echo $selected;} ?>>White 30%</option>
                          <option value="w_20" <?php if($select_bottom_header_slightly_transparent=='w_20'){echo $selected;} ?>>White 20%</option>
                          <option value="w_10" <?php if($select_bottom_header_slightly_transparent=='w_10'){echo $selected;} ?>>White 10%</option>
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
                  <tr><td class="h3"><?php echo $h3_bottom_header_pattern; ?></td>
                    <td>
                      <select name="select_bottom_header_pattern">
                        <?php if (isset($select_bottom_header_pattern)) {$selected = "selected";?>
                          <option value="none" <?php if($select_bottom_header_pattern=='none'){echo $selected;} ?>>None</option>
                          <option value="scan-lines" <?php if($select_bottom_header_pattern=='scan-lines'){echo $selected;} ?>>Scan lines</option>
                          <option value="noise" <?php if($select_bottom_header_pattern=='noise'){echo $selected;} ?>>Noise</option>
                          <option value="noise2" <?php if($select_bottom_header_pattern=='noise2'){echo $selected;} ?>>Noise_2</option>
                          <option value="texture" <?php if($select_bottom_header_pattern=='texture'){echo $selected;} ?>>Texture</option>
                          <option value="jeans" <?php if($select_bottom_header_pattern=='jeans'){echo $selected;} ?>>Jeans</option>
                          <option value="leather" <?php if($select_bottom_header_pattern=='leather'){echo $selected;} ?>>Leather</option>
                          <option value="square" <?php if($select_bottom_header_pattern=='square'){echo $selected;} ?>>Squares</option>
                          <option value="grid" <?php if($select_bottom_header_pattern=='grid'){echo $selected;} ?>>Grid</option>
                          <option value="grid2" <?php if($select_bottom_header_pattern=='grid2'){echo $selected;} ?>>Grid_2</option>
                          <option value="circle" <?php if($select_bottom_header_pattern=='circle'){echo $selected;} ?>>Circle</option>
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
                  <tr><td class="h3"><?php echo $h3_bottom_header_pattern_upload; ?><br>
                      <h4><?php echo $h4_bottom_header_pattern_upload; ?></h4>
                    </td>
                    <td>
                      <?php if(isset($radio_bottom_header_bg_pattern_image) && $radio_bottom_header_bg_pattern_image == '1'){ ?>
                        <input type="radio"  name="radio_bottom_header_bg_pattern_image" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_bottom_header_bg_pattern_image" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_bottom_header_bg_pattern_image" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_bottom_header_bg_pattern_image" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td>
                      <input type="hidden" name="upload_bottom_header_bg_pattern_image" value="<?php echo $upload_bottom_header_bg_pattern_image; ?>" id="upload_bottom_header_bg_pattern_image" />
                      <div class="selected_image" style="text-align:center;">
                        <img src="<?php echo $image_bottom_header_pattern_preview; ?>" alt="" id="image_bottom_header_pattern_preview" onclick="image_upload('upload_bottom_header_bg_pattern_image', 'image_bottom_header_pattern_preview');" /><br>
                        <a onclick="image_upload('upload_bottom_header_bg_pattern_image', 'image_bottom_header_pattern_preview');"><?php echo $text_browse; ?></a>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Header // bottom Header // Color & Background // End -->
				
				<!-- Header // Bottom Header // Additional Space // Start -->
					<div class="box"><div class="box-heading"><?php echo $h3_additional_space; ?></div>
						<div class="box-content">
							<table class="yellow">
								<tr><td class="h3"><?php echo $text_activate_changes; ?></td>
									<td>
										<?php if(isset($radio_header_additional_space_options) && $radio_header_additional_space_options == '1'){ ?>
											<input type="radio"  name="radio_header_additional_space_options" value="1" CHECKED > <?php echo $text_on; ?>
											<input type="radio" name="radio_header_additional_space_options" value="0" > <?php echo $text_off; ?>
										<?php } else { ?>
											<input type="radio"  name="radio_header_additional_space_options" value="1" > <?php echo $text_on; ?>
											<input type="radio" name="radio_header_additional_space_options" value="0" CHECKED > <?php echo $text_off; ?>
										<?php } ?>
									</td>
								</tr>
							</table>
							<div class="left-margin">
							<div id="language-bottom-header" class="horizontal-tabs">
								<?php foreach ($languages as $language) { ?>
									<a href="#tab-add-space-text-<?php echo $language['language_id']; ?>"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" alt="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a>
								<?php } ?>
							</div>
							<?php foreach ($languages as $language) { ?>
								<div id="tab-add-space-text-<?php echo $language['language_id']; ?>">
									<table class="blue">
										<tr>
											<td class="h3"><?php echo $h3_add_space_text_ore_code; ?></td>
											<td><textarea name="textarea_add_space_text_<?php echo $language['language_id']; ?>" class="ckeditor" id="textarea_add_space_text_<?php echo $language['language_id']; ?>"><?php echo isset(${'textarea_add_space_text_' . $language['language_id']}) ? ${'textarea_add_space_text_' . $language['language_id']} : ''; ?></textarea></td>
										</tr>
									</table>
								</div>
							<?php } ?>
							</div>
						</div>
					</div>
				<!-- Header // Bottom Header // Additional Space // End -->
			</div>
    <!-- Header // Bottom // End -->
		
  </div>
<!-- Tab4 // End // Header -->