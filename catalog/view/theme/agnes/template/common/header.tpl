<?php /* Temporarily disconnected // Mobile detect // Start */ ?>
<?php
require_once DIR_TEMPLATE . '/agnes/php/mobile_detect.php' ;
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
?><?php if ($detect->isMobile() && !$detect->isTablet()) { ?><?php } ?>
<?php /* Temporarily disconnected // Mobile detect // Start */ ?>

<?php /* Detect IE8 and disconnect responsive design // Start */ ?>
	<?php $msie8 = strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE 8.0') ? true : false; ?>
<?php /* Detect IE8 and disconnect responsive design // End */ ?>

<!DOCTYPE html>
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<head>
<meta charset="UTF-8" />
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content="<?php echo $keywords; ?>" />
<?php } ?>
<?php if ($icon) { ?>
<link href="<?php echo $icon; ?>" rel="icon" />
<?php } ?>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>

<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
<?php } else if ($this->config->get('radio_responsive_options') == '1') { ?>
<meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
<?php } ?>

<link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />


<?php if($this->config->get('tsettings_status') == '1'){ ?>
	<?php include ('catalog/view/theme/agnes/stylesheet/styles.php'); ?>
	
	<?php if(($this->config->get('select_effects_status') == '1') && ($this->config->get('radio_tiptip_options') == '1')) { ?>
	<link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/tiptip/tipTip.css" />
	<?php } ?>
	<?php if(($this->config->get('select_effects_status') == '1') && ($this->config->get('radio_box_slider_options') == '1')) { ?>
	<link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/jquery.bxslider.css" />
	<?php } ?>
	<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
	<?php } else if ($this->config->get('radio_responsive_options') == '1') { ?>
		<link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/mobile_stylesheet.css" />
		<?php include ('catalog/view/theme/agnes/php/responsive.php'); ?>
	<?php } ?>
	<?php if (($this->config->get('radio_css_options') == '1') && ($this->config->get('select_custom_code_status') == '1')) { ?>
		<style type="text/css"><?php echo html_entity_decode($this->config->get('textarea_css'));?></style>
	<?php } ?>
<?php } else if($this->config->get('tsettings_status') != 'none'){ ?>
	<link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/cart/s_cart.css" />
	<link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/search/s_search.css" />
	<link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/login/s_login.css" />
	<link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/menu/s_menu.css" />
	<link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/product/a_product.css" />
<?php } ?>

