<title>Đăng Nhập</title>
<?php include 'layout/head.php' ?>
<link rel="stylesheet" href="/assets/css/account.css">
<section class="account-wrapper">
    <div class="site-w">
        <div class="breadcrumb-box">
            <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/" itemprop="item">
                        <span itemprop="name">Trang chủ</span>
                    </a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <span itemprop="name">Tài khoản</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="site-w">
        <div class="account-area flex-b align-s">
            <aside class="account-sidebar">
                <?php include 'common/user-sidebar.php'; ?>
            </aside>

            <main class="account-main-content order-page-wrapper">
                <div class="content-wrapper">
                    <div class="box-user-title">
                        Thông tin đơn hàng
                    </div>
                    <?php
                    $tabList = [
                        "Tất cả" => ["Tất cả", "tat-ca"],
                        "Chờ xác nhận" => ["Chờ xác nhận", "cho-xac-nhan"],
                        "Chờ lấy hàng" => ["Chờ lấy nhận", "cho-lay-hang"],
                        "Đang giao hàng" => ["Đang giao hàng", "dang-giao-hang"],
                        "Thành công" => ["Chờ xác nhận", "thanh-cong"],
                        "Hủy" => ["Hủy", "huy"],
                    ];
                    $getStatus = isset($_GET['status']) ? $_GET['status'] : '';
                    ?>

                    <div class="user-list-tab flex-b align-c flex-s">
                        <?php foreach ($tabList as $key => $value) { ?>
                            <a class="user-tab-item {{ $getStatus == $value[1] ? 'active' : '' }}" href="/tai-khoan/don-hang?status={{ $value[1]}}">
                                <?= $key ?>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="box-user-info">
                        <?php
                        $k = 0;
                        ?>
                        <?php foreach ($tabList as $key => $value) { ?>
                            <?php if ($value[1] !== 'tat-ca') { ?>
                                <?php $k++; ?>
                                <div class="order-user-item" type="<?=$value[1] ?>">
                                    <a class="flex-b" href="#">
                                        <div class="order-product-images">
                                            <img src="/images/products/<?= $k ?>.jpg" alt="" width="100" height="100">
                                        </div>
                                        <div class="order-product-info flex-b flex-s">
                                            <div class="">
                                                <div class="order-product-title">Box ổ cứng 2.5'' Orico 2577U3 / 2139U3 / 2020U3 Sata 3.0 - Dùng cho HDD, SSD - SP Chính hãng bảo hành 12 tháng!</div>
                                                <div class="flex-b column">
                                                    <div class="order-product-variant">Phân loại hàng: Orico 2521u3</div>
                                                    <div class="order-product-quan">x1</div>
                                                </div>
                                            </div>
                                            <div class="order-product-price flex-b align-c">
                                                <del class="hight-price">
                                                    110.000₫
                                                </del>
                                                <div class="sale-price">
                                                    89.000₫
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="order-user-footer flex-b align-c flex-e">
                                        <span>Sản phẩm không nhận được đánh giá</span>
                                        <span>Đơn hủy vì không liên hệ được với khách</span>
                                        <div class="order-status button secondary">Mua lại</div>
                                        <div class="order-status button status-button"><?= $key ?></div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </main>
        </div>
    </div>

</section>
<?php include 'layout/footer.php';?>
<script src="/assets/js/account.js" charset="utf-8"></script>
