<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package write
 */

?>

<footer id="footer" class="footer">
    <div class="container">
        <div class="ci-footer-top">
            <div class="row gx-5">
                <div class="col-lg-3">
                    <a href="<?php echo esc_url(home_url('/oxanh/trang-chu/')); ?>" class="logo-bottom">
                        <img class="b-lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/img/logo/logo-text.png">
                    </a>
                </div>
                <div class="col-lg-3">
                    <div class="footer-item">
                        <div class="footer-title">Địa chỉ giao dịch</div>
                        <div class="footer-content"><i class="fad main-color fa-fw fa-location-dot me-2"></i>Số 5 Tú Mỡ, quận Cầu Giấy, TP.Hà Nội</div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-item">
                        <div class="footer-title">Chăm sóc khách hàng</div>
                        <div class="footer-content">
                            <ul class="list-unstyled">
                                <li><i class="fad main-color fa-fw fa-phone me-2"></i>Hotline: <a class="dark-color" href="tel:+0339869338">0339.869.338</a></li>
                                <li><i class="fad main-color fa-fw fa-envelope me-2"></i>Email: <a class="dark-color" href="mailto:contact@oxanh.vn">contact@oxanh.vn</a></li>
                                <li><a href="" title="Để lại thông tin liên hệ">Để lại thông tin liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-item footer-item-last">
                        <div class="footer-title">Theo dõi chúng tôi</div>
                        <div class="footer-content footer-content__social">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/img/social/facebook.png" alt="Facebook">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/img/social/youtube.png" alt="Youtube">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/img/social/zalo.png" alt="Zalo">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ci-copyright-block ci-block">
            <div class="d-block d-lg-flex text-center justify-content-between">
                <div class="ci-copyright__left">
                    <ul>
                        <li><a href="">Miễn trừ trách nhiệm</a></li>
                        <li><a href="">Chính sách bảo mật</a></li>
                    </ul>
                </div>
                <p class="m-0">
                    © 2022 Bản quyền thuộc về Công ty TNHH Chiếc Ô Xanh.</p>
            </div>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/js/app.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/js/script.js"></script>

</body>

</html>