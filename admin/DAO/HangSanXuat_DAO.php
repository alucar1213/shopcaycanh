<?php


include_once 'DB.php';
include_once __DIR__.'/../DTO/HangSanXuat_DTO.php';

class HangSanXuatDAO
{
    public function LoadTatCaHangSanXuat()
    {
        $db = new Database();
        $truyvan ="SELECT MaHangSanXuat ,TenHangSanXuat,LogoURL from hangsanxuat";
        $result = $db->ExecuteQuery($truyvan);
        return $result;
    }

    //load mã hãng sản xuất bởi tên nhà sản xuất
    public function LoadMaHangByTen($tenNhaSanXuat){
        $db = new Database();
        $truyvan = "SELECT MaHangSanXuat,TenHangSanXuat,LogoURL,BiXoa FROM hangsanxuat WHERE TenHangSanXuat = '$tenNhaSanXuat'";
        $rs = $db->ExecuteQuery($truyvan);
        return $rs;
    }

    public function CheckHangSXTonTai($tenHang){
        $db = new Database();
        $truyvan = "SELECT * FROM hangsanxuat WHERE TenHangSanXuat LIKE '$tenHang'";
        $result = mysqli_num_rows($db->ExecuteQuery($truyvan));
        if($result > 0){
            return true;
        }
        return false;
    }

    public function ThemHangSanXuat($hangSX)
    {
        $db = new Database();
        $truyvan = "INSERT INTO hangsanxuat(TenHangSanXuat,LogoURL,BiXoa) values('$hangSX->TenHangSanXuat','$hangSX->LogoURL','$hangSX->BiXoa')";
        $db->ExecuteQuery($truyvan);
    }

    public function XoaHangSanXuat($MaHangSanXuat)
    {
        $db = new Database();
        $truyvan = "DELETE FROM hangsanxuat WHERE MaHangSanXuat = '$MaHangSanXuat'";
        $db->ExecuteQuery($truyvan);
    }

    public function ChinhSua($hang){

        $db = new Database();
        $truyvan = "UPDATE hangsanxuat SET hangsanxuat.TenHangSanXuat='$hang->TenHangSanXuat',hangsanxuat.LogoURL='$hang->LogoURL' WHERE hangsanxuat.MaHangSanXuat='$hang->MaHangSanXuat'";
        $db->ExecuteQuery($truyvan);
    }

    public function LoadHangByMyID($ID)
    {
        $sql = "SELECT TenHangSanXuat FROM hangsanxuat WHERE MaHangSanXuat='".$ID."'";
        $db = new DB();
        $ketQua = $db->ExcuteQuery($sql);
        $row = $ketQua->fetch_assoc();
        return $row['TenHangSanXuat'];
    }

    public function TongSoHangSanXuat()
    {
        $db = new Database();
        $truyvan = "SELECT COUNT(MaHangSanXuat) AS 'TongSoHangSanXuat' FROM hangsanxuat WHERE 1";
        $result = mysqli_fetch_array($db->ExecuteQuery($truyvan));
        return $result;
    }
}