<div class="product-warp-top flex-b flex-s">
    <div id="product-slider" class="product-top-box-left">
        <div id="slider-wrapper">
            <a id="Zoom-1" class="MagicZoom MagicZoomActive" data-slide-id="image-preview" data-options="expandZoomMode: off;selectorTrigger: hover; zoomMode: off;"  href="/images/products/tn0.jpg">
                <img src="/images/products/tn0.jpg" alt="" width="900" height="900">
            </a>
        </div>
        <div id="nav-images" class="selectors flex-b align-c flex-w">
            <?php for ($i=0; $i < 9; $i++) { ?>
                <a class="nav-item" data-zoom-id="Zoom-1" data-image="/images/products/tn<?= $i?>.jpg" href="/images/products/p<?= $i?>.jpg">
                    <img src="/images/products/tn<?= $i ?>.jpg" srcset="/images/products/tn<?= $i?>.jpg" width="60" height="60">
                </a>
            <?php } ?>
        </div>

    </div>
    <div class="product-top-box-right">
        <h1 class="product-title-header" itemprop="name"> <span>Ghế Massage Toàn Thân 4D Cao Cấp Maxxspeed ES30</span> </h1>
        <div class="product-promotion"> <span id="same_price_badge" class="badge best-sale-icon" ></span> </div>
        <div class="brand-block flex-b align-c">
            <div class="item-brand flex-b align-c">
                Thương hiệu:
                <span itemscope="" itemprop="brand" itemtype="http://schema.org/Brand">
                    <a href="https://chiaki.vn/maxxspeed/hang-san-xuat" >MaxxSpeed</a>
                </span>
            </div>
            <div class="item-brand flex-b align-c item-sku" id="product-sku">
                Mã sản phẩm: <span class="product-show-code" itemprop="sku">P01849501</span>
            </div>
            <div class="item-brand flex-b align-c item-made">  Xuất xứ thương hiệu: <a href="#/"> Việt Nam </a>  </div>
        </div>
        <div class="product-information product-item flex-b align-s">
            <div class="product-information-left">
                <p class="pr-meta">
                    <span class="pr-meta-label">Tình trạng:</span>
                    <span>Tạm hết hàng</span>
                </p>
                <p>
                    <span class="pr-meta-label">Giá</span>
                    <span class="nPrice"> 39.000.000đ </span>
                </p>
                <p>
                    <span class="pr-meta-label">Tiết kiệm</span>
                    <span> <span id="sale_percent">13% (<span id="sale_value">6.000.000đ</span>)
                </p>
                <p>
                    <span class="pr-meta-label">Giá thị trường</span> <del class="oPrice"> 45.000.000đ </del>
                </p>




                <form id="myForm" method="get" action="/san-pham.php">
                    <div class="variant-pro">
                        <span class="select-title pr-meta-label"> Chọn bảo hành: </span>
                        <div class="filter-wrapper flex-b align-c">
                            <label class="checkbox-label button" for="warranty-1">
                                <input class="radio-input" id="warranty-1" type="radio" name="warranty-service" checked>
                                <small class="input-type-radio "></small>
                                <span class="flex-b column">
                                    <span>Bảo hành 3 năm</span>
                                    <small class="variant-price">39.000.000đ</small>
                                </span>
                            </label>
                            <label class="checkbox-label button" for="warranty-2">
                                <input class="radio-input" id="warranty-2" type="radio" name="warranty-service">
                                <small class="input-type-radio "></small>
                                <span class="flex-b column">
                                    <span>Bảo hành 5 năm</span>
                                    <small class="variant-price">44.000.000đ</small>
                                </span>
                            </label>
                        </div>
                    </div>
                </form>


                <div class="fee-shipping fee-shipping transport flex-b align-c">
                    <img class="meta-lable-image" src="/images/fee-shipping.svg" alt="" width="24" height="24"> <span>Miễn phí vận chuyển nội thành</span>
                </div>

                <?php if (true) { ?>
                    <div class="buy-to-cart-wrapp" >
                        <div class="buy-now-box flex-b align-c">
                            <div class="buy-product-action flex-b align-c">
                                <span>Số lượng:</span>
                                <input class="form-control" type="number" min="1" value="1" >
                            </div>
                            <button class="button danger btn-buy-now js-news-add-to-cart" rel="nofollow">
                                Mua ngay
                            </button>
                            <a class="button primary btn-add-to-cart" href="#/gio-hang">
                                Cho vào giỏ
                            </a>
                        </div>
                        <div class="fee-policy"> Đổi trả hàng trong vòng 05 ngày! </div>
                        <div class="container-fluid shipping-fee">
                            Thời gian và phí giao hàng sẽ được ước tính khi đặt hàng. <a href="/tin-tuc/chinh-sach-van-chuyen-giao-nhan" target="_blank" rel="nofollow"> Xem chính sách giao hàng. </a>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="out-off-stock-warpper" >
                        <p class="text-left">
                            Sản phẩm: <b id="js-product-name"> Ghế Massage Toàn Thân 4D Cao Cấp Maxxspeed ES30 </b> tạm hết hàng.
                        </p>
                        <div class="text-left">Thông báo cho tôi khi có hàng trở lại. </div>
                        <div id="inventory-notification-email" class="flex-b align-s">
                            <input id="email-notification" class="form-control email-notification" type="text" placeholder="emailcuaban@email.com" autocomplete="off">
                            <button class="button danger btn-send-email-notification"> Báo cho tôi khi có hàng </button>
                        </div>
                    </div>
                <?php } ?>


            </div>
            <div class="product-information-right">
                <div class="seller-container">
                    <div id="seller-list">
                        <div class="seller-block-wrap">
                            <div class="current-seller">
                                <div class="store-info store-name flex-b">
                                    <img class="image" src="/images/store.svg" alt="store" width="24" height="24">
                                    <div class="text">
                                        <a rel="nofollow" href="javascript:;">Laven Việt Nam</a>
                                        <div class="rating-wrap flex-b align-c">
                                            <div class="rating-star-in-list"></div>
                                            <div class="rating-star-in-list"></div>
                                            <div class="rating-star-in-list"></div>
                                            <div class="rating-star-in-list"></div>
                                            <div class="rating-star-in-list"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="store-info warranty-info  flex-b">
                                    <img class="image" src="/images/warranty.png" alt="warranty" width="24" height="24">
                                    <div class="text" > Cam kết chính hãng 100% </div>
                                </div>
                                <div class="store-info warranty-info  flex-b">
                                    <img class="image" src="/images/money-back.png" alt="warranty" width="24" height="24">
                                    <div class="text">
                                        <div>Chiaki hoàn tiền 150%</span>
                                            <div id="money_back_popup">
                                                Chính sách bồi thường
                                            </div>
                                            <small><a href="#">Chi tiết</a> nếu phát hiện hàng giả</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="additional">
                            <div class="contact">
                                <div class="item flex-b">
                                    <img src="/images/phone.png" alt="" width="24" height="24">
                                    <div><b>HOTLINE:</b> <a class="hotline-store" href="tel: 0942.666.300">0942.666.300</a> </div>
                                </div>
                                <div class="item flex-b">
                                    <img src="/images/email.png" alt="" width="24" height="24">
                                    <div>
                                        <div class="">
                                            <b>Email:</b> <a href="mailto:cskh@lavenvietnam.vn">cskh@lavenvietnam.vn</a>
                                        </div>
                                        <small class="register-to-sell"> Đăng ký gian hàng? <a href="#/" class="btn-register-to-sell">Đăng ký</a> </small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
