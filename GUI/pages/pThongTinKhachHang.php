<?php
    include_once 'GUI/modules/mBanner.php';
    include_once 'BUS/TaiKhoan_BUS.php';
    $bus = new TaiKhoan_BUS();
    $info = new TaiKhoan();
    $info = $bus->GetUserInfo($user);
?>
<div class="content">
    <form id="info-user">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Thông tin khách hàng</h3>
                </div>
                <div class="form-group">
                    <p>Họ và tên:</p>
                    <input class="input" type="text" name="name" id="name" placeholder="Họ Tên" value="<?php echo $info->TenNguoiDung ?>" >
                </div>
                <div class="form-group">
                    <p>Email:</p>
                    <input class="input" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" id="email" placeholder="@email.com" value="<?php echo $info->Email ?>">
                </div>
                <div class="form-group">
                    <p>Địa chỉ:</p>
                    <input class="input" type="text" name="address" id="address" placeholder="Địa chỉ" value = "<?php echo $info->DiaChi ?>">
                </div>
                <div class="form-group">
                    <p>Số điện thoại:</p>
                    <input class="input" type="tel" name="tel" id="tel" placeholder="Số điện thoại" value= "<?php echo $info->Sdt ?>">
                </div>
                <button type="button" class="btn btn-success" id="btn-ChangeInfo">Sửa thông tin</button>
                <div class="alert alert-danger invisible mt-2 mb-0"></div>
                <input type="hidden" id="account" name="account" value= "<?php echo $user ?>">
            </div>          
        </div>
    </form>           
</div>
