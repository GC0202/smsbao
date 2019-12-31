<?php

namespace SmsBao;

use DtApp\Tool\DtAppException;

/**
 * (c) Chaim <gc@dtapp.net>
 */
class Client
{
    /**
     * 平台账号
     * @var mixed|string
     */
    private $user = '';

    /**
     * 平台密码
     * @var mixed|string
     */
    private $pass = '';

    public function __construct(array $config = [])
    {
        if (!empty($config['user'])) $this->user = $config['user'];
        if (!empty($config['pass'])) $this->pass = $config['pass'];
    }

    /**
     * 发送国内验证码
     * @param int $iphone 手机号码
     * @param int|string $code 验证码
     * @param string $template 模板
     * @param string $rep 替换
     * @return mixed
     * @throws DtAppException
     */
    public function sendSms(int $iphone, $code, string $template, string $rep)
    {
        if (empty($this->user) || empty($this->pass) || empty($iphone) || empty($code) || empty($template) || empty($rep)) throw new DtAppException('请检查参数');
        return (new Send())->sms($this->user, $this->pass, $iphone, $code, $template, $rep);
    }

    /**
     * 获取当前账号余额
     * @return bool|false|string
     * @throws DtAppException
     */
    public function queryBalance()
    {
        if (empty($this->user) || empty($this->pass)) throw new DtAppException('请检查参数');
        return (new Query())->balance($this->user, $this->pass);
    }
}
