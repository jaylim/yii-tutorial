<?php

namespace app\commands;


use Yii;
use yii\console\Controller;
use yii\console\ExitCode;
use app\events\ProjectTransactionEvent;


class TutorialController extends Controller
{
    public function actionA1()
    {
        $tran = Yii::createObject([
            'class' => 'app\models\ProjectTransaction',
            'as addProject' => [
                'class' => 'app\behaviors\AddProjectCounterBehavior',
            ],
            'as email' => 'app\behaviors\SendEmailBehavior',
        ]);

        $tran->approve();

        return ExitCode::OK;
    }

    public function actionA2()
    {
        $tran = Yii::createObject([
            'class' => 'app\models\ProjectTransaction',
        ]);

        $tran->attachBehavior('project', 'app\behaviors\AddProjectCounterBehavior');
        $tran->attachBehavior('email', [
            'class' => 'app\behaviors\SendEmailBehavior',
        ]);

        $tran->approve();

        return ExitCode::OK;
    }

    public function actionA3()
    {
        $tran = Yii::createObject([
            'class' => 'app\models\ProjectTransaction',
            'on afterApprove' => function (ProjectTransactionEvent $event) {
                Yii::info('add new user + 1 if it is new user', __METHOD__);
            },
        ]);

        $tran->attachBehavior('project', 'app\behaviors\AddProjectCounterBehavior');
        $tran->attachBehavior('email', [
            'class' => 'app\behaviors\SendEmailBehavior',
        ]);

        $tran->approve();

        return ExitCode::OK;
    }

    public function actionA4()
    {
        $tran = Yii::createObject([
            'class' => 'app\models\ProjectTransaction',
            'on afterApprove' => function (ProjectTransactionEvent $event) {
                Yii::info('add new user + 1 if it is new user', __METHOD__);
            },
        ]);

        $tran->attachBehavior('project', 'app\behaviors\AddProjectCounterBehavior');
        $tran->attachBehavior('email', [
            'class' => 'app\behaviors\SendEmailBehavior',
        ]);

        $tran->reject();

        return ExitCode::OK;
    }
}
