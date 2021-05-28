<div class="container" style="width: 50%!important;">
    <div class="w-100 mb-5 shadow-sm p-3 mb-5 bg-body rounded">
        <form action="?act=dangbai_" method="post" class="mt-5" enctype="multipart/form-data">
            <h2 class="text-center mb-5">Viết bài</h2>
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Chủ đề</label>
                <select class="form-select" aria-label="Default select example" name="dm">
                    <!-- <option value="1">One</option> -->
                    <?php foreach ($dm as $dm) : ?>
                        <option value="<?= $dm['iddm'] ?>"><?= $dm['tendm'] ?></option>
                    <?php endforeach; ?>
                    <!-- <option value="2">Two</option>
                    <option value="3">Three</option> -->
                </select>
                <input type="hidden" name="idUser" value="<?= $_SESSION['idnd'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tiêu đề</label>
                <input type="text" name="tieude" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ảnh bìa</label>
                <input type="file" name="img" class="form-control" id="exampleFormControlInput1" onchange="loadFile(event)">
                <img src="" id="output" alt="" width="100%" class="mt-3 mb-3" height="300px" style="display: none;">
                <script>
                    var loadFile = function(event) {
                        var output = document.getElementById('output');
                        output.style.display = 'block';
                        output.src = URL.createObjectURL(event.target.files[0]);
                        output.onload = function() {
                            URL.revokeObjectURL(output.src) // free memory
                        }
                    };
                </script>
            </div>
            <div class="mb-3">
                <!-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> -->
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="baiviet"></textarea>
            </div>
            <div class="mb-3">
                <!-- <div class="d-flex justify-content-between"> -->
                <!-- <div></div> -->
                <button type="submit" class="btn btn-warning text-white w-100">Đăng bài</button>
                <!-- </div> -->
            </div>
        </form>
    </div>
    <!-- <div class="w-100 mt-5 mb-5">
               
            </div> -->
</div>