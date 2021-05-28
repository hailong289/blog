<div class="container">
    <div class="content">
        <div class="content-left">
            <div class="w-100 bvm mb-3 ">
                <h2>Bài nổi bật</h2>
                <!-- <div class="bai-viet-moi">
                        </div> -->
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <div class="card border-0 border-bottom" style="width: 100%;">
                            <img src="../upload/<?= $nb1['img'] ?>" class="card-img-top" alt="..." width="100%" height="220px" style="object-fit: cover;">
                            <div class="card-body">
                                <a href="?act=bai-viet&id=<?= $nb1['idbv'] ?>" class="text-dark text-decoration-none">
                                    <h5 class="card-title"><?= $nb1['tieude'] ?></h5>
                                </a>
                                <div class="card mt-5 border-0" style="max-width: 100%;">
                                    <div class="row g-0">
                                        <div class="col-md-1">
                                            <img src="./views/img/user.jpg" class="rounded-circle" alt="..." width="40px" height="40px">
                                        </div>
                                        <div class="col-md-11">
                                            <div class="card-body ps-4 pt-2">
                                                <h5 class="card-title mb-0">long</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <?php foreach ($bvnb as $nb) : ?>
                                <div class="col-sm-12 mb-3" style="height: 120px;">
                                    <div class="card mb-3 border-0 border-bottom" style="width: 100%;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="../upload/<?= $nb['img'] ?>" class="card-img-top" alt="..." width="100%" height="120px" style="object-fit: cover;">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body pb-0">
                                                    <a href="?act=bai-viet&id=<?= $nb['idbv'] ?>" class="text-dark text-decoration-none">
                                                        <h6 class="card-title"><?= $nb['tieude'] ?></h6>
                                                    </a>

                                                    <div class="d-flex justify-content-between pt-2">
                                                        <div class="img">
                                                            <img src="../upload/user.jpg" alt="" style="width: 30px;height: 30px;border-radius:50%;text-align: left;object-fit: cover;">
                                                        </div>
                                                        <div class="name_user">
                                                            <p style="margin-right: 60px;">long</p>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 14px;margin-left: auto;"><small><?= $nb['thoigian'] ?></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Góc lập trình -->
            <div class="w-100 glt">
                <h2>Góc lập trình</h2>
                <h1 style="width: 100%;text-align: center;line-height: 200px;">Chưa có bài viết</h1>
                <!-- <div class="row mt-4">
                    <div class="col-sm-6">
                        <div class="card border-0 border-bottom" style="width: 100%;">
                            <img src="../upload/<?= $nb1['img'] ?>" class="card-img-top" alt="..." width="100%" height="220px" style="object-fit: cover;">
                            <div class="card-body">
                                <a href="?act=bai-viet&id=<?= $nb1['idbv'] ?>" class="text-dark text-decoration-none">
                                    <h5 class="card-title"><?= $nb1['tieude'] ?></h5>
                                </a>
                                <div class="card mt-5 border-0" style="max-width: 100%;">
                                    <div class="row g-0">
                                        <div class="col-md-1">
                                            <img src="./views/img/user.jpg" class="rounded-circle" alt="..." width="40px" height="40px">
                                        </div>
                                        <div class="col-md-11">
                                            <div class="card-body ps-4 pt-2">
                                                <h5 class="card-title mb-0">long</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <?php foreach ($bvnb as $nb) : ?>
                                <div class="col-sm-12 mb-3" style="height: 120px;">
                                    <div class="card mb-3 border-0 border-bottom" style="width: 100%;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="../upload/<?= $nb['img'] ?>" class="card-img-top" alt="..." width="100%" height="120px" style="object-fit: cover;">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body pb-0">
                                                    <a href="?act=bai-viet&id=<?= $nb['idbv'] ?>" class="text-dark text-decoration-none">
                                                        <h6 class="card-title"><?= $nb['tieude'] ?></h6>
                                                    </a>

                                                    <div class="d-flex justify-content-between pt-2">
                                                        <div class="img">
                                                            <img src="../upload/user.jpg" alt="" style="width: 30px;height: 30px;border-radius:50%;text-align: left;object-fit: cover;">
                                                        </div>
                                                        <div class="name_user">
                                                            <p style="margin-right: 60px;">long</p>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 14px;margin-left: auto;"><small><?= $nb['thoigian'] ?></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- End -->
            <!-- góc kỹ năng -->
            <div class="w-100 gkn">
                <h2>Góc kỹ năng</h2>
                <h1 style="width: 100%;text-align: center;line-height: 200px;">Chưa có bài viết</h1>
                <!-- <div class="row mt-4">
                    <div class="col-sm-6">
                        <div class="card border-0 border-bottom" style="width: 100%;">
                            <img src="../upload/<?= $nb1['img'] ?>" class="card-img-top" alt="..." width="100%" height="220px" style="object-fit: cover;">
                            <div class="card-body">
                                <a href="?act=bai-viet&id=<?= $nb1['idbv'] ?>" class="text-dark text-decoration-none">
                                    <h5 class="card-title"><?= $nb1['tieude'] ?></h5>
                                </a>
                                <div class="card mt-5 border-0" style="max-width: 100%;">
                                    <div class="row g-0">
                                        <div class="col-md-1">
                                            <img src="./views/img/user.jpg" class="rounded-circle" alt="..." width="40px" height="40px">
                                        </div>
                                        <div class="col-md-11">
                                            <div class="card-body ps-4 pt-2">
                                                <h5 class="card-title mb-0">long</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <?php foreach ($bvnb as $nb) : ?>
                                <div class="col-sm-12 mb-3" style="height: 120px;">
                                    <div class="card mb-3 border-0 border-bottom" style="width: 100%;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="../upload/<?= $nb['img'] ?>" class="card-img-top" alt="..." width="100%" height="120px" style="object-fit: cover;">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body pb-0">
                                                    <a href="?act=bai-viet&id=<?= $nb['idbv'] ?>" class="text-dark text-decoration-none">
                                                        <h6 class="card-title"><?= $nb['tieude'] ?></h6>
                                                    </a>

                                                    <div class="d-flex justify-content-between pt-2">
                                                        <div class="img">
                                                            <img src="../upload/user.jpg" alt="" style="width: 30px;height: 30px;border-radius:50%;text-align: left;object-fit: cover;">
                                                        </div>
                                                        <div class="name_user">
                                                            <p style="margin-right: 60px;">long</p>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 14px;margin-left: auto;"><small><?= $nb['thoigian'] ?></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- End -->
            <!-- góc Ngoại ngữ -->
            <div class="w-100 gnn">
                <h2>Góc ngoại ngữ</h2>
                <h1 style="width: 100%;text-align: center;line-height: 200px;">Chưa có bài viết</h1>
                <!-- <div class="row mt-4">
                    <div class="col-sm-6">
                        <div class="card border-0 border-bottom" style="width: 100%;">
                            <img src="../upload/<?= $nb1['img'] ?>" class="card-img-top" alt="..." width="100%" height="220px" style="object-fit: cover;">
                            <div class="card-body">
                                <a href="?act=bai-viet&id=<?= $nb1['idbv'] ?>" class="text-dark text-decoration-none">
                                    <h5 class="card-title"><?= $nb1['tieude'] ?></h5>
                                </a>
                                <div class="card mt-5 border-0" style="max-width: 100%;">
                                    <div class="row g-0">
                                        <div class="col-md-1">
                                            <img src="./views/img/user.jpg" class="rounded-circle" alt="..." width="40px" height="40px">
                                        </div>
                                        <div class="col-md-11">
                                            <div class="card-body ps-4 pt-2">
                                                <h5 class="card-title mb-0">long</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <?php foreach ($bvnb as $nb) : ?>
                                <div class="col-sm-12 mb-3" style="height: 120px;">
                                    <div class="card mb-3 border-0 border-bottom" style="width: 100%;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="../upload/<?= $nb['img'] ?>" class="card-img-top" alt="..." width="100%" height="120px" style="object-fit: cover;">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body pb-0">
                                                    <a href="?act=bai-viet&id=<?= $nb['idbv'] ?>" class="text-dark text-decoration-none">
                                                        <h6 class="card-title"><?= $nb['tieude'] ?></h6>
                                                    </a>

                                                    <div class="d-flex justify-content-between pt-2">
                                                        <div class="img">
                                                            <img src="../upload/user.jpg" alt="" style="width: 30px;height: 30px;border-radius:50%;text-align: left;object-fit: cover;">
                                                        </div>
                                                        <div class="name_user">
                                                            <p style="margin-right: 60px;">long</p>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 14px;margin-left: auto;"><small><?= $nb['thoigian'] ?></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- End -->
        </div>
        <div class="content-right">
            <div class="w-100 shadow-sm p-0 mb-5 bg-body rounded border bvnb">
                <h2>Bài mới</h2>
                <?php foreach ($bvnew as $bv) : ?>
                    <div class="card mb-2 border-0 p-2" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="../upload/user.jpg" alt="..." width="50px" height="50px">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body pt-0">
                                    <a href="?act=bai-viet&id=<?= $bv['idbv'] ?>" class="text-dark text-decoration-none">
                                        <h6 class="card-title"><?= $bv['tieude'] ?></h6>
                                    </a>
                                    <div class="d-flex mb-0">
                                        <p class="card-text mb-1">Người đăng: <?= $this->model->User_DangBai($bv['iduser']); ?></p>
                                        <p class="mb-0 ms-auto">Chủ đề: <?= $this->model->Danhmuc_Bai($bv['iddm']) ?></p>
                                    </div>
                                    <p class="card-text w-100"><small class="text-muted"> <?= $bv['thoigian'] ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Thảo luận -->
            <div class="w-100 shadow-sm p-0 mb-5 bg-body rounded border">
                <h2>Thảo luận</h2>
                <div class="tlnd">
                </div>
                <form action="#" method="post" class="p-2">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Nội dung</label>
                        <input type="hidden" name="iduser" value="<?= $_SESSION['idnd'] ?>">
                        <textarea class="form-control" id="exampleFormControlTextareatl2" rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-success w-100" id="thaoluan">Gửi</button>
                </form>
                <script>
                    $('#thaoluan').click(function(e) {
                        id = $('input[name=iduser]').val();
                        noidung = $('textarea#exampleFormControlTextareatl2').val();
                        e.preventDefault();
                        if (noidung.length > 0) {
                            $.ajax({
                                type: "POST",
                                url: "?act=thaoluan",
                                data: {
                                    id: id,
                                    noidung: noidung
                                },
                                // dataType: "dataType",
                                success: function(response) {
                                    // console.log(response);
                                    $('textarea#exampleFormControlTextareatl2').val('');
                                }
                            });
                        }
                    });
                    setInterval(() => {
                        id = $('input[name=iduser]').val();
                            $.ajax({
                                type: "GET",
                                url: "?act=thaoluan",
                                // data: {id: id},
                                // dataType: "dataType",
                                success: function(response) {
                                    // console.log(response);
                                    // $('textarea#exampleFormControlTextareatl2').val('');
                                    $('.tlnd').html(response);
                                }
                            });
                    }, 500);
                </script>
            </div>
            <!-- End -->
        </div>
    </div>
</div>