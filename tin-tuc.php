<title>Trang tin tức</title>
<?php include 'layout/head.php' ?>
<link rel="stylesheet" href="/assets/css/news.css">
<?php
$slider = [
    ["chi-tiet", "Bí quyết chăm sóc răng miệng của Chloe Nguyễn bằng Máy tăm nước Panasonic EW1511", ""]
]
?>
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
                    <span itemprop="name">Tin tức</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="shortcut-category">
        <div class="submenu-children site-w flex-b align-c flex-s">
            <h2 class="menu-item-main"> <a class="child-link" href="/tin-tuc"> Mới nhất </a> </h2>
            <h2 class="menu-item-main"> <a class="child-link" href="/tin-tuc?suc-khoe" title="Sức Khỏe"> Sức Khỏe </a> </h2>
            <h2 class="menu-item-main"> <a class="child-link" href="/tin-tuc?dinh-duong" title="Dinh Dưỡng"> Dinh Dưỡng </a> </h2>
            <h2 class="menu-item-main"> <a class="child-link" href="/tin-tuc?me-va-be" title="Mẹ và bé"> Mẹ và bé </a> </h2>
            <h2 class="menu-item-main"> <a class="child-link" href="/tin-tuc?lam-dep" title="Làm đẹp"> Làm đẹp </a> </h2>
            <h2 class="menu-item-main"> <a class="child-link" href="/tin-tuc?dong-ho-chinh-hang" title="Đồng Hồ"> Đồng Hồ </a> </h2>
            <h2 class="menu-item-main"> <a class="child-link" href="/tin-tuc?the-thao" title="Thể Thao"> Thể Thao </a> </h2>
            <h2 class="menu-item-main"> <a class="child-link" href="/tin-tuc?thoi-trang" title="Thời Trang"> Thời Trang </a> </h2>
            <h2 class="menu-item-main"> <a class="child-link" href="/tin-tuc?do-gia-dung" title="Đồ Gia Dụng"> Đồ Gia Dụng </a> </h2>
            <h2 class="menu-item-main"> <a class="child-link" href="/tin-tuc?cham-soc-thu-cung" title="Chăm Sóc Thú Cưng "> Chăm Sóc Thú Cưng  </a> </h2>
            <h2 class="menu-item-main"> <a class="child-link" href="/tin-tuc?tong-hop" title="Tổng hợp"> Tổng hợp </a> </h2>
            <h2 class="menu-item-main"> <a class="child-link" href="/tin-tuc?danh-gia" title="Đánh Giá"> Đánh Giá </a> </h2>
            <h2 class="menu-item-main"> <a class="child-link" href="/tin-tuc?ve-chung-toi" title="Về chúng tôi"> Về chúng tôi </a> </h2>
        </div>
    </div>
    <div class="site-w">
        <section class="news-content-wrap flex-b align-s">
            <article class="news-page">
                <div class="blogpage-newslist flex-b align-s">
                    <div class="news-slider">
                        <div class="blogpage-slider">
                            <?php for ($i=0; $i < 5; $i++) { ?>
                                <div class="item">
                                    <a href="/chi-tiet?chinh-sach-bao-mat">
                                        <div class="latest-image-box">
                                            <img class="latest-image" src="/images/news/a<?= $i?>.jpg">
                                        </div>
                                        <h3 class="latest-title">Vero eripuit cu mei. Mei no debet voluptua pertinacia, at paulo aliquid has. Meis dicunt moderatius mel ea, civibus ancillae sea at.</h3>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="news-list">
                        <?php for ($i=0; $i < 5; $i++) { ?>
                            <div class="news-list-item <?php if ($i == 0) { echo "newslist-feature"; } ?>">
                                <a href="/tin-tuc?thuc-pham-chuc-nang-cua-my">
                                    <?php if ($i == 0) { ?>
                                        <img class="latest-image" src="/images/news/<?= $i?>.jpg">
                                    <?php } ?>
                                    <h3 class="news-list-heading">
                                        Magna graeci legimus eu eos, qui ne libris verterem
                                    </h3>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="blogpage-list-other-news">
                    <?php for ($i=0; $i < 10; $i++) { ?>
                        <div class="other-news-item flex-b">
                            <a class="post-image" href="#" title="">
                                <img src="/images/news/<?= $i ?>.jpg" alt="">
                            </a>
                            <div class="post-content">
                                <h3 class="headline">
                                    <a href="chi-tiet?sua-rua-mat-cho-da-kho" title="">
                                        TOP 9 sữa rửa mặt cho da khô dưỡng ẩm hiệu quả nhất 2021
                                    </a>
                                </h3>
                                <div class="description"> Nếu bạn vẫn đang băn khoăn không biết nên chọn sữa rửa mặt nào phù hợp với làn da khô của mình thì đừng bỏ TOP 9 sữa rửa mặt cho da khô với khả năng dưỡng ẩm cực cao dưới đây. </div>
                                <div class="timepost">
                                    <time datetime="2021-06-22 17:32:11">22/06/2021</time>
                                    <a class="namecate" href="/tin-tuc/lam-dep" title="Làm đẹp"> Làm đẹp </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </article>
            <aside class="news-sidebar">
                <?php include 'common/news/news.sidebar.php'; ?>
            </aside>
        </section>
    </div>
</main>
<script>
    $(document).ready(function () {
        $('.blogpage-slider').slick({
            arrows: false,
            dots: true,
            infinite: false,
            autoplay: false,
            autoplaySpeed: 5000,
            speed: 1000,
            responsive: [
                {
                    breakpoint: 990,
                    settings: {
                        arrows: true,
                        dots: false,
                    }
                }
            ]
        });
    });
</script>
<?php include 'layout/footer.php';?>
