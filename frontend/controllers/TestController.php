<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {
        
        //echo 'ทดสอบ 1';
        $a = 3;
        $b = 5;
        $sum = $a + $b;
        $param = ['psum' => $sum, 'pa' => $a, 'pb' => $b];
        return $this->render('test1', $param);
        
    } // End Test1

    public function actionTest2($name = null,$lname=null) {
        
        //echo "Your name is $name";
        $info = "Your name is $name $lname";        
        return $this->render('test2',['info'=>$info]);
        
    } // End Test2
}
