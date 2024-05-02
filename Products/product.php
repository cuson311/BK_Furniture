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
    <link rel="stylesheet" href="prodstyle.css">
    <title>ProductPage</title>
</head>
<body>
    <?php
    include("../base/header.php");
    ?>

    <main>
        <div id="product1" class="section-p1">
            <div class="title-theme">
                <h2>Sản phẩm</h2>
            </div>
            <div class="filter-buttons">
                <button class="btn filter-button active" data-category="all">Tất cả</button>
                <button class="btn filter-button" data-category="sofa">Sofa</button>
                <button class="btn filter-button" data-category="giuongngu">Giường ngủ</button>
                <button class="btn filter-button" data-category="tuquanao">Tủ quần áo</button>
                <button class="btn filter-button" data-category="tubep">Tủ bếp</button>
                <button class="btn filter-button" data-category="bantrangdiem">Bàn trang điểm</button>
            </div>
            <div id="pro-container"></div>
        </div>
        <?php
        include("../base/footer.php");
        ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <script src="/Products/prodscript.js"></script>
    <script src="filterscript.js"></script>
    <script src="script.js"></script>
</body>
</html>
