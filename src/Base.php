<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Weixin;
/**
 * Description of base
 *
 * @author Administrator
 */
class Base {
    protected $appName;


    public $appID;
    private $appsecret;
    private $cent;
    public $mchId;
    
    protected $useCert=FALSE;
    
    protected $needAppID=TRUE;
    protected $needAppsecret=TRUE;
    protected $appIdName="appid";


    protected $baseUrl="https://api.weixin.qq.com";
    
    protected $api;
    protected $method="GET";
    public $param=array();
    public $file=array();

    public $ret;
    
    
    public function __construct($app=NULL) {
        if(!$app){
            $app=WxHelper::getDefaultApp();
        }
        $this->appName=$app;
        $appConfig=Config::get("weixin.".$app);
        $this->appID=$appConfig['app_id'];
        $this->appsecret=$appConfig['app_secret'];
        $this->cent= array_get($appConfig,"cert");
        $this->mchId=array_get($appConfig,"mchId");

        return $this;
    }

    
    /**
     * 设定参数
     * @param type $param
     */
    public function setParam($param){
        $this->param=$param;
        if($this->needAppID){
            $this->param[$this->appIdName]=$this->appID;
        }
        if($this->needAppsecret){
            $this->param['secret']=$this->appsecret;
        } 
        return $this;
    }
    
    /**
     * 获取参数
     * @return type
     */
    protected function getParam(){
        return $this->param;
    }
    
    /**
     * 设置上传的文件
     */
    public function setFile($file){
        $this->file=$file;
        return $this;
    }


    /**
     * 获取上传的文件
     */
    protected function getFile(){
        return $this->file;
    }




    /**
     * 获取接口请求地址
     * @return type
     */
    protected function setUrl(){
        return $this->baseUrl.$this->api;
    }
    
    /**
     * 发起请求
     * @return \baseApi
     */
    public function go(){
        $this->ret=SocketHelper::request($this->setUrl(), $this->getParam(),$this->getFile(), $this->method,10,$this->useCert ? $this->cent : []);
        return $this;
    }
    
    
    /**
     * 获取结果
     * @return type
     */
    public function getResult(){
        return json_decode($this->ret,TRUE);
    }
    
    
}
