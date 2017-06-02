<?php
   $currentTrailer =  "https://www.youtube.com/embed/SIFx3jebFXg?autoplay=1";
   
   if($_SERVER["REQUEST_METHOD"] === "POST"){
       
        if($_POST['subBtn'] == "Trailer 1"){
            $currentTrailer = "https://www.youtube.com/embed/K6RURvz_SCc?autoplay=1";
        }else if($_POST['subBtn'] == "Trailer 2"){
            $currentTrailer = "https://www.youtube.com/embed/SIFx3jebFXg?autoplay=1";
        }else if($_POST['subBtn'] == "Preview"){
            $currentTrailer = "https://www.youtube.com/embed/Xd0kAkhowVQ?autoplay=1";
        }
        
   }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="style.css">
    </head>

<body>

    <div>
        <span>
            <a href = "./wallpaper.php"> Wallpapers </a>
            <a href = "https://www.redbubble.com/people/programmerpete/shop?asc=u" target="_blank"> Posters </a>
        </span>
    </div>


<div class="middleContent">
<iframe width="560" height="315" src=" <?php echo $currentTrailer ?> " frameborder="0" allowfullscreen></iframe>
</div>

<div class="footer">
    
    <form action="" method="post">
        <input name = "subBtn" type = "submit" value = "Trailer 1">
        <input name = "subBtn" type = "submit" value = "Trailer 2">
        <input name = "subBtn" type = "submit" value = "Preview">
    </form>
        
</div>



</body>
</html>