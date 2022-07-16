<?php

namespace app\modules\apiv1\models;

class materia extends \app\models\Materia {

    public function fields()
    {
        return ['id','nombre','carrera','profesor','cant_alumnos'];
    }

    public function behaviors()
{
    $behaviors=parent::behaviors();
    //remove authentication filter
    $auth=$behaviors['authenticator'];
    $contentNegotiator=$behaviors['contentNegotiator'];
    $verbs=$behaviors["verbFilter"];
    // add CORS filter
    $behaviors['corsFilter']=[
        'class'=>\yii\filters\Cors::className(),
    ];
    //re-add authentication filter
    $behaviors['verbFilter']=$verbs;
    $behaviors['contentNegotiator']=$contentNegotiator;
    $behaviors['authenticator']=$auth;
    // avoid authentication on CORS-pre-flight requests (HTTP OPTIONS method)

    return $behaviors;

}

}