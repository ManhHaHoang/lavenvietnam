<title>Chi tiết sản phẩm</title>
<?php include 'layout/head.php' ?>
<link rel="stylesheet" href="/assets/css/magiczoomplus.css?v=<?= $ver ?>">
<link rel="stylesheet" href="/assets/css/products.css?v=<?= $ver ?>">
<link rel="stylesheet" href="/assets/css/bought-together.css?v=<?= $ver ?>">
<link rel="stylesheet" href="/assets/css/comment.css?v=<?= $ver ?>">
<main class="site-main">
    <div class=" site-w">
        <div class="breadcrumb-box">
            <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/" itemprop="item">
                        <span itemprop="name">Trang chủ</span>
                    </a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/danh-muc" itemprop="item"><span itemprop="name">Thiết bị chăm sóc sức khỏe</span></a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/danh-muc?Massage" itemprop="item"><span itemprop="name">Massage</span></a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <span itemprop="name">Ghế Massage Toàn Thân 4D Cao Cấp Maxxspeed ES30</span>
                </li>
            </ul>
        </div>
    </div>
    <section id="js-products">
        <div class="site-w">
            <?php include 'common/products/product-page-top.php'; ?>
        </div>
        <div class="similar-products-wrapper site-w">
            <div class="similar-products-title">
                Sản phẩm tương tự
            </div>
            <div class="similar-products-list">
                <?php for ($i=1; $i < 17; $i++) {
                    include 'common/products/product-item.php';
                } ?>
            </div>
        </div>
        <div class="similar-products-wrapper site-w">
            <div class="similar-products-title">
                Sản phẩm thường mua cùng
            </div>
            <?php include 'common/products/bought-together.php'; ?>
        </div>
        <div class="site-w">
            <?php include 'common/products/product-page-bottom.php'; ?>
        </div>
    </section>
</main>
<script type="text/javascript" src="/assets/js/magiczoomplus.js"></script>
<script type="text/javascript" src="/assets/js/products.js"></script>
<?php include 'layout/footer.php';?>
