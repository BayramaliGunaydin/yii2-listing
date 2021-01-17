<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210115_162235_marketler
 */
class m210115_162235_marketler extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('marketler', [
            'market_id' => Schema::TYPE_PK,
            'market_isim' => $this->string(20)->notNull()->unique(),
                     
            ]);
          //  $this->alterColumn('marketler', 'market_isim', $this->string(20));
            $this->createIndex('unique_urun_isim', 'marketler',
'market_isim', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
          return $this->droptable('marketler');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_162235_marketler cannot be reverted.\n";

        return false;
    }
    */
}
