<?php if (($this->config->get('tsettings_status') == '1') && ($this->config->get('select_link_status') == '1')) { ?>
  <?php if ($this->config->get('radio_link_options') == "1") { ?>
    <div id="header-links">
      <div id="switcher">
        <ul>
          <?php if ($this->config->get('radio_link_language') == '1') { ?>
            <?php echo $language; ?>
          <?php } ?>
          
          <?php if ($this->config->get('radio_link_currency') == '1') { ?>
            <?php echo $currency; ?>
          <?php } ?>
          
          <?php if ($this->config->get('radio_link_search') == '1') { ?>
            <?php include ('catalog/view/theme/agnes/php/search.php'); ?>
          <?php } ?>
          
          <?php if ($this->config->get('radio_link_shopping_cart_large') == '1') { ?>
            <li><a href="#"><?php echo $text_shopping_cart; ?></a>
              <?php echo $cart; ?>
            </li>
          <?php } ?>
          <?php if ($this->config->get('radio_link_login') == '1') { ?>
            <?php include ('catalog/view/theme/agnes/php/login.php'); ?>
          <?php } ?>
        </ul>
      </div>

      <div id="links">
        <ul>
          <?php if ($this->config->get('radio_link_home') == '1') { ?>
            <li><a href="<?php echo $home; ?>" id="home-i"></a></li>
          <?php } ?>
          
          <?php if ($this->config->get('radio_link_my_account') == '1') { ?>
            <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a>
              <div>
                <ul>
                  <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
                  <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
                  <li><a href="<?php echo $compare; ?>" id="compare-total"><?php echo $text_compare; ?></a></li>
                  <li><a href="<?php echo $wishlist; ?>" id="wishlist-total"><?php echo $text_wishlist; ?></a></li>
                  <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
                </ul>
              </div>
            </li>
          <?php } ?>
          
          <?php if ($this->config->get('radio_link_information') == '1') { ?>
            <li><a href="#"><?php echo $text_information; ?></a>
              <div>
                <ul>
                  <?php foreach ($informations as $information) { ?>
                    <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </li>
          <?php } ?>
          
          <?php if ($this->config->get('radio_link_extras') == '1') { ?>
            <li><a href="#"><?php echo $text_extra; ?></a>
              <div>
                <ul>
                  <li><a href="<?php echo $manufacturer; ?>"><?php echo $text_manufacturer; ?></a></li>
                  <li><a href="<?php echo $voucher; ?>"><?php echo $text_voucher; ?></a></li>
                  <li><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></li>
                  <li><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></li>
                </ul>
              </div>
            </li>
          <?php } ?>
          
          <?php if ($this->config->get('radio_link_shopping_cart') == '1') { ?>
            <li><a href="<?php echo $shopping_cart; ?>" class="none"><?php echo $text_shopping_cart; ?></a></li>
          <?php } ?>
          
          <?php if ($this->config->get('radio_link_checkout') == '1') { ?>
            <li><a href="<?php echo $checkout; ?>" class="none"><?php echo $text_checkout; ?></a></li>
          <?php } ?>
        </ul>
      </div><div style="clear:both;"></div>
    </div><div style="clear:both;"></div>
  <?php } ?>
<?php } else if (($this->config->get('radio_link_options') == '0') && ($this->config->get('select_link_status') == '1') && ($this->config->get('tsettings_status') == '1')) { ?>
  <?php /* Show nothing *********************/	?>  
<?php } else if (($this->config->get('tsettings_status')!= "none") && ($this->config->get('select_header_status') != "none")) { ?>
  <div id="header-links">
    <div id="links">
      <ul>
        <li><a href="<?php echo $home; ?>" id="home-i"></a></li>
        <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a>
          <div>
            <ul>
              <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
              <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
              <li><a href="<?php echo $compare; ?>" id="compare-total"><?php echo $text_compare; ?></a></li>
              <li><a href="<?php echo $wishlist; ?>" id="wishlist-total"><?php echo $text_wishlist; ?></a></li>
              <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
            </ul>
          </div>
        </li>
        <li><a href="#"><?php echo $text_information; ?></a>
          <div>
            <ul>
              <?php foreach ($informations as $information) { ?>
                <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
              <?php } ?>
            </ul>
          </div>
        </li>
        <li><a href="#"><?php echo $text_extra; ?></a>
          <div>
            <ul>
              <li><a href="<?php echo $manufacturer; ?>"><?php echo $text_manufacturer; ?></a></li>
              <li><a href="<?php echo $voucher; ?>"><?php echo $text_voucher; ?></a></li>
              <li><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></li>
              <li><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></li>
            </ul>
          </div>
        </li>
        <li><a href="<?php echo $shopping_cart; ?>" class="none"><?php echo $text_shopping_cart; ?></a></li>
        <li><a href="<?php echo $checkout; ?>" class="none"><?php echo $text_checkout; ?></a></li>
      </ul>
    </div>

    <div id="switcher">
      <ul>
        <?php echo $language; ?>
        <?php echo $currency; ?>
      </ul>
    </div>
    <div style="clear:both;"></div>
  </div>
<?php } ?>

