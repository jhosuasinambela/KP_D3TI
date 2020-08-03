<?php

namespace app\components;

use yii\base\Behavior;
use yii\db\ActiveRecord;

class NotificationBehavior extends Behavior
{

  /**
   * Binds functions 'afterInsert' and 'afterUpdate' to their respective events.
   */
  public function events()
  {
    return [
      ActiveRecord::EVENT_AFTER_DISETUJUI => 'afterDisetujui',
      ActiveRecord::EVENT_AFTER_DITOLAK => 'afterDitolak',
    ];
  }

  /**
   * This function will be executed when an EVENT_AFTER_INSERT is fired
   */
  public function afterDisetujui($event)
  {
    // check the 'id' (name) of the action
    if (Yii::$app->controller->action->id === 'disetujui') {
      // send email to administrator 'user performed insert'
    }
  }

  /**
   * This function will be executed when an EVENT_AFTER_UPDATE is fired
   */
  public function afterDitolak($event)
  {
    if (Yii::$app->controller->action->id === 'ditolak') {
      // send email to administrator 'user performed update'
    }
  }

}