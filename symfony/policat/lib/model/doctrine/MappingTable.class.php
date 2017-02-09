<?php
/*
 * Copyright (c) 2016, webvariants GmbH <?php Co. KG, http://www.webvariants.de
 *
 * This file is released under the terms of the MIT license. You can find the
 * complete text in the attached LICENSE file or online at:
 *
 * http://www.opensource.org/licenses/mit-license.php
 */

/**
 * MappingTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MappingTable extends Doctrine_Table {

  /**
   * Returns an instance of this class.
   *
   * @return MappingTable
   */
  public static function getInstance() {
    return Doctrine_Core::getTable('Mapping');
  }

  /**
   *
   * @return Doctrine_Query
   */
  public function queryAll() {
    return $this->createQuery('m')->orderBy('m.id');
  }

  /**
   * 
   * @param int $id
   * @return Mapping
   */
  public function findOneById($id) {
    return $this->findOneBy('id', $id);
  }

}