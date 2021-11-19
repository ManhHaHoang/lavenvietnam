<title>Trang danh mục</title>
<?php include 'layout/head.php' ?>
<link rel="stylesheet" href="/assets/css/category.css">
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
                    <a href="/dell" itemprop="item"><span itemprop="name">Tên danh mục cha</span></a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <span itemprop="name">Tên danh mục</span>
                </li>
            </ul>
        </div>
    </div>
    <section id="js-category">
        <div class="site-w">
            <div class="category-wrapper flex-b align-s">
                <?php include 'common/products/sidebar.php'; ?>
                <?php include 'common/products/categories.php'; ?>
            </div>
        </div>
    </section>
</main>
<?php include 'layout/footer.php';?>
