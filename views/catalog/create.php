<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Film */

$this->title = 'Добавить фильм в каталог';
?>
<div class="film-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'film' => $film,
        'filmGenreForm' => $filmGenreForm,
        'producers' => $producers,
        'genres' => $genres,
    ]) ?>

</div>
