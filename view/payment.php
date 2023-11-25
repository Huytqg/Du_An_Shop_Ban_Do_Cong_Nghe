<?php
if (!empty($err)) { ?>

    <div style="min-height: 500px; margin-top: 10px;" id="notify-msg">
        <?= $err ?>. <a href="index.php?act=thanhtoan">Quay lại</a>
    </div>
<?php } else { ?>
    <form action="index.php?act=thanhtoan" method="post">

    <input type="hidden" name="id" value="">

        <section>
            <div class="container">
                <div class="wrapper">
                    <div class="box-left">
                        <div class="box-left-row">
                            <label for="name">Tên người nhận</label>
                            <input type="text" name="name" id="">
                        </div>

                        <div class="box-left-row">
                            <label for="phone">Số điện thoại</label>
                            <input type="text" name="phone" id="" placeholder="Số điện thoại">
                        </div>

                        <div class="box-left-row">
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="address" id="" placeholder="Địa chỉ">
                        </div>

                        <div class="box-left-row">
                            <div class="row-select">
                                <label for="select">Phương thức thanh toán</label>
                                <div class="select">
                                    <input type="radio" id="COD" name="select" value="COD">
                                    Thanh toán khi nhận hàng
                                </div>
                                <div class="select">
                                    <input type="radio" id="ATM" name="select" value="ATM">
                                    Thanh toán chuyển khoản
                                </div>
                            </div>
                        </div>

                        <div class="box-left-row">
                            <label for="desc_order">Ghi chú</label>
                            <textarea name="desc_order" id="" cols="30" rows="10">
                    </textarea>
                        </div>
                    </div>

                    <div class="box-right">
                        <div class="content">
                            <?php
                            $total = 0;
                            if (isset($pro)) { ?>
                                <?php foreach ($pro as $cart) : ?>
                                    <div class="box-products">
                                        <div class="products-img">
                                            <img src="images/<?= $cart['image'] ?>" alt="">
                                        </div>
                                        <div class="product-detail">
                                            <h2 class="product-title"><?= $cart['name'] ?></h2>
                                            <p class="price"><span>Giá:</span> <?= number_format($cart['price'], 0, ",", ".") ?> VND</p>
                                            <p class="quantity">Số lượng: <?= $_SESSION['mycart'][$cart['id']] ?> </p>
                                        </div>
                                    </div>
                                    <?php $total += $cart['price'] * $_SESSION['mycart'][$cart['id']]; ?>
                                <?php

                                endforeach ?>
                            <?php } else {
                                echo "Không có sản phẩm trong giỏ hàng";
                            } ?>
                        </div>
                        <div class="total">
                            <div class="total-title">Total:</div>
                            <div class="total-price price"><?= number_format($total, 0, ",", ".") ?> VND</div>
                        </div>
                        <input type="submit" class="btn-buy" name="thanhtoan" value="Thanh toán">
                        <!-- <button type="button" class="btn-buy">Gửi</button> -->
                    </div>
                </div>
            </div>
        </section>
    </form>
<?php } ?>