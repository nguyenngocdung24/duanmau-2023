<?php
    if (is_array($sanpham)) {
        extract($sanpham);
    }
    $hinhsp= "../upload/".$img;
    if (is_file($hinhsp)) {
      $hinhsp = "<img src= '" .$hinhsp."'width = '100px' height ='100px'>";
    }else{
      $hinhsp = "Loi";
    }
?>
<div class="row2">
         <div class="row2 font_title">
            <h1>CẬP NHẬT SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">
         <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
          
      <div class="row2 mb10 form_content_container">
      <div class="row2 mb10">
        <label >Danh mục</label> <br>
        <select name="iddm" id="">
            <option value="0" selected> Tất Cả</option>
              <?php
                foreach($listdm as $key =>$value){
                  if ($iddm == $value['id']) {
                    echo '<option value ="'.$value['id'].'"selected>'.$value['name'].'</option>';
                  }else{
                    echo '<option value ="'.$value['id'].'">'.$value['name'].'</option>';
                  }
                } 
              ?>
        </select>
        </div>
      <div class="row2 mb10">
       
        <input type="hidden" name="masp" value="<?=$id?>" >
      </div>
      <div class="row2 mb10">
        <label>Tên sản phẩm </label> <br>
        <input type="text" name="tensp"value="<?=$name?>">
      </div>
      <div class="row2 mb10">
        <label>Giá </label> <br>
        <input type="text" name="giasp"value="<?=$price?>">
      </div>
      <div class="row2 mb10">
        <label>Ảnh</label> <br>
        <input type="file" name="hinh">
         <?php
         echo $hinhsp;
         ?>
      </div>
      <div class="row2 mb10">
        <label>Mô tả</label> <br>
        <textarea name="mota" id="" cols="30" rows="10" value=" <?=$mota?>"></textarea>
      </div>
      <div class="row mb10 ">
        <input type="hidden" name="id"value="<?=$id?>">
        <input class="mr20" type="submit"name="capnhat" value="CẬP NHẬT">
        <input  class="mr20" type="reset" value="NHẬP LẠI">
        <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
        <?php
          if(isset($thongbao)&&($thongbao != "")) echo $thongbao;
        ?>
      </div>
    </form>
         </div>
    </div>