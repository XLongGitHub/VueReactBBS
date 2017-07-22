<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>标题</title>
    
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
                        <a href="#">
                        <img src="../../../Public/images/logo2.png" width="140px" height="75px" />
                        </a>
                    </div>
                    <!-- <div>
                        论坛流
                    </div> -->
                    <button>
                        首页</button>
                    <div class="topic">
                        <a href="#"> 话题
                        </a>
                        </div>
                </div>
                <div id="search">
                    <input type="text" name="search-input" class="search-input" placeholder="请输入你想搜索的内容" />
                    <button name="search-btn" class="search-btn">搜索</button>

                </div>
                <div id="menu">
                    <!-- <div id="avator">头像</div> -->
                    <img src="http://img.hb.aicdn.com/df06b1d34e232d33dd527ee64f98eed9dcfcbf0d3161f-kZEebg_sq140sf" 
                        alt="头像" 
                        style="width:45px;height:45px;float: left;top: 20px; display: block; position: relative; right: 5px;"/>
                    <div><a href="#"> 登陆</a></div>
                    <div><a href="#"> 注册</a></div>
                    <div><a href="#">  注销</a></div>
                </div>
            </div>
        </div>
    
    <!-- menu -->
    
        <div id="left">
            <div>
                <div><a href="#"> 问答</a></div>
                <div><a href="#"> 头条</a></div>
                <div><a href="#"> 专栏</a></div>
                <div><a href="#"> 活动</a></div>
                <div><a href="#"> 文档</a></div>
            </div>
            <br/>
            <div id="news">
                <div class="news-topic">
                    <a href="#">
                    行业新闻
                    </a>
                </div>
                <hr/>
                <div>
                    <a href=""> 消息1 消息1 消息1 消息1 消息1 消息1 消息1 </a>
                    <a href=""> 消息2 消息2  消息2  消息2  消息2  消息2  消息2  </a>
                    <a href=""> 消息3 消息3 消息13消息1 3息1 消31 消息3 </3>
                    <a href=""> 消息4 消息4 消息14消息1 4息1 消41 消息4 </4>
                    <a href=""> 消息5 消息5 消息15消息1 5息1 消51 消息5 </5>
                    <a href=""> 消息6 消息6 消息16消息1 6息1 消61 消息6 </6>
                    <a href=""> 消息7 消息7 消息17消息1 7息1 消71 消息7 </7>
                    <a href=""> 消息8 消息8 消息18消息1 8息1 消81 消息8 </8>
                    <a href=""> 消息9 消息9 消息19消息1 9息1 消91 消息9 </9>
                    <a href=""> 消息10 消息10 消息10 消息10 消息1 消息10 消息10 </a>
                    <a href=""> 
                        消息11 消息11 消息11 消息11 消息11 消息11 消息11
                        消息11 消息11 消息11 消息11 消息11 消息11 消息11
                        消息11 消息11 消息11 消息11 消息11 消息11 消息11
                         </a>
                </div>
            </div>
        </div>
    
    

    <div id="user-register">
         <div class="welcome">
            欢迎注册GEEK论坛，在这里你可以向大家展示你的才华，找到更多志同道合的人！
        </div>
        <br/>
        <form>

            <br/>
            <br/>
            <div>
                <label>手机号码:</label>
                <input type="number" name="phone" placeholder="请输入你的手机号码" />
                <button>获取验证码</button>
                <!-- <div>还有秒</div> -->
            </div>
            <div>
                <label>验证码:</label>
                <input type="password" name="password" placeholder="验证码" />
            </div>
            <div>
                <label>密码:</label>
                <input type="password" name="password" placeholder="请输入密码" />
            </div>
            <div>
                <label>确认密码:</label>
                <input type="password" name="password2" placeholder="请再次输入密码" />
            </div>
            <div>
                <div>
                <button type="submit" class="submit"> 提交</button>
                <button class="back"> 返回</button>
                </div>
            </div>


        </form>
    </div>

    <br/>
    
        <br/>
        <div id="footer">
            <div id="footer-content">
            <div>
                ©2017 Geek
            </div>

            <div>
                <a href="#">帮助</a>
            </div>
            <div>
                <a href="#">  意见反馈</a>
            </div>
            <div>
                <a href="#"> 设置</a>
            </div>
            </div>
        </div>
    
</body>

</html>