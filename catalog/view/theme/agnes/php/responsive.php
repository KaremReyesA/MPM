<style type="text/css">
/*
// ----------------------------------------------------------------------------
// Large desktop
// ----------------------------------------------------------------------------
*/
@media (min-width: 1200px) {}

/*
// ----------------------------------------------------------------------------
// Regular sized laptops
// ----------------------------------------------------------------------------
*/
@media (min-width: 980px) {
#header #mini-cart { display: none }
#header #hyperlink-cart { display: none }
#mini-search { display: none }
#hyperlink-search { display: none }
#m-mini-welcome-button { display: none }
#mobile-nav { display: none }
.mobile-language { display: none }
.mobile-currency { display: none }
#mobile-content { display: none }
}

/*
// ----------------------------------------------------------------------------
// Portrait tablet to landscape and desktop
// ----------------------------------------------------------------------------
*/
@media (min-width: 768px) and (max-width: 979px) {
#container-s-top { width: 750px }
#header #mini-cart { display: none }
#header #hyperlink-cart { display: none }
#header #search input { width: 140px }
#mini-search { display: none }
#hyperlink-search { display: none }
#m-mini-welcome-button { display: none }
#mobile-nav { display: none }
.mobile-language { display: none }
.mobile-currency { display: none }
#mobile-content { display: none }
#column-left + #content .htabs { padding: 0px }
#column-left + #content .htabs a { width: 92.5% }
#column-right + #content .htabs { padding: 0px }
#column-right + #content .htabs a { width: 92.5% }
#column-left + #column-right + #content .htabs { padding: 0px }
#column-left + #column-right + #content .htabs a { width: 88.5% }
/* Product Box // Start */
#content .product-grid > div,
#content .agnes-product > div { width: 200px }
#content #tab-related  .box-product > div { width: 215px }
/* Left */
#column-left + #content .product-grid > div,
#column-left + #content .agnes-product > div { width: 215px }
#column-left + #content #tab-related  .box-product > div { width: 240px }
/* Right */
#column-right + #content #tab-related  .box-product > div { width: 240px }
#column-right + #content { margin-right: 195px }
#column-right + #content .product-grid > div,
#column-right + #content .agnes-product > div { width: 215px }
/* Both */
#column-left + #column-right + #content,
#column-left + #content { margin-left: 195px }
#column-left + #column-right + #content .product-grid > div,
#column-left + #column-right + #content .agnes-product > div { width: 240px }
/* Product Box // End */
/* Product info // Start */
.product-info .image { width: 97.5% }
.product-info .image-additional { width: 99% }
.product-info > .left {
    width: 99%;
    clear: both;
}
.product-info > .right {
    float: left;
    width: 99%;
    margin-right: 0px;
}
.product-info > .left + .right { margin-left: 0px }
/* Product info // End */
}
<?php if (($this->config->get('tsettings_status') == '1') && ($this->config->get('select_header_status') == '1')){ ?>
	<?php if (($this->config->get('radio_header_basket_options') == '1') && ($this->config->get('select_header_status') == '1')) { ?>
		/* Portrait tablet to landscape and desktop // For Shopping Basket */
		@media (min-width: 768px) and (max-width: 979px) {
			#header #cart {
				top: <?php echo  $this->config->get('input_header_basket_position_tablet_top');?>px;
				right: <?php echo  $this->config->get('input_header_basket_position_tablet_right');?>px;
			}
		}
	<?php } ?>
		
	<?php if (($this->config->get('radio_header_search_options') == '1') && ($this->config->get('select_header_status') == '1')) { ?>
	/* Portrait tablet to landscape and desktop // For Search */
		@media (min-width: 768px) and (max-width: 979px) {
			#header #search {
				top: <?php echo  $this->config->get('input_header_search_position_tablet_top');?>px;
				right: <?php echo  $this->config->get('input_header_search_position_tablet_right');?>px;
			}
		}
	<?php } ?>

	<?php if (($this->config->get('radio_header_login_options') == '1') && ($this->config->get('select_header_status') == '1')) { ?>
	/* Portrait tablet to landscape and desktop // For LogIn */
		@media (min-width: 768px) and (max-width: 979px) {
			#mini-welcome-button {
				top: <?php echo  $this->config->get('input_header_login_position_tablet_top');?>px;
				right: <?php echo  $this->config->get('input_header_login_position_tablet_right');?>px;
			}
		}
	<?php } ?>
