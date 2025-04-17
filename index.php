<?php
$pageTitle = 'TRUNG TÂM ĐÀO TẠO TƯ VẤN DOANH NGHIỆP BLT';
// Bắt đầu ghi lại nội dung
ob_start();
include './includes/navbar.php';  // Thêm navbar vào
$navbar = ob_get_clean();  // Lấy nội dung đã chèn navbar
$pageContent = '
<!-- Begin wrap_block_3 -->
<div id="wrap_block_2">
    ' . $navbar . '
</div>
<div id="wrap_block_3">
    <!-- Slideshow 4 -->
    <div class="callbacks">
        <ul class="rslides" id="slider4">

            <li>
                <a href=""><img src="img/banner/banner.jpg" alt="banner trang chủ"
                        title="banner trang chủ" /></a>
            </li>

            <li>
                <a href=""><img src="img/banner/banner_1.jpg" alt="" title="" /></a>
            </li>

            <li>
                <a href=""><img src="img/banner/banner_3.jpg" alt="" title="" /></a>
            </li>

            <li>
                <a href=""><img src="img/banner/banner_2.jpg" alt="" title="" /></a>
            </li>
        </ul>
    </div>
    <!-- Slideshow 4 -->
</div>
<!-- End wrap_block_3 -->
 <!-- Begin wrap_block_6 -->
 <div id="wrap_block_6">
    <div class="wrap_center wow fadeInUp">
        <div class="container">
            <div class="kmt_title kmt_center"><span>Lý do quý khách chọn BLT</span></div>
            <div class="row">
                <div class="col-lg-2 col-xs-6 wrap_icon">
                    <div class="block_icon">
                        <div class="group_icon_1">
                            <div class="block_img_icon">
                                <img src="img/why/why_1.png" alt="Chi phí hợp lý">
                            </div>
                            <h3 class="title_icon">Chi phí hợp lý</h3>
                        </div>
                        <br>
                        <div class="group_icon_2 info_icon">
                            <p><strong>BLT</strong> lu&ocirc;n đưa ra giải ph&aacute;p, ph&aacute;p l&yacute; tối
                                ưu cho
                                kh&aacute;ch h&agrave;ng
                                với mức chi ph&iacute; v&agrave; th&ugrave; lao luật sư hợp l&yacute; nhất</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-xs-6 wrap_icon">
                    <div class="block_icon">
                        <div class="group_icon_1">
                            <div class="block_img_icon">
                                <img src="img/why/why_2.png" alt="Cam kết về chất lượng">
                            </div>
                            <h3 class="title_icon">Cam kết về chất lượng</h3>
                        </div>
                        <br>
                        <div class="group_icon_2 info_icon">
                            <p><strong>BLT</strong> x&aacute;c định chất lượng dịch vụ v&agrave; nguồn nh&acirc;n
                                lực l&agrave; sự
                                sống c&ograve;n
                                của C&ocirc;ng ty n&ecirc;n việc đẩy&nbsp;cao chất lượng</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-xs-6 wrap_icon">
                    <div class="block_icon">
                        <div class="group_icon_1">
                            <div class="block_img_icon">
                                <img src="img/why/why_3.png" alt="Nhân lực kinh nghiệm">
                            </div>
                            <h3 class="title_icon">Nhân lực kinh nghiệm</h3>
                        </div>
                        <br>
                        <div class="group_icon_2 info_icon">
                            <p><strong>BLT</strong> c&oacute; đội ngũ luật sư giỏi l&agrave; những người c&oacute;
                                nhiều kinh
                                nghiệm tận t&acirc;m
                                mang đến sự h&agrave;i l&ograve;ng&nbsp;</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-xs-6 wrap_icon">
                    <div class="block_icon">
                        <div class="group_icon_1">
                            <div class="block_img_icon">
                                <img src="img/why/why_4.png" alt="Chia sẻ kinh nghiệm">
                            </div>
                            <h3 class="title_icon">Chia sẻ kinh nghiệm</h3>
                        </div>
                        <br>
                        <div class="group_icon_2 info_icon">
                            <p><strong>BLT</strong> lu&ocirc;n lu&ocirc;n tư vấn v&agrave; chia sẻ với
                                kh&aacute;ch h&agrave;ng về
                                mọi thủ tục
                                ph&aacute;p l&yacute; li&ecirc;n quan v&agrave; đồng h&agrave;nh c&ugrave;ng</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-xs-6 wrap_icon">
                    <div class="block_icon">
                        <div class="group_icon_1">
                            <div class="block_img_icon">
                                <img src="img/why/why_5.png" alt="Văn phòng quy mô">
                            </div>
                            <h3 class="title_icon">Văn phòng quy mô</h3>
                        </div>
                        <br>
                        <div class="group_icon_2 info_icon">
                            <p><strong>BLT</strong> có trụ sở chính là một văn phòng tiện nghi hiện đại tại Thành phố Hồ Chí Minh.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-xs-6 wrap_icon">
                    <div class="block_icon">
                        <div class="group_icon_1">
                            <div class="block_img_icon">
                                <img src="img/why/why_6.png" alt="Tư vấn 24/7">
                            </div>
                            <h3 class="title_icon">Tư vấn 24/7</h3>
                        </div>
                        <br>
                        <div class="group_icon_2 info_icon">
                            <p><strong>BLT</strong> hỗ trợ tư vấn miễn ph&iacute; 24/7 cho mọi kh&aacute;ch
                                h&agrave;ng, Với những
                                trường hợp
                                kh&oacute; ch&uacute;ng t&ocirc;i&nbsp; lu&ocirc;n hỗ trợ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End wrap_block_6 -->

