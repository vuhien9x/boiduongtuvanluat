<?php
$pageTitle = 'Liên Hệ - TRUNG TÂM ĐÀO TẠO TƯ VẤN DOANH NGHIỆP BLT';
// Bắt đầu ghi lại nội dung
ob_start();
include './includes/navbar.php';
$navbar = ob_get_clean();
$pageContent = '
<div id="wrap_block_2">
  ' . $navbar . '
</div>
<div id="wrap_block_3">
    <!-- Slideshow 4 -->
    <div class="callbacks">
      <ul class="rslides" id="slider4">
        <li>
          <a href=""><img src="img/banner_intro.jpg" alt="Banner trang intro" title="Banner trang intro" /></a>
        </li>
      </ul>
    </div>
    <!-- Slideshow 4 -->
  </div>
    <!-- End wrap_block_3 -->
  <div id="breadcrumbs">
    <div class="container">
      <div class="breadcrumb breadcrumb_level_1">
        <a href="" title="Liên hệ" alt="Liên hệ"><span><i class="fa fa-home"
              aria-hidden="true"></i> Liên hệ</span></a>
      </div>
    </div>
  </div>
  <!-- Begin wrap_block_article -->
  <div id="wrap_block_article">
    <div class="wrap_center wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xs-12 wrap_add">
            <h3>TRUNG TÂM ĐÀO TẠO TƯ VẤN DOANH NGHIỆP BLT</h3>
            <p><img alt="" src="img/lien-he/location.png" style="height:37px; width:37px" />&nbsp;3A đường Đồng Nai
              phường 2 quận Tân Bình , Ho Chi Minh City, Vietnam</p>
            <p><img alt="" src="img/lien-he/tel.png" style="height:37px; width:37px" />&nbsp;079.72.99078</p>
            <p><img alt="" src="img/lien-he/mail.png"
                style="height:37px; width:37px" />&nbsp;lawtrainingcourses@gmail.com</p>
            <p><img alt="" src="img/lien-he/web.png"
                style="height:37px; width:37px" />&nbsp;https://boiduongtuvanluat.com</p>
          </div>

          <script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
          <script src="https://vietwave.com.vn/tva/public/js/kmt_validation_contact.js"></script>

          <div class="col-lg-6 cop-xs-12 wrap_form_contact">
            <p>Quý Khách cần liên hệ tư vấn hay đăng ký dịch vụ vui lòng quét mã QR bên dưới để được hỗ trợ trên zalo
            </p>
            <div style="text-align: center;">
              <img src="img/zalo-lienhe.jpg" alt="Liên hệ" style="width: 300px;">
            </div>
          </div>
          <div class="col-xs-12 wrap_map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244.94040153508288!2d106.66543588197855!3d10.807756386906027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529235ba71181%3A0xdaeb9d08e64db0b8!2zM0EgxJDhu5NuZyBOYWksIFBoxrDhu51uZyAyLCBUw6JuIELDrG5oLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1735838806774!5m2!1svi!2s"
              width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End wrap_block_article -->
';

include './layouts/master_layout.php';
