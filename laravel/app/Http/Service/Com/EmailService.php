<?php
/**
 * Created by PhpStorm.
 * User: a8818
 * Date: 2018/4/7
 * Time: 14:16
 */

namespace App\Http\Service\Com;

Class EmailService
{
    public static function SendEmail($id, $token,$Email,$news)
    {
        //发送邮件
        \Mail::send("Email.index", ["id" => $id, 'token' => $token], function ($message) use ($Email,$news) {
            $message->subject($news);
            $message->to($Email);
        });
    }
}