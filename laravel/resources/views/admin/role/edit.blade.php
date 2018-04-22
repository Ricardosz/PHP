<form action="" onsubmit="return false;" id="formEdit">
    <div class="form-group">
        <label for="">角色显示名</label>
        <input type="text" name="display_name" class="form-control" placeholder="请输入角色组名" value="{{$data->display_name}}">
        <input type="hidden" name="id" value="{{$data->id}}">
    </div>
    <div class="form-group">
        <label for="">角色名称</label>
        <input type="text" name="name" class="form-control" placeholder="请输入角色名称" value="{{$data->name}}">
    </div>
    <div class="form-group">
        <label for="">用户所属访问权限组</label>
        <select name="aid"   class="form-control">
            @foreach($access as $value)
                <option  value="{{$value->id}}" >{{$value->display_name}}</option>
            @endforeach()
        </select>
    </div>
    <div class="form-group">
        <label for="">状态</label>
        <br>
        @if($data->status)
        <input type="radio" name="status"  value="0">正常
        <input type="radio" name="status" checked value="1">禁用
        @else
        <input type="radio" name="status" checked value="0">正常
        <input type="radio" name="status" value="1">禁用
        @endif
    </div>
    <div class="form-group pull-right">
        <input type="submit" value="提交" onclick="save()" class="btn btn-success">
        <input type="reset" id="reset1" value="重置" class="btn btn-danger">
    </div>

    <div style="clear:both"></div>
</form>