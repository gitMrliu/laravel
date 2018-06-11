<?php
?>

<form action="addsave" method="post">
    <input type="hidden" name="_token" value="{{CSRF_token()}}"/>
    name:<input type="text" name="uname"><br>
    pwd:<input type="text" name="pwd"><br>
    sex:<input type="text" name="sex"><br>
    addtime:<input type="text" name="addtime"><br>
    <input type="submit" value="添加">
</form>
