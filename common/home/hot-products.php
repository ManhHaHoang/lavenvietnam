<?php
$hotItem = [
    ["Thiết bị y tế thông minh"],
    ["Máy đo huyết áp"],
    ["Máy đo đường huyết"],
    ["Máy xông mũi họng"],
    ["Nhiệt kế"],
    ["Cân sức khỏe"],
    ["Xe lăn"],
    ["Máy massage"],
    ["Thiết bị vật lý trị liệu"],
    ["Chăm sóc răng, mũi"],
    ["Vật tư tiêu hao, dụng cụ y khoa"],
    ["Máy tạo nước khử khuẩn"]
]
?>
<div class="hot-products-wrapper">
    <div class="site-w">
        <div class="suggestion">Sản phẩm nổi bật</div>
        <div class="hot-products-list">
            <?php foreach ($hotItem as $value) { ?>
                <div class="hot-product-item">
                    <a class="hot-product-link" href="#/"><?= $value[0] ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
