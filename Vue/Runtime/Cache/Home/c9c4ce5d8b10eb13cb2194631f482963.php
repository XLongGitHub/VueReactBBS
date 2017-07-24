<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>发布问题 </title>

    <link href="../../../Public/css/base.css" rel="stylesheet">
    <link href="../../../Public/css/user.css" rel="stylesheet">
    <link href="../../../Public/css/header.css" rel="stylesheet">
    <link href="../../../Public/css/footer.css" rel="stylesheet">
    <link href="../../../Public/css/left.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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
    
    
    <style>
        .title {
            height: 40px;
            font-size: 20px;
            text-align: center;
            color: #fff;
            background: #bbb;
            border-bottom: 3px solid #ccc;
        }

        #addQuestion {
            width: 50%;
            height: 600px;
            border: 2px solid skyblue;
            left: 10%;
            position: relative;
            float: left;
        }

        #addQuestion div label:first-child {
            width: 80px;
            height: 40px;
            float: left;
            position: relative;
            top: 40px;
            left: 5%;
            background: #555;
            color: #DCDCDC;
            font-size: 26px;
            text-align: center;
            border: 2px #fff solid;
            border-radius: 5px;
        }

        #addQuestion div:first-child input {
            width: 70%;
            height: 40px;
            /* background: black; */
            background: #fff;
            position: relative;
            top: 40px;
            left: 7%;
            border: 1px solid skyblue;
            margin: 1px;
        }

        #addQuestion div:nth-child(2) label {
            top: 80px;
        }

        #addQuestion textarea {
            float: left;
            width: 70%;
            height: 300px;
            position: relative;
            top: 20px;
            left: 5%;
            background: #fff;
            border: 1px solid skyblue;
        }


        #addQuestion div:last-child {
            /* width: 100%; */
            /* width: 200px; */
            /* height: 200px; */
            
            /* margin: 0 auto; */
            position: relative;
            float: left;
            top: 400px;
             background:  black; 

        }

         #addQuestion button {
            /* float: left; */
            width: 100px;
            height: 45px;
            position: relative;
             top: 40px; 
             margin-left: 200px;
             font-size: 20px;
        } 
    </style>

    <div class="title">欢迎提出新的问题</div>
    <br/>
    <div id="addQuestion">
        <form method="POST">
            <div>
                <label>标题:</label>
                <input type="text" name="title" />
            </div>
            <br/>
            <div>
                <label>内容:</label>
                <br/>
                <textarea name="content"></textarea>
            </div>
            <br/>
            <div>
                <button type="submit" class="submit">发表</button>
                <button type="back" class="back">返回</button>
            </div>
            <br/>
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