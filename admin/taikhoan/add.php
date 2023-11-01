<div class="row2">
  <div class="row2 font_title">
    <h1>THÊM MỚI TÀI KHOẢN</h1>
  </div>
  <div class="row2 form_content ">
    <form action="index.php?act=addtk" method="POST" enctype="multipart/form-data">
      <div class="row2 mb10 form_content_container">
      <div class="row2 mb10">
        <label>Tên đăng nhập </label> <br>
        <input type="text" name="tendangnhap" placeholder="Nhập Tên Đăng Nhập">
      </div>
      <div class="row2 mb10">
        <label>Mật khẩu</label> <br>
        <input type="text" name="matkhau" placeholder="Mật khẩu">
      </div>
      <div class="row2 mb10">
        <label>Email</label> <br>
        <input type="text" name="email" placeholder="Email">
      </div>
      <div class="row2 mb10">
        <label>Địa chỉ</label> <br>
        <input type="text" name="diachi" placeholder="Địa chỉ">
      </div><div class="row2 mb10">
        <label>Điện thoại</label> <br>
        <input type="text" name="dienthoai" placeholder="Điện thoại">
      </div><div class="row2 mb10">
        <label>Vai trò</label> <br>
        <input type="text" name="vaitro" placeholder="Vai trò">
      </div>
      <div class="row mb10 ">
        <input class="mr20" type="submit"name="themoi" value="THÊM MỚI">
        <input  class="mr20" type="reset" value="NHẬP LẠI">
        <a href="index.php?act=dskh"><input  class="mr20" type="button" value="DANH SÁCH"></a>
        <?php
          if(isset($thongbao)&&($thongbao!= "")) echo $thongbao;
        ?>
      </div>
    </form>
 </div>