<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Message\Template;
/**
 * Description of sendWxAuth
 *
 * @author Administrator
 */
class sendWxAuth extends baseWxAuth {
    protected $api="/message/template/send";
    protected $needAppID=FALSE;
    protected $needAppsecret=FALSE;
    protected $method="POST";
    
    public function setAccessToken($accessToken){
        $this->api=  $this->api."?access_token=".$accessToken;
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
        $this->param = json_encode($this->param,JSON_UNESCAPED_UNICODE);
        return $this;
    }
}
