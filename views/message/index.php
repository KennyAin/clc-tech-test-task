<?php
/*
@var $message string
*/
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class='form'>
    <h2><?=$message?></h2>
    <?php $f = ActiveForm::begin(); ?>
    <?= $f->field($form, 'message')?>
    <?= Html::submitButton('Добавить', ['class'=>'btn btn-success']);?>
    <?php ActiveForm::end(); ?>
</div>
<br/>
<?= Html::a('Показать все добавленные сообщения', ['/message/messages'], ['class'=>'btn btn-info']) ?>