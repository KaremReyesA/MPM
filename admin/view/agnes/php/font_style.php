<!-- Tab12 // Start // Font Style -->
  <div id="tab12">
    <table class="red">
      <tr><td class="h3"><?php echo $h3_font_status; ?></td>
          <td>
            <select name="select_font_status">
              <?php if ($select_font_status) { ?>
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
    
    <!-- Google Font // Start -->
      <div class="box"><div class="box-heading"><?php echo $heading_google_code; ?></div>
        <div class="box-content">
          <table class="yellow">
            <tr>
              <td class="h3"><?php echo $text_activate_changes; ?></td>
              <td>
                <?php if(isset($radio_google_code_options) && $radio_google_code_options == '1'){ ?>
                  <input type="radio"  name="radio_google_code_options" value="1" CHECKED > <?php echo $text_yes; ?>
                  <input type="radio" name="radio_google_code_options" value="0" > <?php echo $text_no; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_google_code_options" value="1" > <?php echo $text_yes; ?>
                  <input type="radio" name="radio_google_code_options" value="0" CHECKED > <?php echo $text_no; ?>
                <?php } ?>
              </td>
            </tr>
          </table>
          <div class="left-margin">
            <table class="blue">
              <tr>
                <td class="h3"><?php echo $h3_google_code; ?></td>
                <td>
                  <textarea name="textarea_google_code" rows="2" cols="100" id="textarea_google_code" placeholder="Example: <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,600italic,400italic' rel='stylesheet' type='text/css'>"><?php echo isset(${'textarea_google_code'}) ? ${'textarea_google_code'} : ''; ?></textarea>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    <!-- Google Font // End -->
    
    <!-- Font Tabs // Start -->
      <div class="box">
        <div class="box-content">
					<div id="font-tab" class="horizontal-tabs">
						<a href="#body-font"><?php echo $heading_font_style; ?></a>
						<a href="#h1-font"><?php echo $heading_font_h1; ?></a>
						<a href="#h2-font"><?php echo $heading_font_h2; ?></a>
						<a href="#hyperlink-font"><?php echo $heading_font_hyperlink ; ?></a>
						<a href="#title-font"><?php echo $heading_font_box_heading; ?></a>
					</div>
				</div>
      </div>
    <!-- Font Tabs // End -->
    
    <!-- Body Font // Start -->
      <div id="body-font">
        <div class="box"><div class="box-heading"><?php echo $heading_font_style; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_body_font_options) && $radio_body_font_options == '1'){ ?>
                    <input type="radio"  name="radio_body_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_body_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_body_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_body_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_body_font_family">
                      <?php if (isset($select_body_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_body_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_body_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_body_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_body_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_body_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_body_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_body_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_body_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_body_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_body_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_body_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_body_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_body_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_body_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                  <td><input id="input_body_font_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_body_font_size" value="<?php echo $input_body_font_size; ?>"> <?php echo $text_px; ?></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_body_font_color; ?>"></div>
                    <input id="input_body_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_body_font_color" value="<?php echo $input_body_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                  <td>
                    <select name="select_body_font_weight">
                      <?php if (isset($select_body_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_body_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_body_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_body_font_style">
                      <?php if (isset($select_body_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_body_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_body_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_body_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_body_font_transform">
                      <?php if (isset($select_body_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_body_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_body_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_body_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_body_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_body_font_google) && $radio_body_font_google == '1'){ ?>
                      <input type="radio"  name="radio_body_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_body_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_body_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_body_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_body_font_google" type="text" size="100" name="input_body_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_body_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_body_font_shadow) && $radio_body_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_body_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_body_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_body_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_body_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_body_font_shadow" type="text" size="100" name="input_body_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_body_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- Body Font // End -->
    
    <!-- H1, Welcome Font // Start -->
      <div id="h1-font">
        <div class="box"><div class="box-heading"><?php echo $heading_font_h1; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_h1_font_options) && $radio_h1_font_options == '1'){ ?>
                    <input type="radio"  name="radio_h1_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_h1_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_h1_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_h1_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_h1_font_family">
                      <?php if (isset($select_h1_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_h1_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_h1_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_h1_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_h1_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_h1_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_h1_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_h1_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_h1_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_h1_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_h1_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_h1_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_h1_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_h1_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_h1_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                  <td><input id="input_h1_font_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_h1_font_size" value="<?php echo $input_h1_font_size; ?>"> <?php echo $text_px; ?></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_h1_font_color; ?>"></div>
                    <input id="input_h1_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_h1_font_color" value="<?php echo $input_h1_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                  <td>
                    <select name="select_h1_font_weight">
                      <?php if (isset($select_h1_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_h1_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_h1_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_h1_font_style">
                      <?php if (isset($select_h1_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_h1_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_h1_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_h1_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_h1_font_transform">
                      <?php if (isset($select_h1_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_h1_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_h1_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_h1_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_h1_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_h1_font_google) && $radio_h1_font_google == '1'){ ?>
                      <input type="radio"  name="radio_h1_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_h1_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_h1_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_h1_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_h1_font_google" type="text" size="100" name="input_h1_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_h1_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_h1_font_shadow) && $radio_h1_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_h1_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_h1_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_h1_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_h1_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_h1_font_shadow" type="text" size="100" name="input_h1_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_h1_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- H1, Welcome Font // End -->
    
    <!-- H2 Font // Start -->
      <div id="h2-font">
        <div class="box"><div class="box-heading"><?php echo $heading_font_h2; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_h2_font_options) && $radio_h2_font_options == '1'){ ?>
                    <input type="radio"  name="radio_h2_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_h2_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_h2_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_h2_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_h2_font_family">
                      <?php if (isset($select_h2_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_h2_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_h2_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_h2_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_h2_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_h2_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_h2_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_h2_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_h2_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_h2_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_h2_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_h2_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_h2_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_h2_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_h2_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                  <td><input id="input_h2_font_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_h2_font_size" value="<?php echo $input_h2_font_size; ?>"> <?php echo $text_px; ?></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_h2_font_color; ?>"></div>
                    <input id="input_h2_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_h2_font_color" value="<?php echo $input_h2_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                  <td>
                    <select name="select_h2_font_weight">
                      <?php if (isset($select_h2_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_h2_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_h2_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_h2_font_style">
                      <?php if (isset($select_h2_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_h2_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_h2_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_h2_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_h2_font_transform">
                      <?php if (isset($select_h2_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_h2_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_h2_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_h2_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_h2_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_h2_font_google) && $radio_h2_font_google == '1'){ ?>
                      <input type="radio"  name="radio_h2_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_h2_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_h2_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_h2_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_h2_font_google" type="text" size="100" name="input_h2_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_h2_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_h2_font_shadow) && $radio_h2_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_h2_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_h2_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_h2_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_h2_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_h2_font_shadow" type="text" size="100" name="input_h2_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_h2_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- H2 Font // End -->
    
    <!-- Hyperlink Font // Start -->
      <div id="hyperlink-font">
        <div class="box"><div class="box-heading"><?php echo $heading_font_hyperlink; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_hyperlink_font_options) && $radio_hyperlink_font_options == '1'){ ?>
                    <input type="radio"  name="radio_hyperlink_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_hyperlink_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_hyperlink_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_hyperlink_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_hyperlink_font_family">
                      <?php if (isset($select_hyperlink_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_hyperlink_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_hyperlink_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_hyperlink_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_hyperlink_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_hyperlink_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_hyperlink_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_hyperlink_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_hyperlink_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_hyperlink_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_hyperlink_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_hyperlink_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_hyperlink_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_hyperlink_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_hyperlink_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                  <td><input id="input_hyperlink_font_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_hyperlink_font_size" value="<?php echo $input_hyperlink_font_size; ?>"> <?php echo $text_px; ?></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_hyperlink_font_color; ?>"></div>
                    <input id="input_hyperlink_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_hyperlink_font_color" value="<?php echo $input_hyperlink_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_hover_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_hyperlink_font_color_hover; ?>"></div>
                    <input id="input_hyperlink_font_color_hover" style="text-align: center" type="text" size="6" maxlength="6"  name="input_hyperlink_font_color_hover" value="<?php echo $input_hyperlink_font_color_hover; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                  <td>
                    <select name="select_hyperlink_font_weight">
                      <?php if (isset($select_hyperlink_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_hyperlink_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_hyperlink_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_hyperlink_font_style">
                      <?php if (isset($select_hyperlink_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_hyperlink_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_hyperlink_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_hyperlink_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_hyperlink_font_transform">
                      <?php if (isset($select_hyperlink_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_hyperlink_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_hyperlink_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_hyperlink_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_hyperlink_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_hyperlink_font_google) && $radio_hyperlink_font_google == '1'){ ?>
                      <input type="radio"  name="radio_hyperlink_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_hyperlink_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_hyperlink_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_hyperlink_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_hyperlink_font_google" type="text" size="100" name="input_hyperlink_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_hyperlink_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_hyperlink_font_shadow) && $radio_hyperlink_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_hyperlink_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_hyperlink_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_hyperlink_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_hyperlink_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_hyperlink_font_shadow" type="text" size="100" name="input_hyperlink_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_hyperlink_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- Hyperlink Font // End -->

    <!-- Box Heading Font // Start -->
      <div id="title-font">
        <div class="box"><div class="box-heading"><?php echo $heading_font_box_heading; ?></div>
          <div class="box-content">
            <table class="yellow">
              <tr>
                <td class="h3"><?php echo $text_activate_changes; ?></td>
                <td>
                  <?php if(isset($radio_box_heading_font_options) && $radio_box_heading_font_options == '1'){ ?>
                    <input type="radio"  name="radio_box_heading_font_options" value="1" CHECKED > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_box_heading_font_options" value="0" > <?php echo $text_no; ?>
                  <?php } else { ?>
                    <input type="radio"  name="radio_box_heading_font_options" value="1" > <?php echo $text_yes; ?>
                    <input type="radio" name="radio_box_heading_font_options" value="0" CHECKED > <?php echo $text_no; ?>
                  <?php } ?>
                </td>
              </tr>
            </table>
            <div class="left-margin">
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font; ?></td>
                  <td>
                    <select name="select_box_heading_font_family">
                      <?php if (isset($select_box_heading_font_family)) {$selected = "selected";?>
                      <option value="default" <?php if($select_box_heading_font_family=='default'){echo $selected;} ?>>By Default</option>
                      <option value="Verdana, Geneva, sans-serif" <?php if($select_box_heading_font_family=='Verdana, Geneva, sans-serif'){echo $selected;} ?>>Verdana</option>
                      <option value="Georgia, &quot;Times New Roman&quot;, Times, serif" <?php if($select_box_heading_font_family=='Georgia, &quot;Times New Roman&quot;, Times, serif'){echo $selected;} ?>>Georgia</option>
                      <option value="&quot;Courier New&quot;, Courier, monospace" <?php if($select_box_heading_font_family=='&quot;Courier New&quot;, Courier, monospace'){echo $selected;} ?>>Courier New</option>
                      <option value="Arial, Helvetica, sans-serif" <?php if($select_box_heading_font_family=='Arial, Helvetica, sans-serif'){echo $selected;} ?>>Arial</option>
                      <option value="Tahoma, Geneva, sans-serif" <?php if($select_box_heading_font_family=='Tahoma, Geneva, sans-serif'){echo $selected;} ?>>Tahoma</option>
                      <option value="&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif" <?php if($select_box_heading_font_family=='&quot;Trebuchet MS&quot;, Arial, Helvetica, sans-serif'){echo $selected;} ?>>Trebuchet MS</option>
                      <option value="&quot;Arial Black&quot;, Gadget, sans-serif" <?php if($select_box_heading_font_family=='&quot;Arial Black&quot;, Gadget, sans-serif'){echo $selected;} ?>>Arial Black</option>
                      <option value="Times, &quot;Times New Roman&quot;, serif" <?php if($select_box_heading_font_family=='Times, &quot;Times New Roman&quot;, serif'){echo $selected;} ?>>Times</option>
                      <option value="&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif" <?php if($select_box_heading_font_family=='&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif'){echo $selected;} ?>>Palatino Linotype</option>
                      <option value="&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif" <?php if($select_box_heading_font_family=='&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif'){echo $selected;} ?>>Lucida Sans Unicode</option>
                      <option value="&quot;MS Serif&quot;, &quot;New York&quot;, serif" <?php if($select_box_heading_font_family=='&quot;MS Serif&quot;, &quot;New York&quot;, serif'){echo $selected;} ?>>MS Serif</option>
                      <option value="&quot;Lucida Console&quot;, Monaco, monospace" <?php if($select_box_heading_font_family=='&quot;Lucida Console&quot;, Monaco, monospace'){echo $selected;} ?>>Lucida Console</option>
                      <option value="&quot;Comic Sans MS&quot;, cursive" <?php if($select_box_heading_font_family=='&quot;Comic Sans MS&quot;, cursive'){echo $selected;} ?>>Comic Sans MS</option>
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
                  <td><input id="input_box_heading_font_size" style="text-align: center" type="text" size="6" maxlength="6"  name="input_box_heading_font_size" value="<?php echo $input_box_heading_font_size; ?>"> <?php echo $text_px; ?></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_color; ?></td>
                  <td><div class="color" style="background-color: #<?php echo $input_box_heading_font_color; ?>"></div>
                    <input id="input_box_heading_font_color" style="text-align: center" type="text" size="6" maxlength="6"  name="input_box_heading_font_color" value="<?php echo $input_box_heading_font_color; ?>">
                  </td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3"><?php echo $h3_font_style_font_weight; ?></td>
                  <td>
                    <select name="select_box_heading_font_weight">
                      <?php if (isset($select_box_heading_font_weight)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_box_heading_font_weight=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="bold" <?php if($select_box_heading_font_weight=='bold'){echo $selected;} ?>><?php echo $text_bold; ?></option>
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
                    <select name="select_box_heading_font_style">
                      <?php if (isset($select_box_heading_font_style)) {$selected = "selected";?>
                        <option value="normal" <?php if($select_box_heading_font_style=='normal'){echo $selected;} ?>><?php echo $text_normal; ?></option>
                        <option value="italic" <?php if($select_box_heading_font_style=='italic'){echo $selected;} ?>><?php echo $text_italic; ?></option>
                        <option value="oblique" <?php if($select_box_heading_font_style=='oblique'){echo $selected;} ?>><?php echo $text_oblique; ?></option>
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
                    <select name="select_box_heading_font_transform">
                      <?php if (isset($select_box_heading_font_transform)) {$selected = "selected";?>
                        <option value="none" <?php if($select_box_heading_font_transform=='none'){echo $selected;} ?>><?php echo $text_none; ?></option>
                        <option value="uppercase" <?php if($select_box_heading_font_transform=='uppercase'){echo $selected;} ?>><?php echo $text_uppercase; ?></option>
                        <option value="lowercase" <?php if($select_box_heading_font_transform=='lowercase'){echo $selected;} ?>><?php echo $text_lowercase; ?></option>
                        <option value="capitalize" <?php if($select_box_heading_font_transform=='capitalize'){echo $selected;} ?>><?php echo $text_capitalize; ?></option>
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
                    <?php if(isset($radio_box_heading_font_google) && $radio_box_heading_font_google == '1'){ ?>
                      <input type="radio"  name="radio_box_heading_font_google" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_box_heading_font_google" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_box_heading_font_google" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_box_heading_font_google" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_box_heading_font_google" type="text" size="100" name="input_box_heading_font_google" placeholder="Example: 'Open Sans',Helvetica,Arial,Verdana,sans-serif" value="<?php echo $input_box_heading_font_google; ?>"></td>
                </tr>
              </table>
              <table class="blue">
                <tr>
                  <td class="h3" rowspan="2"><?php echo $h3_font_style_font_shadow; ?></td>
                  <td>
                    <?php if(isset($radio_box_heading_font_shadow) && $radio_box_heading_font_shadow == '1'){ ?>
                      <input type="radio"  name="radio_box_heading_font_shadow" value="1" CHECKED > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_box_heading_font_shadow" value="0" > <?php echo $text_no; ?>
                    <?php } else { ?>
                      <input type="radio"  name="radio_box_heading_font_shadow" value="1" > <?php echo $text_yes; ?>
                      <input type="radio" name="radio_box_heading_font_shadow" value="0" CHECKED > <?php echo $text_no; ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><input id="input_box_heading_font_shadow" type="text" size="100" name="input_box_heading_font_shadow" placeholder="Example: text-shadow: 2px 2px #FF0000" value="<?php echo $input_box_heading_font_shadow; ?>"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- Box Heading Font // End -->
  </div>
<!-- Tab12 // End // Font Style -->