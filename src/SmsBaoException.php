<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

namespace LiGuAngChUn\SmsBao;

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
