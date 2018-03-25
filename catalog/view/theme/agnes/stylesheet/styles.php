<?php /* Basket // Start ******************/	?>
	<?php if ($this->config->get('radio_header_basket_options') == "1") { ?>
	<link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/cart/<?php echo  $this->config->get('radio_basket_size');?>.css" />
	<?php } else if ($this->config->get('radio_header_basket_options') == "0") { ?>
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/cart/s_cart.css" />
  <?php } ?>
<?php /* Basket // End ********************/	?>


<?php /* Search // Start ******************/	?>
	<?php if ($this->config->get('radio_header_search_options') == "1") { ?>
	<link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/search/<?php echo  $this->config->get('radio_search_size');?>.css" />
	<?php } else if ($this->config->get('radio_header_search_options') == "0") { ?>
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/search/s_search.css" />
  <?php } ?>
<?php /* Search // End ********************/	?>


<?php /* Login // Start *******************/	?>
	<?php if ($this->config->get('radio_header_login_options') == "1") { ?>
	<link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/login/<?php echo  $this->config->get('radio_login_size');?>.css" />
  <?php } else if ($this->config->get('radio_header_login_options') == "0") { ?>
  <link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/login/s_login.css" />
	<?php } ?>
<?php /* Login // End *********************/	?>


<?php /* link // Start ********************/	?>
	<?php if ($this->config->get('radio_link_shopping_cart_large') == "1") { ?>
	<link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/cart/l_cart.css" />
	<?php } ?>
<?php /* link // End **********************/	?>


<?php /* Menu // Start ********************/	?>
	<?php if ($this->config->get('select_menu_status') == "1") { ?>
	<link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/menu/<?php echo  $this->config->get('radio_menu_size');?>.css" />
  	<?php } else if ($this->config->get('select_menu_status') == "0") { ?>
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/menu/s_menu.css" />
	<?php } ?>
<?php /* Menu // End **********************/	?>

<?php /* Product box // Start *************/	?>
  <link rel="stylesheet" type="text/css" href="catalog/view/theme/agnes/stylesheet/product/a_product.css" />
<?php /* Product box // End *********88****/	?>


<?php /* Dynamic Styles // Start **********/	?>
	<?php include ('catalog/view/theme/agnes/stylesheet/dynamic-styles.php'); ?>
<?php /* Dynamic Styles // End ************/	?>
