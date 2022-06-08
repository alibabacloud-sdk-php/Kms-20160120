<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ReEncryptShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @var string
     */
    public $destinationEncryptionContextShrink;

    /**
     * @var string
     */
    public $destinationKeyId;

    /**
     * @var string
     */
    public $sourceEncryptionAlgorithm;

    /**
     * @var string
     */
    public $sourceEncryptionContextShrink;

    /**
     * @var string
     */
    public $sourceKeyId;

    /**
     * @var string
     */
    public $sourceKeyVersionId;
    protected $_name = [
        'ciphertextBlob'                     => 'CiphertextBlob',
        'destinationEncryptionContextShrink' => 'DestinationEncryptionContext',
        'destinationKeyId'                   => 'DestinationKeyId',
        'sourceEncryptionAlgorithm'          => 'SourceEncryptionAlgorithm',
        'sourceEncryptionContextShrink'      => 'SourceEncryptionContext',
        'sourceKeyId'                        => 'SourceKeyId',
        'sourceKeyVersionId'                 => 'SourceKeyVersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ciphertextBlob) {
            $res['CiphertextBlob'] = $this->ciphertextBlob;
        }
        if (null !== $this->destinationEncryptionContextShrink) {
            $res['DestinationEncryptionContext'] = $this->destinationEncryptionContextShrink;
        }
        if (null !== $this->destinationKeyId) {
            $res['DestinationKeyId'] = $this->destinationKeyId;
        }
        if (null !== $this->sourceEncryptionAlgorithm) {
            $res['SourceEncryptionAlgorithm'] = $this->sourceEncryptionAlgorithm;
        }
        if (null !== $this->sourceEncryptionContextShrink) {
            $res['SourceEncryptionContext'] = $this->sourceEncryptionContextShrink;
        }
        if (null !== $this->sourceKeyId) {
            $res['SourceKeyId'] = $this->sourceKeyId;
        }
        if (null !== $this->sourceKeyVersionId) {
            $res['SourceKeyVersionId'] = $this->sourceKeyVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReEncryptShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }
        if (isset($map['DestinationEncryptionContext'])) {
            $model->destinationEncryptionContextShrink = $map['DestinationEncryptionContext'];
        }
        if (isset($map['DestinationKeyId'])) {
            $model->destinationKeyId = $map['DestinationKeyId'];
        }
        if (isset($map['SourceEncryptionAlgorithm'])) {
            $model->sourceEncryptionAlgorithm = $map['SourceEncryptionAlgorithm'];
        }
        if (isset($map['SourceEncryptionContext'])) {
            $model->sourceEncryptionContextShrink = $map['SourceEncryptionContext'];
        }
        if (isset($map['SourceKeyId'])) {
            $model->sourceKeyId = $map['SourceKeyId'];
        }
        if (isset($map['SourceKeyVersionId'])) {
            $model->sourceKeyVersionId = $map['SourceKeyVersionId'];
        }

        return $model;
    }
}
