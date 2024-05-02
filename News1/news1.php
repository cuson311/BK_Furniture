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
    <link rel="stylesheet" href="n1style.css">
    <title>news1</title>
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
            <h2>NoithatBachKhoa TẠO NÊN TỔ HỢP NHÀ THÔNG MINH TINH TẾ</h2>
        </div>

        <div class="div1">
            <span style="font-size: 20px">
                <p style="text-align:justify">Bắt nhịp cùng lối sống hiện đại, khi chất lượng thực sự của tổ ấm ngày càng được nâng cao, nhiều người có xu hướng ưu tiên thiết 
                kế nhà ở cùng ứng dụng công nghệ để đáp ứng trọn vẹn nhu cầu sinh hoạt. Với họ, nhà là nơi để các thành viên thư giãn, tái tạo 
                năng lượng và linh hoạt chuyển đổi trong mọi không gian.</p>

                <p style="text-align:justify">Đầu tháng 6 này, buổi gặp gỡ hợp tác giữa NoithatBachKhoa và các doanh nghiệp đã diễn ra trong không khí hân hoan, 
                    sẵn sàng cho những bước tiến mới.</p>
                <p>
                    <div class="row">
                        <div class="col">
                            <p style="text-align:justify">Với mong muốn đặt khách hàng làm trung tâm, 
                            NoithatBachKhoa đã bắt tay cùng các doanh nghiệp để mang đến những không gian hoàn thiện, 
                            tiện nghi và thoải mái nhất.</p>
                            <p style="text-align:justify">Đầu tháng 6 này, buổi gặp gỡ hợp tác giữa NoithatBachKhoa và các doanh nghiệp đã diễn ra trong không khí hân hoan, 
                            sẵn sàng cho những bước tiến mới.</p>
                        </div>
                        <div class="col-8">
                            <img src="/img/thongminh/3.jpg" width="90%" heigh = "90%">
                        </div>
                    </div>
                </p>
                <br>
                <p>
                    <div class="row">
                        <div class="col-5">
                            <img src="/img/thongminh/4.jpg" width="100%" heigh = "100%">
                        </div>
                        <div class="col">
                            <p style="text-align:justify">Cuộc sống ngày càng phát triển, kéo theo đó là sự thay đổi trong thị hiếu, nhu cầu của 
                                khách hàng cũng đổi mới. NoithatBachKhoa kể từ khi được thành lập, đã luôn giữ vững vị thế là thương hiệu nội thất 
                                Việt hàng đầu, luôn hướng tới việc tạo lập những không gian sống với gu thẩm mỹ tinh tế, đậm chất Việt mà vẫn hiện đại, 
                                hợp xu hướng. Trong khi đó, các doanh nghiệp hợp tác hiện là các đơn vị cung cấp giải pháp nhà thông minh điều khiển 
                                bằng giọng nói Tiếng Việt hàng đầu Việt Nam. Vì vậy, chúng tôi đã tin tưởng và lựa chọn các doanh nghiệp này trở thành 
                                đối tác, cùng đưa ra các chiến lược, đồng hành phát triển mở rộng kết nối.</p>
                        </div>
                    </div>
                </p>
                <br>
                <p style="text-align:justify">Tại buổi lễ ký kết, ban lãnh đạo các đơn vị đã có những trao đổi chi tiết về phương hướng phát triển cùng những chiến lược cụ thể. 
                    Với mục tiêu đặt khách hàng làm trung tâm, hai đơn vị cùng thỏa thuận hướng tới nhu cầu khách hàng, 
                    phát triển kinh doanh và mở rộng kết nối.</p>
                    
                <p style="text-align:justify">Hy vọng trong thời gian sắp tới, NoithatBachKhoa sẽ được đón tiếp Quý khách hàng ghé thăm và trải nghiệm 
                    dịch vụ cùng các sản phẩm mới.</p>
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
