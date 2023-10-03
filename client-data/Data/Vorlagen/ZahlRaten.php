<?php
// Zufällige Zahl zwischen 1 und 100 generieren
$zufallszahl = rand(1, 100);

// Anzahl der Versuche initialisieren
$versuche = 0;

echo "Willkommen beim Ratespiel! Ich habe eine Zahl zwischen 1 und 100 im Kopf. Versuche, sie zu erraten.\n";

// Spiel-Schleife
while (true) {
    $versuche++;

    // Benutzer nach seiner Vermutung fragen
    echo "Versuch $versuche: Gib deine Vermutung ein: ";
    $vermutung = trim(fgets(STDIN)); // Benutzereingabe lesen

    // Überprüfen, ob die Eingabe eine gültige Zahl ist
    if (!is_numeric($vermutung)) {
        echo "Das ist keine gültige Zahl. Bitte gib eine Zahl zwischen 1 und 100 ein.\n";
        continue; // Zur nächsten Iteration der Schleife springen
    }

    $vermutung = intval($vermutung); // Die Eingabe in eine ganze Zahl umwandeln

    // Überprüfen, ob die Vermutung korrekt ist
    if ($vermutung < $zufallszahl) {
        echo "Zu niedrig! Versuche es erneut.\n";
    } elseif ($vermutung > $zufallszahl) {
        echo "Zu hoch! Versuche es erneut.\n";
    } else {
        echo "Herzlichen Glückwunsch! Du hast die Zahl in $versuche Versuchen erraten.\n";
        break; // Das Spiel beenden, wenn die Zahl erraten wurde
    }
}

// Spiel beenden
echo "Danke fürs Spielen!\n";
?>
