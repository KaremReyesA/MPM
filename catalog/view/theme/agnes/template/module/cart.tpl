<?php if (($this->config->get('tsettings_status') == '1') && ($this->config->get('select_header_status') == '1')) { ?>
  <?php if (($this->config->get('radio_basket_size') == "s_cart") && ($this->config->get('radio_header_basket_options') == "1")) { ?>
    <div id="cart">
      <div class="heading"><a><div class="bag"></div><span id="cart-total"><?php echo $text_items; ?></span></a></div>
        <div class="content">
          <?php if ($products || $vouchers) { ?>
          <div class="mini-cart-info">
            <table>
              <?php foreach ($products as $product) { ?>
              <tr>
                <td class="image"><?php if ($product['thumb']) { ?>
                  <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a>
                  <?php } ?></td>
                <td class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
                  <div>
                    <?php foreach ($product['option'] as $option) { ?>
                    - <small><?php echo $option['name']; ?> <?php echo $option['value']; ?></small><br />
                    <?php } ?>
                  </div></td>
                <td class="quantity">x&nbsp;<?php echo $product['quantity']; ?></td>
                <td class="total"><?php echo $product['total']; ?></td>
                <td class="remove"><img src="catalog/view/theme/agnes/image/remove-small.png" alt="<?php echo $button_remove; ?>" title="<?php echo $button_remove; ?>" onclick="(getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') ? location = 'index.php?route=checkout/cart&remove=<?php echo $product['key']; ?>' : $('#cart').load('index.php?route=module/cart&remove=<?php echo $product['key']; ?>' + ' #cart > *');" /></td>
              </tr>
              <?php } ?>
              <?php foreach ($vouchers as $voucher) { ?>
              <tr>
                <td class="image"></td>
                <td class="name"><?php echo $voucher['description']; ?></td>
                <td class="quantity">x&nbsp;1</td>
                <td class="total"><?php echo $voucher['amount']; ?></td>
                <td class="remove"><img src="catalog/view/theme/agnes/image/remove-small.png" alt="<?php echo $button_remove; ?>" title="<?php echo $button_remove; ?>" onclick="(getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') ? location = 'index.php?route=checkout/cart&remove=<?php echo $voucher['key']; ?>' : $('#cart').load('index.php?route=module/cart&remove=<?php echo $voucher['key']; ?>' + ' #cart > *');" /></td>
              </tr>
              <?php } ?>
            </table>
          </div>
          <div class="mini-cart-total">
            <table>
              <?php foreach ($totals as $total) { ?>
              <tr>
                <td class="right"><b><?php echo $total['title']; ?>:</b></td>
                <td class="right"><?php echo $total['text']; ?></td>
              </tr>
              <?php } ?>
            </table>
          </div>
          <div class="checkout"><a href="<?php echo $cart; ?>" class="button"><?php echo $text_cart; ?></a><a href="<?php echo $checkout; ?>" class="button"><?php echo $text_checkout; ?></a></div>
          <?php } else { ?>
          <div class="empty"><?php echo $text_empty; ?></div>
          <?php } ?>
        </div>
    </div>
	<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>	
		<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
		<?php /* Header // Mobile Basket // Start *******************/	?>
		  <div id="mini-cart">
			<div class="heading">
			  <a href="<?php echo $cart; ?>"><div class="bag"></div></a>
			</div>
		  </div>

		  <div id="hyperlink-cart">
			<div class="heading">
			<a href="<?php echo $cart; ?>"><div class="bag"></div>
			  <div id="cart-total-h"><?php echo $text_items; ?></div></a></div>
		  </div>
		<?php /* Header // Mobile Basket // End *********************/	?>
	<?php } ?>
  
  <?php } else if (($this->config->get('radio_basket_size') == "h_cart") && ($this->config->get('radio_header_basket_options') == "1")) { ?>
    <div id="cart">
      <div class="heading">
        <a href="<?php echo $cart; ?>"><div class="bag"></div>
          <span id="cart-total"><?php echo $text_items; ?></span>
        </a>
      </div>
    </div>
    
<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
		<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?>   
		<?php /* Header // Mobile Basket // Start *******************/	?>
		  <div id="mini-cart">
			<div class="heading">
			  <a href="<?php echo $cart; ?>"><div class="bag"></div></a>
			</div>
		  </div>

		  <div id="hyperlink-cart">
			<div class="heading">
			<a href="<?php echo $cart; ?>"><div class="bag"></div>
			  <div id="cart-total-h"><?php echo $text_items; ?></div></a></div>
		  </div>
		<?php /* Header // Mobile Basket // End *********************/	?>
	<?php } ?>
  
  <?php } else if (($this->config->get('radio_basket_size') == "m_cart") && ($this->config->get('radio_header_basket_options') == "1")) { ?>
    <div id="cart">
      <div class="heading"><a><div class="bag"></div></a></div>
        <div class="content">
          <?php if ($products || $vouchers) { ?>
          <div class="mini-cart-info">
            <table>
              <?php foreach ($products as $product) { ?>
              <tr>
                <td class="image"><?php if ($product['thumb']) { ?>
                  <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a>
                  <?php } ?></td>
                <td class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
                  <div>
                    <?php foreach ($product['option'] as $option) { ?>
                    - <small><?php echo $option['name']; ?> <?php echo $option['value']; ?></small><br />
                    <?php } ?>
                  </div></td>
                <td class="quantity">x&nbsp;<?php echo $product['quantity']; ?></td>
                <td class="total"><?php echo $product['total']; ?></td>
                <td class="remove"><img src="catalog/view/theme/agnes/image/remove-small.png" alt="<?php echo $button_remove; ?>" title="<?php echo $button_remove; ?>" onclick="(getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') ? location = 'index.php?route=checkout/cart&remove=<?php echo $product['key']; ?>' : $('#cart').load('index.php?route=module/cart&remove=<?php echo $product['key']; ?>' + ' #cart > *');" /></td>
              </tr>
              <?php } ?>
              <?php foreach ($vouchers as $voucher) { ?>
              <tr>
                <td class="image"></td>
                <td class="name"><?php echo $voucher['description']; ?></td>
                <td class="quantity">x&nbsp;1</td>
                <td class="total"><?php echo $voucher['amount']; ?></td>
                <td class="remove"><img src="catalog/view/theme/agnes/image/remove-small.png" alt="<?php echo $button_remove; ?>" title="<?php echo $button_remove; ?>" onclick="(getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') ? location = 'index.php?route=checkout/cart&remove=<?php echo $voucher['key']; ?>' : $('#cart').load('index.php?route=module/cart&remove=<?php echo $voucher['key']; ?>' + ' #cart > *');" /></td>
              </tr>
              <?php } ?>
            </table>
          </div>
          <div class="mini-cart-total">
            <table>
              <?php foreach ($totals as $total) { ?>
              <tr>
                <td class="right"><b><?php echo $total['title']; ?>:</b></td>
                <td class="right"><?php echo $total['text']; ?></td>
              </tr>
              <?php } ?>
            </table>
          </div>
          <div class="checkout"><a href="<?php echo $cart; ?>" class="button"><?php echo $text_cart; ?></a><a href="<?php echo $checkout; ?>" class="button"><?php echo $text_checkout; ?></a></div>
          <?php } else { ?>
          <div class="empty"><?php echo $text_empty; ?></div>
          <?php } ?>
        </div>
    </div>
    
<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
		<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
		<?php /* Header // Mobile Basket // Start *******************/	?>
		  <div id="mini-cart">
			<div class="heading">
			  <a href="<?php echo $cart; ?>"><div class="bag"></div></a>
			</div>
		  </div>

		  <div id="hyperlink-cart">
			<div class="heading">
			<a href="<?php echo $cart; ?>"><div class="bag"></div>
			  <div id="cart-total-h"><?php echo $text_items; ?></div></a></div>
		  </div>
		<?php /* Header // Mobile Basket // End *********************/	?>
	<?php } ?>
  <?php } ?>
