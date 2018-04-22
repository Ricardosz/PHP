<form action="" onsubmit="return false;" id="formEdit">
    <div class="form-group">
        <label for="">商品属性名</label>
        <input type="text" name="name" class="form-control" placeholder="请输入商品属性名" value="{{$data->name}}">
        <input type="hidden" name="id" value="{{$data->id}}">
    </div>

    <div class="form-group">
        <label for="">商品所属分类</label>
        <select name="goods_cid" class="form-control">
            <option value="">请选择商品所属分类</option>
            @foreach( $data->type_name as $val)
                @if($val->size==2)
                    <option value="{{$val->id}}">{{$val->html}}</option>
                @else
                    <option value="{{$val->id}}" disabled>{{$val->html}}</option>
                @endif
            @endforeach()
        </select>
    </div>

    <div class="form-group pull-right">
        <input type="submit" value="提交" onclick="save()" class="btn btn-success">
        <input type="reset" id="reset1" value="重置" class="btn btn-danger">
    </div>

    <div style="clear:both"></div>
</form>