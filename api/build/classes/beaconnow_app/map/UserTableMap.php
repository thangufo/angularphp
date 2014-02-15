<?php



/**
 * This class defines the structure of the 'users' table.
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
class UserTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'beaconnow_app.map.UserTableMap';

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
        $this->setName('users');
        $this->setPhpName('User');
        $this->setClassname('User');
        $this->setPackage('beaconnow_app');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('first_name', 'FirstName', 'VARCHAR', false, 128, null);
        $this->addColumn('last_name', 'LastName', 'VARCHAR', false, 128, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 128, null);
        $this->addColumn('password', 'Password', 'VARCHAR', true, 128, null);
        $this->addColumn('permissions', 'Permissions', 'LONGVARCHAR', false, 65000, null);
        $this->addColumn('last_login', 'LastLogin', 'VARCHAR', false, 128, null);
        $this->addColumn('activation_code', 'ActivationCode', 'VARCHAR', false, 128, null);
        $this->addColumn('activated_at', 'ActivatedAt', 'VARCHAR', false, 128, null);
        $this->addColumn('persist_code', 'PersistCode', 'VARCHAR', false, 128, null);
        $this->addColumn('reset_password_code', 'ResetPasswordCode', 'VARCHAR', false, 128, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('School', 'School', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null, 'Schools');
    } // buildRelations()

} // UserTableMap
