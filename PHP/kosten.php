<?php
	echo "<p>Fläche: ". $_GET['flaeche'];
	echo"\n</p>";
	echo "<p>Höhe: " . $_GET['hoehe'];
	echo"\n</p>";
	echo "<p>Anzahl: " . $_GET['anzahl'];
	echo"\n</p>";
	echo "<p>Jahr: " . $_GET['jahr'];
	echo"\n</p>";
	
	$file = fopen('daten.csv','w+');
	fwrite($file,'"Fläche jeh stockwerk in qm";"Stockwerköhe in qm";"Anzahl der Stockwerke"'."\n");
	fwrite($file,'"'.$_GET['flaeche'].';'.$_GET['hoehe'].';'.$_GET['anzahl'].';'."\n");
	fclose($file);
?>