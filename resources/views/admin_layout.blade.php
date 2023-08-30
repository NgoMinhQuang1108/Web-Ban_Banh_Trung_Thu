<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | AsmrProg</title>
    <link rel="stylesheet" href="{{asset('public/Fontend/css/styleLogin.css')}}">
</head>
<body>
    
    <div class="main">
        <div class="container register-form" id="register-form">
            <form action="index.html" id="register-form" method="" class="form">
                <h2 class="form-title title">
                    Tạo tài khoản
                </h2>
                <div class="form-icon"></div>
                <span class="form-span">Sử dụng email để đăng ký</span>
                <input type="text" class="form-input" placeholder="Name">
                <input type="email" class="form-input" placeholder="Email">
                <input type="password" class="form-input" placeholder="Password">
                <button class="form-button button submit">Đăng ký</button>
            </form>
        </div>

        <div class="container login-form" id="login-form">
            <form action="index.html" id="login-form" method="get" class="form">
                <h2 class="form-title title">
                    Đăng nhập vào trang web
                </h2>
                <div class="form-icon"></div>
                <span class="form-span">Sử dụng Email của bạn cho tài khoản</span>
                <input type="email" class="form-input" placeholder="Email">
                <input type="password" class="form-input" placeholder="Password">
                <a href="#" class="form-link">Quên mật khẩu?</a>
                <button type="submit" class="form-button button submit">Đăng nhập</button>
            </form>
        </div>


        <div class="switch" id="switch-frm">
            <div class="switch-circle"></div>
            <div class="switch-circle switch-circle-t"></div>
            <div class="switch-form" id="switch-f1">
                <h2 class="switch-title title">
                 Đăng Nhập Vào
                </h2>
                <p class="switch-description description">
                    Để duy trì kết nối với chúng tôi, vui lòng đăng nhập với người của bạn
                </p>
                <button class="switch-button button switch-btn">Đăng Nhập</button>
            </div>


            <div class="switch-form is-hidden" id="switch-f2">
                <h2 class="switch-title title">
                    Chào bạn !
                </h2>
                <p class="switch-description description">
                    Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi
                </p>
                <button class="switch-button button switch-btn">Đăng ký</button>
            </div>

        </div>

    </div>



    <script src="{{asset('public/Fontend/js/scriptLogin.js')}}"></script>
</body>
</html>