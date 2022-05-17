<!-- Hier füge ich den Head hinzu -->
<?php include 'Include/head.inc.php'; ?>
<!-- hier gebe ich der Website den Titel -->
    <title>Video</title>
    
        <!-- hier füge include ich den Code der Navbar -->
    <?php include 'Include/navbar.inc.php'; ?>
        <div>
            <!-- hier habe ich einen öffnenden Video Tag wo ich auch die Grösse und des Videos bestimme -->
            <!-- mit controls sage ich das Video Controller vorhanden sein müssen -->
            <video controls width="1440" height="705">
                <!-- hier gebe ich den Pfad zu meinem Video sowie das Format an -->
                <source src="Multimedia/Videos/Code_Explanation.webm"
                        type="video/webm">
                        <!-- hier gebe ich den Pfad zu meinem Video sowie das Format an -->
                <source src="Multimedia/Videos/Code_Explanation.mp4"
                        type="video/mp4">
            </video>
        </div>
    <!-- hier include ich meinen Footer -->
        <?php include 'Include/footer.inc.php'; ?>
    