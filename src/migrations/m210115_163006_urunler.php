<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210115_163006_urunler
 */
class m210115_163006_urunler extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('urunler', [
            'urun_id' => Schema::TYPE_PK,
            'urun_isim' => $this->string(20)->notNull()->unique(),                       
            ]);
            $this->createIndex('unique_urun_isim', 'urunler',
'urun_isim', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->droptable('urunler');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_163006_urunler cannot be reverted.\n";

        return false;
    }
    */
}
