<?php

// +----------------------------------------------------------------------
// | 短信宝PHP扩展
// +----------------------------------------------------------------------
// | 版权所有 2017~2020 [ https://www.dtapp.net ]
// +----------------------------------------------------------------------
// | 官方网站: https://gitee.com/liguangchun/smsbao
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 仓库地址 ：https://gitee.com/liguangchun/smsbao
// | github 仓库地址 ：https://github.com/GC0202/smsbao
// | Packagist 地址 ：https://packagist.org/packages/liguangchun/smsbao
// +----------------------------------------------------------------------

use dtApp\SmsBao\Send;
use dtApp\SmsBao\SmsBaoException;
use dtApp\SmsBao\User;

require_once '../vendor/autoload.php';

// 配置
$config = [
    'user' => '',
    'pass' => ''
];

// 发送国内验证码
try {
    $send = new Send($config);
    $send->sms('iphone', 'code', 'template', 'rep');
} catch (SmsBaoException $e) {
    var_dump($e->getMessage());
}

// 发送国际验证码
try {
    $send = new Send($config);
    $send->wSms('iphone', 'code', 'template', 'rep');
} catch (SmsBaoException $e) {
    var_dump($e->getMessage());
}
// 发送语音验证码
try {
    $send = new Send($config);
    $send->voice('iphone', 'code', 'template', 'rep');
} catch (SmsBaoException $e) {
    var_dump($e->getMessage());
}

// 获取当前账号余额
try {
    $user = new User($config);
    var_dump($user->getBalance());
} catch (SmsBaoException $e) {
    var_dump($e->getMessage());
}
