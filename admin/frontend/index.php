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
    <title>AdminPage</title>
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
                            <a href="\Homepage\homepage.php">Trang chủ</a></li>
                        <li class="list-group-item" style="padding-left: 10%;">Client</li>
                        <li class="list-group-item"><a href="#"><i class="bi bi-file-earmark-bar-graph"></i> 
                            <a href="dathang.html">Đặt hàng</a></li>
                        <li class="list-group-item" id="quanlythanhvien"><a href="#"><i class="bi bi-person"></i> Quản lý thành viên</a></li>
                        <script>
                            document.getElementById("quanlythanhvien").onclick = function() {myFunction()};
                            
                            function myFunction() {
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="#"><i class="bi bi-box"></i> Quản lý sản phẩm</a></li>
                                    <li class="list-group-item"><a href="#"><i class="bi bi-plus-circle"></i> Tạo sản phẩm</a></li>
                                </ul>
                            }
                        </script>
                        <li class="list-group-item" style="margin-bottom: 5%;"><a href="#"><i class="bi bi-chat-left"></i> Bình luận</a></li>
                        <li class="list-group-item" style="padding-left: 10%;">Sale</li>
                        <li class="list-group-item"><a href="#"><i class="bi bi-box"></i> Quản lý sản phẩm</a></li>
                        <li class="list-group-item"><a href="#"><i class="bi bi-plus-circle"></i> Tạo sản phẩm</a></li>
                        <li class="list-group-item"><a href="#"><i class="bi bi-box-arrow-right"></i> Đăng xuất</a></li>
                    </ul>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="admin-content">
                    <!-- Content for different admin pages -->
                    <div class="member-management">
                        <!-- Member management content -->
                        <h2>Quản lý thành viên</h2>
                        <!-- Add your member management content here -->
                    </div>
                    <div class="customer-management">
                        <!-- Customer management content -->
                        <h2>Quản lý khách hàng</h2>
                        <!-- Add your customer management content here -->
                    </div>
                    <div class="product-management">
                        <!-- Product management content -->
                        <h2>Quản lý sản phẩm</h2>
                        <!-- Add your product management content here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("../base/footer.php");
    ?>
        </main>
    <script src="script.js"></script>
</body>
</html>