<!-- Begin wrap_block_ad -->
<div id="wrap_block_ad">
    <a href="#"><img src="img/quang-cao/quangcao_1.jpg" alt="quảng cáo 1"></a>
</div>
<!-- End wrap_block_ad -->

<!-- Begin wrap_block_4 -->
<div id="wrap_block_4" class="container">
    <div class="row wrap_center">
        <div class="col-xs-12 title_rep kmt_blue">
            <h2 class="title_left">
                <span>Luật sư tranh tụng &nbsp;</span>
            </h2>
            <div class="title_right kmt_right">
            </div>
        </div>

        <div class="col-xs-12 wrap_item_home">
            <div class="row">

                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="luat-su-tranh-tung/tac-pham-phai-sinh-trong-luat-so-huu-tri-tue"><img src="luat-su-tranh-tung/img/tac-pham-phai-sinh-trong-luat-so-huu-tri-tue.jpg" title="Tác Phẩm Phái Sinh Trong Luật Sở Hữu Trí Tuệ"
                                    alt="Tác Phẩm Phái Sinh Trong Luật Sở Hữu Trí Tuệ" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Tác Phẩm Phái Sinh Trong Luật Sở Hữu Trí Tuệ"><a href="luat-su-tranh-tung/tac-pham-phai-sinh-trong-luat-so-huu-tri-tue">Tác Phẩm Phái Sinh Trong Luật Sở Hữu Trí Tuệ</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="luat-su-tranh-tung/nhung-quy-dinh-phap-luat-ve-ban-quyen"><img src="luat-su-tranh-tung/img/nhung-quy-dinh-phap-luat-ve-ban-quyen.jpg" title="Những Quy Định Pháp Luật Về Bản Quyền"
                                    alt="Những Quy Định Pháp Luật Về Bản Quyền" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Những Quy Định Pháp Luật Về Bản Quyền"><a href="luat-su-tranh-tung/nhung-quy-dinh-phap-luat-ve-ban-quyen">Những Quy Định Pháp Luật Về Bản Quyền</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="luat-su-tranh-tung/quy-dinh-trach-nhiem-viec-thuc-hien-yeu-cau-thi-hanh-an"><img src="luat-su-tranh-tung/img/quy-dinh-trach-nhiem-viec-thuc-hien-yeu-cau-thi-hanh-an.jpg" title="Quy Định Trách Nhiệm Việc Thực Hiện Yêu Cầu Thi Hành Án"
                                    alt="Quy Định Trách Nhiệm Việc Thực Hiện Yêu Cầu Thi Hành Án" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Quy Định Trách Nhiệm Việc Thực Hiện Yêu Cầu Thi Hành Án"><a href="luat-su-tranh-tung/quy-dinh-trach-nhiem-viec-thuc-hien-yeu-cau-thi-hanh-an">Quy Định Trách Nhiệm Việc Thực Hiện Yêu Cầu Thi Hành Án</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="luat-su-tranh-tung/thu-tuc-thu-ly-vu-an-hanh-chinh-theo-quy-dinh-phap-luat-hien-hanh"><img src="luat-su-tranh-tung/img/thu-tuc-thu-ly-vu-an-hanh-chinh-theo-quy-dinh-phap-luat-hien-hanh.jpg" title="Thủ Tục Thụ Lý Vụ Án Hành Chính Theo Quy Định Pháp Luật Hiện Hành"
                                    alt="Thủ Tục Thụ Lý Vụ Án Hành Chính Theo Quy Định Pháp Luật Hiện Hành" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Thủ Tục Thụ Lý Vụ Án Hành Chính Theo Quy Định Pháp Luật Hiện Hành"><a href="luat-su-tranh-tung/thu-tuc-thu-ly-vu-an-hanh-chinh-theo-quy-dinh-phap-luat-hien-hanh">Thủ Tục Thụ Lý Vụ Án Hành Chính Theo Quy Định Pháp Luật Hiện Hành</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="luat-su-tranh-tung/bao-dam-nguyen-tac-tranh-tung-trong-to-tung-hanh-chinh"><img src="luat-su-tranh-tung/img/bao-dam-nguyen-tac-tranh-tung-trong-to-tung-hanh-chinh.jpg" title="Bảo Đảm Nguyên Tắc Tranh Tụng Trong Tố Tụng Hành Chính"
                                    alt="Bảo Đảm Nguyên Tắc Tranh Tụng Trong Tố Tụng Hành Chính" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Bảo Đảm Nguyên Tắc Tranh Tụng Trong Tố Tụng Hành Chính"><a href="luat-su-tranh-tung/bao-dam-nguyen-tac-tranh-tung-trong-to-tung-hanh-chinh">Bảo Đảm Nguyên Tắc Tranh Tụng Trong Tố Tụng Hành Chính</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="luat-su-tranh-tung/luat-su-tranh-tung-cac-vu-an-kinh-doanh-thuong-mai"><img src="luat-su-tranh-tung/img/luat-su-tranh-tung-cac-vu-an-kinh-doanh-thuong-mai.jpg" title="Luật Sư Tranh Tụng Các Vụ Án Kinh Doanh - Thương Mại"
                                    alt="Luật Sư Tranh Tụng Các Vụ Án Kinh Doanh - Thương Mại" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Luật Sư Tranh Tụng Các Vụ Án Kinh Doanh - Thương Mại"><a href="luat-su-tranh-tung/luat-su-tranh-tung-cac-vu-an-kinh-doanh-thuong-mai">Luật Sư Tranh Tụng Các Vụ Án Kinh Doanh - Thương Mại</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="luat-su-tranh-tung/tu-van-luat-trong-giai-doan-thi-hanh-an-dan-su"><img src="luat-su-tranh-tung/img/tu-van-luat-trong-giai-doan-thi-hanh-an-dan-su.jpg" title="Tư Vấn Luật Trong Giai Đoạn Thi Hành Án Dân Sự"
                                    alt="Tư Vấn Luật Trong Giai Đoạn Thi Hành Án Dân Sự" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Tư Vấn Luật Trong Giai Đoạn Thi Hành Án Dân Sự"><a href="luat-su-tranh-tung/tu-van-luat-trong-giai-doan-thi-hanh-an-dan-su">Tư Vấn Luật Trong Giai Đoạn Thi Hành Án Dân Sự</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="luat-su-tranh-tung/bao-ve-quyen-loi-hop-phap-trong-giai-doan-xet-xu-phuc-tham-an-dan-su"><img src="luat-su-tranh-tung/img/bao-ve-quyen-loi-hop-phap-trong-giai-doan-xet-xu-phuc-tham-an-dan-su.jpg" title="Bảo Vệ Quyền Lợi Hợp Pháp Trong Giai Đoạn Xét Xử Phúc Thẩm Án Dân Sự"
                                    alt="Bảo Vệ Quyền Lợi Hợp Pháp Trong Giai Đoạn Xét Xử Phúc Thẩm Án Dân Sự" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Bảo Vệ Quyền Lợi Hợp Pháp Trong Giai Đoạn Xét Xử Phúc Thẩm Án Dân Sự"><a href="luat-su-tranh-tung/bao-ve-quyen-loi-hop-phap-trong-giai-doan-xet-xu-phuc-tham-an-dan-su">Bảo Vệ Quyền Lợi Hợp Pháp Trong Giai Đoạn Xét Xử Phúc Thẩm Án Dân Sự</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="luat-su-tranh-tung/tham-gia-tranh-tung-bao-ve-quyen-loi-duong-su-trong-giai-doan-xet-xu-so-tham"><img src="luat-su-tranh-tung/img/tham-gia-tranh-tung-bao-ve-quyen-loi-duong-su-trong-giai-doan-xet-xu-so-tham.jpg" title="Tham Gia Tranh Tụng Bảo Vệ Quyền Lợi Đương Sự Trong Giai Đoạn Xét Xử Sơ Thẩm"
                                    alt="Tham Gia Tranh Tụng Bảo Vệ Quyền Lợi Đương Sự Trong Giai Đoạn Xét Xử Sơ Thẩm" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Tham Gia Tranh Tụng Bảo Vệ Quyền Lợi Đương Sự Trong Giai Đoạn Xét Xử Sơ Thẩm"><a href="luat-su-tranh-tung/tham-gia-tranh-tung-bao-ve-quyen-loi-duong-su-trong-giai-doan-xet-xu-so-tham">Tham Gia Tranh Tụng Bảo Vệ Quyền Lợi Đương Sự Trong Giai Đoạn Xét Xử Sơ Thẩm</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="luat-su-tranh-tung/bao-chua-trong-giai-doan-truy-to"><img src="luat-su-tranh-tung/img/bao-chua-trong-giai-doan-truy-to.jpg" title="Bào Chữa Trong Giai Đoạn Truy Tố"
                                    alt="Bào Chữa Trong Giai Đoạn Truy Tố" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Bào Chữa Trong Giai Đoạn Truy Tố"><a href="luat-su-tranh-tung/bao-chua-trong-giai-doan-truy-to">Bào Chữa Trong Giai Đoạn Truy Tố</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="luat-su-tranh-tung/bao-chua-an-hinh-su-trong-giai-doan-xet-xu-so-tham"><img src="luat-su-tranh-tung/img/bao-chua-an-hinh-su-trong-giai-doan-xet-xu-so-tham.jpg" title="Bào Chữa Án Hình Sự Trong Giai Đoạn Xét Xử Sơ Thẩm"
                                    alt="Bào Chữa Án Hình Sự Trong Giai Đoạn Xét Xử Sơ Thẩm" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Bào Chữa Án Hình Sự Trong Giai Đoạn Xét Xử Sơ Thẩm"><a href="luat-su-tranh-tung/bao-chua-an-hinh-su-trong-giai-doan-xet-xu-so-tham">Bào Chữa Án Hình Sự Trong Giai Đoạn Xét Xử Sơ Thẩm</a></h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row wrap_center">
        <div class="col-xs-12 title_rep kmt_orange">
            <h2 class="title_left">
                <span>Khóa học pháp luật &nbsp;</span>
            </h2>
            <div class="title_right kmt_right">
            </div>
        </div>

        <div class="col-xs-12 wrap_item_home">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="khoa-hoc-phap-luat/phap-luat-quan-ly-tai-chinh-doanh-nghiep"><img
                                    src="khoa-hoc-phap-luat/img/phap-luat-quan-ly-tai-chinh-doanh-nghiep.jpg"
                                    title="Pháp luật quản lý tài chính doanh nghiệp"
                                    alt="Pháp luật quản lý tài chính doanh nghiệp" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Pháp luật quản lý tài chính doanh nghiệp"><a href="khoa-hoc-phap-luat/phap-luat-quan-ly-tai-chinh-doanh-nghiep">Pháp luật quản lý
                                    tài chính doanh nghiệp</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="khoa-hoc-phap-luat/ky-nang-soan-thao-ky-ket-va-quan-ly-hop-dong-trong-hoat-dong-kinh-doanh-tai-doanh-nghiep"><img
                                    src="khoa-hoc-phap-luat/img/ky-nang-soan-thao-ky-ket-va-quan-ly-hop-dong-trong-hoat-dong-kinh-doanh-tai-doanh-nghiep.jpg"
                                    title="Kỹ năng soạn thảo, ký kết và quản lý hợp đồng trong hoạt động kinh doanh tại doanh nghiệp"
                                    alt="Kỹ năng soạn thảo, ký kết và quản lý hợp đồng trong hoạt động kinh doanh tại doanh nghiệp" /></a>
                        </div>
                        <div class="info_item">
                            <h3
                                title="Kỹ năng soạn thảo, ký kết và quản lý hợp đồng trong hoạt động kinh doanh tại doanh nghiệp">
                                <a href="khoa-hoc-phap-luat/ky-nang-soan-thao-ky-ket-va-quan-ly-hop-dong-trong-hoat-dong-kinh-doanh-tai-doanh-nghiep">Kỹ năng soạn thảo, ký kết và quản lý hợp đồng trong hoạt động kinh
                                    doanh tại doanh nghiệp</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="khoa-hoc-phap-luat/phap-luat-huy-dong-von-trong-doanh-nghiep"><img
                                    src="khoa-hoc-phap-luat/img/phap-luat-huy-dong-von-trong-doanh-nghiep.jpg"
                                    title="Pháp luật huy động vốn trong doanh nghiệp"
                                    alt="Pháp luật huy động vốn trong doanh nghiệp" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Pháp luật huy động vốn trong doanh nghiệp"><a href="khoa-hoc-phap-luat/phap-luat-huy-dong-von-trong-doanh-nghiep">Pháp luật huy động
                                    vốn trong doanh nghiệp</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="khoa-hoc-phap-luat/phap-luat-tai-chinh-va-ke-toan"><img
                                    src="khoa-hoc-phap-luat/img/phap-luat-tai-chinh-va-ke-toan.jpg"
                                    title="Pháp luật tài chính và kế toán"
                                    alt="Pháp luật tài chính và kế toán" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Pháp luật tài chính và kế toán"><a href="khoa-hoc-phap-luat/phap-luat-tai-chinh-va-ke-toan">Pháp luật tài chính và kế
                                    toán</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="khoa-hoc-phap-luat/phap-ly-chuyen-sau-ve-m-a-trong-linh-vuc-bat-dong-san"><img
                                    src="khoa-hoc-phap-luat/img/phap-ly-chuyen-sau-ve-m-a-trong-linh-vuc-bat-dong-san.jpg"
                                    title="Pháp lý chuyên sâu về m&a trong lĩnh vực bất động sản"
                                    alt="Pháp lý chuyên sâu về m&a trong lĩnh vực bất động sản" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Pháp lý chuyên sâu về m&a trong lĩnh vực bất động sản"><a href="khoa-hoc-phap-luat/phap-ly-chuyen-sau-ve-m-a-trong-linh-vuc-bat-dong-san">Pháp
                                    lý chuyên sâu về m&a trong lĩnh vực bất động sản</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 wrap_item">
                    <div class="block_item">
                        <div class="img_item">
                            <a href="khoa-hoc-phap-luat/phap-che-doanh-nghiep"><img
                                    src="khoa-hoc-phap-luat/img/phap-che-doanh-nghiep.jpg"
                                    title="Pháp chế doanh nghiệp" alt="Pháp chế doanh nghiệp" /></a>
                        </div>
                        <div class="info_item">
                            <h3 title="Pháp chế doanh nghiệp"><a href="khoa-hoc-phap-luat/phap-che-doanh-nghiep">Pháp chế doanh nghiệp</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End wrap_block_4 -->

