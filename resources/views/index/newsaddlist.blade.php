<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>ueditor demo</title>
    <link rel="shortcut icon" href="/hsfavicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/layuiadmin/css/font.css">
    <link rel="stylesheet" href="/layuiadmin/css/xadmin.css">
    
    <script src="/layuiadmin/js/jquery.min.js"></script>
    <script src="/layuiadmin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/layuiadmin/js/xadmin.js"></script>
</head>
<style type="text/css">
    .sub{
        width:100px;
        height:30px;
        margin-left:8%;
        margin-top:1%;
        color:#fff;
        background-color:#30A9BD;
        border:0px;
        border-radius:10px
    }
</style>
<body>
    <form action="/newsadd" method="post">
        <div class="layui-form-item" style="width: 400px;">
        <label class="layui-form-label">标题：</label>
        <div class="layui-input-block" >
            <input type="text" name="news_title" id="sub_name" value="" lay-verify="title" autocomplete="off"  class="layui-input" >
        </div>
    </div>

        <!-- 加载编辑器的容器 -->
        <script id="container" name="content" type="text/plain" style="height:450px;width:500px;margin-left:8%;">
        </script>
        <input type="submit" value="提交" class="sub">
    </form>
    <!-- 配置文件 -->
    <script type="text/javascript" src="/fuwenben/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/fuwenben/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var editor = UE.getEditor('container');
    </script>
</body>

</html>
