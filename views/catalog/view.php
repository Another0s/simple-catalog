<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Film */

$this->title = $model->name;

// TODO: Trash
$genres = function($model) {
            $genres = [];
            foreach ($model->getFilmGenres()->all() as $filmGenre) {
                array_push($genres, $filmGenre->getGenre0()->one()->name);
            }
            return join(', ', $genres);
};

?>
<div class="film-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',

            [
                'label' => 'Постер',
                'format' => 'html',
                'value' => Html::img($model->poster, ['height' => 128, 'width' => 128]),
            ],

            'description:ntext',
            'release_at:date',
            'producer0.name',
            [
                'label' => 'Жанры',
                'value' => $genres($model),
            ],
        ],
    ]) ?>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
