<?php
session_start();
include "../controller/pdo.php";
include "../controller/danh_muc.php";
include "../controller/san_pham.php";
include "../controller/users.php";
include "header.php";

if (isset($_SESSION['username']) && $_SESSION['username']['role'] == "admin") {
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
                        die;
                    } else {
                        insertdm($name);
                        $thong_bao = "Thêm thành công";
                        header("location:index.php?act=listdm&thong_bao=" . $thong_bao);
                        die;
                    }
                }
                include "danh_muc/add.php";
                break;

            case 'listdm':
                $list_dm = alldm();
                include "danh_muc/list.php";
                break;
            case 'editdm':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $one_dm_id = one_dm_id($id);
                }
                include "danh_muc/update.php";
                break;
            case 'updatedm':
                if (isset($_POST['update_dm']) && ($_POST['update_dm'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $oneName = Onedm_name($name);
                    // echo "" .$oneName['name']; die;
                    if ($name == $oneName['name']) {
                        $err = "Danh mục đã tồn tại";
                        header("location:index.php?act=listdm&err=" . $err);
                        die;
                    } else {
                        updatedm($id, $name);
                        $thong_bao = "Cập nhật thành công";
                        header("location:index.php?act=listdm&thong_bao=" . $thong_bao);
                        die;
                    }
                }
                include "danh_muc/list.php";
                break;

            case 'deletedm':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    deletedm($id);
                    $thong_bao = "Xóa thành công";
                    header("location:index.php?act=listdm&thong_bao=" . $thong_bao);
                }
                include "danh_muc/update.php";
                break;

            case 'addsp':
                if (isset($_POST['add_sp']) && ($_POST['add_sp'])) {
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $price_new = $_POST['price_new'];
                    $quantity = $_POST['quantity'];
                    $category_id = $_POST['category_id'];
                    $description = $_POST['description'];
                    $file = $_FILES['image'];
                    $image = $file['name'];
                    if ($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png') {
                        move_uploaded_file($file['tmp_name'], "../images/" . $image);
                    } else {
                        echo "Ảnh sản phẩm không đúng định dạng";
                        $image = '';
                        $err = "Ảnh sản phẩm không đúng định dạng";
                        header("location:index.php?act=addsp&err=" . $err);
                        die;
                    }

                    $oneNameSP = Onesp_name($name);
                    if ($name == $oneNameSP['name']) {
                        $err = "Sản phẩm đã tồn tại";
                        header("location:index.php?act=addsp&err=" . $err);
                        die;
                    } else {
                        insertsp($name, $price, $price_new, $quantity, $category_id, $image, $description);
                        $thong_bao = "Thêm thành công";
                        header("location:index.php?act=listsp&thong_bao=" . $thong_bao);
                        die;
                    }
                }

                $all_dm = alldm();
                include "san_pham/add.php";
                break;
            case 'listsp':
                $listsp = all_sp();
                include "san_pham/list.php";
                break;
            case 'deletesp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    deletesp($id);
                    $thong_bao = "Xóa thành công";
                    header("location:index.php?act=listsp&thong_bao=" . $thong_bao);
                    die;
                }
                break;
            case '':
                break;
            case '':
                break;
            case '':
                break;
            case 'addkh': //Gia Huy
                break;

            case 'listkh': // Gia Huy
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
} else {
    header("location:../signin_gia_huy.php");
}
