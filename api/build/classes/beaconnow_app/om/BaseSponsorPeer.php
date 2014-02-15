<?php


/**
 * Base static class for performing query and update operations on the 'sponsors' table.
 *
 *
 *
 * @package propel.generator.beaconnow_app.om
 */
abstract class BaseSponsorPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'beaconnow_app';

    /** the table name for this class */
    const TABLE_NAME = 'sponsors';

    /** the related Propel class for this table */
    const OM_CLASS = 'Sponsor';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SponsorTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the id field */
    const ID = 'sponsors.id';

    /** the column name for the contact_id field */
    const CONTACT_ID = 'sponsors.contact_id';

    /** the column name for the state_id field */
    const STATE_ID = 'sponsors.state_id';

    /** the column name for the sponsorLogo field */
    const SPONSORLOGO = 'sponsors.sponsorLogo';

    /** the column name for the sponsorName field */
    const SPONSORNAME = 'sponsors.sponsorName';

    /** the column name for the sponsorMessage field */
    const SPONSORMESSAGE = 'sponsors.sponsorMessage';

    /** the column name for the sponsorTextMessage field */
    const SPONSORTEXTMESSAGE = 'sponsors.sponsorTextMessage';

    /** the column name for the maketingContact field */
    const MAKETINGCONTACT = 'sponsors.maketingContact';

    /** the column name for the maketingPhone field */
    const MAKETINGPHONE = 'sponsors.maketingPhone';

    /** the column name for the maketingEmail field */
    const MAKETINGEMAIL = 'sponsors.maketingEmail';

    /** the column name for the website field */
    const WEBSITE = 'sponsors.website';

    /** the column name for the note field */
    const NOTE = 'sponsors.note';

    /** the column name for the city field */
    const CITY = 'sponsors.city';

    /** the column name for the zipcode field */
    const ZIPCODE = 'sponsors.zipcode';

    /** the column name for the created field */
    const CREATED = 'sponsors.created';

    /** the column name for the modified field */
    const MODIFIED = 'sponsors.modified';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Sponsor objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Sponsor[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SponsorPeer::$fieldNames[SponsorPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'ContactId', 'StateId', 'Sponsorlogo', 'Sponsorname', 'Sponsormessage', 'Sponsortextmessage', 'Maketingcontact', 'Maketingphone', 'Maketingemail', 'Website', 'Note', 'City', 'Zipcode', 'Created', 'Modified', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'contactId', 'stateId', 'sponsorlogo', 'sponsorname', 'sponsormessage', 'sponsortextmessage', 'maketingcontact', 'maketingphone', 'maketingemail', 'website', 'note', 'city', 'zipcode', 'created', 'modified', ),
        BasePeer::TYPE_COLNAME => array (SponsorPeer::ID, SponsorPeer::CONTACT_ID, SponsorPeer::STATE_ID, SponsorPeer::SPONSORLOGO, SponsorPeer::SPONSORNAME, SponsorPeer::SPONSORMESSAGE, SponsorPeer::SPONSORTEXTMESSAGE, SponsorPeer::MAKETINGCONTACT, SponsorPeer::MAKETINGPHONE, SponsorPeer::MAKETINGEMAIL, SponsorPeer::WEBSITE, SponsorPeer::NOTE, SponsorPeer::CITY, SponsorPeer::ZIPCODE, SponsorPeer::CREATED, SponsorPeer::MODIFIED, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'CONTACT_ID', 'STATE_ID', 'SPONSORLOGO', 'SPONSORNAME', 'SPONSORMESSAGE', 'SPONSORTEXTMESSAGE', 'MAKETINGCONTACT', 'MAKETINGPHONE', 'MAKETINGEMAIL', 'WEBSITE', 'NOTE', 'CITY', 'ZIPCODE', 'CREATED', 'MODIFIED', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'contact_id', 'state_id', 'sponsorLogo', 'sponsorName', 'sponsorMessage', 'sponsorTextMessage', 'maketingContact', 'maketingPhone', 'maketingEmail', 'website', 'note', 'city', 'zipcode', 'created', 'modified', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SponsorPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ContactId' => 1, 'StateId' => 2, 'Sponsorlogo' => 3, 'Sponsorname' => 4, 'Sponsormessage' => 5, 'Sponsortextmessage' => 6, 'Maketingcontact' => 7, 'Maketingphone' => 8, 'Maketingemail' => 9, 'Website' => 10, 'Note' => 11, 'City' => 12, 'Zipcode' => 13, 'Created' => 14, 'Modified' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'contactId' => 1, 'stateId' => 2, 'sponsorlogo' => 3, 'sponsorname' => 4, 'sponsormessage' => 5, 'sponsortextmessage' => 6, 'maketingcontact' => 7, 'maketingphone' => 8, 'maketingemail' => 9, 'website' => 10, 'note' => 11, 'city' => 12, 'zipcode' => 13, 'created' => 14, 'modified' => 15, ),
        BasePeer::TYPE_COLNAME => array (SponsorPeer::ID => 0, SponsorPeer::CONTACT_ID => 1, SponsorPeer::STATE_ID => 2, SponsorPeer::SPONSORLOGO => 3, SponsorPeer::SPONSORNAME => 4, SponsorPeer::SPONSORMESSAGE => 5, SponsorPeer::SPONSORTEXTMESSAGE => 6, SponsorPeer::MAKETINGCONTACT => 7, SponsorPeer::MAKETINGPHONE => 8, SponsorPeer::MAKETINGEMAIL => 9, SponsorPeer::WEBSITE => 10, SponsorPeer::NOTE => 11, SponsorPeer::CITY => 12, SponsorPeer::ZIPCODE => 13, SponsorPeer::CREATED => 14, SponsorPeer::MODIFIED => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'CONTACT_ID' => 1, 'STATE_ID' => 2, 'SPONSORLOGO' => 3, 'SPONSORNAME' => 4, 'SPONSORMESSAGE' => 5, 'SPONSORTEXTMESSAGE' => 6, 'MAKETINGCONTACT' => 7, 'MAKETINGPHONE' => 8, 'MAKETINGEMAIL' => 9, 'WEBSITE' => 10, 'NOTE' => 11, 'CITY' => 12, 'ZIPCODE' => 13, 'CREATED' => 14, 'MODIFIED' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'contact_id' => 1, 'state_id' => 2, 'sponsorLogo' => 3, 'sponsorName' => 4, 'sponsorMessage' => 5, 'sponsorTextMessage' => 6, 'maketingContact' => 7, 'maketingPhone' => 8, 'maketingEmail' => 9, 'website' => 10, 'note' => 11, 'city' => 12, 'zipcode' => 13, 'created' => 14, 'modified' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $toNames = SponsorPeer::getFieldNames($toType);
        $key = isset(SponsorPeer::$fieldKeys[$fromType][$name]) ? SponsorPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SponsorPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SponsorPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SponsorPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SponsorPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SponsorPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SponsorPeer::ID);
            $criteria->addSelectColumn(SponsorPeer::CONTACT_ID);
            $criteria->addSelectColumn(SponsorPeer::STATE_ID);
            $criteria->addSelectColumn(SponsorPeer::SPONSORLOGO);
            $criteria->addSelectColumn(SponsorPeer::SPONSORNAME);
            $criteria->addSelectColumn(SponsorPeer::SPONSORMESSAGE);
            $criteria->addSelectColumn(SponsorPeer::SPONSORTEXTMESSAGE);
            $criteria->addSelectColumn(SponsorPeer::MAKETINGCONTACT);
            $criteria->addSelectColumn(SponsorPeer::MAKETINGPHONE);
            $criteria->addSelectColumn(SponsorPeer::MAKETINGEMAIL);
            $criteria->addSelectColumn(SponsorPeer::WEBSITE);
            $criteria->addSelectColumn(SponsorPeer::NOTE);
            $criteria->addSelectColumn(SponsorPeer::CITY);
            $criteria->addSelectColumn(SponsorPeer::ZIPCODE);
            $criteria->addSelectColumn(SponsorPeer::CREATED);
            $criteria->addSelectColumn(SponsorPeer::MODIFIED);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.contact_id');
            $criteria->addSelectColumn($alias . '.state_id');
            $criteria->addSelectColumn($alias . '.sponsorLogo');
            $criteria->addSelectColumn($alias . '.sponsorName');
            $criteria->addSelectColumn($alias . '.sponsorMessage');
            $criteria->addSelectColumn($alias . '.sponsorTextMessage');
            $criteria->addSelectColumn($alias . '.maketingContact');
            $criteria->addSelectColumn($alias . '.maketingPhone');
            $criteria->addSelectColumn($alias . '.maketingEmail');
            $criteria->addSelectColumn($alias . '.website');
            $criteria->addSelectColumn($alias . '.note');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.zipcode');
            $criteria->addSelectColumn($alias . '.created');
            $criteria->addSelectColumn($alias . '.modified');
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
        $criteria->setPrimaryTableName(SponsorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SponsorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SponsorPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Sponsor
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SponsorPeer::doSelect($critcopy, $con);
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
        return SponsorPeer::populateObjects(SponsorPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SponsorPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SponsorPeer::DATABASE_NAME);

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
     * @param Sponsor $obj A Sponsor object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            SponsorPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Sponsor object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Sponsor) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Sponsor object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SponsorPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Sponsor Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SponsorPeer::$instances[$key])) {
                return SponsorPeer::$instances[$key];
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
        foreach (SponsorPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SponsorPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to sponsors
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
        $cls = SponsorPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SponsorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SponsorPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SponsorPeer::addInstanceToPool($obj, $key);
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
     * @return array (Sponsor object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SponsorPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SponsorPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SponsorPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SponsorPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SponsorPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        $criteria->setPrimaryTableName(SponsorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SponsorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SponsorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SponsorPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(SponsorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SponsorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SponsorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SponsorPeer::STATE_ID, StatePeer::ID, $join_behavior);

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
     * Selects a collection of Sponsor objects pre-filled with their Contact objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Sponsor objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinContact(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SponsorPeer::DATABASE_NAME);
        }

        SponsorPeer::addSelectColumns($criteria);
        $startcol = SponsorPeer::NUM_HYDRATE_COLUMNS;
        ContactPeer::addSelectColumns($criteria);

        $criteria->addJoin(SponsorPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SponsorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SponsorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SponsorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SponsorPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Sponsor) to $obj2 (Contact)
                $obj2->addSponsor($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Sponsor objects pre-filled with their State objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Sponsor objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinState(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SponsorPeer::DATABASE_NAME);
        }

        SponsorPeer::addSelectColumns($criteria);
        $startcol = SponsorPeer::NUM_HYDRATE_COLUMNS;
        StatePeer::addSelectColumns($criteria);

        $criteria->addJoin(SponsorPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SponsorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SponsorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SponsorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SponsorPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Sponsor) to $obj2 (State)
                $obj2->addSponsor($obj1);

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
        $criteria->setPrimaryTableName(SponsorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SponsorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SponsorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SponsorPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $criteria->addJoin(SponsorPeer::STATE_ID, StatePeer::ID, $join_behavior);

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
     * Selects a collection of Sponsor objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Sponsor objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SponsorPeer::DATABASE_NAME);
        }

        SponsorPeer::addSelectColumns($criteria);
        $startcol2 = SponsorPeer::NUM_HYDRATE_COLUMNS;

        ContactPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ContactPeer::NUM_HYDRATE_COLUMNS;

        StatePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + StatePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SponsorPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

        $criteria->addJoin(SponsorPeer::STATE_ID, StatePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SponsorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SponsorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SponsorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SponsorPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Contact rows

            $key2 = ContactPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ContactPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ContactPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ContactPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Sponsor) to the collection in $obj2 (Contact)
                $obj2->addSponsor($obj1);
            } // if joined row not null

            // Add objects for joined State rows

            $key3 = StatePeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = StatePeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = StatePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    StatePeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Sponsor) to the collection in $obj3 (State)
                $obj3->addSponsor($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        $criteria->setPrimaryTableName(SponsorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SponsorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SponsorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SponsorPeer::STATE_ID, StatePeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(SponsorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SponsorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SponsorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SponsorPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);

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
     * Selects a collection of Sponsor objects pre-filled with all related objects except Contact.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Sponsor objects.
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
            $criteria->setDbName(SponsorPeer::DATABASE_NAME);
        }

        SponsorPeer::addSelectColumns($criteria);
        $startcol2 = SponsorPeer::NUM_HYDRATE_COLUMNS;

        StatePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + StatePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SponsorPeer::STATE_ID, StatePeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SponsorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SponsorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SponsorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SponsorPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined State rows

                $key2 = StatePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = StatePeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = StatePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    StatePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Sponsor) to the collection in $obj2 (State)
                $obj2->addSponsor($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Sponsor objects pre-filled with all related objects except State.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Sponsor objects.
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
            $criteria->setDbName(SponsorPeer::DATABASE_NAME);
        }

        SponsorPeer::addSelectColumns($criteria);
        $startcol2 = SponsorPeer::NUM_HYDRATE_COLUMNS;

        ContactPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ContactPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SponsorPeer::CONTACT_ID, ContactPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SponsorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SponsorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SponsorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SponsorPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Contact rows

                $key2 = ContactPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ContactPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ContactPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ContactPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Sponsor) to the collection in $obj2 (Contact)
                $obj2->addSponsor($obj1);

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
        return Propel::getDatabaseMap(SponsorPeer::DATABASE_NAME)->getTable(SponsorPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSponsorPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSponsorPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SponsorTableMap());
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
        return SponsorPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Sponsor or Criteria object.
     *
     * @param      mixed $values Criteria or Sponsor object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Sponsor object
        }

        if ($criteria->containsKey(SponsorPeer::ID) && $criteria->keyContainsValue(SponsorPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SponsorPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(SponsorPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Sponsor or Criteria object.
     *
     * @param      mixed $values Criteria or Sponsor object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SponsorPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SponsorPeer::ID);
            $value = $criteria->remove(SponsorPeer::ID);
            if ($value) {
                $selectCriteria->add(SponsorPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SponsorPeer::TABLE_NAME);
            }

        } else { // $values is Sponsor object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SponsorPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the sponsors table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SponsorPeer::TABLE_NAME, $con, SponsorPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SponsorPeer::clearInstancePool();
            SponsorPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Sponsor or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Sponsor object or primary key or array of primary keys
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
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SponsorPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Sponsor) { // it's a model object
            // invalidate the cache for this single object
            SponsorPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SponsorPeer::DATABASE_NAME);
            $criteria->add(SponsorPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                SponsorPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SponsorPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SponsorPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Sponsor object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Sponsor $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SponsorPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SponsorPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SponsorPeer::DATABASE_NAME, SponsorPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Sponsor
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = SponsorPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(SponsorPeer::DATABASE_NAME);
        $criteria->add(SponsorPeer::ID, $pk);

        $v = SponsorPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Sponsor[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(SponsorPeer::DATABASE_NAME);
            $criteria->add(SponsorPeer::ID, $pks, Criteria::IN);
            $objs = SponsorPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseSponsorPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSponsorPeer::buildTableMap();

