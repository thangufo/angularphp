<?php



/**
 * This class defines the structure of the 'time_zones' table.
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
class TimeZoneTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'beaconnow_app.map.TimeZoneTableMap';

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
        $this->setName('time_zones');
        $this->setPhpName('TimeZone');
        $this->setClassname('TimeZone');
        $this->setPackage('beaconnow_app');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('timeZoneValue', 'Timezonevalue', 'INTEGER', true, null, null);
        $this->addColumn('timeZoneName', 'Timezonename', 'VARCHAR', true, 128, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Community', 'Community', RelationMap::ONE_TO_MANY, array('id' => 'time_zone_id', ), null, null, 'Communitys');
        $this->addRelation('School', 'School', RelationMap::ONE_TO_MANY, array('id' => 'time_zone_id', ), null, null, 'Schools');
    } // buildRelations()

} // TimeZoneTableMap
