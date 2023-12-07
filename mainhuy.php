<?php
include_once("./connect.php");

$sql = 'SELECT image, name, description, price
        FROM san_pham';

$result = $conn->query($sql);
$hang_menu = '';
if($result){
    $listsanpham = $result->fetchAll(PDO::FETCH_ASSOC);
    if($listsanpham){
        foreach($listsanpham as $key => $item){
            $hang_menu .='
                <div class="box">
                    <div class="image">
                    <img src="./images/' . $item["image"] . '" alt="" style="width:150px"><a href="#" class="fas fa-heart"></a>
                    </div>
                    <div class="content">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        <h3>'.$item['name'].'</h3>
                        <p>'.$item['description'].'</p>
                        <a href="#" class="btn">adđ to card</a>
                        <span class="price">'.$item['price'].'VNĐ</span>
                    </div>
                </div>
            ';
        }
    }
}
?>
<!-- main -->
<section class="home" id="home">

    <div class="swiper mySwiper home-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide slide">
                <div class="content">
                    <span>Chiếc điện thoại đặt biệt</span>
                    <h3>Xiaomi Redmi Note 10</h3>
                    <p>Thiết kế đẹp mắt, sang trọng đến từng chi tiết, Màn hình siêu lớn</p>
                    <a href="#" class="btn">Mua ngay</a>
                </div>
                <div class="image">
                    <img src="img/img1.png" alt="" style="width: 480px; margin-left: 20px">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span>Chiếc điện thoại đặt biệt</span>
                    <h3>Iphone 13 Pro Max</h3>
                    <p>Thiết kế đẹp mắt, sang trọng đến từng chi tiết, Màn hình siêu lớn</p>
                    <a href="#" class="btn">Mua ngay</a>
                </div>
                <div class="image">
                    <img src="img/img2.png" alt="" style="width: 320px; margin-left: 20px">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span>Chiếc điện thoại đặt biệt</span>
                    <h3>Asus Gaming Phone 4</h3>
                    <p>Thiết kế đẹp mắt, sang trọng đến từng chi tiết, Màn hình siêu lớn</p>
                    <a href="#" class="btn">Mua ngay</a>
                </div>
                <div class="image">
                    <img src="img/img3.png" alt="" style="width: 230px; margin-left: 20px">
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="phone" id="phone">
    <h3 class="sub-heading">Top những mẫu điện thoại</h3>
    <h1 class="heading">Được yêu thích nhất </h1>
    <div class="box-container">
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="img/img2.png" alt="">
            <h3>Iphone 13 Pro Max</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$14.99</span>
            <a href="#" class="btn">Thêm vào giỏ hàng</a>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="img/img3.png" alt="">
            <h3>Asus rog phone 4</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$14.99</span>
            <a href="#" class="btn">Thêm vào giỏ hàng</a>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="img/img4.png" alt="">
            <h3>Oppo IQCO 7</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$14.99</span>
            <a href="#" class="btn">Thêm vào giỏ hàng</a>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="img/img5.png" alt="" style="width: 100px;">
            <h3>Google Pixel 4</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$14.99</span>
            <a href="#" class="btn">Thêm vào giỏ hàng</a>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="img/img6.png" alt="" style="width: 100px;">
            <h3>Samsung Note 10</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$14.99</span>
            <a href="#" class="btn">Thêm vào giỏ hàng</a>
        </div>
    </div>
</section>

<section class="about" id="about">
    <h3 class="sub-heading">Về chúng tôi</h3>
    <h1 class="heading">Tại sao bạn nên chọn chúng tôi để mua sắm?</h1>
    <div class="row">
        <div class="image">
            <img src="img/banner1.jpg" alt="">
        </div>
        <div class="content">
            <h3>best phone in the country</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam saepe qui ipsa molestiae repellendus necessitatibus, tenetur quas dolor esse voluptatem nihil, pariatur totam molestias cumque vero, commodi optio reiciendis nam?</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa eligendi alias in eaque rerum placeat, ea velit autem molestias magni.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>free delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payment</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>
</section>

<section class="menu" id="menu">
<h3 class="sub-heading">our menu</h3>
<h1 class="heading">today's speciality</h1>
<div class="box-container">
    <?=$hang_menu;?>
</div>
</section>

<section class="review" id="review">
    <h3 class="sub-heading">Đánh giá của khách hàng</h3>
    <h1 class="heading">Mọi người nói rằng</h1>
    <div class="swiper-container review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/banner3.jpg" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, ea a quisquam alias repudiandae ipsa nesciunt delectus modi eaque aspernatur recusandae sint qui distinctio voluptatum quae, corporis cupiditate magni dolores.</p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/banner3.jpg" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, ea a quisquam alias repudiandae ipsa nesciunt delectus modi eaque aspernatur recusandae sint qui distinctio voluptatum quae, corporis cupiditate magni dolores.</p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/banner3.jpg" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, ea a quisquam alias repudiandae ipsa nesciunt delectus modi eaque aspernatur recusandae sint qui distinctio voluptatum quae, corporis cupiditate magni dolores.</p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/banner3.jpg" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, ea a quisquam alias repudiandae ipsa nesciunt delectus modi eaque aspernatur recusandae sint qui distinctio voluptatum quae, corporis cupiditate magni dolores.</p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/banner3.jpg" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, ea a quisquam alias repudiandae ipsa nesciunt delectus modi eaque aspernatur recusandae sint qui distinctio voluptatum quae, corporis cupiditate magni dolores.</p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/banner3.jpg" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, ea a quisquam alias repudiandae ipsa nesciunt delectus modi eaque aspernatur recusandae sint qui distinctio voluptatum quae, corporis cupiditate magni dolores.</p>
            </div>
        </div>
    </div>
</section>


<section class="order" id="order">
    <h3 class="sub-heading">Đặt hàng ngay</h3>
    <h1 class="heading">Nhanh chóng và miễn phí</h1>
    <form action="">
        <div class="inputBox">
            <div class="input">
                <span>your name</span>
                <input type="text" name="" id="" placeholder="enter your name">
            </div>
            <div class="input">
                <span>your number</span>
                <input type="text" name="" id="" placeholder="enter your number">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your order</span>
                <input type="text" name="" id="" placeholder="enter phone name">
            </div>
            <div class="input">
                <span>additional phone</span>
                <input type="test" name="" id="" placeholder="extra with phone">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>how much</span>
                <input type="number" name="" id="" placeholder="how many orders">
            </div>
            <div class="input">
                <span>date and time</span>
                <input type="datetime-local" name="" id="">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your address</span>
                <textarea name="" id="" cols="30" rows="10" placeholder="enter your address"></textarea>
            </div>
            <div class="input">
                <span>your messenge</span>
                <textarea name="" id="" cols="30" rows="10" placeholder="enter your messenge"></textarea>
            </div>
        </div>
        <input type="submit" value="order now" class="btn">
    </form>
</section>


<!--Hết main -->