<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        echo 14343;
    }

    public function register() {
       
    }

    public function login() {
        if (IS_POST) {
            $phone = I('post.phone', '', 'strval');
            $password = I('post.password', '', 'strval');
            $passwordM = md5($password);
            $verifyCode = I('post.verifyCode', '', 'strval');
            $User = D('users');
            $userInfo = $User->where(" phone = '$phone' and password =  '$passwordM' ")->select();
            if (empty($userInfo) || $userInfo == false) {
                $this->error('你输入的账户和密码不匹配');
            } else {
                $_SESSION['user'] = array(
                    'userId' => $userInfo[0]['id'],
                    'phone' => $userInfo[0]['phone']
                );
                $this->success('登陆成功');
            }
        }
        $this->display('login');
    }

    /**
    *注销登陆
    */
    public function signOut() {
        $_SESSION = null;
    }


    /**
    *生成图片验证码
    */
    public function verifyCode() {
        $Verify = new \Think\Verify();
        $Verify->length = 4;
        $Verify->entry();
    }
    /**
    *
    */
    function check_verify($code, $id = '') {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }




    
}