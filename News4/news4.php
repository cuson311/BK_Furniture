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
    <link rel="stylesheet" href="n4style.css">
    <title>news4</title>
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
            <h2>KHI NỘI THẤT LÀ NIỀM ĐAM MÊ BẤT TẬN</h2>
        </div>

        <div class="div1">
            <span style="font-size: 20px">
                <div class="row">
                    <div class="col">
                        <p style="text-align:justify">Mỗi lần bước vào NoiThatBachKhoa, nhiều vị khách đều thấy thoải mái và thích thú với những không gian 
                        nội thất đa dạng. Những đôi tay khéo léo, chăm chút từng chi tiết tại NoithatBachKhoa đã góp phần không nhỏ để tạo nên những không 
                        gian đầy cảm hứng này.</p>
                        <br>
                        <img src="/img/news4/1.jpg" width="100%" heigh = "100%">
                    </div>
                    <div class="col-7">
                        <img src="/img/news4/2.jpg" width="100%" heigh = "100%">
                    </div>
                </div>
                <br>
                <p style="text-align:justify">Từ việc chỉnh lại vị trí của những món đồ trang trí, xếp lại những chiếc ghế sofa, căn chỉnh lại cho 
                    tất cả sản phẩm thật hài hòa, vừa vặn trong không gian. Đội ngũ nhân viên tại NoiThatBachKhoa thông thuộc từng góc nhỏ, hiểu rõ từng 
                    sản phẩm với muôn vàn màu sắc, chất liệu đa dạng. Khi được đắm chìm trong không gian nội thất, bạn sẽ tinh tế cảm nhận rõ từng 
                    đường nét thiết kế, sự mềm mại của chất liệu cho đến những ý tưởng phối hợp độc đáo.</p>
                <br>
                <div class="row">
                    <div class="col">
                        <img src="/img/news4/3.jpg" width="100%" heigh = "100%">
                    </div>
                    <div class="col">
                        <img src="/img/news4/4.jpg" width="100%" heigh = "100%">
                    </div>
                </div>
                <br>
                <p style="text-align:justify">Lần tới khi ghé thăm NoiThatBachKhoa, hy vọng mọi người sẽ luôn có trải nghiệm thú vị và được hỗ trợ tận 
                    tình nhất từ khi bước vào cho đến tận lúc về nhà với những sản phẩm ưng ý.</p>
                <br>
                <img src="/img/news4/5.jpg" width="100%" heigh = "100%">
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
