<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Rpc;

/**
 * Api UploadCACertificate
 *
 * @method string getAccessKeyId()
 * @method string getResourceGroupId()
 * @method string getResourceOwnerId()
 * @method string getCACertificate()
 * @method string getCACertificateName()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class UploadCACertificate extends Rpc
{
    public $product = 'Slb';

    public $version = '2014-05-15';

    public $method = 'POST';

    public $serviceCode = 'slb';

    /**
     * @param string $accessKeyId
     *
     * @return $this
     */
    public function withAccessKeyId($accessKeyId)
    {
        $this->data['AccessKeyId'] = $accessKeyId;
        $this->options['query']['access_key_id'] = $accessKeyId;

        return $this;
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function withResourceGroupId($resourceGroupId)
    {
        $this->data['ResourceGroupId'] = $resourceGroupId;
        $this->options['query']['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

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
     * @param string $cACertificate
     *
     * @return $this
     */
    public function withCACertificate($cACertificate)
    {
        $this->data['CACertificate'] = $cACertificate;
        $this->options['query']['CACertificate'] = $cACertificate;

        return $this;
    }

    /**
     * @param string $cACertificateName
     *
     * @return $this
     */
    public function withCACertificateName($cACertificateName)
    {
        $this->data['CACertificateName'] = $cACertificateName;
        $this->options['query']['CACertificateName'] = $cACertificateName;

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
