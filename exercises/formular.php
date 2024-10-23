<?php

$textfeld = checkempty($_GET["textfeld"], "textfeld");
$nummer = checkempty($_GET["nummer"], "nummer");
$datumuhrzeit = checkempty($_GET["datumhrzeit"], "datumuhrzeit");
$dropdown = checkempty($_GET["dropdown"], "dropdown");
$checkbox = checkempty($_GET["check"], "check");
$textarea = checkempty($_GET["textarea"], "textarea");
$email = checkempty($_GET["email"], "email");
$url = checkempty($_GET["url"], "url");
$telnummer = checkempty($_GET["telnummer"], "telnummer");

function checkempty($str, $what)
{
    if(empty($str)) {
        echo("Das Feld $what wurde nicht an den Server übergeben. Überprüfe, ob der name= Tag korrekt ausgefüllt ist. <br>");
    }
    return $str;
}

echo "<h1>Folgende Infos wurden an den Server übergeben!</h1>";
echo "Textfeld: $textfeld<br>";
echo "Nummer: $nummer<br>";
echo "Datum und Uhrzeit: $datumuhrzeit<br>";
echo "Dropdown-Auswahl: $dropdown<br>";
echo "Checkbox: $checkbox<br>";
echo "Textarea-Inhalt: $textarea<br>";
echo "E-Mail-Adresse: $email<br>";
echo "URL: $url<br>";
echo "Telefonnummer: $telnummer<br>";

?>

<!-- ERST AB HIER ÄNDERUNGEN DURCHFÜHREN! -->

<!-- FIX ME: Hier muss ein Formular hin -->
