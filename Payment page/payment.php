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
    <link rel="stylesheet" href="pmstyle.css">
    <title>Payment Page</title>
</head>

<body>
    <?php
    include("../base/header.php");
    ?>
    <main>
        <div class="container mt-4">
            <div class="needs-validation" name="frmthanhtoan" method="post"
                action="#">
                <input type="hidden" name="kh_tendangnhap" value="">
                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thanh toán</h2>
                    <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
                </div>
                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4" id="gio-hang">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="">Giỏ hàng</span>
                            <span class="badge badge-secondary badge-pill">2</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Sản phẩm 1</h6>
                                    <small class="text-muted">1$ x 1</small>
                                </div>
                                <span class="text-muted">1$</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Sản phẩm 2</h6>
                                    <small class="text-muted">1$ x 1</small>
                                </div>
                                <span class="text-muted">1$</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <h6>Tạm tính</h6>
                                <small class="text-muted">2$</small>
                            </li>
                        </ul>


                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Xác nhận</button>
                            </div>
                        </div>

                        <br>

                        <div class="shipping">
                            <h5 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="">Giao hàng</span>
                            </h5>
                            <div class="shipping-selector">
                                <div class="custom-control custom-radio">
                                    <input id="gh-1" name="gh_ma" type="radio" class="custom-control-input" required="" value="1">
                                    <label class="custom-control-label" for="gh-1">Tiết kiệm | HCM (1 - 2 ngày) | Toàn quốc (3 - 4 ngày)</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="gh-2" name="gh_ma" type="radio" class="custom-control-input" required="" value="2">
                                    <label class="custom-control-label" for="gh-2">Hỏa tốc | Liên hệ chúng tôi</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="gh-3" name="gh_ma" type="radio" class="custom-control-input" required="" value="3">
                                    <label class="custom-control-label" for="gh-3">Giao tại cửa hàng</label>
                                </div>
                            </div>
                        </div>

                        <div class="total">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Tổng</h6>
                                    </div>
                                    <strong>2$</strong>
                                </li>
                        </div>
                        <br>
                        <div class="payment">
                            <h5 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="">Thanh toán</span>
                            </h5>
                            <div class="payment-selector">
                                <div class="custom-control custom-radio">
                                    <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required="" value="1">
                                    <label class="custom-control-label" for="httt-1">Chuyển khoản ngân hàng</label>
                                    <br>
                                    <small class="text-muted">Chuyển khoản trực tiếp từ tài khoản ngân hàng của bạn, ngay sau khi nhận được, đơn hàng của bạn sẽ được đóng gói và chuyển cho đơn vị vận chuyển.</small>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required="" value="2">
                                    <label class="custom-control-label" for="httt-2">Trả tiền mặt khi nhận hàng</label>
                                </div>
                            </div>
                            <button class="btn btn-outline-dark btn-lg" id="dathang" type="submit" name="btnDatHang">Đặt hàng</button>
                        </div>

                    </div>
                    
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>

                        <form class="row">
                            <div class="col-md-12">
                                <label for="kh_ten">Họ tên</label>
                                <input type="text" class="form-control" name="kh_ten" id="kh_ten" value="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_gioitinh">Giới tính</label>
                                <input type="text" class="form-control" name="kh_gioitinh" id="kh_gioitinh" value="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_diachi">Địa chỉ</label>
                                <input type="text" class="form-control" name="kh_diachi" id="kh_diachi" value="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input type="text" class="form-control" name="kh_dienthoai" id="kh_dienthoai"
                                    value="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_email">Email</label>
                                <input type="text" class="form-control" name="kh_email" id="kh_email" value="" >
                            </div>
                            <div class="col-md-12">
                                <label for="kh_ngaysinh">Ngày sinh</label>
                                <input type="text" class="form-control" name="kh_ngaysinh" id="kh_ngaysinh" value="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_cmnd">CMND</label>
                                <input type="text" class="form-control" name="kh_cmnd" id="kh_cmnd" value="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include("../base/footer.php");
        ?>
    </main>
</body>

