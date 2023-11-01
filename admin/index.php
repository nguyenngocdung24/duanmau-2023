<?php
   include "../model/pdo.php";
   include "../model/danhmuc.php";
   include "../model/sanpham.php";
   include "../model/taikhoan.php";
   include "../model/binhluan.php";
   include "../model/thongke.php";
    include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){

            //controler danhmuc
            case "listdm":
                $listdm=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case "adddm":
                if(isset($_POST['themoi'])&&($_POST['themoi'])){
                    $tenloai = $_POST['tenloai'];
                    insect_danhmuc($tenloai);
                    $thongbao = "Them thanh cong";
                }
                include "danhmuc/add.php";
                break; 
            case "xoadm":
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_danhmuc($_GET['id']);
                }  
                $sql = "select * from danhmuc order by id desc";
                $listdm  = pdo_query($sql);
                include "danhmuc/list.php";
                break;
            case "suadm":
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                $sql = "select * from danhmuc where id =".$_GET['id'];
                $dm = pdo_query_one($sql);
                }
                include "danhmuc/update.php"; 
                break; 
            case "updatedm":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    $sql="update danhmuc set name = '".$tenloai."' where id=".$id;
                    pdo_execute($sql);
                    $thongbao = "cập nhật thành công";
                }
                $listdm  = loadall_danhmuc();
                include "danhmuc/list.php";
                break; 
            


            //controller sản phẩm
            
            case "listsp":
                if (isset($_POST['listok'])&& ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw ="";
                    $iddm = 0;
                }
                    $listdm =loadall_danhmuc();
                    $listsp=loadall_sanpham($kyw,$iddm);
                    include "sanpham/list.php";
                break;

            case "addsp":
                if(isset($_POST['themoi'])&&($_POST['themoi'])){
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $filename = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }
                    insect_sanpham($tensp,$giasp,$filename,$mota,$iddm);
                    $thongbao = "Them thanh cong";
                }
                $listdm =  loadall_danhmuc();
                include "sanpham/add.php";
                break; 
            
            case "xoasp":
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_sanpham($_GET['id']);
                }  
                $listsp=loadall_sanpham("",0);
               
                include "sanpham/list.php";
                break;
            case "suasp":
                if (isset($_GET['idsp'])&&($_GET['idsp']>0)) {
                    $sanpham = loadone_sanpham($_GET['idsp']);
                }
                $listdm =  loadall_danhmuc();
                include "sanpham/update.php"; 
                break; 
                
            case "updatesp":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id = $_POST['id']; 
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }
                      update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);

                    $thongbao = "cập nhật thành công";
                }
                $listdm =  loadall_danhmuc();
                $listsp=loadall_sanpham("",0);             
                include "sanpham/list.php";
                break; 
            
                //controller tai khoan
           case "dskh":
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case "xoatk":
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_taikhoan($_GET['id']);
                }  
                $listtaikhoan=loadall_taikhoan("",0);
                include "taikhoan/list.php";
                break; 
            case "suatk":
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $taikhoan = loadone_taikhoan($_GET['id']);
                }
                include "taikhoan/update.php"; 
                break;        
            case "updatetk":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id = $_POST['id']; 
                    $user = $_POST['tendangnhap'];
                    $pass = $_POST['matkhau'];
                    $email = $_POST['email'];
                    $address = $_POST['diachi'];
                    $tel = $_POST['dienthoai'];
                    $role = $_POST['vaitro'];
                    update_taikhoan($id,$user,$pass,$email,$address,$tel,$role);
                    $thongbao = "cập nhật thành công";
                }
                $listtaikhoan=loadall_taikhoan("",0);             
                include "taikhoan/list.php";
                break; 
            case "addtk":
                if(isset($_POST['themoi'])&&($_POST['themoi'])){
                    $user = $_POST['tendangnhap'];
                    $pass = $_POST['matkhau'];
                    $email = $_POST['email'];
                    $address = $_POST['diachi'];
                    $tel = $_POST['dienthoai'];
                    $role = $_POST['vaitro'];
                    insect_taikhoan($user,$pass,$email,$address,$tel,$role);
                    $thongbao = "Them thanh cong";
                }
                include "taikhoan/add.php";
                break; 
            case 'dsbl':
                $listbinhluan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;
            case 'xoabl':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;
            case 'thongke':           
                $dsthongke = load_thongke_sanpham_danhmuc();
                include 'thongke/list.php';             
                break;
            case 'bieudo':           
                $dsthongke = load_thongke_sanpham_danhmuc();
                include 'thongke/bieudo.php';             
                break;

            default:
                include "home.php";
                break;
            
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>
