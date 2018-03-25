<?php if(($this->config->get('radio_top_header_text_options') == '1') || ($this->config->get('radio_top_header_soc_net_options') == '1')) { ?>
  <div id="header-top">
    <div id="header-massage">
      <?php echo html_entity_decode($this->config->get('textarea_top_header_text_' . $this->config->get('config_language_id')));?>
    </div>
    <?php if(($this->config->get('radio_top_header_soc_net_options') == '1') && ($this->config->get('select_social_network_status') == '1')) { ?>
      <div class="social-network-top">
        <ul>
          <?php if ($this->config->get('radio_follow_us_facebook') == '1') { ?>
            <li class="someClass" title="facebook"><a href="<?php echo $this->config->get('input_follow_us_facebook_url') ;?>" <?php if ($this->config->get('radio_top_header_soc_net_color') == '1') { ?> class="facebook" <?php } else if ($this->config->get('radio_top_header_soc_net_color') == "0") { ?> class="facebook-top" <?php } ?> target="_blank"></a></li>
          <?php } if ($this->config->get('radio_follow_us_flicker') == '1') { ?>
            <li class="someClass" title="flickr"><a href="<?php echo $this->config->get('input_follow_us_flicker_url') ;?>" <?php if ($this->config->get('radio_top_header_soc_net_color') == '1') { ?> class="flickr" <?php } else if ($this->config->get('radio_top_header_soc_net_color') == "0") { ?> class="flickr-top" <?php } ?> target="_blank"></a></li>
          <?php } if ($this->config->get('radio_follow_us_google') == '1') { ?>
            <li class="someClass" title="google"><a href="<?php echo $this->config->get('input_follow_us_google_url') ;?>" <?php if ($this->config->get('radio_top_header_soc_net_color') == '1') { ?> class="google" <?php } else if ($this->config->get('radio_top_header_soc_net_color') == "0") { ?> class="google-top" <?php } ?> target="_blank"></a></li>
          <?php } if ($this->config->get('radio_follow_us_instagram') == '1') { ?>
            <li class="someClass" title="instagram"><a href="<?php echo $this->config->get('input_follow_us_instagram_url') ;?>" <?php if ($this->config->get('radio_top_header_soc_net_color') == '1') { ?> class="instagram" <?php } else if ($this->config->get('radio_top_header_soc_net_color') == "0") { ?> class="instagram-top" <?php } ?> target="_blank"></a></li>
          <?php } if ($this->config->get('radio_follow_us_linkedin') == '1') { ?>
            <li class="someClass" title="linkedin"><a href="<?php echo $this->config->get('input_follow_us_linkedin_url') ;?>" <?php if ($this->config->get('radio_top_header_soc_net_color') == '1') { ?> class="linkedin" <?php } else if ($this->config->get('radio_top_header_soc_net_color') == "0") { ?> class="linkedin-top" <?php } ?> target="_blank"></a></li>
          <?php } if ($this->config->get('radio_follow_us_pinterest') == '1') { ?>
            <li class="someClass" title="pinterest"><a href="<?php echo $this->config->get('input_follow_us_pinterest_url') ;?>" <?php if ($this->config->get('radio_top_header_soc_net_color') == '1') { ?> class="pinterest" <?php } else if ($this->config->get('radio_top_header_soc_net_color') == "0") { ?> class="pinterest-top" <?php } ?> target="_blank"></a></li>
          <?php } if ($this->config->get('radio_follow_us_twitter') == '1') { ?>
            <li class="someClass" title="twitter"><a href="<?php echo $this->config->get('input_follow_us_twitter_url') ;?>" <?php if ($this->config->get('radio_top_header_soc_net_color') == '1') { ?> class="twitter" <?php } else if ($this->config->get('radio_top_header_soc_net_color') == "0") { ?> class="twitter-top" <?php } ?> target="_blank"></a></li>
          <?php } if ($this->config->get('radio_follow_us_vimeo') == '1') { ?>
            <li class="someClass" title="vimeo"><a href="<?php echo $this->config->get('input_follow_us_vimeo_url') ;?>" <?php if ($this->config->get('radio_top_header_soc_net_color') == '1') { ?> class="vimeo" <?php } else if ($this->config->get('radio_top_header_soc_net_color') == "0") { ?> class="vimeo-top" <?php } ?> target="_blank"></a></li>
          <?php } if ($this->config->get('radio_follow_us_youtube') == '1') { ?>
            <li class="someClass" title="youtube"><a href="<?php echo $this->config->get('input_follow_us_youtube_url') ;?>" <?php if ($this->config->get('radio_top_header_soc_net_color') == '1') { ?> class="youtube" <?php } else if ($this->config->get('radio_top_header_soc_net_color') == "0") { ?> class="youtube-top" <?php } ?> target="_blank"></a></li>
        </ul>
        <ul>
          <?php } if ($this->config->get('radio_follow_us_blogger') == '1') { ?>
            <li class="someClass" title="blogger"><a href="<?php echo $this->config->get('input_follow_us_blogger_url') ;?>" <?php if ($this->config->get('radio_top_header_soc_net_color') == '1') { ?> class="blogger" <?php } else if ($this->config->get('radio_top_header_soc_net_color') == "0") { ?> class="blogger-top" <?php } ?> target="_blank"></a></li>
          <?php } if ($this->config->get('radio_follow_us_envato') == '1') { ?>
            <li class="someClass" title="envato"><a href="<?php echo $this->config->get('input_follow_us_envato_url') ;?>" <?php if ($this->config->get('radio_top_header_soc_net_color') == '1') { ?> class="envato" <?php } else if ($this->config->get('radio_top_header_soc_net_color') == "0") { ?> class="envato-top" <?php } ?> target="_blank"></a></li>
          <?php } ?>
        </ul>
      </div>
    <?php } ?><div style="clear:both;"></div>
  </div>
<?php } ?>