<?php echo $header; ?>
  <div class="other-breadcrumb">
    <div class="h1"><?php echo $heading_title; ?></div>
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
      <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    <?php } ?>
  </div>
<?php echo $column_left; ?><?php echo $column_right; ?>
<div id="content"><?php echo $content_top; ?>
  <?php if ($products) { ?>
  <div class="box-filter">
  <div class="product-filter">
		<div class="display"><img src="catalog/view/theme/agnes/image/layout/list.png" alt="<?php echo $text_list; ?>" /> <a onclick="display('grid');"><img src="catalog/view/theme/agnes/image/layout/grid.png" alt="<?php echo $text_grid; ?>" /></a></div>
		<div class="product-compare"><a href="<?php echo $compare; ?>" id="compare-total"><?php echo $text_compare; ?></a></div>
		<div class="limit"><?php echo $text_limit; ?>
			<select onchange="location = this.value;">
				<?php foreach ($limits as $limits) { ?>
				<?php if ($limits['value'] == $limit) { ?>
				<option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
				<?php } else { ?>
				<option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
				<?php } ?>
				<?php } ?>
			</select>
		</div>
		<div class="sort"><?php echo $text_sort; ?>
			<select onchange="location = this.value;">
				<?php foreach ($sorts as $sorts) { ?>
				<?php if ($sorts['value'] == $sort . '-' . $order) { ?>
				<option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
				<?php } else { ?>
				<option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
				<?php } ?>
				<?php } ?>
			</select>
		</div>
	</div>
	<div class="box-content">
  <div class="product-list">
    <?php foreach ($products as $product) { ?>
    <div>
      <?php if ($product['thumb']) { ?>
			<div class="ihover">
				<div class="image"><a href="<?php echo $product['href']; ?>"><img class="image" src="<?php echo $product['thumb']; ?>" title="<?php echo $product['name']; ?>" alt="<?php echo $product['name']; ?>" /></a></div>
      </div>
			<?php } ?>
      <div class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></div>
      <div class="description"><?php echo $product['description']; ?></div>
      <?php if ($product['rating']) { ?>
      <div class="rating"><img src="catalog/view/theme/agnes/image/layout/stars_bottons/stars-<?php echo $product['rating']; ?>.png" alt="<?php echo $product['reviews']; ?>" /></div>
      <?php } ?>
      <div style="clear:both;"></div>
      <div class="list-bottom">
        <?php if ($product['price']) { ?>
        <div class="price">
          <?php if (!$product['special']) { ?>
          <?php echo $product['price']; ?>
          <?php } else { ?>
          <span class="price-old"><?php echo $product['price']; ?></span> <span class="price-new"><?php echo $product['special']; ?></span>
          <?php } ?>
        </div>
        <?php } ?>
				<?php if (($this->config->get('select_product_status') == '1') && ($this->config->get('tsettings_status') == '1')){ ?>
          <div class="div-button">
          <?php if ($this->config->get('radio_box_add_to_wish_list') == '1') { ?>
						<span class="wishlist"><a class="someClass" onclick="addToWishList('<?php echo $product['product_id']; ?>');" title="<?php echo $button_wishlist; ?>"><img class="button-wishlist" src="catalog/view/theme/agnes/image/layout/addToWishList.png" alt="<?php echo $button_wishlist; ?>" width="60" height="26" /></a></span>
          <?php } ?>
          <?php if ($this->config->get('radio_box_add_to_compare') == '1') { ?>
						<span class="compare"><a class="someClass" onclick="addToCompare('<?php echo $product['product_id']; ?>');" title="<?php echo $button_compare; ?>"><img class="button-addToCompare" src="catalog/view/theme/agnes/image/layout/addToCompare.png" alt="<?php echo $button_compare; ?>" width="60" height="26" /></a></span>
          <?php } ?>
          <?php if ($this->config->get('radio_box_add_to_cart') == '1') { ?>
            <span class="cart"><a class="someClass" onclick="addToCart('<?php echo $product['product_id']; ?>');" title="<?php echo $button_cart; ?>"><img class="button-addToCart" src="catalog/view/theme/agnes/image/layout/addToCart.png" alt="<?php echo $button_cart; ?>" width="60" height="26" /></a></span>
          <?php } ?>
          <?php if ($this->config->get('radio_box_standart_button') == '1') { ?>
            <div class="scart"><input type="button" value="<?php echo $button_cart; ?>" onclick="addToCart('<?php echo $product['product_id']; ?>');" class="button" /></div>
          <?php } ?>
          </div>
          <?php } else if ($this->config->get('select_product_status') != "none"){ ?>
            <div class="div-button">
							<span class="wishlist"><a class="someClass" onclick="addToWishList('<?php echo $product['product_id']; ?>');" title="<?php echo $button_wishlist; ?>"><img class="button-wishlist" src="catalog/view/theme/agnes/image/layout/addToWishList.png" alt="<?php echo $button_wishlist; ?>" width="60" height="26" /></a></span>
							<span class="compare"><a class="someClass" onclick="addToCompare('<?php echo $product['product_id']; ?>');" title="<?php echo $button_compare; ?>"><img class="button-addToCompare" src="catalog/view/theme/agnes/image/layout/addToCompare.png" alt="<?php echo $button_compare; ?>" width="60" height="26" /></a></span>
							<span class="cart"><a class="someClass" onclick="addToCart('<?php echo $product['product_id']; ?>');" title="<?php echo $button_cart; ?>"><img class="button-addToCart" src="catalog/view/theme/agnes/image/layout/addToCart.png" alt="<?php echo $button_cart; ?>" width="60" height="26" /></a></span>
            </div>
          <?php } ?>
			</div>
    </div>
    <?php } ?>
  </div>
	</div>
	</div>
  <div class="pagination"><?php echo $pagination; ?></div>
  <?php } else { ?>
  <div class="content"><?php echo $text_empty; ?></div>
  <div class="buttons">
    <div class="right"><a href="<?php echo $continue; ?>" class="button"><?php echo $button_continue; ?></a></div>
  </div>
  <?php }?>
  <?php echo $content_bottom; ?></div>
