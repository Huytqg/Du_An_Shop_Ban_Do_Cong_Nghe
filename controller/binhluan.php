<?php
    function insert_binhluan($id,$name,$noidung,$ngaybinhluan){
        $sql = "INSERT INTO binhluan(id,name,noidung,postdate) VALUES('$id','$name','$noidung','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function loadall_binhluan($id){
        $sql = "SELECT * FROM binhluan WHERE id = '".$id."' ORDER BY id DESC";
         return pdo_query($sql);
    }
?>