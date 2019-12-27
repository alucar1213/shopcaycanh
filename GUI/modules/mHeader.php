
<div class="row">
    <a class="col-3 text-center logo" href="index.php?p=0">
        <img src="GUI/images/logo-header.png" />
    </a>
    <div class="col-6">
        <nav class="menutop">
            <ul>
                <li>
                    <a href="index.php?p=0">Trang chủ</a>
                </li>
                <li>
                    <a href="index.php?p=2">Loại cây</a>
                    <ul>
                    <?php
                        include_once 'BUS/LoaiSanPham_BUS.php';
                        $LoaiSP = new LoaiSanPham_BUS();
                        $ds = $LoaiSP->DSLoaiSanPham();
                        foreach ($ds as $tenLoai) {
                            echo '                        
                                <li>
                                    <a href="index.php?a='.$tenLoai->MaLoaiSanPham.'">'.$tenLoai->TenLoaiSanPham.'</a>
                                </li> ';
                        }
                    ?>
                    </ul>
                </li>
                <li>
                    <a href="index.php?p=2">Xuất xứ</a>
                    <ul>
                    <?php
                        include_once 'BUS/HangSanXuat_BUS.php';
                        $XuatXu = new HangSanXuat_BUS();
                        $ds = $XuatXu->DSXuatXu();
                        foreach ($ds as $Xu) {
                            echo '                        
                                <li>
                                    <a href="index.php?b='.$Xu->MaHangSanXuat.'">'.$Xu->TenHangSanXuat.'</a>
                                </li> ';
                        }
                    ?>
                    </ul>
                </li>
                <li>
                    <a href="">Blog</a>
                </li>
                <li>
                    <a href="#footer" class="scroll-bottom">Liên hệ</a>
                </li>
            </ul>
        </nav>
    </div>
    
    <div class="col-3">
        <div class="icon-header">
            <div id="search" >           
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default pt-0" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-search"></i>
                            </button>                       
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form" type="post">
                                    <div class="from-group">
                                        <h6 for="filter">Tên sản phẩm:</h6>
                                        <div class="price col-12 p-0">
                                            <input class="form-control" type="text" name="TenCay">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h6 for="filter">Loại cây</h6>
                                        <select class="form-control" name="LoaiCay">
                                            <option value="" selected>Tất cả</option>
                                            <!-- load ds loai cay -->
                                            <?php
                                                include_once 'BUS/LoaiSanPham_BUS.php';
                                                $LoaiSP = new LoaiSanPham_BUS();
                                                $ds = $LoaiSP->DSLoaiSanPham();
                                                foreach ($ds as $tenLoai) {
                                                    echo '<option value="'.$tenLoai->MaLoaiSanPham.'">'.$tenLoai->TenLoaiSanPham.'</option> ';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h6 for="filter">Hãng</h6>
                                        <select class="form-control" name = "XuatXu">
                                            <option value="" selected>Tất cả</option>
                                            <!-- load ds xuat xu -->
                                            <?php
                                                include_once 'BUS/HangSanXuat_BUS.php';
                                                $XuatXu = new HangSanXuat_BUS();
                                                $ds = $XuatXu->DSXuatXu();
                                                foreach ($ds as $xuatXu) {
                                                    echo '<option value="'.$xuatXu->MaHangSanXuat.'">'.$xuatXu->TenHangSanXuat.'</option> ';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <div class="price col-6 pl-0">
                                            <h6>Giá từ:</h6>
                                            <input class="form-control" type="number" min=0 name="minPrice">
                                        </div>
                                        <div class="price col-6 pr-0">
                                            <h6>Đến:</h6>
                                            <input class="form-control" type="number" min=0 name="maxPrice">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn" id="btn-search"><i style="color:#FFF"class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
            <span class="linedivide"></span>
            <div id="cart-icon" style="float: right; cursor: pointer;">
                <span class="my-cart-icon" data-toggle="modal" data-target="#my-cart-modals">
                    <i class="fa fa-shopping-cart"></i>
                </span>
            </div>
        </div>
    </div>
</div>
