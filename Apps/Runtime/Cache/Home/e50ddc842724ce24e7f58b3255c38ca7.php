<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- 新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="/notebook_php/Public/home/bootstrap/css/bootstrap.min.css">
        <!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <link rel="stylesheet" href="/notebook_php/Public/home/bootstrap/css/bootstrap-theme.min.css">
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="/notebook_php/Public/home/bootstrap/js/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="/notebook_php/Public/home/bootstrap/js/bootstrap.min.js"></script>
        
        
        <link rel="stylesheet" type="text/css" href="/notebook_php/Public/home/css/login.css"/>
        <link rel="stylesheet" type="text/css" href="/notebook_php/Public/home/css/comm.css"/>
		<script src="/notebook_php/Public/home/js/loginCheck.js" language="javascript"></script>
        <title>云日记</title>
    </head>
    <body>
        <div class="bg">
            <p align="center"><img src="/notebook_php/Public/home/img/yun_2.jpg"></p>
            <form action="<?php echo U('Login/doLogin',null,false);?>" method="POST">
                <div class="form">
                     <p>账号</p>
                    <input type="text" name="username" placeholder="请输入账号喔"/>
                     <p>密码</p>
                    <input type="password" name="password"  placeholder="输入密码开启你的日记之旅吧"/>
                </div>
                <div class="zh">
                    <a href="#" style="margin-left:30px;">找回密码</a>
                       <a href="<?php echo U('Register/index');?>" style=" float:right;margin-right:35px;">注册</a>
                   </div>
                <div class="dl">
                    <input type="submit" onclick="return check();" value="登录"/>
                </div>
            </form>
        </div>
    </body>
</html>