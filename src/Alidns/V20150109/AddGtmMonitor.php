<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Rpc;

/**
 * Api AddGtmMonitor
 *
 * @method string getMonitorExtendInfo()
 * @method string getAddrPoolId()
 * @method string getUserClientIp()
 * @method string getName()
 * @method string getEvaluationCount()
 * @method string getProtocolType()
 * @method string getInterval()
 * @method string getLang()
 * @method string getTimeout()
 * @method array getIspCityNode()
 */
class AddGtmMonitor extends Rpc
{
    public $product = 'Alidns';

    public $version = '2015-01-09';

    public $method = 'POST';

    public $serviceCode = 'alidns';

    /**
     * @param string $monitorExtendInfo
     *
     * @return $this
     */
    public function withMonitorExtendInfo($monitorExtendInfo)
    {
        $this->data['MonitorExtendInfo'] = $monitorExtendInfo;
        $this->options['query']['MonitorExtendInfo'] = $monitorExtendInfo;

        return $this;
    }

    /**
     * @param string $addrPoolId
     *
     * @return $this
     */
    public function withAddrPoolId($addrPoolId)
    {
        $this->data['AddrPoolId'] = $addrPoolId;
        $this->options['query']['AddrPoolId'] = $addrPoolId;

        return $this;
    }

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
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $evaluationCount
     *
     * @return $this
     */
    public function withEvaluationCount($evaluationCount)
    {
        $this->data['EvaluationCount'] = $evaluationCount;
        $this->options['query']['EvaluationCount'] = $evaluationCount;

        return $this;
    }

    /**
     * @param string $protocolType
     *
     * @return $this
     */
    public function withProtocolType($protocolType)
    {
        $this->data['ProtocolType'] = $protocolType;
        $this->options['query']['ProtocolType'] = $protocolType;

        return $this;
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function withInterval($interval)
    {
        $this->data['Interval'] = $interval;
        $this->options['query']['Interval'] = $interval;

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

    /**
     * @param string $timeout
     *
     * @return $this
     */
    public function withTimeout($timeout)
    {
        $this->data['Timeout'] = $timeout;
        $this->options['query']['Timeout'] = $timeout;

        return $this;
    }

    /**
     * @param array $ispCityNode
     *
     * @return $this
     */
    public function withIspCityNode(array $ispCityNode)
    {
        $this->data['IspCityNode'] = $ispCityNode;
        foreach ($ispCityNode as $i => $iValue) {
            $this->options['query']['IspCityNode.' . ($i + 1) . '.CityCode'] = $ispCityNode[$i]['CityCode'];
            $this->options['query']['IspCityNode.' . ($i + 1) . '.IspCode'] = $ispCityNode[$i]['IspCode'];
        }

        return $this;
    }
}
