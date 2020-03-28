<?php

namespace app\events;

use Yii;
use yii\base\Event;
use app\models\ProjectTransaction;

class ProjectTransactionEvent extends Event
{
    protected $_tran;

    public function setTransaction(ProjectTransaction $tran)
    {
        $this->_tran = $tran;
    }

    public function getTransaction()
    {
        return $this->_tran;
    }
}
