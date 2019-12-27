<?php
include_once __DIR__ . '/../DAO/SanPham_DAO.php';
include_once __DIR__ . '/../DTO/SanPham_DTO.php';

class SanPham_BUS
{
    public $SP;
    public function __construct()
    {
        $this->SP = new SanPham_DAO();
    }
    public function LoadSanPhamByMaLoai($maLoaiSP)
    {

        $result = $this->SP->LoadSanPhamByMaLoai($maLoaiSP);

        $danhSachSanPham = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $sp = new SanPham();
                $sp->setTenSanPham($row['TenSanPham']);
                $sp->setHinhURL($row['HinhURL']);
                $sp->setGiaSanPham($row['GiaSanPham']);
                $sp->setMoTa($row['MoTa']);
                $sp->setMaSanPham($row['MaSanPham']);
                $sp->setMaLoaiSanPham($row['MaLoaiSanPham']);
                $sp->setMaHangSanXuat($row['MaHangSanXuat']);
                $danhSachSanPham[] = $sp;
            }
        }
        return $danhSachSanPham;
    }

    public function LoadSanPhamByMaXuatXu($MaXuatXu)
    {
        $result = $this->SP->LoadSanPhamByMaXuatXu($MaXuatXu);

        $danhSachSanPham = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $sp = new SanPham();
                $sp->setTenSanPham($row['TenSanPham']);
                $sp->setHinhURL($row['HinhURL']);
                $sp->setGiaSanPham($row['GiaSanPham']);
                $sp->setMoTa($row['MoTa']);
                $sp->setMaSanPham($row['MaSanPham']);
                $sp->setMaLoaiSanPham($row['MaLoaiSanPham']);
                $sp->setMaHangSanXuat($row['MaHangSanXuat']);
                $danhSachSanPham[] = $sp;
            }
        }
        return $danhSachSanPham;
    }

    public function LoadTatCaSanPham()
    {
        $result = $this->SP->LoadTatCaSanPham();

        $danhSachSanPham = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $sp = new SanPham();
                $sp->setTenSanPham($row['TenSanPham']);
                $sp->setHinhURL($row['HinhURL']);
                $sp->setGiaSanPham($row['GiaSanPham']);
                $sp->setMoTa($row['MoTa']);
                $sp->setMaSanPham($row['MaSanPham']);
                $sp->setMaLoaiSanPham($row['MaLoaiSanPham']);
                $sp->setMaHangSanXuat($row['MaHangSanXuat']);
                $danhSachSanPham[] = $sp;
            }
        }
        return $danhSachSanPham;
    }

    public function LoadTop10SanPhamBanChay()
    {
        $result = $this->SP->LoadTop10SanPhamBanChay();

        $danhSachSanPham = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $sp = new SanPham();
                $sp->setTenSanPham($row['TenSanPham']);
                $sp->setHinhURL($row['HinhURL']);
                $sp->setGiaSanPham($row['GiaSanPham']);
                $sp->setMoTa($row['MoTa']);
                $sp->setMaSanPham($row['MaSanPham']);
                $sp->setMaLoaiSanPham($row['MaLoaiSanPham']);
                $sp->setMaHangSanXuat($row['MaHangSanXuat']);
                $danhSachSanPham[] = $sp;
            }
        }
        return $danhSachSanPham;
    }

    public function LoadTop10SanPhamXemNhieu()
    {
        $result = $this->SP->LoadTop10SanPhamXemNhieu();

        $danhSachSanPham = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $sp = new SanPham();
                $sp->setTenSanPham($row['TenSanPham']);
                $sp->setHinhURL($row['HinhURL']);
                $sp->setGiaSanPham($row['GiaSanPham']);
                $sp->setMoTa($row['MoTa']);
                $sp->setMaSanPham($row['MaSanPham']);
                $sp->setMaLoaiSanPham($row['MaLoaiSanPham']);
                $sp->setMaHangSanXuat($row['MaHangSanXuat']);
                $danhSachSanPham[] = $sp;
            }
        }
        return $danhSachSanPham;
    }

    public function LoadSanPhamNhieuTieuChi($where)
    {
        $kq = $this->SP->LoadSanPhamNhieuTieuChi($where);

        $danhSachSanPham = array();

        if ($kq->num_rows > 0) {
            // output data of each row
            while ($row = $kq->fetch_assoc()) {
                $sp = new SanPham();
                $sp->setTenSanPham($row['TenSanPham']);
                $sp->setHinhURL($row['HinhURL']);
                $sp->setGiaSanPham($row['GiaSanPham']);
                $sp->setMoTa($row['MoTa']);
                $sp->setMaSanPham($row['MaSanPham']);
                $sp->setMaLoaiSanPham($row['MaLoaiSanPham']);
                $sp->setMaHangSanXuat($row['MaHangSanXuat']);
                $danhSachSanPham[] = $sp;
            }
        }
        return $danhSachSanPham;
    }
    public function getTenLoaiSanPham($MaLoai)
    {
        return $this->SP->getTenLoaiSanPham($MaLoai);
    }

    public function getUlrSanPham($MaSanPham)
    {
        return $this->SP->getUlrSanPham($MaSanPham);
    }

    public function getTenSanPham($MaSanPham)
    {
        return $this->SP->getTenSanPham($MaSanPham);
    }
}
