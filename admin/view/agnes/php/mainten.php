<!-- Tab15 // Start // Maintenance -->
  <div id="tab15">
    <table class="red">
      <tr><td class="h3"><?php echo $h3_maintenance_status; ?></td>
          <td>
            <select name="select_maintenance_status">
              <?php if ($select_maintenance_status) { ?>
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
    <!-- Maintenance Text // Start -->
    <div class="box"><div class="box-heading"><?php echo $heading_maintenance_text; ?></div>
      <div class="box-content">
        <table class="yellow">
          <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
              <td>
                <?php if(isset($radio_maintenance_options) && $radio_maintenance_options == '1'){ ?>
                  <input type="radio"  name="radio_maintenance_options" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_maintenance_options" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_maintenance_options" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_maintenance_options" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
        </table>
      
        <div id="language-maintenance" class="horizontal-tabs">
          <?php foreach ($languages as $language) { ?>
            <a href="#tab-maintenance-text-<?php echo $language['language_id']; ?>"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" alt="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a>
          <?php } ?>
        </div>
        <?php foreach ($languages as $language) { ?>
          <div id="tab-maintenance-text-<?php echo $language['language_id']; ?>">
            <table class="clear">
              <tr>
                <td class="h3"><?php echo $h3_maintenance_text; ?></td>
                <td><textarea name="textarea_maintenance_text_<?php echo $language['language_id']; ?>" class="ckeditor" id="textarea_maintenance_text_<?php echo $language['language_id']; ?>"><?php echo isset(${'textarea_maintenance_text_' . $language['language_id']}) ? ${'textarea_maintenance_text_' . $language['language_id']} : ''; ?></textarea></td>
              </tr>
            </table>
          </div>
        <?php } ?>
      </div>
    </div>
    <!-- Maintenance Text // End -->
  </div>
<!-- Tab15 // End // Maintenance -->