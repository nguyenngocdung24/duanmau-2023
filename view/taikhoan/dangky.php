<main class="catalog  mb ">  
            <div class="boxleft">
            <div class="mb">
                <div class="box_title">ĐĂNG KÝ THÀNH VIÊN</div>
                <div class="box_content form_account">
                   <form action="index.php?act=dangky" method="post">
                    Email: 
                    <input type="email" name="email">
                    Tên đăng nhập: 
                    <input type="text" name="user">
                    Mật Khẩu: 
                    <input type="password" name="pass">
                    <input type="submit" value="ĐĂNG KÝ" name="dangky">
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
         <!-- BANNER 2 -->
        
      
          <!-- footer section ends -->
        </footer>
    </div>