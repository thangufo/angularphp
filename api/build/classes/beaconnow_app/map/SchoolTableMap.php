<?php



/**
 * This class defines the structure of the 'schools' table.
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
class SchoolTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'beaconnow_app.map.SchoolTableMap';

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
        $this->setName('schools');
        $this->setPhpName('School');
        $this->setClassname('School');
        $this->setPackage('beaconnow_app');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('user_id', 'UserId', 'INTEGER', 'users', 'id', true, null, null);
        $this->addForeignKey('sponsor_id', 'SponsorId', 'INTEGER', 'sponsors', 'id', true, null, null);
        $this->addForeignKey('state_id', 'StateId', 'INTEGER', 'states', 'id', true, null, null);
        $this->addForeignKey('time_zone_id', 'TimeZoneId', 'INTEGER', 'time_zones', 'id', true, null, null);
        $this->addForeignKey('contact_id', 'ContactId', 'INTEGER', 'contacts', 'id', true, null, null);
        $this->addForeignKey('community_id', 'CommunityId', 'INTEGER', 'communities', 'id', true, null, null);
        $this->addColumn('serviceNumber', 'Servicenumber', 'VARCHAR', false, 128, null);
        $this->addColumn('schoolName', 'Schoolname', 'VARCHAR', false, 128, null);
        $this->addColumn('schoolLogo', 'Schoollogo', 'VARCHAR', false, 128, null);
        $this->addColumn('note', 'Note', 'VARCHAR', false, 128, null);
        $this->addColumn('city', 'City', 'VARCHAR', false, 128, null);
        $this->addColumn('zipcode', 'Zipcode', 'VARCHAR', false, 128, null);
        $this->addColumn('website', 'Website', 'VARCHAR', false, 128, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), null, null);
        $this->addRelation('Sponsor', 'Sponsor', RelationMap::MANY_TO_ONE, array('sponsor_id' => 'id', ), null, null);
        $this->addRelation('State', 'State', RelationMap::MANY_TO_ONE, array('state_id' => 'id', ), null, null);
        $this->addRelation('TimeZone', 'TimeZone', RelationMap::MANY_TO_ONE, array('time_zone_id' => 'id', ), null, null);
        $this->addRelation('Contact', 'Contact', RelationMap::MANY_TO_ONE, array('contact_id' => 'id', ), null, null);
        $this->addRelation('Community', 'Community', RelationMap::MANY_TO_ONE, array('community_id' => 'id', ), null, null);
    } // buildRelations()

} // SchoolTableMap
