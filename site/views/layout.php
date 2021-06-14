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
    <footer class="bg-footer">
        <div class="container">
            <div class="row mt-4">
                <div class="col-sm-4">
                    <h2 class="title-footer mb-4">VỀ CHÚNG TÔI</h2>
                    <p class="text-dark">Dawn là nơi chia sẻ những kiến thức và kỹ năng cần thiết trong cuộc sống giúp học sinh, sinh viên hiểu thêm
                        về những kỹ năng cần thiết trong cuộc sống, công việc, học tập để có thể vững tin bước đi bằng chính đôi chân của mình.</p>
                </div>
                <div class="col-sm-4 ms-auto">
                    <h2 class="title-footer mb-4">LIÊN HỆ</h2>
                    <ul class="list-unstyled text-dark">
                        <li class="mb-2">Địa chỉ: Cao đẳng FPT</li>
                        <li class="mb-2">Điện thoại: +84 12345678</li>
                        <li class="mb-2">Email: dawm999@gmail.com</li>
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