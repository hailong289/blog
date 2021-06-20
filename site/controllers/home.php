<?php
require_once 'model/model_home.php';
class Home
{

    public function __construct()
    {
        $this->model = new model_home;
        $act = "home";
        if (isset($_GET['act']) == true) $act = $_GET['act'];
        switch ($act) {
            case 'home':
                $this->index();
                break;
            case 'bai-viet';
                $this->baiviet();
                break;
            case 'dangbai_':
                $this->dangbai_();
                break;
            case 'login':
                $this->signIn();
                break;
            case 'signIn':
                $this->login();
                break;
            case 'signup':
                $this->signUp();
                break;
            case 'signUp':
                $this->SaveTK();
                break;
            case 'dangbai':
                $this->dangbai();
                break;
            case 'danhsach':
                $this->List();
                break;
            case 'goclaptrinh':
                $this->Listlaptrinh();
                break;
            case 'gockynang':
                $this->Listkynang();
                break;
            case 'gocngoaingu':
                $this->Listngoaingu();
                break;
            case 'binhluan':
                $this->comment();
                break;
            case 'listbl':
                $this->Listcomment();
                break;
            case 'thaoluan':
                $this->thaoluan();
                break;
            case 'logout':
                $this->logout();
                break;
            default:
                # code...
                break;
        }
    }

   public function logout()
   {
       session_destroy();
       header('location: index.php');
   }
    public function index()
    {
        $title = "Trang chủ";
        //    echo "home";
        $nb1 = $this->model->GetNbbv();
        $bvnb = $this->model->GetAllNbbv();
        $bvnew = $this->model->ListBV_new();

        $view = "views/home.php";
        require_once "views/layout.php";
    }
    public function baiviet()
    {
        $title = "Bài viết";
        $id = $_GET['id'];
        $bv = $this->model->GetBVByID($id);
        $dm = $this->model->getdm($bv['iddm']);
        $user = $this->model->getUser($bv['iduser']);
        $view = "views/detail.php";
        require_once "views/layout.php";
    }
    public function signIn()
    {
        $title = "Đăng nhập";
        $view = "views/dangnhap.php";
        require_once "views/layout.php";
    }
    public function signUp()
    {
        $title = "Đăng ký";
        $view = "views/dangky.php";
        require_once "views/layout.php";
    }
    public function dangbai()
    {
        $title = "Đăng bài";
        $dm = $this->model->GetALLBd();
        $view = "views/dangbai.php";
        require_once "views/layout.php";
    }
    public function dangbai_()
    {
        $dm = $_POST['dm'];
        $user = $_POST['idUser'];
        $tieude = $_POST['tieude'];
        $pathimg = '../upload/';
        $baiviet = $_POST['baiviet'];
        $baiviet_new = str_replace("'", "\'", $baiviet);
        $img = $_FILES['img']['name'];
        $target_file = $pathimg . basename($img);
        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
        $this->model->Dangbai_($dm, $user, $img, $baiviet_new, $tieude);
        header('location: ?act=dangbai');
        // echo $baiviet;
    }
    public function List()
    {
        $title = "Bài viết";
        $title_dm = "Bài viết";
        $bvnew = $this->model->ListBV_new();
        $page_num = 1;
        if(isset($_GET['page'])) $page_num = $_GET['page'];
        $page_size = 10;
        $bv = $this->model->ListBV($page_num, $page_size);
        // var_dump($bv);
        $rows_total = $this->model->CountBV();
        // var_dump($rows_total);
        $base_url = "?act=danhsach";
        $links = $this->model->base_url($page_num,$page_size,$rows_total,$base_url);
        $view = "views/danhsach.php";
        require_once "views/layout.php";
    }
    public function Listlaptrinh()
    {
        $title = "Góc Lập Trình";
        $title_dm = "Lập trình";
        $bvlaptrinh = $this->model->Listlaptrinh();
        $bvnew = $this->model->ListBV_new();
        // $page_num = 1;
        // if(isset($_GET['page'])) $page_num = $_GET['page'];
        // $page_size = 10;
        // $bv = $this->model->ListBV($page_num, $page_size);
        // // var_dump($bv);
        // $rows_total = $this->model->CountBV();
        // // var_dump($rows_total);
        // $base_url = "?act=danhsach";
        // $links = $this->model->base_url($page_num,$page_size,$rows_total,$base_url);
        $view = "views/laptrinh.php";
        require_once "views/layout.php";
    }
    public function Listkynang()
    {
        $title = "Góc kỹ năng";
        $title_dm = "Kỹ năng";
        $bvkynang = $this->model->Listkynang();
        $bvnew = $this->model->ListBV_new();
        // $page_num = 1;
        // if(isset($_GET['page'])) $page_num = $_GET['page'];
        // $page_size = 10;
        // $bv = $this->model->ListBV($page_num, $page_size);
        // // var_dump($bv);
        // $rows_total = $this->model->CountBV();
        // // var_dump($rows_total);
        // $base_url = "?act=danhsach";
        // $links = $this->model->base_url($page_num,$page_size,$rows_total,$base_url);
        $view = "views/kynang.php";
        require_once "views/layout.php";
    }
    public function Listngoaingu()
    {
        $title = "Góc ngoại ngữ";
        $title_dm = "Ngoại ngữ";
        $bvlaptrinh = $this->model->Listngoaingu();
        $bvnew = $this->model->ListBV_new();
        // $page_num = 1;
        // if(isset($_GET['page'])) $page_num = $_GET['page'];
        // $page_size = 10;
        // $bv = $this->model->ListBV($page_num, $page_size);
        // // var_dump($bv);
        // $rows_total = $this->model->CountBV();
        // // var_dump($rows_total);
        // $base_url = "?act=danhsach";
        // $links = $this->model->base_url($page_num,$page_size,$rows_total,$base_url);
        $view = "views/ngoaingu.php";
        require_once "views/layout.php";
    }
    public function SaveTK()
    {
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $tentk = $_POST['tentk'];
        $pass = $_POST['pass'];
        $pass_hash = md5($pass . $tentk);
        $id = $this->model->SaveTtTK($hoten, $email, $tentk, $pass_hash);
        // echo json_encode($data);
        echo $id;
    }
    public function login()
    {
        $tentk = $_POST['tentk'];
        $pass = md5($_POST['pass'] . $tentk);
        $check = $this->model->CheckLogin($tentk, $pass);

        // if (password_verify($pass,$check['password'])) {
        //     $mess = 'a';
        //     echo $mess;
        // } 
        if (is_array($check)) {
            $mess = 1;
            $_SESSION['idnd'] = $check['idnd'];
            $_SESSION['name'] = $check['hoten'];
            echo $mess;
        } else {
            $mess = 0;
            echo $mess;
        }

        // }

    }
    public function comment()
    {

        $id = $_GET['id'];
        $noidung = $_GET['noidung'];
        $idbv = $_GET['idbv'];
        // echo "nodung:".$noidung."idbv:".$idbv."id:".$id;
        $this->model->InsertBinhLuan($id, $noidung, $idbv);
    }
    public function Listcomment()
    {
        $idbv = $_GET['idbv'];
        $bl = $this->model->ListBL($idbv);

        $html = '';
        foreach ($bl as $bl) {
            $html .= '<div class="card mb-3 border-0 border-bottom" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-1 p-0">
                        <img class="mr-3 rounded order-0" src="../upload/user.jpg" width="60px" height="60px" style="object-fit: cover;">
                    </div>
                    <div class="col-md-11 ps-1">
                        <div class="card-body pt-0 pe-0">
                            <p class="card-text mb-0"><small class="text-muted">' . $bl['thoigian'] . '</small></p>
                            <h5 class="card-title mb-1">' . $this->model->User_DangBai($bl['iduser']) . '</h5>
                            <p class="card-text">' . $bl['noidung'] . '</p>
                        </div>
                    </div>
                </div>
            </div>';
        }
        echo $html;
        // }
    }
    function thaoluan()
    {
        if ($_POST['id']) {
            $id = $_POST['id'];
            $noidung = $_POST['noidung'];
            $this->model->Insertthaoluan($id, $noidung);
        } else {
            // $id = $_GET['id'];
            $tl = $this->model->ListTL();
            $html = '';
            foreach ($tl as $tl) {
                $html = '<div class="card mb-2 border-0 p-2" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-2">
                    <img src="../upload/user.jpg" alt="..." width="50px" height="50px">
                </div>
                <div class="col-md-10">
                    <div class="card-body pt-0">
                        <div class="d-flex mb-0">
                            <p class="card-text mb-1">' . $this->model->User_DangBai($tl['iduser']) . '</p>
                        </div>
                        <p class="card-text w-100"><small class="text-muted">' . $tl['noidung'] . '</small></p>
                    </div>
                </div>
            </div>
           </div>';
                echo $html;
            }
        }
    }
    // giới hạn chuỗi
    // function strMiddleReduceWordSensitive($string, $max = 50, $rep = '[...]') {
    //     $strlen = strlen($string);
         
