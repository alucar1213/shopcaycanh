<h1>Quản lý đơn hàng</h1>
<table class="table table-hover table-bordered">
    <thead>
        <th scope="col">Tên người mua</th>
        <th scope="col">Tổng thành tiền</th>
        <th scope="col">Ngày đặt hàng</th>
        <th scope="col">Trạng thái</th>
    </thead>
    <tbody>
        <tr>
            <?php
            
                include_once __DIR__.'/../../BUS/DonHang_BUS.php';
                include_once __DIR__.'/../../BUS/TaiKhoan_BUS.php';
                $loadDH = new DonHang_BUS();
                $loadTenTK = new TaiKhoanBUS();
                $result =  $loadDH->LoadTatCaCacDonHang();
                foreach($result as $DH)
                {
                    $select1 = "";
                    $select2 = "";
                    $select3 = "";
                    switch($DH->MaTinhTrang)
                    {
                        case 1:
                            $select1 = "selected";
                            break;
                        case 2:
                            $select2 = "selected";
                            break;
                        case 3:
                            $select3 = "selected";
                            break;
                    }
                    echo '
                        <tr>
                            <td>
                                <a class="btn" href="#" data-toggle="modal" data-target="#Details-modals" onclick="loadModalChiTiet(\''. $DH->MaDonHang .'\')" >'. $loadTenTK->getTenTaiKhoanTheoID($DH->MaTaiKhoan) .'</a>
                                
                            </td>
                            <td>
                                '. $DH->TongThanhTien .'
                            </td>
                            <td>
                                '. $DH->NgayLap .'
                            </td>
                            <td scope="row">
                                <form method="post" name="main-form" id="main-form" enctype="multipart/form-data" accept-charset="utf-8">
                                    <input type="hidden" name="MDHEdit" id="maTaiKhoanDel" value="'.$DH->MaDonHang.'">
                                    <select class="custom-select" name="tinhTrangDonHangEdit">
                                        <option value="1" '. $select1 .' >Đang giao</option>
                                        <option value="2" '. $select2 .' >Đã giao</option>
                                        <option value="3" '. $select3 .' >Hủy</option>                                    
                                    </select>
                                    <button id="CapNhat" type="submit" class="btn btn-success">Cập nhật</button>
                                </form>
                            </td>
                        </tr>
                        ';    
                }
            ?>
        </tr>
    </tbody>
</table>
