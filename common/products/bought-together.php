
<div class="md-bought-together-wrapper">
    <div class="bought-together-list-item flex-b align-s flex-s">
        <div class="bought-together-item">
            <?php include 'product-item.php'; ?>
        </div>
        <div class="bought-together-plus">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" stroke="currentColor" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
            </svg>
        </div>
        <div class="bought-together-other-product">
            <?php for ($i=0; $i < 4; $i++) { ?>
                    <label class="checkbox-label bought-together-item" for="together-other-<?= $i?>">
                        <input class="checkbox-input" id="together-other-<?= $i?>" type="checkbox" name="together-other" checked>
                        <small class="input-type-checkbox"></small>
                        <?php include 'product-item.php'; ?>
                    </label>
            <?php } ?>
        </div>
    </div>
    <div class="md-bought-together-footer">
        <div class="bought-together-action">
            <div class="bought-together-price">
                <span class="footer-text">Giá</span>
                <span class="bought-together-saleprice">
                    $115.95
                </span>
            </div>
            <div class="bought-together-price">
                <span class="footer-text">Tiết kiệm</span>
                <span class="bought-together-saleprice">
                    $15.00
                </span>
            </div>
        </div>
        <div class="bought-together-button">
            <a class="bought-together-btn" href="#">
                Thêm tất cả vào giỏ hàng
            </a>
        </div>
    </div>
</div>
