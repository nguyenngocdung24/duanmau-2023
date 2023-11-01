<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=listsp" method="POST">
          
           
                <input type="text" name="kyw" id="">
                <label >Danh mục</label> <br>
                <select name="iddm" id="">
                    <option value="0" selected> Tất Cả</option>
                    <?php
                    foreach($listdm as $danhmuc){
                        extract($danhmuc); 
                        echo '<option value="' .$id.'">'.$name.'</option>';
                    } 
                    ?>
                </select>
                <input type="submit" name="listok"value="GO">
            </form>
            <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>MÃ SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>HÌNH</th>
                <th>GIÁ </th>
                <th>LƯỢT XEM</th>
                <th></th>
            </tr>
            <?php
                foreach($listsp as $sanpham){   
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&idsp=".$id;
                    $xoasp = "index.php?act=xoasp&id=".$id;
                    $hinhsp= "../upload/".$img;
                    if (is_file($hinhsp)) {
                        $hinhsp = "<img src= '" .$hinhsp."'width = '100px' height ='100px'>";
                    }else{
                        $hinhsp = "No file image!"; 
                    }

                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$hinhsp.'</td>
                    <td>'.$price.'</td>
                    <td>'.$luotxem.'</td>
                    <td> <a href="'.$suasp.'"><input type="button" value="Sửa"> </a> 
                    <a href="'.$xoasp.'"> <input type="button" value="Xóa"onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a></td> 
                </tr>';
                }
            ?>
            

           
            
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            <a href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>



       
    </div>