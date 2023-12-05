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



