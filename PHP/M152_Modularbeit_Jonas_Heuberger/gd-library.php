<?php include 'Include/head.php'; ?>
    <title>GD Library</title>
<body>
<?php include 'Include/navbar.php'; ?>

   <div class="Picture">
       
<?php
// Ein bestehendes Bild nehmen
$img1 = imagecreatefromjpeg('Multimedia/Pictures/Döner.jpeg');
$img2 = imagecreatefromjpeg('Multimedia/Pictures/Logo.jpeg');
imagescale($img2, 100);
$img1 = add_text($img1);
picture($img1, $img2);
//Funktion um Text aufs Bild zu bringen

function add_text($img)
{
    $white = imagecolorallocate($img, 255, 255, 255);
    $font = "Font/arial.ttf";
    //    Schriftgrösse, Neigung, x-Koordinate, y-Koordinate, Farbe, Schriftart, Text  
    imagettftext($img, 50, 0, 830, 315, $white, $font, 'Jonas');
    imagettftext($img, 50, 0, 920, 380, $white, $font, 'I2a'); 
   

    return $img;
}

function picture($img1, $img2)
{
    // Grössen von img1 bekommen
    $width = imagesx($img1);
    $height = imagesy($img1);

    // Die Mitte von img1 ausrechnen
    $centerX = $width / 2;
    $centerY = $height / 2;

    // Grössen von img2 bekommen
    $width = imagesx($img2);
    $height = imagesy($img2);

    // Die Mitte von img2 ausrechnen
    $centerX = $centerX - $width / 2;
    $centerY = $centerY - $height / 2;

    //Beide Bilder zusammenfügen
    imagecopy($img1, $img2, $centerX, $centerY, 0, 0, 100, 100);

    //Speicherung und Ausgabe
    imagejpeg($img1, "Multimedia/Pictures/GD_Picture.jpg", 100);

    echo  '<a href="gd-library.php"><img src="Multimedia/Pictures/GD_Picture.jpg"/></a>';
}

?> 
</div>

<?php include 'Include/footer.php'; ?>
</body>
</html>

