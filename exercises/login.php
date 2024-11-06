<?php

$nutzernameGET = $_GET["nutzername"];
$passwortGET = $_GET["passwort"];
$nutzernamePOST = $_POST["nutzername"];
$passwortPOST = $_POST["passwort"];

if (!empty($nutzernameGET) && !empty($passwortGET)) {
	echo "Es gibt einen Loginversuch über GET mit dem Nutzernamen: $nutzernameGET und dem Passwort: $passwortGET <br>";
	userlogin($nutzernameGET, $passwortGET);
if(!empty($nutzernameGET) && !empty($passwortGET)) {
    echo "Es gibt einen Loginversuch über GET mit dem Nutzernamen: $nutzernameGET und dem Passwort: $passwortGET <br>";
    userlogin($nutzernameGET, $passwortGET);
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	echo "Es gibt einen Loginversuch über POST mit dem Nutzernamen: $nutzernamePOST und dem Passwort: $passwortPOST <br>";
	userlogin($nutzernamePOST, $passwortPOST);
if($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "Es gibt einen Loginversuch über POST mit dem Nutzernamen: $nutzernamePOST und dem Passwort: $passwortPOST <br>";
    userlogin($nutzernamePOST, $passwortPOST);
}
function userlogin($username, $passwort)
{
	if ($username == "TKDV23") {
		echo "Nutzername korrekt! Jetzt wird das Passwort überprüft! <br>";
{
    if($username == "TKDV23") {
        echo "Nutzername korrekt! Jetzt wird das Passwort überprüft! <br>";

		if ($passwort == "BwsHofheim23!") {
			echo "Passwort korrekt! Login erfolgreich! <br>";
		} else {
			echo "Passwort nicht korrekt! <br>";
		}
	} else {
		echo "Nutzername nicht korrekt! <br>";
	}
        if($passwort == "BwsHofheim23!") {
            echo "Passwort korrekt! Login erfolgreich! <br>";
        } else {
            echo "Passwort nicht korrekt! <br>";
        }
    } else {
        echo "Nutzername nicht korrekt! <br>";
    }
}
?>

<!-- ERST AB HIER ÄNDERUNGEN DURCHFÜHREN! -->

<!-- FIX ME: Hier muss ein Loginformular hin, welches als input Felder passwort und nutzername hat. -->
<link rel="stylesheet" href="\css\style.css" />

<body>
	<form method="get">
		<label>Benutzername - TKDV23</label>
		<input type="text" name="nutzername" required>
		</br>
		<label>Passwort - BwsHofheim23!</label>
		<input type="password" name="passwort" required>
		</br>
		<button type="submit">Anmelden!</button>
	</form>
	<!-- Es muss in doppelter ausführung vorhanden sein, einmal mit der method=GET und einmal mit method=POST -->
	<form method="post">
		<label>Benutzername - TKDV23</label>
		<input type="text" name="nutzername" required>
		</br>
		<label>Passwort - BwsHofheim23!</label>
		<input type="password" name="passwort" required>
		</br>
		<button type="submit">Anmelden!</button>
	</form>
</body>