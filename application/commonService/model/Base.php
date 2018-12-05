<?php
/**
 * model基类
 * Created by Sublime.
 * User: yn
 * Date: 2018/12/5
 * Time: 下午4:02
 */
namespace app\commonService\model;
use app\common\Consts;
use think\Model;

class Base extends Model
{
    protected $autoWriteTimestamp = true;
    protected $createTime = 'addtime';
    protected $updateTime = 'modtime';

}