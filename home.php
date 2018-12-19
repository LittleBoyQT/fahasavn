<?php
    $user = new resources_libs_UserIdentity();
    $router = new resources_libs_Router();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public_html/css/Library/bootstrap.min.css">
    <link rel="stylesheet" href="./public_html/css/Library/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./public_html/css/Library/owl.carousel.min.css">
    <link rel="stylesheet" href="./public_html/css/Library/owl.theme.default.min.css">
    <link rel="stylesheet" href="./public_html/css/CSS-code/header.css">
    <link rel="stylesheet" href="./public_html/css/CSS-code/footer.css">
    <link rel="stylesheet" href="./public_html/css/CSS-code/home.css">
    <link rel="stylesheet" href="./public_html/css/CSS-code/back-to-top.css">
    <link rel="shortcut icon" href="./public_html/img/logo/favicon.ico" type="image/x-icon">
    <script src="./public_html/js/Library/jquery-3.3.1.min.js"></script>
    <script src="./public_html/js/Library/bootstrap.min.js"></script>
    <script src="./public_html/js/Library/owl.carousel.min.js"></script>
    <script src="./public_html/js/JS-code/js-home.js"></script>
    <script src="./public_html/js/JS-code/owl-slide.js"></script>
    <script src="./public_html/js/JS-code/back-to-top.js"></script>
    <title>FAHASA.com</title>
</head>
<body>

<!--Header -->
<?php require_once("resources/templates/header.php") ?>


<!-- Login Form -->
<?php require_once('login.php') ?>


