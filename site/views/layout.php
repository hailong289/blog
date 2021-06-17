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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.11/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="">
                    <img src="../upload/logo.png" alt="">
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="?act=danhsach">Diễn đàn</a></li>
                    <li><a href="">Giới thiệu</a></li>
                    <li><a href="">Liên hệ</a></li>
                </ul>
            </div>
            <div class="account">
                <?php if (isset($_SESSION['idnd'])==false) { ?>
                    <a href="?act=login">Đăng nhập</a>
                    <a href="?act=signup">Đăng ký</a>
                <?php } else { ?>
                    <div class="dropdown">
                        <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <?=$_SESSION['name']?>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Thông tin tài khoản</a></li>
                            <li><a class="dropdown-item" href="#">Bài viết của tôi</a></li>
                            <li><a class="dropdown-item" href="?act=dangbai">Đăng bài</a></li>
                            <li><a class="dropdown-item" href="?act=logout">Đăng xuất</a></li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </nav>
    </header>
    <main>
        <?php if (isset($view) && file_exists($view) == true) require_once $view;
        else echo "không có";  ?>
    </main>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>Về chúng tôi</h6>
                    <p class="text-justify">DAWN.com
                        là một WEBSITE chia sẽ kiến thức lập trình. 
                        DAWN tập trung vào việc cung cấp kiến hiệu quả nhất và giúp thự hiện chúng đơn giản. 
                        Chúng tôi sẽ giúp các lập trình viên xây dựng các khái niệm bằng các ngôn ngữ lập trình khác nhau bao gồm 
                        C, C ++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL và Algorithm.
                     </p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Danh mục</h6>
                    <ul class="footer-links">
                    <li><a href="">C</a></li>
                    <li><a href="">UI Design</a></li>
                    <li><a href="">PHP</a></li>
                    <li><a href="">Java</a></li>
                    <li><a href="">Android</a></li>
                    <li><a href="">Templates</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Các links liên kết</h6>
                    <ul class="footer-links">
                    <li><a href="http://scanfcode.com/about/">Về chúng tôi</a></li>
                    <li><a href="http://scanfcode.com/contact/">Liên hệ với chúng tô</a></li>
                    <li><a href="http://scanfcode.com/privacy-policy/">Chính sách bảo mật</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
                <a href="#">DAWN</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
<script>
    CKEDITOR.replace('baiviet');
</script>
<script src="./views/js/ajax.js"></script>

</html>