<!-- Tab14 // Start // Additional Effects -->
  <div id="tab14">
    <table class="red">
      <tr><td class="h3"><?php echo $h3_effects_status; ?></td>
          <td>
            <select name="select_effects_status">
              <?php if ($select_effects_status) { ?>
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
    <div class="box"><div class="box-heading"><?php echo $heading_tiptip; ?></div>
      <div class="box-content">
        <table class="yellow">
          <tr><td class="h3"><?php echo $h3_tiptip_options; ?></td>
						<td>
							<?php if(isset($radio_tiptip_options) && $radio_tiptip_options == '1'){ ?>
								<input type="radio"  name="radio_tiptip_options" value="1" CHECKED > <?php echo $text_on; ?>
								<input type="radio" name="radio_tiptip_options" value="0"> <?php echo $text_off; ?>
							<?php } else { ?>
								<input type="radio"  name="radio_tiptip_options" value="1" > <?php echo $text_on; ?>
								<input type="radio" name="radio_tiptip_options" value="0" CHECKED> <?php echo $text_off; ?>
							<?php } ?>
						</td>
						<td id="toltip">
					</tr>
        </table>
      </div>
    </div>
		<div class="box"><div class="box-heading"><?php echo $heading_box_slider; ?></div>
      <div class="box-content">
        <table class="yellow">
          <tr><td class="h3"><?php echo $h3_box_slider_options; ?></td>
						<td>
							<?php if(isset($radio_box_slider_options) && $radio_box_slider_options == '1'){ ?>
								<input type="radio"  name="radio_box_slider_options" value="1" CHECKED > <?php echo $text_on; ?>
								<input type="radio" name="radio_box_slider_options" value="0"> <?php echo $text_off; ?>
							<?php } else { ?>
								<input type="radio"  name="radio_box_slider_options" value="1" > <?php echo $text_on; ?>
								<input type="radio" name="radio_box_slider_options" value="0" CHECKED> <?php echo $text_off; ?>
							<?php } ?>
						</td>
						<td id="box-slider">
					</tr>
        </table>
      </div>
    </div>
		<div class="box"><div class="box-heading"><?php echo $heading_slideshow; ?></div>
      <div class="box-content">
        <table class="yellow">
          <tr><td class="h3"><?php echo $h3_slideshow_options; ?></td>
              <td>
                <?php if(isset($radio_slideshow_home_options) && $radio_slideshow_home_options == '1'){ ?>
                  <input type="radio"  name="radio_slideshow_home_options" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_slideshow_home_options" value="0"> <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_slideshow_home_options" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_slideshow_home_options" value="0" CHECKED> <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
					<tr><td colspan="2"><span class="note"><?php echo $note_slideshow; ?></span></td></tr>
        </table>
      </div>
    </div>
  </div>
<!-- Tab14 // End // Additional Effects -->