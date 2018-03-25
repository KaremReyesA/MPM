<!-- Tab11 // Start // Footer -->
  <div id="tab11">
    <table class="red">
      <tr><td class="h3"><?php echo $h3_footer_status; ?></td>
          <td>
            <select name="select_footer_status">
              <?php if ($select_footer_status) { ?>
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
    
    <!-- Footer Tabs // Start -->
      <div class="box">
        <div class="box-content">
          <div id="footer-tab" class="horizontal-tabs">
            <a href="#tab-footer-top"><?php echo $tab_top_footer; ?></a>
            <a href="#tab-footer-middle"><?php echo $tab_middle_footer; ?></a>
            <a href="#tab-footer-bottom"><?php echo $tab_bottom_footer; ?></a>
            <a href="#tab-footer-font"><?php echo $tab_font_settings; ?></a>
          </div>
        </div>
      </div>
    <!-- Footer Tabs // End -->
    
    <div id="tab-footer-top">
      <!-- Footer // Top Footer Background Settings // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_background ; ?></div>
          <div class="box-content">
            <!-- All Footer Theme Block // Start -->
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                    <td>
                      <?php if(isset($radio_footer_background_options) && $radio_footer_background_options == '1'){ ?>
                        <input type="radio"  name="radio_footer_background_options" value="1" CHECKED > <?php echo $text_on; ?>
                        <input type="radio" name="radio_footer_background_options" value="0" > <?php echo $text_off; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_footer_background_options" value="1" > <?php echo $text_on; ?>
                        <input type="radio" name="radio_footer_background_options" value="0" CHECKED > <?php echo $text_off; ?>
                      <?php } ?>
                    </td>
                  </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                    <tr><td class="h3"><?php echo $h3_footer_color_transparent; ?></td>
                      <td>
                        <?php if(isset($radio_footer_color_transparent) && $radio_footer_color_transparent == 'transparent'){ ?>
                          <input type="radio"  name="radio_footer_color_transparent" value="transparent" CHECKED > <?php echo $text_yes; ?>
                          <input type="radio" name="radio_footer_color_transparent" value="0" > <?php echo $text_no; ?>
                        <?php } else { ?>
                          <input type="radio"  name="radio_footer_color_transparent" value="transparent" > <?php echo $text_yes; ?>
                          <input type="radio" name="radio_footer_color_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                        <?php } ?>
                      </td>
                    </tr>
                </table>
                <table class="blue">
                    <tr><td class="h3"><?php echo $h3_footer_bg_color; ?></td>
                      <td><div class="color" style="background-color: #<?php echo $input_footer_bg_color; ?>"></div><input id="input_footer_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_bg_color" value="<?php echo $input_footer_bg_color; ?>"></td>	
                    </tr>
                </table>
                <table class="blue">
                    <tr><td class="h3"><?php echo $h3_footer_slightly_transparent; ?></td>
                      <td>
                        <select name="select_footer_slightly_transparent">
                          <?php if (isset($select_footer_slightly_transparent)) {$selected = "selected";?>
                            <option value="none" <?php if($select_footer_slightly_transparent=='none'){echo $selected;} ?>>None</option>
                            <option value="b_50" <?php if($select_footer_slightly_transparent=='b_50'){echo $selected;} ?>>Black 50%</option>
                            <option value="b_40" <?php if($select_footer_slightly_transparent=='b_40'){echo $selected;} ?>>Black 40%</option>
                            <option value="b_30" <?php if($select_footer_slightly_transparent=='b_30'){echo $selected;} ?>>Black 30%</option>
                            <option value="b_20" <?php if($select_footer_slightly_transparent=='b_20'){echo $selected;} ?>>Black 20%</option>
                            <option value="b_10" <?php if($select_footer_slightly_transparent=='b_10'){echo $selected;} ?>>Black 10%</option>
                            <option value="w_50" <?php if($select_footer_slightly_transparent=='w_50'){echo $selected;} ?>>White 50%</option>
                            <option value="w_40" <?php if($select_footer_slightly_transparent=='w_40'){echo $selected;} ?>>White 40%</option>
                            <option value="w_30" <?php if($select_footer_slightly_transparent=='w_30'){echo $selected;} ?>>White 30%</option>
                            <option value="w_20" <?php if($select_footer_slightly_transparent=='w_20'){echo $selected;} ?>>White 20%</option>
                            <option value="w_10" <?php if($select_footer_slightly_transparent=='w_10'){echo $selected;} ?>>White 10%</option>
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
                  <tr><td class="h3"><?php echo $h3_footer_bg_pattern; ?></td>
                    <td>
                      <select name="select_footer_bg_pattern">
                        <?php if (isset($select_footer_bg_pattern)) {$selected = "selected";?>
                          <option value="none" <?php if($select_footer_bg_pattern=='none'){echo $selected;} ?>>None</option>
                          <option value="scan-lines" <?php if($select_footer_bg_pattern=='scan-lines'){echo $selected;} ?>>Scan lines</option>
                          <option value="noise" <?php if($select_footer_bg_pattern=='noise'){echo $selected;} ?>>Noise</option>
                          <option value="noise2" <?php if($select_footer_bg_pattern=='noise2'){echo $selected;} ?>>Noise_2</option>
                          <option value="texture" <?php if($select_footer_bg_pattern=='texture'){echo $selected;} ?>>Texture</option>
                          <option value="jeans" <?php if($select_footer_bg_pattern=='jeans'){echo $selected;} ?>>Jeans</option>
                          <option value="leather" <?php if($select_footer_bg_pattern=='leather'){echo $selected;} ?>>Leather</option>
                          <option value="square" <?php if($select_footer_bg_pattern=='square'){echo $selected;} ?>>Squares</option>
                          <option value="grid" <?php if($select_footer_bg_pattern=='grid'){echo $selected;} ?>>Grid</option>
                          <option value="grid2" <?php if($select_footer_bg_pattern=='grid2'){echo $selected;} ?>>Grid_2</option>
                          <option value="circle" <?php if($select_footer_bg_pattern=='circle'){echo $selected;} ?>>Circle</option>
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
                  <tr><td class="h3"><?php echo $h3_footer_bg_pattern_upload; ?><br>
                      <h4><?php echo $h4_footer_bg_pattern_upload; ?></h4></td>
                    <td>
                      <?php if(isset($radio_footer_bg_pattern_image) && $radio_footer_bg_pattern_image == '1'){ ?>
                        <input type="radio"  name="radio_footer_bg_pattern_image" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_bg_pattern_image" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_footer_bg_pattern_image" value="1"> <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_bg_pattern_image" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td>
                      <input type="hidden" name="upload_footer_bg_pattern_image" value="<?php echo $upload_footer_bg_pattern_image; ?>" id="upload_footer_bg_pattern_image" />
                      <div class="selected_image" style="text-align:center;">
                        <img src="<?php echo $image_footer_pattern_preview; ?>" alt="" id="image_footer_pattern_preview" onclick="image_upload('upload_footer_bg_pattern_image', 'image_footer_pattern_preview');" /><br>
                        <a onclick="image_upload('upload_footer_bg_pattern_image', 'image_footer_pattern_preview');"><?php echo $text_browse; ?></a>
                      </div>
                    </td> 
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_footer_full_bg_image; ?><br>
                      <h4><?php echo $h4_footer_full_bg_image; ?></h4></td>
                    <td>
                      <?php if(isset($radio_footer_full_background_image) && $radio_footer_full_background_image == '1'){ ?>
                        <input type="radio"  name="radio_footer_full_background_image" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_full_background_image" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_footer_full_background_image" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_full_background_image" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td>
                      <input type="hidden" name="upload_footer_full_bg_image" value="<?php echo $upload_footer_full_bg_image; ?>" id="upload_footer_full_bg_image" />
                      <div class="selected_image" style="text-align:center;">
                        <img src="<?php echo $image_footer_full_bg_preview; ?>" alt="" id="image_footer_full_bg_preview" onclick="image_upload('upload_footer_full_bg_image', 'image_footer_full_bg_preview');" /><br>
                        <a onclick="image_upload('upload_footer_full_bg_image', 'image_footer_full_bg_preview');"><?php echo $text_browse; ?></a>
                      </div>
                    </td> 
                  </tr>
                </table>
              </div>
            <!-- All Footer Theme Block // End -->
          </div>
        </div>
      <!-- Footer // Top Footer Background Settings // End -->
      
      <!-- Footer // About Us // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_about; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_footer_about_options) && $radio_footer_about_options == '1'){ ?>
                      <input type="radio"  name="radio_footer_about_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_about_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_about_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_about_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
            </table>
            <div id="language-about" class="horizontal-tabs">
              <?php foreach ($languages as $language) { ?>
                <a href="#tab-language-about-<?php echo $language['language_id']; ?>"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" alt="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a>
              <?php } ?>
            </div>
            <?php foreach ($languages as $language) { ?>
              <div id="tab-language-about-<?php echo $language['language_id']; ?>">
                <table class="clear">
                  <tr>
                    <td class="h3"><?php echo $h3_footer_about_heading_name; ?></td>
                    <td><input type="text" name="input_footer_about_name_<?php echo $language['language_id']; ?>" id="input_footer_about_name_<?php echo $language['language_id']; ?>" size="30" value="<?php echo isset(${'input_footer_about_name_' . $language['language_id']}) ? ${'input_footer_about_name_' . $language['language_id']} : ''; ?>" /></td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $h3_footer_about_us; ?></td>
                    <td><textarea name="textarea_footer_about_<?php echo $language['language_id']; ?>" class="ckeditor" id="textarea_footer_about_<?php echo $language['language_id']; ?>"><?php echo isset(${'textarea_footer_about_' . $language['language_id']}) ? ${'textarea_footer_about_' . $language['language_id']} : ''; ?></textarea></td>
                  </tr>
                </table>
              </div>
            <?php } ?>
          </div>
        </div>
      <!-- Footer // About Us // End -->
      
      <!-- Footer // Facebook Fan Page // Start -->
        <!--<div class="box"><div class="box-heading"><?php echo $heading_footer_follow_us; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_footer_follow_options) && $radio_footer_follow_options == '1'){ ?>
                      <input type="radio"  name="radio_footer_follow_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_follow_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_follow_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_follow_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
            </table>
            <div id="language-follow" class="horizontal-tabs">
              <?php foreach ($languages as $language) { ?>
                <a href="#tab-language-follow-<?php echo $language['language_id']; ?>"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a>
              <?php } ?>
            </div>
            <?php foreach ($languages as $language) { ?>
              <div id="tab-language-follow-<?php echo $language['language_id']; ?>">
                <table class="clear">
                  <tr>
                    <td class="h3"><?php echo $h3_footer_follow_heading_name; ?></td>
                    <td><input type="text" name="input_footer_follow_name_<?php echo $language['language_id']; ?>" id="input_footer_follow_name_<?php echo $language['language_id']; ?>" size="30" value="<?php echo isset(${'input_footer_follow_name_' . $language['language_id']}) ? ${'input_footer_follow_name_' . $language['language_id']} : ''; ?>" /></td>
                  </tr>
                </table>
              </div>
            <?php } ?>
              <div class="splitter"></div>
            <table class="blue">
              <tr>
                <td class="h3"><?php echo $h3_footer_fan_id; ?></td>
                <td><input type="text" name="input_footer_fan_id" id="input_footer_fan_id" size="100" value="<?php echo $input_footer_fan_id; ?>" /></td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td class="h3"><?php echo $h3_footer_fan_color; ?></td>
                <td>
                  <?php if(isset($radio_footer_fon_color) && $radio_footer_fon_color == 'light'){ ?>
                    <input type="radio"  name="radio_footer_fon_color" value="light" CHECKED > Light
                    <input type="radio" name="radio_footer_fon_color" value="dark"> Dark
                  <?php } else { ?>
                    <input type="radio"  name="radio_footer_fon_color" value="light" > Light
                    <input type="radio" name="radio_footer_fon_color" value="dark" CHECKED> Dark
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td class="h3"><?php echo $h3_footer_fan_width; ?></td>
                <td><input type="text" name="input_footer_fan_width" id="input_footer_fan_width" size="4" value="<?php echo $input_footer_fan_width; ?>" /></td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td class="h3"><?php echo $h3_footer_fan_height; ?></td>
                <td><input type="text" name="input_footer_fan_height" id="input_footer_fan_height" size="4" value="<?php echo $input_footer_fan_height; ?>" /></td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td class="h3"><?php echo $h3_footer_fan_faces; ?></td>
                <td>
                  <?php if(isset($radio_footer_fan_faces) && $radio_footer_fan_faces == 'true'){ ?>
                    <input type="radio"  name="radio_footer_fan_faces" value="true" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_footer_fan_faces" value="false" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_footer_fan_faces" value="true" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_footer_fan_faces" value="false" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <table class="blue">
              <tr>
                <td class="h3"><?php echo $h3_footer_fan_location; ?></td>
                <td><input type="text" name="input_footer_fan_location" id="input_footer_fan_location" size="5" value="<?php echo $input_footer_fan_location; ?>" /></td>
              </tr>
            </table>
          </div>
        </div>-->
      <!-- Footer // Facebook Fan Page // End -->
      
      <!-- Footer // Service // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_service; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_footer_service_options) && $radio_footer_service_options == '1'){ ?>
                    <input type="radio"  name="radio_footer_service_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_footer_service_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_footer_service_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_footer_service_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_footer_service_contact; ?></td>
                  <td>
                    <?php if(isset($radio_footer_service_contact) && $radio_footer_service_contact == '1'){ ?>
                      <input type="radio"  name="radio_footer_service_contact" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_service_contact" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_service_contact" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_service_contact" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_footer_service_returns; ?></td>
                  <td>
                    <?php if(isset($radio_footer_service_returns) && $radio_footer_service_returns == '1'){ ?>
                      <input type="radio"  name="radio_footer_service_returns" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_service_returns" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_service_returns" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_service_returns" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_footer_service_sitemap; ?></td>
                  <td>
                    <?php if(isset($radio_footer_service_sitemap) && $radio_footer_service_sitemap == '1'){ ?>
                      <input type="radio"  name="radio_footer_service_sitemap" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_service_sitemap" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_service_sitemap" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_service_sitemap" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      <!-- Footer // Service // End -->
      
      <!-- Footer // Extras // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_extra; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_footer_extra_options) && $radio_footer_extra_options == '1'){ ?>
                    <input type="radio"  name="radio_footer_extra_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_footer_extra_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_footer_extra_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_footer_extra_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_footer_extra_brand; ?></td>
                  <td>
                    <?php if(isset($radio_footer_extra_brand) && $radio_footer_extra_brand == '1'){ ?>
                      <input type="radio"  name="radio_footer_extra_brand" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_extra_brand" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_extra_brand" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_extra_brand" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_footer_extra_voucher; ?></td>
                  <td>
                    <?php if(isset($radio_footer_extra_voucher) && $radio_footer_extra_voucher == '1'){ ?>
                      <input type="radio"  name="radio_footer_extra_voucher" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_extra_voucher" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_extra_voucher" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_extra_voucher" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_footer_extra_affiliates; ?></td>
                  <td>
                    <?php if(isset($radio_footer_extra_affiliates) && $radio_footer_extra_affiliates == '1'){ ?>
                      <input type="radio"  name="radio_footer_extra_affiliates" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_extra_affiliates" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_extra_affiliates" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_extra_affiliates" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_footer_extra_specials; ?></td>
                  <td>
                    <?php if(isset($radio_footer_extra_specials) && $radio_footer_extra_specials == '1'){ ?>
                      <input type="radio"  name="radio_footer_extra_specials" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_extra_specials" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_extra_specials" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_extra_specials" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      <!-- Footer // Extras // End -->
      
      <!-- Footer // Contact Us // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_contact; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_footer_contact_options) && $radio_footer_contact_options == '1'){ ?>
                      <input type="radio"  name="radio_footer_contact_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_contact_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_contact_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_contact_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
            </table>
            <table class="blue">
                <tr><td class="h3"><?php echo $h3_footer_contact_icons; ?></td>
                  <td>
                    <?php if(isset($radio_footer_contact_icons) && $radio_footer_contact_icons == 'light'){ ?>
                      <input type="radio"  name="radio_footer_contact_icons" value="light" CHECKED > Light
                      <input type="radio" name="radio_footer_contact_icons" value="dark" > Dark
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_contact_icons" value="light" > Light
                      <input type="radio" name="radio_footer_contact_icons" value="dark" CHECKED > Dark
                    <?php } ?>
                  </td>
                  <td id="footer_contact_icons"></td>
                </tr>
              </table>
            <div id="language-contact" class="horizontal-tabs">
              <?php foreach ($languages as $language) { ?>
                <a href="#tab-language-contact-<?php echo $language['language_id']; ?>"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" alt="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a>
              <?php } ?>
            </div>
            <?php foreach ($languages as $language) { ?>
              <div id="tab-language-contact-<?php echo $language['language_id']; ?>">
                <table class="clear">
                  <tr>
                    <td class="h3"><?php echo $h3_footer_contact_heading_name; ?></td>
                    <td><input type="text" name="input_footer_contact_name_<?php echo $language['language_id']; ?>" id="input_footer_contact_name_<?php echo $language['language_id']; ?>" size="30" value="<?php echo isset(${'input_footer_contact_name_' . $language['language_id']}) ? ${'input_footer_contact_name_' . $language['language_id']} : ''; ?>" /></td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $h3_footer_contact_us; ?></td>
                    <td><textarea name="textarea_footer_contact_<?php echo $language['language_id']; ?>" class="ckeditor" id="textarea_footer_contact_<?php echo $language['language_id']; ?>"><?php echo isset(${'textarea_footer_contact_' . $language['language_id']}) ? ${'textarea_footer_contact_' . $language['language_id']} : ''; ?></textarea></td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $h3_footer_phone; ?></td>
                    <td><input type="text" name="input_footer_phone_<?php echo $language['language_id']; ?>" id="input_footer_phone_<?php echo $language['language_id']; ?>" size="50" value="<?php echo isset(${'input_footer_phone_' . $language['language_id']}) ? ${'input_footer_phone_' . $language['language_id']} : ''; ?>" /></td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $h3_footer_mobile; ?></td>
                    <td><input type="text" name="input_footer_mobile_<?php echo $language['language_id']; ?>" id="input_footer_mobile_<?php echo $language['language_id']; ?>" size="50" value="<?php echo isset(${'input_footer_mobile_' . $language['language_id']}) ? ${'input_footer_mobile_' . $language['language_id']} : ''; ?>" /></td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $h3_footer_skype; ?></td>
                    <td><input type="text" name="input_footer_skype_<?php echo $language['language_id']; ?>" id="input_footer_skype_<?php echo $language['language_id']; ?>" size="50" value="<?php echo isset(${'input_footer_skype_' . $language['language_id']}) ? ${'input_footer_skype_' . $language['language_id']} : ''; ?>" /></td>
                  </tr>
                  <tr>
                    <td class="h3"><?php echo $h3_footer_send_us; ?></td>
                    <td><textarea name="textarea_footer_send_us_<?php echo $language['language_id']; ?>" class="ckeditor" id="textarea_footer_send_us_<?php echo $language['language_id']; ?>"><?php echo isset(${'textarea_footer_send_us_' . $language['language_id']}) ? ${'textarea_footer_send_us_' . $language['language_id']} : ''; ?></textarea></td>
                  </tr>
                </table>
              </div>
            <?php } ?>
          </div>
        </div>
      <!-- Footer // Contact Us // End -->
      
      <!-- Footer // Payment Method // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_payment; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_footer_payment_options) && $radio_footer_payment_options == '1'){ ?>
                      <input type="radio"  name="radio_footer_payment_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_payment_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_payment_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_payment_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_footer_payment_top; ?></td>
                  <td>
                    <?php if(isset($radio_footer_payment_top) && $radio_footer_payment_top == '1'){ ?>
                      <input type="radio"  name="radio_footer_payment_top" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_payment_top" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_payment_top" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_payment_top" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_footer_payment_bottom; ?></td>
                  <td>
                    <?php if(isset($radio_footer_payment_bottom) && $radio_footer_payment_bottom == '1'){ ?>
                      <input type="radio"  name="radio_footer_payment_bottom" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_payment_bottom" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_payment_bottom" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_payment_bottom" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      <!-- Footer // Payment Method // End -->
    </div>
    
    <div id="tab-footer-middle">
      <!-- Footer // Middle Footer Background Settings // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_background ; ?></div>
          <div class="box-content">
            <!-- Information Theme Block // Start -->
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_footer_info_options) && $radio_footer_info_options == '1'){ ?>
                      <input type="radio"  name="radio_footer_info_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_info_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_info_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_info_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_footer_info_color_transparent; ?></td>
                    <td>
                      <?php if(isset($radio_footer_info_color_transparent) && $radio_footer_info_color_transparent == 'transparent'){ ?>
                        <input type="radio"  name="radio_footer_info_color_transparent" value="transparent" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_info_color_transparent" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_footer_info_color_transparent" value="transparent" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_info_color_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_footer_info_bg_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_footer_info_bg_color; ?>"></div><input id="input_footer_info_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_info_bg_color" value="<?php echo $input_footer_info_bg_color; ?>"></td>	
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_footer_info_slightly_transparent; ?></td>
                    <td>
                      <select name="select_footer_info_slightly_transparent">
                        <?php if (isset($select_footer_info_slightly_transparent)) {$selected = "selected";?>
                          <option value="none" <?php if($select_footer_info_slightly_transparent=='none'){echo $selected;} ?>>None</option>
                          <option value="b_50" <?php if($select_footer_info_slightly_transparent=='b_50'){echo $selected;} ?>>Black 50%</option>
                          <option value="b_40" <?php if($select_footer_info_slightly_transparent=='b_40'){echo $selected;} ?>>Black 40%</option>
                          <option value="b_30" <?php if($select_footer_info_slightly_transparent=='b_30'){echo $selected;} ?>>Black 30%</option>
                          <option value="b_20" <?php if($select_footer_info_slightly_transparent=='b_20'){echo $selected;} ?>>Black 20%</option>
                          <option value="b_10" <?php if($select_footer_info_slightly_transparent=='b_10'){echo $selected;} ?>>Black 10%</option>
                          <option value="w_50" <?php if($select_footer_info_slightly_transparent=='w_50'){echo $selected;} ?>>White 50%</option>
                          <option value="w_40" <?php if($select_footer_info_slightly_transparent=='w_40'){echo $selected;} ?>>White 40%</option>
                          <option value="w_30" <?php if($select_footer_info_slightly_transparent=='w_30'){echo $selected;} ?>>White 30%</option>
                          <option value="w_20" <?php if($select_footer_info_slightly_transparent=='w_20'){echo $selected;} ?>>White 20%</option>
                          <option value="w_10" <?php if($select_footer_info_slightly_transparent=='w_10'){echo $selected;} ?>>White 10%</option>
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
                  <tr><td class="h3"><?php echo $h3_footer_info_bg_pattern; ?></td>
                    <td>
                      <select name="select_footer_info_bg_pattern">
                        <?php if (isset($select_footer_info_bg_pattern)) {$selected = "selected";?>
                          <option value="none" <?php if($select_footer_info_bg_pattern=='none'){echo $selected;} ?>>None</option>
                          <option value="scan-lines" <?php if($select_footer_info_bg_pattern=='scan-lines'){echo $selected;} ?>>Scan lines</option>
                          <option value="noise" <?php if($select_footer_info_bg_pattern=='noise'){echo $selected;} ?>>Noise</option>
                          <option value="noise2" <?php if($select_footer_info_bg_pattern=='noise2'){echo $selected;} ?>>Noise_2</option>
                          <option value="texture" <?php if($select_footer_info_bg_pattern=='texture'){echo $selected;} ?>>Texture</option>
                          <option value="jeans" <?php if($select_footer_info_bg_pattern=='jeans'){echo $selected;} ?>>Jeans</option>
                          <option value="leather" <?php if($select_footer_info_bg_pattern=='leather'){echo $selected;} ?>>Leather</option>
                          <option value="square" <?php if($select_footer_info_bg_pattern=='square'){echo $selected;} ?>>Squares</option>
                          <option value="grid" <?php if($select_footer_info_bg_pattern=='grid'){echo $selected;} ?>>Grid</option>
                          <option value="grid2" <?php if($select_footer_info_bg_pattern=='grid2'){echo $selected;} ?>>Grid_2</option>
                          <option value="circle" <?php if($select_footer_info_bg_pattern=='circle'){echo $selected;} ?>>Circle</option>
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
                  <tr><td class="h3"><?php echo $h3_footer_info_bg_pattern_upload; ?><br>
                      <h4><?php echo $h4_footer_info_bg_pattern_upload; ?></h4></td>
                    <td>
                      <?php if(isset($radio_footer_info_bg_pattern_image) && $radio_footer_info_bg_pattern_image == '1'){ ?>
                        <input type="radio"  name="radio_footer_info_bg_pattern_image" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_info_bg_pattern_image" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_footer_info_bg_pattern_image" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_info_bg_pattern_image" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td>
                      <input type="hidden" name="upload_footer_info_bg_pattern_image" value="<?php echo $upload_footer_info_bg_pattern_image; ?>" id="upload_footer_info_bg_pattern_image" />
                      <div class="selected_image" style="text-align:center;">
                        <img src="<?php echo $image_footer_info_pattern_preview; ?>" alt="" id="image_footer_info_pattern_preview" onclick="image_upload('upload_footer_info_bg_pattern_image', 'image_footer_info_pattern_preview');" /><br>
                        <a onclick="image_upload('upload_footer_info_bg_pattern_image', 'image_footer_info_pattern_preview');"><?php echo $text_browse; ?></a>
                      </div>
                    </td> 
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_footer_info_full_bg_image; ?><br>
                      <h4><?php echo $h4_footer_info_full_bg_image; ?></h4></td>
                    <td>
                      <?php if(isset($radio_footer_info_full_background_image) && $radio_footer_info_full_background_image == '1'){ ?>
                        <input type="radio"  name="radio_footer_info_full_background_image" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_info_full_background_image" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_footer_info_full_background_image" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_info_full_background_image" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td>
                      <input type="hidden" name="upload_footer_info_full_bg_image" value="<?php echo $upload_footer_info_full_bg_image; ?>" id="upload_footer_info_full_bg_image" />
                      <div class="selected_image" style="text-align:center;">
                        <img src="<?php echo $image_footer_info_full_bg_preview; ?>" alt="" id="image_footer_info_full_bg_preview" onclick="image_upload('upload_footer_info_full_bg_image', 'image_footer_info_full_bg_preview');" /><br>
                        <a onclick="image_upload('upload_footer_info_full_bg_image', 'image_footer_info_full_bg_preview');"><?php echo $text_browse; ?></a>
                      </div>
                    </td> 
                  </tr>
                </table>
              </div>
            <!-- Information Theme Block // End -->
          </div>
        </div>
      <!-- Footer // Middle Footer Background Settings // End -->
        
      <!-- Footer // Middle Footer Information Link // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_info_link; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_footer_info_link_options) && $radio_footer_info_link_options == '1'){ ?>
                    <input type="radio"  name="radio_footer_info_link_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_footer_info_link_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_footer_info_link_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_footer_info_link_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
          </div>
        </div>
      <!-- Footer // Middle Footer Information Link // End -->
    </div>
    
    <div id="tab-footer-bottom">
      <!-- Footer // Bottom Footer Background Settings // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_background ; ?></div>
          <div class="box-content">
            <!-- Powered by Theme Block // Start -->
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_footer_powered_options) && $radio_footer_powered_options == '1'){ ?>
                      <input type="radio"  name="radio_footer_powered_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_powered_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_powered_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_footer_powered_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <div class="left-margin">
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_footer_powered_color_transparent; ?></td>
                    <td>
                      <?php if(isset($radio_footer_powered_color_transparent) && $radio_footer_powered_color_transparent == 'transparent'){ ?>
                        <input type="radio"  name="radio_footer_powered_color_transparent" value="transparent" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_powered_color_transparent" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_footer_powered_color_transparent" value="transparent" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_powered_color_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_footer_powered_bg_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_footer_powered_bg_color; ?>"></div><input id="input_footer_powered_bg_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_powered_bg_color" value="<?php echo $input_footer_powered_bg_color; ?>"></td>	
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_footer_powered_slightly_transparent; ?></td>
                    <td>
                      <select name="select_footer_powered_slightly_transparent">
                        <?php if (isset($select_footer_powered_slightly_transparent)) {$selected = "selected";?>
                          <option value="none" <?php if($select_footer_powered_slightly_transparent=='none'){echo $selected;} ?>>None</option>
                          <option value="b_50" <?php if($select_footer_powered_slightly_transparent=='b_50'){echo $selected;} ?>>Black 50%</option>
                          <option value="b_40" <?php if($select_footer_powered_slightly_transparent=='b_40'){echo $selected;} ?>>Black 40%</option>
                          <option value="b_30" <?php if($select_footer_powered_slightly_transparent=='b_30'){echo $selected;} ?>>Black 30%</option>
                          <option value="b_20" <?php if($select_footer_powered_slightly_transparent=='b_20'){echo $selected;} ?>>Black 20%</option>
                          <option value="b_10" <?php if($select_footer_powered_slightly_transparent=='b_10'){echo $selected;} ?>>Black 10%</option>
                          <option value="w_50" <?php if($select_footer_powered_slightly_transparent=='w_50'){echo $selected;} ?>>White 50%</option>
                          <option value="w_40" <?php if($select_footer_powered_slightly_transparent=='w_40'){echo $selected;} ?>>White 40%</option>
                          <option value="w_30" <?php if($select_footer_powered_slightly_transparent=='w_30'){echo $selected;} ?>>White 30%</option>
                          <option value="w_20" <?php if($select_footer_powered_slightly_transparent=='w_20'){echo $selected;} ?>>White 20%</option>
                          <option value="w_10" <?php if($select_footer_powered_slightly_transparent=='w_10'){echo $selected;} ?>>White 10%</option>
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
                  <tr><td class="h3"><?php echo $h3_footer_powered_bg_pattern; ?></td>
                    <td>
                      <select name="select_footer_powered_bg_pattern">
                        <?php if (isset($select_footer_powered_bg_pattern)) {$selected = "selected";?>
                          <option value="none" <?php if($select_footer_powered_bg_pattern=='none'){echo $selected;} ?>>None</option>
                          <option value="scan-lines" <?php if($select_footer_powered_bg_pattern=='scan-lines'){echo $selected;} ?>>Scan lines</option>
                          <option value="noise" <?php if($select_footer_powered_bg_pattern=='noise'){echo $selected;} ?>>Noise</option>
                          <option value="noise2" <?php if($select_footer_powered_bg_pattern=='noise2'){echo $selected;} ?>>Noise_2</option>
                          <option value="texture" <?php if($select_footer_powered_bg_pattern=='texture'){echo $selected;} ?>>Texture</option>
                          <option value="jeans" <?php if($select_footer_powered_bg_pattern=='jeans'){echo $selected;} ?>>Jeans</option>
                          <option value="leather" <?php if($select_footer_powered_bg_pattern=='leather'){echo $selected;} ?>>Leather</option>
                          <option value="square" <?php if($select_footer_powered_bg_pattern=='square'){echo $selected;} ?>>Squares</option>
                          <option value="grid" <?php if($select_footer_powered_bg_pattern=='grid'){echo $selected;} ?>>Grid</option>
                          <option value="grid2" <?php if($select_footer_powered_bg_pattern=='grid2'){echo $selected;} ?>>Grid_2</option>
                          <option value="circle" <?php if($select_footer_powered_bg_pattern=='circle'){echo $selected;} ?>>Circle</option>
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
                  <tr><td class="h3"><?php echo $h3_footer_powered_bg_pattern_upload; ?><br>
                      <h4><?php echo $h4_footer_powered_bg_pattern_upload; ?></h4></td>
                    <td>
                      <?php if(isset($radio_footer_powered_bg_pattern_image) && $radio_footer_powered_bg_pattern_image == '1'){ ?>
                        <input type="radio"  name="radio_footer_powered_bg_pattern_image" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_powered_bg_pattern_image" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_footer_powered_bg_pattern_image" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_powered_bg_pattern_image" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td>
                      <input type="hidden" name="upload_footer_powered_bg_pattern_image" value="<?php echo $upload_footer_powered_bg_pattern_image; ?>" id="upload_footer_powered_bg_pattern_image" />
                      <div class="selected_image" style="text-align:center;">
                        <img src="<?php echo $image_footer_powered_pattern_preview; ?>" alt="" id="image_footer_powered_pattern_preview" onclick="image_upload('upload_footer_powered_bg_pattern_image', 'image_footer_powered_pattern_preview');" /><br>
                        <a onclick="image_upload('upload_footer_powered_bg_pattern_image', 'image_footer_powered_pattern_preview');"><?php echo $text_browse; ?></a>
                      </div>
                    </td> 
                  </tr>
                </table>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_footer_powered_full_bg_image; ?><br>
                      <h4><?php echo $h4_footer_powered_full_bg_image; ?></h4></td>
                    <td>
                      <?php if(isset($radio_footer_powered_full_background_image) && $radio_footer_powered_full_background_image == '1'){ ?>
                        <input type="radio"  name="radio_footer_powered_full_background_image" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_powered_full_background_image" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_footer_powered_full_background_image" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_footer_powered_full_background_image" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td>
                      <input type="hidden" name="upload_footer_powered_full_bg_image" value="<?php echo $upload_footer_powered_full_bg_image; ?>" id="upload_footer_powered_full_bg_image" />
                      <div class="selected_image" style="text-align:center;">
                        <img src="<?php echo $image_footer_powered_full_bg_preview; ?>" alt="" id="image_footer_powered_full_bg_preview" onclick="image_upload('upload_footer_powered_full_bg_image', 'image_footer_powered_full_bg_preview');" /><br>
                        <a onclick="image_upload('upload_footer_powered_full_bg_image', 'image_footer_powered_full_bg_preview');"><?php echo $text_browse; ?></a>
                      </div>
                    </td> 
                  </tr>
                </table>
              </div>
            <!-- Powered by Theme Block // End -->
          </div>
        </div>
      <!-- Footer // Bottom Footer Background Settings // Start -->
      
      <!-- Footer // Bottom Footer Powered by Text // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_powered; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $h3_footer_powered_text_options; ?></td>
                <td>
                  <?php if(isset($radio_footer_powered_text_options) && $radio_footer_powered_text_options == '1'){ ?>
                    <input type="radio"  name="radio_footer_powered_text_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_footer_powered_text_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_footer_powered_text_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_footer_powered_text_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>					
              <div class="splitter"></div>
            <div id="language-powered" class="horizontal-tabs">
              <?php foreach ($languages as $language) { ?>
                <a href="#tab-language-powered-<?php echo $language['language_id']; ?>"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" alt="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a>
              <?php } ?>
            </div>
            <?php foreach ($languages as $language) { ?>
              <div id="tab-language-powered-<?php echo $language['language_id']; ?>">
                <table class="clear">
                  <tr>
                    <td class="h3"><?php echo $h3_footer_powered_text; ?></td>
                    <td><textarea name="textarea_footer_powered_<?php echo $language['language_id']; ?>" class="ckeditor" id="textarea_footer_powered_<?php echo $language['language_id']; ?>"><?php echo isset(${'textarea_footer_powered_' . $language['language_id']}) ? ${'textarea_footer_powered_' . $language['language_id']} : ''; ?></textarea></td>
                  </tr>
                </table>
              </div>
            <?php } ?>
          </div>
        </div>
      <!-- Footer // Bottom Footer Powered by Text // End -->
      
      <!-- Footer // Bottom Footer Go Up // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_go_up; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_footer_go_up_options) && $radio_footer_go_up_options == '1'){ ?>
                    <input type="radio"  name="radio_footer_go_up_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_footer_go_up_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_footer_go_up_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_footer_go_up_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
          </div>
        </div>
      <!-- Footer // Bottom Footer Go Up // End -->   
    </div>
    
    <!-- Footer Font Size & Font Color // Start -->
    <div id="tab-footer-font">
      <!-- Heading Font // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_heading; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_footer_heading_font_options) && $radio_footer_heading_font_options == '1'){ ?>
                    <input type="radio"  name="radio_footer_heading_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_footer_heading_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_footer_heading_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_footer_heading_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                  <td>
                    <input id="input_footer_heading_font_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_footer_heading_font_size" value="<?php echo $input_footer_heading_font_size; ?>"> <?php echo $text_px; ?>
                  </td>
                </tr>
                <tr><td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_footer_heading_font_color; ?>"></div>
                    <input id="input_footer_heading_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_heading_font_color" value="<?php echo $input_footer_heading_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_footer_heading_font_family">
                      <?php if (isset($select_footer_heading_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_footer_heading_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_footer_heading_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_footer_heading_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_footer_heading_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_footer_heading_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_footer_heading_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_footer_heading_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_footer_heading_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_footer_heading_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_footer_heading_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_footer_heading_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_footer_heading_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_footer_heading_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_footer_heading_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                    <select name="select_footer_heading_font_weight">
                      <?php if (isset($select_footer_heading_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_footer_heading_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_footer_heading_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_footer_heading_font_style">
                      <?php if (isset($select_footer_heading_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_footer_heading_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_footer_heading_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_footer_heading_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_footer_heading_font_transform">
                      <?php if (isset($select_footer_heading_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_footer_heading_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_footer_heading_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_footer_heading_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_footer_heading_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_footer_heading_font_google) && $radio_footer_heading_font_google == '1'){ ?>
                      <input type="radio"  name="radio_footer_heading_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_heading_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_heading_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_heading_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_footer_heading_font_google" type="text" size="100" name="input_footer_heading_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_footer_heading_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_footer_heading_font_shadow) && $radio_footer_heading_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_footer_heading_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_heading_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_heading_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_heading_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_footer_heading_font_shadow" type="text" size="100" name="input_footer_heading_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_footer_heading_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      <!-- Heading Font // End -->
      
      <!-- About Us // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_about; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_footer_about_font_options) && $radio_footer_about_font_options == '1'){ ?>
                    <input type="radio"  name="radio_footer_about_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_footer_about_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_footer_about_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_footer_about_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                  <td>
                    <input id="input_footer_about_font_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_footer_about_font_size" value="<?php echo $input_footer_about_font_size; ?>"> <?php echo $text_px; ?>
                  </td>
                </tr>
                <tr><td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_footer_about_font_color; ?>"></div>
                    <input id="input_footer_about_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_about_font_color" value="<?php echo $input_footer_about_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_hyperlink_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_footer_about_hyperlink_font_color; ?>"></div>
                    <input id="input_footer_about_hyperlink_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_about_hyperlink_font_color" value="<?php echo $input_footer_about_hyperlink_font_color; ?>">
                  </td>
                  <td></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_font_color_hover; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_footer_about_font_color_hover; ?>"></div>
                    <input id="input_footer_about_font_color_hover" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_about_font_color_hover" value="<?php echo $input_footer_about_font_color_hover; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_footer_about_font_family">
                      <?php if (isset($select_footer_about_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_footer_about_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_footer_about_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_footer_about_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_footer_about_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_footer_about_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_footer_about_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_footer_about_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_footer_about_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_footer_about_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_footer_about_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_footer_about_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_footer_about_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_footer_about_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_footer_about_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                    <select name="select_footer_about_font_weight">
                      <?php if (isset($select_footer_about_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_footer_about_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_footer_about_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_footer_about_font_style">
                      <?php if (isset($select_footer_about_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_footer_about_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_footer_about_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_footer_about_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_footer_about_font_transform">
                      <?php if (isset($select_footer_about_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_footer_about_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_footer_about_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_footer_about_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_footer_about_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_footer_about_font_google) && $radio_footer_about_font_google == '1'){ ?>
                      <input type="radio"  name="radio_footer_about_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_about_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_about_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_about_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_footer_about_font_google" type="text" size="100" name="input_footer_about_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_footer_about_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_footer_about_font_shadow) && $radio_footer_about_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_footer_about_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_about_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_about_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_about_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_footer_about_font_shadow" type="text" size="100" name="input_footer_about_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_footer_about_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      <!-- About Us // End -->
        
      <!-- Customer Service & Extras // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_service; ?> & <?php echo $heading_footer_extra; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_footer_cust_extra_font_options) && $radio_footer_cust_extra_font_options == '1'){ ?>
                    <input type="radio"  name="radio_footer_cust_extra_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_footer_cust_extra_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_footer_cust_extra_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_footer_cust_extra_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                  <td>
                    <input id="input_footer_cust_extra_font_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_footer_cust_extra_font_size" value="<?php echo $input_footer_cust_extra_font_size; ?>"> <?php echo $text_px; ?>
                  </td>
                </tr>
                <tr><td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_footer_cust_extra_font_color; ?>"></div>
                    <input id="input_footer_cust_extra_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_cust_extra_font_color" value="<?php echo $input_footer_cust_extra_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_font_color_hover; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_footer_cust_extra_font_color_hover; ?>"></div>
                    <input id="input_footer_cust_extra_font_color_hover" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_cust_extra_font_color_hover" value="<?php echo $input_footer_cust_extra_font_color_hover; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_footer_cust_extra_font_family">
                      <?php if (isset($select_footer_cust_extra_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_footer_cust_extra_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_footer_cust_extra_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_footer_cust_extra_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_footer_cust_extra_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_footer_cust_extra_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_footer_cust_extra_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_footer_cust_extra_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_footer_cust_extra_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_footer_cust_extra_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_footer_cust_extra_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_footer_cust_extra_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_footer_cust_extra_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_footer_cust_extra_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_footer_cust_extra_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                    <select name="select_footer_cust_extra_font_weight">
                      <?php if (isset($select_footer_cust_extra_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_footer_cust_extra_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_footer_cust_extra_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_footer_cust_extra_font_style">
                      <?php if (isset($select_footer_cust_extra_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_footer_cust_extra_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_footer_cust_extra_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_footer_cust_extra_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_footer_cust_extra_font_transform">
                      <?php if (isset($select_footer_cust_extra_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_footer_cust_extra_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_footer_cust_extra_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_footer_cust_extra_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_footer_cust_extra_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_footer_cust_extra_font_google) && $radio_footer_cust_extra_font_google == '1'){ ?>
                      <input type="radio"  name="radio_footer_cust_extra_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_cust_extra_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_cust_extra_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_cust_extra_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_footer_cust_extra_font_google" type="text" size="100" name="input_footer_cust_extra_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_footer_cust_extra_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_footer_cust_extra_font_shadow) && $radio_footer_cust_extra_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_footer_cust_extra_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_cust_extra_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_cust_extra_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_cust_extra_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_footer_cust_extra_font_shadow" type="text" size="100" name="input_footer_cust_extra_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_footer_cust_extra_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      <!-- Customer Service & Extras // End -->
      
      <!-- Contact Us // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_contact; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_footer_contact_us_font_options) && $radio_footer_contact_us_font_options == '1'){ ?>
                    <input type="radio"  name="radio_footer_contact_us_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_footer_contact_us_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_footer_contact_us_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_footer_contact_us_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                  <td>
                    <input id="input_footer_contact_us_font_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_footer_contact_us_font_size" value="<?php echo $input_footer_contact_us_font_size; ?>"> <?php echo $text_px; ?>
                  </td>
                </tr>
                <tr><td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_footer_contact_us_font_color; ?>"></div>
                    <input id="input_footer_contact_us_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_contact_us_font_color" value="<?php echo $input_footer_contact_us_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_hyperlink_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_footer_contact_us_hyperlink_font_color; ?>"></div>
                    <input id="input_footer_contact_us_hyperlink_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_contact_us_hyperlink_font_color" value="<?php echo $input_footer_contact_us_hyperlink_font_color; ?>">
                  </td>
                  <td></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_font_color_hover; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_footer_contact_us_font_color_hover; ?>"></div>
                    <input id="input_footer_contact_us_font_color_hover" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_contact_us_font_color_hover" value="<?php echo $input_footer_contact_us_font_color_hover; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_footer_contact_us_font_family">
                      <?php if (isset($select_footer_contact_us_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_footer_contact_us_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_footer_contact_us_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_footer_contact_us_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_footer_contact_us_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_footer_contact_us_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_footer_contact_us_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_footer_contact_us_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_footer_contact_us_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_footer_contact_us_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_footer_contact_us_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_footer_contact_us_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_footer_contact_us_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_footer_contact_us_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_footer_contact_us_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                    <select name="select_footer_contact_us_font_weight">
                      <?php if (isset($select_footer_contact_us_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_footer_contact_us_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_footer_contact_us_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_footer_contact_us_font_style">
                      <?php if (isset($select_footer_contact_us_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_footer_contact_us_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_footer_contact_us_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_footer_contact_us_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_footer_contact_us_font_transform">
                      <?php if (isset($select_footer_contact_us_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_footer_contact_us_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_footer_contact_us_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_footer_contact_us_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_footer_contact_us_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_footer_contact_us_font_google) && $radio_footer_contact_us_font_google == '1'){ ?>
                      <input type="radio"  name="radio_footer_contact_us_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_contact_us_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_contact_us_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_contact_us_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_footer_contact_us_font_google" type="text" size="100" name="input_footer_contact_us_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_footer_contact_us_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_footer_contact_us_font_shadow) && $radio_footer_contact_us_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_footer_contact_us_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_contact_us_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_contact_us_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_contact_us_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_footer_contact_us_font_shadow" type="text" size="100" name="input_footer_contact_us_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_footer_contact_us_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      <!-- Contact Us // End -->
      
      <!-- Information // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_info; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_footer_infor_font_options) && $radio_footer_infor_font_options == '1'){ ?>
                    <input type="radio"  name="radio_footer_infor_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_footer_infor_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_footer_infor_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_footer_infor_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                  <td>
                    <input id="input_footer_infor_font_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_footer_infor_font_size" value="<?php echo $input_footer_infor_font_size; ?>"> <?php echo $text_px; ?>
                  </td>
                </tr>
                <tr><td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_footer_infor_font_color; ?>"></div>
                    <input id="input_footer_infor_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_infor_font_color" value="<?php echo $input_footer_infor_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_font_color_hover; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_footer_infor_font_color_hover; ?>"></div>
                    <input id="input_footer_infor_font_color_hover" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_infor_font_color_hover" value="<?php echo $input_footer_infor_font_color_hover; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_footer_separator_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_footer_infor_separator_color; ?>"></div>
                    <input id="input_footer_infor_separator_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_infor_separator_color" value="<?php echo $input_footer_infor_separator_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_footer_infor_font_family">
                      <?php if (isset($select_footer_infor_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_footer_infor_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_footer_infor_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_footer_infor_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_footer_infor_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_footer_infor_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_footer_infor_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_footer_infor_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_footer_infor_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_footer_infor_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_footer_infor_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_footer_infor_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_footer_infor_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_footer_infor_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_footer_infor_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                    <select name="select_footer_infor_font_weight">
                      <?php if (isset($select_footer_infor_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_footer_infor_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_footer_infor_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_footer_infor_font_style">
                      <?php if (isset($select_footer_infor_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_footer_infor_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_footer_infor_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_footer_infor_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_footer_infor_font_transform">
                      <?php if (isset($select_footer_infor_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_footer_infor_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_footer_infor_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_footer_infor_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_footer_infor_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_footer_infor_font_google) && $radio_footer_infor_font_google == '1'){ ?>
                      <input type="radio"  name="radio_footer_infor_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_infor_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_infor_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_infor_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_footer_infor_font_google" type="text" size="100" name="input_footer_infor_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_footer_infor_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_footer_infor_font_shadow) && $radio_footer_infor_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_footer_infor_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_infor_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_infor_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_infor_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_footer_infor_font_shadow" type="text" size="100" name="input_footer_infor_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_footer_infor_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      <!-- Information // End -->
      
      <!-- Powered By // Start -->
        <div class="box"><div class="box-heading"><?php echo $heading_footer_powered; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_footer_powered_font_options) && $radio_footer_powered_font_options == '1'){ ?>
                    <input type="radio"  name="radio_footer_powered_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_footer_powered_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_footer_powered_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_footer_powered_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_font_size; ?></td>
                  <td>
                    <input id="input_footer_powered_font_size" style="text-align: center" type="text" size="2" maxlength="2"  name="input_footer_powered_font_size" value="<?php echo $input_footer_powered_font_size; ?>"> <?php echo $text_px; ?>
                  </td>
                </tr>
                <tr><td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_footer_powered_font_color; ?>"></div>
                    <input id="input_footer_powered_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_powered_font_color" value="<?php echo $input_footer_powered_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_hyperlink_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_footer_powered_hyperlink_font_color; ?>"></div>
                    <input id="input_footer_powered_hyperlink_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_powered_hyperlink_font_color" value="<?php echo $input_footer_powered_hyperlink_font_color; ?>">
                  </td>
                  <td></td>
                </tr>
              </table>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_font_style_font_color_hover; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_footer_powered_font_color_hover; ?>"></div>
                    <input id="input_footer_powered_font_color_hover" style="text-align: center" type="text" size="6" maxlength="6"  name="input_footer_powered_font_color_hover" value="<?php echo $input_footer_powered_font_color_hover; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_footer_powered_font_family">
                      <?php if (isset($select_footer_powered_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_footer_powered_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_footer_powered_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_footer_powered_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_footer_powered_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_footer_powered_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_footer_powered_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_footer_powered_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_footer_powered_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_footer_powered_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_footer_powered_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_footer_powered_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_footer_powered_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_footer_powered_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_footer_powered_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                    <select name="select_footer_powered_font_weight">
                      <?php if (isset($select_footer_powered_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_footer_powered_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_footer_powered_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_footer_powered_font_style">
                      <?php if (isset($select_footer_powered_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_footer_powered_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_footer_powered_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_footer_powered_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_footer_powered_font_transform">
                      <?php if (isset($select_footer_powered_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_footer_powered_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_footer_powered_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_footer_powered_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_footer_powered_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_footer_powered_font_google) && $radio_footer_powered_font_google == '1'){ ?>
                      <input type="radio"  name="radio_footer_powered_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_powered_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_powered_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_powered_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_footer_powered_font_google" type="text" size="100" name="input_footer_powered_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_footer_powered_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_footer_powered_font_shadow) && $radio_footer_powered_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_footer_powered_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_powered_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_footer_powered_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_footer_powered_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_footer_powered_font_shadow" type="text" size="100" name="input_footer_powered_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_footer_powered_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      <!-- Powered By // End -->
    </div>
    <!-- Footer Font Size & Font Color // End -->
  </div>
<!-- Tab11 // End // Footer -->