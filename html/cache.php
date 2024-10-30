<div class='wrap betterAmazonAPIadmin'>

	<h2>betterAmazonAPI: View Cache</h2>
	
<? include_once("admin_menu.php"); ?>
	
	<ul class='secondTabs'>
		<li><a href="<?php echo $homePath; ?>&betteramazonapiPage=view_cache">Cached Results</a></li>
		<li><a href="<?php echo $homePath; ?>&betteramazonapiPage=view_cache&action=clear_cache">Clear Cache Now</a></li>
	</ul>

	<table class='widefat' style='width: 600px;'>
		<tr>
			<td align="left">&nbsp;</td>
			<td align="right"><?php echo $page_navigation; ?></td>
		</tr>
		
		<?php if(is_array($cache)) foreach($cache as $key=>$word) { ?>
		<tr>
			<td valign="top" align="left"><strong><?php echo $word['keyword']; ?></strong></td>
			<td>
				<table width='100%'>
				<?php
					$blocked = stripslashes($word['blocked']);
					if(trim($blocked) != "") $blocked = explode('|', $blocked);
					else $blocked = array();
					
					$xml = simplexml_load_string($word['data']);
					if($xml)
					{
						foreach($xml->Items->Item as $item)
						{
							if(array_search($item->ASIN, $blocked) === false)
							{
								$isBlocked = false;
								$style='';
							}
							else
							{
								$isBlocked = true;
								$style='text-decoration: line-through;';
							}
							?>
							<tr>
								<td style='<?php echo $style; ?>'><?php echo $item->ItemAttributes->Title; ?></td>
								<td>
									<?php if(!$isBlocked) { ?>
									[<a href="<?php echo $homePath; ?>&betteramazonapiPage=view_cache&pageNumber=<?php echo $_GET['pageNumber']; ?>&action=block&keyword=<?php echo $word['keyword']; ?>&asin=<?php echo $item->ASIN; ?>" 
										onClick="return(confirm('Are you sure you want to block this item from being shown on your site?'));"
										title="Block this item from ever being shown.">block</a>]
									<?php } else { ?>
									[<a href="<?php echo $homePath; ?>&betteramazonapiPage=view_cache&pageNumber=<?php echo $_GET['pageNumber']; ?>&action=unblock&keyword=<?php echo $word['keyword']; ?>&asin=<?php echo $item->ASIN; ?>" 
										onClick="return(confirm('Are you sure you want to allow this product to be shown on your site?'));"
										title="Allow this item to be shown.">allow</a>]
									<?php } ?>
								</td>
							</tr>
							<?php
						}
					}
					else
					{
						echo "Invalid XML data cached: ", $word['data'];
					}
				?>
				</table>
			</td>
		</tr>
		<?php } else { ?>
		<tr>
			<td>The cache is currently empty.</td>
			<td>&nbsp;</td>
		</tr>
		<?php } ?>

		<tr>
			<td align="left">&nbsp;</td>
			<td align="right"><?php echo $page_navigation; ?></td>
		</tr>
		
	</table>
	
</div>