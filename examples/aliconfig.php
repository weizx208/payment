<?php
/**
 * @author: helei
 * @createTime: 2016-07-15 17:19
 * @description:
 */

return [
    'partner'   => '2088xxxxxx',// 请填写自己的支付宝账号信息
    'md5_key'   => 'xxxxxxxxxxx',// 此密码无效，请填写自己对应设置的值
    'rsa_private_key'   => dirname(__FILE__) . DIRECTORY_SEPARATOR . 'rsa_private_key.pem',
    "notify_url"	=> 'http://test.helei.com/pay-notify.html',
    "return_url"	=> 'http://test.helei.com/return-url.html',
    "time_expire"	=> '14',
    'account'   => 'xxxxxx@126.com',
    'account_name' => 'xxxxxxx',
];