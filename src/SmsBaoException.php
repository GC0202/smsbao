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

use Exception;

/**
 * 处理错误
 * @package SmsBao
 */
class SmsBaoException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
