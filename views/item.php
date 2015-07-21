<?php

use yii\helpers\Html;
use yii\i18n\Formatter;

?>
<div class="well clearfix">
	<h2>
        <a href="<?php echo $model->link[0]['href']['0'] ?>"><?php echo $model->title; ?></a>
    </h2>
	<p class="text-muted">
        <?php echo Yii::$app->formatter->asDatetime($model->published); ?>
    </p>
	<p>
        <?php echo $model->content; ?>
    </p>
	<p>
        <?php echo Html::a(Yii::t('news', 'Read More...'),
              $model->link[0]['href']['0'],
              [
                'target' => '_new',
                'class' => 'btn btn-primary pull-right'
              ] );
        ?>
    </p>
</div>
