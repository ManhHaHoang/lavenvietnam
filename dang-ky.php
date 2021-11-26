<title>Đăng Nhập</title>
<?php include 'layout/head.php' ?>
<link rel="stylesheet" href="/assets/css/account.css">
<main class="site-main">
    <div class="site-w">
        <div class="site-w">
            <div class="login">
                <div class="login-title flex-b flex-s align-c">
                    <h3 class="auth-title">Tạo tài khoản Laven Vietnam.</h3>
                    <div class="login-other">
                        <small>Bạn đã là thành viên, <a href="/dang-nhap">Đăng nhập</a> tại đây</small>
                    </div>
                </div>
                <div class="auth-content">
                    <form class="form-horizontal" method="POST" action="/dang-ky">
                        <input type="hidden" name="_token" value="6ljjtUqv7oHFHLZWh7AwJKbotVYce5RCkz24Mbiu">
                        <div class="mod-login flex-b align-s flex-s flex-w">
                            <div class="mod-login-col">
                                <div class="mod-login-gr mod-input-username">
                                    <label>Email của bạn</label>
                                    <input class="form-control" type="text" placeholder="Nhập email của bạn" value="" inputmode="numeric" pattern="[0-9]*">
                                </div>
                                <div class="mod-login-gr mod-input-password">
                                    <label>Mật khẩu</label>
                                    <input class="form-control" type="text" placeholder="Tối thiểu 6 kí tự bao gồm cả chữ và số" value="">
                                </div>
                                <div class="mod-login-gr mod-input-password">
                                    <label>Nhập lại mật khẩu</label>
                                    <input class="form-control" type="text" placeholder="Nhập lại mật khẩu và giống với mật khẩu" value="">
                                </div>
                                <div class="mod-login-row">
                                    <div class="mod-login-birthday grid-auth">
                                        <div class="mod-login-gr">
                                            <label>Ngày sinh</label>
                                            <select class="select" name="birthday">
                                                <option value="0">-- Ngày --</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="mod-login-gr">
                                            <label>Tháng</label>
                                            <select class="select" name="birthday">
                                                <option value="0">-- Tháng --</option>
                                                <option value="1">Tháng 1</option>
                                                <option value="2">Tháng 2</option>
                                                <option value="3">Tháng 3</option>
                                                <option value="4">Tháng 4</option>
                                                <option value="5">Tháng 5</option>
                                                <option value="6">Tháng 6</option>
                                                <option value="7">Tháng 7</option>
                                                <option value="8">Tháng 8</option>
                                                <option value="9">Tháng 9</option>
                                                <option value="10">Tháng 10</option>
                                                <option value="11">Tháng 11</option>
                                                <option value="12">Tháng 12</option>
                                            </select>
                                        </div>
                                        <div class="mod-login-gr">
                                            <label>Năm</label>
                                            <select class="select" name="birthday">
                                                <option value="0">-- Năm --</option>
                                                <option value="2005"> 2005</option>
                                                <option value="2004"> 2004</option>
                                                <option value="2003"> 2003</option>
                                                <option value="2002"> 2002</option>
                                                <option value="2001"> 2001</option>
                                                <option value="2000"> 2000</option>
                                                <option value="1999"> 1999</option>
                                                <option value="1998"> 1998</option>
                                                <option value="1997"> 1997</option>
                                                <option value="1996"> 1996</option>
                                                <option value="1995"> 1995</option>
                                                <option value="1994"> 1994</option>
                                                <option value="1993"> 1993</option>
                                                <option value="1992"> 1992</option>
                                                <option value="1991"> 1991</option>
                                                <option value="1990"> 1990</option>
                                                <option value="1989"> 1989</option>
                                                <option value="1988"> 1988</option>
                                                <option value="1987"> 1987</option>
                                                <option value="1986"> 1986</option>
                                                <option value="1985"> 1985</option>
                                                <option value="1984"> 1984</option>
                                                <option value="1983"> 1983</option>
                                                <option value="1982"> 1982</option>
                                                <option value="1981"> 1981</option>
                                                <option value="1980"> 1980</option>
                                                <option value="1979"> 1979</option>
                                                <option value="1978"> 1978</option>
                                                <option value="1977"> 1977</option>
                                                <option value="1976"> 1976</option>
                                                <option value="1975"> 1975</option>
                                                <option value="1974"> 1974</option>
                                                <option value="1973"> 1973</option>
                                                <option value="1972"> 1972</option>
                                                <option value="1971"> 1971</option>
                                                <option value="1970"> 1970</option>
                                                <option value="1969"> 1969</option>
                                                <option value="1968"> 1968</option>
                                                <option value="1967"> 1967</option>
                                                <option value="1966"> 1966</option>
                                                <option value="1965"> 1965</option>
                                                <option value="1964"> 1964</option>
                                                <option value="1963"> 1963</option>
                                                <option value="1962"> 1962</option>
                                                <option value="1961"> 1961</option>
                                                <option value="1960"> 1960</option>
                                                <option value="1959"> 1959</option>
                                                <option value="1958"> 1958</option>
                                                <option value="1957"> 1957</option>
                                                <option value="1956"> 1956</option>
                                                <option value="1955"> 1955</option>
                                                <option value="1954"> 1954</option>
                                                <option value="1953"> 1953</option>
                                                <option value="1952"> 1952</option>
                                                <option value="1951"> 1951</option>
                                            </select>
                                        </div>
                                        <div class="mod-login-gr">
                                            <label>Giới tính</label>
                                            <select class="select" name="gender">
                                                <option value="0">-- Giới tính --</option>
                                                <option value="1">Nam</option>
                                                <option value="2">Nữ</option>
                                                <option value="3">Khác</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mod-login-col">
                                <div class="mod-login-gr">
                                    <label>Họ tên</label>
                                    <input class="form-control" type="text" placeholder="Họ Tên" value="">
                                </div>
                                <div class="mod-login-gr">
                                    <label for="enableSmsNewsletter" class="auth-enablenewsletter">
                                        <input id="enableSmsNewsletter" type="checkbox" checked="" name="Newsletter" value="">
                                        <small></small>
                                        <span>Tôi muốn cập nhật thông tin ưu đãi</span>
                                    </label>
                                </div>
                                <div class="mod-login-btn">
                                    <button type="submit" class="button secondary login-btn">Đăng ký</button>
                                </div>
                                <div class="mod-login-policy">
                                    <span>Bằng cách ấn vào nút <b>Đăng ký</b>, tôi đồng ý với <a href="#" target="_blank" rel="noopener noreferrer">Điều Khoản Sử Dụng</a> và <a href="#" target="_blank" rel="noopener noreferrer">Chính Sách Bảo Mật của Laven Vietnam</a></span>
                                </div>
                                <div class="mod-login-third">
                                    <div class="mod-third-party-login mod-login-third-btns">
                                        <div class="mod-third-party-login-line flex-b align-c">
                                            <span>Hoặc, đăng ký bằng</span>
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
    </div>
</main>
<?php include 'layout/footer.php';?>
<script src="/assets/js/account.js" charset="utf-8"></script>
