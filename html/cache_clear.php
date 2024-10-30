<div class='wrap betteramazonapiadmin'>

	<h2>betterAmazonAPI: View Cache</h2>
	
	<? include_once("admin_menu.php"); ?>
	
	<ul class='secondTabs'>
		<li><a href="<?php echo $homePath; ?>&betteramazonapiPage=view_cache">Cached Results</a></li>
		<li><a href="<?php echo $homePath; ?>&betteramazonapiPage=view_cache&action=clear_cache">Clear Cache Now</a></li>
	</ul>

	<table class='widefat' style='width: 600px;'>
		<tr>
			<td align="left">
			
			<p>
			Please confirm that you want to remove all <?php echo $total; ?> cached products from the database.  This will cause your
			site to begin downloading new products for all keywords, categories and/or tags that are used on your site.  It may cause your site to load
			more slowly for a while until all products have been downloaded.  <font color="#FF0000">You will also lose any product blocking that you have put into place.</font>
			</p>
			
			<p>
			
			</p>
			
			<p>
			<a href="<?php echo $homePath; ?>&betteramazonapiPage=view_cache">No, get me out of here.</a>
			</p>
			
			<p>
			<a href="<?php echo $homePath; ?>&betteramazonapiPage=view_cache&action=clear_cache_confirm">Yes, clear the cache now.</a>
			</p>

			</td>
		</tr>
	</table>
	
</div>