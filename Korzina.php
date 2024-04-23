<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Stick&family=Tektur:wght@400..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/main.css"> 
    <link rel="stylesheet" href="assets/css/sfondo.css">
    <!-- подключение ксс -->

    <title>Document</title>
</head>
<body>
    <?php
    include ('assets/php/heder.php')
    ?>
    <main>
        <section class="form-vse">
            <div>
                <hr>
                    <?php include_once 'assets/bd/korzina-bd.php'; ?>
                <hr>
            </div>
        </section>
    </main>
</body>
<script defer src="assets/js/plus.js"></script>
<script defer src="assets/js/sfondo.js"></script>
<script defer src="assets/js/Logo.js"></script>
<script defer src="assets/js/yvedomleniya.js"></script>
</html>