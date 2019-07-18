<?php

/* @var $this yii\web\View */

$this->title = '主页';
?>
<div class="site-index">

    <div id="head" class="jumbotron" style="width:100%;height:600px;background-image: url('/image/p3.jpg');background-repeat: no-repeat;background-size: 100% 100%">
        <h1>欢迎回来!</h1>

        <p class="lead">点击该链接加入攀枝花七中校友会</p>

        <p><a class="btn btn-lg btn-success" href="/index.php?r=mate/create">加入校友会</a></p>
    </div>






    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">

            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
window.onload= function(){
var imgs =["/image/p1.jpg", "/image/p2.jpg", "/image/p3.jpg"];    //（设定想要显示的图片）
var i = 0;
var head=document.getElementById("head");//获取DIV对象
head.style.backgroundImage="url(/image/p2.jpg)"; 
head.style.backgroundSize = "100% 600px";
head.style.backgroundRepeat = 'on-repeat';
function time(){
       i++;   
       i=i%3;         // 超过2则取余数，保证循环在0、1、2之间
       head.style.backgroundImage="url("+imgs[i]+")"; 
       head.style.backgroundSize = "100% 600px";
       head.style.backgroundRepeat = 'on-repeat';
       // head.style.background-size = '100%';
       
}
setInterval(time,5000);//循环调用time1()函数，时间间隔为2000ms
//setInterval()函数，按照指定的周期（按毫秒计）来调用函数或表达式
}
</script>
