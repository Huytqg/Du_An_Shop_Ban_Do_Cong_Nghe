<?php
function insert_khach_hang($email,$username,$password){
    $sql = "INSERT INTO users(email,username,password) VALUES ('$email','$username','$password')";
    pdo_execute($sql);
}

function list_khach_hang(){
    $sql = "SELECT * FROM users WHERE 1";
    pdo_execute($sql);
}



?>