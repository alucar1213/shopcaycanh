<?php
    include_once 'DB.php';
    class SanPham_DAO{
        public function LoadSanPhamByMaLoai($loaisp){
            $truyvan = 'select TenSanPham, HinhURL, GiaSanPham, MoTa, MaSanPham, MaLoaiSanPham, MaHangSanXuat from sanpham where MaLoaiSanPham ='.$loaisp;

            $db = new DB();
            $ketQua = $db->ExcuteQuery($truyvan);

            return $ketQua;
        }

        public function LoadSanPhamByMaXuatXu($MaXuatXu)
        {
            $truyvan = 'select TenSanPham, HinhURL, GiaSanPham, MoTa, MaSanPham, MaLoaiSanPham, MaHangSanXuat from sanpham where 	MaHangSanXuat ='.$MaXuatXu;

            $db = new DB();
            $ketQua = $db->ExcuteQuery($truyvan);

            return $ketQua;
        }

        public function LoadTatCaSanPham(){
            $truyvan = 'select TenSanPham, HinhURL, GiaSanPham, MoTa, MaSanPham, MaLoaiSanPham, MaHangSanXuat from sanpham';

            $db = new DB();
            $ketQua = $db->ExcuteQuery($truyvan);

            return $ketQua;
        }

        public function LoadSanPhamNhieuTieuChi($where)
        {
            $sql = 'select TenSanPham, HinhURL, GiaSanPham, MoTa, MaSanPham, MaLoaiSanPham, MaHangSanXuat from sanpham where '.implode('and ', $where);

            $db = new DB();
            $ketQua = $db->ExcuteQuery($sql);
            return $ketQua;
        }

        public function LoadTop10SanPhamBanChay()
        {
            $sql = 'select TenSanPham, HinhURL, GiaSanPham, MoTa, MaSanPham, MaLoaiSanPham, MaHangSanXuat FROM sanpham ORDER BY SoLuotXem DESC LIMIT 10';

            $db = new DB();
            $ketQua = $db->ExcuteQuery($sql);
            return $ketQua;
        }

        public function LoadTop10SanPhamXemNhieu()
        {
            $sql = 'select TenSanPham, HinhURL, GiaSanPham, MoTa, MaSanPham, MaLoaiSanPham, MaHangSanXuat FROM sanpham ORDER BY SoLuongBan DESC LIMIT 10';

            $db = new DB();
            $ketQua = $db->ExcuteQuery($sql);
            return $ketQua;
        }

        public function getTenLoaiSanPham($MaLoai)
        {
            $sql = 'SELECT TenLoaiSanPham FROM loaisanpham WHERE MaLoaiSanPham='.$MaLoai;
            $db = new DB();
            $ketQua = $db->ExcuteQuery($sql);
            $row = $ketQua->fetch_assoc();
            return $row['TenLoaiSanPham'];
        }

        public function getUlrSanPham($MaSanPham)
        {
            $sql = 'SELECT HinhURL FROM sanpham WHERE MaSanPham='.$MaSanPham;
            $db = new DB();
            $ketQua = $db->ExcuteQuery($sql);
            $row = $ketQua->fetch_assoc();
            return $row['HinhURL'];
        }

        public function getTenSanPham($MaSanPham)
        {
            $sql = 'SELECT TenSanPham FROM sanpham WHERE MaSanPham='.$MaSanPham;
            $db = new DB();
            $ketQua = $db->ExcuteQuery($sql);
            $row = $ketQua->fetch_assoc();
            return $row['TenSanPham'];
        }
    }
?>