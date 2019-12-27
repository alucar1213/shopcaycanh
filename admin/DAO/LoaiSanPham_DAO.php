<?php

include_once 'DB.php';

class LoaiSanPhamDAO
{
    public function LoadTatCaLoaiSanPham()
    {
        $db = new Database();
        $sql = "SELECT MaLoaiSanPham, TenLoaiSanPham,BiXoa from loaisanpham";
        return $db->ExecuteQuery($sql);
    }
    public function LoadSanPhamByID($MaLoaiSanPham )
    {
        $sql = "SELECT  MaLoaiSanPham,TenLoaiSanPham,BiXoa FROM loaisanpham WHERE MaLoaiSanPham = $MaLoaiSanPham ";
        $rs=$this->ExecuteQuery($sql);
        if($rs==null)
            return null;

        $row = mysqli_fetch_array($rs);

        $sanPham                    = new LoaiSanPham();
        $sanPham->TenLoaiSanPham    = $row['TenLoaiSanPham'];
        $sanPham->BiXoa             = $row['BiXoa'];
        $sanPham->MaLoaiSanPham     =$row['MaLoaiSanPham'];
        return $sanPham;
    }

    public function CheckLoaiSPTonTai($tenLoai){
        $db = new Database();
        $truyvan = "SELECT * FROM loaisanpham WHERE TenLoaiSanPham LIKE '$tenLoai'";
        $result = mysqli_num_rows($db->ExecuteQuery($truyvan));
        if($result > 0){
            return true;
        }
        return false;
    }
    public function ThemLoaiSanPham($loaisanpham)
    {
        $db = new Database();
        $sql = "INSERT INTO loaisanpham(TenLoaiSanPham,BiXoa) values('$loaisanpham->TenLoaiSanPham','$loaisanpham->BiXoa')";
        $result = $db->ExecuteQuery($sql);
    }

    public function ChinhSua($loai)
    {
        $db = new Database();
        $sql="UPDATE loaisanpham SET loaisanpham.TenLoaiSanPham='$loai->TenLoaiSanPham' where loaisanpham.MaLoaiSanPham = '$loai->MaLoaiSanPham'";
        $db->ExecuteQuery($sql);
    }

    public function XoaLoaiSanPham ($MaLoaiSanPham )
    {
        $db = new Database();
        $sql = "DELETE FROM loaisanpham WHERE MaLoaiSanPham = '$MaLoaiSanPham' ";
        $db->ExecuteQuery($sql);
    }
    
    public function TongSoLoaiSanPham()
    {
        $db = new Database();
        $truyvan = "SELECT COUNT(MaLoaiSanPham) AS 'TongSoLoaiSanPham' FROM loaisanpham WHERE 1";
        $result = mysqli_fetch_array($db->ExecuteQuery($truyvan));
        return $result;
    }
}