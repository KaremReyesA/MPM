<!-- Tab13 // Start // Social network -->
  <div id="tab13">
    <table class="red">
      <tr><td class="h3"><?php echo $h3_social_network_status; ?></td>
          <td>
            <select name="select_social_network_status">
              <?php if ($select_social_network_status) { ?>
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
    
    <div class="box"><div class="box-heading"><?php echo $heading_follow_us; ?></div>
      <div class="box-content">
        <table class="yellow">
          <tr><td class="h3"><?php echo $text_activate_changes; ?></td>
              <td>
                <?php if(isset($radio_follow_us_options) && $radio_follow_us_options == '1'){ ?>
                  <input type="radio"  name="radio_follow_us_options" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_options" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_follow_us_options" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_options" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
        </table>
        <div class="left-margin">
          <div id="language-connect" class="horizontal-tabs">
          <?php foreach ($languages as $language) { ?>
            <a href="#tab-language-connect-<?php echo $language['language_id']; ?>"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" alt="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a>
          <?php } ?>
        </div>
        <?php foreach ($languages as $language) { ?>
          <div id="tab-language-connect-<?php echo $language['language_id']; ?>">
            <table class="clear">
              <tr>
                <td class="h3"><?php echo $h3_follow_us_connect_name; ?></td>
                <td><input type="text" name="input_follow_us_connect_name_<?php echo $language['language_id']; ?>" id="input_follow_us_connect_name_<?php echo $language['language_id']; ?>" size="30" value="<?php echo isset(${'input_follow_us_connect_name_' . $language['language_id']}) ? ${'input_follow_us_connect_name_' . $language['language_id']} : ''; ?>" /></td>
              </tr>
            </table>
          </div>
        <?php } ?>
          <table class="clear">
            <tr>
              <td rowspan="2"><div id="facebook"></div></td>
              <td class="h3" rowspan="2"><?php echo $h3_follow_us_facebook_url; ?></td>
              <td>
                <?php if(isset($radio_follow_us_facebook) && $radio_follow_us_facebook == '1'){ ?>
                  <input type="radio"  name="radio_follow_us_facebook" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_facebook" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_follow_us_facebook" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_facebook" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td><input type="text" name="input_follow_us_facebook_url" id="input_follow_us_facebook_url" size="100" value="<?php echo $input_follow_us_facebook_url; ?>" /></td>
            </tr>
            <tr>
              <td class="h3" colspan="2"><?php echo $h3_follow_us_bg_color; ?></td>
              <td><div class="color" style="background-color: #<?php echo $input_follow_us_bg_color_facebook; ?>"></div><input id="input_follow_us_bg_color_facebook" style="text-align: center" type="text" size="6" maxlength="6"  name="input_follow_us_bg_color_facebook" value="<?php echo $input_follow_us_bg_color_facebook; ?>"></td>	
            </tr>
          </table>
          <table class="clear">
            <tr>
              <td rowspan="2"><div id="flicker"></div></td>
              <td class="h3" rowspan="2"><?php echo $h3_follow_us_flicker_url; ?></td>
              <td>
                <?php if(isset($radio_follow_us_flicker) && $radio_follow_us_flicker == '1'){ ?>
                  <input type="radio"  name="radio_follow_us_flicker" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_flicker" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_follow_us_flicker" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_flicker" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td><input type="text" name="input_follow_us_flicker_url" id="input_follow_us_flicker_url" size="100" value="<?php echo $input_follow_us_flicker_url; ?>" /></td>
            </tr>
            <tr>
              <td class="h3" colspan="2"><?php echo $h3_follow_us_bg_color; ?></td>
              <td><div class="color" style="background-color: #<?php echo $input_follow_us_bg_color_flicker; ?>"></div><input id="input_follow_us_bg_color_flicker" style="text-align: center" type="text" size="6" maxlength="6"  name="input_follow_us_bg_color_flicker" value="<?php echo $input_follow_us_bg_color_flicker; ?>"></td>	
            </tr>
          </table>
          <table class="clear">
            <tr>
              <td rowspan="2"><div id="google"></div></td>
              <td class="h3" rowspan="2"><?php echo $h3_follow_us_google_url; ?></td>
              <td>
                <?php if(isset($radio_follow_us_google) && $radio_follow_us_google == '1'){ ?>
                  <input type="radio"  name="radio_follow_us_google" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_google" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_follow_us_google" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_google" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td><input type="text" name="input_follow_us_google_url" id="input_follow_us_google_url" size="100" value="<?php echo $input_follow_us_google_url; ?>" /></td>
            </tr>
            <tr>
              <td class="h3" colspan="2"><?php echo $h3_follow_us_bg_color; ?></td>
              <td><div class="color" style="background-color: #<?php echo $input_follow_us_bg_color_google; ?>"></div><input id="input_follow_us_bg_color_google" style="text-align: center" type="text" size="6" maxlength="6"  name="input_follow_us_bg_color_google" value="<?php echo $input_follow_us_bg_color_google; ?>"></td>	
            </tr>
          </table>
          <table class="clear">
            <tr>
              <td rowspan="2"><div id="instagram"></div></td>
              <td class="h3" rowspan="2"><?php echo $h3_follow_us_instagram_url; ?></td>
              <td>
                <?php if(isset($radio_follow_us_instagram) && $radio_follow_us_instagram == '1'){ ?>
                  <input type="radio"  name="radio_follow_us_instagram" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_instagram" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_follow_us_instagram" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_instagram" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td><input type="text" name="input_follow_us_instagram_url" id="input_follow_us_instagram_url" size="100" value="<?php echo $input_follow_us_instagram_url; ?>" /></td>
            </tr>
            <tr>
              <td class="h3" colspan="2"><?php echo $h3_follow_us_bg_color; ?></td>
              <td><div class="color" style="background-color: #<?php echo $input_follow_us_bg_color_instagram; ?>"></div><input id="input_follow_us_bg_color_instagram" style="text-align: center" type="text" size="6" maxlength="6"  name="input_follow_us_bg_color_instagram" value="<?php echo $input_follow_us_bg_color_instagram; ?>"></td>	
            </tr>
          </table>
          <table class="clear">
            <tr>
              <td rowspan="2"><div id="linkedin"></div></td>
              <td class="h3" rowspan="2"><?php echo $h3_follow_us_linkedin_url; ?></td>
              <td>
                <?php if(isset($radio_follow_us_linkedin) && $radio_follow_us_linkedin == '1'){ ?>
                  <input type="radio"  name="radio_follow_us_linkedin" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_linkedin" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_follow_us_linkedin" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_linkedin" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td><input type="text" name="input_follow_us_linkedin_url" id="input_follow_us_linkedin_url" size="100" value="<?php echo $input_follow_us_linkedin_url; ?>" /></td>
            </tr>
            <tr>
              <td class="h3" colspan="2"><?php echo $h3_follow_us_bg_color; ?></td>
              <td><div class="color" style="background-color: #<?php echo $input_follow_us_bg_color_linkedin; ?>"></div><input id="input_follow_us_bg_color_linkedin" style="text-align: center" type="text" size="6" maxlength="6"  name="input_follow_us_bg_color_linkedin" value="<?php echo $input_follow_us_bg_color_linkedin; ?>"></td>	
            </tr>
          </table>
          <table class="clear">
            <tr>
              <td rowspan="2"><div id="pinterest"></div></td>
              <td class="h3" rowspan="2"><?php echo $h3_follow_us_pinterest_url; ?></td>
              <td>
                <?php if(isset($radio_follow_us_pinterest) && $radio_follow_us_pinterest == '1'){ ?>
                  <input type="radio"  name="radio_follow_us_pinterest" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_pinterest" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_follow_us_pinterest" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_pinterest" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td><input type="text" name="input_follow_us_pinterest_url" id="input_follow_us_pinterest_url" size="100" value="<?php echo $input_follow_us_pinterest_url; ?>" /></td>
            </tr>
            <tr>
              <td class="h3" colspan="2"><?php echo $h3_follow_us_bg_color; ?></td>
              <td><div class="color" style="background-color: #<?php echo $input_follow_us_bg_color_pinterest; ?>"></div><input id="input_follow_us_bg_color_pinterest" style="text-align: center" type="text" size="6" maxlength="6"  name="input_follow_us_bg_color_pinterest" value="<?php echo $input_follow_us_bg_color_pinterest; ?>"></td>	
            </tr>
          </table>
          <table class="clear">
            <tr>
              <td rowspan="2"><div id="twitter"></div></td>
              <td class="h3" rowspan="2"><?php echo $h3_follow_us_twitter_url; ?></td>
              <td>
                <?php if(isset($radio_follow_us_twitter) && $radio_follow_us_twitter == '1'){ ?>
                  <input type="radio"  name="radio_follow_us_twitter" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_twitter" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_follow_us_twitter" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_twitter" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td><input type="text" name="input_follow_us_twitter_url" id="input_follow_us_twitter_url" size="100" value="<?php echo $input_follow_us_twitter_url; ?>" /></td>
            </tr>
            <tr>
              <td class="h3" colspan="2"><?php echo $h3_follow_us_bg_color; ?></td>
              <td><div class="color" style="background-color: #<?php echo $input_follow_us_bg_color_twitter; ?>"></div><input id="input_follow_us_bg_color_twitter" style="text-align: center" type="text" size="6" maxlength="6"  name="input_follow_us_bg_color_twitter" value="<?php echo $input_follow_us_bg_color_twitter; ?>"></td>	
            </tr>
          </table>
          <table class="clear">
            <tr>
              <td rowspan="2"><div id="vimeo"></div></td>
              <td class="h3" rowspan="2"><?php echo $h3_follow_us_vimeo_url; ?></td>
              <td>
                <?php if(isset($radio_follow_us_vimeo) && $radio_follow_us_vimeo == '1'){ ?>
                  <input type="radio"  name="radio_follow_us_vimeo" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_vimeo" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_follow_us_vimeo" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_vimeo" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td><input type="text" name="input_follow_us_vimeo_url" id="input_follow_us_vimeo_url" size="100" value="<?php echo $input_follow_us_vimeo_url; ?>" /></td>
            </tr>
            <tr>
              <td class="h3" colspan="2"><?php echo $h3_follow_us_bg_color; ?></td>
              <td><div class="color" style="background-color: #<?php echo $input_follow_us_bg_color_vimeo; ?>"></div><input id="input_follow_us_bg_color_vimeo" style="text-align: center" type="text" size="6" maxlength="6"  name="input_follow_us_bg_color_vimeo" value="<?php echo $input_follow_us_bg_color_vimeo; ?>"></td>	
            </tr>
          </table>
          <table class="clear">
            <tr>
              <td rowspan="2"><div id="youtube"></div></td>
              <td class="h3" rowspan="2"><?php echo $h3_follow_us_youtube_url; ?></td>
              <td>
                <?php if(isset($radio_follow_us_youtube) && $radio_follow_us_youtube == '1'){ ?>
                  <input type="radio"  name="radio_follow_us_youtube" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_youtube" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_follow_us_youtube" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_youtube" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td><input type="text" name="input_follow_us_youtube_url" id="input_follow_us_youtube_url" size="100" value="<?php echo $input_follow_us_youtube_url; ?>" /></td>
            </tr>
            <tr>
              <td class="h3" colspan="2"><?php echo $h3_follow_us_bg_color; ?></td>
              <td><div class="color" style="background-color: #<?php echo $input_follow_us_bg_color_youtube; ?>"></div><input id="input_follow_us_bg_color_youtube" style="text-align: center" type="text" size="6" maxlength="6"  name="input_follow_us_bg_color_youtube" value="<?php echo $input_follow_us_bg_color_youtube; ?>"></td>	
            </tr>
          </table>
          <table class="clear">
            <tr>
              <td rowspan="2"><div id="blogger"></div></td>
              <td class="h3" rowspan="2"><?php echo $h3_follow_us_blogger_url; ?></td>
              <td>
                <?php if(isset($radio_follow_us_blogger) && $radio_follow_us_blogger == '1'){ ?>
                  <input type="radio"  name="radio_follow_us_blogger" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_blogger" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_follow_us_blogger" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_blogger" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td><input type="text" name="input_follow_us_blogger_url" id="input_follow_us_blogger_url" size="100" value="<?php echo $input_follow_us_blogger_url; ?>" /></td>
            </tr>
            <tr>
              <td class="h3" colspan="2"><?php echo $h3_follow_us_bg_color; ?></td>
              <td><div class="color" style="background-color: #<?php echo $input_follow_us_bg_color_blogger; ?>"></div><input id="input_follow_us_bg_color_blogger" style="text-align: center" type="text" size="6" maxlength="6"  name="input_follow_us_bg_color_blogger" value="<?php echo $input_follow_us_bg_color_blogger; ?>"></td>	
            </tr>
          </table>
          <table class="clear">
            <tr>
              <td rowspan="2"><div id="envato"></div></td>
              <td class="h3" rowspan="2"><?php echo $h3_follow_us_envato_url; ?></td>
              <td>
                <?php if(isset($radio_follow_us_envato) && $radio_follow_us_envato == '1'){ ?>
                  <input type="radio"  name="radio_follow_us_envato" value="1" CHECKED > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_envato" value="0" > <?php echo $text_off; ?>
                <?php } else { ?>
                  <input type="radio"  name="radio_follow_us_envato" value="1" > <?php echo $text_on; ?>
                  <input type="radio" name="radio_follow_us_envato" value="0" CHECKED > <?php echo $text_off; ?>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td><input type="text" name="input_follow_us_envato_url" id="input_follow_us_envato_url" size="100" value="<?php echo $input_follow_us_envato_url; ?>" /></td>
            </tr>
            <tr>
              <td class="h3" colspan="2"><?php echo $h3_follow_us_bg_color; ?></td>
              <td><div class="color" style="background-color: #<?php echo $input_follow_us_bg_color_envato; ?>"></div><input id="input_follow_us_bg_color_envato" style="text-align: center" type="text" size="6" maxlength="6"  name="input_follow_us_bg_color_envato" value="<?php echo $input_follow_us_bg_color_envato; ?>"></td>	
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
<!-- Tab13 // End // Social network -->