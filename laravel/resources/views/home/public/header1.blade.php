<div class="top_box">
    <div class="top_cont">

        <div class="top_login_r top_red">  </div>
<<<<<<< HEAD
            @if(!session('UserInfo.id'))
=======
            @if(!session('AdminUserInfo.id'))
>>>>>>> bc22745cc7577ecfc461790f8ac735360a2d4939
        <ul class="top_login top_red">
            <li class="top_loginbtn" id="LoginID" style="display: none;">
                <a href="/login" class="login">登录</a>
            </li>
            <li class="top_regist" id="RegisterID" style="display: none;">
                <a href="/reg;" class="regist">注册</a>
            </li>
        </ul>

        @else
        <div class="top_phone" style="" id="UserInfo">
<<<<<<< HEAD
            <div class="top_phone_title"><span id="UserNameID">{{session('UserInfo.email')?:session('UserInfo.name')}}</span>
=======
            <div class="top_phone_title"><span id="UserNameID">{{session('AdminUserInfo.email')?:session('AdminUserInfo.name')}}</span>
>>>>>>> bc22745cc7577ecfc461790f8ac735360a2d4939
                <a href="#" class=" top_usepng top_downs"></a>
            </div>


        </div>
        @endif
            <ul class="top_login top_red">
                <!-- <li><a href="#">18101020964</a></li> -->
                <li style="border-left:none;"><a href="/">返回首页</a></li>
            </ul>


    </div>
</div>