<!-- Begin wrap_block_ad -->
<div id="wrap_block_ad">
    <a href=""><img src="img/quang-cao/quangcao_2.jpg" alt="quảng cáo 2"></a>
</div>
<!-- End wrap_block_ad -->

<!-- Begin wrap_block_5 -->
<div id="wrap_block_5">
    <div class="row block_5 container">
        <div class="col-lg-6 col-xs-12 background_1">
            <div class="block_5_left">
                <div class="bl5_block_left">
                    <img src="img/icon_tuvan.png" alt="Icon">
                </div>
                <div class="bl5_block">
                    <h3 class="bl5_block_title">Nhận tư vấn từ BUSINESS LAW TRAINING</h3>
                    <div class="bl5_block_content">
                        Mời bạn quét mã QR bên phải để vào zalo của BUSINESS LAW TRAINING và đặt câu hỏi. Luật sư BLT sẽ nhanh
                        nhóng liên hệ với bạn để tư vấn và giải đáp cho bạn.
                        <br><br>
                        <h3>NẮM VỮNG KIẾN THỨC - DẪN LỐI THÀNH CÔNG</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 background_2">
            <div class="block_5_right"></div>
            <img src="img/zalo-lienhe.jpg" alt="Liên hệ" style="width: 300px;">
        </div>
    </div>
