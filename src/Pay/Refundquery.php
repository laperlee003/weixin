<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Weixin\Pay;

/**
 * Description of refundQueryWxAuth
 *
 * @author Administrator
 */
class Refundquery extends Base {
    protected $api="/pay/refundquery";
    protected $method="POST";
    protected $needAppsecret=FALSE;
    protected $useCert=FALSE;
}
