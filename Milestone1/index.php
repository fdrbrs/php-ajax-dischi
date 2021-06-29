<?php
require __DIR__ . '/database/albums.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Dischi</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet"> 
    <!-- font-family: 'Montserrat', sans-serif; -->
    <link rel="stylesheet" href="./dist/css/app.css">
</head>
<body>
    
    <header>
        <img src="./dist/img/logo-small.svg" alt="spotify_logo">
    </header>
    <main>
        <div id="app">
            

            <?php foreach ($albums as $album) : ?>
            <div class="disc">

                <img src="<?=$album['poster']; ?>" alt="">
                <div class="title"><?=$album['title']; ?></div>
                <div class="disc_foot">
                    <div class="author"><?=$album['author']; ?></div>
                    <div class="year"><?=$album['year']; ?></div>
                </div>
            
            </div>
            <?php endforeach; ?>
            
        </div>
    </main>
    
    

    <!-- CDN VUE -->
    <!--     <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script> -->
    <!-- AXION CDN -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- JS SCRIPT -->
    <!-- <script src="./dist/js/main.js"></script> -->
</body>
</html> 