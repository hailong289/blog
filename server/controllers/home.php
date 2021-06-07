<?php

    /*  include files system  */

    include_once '../'.PATH::SYSTEM_CORE.'/template.php';

    /*  include files model  */

    //include_once PATH::MODEL.'/home.php';

    final class c_home
    {
        private $__model;

        const ARR_ACT = ['index'];
        
        /**
         *      Hàm khởi tạo
         */
        public function __construct() {
            //  Gọi hàm khởi tạo của Model
            //$this->__model = new m_home();

            /*  Tiếp nhận chức năng user request  */
            $act = (isset($_GET['act']) && $_GET['act']) ? $_GET['act'] : NULL;

            if (!is_null($act)) {
                if (in_array($act, $this::ARR_ACT)) {
                    $this->$act();
                }
                else {
                    header('location: main.php?ctrl=home');
                }
            }
            else {
                $this->index();
            }

        }


        /**
         *      Chức năng mặc định
         */
        private function index()
        {
            $template = new Template(PATH::VIEW . '/home');
            echo $template->render('main', []);
        }

    }

?>