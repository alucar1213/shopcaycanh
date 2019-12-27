<?php
include_once __DIR__.'/../../BUS/SanPham_BUS.php';
include_once __DIR__.'/../../BUS/LoaiSanPham_BUS.php';

$filter  = array(
    'TenCay'  => isset($_GET['TenCay']) ? $_GET['TenCay'] : false,
    'LoaiCay' => isset($_GET['LoaiCay']) ? $_GET['LoaiCay'] : false,
    'XuatXu'  => isset($_GET['XuatXu']) ? $_GET['XuatXu'] : false,
    'minPrice'=> isset($_GET['minPrice']) ? $_GET['minPrice'] : false,
    'maxPrice'=> isset($_GET['maxPrice']) ? $_GET['maxPrice'] : false
);
// Biến lưu trữ lọc
$where = array();
// Nếu có chọn lọc thì thêm điều kiện vào mảng
if ($filter['TenCay']){
    $where[] = "TenSanPham like '%{$filter['TenCay']}%'";
}
if ($filter['LoaiCay']){
    $where[] = "MaLoaiSanPham = '{$filter['LoaiCay']}'";
}
if ($filter['XuatXu']){
    $where[] = "MaHangSanXuat = '{$filter['XuatXu']}'";
}
if ($filter['minPrice']){
    $where[] = "GiaSanPham >= '{$filter['minPrice']}'";
}
if ($filter['maxPrice']){
    $where[] = "GiaSanPham <= '{$filter['maxPrice']}'";
}

$loadSP = new SanPham_BUS();

if ($where)
{
    $result = $loadSP->LoadSanPhamNhieuTieuChi($where);
}
else {
    if(isset($_GET["a"]))
    {
        $a = $_GET["a"];
        $result = $loadSP->LoadSanPhamByMaLoai($a);
    }
    else {
        if(isset($_GET["b"]))
        {
            $b = $_GET["b"];
            $result = $loadSP->LoadSanPhamByMaXuatXu($b);
        }
        else {
            $result = $loadSP->LoadTatCaSanPham(); 
        }
    }
}
$tenLoai = new LoaiSanPham_BUS();

foreach ($result as $loadSP) {
    echo'
        <div class="card border-secondary product mt-2 mr-2 ml-2 mb-2">
            <img class="card-img-top" src="admin/GUI/modules/upload/'.$loadSP->getHinhURL().'" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="color:#056526; font-style: normal">'.$loadSP->getTenSanPham().'</h5>
                <h6 class="card-subtitle mb-2 text-muted" style="font-size:0.9rem">'.$tenLoai->getTenLoaiSanPham($loadSP->getMaLoaiSanPham()).'</h6>
                <div class="price-wrap h5">
                    <span>'.$loadSP->getGiaSanPham().' VNĐ</span> <del class="float-right" style="color: #999;">300000 VNĐ</del>
                </div> <!-- price-wrap.// -->               
                <button type="button" class="btn btn-primary float-right btnDetails" data-toggle="modal"
                        data-target="#details" data-price="'.$loadSP->getGiaSanPham().'" data-price_discount="190000" data-detail="'.$loadSP->getMoTa().'"
                        data-name="'.$loadSP->getTenSanPham().'" data-image="admin/GUI/modules/upload/'.$loadSP->getHinhURL().'" data-id="'.$loadSP->getMaSanPham().'">
                        XEM NHANH
                </button>
            </div>
        </div>
        ';
}
