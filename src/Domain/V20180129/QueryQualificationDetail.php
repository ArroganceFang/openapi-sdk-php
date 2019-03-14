<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * Api QueryQualificationDetail
 *
 * @method string getInstanceId()
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getQualificationType()
 */
class QueryQualificationDetail extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

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

    /**
     * @param string $qualificationType
     *
     * @return $this
     */
    public function withQualificationType($qualificationType)
    {
        $this->data['QualificationType'] = $qualificationType;
        $this->options['query']['QualificationType'] = $qualificationType;

        return $this;
    }
}
