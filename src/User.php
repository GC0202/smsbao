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

namespace dtApp\SmsBao;

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
