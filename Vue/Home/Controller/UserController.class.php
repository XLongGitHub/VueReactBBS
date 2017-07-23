<?php 

namespace Home\Controller;
use Think\Controller;

class UserController extends Controller {
    public function index() {
        $User = D('users');
        $users = $User->select();
        $this->assign('users', $users);
        $this->display();
    }
    /**
    *用户使用电话号码进行注册
    */
    public function register() {
        if ($_SERVER['HTTP_REQUEST_TYPE'] == 'ajax') {
            exit();
        } else if (IS_GET) {
            $password =trim(I('get.password', ''));
            if (!empty($password)) { 
                    $this->success();
                    exit();
            } else {
                    $this->display('register');
            }
        } else if (IS_POST) {
            $phone = trim(I('post.phone', '', 'strval'));
            $password = trim(I('post.password', '', 'strval'));
            if (empty($phone) || empty($password)) {
                $this->error();
                exit;
            }
            $data = array(
                'phone' => $phone,
                'password' => md5($password),
                'create_time' => date('Y/m/d H:i:sa')
            );
            $Users = D('users');
            $id = $Users->data($data)->add();
            if ($id > 0) {
                $this->success(); 
            } else {
                $this->error();
            }

        } else {
            $this->display('register');
        }
        // $this->display('register');  //此处每次请求后，刷新页面
    }

    public function addUser() {

    }

    public function deleteUser() {

    }

    public function modifyUser() {

    }

    public function gerUser() {

    }

    public function getSms() {

    }
}
