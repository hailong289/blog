<style>
    @media screen and(max-width:480px) {
        .bv-container {
            width: 90% !important;
        }
    }
</style>

<div class="container bv-container" style="width: 50%;">
    <div class="w-100 mb-5 shadow-sm p-3 mb-5 bg-body rounded" style="overflow: hidden;">
        <div class="card mb-3 border-0 bg-transparent" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-1">
                    <img src="../upload/user.jpg" class="rounded-circle" alt="..." width="80px" height="80px">
                </div>
                <div class="col-md-10">
                    <div class="card-body ps-5 pt-1">
                        <h5 class="card-title"><?= $user['hoten'] ?></h5>
                        <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                        <p class="card-text"><small class="text-muted">Đăng ngày: <?= $bv['thoigian'] ?> trong góc <?= $dm['tendm'] ?></small></p>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="mb-4 mt-2"><?= $bv['tieude'] ?></h1>
        <?= $bv['noidung'] ?>
        <!-- <form action="" method="post" class="mt-5"> -->
        <h2>Bình luận</h2>
        <div class="mb-3">
            <!-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> -->
            <textarea class="form-control" rows="3" id="noidung"></textarea>
        </div>
        <div class="mb-3">
            <div class="d-flex justify-content-between">
                <div></div>
                <input type="hidden" name="idUser" value="<?= $_SESSION['idnd'] ?>">
                <input type="hidden" name="idbv" value="<?= $bv['idbv'] ?>">
                <button type="button" class="btn btn-primary float-end" id="bl">Gửi</button>
            </div>
        </div>

        <!-- </form> -->
    <div id="comment">
    </div>
    </div>
   
    <script>
        $('#bl').click(function(e) {
            // e.preventDefault();
            noidung = $('textarea#noidung').val();
            id = $('input[name=idUser]').val();
            idbv = $('input[name=idbv]').val();
            if (noidung.length > 0) {
                $.ajax({
                    type: "GET",
                    url: "?act=binhluan",
                    data: {
                        noidung: noidung,
                        idbv: idbv,
                        id: id
                    },
                    // dataType: "dataType",
                    success: function(response) {
                        // console.log(response);
                        $('textarea#noidung').val('');
                    }
                });
            }
        });
        setInterval(() => {
            //    id = $('input[name=idUser]').val();
            idbv = $('input[name=idbv]').val();
            $.ajax({
                type: "GET",
                url: "?act=listbl",
                data: {
                    idbv: idbv
                },
                //    dataType: "dataType",
                success: function(response) {
                    console.log(response);
                    $('#comment').html(response);
                }
            });
        }, 1000);
    </script>
    <!-- <div class="media">
      
        <div class="media-body">
            <h5 class="mt-0">Tiêu đề phần tử Media</h5>
            <p>Phần tử <code>.media</code> có sử dụng kỹ thuật <a href="/su-dung-flexbox-bo-cuc-trang-trong-css.html">flexbox</a> của CSS, nên việc căn chỉnh vị trí của hình ảnh theo chiều đứng dễ dàng bởi các thuộc tình về align-self <code>.align-self-end</code>, <code>.align-self-start</code>, <code>.align-self-end</code>, <code>.align-self-auto</code>, <code>.align-self-center</code>, <code>.align-self-center</code></p>
            <p>Nếu muốn hình ảnh hiện thị phía sau thì có thể để <code>&lt;img&gt;</code> sau <code>.media-body</code> trong HTML, hoặc để nguyên HTML nhưng điều chỉnh lại thứ tự hiện thị bằng các thuộc tính <code>.order-{0-12}</code> và <code>.order-first</code>, <code>.order-last</code>, vị dụ hiện thị thứ 2 là <code>.order-2</code></p>
        </div>
    </div> -->
    <!-- <div class="w-100 mt-5 mb-5">
               
            </div> -->
</div>