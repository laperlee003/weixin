<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Media;

/**
 * Description of getWxAuth
 *
 * @author Administrator
 */
class getWxAuth extends baseWxAuth {
    protected $api="/cgi-bin/media/get";
    protected $method="GET";
    protected $needAppID=FALSE;
    protected $needAppsecret=FALSE;
    
    
    /**
     * 发起请求
     * @return \baseApi
     */
    public function go(){
        $this->ret=\SocketHelper::download($this->setUrl(), $this->getParam(), $this->method,60);
        return $this;
    }
    
    
    /**
     * 获取结果
     * @return type
     */
    public function getResult(){
        return $this->ret;
    }
    
}
