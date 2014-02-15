<?php


/**
 * Base static class for performing query and update operations on the 'schools' table.
 *
 *
 *
 * @package propel.generator.beaconnow_app.om
 */
abstract class BaseSchoolPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'beaconnow_app';

    /** the table name for this class */
    const TABLE_NAME = 'schools';

    /** the related Propel class for this table */
    const OM_CLASS = 'School';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SchoolTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the id field */
    const ID = 'schools.id';

    /** the column name for the user_id field */
    const USER_ID = 'schools.user_id';

    /** the column name for the sponsor_id field */
    const SPONSOR_ID = 'schools.sponsor_id';

    /** the column name for the state_id field */
    const STATE_ID = 'schools.state_id';

    /** the column name for the time_zone_id field */
    const TIME_ZONE_ID = 'schools.time_zone_id';

    /** the column name for the contact_id field */
    const CONTACT_ID = 'schools.contact_id';

    /** the column name for the community_id field */
    const COMMUNITY_ID = 'schools.community_id';

    /** the column name for the serviceNumber field */
    const SERVICENUMBER = 'schools.serviceNumber';

    /** the column name for the schoolName field */
    const SCHOOLNAME = 'schools.schoolName';

    /** the column name for the schoolLogo field */
    const SCHOOLLOGO = 'schools.schoolLogo';

    /** the column name for the note field */
    const NOTE = 'schools.note';

    /** the column name for the city field */
    const CITY = 'schools.city';

    /** the column name for the zipcode field */
    const ZIPCODE = 'schools.zipcode';

    /** the column name for the website field */
    const WEBSITE = 'schools.website';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of School objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array School[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SchoolPeer::$fieldNames[SchoolPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'UserId', 'SponsorId', 'StateId', 'TimeZoneId', 'ContactId', 'CommunityId', 'Servicenumber', 'Schoolname', 'Schoollogo', 'Note', 'City', 'Zipcode', 'Website', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'userId', 'sponsorId', 'stateId', 'timeZoneId', 'contactId', 'communityId', 'servicenumber', 'schoolname', 'schoollogo', 'note', 'city', 'zipcode', 'website', ),
        BasePeer::TYPE_COLNAME => array (SchoolPeer::ID, SchoolPeer::USER_ID, SchoolPeer::SPONSOR_ID, SchoolPeer::STATE_ID, SchoolPeer::TIME_ZONE_ID, SchoolPeer::CONTACT_ID, SchoolPeer::COMMUNITY_ID, SchoolPeer::SERVICENUMBER, SchoolPeer::SCHOOLNAME, SchoolPeer::SCHOOLLOGO, SchoolPeer::NOTE, SchoolPeer::CITY, SchoolPeer::ZIPCODE, SchoolPeer::WEBSITE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'USER_ID', 'SPONSOR_ID', 'STATE_ID', 'TIME_ZONE_ID', 'CONTACT_ID', 'COMMUNITY_ID', 'SERVICENUMBER', 'SCHOOLNAME', 'SCHOOLLOGO', 'NOTE', 'CITY', 'ZIPCODE', 'WEBSITE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'user_id', 'sponsor_id', 'state_id', 'time_zone_id', 'contact_id', 'community_id', 'serviceNumber', 'schoolName', 'schoolLogo', 'note', 'city', 'zipcode', 'website', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SchoolPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'UserId' => 1, 'SponsorId' => 2, 'StateId' => 3, 'TimeZoneId' => 4, 'ContactId' => 5, 'CommunityId' => 6, 'Servicenumber' => 7, 'Schoolname' => 8, 'Schoollogo' => 9, 'Note' => 10, 'City' => 11, 'Zipcode' => 12, 'Website' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'userId' => 1, 'sponsorId' => 2, 'stateId' => 3, 'timeZoneId' => 4, 'contactId' => 5, 'communityId' => 6, 'servicenumber' => 7, 'schoolname' => 8, 'schoollogo' => 9, 'note' => 10, 'city' => 11, 'zipcode' => 12, 'website' => 13, ),
        BasePeer::TYPE_COLNAME => array (SchoolPeer::ID => 0, SchoolPeer::USER_ID => 1, SchoolPeer::SPONSOR_ID => 2, SchoolPeer::STATE_ID => 3, SchoolPeer::TIME_ZONE_ID => 4, SchoolPeer::CONTACT_ID => 5, SchoolPeer::COMMUNITY_ID => 6, SchoolPeer::SERVICENUMBER => 7, SchoolPeer::SCHOOLNAME => 8, SchoolPeer::SCHOOLLOGO => 9, SchoolPeer::NOTE => 10, SchoolPeer::CITY => 11, SchoolPeer::ZIPCODE => 12, SchoolPeer::WEBSITE => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'USER_ID' => 1, 'SPONSOR_ID' => 2, 'STATE_ID' => 3, 'TIME_ZONE_ID' => 4, 'CONTACT_ID' => 5, 'COMMUNITY_ID' => 6, 'SERVICENUMBER' => 7, 'SCHOOLNAME' => 8, 'SCHOOLLOGO' => 9, 'NOTE' => 10, 'CITY' => 11, 'ZIPCODE' => 12, 'WEBSITE' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user_id' => 1, 'sponsor_id' => 2, 'state_id' => 3, 'time_zone_id' => 4, 'contact_id' => 5, 'community_id' => 6, 'serviceNumber' => 7, 'schoolName' => 8, 'schoolLogo' => 9, 'note' => 10, 'city' => 11, 'zipcode' => 12, 'website' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = SchoolPeer::getFieldNames($toType);
        $key = isset(SchoolPeer::$fieldKeys[$fromType][$name]) ? SchoolPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SchoolPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, SchoolPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SchoolPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. SchoolPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SchoolPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(SchoolPeer::ID);
            $criteria->addSelectColumn(SchoolPeer::USER_ID);
            $criteria->addSelectColumn(SchoolPeer::SPONSOR_ID);
            $criteria->addSelectColumn(SchoolPeer::STATE_ID);
            $criteria->addSelectColumn(SchoolPeer::TIME_ZONE_ID);
            $criteria->addSelectColumn(SchoolPeer::CONTACT_ID);
            $criteria->addSelectColumn(SchoolPeer::COMMUNITY_ID);
            $criteria->addSelectColumn(SchoolPeer::SERVICENUMBER);
            $criteria->addSelectColumn(SchoolPeer::SCHOOLNAME);
            $criteria->addSelectColumn(SchoolPeer::SCHOOLLOGO);
            $criteria->addSelectColumn(SchoolPeer::NOTE);
            $criteria->addSelectColumn(SchoolPeer::CITY);
            $criteria->addSelectColumn(SchoolPeer::ZIPCODE);
            $criteria->addSelectColumn(SchoolPeer::WEBSITE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.sponsor_id');
            $criteria->addSelectColumn($alias . '.state_id');
            $criteria->addSelectColumn($alias . '.time_zone_id');
            $criteria->addSelectColumn($alias . '.contact_id');
            $criteria->addSelectColumn($alias . '.community_id');
            $criteria->addSelectColumn($alias . '.serviceNumber');
            $criteria->addSelectColumn($alias . '.schoolName');
            $criteria->addSelectColumn($alias . '.schoolLogo');
            $criteria->addSelectColumn($alias . '.note');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.zipcode');
            $criteria->addSelectColumn($alias . '.website');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SchoolPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SchoolPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return School
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SchoolPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return SchoolPeer::populateObjects(SchoolPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SchoolPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param School $obj A School object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            SchoolPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A School object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof School) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or School object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SchoolPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return School Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SchoolPeer::$instances[$key])) {
                return SchoolPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (SchoolPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SchoolPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to schools
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = SchoolPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SchoolPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SchoolPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (School object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SchoolPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SchoolPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SchoolPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SchoolPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SchoolPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related User table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SchoolPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SchoolPeer::USER_ID, UserPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Sponsor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSponsor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SchoolPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SchoolPeer::SPONSOR_ID, SponsorPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related State table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinState(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SchoolPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SchoolPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TimeZone table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTimeZone(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SchoolPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SchoolPeer::TIME_ZONE_ID, TimeZonePeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Contact table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinContact(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SchoolPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SchoolPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Community table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommunity(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SchoolPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SchoolPeer::COMMUNITY_ID, CommunityPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of School objects pre-filled with their User objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of School objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SchoolPeer::DATABASE_NAME);
        }

        SchoolPeer::addSelectColumns($criteria);
        $startcol = SchoolPeer::NUM_HYDRATE_COLUMNS;
        UserPeer::addSelectColumns($criteria);

        $criteria->addJoin(SchoolPeer::USER_ID, UserPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SchoolPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SchoolPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SchoolPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = UserPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (School) to $obj2 (User)
                $obj2->addSchool($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of School objects pre-filled with their Sponsor objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of School objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSponsor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SchoolPeer::DATABASE_NAME);
        }

        SchoolPeer::addSelectColumns($criteria);
        $startcol = SchoolPeer::NUM_HYDRATE_COLUMNS;
        SponsorPeer::addSelectColumns($criteria);

        $criteria->addJoin(SchoolPeer::SPONSOR_ID, SponsorPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SchoolPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SchoolPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SchoolPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = SponsorPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = SponsorPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SponsorPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    SponsorPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (School) to $obj2 (Sponsor)
                $obj2->addSchool($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of School objects pre-filled with their State objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of School objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinState(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SchoolPeer::DATABASE_NAME);
        }

        SchoolPeer::addSelectColumns($criteria);
        $startcol = SchoolPeer::NUM_HYDRATE_COLUMNS;
        StatePeer::addSelectColumns($criteria);

        $criteria->addJoin(SchoolPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SchoolPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SchoolPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SchoolPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = StatePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = StatePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = StatePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    StatePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (School) to $obj2 (State)
                $obj2->addSchool($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of School objects pre-filled with their TimeZone objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of School objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTimeZone(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SchoolPeer::DATABASE_NAME);
        }

        SchoolPeer::addSelectColumns($criteria);
        $startcol = SchoolPeer::NUM_HYDRATE_COLUMNS;
        TimeZonePeer::addSelectColumns($criteria);

        $criteria->addJoin(SchoolPeer::TIME_ZONE_ID, TimeZonePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SchoolPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SchoolPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SchoolPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TimeZonePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TimeZonePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TimeZonePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TimeZonePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (School) to $obj2 (TimeZone)
                $obj2->addSchool($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of School objects pre-filled with their Contact objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of School objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinContact(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SchoolPeer::DATABASE_NAME);
        }

        SchoolPeer::addSelectColumns($criteria);
        $startcol = SchoolPeer::NUM_HYDRATE_COLUMNS;
        ContactPeer::addSelectColumns($criteria);

        $criteria->addJoin(SchoolPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SchoolPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SchoolPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SchoolPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ContactPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ContactPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ContactPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ContactPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (School) to $obj2 (Contact)
                $obj2->addSchool($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of School objects pre-filled with their Community objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of School objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommunity(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SchoolPeer::DATABASE_NAME);
        }

        SchoolPeer::addSelectColumns($criteria);
        $startcol = SchoolPeer::NUM_HYDRATE_COLUMNS;
        CommunityPeer::addSelectColumns($criteria);

        $criteria->addJoin(SchoolPeer::COMMUNITY_ID, CommunityPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SchoolPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SchoolPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SchoolPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommunityPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommunityPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommunityPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommunityPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (School) to $obj2 (Community)
                $obj2->addSchool($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SchoolPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SchoolPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::SPONSOR_ID, SponsorPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::TIME_ZONE_ID, TimeZonePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::COMMUNITY_ID, CommunityPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of School objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of School objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SchoolPeer::DATABASE_NAME);
        }

        SchoolPeer::addSelectColumns($criteria);
        $startcol2 = SchoolPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        SponsorPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + SponsorPeer::NUM_HYDRATE_COLUMNS;

        StatePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + StatePeer::NUM_HYDRATE_COLUMNS;

        TimeZonePeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + TimeZonePeer::NUM_HYDRATE_COLUMNS;

        ContactPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + ContactPeer::NUM_HYDRATE_COLUMNS;

        CommunityPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + CommunityPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SchoolPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::SPONSOR_ID, SponsorPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::TIME_ZONE_ID, TimeZonePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::COMMUNITY_ID, CommunityPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SchoolPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SchoolPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SchoolPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined User rows

            $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = UserPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (School) to the collection in $obj2 (User)
                $obj2->addSchool($obj1);
            } // if joined row not null

            // Add objects for joined Sponsor rows

            $key3 = SponsorPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = SponsorPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = SponsorPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    SponsorPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (School) to the collection in $obj3 (Sponsor)
                $obj3->addSchool($obj1);
            } // if joined row not null

            // Add objects for joined State rows

            $key4 = StatePeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = StatePeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = StatePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    StatePeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (School) to the collection in $obj4 (State)
                $obj4->addSchool($obj1);
            } // if joined row not null

            // Add objects for joined TimeZone rows

            $key5 = TimeZonePeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = TimeZonePeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = TimeZonePeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    TimeZonePeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (School) to the collection in $obj5 (TimeZone)
                $obj5->addSchool($obj1);
            } // if joined row not null

            // Add objects for joined Contact rows

            $key6 = ContactPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = ContactPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = ContactPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    ContactPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (School) to the collection in $obj6 (Contact)
                $obj6->addSchool($obj1);
            } // if joined row not null

            // Add objects for joined Community rows

            $key7 = CommunityPeer::getPrimaryKeyHashFromRow($row, $startcol7);
            if ($key7 !== null) {
                $obj7 = CommunityPeer::getInstanceFromPool($key7);
                if (!$obj7) {

                    $cls = CommunityPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    CommunityPeer::addInstanceToPool($obj7, $key7);
                } // if obj7 loaded

                // Add the $obj1 (School) to the collection in $obj7 (Community)
                $obj7->addSchool($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related User table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SchoolPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SchoolPeer::SPONSOR_ID, SponsorPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::TIME_ZONE_ID, TimeZonePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::COMMUNITY_ID, CommunityPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Sponsor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSponsor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SchoolPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SchoolPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::TIME_ZONE_ID, TimeZonePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::COMMUNITY_ID, CommunityPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related State table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptState(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SchoolPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SchoolPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::SPONSOR_ID, SponsorPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::TIME_ZONE_ID, TimeZonePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::COMMUNITY_ID, CommunityPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TimeZone table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptTimeZone(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SchoolPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SchoolPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::SPONSOR_ID, SponsorPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::COMMUNITY_ID, CommunityPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Contact table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptContact(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SchoolPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SchoolPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::SPONSOR_ID, SponsorPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::TIME_ZONE_ID, TimeZonePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::COMMUNITY_ID, CommunityPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Community table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommunity(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SchoolPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SchoolPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::SPONSOR_ID, SponsorPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::TIME_ZONE_ID, TimeZonePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of School objects pre-filled with all related objects except User.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of School objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SchoolPeer::DATABASE_NAME);
        }

        SchoolPeer::addSelectColumns($criteria);
        $startcol2 = SchoolPeer::NUM_HYDRATE_COLUMNS;

        SponsorPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + SponsorPeer::NUM_HYDRATE_COLUMNS;

        StatePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + StatePeer::NUM_HYDRATE_COLUMNS;

        TimeZonePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + TimeZonePeer::NUM_HYDRATE_COLUMNS;

        ContactPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ContactPeer::NUM_HYDRATE_COLUMNS;

        CommunityPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + CommunityPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SchoolPeer::SPONSOR_ID, SponsorPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::TIME_ZONE_ID, TimeZonePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::COMMUNITY_ID, CommunityPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SchoolPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SchoolPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SchoolPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Sponsor rows

                $key2 = SponsorPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = SponsorPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = SponsorPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    SponsorPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (School) to the collection in $obj2 (Sponsor)
                $obj2->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined State rows

                $key3 = StatePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = StatePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = StatePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    StatePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (School) to the collection in $obj3 (State)
                $obj3->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined TimeZone rows

                $key4 = TimeZonePeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = TimeZonePeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = TimeZonePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    TimeZonePeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (School) to the collection in $obj4 (TimeZone)
                $obj4->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined Contact rows

                $key5 = ContactPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ContactPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ContactPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ContactPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (School) to the collection in $obj5 (Contact)
                $obj5->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined Community rows

                $key6 = CommunityPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = CommunityPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = CommunityPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    CommunityPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (School) to the collection in $obj6 (Community)
                $obj6->addSchool($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of School objects pre-filled with all related objects except Sponsor.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of School objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSponsor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SchoolPeer::DATABASE_NAME);
        }

        SchoolPeer::addSelectColumns($criteria);
        $startcol2 = SchoolPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        StatePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + StatePeer::NUM_HYDRATE_COLUMNS;

        TimeZonePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + TimeZonePeer::NUM_HYDRATE_COLUMNS;

        ContactPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ContactPeer::NUM_HYDRATE_COLUMNS;

        CommunityPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + CommunityPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SchoolPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::TIME_ZONE_ID, TimeZonePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::COMMUNITY_ID, CommunityPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SchoolPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SchoolPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SchoolPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined User rows

                $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UserPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (School) to the collection in $obj2 (User)
                $obj2->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined State rows

                $key3 = StatePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = StatePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = StatePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    StatePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (School) to the collection in $obj3 (State)
                $obj3->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined TimeZone rows

                $key4 = TimeZonePeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = TimeZonePeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = TimeZonePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    TimeZonePeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (School) to the collection in $obj4 (TimeZone)
                $obj4->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined Contact rows

                $key5 = ContactPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ContactPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ContactPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ContactPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (School) to the collection in $obj5 (Contact)
                $obj5->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined Community rows

                $key6 = CommunityPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = CommunityPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = CommunityPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    CommunityPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (School) to the collection in $obj6 (Community)
                $obj6->addSchool($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of School objects pre-filled with all related objects except State.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of School objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptState(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SchoolPeer::DATABASE_NAME);
        }

        SchoolPeer::addSelectColumns($criteria);
        $startcol2 = SchoolPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        SponsorPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + SponsorPeer::NUM_HYDRATE_COLUMNS;

        TimeZonePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + TimeZonePeer::NUM_HYDRATE_COLUMNS;

        ContactPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ContactPeer::NUM_HYDRATE_COLUMNS;

        CommunityPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + CommunityPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SchoolPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::SPONSOR_ID, SponsorPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::TIME_ZONE_ID, TimeZonePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::COMMUNITY_ID, CommunityPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SchoolPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SchoolPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SchoolPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined User rows

                $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UserPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (School) to the collection in $obj2 (User)
                $obj2->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined Sponsor rows

                $key3 = SponsorPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = SponsorPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = SponsorPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    SponsorPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (School) to the collection in $obj3 (Sponsor)
                $obj3->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined TimeZone rows

                $key4 = TimeZonePeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = TimeZonePeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = TimeZonePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    TimeZonePeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (School) to the collection in $obj4 (TimeZone)
                $obj4->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined Contact rows

                $key5 = ContactPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ContactPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ContactPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ContactPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (School) to the collection in $obj5 (Contact)
                $obj5->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined Community rows

                $key6 = CommunityPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = CommunityPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = CommunityPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    CommunityPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (School) to the collection in $obj6 (Community)
                $obj6->addSchool($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of School objects pre-filled with all related objects except TimeZone.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of School objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptTimeZone(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SchoolPeer::DATABASE_NAME);
        }

        SchoolPeer::addSelectColumns($criteria);
        $startcol2 = SchoolPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        SponsorPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + SponsorPeer::NUM_HYDRATE_COLUMNS;

        StatePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + StatePeer::NUM_HYDRATE_COLUMNS;

        ContactPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ContactPeer::NUM_HYDRATE_COLUMNS;

        CommunityPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + CommunityPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SchoolPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::SPONSOR_ID, SponsorPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::COMMUNITY_ID, CommunityPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SchoolPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SchoolPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SchoolPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined User rows

                $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UserPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (School) to the collection in $obj2 (User)
                $obj2->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined Sponsor rows

                $key3 = SponsorPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = SponsorPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = SponsorPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    SponsorPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (School) to the collection in $obj3 (Sponsor)
                $obj3->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined State rows

                $key4 = StatePeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = StatePeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = StatePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    StatePeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (School) to the collection in $obj4 (State)
                $obj4->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined Contact rows

                $key5 = ContactPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ContactPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ContactPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ContactPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (School) to the collection in $obj5 (Contact)
                $obj5->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined Community rows

                $key6 = CommunityPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = CommunityPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = CommunityPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    CommunityPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (School) to the collection in $obj6 (Community)
                $obj6->addSchool($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of School objects pre-filled with all related objects except Contact.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of School objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptContact(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SchoolPeer::DATABASE_NAME);
        }

        SchoolPeer::addSelectColumns($criteria);
        $startcol2 = SchoolPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        SponsorPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + SponsorPeer::NUM_HYDRATE_COLUMNS;

        StatePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + StatePeer::NUM_HYDRATE_COLUMNS;

        TimeZonePeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + TimeZonePeer::NUM_HYDRATE_COLUMNS;

        CommunityPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + CommunityPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SchoolPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::SPONSOR_ID, SponsorPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::TIME_ZONE_ID, TimeZonePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::COMMUNITY_ID, CommunityPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SchoolPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SchoolPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SchoolPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined User rows

                $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UserPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (School) to the collection in $obj2 (User)
                $obj2->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined Sponsor rows

                $key3 = SponsorPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = SponsorPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = SponsorPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    SponsorPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (School) to the collection in $obj3 (Sponsor)
                $obj3->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined State rows

                $key4 = StatePeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = StatePeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = StatePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    StatePeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (School) to the collection in $obj4 (State)
                $obj4->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined TimeZone rows

                $key5 = TimeZonePeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = TimeZonePeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = TimeZonePeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    TimeZonePeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (School) to the collection in $obj5 (TimeZone)
                $obj5->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined Community rows

                $key6 = CommunityPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = CommunityPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = CommunityPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    CommunityPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (School) to the collection in $obj6 (Community)
                $obj6->addSchool($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of School objects pre-filled with all related objects except Community.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of School objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommunity(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SchoolPeer::DATABASE_NAME);
        }

        SchoolPeer::addSelectColumns($criteria);
        $startcol2 = SchoolPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        SponsorPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + SponsorPeer::NUM_HYDRATE_COLUMNS;

        StatePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + StatePeer::NUM_HYDRATE_COLUMNS;

        TimeZonePeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + TimeZonePeer::NUM_HYDRATE_COLUMNS;

        ContactPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + ContactPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SchoolPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::SPONSOR_ID, SponsorPeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::TIME_ZONE_ID, TimeZonePeer::ID, $join_behavior);

        $criteria->addJoin(SchoolPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SchoolPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SchoolPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SchoolPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined User rows

                $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UserPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (School) to the collection in $obj2 (User)
                $obj2->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined Sponsor rows

                $key3 = SponsorPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = SponsorPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = SponsorPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    SponsorPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (School) to the collection in $obj3 (Sponsor)
                $obj3->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined State rows

                $key4 = StatePeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = StatePeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = StatePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    StatePeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (School) to the collection in $obj4 (State)
                $obj4->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined TimeZone rows

                $key5 = TimeZonePeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = TimeZonePeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = TimeZonePeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    TimeZonePeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (School) to the collection in $obj5 (TimeZone)
                $obj5->addSchool($obj1);

            } // if joined row is not null

                // Add objects for joined Contact rows

                $key6 = ContactPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = ContactPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = ContactPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    ContactPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (School) to the collection in $obj6 (Contact)
                $obj6->addSchool($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(SchoolPeer::DATABASE_NAME)->getTable(SchoolPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSchoolPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSchoolPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SchoolTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return SchoolPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a School or Criteria object.
     *
     * @param      mixed $values Criteria or School object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from School object
        }

        if ($criteria->containsKey(SchoolPeer::ID) && $criteria->keyContainsValue(SchoolPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SchoolPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a School or Criteria object.
     *
     * @param      mixed $values Criteria or School object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SchoolPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SchoolPeer::ID);
            $value = $criteria->remove(SchoolPeer::ID);
            if ($value) {
                $selectCriteria->add(SchoolPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);
            }

        } else { // $values is School object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the schools table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SchoolPeer::TABLE_NAME, $con, SchoolPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SchoolPeer::clearInstancePool();
            SchoolPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a School or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or School object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SchoolPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof School) { // it's a model object
            // invalidate the cache for this single object
            SchoolPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SchoolPeer::DATABASE_NAME);
            $criteria->add(SchoolPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                SchoolPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SchoolPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SchoolPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given School object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param School $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SchoolPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SchoolPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(SchoolPeer::DATABASE_NAME, SchoolPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return School
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = SchoolPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(SchoolPeer::DATABASE_NAME);
        $criteria->add(SchoolPeer::ID, $pk);

        $v = SchoolPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return School[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(SchoolPeer::DATABASE_NAME);
            $criteria->add(SchoolPeer::ID, $pks, Criteria::IN);
            $objs = SchoolPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseSchoolPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSchoolPeer::buildTableMap();

