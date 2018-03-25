<?php if (($this->config->get('tsettings_status') == '1') && ($this->config->get('select_menu_status') == '1')) { ?>
  <?php if (($this->config->get('radio_menu_size') == "s_menu") && ($this->config->get('radio_style_menu_options') == "1")) { ?>
    <?php if ($categories) { ?>
		<div id="menu">
			<ul>
				<?php foreach ($categories as $category) { ?>
					<li><a href="<?php echo $category['href']; ?>"><?php echo html_entity_decode($category['name']); ?></a>
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
  <?php } else if (($this->config->get('radio_menu_size') == "b_menu") && ($this->config->get('radio_style_menu_options') == "1")) { ?>
    <?php if ($categories) { ?>
      <div id="full-menu">
        <ul>
          <?php foreach ($categories as $category) { ?>
            <li><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
              <?php if ($category['children']) { ?>
                <div>
                  <span class="description">
                      <span><?php echo $category['description']; ?></span>
                  </span>
                  <ul>
                    <?php for ($i = 0; $i < count($category['children']);) { ?>
                      <?php $j = $i + ceil(count($category['children']) / $category['column']); ?>
                        <?php for (; $i < $j; $i++) { ?>
                          <?php if (isset($category['children'][$i])) { ?>
                            <span class="col_1">
                              <li><a href="<?php echo $category['children'][$i]['href']; ?>"><?php echo html_entity_decode($category['children'][$i]['name']); ?></a></li>
                              <?php if ($category['children'][$i]['children_level2']) { ?>
                                <ul>
                                  <?php for ($wi = 0; $wi < count($category['children'][$i]['children_level2']); $wi++) { ?>
                                    <li><a href="<?php echo $category['children'][$i]['children_level2'][$wi]['href']; ?>"  ><?php echo $category['children'][$i]['children_level2'][$wi]['name']; ?></a></li>
                                  <?php } ?>
                                </ul>
                              <?php } ?>
                            </span>
                          <?php } ?>
                        <?php } ?>
                    <?php } ?> 
                  </ul>
                </div>
              <?php } ?>
            </li>
          <?php } ?>
        </ul>
      </div>
    <?php } ?> 
  <?php } ?>
<?php } else if (($this->config->get('radio_style_menu_options') == '0') && ($this->config->get('select_menu_status') == '1') && ($this->config->get('tsettings_status') == '1')) { ?>
  <?php /* Show nothing *********************/	?>
<?php } else if (($this->config->get('tsettings_status')!= "none") && ($this->config->get('select_menu_status') != "none")) { ?>
  <?php if ($categories) { ?>
		<div id="menu">
			<ul>
				<?php foreach ($categories as $category) { ?>
					<li><a href="<?php echo $category['href']; ?>"><?php echo html_entity_decode($category['name']); ?></a>
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
<?php } ?>