<?php 

class blog extends Controller{
    public $view = [];
    public function index(){
        // echo "home";
    //    $view['sub-content'] = 'ds-sp';
       $this->view['title'] = "Trang chủ";
       $this->view['content'] = 'views/home';
       $this->view('views/layout',$this->view);
    }
    public function add(){
        $this->view['title'] = "Viết bài";
        $this->view['content'] = 'views/blog';
        $this->view['sub_content']['sub_title'] = "Bài viết";
        $this->view('views/layout',$this->view);
    }
}

?>