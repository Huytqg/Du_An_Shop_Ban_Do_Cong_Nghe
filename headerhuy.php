<?php
include_once('controller/connect.php');


$sql = 'SELECT danh_muc.name
        FROM danh_muc';

$result = $conn->query($sql);
$hang = '';
if ($result) {
    $listnamedanhmuc = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($listnamedanhmuc) {
        foreach ($listnamedanhmuc as $key => $item) {
            $hang .= '
                <tr>
                    <td>'. $item["name"] . '</td>
                </tr>
            ';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="view/css/styles.css">
</head>

<body>
    <!-- header -->
    <header>
        <a href="index.php" class="logo"><img src="Logo team 13/logo_2_2.png" alt="" style="width: 100px;"></a>
        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#dishes">Dishes</a>
            <a href="#about">About</a>
            <div class="dropdown">
                <button class="dropbtn"><a href="#menu">Menu</a></button>
                <div class="dropdown-content">
                    <a href="#"><?= $hang ?></a>
                    <!-- <a href="#">Link 2</a>
                    <a href="#">Link 3</a> -->
                </div>
            </div>
            <a href="#review">Review</a>
            <a href="#order">Order</a>
        </nav>
        <!-- <div class="avatar">
            <span style="font-size: 1.5rem;">Xin chào admin</span>
            <img src="img/avatar.png" alt="" style="width: 45px;">
        </div> -->
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <!-- <a href="#" class="fas fa-heart"></a> -->
            <i id="cart-icon" class='fas fa-shopping-cart'></i>
            <?php
            if (isset($_SESSION['username'])) {
                extract($_SESSION['username']);
                echo  "<div class='col'>
                <div class='dropdown'>
                <div href='#' id='imageDropdown' data-toggle='dropdown'>
                    <img src='Logo user/logo user.png' style='width: 80px; padding: 10px;' />Xin chào $username
                </div>
                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                    <div style='width: 250px; height: 350px;'>
                        <div class='dropdown-item' href='#'><img src='Logo user/logo user.png' alt='' style='width: 150px; margin-left: 40px; padding: 20px 20px 0px 20px;'></div>
                        <div class='dropdown-item' href='#' style='text-align: center; font-weight: bold; text-decoration: none; color: black;'>$username</div>
                        </div>
                        </div>
                    </div>
                    </div>";
                echo "<div class='col' style='text-align: center; margin-top: 40px;'><a href='index.php?act=thoat'><input type='button' value='Đăng Xuất' style='border: none; background-color: #1976D2; padding: 10px; border-radius: 10px; color: white; font-weight: bold;'></a></div>";
            } else {
            ?>
                <a href="signin_gia_huy.php" class="fas fa-sign-in"></a>
                <a href="signup_gia_huy.php" class="fas fa-user-plus"></a>
            <?php } ?>
        </div>
    </header>

    <!-- form search -->
    <form action="" id="search-form">
        <input type="search" placeholder="Search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
    <!--Hết form search -->


    <div class="cart">
        <h2 class="cart-title">Your car</h2>
            <form action="index.php?act=submit" method="post">
                <div class="cart-content">
                    <?php
                    $total = 0;
                    if (isset($pro)) { ?>
                        <?php foreach ($pro as $cart) : ?>
                            <div class="cart-box">
                                <img src="images/<?= $cart['image'] ?>" alt="" class="cart-img">
                                <div class="detail-box">
                                    <div class="cart-product-title"><?= $cart['name'] ?></div>
                                    <div class="cart-price">$<?= number_format($cart['price'],0,",",".") ?> VND </div>
                                    <input type="number" min="0" value="<?= $_SESSION['mycart'][$cart['id']] ?>" class="cart-quantity" name="quantity[<?= $cart['id'] ?>]">
                                    <!-- xóa -->
                                </div>
                                <a href="index.php?act=deletecart&id=<?= $cart['id'] ?>"><i class='bx bxs-trash-alt cart-remove'></i></a>
                            </div>
                            <?php $total += $cart['price'] * $_SESSION['mycart'][$cart['id']]; ?>
                        <?php endforeach ?>
                    <?php } else {
                        echo "Không có sản phẩm trong giỏ hàng";
                    } ?>
                </div>
                <!-- tổng -->
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price price">$<?= number_format($total,0,",",".") ?> VND</div>
                </div>
                <!-- mua -->
                <input type="submit" name="update_click" class="btn-buy" value="Cập nhật">
                <input type="submit" name="order_click" class="btn-buy" value="Mua ngay">
                <!-- <button type="button" value="Buy now">BUY NOW</button> -->
                <!-- Thoát -->
                <i class='bx bx-x' id="close-cart"></i>
            </form>
        </div>
    <!--Hết header -->