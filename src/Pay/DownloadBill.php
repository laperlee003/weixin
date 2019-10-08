<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Weixin\Pay;

/**
 * Description of downloadBillWxAuth
 *
 * @author Administrator
 */
class DownloadBill  extends Base {
    protected $api="/pay/downloadbill";
    protected $method="POST";
    protected $needAppsecret=FALSE;
    protected $useCert=FALSE;
    
    
    public function getResult() {
        $result=@\DataBaseHelper::xmlToArray($this->ret);
        if(!$result){
            return $this->ret;
        }
        return $result;
    }
}
