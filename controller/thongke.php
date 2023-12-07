<?php

function thongke($now){
    $sql = "SELECT * FROM thong_ke WHERE ngay_dat='$now'";
    return pdo_query($sql);
}

function insertthongke($now,$donhang,$doanhthu,$soluongban){
    $sql = "INSERT INTO thong_ke(ngay_dat,don_hang,doanh_thu,so_luong_ban) VALUES ('$now','$donhang','$doanhthu','$soluongban')";
    pdo_execute($sql);
}
function updatethongke($now, $donhang, $doanhthu, $soluongban){
    $sql = "UPDATE thong_ke SET don_hang='$donhang', doanh_thu='$doanhthu', so_luong_ban='$soluongban' WHERE ngay_dat='$now'";
    pdo_execute($sql);
}

function lietkeOrder()
{
    $sql = "SELECT * FROM shop_order JOIN shopping_cart_item ON shopping_cart_item.order_id=shop_order.id WHERE shopping_cart_item.order_id=shop_order.id AND shop_order.trang_thai=3";
    return pdo_query($sql);
}

function allthongke(){
    $sql = "SELECT ngay_dat,doanh_thu,don_hang,so_luong_ban FROM thong_ke ORDER BY ngay_dat ASC";
    return pdo_query($sql);
}


