<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>
<div class="">

        <?foreach($messages as $message):?>
            <div class="col-lg-4">

            <h3>id = <?=$message->id?></p>
            <p>message = <?=$message->text?></p>
        </div>
        <?endforeach;?>
</div>
