<div class="ci-step">
    <div class="container">
        <ul class="step-nav" role="navigation">
            <div id="progressbar" class="progressbar" style="width: 50%;"></div>
            <li class="done">
                <button>
                    <div class="step-number">1</div>
                    <div class="step-title">Thông tin cá nhân</div>
                </button>
            </li>
            <li class="active">
                <button>
                    <div class="step-number">2</div>
                    <div class="step-title">Xem lại thông tin</div>
                </button>
            </li>
            <li class="">
                <button>
                    <div class="step-number">3</div>
                    <div class="step-title">Xác nhận và thanh toán</div>
                </button>
            </li>
        </ul>
    </div>
</div>

<div class="ci-block bg-grey">
    <div class="container">
        <div class="ci-purchase">
            <div class="row gx-5">
                <div class="col-lg-8">
                    <div class="ci-purchase__top">
                        <h2 class="ci-purchase__title">
                            2. Xác nhận thông tin cá nhân
                        </h2>
                        <p class="ci-purchase__desc">Tôi là Bên mua ,
                            Người được và cũng là người sở hữu thẻ/tài khoản dùng để đóng phí cho hợp đồng này.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-lg-8">
                    <div class="ci-purchase-box mb-5">

                        <h2 class="ci-purchase__title">
                            Thông tin của bạn
                        </h2>

                        <div class="table-box fz-16 mb-4">
                            <label class="checkcontainer mb-0" for="cam-ket">
                                <input id="cam-ket" type="checkbox">
                                <span class="checkmark" style="top: 5px;"></span>
                                <div>
                                    <span>Tôi là Bên mua , Người được và cũng là người sở hữu thẻ/tài khoản dùng để đóng phí
                                        cho hợp đồng này.</span>
                                </div>
                            </label>
                        </div>

                        <div class="table-block">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Mua cho</td>
                                        <td>Bản thân</td>
                                    </tr>
                                    <tr>
                                        <td>Họ tên</td>
                                        <td>Lê Viết Đạt</td>
                                    </tr>
                                    <tr>
                                        <td>Ngày sinh</td>
                                        <td>19/05/1996</td>
                                    </tr>
                                    <tr>
                                        <td>Giới tính</td>
                                        <td>Nam</td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ</td>
                                        <td>
                                            Xã Ba Trại, Huyện Ba Vì, Thành phố Hà Nội
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CMND/CCCD/HC/Mã định danh</td>
                                        <td>174795236</td>
                                    </tr>
                                    <tr>
                                        <td>Số điện thoại liên hệ</td>
                                        <td>0377344372</td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ email</td>
                                        <td>lvoddat95@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Hồ sơ</td>
                                        <td>
                                            <div class="form-group">
                                                <div class="error red" id="error"></div>
                                                <ul class="cmd-custom gallery" id="list-gift">

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="d-flex justify-content-between mt-5">
                            <a href="<?php echo esc_url(home_url('/oxanh/b1-nhap-thong-tin/')); ?>" class="btn ci-btn ci-btn-200 ci-btn-outline">
                                Quay lại
                            </a>
                            <a href="<?php echo esc_url(home_url('/oxanh/b3-thanh-toan/')); ?>" class="btn ci-btn ci-btn-200 ci-btn-main">
                                Tiếp tục
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ci-purchase-box">
                        <h3 class="ci-purchase__subtitle">Thông tin gói </h3>
                        <div class="package-change">
                            <div class="package-info">
                                <div class="mb-3">
                                    <span class="fw-medium fz-16">G1 - 200.000.000</span>
                                </div>
                            </div>
                            <div id="package-sotienbh" class="package-info">
                                <h3>Quyền lợi </h3>
                                <p class="sotienbh"><span>200.000.000</span>₫</p>
                            </div>
                            <div id="package-phibh" class="package-info">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="w-50">Thời hạn :</td>
                                            <td class="w-50 text-end">5 năm</td>
                                        </tr>
                                        <tr>
                                            <td class="w-50">Định kỳ đóng phí:</td>
                                            <td class="w-50 text-end">1 năm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="package-phibh" class="package-info">
                                <h3>Phí </h3>
                                <p class="phibh"><span>422.000</span> đ/năm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>