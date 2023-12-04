<?php
function all_donhang($key, $trang_thai)
{
    $sql = " SELECT * FROM shop_order WHERE 1 ";
    if ($key != "") {
        $sql .= " AND name LIKE '%" . $key . "%'";
    }
    if ($trang_thai > 0) {
        $sql .= " AND trang_thai = $trang_thai";
    }
    $sql .= " order by trang_thai ASC";
    return pdo_query($sql);
}

function joindonhang($id)
{
    $sql = "SELECT shop_order.id as shop_order_id ,shop_order.name,shop_order.address,shop_order.phone,shop_order.date_order,shop_order.trang_thai,shopping_cart_item.*,san_pham.name as product_name,san_pham.id   FROM shop_order 
    INNER JOIN shopping_cart_item ON shop_order.id=shopping_cart_item.order_id 
    INNER JOIN san_pham ON san_pham.id=shopping_cart_item.product_id WHERE shop_order.id=$id";
    return pdo_query($sql);
}

function one_don($id)
{
    $sql = "SELECT * FROM shop_order WHERE id=$id";
    return pdo_query_one($sql);
}

function updatedonhang($id, $trang_thai)
{
    $sql = "UPDATE shop_order SET trang_thai='$trang_thai' WHERE id=$id";
    pdo_execute($sql);
}