    //      if ($strlen <= $max)
    //      return $string;
          
    //     $lengthtokeep=$max - strlen($rep);
    //     $start = 0;
    //     $end = 0;
          
    //      if (($lengthtokeep % 2) == 0) {
    //         $start = $lengthtokeep / 2;
    //         $end = $start;
    //     } else {
    //         $start = intval($lengthtokeep / 2)+2;
    //         $end = $start - 5;
    //     }
    //     $i = $start;
    //     $tmp_string = $string;
    //     while ($i < $strlen) {
    //         if (isset($tmp_string[$i]) and $tmp_string[$i] == ' ') {
    //             $tmp_string = mb_substr($tmp_string, 0, $i,'UTF-8') . $rep;
    //             $return = $tmp_string;
    //         }
    //         $i++;
    //     }
         
    //     $i = $end;
    //     $tmp_string = strrev ($string);
    //     while ($i < $strlen) {
    //         if (isset($tmp_string[$i]) and $tmp_string[$i] == ' ') {
    //             $tmp_string = mb_substr($tmp_string, 0, $i,'UTF-8');
    //             $return .= strrev ($tmp_string);
    //         }
    //         $i++;
    //     }
    //     if(isset($return)) return $return;
    //     return mb_substr($string, 0, $start,'UTF-8') . $rep . mb_substr($string, - $end,'UTF-8');
    //  }
}
