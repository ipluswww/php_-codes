<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version143 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('petition', 'follow_petition_id', 'integer', '4', array(
             'notnull' => '',
             ));
        $this->addColumn('widget', 'origin_widget_id', 'integer', '4', array(
             'notnull' => '',
             ));
    }

    public function down()
    {
        $this->removeColumn('petition', 'follow_petition_id');
        $this->removeColumn('widget', 'origin_widget_id');
    }
}