<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Weixin\Cgi;
/**
 * 获取用户列表
 *
 * @author Administrator
 */
class UserGet extends \Weixin\Base{
    protected $api="/cgi-bin/user/get";
    protected $needAppID=FALSE;
    protected $needAppsecret=FALSE;
}
