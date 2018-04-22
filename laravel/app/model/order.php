<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //

    protected $table = 'orders';

    public static  function  UpdateOrdersStatus($code,int $value)
    {
        $result=(\DB::transaction(function ()use($code,$value) {
            \DB::update("update orders set sid= $value  where code='$code'");
            return 1;
        }));
        return $result;
    }


    public static  function FindOrdersInfoByCode($code)
    {
        $data=\DB::table("orders")
            ->select("goods.name as gname","goods.img",
                "addr.addr","addr.addrInfo","orders.money","orderstatu.name as oname")
            ->join("sku","sku.id","=","orders.gid")
            ->join("goods","sku.gid","=","goods.id")
            ->join("addr","addr.id","=","orders.aid")
            ->join("orderstatu","orderstatu.id","=","orders.sid")
            ->where('orders.code',$code)->get();
        return $data;

    }






}
