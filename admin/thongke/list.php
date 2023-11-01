<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
     
    </style>
</head>
<body>
        <div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ NHỎ NHẤT</th>
                <th>GIÁ LỚN NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
                <th></th>
            </tr>
            <?php
                foreach ($dsthongke as $thongke) {
                   extract($thongke);
            ?>
               <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $soluong ?></td>
                    <td><?php echo $gia_min ?></td>
                    <td><?php echo $gia_max ?></td>
                    <td><?php echo number_format($gia_avg, 2); ?></td>
               </tr>

            <?php
                    }
            ?>
           </table>
           </div>
           <div class="row mb10 ">
            <a href="index.php?act=bieudo"> <input  class="mr20" type="button" value="Xem biểu đồ"></a>
           </div>
          </form>
         </div>
        </div>

</body>
</html>