<title>Đăng Nhập</title>
<?php include 'layout/head.php' ?>
<link rel="stylesheet" href="/assets/css/account.css">
<main class="site-main">
    <div class="site-w">
        <div class="login">
            <div class="login-title flex-b flex-s align-c">
                <h3 class="auth-title">Chào mừng đến với LAVEN VIỆT NAM.</h3>
                <div class="login-other">
                    <small>Thành viên mới? <a href="/dang-ky">Đăng kí</a> tại đây</small>
                </div>
            </div>
            <div class="auth-content">
                <form class="auth-form" method="POST" action="/tai-khoan">
                    <input type="hidden" name="_token" value="6ljjtUqv7oHFHLZWh7AwJKbotVYce5RCkz24Mbiu">
                    <div class="mod-login flex-b align-s flex-s flex-w">
                        <div class="mod-login-col">
                            <div class="mod-login-gr ">
                                <label>Số điện thoại hoặc email</label>
                                <input class="form-control" type="text" placeholder="Vui lòng nhập số điện thoại hoặc email của bạn" oninvalid="this.setCustomValidity('Vui lòng nhập số điện thoại hoặc email')" oninput="setCustomValidity('')" required="" value="">
                            </div>
                            <div class="mod-login-gr ">
                                <label>Mật khẩu</label>
                                <input class="form-control" type="password" placeholder="Vui lòng nhập mật khẩu của bạn" oninvalid="this.setCustomValidity('Vui lòng nhập mật khẩu')" oninput="setCustomValidity('')" required="">
                            </div>
                            <div class="mod-login-gr flex-b flex-e">
                                <a href="/quen-mat-khau">Quên mật khẩu?</a>
                            </div>
                        </div>
                        <div class="mod-login-col">
                            <div class="mod-login-btn">
                                <button type="submit" class="button secondary login-btn">Đăng nhập</button>
                            </div>
                            <div class="mod-login-third">
                                <div class="mod-third-party-login mod-login-third-btns">
                                    <div class="mod-third-party-login-line flex-b align-c">
                                        <span>Hoặc, đăng nhập bằng</span>
                                    </div>
                                    <div class="mod-third-party-login-bd flex-b align-s flex-s">
                                        <button type="button" class="button mod-third-party-login-btn mod-third-login-fb">Facebook</button>
                                        <button type="button" class="button mod-third-party-login-btn mod-third-login-gg">Google</button>
                                    </div>
                                </div>
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
