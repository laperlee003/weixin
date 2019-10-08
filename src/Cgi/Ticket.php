<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Weixin\Cgi;
/**
 * 获取ticket
 *
 * @author Administrator
 */
class Ticket extends \Weixin\Base {
    protected $api="/cgi-bin/ticket/getticket";
    protected $needAppID=FALSE;
    protected $needAppsecret=FALSE;
    
}
