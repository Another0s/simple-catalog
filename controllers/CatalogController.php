<?php

namespace app\controllers;

use Yii;
use app\models\Film;
use app\models\Producer;
use app\models\Genre;
use app\models\FilmGenreForm;
use app\models\FilmGenre;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CatalogController implements the CRUD actions for Film model.
 */
class CatalogController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Film::find()->with('producer0'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    
    public function actionCreate()
    {
        $film = new Film();
        $filmGenreForm = new FilmGenreForm();

        $producers = Producer::find()->all();
        $genres = Genre::find()->all();

        if ($film->load(Yii::$app->request->post()) && $filmGenreForm->load(Yii::$app->request->post())) {
            $film->save(false);

            foreach ($filmGenreForm->genres as $genre) {
                $filmGenre = new FilmGenre();
                $filmGenre->film = $film->id;
                $filmGenre->genre = $genre;
                $filmGenre->save(false);
            }
            return $this->redirect(['view', 'id' => $film->id]);
        } 
        else {
            return $this->render('create', [
                'film' => $film,
                'filmGenreForm' => $filmGenreForm,
                'producers' => $producers,
                'genres' => $genres,
            ]);
        }
    }

    
    public function actionUpdate($id)
    {
        $film = $this->findModel($id);
        $filmGenreForm = new FilmGenreForm();

        $producers = Producer::find()->all();
        $genres = Genre::find()->all();

        if ($film->load(Yii::$app->request->post()) && $filmGenreForm->load(Yii::$app->request->post())) {
            $film->save(false);

            FilmGenre::deleteAll(['film' => $film->id]);

            foreach ($filmGenreForm->genres as $genre) {
                $filmGenre = new FilmGenre();
                $filmGenre->film = $film->id;
                $filmGenre->genre = $genre;
                $filmGenre->save(false);
            }
            return $this->redirect(['view', 'id' => $film->id]);
        } 
        else {
            return $this->render('update', [
                'film' => $film,
                'filmGenreForm' => $filmGenreForm,
                'producers' => $producers,
                'genres' => $genres,
            ]);
        }
    }

    
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    
    protected function findModel($id)
    {
        if (($model = Film::findOne($id)) !== null) {
            return $model;
        } 
        else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
