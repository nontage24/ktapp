<?php

namespace frontend\controllers;

class HomeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $i= "Hello World";
        return $this->render('index');
    }
    
    public function actionTest1($name=null,$lname=null){
    
         $sum = "Your name is $name $lname";
         return $this->render('test1',['sum'=>$sum]);
     }
    


}
