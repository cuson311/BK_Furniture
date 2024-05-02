<?php
session_start();
require_once "../config/config.php";

// get data value from href
$data=$_GET['element'];
// echo $data;

$sql="Select * from `products` where id=$data";
$result=mysqli_query($connection, $sql);
if($result) {
    // product from products
    $row=mysqli_fetch_assoc($result);
    // echo $row['name'];
}
else{
    echo "product not exist";
}

// $query = "select * from comment where productid=$data";
// $res = $connection->query($query);
// $comments = $res->fetch_all(MYSQLI_ASSOC);

// $cur_user_comment = false;
// if(isset($_SESSION['username']) && $_SESSION['loggedin'] == true){
// 	foreach($comments as $comment){
// 		if($comment['customerID'] == $_SESSION['id']){
// 			$cur_user_comment = $comment;
// 			break;
// 		}
// 	}
// }
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
    <link rel="stylesheet" href="/Products/prodstyle.css">
    <title>ProductPage</title>
</head>
<body>
    <?php 
		include("../base/header.php");
	?>

    <main>
    <section id="product" class="py-3">
        <div id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="<?php echo $row['image']; ?>" style="width: 100%" id="MainImg" alt="image">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="<?php echo $row['image']; ?>" style="width: 100%" class="small-img" alt="image">
                    </div>
                    <div class="small-img-col">
                        <img src="<?php echo $row['image1']; ?>" style="width: 100%" class="small-img" alt="image">
                    </div>
                    <div class="small-img-col">
                        <img src="<?php echo $row['image2']; ?>" style="width: 100%" class="small-img" alt="image">
                    </div>
                </div>
            </div>
            <div class="single-pro-details" id="detail1">
                <h4><?php echo $row['name'] ?></h4>
                <h2>$<?php echo $row['price'] ?></h2>
                <select>
                    <option selected>Chọn kích cỡ</option>
                    <option>Nhỏ</option>
                    <option>Vừa</option>
                    <option>Lớn</option>
                </select>
                <input type="number" value="1">
                <?php if(!isset($_SESSION['username']) || $_SESSION['loggedin'] == false ){ ?>
                    <a class="btn btn-outline-dark" href="../login/login.php" >Thêm vào giỏ hàng</a>
                <?php }else{ ?>
                    <button type="button" id="add2cart" value="<?php echo $row['id']; ?>" class="btn btn-outline-dark">Thêm vào giỏ hàng</button>
                <?php }?>
                
                <h4>Thông tin sản phẩm</h4>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid corporis necessitatibus dolore porro veritatis facere est aliquam accusantium praesentium, rerum ab dolorum inventore alias, quod molestias officia quae eligendi accusamus.</span>
            </div>
            <!--  -->
        </div>
        </section>
        <?php include('../base/footer.php'); ?>
    </main>

    <script src="/Products/subscript/subscript-sofa.js"></script>
    <script src='/Products/subscript/add2cart.js'></script>
</body>
</html>