<?php } ?>

/*
// ----------------------------------------------------------------------------
// Landscape phone to portrait tablet
// ----------------------------------------------------------------------------
*/
@media (min-width: 481px) and (max-width: 767px) {
#container-s-top { width: 460px }
#header { height: 140px }
#header-top { text-align: center }
#header-massage {
    float: none;
    display: block;
    text-align: center;
}
.social-network-top {
    float: none;
    display: block;
    text-align: center;
    width: 99%;
}
.social-network-top > ul { display: block }
#logo {
    display: block;
    text-align: center;
    padding-top: 15px;
    width: 100%;
    height: auto;
    top: 0px;
    left: 0px;
}
#logo img {
    width: 45%;
    height: auto;
}
#header #cart { display: none }
#header #mini-cart { right: 285px }
#header #hyperlink-cart { display: none }
#header #search { display: none }
#header #mini-search { right: 135px }
#header #hyperlink-search { display: none }
#welcome { display: none }
#mini-welcome-button { display: none }
#m-mini-welcome-button { right: 210px }
#header-links { display: none }
.standart-language { display: none }
.standart-currency { display: none }
#menu { display: none }
#full-menu { display: none }
/* Account Login // Start */
.login-content .left {
    display: block;
    width: 99%;
}
.login-content .right {
    display: block;
    width: 99%;
}
/* Account Login // Ens */
/* Layout // Start */
#content { padding: 0px }
#content .box-content { padding: 0px }
.checkout-content .left {
	display: block;
	width: 99%;
}
.checkout-content .right { 
	display: block;
	width: 99%;
}
/* Layout // End */
/* Product Box // Start */
#content .product-grid > div,
#content .agnes-product > div {
    width: 190px;
    margin: 10px;
}
#content #tab-related  .box-product > div { width: 190px }
/* Left */
#column-left { display: none }
#column-left + #content { margin-left: 0px }
#column-left + #content .product-grid > div,
#column-left + #content .agnes-product > div { width: 190px }
#column-left + #content #tab-related  .box-product > div { width: 190px }
/* Right */
#column-right + #content #tab-related  .box-product > div { width: 190px }
#column-right { display: none }
#column-right + #content { margin-right: 0px }
#column-right + #content .product-grid > div,
#column-right + #content .agnes-product > div { width: 190px }
/* Both */
#column-left + #column-right + #content,
#column-left + #content { margin-left: 0px }
#column-left + #column-right + #content .product-grid > div,
#column-left + #column-right + #content .agnes-product > div { width: 190px }
/* Product Box // End */
/* Product info // Start */
.htabs { padding: 0px }
.htabs a { width: 91% }
.product-info .image { width: 95% }
.product-info .image-additional { width: 99% }
.product-info > .left {
    width: 99%;
    clear: both;
}
.product-info > .right {
    float: left;
    width: 99%;
}
.product-info > .left + .right { margin-left: 0px }
/* Product info // End */
#carousel-none { display: none }
/* Original footer // Start */
#original-footer .columnn { width: 50% }
/* Original footer // End */
#footer-top .column { width: 95% }
#footer-top .column-mid { width: 95% }
#footer-bottom-content #go_up_agnes {
    width: 99%;
    text-align: center;
}
#footer-middle-content #information > ul > li { display: block }
#footer-middle-content #information > ul > li + li {
    padding: 0px;
    border: none;
}
#connect-with-us { width: 96% }
#connect-with-us span {
    line-height: 30px;
    text-align: center;
    width: 99%;
}
#footer-bottom-content .social-network {
    padding-left: 10px;
    text-align: center;
    line-height: 30px;
    width: 99%;
}
#powered {
    width: 95%;
    text-align: center;
}
}
/* Custom header size // Start */
<?php if (($this->config->get('tsettings_status') == '1') && ($this->config->get('select_header_status') == '1')){ ?>
	<?php if ($this->config->get('radio_header_size_options') == '1') { ?>
		/* Landscape phone to portrait tablet // For Header size */
			@media (min-width: 481px) and (max-width: 767px) {
				#header { height: <?php echo  $this->config->get('input_header_size_tablet');?>px; }
			}
		<?php } ?>
<?php } ?>
/* Custom header size // End */

