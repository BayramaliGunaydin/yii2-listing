<?php

use yii\db\Migration;

/**
 * Class m210120_103323_database
 */
class m210120_103323_database extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('marketler',[
            'market_isim'=>"Bim",
          ]);
          $this->insert('marketler',[
            'market_isim'=>"A-101",
          ]);
          $this->insert('marketler',[
            'market_isim'=>"Carrefour",
          ]);
          $this->insert('marketler',[
            'market_isim'=>"Şok",
          ]);
          $this->insert('marketler',[
            'market_isim'=>"Migros",
          ]);



          $this->insert('urunler',[
            'urun_isim'=>"Ekmek",
          ]);
          $this->insert('urunler',[
            'urun_isim'=>"Peynir",
          ]);
          $this->insert('urunler',[
            'urun_isim'=>"Zeytin",
          ]);
          $this->insert('urunler',[
            'urun_isim'=>"Seker",
          ]);




          $this->insert('fiyatlar',[
            'market_id' => "1",
            'urun_id' => "1",
            'urun_fiyat' => "4.75",
          ]);
          $this->insert('fiyatlar',[
                 'market_id' => "2",
                 'urun_id' => "1",
                 'urun_fiyat' => "5.25",
          ]);
          $this->insert('fiyatlar',[
                 'market_id' => "3",
                 'urun_id' => "1",
                 'urun_fiyat' => "4.95",
          ]);
          $this->insert('fiyatlar',[
                 'market_id' => "1",
                 'urun_id' => "2",
                 'urun_fiyat' => "15.75",
          ]);
          $this->insert('fiyatlar',[
                 'market_id' => "2",
                 'urun_id' => "2",
                 'urun_fiyat' => "17.25",
          ]);
          $this->insert('fiyatlar',[
                 'market_id' => "3",
                 'urun_id' => "2",
                 'urun_fiyat' => "20.25",
          ]);
          $this->insert('fiyatlar',[
                 'market_id' => "1",
                 'urun_id' => "3",
                 'urun_fiyat' => "17.75",
          ]);
          $this->insert('fiyatlar',[
                 'market_id' => "2",
                 'urun_id' => "3",
                 'urun_fiyat' => "19.50",
          ]);
          $this->insert('fiyatlar',[
                 'market_id' => "3",
                 'urun_id' => "3",
                 'urun_fiyat' => "20.75",
          ]);
          $this->insert('fiyatlar',[
                 'market_id' => "2",
                 'urun_id' => "4",
                 'urun_fiyat' => "12.75",
          ]);
          $this->insert('fiyatlar',[
                 'market_id' => "4",
                 'urun_id' => "4",
                 'urun_fiyat' => "10.15",
          ]);
          $this->insert('fiyatlar',[
                 'market_id' => "5",
                 'urun_id' => "4",
                 'urun_fiyat' => "11.25",
          ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->droptable('database');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210120_103323_database cannot be reverted.\n";

        return false;
    }
    */
}
