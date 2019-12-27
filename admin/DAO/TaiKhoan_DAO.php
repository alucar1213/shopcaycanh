<?php

include_once 'DB.php';

class TaiKhoanDAO extends Database
{

    public function LoadTatCaTaiKhoan()
    {
        $sql = "SELECT MaTaiKhoan ,TenDangNhap, TenHienThi, MatKhau, DiaChi, DienThoai, Email, MaLoaiTaiKhoan FROM taikhoan";
        $result = $this->ExecuteQuery($sql);

        return $result;
    }

    public function getTenTaiKhoanTheoId($MaTaiKhoan)
    {
        $sql = "SELECT TenHienThi FROM taikhoan WHERE MaTaiKhoan = ".$MaTaiKhoan;
        $result = $this->ExecuteQuery($sql);
        $row = $result->fetch_assoc();
        return $row['TenHienThi'];
    }

    public function ThemTaiKhoan($tk){
        $truyvan = "INSERT INTO taikhoan(TenDangNhap, MatKhau, TenHienThi, DiaChi, DienThoai, Email, BiXoa, MaLoaiTaiKhoan)
                    VALUES ('$tk->TenDangNhap', '$tk->MatKhau', '$tk->TenHienThi', '$tk->DiaChi', '$tk->DienThoai', '$tk->Email', '$tk->BiXoa', '$tk->MaLoaiTaiKhoan')";
        //var_dump($tk);
        $this->ExecuteQuery($truyvan);
    }



    public function ChinhSua($tkUpdate){
        $sql = "UPDATE taikhoan SET TenDangNhap = '$tkUpdate->TenDangNhap' ,MatKhau = '$tkUpdate->MatKhau', TenHienThi = '$tkUpdate->TenHienThi', DiaChi = '$tkUpdate->DiaChi', DienThoai = '$tkUpdate->DienThoai', Email = '$tkUpdate->Email', BiXoa= 0, MaLoaiTaiKhoan = '$tkUpdate->MaLoaiTaiKhoan' WHERE MaTaiKhoan = '$tkUpdate->MaTaiKhoan'";
        $this->ExecuteQuery($sql);
    }

    public function CheckTaiKhoanTonTai($tenDangNhap){
        $db = new Database();
        $truyvan = "SELECT * FROM taikhoan WHERE TenDangNhap LIKE '$tenDangNhap'";
        $result = mysqli_num_rows($db->ExecuteQuery($truyvan));
        if($result > 0){
            return true;
        }
        return false;
    }

    public function XoaTaiKhoan($maTaiKhoan){
        $db = new Database();
        $truyvan = "DELETE FROM taikhoan WHERE MaTaiKhoan = '$maTaiKhoan'";
        $db->ExecuteQuery($truyvan);
    }
    public function TongSoTaiKhoan()
    {
        $db = new Database();
        $truyvan = "SELECT COUNT(MaTaiKhoan) AS 'TongSoTaiKhoan' FROM taikhoan WHERE 1";
        $result = mysqli_fetch_array($db->ExecuteQuery($truyvan));
        return $result;
    }
}