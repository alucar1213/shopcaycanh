<?php
    class SanPham{
        private $TenSanPham;
        private $HinhURL;
        private $GiaSanPham;
        private $MaLoaiSanPham;
        private $MaSanPham;
        private $MoTa;
        private $BiXoa;
        private $SoLuotXem;
        private $SoLuongTon;
        private $soLuongBan;
        private $NgayNhap;
        private $MaHangSanXuat;

        /**
         * @return mixed
         */
        public function getSoLuongTon()
        {
            return $this->SoLuongTon;
        }

        /**
         * @return mixed
         */
        public function getMaLoaiSanPham()
        {
            return $this->MaLoaiSanPham;
        }

        /**
         * @return mixed
         */
        public function getMaHangSanXuat()
        {
            return $this->MaHangSanXuat;
        }

        /**
         * @return mixed
         */
        public function getMoTa()
        {
            return $this->MoTa;
        }

        /**
         * @return mixed
         */
        public function getNgayNhap()
        {
            return $this->NgayNhap;
        }

        /**
         * @return mixed
         */
        public function getGiaSanPham()
        {
            return $this->GiaSanPham;
        }

        /**
         * @return mixed
         */
        public function getHinhURL()
        {
            return $this->HinhURL;
        }

        /**
         * @return mixed
         */
        public function getTenSanPham()
        {
            return $this->TenSanPham;
        }

        /**
         * @return mixed
         */
        public function getBiXoa()
        {
            return $this->BiXoa;
        }

        /**
         * @return mixed
         */
        public function getMaSanPham()
        {
            return $this->MaSanPham;
        }

        /**
         * @return mixed
         */
        public function getSoLuongBan()
        {
            return $this->soLuongBan;
        }

        /**
         * @return mixed
         */
        public function getSoLuotXem()
        {
            return $this->SoLuotXem;
        }

        /**
         * @param mixed $TenSanPham
         */
        public function setTenSanPham($TenSanPham): void
        {
            $this->TenSanPham = $TenSanPham;
        }

        /**
         * @param mixed $SoLuongTon
         */
        public function setSoLuongTon($SoLuongTon): void
        {
            $this->SoLuongTon = $SoLuongTon;
        }

        /**
         * @param mixed $NgayNhap
         */
        public function setNgayNhap($NgayNhap): void
        {
            $this->NgayNhap = $NgayNhap;
        }

        /**
         * @param mixed $MoTa
         */
        public function setMoTa($MoTa): void
        {
            $this->MoTa = $MoTa;
        }

        /**
         * @param mixed $MaLoaiSanPham
         */
        public function setMaLoaiSanPham($MaLoaiSanPham): void
        {
            $this->MaLoaiSanPham = $MaLoaiSanPham;
        }

        /**
         * @param mixed $MaHangSanXuat
         */
        public function setMaHangSanXuat($MaHangSanXuat): void
        {
            $this->MaHangSanXuat = $MaHangSanXuat;
        }

        /**
         * @param mixed $HinhURL
         */
        public function setHinhURL($HinhURL): void
        {
            $this->HinhURL = $HinhURL;
        }

        /**
         * @param mixed $GiaSanPham
         */
        public function setGiaSanPham($GiaSanPham): void
        {
            $this->GiaSanPham = $GiaSanPham;
        }

        /**
         * @param mixed $BiXoa
         */
        public function setBiXoa($BiXoa): void
        {
            $this->BiXoa = $BiXoa;
        }

        /**
         * @param mixed $MaSanPham
         */
        public function setMaSanPham($MaSanPham): void
        {
            $this->MaSanPham = $MaSanPham;
        }

        /**
         * @param mixed $soLuongBan
         */
        public function setSoLuongBan($soLuongBan): void
        {
            $this->soLuongBan = $soLuongBan;
        }

        /**
         * @param mixed $SoLuotXem
         */
        public function setSoLuotXem($SoLuotXem): void
        {
            $this->SoLuotXem = $SoLuotXem;
        }

        public function __construct()
        {
        }
    }
?>