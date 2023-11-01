<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH TÀI KHOẢN </h1>
         </div>
         <br>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
            <br>
           <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>NỘI DUNG BÌNH LUẬN</th>
                <th>USER</th>
                <th>IDPRO</th>
                <th>NGÀY BÌNH LUẬN</th>
                
                <th></th>
            </tr>
            <?php
                foreach($listbinhluan as $binhluan){
                    extract($binhluan);
                    $xoabl = "index.php?act=xoabl&id=".$id;

                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$iduser.'</td>
                        <td>'.$idpro.'</td>
                        <td>'.$ngaybinhluan.'</td>
                        <td><a href="'.$xoabl.'"><input type="button" value="Xóa"></td></a>
                    </tr>';
                }
            ?>
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
        <a href="index.php?act=add"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>



       
    </div>