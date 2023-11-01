<main class="catalog  mb ">  
            <div class="boxleft">
            <div class="mb">
                <div class="box_title">CẬP NHẬT TÀI KHOẢN</div>
                <div class="box_content form_account">
                    <?php 
                        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                            extract($_SESSION['user']);
                        }
                    ?>
                   <form action="index.php?act=edit_taikhoan" method="post">
                    Email: 
                    <input type="email" name="email" value="<?=$email?>">
                    Tên đăng nhập: 
                    <input type="text" name="user" value="<?=$user?>">
                    Mật Khẩu: 
                    <input type="password" name="pass" value="<?=$pass?>">

                    Địa Chỉ: 
                    <input type="text" name="address" value="<?=$address?>">
                    Điện thoại: 
                    <input type="text" name="tel" value="<?=$tel?>">

                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" value="CẬP NHẬT" name="capnhat">
                    <input type="reset" value="NHẬP LẠI">
                   </form>

                   <h3 style="color:red;">
                         <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }  
                         ?>
                   </h3>
                </div>
            </div>

            </div>
            <div class="boxright">
                    <?php
                        include "view/boxright.php";
                    ?>
            </div>         
        </main>
    </div>