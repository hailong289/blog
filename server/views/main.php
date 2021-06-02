
<base href="http://<?=$_SERVER['SERVER_NAME'];?>/<folder>/">

<?php

    session_start();

    /**
     *      include system's file
     */
    include_once '../system/core/config.php';
    include_once '../'.PATH::SYSTEM_CORE.'/boolean.php';

    define('ARR_CTRLR', ['home', 'categories', 'posts', 'comments', 'users', 'discussions']);

    $ctrl = (isset($_GET['ctrl']) && $_GET['ctrl']) ? $_GET['ctrl'] : 'home';

    if (!in_array($ctrl, ARR_CTRLR)) {
        header('location: ' . URL::HOME);
    }

    $filename = PATH::CTRLR . '/' . $ctrl . '.php';
    
    if (!file_exists($filename)) {
        header('location: ' . URL::HOME);
    }
    else
    {
        include_once $filename;
        $ctrl = 'c_' . $ctrl;
        $controller = new $ctrl();

    }

?>