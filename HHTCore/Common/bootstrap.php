<?php
    /*
    系统启动文件
    */

    // 框架核心代码的根目录(******/HHTCore/)
    defined('SYS_ROOT_PATH') or define('SYS_ROOT_PATH', dirname(dirname(__FILE__)));
    // 框架的根目录(******/hht-php-frame)
    defined('FRAME_ROOT_PATH') or define('FRAME_ROOT_PATH', dirname(SYS_ROOT_PATH));

    // 所有应用的根目录(******/App)
    defined('APPS_ROOT_PATH') or define('APPS_ROOT_PATH', FRAME_ROOT_PATH . '/APP');
    // 某个应用（即我们的某个项目的根目录，例如：Home）
    defined('APP_NAME') or define('APP_NAME', isset($_GET['app']) ? $_GET['app'] : 'Home');

    include 'HHTCore/Controller/Controller.php';
    include 'function.php';
    include SYS_ROOT_PATH . '/Model/Model.php';