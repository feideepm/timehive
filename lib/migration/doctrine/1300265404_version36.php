<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version36 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('tb_account', 'default_working_time', 'double', '', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('tb_account', 'default_working_time');
    }
}