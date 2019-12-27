<h1>Danh sách tài khoản</h1>
<p>
    <form method="POST" id="formSearchPost" onsubmit="return false;">
        <div class="input-group">
            <input type="text" class="form-control" id="kw_search_post" placeholder="Nhập tên đăng nhập...">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
            </span>
        </div>
    </form>
</p>
<div class="table-responsive">
<table class="table table-hover">
    <thead>
        <tr>
            <th></th>
            <th>STT</th>
          <th>Tên đăng nhập</th>
          <th>Tên hiển thị</th>
          <th>Số điện thoại</th>
          <th>Email</th>
          <th>Địa chỉ</th>
          <th>Loại tài khoản</th>
          <th>Chức năng</th>
        </tr>
    </thead>
    <tbody>
    <?php
include_once __DIR__ . '/../../BUS/TaiKhoan_BUS.php';

$loadTK = new TaiKhoanBUS();

$result = $loadTK->LoadTatCaTaiKhoan();
$i = 1;
foreach ($result as $loadTK) {
    if ($loadTK->LoaiTK == 0) {
        $loai = 'Admin';
    } else {
        $loai = 'Thường';
    }
    echo '
            <tr>
                <td>
                    <form method="post" name="main-form" id="main-form" enctype="multipart/form-data" accept-charset="utf-8">
                        <input type="hidden" name="maTaiKhoanDel" id="maTaiKhoanDel" value="'.$loadTK->MaTaiKhoan.'">
                        <button id="Xoa" type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
                <td>'.$i.'</td>
                <td>'.$loadTK->TenDangNhap.'</td>
                <td>'.$loadTK->TenHienThi.'</td>
                <td>'.$loadTK->DienThoai.'</td>
                <td>'.$loadTK->email.'</td>
                <td>'.$loadTK->DiaChi.'</td>
                <td>'.$loai.'</td>
                <td>
                   <div class="dropdown chinhsua">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chỉnh sửa</button>
                        <form id="form-chinh-sua-tai-khoan" method="post" name="main-form" id="main-form" enctype="multipart/form-data" accept-charset="utf-8" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="form-group">
                                <input type="hidden" name="maTaiKhoanEdit" id="maTaiKhoanEdit" value="'.$loadTK->MaTaiKhoan.'">
                            </div>
                            <div class="form-group">
                                <span>Tên đăng nhập</span>
                                <input type="text" name="tenDangNhapEdit" class="form-control" id="tenDangNhapEdit" value="'.$loadTK->TenDangNhap.'">
                            </div>
                            <div class="form-group">
                                <span>Mật khẩu</span>
                                <input type="password" name="matKhauEdit" class="form-control" id="matKhauEdit" value="'.$loadTK->MatKhau.'">
                            </div>
                            <div class="form-group">
                                <span>Tên hiển thị</span>
                                <input type="text" name="tenHienThiEdit" class="form-control" id="tenHienThiEdit" value="'.$loadTK->TenHienThi.'">
                            </div>
                            <div class="form-group">
                                <span>Số điện thoại</span>
                                <input type="text" name="soDienThoaiEdit" class="form-control" id="soDienThoaiEdit" value="'.$loadTK->DienThoai.'">
                            </div>
                            <div class="form-group">
                                <span>Email</span>
                                <input type="text" name="emaiEdit" class="form-control" id="emailEdit" value="'.$loadTK->email.'">
                            </div>
         
                            <div class="form-group">
                                <span>Địa chỉ</span>
                                <input type="text" name="diaChiEdit" class="form-control" id="diaChiEdit" value="'.$loadTK->DiaChi.'">
                            </div>
                            <div class="form-group">
                                <select class="custom-select" name="loaiTaiKhoanEdit">
                                    <option value="1">Thường</option>
                                    <option value="0">Admin</option>
                                </select>
                            </div>    
                            <button type="submit" id="chinhSua" class="btn btn-success">Chỉnh sửa</button>
                        </form>
                    </div>
                </td>
            </tr>
            ';
    $i++;
}
?>
    </tbody>
</table>
</div>