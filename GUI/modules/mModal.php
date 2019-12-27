<div id="Modal-form" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered h-auto" style="max-width:360px">
        <div class="modal-content">
            <button type="button" class="close btn" aria-label="Close" data-dismiss="modal">
                <span>x</span>
            </button>
            <div class="form">
                <form id="login-form">
                    <input type="text" placeholder="Tài khoản" name="username" pattern="[A-Za-z0-9]{3,}" id="username" />
                    <input type="password" placeholder="Mật khẩu" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" id="password" />
                    <button type="button" name="login_button" id="login_button">ĐĂNG NHẬP</button>
                    <div class="alert alert-danger invisible mt-2"></div>
                    <p class="message">
                        Chưa đăng kí? <a href="#">Tạo tài khoản</a>
                    </p>
                </form>
                <form id="register-form">
                    <input type="text" name="name" placeholder="Họ tên" pattern="[^'\x22]+" id='name'/>
                    <input type="text" name="username" placeholder="Tên đăng nhập" pattern="[A-Za-z0-9]{3,}" id='username'>
                    <input type="password" name="password" placeholder="Mật khẩu" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,}" id='password'/>
                    <input type="text" name="address" placeholder="Địa chỉ" pattern="[^'\x22]+" id='address'/>
                    <input type="text" name="phone_number" placeholder="Số điện thoại" pattern="0+[0-9]{9,}" id='phone_number'/>
                    <input type="text" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id='email'"/>
                    <button type="button" name="register_button" id="register_button">TẠO TÀI KHOẢN</button>
                    <div class="alert alert-danger invisible mt-2 mb-0"></div>
                    <p class="message">Đã có tài khoản? <a href="#">Đăng Nhập</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
