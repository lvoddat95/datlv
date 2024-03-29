<div class="ci-breadcrumb-link bg-silver2 d-flex">
    <div class="container">
        <ul class="list-unstyled">
            <li class="home"><a href="<?php echo esc_url(home_url('/oxanh/trang-chu/')); ?>">Trang chủ</a></li>
            <li><a href="#">Quản lý đơn hàng</a></li>
        </ul>
    </div>
</div>

<div class="pt-0 bg-grey overflow-visible">
    <div class="ci-block">
        <div class="container">
            <div class="ci-block-aside pb-5">
                <aside class="ci-aside mb-3">
                    <aside class="ci-aside mb-3">
                        <div class="ci-user-box">
                            <svg class="ci-menu-user-icon" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>

                            <div class="info">
                                <span class="fz-12">Tài khoản của</span>
                                <span class="fz-16 fw-medium d-block">Lê Viết Đạt</span>
                            </div>
                        </div>
                        <div class="ci-user-box">
                            <div class="info">
                                <p class="mb-0">
                                    <i class="fa fa-users blue"></i>
                                    Mã tham gia thành viên: <b class="text-uppercase">sqLu53</b>
                                </p>
                            </div>
                        </div>
                        <div class="ci-account-download">
                            <a href="/Data/upload/files/User/Quy ước thành viên  FN.pdf" target="_blank"
                                class="ci-docs__link">
                                <i class="fas fa-arrow-down-to-bracket me-2"></i>
                                <span>Quy ước thành viên</span>
                            </a>
                            <a href="/Data/upload/files/User/Điều khoản FN.pdf" target="_blank" class="ci-docs__link">
                                <i class="fas fa-arrow-down-to-bracket me-2"></i>
                                <span>Điều khoản</span>
                            </a>
                        </div>
                    </aside>
                    <ul class="account-menu-list">
                        <li class="item ">
                            <a href="<?php echo esc_url(home_url('/oxanh/')); ?>tai-khoan/"
                                title="Thông tin tài khoản">
                                <i class="fa fa-user fa-fw"></i>Thông tin tài khoản
                            </a>
                        </li>

                        <!-- <li class="item ">
                                    <a href="<?php echo esc_url(home_url('/oxanh/')); ?>san-pham-quan-tam/" title="Sản phẩm đang quan tâm">
                                        <i class="fa fa-inbox fa-fw"></i>Sản phẩm đang quan tâm
                                    </a>
                                </li>

                                <li class="item ">
                                    <a href="<?php echo esc_url(home_url('/oxanh/')); ?>ma-giam-gia/" title="Mã giảm giá">
                                        <i class="fa fa-gift fa-fw"></i>Mã giảm giá
                                    </a>
                                </li> -->

                        <li class="item active">
                            <a href="<?php echo esc_url(home_url('/oxanh/')); ?>quan-ly-don-hang/"
                                title="Quản lý đơn hàng">
                                <i class="fa fa-box-circle-check fa-fw"></i>Quản lý đơn hàng
                            </a>
                        </li>

                        <li class="item ">
                            <a href="<?php echo esc_url(home_url('/oxanh/')); ?>quan-ly-thong-bao/"
                                title="Quản lý thông báo">
                                <i class="fa fa-bell fa-fw"></i>Quản lý thông báo
                            </a>
                        </li>

                        <li class="item ">
                            <a href="<?php echo esc_url(home_url('/oxanh/')); ?>doi-mat-khau/"
                                title="Thay đổi mật khẩu">
                                <i class="fa fa-lock-keyhole fa-fw"></i>Thay đổi mật khẩu
                            </a>
                        </li>
                    </ul>
                </aside>

                <main class="ci-main">
                    <h2 class="fz-20 fw-normal mb-4">Quản lý đơn hàng</h2>
                    <div class="bg-white px-4 py-4 radius-8">
                        <div class="row fz-14">
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-group">
                                    <span class="fw-medium">
                                        Từ ngày
                                    </span>
                                    <div class="position-relative">
                                        <input type="text" class="form-control form-control input-date datepicker"
                                            placeholder="dd/mm/yyyy" id="">
                                        <i class="fad fa-calendar-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-group">
                                    <span class="fw-medium">
                                        Đến ngày
                                    </span>
                                    <div class="position-relative">
                                        <input type="text" class="form-control form-control input-date datepicker"
                                            placeholder="dd/mm/yyyy" id="">
                                        <i class="fad fa-calendar-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <divp class="form-group">
                                    <span class="fw-medium">
                                        Trạng thái
                                    </span>
                                    <select name="Status" class="form-control" select2>
                                        <option value="0">Tất cả</option>
                                        <option value="11977">Chờ xác nhận</option>
                                        <option value="11978">Đã xác nhận</option>
                                        <option value="11981">Thành công</option>
                                        <option value="11982">Hủy</option>
                                    </select>
                                </divp>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-group">
                                    <label class="l-contact w100p">
                                        &nbsp;
                                    </label>
                                    <button class="btn border-ccc fw-medium fz-14"
                                        onclick="document.filter_form.submit();">
                                        <i class="far fa-search me-2"></i>Tìm kiếm</button>
                                </div>
                            </div>
                        </div>

                        <div class="sp-table">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Mã đơn hàng</th>
                                            <th>Ngày mua</th>
                                            <th>Sản phẩm</th>
                                            <th>Tổng tiền</th>
                                            <th>Trạng thái đơn hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>BHCA.0231938</td>
                                            <td>29/02/2022</td>
                                            <td>Gói Care 400</td>
                                            <td>445,000</td>
                                            <td>Thành công</td>
                                        </tr>
                                        <tr>
                                            <td>BHCA.0231938</td>
                                            <td>29/02/2022</td>
                                            <td>Gói Care 400</td>
                                            <td>445,000</td>
                                            <td>Thành công</td>
                                        </tr>
                                        <tr>
                                            <td>BHCA.0231938</td>
                                            <td>29/02/2022</td>
                                            <td>Gói Care 400</td>
                                            <td>445,000</td>
                                            <td>Thành công</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>
    </div>
</div>