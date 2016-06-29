<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Каталог фильмов';
?>

<div class="film-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout' => '{items}', 
        'columns' => [
            [
                'label' => 'Название',
                'format' => 'html',
                'value' => function($model) {
                    return Html::a($model->name, ['view', 'id' => $model->id]);
                },
            ],
            'description:ntext',
            'release_at:date',
        ],
    ]); ?>

    <p>
        <?= Html::a('Добавить фильм в каталог', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Добавить режиссера', ['producer/create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Добавить жанр', ['genre/create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
