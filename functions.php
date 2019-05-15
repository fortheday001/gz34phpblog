<?php
// 提示消息的函数

function message($mess, $url)
{
    echo <<<JS
<script>
alert('{$mess}');
location.href='{$url}'
</script>
JS;
exit;
}

// 判断是否登录
function check_login()
{
    // isset：判断一个变量是否存在
    //  判断 $_SESSION 中有没有一个叫做 name 的键
    if( !isset($_SESSION['name']) )
    {
        message('必须先登录！', 'index.php?a=login');
        exit;
    }
}

// 加载一个表态页
function view($name)
{
    include('view/admin/'.$name.'.html');
}
