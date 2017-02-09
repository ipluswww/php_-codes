<?php

/**
 * BasePetition
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $campaign_id
 * @property integer $follow_petition_id
 * @property integer $kind
 * @property integer $nametype
 * @property integer $status
 * @property integer $validation_required
 * @property string $name
 * @property integer $addnum
 * @property clob $addnote
 * @property string $read_more_url
 * @property string $landing_url
 * @property string $key_visual
 * @property string $paypal_email
 * @property string $donate_url
 * @property integer $donate_widget_edit
 * @property string $from_name
 * @property string $from_email
 * @property clob $email_targets
 * @property integer $homepage
 * @property string $twitter_tags
 * @property string $language_id
 * @property integer $mailing_list_id
 * @property integer $editable
 * @property integer $target_num
 * @property integer $auto_greeting
 * @property date $start_at
 * @property date $end_at
 * @property integer $with_comments
 * @property integer $with_address
 * @property integer $with_country
 * @property integer $with_extra1
 * @property string $default_country
 * @property integer $show_keyvisual
 * @property integer $pledge_with_comments
 * @property string $pledge_header_visual
 * @property string $pledge_key_visual
 * @property string $pledge_background_color
 * @property string $pledge_color
 * @property string $pledge_head_color
 * @property string $pledge_font
 * @property clob $pledge_info_columns
 * @property timestamp $activity_at
 * @property integer $widget_individualise
 * @property string $style_font_family
 * @property string $style_title_color
 * @property string $style_body_color
 * @property string $style_button_color
 * @property string $style_bg_left_color
 * @property string $style_bg_right_color
 * @property string $style_form_title_color
 * @property integer $country_collection_id
 * @property integer $deleted_pendings
 * @property integer $label_mode
 * @property integer $policy_checkbox
 * @property Campaign $Campaign
 * @property Language $Language
 * @property MailingList $MailingList
 * @property CountryCollection $CountryCollection
 * @property Petition $FollowPetition
 * @property Doctrine_Collection $PetitionRights
 * @property Doctrine_Collection $FollowedByPetitions
 * @property Doctrine_Collection $PetitionText
 * @property Doctrine_Collection $Widget
 * @property Doctrine_Collection $PetitionSigning
 * @property Doctrine_Collection $Tickets
 * @property Doctrine_Collection $PledgeItems
 * @property Doctrine_Collection $PetitionContacts
 * @property Doctrine_Collection $ApiTokens
 * @property Doctrine_Collection $Downloads
 * 
 * @method integer             getId()                      Returns the current record's "id" value
 * @method integer             getCampaignId()              Returns the current record's "campaign_id" value
 * @method integer             getFollowPetitionId()        Returns the current record's "follow_petition_id" value
 * @method integer             getKind()                    Returns the current record's "kind" value
 * @method integer             getNametype()                Returns the current record's "nametype" value
 * @method integer             getStatus()                  Returns the current record's "status" value
 * @method integer             getValidationRequired()      Returns the current record's "validation_required" value
 * @method string              getName()                    Returns the current record's "name" value
 * @method integer             getAddnum()                  Returns the current record's "addnum" value
 * @method clob                getAddnote()                 Returns the current record's "addnote" value
 * @method string              getReadMoreUrl()             Returns the current record's "read_more_url" value
 * @method string              getLandingUrl()              Returns the current record's "landing_url" value
 * @method string              getKeyVisual()               Returns the current record's "key_visual" value
 * @method string              getPaypalEmail()             Returns the current record's "paypal_email" value
 * @method string              getDonateUrl()               Returns the current record's "donate_url" value
 * @method integer             getDonateWidgetEdit()        Returns the current record's "donate_widget_edit" value
 * @method string              getFromName()                Returns the current record's "from_name" value
 * @method string              getFromEmail()               Returns the current record's "from_email" value
 * @method clob                getEmailTargets()            Returns the current record's "email_targets" value
 * @method integer             getHomepage()                Returns the current record's "homepage" value
 * @method string              getTwitterTags()             Returns the current record's "twitter_tags" value
 * @method string              getLanguageId()              Returns the current record's "language_id" value
 * @method integer             getMailingListId()           Returns the current record's "mailing_list_id" value
 * @method integer             getEditable()                Returns the current record's "editable" value
 * @method integer             getTargetNum()               Returns the current record's "target_num" value
 * @method integer             getAutoGreeting()            Returns the current record's "auto_greeting" value
 * @method date                getStartAt()                 Returns the current record's "start_at" value
 * @method date                getEndAt()                   Returns the current record's "end_at" value
 * @method integer             getWithComments()            Returns the current record's "with_comments" value
 * @method integer             getWithAddress()             Returns the current record's "with_address" value
 * @method integer             getWithCountry()             Returns the current record's "with_country" value
 * @method integer             getWithExtra1()              Returns the current record's "with_extra1" value
 * @method string              getDefaultCountry()          Returns the current record's "default_country" value
 * @method integer             getShowKeyvisual()           Returns the current record's "show_keyvisual" value
 * @method integer             getPledgeWithComments()      Returns the current record's "pledge_with_comments" value
 * @method string              getPledgeHeaderVisual()      Returns the current record's "pledge_header_visual" value
 * @method string              getPledgeKeyVisual()         Returns the current record's "pledge_key_visual" value
 * @method string              getPledgeBackgroundColor()   Returns the current record's "pledge_background_color" value
 * @method string              getPledgeColor()             Returns the current record's "pledge_color" value
 * @method string              getPledgeHeadColor()         Returns the current record's "pledge_head_color" value
 * @method string              getPledgeFont()              Returns the current record's "pledge_font" value
 * @method clob                getPledgeInfoColumns()       Returns the current record's "pledge_info_columns" value
 * @method timestamp           getActivityAt()              Returns the current record's "activity_at" value
 * @method integer             getWidgetIndividualise()     Returns the current record's "widget_individualise" value
 * @method string              getStyleFontFamily()         Returns the current record's "style_font_family" value
 * @method string              getStyleTitleColor()         Returns the current record's "style_title_color" value
 * @method string              getStyleBodyColor()          Returns the current record's "style_body_color" value
 * @method string              getStyleButtonColor()        Returns the current record's "style_button_color" value
 * @method string              getStyleBgLeftColor()        Returns the current record's "style_bg_left_color" value
 * @method string              getStyleBgRightColor()       Returns the current record's "style_bg_right_color" value
 * @method string              getStyleFormTitleColor()     Returns the current record's "style_form_title_color" value
 * @method integer             getCountryCollectionId()     Returns the current record's "country_collection_id" value
 * @method integer             getDeletedPendings()         Returns the current record's "deleted_pendings" value
 * @method integer             getLabelMode()               Returns the current record's "label_mode" value
 * @method integer             getPolicyCheckbox()          Returns the current record's "policy_checkbox" value
 * @method Campaign            getCampaign()                Returns the current record's "Campaign" value
 * @method Language            getLanguage()                Returns the current record's "Language" value
 * @method MailingList         getMailingList()             Returns the current record's "MailingList" value
 * @method CountryCollection   getCountryCollection()       Returns the current record's "CountryCollection" value
 * @method Petition            getFollowPetition()          Returns the current record's "FollowPetition" value
 * @method Doctrine_Collection getPetitionRights()          Returns the current record's "PetitionRights" collection
 * @method Doctrine_Collection getFollowedByPetitions()     Returns the current record's "FollowedByPetitions" collection
 * @method Doctrine_Collection getPetitionText()            Returns the current record's "PetitionText" collection
 * @method Doctrine_Collection getWidget()                  Returns the current record's "Widget" collection
 * @method Doctrine_Collection getPetitionSigning()         Returns the current record's "PetitionSigning" collection
 * @method Doctrine_Collection getTickets()                 Returns the current record's "Tickets" collection
 * @method Doctrine_Collection getPledgeItems()             Returns the current record's "PledgeItems" collection
 * @method Doctrine_Collection getPetitionContacts()        Returns the current record's "PetitionContacts" collection
 * @method Doctrine_Collection getApiTokens()               Returns the current record's "ApiTokens" collection
 * @method Doctrine_Collection getDownloads()               Returns the current record's "Downloads" collection
 * @method Petition            setId()                      Sets the current record's "id" value
 * @method Petition            setCampaignId()              Sets the current record's "campaign_id" value
 * @method Petition            setFollowPetitionId()        Sets the current record's "follow_petition_id" value
 * @method Petition            setKind()                    Sets the current record's "kind" value
 * @method Petition            setNametype()                Sets the current record's "nametype" value
 * @method Petition            setStatus()                  Sets the current record's "status" value
 * @method Petition            setValidationRequired()      Sets the current record's "validation_required" value
 * @method Petition            setName()                    Sets the current record's "name" value
 * @method Petition            setAddnum()                  Sets the current record's "addnum" value
 * @method Petition            setAddnote()                 Sets the current record's "addnote" value
 * @method Petition            setReadMoreUrl()             Sets the current record's "read_more_url" value
 * @method Petition            setLandingUrl()              Sets the current record's "landing_url" value
 * @method Petition            setKeyVisual()               Sets the current record's "key_visual" value
 * @method Petition            setPaypalEmail()             Sets the current record's "paypal_email" value
 * @method Petition            setDonateUrl()               Sets the current record's "donate_url" value
 * @method Petition            setDonateWidgetEdit()        Sets the current record's "donate_widget_edit" value
 * @method Petition            setFromName()                Sets the current record's "from_name" value
 * @method Petition            setFromEmail()               Sets the current record's "from_email" value
 * @method Petition            setEmailTargets()            Sets the current record's "email_targets" value
 * @method Petition            setHomepage()                Sets the current record's "homepage" value
 * @method Petition            setTwitterTags()             Sets the current record's "twitter_tags" value
 * @method Petition            setLanguageId()              Sets the current record's "language_id" value
 * @method Petition            setMailingListId()           Sets the current record's "mailing_list_id" value
 * @method Petition            setEditable()                Sets the current record's "editable" value
 * @method Petition            setTargetNum()               Sets the current record's "target_num" value
 * @method Petition            setAutoGreeting()            Sets the current record's "auto_greeting" value
 * @method Petition            setStartAt()                 Sets the current record's "start_at" value
 * @method Petition            setEndAt()                   Sets the current record's "end_at" value
 * @method Petition            setWithComments()            Sets the current record's "with_comments" value
 * @method Petition            setWithAddress()             Sets the current record's "with_address" value
 * @method Petition            setWithCountry()             Sets the current record's "with_country" value
 * @method Petition            setWithExtra1()              Sets the current record's "with_extra1" value
 * @method Petition            setDefaultCountry()          Sets the current record's "default_country" value
 * @method Petition            setShowKeyvisual()           Sets the current record's "show_keyvisual" value
 * @method Petition            setPledgeWithComments()      Sets the current record's "pledge_with_comments" value
 * @method Petition            setPledgeHeaderVisual()      Sets the current record's "pledge_header_visual" value
 * @method Petition            setPledgeKeyVisual()         Sets the current record's "pledge_key_visual" value
 * @method Petition            setPledgeBackgroundColor()   Sets the current record's "pledge_background_color" value
 * @method Petition            setPledgeColor()             Sets the current record's "pledge_color" value
 * @method Petition            setPledgeHeadColor()         Sets the current record's "pledge_head_color" value
 * @method Petition            setPledgeFont()              Sets the current record's "pledge_font" value
 * @method Petition            setPledgeInfoColumns()       Sets the current record's "pledge_info_columns" value
 * @method Petition            setActivityAt()              Sets the current record's "activity_at" value
 * @method Petition            setWidgetIndividualise()     Sets the current record's "widget_individualise" value
 * @method Petition            setStyleFontFamily()         Sets the current record's "style_font_family" value
 * @method Petition            setStyleTitleColor()         Sets the current record's "style_title_color" value
 * @method Petition            setStyleBodyColor()          Sets the current record's "style_body_color" value
 * @method Petition            setStyleButtonColor()        Sets the current record's "style_button_color" value
 * @method Petition            setStyleBgLeftColor()        Sets the current record's "style_bg_left_color" value
 * @method Petition            setStyleBgRightColor()       Sets the current record's "style_bg_right_color" value
 * @method Petition            setStyleFormTitleColor()     Sets the current record's "style_form_title_color" value
 * @method Petition            setCountryCollectionId()     Sets the current record's "country_collection_id" value
 * @method Petition            setDeletedPendings()         Sets the current record's "deleted_pendings" value
 * @method Petition            setLabelMode()               Sets the current record's "label_mode" value
 * @method Petition            setPolicyCheckbox()          Sets the current record's "policy_checkbox" value
 * @method Petition            setCampaign()                Sets the current record's "Campaign" value
 * @method Petition            setLanguage()                Sets the current record's "Language" value
 * @method Petition            setMailingList()             Sets the current record's "MailingList" value
 * @method Petition            setCountryCollection()       Sets the current record's "CountryCollection" value
 * @method Petition            setFollowPetition()          Sets the current record's "FollowPetition" value
 * @method Petition            setPetitionRights()          Sets the current record's "PetitionRights" collection
 * @method Petition            setFollowedByPetitions()     Sets the current record's "FollowedByPetitions" collection
 * @method Petition            setPetitionText()            Sets the current record's "PetitionText" collection
 * @method Petition            setWidget()                  Sets the current record's "Widget" collection
 * @method Petition            setPetitionSigning()         Sets the current record's "PetitionSigning" collection
 * @method Petition            setTickets()                 Sets the current record's "Tickets" collection
 * @method Petition            setPledgeItems()             Sets the current record's "PledgeItems" collection
 * @method Petition            setPetitionContacts()        Sets the current record's "PetitionContacts" collection
 * @method Petition            setApiTokens()               Sets the current record's "ApiTokens" collection
 * @method Petition            setDownloads()               Sets the current record's "Downloads" collection
 * 
 * @package    policat
 * @subpackage model
 * @author     Martin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePetition extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('petition');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('campaign_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('follow_petition_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('kind', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => 1,
             ));
        $this->hasColumn('nametype', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 2,
             'length' => 1,
             ));
        $this->hasColumn('status', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => 4,
             ));
        $this->hasColumn('validation_required', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('addnum', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 4,
             ));
        $this->hasColumn('addnote', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('read_more_url', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('landing_url', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('key_visual', 'string', 60, array(
             'type' => 'string',
             'length' => 60,
             ));
        $this->hasColumn('paypal_email', 'string', 80, array(
             'type' => 'string',
             'length' => 80,
             ));
        $this->hasColumn('donate_url', 'string', 200, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 200,
             ));
        $this->hasColumn('donate_widget_edit', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('from_name', 'string', 80, array(
             'type' => 'string',
             'length' => 80,
             ));
        $this->hasColumn('from_email', 'string', 80, array(
             'type' => 'string',
             'length' => 80,
             ));
        $this->hasColumn('email_targets', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('homepage', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('twitter_tags', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
        $this->hasColumn('language_id', 'string', 5, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 5,
             ));
        $this->hasColumn('mailing_list_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('editable', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => 1,
             ));
        $this->hasColumn('target_num', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 4,
             ));
        $this->hasColumn('auto_greeting', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('start_at', 'date', null, array(
             'type' => 'date',
             'notnull' => false,
             ));
        $this->hasColumn('end_at', 'date', null, array(
             'type' => 'date',
             'notnull' => false,
             ));
        $this->hasColumn('with_comments', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('with_address', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('with_country', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('with_extra1', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('default_country', 'string', 5, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '',
             'length' => 5,
             ));
        $this->hasColumn('show_keyvisual', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('pledge_with_comments', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => 1,
             ));
        $this->hasColumn('pledge_header_visual', 'string', 60, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 60,
             ));
        $this->hasColumn('pledge_key_visual', 'string', 60, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 60,
             ));
        $this->hasColumn('pledge_background_color', 'string', 6, array(
             'type' => 'string',
             'notnull' => false,
             'default' => 'ffffff',
             'length' => 6,
             ));
        $this->hasColumn('pledge_color', 'string', 6, array(
             'type' => 'string',
             'notnull' => false,
             'default' => '333333',
             'length' => 6,
             ));
        $this->hasColumn('pledge_head_color', 'string', 6, array(
             'type' => 'string',
             'notnull' => false,
             'default' => '333333',
             'length' => 6,
             ));
        $this->hasColumn('pledge_font', 'string', 80, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 80,
             ));
        $this->hasColumn('pledge_info_columns', 'clob', null, array(
             'type' => 'clob',
             'notnull' => false,
             ));
        $this->hasColumn('activity_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => false,
             ));
        $this->hasColumn('widget_individualise', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => 1,
             ));
        $this->hasColumn('style_font_family', 'string', 80, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '"Lucida Sans Unicode", Vardana, Arial',
             'length' => 80,
             ));
        $this->hasColumn('style_title_color', 'string', 7, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '#181716',
             'length' => 7,
             ));
        $this->hasColumn('style_body_color', 'string', 7, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '#666666',
             'length' => 7,
             ));
        $this->hasColumn('style_button_color', 'string', 7, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '#76b235',
             'length' => 7,
             ));
        $this->hasColumn('style_bg_left_color', 'string', 7, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '#e5e5e5',
             'length' => 7,
             ));
        $this->hasColumn('style_bg_right_color', 'string', 7, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '#f2f2f2',
             'length' => 7,
             ));
        $this->hasColumn('style_form_title_color', 'string', 7, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '#181716',
             'length' => 7,
             ));
        $this->hasColumn('country_collection_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('deleted_pendings', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 4,
             ));
        $this->hasColumn('label_mode', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => 1,
             ));
        $this->hasColumn('policy_checkbox', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => 1,
             ));


        $this->index('petition_status', array(
             'fields' => 
             array(
              0 => 'status',
             ),
             ));
        $this->index('petition_home_stat', array(
             'fields' => 
             array(
              0 => 'status',
              1 => 'homepage',
             ),
             ));
        $this->index('petition_name', array(
             'fields' => 
             array(
              'name' => 
              array(
              'length' => 100,
              ),
             ),
             ));
        $this->index('petition_activity', array(
             'fields' => 
             array(
              0 => 'activity_at',
              1 => 'status',
             ),
             ));
        $this->index('petition_activity2', array(
             'fields' => 
             array(
              0 => 'campaign_id',
              1 => 'activity_at',
              2 => 'status',
             ),
             ));
        $this->option('symfony', array(
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Campaign', array(
             'local' => 'campaign_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Language', array(
             'local' => 'language_id',
             'foreign' => 'id'));

        $this->hasOne('MailingList', array(
             'local' => 'mailing_list_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('CountryCollection', array(
             'local' => 'country_collection_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('Petition as FollowPetition', array(
             'local' => 'follow_petition_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasMany('PetitionRights', array(
             'local' => 'id',
             'foreign' => 'petition_id'));

        $this->hasMany('Petition as FollowedByPetitions', array(
             'local' => 'id',
             'foreign' => 'follow_petition_id'));

        $this->hasMany('PetitionText', array(
             'local' => 'id',
             'foreign' => 'petition_id'));

        $this->hasMany('Widget', array(
             'local' => 'id',
             'foreign' => 'petition_id'));

        $this->hasMany('PetitionSigning', array(
             'local' => 'id',
             'foreign' => 'petition_id'));

        $this->hasMany('Ticket as Tickets', array(
             'local' => 'id',
             'foreign' => 'petition_id'));

        $this->hasMany('PledgeItem as PledgeItems', array(
             'local' => 'id',
             'foreign' => 'petition_id'));

        $this->hasMany('PetitionContact as PetitionContacts', array(
             'local' => 'id',
             'foreign' => 'petition_id'));

        $this->hasMany('PetitionApiToken as ApiTokens', array(
             'local' => 'id',
             'foreign' => 'petition_id'));

        $this->hasMany('Download as Downloads', array(
             'local' => 'id',
             'foreign' => 'petition_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $cachetaggable0 = new Doctrine_Template_Cachetaggable(array(
             'skipOnChange' => 
             array(
              0 => 'activity_at',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($cachetaggable0);
    }
}