
    <?php
        include './GUI/modules/mProgress-bar.php';
    ?>
    <div id="check-out ">
        <form id="checkout-form">
            <div class="row">
                <div class="col-md-6">
                    <div class="billing-details">
                        <div class="section-title">
                            <h3>Chi tiết đơn hàng</h3>
                        </div>

                        <div class="form-group">
                            <input class="input" type="text" name="first-name" placeholder="Đinh Công Hải" disabled>
                        </div>
                        <div class="form-group">
                            <input class="input" type="email" name="email" placeholder="conghai70@gmail.com"
                                disabled>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="address" placeholder="Địa chỉ">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="city" placeholder="Thành phố">
                        </div>
                        <div class="form-group">
                            <input class="input" type="tel" name="tel" placeholder="Số điện thoại">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shiping-methods">
                        <div class="section-title">
                            <h3>Phương thức giao hàng</h3>
                        </div>
                        <div class="input-checkbox">
                            <input type="radio" name="shipping" id="shipping-1" checked>
                            <label for="shipping-1">Giao hàng miễn phí - 0VNĐ</label>
                            <div class="caption">
                                <p>Thời gian giao hàng từ 3 đến 5 ngày</p>
                            </div>
                        </div>
                        <div class="input-checkbox">
                            <input type="radio" name="shipping" id="shipping-2">
                            <label for="shipping-2">Giao hàng nhanh - 20.000VNĐ</label>
                            <div class="caption">
                                <p>Thời gian giao hàng trong vòng 2 tiếng</p>
                            </div>
                        </div>
                    </div>
                    <div class="payments-methods">
                        <div class="section-title">
                            <h3>Phương thức thanh toán</h3>
                        </div>
                        <div class="input-checkbox">
                            <input type="radio" name="payments" id="payments-1" checked>
                            <label for="payments-1">Thanh toán bằng tiền mặt</label>
                        </div>
                        <div class="input-checkbox">
                            <input type="radio" name="payments" id="payments-2">
                            <label for="payments-2">Thanh toán bằng thẻ ngân hàng</label>

                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="section-title">
                        <h3>Giỏ hàng</h3>
                    </div>
                    <span id="empty-message">
                        <div class="alert alert-danger" role="alert" id="check-out-empty-message">Không có sản phẩm</div>
                    </span>
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
                    
                        </tbody>
                        
                        <tfoot>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>Thành tiền</th>
                                <th colspan="2" class="sub-total">10000₫</th>
                            </tr>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>Phí giao hàng</th>
                                <td id="ship-fee" colspan="2">Miễn phí</td>
                            </tr>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>Tổng tiền</th>
                                <th colspan="2" class="total">10000₫</th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>                   
                </div>
            </div>
            <div class="text-right" id="dat-hang">               
                <button type="button" onclick="location.href='index.php?a=5';localStorage.clear();" id="btn">Đặt Hàng</button>
            </div>
        </form>                  
    </div>