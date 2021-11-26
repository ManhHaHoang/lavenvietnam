<?php
$menuItems = [
    ["#/san-pham.php", "Sản phẩm bán chạy"],
    ["#/thuc-pham-chuc-nang-c56", "Thực phẩm chức năng"],
    ["#/do-the-thao-du-lich-c254", "Đồ thể thao du lịch"],
    ["#/thiet-bi-cham-soc-suc-khoe-c316", "Thiết bị chăm sóc sức khỏe"],
    ["#/thiet-bi-phu-kien-so-c814", "Thiết bị - phụ kiện số"],
    ["#/nha-cua-doi-song-c855", "Nhà cửa đời sống"],
];
?>
<section id="home-list-category">
    <div class="site-w">
        <?php foreach ($menuItems as $value) { ?>
            <div class="tab-products-list-wrapper">
                <div class="tab-products-list-header flex-b align-s">
                    <h2 class="tab-home-category-title">
                        <a href="<?= $value[0]?>">
                            <?= $value[1]?>
                        </a>
                    </h2>
                    <div class="tab-products-action flex-b align-s">
                        <span class="tab-action-item active" data-name="bestsale">
                            Bán chạy
                        </span>
                        <span class="tab-action-item" data-name="newest">
                            Mới nhất
                        </span>
                        <span class="tab-action-item" data-name="bestprice">
                            Giá tốt
                        </span>
                        <a class="tab-action-item tab-hot-category-item mobile" href="#/may-do-huyet-ap-c318">Máy đo huyết áp</a>
                        <a class="tab-action-item tab-hot-category-item mobile" href="#/can-suc-khoe-c326">Cân sức khỏe</a>
                        <a class="tab-action-item tab-hot-category-item mobile" href="#/may-tam-nuoc-c578">Máy tăm nước</a>
                    </div>
                    <div class="tab-hot-category flex-b align-c flex-e">
                        <a class="tab-hot-category-item desktop" target="_blank" href="#/may-do-huyet-ap-c318">Máy đo huyết áp</a>
                        <a class="tab-hot-category-item desktop" target="_blank" href="#/can-suc-khoe-c326">Cân sức khỏe</a>
                        <a class="tab-hot-category-item desktop" target="_blank" href="#/may-tam-nuoc-c578">Máy tăm nước</a>
                        <a class="tab-hot-category-item" target="_blank" href="#/thiet-bi-cham-soc-suc-khoe-c316">
                            Xem tất cả <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="tab-hot-category-item-all" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <?php for ($e=0; $e < 3; $e++) { ?>
                    <div data-id="<?php if ($e == 0) {  echo 'bestsale';} elseif ($e == 1) { echo 'newest'; } else { echo 'bestprice'; } ?>" class="tab-products-list-box <?php if ($e == 0) { echo 'active'; } ?>">
                        <?php for ($i=1; $i < 17; $i++) {
                            include 'common/products/product-item.php';
                        } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

    </div>
</section>
