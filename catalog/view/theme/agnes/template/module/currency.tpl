<?php if (count($currencies) > 1) { ?>
	<?php foreach ($currencies as $currency) { ?>
		<?php if ($currency['code'] == $currency_code) { ?>
			<?php if ($currency['symbol_left']) { ?>
				<li><a class="standart-currency"><?php echo $currency['symbol_left']; ?>&nbsp;<?php echo $currency['title']; ?></a>
					<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
						<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
            <span class="mobile-currency"><?php echo $text_currency; ?></span>
					<?php } ?>
			<?php } else { ?>
				<li><a class="standart-currency"><?php echo $currency['title']; ?>&nbsp;<?php echo $currency['symbol_right']; ?></a>
					<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
						<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
            <span class="mobile-currency"><?php echo $text_currency; ?></span>
					<?php } ?>
			<?php } ?>
		<?php } ?>
	<?php } ?>
		<div>		
			<form action="<?php echo str_replace('&', '&amp;', $action); ?>" method="post" enctype="multipart/form-data" class="currency_form">
				<ul>
					<?php foreach ($currencies as $currency) { ?>
						<li><a onclick="$('input[name=\'currency_code\']').attr('value', '<?php echo $currency['code']; ?>'); $('.currency_form').submit();"><?php echo $currency['title']; ?></a></li>
					<?php } ?>
				</ul>
				<div style="display: inline;">
					<input type="hidden" name="currency_code" value="" />
					<input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
				</div>
			</form>
		</div>
	</li>
<?php } ?>