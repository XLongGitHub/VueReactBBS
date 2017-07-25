<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('login');
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