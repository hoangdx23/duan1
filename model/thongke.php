<?php
function loadall_thongke_danhmuc(){
    $sql="select danhmuc.id as iddanhmuc , danhmuc.name as namedanhmuc, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice ";
    $sql.="from sanpham left join danhmuc on danhmuc.id=sanpham.iddanhmuc group by danhmuc.id order by danhmuc.id desc";
    $listthongke1=pdo_query($sql);
    return $listthongke1;
}
?>