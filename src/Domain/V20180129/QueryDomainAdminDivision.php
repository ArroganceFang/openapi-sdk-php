<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * Api QueryDomainAdminDivision
 *
 * @method string getUserClientIp()
 * @method string getLang()
 */
class QueryDomainAdminDivision extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

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
}
