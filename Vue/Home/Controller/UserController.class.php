<?php 

namespace Home\Controller;
use Think\Controller;

class UserController extends Controller {
    public function index() {
        $User = D('users');
        $users = $User->select();
        $this->assign('users', $users);
        // var_dump($users);
        $this->display();
    }

    public function register() {
        $password = I('get.password', '');
        if (!empty($password)) { 
                echo $phone;
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
}
