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

namespace DtApp\SmsBao;

/**
 * 发送短信
 * Class Send
 * @package DtApp\SmsBao
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
