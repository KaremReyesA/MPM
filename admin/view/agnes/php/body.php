<!-- Tab7 // Start // Body -->
  <div id="tab7">
    <table class="red">
      <tr><td class="h3"><?php echo $h3_body_status; ?></td>
          <td>
            <select name="select_body_status">
              <?php if ($select_body_status) { ?>
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
    <!-- Body Color & Background // Start -->
      <div class="box"><div class="box-heading"><?php echo $heading_body_color_bg; ?></div>
        <div class="box-content">
          <table class="yellow">
            <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
              <td>
                <?php if(isset($radio_body_options) && $radio_body_options == '1'){ ?>
                  <input type="radio"  name="radio_body_options" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_body_options" value="0"> <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_body_options" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_body_options" value="0" CHECKED> <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
          </table>
            <div class="splitter"></div>
          <div class="left-margin">
            <table class="blue">
              <tr><td class="h3"><?php echo $h3_body_color_transparent; ?></td>
                <td>
                  <?php if(isset($radio_body_color_transparent) && $radio_body_color_transparent == 'transparent'){ ?>
                    <input type="radio"  name="radio_body_color_transparent" value="transparent" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_body_color_transparent" value="0"> <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_body_color_transparent" value="transparent" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_body_color_transparent" value="0" CHECKED> <?php echo $text_no; ?>
                  <?php } ?>
                </td>
                <td rowspan="3" id="body">&nbsp;</td>
              </tr>
              <tr><td class="h3"><?php echo $h3_body_color; ?></td>
                <td><div class="color" style="background-color: #<?php echo $input_body_color; ?>"></div><input id="input_body_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_body_color" value="<?php echo $input_body_color; ?>"></td>
              </tr>
              <tr><td class="h3"><?php echo $h3_body_color_slightly_transparent; ?></td>
                <td>
                  <select name="select_body_color_slightly_transparent">
                    <?php if (isset($select_body_color_slightly_transparent)) {$selected = "selected";?>
                      <option value="none" <?php if($select_body_color_slightly_transparent=='none'){echo $selected;} ?>>None</option>
                      <option value="b_50" <?php if($select_body_color_slightly_transparent=='b_50'){echo $selected;} ?>>Black 50%</option>
                      <option value="b_40" <?php if($select_body_color_slightly_transparent=='b_40'){echo $selected;} ?>>Black 40%</option>
                      <option value="b_30" <?php if($select_body_color_slightly_transparent=='b_30'){echo $selected;} ?>>Black 30%</option>
                      <option value="b_20" <?php if($select_body_color_slightly_transparent=='b_20'){echo $selected;} ?>>Black 20%</option>
                      <option value="b_10" <?php if($select_body_color_slightly_transparent=='b_10'){echo $selected;} ?>>Black 10%</option>
                      <option value="w_50" <?php if($select_body_color_slightly_transparent=='w_50'){echo $selected;} ?>>White 50%</option>
                      <option value="w_40" <?php if($select_body_color_slightly_transparent=='w_40'){echo $selected;} ?>>White 40%</option>
                      <option value="w_30" <?php if($select_body_color_slightly_transparent=='w_30'){echo $selected;} ?>>White 30%</option>
                      <option value="w_20" <?php if($select_body_color_slightly_transparent=='w_20'){echo $selected;} ?>>White 20%</option>
                      <option value="w_10" <?php if($select_body_color_slightly_transparent=='w_10'){echo $selected;} ?>>White 10%</option>
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
              <tr><td class="h3"><?php echo $h3_body_border; ?></td>
                <td>
                  <?php if(isset($radio_body_border) && $radio_body_border == '1'){ ?>
                    <input type="radio"  name="radio_body_border" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_body_border" value="0"> <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_body_border" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_body_border" value="0" CHECKED> <?php echo $text_off; ?>
                  <?php } ?>
                </td>
                <td rowspan="6" id="body_border">&nbsp;</td>
              </tr>
              <tr><td class="h3"><?php echo $h3_body_border_color; ?></td>
                <td><div class="color" style="background-color: #<?php echo $input_body_border_color; ?>"></div><input id="input_body_border_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_body_border_color" value="<?php echo $input_body_border_color; ?>"></td>
              </tr>
              <tr>
                <td class="h3"><?php echo $text_border; ?> <?php echo $text_top; ?></td>
                <td>
                  <input id="input_body_border_top" style="text-align: center" type="text" size="2" maxlength="2"  name="input_body_border_top" value="<?php echo $input_body_border_top; ?>"> <?php echo $text_px; ?>
                </td>
              </tr>
              <tr>
                <td class="h3"><?php echo $text_border; ?> <?php echo $text_right; ?></td>
                <td>
                  <input id="input_body_border_right" style="text-align: center" type="text" size="2" maxlength="2"  name="input_body_border_right" value="<?php echo $input_body_border_right; ?>"> <?php echo $text_px; ?>
                </td>
              </tr>
              <tr>
                <td class="h3"><?php echo $text_border; ?> <?php echo $text_bottom; ?></td>
                <td>
                  <input id="input_body_border_bottom" style="text-align: center" type="text" size="2" maxlength="2"  name="input_body_border_bottom" value="<?php echo $input_body_border_bottom; ?>"> <?php echo $text_px; ?>
                </td>
              </tr>
              <tr>
                <td class="h3"><?php echo $text_border; ?> <?php echo $text_left; ?></td>
                <td>
                  <input id="input_body_border_left" style="text-align: center" type="text" size="2" maxlength="2"  name="input_body_border_left" value="<?php echo $input_body_border_left; ?>"> <?php echo $text_px; ?>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    <!-- Body Color & Background // End -->
  </div>
<!-- Tab7 // End // Body -->