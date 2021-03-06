<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UpdateSecretVersionStageRequest extends Model
{
    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $versionStage;

    /**
     * @var string
     */
    public $removeFromVersion;

    /**
     * @var string
     */
    public $moveToVersion;
    protected $_name = [
        'secretName'        => 'SecretName',
        'versionStage'      => 'VersionStage',
        'removeFromVersion' => 'RemoveFromVersion',
        'moveToVersion'     => 'MoveToVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->versionStage) {
            $res['VersionStage'] = $this->versionStage;
        }
        if (null !== $this->removeFromVersion) {
            $res['RemoveFromVersion'] = $this->removeFromVersion;
        }
        if (null !== $this->moveToVersion) {
            $res['MoveToVersion'] = $this->moveToVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSecretVersionStageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['VersionStage'])) {
            $model->versionStage = $map['VersionStage'];
        }
        if (isset($map['RemoveFromVersion'])) {
            $model->removeFromVersion = $map['RemoveFromVersion'];
        }
        if (isset($map['MoveToVersion'])) {
            $model->moveToVersion = $map['MoveToVersion'];
        }

        return $model;
    }
}
