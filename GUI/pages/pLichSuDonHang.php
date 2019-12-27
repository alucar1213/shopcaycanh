
    <div class="row">
        <div class="col-12">
            <div class="section-title">
                <h3>Thông tin lịch sử đơn hàng</h3>
            </div>
            <div class="table-responsive">
            <table class="shopping-cart-table table" id="product-table">
                <thead>
                <?php
                    if($user != "")
                        echo '
                        <tr>
                            <th >Mã đơn hàng</th>
                            <th >Tên người mua</th>
                            <th class="text-center">Tổng thành tiền</th>
                            <th class="text-center">Ngày đặt hàng</th>
                            <th class="text-center">Tình trạng</th>
                        </tr>';
                ?>
                    
                </thead>
                <tbody>
                    
                    <?php
                        include_once __DIR__.'/../../BUS/DonHang_BUS.php';                       
                        include_once __DIR__.'/../../BUS/TaiKhoan_BUS.php';
                        include_once __DIR__.'/../../BUS/TinhTrang_BUS.php';
                        
                        if( $user != "" )
                        {
                            $bus = new TaiKhoan_BUS();
                            $tinhtrang = new TinhTrang_BUS();
                            $info = new TaiKhoan();
                            $info = $bus->GetUserInfo($user);
                            $id = $info->id;         

                            $loadDH = new DonHang_BUS();                                               
                            $result = $loadDH->LoadDonHangByMaKhachHang($id);

                            foreach ($result as $DH) 
                            {
                                $TenTinhTrang =  $tinhtrang->LoadTenTinhTrang($DH->getMaTinhTrang());
                                echo '
                                <tr>
                                    <td class="details">
                                        <a href="#" data-toggle="modal" data-target="#Details-modals" onclick="loadModalChiTiet(\''.$DH->getMaDonHang().'\')" >'.$DH->getMaDonHang().'</a>
                                    </td>
                                    <td class="details">
                                        <a href="#">'.$user_name.'</a> 
                                    </td>
                                    <td class="price text-center"><strong>'.$DH->getTongThanhTien().'₫</strong></td>
                                    <td class="qty text-center">'.$DH->getNgayLap().'</td>
                                    <td class="total text-center">'.$TenTinhTrang.'</td>
                                </tr>';
                            }
                        }
                        else
                        {
                            echo '<div class="alert alert-danger" role="alert" id="empty-message">Bạn phải đăng nhập để xem lịch sử đơn hàng</div>';
                        }
                    ?>       
                </tbody>        
            </table>
            </div>          
        </div>
    </div>
    
