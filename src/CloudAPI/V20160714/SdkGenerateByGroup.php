<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * Api SdkGenerateByGroup
 *
 * @method string getSecurityToken()
 * @method string getGroupId()
 * @method string getLanguage()
 */
class SdkGenerateByGroup extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $language
     *
     * @return $this
     */
    public function withLanguage($language)
    {
        $this->data['Language'] = $language;
        $this->options['query']['Language'] = $language;

        return $this;
    }
}
