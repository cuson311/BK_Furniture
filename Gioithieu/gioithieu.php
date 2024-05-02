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
    <link rel="stylesheet" href="gtstyle.css">
    <title>gioithieu</title>
    <style>
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
            <h2>Về chúng tôi</h2>
        </div>
        <div class="div1">
            <span style="font-size: 20px">
                <div style="text-align: center;">
                    <p>Ra đời từ ý tưởng tạo nên sự khác biệt, NoithatBachKhoa đã giữ vững và phát triển trở thành vị trí hàng đầu trong thị trường nội 
                        thất Việt Nam. Đến nay, NoithatBachKhoa đã có nhiều cửa hàng quy mô và chuyên nghiệp tại các thành phố lớn là Hà Nội và TP.HCM, 
                        Bình Dương.</p>
                </div>
            </span>
            <span style="font-size: 18px">

                <div class="row">
                    <div class="col-6">
                        <img src="/img/gioithieu/1.jpg" width="100%" heigh = "100%">
                    </div>
                    <div class="col">
                        <h4>Giá trị và sự khác biệt</h4>
                        <p style="text-align:justify">
                            Với mong muốn phát triển thương hiệu Việt bằng nội lực, NoithatBachKhoa đã chú trọng vào thiết kế và sản xuất nội thất trong nước. 
                            Danh mục sản phẩm của Nhà Xinh thường xuyên được đổi mới và cập nhật, liên tục cung cấp cho khách hàng các dòng sản phẩm theo 
                            xu hướng mới nhất. Do chính người Việt thiết kế và sản xuất, nội thất thương hiệu Nhà Xinh luôn phù hợp với cuộc sống Á Đông, 
                            đem đến sự tiện nghi hoàn hảo trong mọi không gian sống. <br><br>
                            Hơn 70% sản phẩm của NoithatBachKhoa được thiết kế, sản xuất bởi đội ngũ nhân viên cùng công nhân ưu tú với nhà máy có cơ sở vật chất 
                            hiện đại bậc nhất tại Việt Nam.<br><br>
                            Sự khác biệt của NoithatBachKhoa chính là sáng tạo nội thất thành phong cách riêng, phù hợp với nhu cầu khách hàng. 
                            Không chỉ là sản phẩm nội thất đơn thuần, mà còn là không gian sống theo phong cách riêng với cách bày trí hài hòa từ đồ 
                            nội thất kết hợp với đồ trang trí. Giúp khách hàng cảm nhận được một không gian sống thực sự, cảm thấy thoải mái để tận hưởng 
                            cuộc sống.</p>
                    </div>
                </div>
                
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="/img/gioithieu/2.jpg" width="100%" heigh = "100%">
                    </div>
                    <div class="col">
                        <h4>Chất lượng và dịch vụ</h4>
                        <p style="text-align:justify">
                            Chất lượng của nguyên vật liệu, phụ kiện và quy trình sản xuất đều được kiểm định và giám sát chặt chẽ bởi hệ thống quản lý
                            chất lượng ISO 9001. Sản phẩm của NoithatBachKhoa được thiết kế theo định hướng công năng sử dụng, thẩm mỹ và chất lượng. 
                            Trong những năm gần đây, thương hiệu luôn hướng đến xu hướng thiết kế xanh nhằm đóng góp không chỉ một không gian sống tiện 
                            nghi mà còn là một môi trường sống trong lành cho người sử dụng và cộng đồng.<br><br>
                            Bên cạnh đó, NoithatBachKhoa tự hào sở hữu đội ngũ tư vấn thiết kế và kỹ sư chuyên nghiệp, có kiến thức sâu rộng trong lĩnh vực 
                            đồ gỗ nội thất. Tập thể nhân viên tại NoithatBachKhoa cam kết nỗ lực tư vấn và trợ giúp khách hàng lựa chọn sản phẩm ưng ý nhất. 
                            Dịch vụ tư vấn thiết kế của NoithatBachKhoa sẽ giúp khách hàng kiến tạo một không gian sống như ý thông qua sự phối hợp điêu luyện 
                            giữa các sản phẩm nội thất và đồ trang trí.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="/img/gioithieu/3.jpg" width="100%" heigh = "100%">
                    </div>
                    <div class="col">
                        <h4>Nhà máy</h4>
                        <p style="text-align:justify">
                            Phần lớn sản phẩm của NoithatBachKhoa được sản xuất tại nhà máy của Tổng công ty A 
                            có diện tích hàng ngàn m2, với trang thiết bị hiện đại nhất và theo tiêu chuẩn ISO 9001, chuyên sản xuất các sản phẩm nội 
                            thất chất lượng cao cho các khách sạn, nhà hàng 5 sao, dự án nội thất cao cấp và xuất khẩu.</p>
                            <h4>NoithatBachKhoa và Cộng Đồng</h4>
                            Đóng góp cho cộng đồng nằm trong sứ mệnh của NoithatBachKhoa. Để trở thành thương hiệu tiên phong và văn minh, 
                            NoithatBachKhoa đã thực hiện nhiều các hoạt động công đồng như hỗ trợ trẻ em nghèo, tham gia các hoạt động vì môi trường như thiết kế xanh, 
                            đi bộ từ thiện…Những bước chân, hành động không ngừng nghỉ để góp phần cho cuộc sống tốt hơn.
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="/img/gioithieu/4.jpg" width="100%" heigh = "100%">
                    </div>
                    <div class="col">
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="/img/gioithieu/5.jpg" width="100%" heigh = "100%">
                    </div>
                    <div class="col">
                        
                    </div>
                </div>
                <br>
            </span>
        </div>
        
        <div class="title-theme">
            <h2>Chuyện NoithatBachKhoa</h2>
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
