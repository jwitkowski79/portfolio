<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Jen Witkowski Interactive Designer</title>
<META NAME="Description" CONTENT="Jen Witkowski is a website designer and developer from Buffalo, NY.">
<link href="style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Questrial|Coustard' rel='stylesheet' type='text/css'>
<style type="text/css">
#leftCol a.<?php echo $currentPage;
?> {
color:#000; }

<?php if ($currentPage !== 'about' && $currentPage !== 'contact') {
	echo "#workHeading { color:#000; }";
} ?>

</style>
</head>

<body>
<div id="container">
<div id="header">
	<div class="interiorHeader">
	<h1> Jen Witkowski</h1><h2>Interactive Designer</h2>
	
	</div><!--/interiorHeader-->
</div><!--/header-->
<div style="clear:both;"></div>
<div id="leftCol">
<h3 id="workHeading" class="noBorder">work</h3>

<a href="cakePros.php" class="cake">Cake Pros</a><br/>
<a href="softlips.php" class="iron">Softlips</a><br/>
<a href="mentholatum.php" class="mentho">Mentholatum CA</a><br/>
<a href="winRohto.php" class="rohto">Win Rohto</a><br/>
<a href="reeds.php" class="reeds">Reeds/Jenss</a><br/>
<a href="shark.php" class="shark">Shark</a><br/>
<a href="naturalIce.php" class="nat">Natural Ice</a><br/>
<a href="wbc.php" class="wbc">NYMWBC</a><br/>
<a href="cpaFinancial.php" class="cpa">CPA Financial</a><br/>
<hr class="navHr"/>
<h3><a href="about.php" class="about">about</a></h3>
<h3><a href="contact.php" class="contact">contact</a></h3>
</div>