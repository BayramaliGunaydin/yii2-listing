<?php

namespace bayramaligunaydin\listing\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use bayramaligunaydin\listing\models\Fiyatlar;

/**
 * FiyatlarSearch represents the model behind the search form of `bayramaligunaydin\listing\models\Fiyatlar`.
 */
class FiyatlarSearch extends Fiyatlar
{
    /**
     * {@inheritdoc}
     */
    
    
    public function rules()
    {
        return [
            [['fiyat_ıd'  ], 'integer'],
           // [['urun_fiyat'], 'number'],
            [['market_id','urun_id'],'string']
            //[['marketler.market_isim','urunler.urun_isim'],'string']          
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Fiyatlar::find();
        
     /*   $query->innerJoin('Marketler','marketler.market_id'=='fiyatlar.market_id')
        ->join('inner join', 
        'urunler',
      //  'urunler.urun_isim',
        'urunler.urun_id = fiyatlar.urun_id'
    );*/
       $query->leftjoin('marketler','marketler.market_id=fiyatlar.market_id');
       $query->leftjoin('urunler','urunler.urun_id=fiyatlar.urun_id');     
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
       

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        
        $query->andFilterWhere([
           'like','marketler.market_isim',$this->market_id,
         ])
         ->andFilterWhere([
           'like','urunler.urun_isim',$this->urun_id,
          ])
          ->andFilterWhere([
           // 'fiyat_ıd' => $this->fiyat_ıd,
        // 'market_id' => $this->market_id,
        // 'urun_id' => $this->urun_id,
         'urun_fiyat' => $this->urun_fiyat,
        // 'market_isim'=> $model->market->market_isim,
        ]);
      
        // $query->join('INNER JOIN', 'Marketler','Marketler.market_isim', 'Marketler.market_id = market.id');
      //  $query->SELECT (['marketler.market_isim' , 'urunler.urun_isim' , 'fiyatlar.urun_fiyat']) -> FROM ('fiyatlar')
       
        
        
       // ->join('INNER JOIN', 'Urunler', 'Urunler.urun_isim','Urunler.urun_id = urun_id')
        //->join('INNER JOIN', 'Marketler', 'Marketler.market_isim','Marketler.market_id = market_id')
        
        //-> INNERJOIN ('Marketler','marketler.market_id'=='fiyatlar.market_id') 
       // -> INNERJOIN ('Urunler','urunler.urun_id'=='fiyatlar.urun_id')  
       // ->WHERE ('urun_fiyat');  
        
        

        
        return $dataProvider;
    }
}
