<?php 
// betere oplossing origineel
$getal1=rand(1,42);
$getal2=rand(1,42);
while ($getal2==$getal1) {
	$getal2=rand(1,42);
}
$getal3=rand(1,42);
while ($getal3==$getal1 || $getal3==$getal2) {
	$getal3=rand(1,42);
}
$getal4=rand(1,42);
while ($getal4==$getal3 || $getal4==$getal2 || $getal4==$getal1) {
	$getal4=rand(1,42);
}
$getal5=rand(1,42);
while ($getal5==$getal4 || $getal5==$getal3 || $getal5==$getal2 || $getal5==$getal1) {
	$getal5=rand(1,42);
}
$getal6=rand(1,42);
while ($getal6==$getal5 || $getal6==$getal4 || $getal6==$getal3 || $getal6==$getal2 || $getal6==$getal1) {
	$getal6=rand(1,42);
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Oefening 7.4</title>
	<style type="text/css">
	<?php print ("#getal". $getal1.",#getal" . $getal2.",#getal".$getal3.",#getal".$getal4.",#getal".$getal5.",#getal".$getal6); ?>{
		background-color:green;
	}

	</style>
</head>
<body>
	<h1>De winnende lotto-getallen</h1>
	<table>
	<tbody>
	<tr>
	<?php for($i=1;$i<43;$i++) {
		?> 
		<td id="getal<?php print($i); ?>"> <?php print($i); ?> </td>
	<?php
	if ($i%7==00) {
		print("</tr> <tr>");
	} 
/*		if ($i==7 || $i==14 || $i==21 || $i==28 || $i==35) {
		print("</tr> <tr>");
	} 
	*/
	}
	?>
	</tr>
	</tbody>
	</table>
</body>
</html>




