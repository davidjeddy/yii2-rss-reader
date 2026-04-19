<?php

use yii\helpers\Html;
use yii\i18n\Formatter;

?>
<div class="well">
	<div class="h3"><?php echo $model->title; ?></div>

	<div><?php echo Yii::$app->formatter->asDatetime($model->published); ?></div>

	<div>&nbsp;&nbsp;&nbsp;<?php echo $model->content; ?></div>

	<div><?php echo Html::a(Yii::t('news', 'Read More...'), $model->link[0]['href']['0'], ['target' => '_new'] ); ?></div>
</div>