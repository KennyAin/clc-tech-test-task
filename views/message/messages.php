<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div class="row">

        <?foreach($messages as $message):?>
            <div class="col-lg-4">

            <h3>id = <?=$message->id?></p>
            <p>message = <?=$message->text?></p>
        </div>
        <?endforeach;?>
</div>
<div>
<?= Html::a('<---- Обратно', ['/message/index'], ['class'=>'btn btn-success']) ?>
</div>
