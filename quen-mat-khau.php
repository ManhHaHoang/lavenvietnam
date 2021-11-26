<title>Đăng Nhập</title>
<?php include 'layout/head.php' ?>
<link rel="stylesheet" href="/assets/css/account.css">
<main class="site-main">
    <div class="site-w">
        <div class="login">
            <div class="login-title flex-b flex-s align-c">
                <h3 class="auth-title">Chào mừng đến với LAVEN VIỆT NAM.</h3>
                <div class="login-other">
                    <small>Bạn đã là thành viên, <a href="/dang-nhap">Đăng nhập</a> tại đây</small>
                </div>
            </div>
            <div class="auth-content">
                <form class="auth-form" method="POST" action="/tai-khoan">
                    <input type="hidden" name="_token" value="6ljjtUqv7oHFHLZWh7AwJKbotVYce5RCkz24Mbiu">
                    <div class="mod-login flex-b align-s flex-s flex-w">
                        <div class="mod-login-col" style="width: 100%">
                            <div class="mod-login-gr ">
                                <label>Số điện thoại hoặc email</label>
                                <input class="form-control" type="text" placeholder="Vui lòng nhập số điện thoại hoặc email của bạn" oninvalid="this.setCustomValidity('Vui lòng nhập số điện thoại hoặc email')" oninput="setCustomValidity('')" required="" value="">
                            </div>
                            <div class="mod-login-btn">
                                <button type="submit" class="button secondary login-btn" style="width: 200px; margin: 0">Đăng nhập</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</main>
<?php include 'layout/footer.php';?>
<script src="/assets/js/account.js" charset="utf-8"></script>
