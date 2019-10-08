<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16-5-23
 * Time: 上午11:42
 */

namespace Weixin\Pay;


/**
 * Class transfersWxAuth
 * 企业支付
 * @package Pay
 */
class MmpaymkttransfersPromotionTransfers extends Base {

    protected $api="/mmpaymkttransfers/promotion/transfers";
    protected $method="POST";
    protected $appIdName="mch_appid";

    protected function getParam(){
        $this->param['mchid']=$this->mchId;
        if(isset($this->param['secret'])){
            unset($this->param['secret']);
        }
        $this->param['sign']=  \WxHelper::makeSign($this->param);
        return \DataBaseHelper::arrayToXml($this->param);
    }
}
