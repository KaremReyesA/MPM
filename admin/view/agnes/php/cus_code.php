<!-- Tab16 // Start // Custom Code -->
  <div id="tab16">
    <table class="red">
      <tr><td class="h3"><?php echo $h3_custom_code_status; ?></td>
          <td>
            <select name="select_custom_code_status">
              <?php if ($select_custom_code_status) { ?>
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
    <!-- Custom Code Tabs // Start -->
    <div class="box">
      <div class="box-content">
        <div id="custom-code-tab" class="horizontal-tabs">
          <a href="#custom-code-css"><?php echo $heading_css; ?></a>
          <a href="#custom-code-js"><?php echo $heading_js; ?></a>
        </div>
      </div>
    </div>
    <!-- Custom Code Tabs // End -->

    <!-- Custom Code // CSS // Start -->
      <div id="custom-code-css">
        <div class="box"><div class="box-heading"><?php echo $heading_css; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_css_options) && $radio_css_options == '1'){ ?>
                      <input type="radio"  name="radio_css_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_css_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_css_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_css_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
            </table>
            <table class="clear">
              <tr>
                <td><textarea name="textarea_css" class="css" id="textarea_css"><?php echo isset(${'textarea_css'}) ? ${'textarea_css'} : ''; ?></textarea></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    <!-- Custom Code // CSS // End -->
    
    <!-- Custom Code // JavaScript // Start -->
      <div id="custom-code-js">
        <div class="box"><div class="box-heading"><?php echo $heading_js; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
                  <td>
                    <?php if(isset($radio_js_options) && $radio_js_options == '1'){ ?>
                      <input type="radio"  name="radio_js_options" value="1" CHECKED > <?php echo $text_on; ?>
                      <input type="radio" name="radio_js_options" value="0" > <?php echo $text_off; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_js_options" value="1" > <?php echo $text_on; ?>
                      <input type="radio" name="radio_js_options" value="0" CHECKED > <?php echo $text_off; ?>
                    <?php } ?>
                  </td>
                </tr>
            </table>
            <table class="clear">
              <tr>
                <td><textarea name="textarea_js" class="js" id="textarea_js"><?php echo isset(${'textarea_js'}) ? ${'textarea_js'} : ''; ?></textarea></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    <!-- Custom Code // JavaScript // End -->
  </div>
<!-- Tab16 // End // Custom Code -->