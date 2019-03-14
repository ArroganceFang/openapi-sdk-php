<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api ListPhoneNumbers
 *
 * @method string getOutboundOnly()
 * @method string getInstanceId()
 */
class ListPhoneNumbers extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

    /**
     * @param string $outboundOnly
     *
     * @return $this
     */
    public function withOutboundOnly($outboundOnly)
    {
        $this->data['OutboundOnly'] = $outboundOnly;
        $this->options['query']['OutboundOnly'] = $outboundOnly;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }
}
