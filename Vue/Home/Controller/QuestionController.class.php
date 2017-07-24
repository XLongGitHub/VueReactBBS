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
        $this->display('add');
    }
}