<?php } else if (($this->config->get('radio_link_shopping_cart_large') == '1') && ($this->config->get('select_link_status') == '1') && ($this->config->get('tsettings_status') == '0')) { ?>
  <div id="cart">
      <div class="heading"><a><div class="bag"></div><span id="cart-total"><?php echo $text_items; ?></span></a></div>
        <div class="content">
          <?php if ($products || $vouchers) { ?>
          <div class="mini-cart-info">
            <table>
              <?php foreach ($products as $product) { ?>
              <tr>
                <td class="image"><?php if ($product['thumb']) { ?>
                  <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a>
                  <?php } ?></td>
                <td class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
                  <div>
                    <?php foreach ($product['option'] as $option) { ?>
                    - <small><?php echo $option['name']; ?> <?php echo $option['value']; ?></small><br />
                    <?php } ?>
                  </div></td>
                <td class="quantity">x&nbsp;<?php echo $product['quantity']; ?></td>
                <td class="total"><?php echo $product['total']; ?></td>
                <td class="remove"><img src="catalog/view/theme/agnes/image/remove-small.png" alt="<?php echo $button_remove; ?>" title="<?php echo $button_remove; ?>" onclick="(getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') ? location = 'index.php?route=checkout/cart&remove=<?php echo $product['key']; ?>' : $('#cart').load('index.php?route=module/cart&remove=<?php echo $product['key']; ?>' + ' #cart > *');" /></td>
              </tr>
              <?php } ?>
              <?php foreach ($vouchers as $voucher) { ?>
              <tr>
                <td class="image"></td>
                <td class="name"><?php echo $voucher['description']; ?></td>
                <td class="quantity">x&nbsp;1</td>
                <td class="total"><?php echo $voucher['amount']; ?></td>
                <td class="remove"><img src="catalog/view/theme/agnes/image/remove-small.png" alt="<?php echo $button_remove; ?>" title="<?php echo $button_remove; ?>" onclick="(getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') ? location = 'index.php?route=checkout/cart&remove=<?php echo $voucher['key']; ?>' : $('#cart').load('index.php?route=module/cart&remove=<?php echo $voucher['key']; ?>' + ' #cart > *');" /></td>
              </tr>
              <?php } ?>
            </table>
          </div>
          <div class="mini-cart-total">
            <table>
              <?php foreach ($totals as $total) { ?>
              <tr>
                <td class="right"><b><?php echo $total['title']; ?>:</b></td>
                <td class="right"><?php echo $total['text']; ?></td>
              </tr>
              <?php } ?>
            </table>
          </div>
          <div class="checkout"><a href="<?php echo $cart; ?>" class="button"><?php echo $text_cart; ?></a><a href="<?php echo $checkout; ?>" class="button"><?php echo $text_checkout; ?></a></div>
          <?php } else { ?>
          <div class="empty"><?php echo $text_empty; ?></div>
          <?php } ?>
        </div>
    </div>
    <?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
		<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?>   
		<?php /* Header // Mobile Basket // Start *******************/	?>
		  <div id="mini-cart">
			<div class="heading">
			  <a href="<?php echo $cart; ?>"><div class="bag"></div></a>
			</div>
		  </div>

		  <div id="hyperlink-cart">
			<div class="heading">
			<a href="<?php echo $cart; ?>"><div class="bag"></div>
			  <div id="cart-total-h"><?php echo $text_items; ?></div></a></div>
		  </div>
		<?php /* Header // Mobile Basket // End *********************/	?>
	<?php } ?>
