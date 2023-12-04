<?php
    function insert_binhluan($id,$name,$noidung,$ngaybinhluan){
        $sql = "INSERT INTO binhluan(id,name,noidung,postdate) VALUES('$id','$name','$noidung','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function loadall_binhluan(){
        $sql = "SELECT * FROM binhluan ";
         return pdo_query($sql);
    }
?>