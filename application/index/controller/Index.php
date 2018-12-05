<?php
namespace app\index\controller;
use app\common\Consts;

class Index
{
    public function index()
    {
        return 'index'.Consts::NORMAL_STATUS;
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
