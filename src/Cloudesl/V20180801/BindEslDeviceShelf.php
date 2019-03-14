<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * Api BindEslDeviceShelf
 *
 * @method string getShelfCode()
 * @method string getEslBarCode()
 * @method string getStoreId()
 */
class BindEslDeviceShelf extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';

    /**
     * @param string $shelfCode
     *
     * @return $this
     */
    public function withShelfCode($shelfCode)
    {
        $this->data['ShelfCode'] = $shelfCode;
        $this->options['query']['ShelfCode'] = $shelfCode;

        return $this;
    }

    /**
     * @param string $eslBarCode
     *
     * @return $this
     */
    public function withEslBarCode($eslBarCode)
    {
        $this->data['EslBarCode'] = $eslBarCode;
        $this->options['query']['EslBarCode'] = $eslBarCode;

        return $this;
    }

    /**
     * @param string $storeId
     *
     * @return $this
     */
    public function withStoreId($storeId)
    {
        $this->data['StoreId'] = $storeId;
        $this->options['query']['StoreId'] = $storeId;

        return $this;
    }
}
