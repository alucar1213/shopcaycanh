<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */
include_once __DIR__.'/../DAO/LoaiSanPham_DAO.php';
include_once __DIR__.'/../DTO/LoaiSanPham_DTO.php';

class LoaiSanPham_BUS
{
    public function LoadTatCaCacLoaiSanPham(){
        $loadLoai = new LoaiSanPhamDAO();

        $result = $loadLoai->LoadTatCaLoaiSanPham();

        $danhSachLoaiSanPham = array();

        if ($result->num_rows > 0)
        {
            // output data of each row
            while($row = $result->fetch_assoc())
            {
                $loai = new LoaiSanPham();
                $loai->MaLoaiSanPham    = $row['MaLoaiSanPham'];
                $loai->TenLoaiSanPham   = $row['TenLoaiSanPham'];

                $danhSachLoaiSanPham[]  = $loai;
            }
        }
        return $danhSachLoaiSanPham;
    }

    public function ThemLoaiSanPham($loai){
        $loaiDAO = new LoaiSanPhamDAO();
        if($loaiDAO->CheckLoaiSPTonTai($loai->TenLoaiSanPham) == false) {
            $loaiDAO->ThemLoaiSanPham($loai);
        }
    }

    public function ChinhSua($loai){
        $loaiDAO = new LoaiSanPhamDAO();
        $loaiDAO->ChinhSua($loai);
    }

    public function XoaLoaiSanPham($maLoai){
        $loaiDAO = new LoaiSanPhamDAO();
        $loaiDAO->XoaLoaiSanPham($maLoai);
    }
    
    public function TongSoLoaiSanPham(){
        $loaiDAO = new LoaiSanPhamDAO();
        return $loaiDAO->TongSoLoaiSanPham();
    }
}