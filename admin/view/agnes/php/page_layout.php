<!-- Tab3 // Start // Page layout -->
  <div id="tab3">
    <table class="red">
      <tr><td class="h3"><?php echo $h3_layout_status; ?></td>
          <td>
            <select name="select_layout_status">
              <?php if ($select_layout_status) { ?>
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
    
    <!-- Page layout // Start -->
      <div class="box"><div class="box-heading"><?php echo $heading_page_layout; ?></div>
        <div class="box-content">
          <table class="yellow">
            <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
              <td>
                <?php if(isset($radio_page_layout_options) && $radio_page_layout_options == '1'){ ?>
                  <input type="radio"  name="radio_page_layout_options" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_page_layout_options" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_page_layout_options" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_page_layout_options" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
          </table>
          <div class="left-margin">
            <table class="blue">
              <tr><td class="h3"><?php echo $h3_responsive; ?></td>
                 <td>
                  <?php if(isset($radio_responsive_options) && $radio_responsive_options == '1'){ ?>
                    <input type="radio"  name="radio_responsive_options" value="1" CHECKED > <?php echo $text_on; ?>
                    <input type="radio" name="radio_responsive_options" value="0" > <?php echo $text_off; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_responsive_options" value="1" > <?php echo $text_on; ?>
                    <input type="radio" name="radio_responsive_options" value="0" CHECKED > <?php echo $text_off; ?>
                  <?php } ?>
                </td>
              </tr>
						</table>
            <table class="blue">
              <tr>
                <td rowspan="2" class="h3"><?php echo $h3_page_layout; ?></td>
                <td id="standart"></td>
                <td id="midle"></td>
                <td id="full"></td>
                <td id="custom"></td>
              </tr>
              <tr>
                <?php if (isset($radio_layout_page)) {$checked = "CHECKED"; ?>
                  <td class="center"><input type="radio" name="radio_layout_page" value="standart" <?php if($radio_layout_page=='standart'){echo $checked;} ?>></td>
                  <td class="center"><input type="radio" name="radio_layout_page" value="midle" <?php if($radio_layout_page=='midle'){echo $checked;} ?>></td>
                  <td class="center"><input type="radio" name="radio_layout_page" value="full" <?php if($radio_layout_page=='full'){echo $checked;} ?>></td>
                  <td class="center"><input type="radio" name="radio_layout_page" value="custom" <?php if($radio_layout_page=='custom'){echo $checked;} ?>></td>
                <?php } else { ?>
                  <td align="center"><input type="radio" name="radio_layout_page" value="standart" CHECKED></td>
                  <td align="center"><input type="radio" name="radio_layout_page" value="midle"></td>
                  <td align="center"><input type="radio" name="radio_layout_page" value="full"></td>
                  <td align="center"><input type="radio" name="radio_layout_page" value="custom"></td>
                <?php } ?>
              </tr>
            </table>
            <table class="blue">
            <tr><td class="h3"><?php echo $h3_custom_layout; ?></td>
              <td><input id="input_custom_layout" style="text-align: center" type="text" size="6" maxlength="6"  name="input_custom_layout" value="<?php echo $input_custom_layout; ?>"> <?php echo $text_px; ?></td>
            </tr>
          </table>
          </div>
        </div>
      </div>
    <!-- Page layout // End -->

    <!-- Page layout margin // Start -->
      <div class="box"><div class="box-heading"><?php echo $heading_page_layout_margin; ?></div>
        <div class="box-content">
          <table class="yellow">
            <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
              <td>
                <?php if(isset($radio_page_layout_margin_options) && $radio_page_layout_margin_options == '1'){ ?>
                  <input type="radio"  name="radio_page_layout_margin_options" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_page_layout_margin_options" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_page_layout_margin_options" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_page_layout_margin_options" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
          </table>
          <div class="left-margin">
            <table class="blue">
              <tr><td class="h3"><?php echo $h3_page_layout_margin_top; ?></td>
                <td><input id="input_layout_margin_top" style="text-align: center" type="text" size="6" maxlength="6"  name="input_layout_margin_top" value="<?php echo $input_layout_margin_top; ?>"><?php echo $text_px; ?></td>
                <td rowspan="2" id="margin_top_bottom"></td>
              </tr>
              <tr><td class="h3"><?php echo $h3_page_layout_margin_bottom; ?></td>
                <td><input id="input_layout_margin_bottom" style="text-align: center" type="text" size="6" maxlength="6"  name="input_layout_margin_bottom" value="<?php echo $input_layout_margin_bottom; ?>"><?php echo $text_px; ?></td>
              </tr>
            </table>
            <table class="blue">
            <tr><td class="h3"><?php echo $h3_page_layout_margin_left; ?></td>
              <td><input id="input_layout_margin_left" style="text-align: center" type="text" size="6" maxlength="6"  name="input_layout_margin_left" value="<?php echo $input_layout_margin_left; ?>"><?php echo $text_px; ?></td>
              <td rowspan="2" id="margin_left_right"></td>
            </tr>
            <tr><td class="h3"><?php echo $h3_page_layout_margin_right; ?></td>
              <td><input id="input_layout_margin_right" style="text-align: center" type="text" size="6" maxlength="6"  name="input_layout_margin_right" value="<?php echo $input_layout_margin_right; ?>"><?php echo $text_px; ?></td>
            </tr>
          </table>
          </div>
        </div>
      </div>
    <!-- Page layout margin // End -->

    <!-- Page Layout Shadow // Start -->
      <div class="box"><div class="box-heading"><?php echo $heading_page_layout_shadow; ?></div>
        <div class="box-content">
          <table class="yellow">
            <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
              <td>
                <?php if(isset($select_page_layout_shadow_options) && $select_page_layout_shadow_options == '1'){ ?>
                  <input type="radio"  name="select_page_layout_shadow_options" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="select_page_layout_shadow_options" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="select_page_layout_shadow_options" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="select_page_layout_shadow_options" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
          </table>
          <div class="left-margin">
            <table class="blue">
              <tr><td class="h3"><?php echo $h3_page_layout_shadow_size; ?></td>
                <td><input id="input_layout_shadow_size" style="text-align: center" type="text" size="6" maxlength="6" name="input_layout_shadow_size" value="<?php echo $input_layout_shadow_size; ?>"><?php echo $text_px; ?></td>
                <td id="shadow"></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    <!-- Page Layout Shadow // End -->
  </div>
<!-- Tab3 // End // Page layout -->