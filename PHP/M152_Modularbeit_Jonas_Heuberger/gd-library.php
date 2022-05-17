<!-- hier include ich den Head -->
<?php include 'Include/head.inc.php'; ?>
<!-- hier gebe ich der Website ihren Titel -->
    <title>GD Library</title>
    <!-- hier include ich die Navbar -->
<?php include 'Include/navbar.inc.php'; ?>

<!-- hier erstelle ich einen div Container mit der Picture Klasse -->
   <div class="Picture"> 
<?php
// hier hole ich meine Bilder aus dem Pictures Ordner
$img1 = imagecreatefromjpeg('Multimedia/Pictures/Döner.jpeg');
$img2 = imagecreatefromjpeg('Multimedia/Pictures/Logo.jpeg');
// hier gebe ich dem zweiten Bild eine Breite von 200
imagescale($img2, 100);
$img1 = add_text($img1);
// hier rufe ich die Picture Funktion auf und übergebe Bild 1 und 2
picture($img1, $img2);
//Funktion um Text aufs Bild zu bringen

// hier erstelle ich eine neue Funktion um dem Bild einen Text zu geben und übergebe das Bild
function add_text($img)
{
    // hier erstelle ich die Farbe Weiss
    $white = imagecolorallocate($img, 255, 255, 255);
    // hier erstelle ich die Schriftart
    $font = "Font/arial.ttf";
    //    Schriftgrösse, Neigung, x-Koordinate, y-Koordinate, Farbe, Schriftart, Text  
    // hier gebe ich dem Bild den Text
    imagettftext($img, 50, 0, 830, 315, $white, $font, 'Jonas');
    imagettftext($img, 50, 0, 920, 380, $white, $font, 'I2a'); 
   
    // hier returne ich das Bild
    return $img;
}

// hier erstelle ich eine neue Funktion um zwei Bilder zu erstellen und übergebe das Bild
function picture($img1, $img2)
{
    // hier hole ich mir die Grösse der Bilder
    $width = imagesx($img1);
    $height = imagesy($img1);

    // hier berechne ich die Mitte des ersten Bildes
    $centerX = $width / 2;
    $centerY = $height / 2;

    // hier berechne ich die Grösse des zweiten Bildes
    $width = imagesx($img2);
    $height = imagesy($img2);

    // hier berechne ich die Mitte des ersten Bildes
    $centerX = $centerX - $width / 2;
    $centerY = $centerY - $height / 2;

    // hier füge ich beide Bilder zusammen
    imagecopy($img1, $img2, $centerX, $centerY, 0, 0, 100, 100);

    //hier speichere ich das Bild ab 
    imagejpeg($img1, "Multimedia/Pictures/GD_Picture.jpg", 100);

    // hier gebe ich das Bild auf der Website aus
    echo  '<a href="gd-library.php"><img src="Multimedia/Pictures/GD_Picture.jpg"/></a>';
}

?> 
</div> 

<!-- hier include ich den Footer -->
<?php include 'Include/footer.inc.php'; ?>


