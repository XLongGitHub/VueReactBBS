<?php
namespace Home\Controller;
use Think\Controller;

class QuestionController extends Controller {
    public function index() {

    }

    /**
    *提出问题或回答问题
    */
    public function add() {
        if (IS_POST) {
            $title = I('post.title', '', 'strval');
            $content = I('post.content', '', 'strval');
            $userId = $_SESSION['user']['userid'];
            $create_time = date('Y/m/d h:i:sa');
            $top = 1;  //问题

            $Questions = D('questions');
            $data = array(
                'title' => $title,
                'content' => $content,
                'userId' => $userId,
                'create_date' => date('Y/m/d h:i:sa'),
                'top' => $top
            );

            $isInsert = $Questions->data($data)->add();
            if ($isInsert > 0) {
                $this->success('问题发布成功');
            } else {
                $this->error('问题添加失败');
            }
        }
        $this->display('add');
    }
}