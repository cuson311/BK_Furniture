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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="n3style.css">
    <title>news3</title>
    <script>
        var x = screen.height;
        var y = screen.width;
    </script>
    <style type="text/css">
        .div1{
            margin-top:20px;
            margin-right:15%;
            margin-bottom:30px;
            margin-left:15%;
        }
    </style>
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
            <h2>MANG NOITHATBACHKHOA VỀ NHÀ, SẴN SÀNG CHO NĂM MỚI</h2>
        </div>

        <div class="div1">
            <span style="font-size: 20px">
                <div class="row">
                    <div class="col">
                        <p style="text-align:justify">Cuối năm là thời điểm mọi người đều bận rộn để dọn dẹp, thay mới các sản phẩm cho không gian sống, 
                            đón xuân về cùng những cuộc gặp gỡ. Vì vậy, đội ngũ ở NoithatBachKhoa cũng đang tất bật chuẩn bị các sản phẩm có sẵn, với đa dạng 
                            chủng loại để trao đến tận tay Quý khách hàng.</p>
                                
                        <img src="/img/news3/1.jpg" width="100%" heigh = "100%">
                    </div>
                    <div class="col">
                        <img src="/img/news3/2.jpg" width="100%" heigh = "100%">
                    </div>
                </div>
                <br>
                <p style="text-align:justify">Ngay lúc này,bạn có thể chọn lựa ngay những sản phẩm đang có sẵn tại các cửa hàng NoithatBachKhoa. Như vậy, 
                vừa có thể tiết kiệm thời gian chờ hàng đặt, vừa có thể sờ tận tay, nhìn tận mắt để cảm nhận các thiết kế phù hợp cho không gian 
                của mình.</p>
                <br>
                <div class="row">
                    <div class="col">
                        <img src="/img/news3/3.jpg" width="100%" heigh = "100%">
                    </div>
                    <div class="col">
                        <img src="/img/news3/4.jpg" width="100%" heigh = "100%">
                    </div>
                </div>
                <br>
                <p style="text-align:justify">Đội ngũ kỹ thuật của thương hiệu luôn sẵn sàng để giao hàng đến tận nhà, lắp ráp hoàn thiện, 
                và bày trí vào các vị trí mà bạn mong muốn. Bạn hoàn toàn có thể yên tâm với tay nghề chuyên nghiệp và sự tận tình của đội ngũ 
                NoithatBachKhoa.</p>
                <p style="text-align:justify">Ghé thăm ngay các cửa hàng NoithatBachKhoa để có trải nghiệm mua sắm vui vẻ, trang hoàng không gian đón 
                mùa xuân mới.</p>
                <br>
                <div class="row">
                    <div class="col">
                        <img src="/img/news3/5.jpg" width="100%" heigh = "100%">
                    </div>
                    <div class="col">
                        <img src="/img/news3/6.jpg" width="100%" heigh = "100%">
                    </div>
                </div>
                <br>
            </span>
        </div>
        
        <div class="title-theme">
            <h2>Xem thêm</h2>
        </div>

        <?php
        include("../base/news.php");
        ?>
        <?php
        include("../base/footer.php");
        ?>
    </main>

    <script src="/Products/script.js"></script>
</body>
</html>