/*
// ----------------------------------------------------------------------------
// Landscape phones and down
// ----------------------------------------------------------------------------
*/
@media (max-width: 480px) {
html {
	margin: 0;
	padding: 0;
	-webkit-text-size-adjust: none;
}
#container-s-top { width: 320px }
#header { height: 140px }
#header-top { text-align: center }
#header-massage {
    float: none;
    display: block;
    text-align: center;
}
.social-network-top {
    float: none;
    display: block;
    text-align: center;
    width: 99%;
}
.social-network-top > ul { display: block }
#logo {
    display: block;
    text-align: center;
    padding-top: 15px;
    width: 100%;
    height: auto;
    top: 0px;
    left: 0px;
}
#logo img {
    width: 60%;
    height: auto;
}
#welcome { display: none }
#mini-welcome-button { display: none }
#header-links { display: none }
#header #cart { display: none }
#header #hyperlink-cart { display: none }
#header #search { display: none }
#header #hyperlink-search { display: none }
.standart-language { display: none }
.standart-currency { display: none }
#menu { display: none }
#full-menu { display: none }
/* Layout // Start */
.checkout-content .left {
	display: block;
	width: 99%;
}
.checkout-content .right { 
	display: block;
	width: 99%;
}
/* Layout // End */
#content .agnes-product > div {
    width: 240px;
    margin: 10px 10px 10px 10px;
}
.htabs { padding: 0px }
.htabs a { width: 87% }
.product-info .image { width: 93% }
.product-info .image-additional { width: 99% }
.product-info > .left { width: 99% }
.product-info > .right {
    float: left;
    width: 99%;
}
.product-info > .left + .right { margin-left: 0px }
/* Product Box // Start */
#content .product-grid > div,
#content .agnes-product > div { width: 240px }
#content #tab-related  .box-product > div { width: 240px }
/* Left */
#column-left { display: none }
#column-left + #content { margin-left: 0px }
#column-left + #content .product-grid > div,
#column-left + #content .agnes-product > div { width: 240px }
#column-left + #content #tab-related  .box-product > div { width: 240px }
/* Right */
#column-right + #content #tab-related  .box-product > div { width: 240px }
#column-right { display: none }
#column-right + #content { margin-right: 0px }
#column-right + #content .product-grid > div,
#column-right + #content .agnes-product > div { width: 240px }
/* Both */
#column-left + #column-right + #content,
#column-left + #content { margin-left: 0px }
#column-left + #column-right + #content .product-grid > div,
#column-left + #column-right + #content .agnes-product > div { width: 240px }
/* Product Box // End */
/* Account Login // Start */
.login-content .left {
    display: block;
    width: 99%;
}
.login-content .right {
    display: block;
    width: 99%;
}
/* Account Login // Ens */
#carousel-none { display: none }
#footer-top .column { width: 95% }
#footer-top .column-mid { width: 95% }
#footer-bottom-content #go_up_agnes {
    width: 99%;
    text-align: center;
}
#footer-middle-content #information > ul > li { display: block }
#footer-middle-content #information > ul > li + li {
    padding: 0px;
    border: none;
}
#connect-with-us span {
    line-height: 30px;
    text-align: center;
    width: 96%;
}
#footer-bottom-content .social-network {
    text-align: center;
    line-height: 30px;
}
#footer-bottom-content .social-network > ul { display: block }
#powered {
    width: 95%;
    text-align: center;
}
#original-footer .columnn { width: 100% }
}

/* Custom header size // Start */
<?php if (($this->config->get('tsettings_status') == '1') && ($this->config->get('select_header_status') == '1')){ ?>
	<?php if ($this->config->get('radio_header_size_options') == '1') { ?>
		/* Landscape phones and down // For Header size */
			@media (max-width: 480px) {
				#header { height: <?php echo  $this->config->get('input_header_size_mobile');?>px; }
			}
		<?php } ?>
<?php } ?>
/* Custom header size // End */
</style>