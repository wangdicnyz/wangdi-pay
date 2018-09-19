<?php
class WeixinPay
{
    public function index()
    {
        return "王笛的微信支付";
    }
    public $nima="wechat_api";
}
$pay=new WeixinPay;
echo  $pay->index();
