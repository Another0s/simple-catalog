<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "film_genre".
 *
 * @property integer $id
 * @property integer $film
 * @property integer $genre
 *
 * @property Film $film0
 * @property Genre $genre0
 */
class FilmGenre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'film_genre';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['film', 'genre'], 'required'],
            [['film', 'genre'], 'integer'],
            [['film'], 'exist', 'skipOnError' => true, 'targetClass' => Film::className(), 'targetAttribute' => ['film' => 'id']],
            [['genre'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['genre' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'film' => 'Film',
            'genre' => 'Genre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilm0()
    {
        return $this->hasOne(Film::className(), ['id' => 'film']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenre0()
    {
        return $this->hasOne(Genre::className(), ['id' => 'genre']);
    }
}
