<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

namespace LiGuAngChUn\SmsBao;

/**
 * 发送短信
 */
class Send extends BaseSmsBao
{
    /**
     * 发送国内短信
     * @param int $iphone 手机号码
     * @param string | int $code 码
     * @param string $template 模板
     * @param string $rep 替换
     * @return mixed
     * @throws SmsBaoException
     */
    public function sms(int $iphone, $code, string $template, string $rep)
    {
        if (empty($this->config->get('user'))) throw new SmsBaoException('请配置账号');
        if (empty($this->config->get('pass'))) throw new SmsBaoException('请配置密码');
        $content = str_replace($rep, $code, $template);
        $url = $this->getUrl() . "sms?u=" . $this->config->get('user') . "&p=" . md5($this->config->get('pass')) . "&m=" . $iphone . "&c=" . urlencode($content);
        $result = file_get_contents($url);
        return $this->statusStr[$result];
    }

    /**
     * 发送国际短信
     * @param int $iphone 手机号码
     * @param string | int $code 码
     * @param string $template 模板
     * @param string $rep 替换
     * @return mixed
     * @throws SmsBaoException
     */
    public function wSms(int $iphone, $code, string $template, string $rep)
    {
        if (empty($this->config->get('user'))) throw new SmsBaoException('请配置账号');
        if (empty($this->config->get('pass'))) throw new SmsBaoException('请配置密码');
        $content = str_replace($rep, $code, $template);
        $url = $this->getUrl() . "wsms?u=" . $this->config->get('user') . "&p=" . md5($this->config->get('pass')) . "&m=" . $iphone . "&c=" . urlencode($content);
        $result = file_get_contents($url);
        return $this->statusStr[$result];
    }

    /**
     * 发送语音验证码
     * @param int $iphone 手机号码
     * @param string | int $code 码
     * @param string $template 模板
     * @param string $rep 替换
     * @return mixed
     * @throws SmsBaoException
     */
    public function voice(int $iphone, $code, string $template, string $rep)
    {
        if (empty($this->config->get('user'))) throw new SmsBaoException('请配置账号');
        if (empty($this->config->get('pass'))) throw new SmsBaoException('请配置密码');
        $content = str_replace($rep, $code, $template);
        $url = $this->getUrl() . "voice?u=" . $this->config->get('user') . "&p=" . md5($this->config->get('pass')) . "&m=" . $iphone . "&c=" . urlencode($content);
        $result = file_get_contents($url);
        return $this->statusStr[$result];
    }
}
