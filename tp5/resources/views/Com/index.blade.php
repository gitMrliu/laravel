<?php
?>
<style>
    .box{
        width: 1000px;
        margin-top: 20px;
        border: 1px solid ;
    }


</style>

<script src="\js\app.js"></script>
<script>
    function but(form) {

        data = $(form).serializeArray();
        $.post("addsave",data,function (r) {
            console.log(r)
            if(r.error === 0){
                window.location.href = '/Com/index';
            }
        });
        return false;
    }

</script>
<form  method="post" onsubmit="return but(this)">
    <input type="hidden" name="_token" value="{{CSRF_token()}}"/>
    <button type="submit">发布</button>
    <textarea name="content" id="" cols="30" rows="5"></textarea>
</form>
@foreach($list as $v)
    <div class="box">
        <p><span class="one">{{$v->id}}</span>  发布时间:<span class="two">{{$v->create_time}}</span></p>
        内容<p>{{$v->content}}</p>
        <a href="delete?id=<?php echo $v->id?>"><button>删除</button></a>
    </div>
@endforeach
{{$list->links()}}


