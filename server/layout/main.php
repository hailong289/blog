<!DOCTYPE html>
<html lang="vi">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>D A W N</title>

        <?php $headBool = new boolean(); ?>
            <!-- Jquery -->
            <script src="<?= $headBool->issetURL('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', null, '../public/js/jquery_3.5.1.js') ?>">
            </script>
            <!-- Bootstrap -->
            <?= $headBool->issetURL(
                    'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css',
                    '<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet" 
                        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">',
                    '<link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">'
                )
            ?>
            <?= $headBool->issetURL(
                    'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js',
                    '<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
                        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>',
                    '<script src="../public/bootstrap/js/bootstrap.min.js"></script>'
                )
            ?>
        <?php unset($headBool) ?>

        <?php $this->renderSection('head'); ?>

    </head>

    <body class="gray-bg">

        <header class="dawn-header fixed-top shadow-sm bside-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="navbar navbar-expand-lg navbar-dark dawn-navbar px-0">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#dawn-header-navbar" aria-controls="dawn-header-navbar" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="dawn-header-navbar">
                                <p class="dawn-header-logo mr-auto"><a href="main.php">DAWN</a></p>
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="main.php">Trang chủ <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item" data-active="accounts">
                                        <a class="nav-link" href="main.php?ctrl=posts">Bài viết</a>
                                    </li>
                                    <li class="nav-item" data-active="discussions">
                                        <a class="nav-link" href="#">Thảo luận</a>
                                    </li>
                                    <li class="nav-item" data-active="comments">
                                        <a class="nav-link" href="#">Bình luận</a>
                                    </li>
                                    <li class="nav-item" data-active="users">
                                        <a class="nav-link" href="#">Người dùng</a>
                                    </li>
                                    <li class="nav-item dropdown" data-active="other">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Khác
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Giới thiệu</a>
                                            <a class="dropdown-item" href="#">Danh mục</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="dropdown ml-auto">
                                    <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        ADMIN
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Hồ sơ</a>
                                        <a class="dropdown-item" href="#">Cài đặt</a>
                                        <a class="dropdown-item" href="#">Khác</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <?php $this->renderSection('header'); ?>
        
        <section>
            <div class="container">
                <div class="row">
                    
                    <?php $this->renderSection('aside'); ?>

                    <?php $this->renderSection('article'); ?>

                </div>
            </div>
        </section>

        
        <footer class="dawn-footer">
            
            <?php $this->renderSection('footer'); ?>
            
            <div class="container dawn-footer-contents">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Dawn</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center bside-txt"><a href="#" target="_blank">dawnteam</a></span>
            </div>
        </footer>

        <?php $this->renderSection('script'); ?>

    </body>

</html>