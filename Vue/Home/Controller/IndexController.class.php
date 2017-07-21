<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        echo 14343;
    }

    public function register() {
        $name = I('post.name', '', 'strval');
        $gender = I('post.gender', '', 'strval');
        $password = I('post.password', '', 'strval');
        $address = I('post.address', '', 'strval');
        $phone = I('post.phone', '', 'strval');

        $data = array(
            'name' => $name,
            'gender' => $gender,
            'password' => md5($password),
            'address' => $address,
            'phone' => $phone,
            'create_date' => date('Y/m/d h:i:sa'),
            'write_date' => date('Y/m/d h:i:sa')
        );
        $User = D('users');
        $User->data($data)->add();

        // return json_encode($data);
        echo json_encode($data);
        exit;
    }

    public function login() {
        $name = I('post.phone', '', 'strval');
        $password = I('post.password', '', 'strval');
        $passwordM = md5($password);
        $User = D('usrs');
        $userInfo = $User->where("name = $name and password = $passwordM")->find();
        if (empty($userInfo) || $userInfo == false) {
            echo false;
        } else {
            echo true;
        }
    }

    
}