<?php
/**
 * Created by Sublime.
 * User: yn
 * Date: 2018/12/05
 * Time: 上午11:16
 */
namespace app\commonService\logic;
use app\common\Consts;



class BaseLogic
{

    public function __construct()
    {

    }
    protected function returnData($code ,$msg , $data = array())
    {

        $rs = array('code'=>empty($code)?Consts::CODE_SUCCESS:$code,'msg'=>empty($msg)?Consts::MSG_SUCCESS:$msg,'data'=>$data,'stime'=>time());

        return $rs;
    }

    protected function returnSuccess($lang = array(),$data = array())
    {
        $code = empty($lang["code"]) ? Consts::SUCCESS_CODE : $lang["code"];
        $msg = empty($lang["msg"]) ? "操作成功" : $lang["msg"];
        return $this->returnData($code,$msg,$data);
    }

    /**
     * 返回数据 失败状态
     * @param array $message 返回信息
     * @param array $data
     */
    protected function returnLogic($logic = array())
    {
        $code = !isset($logic["code"]) ? Consts::UPDATE_ERROR : $logic["code"];
        $msg = empty($logic["msg"]) ? "操作失败" : $logic["msg"];
        return $this->returnData($code,$msg,$logic['data']);
    }


    /**
     * 返回数据 失败状态
     * @param array $message 返回信息
     * @param array $data
     */
    protected function returnError($lang = array(),$data = array())
    {
        $code = empty($lang["code"]) ? Consts::ERROR_CODE : $lang["code"];
        $msg = empty($lang["msg"]) ? "error" : $lang["msg"];
        return $this->returnData($code,$msg,$data);
    }



}