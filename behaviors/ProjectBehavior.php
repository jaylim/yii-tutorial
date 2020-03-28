<?php

namespace app\behaviors;

use Yii;
use yii\base\Behavior;
use app\models\ProjectTransaction;

class ProjectBehavior extends Behavior
{
    public function approve()
    {
        Yii::info('approve()', __METHOD__);

        $transaction = $this->owner;

        $event = Yii::createObject([
            'class'       => 'app\events\ProjectTransactionEvent',
            'transaction' => $transaction,
        ]);

        $transaction->trigger(ProjectTransaction::EVENT_AFTER_APPROVE, $event);
    }

    public function reject()
    {
        Yii::info('reject()', __METHOD__);

        $transaction = $this->owner;

        $event = Yii::createObject([
            'class'       => 'app\events\ProjectTransactionEvent',
            'transaction' => $transaction,
        ]);

        $transaction->trigger(ProjectTransaction::EVENT_AFTER_REJECT, $event);
    }
}
