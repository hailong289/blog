<?php 

class Controller{
    public function view($view, $data = [])
    {
        // explode($data);
        extract($data);
        if(file_exists($view.".php")){
            require_once $view.".php";
        }else{
            echo "page not found";
        }
        // Đổi key của mảng thành biến
      
        // $view = preg_replace('.','/',$view);
        // require_once $view . ".php";
        
    }
}

?>