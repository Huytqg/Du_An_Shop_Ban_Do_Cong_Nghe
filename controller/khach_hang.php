<?php

function allkh(){
    $sql = "SELECT * FROM users WHERE 1 order by id DESC";
    return pdo_query($sql);
}

function deletekh($id){
    $sql = "DELETE FROM users WHERE id=$id";
    pdo_execute($sql);
}


?>