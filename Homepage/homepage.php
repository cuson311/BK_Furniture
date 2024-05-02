<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="hpstyle.css">
    <title>Homepage</title>
</head>
<body>
    <?php
    include("../base/header.php");
    ?>

    <main>
        <div id="slider" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#slider" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#slider" data-bs-slide-to="2"></button>
              <button type="button" data-bs-target="#slider" data-bs-slide-to="3"></button>
              <button type="button" data-bs-target="#slider" data-bs-slide-to="4"></button>
            </div>
          
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="overlay-img" style="background-image: url(/img/sofa/sofa.jpg);"></div>
                    <div class="carousel-caption">
                        <h1>Sang trọng</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay-img" style="background-image: url(/img/giuongngu/giuongngu.jpg);"></div>
                    <div class="carousel-caption">
                        <h1>Tiện nghi</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay-img" style="background-image: url(/img/tuquanao/tuquanao.jpg);"></div>
                    <div class="carousel-caption">
                        <h1>Đáng tin cậy</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay-img" style="background-image: url(/img/tubep/tubep.jpg);"></div>
                    <div class="carousel-caption">
                        <h1>Giá cả hợp lý</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay-img" style="background-image: url(/img/bantrangdiem/bantrangdiem.jpg);"></div>
                    <div class="carousel-caption">
                        <h1>Bền vững</h1>
                    </div>
                </div>
            </div>
          
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <div class="title-theme">
            <h2>Sản phẩm</h2>
        </div>
        
        <div id="productslide" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" id="carouselInner">
            </div>
            <a class="carousel-control-prev" href="#productslide" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#productslide" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="title-theme">
            <h2>Tin tức</h2>
        </div>

        <?php
        include("../base/news.php");
        ?>

        <?php
        include("../base/footer.php");
        ?>
    </main>

    <script src="/Homepage/prodscript.js"></script>
    <script src="/Products/script.js"></script>
</body>
</html>
