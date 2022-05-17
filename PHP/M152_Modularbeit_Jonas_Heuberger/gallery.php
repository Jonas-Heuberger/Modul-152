<?php 

// hier hole ich alle Bilder aus dem Origin Ordner
    $images = glob("Multimedia/Origin/*.jpeg");
    // hier setzt ich den Counter auf 0
    $count = 0;
   
    // hier gehe ich durch alle Bilder
    foreach($images as $img)
    {   
        // hier erhöhe ich für jedes Bild den Counter
        $count++;
        // hier erstelle ich ein neues Bild
        $img = imagecreatefromjpeg($img);
        // hier erstelle ich eine neure Variable um jedem Bild einen Namen zu geben
        $filename = $count.".jpeg";
        // hier rufe ich die ToBild Funktion auf und übergebe das Bild und den Namen
        ToBild($img, $filename);
        // hier rufe ich die ToThumbnail Funktion auf und übergebe das Bild und den Namen
        ToThumbnail($img, $filename);
    }

    // hier erstelle ich eine neue Funktion um ein Bild zu erstellen und übernehme den Namen und das Bild
     function ToBild($img, $filename)
    {
        // hier gebe ich dem Bild eine Breite von 500
        $img = imagescale($img, 500); 
        //   hier erstelle ich die Farbe Weiss
        $white = imagecolorallocate($img, 255, 255, 255);
        // hier erstelle ich eine Schriftart
        $font = "Font/arial.ttf";
        // Schriftgrösse, Neigung, x-Koordinate, y-Koordinate, Farbe, Schriftart, Text
        imagettftext($img, 20, 0, 100, 50, $white, $font, $filename);
        // hier speichere ich das Bild 
        imagejpeg($img, "Multimedia/Bilder/$filename", 100);
    }

    // hier erstelle ich eine neue Funktion um ein Thumbnail zu erstellen und übernehme den Namen und das Bild
    function ToThumbnail($img, $filename)
    {
        // hier gebe ich dem Thumbnail eine Breite von 200
        $img = imagescale($img, 200);
        //  hier erstelle ich die Farbe Weiss
        $white = imagecolorallocate($img, 255, 255, 255);
        // hier erstelle ich eine Schriftart
        $font = "Font/arial.ttf";
        // hier füge ich dem Bild den Text zu
        // Schriftgrösse, Neigung, x-Koordinate, y-Koordinate, Farbe, Schriftart, Text 
        imagettftext($img, 10, 0, 100, 20, $white, $font, $filename);
        // hier speichere ich das Bild
        imagejpeg($img, "Multimedia/Thumbnails/$filename", 100);
    }
?>
    <!-- hier include ich den Head -->
    <?php include 'Include/head.inc.php'; ?>
    <!-- hier gebe ich der Website ihren Titel -->
    <title>Gallery</title>
    <!-- hier include ich die Navbar -->
    <?php include 'Include/navbar.inc.php'; ?>

              <!-- hier erstelle ich einen div Container namens gallery -->
  <div class="gallery"> 
        <?php 
        // hier setze ich den Counter auf 0
        $count = 0;
        // hier hole ich alle Thumbnails aus dem Thumbnails Ordner
        $thumbnails = glob("Multimedia/Thumbnails/*.jpeg");
       
        // hier gehe ich durch alle Thumbnails 
        foreach($thumbnails as $thumbnail)
        {
            // hier erhöhe ich für jedes Thumbnail den Counter
            $count++;
            // hier gebe ich jedes Thumbnail als Link zum Bild aus
            echo '<a href="Multimedia/Bilder/'.$count.'.jpeg"><img  src="Multimedia/Thumbnails/'.$count.'.jpeg"/></a>';
        }
        ?> 
        </div>
    </div>

    <!-- hier include ich den Footer -->
    <?php include 'Include/footer.inc.php'; ?>