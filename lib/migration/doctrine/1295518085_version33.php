<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version33 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('tb_timeitem_type', 'default_item', 'boolean', '25', array(
             ));
        $this->addColumn('tb_user', 'boss_mode', 'boolean', '25', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('tb_timeitem_type', 'default_item');
        $this->removeColumn('tb_user', 'boss_mode');
    }
}