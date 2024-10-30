<div class='wrap betteramazonapiadmin'>

	<h2>betterAmazonAPI: Dashboard</h2>
	
<? include_once("admin_menu.php"); ?>
	
	
	<table class='widefat' style='width: 600px;'>
		<tr>
			<td align="left">
				<p>
				<strong>Welcome to the betterAmazonAPI version <?php echo $this->options['Version']; ?>.</strong>  This
				plugin is designed to allow you to quickly and easily promote products from Amazon on your WordPress
				blog related to the topics you write about.  It is designed to function as unobtrusively as possible,
				choosing products to be displayed based directly on either your blog categories or tags.  In other words
				all you need to do is categorize/tag your posts as you normally would, and betterAmazonAPI will find products
				to promote to your visitors related to those blog post topics. This features are mainly based on the AmazonFeed Plugin.
				</p>
				
				<p>But betterAmazonAPI has some great features, no other Plugin will offer you. At betterAmazonAPI there is the possibility
				to track which products are clicked often and which products are clicked never. Based on this data betterAmazonAPI serves
				the products, which will be clicked more often. We call this the optimized sort of products.<br />
				And because we know, that every site is custom and that ads should be custom too, we offer you the possibility to customize
				how to display the ad. We call this <strong>Displaycode</strong>.</p>
				
				<?php if(!$this->live) { ?>
				<p class='betteramazonapiwarning'>
				<strong>It looks like you have not yet configured betterAmazonAPI</strong> with all the required options.  Visit the <a href="<?php echo $homePath; ?>&betteramazonapiPage=options">Options
				page</a> to save your preferred plugin options.  You will need to enter things like your AWS Access Key,
				your associates tag and your display options.
				</p>
				<?php } ?>
	
				<?php if($this->live AND $this->options['AllowTip'] != true) { ?>
				<p class='betteramazonapiwarning'>
				<strong>Are you finding this plugin useful?</strong>  Why not give a little back and help support the ongoing development
				of this plugin.  A lot of time and effort have gone into it's creation and a nice way to say thank-you
				would be to enable the tip option (see under the search tab of the <a href="<?php echo $homePath; ?>&betteramazonapiPage=options">options page</a>).<br/>
				</p>
				<?php } ?>
	
			</td>
		</tr>
	
	</table>
	
</div>