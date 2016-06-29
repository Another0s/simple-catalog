<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "film".
 *
 * @property integer $id
 * @property string $name
 * @property string $poster
 * @property string $description
 * @property string $release_at
 * @property integer $producer
 *
 * @property Producer $producer
 * @property FilmGenre[] $filmGenres
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'film';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'poster', 'description', 'producer'], 'required'],
            [['description'], 'string'],
            [['release_at'], 'safe'],
            [['producer'], 'integer'],
            [['name', 'poster'], 'string', 'max' => 255],
            [['producer'], 'exist', 'skipOnError' => true, 'targetClass' => Producer::className(), 'targetAttribute' => ['producer' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'poster' => 'Постер',
            'description' => 'Описание',
            'release_at' => 'Дата выхода',
            'producer' => 'Режисcер',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducer0()
    {
        return $this->hasOne(Producer::className(), ['id' => 'producer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmGenres()
    {
        return $this->hasMany(FilmGenre::className(), ['film' => 'id']);
    }
}
