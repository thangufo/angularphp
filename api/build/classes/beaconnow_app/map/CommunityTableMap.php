<?php



/**
 * This class defines the structure of the 'communities' table.
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
class CommunityTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'beaconnow_app.map.CommunityTableMap';

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
        $this->setName('communities');
        $this->setPhpName('Community');
        $this->setClassname('Community');
        $this->setPackage('beaconnow_app');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 128, null);
        $this->addColumn('city', 'City', 'VARCHAR', false, 128, null);
        $this->addForeignKey('state_id', 'StateId', 'INTEGER', 'states', 'id', false, null, null);
        $this->addColumn('isActive', 'Isactive', 'INTEGER', false, null, null);
        $this->addForeignKey('time_zone_id', 'TimeZoneId', 'INTEGER', 'time_zones', 'id', false, null, null);
        $this->addColumn('contactName', 'Contactname', 'VARCHAR', false, 128, null);
        $this->addColumn('contactPhone', 'Contactphone', 'VARCHAR', false, 128, null);
        $this->addColumn('contactEmail', 'Contactemail', 'VARCHAR', false, 128, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('State', 'State', RelationMap::MANY_TO_ONE, array('state_id' => 'id', ), null, null);
        $this->addRelation('TimeZone', 'TimeZone', RelationMap::MANY_TO_ONE, array('time_zone_id' => 'id', ), null, null);
        $this->addRelation('School', 'School', RelationMap::ONE_TO_MANY, array('id' => 'community_id', ), null, null, 'Schools');
    } // buildRelations()

} // CommunityTableMap
