<title>Trang tài khoản</title>
<?php include 'layout/head.php' ?>
<link rel="stylesheet" href="/assets/css/auth.css">
<main class="site-main">
    <div class="site-w">
        <div class="site-w">
            <div class="main-body">
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
                <!-- /Breadcrumb -->

                <div class="account-wrapper flex-b align-s">
                    <div class="account-sidebar">
                        <div class="account-body">
                            <div class="flex-b column align-c flex-c txt-center">
                                <img class="account-avatar" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" width="150">
                                <div class="mt-3">
                                    <h4>John Doe</h4>
                                    <div class="text-secondary mb-1">Full Stack Developer</div>
                                    <small class="text-muted font-size-sm">Bay Area, San Francisco, CA</small>
                                </div>
                            </div>
                        </div>
                        <div class="account-list-action flex-b column">
                                <a class="action-item" href="/tai-khoan/don-hang?status=tat-ca">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
                                    </svg>
                                    <span>Đơn hàng của tôi</span>
                                </a>
                                <a class="action-item" href="/tai-khoan/dia-chi">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"></path>
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                    </svg>
                                    <span>Sổ địa chỉ</span>
                                </a>
                                <a class="action-item" href="#tin-khuyen-mai-su-kien">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightning" viewBox="0 0 16 16">
                                        <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5zM6.374 1 4.168 8.5H7.5a.5.5 0 0 1 .478.647L6.78 13.04 11.478 7H8a.5.5 0 0 1-.474-.658L9.306 1H6.374z"></path>
                                    </svg>
                                    <span>Tin khuyến mại</span>
                                </a>
                                <a class="action-item" href="/san-pham-da-xem" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                        <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"></path>
                                        <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"></path>
                                    </svg>
                                    <span>Sản phẩm đã xem</span>
                                </a>
                                <a class="action-item" href="/tai-khoan/danh-gia">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
                                    </svg>
                                    <span>Đánh giá của tôi</span>
                                </a>

                                <a class="action-item" href="/tai-khoan/doi-mat-khau">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                                        <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"></path>
                                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                    </svg>
                                    <span>Thay đổi mật khẩu</span>
                                </a>
                                <a class="action-item" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                                        <path d="M7.5 1v7h1V1h-1z"></path>
                                        <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"></path>
                                    </svg>
                                    <span>Đăng xuất tài khoản</span>
                                </a>
                            </div>
                    </div>
                    <div class="account-content">
                        <div class="account-body">
                            <div class="card-body">
                                <div class="account-row">
                                    <h6 class="account-content-heading">Họ và tên</h6>
                                    <div class="account-content-txt">
                                        Kenneth Valdez
                                    </div>
                                </div>

                                <div class="account-row">
                                    <h6 class="account-content-heading">Email</h6>
                                    <div class="account-content-txt">
                                        fip@jukmuh.al
                                    </div>
                                </div>

                                <div class="account-row">
                                    <h6 class="account-content-heading">Điện thoại</h6>
                                    <div class="account-content-txt">
                                        (320) 380-4539
                                    </div>
                                </div>
                                <div class="account-row">
                                    <h6 class="account-content-heading">Giới tính</h6>
                                    <div class="account-content-txt">
                                        Chưa xác định
                                    </div>
                                </div>

                                <div class="account-row">
                                    <h6 class="account-content-heading">Địa chỉ</h6>
                                    <div class="account-content-txt">
                                        Bay Area, San Francisco, CA
                                    </div>
                                </div>

                                <div class="account-row">
                                    <a class="button primary " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">
                                        Sửa thông tin
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'layout/footer.php';?>
<script src="/assets/js/account.js" charset="utf-8"></script>
