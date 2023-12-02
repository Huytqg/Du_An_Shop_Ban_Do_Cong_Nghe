<?php
    session_start();
    include "../../controller/pdo.php";
    include "../../controller/binhluan.php";
    // $id = $_REQUEST['id'];
    // $dsbl = loadall_binhluan($id);
if(isset($listbinhluan)){
    extract($listbinhluan);
}

var_dump($listbinhluan);
die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body{
            margin: 0;
        }
        *{
            font-size: 1.5vw;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="row mb">
        <div class="box_title">BÌNH LUẬN</div>
        <div class="box_content2 binhluan">
            <table>
                <tr>
                    <th>NỘI DUNG</th>
                    <th>ID USER</th>
                    <th>NGÀY BÌNH LUẬN</th>
                </tr>

                <td><?=$name?></td>
                <?php
                    
                    // foreach ($listbinhluan as $bl) {
                    //     extract($bl);
                    //     $linkdm = "index.php?act=sanpham&iddm=".$id;
                    //     echo '<tr><td>'.$noidung.'</td>';
                    //     echo '<td>'.$iduser.'</td>';
                    //     echo '<td>'.$ngaybinhluan.'</td></tr>';
                    // }
                ?>
            </table>
        </div>
        <div class="box_footer sear_box">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" name="id" value="<?= $id?>">
                <input type="text" name="noidung" >
                <input type="text" name="name" >
                <input type="submit" name="guibinhluan" value="GỬI BÌNH LUẬN">
            </form>
        </div>
    </div>

    <?php
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            $noidung = $_POST['noidung'];
            $id = $_POST['id'];
            $name=$_POST['name'];
            // $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($id,$name,$noidung,$ngaybinhluan);
            header("location: ".$_SERVER['HTTP_REFERER']);
        }
        
    ?>
</body>
</html>

