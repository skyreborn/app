<?php
namespace app\admin\controller;

use  think\controller;

class News extends Base {

    public function add() {
        return $this->fetch();
    }
}

