<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

use SmsBao\Client;

require_once '../vendor/autoload.php';

// 配置
$smsbao = new Client([
    'user' => '',
    'pass' => ''
]);

// 发送国内验证码
try {
    $smsbao->sendSms('iphone', 'code', 'template', 'rep');
} catch (\SmsBao\SmsBaoException $e) {
    var_dump($e->getMessage());
}

// 获取当前账号余额
try {
    var_dump($smsbao->queryBalance());
} catch (\SmsBao\SmsBaoException $e) {
    var_dump($e->getMessage());
}
