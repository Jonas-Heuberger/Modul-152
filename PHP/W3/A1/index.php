<?php 
// Melde alle PHP Fehler (siehe Changelog)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Erstellen eines leeres Bildes und Hinzufügen von Text
$im = imagecreatefromjpeg('2017_islande-1101.jpg');
$stamp = imagecreatefrompng('WG_LOGO_800.png');

// Farben  des Textes definieren
//$im = imagecreatetruecolor(240, 80);
$text_color = imagecolorallocate($im, 233, 14, 91);

// Farbwerte
//imagestring($im, 1350, 1020, 315,  'Hallo I2a', $text_color);
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$color = imagecolorallocate($im, 191, 0, 0);
$font = 'C:\xampp\htdocs\fonts\arial.ttf';

//Bildgrösse vorbereiten und Joinen
imagettftext($im, 100, 0, 1000, 315, $color, $font, 'Hallo I2a');
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);
imagecopy($im, $stamp, 1100 , 400, 0, 0, imagesx($stamp), imagesy($stamp));

// Inhalt in den Header stellen
header('Content-Type: image/jpeg');

// Bild ausgeben
imagejpeg($im);

// Speicher wieder freigeben
imagedestroy($im);

?>