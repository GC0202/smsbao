<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

use LiGuAngChUn\SmsBao\Send;
use LiGuAngChUn\SmsBao\SmsBaoException;
use LiGuAngChUn\SmsBao\User;

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
}

// 发送国际验证码
try {
    $send = new Send($config);
    $send->wSms('iphone', 'code', 'template', 'rep');
} catch (SmsBaoException $e) {
}
// 发送语音验证码
try {
    $send = new Send($config);
    $send->voice('iphone', 'code', 'template', 'rep');
} catch (SmsBaoException $e) {
}

// 获取当前账号余额
try {
    $user = new User($config);
    var_dump($user->getBalance());
} catch (SmsBaoException $e) {
    var_dump($e->getMessage());
}
