<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210115_163654_fiyatlar
 */
class m210115_163654_fiyatlar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('fiyatlar', [
            'fiyat_ıd' => Schema::TYPE_PK,
            'market_id' => Schema::TYPE_INTEGER,
            'urun_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'urun_fiyat' => Schema::TYPE_DOUBLE . ' NOT NULL',                    
            ]);
            $this->createIndex('urun_id_market_id',
            'fiyatlar', 
            ['market_id', 'urun_id'], 
            true);
    $this->addForeignKey('marketids', 'fiyatlar', 'market_id', 'marketler', 'market_id');
    $this->addForeignKey('urunids', 'fiyatlar', 'urun_id', 'urunler', 'urun_id');

    }
    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->droptable('fiyatlar');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_163654_fiyatlar cannot be reverted.\n";

        return false;
    }
    */
}
