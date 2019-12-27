<?php
include_once __DIR__ . '/../DAO/LoaiSanPham_DAO.php';
include_once __DIR__ . '/../DTO/LoaiSanPham_DTO.php';

class LoaiSanPham_BUS
{
    public $LSP;
    public function __construct()
    {
        $this->LSP = new LoaiSanPham_DAO();
    }
    //lay ten loai sp theo ID
    public function getTenLoaiSanPham($MaLoai)
    {
        return $this->LSP->getTenLoaiSanPham($MaLoai);
    }

    //lay ds loai sp chua bi xoa
    public function DSLoaiSanPham()
    {
        $kq = $this->LSP->DSLoaiSanPham();

        $dsLoaiSp = array();
        if($kq->num_rows >0)
        {
            while ($row = $kq->fetch_assoc()) {
                $lsp = new LoaiSanPham();
                $lsp->MaLoaiSanPham = $row['MaLoaiSanPham'];
                $lsp->TenLoaiSanPham = $row['TenLoaiSanPham'];
                $lsp->BiXoa = $row['BiXoa'];
                $dsLoaiSp[] = $lsp;
            }
        }
        else
        {
            return null;
        }
        return $dsLoaiSp;
    }
}