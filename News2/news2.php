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
    <link rel="stylesheet" href="n2style.css">
    <title>news2</title>
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
            <h2>KHÁM PHÁ QUY TRÌNH TẠO RA CÁC SẢN PHẨM BRIDGE VÀ ELEGANCE</h2>
        </div>

        <div class="div1">
            <span style="font-size: 18px">
                <p style="text-align:justify">Bridge và Elegance là hai dòng sản phẩm do nhà thiết kế Đan Mạch – Hans Sandgren Jakobsen tạo ra, 
                hiện rất được yêu thích tại NoithatBachKhoa. Hãy theo chân NoithatBachKhoa đến với dây chuyền sản xuất từ khâu nguyên vật liệu cho đến 
                thành phẩm và cùng khám phá câu chuyện thú vị đằng sau những siêu phẩm này.</p>
                
                <figure>
                    <img src="/img/news2/1.jpg" width="100%" heigh = "100%">
                    <br>
                    <figurecaption>
                        <br>
                        <p style="text-align: center;"><i>Các mối ghép finger hoàn thiện tinh xảo</i></p> 
                    </figurecaption>		
                </figure>
                <br> <br>
                <div class="row">
                    <div class="col">
                        <p style="text-align:justify">Ở khâu đầu tiên, tất cả nguyên vật liệu đều được kiểm tra, sàng lọc và đánh dấu thông tin cẩn thận 
                        để phục vụ cho các quy trình sản xuất tiếp theo. Gỗ sồi, tần bì được nhập khẩu trực tiếp từ Mỹ, trải qua thời gian sấy kéo dài 
                        từ 105 đến 110 ngày với chế độ sấy mát xa, đó là quá trình phun ẩm và hút ẩm liên tục nhằm đảm bảo gỗ luôn 
                        duy trì độ ẩm nhất định.</p>
                        <p style="text-align:justify">Nếu chỉ sấy mà không cấp ẩm, gỗ rất dễ bị nứt chân chim trong quá trình sử dụng. Vì thế, quá trình 
                        này phải được thực hiện từ từ, uyển chuyển để đảm bảo thành phẩm hoàn thiện nhất.</p>
                    </div>
                    <div class="col-7">
                        <figure>
                            <img src="/img/news2/2.jpg" width="100%" heigh = "100%">
                            <br>
                            <figurecaption>
                                <br>
                                <p style="text-align: center;"><i>Gỗ được nhập khẩu từ Mỹ và trải qua quy trình sàng lọc</i></p> 
                            </figurecaption>		
                        </figure>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-5">
                        <figure>
                            <img src="/img/news2/3.jpg" width="100%" heigh = "100%">
                            <br>
                            <figurecaption>
                                <br>
                                <p style="text-align: center;"><i>Gỗ được cắt, xẻ và tạo hình</i></p>
                            </figurecaption>		
                        </figure>
                    </div>
                    <div class="col">
                        <p style="text-align:justify">Sau đó, những người thợ lành nghề sẽ tiếp tục giai đoạn bào phẳng, cắt ngắn và tạo hình 
                        từng thanh gỗ. Trước khi đến công đoạn tiếp theo, gỗ thành phẩm được đưa sang bộ phận QC (kiểm soát chất lượng) 
                        kiểm tra kỹ càng thông qua dụng cụ đo đạc để đảm bảo các chi tiết đúng theo bản thiết kế.</p> <br>
                        <figure>
                            <img src="/img/news2/4.jpg" width="100%" heigh = "100%">
                            <br>
                            <figurecaption>
                                <br>
                                <p style="text-align: center;"><i>Các chi tiết trên chân ghế được tạo hình và khoan lỗ bằng máy</i></p>
                            </figurecaption>		
                        </figure>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-6">
                        <figure>
                            <img src="/img/news2/5.jpg" width="100%" heigh = "100%">
                            <br>
                            <figurecaption>
                                <br>
                                <p style="text-align: center;"><i>Kiểm tra khả năng chịu lực của ghế</i></p>
                            </figurecaption>		
                        </figure>
                    </div>
                    <div class="col">
                        <p style="text-align:justify">Đặc biệt, các phần lưng tựa, tay vịn của ghế Bridge sẽ được tạo khuôn với các mối ghép finger 
                        qua hệ thống máy cắt nhập khẩu từ Đan Mạch. Phần khung ghế cũng phải trải qua quá trình kiểm tra nghiêm ngặt về độ giãn nở, 
                        tính chịu lực và va đập trong quá trình sử dụng. Chẳng hạn như đặt vật nặng 60 kg va chạm vào ghế trong hơn 19.800 lần để 
                        xem các mối nối có bị bung, các chi tiết có bị cong vênh hay không.</p> <br>
                        <figure>
                            <img src="/img/news2/6.jpg" width="100%" heigh = "100%">
                            <br>
                            <figurecaption>
                                <br>
                                <p style="text-align: center;"><i>Phần lưng ghế Bridge được dập hoàn toàn bằng máy nhập khẩu từ Đan Mạch</i></p>
                            </figurecaption>		
                        </figure>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-6">
                        <figure>
                            <img src="/img/news2/7.jpg" width="100%" heigh = "100%">
                            <br>
                            <figurecaption>
                                <br>
                                <p style="text-align: center;"><i>Sơn màu PU cho khung ghế</i></p>
                            </figurecaption>		
                        </figure>
                    </div>
                    <div class="col">
                        <p style="text-align:justify">Tiếp theo là quá trình sơn PU, mỗi mã màu sơn đều được đánh dấu kỹ lưỡng để sơn lên đúng màu 
                            và đồng đều. Các sản phẩm đều được bọc cẩn thận ở khu vực riêng sau khi sơn xong. Bộ phận QC tiếp tục kiểm tra từng chi 
                            tiết một lần nữa sau khi sơn đã khô, đảm bảo sản phẩm đáp ứng các yếu tố như bản thiết kế.</p> <br>
                        <figure>
                            <img src="/img/news2/8.jpg" width="100%" heigh = "100%">
                            <br>
                            <figurecaption>
                                <br>
                                <p style="text-align: center;"><i>Các sản phẩm được bao bọc kỹ và đặt ở khu vực riêng sau khi sơn</i></p>
                            </figurecaption>		
                        </figure>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-6">
                        <figure>
                            <img src="/img/news2/9.jpg" width="100%" heigh = "100%">
                            <br>
                            <figurecaption>
                                <br>
                                <p style="text-align: center;"><i>Kiểm tra các phần sau khi hoàn thành sơn PU</i></p>
                            </figurecaption>		
                        </figure>
                    </div>
                    <div class="col">
                        <figure>
                            <img src="/img/news2/10.jpg" width="100%" heigh = "100%">
                            <br>
                            <figurecaption>
                                <br>
                                <p style="text-align: center;"><i>Đóng dấu tên sản phẩm sau khi phần khung vượt qua các bài kiểm tra</i></p>
                            </figurecaption>		
                        </figure>
                        <p style="text-align:justify">Khung ghế là phần đảm bảo độ vững chắc, còn nệm ghế sẽ mang tới sự êm ái, thoải mái khi sử dụng. 
                        Vì vậy, các phần đệm mút đều được tính toán đúng theo công thái học, tỷ lệ dàn trải đệm mút và mật độ lớp lông vũ đều tuân 
                        theo “thông số vàng” đã nghiên cứu trước đó, đây là khâu quan trọng để đảm bảo độ đàn hồi, mềm mại của ghế và sofa.</p>
                        <p style="text-align:justify">Quá trình này chú trọng việc triệt tiêu phản lực, ổn định vị trí cơ thể, không tạo ra nhiều dao 
                        động nhằm duy trì tư thế thoải mái, giúp cột sống khỏe mạnh. Trước khi bọc nệm cho ghế, tất cả đệm mút đều được kiểm tra qua 
                        máy dò kim loại để đảm bảo không bỏ sót bất kỳ vật nhọn nào.</p> <br>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-6">
                        <figure>
                            <img src="/img/news2/11.jpg" width="100%" heigh = "100%">
                            <br>
                            <figurecaption>
                                <br>
                                <p style="text-align: center;"><i>Đệm mút và lông vũ được phối trộn theo tỷ lệ phù hợp</i></p>
                            </figurecaption>		
                        </figure>
                    </div>
                    <div class="col">
                        <figure>
                            <img src="/img/news2/12.jpg" width="100%" heigh = "100%">
                            <br>
                            <figurecaption>
                                <br>
                                <p style="text-align: center;"><i>Kiểm soát chặt chẽ từng con ốc</i></p>
                            </figurecaption>
                        </figure>
                    </div>
                </div>
                <br>

                <br>
                <div class="row">
                    <div class="col-6">
                        <figure>
                            <p style="text-align:justify">Cuối cùng là công đoạn bọc da, đây là khâu quyết định vẻ đẹp thẩm mỹ cùng độ bền của bề mặt 
                                sản phẩm. Tất cả những tấm da bò được chọn lựa từ các nhà cung cấp châu Âu sẽ được những người thợ kiểm tra cẩn thận 
                                từ màu sắc cho đến các đường vân. Sau đó, mỗi miếng da được đưa vào khung rập tạo thành từng mảnh da rời, tương ứng 
                                với các bộ phận như lưng tựa, tay ghế, đệm ngồi,… của sofa. Các mảnh da được mài mỏng phần viền trước khi may, đảm bảo 
                                mối nối phẳng và đáp ứng tính thẩm mỹ cao. Mỗi miếng da được may thủ công với đường chỉ khéo léo để tạo ra sản phẩm chỉn 
                                chu nhất khi đến tay người sử dụng.</p> <br>
                            <img src="/img/news2/13.jpg" width="100%" heigh = "100%">
                            <br>
                            <figurecaption>
                                <br>
                                <p style="text-align: center;"><i>Kiểm tra kỹ càng từng khu vực trên tấm da</i></p>
                            </figurecaption>		
                        </figure>
                    </div>
                    <div class="col">
                        <figure>
                            <img src="/img/news2/14.jpg" width="100%" heigh = "100%">
                            <br>
                            <figurecaption>
                                <br>
                                <p style="text-align: center;"><i>Những đường may khéo léo, tỉ mỉ ghép nối các mảnh da</i></p>
                            </figurecaption>
                        </figure>
                    </div>
                </div>
                <br>
                <p style="text-align:justify">Sản phẩm hoàn thiện sẽ được bộ phận QC kiểm tra một lần nữa trước khi đóng gói. Và ngay cả khi giao đến 
                    tận tay khách hàng, NoithatBachKhoa cũng sẽ kiểm tra cẩn thận các chi tiết, đảm bảo luôn mang đến sản phẩm với chất lượng tốt nhất cho 
                    người sử dụng.</p>
                <br>
                <figure>
                    <img src="/img/news2/15.jpg" width="100%" heigh = "100%">
                    <br>
                    <figurecaption>
                        <br>
                        <p style="text-align: center;"><i>Sofa Bridge sau khi được hoàn thiện</i></p> 
                    </figurecaption>		
                </figure>
                <br>
                <p style="text-align:justify">Quy trình sản xuất tiến hành nghiêm ngặt, chỉn chu nhằm hướng đến sản phẩm có độ hoàn thiện cao. 
                    Để có trải nghiệm chân thực nhất, hãy ghé thăm các cửa hàng NoithatBachKhoa ngay hôm nay.</p>
                    
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
