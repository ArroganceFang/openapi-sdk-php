<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Rpc;

/**
 * Api DescribePhoneInfo
 *
 * @method string getSourceIp()
 * @method string getPhoneNum()
 * @method string getLang()
 * @method string getSourceCode()
 */
class DescribePhoneInfo extends Rpc
{
    public $product = 'jarvis';

    public $version = '2018-02-06';

    public $method = 'POST';

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $phoneNum
     *
     * @return $this
     */
    public function withPhoneNum($phoneNum)
    {
        $this->data['PhoneNum'] = $phoneNum;
        $this->options['query']['phoneNum'] = $phoneNum;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $sourceCode
     *
     * @return $this
     */
    public function withSourceCode($sourceCode)
    {
        $this->data['SourceCode'] = $sourceCode;
        $this->options['query']['sourceCode'] = $sourceCode;

        return $this;
    }
}
