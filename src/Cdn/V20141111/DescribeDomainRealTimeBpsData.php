<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeDomainRealTimeBpsData
 *
 * @method string getLocationNameEn()
 * @method string getIspNameEn()
 * @method string getStartTime()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getOwnerId()
 */
class DescribeDomainRealTimeBpsData extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    /**
     * @param string $locationNameEn
     *
     * @return $this
     */
    public function withLocationNameEn($locationNameEn)
    {
        $this->data['LocationNameEn'] = $locationNameEn;
        $this->options['query']['LocationNameEn'] = $locationNameEn;

        return $this;
    }

    /**
     * @param string $ispNameEn
     *
     * @return $this
     */
    public function withIspNameEn($ispNameEn)
    {
        $this->data['IspNameEn'] = $ispNameEn;
        $this->options['query']['IspNameEn'] = $ispNameEn;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

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
