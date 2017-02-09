<?php

/**
 * BaseCountryTax
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $country
 * @property decimal $tax_no_vat
 * @property integer $no_vat_note_id
 * @property decimal $tax_vat
 * @property integer $vat_note_id
 * @property TaxNote $NoVatNote
 * @property TaxNote $VatNote
 * 
 * @method integer    getId()             Returns the current record's "id" value
 * @method string     getCountry()        Returns the current record's "country" value
 * @method decimal    getTaxNoVat()       Returns the current record's "tax_no_vat" value
 * @method integer    getNoVatNoteId()    Returns the current record's "no_vat_note_id" value
 * @method decimal    getTaxVat()         Returns the current record's "tax_vat" value
 * @method integer    getVatNoteId()      Returns the current record's "vat_note_id" value
 * @method TaxNote    getNoVatNote()      Returns the current record's "NoVatNote" value
 * @method TaxNote    getVatNote()        Returns the current record's "VatNote" value
 * @method CountryTax setId()             Sets the current record's "id" value
 * @method CountryTax setCountry()        Sets the current record's "country" value
 * @method CountryTax setTaxNoVat()       Sets the current record's "tax_no_vat" value
 * @method CountryTax setNoVatNoteId()    Sets the current record's "no_vat_note_id" value
 * @method CountryTax setTaxVat()         Sets the current record's "tax_vat" value
 * @method CountryTax setVatNoteId()      Sets the current record's "vat_note_id" value
 * @method CountryTax setNoVatNote()      Sets the current record's "NoVatNote" value
 * @method CountryTax setVatNote()        Sets the current record's "VatNote" value
 * 
 * @package    policat
 * @subpackage model
 * @author     Martin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCountryTax extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('country_tax');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('country', 'string', 2, array(
             'type' => 'string',
             'unique' => true,
             'notnull' => true,
             'length' => 2,
             ));
        $this->hasColumn('tax_no_vat', 'decimal', 5, array(
             'type' => 'decimal',
             'notnull' => true,
             'scale' => 2,
             'length' => 5,
             ));
        $this->hasColumn('no_vat_note_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('tax_vat', 'decimal', 5, array(
             'type' => 'decimal',
             'notnull' => true,
             'scale' => 2,
             'length' => 5,
             ));
        $this->hasColumn('vat_note_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));

        $this->option('options', NULL);
        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('TaxNote as NoVatNote', array(
             'local' => 'no_vat_note_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('TaxNote as VatNote', array(
             'local' => 'vat_note_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));
    }
}