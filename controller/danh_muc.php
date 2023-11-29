<?php
function insertdm($name)
{
    $sql = "INSERT INTO danh_muc(name) VALUES ('$name')";
    pdo_execute($sql);
}

function Onedm_name($name)
{
    $sql = "SELECT * FROM danh_muc WHERE name='$name'";
    return pdo_query_one($sql);

}

function alldm(){
    $sql = "SELECT * FROM danh_muc WHERE 1 order by id DESC";
    return pdo_query($sql);
}

function one_dm_id($id){
    $sql = "SELECT * FROM danh_muc WHERE id='$id'";
    return pdo_query_one($sql);
}

function updatedm($id,$name){
    $sql = "UPDATE danh_muc SET name='$name' WHERE id=$id ";
    pdo_execute($sql);
}

function deletedm($id){
    $sql = "DELETE  FROM danh_muc WHERE id=$id ";
    pdo_execute($sql);
}

function oneDM($id){
    $sql = "SELECT danh_muc.name as dmname,danh_muc.id FROM danh_muc JOIN san_pham ON danh_muc.id=san_pham.category_id WHERE san_pham.id=$id";
    return pdo_query_one($sql);
}

