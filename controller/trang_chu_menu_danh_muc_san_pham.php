<?php
include_once("./connect.php");

$sql = 'SELECT san_pham.image, san_pham.name, san_pham.description,
        FROM san_pham';

$result = $conn->query($sql);
$hang = '';
if($result){
    $listsanpham = $result->fetchAll(PDO::FETCH_ASSOC);
    if($listsanpham){
        foreach($listsanpham as $key => $item){
            $hang .='
                <div class="box">
                    <div class="image">
                    <img src="../images/' . $item["image"] . '" alt="" style="width:150px"><a href="#" class="fas fa-heart"></a>
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
                        <span class="price">$578</span>
                    </div>
                /div>
            ';
        }
    }
}



?>

<div class="box">
        <div class="image">
            <img src="img/img2.png" alt="">
            <a href="#" class="fas fa-heart"></a>
        </div>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>delicious food</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, voluptatibus.</p>
            <a href="#" class="btn">adđ to card</a>
            <span class="price">$578</span>
        </div>
    </div>