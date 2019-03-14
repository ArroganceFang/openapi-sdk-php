<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * Api ModifySynchronizationObject
 *
 * @method string getSynchronizationJobId()
 * @method string getSynchronizationObjects()
 * @method string getOwnerId()
 */
class ModifySynchronizationObject extends Rpc
{
    public $product = 'Dts';

    public $version = '2016-08-01';

    public $method = 'POST';

    /**
     * @param string $synchronizationJobId
     *
     * @return $this
     */
    public function withSynchronizationJobId($synchronizationJobId)
    {
        $this->data['SynchronizationJobId'] = $synchronizationJobId;
        $this->options['query']['SynchronizationJobId'] = $synchronizationJobId;

        return $this;
    }

    /**
     * @param string $synchronizationObjects
     *
     * @return $this
     */
    public function withSynchronizationObjects($synchronizationObjects)
    {
        $this->data['SynchronizationObjects'] = $synchronizationObjects;
        $this->options['query']['SynchronizationObjects'] = $synchronizationObjects;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }
}
