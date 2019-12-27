
    <?php
        include './GUI/modules/mProgress-bar.php';
    ?>
    <div class="row">
            <div class="col-12 col-lg-6">
                    <div class="section-title">
                            <h3>Thông tin người mua</h3>
                        </div>
                <div class="info p-0">                   
                    
                    <div class="details">
                        <strong class="title">Tên:</strong>
                        <span>Đinh Công Hải</span>
                    </div>
                    <div class="details">
                        <strong class="title">Email: </strong>
                        <span>conghai70@gmail.com</span>
                    </div>

                    <div class="details">
                        <strong class="title">Địa chỉ:
                        </strong>
                        <span>11/11 đường...</span>
                    </div>

                    <div class="details">
                        <strong class="title">Số điện thoại:
                        </strong>
                        <span>123456789</span>
                    </div>

                    <div class="details">
                        <strong class="title">Ngày đặt hàng: </strong>
                        <span>1/1/2019</span>
                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-6">
                    <div class="section-title">
                            <h3>Thông tin đơn hàng</h3>
                        </div>
                <div class="info p-0">
                    
                    <div>
                        <strong class="title">Mã đơn hàng: 
                        </strong>
                        <span>CH1312</span>
                    </div>

                    <div class="details">
                        <strong class="title">Địa chỉ giao hàng: 
                        </strong>
                        <span>11/11 đường...</span>
                    </div>

                    <div class="details">
                        <strong class="title">Số điện thoại: 
                        </strong>
                        <span>123456789</span>
                    </div>

                    <div class="details">
                        <strong class="title">Phương thức thanh toán: 
                        </strong>
                        <span>Thanh toán khi nhận hàng(Thanh toán bằng thẻ)</span>
                    </div>

                    <div class="details">
                        <strong class="title">Phương thức giao hàng:
                        </strong>
                        <span>Giao hàng miễn phí</span>
                    </div>

                    <div class="details">
                        <strong class="title">Ngày đặt hàng: 
                        </strong>
                        <span>20/2/2018 - 23/2/2018<span>
                    </div>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Sản phẩm</h3>
                </div>
                <div class="table-responsive">
                    <table class="shopping-cart-table table" id="product-table">
                        <thead>
                            <tr>
                                <th>Sẩn phẩm</th>
                                <th></th>
                                <th class="text-center">Giá</th>
                                <th class="text-center">Số Lượng</th>
                                <th class="text-center">Tổng tiền</th>
                                <th class="text-right"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="thumb"><img src="../images/intargram1.jpg" alt=""></td>
                                <td class="details">
                                    <a href="#">Cây ....</a>

                                </td>
                                <td class="price text-center"><strong>30.000₫</strong><br><del class="font-weak"><small>40.000₫</small></del></td>
                                <td class="qty text-center"><input class="input" type="number" value="1" disabled></td>
                                <td class="total text-center"><strong class="primary-color">30.000₫</strong></td>
                            </tr>
                            <tr>
                                <td class="thumb"><img src="../images/intargram1.jpg" alt=""></td>
                                <td class="details">
                                    <a href="#">Cây ....</a>
                                </td>
                                <td class="price text-center"><strong>30.000₫</strong></td>
                                <td class="qty text-center"><input class="input" type="number" value="1" disabled></td>
                                <td class="total text-center"><strong class="primary-color">30.000₫</strong></td>
                            </tr>
                            <tr>
                                <td class="thumb"><img src="../images/intargram1.jpg" alt=""></td>
                                <td class="details">
                                    <a href="#">Cây ....</a>

                                </td>
                                <td class="price text-center"><strong>30.000₫</strong></td>
                                <td class="qty text-center"><input class="input" type="number" value="1" disabled></td>
                                <td class="total text-center"><strong class="primary-color">30.000₫</strong></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>Thành tiền</th>
                                <th colspan="2" class="sub-total">90.000₫</th>
                            </tr>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>Phí giao hàng</th>
                                <td id="ship-fee" colspan="2">Miễn phí</td>
                            </tr>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>Tổng tiền</th>
                                <th colspan="2" class="total">90.000₫</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                
                <div class="text-right">
                        <button id="btn" type="button" onclick="location.href='index.php?a=0';" >Xác nhận</button>
                </div>
            </div>
            
        </div>