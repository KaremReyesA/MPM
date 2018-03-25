	</div> <!-- #container end --><div style="clear:both;"></div>
<?php if (($this->config->get('select_footer_status') == '1') && ($this->config->get('tsettings_status') == '1')){ ?>
  <div id="footer">
    <div id="footer-content">
		<?php if($this->config->get('radio_footer_go_up_options') == '1'){ ?>
			<div id="go_up"><a class="someClass" title="Go Up"></a></div>
		<?php } ?>
      <div id="footer-top">
         <?php if(($this->config->get('radio_footer_payment_options') == '1') && ($this->config->get('radio_footer_payment_top') == '1')){ ?>
          <?php if(($this->config->get('radio_other_ele_payment_options') == '1') && ($this->config->get('select_other_ele_status') == '1')){ ?>
            <?php include ('catalog/view/theme/agnes/php/payment.php'); ?>
          <?php } ?>
        <?php } ?>
        <?php if(($this->config->get('radio_footer_about_options') == '1') || ($this->config->get('radio_footer_follow_options') == '1')) { ?>
          <div class="column">
            <?php if($this->config->get('radio_footer_about_options') == '1'){ ?>
              <div class="footer-heading"><?php echo $this->config->get('input_footer_about_name_' . $this->config->get('config_language_id'));?></div>
              <div class="footer-about-content">
                <ul>
                  <li><?php echo html_entity_decode($this->config->get('textarea_footer_about_' . $this->config->get('config_language_id')));?></li>
                </ul>
              </div>
            <?php } ?>
            
            <?php if($this->config->get('radio_footer_follow_options') == 'test_mode'){ ?>
              <div class="footer-heading"><?php echo $this->config->get('input_footer_follow_name_' . $this->config->get('config_language_id'));?></div>
                <div class="footer-content">
                  <ul>
                    <div id="fb-root"></div>
                      <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/<?php echo $this->config->get('input_footer_fan_location'); ?>/all.js#xfbml=1&appId=301982203228829";
                        fjs.parentNode.insertBefore(js, fjs);
                      }(document, 'script', 'facebook-jssdk'));</script>
                      <!--<div class="fb-like-box" data-href="http://www.facebook.com/FacebookDevelopers" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>-->
                      <div class="fb-like-box" data-href="<?php echo $this->config->get('input_footer_fan_id'); ?>" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="<?php echo $this->config->get('radio_footer_fon_color'); ?>" data-show-faces="<?php echo $this->config->get('radio_footer_fan_faces'); ?>" data-header="false" data-stream="false" data-show-border="false"></div>
                  </ul>
                </div>
            <?php } ?>
          </div>
        <?php } ?>
        
        <?php if(($this->config->get('radio_footer_service_options') == '1') || ($this->config->get('radio_footer_extra_options') == '1')) { ?>
          <div class="column-mid">
            <?php if($this->config->get('radio_footer_service_options') == '1'){ ?>
              <div class="footer-heading"><?php echo $text_service; ?>:</div>
              <div class="footer-content">
                <ul>
                  <?php if($this->config->get('radio_footer_service_contact') == '1'){ ?>
                    <li><p><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></p></li>
                  <?php } if($this->config->get('radio_footer_service_returns') == '1'){ ?>
                    <li><p><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></p></li>
                  <?php } if($this->config->get('radio_footer_service_sitemap') == '1'){ ?>
                  <li><p><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></p></li>
                  <?php } ?>
                </ul>
              </div>
            <?php } ?>
            
            <?php if($this->config->get('radio_footer_extra_options') == '1'){ ?>
              <div class="footer-heading"><?php echo $text_extra; ?></div>
              <div class="footer-content">
                <ul>
                  <?php if($this->config->get('radio_footer_extra_brand') == '1'){ ?>
                    <li><p><a href="<?php echo $manufacturer; ?>"><?php echo $text_manufacturer; ?></a></p></li>
                  <?php } if($this->config->get('radio_footer_extra_voucher') == '1'){ ?>
                    <li><p><a href="<?php echo $voucher; ?>"><?php echo $text_voucher; ?></a></p></li>
                  <?php } if($this->config->get('radio_footer_extra_affiliates') == '1'){ ?>
                    <li><p><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></p></li>
                  <?php } if($this->config->get('radio_footer_extra_specials') == '1'){ ?>
                    <li><p><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></p></li>
                  <?php } ?>
                </ul>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
          
        <?php if($this->config->get('radio_footer_contact_options') == '1'){ ?>
          <div class="column">
            <div class="footer-heading"><?php echo $this->config->get('input_footer_contact_name_' . $this->config->get('config_language_id'));?></div>
              <div class="footer-contact-content">
                <ul>
                  <li class="footer-icons"><p><img src="catalog/view/theme/agnes/image/layout/footer/icons/location_<?php echo $this->config->get('radio_footer_contact_icons') ?>.png" alt="location"></p><p><?php echo html_entity_decode($this->config->get('textarea_footer_contact_' . $this->config->get('config_language_id')));?></p></li>
								 <li class="footer-icons"><p><img src="catalog/view/theme/agnes/image/layout/footer/icons/phone_<?php echo $this->config->get('radio_footer_contact_icons') ?>.png" alt="phone"></p><p><?php echo $this->config->get('input_footer_phone_' . $this->config->get('config_language_id'));?></p></li>
									<li class="footer-icons"><p><img src="catalog/view/theme/agnes/image/layout/footer/icons/phone_<?php echo $this->config->get('radio_footer_contact_icons') ?>.png" alt="phone"></p><p><?php echo $this->config->get('input_footer_mobile_' . $this->config->get('config_language_id'));?></p></li>            
								<li class="footer-icons"><p><img src="catalog/view/theme/agnes/image/layout/footer/icons/skype_<?php echo $this->config->get('radio_footer_contact_icons') ?>.png" alt="skype"></p><p><?php echo $this->config->get('input_footer_skype_' . $this->config->get('config_language_id'));?></p></li>
                  <li class="footer-icons"><p><img src="catalog/view/theme/agnes/image/layout/footer/icons/email_<?php echo $this->config->get('radio_footer_contact_icons') ?>.png" alt="email"></p><p><?php echo html_entity_decode($this->config->get('textarea_footer_send_us_' . $this->config->get('config_language_id')));?></p></li>
                </ul>
              </div>
          </div><div style="clear:both;"></div>
        <?php } ?>
        <?php if(($this->config->get('radio_footer_payment_options') == '1') && ($this->config->get('radio_footer_payment_bottom') == '1')){ ?>
          <?php if(($this->config->get('radio_other_ele_payment_options') == '1') && ($this->config->get('select_other_ele_status') == '1')){ ?>
          <?php include ('catalog/view/theme/agnes/php/payment.php'); ?>
          <?php } ?>
        <?php } ?>
      </div><div style="clear:both;"></div>
      
      <?php if($this->config->get('radio_footer_info_link_options') == '1'){ ?>
        <div id="footer-middle">
          <div id="footer-middle-content">
            <div id="information">
              <ul>
                <?php foreach ($informations as $information) { ?>
                <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
                <?php } ?>
              </ul>
            </div><div style="clear:both;"></div>
          </div>
        </div>
      <?php } ?>
        
      <div id="footer-bottom">
        <div id="footer-bottom-content">
          <?php if($this->config->get('radio_follow_us_options') == '1'){ ?>
            <div id="connect-with-us">
              <span><?php echo $this->config->get('input_follow_us_connect_name_' . $this->config->get('config_language_id'));?></span>
              <div class="social-network">
                <ul>
                  <?php if ($this->config->get('radio_follow_us_facebook') == '1') { ?>
                    <li class="someClass" title="facebook"><a href="<?php echo $this->config->get('input_follow_us_facebook_url') ;?>" class="facebook"></a></li>
                  <?php } if ($this->config->get('radio_follow_us_flicker') == '1') { ?>
                    <li class="someClass" title="flickr"><a href="<?php echo $this->config->get('input_follow_us_flicker_url') ;?>" class="flickr"></a></li>
                  <?php } if ($this->config->get('radio_follow_us_google') == '1') { ?>
                    <li class="someClass" title="google"><a href="<?php echo $this->config->get('input_follow_us_google_url') ;?>" class="google"></a></li>
                  <?php } if ($this->config->get('radio_follow_us_instagram') == '1') { ?>
                    <li class="someClass" title="instagram"><a href="<?php echo $this->config->get('input_follow_us_instagram_url') ;?>" class="instagram"></a></li>
                  <?php } if ($this->config->get('radio_follow_us_linkedin') == '1') { ?>
                    <li class="someClass" title="linkedin"><a href="<?php echo $this->config->get('input_follow_us_linkedin_url') ;?>" class="linkedin"></a></li>
                  <?php } if ($this->config->get('radio_follow_us_pinterest') == '1') { ?>
                    <li class="someClass" title="pinterest"><a href="<?php echo $this->config->get('input_follow_us_pinterest_url') ;?>" class="pinterest"></a></li>
                  <?php } if ($this->config->get('radio_follow_us_twitter') == '1') { ?>
                    <li class="someClass" title="twitter"><a href="<?php echo $this->config->get('input_follow_us_twitter_url') ;?>" class="twitter"></a></li>
                  <?php } if ($this->config->get('radio_follow_us_vimeo') == '1') { ?>
                    <li class="someClass" title="vimeo"><a href="<?php echo $this->config->get('input_follow_us_vimeo_url') ;?>" class="vimeo"></a></li>
                  <?php } if ($this->config->get('radio_follow_us_youtube') == '1') { ?>
                    <li class="someClass" title="youtube"><a href="<?php echo $this->config->get('input_follow_us_youtube_url') ;?>" class="youtube"></a></li>
                  <?php } ?>
                </ul>
                <ul>
                  <?php if ($this->config->get('radio_follow_us_blogger') == '1') { ?>
                    <li class="someClass" title="blogger"><a href="<?php echo $this->config->get('input_follow_us_blogger_url') ;?>" class="blogger"></a></li>
                  <?php } if ($this->config->get('radio_follow_us_envato') == '1') { ?>
                    <li class="someClass" title="envato"><a href="<?php echo $this->config->get('input_follow_us_envato_url') ;?>" class="envato"></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          <?php } ?>
          <div id="powered"><?php echo html_entity_decode($this->config->get('textarea_footer_powered_' . $this->config->get('config_language_id')));?></div>
          <div style="clear:both;"></div>
        </div>
      </div><div style="clear:both;"></div>
    </div>
  </div>
  <?php } else if ($this->config->get('tsettings_status') != "none") { ?>
  <div id="original-footer">
  <div class="columnn">
    <span><?php echo $text_account; ?></span>
    <ul>
      <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
      <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
      <li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
      <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
    </ul>
  </div>
  
  <div class="columnn">
    <span><?php echo $text_extra; ?></span>
    <ul>
      <li><a href="<?php echo $manufacturer; ?>"><?php echo $text_manufacturer; ?></a></li>
      <li><a href="<?php echo $voucher; ?>"><?php echo $text_voucher; ?></a></li>
      <li><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></li>
      <li><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></li>
    </ul>
  </div>
  <div class="columnn">
    <span><?php echo $text_service; ?></span>
    <ul>
      <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
      <li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
      <li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
    </ul>
  </div>
  <?php if ($informations) { ?>
  <div class="columnn">
    <span><?php echo $text_information; ?></span>
    <ul>
      <?php foreach ($informations as $information) { ?>
      <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
      <?php } ?>
    </ul>
  </div>
  <?php } ?>
</div>
<div id="powered-wrap">
<div id="original-powered"><?php echo $powered; ?></div>

</div><div style="clear:both;"></div>
<?php } ?>
<script type="text/javascript"><!--
		$('#go_up a').click(function(){
    $('html, body').animate({scrollTop:0}, 'slow');
    return false;
});
//--></script>
	</div> <!-- #container-s-top  end -->
</div> <!-- $container-fb  end -->
</body></html>