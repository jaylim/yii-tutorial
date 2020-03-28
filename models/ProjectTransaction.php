<?php

namespace app\models;

use Yii;
use yii\base\Model;

class ProjectTransaction extends Model
{
    const EVENT_AFTER_APPROVE = 'afterApprove';
    const EVENT_AFTER_REJECT  = 'afterReject';

    public function behaviors()
    {
        return [
            'default' => 'app\behaviors\ProjectBehavior',
        ];
    }
}
