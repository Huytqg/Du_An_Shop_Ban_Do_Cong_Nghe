<div class="row mb">
        <div class="box_trai mr demo">
        <div class="row mb">

            <div class="box_title">QUÊN MẬT KHẨU</div>
            <div class="row box_content form_tk">
                <form action="index.php?act=quenmk" method="post">
                    <div class="row mb10">
                        Email: 
                        <input type="email" name="email">
                    </div>

                        <input type="submit" value="GỬI" name="guiemail">
                        <input type="reset" value="NHẬP LẠI">
                </form>
                <h2 class="thongbao">
                    <?php
                        if(isset($_GET['thongbao'])&&($_GET['thongbao']!="")){
                            echo $_GET['thongbao'];
                        }
                    ?>
                </h2>
            </div>
        </div>
            </div>
        </div>