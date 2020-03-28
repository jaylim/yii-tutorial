<?php

namespace app\behaviors;

use Yii;
use yii\base\Behavior;
use app\events\ProjectTransactionEvent;

class SendEmailBehavior extends Behavior
{
    public function events()
    {
        return [
            'afterApprove' => 'sendApproveEmail',
            'afterReject'  => 'sendRejectEmail',
        ];
    }

    public function sendApproveEmail(ProjectTransactionEvent $event)
    {
        Yii::info('send approve email', __METHOD__);
    }

    public function sendRejectEmail(ProjectTransactionEvent $event)
    {
        Yii::info('send reject email', __METHOD__);
    }
}
