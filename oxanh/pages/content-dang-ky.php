<div class="auth-page-login auth-page-style2">

    <div class="d-block d-lg-flex">
        <div class="w-50 auth-style2-wrapper">
            <div class="auth-content d-flex flex-column justify-content-center my-3 my-lg-5">
                <div>
                    <div class="text-center">
                        <a href="<?php echo esc_url(home_url('/oxanh/trang-chu/')); ?>">
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/img/logo/logo-text.png" alt="Logo" width="180px">
                        </a>
                    </div>
                    <div class="text-center mt-2 mb-5">
                        <h3 class="auth-title">ĐĂNG KÝ TÀI KHOẢN</h3>
                    </div>
                    <form action="dong-y-chinh-sach2.php">

                        <div class="auth-heading">
                            <h4>
                                <i class="fad fa-user me-2 main-color fz-24"></i>
                                <span>Thông tin cá nhân</span>
                            </h4>
                            <div class="line"></div>
                        </div>

                        <div>
                            <div class="form-group">
                                <label for="" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Email</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Ngày Sinh</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control form-control input-date datepicker" placeholder="dd/mm/yyyy">
                                            <i class="fad fa-calendar-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Giới tính</label>
                                        <select class="form-select" select2>
                                            <option value="">Chọn giới tính</option>
                                            <option value="1">Nam</option>
                                            <option value="2">Nữ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label for="" class="form-label">Tỉnh/Thành phố</label>
                            <select class="form-select" select2>
                                <option value="">Chọn tỉnh/thành phố</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Quận/Huyện</label>
                            <select class="form-select" select2>
                                <option value="">Chọn quận/huyện</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Phường/Xã</label>
                            <select class="form-select" select2>
                                <option value="">Chọn phường/xã</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Ghi chú địa chỉ</label>
                            <input type="text" class="form-control">
                        </div> -->
                            <div class="form-group">
                                <label for="" class="form-label">Điện thoại</label>
                                <input type="text" class="form-control input-phone">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">CMTND/CCCD/Mã định danh</label>
                                <input type="text" class="form-control">
                            </div>

                        </div>

                        <div>
                            <div class="auth-heading">
                                <h4>
                                    <i class="fad fa-shield-keyhole me-2 main-color fz-24"></i>
                                    <span>Thông tin đăng nhập</span>
                                </h4>
                                <div class="line"></div>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Tên đăng nhập</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Mật khẩu</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Nhập lại mật khẩu</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="mt-5">
                            <button class="btn w-100 ci-btn ci-bg-sub-color " type="submit">Đăng ký</button>
                        </div>

                        <div class="mt-5 text-center">
                            Quý khách đã có tài khoản <a href="<?php echo esc_url(home_url('/oxanh/dang-nhap/')); ?>">Đăng nhập</a>
                        </div>

                    </form>
                </div>
            </div>
            <div class="auth-footer">
                <div class="container-fluid">
                    <div class="d-block d-xl-flex align-items-center justify-content-between flex-column">
                        <ul class="auth-footer-link list-unstyled my-4 my-xl-0">
                            <li>
                                <a href="">
                                    <i class="fal fa-headset fz-18 me-3"></i>
                                    <span>Liên hệ hỗ trợ</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fal fa-circle-question fz-18 me-3"></i>
                                    <span>Câu hỏi thường gặp</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fal fa-user-shield fz-18 me-3"></i>
                                    <span>Miễn trừ trách nhiệm</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fal fa-shield-check fz-18 me-3"></i>
                                    <span>Chính sách bảo mật</span>
                                </a>
                            </li>
                        </ul>
                        <p class="mb-0 mt-2">© 2022 Bản quyền thuộc về Công ty Cổ phần Công nghệ Internet Ô Xanh</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-50 position-relative d-none d-lg-block main-overlay">
            <div class="bg-overlay"></div>
            <img class="auth-img img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/img/auth/reg.jpg" alt="Register">
        </div>
    </div>


</div>