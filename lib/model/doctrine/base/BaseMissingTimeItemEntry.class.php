<?php

/**
 * BaseMissingTimeItemEntry
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property date $day
 * @property integer $user_id
 * @property timestamp $ignored_at
 * @property User $User
 * 
 * @method date                 getDay()        Returns the current record's "day" value
 * @method integer              getUserId()     Returns the current record's "user_id" value
 * @method timestamp            getIgnoredAt()  Returns the current record's "ignored_at" value
 * @method User                 getUser()       Returns the current record's "User" value
 * @method MissingTimeItemEntry setDay()        Sets the current record's "day" value
 * @method MissingTimeItemEntry setUserId()     Sets the current record's "user_id" value
 * @method MissingTimeItemEntry setIgnoredAt()  Sets the current record's "ignored_at" value
 * @method MissingTimeItemEntry setUser()       Sets the current record's "User" value
 * 
 * @package    timeboxx
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMissingTimeItemEntry extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tb_missing_time_entries');
        $this->hasColumn('day', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('user_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('ignored_at', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('User', array(
             'local' => 'user_id',
             'foreign' => 'id'));
    }
}