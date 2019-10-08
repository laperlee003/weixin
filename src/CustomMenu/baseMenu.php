<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CustomMenu;

/**
 * Description of baseWxAuth
 *
 * @author Administrator
 */
class baseMenu {
    protected $api;
    protected $method = "GET";
    public $param = array();
    public $ret;
    protected $baseUrl="https://api.weixin.qq.com/cgi-bin";
    
    
    public function __construct($accessToken) {
        $this->api = $this->api."?access_token=".$accessToken;
    }
    
    /**
     * 设定参数
     * @param type $param
     */
    public function setParam($param){
        $this->param = json_encode($param,JSON_UNESCAPED_UNICODE);
    }
    
     /**
     * 获取参数
     * @return type
     */
    protected function getParam(){
        return $this->param;
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
        $this->ret = \SocketHelper::request($this->setUrl(), $this->getParam(),NULL, $this->method);
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
