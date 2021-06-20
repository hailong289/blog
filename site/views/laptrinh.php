<div class="container">
    <div class="content">
        <div class="content-left">
            <div class="w-100 bvm mb-3 ">
                <h2><?=$title_dm?></h2>
                <!-- <div class="bai-viet-moi">
                        </div> -->
                <!-- <div class="row mt-4"> -->
                   <?php foreach($bvlaptrinh as $bv): ?>
                   
                    <div class="card mb-3 mt-4" style="width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../upload/<?=$bv['img']?>" alt="..." width="100%" height="200px" style="object-fit: cover;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                   <a href="?act=bai-viet&id=<?= $bv['idbv'] ?>" class="text-dark text-decoration-none"><h5 class="card-title"><?=$bv['tieude']?></h5></a> 
                                    <p class="card-text"><?=substr($bv['tomtat'],0,250)?>......</p>
                                    <p class="card-text"><small class="text-muted"><?=$bv['thoigian']?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php endforeach; ?>
                  <?=$links?>
                <!-- </div> -->
            </div>
            <!-- End -->
        </div>
        <div class="content-right">
        <div class="w-100 shadow-sm p-0 mb-5 bg-body rounded border bvnb">
                <h2>Bài viết mới</h2>
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