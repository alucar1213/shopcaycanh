<?php
/**
 * Created by PhpStorm.
 * User: phuon
 * 
 */

include_once __DIR__.'/../DAO/SanPham_DAO.php';
include_once __DIR__.'/../DTO/SanPham_DTO.php';
include_once __DIR__.'/../DAO/HangSanXuat_DAO.php';

class SanPham_BUS
{

    public function LoadSanPhamByMaLoai($maLoaiSP)
    {
        $loadSP_MaLoai = new SanPhamDAO();

        $result = $loadSP_MaLoai->LoadSanPhamByMaLoai($maLoaiSP);

        $danhSachSanPham = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $sp = new SanPham();
                $sp->MaSanPham = $row['MaSanPham'];
                $sp->TenSanPham = ($row['TenSanPham']);
                $sp->HinhURL = ($row['HinhURL']);
                $sp->GiaSanPham = ($row['GiaSanPham']);
                $sp->NgayNhap = ($row['NgayNhap']);
                $sp->MaHangSanXuat = ($row['MaHangSanXuat']);
                $danhSachSanPham[] = $sp;
            }
        }
        return $danhSachSanPham;
    }

    public function LoadTatCaSanPham()
    {
        $loadSP = new SanPhamDAO();

        $result = $loadSP->LoadTatCaSanPham();

        $danhSachSanPham = array();

        if ($result->num_rows > 0)
        {
            // output data of each row
            while($row = $result->fetch_assoc())
            {
                $sp = new SanPham();
                $sp->MaSanPham  = $row['MaSanPham'];
                $sp->TenSanPham = $row['TenSanPham'];
                $sp->HinhURL    = $row['HinhURL'];
                $sp->GiaSanPham = $row['GiaSanPham'];
                $sp->NgayNhap   = $row['NgayNhap'];
                $sp->SoLuotXem  = $row['SoLuotXem'];
                $sp->SoLuongTon = $row['SoLuongTon'];
                $sp->SoLuongBan = $row['SoLuongBan'];
                $tmp = new HangSanXuatDAO();
                $sp->MaHangSanXuat = $tmp->LoadMaHangByTen($row['MaHangSanXuat']);
                $sp->MoTa = $row['MoTa'];
                $danhSachSanPham[]  = $sp;
            }
        }
        return $danhSachSanPham;
    }

    public function ThemSanPham($sp){
        $spDAO = new SanPhamDAO();
        if($spDAO->CheckSanPhamTonTai($sp->TenSanPham) == false) {
            $spDAO->ThemSanPham($sp);
        }
    }

    public function ChinhSua($sp){
        $spDAO = new SanPhamDAO();
        $spDAO->ChinhSua($sp);

    }

    public function XoaSanPham($maSanPham){
        $spDAO = new SanPhamDAO();
        $spDAO->XoaSanPham($maSanPham);
    }

    public function SoLuongSanPham_TongBan_TongXem_TongTon(){
        $spDAO = new SanPhamDAO();
        return $spDAO->SoLuongSanPham_TongBan_TongXem_TongTon();
    }

    public function DataChart(){
        $spDAO = new SanPhamDAO();
        return $spDAO->DataChart();
    }

    public function DataChartSenDa(){
        $spDAO = new SanPhamDAO();
        return $spDAO->DataChartSenDa();
    }
    public function DataChartXuongRong(){
        $spDAO = new SanPhamDAO();
        return $spDAO->DataChartXuongRong();
    }
    public function DataChartTieuCanh(){
        $spDAO = new SanPhamDAO();
        return $spDAO->DataChartTieuCanh();
    }
    public function getUlrSanPham($MaSanPham){
        $spDAO = new SanPhamDAO();
        return $spDAO->getUlrSanPham($MaSanPham);
    }

    public function getTenSanPham($MaSanPham){
        $spDAO = new SanPhamDAO();
        return $spDAO->getTenSanPham($MaSanPham);
    }
}