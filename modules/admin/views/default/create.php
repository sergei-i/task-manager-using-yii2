<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

    <h1>Create</h1>

<?php $form = ActiveForm::begin() ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($task, 'title')->textInput(); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($task, 'description')->textInput(); ?>
        </div>
        <div class="col-md-12">
            <?= Html::submitButton('Создать', ['class' => 'btn btn-success']); ?>
        </div>
    </div>
<?php ActiveForm::end(); ?>