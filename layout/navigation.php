<div id="navigation" class="main-bar <?= $homeclass ?>">
    <div class="site-w">
        <div class="main-bar-wrapper flex-b align-s">
            <nav class="navigation">
                <span class="mobile navigation-icon">
                    <small></small>
                    <small></small>
                    <small></small>
                </span>
                <a href="/" class="short-text desktop">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>
                </a>
                <a class="lev1-link desktop">
                    Danh mục <span>sản phẩm</span>
                    <img width="10" height="10" src="/images/down.svg" alt="<?= $sitename ?>">
                </a>
                <a class="home-link mobile" href="/" title="<?= $sitename ?>">
                    <img width="" height="44" src="/images/logo.png" alt="<?= $sitename ?>">
                </a>
                <div class="main-menu">
                    <?php include 'common/menu.php' ?>
                    <div class="navigation-background-mobile"></div>
                </div>
            </nav>
            <div class="main-bar-other flex-b align-s flex-s">
                <form class="main-seach-form flex-b align-c" action="/danh-muc" method="get">
                    <div id="search-header">
                        <div class="box-shadow-search flex-b align-s">
                            <input type="text" id="keyword" autocomplete="off" name="s" class="txt-search form-control" placeholder="Tìm kiếm hàng nghìn Sản phẩm, Thương hiệu ...">
                            <input type="button" id="searchButton" value="Tìm kiếm" class="btn-search button">
                            <span class="loading-icon"></span>
                        </div>
                        <div class="hot-words-list">
                            <a class="hot-words-item" target="_blank" href="/#vitamin-cho-be-c114">Vitamin cho bé</a>
                            <a class="hot-words-item" target="_blank" href="/#tao-xoan-spirulina-nhat-ban-hop-2200-vien">Tảo Xoắn Spirulina</a>
                            <a class="hot-words-item" target="_blank" href="/#blackmores/hang-san-xuat">Blackmores</a>
                            <a class="hot-words-item" target="_blank" href="/#nuoc-hoa-hong-tri-mun-giam-nhon-obagi-clenziderm-md-pore-therapy">BHA Obagi</a>
                            <a class="hot-words-item" target="_blank" href="/#collagen-c20">Collagen</a>
                        </div>
                        <div id="popular-search-suggestion">
                            <div class="keyword-member">
                                <h3 class="hotsearch-title">Từ khóa hot</h3>
                                <div id="list-suggest-item" class="item-hot-keyword flex-b align-c flex-w">
                                    <a href="/#" class="suggest-item">collagen</a>
                                    <a href="/#" class="suggest-item">Ostelin</a>
                                    <a href="/#" class="suggest-item">Collagen</a>
                                    <a href="/#" class="suggest-item">đồng hồ</a>
                                    <a href="/#" class="suggest-item">Obagi</a>
                                    <a href="/#" class="suggest-item">Obagi Retinol</a>
                                    <a href="/#" class="suggest-item">fatzbaby</a>
                                    <a href="/#" class="suggest-item">vitamin</a>
                                    <a href="/#" class="suggest-item">máy massage cầm tay</a>
                                    <a href="/#" class="suggest-item">Elevit Bầu</a>
                                </div>
                            </div>
                            <div class="product-member">
                                <h3 class="hotsearch-title">Sản phẩm bạn muốn tìm</h3>
                                <div id="list-suggest-product" class="product-hot-keyword">
                                    <?php for ($i=1; $i < 6; $i++) { ?>
                                        <div class="product-suggest-item flex-b align-c">
                                            <a class="product-suggest-link" href="#/">
                                                <img src="/images/products/<?= $i?>.jpg" width="100" height="100" alt="">
                                            </a>
                                            <div class="product-suggest-info">
                                                <a class="product-suggest-title" href="/#">
                                                    Sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </a>
                                                <div class="flashsale-price flex-b align-c">
                                                    <span class="nPrice"> 2.290.000đ </span>
                                                    <del class="oPrice"> 2.690.000đ </del>
                                                </div>
                                                <button type="button" class="button primary">Mua ngay</button>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="segment-order-tracking bar-item desktop">
                    <div class="segment-order-text flex-b align-c">
                        <img height="28" src="/images/segment-icon.svg" alt="<?= $sitename ?>">
                        <span class="desktop">Tra cứu đơn hàng</span>
                    </div>
                    <form id="form-search-order" class="bar-item"  method="POST">
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input class="form-control input-sm" name="phone" id="phone-input" type="text" placeholder="Nhập số điện thoại">
                        </div>

                        <div class="form-group">
                            <label for="phone">Mã khách hàng</label>
                            <input class="form-control input-sm" name="customerCode" id="customer-code" type="text" placeholder="Nhập mã khách hàng">
                        </div>

                        <div class="form-group">
                            <div class="help-block" style="color: green;"> Liên hệ CSKH nếu bạn chưa có mã khách hàng </div>
                        </div>

                        <div class="form-group flex-b align-c">
                            <button type="submit" class="button primary btn-order-tracking"> Tra cứu </button>
                            <button type="reset" id="hide-segment" class="button btn-cancel"> Đóng </button>
                        </div>
                    </form>
                </div>
                <div class="header-hotline-box bar-item column">
                    <a class="mobile" href="tel:0942.666.300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                    </a>
                    <div class="header-hotline-number flex-b align-c">
                        <img src="/images/header-hotline-number.svg" alt="<?= $sitename ?>" width="24" height="24">
                        <a href="tel:0942.666.300">0942.666.300</a>
                    </div>
                    <div class="header-hotline-number flex-b align-c">
                        <img src="/images/header-hotline-number.svg" alt="<?= $sitename ?>" width="24" height="24">
                        <a href="0933.555.300">0933.555.300</a>
                    </div>
                </div>
                <div class="mobile user-area bar-item">
                    <img src="/images/user.svg" alt="<?= $sitename?>" width="24" height="24">
                </div>
                <label for="keyword" class="mobile search-area bar-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="open-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="close-search" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                        <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                    </svg>
                </label>
                <div class="cart-on-nav mini-cart bar-item">
                    <div class="iconbox mini-cart-link">
                        <img src="/images/header-nav-cart.svg" alt="<?= $sitename ?>" width="24" height="24">
                        <span class="badge cart-item-count">1</span>
                    </div>
                    <div class="mini-cart-contain">
                        <div class="mini-cart-contain">
                            <div class="cart-top mobile ">
                                <div class="mini-cart-heading flex-b align-c">
                                    Giỏ hàng của bạn <span class="item-count top-totalcartnum">3</span>
                                </div>
                                <span class="closecart">Đóng</span>
                            </div>
                            <?php if (1 == 1) { ?>
                                <div id="list-cart-items" class="mini-cart-list">
                                    <div class="mini-cart-content">
                                        <?php for ($i=1; $i < 4; $i++) { ?>
                                            <div class="list-item-box">
                                                <div class="cart-box">
                                                    <div class="cart-content-top flex-b flex-s">
                                                        <div class="cart-tips-price">
                                                            <img src="/images/products/<?= $i?>.jpg" width="60" height="60" alt="">
                                                        </div>
                                                        <div class="cart-tips-event flex-b column">
                                                            <span class="cart-tips-team">Sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                                            <div class="cart-content-bottom flex-b align-c">
                                                                <div class="flashsale-price flex-b align-c">
                                                                    <span class="nPrice"> 2.290.000đ </span>
                                                                    <del class="oPrice"> 2.690.000đ </del>
                                                                </div>
                                                                <span class="delete-current-item"> &times; </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                </div>
                            <?php } ?>
                            <div class="mini-cart-footer">
                                <a class="js-go-to-cart mini-cart-button checkout-btn flex-b align-c flex-c" href="/tips/cart">
                                    Thanh toán
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>
                                </a>
                            </div>

                            <?php if (1 == 2) { ?>
                                <div id="cart-error" class="mini-cart-list">
                                    <div class="flex-b flex-c align-c ">
                                        <div class="">
                                            <div class="flex-box flex-c align-c">
                                                <img src="https://printerval.com/modules/cart/images/shopping-cart.svg" alt="" width="72">
                                            </div>
                                            Your Cart is Empty
                                        </div>
                                        <a href="https://printerval.com">
                                            Continue Shopping
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="mini-cart-background mobile"></div>
                </div>
            </div>
        </div>
        <div id="login-chiaki" class="mobile">
            <div class="quick-login login-item">
                <div class="cart-top flex-b align-c flex-s">
                    <div class="mini-cart-heading flex-b align-c">
                        Tài khoản
                    </div>
                    <span class="closecart">Đóng</span>
                </div>
                <div class="quick-login-content">
                    <div class="social-buttons">
                        <a rel="nofollow" href="/facebook-login" class="button button-fb">Facebook</a>
                        <a rel="nofollow" href="/google-login" class="button button-google">Google</a>
                    </div>
                    <p>hoặc</p>
                    <form class="form" role="login" method="post" action="/dang-nhap" accept-charset="UTF-8" id="login-nav" data-toggle="validator" novalidate="true">
                        <div class="form-group">
                            <label class="hidden" for="exampleInputEmail2">Email</label>
                            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" required oninvalid="this.setCustomValidity('Email bạn nhập chưa đúng!')" oninput="setCustomValidity('')">
                        </div>
                        <div class="form-group">
                            <label class="hidden" for="exampleInputPassword2">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Mật khẩu" data-minlength="6" oninvalid="this.setCustomValidity('Chưa nhập mật khẩu')" oninput="setCustomValidity('')" required="">
                            <div class="help-block text-right">
                                <a id="RecoverPass" class="linkcolor" href="javascript:void(0);">Quên mật khẩu?</a>
                            </div>
                        </div>
                        <div class="form-group"> <button type="submit" class="button primary button-block">Đăng nhập</button> </div>
                        <div class="bottom text-center"> Chưa có tài khoản? Đăng ký <a rel="nofollow" class="linkcolor" href="/dang-ky">Tại đây</a> </div>
                    </form>
                </div>
            </div>
            <div class="forget-pass login-item">
                <div class="cart-top flex-b align-c flex-s">
                    <div class="mini-cart-heading flex-b align-c">
                        Tài khoản
                    </div>
                    <span class="closecart">Đóng</span>
                </div>
                <div class="quick-login-content">
                    <p>Bạn hãy nhập email để chúng tôi gửi mật khẩu cho bạn</p>
                    <form class="form" method="post" role="recoverpassword" action="/mat-khau">
                        <div class="form-group">
                            <label class="hidden" for="exampleInputEmail2">Email</label>
                            <input type="email" name="email" class="form-control" id="forgotpass" placeholder="Nhập Email của bạn" required oninvalid="this.setCustomValidity('Email bạn nhập chưa đúng!')" oninput="setCustomValidity('')">
                        </div>
                        <div class="form-group flex-b align-c">
                            <button type="submit" class="button primary">Gửi</button>
                            <a rel="nofollow" href="javascript:void(0);" class="button button-sus quick-log">Đăng nhập</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="login-background-mobile "></div>
    </div>
</div>
