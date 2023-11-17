<?php
session_start();
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
                } elseif ((filter_var($email, FILTER_VALIDATE_EMAIL) === false)) {
                    $err = "Email không đúng định dạng";
                    header("location:signup_gia_huy.php?err=" . $err);
                    echo "Email không đúng định dạng";
                } else if ($username == $one_user['username']) {
                    $err = "username đã tồn tại";
                    header("location:signup_gia_huy.php");
                    echo "Tên đăng nhập đã tồn tại";
                } else {
                    insert_user($email, $username, $password);
                    $thongbao ="Đăng kí tài khoản thành công";
                    header("location:signin_gia_huy.php?err=" . $thongbao);
                    die;
                }
            }
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $check_user = check_user($username, $password);
                // print_r(is_array($check_user)) ;die;
                if ($check_user['role'] == "user") {
                    if (is_array($check_user)) {
                        $_SESSION['username'] = $check_user;
                        header("location:index.php");
                        die;
                    }
                } elseif ($check_user['role'] == "admin") {
                    if (is_array($check_user)) {
                        $_SESSION['username'] = $check_user;
                        header("location:admin/index.php");
                        die;
                    }
                }
            }
            break;
        case 'thoat':
            session_unset();
            header("location:index.php");
            die;
            break;
        case '':

            break;
        case '':

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
