<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>order</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/Homepage/homepage.php">
                    <img src="./img/logo.jpg" alt="Logo" style="width: 50px" class="rounded-pill"> 
                    NoiThatBachKhoa
                </a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm">
                    <button class="btn btn-outline-secondary" type="submit"><span class="bi-search"></span></button>
                </form>
            </div>
        </nav>
    </header>
    <main>
      <div class="sidebar">
        <div class="row">
            <div class="col-md-2">
                <div class="admin-sidebar">
                    <!-- Sidebar content -->
                    <ul class="list-group">
                        <li class="list-group-item active" style="margin-bottom: 5%; color: white;"><i class="bi bi-house-door"></i> 
                            <a href="/Homepage/homepage.php">Trang chủ</a></li>
                        <li class="list-group-item" style="padding-left: 10%;">Client</li>
                        <li class="list-group-item"><a href="http://localhost:3000/admin/api/product/dathang.php"><i class="bi bi-file-earmark-bar-graph"></i> Đơn hàng</a></li>
                        <li class="list-group-item" id="quanlythanhvien"><a href="http://localhost:3000/admin/api/user/user.php"><i class="bi bi-person"></i> Quản lý thành viên</a></li>
                     
                        <li class="list-group-item" style="padding-left: 10%;">Sale</li>
                        <li class="list-group-item"><a href="http://localhost:3000/admin/api/create_product/create_pro.php"><i class="bi bi-plus-circle"></i> Tạo sản phẩm</a></li>
                        
                        <li class="list-group-item"><a href="#"><i class="bi bi-box-arrow-right"></i> Đăng xuất</a></li>
                    </ul>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="col-md-10 order-md-2 mb-10">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted"> <br> Đơn hàng</span>
                        <span class="badge badge-secondary badge-pill">2</span>
                    </h4>
                    <?php include '../connect.php';
                        $query = "SELECT `number`, `address`, `email`, `status` FROM `order`";
                        $result = mysqli_query($link, $query);
                        $b = 0;
                        $num = array();
                        $addr = array ();
                        $em = array();
                        $sta = array();
                        while ($row = mysqli_fetch_assoc($result)) {
                            // echo $row['number'];
                            // echo $row['address'];
                            // echo $row['email'];
                            // echo $row['status'];
                            $num[] = $row['number'];
                            $addr[] = $row['address'];
                            $em[] = $row['email'];
                            if ($row['status'] == 0) {
                                $sta[] = "chưa hoàn thành";
                            }
                            else {
                                $sta[] = "đã hoàn thành";
                            }
                            $b = $b + 1;
                        }
                    ?>

                    
                    <script>
                        var b = <?php echo json_encode($b); ?>;
                        var num = [];
                        <?php $count = 0; ?>
                        
                        <?php $c = $b - $count;?>;

                        num = <?php echo json_encode($num);?>;
                        sta = <?php echo json_encode($sta); ?>;
                        addr = <?php echo json_encode($addr);?>;
                        em = <?php echo json_encode($em); ?>;
                    </script>
                    <ul class="list-group mb-3" id="oder">
                        <div> <but onclick="subpage()"> << prev | </but> page <span id="pag"></span> <but onclick="addpage()"> | next >> </but></div>        
                        <script>
                            let page = -1;
                            const number = document.createElement('h5');
                            const thongtin = document.createElement('small');
                            const br1 = document.createElement('div');
                            const address = document.createElement('div1');
                            const br2 = document.createElement('div');
                            const email = document.createElement('div1');
                            const br3 = document.createElement('div');
                            const status = document.createElement('div2');
                            var x = document.createElement("li1");

                            const number_1 = document.createElement('h5');
                            const thongtin_1 = document.createElement('small');
                            const br1_1 = document.createElement('div');
                            const address_1 = document.createElement('div1');
                            const br2_1 = document.createElement('div');
                            const email_1 = document.createElement('div1');
                            const br3_1 = document.createElement('div');
                            const status_1 = document.createElement('div2');
                            var x_1 = document.createElement("li1");

                            const number_2 = document.createElement('h5');
                            const thongtin_2 = document.createElement('small');
                            const br1_2 = document.createElement('div');
                            const address_2 = document.createElement('div1');
                            const br2_2 = document.createElement('div');
                            const email_2 = document.createElement('div1');
                            const br3_2 = document.createElement('div');
                            const status_2 = document.createElement('div2');
                            var x_2 = document.createElement("li1");

                            const number_3 = document.createElement('h5');
                            const thongtin_3 = document.createElement('small');
                            const br1_3 = document.createElement('div');
                            const address_3 = document.createElement('div1');
                            const br2_3 = document.createElement('div');
                            const email_3 = document.createElement('div1');
                            const br3_3 = document.createElement('div');
                            const status_3 = document.createElement('div2');
                            var x_3 = document.createElement("li1");

                            const number_4 = document.createElement('h5');
                            const thongtin_4 = document.createElement('small');
                            const br1_4 = document.createElement('div');
                            const address_4 = document.createElement('div1');
                            const br2_4 = document.createElement('div');
                            const email_4 = document.createElement('div1');
                            const br3_4 = document.createElement('div');
                            const status_4 = document.createElement('div2');
                            var x_4 = document.createElement("li1");

                            function addpage() {
                                if (page < (b-5)/5){
                                    page = page + 1;
                                    document.getElementById("pag").innerHTML = page;
                                }
                                else {
                                    page = page;
                                }
                            
                                var i = page*5;
                                    
                                    number.textContent = "Mã đơn hàng: #" + num[i];
                                    thongtin.textContent = "Thông tin khách hàng: ";
                                    address.textContent = "Tài khoản đặt hàng: " + em[i];
                                    email.textContent = "Địa chỉ: " + addr[i];
                                    status.textContent = "Tình trạng: " + sta[i];
                                    
                                    x.appendChild(number);
                                    x.appendChild(thongtin);
                                    x.appendChild(br1);
                                    x.appendChild(address);
                                    x.appendChild(br2);
                                    x.appendChild(email);
                                    x.appendChild(br3);
                                    x.appendChild(status);
                                    document.getElementById("oder").appendChild(x);

                                    number_1.textContent = "Mã đơn hàng: #" + num[i+1];
                                    thongtin_1.textContent = "Thông tin khách hàng: ";
                                    address_1.textContent = "Tài khoản đặt hàng: " + em[i+1];
                                    email_1.textContent = "Địa chỉ: " + addr[i+1];
                                    status_1.textContent = "Tình trạng: " + sta[i+1];
                                    
                                    x_1.appendChild(number_1);
                                    x_1.appendChild(thongtin_1);
                                    x_1.appendChild(br1_1);
                                    x_1.appendChild(address_1);
                                    x_1.appendChild(br2_1);
                                    x_1.appendChild(email_1);
                                    x_1.appendChild(br3_1);
                                    x_1.appendChild(status_1);
                                    document.getElementById("oder").appendChild(x_1);

                                    number_2.textContent = "Mã đơn hàng: #" + num[i+2];
                                    thongtin_2.textContent = "Thông tin khách hàng: ";
                                    address_2.textContent = "Tài khoản đặt hàng: " + em[i+2];
                                    email_2.textContent = "Địa chỉ: " + addr[i+2];
                                    status_2.textContent = "Tình trạng: " + sta[i+2];
                                    
                                    x_2.appendChild(number_2);
                                    x_2.appendChild(thongtin_2);
                                    x_2.appendChild(br1_2);
                                    x_2.appendChild(address_2);
                                    x_2.appendChild(br2_2);
                                    x_2.appendChild(email_2);
                                    x_2.appendChild(br3_2);
                                    x_2.appendChild(status_2);
                                    document.getElementById("oder").appendChild(x_2);

                                    number_3.textContent = "Mã đơn hàng: #" + num[i+3];
                                    thongtin_3.textContent = "Thông tin khách hàng: ";
                                    address_3.textContent = "Tài khoản đặt hàng: " + em[i+3];
                                    email_3.textContent = "Địa chỉ: " + addr[i+3];
                                    status_3.textContent = "Tình trạng: " + sta[i+3];
                                    
                                    x_3.appendChild(number_3);
                                    x_3.appendChild(thongtin_3);
                                    x_3.appendChild(br1_3);
                                    x_3.appendChild(address_3);
                                    x_3.appendChild(br2_3);
                                    x_3.appendChild(email_3);
                                    x_3.appendChild(br3_3);
                                    x_3.appendChild(status_3);
                                    document.getElementById("oder").appendChild(x_3);

                                    number_4.textContent = "Mã đơn hàng: #" + num[i+4];
                                    thongtin_4.textContent = "Thông tin khách hàng: ";
                                    address_4.textContent = "Tài khoản đặt hàng: " + em[i+4];
                                    email_4.textContent = "Địa chỉ: " + addr[i+4];
                                    status_4.textContent = "Tình trạng: " + sta[i+4];
                                    
                                    x_4.appendChild(number_4);
                                    x_4.appendChild(thongtin_4);
                                    x_4.appendChild(br1_4);
                                    x_4.appendChild(address_4);
                                    x_4.appendChild(br2_4);
                                    x_4.appendChild(email_4);
                                    x_4.appendChild(br3_4);
                                    x_4.appendChild(status_4);
                                    document.getElementById("oder").appendChild(x_4);
                                
                            }

                            function subpage() {
                                if (page >0){
                                    page = page - 1;
                                    document.getElementById("pag").innerHTML = page;
                                }
                                else {
                                    page = page;
                                }
                            
                                var i = page*5;
                                    
                                    number.textContent = "Mã đơn hàng: #" + num[i];
                                    thongtin.textContent = "Thông tin khách hàng: ";
                                    address.textContent = "Tài khoản đặt hàng: " + em[i];
                                    email.textContent = "Địa chỉ: " + addr[i];
                                    status.textContent = "Tình trạng: " + sta[i];
                                    
                                    x.appendChild(number);
                                    x.appendChild(thongtin);
                                    x.appendChild(br1);
                                    x.appendChild(address);
                                    x.appendChild(br2);
                                    x.appendChild(email);
                                    x.appendChild(br3);
                                    x.appendChild(status);
                                    document.getElementById("oder").appendChild(x);

                                    number_1.textContent = "Mã đơn hàng: #" + num[i+1];
                                    thongtin_1.textContent = "Thông tin khách hàng: ";
                                    address_1.textContent = "Tài khoản đặt hàng: " + em[i+1];
                                    email_1.textContent = "Địa chỉ: " + addr[i+1];
                                    status_1.textContent = "Tình trạng: " + sta[i+1];
                                    
                                    x_1.appendChild(number_1);
                                    x_1.appendChild(thongtin_1);
                                    x_1.appendChild(br1_1);
                                    x_1.appendChild(address_1);
                                    x_1.appendChild(br2_1);
                                    x_1.appendChild(email_1);
                                    x_1.appendChild(br3_1);
                                    x_1.appendChild(status_1);
                                    document.getElementById("oder").appendChild(x_1);

                                    number_2.textContent = "Mã đơn hàng: #" + num[i+2];
                                    thongtin_2.textContent = "Thông tin khách hàng: ";
                                    address_2.textContent = "Tài khoản đặt hàng: " + em[i+2];
                                    email_2.textContent = "Địa chỉ: " + addr[i+2];
                                    status_2.textContent = "Tình trạng: " + sta[i+2];
                                    
                                    x_2.appendChild(number_2);
                                    x_2.appendChild(thongtin_2);
                                    x_2.appendChild(br1_2);
                                    x_2.appendChild(address_2);
                                    x_2.appendChild(br2_2);
                                    x_2.appendChild(email_2);
                                    x_2.appendChild(br3_2);
                                    x_2.appendChild(status_2);
                                    document.getElementById("oder").appendChild(x_2);

                                    number_3.textContent = "Mã đơn hàng: #" + num[i+3];
                                    thongtin_3.textContent = "Thông tin khách hàng: ";
                                    address_3.textContent = "Tài khoản đặt hàng: " + em[i+3];
                                    email_3.textContent = "Địa chỉ: " + addr[i+3];
                                    status_3.textContent = "Tình trạng: " + sta[i+3];
                                    
                                    x_3.appendChild(number_3);
                                    x_3.appendChild(thongtin_3);
                                    x_3.appendChild(br1_3);
                                    x_3.appendChild(address_3);
                                    x_3.appendChild(br2_3);
                                    x_3.appendChild(email_3);
                                    x_3.appendChild(br3_3);
                                    x_3.appendChild(status_3);
                                    document.getElementById("oder").appendChild(x_3);

                                    number_4.textContent = "Mã đơn hàng: #" + num[i+4];
                                    thongtin_4.textContent = "Thông tin khách hàng: ";
                                    address_4.textContent = "Tài khoản đặt hàng: " + em[i+4];
                                    email_4.textContent = "Địa chỉ: " + addr[i+4];
                                    status_4.textContent = "Tình trạng: " + sta[i+4];
                                    
                                    x_4.appendChild(number_4);
                                    x_4.appendChild(thongtin_4);
                                    x_4.appendChild(br1_4);
                                    x_4.appendChild(address_4);
                                    x_4.appendChild(br2_4);
                                    x_4.appendChild(email_4);
                                    x_4.appendChild(br3_4);
                                    x_4.appendChild(status_4);
                                    document.getElementById("oder").appendChild(x_4);
                                
                            }
                        </script>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
        include("../../../base/footer.php");
        ?>
        </main>
    <script src="script.js"></script>
</body>
</html>