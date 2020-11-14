<?php 
$filename = 'fichier.txt';

if (file_exists($filename)) {
    echo "Le fichier $filename existe.";
} else {
  
    $filename = "fichier.txt";
    $texte = "Hello world!";

    // création du fichier
    $f = fopen($filename, "x+");
    // écriture
    fputs($f, $texte );
    // fermeture
    fclose($f);


}
?>