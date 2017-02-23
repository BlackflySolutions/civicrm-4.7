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
 * Generated from xml/schema/CRM/Activity/Activity.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:e29dddab1cbaae042d11ea6e022f3dd5)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Activity_DAO_Activity constructor.
 */
class CRM_Activity_DAO_Activity extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_activity';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Unique  Other Activity ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Artificial FK to original transaction (e.g. contribution) IF it is not an Activity. Table can be figured out through activity_type_id, and further through component registry.
   *
   * @var int unsigned
   */
  public $source_record_id;
  /**
   * FK to civicrm_option_value.id, that has to be valid, registered activity type.
   *
   * @var int unsigned
   */
  public $activity_type_id;
  /**
   * The subject/purpose/short description of the activity.
   *
   * @var string
   */
  public $subject;
  /**
   * Date and time this activity is scheduled to occur. Formerly named scheduled_date_time.
   *
   * @var datetime
   */
  public $activity_date_time;
  /**
   * Planned or actual duration of activity expressed in minutes. Conglomerate of former duration_hours and duration_minutes.
   *
   * @var int unsigned
   */
  public $duration;
  /**
   * Location of the activity (optional, open text).
   *
   * @var string
   */
  public $location;
  /**
   * Phone ID of the number called (optional - used if an existing phone number is selected).
   *
   * @var int unsigned
   */
  public $phone_id;
  /**
   * Phone number in case the number does not exist in the civicrm_phone table.
   *
   * @var string
   */
  public $phone_number;
  /**
   * Details about the activity (agenda, notes, etc).
   *
   * @var longtext
   */
  public $details;
  /**
   * ID of the status this activity is currently in. Foreign key to civicrm_option_value.
   *
   * @var int unsigned
   */
  public $status_id;
  /**
   * ID of the priority given to this activity. Foreign key to civicrm_option_value.
   *
   * @var int unsigned
   */
  public $priority_id;
  /**
   * Parent meeting ID (if this is a follow-up item). This is not currently implemented
   *
   * @var int unsigned
   */
  public $parent_id;
  /**
   *
   * @var boolean
   */
  public $is_test;
  /**
   * Activity Medium, Implicit FK to civicrm_option_value where option_group = encounter_medium.
   *
   * @var int unsigned
   */
  public $medium_id;
  /**
   *
   * @var boolean
   */
  public $is_auto;
  /**
   * FK to Relationship ID
   *
   * @var int unsigned
   */
  public $relationship_id;
  /**
   *
   * @var boolean
   */
  public $is_current_revision;
  /**
   * Activity ID of the first activity record in versioning chain.
   *
   * @var int unsigned
   */
  public $original_id;
  /**
   * Currently being used to store result id for survey activity, FK to option value.
   *
   * @var string
   */
  public $result;
  /**
   *
   * @var boolean
   */
  public $is_deleted;
  /**
   * The campaign for which this activity has been triggered.
   *
   * @var int unsigned
   */
  public $campaign_id;
  /**
   * Assign a specific level of engagement to this activity. Used for tracking constituents in ladder of engagement.
   *
   * @var int unsigned
   */
  public $engagement_level;
  /**
   *
   * @var int
   */
  public $weight;
  /**
   * Activity marked as favorite.
   *
   * @var boolean
   */
  public $is_star;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_activity';
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'phone_id', 'civicrm_phone', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'parent_id', 'civicrm_activity', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'relationship_id', 'civicrm_relationship', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'original_id', 'civicrm_activity', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'campaign_id', 'civicrm_campaign', 'id');
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
        'activity_id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Activity ID') ,
          'description' => 'Unique  Other Activity ID',
          'required' => true,
          'import' => true,
          'where' => 'civicrm_activity.id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
        ) ,
        'source_record_id' => array(
          'name' => 'source_record_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Source Record') ,
          'description' => 'Artificial FK to original transaction (e.g. contribution) IF it is not an Activity. Table can be figured out through activity_type_id, and further through component registry.',
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
        ) ,
        'activity_type_id' => array(
          'name' => 'activity_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Activity Type ID') ,
          'description' => 'FK to civicrm_option_value.id, that has to be valid, registered activity type.',
          'required' => true,
          'import' => true,
          'where' => 'civicrm_activity.activity_type_id',
          'headerPattern' => '/(activity.)?type(.id$)/i',
          'dataPattern' => '',
          'export' => true,
          'default' => '1',
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'activity_type',
            'optionEditPath' => 'civicrm/admin/options/activity_type',
          )
        ) ,
        'activity_subject' => array(
          'name' => 'subject',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Subject') ,
          'description' => 'The subject/purpose/short description of the activity.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => true,
          'where' => 'civicrm_activity.subject',
          'headerPattern' => '/(activity.)?subject/i',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'activity_date_time' => array(
          'name' => 'activity_date_time',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Activity Date') ,
          'description' => 'Date and time this activity is scheduled to occur. Formerly named scheduled_date_time.',
          'import' => true,
          'where' => 'civicrm_activity.activity_date_time',
          'headerPattern' => '/(activity.)?date(.time$)?/i',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'Select Date',
            'formatType' => 'activityDateTime',
          ) ,
        ) ,
        'activity_duration' => array(
          'name' => 'duration',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Duration') ,
          'description' => 'Planned or actual duration of activity expressed in minutes. Conglomerate of former duration_hours and duration_minutes.',
          'import' => true,
          'where' => 'civicrm_activity.duration',
          'headerPattern' => '/(activity.)?duration(s)?$/i',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'activity_location' => array(
          'name' => 'location',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Location') ,
          'description' => 'Location of the activity (optional, open text).',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => true,
          'where' => 'civicrm_activity.location',
          'headerPattern' => '/(activity.)?location$/i',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'phone_id' => array(
          'name' => 'phone_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Phone (called) ID') ,
          'description' => 'Phone ID of the number called (optional - used if an existing phone number is selected).',
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'FKClassName' => 'CRM_Core_DAO_Phone',
          'html' => array(
            'type' => 'EntityRef',
          ) ,
        ) ,
        'phone_number' => array(
          'name' => 'phone_number',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Phone (called) Number') ,
          'description' => 'Phone number in case the number does not exist in the civicrm_phone table.',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'activity_details' => array(
          'name' => 'details',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Details') ,
          'description' => 'Details about the activity (agenda, notes, etc).',
          'import' => true,
          'where' => 'civicrm_activity.details',
          'headerPattern' => '/(activity.)?detail(s)?$/i',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'RichTextEditor',
          ) ,
        ) ,
        'activity_status_id' => array(
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Activity Status') ,
          'description' => 'ID of the status this activity is currently in. Foreign key to civicrm_option_value.',
          'import' => true,
          'where' => 'civicrm_activity.status_id',
          'headerPattern' => '/(activity.)?status(.label$)?/i',
          'dataPattern' => '',
          'export' => false,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'activity_status',
            'optionEditPath' => 'civicrm/admin/options/activity_status',
          )
        ) ,
        'priority_id' => array(
          'name' => 'priority_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Priority') ,
          'description' => 'ID of the priority given to this activity. Foreign key to civicrm_option_value.',
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'priority',
            'optionEditPath' => 'civicrm/admin/options/priority',
          )
        ) ,
        'parent_id' => array(
          'name' => 'parent_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Parent Activity Id') ,
          'description' => 'Parent meeting ID (if this is a follow-up item). This is not currently implemented',
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'FKClassName' => 'CRM_Activity_DAO_Activity',
        ) ,
        'activity_is_test' => array(
          'name' => 'is_test',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Test') ,
          'import' => true,
          'where' => 'civicrm_activity.is_test',
          'headerPattern' => '/(is.)?test(.activity)?/i',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'Select',
          ) ,
        ) ,
        'activity_medium_id' => array(
          'name' => 'medium_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Activity Medium') ,
          'description' => 'Activity Medium, Implicit FK to civicrm_option_value where option_group = encounter_medium.',
          'default' => 'NULL',
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'encounter_medium',
            'optionEditPath' => 'civicrm/admin/options/encounter_medium',
          )
        ) ,
        'is_auto' => array(
          'name' => 'is_auto',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Auto') ,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
        ) ,
        'relationship_id' => array(
          'name' => 'relationship_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Relationship Id') ,
          'description' => 'FK to Relationship ID',
          'default' => 'NULL',
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'FKClassName' => 'CRM_Contact_DAO_Relationship',
        ) ,
        'is_current_revision' => array(
          'name' => 'is_current_revision',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is this activity a current revision in versioning chain?') ,
          'import' => true,
          'where' => 'civicrm_activity.is_current_revision',
          'headerPattern' => '/(is.)?(current.)?(revision|version(ing)?)/i',
          'dataPattern' => '',
          'export' => true,
          'default' => '1',
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'original_id' => array(
          'name' => 'original_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Original Activity ID ') ,
          'description' => 'Activity ID of the first activity record in versioning chain.',
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'FKClassName' => 'CRM_Activity_DAO_Activity',
        ) ,
        'activity_result' => array(
          'name' => 'result',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Result') ,
          'description' => 'Currently being used to store result id for survey activity, FK to option value.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'activity_is_deleted' => array(
          'name' => 'is_deleted',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Activity is in the Trash') ,
          'import' => true,
          'where' => 'civicrm_activity.is_deleted',
          'headerPattern' => '/(activity.)?(trash|deleted)/i',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'activity_campaign_id' => array(
          'name' => 'campaign_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Campaign') ,
          'description' => 'The campaign for which this activity has been triggered.',
          'import' => true,
          'where' => 'civicrm_activity.campaign_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'FKClassName' => 'CRM_Campaign_DAO_Campaign',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_campaign',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          )
        ) ,
        'activity_engagement_level' => array(
          'name' => 'engagement_level',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Engagement Index') ,
          'description' => 'Assign a specific level of engagement to this activity. Used for tracking constituents in ladder of engagement.',
          'import' => true,
          'where' => 'civicrm_activity.engagement_level',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'engagement_index',
            'optionEditPath' => 'civicrm/admin/options/engagement_index',
          )
        ) ,
        'weight' => array(
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order') ,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'is_star' => array(
          'name' => 'is_star',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Starred') ,
          'description' => 'Activity marked as favorite.',
          'import' => true,
          'where' => 'civicrm_activity.is_star',
          'headerPattern' => '/(activity.)?(star|favorite)/i',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_activity',
          'entity' => 'Activity',
          'bao' => 'CRM_Activity_BAO_Activity',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'activity', $prefix, array());
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'activity', $prefix, array());
    return $r;
  }
}
