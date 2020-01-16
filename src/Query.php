<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

namespace SmsBao;

/**
 * 查询
 */
class Query extends Base
{
    /**
     * 获取当前账号余额接口
     * @param string $user 账号
     * @param string $pass 密码
     * @return bool|false|string
     */
    protected function balance(string $user, string $pass)
    {
        return file_get_contents($this->url . "query?u=" . $user . "&p=" . md5($pass));
    }
}
