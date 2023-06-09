<div class="ci-breadcrumb"
    style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/img/ho-so-tai-tro.jpg);">
    <div class="container">
        <div class="ci-breadcrumb-inner">
            <h1 class="ci-breadcrumb-title">Hồ sơ tài trợ</h1>
        </div>
    </div>
</div>


<div class="pt-0 bg-grey overflow-visible">
    <div class="ci-block">
        <div class="container">

            <section>
                <div class="bg-white px-4 py-4 radius-8">
                    <div class="sp-tabs">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button class="nav-link  active" data-bs-toggle="tab" data-bs-target="#hs-da-tai-tro"
                                    type="button" role="tab" aria-controls="hs-da-tai-tro" aria-selected="false">
                                    <i class="fad fa-file-check me-2 fz-20"></i>
                                    <span>Hồ sơ tài trợ đã được duyệt</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#hs-xin-tai-tro"
                                    type="button" role="tab" aria-controls="hs-xin-tai-tro" aria-selected="true">
                                    <i class="fad fa-file-pen me-2 main-color fz-20"></i>
                                    <span>Hồ sơ xin tài trợ </span>
                                </button>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div class="tab-pane active" id="hs-xin-tai-tro" role="tabpanel"
                                aria-labelledby="hs-xin-tai-tro">
                                <section>
                                    <div class="row mb-3">
                                        <div class="col-lg-3 col-md-6 col-6">
                                            <divp class="form-group">
                                                <span class="fw-medium">
                                                    Từ khoá:
                                                </span>
                                                <div>
                                                    <input type="text" class="form-control form-control"
                                                        placeholder="Họ tên, Số điện thoại,..." id="">
                                                </div>
                                            </divp>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="form-group">
                                                <span class="fw-medium">
                                                    Từ ngày
                                                </span>
                                                <div class="position-relative">
                                                    <input type="text"
                                                        class="form-control form-control input-date datepicker"
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
                                                    <input type="text"
                                                        class="form-control form-control input-date datepicker"
                                                        placeholder="dd/mm/yyyy" id="">
                                                    <i class="fad fa-calendar-alt"></i>
                                                </div>
                                            </div>
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

                                    <div class="list-ho-so">

                                        <?php for ($i = 0; $i < 10; $i++) { ?>
                                            <div class="ho-so">
                                                <a href="<?php echo esc_url(home_url('/oxanh/xem-ho-so/')); ?>"
                                                    class="ho-so-wrap">
                                                    <div class="hs-img">
                                                        <span
                                                            class="badge bg-warning rounded badge-sm position-absolute fz-14">
                                                            <?php echo $i + 1; ?>
                                                        </span>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/img/tin-tuc-oxanh.png"
                                                            alt="#">
                                                    </div>
                                                    <div class="hs-info">
                                                        <ul class="hs-list list-unstyled mb-0">
                                                            <li>
                                                                <i class="fa fa-user gray-color fa-fw"></i>
                                                                <span>Họ tên: Nguyễn Văn A</span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-phone gray-color fa-fw"></i>
                                                                <span>Số điện thoại: 0987 654 321</span>
                                                            </li>
                                                            <li>
                                                                <span class="text-danger">
                                                                    <i class="fa fa-circle-check fa-fw"></i>
                                                                    <span>Chờ duyệt</span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>

                                        <?php } ?>
                                    </div>

                                    <nav class="mt-3 d-flex align-items-center justify-content-between">
                                        <div class="d-inline-block align-middle">
                                            <span>Hiển thị </span>
                                            <input
                                                class="form-control d-inline-block align-middle px-1 mx-2 text-center"
                                                type="number" name="" value="10" min="1" max="200"
                                                style="min-width: auto;width: 54px">
                                            <span>trên tổng số <b>120</b> hồ sơ</span>
                                        </div>
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#"><i class="fas fa-arrow-left"></i></a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link " href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i class="fas fa-arrow-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </section>
                            </div>


                            <div class="tab-pane" id="hs-da-tai-tro" role="tabpanel" aria-labelledby="hs-da-tai-tro">
                                <section>
                                    <div class="row mb-3">
                                        <div class="col-lg-3 col-md-6 col-6">
                                            <divp class="form-group">
                                                <span class="fw-medium">
                                                    Từ khoá:
                                                </span>
                                                <div>
                                                    <input type="text" class="form-control form-control"
                                                        placeholder="Họ tên, Số điện thoại,..." id="">
                                                </div>
                                            </divp>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="form-group">
                                                <span class="fw-medium">
                                                    Từ ngày
                                                </span>
                                                <div class="position-relative">
                                                    <input type="text"
                                                        class="form-control form-control input-date datepicker"
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
                                                    <input type="text"
                                                        class="form-control form-control input-date datepicker"
                                                        placeholder="dd/mm/yyyy" id="">
                                                    <i class="fad fa-calendar-alt"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="form-group">
                                                <label class="l-contact w100p">
                                                    &nbsp;
                                                </label>
                                                <button class="btn border-ccc fw-medium fz-14 bg-white"
                                                    onclick="document.filter_form.submit();">
                                                    <i class="far fa-search me-2"></i>Tìm kiếm</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-ho-so">
                                        <?php for ($i = 0; $i < 10; $i++) { ?>
                                            <div class="ho-so">
                                                <a href="<?php echo esc_url(home_url('/oxanh/xem-ho-so/')); ?>"
                                                    class="ho-so-wrap">
                                                    <div class="hs-img">
                                                        <span
                                                            class="badge bg-warning rounded badge-sm position-absolute fz-14">
                                                            <?php echo $i + 1; ?>
                                                        </span>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/img/tin-tuc-oxanh.png"
                                                            alt="#">
                                                    </div>
                                                    <div class="hs-info">
                                                        <ul class="hs-list list-unstyled mb-0">
                                                            <li>
                                                                <i class="fa fa-user gray-color fa-fw"></i>
                                                                <span>Họ tên: Nguyễn Văn A</span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-phone gray-color fa-fw"></i>
                                                                <span>Số điện thoại: 0987 654 321</span>
                                                            </li>
                                                            <li>
                                                                <span class="text-success">
                                                                    <i class="fa fa-circle-check fa-fw"></i>
                                                                    <span>Đã duyệt</span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>

                                        <?php } ?>






                                    </div>

                                    <nav class="mt-3 d-flex align-items-center justify-content-between">
                                        <div class="d-inline-block align-middle">
                                            <span>Hiển thị </span>
                                            <input
                                                class="form-control d-inline-block align-middle px-1 mx-2 text-center"
                                                type="number" name="" value="10" min="1" max="200"
                                                style="min-width: auto;width: 54px">
                                            <span>trên tổng số <b>120</b> hồ sơ</span>
                                        </div>
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#"><i class="fas fa-arrow-left"></i></a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link " href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i class="fas fa-arrow-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </section>
                            </div>


                        </div>
                    </div>
                </div>

            </section>


        </div>
    </div>



</div>