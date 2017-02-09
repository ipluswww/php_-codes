<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version126 extends Doctrine_Migration_Base {

  public function up() {
    $this->changeColumn('quota', 'name', 'string', '120', array(
        'notnull' => '1', 'unique' => '0'
    ));
  }
  
  public function postUp() {
        $conn = Doctrine_Manager::getInstance()->getCurrentConnection();
        $conn->execute('ALTER TABLE `quota` DROP INDEX `name`;');
        $conn->clear();
    }

  public function down() {
    $this->changeColumn('quota', 'name', 'string', '120', array(
        'notnull' => '1', 'unique' => '1'
    ));
  }

}
