<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2016                                |
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
 * @copyright CiviCRM LLC (c) 2004-2016
 *
 * Generated from xml/schema/CRM/Contact/Relationship.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Contact_DAO_Relationship extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_relationship';
  /**
   * static instance to hold the field values
   *
   * @var array
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Relationship ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * id of the first contact
   *
   * @var int unsigned
   */
  public $contact_id_a;
  /**
   * id of the second contact
   *
   * @var int unsigned
   */
  public $contact_id_b;
  /**
   * id of the relationship
   *
   * @var int unsigned
   */
  public $relationship_type_id;
  /**
   * date when the relationship started
   *
   * @var date
   */
  public $start_date;
  /**
   * date when the relationship ended
   *
   * @var date
   */
  public $end_date;
  /**
   * is the relationship active ?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * Optional verbose description for the relationship.
   *
   * @var string
   */
  public $description;
  /**
   * is contact a has permission to view / edit contact and
   related data for contact b ?
   *
   * @var boolean
   */
  public $is_permission_a_b;
  /**
   * is contact b has permission to view / edit contact and
   related data for contact a ?
   *
   * @var boolean
   */
  public $is_permission_b_a;
  /**
   * FK to civicrm_case
   *
   * @var int unsigned
   */
  public $case_id;
  /**
   * class constructor
   *
   * @return civicrm_relationship
   */
  function __construct()
  {
    $this->__table = 'civicrm_relationship';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns()
  {
    if (!self::$_links) {
      self::$_links = static ::createReferenceColumns(__CLASS__);
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'contact_id_a', 'civicrm_contact', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'contact_id_b', 'civicrm_contact', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'relationship_type_id', 'civicrm_relationship_type', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'case_id', 'civicrm_case', 'id');
    }
    return self::$_links;
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Relationship ID') ,
          'description' => 'Relationship ID',
          'required' => true,
        ) ,
        'contact_id_a' => array(
          'name' => 'contact_id_a',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact A') ,
          'description' => 'id of the first contact',
          'required' => true,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'contact_id_b' => array(
          'name' => 'contact_id_b',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact B') ,
          'description' => 'id of the second contact',
          'required' => true,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'html' => array(
            'type' => 'EntityRef',
          ) ,
        ) ,
        'relationship_type_id' => array(
          'name' => 'relationship_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Relationship Type') ,
          'description' => 'id of the relationship',
          'required' => true,
          'FKClassName' => 'CRM_Contact_DAO_RelationshipType',
          'html' => array(
            'type' => 'Select',
          ) ,
        ) ,
        'start_date' => array(
          'name' => 'start_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Relationship Start Date') ,
          'description' => 'date when the relationship started',
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'end_date' => array(
          'name' => 'end_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Relationship End Date') ,
          'description' => 'date when the relationship ended',
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Relationship Is Active') ,
          'description' => 'is the relationship active ?',
          'default' => '1',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Relationship Description') ,
          'description' => 'Optional verbose description for the relationship.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'is_permission_a_b' => array(
          'name' => 'is_permission_a_b',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Contact A has Permission Over Contact B') ,
          'description' => 'is contact a has permission to view / edit contact and
      related data for contact b ?
    ',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'is_permission_b_a' => array(
          'name' => 'is_permission_b_a',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Contact B has Permission Over Contact A') ,
          'description' => 'is contact b has permission to view / edit contact and
      related data for contact a ?
    ',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'case_id' => array(
          'name' => 'case_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Relationship Case') ,
          'description' => 'FK to civicrm_case',
          'default' => 'NULL',
          'FKClassName' => 'CRM_Case_DAO_Case',
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'contact_id_a' => 'contact_id_a',
        'contact_id_b' => 'contact_id_b',
        'relationship_type_id' => 'relationship_type_id',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'is_active' => 'is_active',
        'description' => 'description',
        'is_permission_a_b' => 'is_permission_a_b',
        'is_permission_b_a' => 'is_permission_b_a',
        'case_id' => 'case_id',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName()
  {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['relationship'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['relationship'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
