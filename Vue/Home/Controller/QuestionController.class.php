<?php
namespace Home\Controller;
use Think\Controller;

class QuestionController extends Controller {
    public function index() {
        $Questions = M('questions');
        $quesions = $Questions->alias('q')->join('think_users u on u.id = q.userId')
        ->field('u.name as username, q.title, q.content, q.create_date')->select();
        // var_dump($quesions);
        $this->assign('questions', $quesions);
        $this->display('index');
    }

    /**
    *提出问题或回答问题
    */
    public function add() {
        if (IS_POST) {
            $title = I('post.title', '', 'strval');
            $content = I('post.content', '', 'strval');
            $userId = $_SESSION['user']['userId'];
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