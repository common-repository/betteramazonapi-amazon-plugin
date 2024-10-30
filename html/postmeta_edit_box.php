<label for="betteramazonapi_keywords">Page specific keywords for finding Amazon products: </label>
<input type="input" name="betteramazonapi_keywords" value="<?php echo $betteramazonapi_keywords; ?>" size="25" />
<br/>
<br/>
<label for="betteramazonapi_disabled">Disable Amazon related products on this page: </label>
<input type="checkbox" name="betteramazonapi_disabled" value="true" <?php echo $betteramazonapi_disabled; ?> /> Disabled
<br/>
<br/>
<label for="betteramazonapi_sortby">Sorting order for Amazon products on this page: </label>
<select name='betteramazonapi_sortby'>
	<option value='default' <?php if($betteramazonapi_sortby == 'default') echo "selected"; ?>>Default Setting</option>
	<option value='random' <?php if($betteramazonapi_sortby == 'random') echo "selected"; ?>>Random</option>
	<option value='salesrank' <?php if($betteramazonapi_sortby == 'salesrank') echo "selected"; ?>>Popularity (high to low)</option>
	<option value='-salesrank' <?php if($betteramazonapi_sortby == '-salesrank') echo "selected"; ?>>Reverse Popularity</option>
	<option value='listprice' <?php if($betteramazonapi_sortby == 'listprice') echo "selected"; ?>>Price (high to low)</option>
	<option value='-listprice' <?php if($betteramazonapi_sortby == '-listprice') echo "selected"; ?>>Reverse Price</option>
	<option value='opimized' <?php if($betteramazonapi_sortby == 'optimized') echo "selected"; ?>>Optimized</option>
</select>
