<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class AsymmetricSignRequest extends Model
{
    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $keyVersionId;

    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $digest;
    protected $_name = [
        'keyId'        => 'KeyId',
        'keyVersionId' => 'KeyVersionId',
        'algorithm'    => 'Algorithm',
        'digest'       => 'Digest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsymmetricSignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }

        return $model;
    }
}
