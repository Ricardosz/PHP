<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>找回密码</title>
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
                    找回密码
                </div>
                <div class="panel-body">
                    <form action="/findPwd" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="">EMAIL</label>
                            <input class="form-control" type="text" name="email">
                        </div>


                        <div class="form-group">
                            <input  type="submit" value="找回" class="btn btn-success">
                            <input  type="rest"   value="重置" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>