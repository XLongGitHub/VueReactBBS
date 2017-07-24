<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>用户登陆</title>

    <link href="../../../Public/css/base.css" rel="stylesheet">
    <link href="../../../Public/css/user.css" rel="stylesheet">
    <link href="../../../Public/css/header.css" rel="stylesheet">
    <link href="../../../Public/css/footer.css" rel="stylesheet">
    <link href="../../../Public/css/left.css" rel="stylesheet">
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
                    <a href="<?php echo U('User/add');?>" style="float: left; display: block;position: relative;">
                    <img src="http://img.hb.aicdn.com/df06b1d34e232d33dd527ee64f98eed9dcfcbf0d3161f-kZEebg_sq140sf" 
                        alt="头像" 
                        style="width:45px;height:45px;float: left;top: 20px; display: block; position: relative; right: 5px;"/>
                    </a>
                    <!-- <div><a href= "../Index/login" > 登陆</a></div> -->
                    <div><a href="<?php echo U('Index/login');?>"> 登陆</a></div>
                    <div><a href="<?php echo U('User/register');?>"> 注册</a></div>
                    <div><a href="<?php echo U('Index/signOut');?>">  注销</a></div>
                </div>
            </div>
        </div>
    
    <!-- menu -->
    
        <script>
            // 设置菜单栏点击后隐藏显示
        window.onload = function() { 
            // let quesion = document.querySelector('#left div:first-child div:first-child');
            let menus = document.querySelector('#left div:first-child').children;
            //初始化隐藏子菜单，并为其添加样式,绑定点击事件
            (() => {
                for (let k = 0; k < menus.length; k++) {
                    menus[k].addEventListener('click', toggleChild);
                    for (let i = 1  ; i < menus[k].children.length; i++) {
                     menus[k].children[i].style.display = 'none';
                     menus[k].children[i].setAttribute('class', 'secondMenu');
                         for (let j = 0; j < menus[k].children[i].children.length; j++) {
                             menus[k].children[i].children[j].style.dispaly = 'none';
                        }
                    }
                }
            })();
            //菜单隐藏显示函数
            function toggleChild() {
                let children = this.children;
                for (let item in  children) {
                    console.log(children[item]);
                }
                for (let i = 1; i < children.length; i++) {
                    if (children[i].style.display != 'none') {
                        children[i].style.display = 'none';
                         for (let j = 0; j < children[i].children.length; j++) {
                            children[i].children[j].style.dispaly = 'none';
                        }
                    } else {
                         children[i].style.display = '';
                         for (let j = 0; j < children[i].children.length; j++) {
                            children[i].children[j].style.dispaly = '';
                        }
                    }
                }
            }
        }
</script>

        <div id="left">
            <div>
                <div name="question"><a href="#"> 问答</a>
                    <div><a href="<?php echo U('Question/add');?>">发布问题</a></div>
                    <div><a href="<?php echo U('Question/add');?>">已发布问题</a></div>
                    <div><a href="<?php echo U('Question/Index');?>">大家的问题</a></div>
                    <div><a href="<?php echo U('Question/replay');?>">查看回答</a></div>
                    <div><a href="<?php echo U('Question/add');?>">发布问题</a></div>
                </div>
                <div><a href="#"> 头条</a>
                    <div><a href="<?php echo U('Question/add');?>">发布问题</a></div>
                </div>
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
        #login {
            float: left;
            width: 50%;
            position: relative;
            border: 2px solid skyblue;
            left: 10%;
        }

        #login label {
            width: 120px;
            height: 40px;
            text-align: center;
            font-size: 24px;
            border: 2px solid skyblue;
            float: left;
            left: 5%;
            position: relative;
            top: 20px;
        }

        #login input {
            width: 60%;
            height: 40px;
            /* float: left;    最后一个不浮动，好进行换行 */
            position: relative;
            left: 8%;
            top: 20px;
            border: 2px solid skyblue;
        }

        #login input[name=verifyCode] {
            width: 30%;
            float: left;
        }

        #login img {
            position: relative;
            left: 12%;
            top: 10px;
        }

        #login button {
            width: 18%;
            height: 40px;
            border: 2px solid skyblue;
            border-radius: 5px;
            margin: 10px auto;
            left: 20%;
            position: relative;
        }
    </style>
    <div class="title">
        欢迎登陆
    </div>
    <br/>
    <div id="login">
        <form method="POST" onsubmit="return checkForm();">
            <div>
                <label for="phone">手机号码:</label>
                <input type="text" name="phone" />
            </div>
            <br/>
            <div>
                <label for="password">密码:</label>
                <input type="password" name="password" />
            </div>
            <br/>
            <div>
                <label for="verifyCode">验证码:</label>
                <input type="text" name="verifyCode" />
                <img src="<?php echo U('index/verifyCode');?>" />
            </div>
            <br/>
            <div>
                <button type="submit">提交</button>
                <button>返回</button>
            </div>
            <br/>
        </form>
    </div>
    <script>
        let phone = document.querySelector('input[name=phone]');
        let password = document.querySelector('input[name=password');
        let verifyCode = document.querySelector('input[name=verifyCode]');
        function checkForm() {
            if (phone.value == '') {
                phone.focus();
                return false;
            }
            if (password.value == '') {
                password.focus();
                return false;
            }
            if (checkForm.value == '') {
                checkForm.focus();
                return false;
            }
            return true;
        }
    </script>

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