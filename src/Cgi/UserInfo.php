<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Weixin\Cgi;
/**
 * 根据openId和基础授权码获取用户信息
 *
 * @author Administrator
 */
class UserInfo extends \Weixin\Base{
    protected $api="/cgi-bin/user/info";
    protected $needAppID=FALSE;
    protected $needAppsecret=FALSE;
}
