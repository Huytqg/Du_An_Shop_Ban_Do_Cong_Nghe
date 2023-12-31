<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style_trangchu_giahuy.css">
    <title>Trang Đăng ký</title>
</head>

<body>
    <div class="background_color">

        <!----------------------- Main Container -------------------------->
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <!----------------------- Login Container -------------------------->
            <div class="row border rounded-5 p-3 bg-white shadow box-area">
                <!--------------------------- Left Box ----------------------------->
                <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box Thanh_menu_Ngang">
                    <div class="featured-image mb-3">
                        <img src="images/Logo team 13/logo_1_1.png" class="img-fluid" style="width: 250px;">
                    </div>
                </div>
                <!-------------------- ------ Right Box ---------------------------->
                <div class="col-md-6 right-box">
                    <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <div class="col mb-4 float_right margin_top_10px"><a href="index.php"><button style="background-color: #1976D2; color: white; font-weight: bold; border: none; border-radius: 5px; float:right; margin-top:30px">Home</button></a>
                            </div>
                            <h2>Đăng ký</h2>
                            <!-- <div class="sign_in_successfully" style="width: 250px; background-color: #48da3b; text-align: center; color: white; font-weight: bold; border-radius: 5px;">Đăng nhập thành công</div>
                        <div class="sign_in_successfully" style="width: 250px; background-color: #dd3636; text-align: center; color: white; font-weight: bold; border-radius: 5px;">Đăng nhập không thành công</div>-->
                        </div>
                        <form action="index.php?act=dangky" method="post">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" name="email" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="UserName" name="username" required>
                            </div>
                            <div class="input-group mb-1">
                                <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="password" required>
                            </div>
                            <div class="input-group mb-5 d-flex justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="formCheck">
                                    <label for="formCheck" class="form-check-label text-secondary"><small>Remember
                                            Me</small></label>
                                </div>
                                <div class="forgot">
                                    <small><a href="./quenmk.php" style="text-decoration: none;">Forgot Password?</a></small>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="submit" class="btn btn-lg btn-primary w-100 fs-6 Thanh_menu_Ngang" name="dangky" value="Đăng ký"></input>
                            </div>
                            <div class="row">
                                <small>Don't have account? <a href="signup_gia_huy.html" style="text-decoration: none;">Sign
                                        Up</a></small>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>