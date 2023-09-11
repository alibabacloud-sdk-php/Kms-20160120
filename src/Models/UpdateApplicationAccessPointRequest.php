<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationAccessPointRequest extends Model
{
    /**
     * @example aap description
     *
     * @var string
     */
    public $description;

    /**
     * @example aap_test
     *
     * @var string
     */
    public $name;

    /**
     * @example ["kst-hzz62ee817bvyyr5x****.efkd","kst-hzz62ee817bvyyr5x****.eyyp"]
     *
     * @var string
     */
    public $policies;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'policies'    => 'Policies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policies) {
            $res['Policies'] = $this->policies;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicationAccessPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Policies'])) {
            $model->policies = $map['Policies'];
        }

        return $model;
    }
}
