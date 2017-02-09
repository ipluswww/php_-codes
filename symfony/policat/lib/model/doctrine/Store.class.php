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
 * Store
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    policat
 * @subpackage model
 * @author     Martin
 */
class Store extends BaseStore {

  public function getField($name, $default = null) {
    return $this->utilGetFieldFromArray('value', $name, $default);
  }

  public function setField($name, $value) {
    $this->utilSetFieldFromArray('value', $name, $value);
  }

}
