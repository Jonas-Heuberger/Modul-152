   <?php include 'Include/head.php'; ?>
    <title>Video</title>
    <body>
    <?php include 'Include/navbar.php'; ?>
        <div>
            <video controls width="250" height="200">
                <source src="Multimedia/examples/flower.webm"
                        type="video/webm">
                <source src="/media/examples/flower.mp4"
                        type="video/mp4">
                Dieser Browser unterstützt das HTML5 Video-Element nicht.
            </video>
        </div>

        <?php include 'Include/footer.php'; ?>
    </body>
    </html>