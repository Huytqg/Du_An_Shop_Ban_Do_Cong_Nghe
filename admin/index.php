<?php
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['adddm']) && ($_POST['adddm'])) {
                $name = $_POST['name'];

                
            }
            include "danh_muc/add.php";
            break;

        default:

            break;
    }
}else{
    include "main.php";
}


include "footer.php";
