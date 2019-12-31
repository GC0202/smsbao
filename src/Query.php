<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

namespace SmsBao;

/**
 * 查询
 * Class Query
 */
class Query extends Base
{
    /**
     * 获取当前账号余额接口
     * @param $user
     * @param $pass
     * @return bool|false|string
     */
    protected function balance($user, $pass)
    {
        return file_get_contents($this->url. "query?u=" . $user . "&p=" . md5($pass));
    }
}
