<?php
    session_start();
    include "../../controller/pdo.php";
    include "../../controller/binhluan.php";
    $dsbl = loadall_binhluan();



// var_dump($dsbl);
// die;
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

        .box_footer{
            height: 80px;
        }
    </style>
</head>
<body>
    <div class="row mb">
        <!-- <div class="box_title">BÌNH LUẬN</div> -->
        <div class="box_content2 binhluan">
            <table>
                <!-- <tr>
                    <th>NỘI DUNG</th>
                    <th>ID USER</th>
                    <th>NGÀY BÌNH LUẬN</th>
                </tr> -->

          
                <?php
                    
                    // foreach ( $dsbl as $bl) {
                    //     extract($bl);
                    //     echo '<tr><td>'.$noidung.'</td>';
                    //     // echo '<td>'.$iduser.'</td>';
                    //     echo '<td>'.$name.'</td>';
                    //     // echo '<td>'.$ngaybinhluan.'</td></tr>';
                    // }
                ?>
            </table>
        </div>
        <div class="box_footer sear_box">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" name="id" value="<?= $id?>"><br>
                Name: <br>
                <input type="text" name="name" style="outline: none ;"><br>
                Nội dung bình luận: <br>
                <input type="text" name="noidung" style="width: 400px;
                height: 80px; outline:none;border-radius: 8px;"><br><br>
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
    <a href="../../signin_gia_huy.php"></a>
</body>
</html>

