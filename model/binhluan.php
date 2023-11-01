<?php
    function loadall_binhluan($idpro){
        $sql = "SELECT * FROM binhluan WHERE 1";
        if($idpro>0) $sql.=" AND idpro='".$idpro."'";

        $sql.=" order by id desc";
        $listbinhluan =  pdo_query($sql);
        return $listbinhluan;
    }
    function insert_binhluan($noidung,$idpro,$iduser,$ngaybinhluan){
        $sql = "INSERT INTO binhluan(noidung,idpro,iduser,ngaybinhluan) values('$noidung','$idpro','$iduser','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function delete_binhluan(){
        $sql = "DELETE FROM binhluan where id=".$_GET['id'];
        pdo_execute($sql);
    }
?>