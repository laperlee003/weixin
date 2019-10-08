<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Weixin\Pay;
/**
 * 发红包接口
 *
 * @author Administrator
 */
class MmpaymkttransfersSendredpack extends Base {
    protected $api="/mmpaymkttransfers/sendredpack";
    protected $method="POST";
    
    protected $appIdName="wxappid";
}
