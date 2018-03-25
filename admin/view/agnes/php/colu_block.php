<!-- Tab8 // Start // Column & Block -->
  <div id="tab8">
    <table class="red">
      <tr><td class="h3"><?php echo $h3_column_status; ?></td>
          <td>
            <select name="select_column_block_status">
              <?php if ($select_column_block_status) { ?>
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
      
    <!-- Header // Column & Block Tabs // Start -->
      <div class="box">
        <div class="box-content">
          <div id="column-htabs" class="horizontal-tabs">
            <a href="#column"><?php echo $heading_column; ?></a>
            <a href="#block"><?php echo $tab_block_settings; ?></a>
          </div>
        </div>
      </div>
    <!-- Header // Column & Block Tabs // End -->
    
    <!-- Column Settings // Start -->
      <div id="column">
        <div class="box"><div class="box-heading"><?php echo $heading_column; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_column_options) && $radio_column_options == '1'){ ?>
                    <input type="radio"  name="radio_column_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_column_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_column_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_column_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_left_column_size; ?></td>
                  <td><input id="input_left_column_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_left_column_size" value="<?php echo $input_left_column_size; ?>"><?php echo $text_px; ?></td>
                  <td id="column_left"></td>
                </tr>
                <tr><td colspan="3"><span class="note"><?php echo $note_left_right_size; ?></span></td></tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_center_column_margin_left; ?></td>
                  <td><input id="input_center_column_left" style="text-align: center" type="text" size="6" maxlength="6"  name="input_center_column_left" value="<?php echo $input_center_column_left; ?>"><?php echo $text_px; ?></td>
                  <td rowspan="2" id="column_center"></td>
                </tr>
                <tr>
                  <td class="h3"><?php echo $h3_center_column_margin_right; ?></td>
                  <td><input id="input_center_column_right" style="text-align: center" type="text" size="6" maxlength="6"  name="input_center_column_right" value="<?php echo $input_center_column_right; ?>"><?php echo $text_px; ?></td>
                </tr>
                <tr><td colspan="3"><span class="note"><?php echo $note_center_column_margin; ?></span></td></tr>
              </table>
              <table class="blue">
              <tr><td class="h3"><?php echo $h3_right_column_size; ?></td>
                <td><input id="input_right_column_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_right_column_size" value="<?php echo $input_right_column_size; ?>"><?php echo $text_px; ?></td>
                <td id="column_right"></td>
              </tr>
              <tr><td colspan="3"><span class="note"><?php echo $note_left_right_size; ?></span></td></tr>
            </table>
            </div>
          </div>
        </div>
      </div>
    <!-- Column Settings // End -->

    <!-- Block Settings // Start -->
      <div id="block">
        <!-- Left Block // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_left_block; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                    <td>
                      <?php if(isset($radio_left_block_options) && $radio_left_block_options == '1'){ ?>
                        <input type="radio"  name="radio_left_block_options" value="1" CHECKED > <?php echo $text_on; ?>
                        <input type="radio" name="radio_left_block_options" value="0" > <?php echo $text_off; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_left_block_options" value="1" > <?php echo $text_on; ?>
                        <input type="radio" name="radio_left_block_options" value="0" CHECKED > <?php echo $text_off; ?>
                      <?php } ?>
                    </td>
                  </tr>
              </table>
                <div class="splitter"></div>
              <div class="left-margin">
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_left_block_color_transparent; ?></td>
                  <td>
                    <?php if(isset($radio_left_block_transparent) && $radio_left_block_transparent == 'transparent'){ ?>
                      <input type="radio"  name="radio_left_block_transparent" value="transparent" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_left_block_transparent" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_left_block_transparent" value="transparent" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_left_block_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td rowspan="3" id="left_block">&nbsp;</td>
                </tr>
                <tr><td class="h3"><?php echo $h3_left_block_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_left_block_color; ?>"></div><input id="input_left_block_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_left_block_color" value="<?php echo $input_left_block_color; ?>"></td>
                </tr>
                <tr><td class="h3"><?php echo $h3_left_block_slightly_transparent; ?></td>
                  <td>
                    <select name="select_left_block_slightly_transparent">
                      <?php if (isset($select_left_block_slightly_transparent)) {$selected = "selected";?>
                        <option value="none" <?php if($select_left_block_slightly_transparent=='none'){echo $selected;} ?>>None</option>
                        <option value="b_50" <?php if($select_left_block_slightly_transparent=='b_50'){echo $selected;} ?>>Black 50%</option>
                        <option value="b_40" <?php if($select_left_block_slightly_transparent=='b_40'){echo $selected;} ?>>Black 40%</option>
                        <option value="b_30" <?php if($select_left_block_slightly_transparent=='b_30'){echo $selected;} ?>>Black 30%</option>
                        <option value="b_20" <?php if($select_left_block_slightly_transparent=='b_20'){echo $selected;} ?>>Black 20%</option>
                        <option value="b_10" <?php if($select_left_block_slightly_transparent=='b_10'){echo $selected;} ?>>Black 10%</option>
                        <option value="w_50" <?php if($select_left_block_slightly_transparent=='w_50'){echo $selected;} ?>>White 50%</option>
                        <option value="w_40" <?php if($select_left_block_slightly_transparent=='w_40'){echo $selected;} ?>>White 40%</option>
                        <option value="w_30" <?php if($select_left_block_slightly_transparent=='w_30'){echo $selected;} ?>>White 30%</option>
                        <option value="w_20" <?php if($select_left_block_slightly_transparent=='w_20'){echo $selected;} ?>>White 20%</option>
                        <option value="w_10" <?php if($select_left_block_slightly_transparent=='w_10'){echo $selected;} ?>>White 10%</option>
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
                <div class="splitter"></div>
              <table class="blue">
                <tr><td class="h3"><?php echo $h3_left_block_border; ?></td>
                  <td>
                    <?php if(isset($radio_left_block_border) && $radio_left_block_border == '1'){ ?>
                      <input type="radio"  name="radio_left_block_border" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_left_block_border" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_left_block_border" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_left_block_border" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                  <td rowspan="2" id="left_block_border">&nbsp;</td>
                </tr>
                <tr><td class="h3"><?php echo $h3_left_block_border_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_left_block_border_color; ?>"></div><input id="input_left_block_border_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_left_block_border_color" value="<?php echo $input_left_block_border_color; ?>"></td>
                </tr>
              </table>
              </div>
            </div>
          </div>
        <!-- Left Block // End -->

        <!-- Middle Block // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_middle_block; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                    <td>
                      <?php if(isset($radio_middle_block_options) && $radio_middle_block_options == '1'){ ?>
                        <input type="radio"  name="radio_middle_block_options" value="1" CHECKED > <?php echo $text_on; ?>
                        <input type="radio" name="radio_middle_block_options" value="0" > <?php echo $text_off; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_middle_block_options" value="1" > <?php echo $text_on; ?>
                        <input type="radio" name="radio_middle_block_options" value="0" CHECKED > <?php echo $text_off; ?>
                      <?php } ?>
                    </td>
                  </tr>
              </table>
                <div class="splitter"></div>
              <div class="left-margin">
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_middle_block_color_transparent; ?></td>
                    <td>
                      <?php if(isset($radio_middle_block_transparent) && $radio_middle_block_transparent == 'transparent'){ ?>
                        <input type="radio"  name="radio_middle_block_transparent" value="transparent" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_middle_block_transparent" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_middle_block_transparent" value="transparent" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_middle_block_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td rowspan="3" id="middle_block">&nbsp;</td>
                  </tr>
                  <tr><td class="h3"><?php echo $h3_middle_block_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_middle_block_color; ?>"></div><input id="input_middle_block_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_middle_block_color" value="<?php echo $input_middle_block_color; ?>"></td>
                  </tr>
                  <tr><td class="h3"><?php echo $h3_middle_block_slightly_transparent; ?></td>
                    <td>
                      <select name="select_middle_block_slightly_transparent">
                        <?php if (isset($select_middle_block_slightly_transparent)) {$selected = "selected";?>
                          <option value="none" <?php if($select_middle_block_slightly_transparent=='none'){echo $selected;} ?>>None</option>
                          <option value="b_50" <?php if($select_middle_block_slightly_transparent=='b_50'){echo $selected;} ?>>Black 50%</option>
                          <option value="b_40" <?php if($select_middle_block_slightly_transparent=='b_40'){echo $selected;} ?>>Black 40%</option>
                          <option value="b_30" <?php if($select_middle_block_slightly_transparent=='b_30'){echo $selected;} ?>>Black 30%</option>
                          <option value="b_20" <?php if($select_middle_block_slightly_transparent=='b_20'){echo $selected;} ?>>Black 20%</option>
                          <option value="b_10" <?php if($select_middle_block_slightly_transparent=='b_10'){echo $selected;} ?>>Black 10%</option>
                          <option value="w_50" <?php if($select_middle_block_slightly_transparent=='w_50'){echo $selected;} ?>>White 50%</option>
                          <option value="w_40" <?php if($select_middle_block_slightly_transparent=='w_40'){echo $selected;} ?>>White 40%</option>
                          <option value="w_30" <?php if($select_middle_block_slightly_transparent=='w_30'){echo $selected;} ?>>White 30%</option>
                          <option value="w_20" <?php if($select_middle_block_slightly_transparent=='w_20'){echo $selected;} ?>>White 20%</option>
                          <option value="w_10" <?php if($select_middle_block_slightly_transparent=='w_10'){echo $selected;} ?>>White 10%</option>
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
                  <div class="splitter"></div>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_middle_block_border; ?></td>
                    <td>
                      <?php if(isset($radio_middle_block_border) && $radio_middle_block_border == '1'){ ?>
                        <input type="radio"  name="radio_middle_block_border" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_middle_block_border" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_middle_block_border" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_middle_block_border" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td rowspan="2" id="middle_block_border">&nbsp;</td>
                  </tr>
                  <tr><td class="h3"><?php echo $h3_middle_block_border_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_middle_block_border_color; ?>"></div><input id="input_middle_block_border_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_middle_block_border_color" value="<?php echo $input_middle_block_border_color; ?>"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Middle Block // End -->

        <!-- Right Block // Start -->
          <div class="box"><div class="box-heading"><?php echo $heading_right_block; ?></div>
            <div class="box-content">
              <table class="yellow">
                <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                    <td>
                      <?php if(isset($radio_right_block_options) && $radio_right_block_options == '1'){ ?>
                        <input type="radio"  name="radio_right_block_options" value="1" CHECKED > <?php echo $text_on; ?>
                        <input type="radio" name="radio_right_block_options" value="0" > <?php echo $text_off; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_right_block_options" value="1" > <?php echo $text_on; ?>
                        <input type="radio" name="radio_right_block_options" value="0" CHECKED > <?php echo $text_off; ?>
                      <?php } ?>
                    </td>
                  </tr>
              </table>
                <div class="splitter"></div>
              <div class="left-margin">
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_right_block_color_transparent; ?></td>
                    <td>
                      <?php if(isset($radio_right_block_transparent) && $radio_right_block_transparent == 'transparent'){ ?>
                        <input type="radio"  name="radio_right_block_transparent" value="transparent" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_right_block_transparent" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_right_block_transparent" value="transparent" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_right_block_transparent" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td rowspan="3" id="right_block">&nbsp;</td>
                  </tr>
                  <tr><td class="h3"><?php echo $h3_right_block_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_right_block_color; ?>"></div><input id="input_right_block_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_right_block_color" value="<?php echo $input_right_block_color; ?>"></td>
                  </tr>
                  <tr><td class="h3"><?php echo $h3_right_block_slightly_transparent; ?></td>
                    <td>
                      <select name="select_right_block_slightly_transparent">
                        <?php if (isset($select_right_block_slightly_transparent)) {$selected = "selected";?>
                          <option value="none" <?php if($select_right_block_slightly_transparent=='none'){echo $selected;} ?>>None</option>
                          <option value="b_50" <?php if($select_right_block_slightly_transparent=='b_50'){echo $selected;} ?>>Black 50%</option>
                          <option value="b_40" <?php if($select_right_block_slightly_transparent=='b_40'){echo $selected;} ?>>Black 40%</option>
                          <option value="b_30" <?php if($select_right_block_slightly_transparent=='b_30'){echo $selected;} ?>>Black 30%</option>
                          <option value="b_20" <?php if($select_right_block_slightly_transparent=='b_20'){echo $selected;} ?>>Black 20%</option>
                          <option value="b_10" <?php if($select_right_block_slightly_transparent=='b_10'){echo $selected;} ?>>Black 10%</option>
                          <option value="w_50" <?php if($select_right_block_slightly_transparent=='w_50'){echo $selected;} ?>>White 50%</option>
                          <option value="w_40" <?php if($select_right_block_slightly_transparent=='w_40'){echo $selected;} ?>>White 40%</option>
                          <option value="w_30" <?php if($select_right_block_slightly_transparent=='w_30'){echo $selected;} ?>>White 30%</option>
                          <option value="w_20" <?php if($select_right_block_slightly_transparent=='w_20'){echo $selected;} ?>>White 20%</option>
                          <option value="w_10" <?php if($select_right_block_slightly_transparent=='w_10'){echo $selected;} ?>>White 10%</option>
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
                  <div class="splitter"></div>
                <table class="blue">
                  <tr><td class="h3"><?php echo $h3_right_blockn_border; ?></td>
                    <td>
                      <?php if(isset($radio_right_block_border) && $radio_right_block_border == '1'){ ?>
                        <input type="radio"  name="radio_right_block_border" value="1" CHECKED > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_right_block_border" value="0" > <?php echo $text_no; ?>
                      <?php } else { ?>
                        <input type="radio"  name="radio_right_block_border" value="1" > <?php echo $text_yes; ?>
                        <input type="radio" name="radio_right_block_border" value="0" CHECKED > <?php echo $text_no; ?>
                      <?php } ?>
                    </td>
                    <td rowspan="2" id="right_block_border">&nbsp;</td>
                  </tr>
                  <tr><td class="h3"><?php echo $h3_right_block_border_color; ?></td>
                    <td><div class="color" style="background-color: #<?php echo $input_right_block_border_color; ?>"></div><input id="input_right_block_border_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_right_block_border_color" value="<?php echo $input_right_block_border_color; ?>"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <!-- Right Block // End -->
      </div>
    <!-- Block Settings // End -->
  </div>
<!-- Tab8 // End // Column & Block -->