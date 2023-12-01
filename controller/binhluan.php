<?php
 function insert_binhluan($iduser,$noidung){
    $sql = "INSERT INTO binhluan(iduser,ngaybinhluan,noidung) VALUES('$iduser','$noidung')";
    pdo_execute($sql);
}
function loadall_binhluan($iduser){
    $sql = "SELECT * FROM binhluan WHERE iduser = '".$iduser."' ORDER BY id DESC";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
?>