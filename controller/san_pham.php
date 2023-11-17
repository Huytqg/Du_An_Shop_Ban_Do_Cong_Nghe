<?php
function Onesp_name($name)
{
    $sql = "SELECT * FROM san_pham WHERE name='$name'";
    return pdo_query_one($sql);

}

function insertsp($name, $price, $price_new, $quantity, $category_id, $image, $description)
{
    if ($image != "") {
        $sql = "INSERT INTO san_pham(name,price,price_new,quantity,category_id,image,description) VALUES ('$name','$price','$price_new','$quantity','$category_id','$image','$description')";
    } else {
        $sql = "INSERT INTO san_pham(name,price,price_new,quantity,category_id,description) VALUES ('$name','$price','$price_new','$quantity','$category_id','$description')";
    }

    pdo_execute($sql);
}

function all_sp(){
    $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY id DESC";
    return pdo_query($sql);
}

function deletesp($id){
    $sql = "DELETE FROM san_pham WHERE id=$id";
    pdo_execute($sql);
}
