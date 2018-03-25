<?php if ($position == 'content_top'  or  $position == 'content_bottom') { ?>
<div class="box">
  <div class="box-heading"><?php echo $heading_title; ?></div>
  <div class="box-content text-align">
    <div class="agnes-product">
      <?php foreach ($products as $product) { ?>
      <div>
        <div class="ihover">
          <?php if ($product['thumb']) { ?>
          <div class="image"><a href="<?php echo $product['href']; ?>"><img class="image" src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" /></a></div>
          <?php } ?>
        </div>
        <?php if ($product['price']) { ?>
        <div class="price">
          <?php if (!$product['special']) { ?>
          <?php echo $product['price']; ?>
          <?php } else { ?>
          <span class="price-old"><?php echo $product['price']; ?></span> <span class="price-new"><?php echo $product['special']; ?></span>
          <?php } ?>
        </div>
        <?php } ?>
        <div class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></div>
        <?php if ($product['rating']) { ?>
          <div class="rating"><img src="catalog/view/theme/agnes/image/layout/stars_bottons/stars-<?php echo $product['rating']; ?>.png" alt="<?php echo $product['reviews']; ?>" /></div>
        <?php } ?>
        <?php if (($this->config->get('select_product_status') == '1') && ($this->config->get('tsettings_status') == '1')){ ?>
          <div class="div-button">
          <?php if ($this->config->get('radio_box_add_to_wish_list') == '1') { ?>
            <a class="someClass" onclick="addToWishList('<?php echo $product['product_id']; ?>');" title="<?php echo $button_wishlist; ?>"><img class="button-wishlist" src="catalog/view/theme/agnes/image/layout/addToWishList.png" alt="<?php echo $button_wishlist; ?>" width="60" height="26" /></a>
          <?php } ?>
          <?php if ($this->config->get('radio_box_add_to_compare') == '1') { ?>
            <a class="someClass" onclick="addToCompare('<?php echo $product['product_id']; ?>');" title="<?php echo $button_compare; ?>"><img class="button-addToCompare" src="catalog/view/theme/agnes/image/layout/addToCompare.png" alt="<?php echo $button_compare; ?>" width="60" height="26" /></a>
          <?php } ?>
          <?php if ($this->config->get('radio_box_add_to_cart') == '1') { ?>
            <a class="someClass" onclick="addToCart('<?php echo $product['product_id']; ?>');" title="<?php echo $button_cart; ?>"><img class="button-addToCart" src="catalog/view/theme/agnes/image/layout/addToCart.png" alt="<?php echo $button_cart; ?>" width="60" height="26" /></a>
          <?php } ?>
          <?php if ($this->config->get('radio_box_standart_button') == '1') { ?>
            <div class="cart"><input type="button" value="<?php echo $button_cart; ?>" onclick="addToCart('<?php echo $product['product_id']; ?>');" class="button" /></div>
          <?php } ?>
          </div>
          <?php } else if ($this->config->get('select_product_status') != "none"){ ?>
            <div class="div-button">
              <a class="someClass" onclick="addToWishList('<?php echo $product['product_id']; ?>');" title="<?php echo $button_wishlist; ?>"><img class="button-wishlist" src="catalog/view/theme/agnes/image/layout/addToWishList.png" alt="<?php echo $button_wishlist; ?>" width="60" height="26" /></a>
              <a class="someClass" onclick="addToCompare('<?php echo $product['product_id']; ?>');" title="<?php echo $button_compare; ?>"><img class="button-addToCompare" src="catalog/view/theme/agnes/image/layout/addToCompare.png" alt="<?php echo $button_compare; ?>" width="60" height="26" /></a>
              <a class="someClass" onclick="addToCart('<?php echo $product['product_id']; ?>');" title="<?php echo $button_cart; ?>"><img class="button-addToCart" src="catalog/view/theme/agnes/image/layout/addToCart.png" alt="<?php echo $button_cart; ?>" width="60" height="26" /></a>
            </div>
          <?php } ?>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<?php } else if ($position == 'column_left' or $position == 'column_right') { ?>
	<div class="side-box">
  <div class="side-box-heading"><?php echo $heading_title; ?></div>
  <div class="side-box-content text-align">
    <div class="side-box-product"><div class="bxslider">
      <?php foreach ($products as $product) { ?>
      <div class="slide">
        <div class="ihover">
          <?php if ($product['thumb']) { ?>
          <div class="image"><a href="<?php echo $product['href']; ?>"><img class="image" src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" /></a></div>
          <?php } ?>
        </div>
        <?php if ($product['price']) { ?>
        <div class="price">
          <?php if (!$product['special']) { ?>
          <?php echo $product['price']; ?>
          <?php } else { ?>
          <span class="price-old"><?php echo $product['price']; ?></span> <span class="price-new"><?php echo $product['special']; ?></span>
          <?php } ?>
        </div>
        <?php } ?>
        <div class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></div>
        <?php if ($product['rating']) { ?>
          <div class="rating"><img src="catalog/view/theme/agnes/image/layout/stars_bottons/stars-<?php echo $product['rating']; ?>.png" alt="<?php echo $product['reviews']; ?>" /></div>
        <?php } ?>
				</div>
      <?php } ?></div>
    </div>
  </div>
</div>
<?php } ?>
