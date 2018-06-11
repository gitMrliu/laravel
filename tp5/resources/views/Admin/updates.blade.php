<?php

?>
<form action="updates" method="post">
    <input type="hidden" name="_token" value="{{CSRF_token()}}"/>
    <input type="hidden" name="id" value="<?php echo $list[0]->id?>"><br>
    name:<input type="text" name="uname" value="<?php echo $list[0]->uname?>"><br>
    pwd:<input type="text" name="pwd" value="<?php echo $list[0]->pwd?>"><br>
    sex:<input type="text" name="sex" value="<?php echo $list[0]->sex?>"><br>
    addtime:<input type="text" name="addtime" value="<?php echo $list[0]->addtime?>"><br>
    <input type="submit" value="修改">
</form>