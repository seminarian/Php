<?php
if(isset($_GET["action"]) && $_GET["action"]=="logout") {
	$_SESSION["ingelogd"] = false;
}
include("presentation/header.html");
?>

<ul>
<li><a href="zoekfilm.php">Zoek een film op naam</a></li>
<li><a href="invoerexemplaar.php">Voer een nieuw exemplaar in</a></li>
<li><a href="invoertitel.php">Voer een nieuwe film in</a></li>
<li><a href="deleteexemplaar.php">Delete een Exemplaar</a></li>
<li><a href="deletetitel.php">Delete een Film</a></li>
<li><a href="leenuit.php">Leen een exemplaar uit</a></li>
<li><a href="retourexemplaar.php">Retour een exemplaar</a></li>
<li><a href="toonalleexemplaren.php">Toon alle exemplaren</a></li>
<li><a href="toonallefilms.php">Toon alle films</a></li>
<li><a href="toonallegebruikers.php">Toon alle Gebruikers</a></li>
<li><a href="toonalleklanten.php">Toon alle klanten</a></li>
<li><a href="toonalleuitleningen.php">Toon alle uitleningen</a></li>
</ul>
<?php
include("presentation/footer.html");
?>