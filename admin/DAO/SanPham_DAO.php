<?php

include_once 'DB.php';
include_once __DIR__.'/../DTO/SanPham_DTO.php';

class SanPhamDAO
{

    public function LoadSanPhamByMaLoai($loaisp)
    {
        $db = new Database();
        $truyvan = 'select MaSanPham ,TenSanPham, HinhURL, GiaSanPham from sanpham where MaLoaiSanPham = $loaisp ';

        $ketQua = $db->ExcuteQuery($truyvan);

        return $ketQua;
    }

    //load tất cả các sản phẩm
    public function LoadTatCaSanPham()
    {
        $db = new Database();
        $truyvan = 'select MaSanPham ,TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, 
        SoLuongBan, SoLuotXem, MoTa, MaHangSanXuat from sanpham';

        $ketQua = $db->ExecuteQuery($truyvan);

        return $ketQua;
    }

    //xóa một sản phẩm dựa trên tên của sản phẩm
    public function XoaSanPham($maSanPham)
    {
        $db = new Database();
        $truyvan = "DELETE FROM sanpham WHERE MaSanPham = '$maSanPham'" ;
        $db->ExecuteQuery($truyvan);
    }

    //thêm một sản phẩm mới
    public function ThemSanPham($sp)
    {
        $db = new Database();
        $truyvan = "INSERT INTO `sanpham`(`TenSanPham`, `HinhURL`, `GiaSanPham`, `NgayNhap`, `SoLuongTon`, `SoLuongBan`, `SoLuotXem`, `MoTa`, `BiXoa`, `MaLoaiSanPham`, `MaHangSanXuat`) 
        VALUES ('$sp->TenSanPham', '$sp->HinhURL', '$sp->GiaSanPham', '$sp->NgayNhap', '$sp->SoLuongTon', '$sp->SoLuongBan', '$sp->SoLuotXem', '$sp->MoTa', '$sp->BiXoa', '$sp->MaLoaiSanPham', '$sp->MaHangSanXuat')";
        $db->ExecuteQuery($truyvan);
    }

    //tìm kiếm một sản phẩm dựa trên tên sản phẩm
    public function TimKiem($Search)
    {
        $db = new Database();
        $sql = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,XuatXu,BiXoa,MaLoaiSanPham,MaHangSanXuat from SanPham where TenSanPham like '%$Search%'";
        $result = $db->ExecuteQuery($sql);
        if ($result == null)
            return null;
        $row = mysqli_fetch_array($result);
        $sanPham = new SanPham();
        $sanPham->MaSanPham = $row['MaSanPham'];
        $sanPham->TenSanPham = $row['TenSanPham'];
        $sanPham->AnhURL = $row['HinhURL'];
        $sanPham->GiaSanPham = $row['GiaSanPham'];
        $sanPham->SoLuongBan = $row['SoLuongBan'];
        $sanPham->SoLuotXem = $row['SoLuotXem'];
        $sanPham->MoTa = $row['MoTa'];
        $sanPham->XuatXu = $row['XuatXu'];
        $sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
        $sanPham->MaHangSanXuat = $row['MaHangSanXuat'];
        $sanPham->NgayNhap = $row['NgayNhap'];
        $sanPham->SoLuongTon = $row['SoLuongTon'];
        return $sanPham;
    }

    public function CheckSanPhamTonTai($tenSanPham){
        $db = new Database();
        $truyvan = "SELECT * FROM sanpham WHERE TenSanPham LIKE '$tenSanPham'";
        $result = mysqli_num_rows($db->ExecuteQuery($truyvan));
        if($result > 0){
            return true;
        }
        return false;
    }

    public function ChinhSua($sp){
        $db = new Database();
        $truyvan = "UPDATE sanpham SET sanpham.TenSanPham='$sp->TenSanPham',sanpham.HinhURL='$sp->HinhURL'
        ,sanpham.GiaSanPham='$sp->GiaSanPham',sanpham.NgayNhap='$sp->NgayNhap',sanpham.SoLuongTon='$sp->SoLuongTon'
        ,sanpham.SoLuotXem = '$sp->SoLuotXem', sanPham.SoLuongBan='$sp->SoLuongBan' WHERE sanpham.MaSanPham = '$sp->MaSanPham'";
        $db->ExecuteQuery($truyvan);
    }

    public function SoLuongSanPham_TongBan_TongXem_TongTon(){
        $truyvan = "SELECT COUNT(MaSanPham) AS 'TongSoSanPham',SUM(SoLuongBan) AS 'TongSoLuongBan' , SUM(SoLuotXem) AS 'TongSoLuongXem', SUM(SoLuongTon) AS 'TongSoLuongTon' FROM `sanpham` WHERE 1";
        $db = new Database();
        $result = mysqli_fetch_array($db->ExecuteQuery($truyvan));
        return $result;
    }
    public function DataChartSenDa(){

        $SD = "SELECT SUM(SoLuongBan) AS 'SenDa' FROM sanpham WHERE MaLoaiSanPham = 2";
        $db = new Database();
        return mysqli_fetch_array($db->ExecuteQuery($SD));
    }
    public function DataChartXuongRong(){
        $XR = "SELECT SUM(SoLuongBan) AS 'XuongRong' FROM sanpham WHERE MaLoaiSanPham = 3";
        $db = new Database();
        return mysqli_fetch_array($db->ExecuteQuery($XR));
    }
    public function DataChartTieuCanh(){
        $TC = "SELECT SUM(SoLuongBan) AS 'TieuCanh' FROM sanpham WHERE MaLoaiSanPham = 1";
        $db = new Database();
        return mysqli_fetch_array($db->ExecuteQuery($TC));
    }

    public function getUlrSanPham($MaSanPham)
        {
            $sql = 'SELECT HinhURL FROM sanpham WHERE MaSanPham='.$MaSanPham;
            $db = new Database();
            $ketQua = $db->ExecuteQuery($sql);
            $row = $ketQua->fetch_assoc();
            return $row['HinhURL'];
        }

        public function getTenSanPham($MaSanPham)
        {
            $sql = 'SELECT TenSanPham FROM sanpham WHERE MaSanPham='.$MaSanPham;
            $db = new Database();
            $ketQua = $db->ExecuteQuery($sql);
            $row = $ketQua->fetch_assoc();
            return $row['TenSanPham'];
        }
}
