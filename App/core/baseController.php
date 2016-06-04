<?php
/**
 * @author: [liusir]
 * @date: [2016/6/4]
 * @description:
 */
namespace App\core;

class baseController{


    static function display($filename)
    {
        if(file_exists($filename)){
            echo "<h1>正在维护...</h1>";
            exit(0);
        }

        ob_start();
        echo file_get_contents($filename);
        ob_end_flush();
        exit(0);
    }


}