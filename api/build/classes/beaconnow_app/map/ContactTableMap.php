<?php



/**
 * This class defines the structure of the 'contacts' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.beaconnow_app.map
 */
class ContactTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'beaconnow_app.map.ContactTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('contacts');
        $this->setPhpName('Contact');
        $this->setClassname('Contact');
        $this->setPackage('beaconnow_app');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 128, null);
        $this->addColumn('phone', 'Phone', 'VARCHAR', false, 128, null);
        $this->addColumn('contactName', 'Contactname', 'VARCHAR', false, 128, null);
        $this->addColumn('address1', 'Address1', 'VARCHAR', false, 128, null);
        $this->addColumn('address2', 'Address2', 'VARCHAR', false, 128, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Sponsor', 'Sponsor', RelationMap::ONE_TO_MANY, array('id' => 'contact_id', ), null, null, 'Sponsors');
        $this->addRelation('School', 'School', RelationMap::ONE_TO_MANY, array('id' => 'contact_id', ), null, null, 'Schools');
    } // buildRelations()

} // ContactTableMap
