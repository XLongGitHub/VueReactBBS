<?php
namespace Home\Controller;
use Think\Controller;

class QuestionController extends Controller {
    public function index() {
        $Questions = M('questions');
        $quesions = $Questions->alias('q')->where('q.top = 1')
        ->join('think_users u on u.id = q.userId')
        ->field('u.name as username, q.title, q.content, q.create_date, q.id')->select();
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
            $create_date = date('Y/m/d h:i:sa');
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

    public function reply() {
        $Questions = D('questions');
        if (IS_GET) {
            $id = I('get.id', '', 'strval');
            // $this->assign('questionId', $id);
            $question =  $Questions->alias('q')->where("q.id = $id")
            ->join('think_users u on u.id = q.userId')
            ->field('q.title, q.content, q.create_date, u.name, q.id')
            ->limit('1')
            ->select();
            $this->assign('title', $question[0]['title']);
            $this->assign('content', $question[0]['content']);
            $this->assign('create_date', $question[0]['create_date']);
            $this->assign('name', $question[0]['name']);
            $this->assign('id', $question[0]['id']);
            $this->display('reply');
        } else if (IS_POST){
            $reply = I('post.reply', '', 'strval');
            $pid = I('post.id', '', 'strval');
            $userId = $_SESSION['user']['userId'];
            $data = array(
                'content' => $reply,
                'pid' => $pid,
                'userId' => $userId,
                'top' => 0,
                'create_date' => date('Y/m/d h:i:sa')
            );
            var_dump($data);
            $back = $Questions->data($data)->add();
            if ($back > 0) {
                $this->success('回复成功');
            } else {
                $this->error('回复失败');
            }
        }
    }

    /**
    *问题及其回答
    */
    public function detail() {
        $Questions = D('questions');
        if (IS_GET) {
            $id = I('get.id', '', 'strval');
            //题目
            $question =  $Questions->alias('q')->where("q.id = $id")
            ->join('think_users u on u.id = q.userId')
            ->field('q.title, q.content, q.create_date, u.name, q.id')
            ->select();
            $this->assign('title', $question[0]['title']);
            $this->assign('content', $question[0]['content']);
            $this->assign('create_date', $question[0]['create_date']);
            $this->assign('name', $question[0]['name']);
            $this->assign('id', $question[0]['id']);
            //题目回复
            $replyAll = $Questions->alias('q')->where("q.pid = $id")
            ->join('think_users u on u.id = q.userId')
            ->field('q.content, q.create_date, u.name')
            ->select();
            $this->assign('replyAll', $replyAll);
            $this->display('detail');
        }
    }
    /**
    *查看我的回答和问题
    */
    public function myReply() {
        $Questions = D('questions');
        $userId = $_SESSION['user']['userId'];
        $quesions = $Questions->where("userId = $userId")->select();
        

    }

}