	<ul id="tabnav">
		<li><a href="<?php echo $homePath; ?>&betteramazonapiPage=dashboard"
		<? if($_GET['betteramazonapiPage'] == 'dashboard') { echo "class='highlighted'"; } ?>>Dashboard</a></li>
		<li><a href="<?php echo $homePath; ?>&betteramazonapiPage=options"
		<? if($_GET['betteramazonapiPage'] == 'options') { echo "class='highlighted'"; } ?>
		>Options</a></li>
		<li><a href="<?php echo $homePath; ?>&betteramazonapiPage=message_log"
		<? if($_GET['betteramazonapiPage'] == 'message_log') { echo "class='highlighted'"; } ?>
		>Message Log</a></li>
		<li><a href="<?php echo $homePath; ?>&betteramazonapiPage=view_cache"
		<? if($_GET['betteramazonapiPage'] == 'view_cache') { echo "class='highlighted'"; } ?>
		>View Cache</a></li>
		<li><a href="http://www.codersx.net" class='highlighted-external'>Displaycode Examples</a></li>
		<li><a href="http://www.codersx.net" class='highlighted-external'>CodersX Blog</a></li>
	</ul>