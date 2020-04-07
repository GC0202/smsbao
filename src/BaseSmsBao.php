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
 * 中间件
 * Class BaseSmsBao
 * @package dtApp\SmsBao
 */
class BaseSmsBao
{
    /**
     * 定义当前版本
     */
    const VERSION = '1.0.6';

    /**
     * 配置
     * @var
     */
    public $config;

    /**
     * 官方错误码
     * @var array
     */
    protected $statusStr = [
        "0" => "0",
        "-1" => "参数不全",
        "-2" => "服务器空间不支持,请确认支持curl或者fsocket，联系您的空间商解决或者更换空间！",
        "30" => "密码错误",
        "40" => "账号不存在",
        "41" => "余额不足",
        "42" => "帐户已过期",
        "43" => "IP地址限制",
        "50" => "内容含有敏感词",
        "51" => "手机号码不正确"
    ];

    /**
     * BaseSmsBao constructor.
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->config = new DataArray($options);
    }

    /**
     * 接口网址
     * @return string
     */
    protected function getUrl()
    {
        return 'https://api.smsbao.com/';
    }
}
