<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

namespace LiGuAngChUn\SmsBao;

/**
 * 用户
 */
class User extends BaseSmsBao
{
    /**
     * 获取当前账号余额接口
     * @return bool|false|string
     * @throws SmsBaoException
     */
    public function getBalance()
    {
        if (empty($this->config->get('user'))) throw new SmsBaoException('请配置账号');
        if (empty($this->config->get('pass'))) throw new SmsBaoException('请配置密码');
        return file_get_contents($this->getUrl() . "query?u=" . $this->config->get('user') . "&p=" . md5($this->config->get('pass')));
    }
}
