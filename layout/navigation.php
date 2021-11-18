<div id="navigation" class="main-bar <?= $homeclass ?>">
    <div class="site-w">
        <div class="main-bar-wrapper flex-b align-s">
            <nav class="navigation">
                <span class="mobile navigation-icon">
                    <small></small>
                    <small></small>
                    <small></small>
                </span>
                <a class="lev1-link desktop">
                    Danh mục <span>sản phẩm</span>
                    <img width="10" height="10" src="/images/down.svg" alt="<?= $sitename ?>">
                </a>
                <a class="home-link mobile" href="/" title="<?= $sitename ?>">
                    <img width="" height="44" src="/images/logo.png" alt="<?= $sitename ?>">
                </a>
                <a class="short-text desktop">
                    <img height="20" src="/images/logo.png" alt="<?= $sitename ?>">
                    <img width="10" height="10" src="/images/down.svg" alt="<?= $sitename ?>">
                </a>
                <div class="main-menu">
                    <?php include 'common/menu.php' ?>
                    <div class="navigation-background-mobile"></div>
                </div>
            </nav>
            <div class="main-bar-other flex-b align-s flex-s">
                <form class="main-seach-form flex-b align-c" action="/search/" method="post">
                    <div id="search-header">
                        <div class="box-shadow-search flex-b align-s">
                            <input type="text" id="keyword" autocomplete="off" class="txt-search form-control" placeholder="Tìm kiếm hàng nghìn Sản phẩm, Thương hiệu ...">
                            <input type="button" id="searchButton" value="Tìm kiếm" class="btn-search button">
                        </div>
                        <div class="hot-words-list">
                            <a class="hot-words-item" target="_blank" href="https://chiaki.vn/vitamin-cho-be-c114">Vitamin cho bé</a>
                            <a class="hot-words-item" target="_blank" href="https://chiaki.vn/tao-xoan-spirulina-nhat-ban-hop-2200-vien">Tảo Xoắn Spirulina</a>
                            <a class="hot-words-item" target="_blank" href="https://chiaki.vn/blackmores/hang-san-xuat">Blackmores</a>
                            <a class="hot-words-item" target="_blank" href="https://chiaki.vn/nuoc-hoa-hong-tri-mun-giam-nhon-obagi-clenziderm-md-pore-therapy">BHA Obagi</a>
                            <a class="hot-words-item" target="_blank" href="https://chiaki.vn/collagen-c20">Collagen</a>
                        </div>
                        <div id="popular-search-suggestion">
                            <div class="keyword-member">
                                <h3 class="hotsearch-title">Từ khóa hot</h3>
                                <div id="list-suggest-item" class="item-hot-keyword item">
                                    <span class="suggest-item">collagen</span>
                                    <span class="suggest-item">Ostelin</span>
                                    <span class="suggest-item">Collagen</span>
                                    <span class="suggest-item">đồng hồ</span>
                                    <span class="suggest-item">Obagi</span>
                                    <span class="suggest-item">Obagi Retinol</span>
                                    <span class="suggest-item">fatzbaby</span>
                                    <span class="suggest-item">vitamin</span>
                                    <span class="suggest-item">máy massage cầm tay</span>
                                    <span class="suggest-item">Elevit Bầu</span>
                                </div>
                            </div>
                            <ul style="display: none;">
                                <li id="search-suggestion-template"> <a href="" class="link-search"> <span class="thumb-search"> <img data-src="https://cdn.chiaki.vn/unsafe/0x100/left/top/smart/filters:quality(75)/https://chiaki.vn/upload/"> </span> <span class="title-search"></span> <span class="price-search"> <b class="price-value"></b> <sup>đ</sup> <span class="old-price-value"></span> </span> <span class="clearfix"></span> </a> <a href="#muangay" class="search-buy-now"> Mua ngay </a> </li>
                                <li id="search-in-category-template"><a href="" class="search-in-category"></a></li>
                            </ul>
                        </div>
                    </div>
                </form>
                <div class="segment-order-tracking bar-item">
                    <div class="segment-order-text flex-b align-c">
                        <img height="28" src="/images/segment-icon.svg" alt="<?= $sitename ?>">
                        <span class="desktop">Tra cứu đơn hàng</span>
                    </div>
                    <form id="form-search-order" class="bar-item" action="https://chiaki.vn/kiem-tra-don-hang" method="POST">
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label> <input class="form-control input-sm" name="phone" id="phone-input" type="text" placeholder="Nhập số điện thoại">
                            <div class="help-block with-errors" id="error-phone" style="color: red;"></div>
                            <label for="phone">Mã khách hàng</label> <input class="form-control input-sm" name="customerCode" id="customer-code" type="text" placeholder="Nhập mã khách hàng">
                            <div class="help-block with-errors" id="error-customer" style="color: red;"></div>
                            <div class="help-block" style="color: green;"> Liên hệ CSKH nếu bạn chưa có mã khách hàng </div>
                            <input type="hidden" name="_token" id="csrf-token" value="iDciIwzz9o1637077472712">
                        </div>
                        <div class="form-group flex-b align-c">
                            <button type="submit" class="button btn-order-tracking"> Tra cứu </button>
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
                <div class="cart-on-nav bar-item">
                    <a href="/gio-hang?cart=1" title="Giỏ hàng của bạn">
                        <div class="iconbox">
                            <img src="/images/header-nav-cart.svg" alt="<?= $sitename ?>" width="24" height="24">
                            <span class="badge cart-item-count"></span>
                        </div>
                    </a>
                </div>
                <div class="mobile user-area bar-item">
                    <img src="/images/user.svg" alt="<?= $sitename?>" width="24" height="24">
                </div>
            </div>
        </div>
        <div class="navigation-background"></div>
    </div>
</div>
