<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version91 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('petition_contact', 'comment', 'clob', '', array(
             'notnull' => '',
             ));
    }

    public function down()
    {
        $this->removeColumn('petition_contact', 'comment');
    }
}