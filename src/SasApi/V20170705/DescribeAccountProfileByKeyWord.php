<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api DescribeAccountProfileByKeyWord
 *
 * @method string getSourceIp()
 * @method string getKeyword()
 */
class DescribeAccountProfileByKeyWord extends Rpc
{
    public $product = 'Sas-api';

    public $version = '2017-07-05';

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
     * @param string $keyword
     *
     * @return $this
     */
    public function withKeyword($keyword)
    {
        $this->data['Keyword'] = $keyword;
        $this->options['query']['Keyword'] = $keyword;

        return $this;
    }
}
