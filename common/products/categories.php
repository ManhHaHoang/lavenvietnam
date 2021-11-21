<div class="category-area">
    <article class="category-top-nav flex-b align-c">
        <h1 class="category-title">
            Thiết bị chăm sóc sức khỏe
        </h1>
        <form class="category-sort flex-b align-c flex-e" action="<?= $url ?>" method="get">
            <button type="submit" name="sort" value="bestsale" class="button sort-item active desktop"> Mua nhiều </button>
            <button type="submit" name="sort" value="newest" class="button sort-item desktop"> Mới nhất </button>
            <button type="submit" name="sort" value="price-desc" class="button sort-item desktop"> Giá tăng dần </button>
            <button type="submit" name="sort" value="price-asc" class="button sort-item desktop"> Giá giảm dần </button>
            <span class="button sort-item filter-icon mobile"> Bộ lọc </span>
        </ desktop>
    </article>
    <?php if (key_exists('s', $_GET) && $_GET['s'] == true) { ?>
        <article class="filter-result-wrapper flex-b align-c">
            <button class="button filter-result flex-b align-c flex-c">
                <span>Navy</span>
                <small>×</small>
            </button>
            <a href="danh-muc" class="button sort-item delete-filter"> Xóa </a>
        </article>
    <?php } ?>
    <article class="list-child-category sub-category">
        <?php for ($i=1; $i < 9; $i++) { ?>
            <div class="sub-category-item">
                <a class="sub-category-image" href="?may-do-huyet-ap-c318">
                    <img src="/images/category/<?= $i ?>.jpg" alt="">
                </a>
                <h2 class="child-category">
                    <a class="child-category-link" href="?may-do-huyet-ap-c318">Danh mục con (53) </a>
                </h2>
            </div>
        <?php } ?>
    </article>
    <article class="list-product-item">
        <?php for ($i=1; $i < 17; $i++) {
            include 'common/products/product-item.php';
        } ?>
    </article>
    <article class="pagination-box">
        <div class="pagination flex-b align-c flex-c">
            <a class="disabled" href="#/">&laquo;</a>
            <a class="current" href="/page=1">1</a>
            <a href="?page=2">2</a>
            <a href="?page=3">3</a>
            <a href="?page=4">4</a>
            <a href="?page=5">5</a>
            <a href="/page=6">&raquo;</a>
        </div>
    </article>
    <article class="category-description">
        Thiết bị y tế Laven Việt Nam cung cấp các sản phẩm thiết bị y tế gia đình như máy đo huyết áp, máy đo đường huyết, cân sức khỏe, nhiệt kế chính hãng, Chất lượng Châu Âu
    </article>
</div>
