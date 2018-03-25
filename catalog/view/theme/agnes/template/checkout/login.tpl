<div class="login-content">
<div class="left">
  <div class="box-heading"><?php echo $text_new_customer; ?></div>
  <div class="left-content">
  <p><?php echo $text_checkout; ?></p>
  <label for="register">
    <?php if ($account == 'register') { ?>
    <input type="radio" name="account" value="register" id="register" checked="checked" />
    <?php } else { ?>
    <input type="radio" name="account" value="register" id="register" />
    <?php } ?>
    <b><?php echo $text_register; ?></b></label>
  <br />
  <?php if ($guest_checkout) { ?>
  <label for="guest">
    <?php if ($account == 'guest') { ?>
    <input type="radio" name="account" value="guest" id="guest" checked="checked" />
    <?php } else { ?>
    <input type="radio" name="account" value="guest" id="guest" />
    <?php } ?>
    <b><?php echo $text_guest; ?></b></label>
  <br />
  <?php } ?>
  <p><?php echo $text_register_account; ?></p>
  </div>

  <div class="left-button"><input type="button" value="<?php echo $button_continue; ?>" id="button-account" class="button" /></div>
</div>
<div id="login" class="right">
  <div class="box-heading"><?php echo $text_returning_customer; ?></div>
  <div class="right-content">
  <p><?php echo $text_i_am_returning_customer; ?></p>
  <b><?php echo $entry_email; ?></b><br />
  <input type="text" name="email" value="" />
  <br />
  <br />
  <b><?php echo $entry_password; ?></b><br />
  <input type="password" name="password" value="" />
  <br />
  <a href="<?php echo $forgotten; ?>"><?php echo $text_forgotten; ?></a><br />
  </div>
  <div class="right-button"><input type="button" value="<?php echo $button_login; ?>" id="button-login" class="button" /></div>
</div>
</div>