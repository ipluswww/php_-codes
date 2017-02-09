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
 * CountryCollectionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CountryCollectionTable extends Doctrine_Table {

  /**
   * Returns an instance of this class.
   *
   * @return CountryCollectionTable The table instance
   */
  public static function getInstance() {
    return Doctrine_Core::getTable('CountryCollection');
  }

  public function queryAll() {
    return $this->createQuery('c')->orderBy('c.name ASC');
  }

}
