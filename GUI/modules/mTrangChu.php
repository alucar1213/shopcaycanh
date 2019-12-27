
<div class="section-title">
    <h3>Top Sản Phẩm Bán Chạy</h3>
</div>
<div class="flex-container">
<?php
    include_once __DIR__.'/../../BUS/SanPham_BUS.php';
    include_once __DIR__.'/../../BUS/LoaiSanPham_BUS.php';
    $loadSP = new SanPham_BUS();
    $result = $loadSP->LoadTop10SanPhamBanChay();
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
?>
</div>
<div class="section-title">
    <h3>Top Sản Phẩm Xem Nhiều</h3>
</div>
<div class="flex-container">
<?php
    $loadSP2 = new SanPham_BUS();
    $result2 = $loadSP2->LoadTop10SanPhamXemNhieu();
    $tenLoai2 = new LoaiSanPham_BUS();
    
    foreach ($result2 as $loadSP2) {
        echo'
            <div class="card border-secondary product mt-2 mr-2 ml-2 mb-2">
                <img class="card-img-top" src="admin/GUI/modules/upload/'.$loadSP2->getHinhURL().'" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style="color:#056526; font-style: normal">'.$loadSP2->getTenSanPham().'</h5>
                    <h6 class="card-subtitle mb-2 text-muted" style="font-size:0.9rem">'.$tenLoai2->getTenLoaiSanPham($loadSP2->getMaLoaiSanPham()).'</h6>
                    <div class="price-wrap h5">
                        <span>'.$loadSP2->getGiaSanPham().' VNĐ</span> <del class="float-right" style="color: #999;">300000 VNĐ</del>
                    </div> <!-- price-wrap.// -->               
                    <button type="button" class="btn btn-primary float-right btnDetails" data-toggle="modal"
                            data-target="#details" data-price="'.$loadSP2->getGiaSanPham().'" data-price_discount="190000" data-detail="'.$loadSP2->getMoTa().'"
                            data-name="'.$loadSP2->getTenSanPham().'" data-image="admin/GUI/modules/upload/'.$loadSP2->getHinhURL().'" data-id="'.$loadSP2->getMaSanPham().'">
                            XEM NHANH
                    </button>
                </div>
            </div>
            ';
    }
?>
</div>