<?php foreach ($styles as $style) { ?>
<link rel="<?php echo $style['rel']; ?>" type="text/css" href="<?php echo $style['href']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="catalog/view/theme/agnes/js/common.js"></script>
<script type="text/javascript" src="catalog/view/theme/agnes/js/menu.js"></script>
<script type="text/javascript" src="catalog/view/theme/agnes/js/jquery.nivo.slider.pack.js"></script>

<?php if($this->config->get('tsettings_status') == '1'){ ?>
	<?php if (($this->config->get('radio_box_zoom') == '1') && ($this->config->get('select_product_status') == '1')) { ?>
		<script type="text/javascript" src="catalog/view/theme/agnes/js/hover.js"></script>
		<script type="text/javascript" src="catalog/view/theme/agnes/js/imagelink.js"></script>
	<?php } ?>

	<?php if(($this->config->get('select_effects_status') == '1') && ($this->config->get('radio_box_slider_options') == '1')) { ?>
		<script type="text/javascript" src="catalog/view/theme/agnes/js/jquery.bxslider.js"></script>
		<script type="text/javascript"><!--
			$(document).ready(function(){
				$('.bxslider').bxSlider();
			});
			--></script>
	<?php } ?>
	
	<?php if(($this->config->get('select_effects_status') == '1') && ($this->config->get('radio_tiptip_options') == '1')) { ?>
	<script type="text/javascript" src="catalog/view/theme/agnes/js/tiptip/jquery.tipTip.js"></script>
	<script type="text/javascript"><!--
	$(document).ready(function(){
			$(".someClass").tipTip();
	});
	//--></script>
	<?php } ?>
<?php } ?>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,600italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>

<?php if (($this->config->get('radio_google_code_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?>
	<?php echo html_entity_decode($this->config->get('textarea_google_code'));?>
<?php } ?>
<?php foreach ($scripts as $script) { ?>
<script type="text/javascript" src="<?php echo $script; ?>"></script>
<?php } ?>
<!--[if IE 7]> 
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie7.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie6.css" />
<script type="text/javascript" src="catalog/view/javascript/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('#logo img');
</script>
<![endif]-->
<?php if ($stores) { ?>
<script type="text/javascript"><!--
$(document).ready(function() {
<?php foreach ($stores as $store) { ?>
$('body').prepend('<iframe src="<?php echo $store; ?>" style="display: none;"></iframe>');
<?php } ?>
});
//--></script>
<?php } ?>

<?php /* Custom JS // Start *******************************/ ?>
  <?php if (($this->config->get('radio_js_options') == '1') && ($this->config->get('select_custom_code_status') == '1') && ($this->config->get('tsettings_status') == '1')) { ?>
    <script type="text/javascript"><?php echo html_entity_decode($this->config->get('textarea_js'));?></script>
  <?php } ?>
<?php /* Custom JS // End *********************************/ ?>

<?php echo $google_analytics; ?>
</head>
<body>
<?php /* Background Settings // Start *************/	?>
	<?php if (($this->config->get('tsettings_status') == '1') && ($this->config->get('select_background_status') == '1')) { ?>
		<?php include ('catalog/view/theme/agnes/php/background.php'); ?>
	<?php } ?>
<?php /* Background Settings // End ***************/	?>

<div id="container-fb">
	<div id="container-s-top">
	    <?php /* Header // Search // Start ****************/	?>
        <?php if (($this->config->get('tsettings_status') == '1') && ($this->config->get('select_header_status') == '1')) { ?>
          <?php include ('catalog/view/theme/agnes/php/top_header.php'); ?>
        <?php } ?>
      <?php /* Header // Search // End ******************/	?>
			
		<div id="header">
      <div id="header-middle">
        <?php /* Header // Search // Start ****************/	?>
          <?php if ($this->config->get('radio_link_search') != "1") { ?>
            <?php include ('catalog/view/theme/agnes/php/search.php'); ?>
          <?php } else if ($this->config->get('tsettings_status') == "0") { ?>
            <?php include ('catalog/view/theme/agnes/php/search.php'); ?>
          <?php } ?>
        <?php /* Header // Search // End ******************/	?>
        
        <?php /* Header // Basket // Start ****************/	?>
          <?php if ($this->config->get('radio_link_shopping_cart_large') != "1") { ?>
            <?php echo $cart; ?>
          <?php } else if ($this->config->get('tsettings_status') == "0") { ?>
            <?php echo $cart; ?>
          <?php } ?>
        <?php /* Header // Basket // End ******************/	?>
			

        <?php /* Header // Logo // Start ******************/	?>
          <?php include ('catalog/view/theme/agnes/php/logo.php'); ?>
        <?php /* Header // Logo // End ********************/	?>
        
        
        <?php /* Header // LogIn // Start *********************/	?>
          <?php if ($this->config->get('radio_link_login') != "1") { ?>
            <?php include ('catalog/view/theme/agnes/php/login.php'); ?>
          <?php } else if ($this->config->get('tsettings_status') == "0") { ?>
            <?php include ('catalog/view/theme/agnes/php/login.php'); ?>
          <?php } ?>
        <?php /* Header // LogIn // End ***********************/	?>
        
      </div><div style="clear:both;"></div>
		</div>
		
			<?php if (($this->config->get('tsettings_status') == '1') && ($this->config->get('select_header_status') == '1')) { ?>
				<div id="header-bottom">
					<?php if($this->config->get('radio_header_additional_space_options') == '1'){ ?>
						<?php echo html_entity_decode($this->config->get('textarea_add_space_text_' . $this->config->get('config_language_id')));?>
					<?php } ?>
				</div><div style="clear:both;"></div>
			<?php } ?>
			
        <?php /* Link // Start ********************/	?>
          <?php if ($this->config->get('select_link_status') == "1") { ?>
            <?php include ('catalog/view/theme/agnes/php/link.php'); ?>
          <?php } else if ($this->config->get('tsettings_status') != "none") { ?>
            <?php include ('catalog/view/theme/agnes/php/link.php'); ?>
          <?php } ?>
        <?php /* Link // End **********************/	?>
      
			
        <?php /* Menu // Start ********************/	?>
          <?php include ('catalog/view/theme/agnes/php/menu.php'); ?>
        <?php /* Menu // End **********************/	?>
				

	<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
	<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
    <?php /* Mobile Navigation // Start ********************/	?>
      <div id="mobile-nav">
				<?php if ($this->config->get('radio_link_options') == "1") { ?>
        <div class="mobile-menu-tab"><div class="mobile-menu-icon"></div>Menu</div>
				<?php } ?>
        <?php if ($this->config->get('radio_link_options') == "1") { ?>
					<div class="mobile-link-tab"><div class="mobile-link-icon"></div>Links</div>
				<?php } ?>
      </div><div style="clear:both;"></div>
      
      <script>
        $(".mobile-menu-tab").toggle(function(){
            $(".mobile-menu-content").slideDown();
        },function(){
            $(".mobile-menu-content").slideUp();
        });

        $(".mobile-link-tab").toggle(function(){
            $(".mobile-link-content").slideDown();
        },function(){
            $(".mobile-link-content").slideUp();
        });
      </script>
      
    <?php /* Mobile Navigation // End **********************/	?>
      
    <div id="mobile-content">
      <?php /* Mobile Menu // Start ********************/	?>
        <div class="mobile-menu-content">
          <?php if ($categories) { ?>
            <div class="mobile-menu">
              <ul>
                <?php foreach ($categories as $category) { ?>
                  <li><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
                    <?php if ($category['children']) { ?>
                    <div>
                    <?php for ($i = 0; $i < count($category['children']);) { ?>
                    <ul>
                      <?php $j = $i + ceil(count($category['children']) / $category['column']); ?>
                      <?php for (; $i < $j; $i++) { ?>
                      <?php if (isset($category['children'][$i])) { ?>
                      <li><a href="<?php echo $category['children'][$i]['href']; ?>"><?php echo html_entity_decode($category['children'][$i]['name']); ?></a></li>
                      <?php } ?>
                      <?php } ?>
                    </ul>
                    <?php } ?>
                    </div>
                    <?php } ?>
                  </li>
                <?php } ?>
              </ul>
            </div>
          <?php } ?>
        </div>
      <?php /* Mobile Menu // End **********************/	?>
    
      <?php /* Mobile Links // Start *******************/	?>
        <div class="mobile-link-content">
          <div class="mobile-link">
            <ul>
							<?php if ($this->config->get('radio_link_currency') == "1") { ?>
              <?php echo $currency; ?>
							<?php } ?>
							<?php if ($this->config->get('radio_link_language') == "1") { ?>
              <?php echo $language; ?>
							<?php } ?>
							<?php if ($this->config->get('radio_link_my_account') == "1") { ?>
              <li><span><?php echo $text_account; ?></span>
                <div>
                  <ul>
                    <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
                    <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
                    <li><a href="<?php echo $compare; ?>" id="compare-total-m"><?php echo $text_compare; ?></a></li>
                    <li><a href="<?php echo $wishlist; ?>" id="wishlist-total-m"><?php echo $text_wishlist; ?></a></li>
                    <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
                  </ul>
                </div>
              </li>
							<?php } ?>
							<?php if ($this->config->get('radio_link_information') == "1") { ?>
              <li><span><?php echo $text_information; ?></span>
                <div>
                  <ul>
                    <?php foreach ($informations as $information) { ?>
                      <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
                    <?php } ?>
                  </ul>
                </div>
              </li>
							<?php } ?>
							<?php if ($this->config->get('radio_link_extras') == "1") { ?>
              <li><span><?php echo $text_extra; ?></span>
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
							<?php if ($this->config->get('radio_link_shopping_cart') == "1") { ?>
							<li><span><?php echo $text_shopping_cart; ?></span>
								<div>
                  <ul>
										<li><a href="<?php echo $shopping_cart; ?>" class="none"><?php echo $text_shopping_cart; ?></a></li>
									</ul>
								</div>
							</li>
							<?php } ?>
							<?php if ($this->config->get('radio_link_checkout') == "1") { ?>
							<li><span><?php echo $text_checkout; ?></span>
								<div>
                  <ul>
										<li><a href="<?php echo $checkout; ?>" class="none"><?php echo $text_checkout; ?></a></li>
									</ul>
								</div>
							</li>
							<?php } ?>
              <?php if ($this->config->get('radio_link_search') == '1') { ?>
                <li><a href="<?php echo $search; ?>" class="none"><?php echo $text_search; ?></a></li>
              <?php } ?>
            </ul>
          </div>
        </div><div style="clear:both;"></div>
      <?php /* Mobile Links // End *********************/	?>
    </div>
  <?php } ?>
	<div id="container">
		<div id="notification"></div>