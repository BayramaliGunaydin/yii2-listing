<?php

namespace bayramaligunaydin\listing\models;

use Yii;

/**
 * This is the model class for table "urunler".
 *
 * @property int $urun_id
 * @property string $urun_isim
 *
 * @property Fiyatlar[] $fiyatlars
 */
class Urunler extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'urunler';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['urun_isim'], 'required'],
            [['urun_isim'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'urun_id' => 'Urun ID',
            'urun_isim' => 'Urun Isim',
        ];
    }

    /**
     * Gets query for [[Fiyatlars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFiyatlars()
    {
        return $this->hasMany(Fiyatlar::className(), ['urun_id' => 'urun_id']);
    }
}
