$_DOMAIN = 'http://localhost:8080/web1/DA-WEB1-SHOPCAYCANH/admin';

/////////////////////////thêm tài khoản////////////////////////////
//Đăng kí

$("#form-them-tai-khoan button").on('click', function () {
    // Gán các giá trị trong các biến
    $tenHienThi     = $('#form-them-tai-khoan  #tenHienThi').val();
    $diaChi         = $('#form-them-tai-khoan  #diaChi').val();
    $soDienThoai    = $('#form-them-tai-khoan  #soDienThoai').val();
    $email          = $('#form-them-tai-khoan  #email').val();
    $tenDangNhap    = $('#form-them-tai-khoan  #tenDangNhap').val();
    $matKhau        = $('#form-them-tai-khoan  #matKhau').val();
    $loaiTaiKhoan   = $('#form-them-tai-khoan  #loaiTaiKhoan').val();
    //Nếu các giá trị rỗng

    if ($tenHienThi == '' || $diaChi == ''|| $soDienThoai == ''|| $email == '' || $tenDangNhap == '' || $matKhau == '' || $loaiTaiKhoan == '') {
        $("#form-them-tai-khoan .alert").removeClass("invisible");
        $("#form-them-tai-khoan .alert").html("Vui lòng điền đầy đủ thông tin.");
    }

    else
    {
        $.ajax({
            url: $_DOMAIN,
            type: "POST",
            
            data: {
                tenHienThi  : $tenHienThi,
                diaChi      : $diaChi,
                soDienThoai : $soDienThoai,
                email       : $email,
                tenDangNhap : $tenDangNhap,
                matKhau     : $matKhau,
                loaiTaiKhoan: $loaiTaiKhoan
            },
            success: function (data) {
                $('#form-them-tai-khoan .alert').removeClass('invisible');
                $('#form-them-tai-khoan .alert').html(data);
            },
            error: function () {
                $("##form-them-tai-khoan .alert").removeClass("invisible");
                $("#form-them-tai-khoan .alert").html("Không thể đăng ký vào lúc này, hãy thử lại sau.");
            }
        });
    }
});

/////////////////Thêm sản phẩm//////////////////////////////////

$("#form-them-san-pham button").on('click', function () {
    window.alert('Đã thêm thành công');
    // Gán các giá trị trong các biến
    $tenSanPham     = $('#form-them-san-pham #tenSanPham').val();
    $file_upload    = $('#form-them-san-pham #file-upload').val();
    $hangSanXuat    = $('#form-them-san-pham  #hangSanXuat').val();
    $giaSanPham     = $('#form-them-san-pham  #giaSanPham').val();
    $soLuong        = $('#form-them-san-pham #soLuong').val();
    $ngayNhap       = $('#form-them-san-pham  #ngayNhap').val();
    $moTa           = $('#form-them-san-pham #moTa').val();
    // Nếu các giá trị rỗng
    if ($tenSanPham == '' || $file-upload == '' || $hangSanXuat == '' || hangSanXuat == '' || $giaSanPham == '' || $soLuong == '' || $ngayNhap == '') {
        $("form-them-san-pham .alert").removeClass("invisible");
        $("form-them-san-pham .alert").html("Vui lòng điền đầy đủ thông tin.");
    }
    else
    {
        $.ajax({
            url: $_DOMAIN+'/BUS/SanPham/Them.php',
            type: "POST",
            
            data: {
                tenSanPham  : $tenSanPham,
                file_upload : $file-upload,
                hangSanXuat : $hangSanXuat,
                giaSanPham  : $giaSanPham,
                soLuong     : $soLuong,
                ngayNhap    : $ngayNhap,
                moTa        : $moTa
            },
            success: function (data) {
                $('#form-them-san-pham .alert').removeClass('invisible');
                $('#form-them-san-pham .alert').html(data);
            },
            error: function () {
                $("#form-them-san-pham .alert").removeClass("invisible");
                $("#form-them-san-pham .alert").html("Không thể thêm sản phẩm vào lúc này, hãy thử lại sau.");
            }
        });
    }
});
/////////////////Thêm loại sản phẩm////////////////////////////

$("#form-them-loai-san-pham button").on('click', function () {
    // Gán các giá trị trong các biến
    $tenLoaiSanPham = $('#form-them-loai-san-pham  #tenLoaiSanPham').val();
    
    // Nếu các giá trị rỗng
    if ($tenLoaiSanPham == '') {
        $("#form-them-loai-san-pham .alert").removeClass("invisible");
        $("#form-them-loai-san-pham .alert").html("Vui lòng điền đầy đủ thông tin.");
    }
    else
    {
        $.ajax({
            url: $_DOMAIN,
            type: "POST",
            
            data: {
                tenLoaiSanPham: $tenLoaiSanPham,
            },
            success: function (data) {
                $('#form-them-loai-san-pham .alert').removeClass('invisible');
                $('#form-them-loai-san-pham .alert').html(data);
            },
            error: function () {
                $("#form-them-loai-san-pham .alert").removeClass("invisible");
                $("#form-them-loai-san-pham .alert").html("Không thể thêm loại sản phẩm vào lúc này, hãy thử lại sau.");
            }
        });
    }
});
//////////////////Thêm hãng sản xuất/////////////////////////

$("#form-them-hang-san-pham button").on('click', function () {
    // Gán các giá trị trong các biến
    $tenHangSanPham = $('#form-them-hang-san-pham  #tenHangSanPham').val();
    $file_upload    = $('#form-them-hang-san-pham  #file-upload').val();
    // Nếu các giá trị rỗng
    if ($name_info == '' || $username_info == '') {
        $("form-them-hang-san-pham .alert").removeClass("invisible");
        $("form-them-hang-san-phamm .alert").html("Vui lòng điền đầy đủ thông tin.");
    }

    else
    {
        $.ajax({
            url: $_DOMAIN,
            type: "POST",
            
            data: {
                tenHangSanPham  : $tenHangSanPham,
                file_upload     : $file_upload,
            },
            success: function (data) {
                $('form-them-hang-san-pham .alert').removeClass('invisible');
                $('form-them-hang-san-pham .alert').html(data);
            },
            error: function () {
                $("form-them-hang-san-pham .alert").removeClass("invisible");
                $("form-them-hang-san-pham .alert").html("Không thể thêm hãng lúc này, hãy thử lại sau.");
            }
        });
    }
});

//////////////////////////////xóa////////////////////////////
//Dang xuat admin
$('#dang-xuat').on('click', function () {
    var action = "logout";
    $.ajax({
        url: 'GUI/modules/mDangXuat.php',
        method: "POST",
        data: {
            action: action
        },
        success: function (data) {
            $('#dang-xuat').html(data);
            // location.reload();
        },
        error: function () {
            window.alert("thất bại");
        }
    });
});