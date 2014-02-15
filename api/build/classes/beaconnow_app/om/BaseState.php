<?php


/**
 * Base class that represents a row from the 'states' table.
 *
 *
 *
 * @package    propel.generator.beaconnow_app.om
 */
abstract class BaseState extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'StatePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        StatePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the code field.
     * @var        string
     */
    protected $code;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * @var        PropelObjectCollection|Community[] Collection to store aggregation of Community objects.
     */
    protected $collCommunitys;
    protected $collCommunitysPartial;

    /**
     * @var        PropelObjectCollection|Sponsor[] Collection to store aggregation of Sponsor objects.
     */
    protected $collSponsors;
    protected $collSponsorsPartial;

    /**
     * @var        PropelObjectCollection|School[] Collection to store aggregation of School objects.
     */
    protected $collSchools;
    protected $collSchoolsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $communitysScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $sponsorsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $schoolsScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [code] column value.
     *
     * @return string
     */
    public function getCode()
    {

        return $this->code;
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return State The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = StatePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [code] column.
     *
     * @param  string $v new value
     * @return State The current object (for fluent API support)
     */
    public function setCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code !== $v) {
            $this->code = $v;
            $this->modifiedColumns[] = StatePeer::CODE;
        }


        return $this;
    } // setCode()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return State The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = StatePeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->code = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = StatePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating State object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(StatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = StatePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCommunitys = null;

            $this->collSponsors = null;

            $this->collSchools = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(StatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = StateQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(StatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                StatePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->communitysScheduledForDeletion !== null) {
                if (!$this->communitysScheduledForDeletion->isEmpty()) {
                    foreach ($this->communitysScheduledForDeletion as $community) {
                        // need to save related object because we set the relation to null
                        $community->save($con);
                    }
                    $this->communitysScheduledForDeletion = null;
                }
            }

            if ($this->collCommunitys !== null) {
                foreach ($this->collCommunitys as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->sponsorsScheduledForDeletion !== null) {
                if (!$this->sponsorsScheduledForDeletion->isEmpty()) {
                    SponsorQuery::create()
                        ->filterByPrimaryKeys($this->sponsorsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->sponsorsScheduledForDeletion = null;
                }
            }

            if ($this->collSponsors !== null) {
                foreach ($this->collSponsors as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->schoolsScheduledForDeletion !== null) {
                if (!$this->schoolsScheduledForDeletion->isEmpty()) {
                    SchoolQuery::create()
                        ->filterByPrimaryKeys($this->schoolsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->schoolsScheduledForDeletion = null;
                }
            }

            if ($this->collSchools !== null) {
                foreach ($this->collSchools as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = StatePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . StatePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(StatePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(StatePeer::CODE)) {
            $modifiedColumns[':p' . $index++]  = '`code`';
        }
        if ($this->isColumnModified(StatePeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }

        $sql = sprintf(
            'INSERT INTO `states` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`code`':
                        $stmt->bindValue($identifier, $this->code, PDO::PARAM_STR);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = StatePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommunitys !== null) {
                    foreach ($this->collCommunitys as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collSponsors !== null) {
                    foreach ($this->collSponsors as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collSchools !== null) {
                    foreach ($this->collSchools as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = StatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getCode();
                break;
            case 2:
                return $this->getName();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['State'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['State'][$this->getPrimaryKey()] = true;
        $keys = StatePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getCode(),
            $keys[2] => $this->getName(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collCommunitys) {
                $result['Communitys'] = $this->collCommunitys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSponsors) {
                $result['Sponsors'] = $this->collSponsors->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSchools) {
                $result['Schools'] = $this->collSchools->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = StatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setCode($value);
                break;
            case 2:
                $this->setName($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = StatePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(StatePeer::DATABASE_NAME);

        if ($this->isColumnModified(StatePeer::ID)) $criteria->add(StatePeer::ID, $this->id);
        if ($this->isColumnModified(StatePeer::CODE)) $criteria->add(StatePeer::CODE, $this->code);
        if ($this->isColumnModified(StatePeer::NAME)) $criteria->add(StatePeer::NAME, $this->name);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(StatePeer::DATABASE_NAME);
        $criteria->add(StatePeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of State (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCode($this->getCode());
        $copyObj->setName($this->getName());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommunitys() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommunity($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSponsors() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSponsor($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSchools() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSchool($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return State Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return StatePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new StatePeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Community' == $relationName) {
            $this->initCommunitys();
        }
        if ('Sponsor' == $relationName) {
            $this->initSponsors();
        }
        if ('School' == $relationName) {
            $this->initSchools();
        }
    }

    /**
     * Clears out the collCommunitys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return State The current object (for fluent API support)
     * @see        addCommunitys()
     */
    public function clearCommunitys()
    {
        $this->collCommunitys = null; // important to set this to null since that means it is uninitialized
        $this->collCommunitysPartial = null;

        return $this;
    }

    /**
     * reset is the collCommunitys collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommunitys($v = true)
    {
        $this->collCommunitysPartial = $v;
    }

    /**
     * Initializes the collCommunitys collection.
     *
     * By default this just sets the collCommunitys collection to an empty array (like clearcollCommunitys());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommunitys($overrideExisting = true)
    {
        if (null !== $this->collCommunitys && !$overrideExisting) {
            return;
        }
        $this->collCommunitys = new PropelObjectCollection();
        $this->collCommunitys->setModel('Community');
    }

    /**
     * Gets an array of Community objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this State is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Community[] List of Community objects
     * @throws PropelException
     */
    public function getCommunitys($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommunitysPartial && !$this->isNew();
        if (null === $this->collCommunitys || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommunitys) {
                // return empty collection
                $this->initCommunitys();
            } else {
                $collCommunitys = CommunityQuery::create(null, $criteria)
                    ->filterByState($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommunitysPartial && count($collCommunitys)) {
                      $this->initCommunitys(false);

                      foreach ($collCommunitys as $obj) {
                        if (false == $this->collCommunitys->contains($obj)) {
                          $this->collCommunitys->append($obj);
                        }
                      }

                      $this->collCommunitysPartial = true;
                    }

                    $collCommunitys->getInternalIterator()->rewind();

                    return $collCommunitys;
                }

                if ($partial && $this->collCommunitys) {
                    foreach ($this->collCommunitys as $obj) {
                        if ($obj->isNew()) {
                            $collCommunitys[] = $obj;
                        }
                    }
                }

                $this->collCommunitys = $collCommunitys;
                $this->collCommunitysPartial = false;
            }
        }

        return $this->collCommunitys;
    }

    /**
     * Sets a collection of Community objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $communitys A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return State The current object (for fluent API support)
     */
    public function setCommunitys(PropelCollection $communitys, PropelPDO $con = null)
    {
        $communitysToDelete = $this->getCommunitys(new Criteria(), $con)->diff($communitys);


        $this->communitysScheduledForDeletion = $communitysToDelete;

        foreach ($communitysToDelete as $communityRemoved) {
            $communityRemoved->setState(null);
        }

        $this->collCommunitys = null;
        foreach ($communitys as $community) {
            $this->addCommunity($community);
        }

        $this->collCommunitys = $communitys;
        $this->collCommunitysPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Community objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Community objects.
     * @throws PropelException
     */
    public function countCommunitys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommunitysPartial && !$this->isNew();
        if (null === $this->collCommunitys || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommunitys) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommunitys());
            }
            $query = CommunityQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByState($this)
                ->count($con);
        }

        return count($this->collCommunitys);
    }

    /**
     * Method called to associate a Community object to this object
     * through the Community foreign key attribute.
     *
     * @param    Community $l Community
     * @return State The current object (for fluent API support)
     */
    public function addCommunity(Community $l)
    {
        if ($this->collCommunitys === null) {
            $this->initCommunitys();
            $this->collCommunitysPartial = true;
        }

        if (!in_array($l, $this->collCommunitys->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommunity($l);

            if ($this->communitysScheduledForDeletion and $this->communitysScheduledForDeletion->contains($l)) {
                $this->communitysScheduledForDeletion->remove($this->communitysScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Community $community The community object to add.
     */
    protected function doAddCommunity($community)
    {
        $this->collCommunitys[]= $community;
        $community->setState($this);
    }

    /**
     * @param	Community $community The community object to remove.
     * @return State The current object (for fluent API support)
     */
    public function removeCommunity($community)
    {
        if ($this->getCommunitys()->contains($community)) {
            $this->collCommunitys->remove($this->collCommunitys->search($community));
            if (null === $this->communitysScheduledForDeletion) {
                $this->communitysScheduledForDeletion = clone $this->collCommunitys;
                $this->communitysScheduledForDeletion->clear();
            }
            $this->communitysScheduledForDeletion[]= $community;
            $community->setState(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this State is new, it will return
     * an empty collection; or if this State has previously
     * been saved, it will retrieve related Communitys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in State.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Community[] List of Community objects
     */
    public function getCommunitysJoinTimeZone($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommunityQuery::create(null, $criteria);
        $query->joinWith('TimeZone', $join_behavior);

        return $this->getCommunitys($query, $con);
    }

    /**
     * Clears out the collSponsors collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return State The current object (for fluent API support)
     * @see        addSponsors()
     */
    public function clearSponsors()
    {
        $this->collSponsors = null; // important to set this to null since that means it is uninitialized
        $this->collSponsorsPartial = null;

        return $this;
    }

    /**
     * reset is the collSponsors collection loaded partially
     *
     * @return void
     */
    public function resetPartialSponsors($v = true)
    {
        $this->collSponsorsPartial = $v;
    }

    /**
     * Initializes the collSponsors collection.
     *
     * By default this just sets the collSponsors collection to an empty array (like clearcollSponsors());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSponsors($overrideExisting = true)
    {
        if (null !== $this->collSponsors && !$overrideExisting) {
            return;
        }
        $this->collSponsors = new PropelObjectCollection();
        $this->collSponsors->setModel('Sponsor');
    }

    /**
     * Gets an array of Sponsor objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this State is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Sponsor[] List of Sponsor objects
     * @throws PropelException
     */
    public function getSponsors($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSponsorsPartial && !$this->isNew();
        if (null === $this->collSponsors || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSponsors) {
                // return empty collection
                $this->initSponsors();
            } else {
                $collSponsors = SponsorQuery::create(null, $criteria)
                    ->filterByState($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSponsorsPartial && count($collSponsors)) {
                      $this->initSponsors(false);

                      foreach ($collSponsors as $obj) {
                        if (false == $this->collSponsors->contains($obj)) {
                          $this->collSponsors->append($obj);
                        }
                      }

                      $this->collSponsorsPartial = true;
                    }

                    $collSponsors->getInternalIterator()->rewind();

                    return $collSponsors;
                }

                if ($partial && $this->collSponsors) {
                    foreach ($this->collSponsors as $obj) {
                        if ($obj->isNew()) {
                            $collSponsors[] = $obj;
                        }
                    }
                }

                $this->collSponsors = $collSponsors;
                $this->collSponsorsPartial = false;
            }
        }

        return $this->collSponsors;
    }

    /**
     * Sets a collection of Sponsor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $sponsors A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return State The current object (for fluent API support)
     */
    public function setSponsors(PropelCollection $sponsors, PropelPDO $con = null)
    {
        $sponsorsToDelete = $this->getSponsors(new Criteria(), $con)->diff($sponsors);


        $this->sponsorsScheduledForDeletion = $sponsorsToDelete;

        foreach ($sponsorsToDelete as $sponsorRemoved) {
            $sponsorRemoved->setState(null);
        }

        $this->collSponsors = null;
        foreach ($sponsors as $sponsor) {
            $this->addSponsor($sponsor);
        }

        $this->collSponsors = $sponsors;
        $this->collSponsorsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Sponsor objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Sponsor objects.
     * @throws PropelException
     */
    public function countSponsors(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSponsorsPartial && !$this->isNew();
        if (null === $this->collSponsors || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSponsors) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSponsors());
            }
            $query = SponsorQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByState($this)
                ->count($con);
        }

        return count($this->collSponsors);
    }

    /**
     * Method called to associate a Sponsor object to this object
     * through the Sponsor foreign key attribute.
     *
     * @param    Sponsor $l Sponsor
     * @return State The current object (for fluent API support)
     */
    public function addSponsor(Sponsor $l)
    {
        if ($this->collSponsors === null) {
            $this->initSponsors();
            $this->collSponsorsPartial = true;
        }

        if (!in_array($l, $this->collSponsors->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSponsor($l);

            if ($this->sponsorsScheduledForDeletion and $this->sponsorsScheduledForDeletion->contains($l)) {
                $this->sponsorsScheduledForDeletion->remove($this->sponsorsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Sponsor $sponsor The sponsor object to add.
     */
    protected function doAddSponsor($sponsor)
    {
        $this->collSponsors[]= $sponsor;
        $sponsor->setState($this);
    }

    /**
     * @param	Sponsor $sponsor The sponsor object to remove.
     * @return State The current object (for fluent API support)
     */
    public function removeSponsor($sponsor)
    {
        if ($this->getSponsors()->contains($sponsor)) {
            $this->collSponsors->remove($this->collSponsors->search($sponsor));
            if (null === $this->sponsorsScheduledForDeletion) {
                $this->sponsorsScheduledForDeletion = clone $this->collSponsors;
                $this->sponsorsScheduledForDeletion->clear();
            }
            $this->sponsorsScheduledForDeletion[]= clone $sponsor;
            $sponsor->setState(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this State is new, it will return
     * an empty collection; or if this State has previously
     * been saved, it will retrieve related Sponsors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in State.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Sponsor[] List of Sponsor objects
     */
    public function getSponsorsJoinContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SponsorQuery::create(null, $criteria);
        $query->joinWith('Contact', $join_behavior);

        return $this->getSponsors($query, $con);
    }

    /**
     * Clears out the collSchools collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return State The current object (for fluent API support)
     * @see        addSchools()
     */
    public function clearSchools()
    {
        $this->collSchools = null; // important to set this to null since that means it is uninitialized
        $this->collSchoolsPartial = null;

        return $this;
    }

    /**
     * reset is the collSchools collection loaded partially
     *
     * @return void
     */
    public function resetPartialSchools($v = true)
    {
        $this->collSchoolsPartial = $v;
    }

    /**
     * Initializes the collSchools collection.
     *
     * By default this just sets the collSchools collection to an empty array (like clearcollSchools());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSchools($overrideExisting = true)
    {
        if (null !== $this->collSchools && !$overrideExisting) {
            return;
        }
        $this->collSchools = new PropelObjectCollection();
        $this->collSchools->setModel('School');
    }

    /**
     * Gets an array of School objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this State is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|School[] List of School objects
     * @throws PropelException
     */
    public function getSchools($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSchoolsPartial && !$this->isNew();
        if (null === $this->collSchools || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSchools) {
                // return empty collection
                $this->initSchools();
            } else {
                $collSchools = SchoolQuery::create(null, $criteria)
                    ->filterByState($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSchoolsPartial && count($collSchools)) {
                      $this->initSchools(false);

                      foreach ($collSchools as $obj) {
                        if (false == $this->collSchools->contains($obj)) {
                          $this->collSchools->append($obj);
                        }
                      }

                      $this->collSchoolsPartial = true;
                    }

                    $collSchools->getInternalIterator()->rewind();

                    return $collSchools;
                }

                if ($partial && $this->collSchools) {
                    foreach ($this->collSchools as $obj) {
                        if ($obj->isNew()) {
                            $collSchools[] = $obj;
                        }
                    }
                }

                $this->collSchools = $collSchools;
                $this->collSchoolsPartial = false;
            }
        }

        return $this->collSchools;
    }

    /**
     * Sets a collection of School objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $schools A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return State The current object (for fluent API support)
     */
    public function setSchools(PropelCollection $schools, PropelPDO $con = null)
    {
        $schoolsToDelete = $this->getSchools(new Criteria(), $con)->diff($schools);


        $this->schoolsScheduledForDeletion = $schoolsToDelete;

        foreach ($schoolsToDelete as $schoolRemoved) {
            $schoolRemoved->setState(null);
        }

        $this->collSchools = null;
        foreach ($schools as $school) {
            $this->addSchool($school);
        }

        $this->collSchools = $schools;
        $this->collSchoolsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related School objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related School objects.
     * @throws PropelException
     */
    public function countSchools(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSchoolsPartial && !$this->isNew();
        if (null === $this->collSchools || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSchools) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSchools());
            }
            $query = SchoolQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByState($this)
                ->count($con);
        }

        return count($this->collSchools);
    }

    /**
     * Method called to associate a School object to this object
     * through the School foreign key attribute.
     *
     * @param    School $l School
     * @return State The current object (for fluent API support)
     */
    public function addSchool(School $l)
    {
        if ($this->collSchools === null) {
            $this->initSchools();
            $this->collSchoolsPartial = true;
        }

        if (!in_array($l, $this->collSchools->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSchool($l);

            if ($this->schoolsScheduledForDeletion and $this->schoolsScheduledForDeletion->contains($l)) {
                $this->schoolsScheduledForDeletion->remove($this->schoolsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	School $school The school object to add.
     */
    protected function doAddSchool($school)
    {
        $this->collSchools[]= $school;
        $school->setState($this);
    }

    /**
     * @param	School $school The school object to remove.
     * @return State The current object (for fluent API support)
     */
    public function removeSchool($school)
    {
        if ($this->getSchools()->contains($school)) {
            $this->collSchools->remove($this->collSchools->search($school));
            if (null === $this->schoolsScheduledForDeletion) {
                $this->schoolsScheduledForDeletion = clone $this->collSchools;
                $this->schoolsScheduledForDeletion->clear();
            }
            $this->schoolsScheduledForDeletion[]= clone $school;
            $school->setState(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this State is new, it will return
     * an empty collection; or if this State has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in State.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|School[] List of School objects
     */
    public function getSchoolsJoinUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SchoolQuery::create(null, $criteria);
        $query->joinWith('User', $join_behavior);

        return $this->getSchools($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this State is new, it will return
     * an empty collection; or if this State has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in State.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|School[] List of School objects
     */
    public function getSchoolsJoinSponsor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SchoolQuery::create(null, $criteria);
        $query->joinWith('Sponsor', $join_behavior);

        return $this->getSchools($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this State is new, it will return
     * an empty collection; or if this State has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in State.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|School[] List of School objects
     */
    public function getSchoolsJoinTimeZone($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SchoolQuery::create(null, $criteria);
        $query->joinWith('TimeZone', $join_behavior);

        return $this->getSchools($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this State is new, it will return
     * an empty collection; or if this State has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in State.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|School[] List of School objects
     */
    public function getSchoolsJoinContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SchoolQuery::create(null, $criteria);
        $query->joinWith('Contact', $join_behavior);

        return $this->getSchools($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this State is new, it will return
     * an empty collection; or if this State has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in State.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|School[] List of School objects
     */
    public function getSchoolsJoinCommunity($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SchoolQuery::create(null, $criteria);
        $query->joinWith('Community', $join_behavior);

        return $this->getSchools($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->code = null;
        $this->name = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collCommunitys) {
                foreach ($this->collCommunitys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSponsors) {
                foreach ($this->collSponsors as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSchools) {
                foreach ($this->collSchools as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommunitys instanceof PropelCollection) {
            $this->collCommunitys->clearIterator();
        }
        $this->collCommunitys = null;
        if ($this->collSponsors instanceof PropelCollection) {
            $this->collSponsors->clearIterator();
        }
        $this->collSponsors = null;
        if ($this->collSchools instanceof PropelCollection) {
            $this->collSchools->clearIterator();
        }
        $this->collSchools = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(StatePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
