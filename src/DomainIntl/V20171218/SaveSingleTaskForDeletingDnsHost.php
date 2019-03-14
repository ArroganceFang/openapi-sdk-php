<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * Api SaveSingleTaskForDeletingDnsHost
 *
 * @method string getInstanceId()
 * @method array getIp()
 * @method string getDnsName()
 * @method string getUserClientIp()
 * @method string getLang()
 */
class SaveSingleTaskForDeletingDnsHost extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';

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

    /**
     * @param array $ip
     *
     * @return $this
     */
    public function withIp(array $ip)
    {
        $this->data['Ip'] = $ip;
        foreach ($ip as $i => $iValue) {
            $this->options['query']['Ip.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $dnsName
     *
     * @return $this
     */
    public function withDnsName($dnsName)
    {
        $this->data['DnsName'] = $dnsName;
        $this->options['query']['DnsName'] = $dnsName;

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
}
