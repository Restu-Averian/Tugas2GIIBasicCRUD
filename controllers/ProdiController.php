<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Prodi;

class ProdiController extends Controller
{
    public function actionIndex()
    {
        $query = Prodi::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $data_prodi = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index',[
            'data_prodi' => $data_prodi,
            'pagination' => $pagination,
        ]);
    }
    
    /*
    public function actionCreate()
    {
        $model = new Prodi();
        if($model->load(Yii::$app->request->post()) && $model->save())
        {
            //Kalau berhasil
            Yii::$app->session->setFlash('success','Data berhasil disimpan');
            return $this->refresh();
        }

        return $this->render('create',[
            'model'=>$model,
            ]);
    }
    */
}