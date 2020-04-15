<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class GetPublicKeyRequest extends Model
{
    /**
     * @description KeyId
     *
     * @var string
     */
    public $keyId;
    /**
     * @description KeyVersionId
     *
     * @var string
     */
    public $keyVersionId;
    protected $_name = [
        'keyId'        => 'KeyId',
        'keyVersionId' => 'KeyVersionId',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('keyVersionId', $this->keyVersionId, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['KeyId']        = $this->keyId;
        $res['KeyVersionId'] = $this->keyVersionId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPublicKeyRequest
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

        return $model;
    }
}
