<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * Api AssociateGlobalAccelerationInstance
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getBackendServerId()
 * @method string getOwnerId()
 * @method string getGlobalAccelerationInstanceId()
 * @method string getBackendServerRegionId()
 * @method string getBackendServerType()
 */
class AssociateGlobalAccelerationInstance extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $backendServerId
     *
     * @return $this
     */
    public function withBackendServerId($backendServerId)
    {
        $this->data['BackendServerId'] = $backendServerId;
        $this->options['query']['BackendServerId'] = $backendServerId;

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

    /**
     * @param string $globalAccelerationInstanceId
     *
     * @return $this
     */
    public function withGlobalAccelerationInstanceId($globalAccelerationInstanceId)
    {
        $this->data['GlobalAccelerationInstanceId'] = $globalAccelerationInstanceId;
        $this->options['query']['GlobalAccelerationInstanceId'] = $globalAccelerationInstanceId;

        return $this;
    }

    /**
     * @param string $backendServerRegionId
     *
     * @return $this
     */
    public function withBackendServerRegionId($backendServerRegionId)
    {
        $this->data['BackendServerRegionId'] = $backendServerRegionId;
        $this->options['query']['BackendServerRegionId'] = $backendServerRegionId;

        return $this;
    }

    /**
     * @param string $backendServerType
     *
     * @return $this
     */
    public function withBackendServerType($backendServerType)
    {
        $this->data['BackendServerType'] = $backendServerType;
        $this->options['query']['BackendServerType'] = $backendServerType;

        return $this;
    }
}
