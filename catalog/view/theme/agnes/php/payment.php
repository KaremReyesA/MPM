<?php if($this->config->get('radio_other_ele_payment_options') == '1'){ ?>
  <div id="footer-payment-method">
    <div class="footer-heading"><?php echo $this->config->get('input_payment_name_' . $this->config->get('config_language_id'));?></div>
    <ul>
      <?php if ($this->config->get('radio_radio_other_ele_americanexpress') == '1') { ?>
      <li class="someClass" title="American express"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/americanexpress.png" alt="americanexpress"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_cirrus') == '1') { ?>
      <li class="someClass" title="Cirrus"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/cirrus.png" alt="cirrus"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_delta') == '1') { ?>
      <li class="someClass" title="Delta"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/delta.png" alt="delta"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_dinersclub') == '1') { ?>
      <li class="someClass" title="Diners Club"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/dinersclub.png" alt="dinersclub"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_directdebit') == '1') { ?>
      <li class="someClass" title="Direct Debit"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/directdebit.png" alt="directdebit"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_discover') == '1') { ?>
      <li class="someClass" title="Discover"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/discover.png" alt="discover"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_egold') == '1') { ?>
      <li class="someClass" title="e-gold"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/egold.png" alt="egold"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_maestro') == '1') { ?>
      <li class="someClass" title="Maestro"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/maestro.png" alt="maestro"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_mastercard') == '1') { ?>
      <li class="someClass" title="Master Card"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/mastercard.png" alt="mastercard"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_paypal') == '1') { ?>
      <li class="someClass" title="Paypal"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/paypal.png" alt="paypal"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_solo') == '1') { ?>
      <li class="someClass" title="Solo"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/solo.png" alt="solo"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_switch') == '1') { ?>
      <li class="someClass" title="Switch"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/switch.png" alt="switch"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_visa') == '1') { ?>
      <li class="someClass" title="Visa"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/visa.png" alt="visa"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_visaelectron') == '1') { ?>
      <li class="someClass" title="Visa Electron"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/visaelectron.png" alt="visaelectron"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_westernunion') == '1') { ?>
      <li class="someClass" title="Western Union"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/westernunion.png" alt="westernunion"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_wirecard') == '1') { ?>
      <li class="someClass" title="Wirecard"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/wirecard.png" alt="wirecard"></li>
      <?php } if ($this->config->get('radio_radio_other_ele_worldpay') == '1') { ?>
      <li class="someClass" title="Worldpay"><img src="catalog/view/theme/agnes/image/layout/footer/42x42px/worldpay.png" alt="worldpay"></li>
      <?php } ?>
    </ul>
  </div>
<?php } ?>