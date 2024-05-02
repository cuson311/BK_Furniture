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
        input[type=text] {  width: 300%;  padding: 12px 20px;  margin: 8px 0;  box-sizing: border-box; border: none;  border-bottom: 2px solid purple;}
        input[type=button] {  background-color: #e9d8f4;  border: none;  color: #58257b;  padding: 16px 32px;  text-decoration: none;  margin: 4px 2px;  cursor: pointer;}
        input[type=reset] {  width: 50%;  background-color: #db7093;  color: white;  padding: 14px 20px;  margin: 8px 0;  border: none;  border-radius: 4px;  cursor: pointer;}
        input[type=submit] {  width: 71%;  background-color: #58257b;  color: white;  padding: 14px 20px;  margin: 8px 0;  border: none;  border-radius: 4px;  cursor: pointer;}
        textarea {  width: 300%;  height: 150px;  padding: 12px 20px;  box-sizing: border-box;  border: 2px solid #ccc;  border-radius: 4px;  background-color: #f8f8f8;  resize: none;}
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
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="col-md-10 order-md-2 mb-10">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted"> <br> Tạo sản phẩm mới</span>
                        <span class="badge badge-secondary badge-pill">2</span>
                    </h4>
                    <?php
                    include '../connect.php';

                    //Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
                    $name = "";
                    $price = "";
                    $inf = "";
                    $image = "";

                    //Lấy giá trị POST từ form vừa submit
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(isset($_POST["name"])) { $name = $_POST['name']; }
                        if(isset($_POST["price"])) { $price = $_POST['price']; }
                        if(isset($_POST["inf"])) { $inf = $_POST['inf']; }
                        if(isset($_POST["image"])) { $image = $_POST['image']; }

                        //Code xử lý, insert dữ liệu vào table
                        $sql = "INSERT INTO products (name, price, inf, image)
                        VALUES ('$name', '$price', '$inf', '$image')";

                        if (mysqli_query($link, $sql)) {
                            echo "Thêm dữ liệu thành công";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($link);
                        }
                    }

                    //Đóng database
                    mysqli_close($link);
                    ?>

                    <form action="" method="post">
                        <table>
                            <tr>
                                <th>Tên sản phẩm:</th>
                                <td><input type="text" name="name" value=""></td>
                            </tr>

                            <tr>
                                <th>Giá tiền:</th>
                                <td><input type="text" name="price" value=""></td>
                            </tr>

                            <tr>
                                <th>Mô tả:</th>
                                <td><textarea name="inf" value="" placeholder="Nhập mô tả..."></textarea> </td>
                            </tr>

                            <tr>
                                <th>Hình ảnh:</th>
                                <td><input type="text" name="image"></textarea></td>
                            </tr>
                        </table>
                        <input type="submit">
                    </form>
                    
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