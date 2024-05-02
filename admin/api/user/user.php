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
    <style>
        input[type=submit] {width: 10%;  background-color: #58257b;  color: white;  padding: 5px 5px;  margin: 2px 0;  border: none;  border-radius: 4px;  cursor: pointer;}
    </style>
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
                </div>
            </div>
            <div class="col-md-9">
                <div class="col-md-10 order-md-2 mb-10">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted"> <br> Admins</span>
                        <span class="badge badge-secondary badge-pill">2</span>
                    </h4>
                    <form action="http://localhost:3000/admin/api/user/create_adm.php">
                        <input type="submit" value="Tạo admin" />
                    </form>
                    <?php include '../connect.php';
                        $query = "SELECT `id`, `username`, `name`, `phone` FROM `admin`";
                        $result = mysqli_query($link, $query);
                        $b = 0;
                        $id = array();
                        $username = array ();
                        $namee = array();
                        $phone = array();
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id[] = $row['id'];
                            $username[] = $row['username'];
                            $namee[] = $row['name'];
                            $phone[] = $row['phone'];
                            $b = $b + 1;
                        }
                    ?>

                    
                    <script>
                        var b = <?php echo json_encode($b); ?>;
                        var id;
                        var username;
                        var namee;
                        var phone;

                        id = <?php echo json_encode($id);?>;
                        username = <?php echo json_encode($username); ?>;
                        namee = <?php echo json_encode($namee);?>;
                        phone = <?php echo json_encode($phone); ?>;
                    </script>
                    <ul class="list-group mb-3" id="admin">
                        <script>
                            for (var i = 0; i < b; i++) {
                                const number = document.createElement('h5');
                                const thongtin = document.createElement('small');
                                const br1 = document.createElement('div');
                                const address = document.createElement('div1');
                                const br2 = document.createElement('div');
                                const email = document.createElement('div1');
                                const br3 = document.createElement('div');
                                const status = document.createElement('div1');
                                
                                number.textContent = "ID Admin: #" + id[i];
                                thongtin.textContent = "Thông tin Admin: ";
                                address.textContent = "Username: " + username[i];
                                email.textContent = "Họ và Tên: " + namee[i];
                                status.textContent = "Số điện thoại: " + phone[i];

                                
                                var x = document.createElement("li1");

                                x.appendChild(number);
                                x.appendChild(thongtin);
                                x.appendChild(br1);
                                x.appendChild(address);
                                x.appendChild(br2);
                                x.appendChild(email);
                                x.appendChild(br3);
                                x.appendChild(status);
                                
                                document.getElementById("admin").appendChild(x);
                            }
                        </script>
                    </ul>
                    
                </div>


                <div class="col-md-10 order-md-2 mb-10">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted"> <br> Users </span>
                        <span class="badge badge-secondary badge-pill">2</span>
                    </h4>
                    <?php include '../connect.php';
                        $query = "SELECT `id`, `username`, `status`, `email`, `active` FROM `customer`";
                        $result = mysqli_query($link, $query);
                        $b = 0;
                        $id = array();
                        $username = array ();
                        $namee = array();
                        $phone = array();
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id[] = $row['id'];
                            $username[] = $row['username'];
                            $sta[] = $row['status'];
                            $emai[] = $row['email'];
                            $act[] = $row['active'];
                            if ($row['active'] == NULL) {
                                $act[] = "NULL";
                            }
                            else if ($row['active'] == 1) {
                                $act[] = "đã active";
                            }
                            else {
                                $act[] = "chưa active";
                            }
                            $b = $b + 1;
                        }
                    ?>

                    
                    <script>
                        var b = <?php echo json_encode($b); ?>;
                        var id;
                        var username;
                        var sta;
                        var emai;
                        var act;

                        id = <?php echo json_encode($id);?>;
                        username = <?php echo json_encode($username); ?>;
                        sta = <?php echo json_encode($sta);?>;
                        emai = <?php echo json_encode($emai); ?>;
                        act = <?php echo json_encode($act); ?>;
                    </script>
                    <ul class="list-group mb-3" id="user">
                    <div> <but onclick="subpage()"> << prev | </but> page <span id="pag"></span> <but onclick="addpage()"> | next >> </but></div>
                    <div></div>
                        <script>
                            let page = -1;
                            const number = document.createElement('h5');
                            const thongtin = document.createElement('small');
                            const br1 = document.createElement('div');
                            const address = document.createElement('div1');
                            const br2 = document.createElement('div');
                            const email = document.createElement('div1');
                            const br3 = document.createElement('div');
                            const status = document.createElement('div1');
                            const br4 = document.createElement('div');
                            const acti = document.createElement('div2');
                            const br5 = document.createElement('div');
                            const dele = document.createElement('but');
                            const delen = document.createElement('but');
                            const br6 = document.createElement('div');
                            const conf = document.createElement('div3');
                            var x = document.createElement("li1");

                            const number_1 = document.createElement('h5');
                            const thongtin_1 = document.createElement('small');
                            const br1_1 = document.createElement('div');
                            const address_1 = document.createElement('div1');
                            const br2_1 = document.createElement('div');
                            const email_1 = document.createElement('div1');
                            const br3_1 = document.createElement('div');
                            const status_1 = document.createElement('div1');
                            const br4_1 = document.createElement('div');
                            const acti_1 = document.createElement('div2');
                            const br5_1 = document.createElement('div');
                            const dele_1 = document.createElement('but');
                            const delen_1 = document.createElement('but');
                            const br6_1 = document.createElement('div');
                            const conf_1 = document.createElement('div3');
                            var y = document.createElement("li1");

                            function addpage() {
                                if (page < (b-2)/2){
                                    page = page + 1;
                                    document.getElementById("pag").innerHTML = page;
                                }
                                else {
                                    page = page;
                                }
                                for (var i = page*2-1; i < 2 + page*2-1; i++) {

                                    number.textContent = "ID User: #" + id[i];
                                    thongtin.textContent = "Thông tin User: ";
                                    address.textContent = "Username: " + username[i];
                                    email.textContent = "Email: " + emai[i];
                                    status.textContent = "Tình trạng: " + sta[i];
                                    acti.textContent = "Tài khoản " + act[i];

                                    dele.textContent = "Xóa tài khoản";
                                    document.cookie = "i = " + 999999;
                                    let val = id[i];
                                    dele.addEventListener('click', function handleClick() {
                                        
                                        conf.textContent = "Bạn có chắc muốn xóa tài khoản này?";
                                        dele.textContent = "Có     ";
                                        delen.textContent = "Không";
                                        dele.addEventListener('click', function handleClick() {
                                            conf.textContent = "";
                                            dele.textContent = "";
                                            delen.textContent = "";

                                            document.cookie = "i = " + val;
                                            <?php  
                                                $i = 9999;
                                                $i = $_COOKIE['i'];
                                                $sql = "DELETE FROM customer WHERE id = $i";
                                                $dele=mysqli_query($link, $sql);
                                                
                                            ?>
                                            location.reload();
                                            number.remove();
                                            thongtin.remove();
                                            address.remove();
                                            email.remove();
                                            status.remove();
                                            acti.remove();
                                            conf.remove();
                                        });
                                        delen.addEventListener('click', function handleClick() {
                                            conf.textContent = "";
                                            dele.textContent = "";
                                            delen.textContent = "";
                                            document.cookie = "i = " + 999999;
                                        });
                                    });
                                    
                                    x.appendChild(number);
                                    x.appendChild(thongtin);
                                    x.appendChild(br1);
                                    x.appendChild(address);
                                    x.appendChild(br2);
                                    x.appendChild(email);
                                    x.appendChild(br3);
                                    x.appendChild(status);
                                    x.appendChild(br4);
                                    x.appendChild(acti);
                                    x.appendChild(br5);
                                    x.appendChild(conf);
                                    x.appendChild(br6);
                                    x.appendChild(dele);
                                    x.appendChild(delen);
                                    document.getElementById("user").appendChild(x);

                                    number_1.textContent = "ID User: #" + id[i+1];
                                    thongtin_1.textContent = "Thông tin User: ";
                                    address_1.textContent = "Username: " + username[i+1];
                                    email_1.textContent = "Email: " + emai[i+1];
                                    status_1.textContent = "Tình trạng: " + sta[i+1];
                                    acti_1.textContent = "Tài khoản " + act[i+1];

                                    dele_1.textContent = "Xóa tài khoản";
                                    document.cookie = "i = " + 999999;
                                    let val_1 = id[i+1];
                                    dele_1.addEventListener('click', function handleClick() {
                                        
                                        conf_1.textContent = "Bạn có chắc muốn xóa tài khoản này?";
                                        dele_1.textContent = "Có     ";
                                        delen_1.textContent = "Không";
                                        dele_1.addEventListener('click', function handleClick() {
                                            conf_1.textContent = "";
                                            dele_1.textContent = "";
                                            delen_1.textContent = "";

                                            document.cookie = "i = " + val_1;
                                            <?php  
                                                $i = 9999;
                                                $i = $_COOKIE['i'];
                                                $sql = "DELETE FROM customer WHERE id = $i+1";
                                                $dele_1=mysqli_query($link, $sql);
                                                
                                            ?>
                                            location.reload();
                                            number_1.remove();
                                            thongtin_1.remove();
                                            address_1.remove();
                                            email_1.remove();
                                            status_1.remove();
                                            acti_1.remove();
                                            conf_1.remove();
                                        });
                                        delen_1.addEventListener('click', function handleClick() {
                                            conf_1.textContent = "";
                                            dele_1.textContent = "Xóa tài khoản";
                                            delen_1.textContent = "";
                                            document.cookie = "i = " + 999999;
                                        });
                                    });
                                    
                                    y.appendChild(number_1);
                                    y.appendChild(thongtin_1);
                                    y.appendChild(br1_1);
                                    y.appendChild(address_1);
                                    y.appendChild(br2_1);
                                    y.appendChild(email_1);
                                    y.appendChild(br3_1);
                                    y.appendChild(status_1);
                                    y.appendChild(br4_1);
                                    y.appendChild(acti_1);
                                    y.appendChild(br5_1);
                                    y.appendChild(conf_1);
                                    y.appendChild(br6_1);
                                    y.appendChild(dele_1);
                                    y.appendChild(delen_1);
                                    document.getElementById("user").appendChild(y);
                                }
                            }
                            function subpage() {
                                if (page > 0){
                                    page = page - 1;
                                    document.getElementById("pag").innerHTML = page;
                                }
                                else {
                                    page = page;
                                }
                                for (var i = page*2-1; i < 2 + page*2-1; i++) {

                                    number.textContent = "ID User: #" + id[i];
                                    thongtin.textContent = "Thông tin User: ";
                                    address.textContent = "Username: " + username[i];
                                    email.textContent = "Email: " + emai[i];
                                    status.textContent = "Tình trạng: " + sta[i];
                                    acti.textContent = "Tài khoản " + act[i];

                                    dele.textContent = "Xóa tài khoản";
                                    document.cookie = "i = " + 999999;
                                    let val = id[i];
                                    dele.addEventListener('click', function handleClick() {
                                        
                                        conf.textContent = "Bạn có chắc muốn xóa tài khoản này?";
                                        dele.textContent = "Có     ";
                                        delen.textContent = "Không";
                                        dele.addEventListener('click', function handleClick() {
                                            conf.textContent = "";
                                            dele.textContent = "";
                                            delen.textContent = "";

                                            document.cookie = "i = " + val;
                                            <?php  
                                                $i = 9999;
                                                $i = $_COOKIE['i'];
                                                $sql = "DELETE FROM customer WHERE id = $i";
                                                $dele=mysqli_query($link, $sql);
                                                
                                            ?>
                                            location.reload();
                                            number.remove();
                                            thongtin.remove();
                                            address.remove();
                                            email.remove();
                                            status.remove();
                                            acti.remove();
                                        });
                                        delen_1.addEventListener('click', function handleClick() {
                                            conf.textContent = "";
                                            dele.textContent = "";
                                            delen.textContent = "";
                                            document.cookie = "i = " + 999999;
                                        });
                                    });
                                    
                                    x.appendChild(number);
                                    x.appendChild(thongtin);
                                    x.appendChild(br1);
                                    x.appendChild(address);
                                    x.appendChild(br2);
                                    x.appendChild(email);
                                    x.appendChild(br3);
                                    x.appendChild(status);
                                    x.appendChild(br4);
                                    x.appendChild(acti);
                                    x.appendChild(br5);
                                    x.appendChild(conf);
                                    x.appendChild(br6);
                                    x.appendChild(dele);
                                    x.appendChild(delen);
                                    document.getElementById("user").appendChild(x);

                                    number_1.textContent = "ID User: #" + id[i+1];
                                    thongtin_1.textContent = "Thông tin User: ";
                                    address_1.textContent = "Username: " + username[i+1];
                                    email_1.textContent = "Email: " + emai[i+1];
                                    status_1.textContent = "Tình trạng: " + sta[i+1];
                                    acti_1.textContent = "Tài khoản " + act[i+1];

                                    dele_1.textContent = "Xóa tài khoản";
                                    document.cookie = "i = " + 999999;
                                    let val_1 = id[i+1];
                                    dele_1.addEventListener('click', function handleClick() {
                                        
                                        conf_1.textContent = "Bạn có chắc muốn xóa tài khoản này?";
                                        dele_1.textContent = "Có     ";
                                        delen_1.textContent = "Không";
                                        dele_1.addEventListener('click', function handleClick() {
                                            conf_1.textContent = "";
                                            dele_1.textContent = "";
                                            delen_1.textContent = "";

                                            document.cookie = "i = " + val_1;
                                            <?php  
                                                $i = 9999;
                                                $i = $_COOKIE['i'];
                                                $sql = "DELETE FROM customer WHERE id = $i+1";
                                                $dele=mysqli_query($link, $sql);
                                                
                                            ?>
                                            location.reload();
                                            number_1.remove();
                                            thongtin_1.remove();
                                            address_1.remove();
                                            email_1.remove();
                                            status_1.remove();
                                            acti_1.remove();
                                        });
                                        delen.addEventListener('click', function handleClick() {
                                            conf_1.textContent = "";
                                            dele_1.textContent = "Xóa tài khoản";
                                            delen_1.textContent = "";
                                            document.cookie = "i = " + 999999;
                                        });
                                    });
                                    
                                    y.appendChild(number_1);
                                    y.appendChild(thongtin_1);
                                    y.appendChild(br1_1);
                                    y.appendChild(address_1);
                                    y.appendChild(br2_1);
                                    y.appendChild(email_1);
                                    y.appendChild(br3_1);
                                    y.appendChild(status_1);
                                    y.appendChild(br4_1);
                                    y.appendChild(acti_1);
                                    y.appendChild(br5_1);
                                    y.appendChild(conf_1);
                                    y.appendChild(br6_1);
                                    y.appendChild(dele_1);
                                    y.appendChild(delen_1);
                                    document.getElementById("user").appendChild(y);
                                }
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
</body>
</html>