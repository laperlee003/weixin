<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Media;

/**
 * Description of uploadWxAuth
 *
 * @author Administrator
 */
class uploadWxAuth extends baseWxAuth {
    protected $baseUrl="https://api.weixin.qq.com";
    protected $api="/cgi-bin/media/upload";
    protected $method="POST";
    protected $needAppID=FALSE;
    protected $needAppsecret=FALSE;
}
