<?php

function allkh(){
    $sql = "SELECT * FROM users WHERE 1 order by id DESC";
    return pdo_query($sql);
}

function deletekh($id){
    $sql = "DELETE FROM users WHERE id=$id";
    pdo_execute($sql);
}

function onetk($id){
    $sql = "SELECT * FROM users WHERE id=$id";
    return pdo_query_one($sql);
}

function updatetk($id,$username,$email,$role){
    $sql = "UPDATE users SET username='$username', email='$email',role='$role' WHERE id=$id;";
    pdo_execute($sql);
}
?>