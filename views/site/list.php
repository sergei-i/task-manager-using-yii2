<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'List';
$this->params['breadcrumbs'][] = $this->title;
?>

<div>
    <?php foreach ($tasks as $task): ?>
        <p>
            <!--<a href="<?/*= Url::toRoute(['site/view', 'id' => $task->id]); */?>"><?/*= $task->title; */?></a>-->
            <a href="/site/view/<?= $task->id; ?>"><?= $task->title; ?></a>
        </p>
    <?php endforeach; ?>
</div>