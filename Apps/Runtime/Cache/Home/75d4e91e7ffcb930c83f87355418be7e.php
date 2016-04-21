<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<!--总有一些不经意的时光，需要被镌刻-->
<head>
    <title>云日记</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="/notebook_php/Public/home/css/css.css" />
    <script src="/notebook_php/Public/home/js/write.js" language="javascript"></script>
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a href="#" class="brand">云日记</a>
                <div class="nav-collapse">
                    <ul class="nav nav-pills">
                        <li><a href="<?php echo U('Index/index');?>" >首页</a></li>
                        <li><a href="<?php echo U('Find/index');?>">发现</a></li>
                        <li><a href="<?php echo U('Write/index');?>">写日记</a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav" style="float:right;">
                    <li><a href="<?php echo U('Register/index');?>">注册</a></li>
                     <li><a href="<?php echo U('Setting/index');?>">设置</a></li>
                     <li><a href="<?php echo U('Logout/index');?>">退出</a></li>
                </ul>
            </div>
        </div>
    </div>
<div class="container">
  <h2>写日记</h2><hr>
  <form enctype="multipart/form-data" id="J_write" action="<?php echo U('Write/addBook');?>" method="post" class="form-horizontal">
    <div class="control-group">
      <label class="inline"><span>心情: <input style="width:90px;" type="text" name="mood" placeholder="喜,怒,哀,乐..."></span></label>
    </div>
    <div class="control-group">
      <label class="inline"><span>天气: <input style="width:90px;" type="text" name="weather" placeholder="阴,晴,雨,风..."></span></label>
    </div>
    <div class="control-group">
      <label>标题: <input type="text" name="title" placeholder="在这里输入日记的标题哦"/></label>
    </div>
    <div class="control-group info">
        <textarea placeholder="日记内容" id="content" name="content" rows="15" class="textarea" style="width:700px;"></textarea>
    </div>
    <div class="control-group">
      <label class="inline"><input name="checkbox" type="checkbox" checked="checked" />只有自己可见</label>
    </div>
    <div class="control-group">
      <button type="submit" class="btn btn-primary">写日记</button>
    </div>
  </form>
    <hr/>
    <footer>
           <p style="text-align:center;font-size:14px;">版权所有 &copy; 淮南师范学院&nbsp;皖ICP备16000979号</br>powered by E8工作室</br>Email:2013855675@qq.com</p>
    </footer>
  </div>
      </body>
      </html>