<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

namespace SmsBao;

/**
 * 入口
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

    /**
     * 配置
     * Client constructor.
     * @param array $config
     */
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
     * @throws SmsBaoException
     */
    public function sendSms(int $iphone, $code, string $template, string $rep)
    {
        $this->judgeConfig();
        if (empty($iphone) || empty($code) || empty($template) || empty($rep)) throw new SmsBaoException('请检查参数');
        return (new Send())->sms($this->user, $this->pass, $iphone, $code, $template, $rep);
    }

    /**
     * 获取当前账号余额
     * @return bool|false|string
     * @throws SmsBaoException
     */
    public function queryBalance()
    {
        $this->judgeConfig();
        return (new Query())->balance($this->user, $this->pass);
    }

    /**
     * 检查配置
     * @throws SmsBaoException
     */
    private function judgeConfig()
    {
        if (empty($this->user) || empty($this->pass)) throw new SmsBaoException('请配置账号密码');
    }
}
