<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Weixin\Sns;

/**
 * 通过登录授权获取AccessToken
 *
 * @author Administrator
 */
class AccessToken extends \Weixin\Base {
    protected $api="/sns/oauth2/access_token";
}
