<div id="comment-box">
    <div class="detailbox-products-title">
        Đánh giá của khách hàng
    </div>
    <div class="detail-comment-rate-wrapper flex-b flex-s align-c flex-w">
        <div class="detail-comment-point flex-b align-c flex-c column">
            <span class="js-rating-value">
                4/5
            </span>
            <div class="rating-wrap flex-b align-c flex-s">
                <div class="rating-star-in-list star-on"></div>
                <div class="rating-star-in-list star-on"></div>
                <div class="rating-star-in-list star-on"></div>
                <div class="rating-star-in-list star-on"></div>
            </div>
        </div>
        <div class="detail-comment-bar">
            <?php for ($i=5; $i > 0 ; $i--) { ?>
                <div class="product-review-item flex-b align-c">
                    <div class="product-star flex-b align-c">
                        <?php for ($e=0; $e < 5 ; $e++) { ?>
                        <div class="rating-star-in-list star-on"></div>
                        <?php } ?>
                    </div>
                    <div class="product-bar">
                        <div class="product-result" style="width: calc(<?= $i?> * 18%)"></div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="detail-comment-action flex-b align-c column">
            <h4 class="detail-comment-action-title">Chia sẻ nhận xét về sản phẩm</h4>
            <button class="button primary js-customer-button">
                Đánh giá và nhận xét
            </button>
        </div>
    </div>
    <!-- comment form -->
    <div class="module-form-wrapper js-form-comment">
        <form id="moduleReviewForm" class="module-review-form-wrapper">
            <div class="module-rate-content flex-b align-c">
                <label class="overall-heading" for="">Chọn đánh giá của bạn</label>
                <div class="module-rate-box">
                    <input type="radio" value="1" name="rate">
                    <input type="radio" value="2" name="rate">
                    <input type="radio" value="3" name="rate">
                    <input type="radio" value="4" name="rate">
                    <input type="radio" value="5" name="rate">
                </div>
            </div>
            <label class="module-review-label">Viết nhận xét, đánh giá của bạn về sản phẩm<i>*</i></label>
            <div class="form-grid-layout">
                <div class="module-review-form-group">
                    <label class="module-review-form-label">Tiêu đề lời nhắn <i>*</i></label>
                    <input class="module-review-text form-control" autocomplete="off" type="text" name="title" placeholder="Tiêu đề lời nhắn" value="">
                    <small class="module-review-error-mess">Vui lòng nhập tiêu đề</small>
                </div>
                <div class="module-review-form-group">
                    <label class="module-review-form-label">Họ tên của quý khách<i>*</i></label>
                    <input class="module-review-text form-control" autocomplete="off" type="text" name="name" placeholder="Tên của quý khách" value="">
                    <small class="module-review-error-mess">Vui lòng nhập họ tên</small>
                </div>
                <div class="module-review-form-group">
                    <label class="module-review-form-label">Email của quý khách<i>*</i></label>
                    <input class="module-review-text form-control ng-valid-email" autocomplete="off" type="email" name="email" placeholder="john@example.com" value="">
                    <small class="module-review-error-mess">Vui lòng nhập email</small>
                </div>
                <div class="module-review-form-group">
                    <label class="module-review-form-label">Số điện thoại của quý khách</label>
                    <input class="module-review-text form-control ng-valid-email" autocomplete="off" type="text" name="phone" placeholder="Số điện thoại của quý khách" value="">
                    <small class="module-review-error-mess"></small>
                </div>
            </div>
            <div class="module-review-form-group">
                <label class="module-review-form-label">Nội dung <i>*</i></label>
                <textarea class="module-review-text form-control" autocomplete="off" row="10" placeholder="Nội dung"></textarea>
                <small class="module-review-error-mess">Vui lòng nhập nội dung</small>
            </div>
            <div class="module-review-action-wrapper flex-b align-c">
                <label class="module-review-file-selector flex-b align-c" for="selectImages">
                    <div class="button dark" id="selectImagesButton">
                        <span class="is-mobile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                                <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"></path>
                                <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"></path>
                            </svg>
                        </span>
                        <span class="is-desktop">
                            Chọn ảnh
                        </span>
                    </div>
                    <div class="select-images-note">Thêm tối đa 5 ảnh</div>
                    <input onchange="angular.element(this).scope().fileNameChanged()" onclick="this.value = null;" accept="image/*" id="selectImages" multiple="" style="display: none" type="file">
                </label>
                <div class="image-contrainer">
                </div>
                <button class="button primary action-btn" style="margin-left: auto; margin-right: 8px;">
                    Gửi
                </button>
                <span class="button light action-btn action-cancel">
                    Hủy
                </span>
            </div>
        </form>
        <ul class="module-review-list">
        <?php for ($i=0; $i < 5; $i++) { ?>
            <li class="module-review-item flex-b">
                <div class="module-review-avatar">
                    <span>
                        H
                    </span>
                </div>
                <div class="module-review-content-wrapper">
                    <div class="product-star flex-b align-c">
                        <?php for ($e=0; $e < 5 ; $e++) { ?>
                        <div class="rating-star-in-list star-on"></div>
                        <?php } ?>
                    </div>
                    <div class="module-review-item-top ng-binding">
                        <span class="module-review-by">
                            Viết bởi
                        </span>
                        Hà Minh Hoàng
                        <span class="module-review-time ng-binding">
                            vào 11:45, Ngày 20/11/2021
                        </span>
                    </div>
                    <div class="module-review-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>

                    <div class="module-review-images">
                        <?php for ($e=0; $e < 5 ; $e++) { ?>
                            <span>
                                <picture>
                                    <source media="(min-width: 320px)" srcset="/images/products/tn<?= $e?>.jpg">
                                    <img class="module-review-img" src="/images/blank.gif" alt="" loading="lazy" width="90" height="90">
                                </picture>
                            </span>
                        <?php } ?>
                    </div>

                    <div class="module-review-content-action-wrapper">
                        <span class="js-reply-comment flex-b align-c">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply" viewBox="0 0 16 16">
                                <path d="M6.598 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L7.3 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L2.614 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.499.499 0 0 0 .042-.028l3.984-2.933zM7.8 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z"/>
                            </svg>
                            Trả lời
                        </span>
                        <form class="review-module-form-reply">
                            <div class="form-grid-layout">
                                <div class="module-review-form-group">
                                    <label class="module-review-form-label">Email của quý khách<i>*</i></label>
                                    <input class="form-control review-reply review-reply-email" autocomplete="off" type="email" placeholder="Email" value="">
                                </div>
                                <div class="module-review-form-group">
                                    <label class="module-review-form-label">Họ và tên của quý khách<i>*</i></label>
                                    <input class="form-control review-reply review-reply-fullname" autocomplete="off" type="text" placeholder="Name" value="">
                                </div>
                            </div>
                            <div class="module-review-form-group">
                                <label class="module-review-form-label">Nội dung<i>*</i></label>
                                <textarea class="form-control review-reply review-reply-content" rows="3" style="margin-bottom: 5px" placeholder="Content"></textarea>
                            </div>
                            <button class="button primary">
                                Trả lời
                            </button>
                        </form>
                    </div>
                </div>
            </li>
        <?php } ?>
        </ul>
        <div class="viewmore-content flex-b align-c flex-c">
            <button class="js-viewmore-btn button">
                <span class="viewmore-text">Xem thêm</span>
                <span class="loading-icon"></span>
            </button>
        </div>
    </div>
</div>
