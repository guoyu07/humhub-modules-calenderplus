<?php $this->beginContent('application.modules_core.activity.views.activityLayoutMail', array('activity' => $activity, 'showSpace' => true)); ?>
<?php

echo Yii::t('CalendarPlusModule.views_activities_EntryResponse', '%displayName% maybe attends to %contentTitle%.', array(
    '%displayName%' => '<strong>' . CHtml::encode($user->displayName) . '</strong>',
    '%contentTitle%' => ActivityModule::formatOutput($activity->getUnderlyingObject()->getContentTitle())
));
?>
<?php $this->endContent(); ?>    