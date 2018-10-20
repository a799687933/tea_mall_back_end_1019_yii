<?php

namespace Alipay\Exception;

/**
 * 当 Base64 编解码失败时抛出。
 */
class AlipayBase64Exception extends AlipayException
{
    public function __construct($value, $isEncoding = false)
    {
        $verb = $isEncoding ? 'encoded' : 'decoded';
        parent::__construct("Value `{$value}` cound not be {$verb}");
    }
}
