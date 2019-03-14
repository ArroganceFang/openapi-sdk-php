<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api GetOssProperties
 *
 * @method string getBizid()
 */
class GetOssProperties extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';

    /**
     * @param string $bizid
     *
     * @return $this
     */
    public function withBizid($bizid)
    {
        $this->data['Bizid'] = $bizid;
        $this->options['query']['Bizid'] = $bizid;

        return $this;
    }
}
