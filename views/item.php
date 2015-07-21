<?php

use yii\helpers\Html;
use yii\i18n\Formatter;

?>
<div class="well clearfix">
	<h2 class="article-title">
        <a href="<?php echo $model->link[0]['href']['0'] ?>"><?php echo $model->title; ?></a>
    </h2>
	<div class="article-meta">
        <span class="article-date">
            <?php echo Yii::$app->formatter->asDatetime($model->published); ?>
        </span>
    </div>
	<div class="article-content">
        <?php echo $model->content; ?>
    </div>
	<div class="article-footer">
        <?php echo Html::a(Yii::t('news', 'Read More...'),
              $model->link[0]['href']['0'],
              [
                'target' => '_new',
                'class' => 'btn btn-primary pull-right'
              ] );
        ?>
    </div>
</div>
