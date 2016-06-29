<?php

namespace app\models;

use Yii;
use yii\base\Model;

class FilmGenreForm extends Model 
{

    public $genres = [];

    public function rules() 
    {
        return [
            [['genres'], 'required'],
            [['genres'], 'integer'],
        ];
    }
}
