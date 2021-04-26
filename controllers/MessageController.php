<?php

namespace app\controllers;
use Yii;
use app\models\Message;
use app\models\MessageForm;
class MessageController extends \yii\web\Controller
{
    public function actionMessages()
    {
        $messages = Message::find()->all();
        return $this->render('messages',[
            'messages' => $messages,
        ]);
    }
    
    public function actionIndex(){
        $form = new MessageForm();
        $message = '';
        if($form->load(Yii::$app->request->post()) && $form->validate()){
            $message = $form->message;
            $connection = Yii::$app->db;
            $connection->createCommand()->insert(Message::tableName(),
             ['text' => $form->message])->execute();
            $id = $connection->getLastInsertId();
            $message .= ' добвален с id = '. $id;
        }
        return $this->render('index',[
            'form' => $form,
            'message' => $message,
        ]);
    }


}
