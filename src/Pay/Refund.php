<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Weixin\Pay;

/**
 * Description of refundWxAuth
 *
 * @author Administrator
 */
class Refund extends Base {
    protected $api="/secapi/pay/refund";
    protected $method="POST";
    protected $needAppsecret=FALSE;
}
