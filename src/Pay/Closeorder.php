<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Weixin\Pay;

/**
 * 关闭预付订单
 *
 * @author Administrator
 */
class Closeorder extends Base {
    protected $api="/pay/closeorder";
    protected $method="POST";
}
