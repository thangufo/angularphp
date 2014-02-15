<?php



/**
 * This class defines the structure of the 'sponsors' table.
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
class SponsorTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'beaconnow_app.map.SponsorTableMap';

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
        $this->setName('sponsors');
        $this->setPhpName('Sponsor');
        $this->setClassname('Sponsor');
        $this->setPackage('beaconnow_app');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('contact_id', 'ContactId', 'INTEGER', 'contacts', 'id', true, null, null);
        $this->addForeignKey('state_id', 'StateId', 'INTEGER', 'states', 'id', true, null, null);
        $this->addColumn('sponsorLogo', 'Sponsorlogo', 'VARCHAR', false, 128, null);
        $this->addColumn('sponsorName', 'Sponsorname', 'VARCHAR', false, 128, null);
        $this->addColumn('sponsorMessage', 'Sponsormessage', 'VARCHAR', false, 128, null);
        $this->addColumn('sponsorTextMessage', 'Sponsortextmessage', 'VARCHAR', false, 128, null);
        $this->addColumn('maketingContact', 'Maketingcontact', 'VARCHAR', false, 128, null);
        $this->addColumn('maketingPhone', 'Maketingphone', 'VARCHAR', false, 128, null);
        $this->addColumn('maketingEmail', 'Maketingemail', 'VARCHAR', false, 128, null);
        $this->addColumn('website', 'Website', 'VARCHAR', false, 128, null);
        $this->addColumn('note', 'Note', 'VARCHAR', false, 128, null);
        $this->addColumn('city', 'City', 'VARCHAR', false, 128, null);
        $this->addColumn('zipcode', 'Zipcode', 'VARCHAR', false, 128, null);
        $this->addColumn('created', 'Created', 'VARCHAR', false, 128, null);
        $this->addColumn('modified', 'Modified', 'VARCHAR', false, 128, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Contact', 'Contact', RelationMap::MANY_TO_ONE, array('contact_id' => 'id', ), null, null);
        $this->addRelation('State', 'State', RelationMap::MANY_TO_ONE, array('state_id' => 'id', ), null, null);
        $this->addRelation('School', 'School', RelationMap::ONE_TO_MANY, array('id' => 'sponsor_id', ), null, null, 'Schools');
    } // buildRelations()

} // SponsorTableMap
