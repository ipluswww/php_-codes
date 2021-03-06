<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version87 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('contact', 'contact_language_id_language_id', array(
             'name' => 'contact_language_id_language_id',
             'local' => 'language_id',
             'foreign' => 'id',
             'foreignTable' => 'language',
             'onUpdate' => '',
             'onDelete' => 'SET NULL',
             ));
        $this->addIndex('contact', 'contact_language_id', array(
             'fields' => 
             array(
              0 => 'language_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('contact', 'contact_language_id_language_id');
        $this->removeIndex('contact', 'contact_language_id', array(
             'fields' => 
             array(
              0 => 'language_id',
             ),
             ));
    }
}