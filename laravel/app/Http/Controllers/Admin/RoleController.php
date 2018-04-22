<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;

//用户角色控制器
class RoleController extends Controller
{
    //用户组首页
    public function  index()
    {
        $data=\DB::table('role')
            ->select("role.*","aid","access.name AS aname",'rid','role.display_name AS rname')
            ->join("role_access","role_access.rid","=","role.id")
            ->join("access","access.id","=","role_access.aid")
            ->paginate(10);
        $access=\DB::table('access')->get();
        return view('admin.role.index')->with("data",$data)->with("access",$access);
    }

    //删除角色组
    public function destroy($id)
    {
        $result=$this->DelRole_access($id);
        return $result;
    }

    //修改角色组状态
    public function ajaxStatus(Request $request)
    {
        // 剔除数据
        $arr = $request->except('_token');
        if (\DB::update("UPDATE role SET status = $arr[status] WHERE id = $arr[id]")) {
            # code...
            return 1;
        } else {
            return 0;
        }
    }

    //添加角色组
    public function store(Request $request)
    {
        // 直接把字符串数组化
        parse_str($_POST['str'], $arr);
      if ($this->AddRole_access($arr))
        {
            return 1;
        }

        else {
            return 0;
        }
    }

    //修改角色组信息
    public function update(Request $request)
    {
        parse_str($_POST['str'], $arr);

       // if (\DB::update("update role set status= $arr[status] ,name='$arr[name]' where id=$arr[id]"))
        if ($this->UpdateRole_access($arr))
        {
            return 1;
        } else {
            return 0;
        }
    }

    //修改用户组
    public function edit($id)
    {
        // 查询数据库
        $data = \DB::table("role")->find($id);
        $access=\DB::table('access')->get();
        // 分配数据
        return view('admin.role.edit')->with("data", $data)->with("access",$access);
    }

    public function  AddRole_access($arr)
    {
        if ($rid=\DB::table('role')->insertGetId([
            'name'=>$arr['name'],
            'status'=>$arr['status'],
            'display_name'=>$arr['display_name'],
            'updated_time'=>date('Y-m-d H:i:s',time()),
            'created_time'=>date('Y-m-d H:i:s',time()),
        ]))
        {
            if (\DB::table('role_access')->insert([
                'rid'=>$rid,
                'aid'=>$arr['aid'],
                'created_time'=>date('Y-m-d H:i:s',time()),
            ]))
            {
             return 1;
            }else
                {
                    return 0;
                }
        }
        else{
            return 0;
        }
    }

    public function UpdateRole_access($arr)
    {
        $time=date('Y-m-d H:i:s',time());
        if (\DB::update("update role set status= $arr[status] ,name='$arr[name]',updated_time='$time',display_name='$arr[display_name]' where id=$arr[id]"))
        {
            if (\DB::update("update role_access set aid= $arr[aid]  where rid=$arr[id]"))
            {
                return 1;
            }else{
                return 0;
            }
        }
        else{
            return 0;
        }
    }

    public function DelRole_access($id)
    {
        $result=(\DB::transaction(function ()use($id) {
            \DB::table("role")->delete($id);
            \DB::table('role_access')->where('rid', '=', $id)->delete();
            return 1;
        }));
        return $result;

    }




}
