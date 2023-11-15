<?php
include "../controller/pdo.php";
include "../controller/danh_muc.php";
include "../controller/users.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['add_dm']) && ($_POST['add_dm'])) {
                $name = $_POST['name'];
                $oneName = Onedm_name($name);
                if ($name == $oneName['name']) {
                    $err = "Danh mục đã tồn tại";
                    header("location:index.php?act=adddm&err=" . $err);
                } else {
                    insertdm($name);
                    $thong_bao = "Thêm thành công";
                    header("location:index.php?act=listdm&thong_bao=" . $thong_bao);
                }
            }
            include "danh_muc/add.php";
            break;

        case 'listdm':
            $list_dm = alldm();
            include "danh_muc/list.php";
            break;

            
        
        case '':

            break;
        case '':

            break;
        case '':

            break;
        case '':

            break;
        case '':

            break;



        default:

            break;
    }
} else {
    include "main.php";
}


include "footer.php";
