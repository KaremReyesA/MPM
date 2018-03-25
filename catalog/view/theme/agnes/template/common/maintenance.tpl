<?php echo $header; ?>
<div id="content">
	<?php if($this->config->get('select_maintenance_status') == '1'){ ?>
		<?php if($this->config->get('radio_maintenance_options') == '1'){ ?>
			<table width="100%" border="0">
				<tr>
					<td style=" hor vertical-align:middle;"><?php echo html_entity_decode($this->config->get('textarea_maintenance_text_' . $this->config->get('config_language_id')));?></td>
				</tr>
			</table>
		<?php } else if ($this->config->get('radio_maintenance_options')!= "none") { ?>
			<?php echo $message; ?>
		<?php } ?>
	<?php } else if ($this->config->get('select_maintenance_status')!= "none") { ?>
		<?php echo $message; ?>
	<?php } ?>
</div>
<?php echo $footer; ?>