</div>
</div>
<!-- End wrap_block_5 -->

<!-- Begin wrap_block_6 -->
<div id="wrap_block_6">
    <div class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-12">
                    <div class="kmt_orange">
                        <h2 class="title_left"><span>Tin tức pháp luật</span></h2>
                        <div class="title_right"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 wrap_news">
                            <div class="col-lg-3 col-xs-12 img_news">
                                <a href="#">
                                    <img
                                        src="https://image.plo.vn/w850/Uploaded/2024/wpdhnwzdh/2024_12_29/khue-van-cac-diem-moi-10-luat-4942-4425.png"
                                        alt="Điểm mới 10 Luật bắt đầu có hiệu lực từ 1-1-2025">
                                </a>
                            </div>
                            <div class="col-lg-9 col-xs-12 info_news">
                                <h4 class="title_news"><a
                                        href="https://plo.vn/diem-moi-10-luat-bat-dau-co-hieu-luc-tu-1-1-2025-tiep-post827370.html"
                                        target="_blank">Điểm mới 10 Luật bắt đầu có hiệu lực từ 1-1-2025
                                    </a></h4>
                                <div class="quote_news">(PLO)- Từ 1-1-2025, 10 luật mới đã được Quốc hội thông qua tại các kỳ họp
                                    trước sẽ chính thức có hiệu lực.</div>
                            </div>
                        </div>
                    </div>
                    <div class="other_news">
                        <h3>Các tin khác:</h3>
                        <ul>
                            <li><a href="https://plo.vn/cong-uoc-ha-noi-nen-tang-phap-ly-de-truy-quet-toi-pham-mang-post827471.html"
                                    target="_blank">Công ước Hà Nội: Nền tảng pháp lý để truy quét tội phạm mạng</a></li>
                            <li><a
                                    href="https://plo.vn/tu-nam-2025-vi-pham-giao-thong-co-the-phai-chiu-muc-phat-gap-30-lan-so-voi-hien-nay-post827449.html"
                                    target="_blank">Từ năm 2025, vi phạm giao thông có thể phải chịu mức phạt gấp 30 lần so với hiện
                                    nay</a></li>
                            <li><a
                                    href="https://plo.vn/6-truong-hop-phai-doi-chung-nhan-dang-ky-xe-bien-so-tu-1-1-2025-post827349.html"
                                    target="_blank">6 trường hợp phải đổi chứng nhận đăng ký xe, biển số từ 1-1-2025</a></li>
                            <li><a
                                    href="https://plo.vn/thu-tuong-yeu-cau-tong-ket-thuc-tien-xet-xu-hanh-vi-lua-dao-su-dung-cong-nghe-cao-post827132.html"
                                    target="_blank">Thủ tướng yêu cầu tổng kết thực tiễn xét xử hành vi lừa đảo sử dụng công nghệ
                                    cao</a></li>
                            <li><a
                                    href="https://plo.vn/bo-noi-vu-de-xuat-hang-loat-chinh-sach-vuot-troi-voi-can-bo-nghi-huu-truoc-tuoi-post827441.html"
                                    target="_blank">Bộ Nội vụ đề xuất hàng loạt chính sách vượt trội với cán bộ nghỉ hưu trước tuổi</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-xs-12">
                    <div class="kmt_orange">
                        <h2 class="title_left"><span>Ý kiến khách hàng</span></h2>
                        <div class="title_right"></div>
                        <div class="row">
                            <div class="owl_feedback owl-carousel owl-theme kmt_center">
                                <div class="block_fb">
                                    <div class="content_fb">
                                        <img class="brackets" src="img/y-kien/brackets_symbol.png" alt="brackets">
                                        <p>T&ocirc;i đ&atilde; l&agrave;m việc với TRUNG TÂM ĐÀO TẠO TƯ VẤN DOANH NGHIỆP BLT ở mảng tư vấn
                                            doanh
                                            nghiệp,&nbsp;Thấy c&aacute;c bạn luật sư ở đ&acirc;y tư vấn rất nhiệt t&igrave;nh, l&agrave;m
                                            việc tr&aacute;ch nhi&ecirc;m, C&aacute;m ơn tất cả c&aacute;c bạn.&nbsp;</p>
                                    </div>
                                    <div class="info_fb">
                                        <div class="img_fb">
                                            <img src="img/y-kien/avatar_1.jpg" title="Nguyễn Văn A" alt="Nguyễn Văn A" />
                                        </div>
                                        <div class="name_fb">
                                            <h5>Nguyễn Văn A</h5>
                                            <div>
                                                Công Ty Kiến Trúc Lê Và cộng Sự </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="block_fb">
                                    <div class="content_fb">
                                        <img class="brackets" src="img/y-kien/brackets_symbol.png" alt="brackets">
                                        <p>T&ocirc;i đ&atilde; l&agrave;m việc với TRUNG TÂM ĐÀO TẠO TƯ VẤN DOANH NGHIỆP BLT ở mảng tư vấn
                                            doanh
                                            nghiệp,&nbsp;Thấy c&aacute;c bạn luật sư ở đ&acirc;y tư vấn rất nhiệt t&igrave;nh, l&agrave;m
                                            việc tr&aacute;ch nhi&ecirc;m, C&aacute;m ơn tất cả c&aacute;c bạn.&nbsp;</p>
                                    </div>
                                    <div class="info_fb">
                                        <div class="img_fb">
                                            <img src="img/y-kien/avatar_2.jpg" title="Bà Nguyễn Lan Anh" alt="Bà Nguyễn Lan Anh" />
                                        </div>
                                        <div class="name_fb">
                                            <h5>Bà Nguyễn Lan Anh</h5>
                                            <div>
                                                Phụ huynh học sinh Trường Thực nghiệm Victory </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feedback-btn-slider">
                            <button class="prev prev-feedback">&nbsp;</button>
                            <button class="next next-feedback">&nbsp;</button>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- End wrap_block_6 -->
';

include './layouts/master_layout.php';
