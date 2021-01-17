<?php

namespace bayramaligunaydin\listing\models;

use Yii;

/**
 * This is the model class for table "fiyatlar".
 *
 * @property int $fiyat_ıd
 * @property int|null $market_id
 * @property int $urun_id
 * @property float $urun_fiyat
 *
 * @property Marketler $market
 * @property Urunler $urun
 */
class Fiyatlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fiyatlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['market_id', 'urun_id'], 'required'],
            [['urun_id', 'urun_fiyat'], 'required'],
            [['urun_fiyat'], 'number'],
            [['market_id'], 'exist', 'skipOnError' => true, 'targetClass' => Marketler::className(), 'targetAttribute' => ['market_id' => 'market_id']],
            [['urun_id'], 'exist', 'skipOnError' => true, 'targetClass' => Urunler::className(), 'targetAttribute' => ['urun_id' => 'urun_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fiyat_ıd' => 'Fiyat ID',
            'market_id' => 'Market ID',
            'urun_id' => 'Urun ID',
            'urun_fiyat' => 'Urun Fiyat',
        ];
    }

    /**
     * Gets query for [[Market]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarket()
    {
        return $this->hasOne(Marketler::className(), ['market_id' => 'market_id']);
    }

    /**
     * Gets query for [[Urun]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUrun()
    {
        return $this->hasOne(Urunler::className(), ['urun_id' => 'urun_id']);
    }
}
