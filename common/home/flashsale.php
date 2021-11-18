<div class="flashsale-wrapper">
    <div class="site-w">
        <div class="flashsale-box flex-b align-s flex-w">
            <div class="flashsale-title-wrapper flex-b align-c">
                <h3 class="flashsale-head flex-b align-c">
                    <svg width="20" height="28" fill="currentColor" class="flashsale-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 42"><polygon class="cls-1" points="21.16 0 16.51 19.4 23.26 19.4 7.67 42 13.02 23.97 6.51 24.65 21.16 0"></polygon><path class="cls-1" d="M2.67,21.58A12.33,12.33,0,0,1,14.36,9.28L15.7,6.6l-.7,0A15,15,0,0,0,8.14,34.91l.75-2.63A12.33,12.33,0,0,1,2.67,21.58Z"></path><path class="cls-1" d="M20.81,7.76l-.66,2.63a12.31,12.31,0,0,1-4.66,23.49l-2.08,2.61c.52,0,1.05.09,1.59.09A15,15,0,0,0,20.81,7.76Z"></path></svg>
                    <span>Flash Sale</span>
                </h3>
                <span class="flashsale-time" id="js-count-down-flash-sale121">3 ngày 04:21:34</span>
                <a class="viewall-flashsale" href="https://chiaki.vn/flash-sale/flash-sale-obagi" title="FLASH SALE">
                    Xem tất cả
                </a>
            </div>
            <div class="flashsale-banner">
                <a class="flashsale-banner-link" href="#">
                    <img src="/images/flashsale.jpg" alt="">
                </a>
            </div>
            <div class="flashsale-list">
                <?php for ($i=1; $i < 21; $i++) { ?>
                    <div class="flashsale-item">
                        <a href="/san-pham?p<?= $i ?>" class="flashsale-image">
                            <img src="/images/products/<?= $i?>.jpg" alt="">
                        </a>
                        <div class="flashsale-info">
                            <h4 class="flashsale-title">
                                <a class="flashsale-title-link" href="/san-pham?p<?= $i ?>">LLorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</a>
                            </h4>
                            <div class="flashsale-price">
                                <span class="nPrice"> <?= $i + 1?>.290.000đ </span>
                                <del class="oPrice"> <?= $i + 1 ?>.690.000đ </del>
                            </div>
                            <div class="flashsale-progress">
                                <span class="flashsale-text">Đã bán <?= $i ?></span>
                                <div class="flashsale-value" style="width: <?= $i ?>%"></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
