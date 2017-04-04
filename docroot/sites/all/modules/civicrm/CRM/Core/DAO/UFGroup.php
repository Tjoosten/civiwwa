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
 * Generated from xml/schema/CRM/Core/UFGroup.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:16bf8f20b843d4d8824e37d8f922108b)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Core_DAO_UFGroup constructor.
 */
class CRM_Core_DAO_UFGroup extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_uf_group';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Unique table ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Is this form currently active? If false, hide all related fields for all sharing contexts.
   *
   * @var boolean
   */
  public $is_active;
  /**
   * This column will store a comma separated list of the type(s) of profile fields.
   *
   * @var string
   */
  public $group_type;
  /**
   * Form title.
   *
   * @var string
   */
  public $title;
  /**
   * Optional verbose description of the profile.
   *
   * @var text
   */
  public $description;
  /**
   * Description and/or help text to display before fields in form.
   *
   * @var text
   */
  public $help_pre;
  /**
   * Description and/or help text to display after fields in form.
   *
   * @var text
   */
  public $help_post;
  /**
   * Group id, foreign key from civicrm_group
   *
   * @var int unsigned
   */
  public $limit_listings_group_id;
  /**
   * Redirect to URL.
   *
   * @var string
   */
  public $post_URL;
  /**
   * foreign key to civicrm_group_id
   *
   * @var int unsigned
   */
  public $add_to_group_id;
  /**
   * Should a CAPTCHA widget be included this Profile form.
   *
   * @var boolean
   */
  public $add_captcha;
  /**
   * Do we want to map results from this profile.
   *
   * @var boolean
   */
  public $is_map;
  /**
   * Should edit link display in profile selector
   *
   * @var boolean
   */
  public $is_edit_link;
  /**
   * Should we display a link to the website profile in profile selector
   *
   * @var boolean
   */
  public $is_uf_link;
  /**
   * Should we update the contact record if we find a duplicate
   *
   * @var boolean
   */
  public $is_update_dupe;
  /**
   * Redirect to URL when Cancle button clik .
   *
   * @var string
   */
  public $cancel_URL;
  /**
   * Should we create a cms user for this profile
   *
   * @var boolean
   */
  public $is_cms_user;
  /**
   *
   * @var text
   */
  public $notify;
  /**
   * Is this group reserved for use by some other CiviCRM functionality?
   *
   * @var boolean
   */
  public $is_reserved;
  /**
   * Name of the UF group for directly addressing it in the codebase
   *
   * @var string
   */
  public $name;
  /**
   * FK to civicrm_contact, who created this UF group
   *
   * @var int unsigned
   */
  public $created_id;
  /**
   * Date and time this UF group was created.
   *
   * @var datetime
   */
  public $created_date;
  /**
   * Should we include proximity search feature in this profile search form?
   *
   * @var boolean
   */
  public $is_proximity_search;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_uf_group';
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'limit_listings_group_id', 'civicrm_group', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'add_to_group_id', 'civicrm_group', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'created_id', 'civicrm_contact', 'id');
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
          'title' => ts('Profile ID') ,
          'description' => 'Unique table ID',
          'required' => true,
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Profile Is Active') ,
          'description' => 'Is this form currently active? If false, hide all related fields for all sharing contexts.',
          'default' => '1',
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'group_type' => array(
          'name' => 'group_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Profile Group Type') ,
          'description' => 'This column will store a comma separated list of the type(s) of profile fields.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => true,
          'where' => 'civicrm_uf_group.group_type',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Title') ,
          'description' => 'Form title.',
          'required' => true,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Profile Description') ,
          'description' => 'Optional verbose description of the profile.',
          'rows' => 2,
          'cols' => 60,
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'help_pre' => array(
          'name' => 'help_pre',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Help Pre') ,
          'description' => 'Description and/or help text to display before fields in form.',
          'rows' => 4,
          'cols' => 80,
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'help_post' => array(
          'name' => 'help_post',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Profile Post Text') ,
          'description' => 'Description and/or help text to display after fields in form.',
          'rows' => 4,
          'cols' => 80,
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'limit_listings_group_id' => array(
          'name' => 'limit_listings_group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Profile Search Limit Group') ,
          'description' => 'Group id, foreign key from civicrm_group',
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
          'FKClassName' => 'CRM_Contact_DAO_Group',
        ) ,
        'post_URL' => array(
          'name' => 'post_URL',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Post Url') ,
          'description' => 'Redirect to URL.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'add_to_group_id' => array(
          'name' => 'add_to_group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Add Contact To Group') ,
          'description' => 'foreign key to civicrm_group_id',
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
          'FKClassName' => 'CRM_Contact_DAO_Group',
        ) ,
        'add_captcha' => array(
          'name' => 'add_captcha',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Show Captcha On Profile') ,
          'description' => 'Should a CAPTCHA widget be included this Profile form.',
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'is_map' => array(
          'name' => 'is_map',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Map Profile') ,
          'description' => 'Do we want to map results from this profile.',
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'is_edit_link' => array(
          'name' => 'is_edit_link',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Show Edit Link?') ,
          'description' => 'Should edit link display in profile selector',
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'is_uf_link' => array(
          'name' => 'is_uf_link',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Show Link to CMS User') ,
          'description' => 'Should we display a link to the website profile in profile selector',
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'is_update_dupe' => array(
          'name' => 'is_update_dupe',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Update on Duplicate') ,
          'description' => 'Should we update the contact record if we find a duplicate',
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'cancel_URL' => array(
          'name' => 'cancel_URL',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Profile Cancel URL') ,
          'description' => 'Redirect to URL when Cancle button clik .',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'is_cms_user' => array(
          'name' => 'is_cms_user',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Create CMS User?') ,
          'description' => 'Should we create a cms user for this profile ',
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'notify' => array(
          'name' => 'notify',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Notify on Profile Submit') ,
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'is_reserved' => array(
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Profile Is Reserved') ,
          'description' => 'Is this group reserved for use by some other CiviCRM functionality?',
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Profile Name') ,
          'description' => 'Name of the UF group for directly addressing it in the codebase',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'created_id' => array(
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Profile Created By') ,
          'description' => 'FK to civicrm_contact, who created this UF group',
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('UF Group Created Date') ,
          'description' => 'Date and time this UF group was created.',
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
        ) ,
        'is_proximity_search' => array(
          'name' => 'is_proximity_search',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Include Proximity Search?') ,
          'description' => 'Should we include proximity search feature in this profile search form?',
          'table_name' => 'civicrm_uf_group',
          'entity' => 'UFGroup',
          'bao' => 'CRM_Core_BAO_UFGroup',
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
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'uf_group', $prefix, array());
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'uf_group', $prefix, array());
    return $r;
  }
}
