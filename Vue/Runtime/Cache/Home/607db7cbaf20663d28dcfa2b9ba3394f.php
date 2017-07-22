<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>reigster</title> 
    <link href="../../../Public/css/base.css" rel="stylesheet"> 
    <link href="../../../Public/css/user.css" rel="stylesheet">
    <link href="../../../Public/css/header.css" rel="stylesheet">
    <link href="../../../Public/css/footer.css" rel="stylesheet">
    <link href="../../../Public/css/left.css" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    
        <div id="header">
            <div id="header-wrap">
                <div id="logo-wrap">
                    <div id="logo">
                        <img src="../../../Public/images/logo2.png" width="140px" height="75px" />
                    </div>
                    <!-- <div>
                        论坛流
                    </div> -->
                     <button>首页</button> 
                     <div class="topic">话题</div> 
                </div>
                <div id="search">
                    <input type="text" name="search-input" class="search-input" placeholder="请输入你想搜索的内容"/>
                    <button name="search-btn" class="search-btn">搜索</button>

                </div>
                <div id="menu">
                    <div id="avtor">头像</div>
                    <div>登陆</div>
                    <div>注册</div>
                    <div>注销</div>
                </div>
            </div>
        </div>
    
    <!-- menu -->
    
        <div id="left">left </div>
        
    
<link href="../../../Public/css/user.css" rel="stylesheet">  
     <div id="user-add">
        <div class="welcome">
            欢迎注册GEEK论坛，在这里你可以向大家展示你的才华，找到更多志同道合的人！
        </div>
        <form id="user-add-form">
            <div>
                <label class="input-tip">姓名:</label>
                <input name="name" type="text" placeholder="请输入你的姓名"/>
            </div>
            <br/>
            <div>
                <label class="input-tip">性别:</label>
                <div id="gender">
                    <div>
                        <input type="radio" name="gender" id="male" value="male"/>
                        <label for="male">男</label>
                    </div>
                    <div>
                        <input type="radio"  name="gender" id="female" value="female"/>
                        <label for="female">女</label>
                    </div>
                    <div>
                        <input type="radio" name="gender" id="secret" value="secret"/>
                        <label for="secret">保密</label>
                    </div>
                </div>
            </div>
            <br/>
            <div>
                <label class="input-tip">年龄:</label>
                <input type="text" name="age" placeholder=""/>
            </div>
            <br/>
            <div>
                <label class="input-tip">生日:</label>
                <input type="date" name="birthday"/>
            </div>
            <br/>
            <div>
                <label class="input-tip">地址:</label>
                <input type="text" name="brithday"/>
            </div>
            <br/>
            <div>
                <label class="input-tip">电话:</label>
                <input type="number" name="phone"/>
            </div>
            <br/>
            <div>
                <label class="input-tip">邮箱:</label>
                <input type="email" name="email"/>
            </div>
            <br/>
            <div>
                <label class="input-tip">简介:</label>
                <textarea name="introduction">用几句话，简单描述自己！</textarea>
            </div>
            <br/>
            <div>
                <!-- <input type="submit" class="submit" value="注册"/> -->
                <!-- <input type="button" class="back" value="返回"/> -->
                <button type="submit" class="submit">注册</button>
                <button class="back">返回</button>
            </div>
            
        
                
            </form>
        <?php  ?>
        </div>

    <br/>
    
        <br/>
          <div id="footer">
              ©2017 Geek 
              </div>  
    
</body>

</html>