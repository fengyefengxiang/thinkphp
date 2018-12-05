<?php
/**
 * Created by Sublime.
 * User: yn
 * Date: 2018/12/5
 * Time: 上午11:16
 */
namespace app\common;
use think\facade\Env;

class Consts
{
	//操作成功
    const SUCCESS_CODE = 0;

    //正常状态
    const NORMAL_STATUS = 1;
    //正常状态
    const FORBID_STATUS = 0;
    //删除状态
    const DELETE_STATUS = -1;
    //用于判断（是）
    const DETERMINE_YES = 1;
    //用于判断（否）
    const DETERMINE_NO  = 2;
    //用于默认值
    const DEFAULT_VALUE = 0;
}