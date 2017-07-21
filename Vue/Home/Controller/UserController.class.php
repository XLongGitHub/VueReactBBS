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

    public function addUser() {

    }

    public function deleteUser() {

    }

    public function modifyUser() {

    }

    public function gerUser() {

    }
}
