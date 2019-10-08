<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Weixin\Pay;

/**
 * Description of baseWxAuth
 *
 * @author Administrator
 */
class Base extends \base {
    protected $baseUrl="https://api.mch.weixin.qq.com";
    
    protected $useCert=TRUE;
    
    protected function getParam(){
        $this->param['mch_id']=$this->mchId;
        if(isset($this->param['secret'])){
            unset($this->param['secret']);
        }
        $this->param['sign']=  \WxHelper::makeSign($this->param);
        return \DataBaseHelper::arrayToXml($this->param);
    }
    
    public function getResult() {
        return \DataBaseHelper::xmlToArray($this->ret);
    }
}
