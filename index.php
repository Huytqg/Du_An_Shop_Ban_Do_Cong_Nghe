<?php
include "controller/pdo.php";
include "controller/danh_muc.php";
include "controller/users.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $one_email = user_email($email);
                $one_user = user_username($username);
                if ($email == $one_email['email']) {
                    $err = "Email đã tồn tại";
                    // header("location:sigup_gia_huy.php?err=" . $err);
                    header("location:signup_gia_huy.php?err=" . $err);
                    echo "Email đã tồn tại";
                } else if ($username == $one_user['username']) {
                    $err = "username đã tồn tại";
                    header("location:index.php?act=dangky&err=" . $err);
                    echo "Tên đăng nhập đã tồn tại";
                } else {
                    insert_user($email, $username, $password);
                    // if (isset($email,$username) && $email == $one_email['email'] || $username == $one_user['username']) {
                    //     echo "Tài khoản hoặc email đã tồn tại";
                    // } else {
                    //     insert_user($email,$username,$password);
                    //     // header("location:index.php?act=main.php");
                    // }
                }
            }
            break;
            die;

        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['password'];
                    header("location: quenmk.php?thongbao=".$thongbao);
                    die;
                } else {
                    $thongbao = "EMAIL không tồn tại!";
                    header("location: quenmk.php?thongbao=".$thongbao);
                    die;    
                }
            }
            include "./quenmk.php";
            break;
    }
}
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {


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
