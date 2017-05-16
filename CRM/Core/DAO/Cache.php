<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Core/Cache.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:f7e211585872f6ee2e8492ea79bbb22a)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Core_DAO_Cache constructor.
 */
class CRM_Core_DAO_Cache extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_cache';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = false;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * group name for cache element, useful in cleaning cache elements
   *
   * @var string
   */
  public $group_name;
  /**
   * Unique path name for cache element
   *
   * @var string
   */
  public $path;
  /**
   * data associated with this path
   *
   * @var longtext
   */
  public $data;
  /**
   * Component that this menu item belongs to
   *
   * @var int unsigned
   */
  public $component_id;
  /**
   * When was the cache item created
   *
   * @var datetime
   */
  public $created_date;
  /**
   * When should the cache item expire
   *
   * @var datetime
   */
  public $expired_date;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_cache';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'component_id', 'civicrm_component', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'required' => true,
          'table_name' => 'civicrm_cache',
          'entity' => 'Cache',
          'bao' => 'CRM_Core_BAO_Cache',
          'localizable' => 0,
        ) ,
        'group_name' => array(
          'name' => 'group_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Name') ,
          'description' => 'group name for cache element, useful in cleaning cache elements',
          'required' => true,
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'table_name' => 'civicrm_cache',
          'entity' => 'Cache',
          'bao' => 'CRM_Core_BAO_Cache',
          'localizable' => 0,
        ) ,
        'path' => array(
          'name' => 'path',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Path') ,
          'description' => 'Unique path name for cache element',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_cache',
          'entity' => 'Cache',
          'bao' => 'CRM_Core_BAO_Cache',
          'localizable' => 0,
        ) ,
        'data' => array(
          'name' => 'data',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Data') ,
          'description' => 'data associated with this path',
          'table_name' => 'civicrm_cache',
          'entity' => 'Cache',
          'bao' => 'CRM_Core_BAO_Cache',
          'localizable' => 0,
        ) ,
        'component_id' => array(
          'name' => 'component_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'Component that this menu item belongs to',
          'table_name' => 'civicrm_cache',
          'entity' => 'Cache',
          'bao' => 'CRM_Core_BAO_Cache',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Component',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_component',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Created Date') ,
          'description' => 'When was the cache item created',
          'table_name' => 'civicrm_cache',
          'entity' => 'Cache',
          'bao' => 'CRM_Core_BAO_Cache',
          'localizable' => 0,
        ) ,
        'expired_date' => array(
          'name' => 'expired_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Expired Date') ,
          'description' => 'When should the cache item expire',
          'table_name' => 'civicrm_cache',
          'entity' => 'Cache',
          'bao' => 'CRM_Core_BAO_Cache',
          'localizable' => 0,
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'cache', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'cache', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of indices
   */
  public static function indices($localize = TRUE) {
    $indices = array(
      'UI_group_path_date' => array(
        'name' => 'UI_group_path_date',
        'field' => array(
          0 => 'group_name',
          1 => 'path',
          2 => 'created_date',
        ) ,
        'localizable' => false,
        'unique' => true,
        'sig' => 'civicrm_cache::1::group_name::path::created_date',
      ) ,
    );
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }
}
