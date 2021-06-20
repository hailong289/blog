$(document).ready(function () {
    $('#dangky').on('click', function () {
        hoten = $('input[name=hoten]').val();
        Email = $('input[name=email]').val();
        tentk = $('input[name=tentk]').val();
        pass = $('input[name=pass]').val();
        // if(hoten.length == 0 || Email.length == 0 || tentk.length ==0 || pass.length ==0){
        //     alert('Không để trống')
        // }else{
        // if($('input[name=check]').attr('checked')){
        //     savepass = $('input[name=check]').val();
        // }else{
        //     savepass = 0;
        // }
        data = {
            hoten: hoten,
            email: Email,
            tentk: tentk,
            pass: pass
        };
        $.ajax({
            type: "POST",
            url: "?act=signUp",
            data: data,
            // dataType: "dataType",
            success: function (response) {
                if(response){
                    Swal.fire(
                        'Đăng ký thành công !',
                        '',
                        'success'
                    ).then(res=>{
                         window.location = 'index.php'; 
                    });
                }
            }
        });
       
       
    });
    $('#dangnhap').click(function (e) { 
        e.preventDefault();
        tentk = $('input[name=tentk]').val();
        pass = $('input[name=pass]').val();
        data = {
            tentk: tentk,
            pass: pass
        }
        $.ajax({
            type: "POST",
            url: "?act=signIn",
            data: data,
            // dataType: "dataType",
            success: function (response) {
                if(response == 1){
                    Swal.fire(
                        'Đăng nhập thành công !',
                        '',
                        'success'
                    ).then(res=>{
                         window.location = 'index.php'; 
                    });
               }else{
                  Swal.fire(
                    'Đăng nhập thất bại!',
                    '',
                    'warning'
                  )
               }
            }
        });
    });
    // $().submit(function (e) { 
   
     
    // });
});
// search
document.addEventListener("touchstart", function(){}, true);