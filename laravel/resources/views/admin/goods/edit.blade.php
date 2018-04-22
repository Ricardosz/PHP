
<form action="" onsubmit="return false;" id="formEdit">
    <div class="form-group">
        <label for="">商品名称</label>
        <input type="text" name="gname"  value="{{$data->gname}}" class="form-control" placeholder="请输入商品名称">
        <input type="hidden" name="gid" value="{{$data->gid}}">
    </div>
    <div class="form-group">
        <label for="">商品所属分类</label>
        <select name="cid"   class="form-control">
            <option value="">{{ $data->cname}}</option>
            @foreach( $data->type_name as $val)
                @if($val->size==2)
                    <option value="{{$val->id}}">{{$val->html}}</option>
                @else
                    <option  value="{{$val->id}}" disabled>{{$val->html}}</option>
                @endif
            @endforeach()
        </select>
    </div>

    <div class="form-group">
        <label for="">总库存</label>
        <input type="text" name="num" value="{{$data->num}}" class="form-control" disabled>
    </div>

    <div class="form-group pull-right">
        <input type="submit" value="提交" onclick="save()" class="btn btn-success">
        <input type="reset" id="reset1" value="重置" class="btn btn-danger">
    </div>

    <div style="clear:both"></div>
</form>
