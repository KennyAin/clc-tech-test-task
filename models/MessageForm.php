<?php
namespace app\models;

use Yii;
use yii\base\Model;
class MessageForm extends Model{
    public $message;

    public function rules(){
        return[
            [['message'], 'required', 'message' => 'поле не заполнено'],
        ];
    }
}
?>