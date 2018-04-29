<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

//商品库存管理控制器
class SkuController extends Controller
{



    public function index()
    {
        //获取数据
        $gid = $_GET['id'];

        $sku=\DB::table("sku")
            ->select("sku.id as sid","sku.gid","property.value","sku.price", "sku.num",
                "sku.sales","sku.title","sku.info","sku.img", "sku.text","sku.config",
                "goods.name as gname","attribute.name as aname","types.name as tname")
            ->join("goods","goods.id","=","sku.gid")
            ->join("types","types.id","=","goods.cid")
            ->join("property","property.id","=","sku.value")
            ->join("attribute","attribute.goods_cid","=","types.id")
            ->where("sku.gid",$gid)
            ->paginate(10);
     $data=\DB::table("goods")
                ->select("goods.name as gname","goods.id as gid","attribute.name as aname","types.name as tname")
            ->join("types","types.id","=","goods.cid")
             ->join("attribute","attribute.goods_cid","=","types.id")
            ->where("goods.id",$gid)->first();
        return view('admin.sku.index')->with("sku",$sku)->with("data",$data);
    }


    //添加商品详细属性
    public function store(Request $request)
    {
        parse_str($_POST['str'], $arr);
        $result=$this->AddSku($arr);
        return $result;
    }

    public static  function  AddSku($arr)
    {
        $result=(\DB::transaction(function ()use($arr) {
            $propertyid=\DB::table('property')->insertGetId([
                'value'=>$arr['value'],
            ]);
           \DB::table('sku')->insert([
                'gid'=>$arr['gid'],
                'value'=>$propertyid,
                'price'=>$arr['price'],
                'num'=>$arr['num'],
                'title'=>$arr['title'],
                'info'=>$arr['info'],
                'img'=>$arr['img'],
                'text'=>$arr['text'],
               'config'=>$arr['config'],
            ]);
           \DB::table('goods_query')->insert([
               'gid'=>$arr['gid'],
               'value'=>$arr['value'],

           ]);
            \DB::table('goods_serach')->insert([
                'gid'=>$arr['gid'],
                'serach'=>$arr['title'].$arr['text'],
            ]);

            return 1;
        }));
        return $result;
    }





    public function edit($id)
    {
        $data=\DB::table('sku')
            ->select("sku.*","goods.id as gid","goods.name as gname","sku.id as sid","property.value")
            ->join("goods","goods.id","=","sku.gid")
            ->join("property","property.id","=","sku.value")
            ->where("sku.id",$id)->first();
        return view('admin.sku.edit')->with("data",$data);
    }


    public function update(Request $request)
    {
        parse_str($_POST['str'], $arr);
        if (\DB::table('sku')  ->where("sku.id","=",$arr['sid'])->update([
            'price' => $arr['price'],'num' => $arr['num']]))
        {
            return 1;
        }
        else{
            return 0;
        }
    }

    public function destroy($id)
    {
        if (\DB::table('sku')->delete($id))
        {
            return 1;
        }
        else{
            return 0;
        }
    }



}
