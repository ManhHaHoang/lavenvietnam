<div id="qa-box">
    <div class="detailbox-products-title">
        Hỏi đáp về sản phẩm
    </div>
    <div class="qa-wrapper">
        <form class="post-question" id="question-box-form">
            <div class="module-review-form-group">
                <textarea class="form-control" rel="0" placeholder="Câu hỏi của bạn"></textarea>
                <small class="module-review-error-mess">Vui lòng nhập câu hỏi</small>
            </div>
            <div class="form-grid-layout">
                <div class="module-review-form-group">
                    <input class="module-review-text form-control" type="text" name="name" placeholder="Tên bạn" value="">
                    <small class="module-review-error-mess">Vui lòng nhập họ tên</small>
                </div>
                <div class="module-review-form-group">
                    <input class="module-review-text form-control" autocomplete="off" type="text" placeholder="Số điện thoại của bạn" value="">
                    <small class="module-review-error-mess">Vui lòng nhập SĐT của bạn</small>
                </div>
            </div>
            <div class="module-review-form-group">
                <input class="module-review-text form-control"  type="text" name="email" placeholder="Email của bạn" value="">
                <small class="module-review-error-mess">Nhập nếu bạn muốn nhận thông báo phản hồi qua email</small>
            </div>
            <div class="comment-button flex-b flex-e align-c">
                <button class="button primary" style="margin-right: 10px">Thêm câu hỏi</button>
                <button class="button">Hủy</button>
            </div>
        </form>
        <div id="search-qa" class="flex-b align-s">
            <input type="text"  autocomplete="off" name="s" class="form-control" placeholder="Tìm kiếm hàng nghìn Sản phẩm, Thương hiệu ...">
            <input type="button" id="searchButton" value="Tìm kiếm" class="btn-search button">
            <span class="loading-icon"></span>
        </div>
        <qa-list>
            <qa-item class="flex-b align-s">
                <div class="qa-list">
                    <div class="question-detail flex-b align-s">
                        <div class="qa-ava"> Hỏi: </div>
                        <div class="qa-text qa-text-link">
                            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            <small class="post-signature">Bởi: huỳnh thị tuyết nhung vào 11:14, 03/10/2018 </small>
                        </div>
                    </div>
                    <div class="question-answer flex-b align-s">
                        <div class="qa-ava"> Đáp: </div>
                        <div class="qa-text">
                            <list-answer class="list-answer">
                                <answer class="">
                                    <div>Dạ ko chi nhé</div>
                                    <small class="post-signature">Bởi: lavenvietnam.vn vào 13:20, 03/10/2018 </small>
                                </answer>
                            </list-answer>
                            <div class="showthread">
                                <button class="button js-qa-button">
                                    Thảo luận
                                </button>
                                <form class="qa-module-form-reply">
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
                    </div>
                </div>
            </qa-item>
        </qa-list>
    </div>
</div>
