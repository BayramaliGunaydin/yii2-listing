<?php

namespace bayramaligunaydin\listing\models;

use Yii;

/**
 * This is the model class for table "marketler".
 *
 * @property int $market_id
 * @property string $market_isim
 *
 * @property Fiyatlar[] $fiyatlars
 */
class Marketler extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marketler';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['market_isim'], 'required'],
            [['market_isim'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'market_id' => 'Market ID',
            'market_isim' => 'Market Isim',
        ];
    }

    /**
     * Gets query for [[Fiyatlars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFiyatlars()
    {
        return $this->hasMany(Fiyatlar::className(), ['market_id' => 'market_id']);
    }
}
