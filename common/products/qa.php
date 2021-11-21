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
                <div class="vote-box">
                    <div class="upvote-box flex-b align-c flex-c column" rel="87833">
                        <span class="upvote">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                            </svg>
                        </span>
                        <span class="count">
                            <count>7</count>
                            <small>Votes</small>
                        </span>
                        <span class="downvote">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                            </svg>
                        </span>
                    </div>
                </div>
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
                                <button class="button">
                                    Thảo luận
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </qa-item>
        </qa-list>
    </div>
</div>
