<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Producer */

$this->title = 'Добавить режиссера';

?>
<div class="producer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
