<?php
/**
 * @author: [liusir]
 * @date: [2016/6/4]
 * @description:
 */


namespace App;

class app
{
    public static function class_load($classname)
    {
        $class = str_replace("\\",'/',$classname);

        $filename = ROOT . '/'.$class . '.php';

        if(!file_exists($filename)){
            ob_start();
            echo file_get_contents(ROOT . '/404.html');
            ob_end_flush();
            exit(0);
        }
        require $filename;
    }

    /**
     * 程序启动
     */
    static function start()
    {
        date_default_timezone_set("Asia/Shanghai");
        spl_autoload_register(array('static','class_load'));
    }
}