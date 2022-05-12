<?php 
    $images = glob("Multimedia/Origin/*.jpeg");
    $count = 0;
   
    foreach($images as $img)
    {   
        $count++;
        $img = imagecreatefromjpeg($img);
        $filename = $count.".jpeg";
        ToBild($img, $filename);
        ToThumbnail($img, $filename);
    }

     function ToBild($img, $filename)
    {
        $img = imagescale($img, 500); 
        // Schriftgrösse, Neigung, x-Koordinate, y-Koordinate, Farbe, Schriftart, Text  
        $white = imagecolorallocate($img, 255, 255, 255);
        $font = "Font/arial.ttf";
        imagettftext($img, 20, 0, 100, 50, $white, $font, $filename);
        imagejpeg($img, "Multimedia/Bilder/$filename", 100);
    }

    function ToThumbnail($img, $filename)
    {
        $img = imagescale($img, 200);
        // Schriftgrösse, Neigung, x-Koordinate, y-Koordinate, Farbe, Schriftart, Text  
        $white = imagecolorallocate($img, 255, 255, 255);
        $font = "Font/arial.ttf";
        imagettftext($img, 10, 0, 100, 20, $white, $font, $filename);
        imagejpeg($img, "Multimedia/Thumbnails/$filename", 100);
    }
?>

    <?php include 'Include/head.inc.php'; ?>
    <title>Gallery</title>

    <body>
    <?php include 'Include/navbar.inc.php'; ?>

              
  <div class="gallery"> 
        <?php 
        $count = 0;
        $thumbnails = glob("Multimedia/Thumbnails/*.jpeg");
       
        foreach($thumbnails as $thumbnail)
        {
            $count++;
            echo '<a href="Multimedia/Bilder/'.$count.'.jpeg"><img  src="Multimedia/Thumbnails/'.$count.'.jpeg"/></a>';
        }
        ?> 
        </div>
    </div>

    <?php include 'Include/footer.inc.php'; ?>
    </body>
    </html>