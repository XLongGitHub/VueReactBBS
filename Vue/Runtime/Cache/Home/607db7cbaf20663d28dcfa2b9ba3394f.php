<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>标题</title>
    
    <link href="../../../Public/css/user-style.css" rel="stylesheet">
    <link href="../../../Public/css/header.css" rel="stylesheet">
    <link href="../../../Public/css/footer.css" rel="stylesheet">
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
    
    menu
    left
    
     <div id="wrap">
        <div></div>
        <form>
            <div>
                <label>姓名:</label>
                <input name="name" type="text" placeholder="请输入你的姓名"/>
            </div>
            <div>
                <label>性别:</label>
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
                
            </form>
        <?php  ?>
        </div>

    footer
        <!-- <div id="footer"></div> -->
    
</body>

</html>