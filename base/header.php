    <header>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/Homepage/homepage.php">
                    <img src="../img/logo.jpg" alt="Logo" style="width: 50px" class="rounded-pill"> 
                    Nội Thất BK
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-controls="mynavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="/Homepage/homepage.php"><span class="bi-house m-2"></span>Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="/Gioithieu/gioithieu.php"><span class="bi-info-square m-2"></span>Giới thiệu</a></li>
                        <li class="nav-item"><a class="nav-link" href="/Products/product.php"><span class="bi-bag m-2"></span>Sản phẩm</a></li>
                        <li class="nav-item"><a class="nav-link" href="/News1/news1.php"><span class="bi-newspaper m-2"></span>Tin tức</a></li>
                        <li class="nav-item"><a class="nav-link" href="/Cart/cart.php"><span class="bi-cart4 m-2"></span>Giỏ hàng</a></li>
                    </ul>
                    <ul class="navbar-nav">
                    <?php 
                        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION['role'] == 'customer'){
                            if(empty($image)){
                                $image = "/img/customer/default.png";
                            }else{
                                $image = "/img/customer/".$image;
                            }
                            echo '<i style="display:flex;justify-content:center;align-items:center;"><img src="'.$image.'" style="width:25px;height:25px;border-radius:20px;"></i>';

                            echo'<li class="nav-item"><a class="nav-link" href="">'.$_SESSION['username'].'</a></li>';
                            echo'<li class="nav-item"><a class="nav-link" href="../login/logout.php" style="padding-left: 0; padding-right: 20px;"><span class="bi-box-arrow-down m-1"></span>Logout</a></li>';
                        } else{
                            echo'<li class="nav-item"><a class="nav-link" href="../login/login.php"><span class="bi-lock m-1"></span>Đăng nhập</a></li>';
                            echo'<li class="nav-item"><a class="nav-link" href="../login/register.php" style="padding-left: 0; padding-right: 20px;"><span class="bi-person m-1"></span>Đăng ký</a></li>';
                        }
					?>
                </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Tìm kiếm">
                        <button class="btn btn-outline-secondary" type="submit"><span class="bi-search"></span></button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>