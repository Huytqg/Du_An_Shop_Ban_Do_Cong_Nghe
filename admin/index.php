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
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                // $one_email = user_email($email);
                // $one_user = user_username($username);
                // if (isset($email) && $email == $one_email['email']) {
                //     $err = "Email đã tồn tại";
                //     header("location:index.php?act=dangky&err=" . $err);
                // } else {
                //     if (isset($username) && $username == $one_user['username']) {
                //         $err = "username đã tồn tại";
                //         header("location:index.php?act=dangky&err=" . $err);
                //     } else{
                        insert_user($email,$username,$password);
                    }
            //     }
            // }
            include "admin/signup_gia_huy.php";
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
