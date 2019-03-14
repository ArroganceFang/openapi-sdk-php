<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api OperateTrojan
 *
 * @method string getSourceIp()
 * @method string getOperateType()
 * @method string getType()
 * @method string getInfo()
 */
class OperateTrojan extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

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
     * @param string $operateType
     *
     * @return $this
     */
    public function withOperateType($operateType)
    {
        $this->data['OperateType'] = $operateType;
        $this->options['query']['OperateType'] = $operateType;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @param string $info
     *
     * @return $this
     */
    public function withInfo($info)
    {
        $this->data['Info'] = $info;
        $this->options['query']['Info'] = $info;

        return $this;
    }
}
