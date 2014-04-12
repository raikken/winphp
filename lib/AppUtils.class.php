<?php
class AppUtils{
    public static function returnValue($data,$errorNo=null){
        return ["rst" => $data, "errno"=>$errorNo, "err"=>Error::str($errorNo), "timestamp"=>intval(microtime(true)*1000)];  
    }
    public static function POST($paramName,$defaultValue=null,$errorCode=0){
        if(!isset($_POST[$paramName])){
            if($errorCode){
                throw new ModelAndViewException("post param error",$errorCode,'json:',AppUtils::returnValue([],$errorCode));
            }
            if($defaultValue){
                return $defaultValue;
            }
            return null;
        }else{
            return $_POST[$paramName];
        }
    }
    public static function GET($paramName,$defaultValue=null,$errorCode=0){
        if(!isset($_GET[$paramName])){
            if($errorCode){
                throw new ModelAndViewException("get param error",$errorCode,'json:',AppUtils::returnValue([],$errorCode));
            }
            if($defaultValue){
                return $defaultValue;
            }
        }else{
            return $_GET[$paramName];
        }
    }
}
