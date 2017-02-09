<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version125 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('orders', 'orders_user_id_sf_guard_user_id', array(
             'name' => 'orders_user_id_sf_guard_user_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => '',
             'onDelete' => 'SET NULL',
             ));
        $this->createForeignKey('quota', 'quota_order_id_orders_id', array(
             'name' => 'quota_order_id_orders_id',
             'local' => 'order_id',
             'foreign' => 'id',
             'foreignTable' => 'orders',
             'onUpdate' => '',
             'onDelete' => 'SET NULL',
             ));
        $this->addIndex('orders', 'orders_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->addIndex('quota', 'quota_order_id', array(
             'fields' => 
             array(
              0 => 'order_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('orders', 'orders_user_id_sf_guard_user_id');
        $this->dropForeignKey('quota', 'quota_order_id_orders_id');
        $this->removeIndex('orders', 'orders_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->removeIndex('quota', 'quota_order_id', array(
             'fields' => 
             array(
              0 => 'order_id',
             ),
             ));
    }
}