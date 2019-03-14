<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * Api UpdateLoginProfile
 *
 * @method string getPassword()
 * @method string getPasswordResetRequired()
 * @method string getMFABindRequired()
 * @method string getUserName()
 */
class UpdateLoginProfile extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';

    /**
     * @param string $password
     *
     * @return $this
     */
    public function withPassword($password)
    {
        $this->data['Password'] = $password;
        $this->options['query']['Password'] = $password;

        return $this;
    }

    /**
     * @param string $passwordResetRequired
     *
     * @return $this
     */
    public function withPasswordResetRequired($passwordResetRequired)
    {
        $this->data['PasswordResetRequired'] = $passwordResetRequired;
        $this->options['query']['PasswordResetRequired'] = $passwordResetRequired;

        return $this;
    }

    /**
     * @param string $mFABindRequired
     *
     * @return $this
     */
    public function withMFABindRequired($mFABindRequired)
    {
        $this->data['MFABindRequired'] = $mFABindRequired;
        $this->options['query']['MFABindRequired'] = $mFABindRequired;

        return $this;
    }

    /**
     * @param string $userName
     *
     * @return $this
     */
    public function withUserName($userName)
    {
        $this->data['UserName'] = $userName;
        $this->options['query']['UserName'] = $userName;

        return $this;
    }
}