<?php } else if (($this->config->get('radio_header_basket_options') == '0') && ($this->config->get('select_header_status') == '1') && ($this->config->get('tsettings_status') == '1')) { ?>
  <?php /* Show nothing *********************/	?>
<?php } else if ($this->config->get('select_header_status') == '0') { ?>
  <div id="cart">
    <div class="heading"><a><div class="bag"></div><span id="cart-total"><?php echo $text_items; ?></span></a></div>
      <div class="content">
        <?php if ($products || $vouchers) { ?>
        <div class="mini-cart-info">
          <table>
            <?php foreach ($products as $product) { ?>
            <tr>
              <td class="image"><?php if ($product['thumb']) { ?>
                <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a>
                <?php } ?></td>
              <td class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
                <div>
                  <?php foreach ($product['option'] as $option) { ?>
                  - <small><?php echo $option['name']; ?> <?php echo $option['value']; ?></small><br />
                  <?php } ?>
                </div></td>
              <td class="quantity">x&nbsp;<?php echo $product['quantity']; ?></td>
              <td class="total"><?php echo $product['total']; ?></td>
              <td class="remove"><img src="catalog/view/theme/agnes/image/remove-small.png" alt="<?php echo $button_remove; ?>" title="<?php echo $button_remove; ?>" onclick="(getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') ? location = 'index.php?route=checkout/cart&remove=<?php echo $product['key']; ?>' : $('#cart').load('index.php?route=module/cart&remove=<?php echo $product['key']; ?>' + ' #cart > *');" /></td>
            </tr>
            <?php } ?>
            <?php foreach ($vouchers as $voucher) { ?>
            <tr>
              <td class="image"></td>
              <td class="name"><?php echo $voucher['description']; ?></td>
              <td class="quantity">x&nbsp;1</td>
              <td class="total"><?php echo $voucher['amount']; ?></td>
              <td class="remove"><img src="catalog/view/theme/agnes/image/remove-small.png" alt="<?php echo $button_remove; ?>" title="<?php echo $button_remove; ?>" onclick="(getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') ? location = 'index.php?route=checkout/cart&remove=<?php echo $voucher['key']; ?>' : $('#cart').load('index.php?route=module/cart&remove=<?php echo $voucher['key']; ?>' + ' #cart > *');" /></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <div class="mini-cart-total">
          <table>
            <?php foreach ($totals as $total) { ?>
            <tr>
              <td class="right"><b><?php echo $total['title']; ?>:</b></td>
              <td class="right"><?php echo $total['text']; ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <div class="checkout"><a href="<?php echo $cart; ?>" class="button"><?php echo $text_cart; ?></a><a href="<?php echo $checkout; ?>" class="button"><?php echo $text_checkout; ?></a></div>
        <?php } else { ?>
        <div class="empty"><?php echo $text_empty; ?></div>
        <?php } ?>
      </div>
  </div>
  <?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
		<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
	  <?php /* Header // Mobile Basket // Start *******************/	?>
		<div id="mini-cart">
		  <div class="heading">
			<a href="<?php echo $cart; ?>"><div class="bag"></div></a>
		  </div>
		</div>

		<div id="hyperlink-cart">
		  <div class="heading">
		  <a href="<?php echo $cart; ?>"><div class="bag"></div>
			<div id="cart-total-h"><?php echo $text_items; ?></div></a></div>
		</div>
	  <?php /* Header // Mobile Basket // End *********************/	?>
	<?php } ?>
<?php } else if (($this->config->get('tsettings_status')!= "none") && ($this->config->get('select_header_status') != "none")) { ?>
  <div id="cart">
    <div class="heading"><a><div class="bag"></div><span id="cart-total"><?php echo $text_items; ?></span></a></div>
      <div class="content">
        <?php if ($products || $vouchers) { ?>
        <div class="mini-cart-info">
          <table>
            <?php foreach ($products as $product) { ?>
            <tr>
              <td class="image"><?php if ($product['thumb']) { ?>
                <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a>
                <?php } ?></td>
              <td class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
                <div>
                  <?php foreach ($product['option'] as $option) { ?>
                  - <small><?php echo $option['name']; ?> <?php echo $option['value']; ?></small><br />
                  <?php } ?>
                </div></td>
              <td class="quantity">x&nbsp;<?php echo $product['quantity']; ?></td>
              <td class="total"><?php echo $product['total']; ?></td>
              <td class="remove"><img src="catalog/view/theme/agnes/image/remove-small.png" alt="<?php echo $button_remove; ?>" title="<?php echo $button_remove; ?>" onclick="(getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') ? location = 'index.php?route=checkout/cart&remove=<?php echo $product['key']; ?>' : $('#cart').load('index.php?route=module/cart&remove=<?php echo $product['key']; ?>' + ' #cart > *');" /></td>
            </tr>
            <?php } ?>
            <?php foreach ($vouchers as $voucher) { ?>
            <tr>
              <td class="image"></td>
              <td class="name"><?php echo $voucher['description']; ?></td>
              <td class="quantity">x&nbsp;1</td>
              <td class="total"><?php echo $voucher['amount']; ?></td>
              <td class="remove"><img src="catalog/view/theme/agnes/image/remove-small.png" alt="<?php echo $button_remove; ?>" title="<?php echo $button_remove; ?>" onclick="(getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') ? location = 'index.php?route=checkout/cart&remove=<?php echo $voucher['key']; ?>' : $('#cart').load('index.php?route=module/cart&remove=<?php echo $voucher['key']; ?>' + ' #cart > *');" /></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <div class="mini-cart-total">
          <table>
            <?php foreach ($totals as $total) { ?>
            <tr>
              <td class="right"><b><?php echo $total['title']; ?>:</b></td>
              <td class="right"><?php echo $total['text']; ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <div class="checkout"><a href="<?php echo $cart; ?>" class="button"><?php echo $text_cart; ?></a> <a href="<?php echo $checkout; ?>" class="button"><?php echo $text_checkout; ?></a></div>
        <?php } else { ?>
        <div class="empty"><?php echo $text_empty; ?></div>
        <?php } ?>
      </div>
  </div>
  <?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
		<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
	  <?php /* Header // Mobile Basket // Start *******************/	?>
		<div id="mini-cart">
		  <div class="heading">
			<a href="<?php echo $cart; ?>"><div class="bag"></div></a>
		  </div>
		</div>

		<div id="hyperlink-cart">
		  <div class="heading">
		  <a href="<?php echo $cart; ?>"><div class="bag"></div>
			<div id="cart-total-h"><?php echo $text_items; ?></div></a></div>
		</div>
	  <?php /* Header // Mobile Basket // End *********************/	?>
	<?php } ?>
<?php } ?>

<?php if (($this->config->get('tsettings_status') == '1') && ($this->config->get('select_link_status') == '1')) { ?>
  <?php if ($this->config->get('radio_link_shopping_cart_large') == "1") { ?>
    <div id="cart" class="active">
      <div class="content">
        <?php if ($products || $vouchers) { ?>
        <div class="mini-cart-info">
          <table>
            <?php foreach ($products as $product) { ?>
            <tr>
              <td class="image"><?php if ($product['thumb']) { ?>
                <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a>
                <?php } ?></td>
              <td class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
                <div>
                  <?php foreach ($product['option'] as $option) { ?>
                  - <small><?php echo $option['name']; ?> <?php echo $option['value']; ?></small><br />
                  <?php } ?>
                </div></td>
              <td class="quantity">x&nbsp;<?php echo $product['quantity']; ?></td>
              <td class="total"><?php echo $product['total']; ?></td>
              <td class="remove"><img src="catalog/view/theme/agnes/image/remove-small.png" alt="<?php echo $button_remove; ?>" title="<?php echo $button_remove; ?>" onclick="(getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') ? location = 'index.php?route=checkout/cart&remove=<?php echo $product['key']; ?>' : $('#cart').load('index.php?route=module/cart&remove=<?php echo $product['key']; ?>' + ' #cart > *');" /></td>
            </tr>
            <?php } ?>
            <?php foreach ($vouchers as $voucher) { ?>
            <tr>
              <td class="image"></td>
              <td class="name"><?php echo $voucher['description']; ?></td>
              <td class="quantity">x&nbsp;1</td>
              <td class="total"><?php echo $voucher['amount']; ?></td>
              <td class="remove"><img src="catalog/view/theme/agnes/image/remove-small.png" alt="<?php echo $button_remove; ?>" title="<?php echo $button_remove; ?>" onclick="(getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') ? location = 'index.php?route=checkout/cart&remove=<?php echo $voucher['key']; ?>' : $('#cart').load('index.php?route=module/cart&remove=<?php echo $voucher['key']; ?>' + ' #cart > *');" /></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <div class="mini-cart-total">
          <table>
            <?php foreach ($totals as $total) { ?>
            <tr>
              <td class="right"><b><?php echo $total['title']; ?>:</b></td>
              <td class="right"><?php echo $total['text']; ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <div class="checkout"><a href="<?php echo $cart; ?>" class="button"><?php echo $text_cart; ?></a><a href="<?php echo $checkout; ?>" class="button"><?php echo $text_checkout; ?></a></div>
        <?php } else { ?>
        <div class="empty"><?php echo $text_empty; ?></div>
        <?php } ?>
      </div>
    </div>
  <?php } ?>
<?php } ?>
