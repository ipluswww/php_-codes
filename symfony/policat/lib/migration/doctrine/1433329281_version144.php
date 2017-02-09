<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version144 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('petition', 'petition_follow_petition_id_petition_id', array(
             'name' => 'petition_follow_petition_id_petition_id',
             'local' => 'follow_petition_id',
             'foreign' => 'id',
             'foreignTable' => 'petition',
             'onUpdate' => '',
             'onDelete' => 'SET NULL',
             ));
        $this->createForeignKey('widget', 'widget_origin_widget_id_widget_id', array(
             'name' => 'widget_origin_widget_id_widget_id',
             'local' => 'origin_widget_id',
             'foreign' => 'id',
             'foreignTable' => 'widget',
             'onUpdate' => '',
             'onDelete' => 'SET NULL',
             ));
        $this->addIndex('petition', 'petition_follow_petition_id', array(
             'fields' => 
             array(
              0 => 'follow_petition_id',
             ),
             ));
        $this->addIndex('widget', 'widget_origin_widget_id', array(
             'fields' => 
             array(
              0 => 'origin_widget_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('petition', 'petition_follow_petition_id_petition_id');
        $this->dropForeignKey('widget', 'widget_origin_widget_id_widget_id');
        $this->removeIndex('petition', 'petition_follow_petition_id', array(
             'fields' => 
             array(
              0 => 'follow_petition_id',
             ),
             ));
        $this->removeIndex('widget', 'widget_origin_widget_id', array(
             'fields' => 
             array(
              0 => 'origin_widget_id',
             ),
             ));
    }
}