<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Film */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="film-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($film, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($film, 'poster')->textInput(['maxlength' => true]) ?>

    <?= $form->field($film, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($film, 'release_at')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
        'options' => ['placeholder' => 'Выберите дату...'],
    ]) ?>

    <?= $form->field($film, 'producer')->dropDownList(ArrayHelper::map($producers, 'id', 'name')) ?>


    <?= $form->field($filmGenreForm, 'genres')->checkboxList(ArrayHelper::map($genres, 'id', 'name'))->label('Жанр') ?>

    <div class="form-group">
        <?= Html::submitButton($film->isNewRecord ? 'Создать' : 'Обновить', ['class' => $film->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
