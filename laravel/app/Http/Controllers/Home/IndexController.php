<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//前台首页控制器
class IndexController extends Controller
{

    //处理分类数据
    public  function  checkTypesData($data,$pid=0)
    {
        $newArr=array();
        foreach ($data as $key=>$value)
        {
            if ($value->pid==$pid){
                $newArr[$value->id]=$value;
                $newArr[$value->id]->zi=$this->checkTypesData($data,$value->id);
            }
        }
        //返回数据
        return $newArr;
    }

    //前台首页
    public function index()
    {
        //缓存处理
        if ($slider=\Cache::get('slider'))
        {

        }else{
            $slider=\DB::table('slider')->orderBy("orders","desc")->get();
            \Cache::put("slider",$slider);
        }

        //分类广告
        if ($ads=\Cache::get('ads'))
        {

        }else{
            $ads=\DB::table('ads')->orderBy("sort","desc")->get();
            \Cache::put("ads",$ads);
        }

        //处理左侧数据分类
        $types=\DB::table('types')->get();
        //递归处理数据
        $type=$this->checkTypesData($types);
        //广告栏
        foreach ($types as $key=>$value)
        {
            $value->rightAds=\DB::table('typesads')->where([['cid','=',$value->id],['type','=',0]])->limit(2)->get();
            $value->leftAds=\DB::table('typesads')->where([['cid','=',$value->id],['type','=',1]])->first();
        }

        //处理楼层商品

        //遍历一级分类
        foreach ($type as $key=>$value){
            //遍历二级分类
            //新建数组
            $newArr=[];
            foreach ($value->zi as $two)
            {
                //遍历三级分类
                foreach ($two->zi as $three)
                {
                    $newArr[]=$three->id;
                }
            }
            //查询对应的商品
            $value->goods=\DB::table('goods')
                ->select("goods.*","sku.*")
                ->join("sku","sku.gid","=","goods.id")
                ->whereIn('cid',$newArr)->limit(8)->get();
        }

        //明星单品
        $goods=\DB::table('goods')
            ->select("goods.*","sku.*")
            ->join("sku","sku.gid","=","goods.id")
            ->limit(6)->orderBy('goods.id','desc')->get();

        $data=array(
            'slider'=>$slider,
            'ads'=>$ads,
            'type'=>$type,
            'goods'=>$goods,
        );

        return View("home.index")->with($data);
    }
}
