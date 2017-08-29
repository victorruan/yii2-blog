<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use common\models\Category;
?>
<li class="ring-catelog-blog" onclick="window.location.href = '/site/blog?id=<?= $model->blog_id ?>'">
    <h1>
        <?= Html::encode($model->blog_name) ?>
    </h1>
</li>