<?php
$row = 0;
if (($handle = fopen("/Users/Quentin/Desktop/Ecole/Projet Co/RFID/Code Source/fichier_emargement_EPU_2014.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 10000, ";")) !== FALSE) {
    	echo $data[]."\n" ;
        $row++;
    }
    fclose($handle);
}
?>