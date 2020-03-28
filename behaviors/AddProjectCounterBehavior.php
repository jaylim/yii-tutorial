<?php

namespace app\behaviors;

use Yii;
use yii\base\Behavior;
use app\events\ProjectTransactionEvent;

class AddProjectCounterBehavior extends Behavior
{
    public function events()
    {
        return [
            'afterApprove' => 'addCounter',
        ];
    }

    public function addCounter(ProjectTransactionEvent $event)
    {
        $tran = $event->getTransaction();
        Yii::info('add project counter', __METHOD__);
    }
}
