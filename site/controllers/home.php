<?php 

class Home{
   
    public function __construct() {
        $act = "home";
        if(isset($_GET['act'])==true) $act = $_GET['act'];
        switch ($act) {
            case 'home':
                $this->index();
                break;
            
            default:
                # code...
                break;
        }
    }


    public function index(){
        $title = "Trang chủ";
    //    echo "home";
        require_once "views/layout.php";
    }
}
?>