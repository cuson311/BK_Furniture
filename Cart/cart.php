<?php 
	session_start();
	if(!isset($_SESSION['username']) || $_SESSION['loggedin'] == false){
		//show error page
		header("Location: ../login/login.php");
		exit();
	}
	if($_SESSION['role'] != 'customer'){
		//show error page
		echo 'This page is only for customer';
		exit();
	}else{ 
		require_once('../config/config.php');

		$query = "select * from customer where username='".$_SESSION['username']."'";
		
		$res = $connection->query($query);
		$CUSTOMER_INFO = $res->fetch_assoc();


		$query = "select id from cart where customerID=".$CUSTOMER_INFO['id'];
		$res = $connection->query($query);
		$cartID = $res->fetch_assoc()['id'];

		$query = "select productID,amount from keep where cartID=".$cartID;
	
		$res = $connection->query($query);
		$products_in_cart_id = $res->fetch_all(MYSQLI_ASSOC);

		$total = 0;
		$PRODUCTS_DETAIL = array();
		foreach($products_in_cart_id as $product_id){
			$query = "select * from products where id=".$product_id['productID'];
			$res = $connection->query($query);
			$detail = $res->fetch_assoc();
			$detail['quantity'] = $product_id['amount'];
			$detail['subtotal'] = $detail['quantity'] * $detail['price'];
			array_push($PRODUCTS_DETAIL, $detail);
			$total +=  $detail['subtotal'];
		}
	
		$connection->close();

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
    <link rel="stylesheet" href="cartstyle.css">
    <title>Cart</title>
</head>
<body>
    <?php
    include("../base/header.php");
    ?>
    <main>
        <div class="title-theme">
            <h2>Giỏ hàng</h2>
        </div>
        <div id="cart" class="section-p1">
            <table>
                <thead>
                    <tr>
                        <td>Xóa</td>
                        <td>Hình ảnh sản phẩm</td>
                        <td>Tên sản phẩm</td>
                        <td>Giá tiền</td>
                        <td>Số lượng</td>
                        <td>Tổng tiền</td>
                    </tr>
                </thead>
                <tbody>
                    <div class="items">
                        <?php foreach($PRODUCTS_DETAIL as $product){ ?>
                            <div class="product" id="product_<?php echo $product['id']; ?>">
                                <tr>
                                    <td><div class="close" id="close_<?php echo $product['id']; ?>"><i class="far fa-times-circle"></i></div></td>
                                    <td><img src="<?php echo $product['image'] ?>" alt="image"></td>
                                    <td><?php echo $product['name'] ?></td>
                                    <td>$<?php echo $product['price'] ?></td>
                                    <td><input id="quantity_<?php echo $product['id']; ?>" min="1" type="number" max="<?php echo $product['amount']; ?>" value ="<?php echo $product['quantity']; ?>"><p id="quantity_err_<?php echo $product['id'];?>" style="color:red"></p></td>
                                    <td>$<span id="subtotal_<?php echo $product['id']; ?>"><?php echo $product['subtotal']; ?></span></td>
                                </tr>
                            </div>
                        <?php 	} ?>
                    </div>
                </tbody>
            </table>
        </div>
        <div id="cart-add" class="section-p1">
            <div id="subtotal">
                <h3>Tổng giỏ hàng</h3>
                <table>
                    <tr>
                        <td>Tổng</td>
                        <td><span id="subtotalAll" class="price">$<?php echo $total; ?></span></td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td><strong>Tổng tiền</strong></td>
                        <td><strong><span id="total" class="price">$<?php echo $total; ?></span></strong></td>
                    </tr>
                </table>
                <a class="btn btn-warning" href="/Payment page/payment.php" id="checkout">Thêm vào giỏ hàng</a>
            </div>
        </div>
        <?php
        include("../base/footer.php");
        ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="js/cart.js"></script>
</body>
</html>
<?php } ?>