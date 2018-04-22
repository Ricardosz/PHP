<?php
/**
 * Created by PhpStorm.
 * User: a8818
 * Date: 2018/4/7
 * Time: 17:40
 */
namespace App\Http\Service\Com;
Class YzmService
{
    public static function CreateYzm()
    {
        require_once("../resources/code/Code.class.php");
        //实例化
        $code = new \Code();
        return $code;
    }
}