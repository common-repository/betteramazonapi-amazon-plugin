<!-- Display betteramazonapi Widget Configuration Options -->
<label for="betteramazonapi-title" style="line-height:35px;display:block;"><?php _e('Display title:', 'widgets'); ?> <input type="text" id="betteramazonapi-title" name="betteramazonapi-title" value="<?php echo wp_specialchars($options['TitleText'], true); ?>" /></label>
<label for="betteramazonapi-tags" style="line-height:35px;display:block;"><?php _e('Default tags:', 'widgets'); ?> <input type="text" id="betteramazonapi-tags" name="betteramazonapi-tags" value="<?php echo wp_specialchars($options['DefaultTags'], true); ?>" /></label>
<label for="betteramazonapi-results" style="line-height:35px;display:block;"><?php _e('Max results:', 'widgets'); ?> <input type="text" id="betteramazonapi-results" name="betteramazonapi-results" value="<?php echo wp_specialchars($options['MaxResults'], true); ?>" /></label>
<label for="betteramazonapi-image" style="line-height:35px;display:block;"><?php _e('Show Images:', 'widgets'); ?> 
	<select id="betteramazonapi-image" name='betteramazonapi-image'>
		<option value='0' <?php if($options['ImageSize'] == '0') echo "selected"; ?>>No Images</option>
		<option value='1' <?php if($options['ImageSize'] == '1') echo "selected"; ?>>Small</option>
		<option value='2' <?php if($options['ImageSize'] == '2') echo "selected"; ?>>Medium</option>
		<option value='3' <?php if($options['ImageSize'] == '3') echo "selected"; ?>>Large</option>
	</select>
</label>
<label for="betteramazonapi-text" style="line-height:35px;display:block;"><?php _e('Show Titles:', 'widgets'); ?> <input type="checkbox" id="betteramazonapi-text" name="betteramazonapi-text" value="yes" <?php if($options['ShowText'] == '1') echo 'checked'; ?> /></label>
<label for="betteramazonapi-desc" style="line-height:35px;display:block;"><?php _e('Show Descriptions:', 'widgets'); ?> <input type="checkbox" id="betteramazonapi-desc" name="betteramazonapi-desc" value="yes" <?php if($options['ShowDesc'] == '1') echo 'checked'; ?> /></label>
<label for="betteramazonapi-sortby">Sorting order for Amazon products on this widget: </label>
<select name='betteramazonapi-sortby'>
	<option value='default' <?php if($options['SortBy'] == 'default') echo "selected"; ?>>Default Setting</option>
	<option value='random' <?php if($options['SortBy'] == 'random') echo "selected"; ?>>Random</option>
	<option value='salesrank' <?php if($options['SortBy'] == 'salesrank') echo "selected"; ?>>Popularity (high to low)</option>
	<option value='-salesrank' <?php if($options['SortBy'] == '-salesrank') echo "selected"; ?>>Reverse Popularity</option>
	<option value='listprice' <?php if($options['SortBy'] == 'listprice') echo "selected"; ?>>Price (high to low)</option>
	<option value='-listprice' <?php if($options['SortBy'] == '-listprice') echo "selected"; ?>>Reverse Price</option>
	<option value='optimized' <?php if($options['SortBy'] == 'optimized') echo "selected"; ?>>Optimized</option>
</select>
<input type="hidden" name="betteramazonapiwidget-submit" id="betteramazonapiwidget-submit" value="1" />
