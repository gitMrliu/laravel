<?php
?>
<form action="login" method="post">
    <input type="hidden" name="_token" value="{{CSRF_token()}}">
    用户名：<input type="text" name="uname"><br>
    密码: <input type="text" name="pwd"><br>
    <input type="submit" value="登录">
    <a href=""></a>
</form>




