<div class="product-item">
    <a href="/san-pham?p<?= mt_rand(1, 20) ?>" class="product-image">
        <img src="/images/products/<?= mt_rand(1, 20) ?>.jpg" alt="" loading="lazy">
    </a>
    <div class="product-info">
        <a class="feature-brand" href="#/feature-brand">
            feature brand
        </a>
        <h4 class="product-title">
            <a class="product-title-link" href="/san-pham?p<?= mt_rand(1, 20) ?>">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockup</a>
        </h4>
        <div class="product-action flex-b align-s flex-s">
            <div class="product-detail">
                <div class="product-price">
                    <span class="nPrice"> <?= $i + 1?>9.290.000đ </span>
                    <del class="oPrice"> <?= $i + 1 ?>9.690.000đ </del>
                </div>
                <div class="rating-wrap flex-b align-c">
                    <div class="rating-star-in-list"></div>
                    <div class="rating-star-in-list"></div>
                    <div class="rating-star-in-list"></div>
                    <div class="rating-star-in-list"></div>
                    <div class="rating-star-in-list"></div>
                    <small class="rating-count">(<?= mt_rand(1, 20) ?>)</small>
                </div>
            </div>
            <span class="icon-addtocart news-add-to-cart js-news-add-to-cart" rel="nofollow" tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg" rel="nofollow" width="16" height="16" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"></path> <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"></path> </svg> </span>
        </div>
    </div>
</div>
