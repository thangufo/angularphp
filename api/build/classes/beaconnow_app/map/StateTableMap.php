<?php



/**
 * This class defines the structure of the 'states' table.
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
class StateTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'beaconnow_app.map.StateTableMap';

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
        $this->setName('states');
        $this->setPhpName('State');
        $this->setClassname('State');
        $this->setPackage('beaconnow_app');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('code', 'Code', 'VARCHAR', true, 128, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 128, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Community', 'Community', RelationMap::ONE_TO_MANY, array('id' => 'state_id', ), null, null, 'Communitys');
        $this->addRelation('Sponsor', 'Sponsor', RelationMap::ONE_TO_MANY, array('id' => 'state_id', ), null, null, 'Sponsors');
        $this->addRelation('School', 'School', RelationMap::ONE_TO_MANY, array('id' => 'state_id', ), null, null, 'Schools');
    } // buildRelations()

} // StateTableMap
