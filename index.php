<?php include_once("php/header.php") ?>

<div id="content">
	<div class="content" id="<?php echo $id ?>"><?php print file_get_contents($url.'php/load.php?id='.$id) ?></div>
</div>

<?php include_once("php/footer.php") ?>