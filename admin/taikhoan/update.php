
<?php
    if (is_array($taikhoan)) {
        extract($taikhoan);
    }
?>
<div class="row2">
         <div class="row2 font_title">
            <h1>CẬP NHẬT TÀI KHOẢN</h1>
         </div>
         <div class="row2 form_content ">
         <form action="index.php?act=updatetk" method="POST" >        
      <div class="row2 mb10 form_content_container">
      <div class="row2 mb10">
        <input type="hidden" name="matk" value="<?=$id?>" >
      </div>
      <div class="row2 mb10">
        <label>Tên đăng nhập </label> <br>
        <input type="text" name="tendangnhap"value="<?=$user?>">
      </div>
      <div class="row2 mb10">
        <label>Mật khẩu</label> <br>
        <input type="text" name="matkhau"value="<?=$pass?>">
      </div>
      <div class="row2 mb10">
        <label>Email</label> <br>
        <input type="text" name="email"value="<?=$email?>">
      </div>
      <div class="row2 mb10">
        <label>Địa chỉ</label> <br>
        <input type="text" name="diachi"value="<?=$address?>">
      </div>
      <div class="row2 mb10">
        <label>Điện thoại</label> <br>
        <input type="text" name="dienthoai"value="<?=$tel?>">
      </div>
      <div class="row2 mb10">
        <label>Vai trò</label> <br>
        <input type="text" name="vaitro"value="<?=$role?>">
      </div>
      <div class="row mb10 ">
        <input type="hidden" name="id"value="<?=$id?>">
        <input class="mr20" type="submit"name="capnhat" value="CẬP NHẬT">
        <input  class="mr20" type="reset" value="NHẬP LẠI">
        <a href="index.php?act=dskh"><input  class="mr20" type="button" value="DANH SÁCH"></a>
        <?php
          if(isset($thongbao)&&($thongbao != "")) echo $thongbao;
        ?>
      </div>
    </form>
         </div>
    </div>