<script type="text/javascript"><!--
function display(view) {
	if (view == 'list') {
		$('.product-grid').attr('class', 'product-list');
		
		$('.product-list > div').each(function(index, element) {
			html  = '<div class="right">';

			html += '</div>';			
			
			html += '<div class="left">';
			
			var image = $(element).find('.image').html();
			
			if (image != null) {
				html += '<div class="ihover">';
				html += '<div class="image">' + image + '</div>';
				html += '</div>';	
			}
					
			html += '  <div class="name">' + $(element).find('.name').html() + '</div>';
			html += '  <div class="description">' + $(element).find('.description').html() + '</div>';
			
			var rating = $(element).find('.rating').html();
			
			if (rating != null) {
				html += '<div class="rating">' + rating + '</div>';
			}
      html += '<div style="clear:both;"></div>';
			html += '<div class="list-bottom">';
      
				var price = $(element).find('.price').html();
				
				if (price != null) {
					html += '<div class="price">' + price  + '</div>';
				}
				var scart = $(element).find('.scart').html();
					if (scart != null) {
						html += '<div class="scart">' + $(element).find('.scart').html() + '</div>';
				}
				var cart = $(element).find('.cart').html();
					if (cart != null) {
						html += '<span class="cart">' + $(element).find('.cart').html() + '</span>';
				}

				var compare = $(element).find('.compare').html();
				if (compare != null) {
					html += '<span class="compare">' + $(element).find('.compare').html() + '</span>';
				}
				var wishlist = $(element).find('.wishlist').html();
				if (wishlist != null) {
					html += '<span class="wishlist">' + $(element).find('.wishlist').html() + '</span>';
				}

			html += '</div>';
      
			html += '</div>';
						
			$(element).html(html);
		});		
		
		$('.display').html('<img src="catalog/view/theme/agnes/image/layout/list.png" alt="<?php echo $text_list; ?>" /> <a onclick="display(\'grid\');"><img src="catalog/view/theme/agnes/image/layout/grid.png" alt="<?php echo $text_grid; ?>" /></a>');
		
		$.totalStorage('display', 'list'); 
	} else {
		$('.product-list').attr('class', 'product-grid');
		
		$('.product-grid > div').each(function(index, element) {
			html = '';
			
			var image = $(element).find('.image').html();
			
			if (image != null) {
				html += '<div class="ihover">';
				html += '<div class="image">' + image + '</div>';
				html += '</div>';	
			}
      
			var price = $(element).find('.price').html();
			
			if (price != null) {
				html += '<div class="price">' + price  + '</div>';
			}
			
			html += '<div class="name">' + $(element).find('.name').html() + '</div>';
			html += '<div class="description">' + $(element).find('.description').html() + '</div>';
			
			html += '<div class="div-button">';
			
				var wishlist = $(element).find('.wishlist').html();
				if (wishlist != null) {
					html += '<span class="wishlist">' + $(element).find('.wishlist').html() + '</span>';
				}
				
				var compare = $(element).find('.compare').html();
				if (compare != null) {
					html += '<span class="compare">' + $(element).find('.compare').html() + '</span>';
				}
				var cart = $(element).find('.cart').html();
				if (cart != null) {
					html += '<span class="cart">' + $(element).find('.cart').html() + '</span>';
				}
			
				var scart = $(element).find('.scart').html();
				if (scart != null) {
					html += '<div class="scart">' + $(element).find('.scart').html() + '</div>';
				}
				
			html += '</div>';
			
			var rating = $(element).find('.rating').html();
			
			if (rating != null) {
				html += '<div class="rating">' + rating + '</div>';
			}
      
			$(element).html(html);
		});	
					
		$('.display').html('<a onclick="display(\'list\');"><img src="catalog/view/theme/agnes/image/layout/list.png" alt="<?php echo $text_list; ?>" /></a> <img src="catalog/view/theme/agnes/image/layout/grid.png" alt="<?php echo $text_grid; ?>" />');
		
		$.totalStorage('display', 'grid');
	}
}

view = $.totalStorage('display');

if (view) {
	display(view);
} else {
	display('list');
}
//--></script> 
<?php echo $footer; ?>