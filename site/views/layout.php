<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./views/scss/style.css">
    <link rel="stylesheet" href="./views/css/style2.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="">
                    <h2>Blog</h2>
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="">Kỹ năng</a></li>
                    <li><a href="">Diễn đàn</a></li>
                    <li><a href="">Giới thiệu</a></li>
                    <li><a href="">Liên hệ</a></li>
                </ul>
            </div>
            <div class="account">
                <a href="">Đăng nhập</a>
                <a href="">Đăng ký</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="./views/img/banner1.jpg" class="d-block w-100" alt="..." height="420px">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="./views/img/banner2.jpg" class="d-block w-100" alt="..." height="420px">
                            </div>
                            <div class="carousel-item">
                                <img src="./views/img/banner3.jpg" class="d-block w-100" alt="..." height="420px">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="box_banner">
                                <div class="box_banner-img">
                                    <img src="./views/img/banner4.jpg" alt="">
                                </div>
                                <div class="box_banner-text">
                                    <a href="">Bí Quyết Giải Quyết Công Việc Hiệu Quả</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box_banner">
                                <div class="box_banner-img">
                                    <img src="./views/img/banner5.jpg" alt="">
                                </div>
                                <div class="box_banner-text">
                                    <a href="">Vừa Học Vừa Làm, Có Gì Khó?</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box_banner">
                                <div class="box_banner-img">
                                    <img src="./views/img/banner6.jpg" alt="">
                                </div>
                                <div class="box_banner-text">
                                    <a href="">6 Nguyên Tắc Vàng Để Thành Công</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box_banner">
                                <div class="box_banner-img">
                                    <img src="./views/img/banner7.jpg" alt="">
                                </div>
                                <div class="box_banner-text">
                                    <a href="">Chiến Lược Nghề Nghiệp Cho Tương Lai</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="content-left">
                    <div class="title">
                        <h2 class="title-bg-green">Kỹ năng giao tiếp</h2>
                    </div>
                    <div class="row mt-3 mb-5 shadow-sm p-3 mx-1 bg-body rounded">
                        <div class="col-sm-6">
                            <div class="card border-0" style="width: 100%;">
                                <img src="./views/img/kngt4.jpg" class="card-img-top" alt="..." style="background-color: #ccc;">
                                <div class="card-body ps-0">
                                    <h3><a class="card-text text-dark text-decoration-none" href="#">Kỹ Năng Lắng Nghe Hiệu Quả</a></h3>
                                    <p class="card-text">Lắng nghe là một kĩ năng không phải ai cũng có được. Người ta có thể nói rất nhiều nhưng nghe thì không phải ai cũng đủ kiên nhẫn...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card mb-3 border-0 border-bottom pb-4" style="max-width: 100%;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="./views/img/kngt1.jpg" alt="..." width="100%" height="100%" style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body pt-0">
                                            <h6 class="card-title"><a class="card-text text-dark text-decoration-none" href="#">Chìa khóa đàm phán thành công là kỹ năng lắng nghe</a></h6>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 border-0 border-bottom pb-4" style="max-width: 100%;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="./views/img/kngt2.jpg" alt="..." width="100%" height="100%" style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body pt-0">
                                            <h6 class="card-title"><a class="card-text text-dark text-decoration-none" href="#">Như Thế Nào Được Gọi Là Lắng Nghe ?</a></h6>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 border-0 border-bottom pb-4" style="max-width: 100%;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="./views/img/kngt3.jpg" alt="..." width="100%" height="100%" style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body pt-0">
                                            <h6 class="card-title"><a class="card-text text-dark text-decoration-none" href="#">Lắng nghe tích cực</a></h6>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Kỹ năng tư duy -->
                    <div class="title-blue">
                        <h2 class="title-bg-blue">Kỹ năng tư duy</h2>
                    </div>
                    <div class="row mt-3 mb-5 shadow-sm p-3 mx-1 bg-body rounded">
                        <div class="col-sm-6">
                            <div class="card border-0" style="width: 100%;">
                                <img src="./views/img/banner1.jpg" class="card-img-top" alt="..." style="background-color: #ccc;">
                                <div class="card-body ps-0">
                                    <h3><a class="card-text text-dark text-decoration-none" href="#">4 kỹ năng cần có cho khi đi du học</a></h3>
                                    <p>Khi đi du học, bạn phải chấp nhận thích nghi với lối sống, văn hóa và xã hội của mỗi nước...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card mb-3 border-0 border-bottom pb-4" style="max-width: 100%;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="./views/img/tdst1.jpg" alt="..." width="100%" height="100%" style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body pt-0">
                                            <h6 class="card-title"><a class="card-text text-dark text-decoration-none" href="#">Tư Duy Sáng Tạo Có Tầm Quan Trọng Như Thế Nào</a></h6>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 border-0 border-bottom pb-4" style="max-width: 100%;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="./views/img/tdst2.jpg" alt="..." width="100%" height="100%" style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body pt-0">
                                            <h6 class="card-title"><a class="card-text text-dark text-decoration-none" href="#">Nghiên Cứu 75 Năm Chỉ Ra Những Điều Mang Đến Hạnh</a></h6>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 border-0 border-bottom pb-4" style="max-width: 100%;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="./views/img/tdst3.jpg" alt="..." width="100%" height="100%" style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body pt-0">
                                            <h6 class="card-title"><a class="card-text text-dark text-decoration-none" href="#">Biết Cách Từ Bỏ Để Thành Công</a></h6>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                    <!-- Kỹ năng phát triển  -->
                    <div class="title-danger">
                        <h2 class="title-bg-danger ">Kỹ năng phát triển tiềm năng</h2>
                    </div>
                    <div class="row mt-3 mb-5 shadow-sm p-3 mx-1 bg-body rounded">
                        <div class="col-sm-6">
                            <div class="card border-0" style="width: 100%;">
                                <img src="./views/img/knh1.jpg" class="card-img-top" alt="..." style="background-color: #ccc;">
                                <div class="card-body pt-0">
                                    <h3><a class="card-text text-dark text-decoration-none" href="#">Rèn luyện kĩ năng học tiếng Nhật hiệu quả nhất</a></h3>
                                    <p>Nhật Bản là một trong những quốc gia trên đà phát triển và vươn lên trên thế giới, rất nhiều nước đã bắt đầu hợp tác đầu tư với Nhật, trong đó có Việt Nam. Việc biết tiếng Nhật hiện nay là một lợi thế...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card mb-3 border-0 border-bottom pb-4" style="max-width: 100%;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="./views/img/knh2.jpg" alt="..." width="100%" height="100%" style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body pt-0 ">
                                            <h6 class="card-title"><a class="card-text text-dark text-decoration-none" href="#">Những thời điểm học tiếng Anh hiệu quả nhất mà bạn nên biết</a></h6>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 border-0 border-bottom pb-4" style="max-width: 100%;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="./views/img/knh3.jpg" alt="..." width="100%" height="100%" style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body pt-0">
                                            <h6 class="card-title"><a class="card-text text-dark text-decoration-none" href="#">Những kỹ năng học tập hiệu quả mà bạn cần biết</a></h6>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 border-0 border-bottom pb-4" style="max-width: 100%;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="./views/img/knh4.jpg" alt="..." width="100%" height="100%" style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body pt-0">
                                            <h6 class="card-title"><a class="card-text text-dark text-decoration-none" href="#">7 Bước Để Xây Dựng Kế Hoạch Làm Việc Hiệu Quả</a></h6>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
                <div class="content-right">
                    <div class="title">
                        <h2 class="title-bg-green">Bài viết mới</h2>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card mb-3 border-0 shadow-sm p-3 mb-2 bg-body rounded" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="./views/img/bvn1.jpg" alt="..." width="100%" height="100%" style="object-fit: cover;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body pt-0">
                                                <h6 class="card-title"><a class="card-text text-dark text-decoration-none" href="#">Tầm quan trọng trong việc lập kế hoạch</a></h6>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 border-0 shadow-sm p-3 mb-2 bg-body rounded" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="./views/img/bvn2.jpg" alt="..." width="100%" height="100%" style="object-fit: cover;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body pt-0">
                                                <h6 class="card-title"><a class="card-text text-dark text-decoration-none" href="#">Cách từ chối không làm mất lòng</a></h6>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 border-0 shadow-sm p-3 mb-2 bg-body rounded" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="./views/img/bvn3.jpg" alt="..." width="100%" height="100%" style="object-fit: cover;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body pt-0">
                                                <h6 class="card-title"><a class="card-text text-dark text-decoration-none" href="#">Kỹ năng tự nhận thức</a></h6>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 border-0 shadow-sm p-3 mb-2 bg-body rounded" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="./views/img/bvn4.jpg" alt="..." width="100%" height="100%" style="object-fit: cover;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body pt-0">
                                                <h6 class="card-title"><a class="card-text text-dark text-decoration-none" href="#">7 bước để xây dựng kế hoạch</a></h6>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="card mb-3 border-0 shadow-sm p-3 mb-2 bg-body rounded" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="./views/img/bvn4.jpg" alt="..." width="100%" height="100%" style="object-fit: cover;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body pt-0">
                                                <h6 class="card-title"><a class="card-text text-dark text-decoration-none" href="#">Lắng nghe tích cực</a></h6>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-footer">
        <div class="container">
            <div class="row">
               <div class="col-sm-4">
                    <h2 class="title-footer mb-4">VỀ CHÚNG TÔI</h2>
                    <p class="text-white">Dawn là nơi chia sẻ những kiến thức và kỹ năng cần thiết trong cuộc sống giúp học sinh, sinh viên hiểu thêm
                         về những kỹ năng cần thiết trong cuộc sống, công việc, học tập để có thể vững tin bước đi bằng chính đôi chân của mình.</p>
                </div>
                <div class="col-sm-4 ms-auto">
                    <h2 class="title-footer mb-4">LIÊN HỆ</h2>
                    <ul class="list-unstyled text-white">
                        <li class="mb-2">Địa chỉ: Cao đẳng FPT</li>
                        <li class="mb-2">Điện thoại: **********</li>
                        <li class="mb-2">Email: test@gmail.com</li>
                    </ul>
                </div>
              
            </div>
        </div>

    </footer>
</body>

</html>