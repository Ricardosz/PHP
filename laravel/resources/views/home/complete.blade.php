<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>完成支付页面</title>
    <link rel="stylesheet" href="/style/admin/bs/css/bootstrap.css">
    <script src="/style/admin/bs/js/jquery.min.js"></script>
    <script src="/style/admin/bs/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    支付已完成
                </div>
                <div class="form-group">
                    <label for="">订单号:{{$code}}</label>

                </div>
                <table class="table-bordered table table-hover">
                    <th><input type="checkbox" name="" ></th>
                    <th>商品名</th>
                    <th>商品封面图片</th>
                    <th>金额</th>
                    @foreach($data as $value)
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>{{$value->gname}}</td>
                            <td>
                                <img src="/Uploads/Goods/{{$value->img}}" width="200px" >
                            </td>
                            <td>{{$value->money}}</td>
                        </tr>
                    @endforeach


                </table>

                <a href="/"><buttton>返回首页</buttton></a>




                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>