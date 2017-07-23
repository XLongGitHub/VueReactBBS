<?php 

namespace Home\Controller;
use Think\Controller;

class UserController extends Controller {
    public function index() {
        $Users = D('users');
        $users = $Users->select();
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
            $checkword = trim(I('post.checkword', '', 'strval'));
            if (empty($phone) || empty($password) || empty($checkword)) {
                $this->error('你输入的信息不完整');
                exit;
            } 
            //进行验证码验证，此处直接比较默认数据8888，
            //不随机生成字串，进行三方调用发送，比较的方式
            if ($checkword != '8888') {
                $this->error('验证码错误');
                exit;
            }
            $Users = D('users');
            // 验证此号码是否已经注册
            $userId = $Users->where(" phone = $phone")->getField('id');
            if ($userId > 0) {
                $this->error('此账户已经被注册，请填写新的电话号码');
                exit;
            }
            $data = array(
                'phone' => $phone,
                'password' => md5($password),
                'create_date' => date('Y/m/d h:i:sa')
            );
            $id = $Users->data($data)->add();
            if ($id > 0) {
                $this->success('注册成功'); 
                $_SESSION['user'] = array_merge( array('userId' => $id), $data);
            } else {
                $this->error('注册失败');
            }

        } else {
            $this->display('register');
        }
        // $this->display('register');  //此处每次请求后，刷新页面
    }
    //找不到方法之后，去index中了error
    public function add() {
        $Users = D('users');
        $userId = session('user')['userId'];
        if (IS_POST) { 
            // var_dump($_REQUEST);
            $name = I('post.name', '', 'strval');
            $gender = I('post.gender', '', 'strval');
            $birthday = I('post.birthday', '', 'strval');
            $address = I('post.address', '', 'strval');
            $email = I('post.email', '', 'strval');
            $description = I('post.description', '', 'strval');

            if ($description == '用几句话，简单描述自己！') {
                $description = '';
            }
            $data = array(
                'name' => $name,
                'gender' => $gender,
                'birthday' => $birthday,
                'address' => $address,
                'email' => $email,
                'description' => $description,
                'write_date' => date('Y/m/d h:i:sa')
            );
            $Users->where("id = $userId")->save($data);
            $this->success('个人信息修改成功');
            // exit;
        } else {
            $userId = 1;
            $userData = $Users->where("id = $userId")->find();
            // ->getField('name', 'gender', 'address', 'birthday', 'email', 'description');  //只得到了第一个字段
            // var_dump($userData);
            $this->assign('name', $userData['name']);
            $this->assign('gender', $userData['gender']);
            $this->assign('address', $userData['address']);
            $this->assign('birthday', $userData['birthday']);
            $this->assign('email', $userData['email']);
            $this->assign('description', $userData['description']); 
        }
        $this->display();
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