<!--CONTENT-->
    <div id="content-home">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 hidden-xs">
                    <div class="danhmuc">
                        <div class="danhmucsach-item-home">
                            <ul class="nav">
                                <li><a href="sach-hoc-ngoai-ngu.html" class="link-left">Học Ngoại Ngữ</a></li>
                                <li><a href="sach-kinh-te.html" class="link-left">Kinh Tế</a></li>
                                <li><a href="sach-khoa-hoc.html" class="link-left">Khoa Học Kĩ Thuật</a></li>
                                <li><a href="sach-nuoi-day-con.html" class="link-left">Nuôi Dạy Con</a></li>
                                <li><a href="sach-giao-khoa.html" class="link-left">Sách Giáo Khoa - Giáo Trình</a></li>
                                <li><a href="sach-tham-khao.html" class="link-left">Sách Tham Khảo</a></li>
                                <li><a href="sach-thieu-nhi.html" class="link-left">Sách Thiếu Nhi</a></li>
                                <li><a href="sach-ki-nang-song.html" class="link-left">Tâm Lý - Kỹ Năng Sống</a></li>
                                <li><a href="tu-dien.html" class="link-left">Từ Điển</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                    <div class="carousel slide" id="slide-top" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="#"><img src="./public_html/img/slide/DAIGIA-1.jpg" class="img-responsive"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="./public_html/img/slide/MuaSam-2.png" class="img-responsive"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="./public_html/img/slide/Thu3-3.jpg" class="img-responsive"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="./public_html/img/slide/Cung-hoang-dao-4.jpg" class="img-responsive"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="./public_html/img/slide/NCC-BachViet-5.jpg" class="img-responsive"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="./public_html/img/slide/NCC-IPM-mua-mua-sam-dien-cuong-6.jpg" class="img-responsive"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="./public_html/img/slide/New-Arrivals-7.jpg" class="img-responsive"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="./public_html/img/slide/BTS-8.jpg" class="img-responsive"></a>
                            </div>
                        </div>
                        <a href="#slide-top" class="left carousel-control" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a href="#slide-top" class="right carousel-control" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="sachtiengviet">
                <div class="top-sach">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu1">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="title navbar-brand">DEALS 24H - SÁCH TIẾNG VIỆT</span>
                    </div>
                    <div class="collapse navbar-collapse" id="menu1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="">Văn học</a></li>
                            <li><a href="">Tâm lý - Kỹ năng</a></li>
                            <li><a href="">Nuôi dạy con</a></li>
                            <li><a href="">Kinh tế</a></li>
                        </ul>
                    </div>
                </div>
                <div class="bottom-sach">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="detail-book.html"><img src="./public_html/img/sachtiengviet/cauchuyenbennoilau.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Câu Chuyện Bên Nồi Lẫu</span><br>
                                    <span>63.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href=""><img src="./public_html/img/sachtiengviet/chungtadauchisongchoriengminh.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Chúng Ta Đâu Chỉ Sống Cho Riêng Mình</span><br>
                                    <span>82.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href=""><img src="./public_html/img/sachtiengviet/cubinhtinh.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Cứ Bình Tĩnh</span><br>
                                    <span>82.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href=""><img src="./public_html/img/sachtiengviet/danong.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Đàn Ông +</span><br>
                                    <span>86.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href=""><img src="./public_html/img/sachtiengviet/lonlensekhac.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Lớn Lên Sẽ Khác</span><br>
                                    <span>89.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href=""><img src="./public_html/img/sachtiengviet/me-embevabo.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Mẹ - Em Bé Và Bố</span><br>
                                    <span>89.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href=""><img src="./public_html/img/sachtiengviet/nha.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Nhà</span><br>
                                    <span>109.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href=""><img src="./public_html/img/sachtiengviet/nuocnhatnhintunhungthubinhthuong.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Nước Nhật Nhìn Từ Những Thứ Bình Thường</span><br>
                                    <span>76.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href=""><img src="./public_html/img/sachtiengviet/yeusaodekhongdau.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Yêu Sao Để Không Đau</span><br>
                                    <span>86.000đ</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="sach-tieng-viet.html">Xem thêm</a>
                    </div>
                </div>
            </div>

            <br>
            <div class="sachnoibat">
                <div class="top-sach">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu2">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="title navbar-brand">SÁCH NỔI BẬT</span>
                    </div>
                    <div class="collapse navbar-collapse" id="menu2">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="">Combo Nổi Bật</a></li>
                            <li><a href="">Sách HOT - Giảm Sốc</a></li>
                        </ul>
                    </div>
                </div>
                <div class="bottom-sach">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnoibat/athomwithmadamechic.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>At Home With Madame Chic</span><br>
                                    <span>100.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnoibat/banchicansongtottroixanhtuanbai.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Bạn Chỉ Cần Sống Tốt, Trời Xanh Tự An Bài</span><br>
                                    <span>86.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnoibat/bimatdothai-khoidaytainangtre.png" class="thumbnail">
                                <div class="caption">
                                    <span>Bí Mật Do Thái - Khơi Dậy Tài Năng Trẻ</span><br>
                                    <span>109.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnoibat/caychuoinondigiayxanh.png" class="thumbnail">
                                <div class="caption">
                                    <span>Cây Chuối Non Đi Giày Xanh</span><br>
                                    <span>89.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnoibat/dacquyencuagaihu.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Đặc Quyền Của Gái Hư</span><br>
                                    <span>78.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnoibat/hanhphucdichthuc.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Hạnh Phúc Đích Thực</span><br>
                                    <span>90.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnoibat/khihoithohoathinhkhong.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Khi Hơi Thở Hóa Thinh Không</span><br>
                                    <span>92.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnoibat/khongdietkhongsinhdungsohai.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Không Diệt Không Sinh - Đừng Sợ Hãi</span><br>
                                    <span>98.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnoibat/lanhdaobangcauhoi.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Lãnh Đạo Bằng Câu Hỏi</span><br>
                                    <span>102.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnoibat/minhlanangvieccuaminhlachoichang.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Mình Là Nắng, Việc Của Mình Là Chói Chang</span><br>
                                    <span>120.000đ</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="sach-tieng-viet.html">Xem thêm</a>
                    </div>
                </div>
            </div>

            <br>
            <div class="sachnuocngoai">
                <div class="top-sach">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu3">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="title navbar-brand">FOREIGN BOOKS</span>
                    </div>
                    <div class="navbar-collapse collapse" id="menu3">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="">New Fiction</a></li>
                            <li><a href="">New Business Books</a></li>
                            <li><a href="">New Self-help Books</a></li>
                            <li><a href="">New Children's Books</a></li>
                        </ul>
                    </div>
                </div>
                <div class="bottom-sach">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnuocngoai/airbnb_story.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Airbnb Story</span><br>
                                    <span>220.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnuocngoai/great-at-work.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Great At Work</span><br>
                                    <span>160.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnuocngoai/how-successful-people-grow-15-ways-to-get.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>How Successful People Grow: 15 Ways To Get</span><br>
                                    <span>225.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnuocngoai/how-successfull-people-lead-taking-your.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>How Successful People Lead: Taking Your</span><br>
                                    <span>225.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnuocngoai/organize-your-team-today-the-mental.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Organize Your Team Today The Mental</span><br>
                                    <span>180.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnuocngoai/power-of-moments.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Power Of Moment</span><br>
                                    <span>175.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnuocngoai/the-5-levels-of-leadership-proven-steps.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>The 5 Levels Of Leadership Proven Steps</span><br>
                                    <span>330.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnuocngoai/the-best-team-wins.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>The Best Team Wins</span><br>
                                    <span>200.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnuocngoai/the-carrot-principle.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>The Carrot Principle</span><br>
                                    <span>180.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnuocngoai/the-trust-edge.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>The Trust Edge</span><br>
                                    <span>250.000đ</span>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="./public_html/img/sachnuocngoai/too-many-bosses-too-few-leaders.jpg" class="thumbnail">
                                <div class="caption">
                                    <span>Too Many Bosses, Too Few Leaders</span><br>
                                    <span>250.000đ</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="sach-hoc-ngoai-ngu.html">Xem thêm</a>
                    </div>
                </div>
            </div>

            <br>
            <div class="sachvanhoc-kinang">
                <div class="top-sach">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu4">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="title navbar-brand">SÁCH VĂN HỌC</span>
                    </div>
                    <div class="collapse navbar-collapse" id="menu4">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="">Sắp phát hành</a></li>
                            <li><a href="">Bán chạy</a></li>
                            <li><a href="">Nổi bật</a></li>
                        </ul>
                    </div>
                </div>
                <div class="bottom-sach">
                    <div class="row hidden-xs">
                        <div class="col-sm-4">
                            <a href=""><img src="./public_html/img/vanhoc/Co-Dinh-Mot-Dam-May350x415.jpg" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-8">
                            <div class="carousel slide" data-ride="carousel" id="slide-2">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/vanhoc/artemis-fowl-tap1.jpg" class="img-responsive thumbnail"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Artemis Fowl Tập 1</span><br>
                                                <span>130.000</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/vanhoc/bonghinhcuagio.jpg" class="img-responsive thumbnail"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Bóng Hình Của Gió</span><br>
                                                <span>89.000đ</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/vanhoc/chuyendicuathanhxuan.jpg" class="img-responsive thumbnail"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Chuyến Đi Của Thanh Xuân</span><br>
                                                <span>109.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/vanhoc/henhovoiparis.jpg" class="img-responsive thumbnail"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Hẹn Hò Với Paris</span><br>
                                                <span>209.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/vanhoc/mavuongkientao-hamnguckienconhat.jpg" class="img-responsive thumbnail"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Ma Vương Kiến Tạo</span><br>
                                                <span>100.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/vanhoc/ngamngoiphophuong.jpg" class="img-responsive thumbnail"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Ngắm Ngơi Phố Phường</span><br>
                                                <span>79.000đ</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/vanhoc/roitrongchoivoi.jpg" class="img-responsive thumbnail"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Rơi Trong Chơi Vơi</span><br>
                                                <span>99.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/vanhoc/shosha.jpg" class="img-responsive thumbnail"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Sosha</span><br>
                                                <span>179.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/vanhoc/thanhphophale-phan3.jpg" class="img-responsive thumbnail"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Thành Phố Pha Lê</span><br>
                                                <span>100.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/vanhoc/thunghiemhoangdai.jpg" class="img-responsive thumbnail"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Thử Nghiệm Hoang Dại</span><br>
                                                <span>79.000đ</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/vanhoc/trangiangnhintusaulung.png" class="img-responsive thumbnail"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Trần Giang Nhìn Từ Sau Lưng</span><br>
                                                <span>99.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/vanhoc/truyenthuykieu.jpg" class="img-responsive thumbnail"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Truyện Thúy Kiều</span><br>
                                                <span>179.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#slide-2" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a href="#slide-2" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row visible-xs">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/vanhoc/artemis-fowl-tap1.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Artemis Fowl Tập 1</span><br>
                                        <span>130.000</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/vanhoc/bonghinhcuagio.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Bóng Hình Của Gió</span><br>
                                        <span>89.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/vanhoc/chuyendicuathanhxuan.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Chuyến Đi Của Thanh Xuân</span><br>
                                        <span>109.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/vanhoc/henhovoiparis.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Hẹn Hò Với Paris</span><br>
                                        <span>209.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/vanhoc/mavuongkientao-hamnguckienconhat.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Ma Vương Kiến Tạo</span><br>
                                        <span>100.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/vanhoc/ngamngoiphophuong.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Ngắm Ngơi Phố Phường</span><br>
                                        <span>79.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/vanhoc/roitrongchoivoi.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Rơi Trong Chơi Vơi</span><br>
                                        <span>99.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/vanhoc/shosha.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Sosha</span><br>
                                        <span>179.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/vanhoc/thanhphophale-phan3.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Thành Phố Pha Lê</span><br>
                                        <span>100.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/vanhoc/thunghiemhoangdai.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Thử Nghiệm Hoang Dại</span><br>
                                        <span>79.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/vanhoc/trangiangnhintusaulung.png" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Trần Giang Nhìn Từ Sau Lưng</span><br>
                                        <span>99.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/vanhoc/truyenthuykieu.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Truyện Thúy Kiều</span><br>
                                        <span>179.000đ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="sach-tieng-viet.html">Xem thêm</a>
                    </div>
                </div>
            </div>

            <br>
            <div class="sachkinhte-nuoidaycon">
                <div class="top-sach">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu5">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="title navbar-brand">SÁCH KINH TẾ</span>
                    </div>
                    <div class="navbar-collapse collapse" id="menu5">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="">Sắp phát hành</a></li>
                            <li><a href="">Bán chạy</a></li>
                            <li><a href="">Nổi bật</a></li>
                        </ul>
                    </div>
                </div>
                <div class="bottom-sach">
                    <div class="row hidden-xs">
                        <div class="col-sm-8">
                            <div class="carousel slide" data-ride="carousel" id="slide-3">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachkinhte/chuyen-nha-dr-thanh.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Chuyện Nhà Dr. Thanh</span><br>
                                                <span>99.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachkinhte/kelamthaydoicuocchoi.png" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Kẻ Làm Thay Đổi Cuộc Chơi</span><br>
                                                <span>109.000đ</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachkinhte/khoinghieptinhgon.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Khởi Nghiệp Tinh Gọn</span><br>
                                                <span>159.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachkinhte/kinhtehocvimo.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Kinh Tế Học Vĩ Mô</span><br>
                                                <span>219.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachkinhte/lanhdaodichthuc.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Lãnh Đạo Đích Thực</span><br>
                                                <span>68.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachkinhte/neutoibietduockhicon20.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Nếu Tôi Biết Được Khi Còn 20</span><br>
                                                <span>120.000đ</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachkinhte/nhungchienluocmarketingtaoraloinhuan.png" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Những Chiến Lược Marketing Tạo Ra Lợi Nhuận</span><br>
                                                <span>179.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachkinhte/phungsudedandau.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Phụng Sự Để Dẫn Đầu</span><br>
                                                <span>88.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachkinhte/quantringuonnhanluc.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Quản Trị Nguồn Nhân Lực</span><br>
                                                <span>98.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachkinhte/sucmanhthuyetphuc.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Sức Mạnh Thuyết Phục</span><br>
                                                <span>97.000đ</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachkinhte/thuonghieucamxuc.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Thương Hiệu Cảm Xúc</span><br>
                                                <span>87.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachkinhte/tuzerodenzera.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Từ Zero Đến Zera</span><br>
                                                <span>81.000d</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#slide-3" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a href="#slide-3" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <a href=""><img src="./public_html/img/sachkinhte/MARKETING-DE-CANH-TRANH-TU-CHAU-A-VUON-RA-THE-GIOI-TRONG-KY-NGUYEN-TIEU-DUNG-SO-350x415.jpg" class="img-responsive"></a>
                        </div>
                    </div>

                    <div class="row visible-xs">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/sachkinhte/chuyen-nha-dr-thanh.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Chuyện Nhà Dr. Thanh</span><br>
                                        <span>99.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/sachkinhte/kelamthaydoicuocchoi.png" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Kẻ Làm Thay Đổi Cuộc Chơi</span><br>
                                        <span>109.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/sachkinhte/khoinghieptinhgon.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Khởi Nghiệp Tinh Gọn</span><br>
                                        <span>159.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/sachkinhte/kinhtehocvimo.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Kinh Tế Học Vĩ Mô</span><br>
                                        <span>219.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/sachkinhte/lanhdaodichthuc.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Lãnh Đạo Đích Thực</span><br>
                                        <span>68.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/sachkinhte/neutoibietduockhicon20.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Nếu Tôi Biết Được Khi Còn 20</span><br>
                                        <span>120.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/sachkinhte/nhungchienluocmarketingtaoraloinhuan.png" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Những Chiến Lược Marketing Tạo Ra Lợi Nhuận</span><br>
                                        <span>179.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/sachkinhte/phungsudedandau.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Phụng Sự Để Dẫn Đầu</span><br>
                                        <span>88.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/sachkinhte/quantringuonnhanluc.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Quản Trị Nguồn Nhân Lực</span><br>
                                        <span>98.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/sachkinhte/sucmanhthuyetphuc.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Sức Mạnh Thuyết Phục</span><br>
                                        <span>97.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/sachkinhte/thuonghieucamxuc.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Thương Hiệu Cảm Xúc</span><br>
                                        <span>87.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/sachkinhte/tuzerodenzera.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Từ Zero Đến Zera</span><br>
                                        <span>81.000d</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="sach-kinh-te.html">Xem thêm</a>
                    </div>
                </div>
            </div>

            <br>
            <div class="sachvanhoc-kinang">
                <div class="top-sach">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu6">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="navbar-brand title">SÁCH TÂM LÝ - KỸ NĂNG</span>
                    </div>
                    <div class="navbar-collapse collapse" id="menu6">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="">Sắp phát hành</a></li>
                            <li><a href="">Bán chạy</a></li>
                            <li><a href="">Nổi bật</a></li>
                        </ul>
                    </div>
                </div>
                <div class="bottom-sach">
                    <div class="row hidden-xs">
                        <div class="col-sm-4">
                            <a href=""><img src="./public_html/img/kinangsong/Hanh-phuc-350x415.jpg" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-8">
                            <div class="carousel slide" data-ride="carousel" id="slide-4">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/kinangsong/bia_bandatgiabaonhieu_full.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Bạn Đắt Giá Bao Nhiêu</span><br>
                                                <span>80.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/kinangsong/dacnhantam.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Đắc Nhân Tâm</span><br>
                                                <span>76.000đ</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/kinangsong/doi-ngan-dung-ngu-dai-bia.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Đời Ngắn Đừng Ngủ Dài</span><br>
                                                <span>99.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/kinangsong/emkhongcogidemac.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Em Không Có Gì Để Mặc?</span><br>
                                                <span>102.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/kinangsong/haihuocmotchutthegioisekhacdi.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Hài Hước Một Chút Thế Giới Sẽ Khác Đi</span><br>
                                                <span>129.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/kinangsong/nghethuatnhinnguoidoantinhcach.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Nghệ Thuật Nhìn Người Đoán Tính Cách</span><br>
                                                <span>98.000đ</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/kinangsong/nghidongiansongdonthuan.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Nghĩ Đơn Giản Sống Đơn Thuần</span><br>
                                                <span>87.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/kinangsong/oparis.png" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Ở Paris</span><br>
                                                <span>189.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/kinangsong/songlaukhongbangsongsau.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Sống Lâu Không Bằng Sống Sâu</span><br>
                                                <span>74.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/kinangsong/songmotcuocdoikhonghoihan.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Sống Một Cuộc Đời Không Hối Hận</span><br>
                                                <span>77.000đ</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/kinangsong/thaycachmacdoicuocdoi_1_1.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Thay Cách Mặc Đổi Cuộc Đời</span><br>
                                                <span>100.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/kinangsong/tuoitredanggiabaonhieu.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Tuổi Trẻ Đáng Giá Bao Nhiêu</span><br>
                                                <span>70.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#slide-4" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a href="#slide-4" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row visible-xs">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="">
                                   <img src="./public_html/img/kinangsong/bia_bandatgiabaonhieu_full.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Bạn Đắt Giá Bao Nhiêu</span><br>
                                        <span>80.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/kinangsong/dacnhantam.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Đắc Nhân Tâm</span><br>
                                        <span>76.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/kinangsong/doi-ngan-dung-ngu-dai-bia.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Đời Ngắn Đừng Ngủ Dài</span><br>
                                        <span>99.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/kinangsong/emkhongcogidemac.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Em Không Có Gì Để Mặc?</span><br>
                                        <span>102.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/kinangsong/haihuocmotchutthegioisekhacdi.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Hài Hước Một Chút Thế Giới Sẽ Khác Đi</span><br>
                                        <span>129.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/kinangsong/nghethuatnhinnguoidoantinhcach.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Nghệ Thuật Nhìn Người Đoán Tính Cách</span><br>
                                        <span>98.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/kinangsong/nghidongiansongdonthuan.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Nghĩ Đơn Giản Sống Đơn Thuần</span><br>
                                        <span>87.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/kinangsong/oparis.png" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Ở Paris</span><br>
                                        <span>189.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/kinangsong/songlaukhongbangsongsau.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Sống Lâu Không Bằng Sống Sâu</span><br>
                                        <span>74.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/kinangsong/songmotcuocdoikhonghoihan.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Sống Một Cuộc Đời Không Hối Hận</span><br>
                                        <span>77.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/kinangsong/thaycachmacdoicuocdoi_1_1.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Thay Cách Mặc Đổi Cuộc Đời</span><br>
                                        <span>100.000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <img src="./public_html/img/kinangsong/tuoitredanggiabaonhieu.jpg" class="img-responsive thumbnail">
                                    <div class="caption">
                                        <span>Tuổi Trẻ Đáng Giá Bao Nhiêu</span><br>
                                        <span>70.000đ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="sach-ki-nang-song.html">Xem thêm</a>
                    </div>
                </div>
            </div>

            <br>
            <div class="sachkinhte-nuoidaycon">
                <div class="top-sach">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu7">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="title navbar-brand">SÁCH NUÔI DẠY CON</span>
                    </div>
                    <div class="navbar-collapse collapse" id="menu7">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="">Mới - Sắp phát hành</a></li>
                            <li><a href="">Bán chạy</a></li>
                            <li><a href="">Nổi bật</a></li>
                        </ul>
                    </div>
                </div>
                <div class="bottom-sach">
                    <div class="row hidden-xs">
                        <div class="col-sm-8">
                            <div class="carousel slide" data-ride="carousel" id="slide-5">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachnuoidaycon/baihatdanhchotremamnon.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Bài Hát Dành Cho Trẻ Mầm Non</span><br>
                                                <span>60.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachnuoidaycon/biancuanaophai.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Bí Ẩn Của Não Phải</span><br>
                                                <span>144.000đ</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachnuoidaycon/cho-den-mau-giao-thi-da-muon.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Chờ Đến Mẫu Giáo Thì Đã Muộn</span><br>
                                                <span>74.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachnuoidaycon/combo-nuoiconkhongphailacuocchien.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Combo Nuôi Con Không Phải Là Cuộc Chiến</span><br>
                                                <span>80.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachnuoidaycon/combomebietluoiconnennguoi+mebinh.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Combo Mẹ Biết Lười Con Nên Người</span><br>
                                                <span>99.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachnuoidaycon/connghidimekhongbiet.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Con Nghĩ Đi Mẹ Không Biết</span><br>
                                                <span>77.000đ</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachnuoidaycon/dayconyeusach-gieomamtinhcach.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Dạy Con Yêu Sách Gieo Mầm Tính Cách</span><br>
                                                <span>78.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachnuoidaycon/deconduocom.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Để Con Được Ốm</span><br>
                                                <span>76.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachnuoidaycon/nguoimethongminhselamthenay.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Người Mẹ Thông Minh Sẽ Làm Thế Này</span><br>
                                                <span>102.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachnuoidaycon/nguoimetothonlanguoithaytot.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Người Mẹ Tốt Hơn Là Người Thầy Tốt</span><br>
                                                <span>67.000đ</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachnuoidaycon/thoiquencuamenuoicontugiachoctap.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Thói Quen Của Mẹ Nuôi Con Tự Giác Học Tập</span><br>
                                                <span>77.000đ</span>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href=""><img src="./public_html/img/sachnuoidaycon/vocungtannhanvocungyeuthuong.jpg" class="thumbnail img-responsive"></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <span>Vô Cùng Tàn Nhẫn Vô Cùng Yêu Thương</span><br>
                                                <span>82.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#slide-5" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a href="#slide-5" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <a href=""><img src="./public_html/img/sachnuoidaycon/WHO-350x415.jpg" class="img-responsive"></a>
                        </div>
                    </div>

                    <div class="row visible-xs">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="./public_html/img/sachnuoidaycon/baihatdanhchotremamnon.jpg" class="img-responsive thumbnail">
                                <div class="caption">
                                    <span>Bài Hát Dành Cho Trẻ Mầm Non</span><br>
                                    <span>60.000đ</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./public_html/img/sachnuoidaycon/biancuanaophai.jpg" class="img-responsive thumbnail">
                                <div class="caption">
                                    <span>Bí Ẩn Của Não Phải</span><br>
                                    <span>144.000đ</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./public_html/img/sachnuoidaycon/cho-den-mau-giao-thi-da-muon.jpg" class="img-responsive thumbnail">
                                <div class="caption">
                                    <span>Chờ Đến Mẫu Giáo Thì Đã Muộn</span><br>
                                    <span>74.000đ</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./public_html/img/sachnuoidaycon/combo-nuoiconkhongphailacuocchien.jpg" class="img-responsive thumbnail">
                                <div class="caption">
                                    <span>Combo Nuôi Con Không Phải Là Cuộc Chiến</span><br>
                                    <span>80.000đ</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./public_html/img/sachnuoidaycon/combomebietluoiconnennguoi+mebinh.jpg" class="img-responsive thumbnail">
                                <div class="caption">
                                    <span>Combo Mẹ Biết Lười Con Nên Người</span><br>
                                    <span>99.000đ</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./public_html/img/sachnuoidaycon/connghidimekhongbiet.jpg" class="img-responsive thumbnail">
                                <div class="caption">
                                    <span>Con Nghĩ Đi Mẹ Không Biết</span><br>
                                    <span>77.000đ</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./public_html/img/sachnuoidaycon/dayconyeusach-gieomamtinhcach.jpg" class="img-responsive thumbnail">
                                <div class="caption">
                                    <span>Dạy Con Yêu Sách Gieo Mầm Tính Cách</span><br>
                                    <span>78.000đ</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./public_html/img/sachnuoidaycon/deconduocom.jpg" class="img-responsive thumbnail">
                                <div class="caption">
                                    <span>Để Con Được Ốm</span><br>
                                    <span>76.000đ</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./public_html/img/sachnuoidaycon/nguoimethongminhselamthenay.jpg" class="img-responsive thumbnail">
                                <div class="caption">
                                    <span>Người Mẹ Thông Minh Sẽ Làm Thế Này</span><br>
                                    <span>102.000đ</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./public_html/img/sachnuoidaycon/nguoimetothonlanguoithaytot.jpg" class="img-responsive thumbnail">
                                <div class="caption">
                                    <span>Người Mẹ Tốt Hơn Là Người Thầy Tốt</span><br>
                                    <span>67.000đ</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./public_html/img/sachnuoidaycon/thoiquencuamenuoicontugiachoctap.jpg" class="img-responsive thumbnail">
                                <div class="caption">
                                    <span>Thói Quen Của Mẹ Nuôi Con Tự Giác Học Tập</span><br>
                                    <span>77.000đ</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./public_html/img/sachnuoidaycon/vocungtannhanvocungyeuthuong.jpg" class="img-responsive thumbnail">
                                <div class="caption">
                                    <span>Vô Cùng Tàn Nhẫn Vô Cùng Yêu Thương</span><br>
                                    <span>82.000đ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="sach-nuoi-day-con.html">Xem thêm</a>
                    </div>
                </div>
            </div>

            <br>
            <div class="carousel slide" data-ride="carousel" id="slide-6">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-xs-3">
                                <a href=""><img src="./public_html/img/hoathinh/conan-1.png" class="img-responsive"></a>
                            </div>
                            <div class="col-xs-3">
                                <a href=""><img src="./public_html/img/hoathinh/One-Piece-2.png" class="img-responsive"></a>
                            </div>
                            <div class="col-xs-3">
                                <a href=""><img src="./public_html/img/hoathinh/Doremon-3.png" class="img-responsive"></a>
                            </div>
                            <div class="col-xs-3">
                                <a href=""><img src="./public_html/img/hoathinh/Shin-4.png" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-xs-3">
                                <a href=""><img src="./public_html/img/hoathinh/Thamtu-Kindaichi-5.png" class="img-responsive"></a>
                            </div>
                            <div class="col-xs-3">
                                <a href=""><img src="./public_html/img/hoathinh/YoGiOh-6.png" class="img-responsive"></a>
                            </div>
                            <div class="col-xs-3">
                                <a href=""><img src="./public_html/img/hoathinh/Dragon-ball-7.png" class="img-responsive"></a>
                            </div>
                            <div class="col-xs-3">
                                <a href=""><img src="./public_html/img/hoathinh/Pokemon-8.png" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#slide-6" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#slide-6" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
<!--/CONTENT-->

<!-- Footer -->
<?php require_once("resources/templates/footer.php") ?>

</body>
</html>