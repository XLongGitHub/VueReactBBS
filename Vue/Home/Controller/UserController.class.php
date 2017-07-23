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
        if (IS_GET) {
            $password =trim(I('get.password', ''));
            if (!empty($password)) { 
                    echo $phone;
                    $this->success();
                    echo 1;
            } else {
                    echo 2;
                    $this->display('register');
            }
        } else if (IS_POST) {
            echo 3;
            $phone = trim(I('post.phone', '', 'strval'));
            $password = trim(I('post.password', '', 'strval'));
            $data = array(
                'phone' => $phone,
                'password' => $password
            );
            $Users = D('users');
            $id = $Users->data($data)->add();
            if ($id > 0) {
                $this->success(); 
            } else {
                $this->error();
            }

        }
        // echo 'afdf';
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
