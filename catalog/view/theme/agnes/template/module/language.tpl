<?php if (count($languages) > 1) { ?>
	<?php foreach ($languages as $language) { ?>
		<?php if ($language['code'] == $language_code) { ?>
			<li>
				<a class="standart-language"><img src="image/flags/<?php echo $language['image']; ?>" alt="<?php echo $language['name']; ?>" />&nbsp;&nbsp;<?php echo $language['name']; ?></a>
				<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') !== false) { ?>
					<?php } else if (($this->config->get('radio_responsive_options') == '1') && ($this->config->get('tsettings_status') == '1')){ ?> 
					<span class="mobile-language"><?php echo $text_language; ?></span>
				<?php } ?>
    <?php } ?>
	<?php } ?>
		<div>
			<form action="<?php echo str_replace('&', '&amp;', $action); ?>" method="post" enctype="multipart/form-data" class="language_form">
				<ul>
					<?php foreach ($languages as $language) { ?>
						<li><a onclick="$('input[name=\'language_code\']').attr('value', '<?php echo $language['code']; ?>'); $('.language_form').submit();"><img src="image/flags/<?php echo $language['image']; ?>" alt="<?php echo $language['name']; ?>" />&nbsp;&nbsp;<?php echo $language['name']; ?></a></li>
					<?php } ?>
				</ul>
				<div>
					<input type="hidden" name="language_code" value="" />
					<input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
				</div>
			</form>
		</div>
	</li>
<?php } ?>