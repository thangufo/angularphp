<?php


/**
 * Base class that represents a row from the 'communities' table.
 *
 *
 *
 * @package    propel.generator.beaconnow_app.om
 */
abstract class BaseCommunity extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommunityPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommunityPeer
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
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the city field.
     * @var        string
     */
    protected $city;

    /**
     * The value for the state_id field.
     * @var        int
     */
    protected $state_id;

    /**
     * The value for the isactive field.
     * @var        int
     */
    protected $isactive;

    /**
     * The value for the time_zone_id field.
     * @var        int
     */
    protected $time_zone_id;

    /**
     * The value for the contactname field.
     * @var        string
     */
    protected $contactname;

    /**
     * The value for the contactphone field.
     * @var        string
     */
    protected $contactphone;

    /**
     * The value for the contactemail field.
     * @var        string
     */
    protected $contactemail;

    /**
     * @var        State
     */
    protected $aState;

    /**
     * @var        TimeZone
     */
    protected $aTimeZone;

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
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Get the [city] column value.
     *
     * @return string
     */
    public function getCity()
    {

        return $this->city;
    }

    /**
     * Get the [state_id] column value.
     *
     * @return int
     */
    public function getStateId()
    {

        return $this->state_id;
    }

    /**
     * Get the [isactive] column value.
     *
     * @return int
     */
    public function getIsactive()
    {

        return $this->isactive;
    }

    /**
     * Get the [time_zone_id] column value.
     *
     * @return int
     */
    public function getTimeZoneId()
    {

        return $this->time_zone_id;
    }

    /**
     * Get the [contactname] column value.
     *
     * @return string
     */
    public function getContactname()
    {

        return $this->contactname;
    }

    /**
     * Get the [contactphone] column value.
     *
     * @return string
     */
    public function getContactphone()
    {

        return $this->contactphone;
    }

    /**
     * Get the [contactemail] column value.
     *
     * @return string
     */
    public function getContactemail()
    {

        return $this->contactemail;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Community The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommunityPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return Community The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = CommunityPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [city] column.
     *
     * @param  string $v new value
     * @return Community The current object (for fluent API support)
     */
    public function setCity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->city !== $v) {
            $this->city = $v;
            $this->modifiedColumns[] = CommunityPeer::CITY;
        }


        return $this;
    } // setCity()

    /**
     * Set the value of [state_id] column.
     *
     * @param  int $v new value
     * @return Community The current object (for fluent API support)
     */
    public function setStateId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->state_id !== $v) {
            $this->state_id = $v;
            $this->modifiedColumns[] = CommunityPeer::STATE_ID;
        }

        if ($this->aState !== null && $this->aState->getId() !== $v) {
            $this->aState = null;
        }


        return $this;
    } // setStateId()

    /**
     * Set the value of [isactive] column.
     *
     * @param  int $v new value
     * @return Community The current object (for fluent API support)
     */
    public function setIsactive($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->isactive !== $v) {
            $this->isactive = $v;
            $this->modifiedColumns[] = CommunityPeer::ISACTIVE;
        }


        return $this;
    } // setIsactive()

    /**
     * Set the value of [time_zone_id] column.
     *
     * @param  int $v new value
     * @return Community The current object (for fluent API support)
     */
    public function setTimeZoneId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->time_zone_id !== $v) {
            $this->time_zone_id = $v;
            $this->modifiedColumns[] = CommunityPeer::TIME_ZONE_ID;
        }

        if ($this->aTimeZone !== null && $this->aTimeZone->getId() !== $v) {
            $this->aTimeZone = null;
        }


        return $this;
    } // setTimeZoneId()

    /**
     * Set the value of [contactname] column.
     *
     * @param  string $v new value
     * @return Community The current object (for fluent API support)
     */
    public function setContactname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contactname !== $v) {
            $this->contactname = $v;
            $this->modifiedColumns[] = CommunityPeer::CONTACTNAME;
        }


        return $this;
    } // setContactname()

    /**
     * Set the value of [contactphone] column.
     *
     * @param  string $v new value
     * @return Community The current object (for fluent API support)
     */
    public function setContactphone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contactphone !== $v) {
            $this->contactphone = $v;
            $this->modifiedColumns[] = CommunityPeer::CONTACTPHONE;
        }


        return $this;
    } // setContactphone()

    /**
     * Set the value of [contactemail] column.
     *
     * @param  string $v new value
     * @return Community The current object (for fluent API support)
     */
    public function setContactemail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contactemail !== $v) {
            $this->contactemail = $v;
            $this->modifiedColumns[] = CommunityPeer::CONTACTEMAIL;
        }


        return $this;
    } // setContactemail()

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
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->city = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->state_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->isactive = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->time_zone_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->contactname = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->contactphone = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->contactemail = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = CommunityPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Community object", $e);
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

        if ($this->aState !== null && $this->state_id !== $this->aState->getId()) {
            $this->aState = null;
        }
        if ($this->aTimeZone !== null && $this->time_zone_id !== $this->aTimeZone->getId()) {
            $this->aTimeZone = null;
        }
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
            $con = Propel::getConnection(CommunityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommunityPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aState = null;
            $this->aTimeZone = null;
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
            $con = Propel::getConnection(CommunityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommunityQuery::create()
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
            $con = Propel::getConnection(CommunityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommunityPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aState !== null) {
                if ($this->aState->isModified() || $this->aState->isNew()) {
                    $affectedRows += $this->aState->save($con);
                }
                $this->setState($this->aState);
            }

            if ($this->aTimeZone !== null) {
                if ($this->aTimeZone->isModified() || $this->aTimeZone->isNew()) {
                    $affectedRows += $this->aTimeZone->save($con);
                }
                $this->setTimeZone($this->aTimeZone);
            }

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

        $this->modifiedColumns[] = CommunityPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommunityPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommunityPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommunityPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(CommunityPeer::CITY)) {
            $modifiedColumns[':p' . $index++]  = '`city`';
        }
        if ($this->isColumnModified(CommunityPeer::STATE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`state_id`';
        }
        if ($this->isColumnModified(CommunityPeer::ISACTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`isActive`';
        }
        if ($this->isColumnModified(CommunityPeer::TIME_ZONE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`time_zone_id`';
        }
        if ($this->isColumnModified(CommunityPeer::CONTACTNAME)) {
            $modifiedColumns[':p' . $index++]  = '`contactName`';
        }
        if ($this->isColumnModified(CommunityPeer::CONTACTPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`contactPhone`';
        }
        if ($this->isColumnModified(CommunityPeer::CONTACTEMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`contactEmail`';
        }

        $sql = sprintf(
            'INSERT INTO `communities` (%s) VALUES (%s)',
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
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`city`':
                        $stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
                        break;
                    case '`state_id`':
                        $stmt->bindValue($identifier, $this->state_id, PDO::PARAM_INT);
                        break;
                    case '`isActive`':
                        $stmt->bindValue($identifier, $this->isactive, PDO::PARAM_INT);
                        break;
                    case '`time_zone_id`':
                        $stmt->bindValue($identifier, $this->time_zone_id, PDO::PARAM_INT);
                        break;
                    case '`contactName`':
                        $stmt->bindValue($identifier, $this->contactname, PDO::PARAM_STR);
                        break;
                    case '`contactPhone`':
                        $stmt->bindValue($identifier, $this->contactphone, PDO::PARAM_STR);
                        break;
                    case '`contactEmail`':
                        $stmt->bindValue($identifier, $this->contactemail, PDO::PARAM_STR);
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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aState !== null) {
                if (!$this->aState->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aState->getValidationFailures());
                }
            }

            if ($this->aTimeZone !== null) {
                if (!$this->aTimeZone->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTimeZone->getValidationFailures());
                }
            }


            if (($retval = CommunityPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = CommunityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getName();
                break;
            case 2:
                return $this->getCity();
                break;
            case 3:
                return $this->getStateId();
                break;
            case 4:
                return $this->getIsactive();
                break;
            case 5:
                return $this->getTimeZoneId();
                break;
            case 6:
                return $this->getContactname();
                break;
            case 7:
                return $this->getContactphone();
                break;
            case 8:
                return $this->getContactemail();
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
        if (isset($alreadyDumpedObjects['Community'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Community'][$this->getPrimaryKey()] = true;
        $keys = CommunityPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getCity(),
            $keys[3] => $this->getStateId(),
            $keys[4] => $this->getIsactive(),
            $keys[5] => $this->getTimeZoneId(),
            $keys[6] => $this->getContactname(),
            $keys[7] => $this->getContactphone(),
            $keys[8] => $this->getContactemail(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aState) {
                $result['State'] = $this->aState->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTimeZone) {
                $result['TimeZone'] = $this->aTimeZone->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommunityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setName($value);
                break;
            case 2:
                $this->setCity($value);
                break;
            case 3:
                $this->setStateId($value);
                break;
            case 4:
                $this->setIsactive($value);
                break;
            case 5:
                $this->setTimeZoneId($value);
                break;
            case 6:
                $this->setContactname($value);
                break;
            case 7:
                $this->setContactphone($value);
                break;
            case 8:
                $this->setContactemail($value);
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
        $keys = CommunityPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCity($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setStateId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIsactive($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTimeZoneId($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setContactname($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setContactphone($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setContactemail($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommunityPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommunityPeer::ID)) $criteria->add(CommunityPeer::ID, $this->id);
        if ($this->isColumnModified(CommunityPeer::NAME)) $criteria->add(CommunityPeer::NAME, $this->name);
        if ($this->isColumnModified(CommunityPeer::CITY)) $criteria->add(CommunityPeer::CITY, $this->city);
        if ($this->isColumnModified(CommunityPeer::STATE_ID)) $criteria->add(CommunityPeer::STATE_ID, $this->state_id);
        if ($this->isColumnModified(CommunityPeer::ISACTIVE)) $criteria->add(CommunityPeer::ISACTIVE, $this->isactive);
        if ($this->isColumnModified(CommunityPeer::TIME_ZONE_ID)) $criteria->add(CommunityPeer::TIME_ZONE_ID, $this->time_zone_id);
        if ($this->isColumnModified(CommunityPeer::CONTACTNAME)) $criteria->add(CommunityPeer::CONTACTNAME, $this->contactname);
        if ($this->isColumnModified(CommunityPeer::CONTACTPHONE)) $criteria->add(CommunityPeer::CONTACTPHONE, $this->contactphone);
        if ($this->isColumnModified(CommunityPeer::CONTACTEMAIL)) $criteria->add(CommunityPeer::CONTACTEMAIL, $this->contactemail);

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
        $criteria = new Criteria(CommunityPeer::DATABASE_NAME);
        $criteria->add(CommunityPeer::ID, $this->id);

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
     * @param object $copyObj An object of Community (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setCity($this->getCity());
        $copyObj->setStateId($this->getStateId());
        $copyObj->setIsactive($this->getIsactive());
        $copyObj->setTimeZoneId($this->getTimeZoneId());
        $copyObj->setContactname($this->getContactname());
        $copyObj->setContactphone($this->getContactphone());
        $copyObj->setContactemail($this->getContactemail());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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
     * @return Community Clone of current object.
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
     * @return CommunityPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommunityPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a State object.
     *
     * @param                  State $v
     * @return Community The current object (for fluent API support)
     * @throws PropelException
     */
    public function setState(State $v = null)
    {
        if ($v === null) {
            $this->setStateId(NULL);
        } else {
            $this->setStateId($v->getId());
        }

        $this->aState = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the State object, it will not be re-added.
        if ($v !== null) {
            $v->addCommunity($this);
        }


        return $this;
    }


    /**
     * Get the associated State object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return State The associated State object.
     * @throws PropelException
     */
    public function getState(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aState === null && ($this->state_id !== null) && $doQuery) {
            $this->aState = StateQuery::create()->findPk($this->state_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aState->addCommunitys($this);
             */
        }

        return $this->aState;
    }

    /**
     * Declares an association between this object and a TimeZone object.
     *
     * @param                  TimeZone $v
     * @return Community The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTimeZone(TimeZone $v = null)
    {
        if ($v === null) {
            $this->setTimeZoneId(NULL);
        } else {
            $this->setTimeZoneId($v->getId());
        }

        $this->aTimeZone = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the TimeZone object, it will not be re-added.
        if ($v !== null) {
            $v->addCommunity($this);
        }


        return $this;
    }


    /**
     * Get the associated TimeZone object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return TimeZone The associated TimeZone object.
     * @throws PropelException
     */
    public function getTimeZone(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTimeZone === null && ($this->time_zone_id !== null) && $doQuery) {
            $this->aTimeZone = TimeZoneQuery::create()->findPk($this->time_zone_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTimeZone->addCommunitys($this);
             */
        }

        return $this->aTimeZone;
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
        if ('School' == $relationName) {
            $this->initSchools();
        }
    }

    /**
     * Clears out the collSchools collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Community The current object (for fluent API support)
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
     * If this Community is new, it will return
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
                    ->filterByCommunity($this)
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
     * @return Community The current object (for fluent API support)
     */
    public function setSchools(PropelCollection $schools, PropelPDO $con = null)
    {
        $schoolsToDelete = $this->getSchools(new Criteria(), $con)->diff($schools);


        $this->schoolsScheduledForDeletion = $schoolsToDelete;

        foreach ($schoolsToDelete as $schoolRemoved) {
            $schoolRemoved->setCommunity(null);
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
                ->filterByCommunity($this)
                ->count($con);
        }

        return count($this->collSchools);
    }

    /**
     * Method called to associate a School object to this object
     * through the School foreign key attribute.
     *
     * @param    School $l School
     * @return Community The current object (for fluent API support)
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
        $school->setCommunity($this);
    }

    /**
     * @param	School $school The school object to remove.
     * @return Community The current object (for fluent API support)
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
            $school->setCommunity(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Community is new, it will return
     * an empty collection; or if this Community has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Community.
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
     * Otherwise if this Community is new, it will return
     * an empty collection; or if this Community has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Community.
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
     * Otherwise if this Community is new, it will return
     * an empty collection; or if this Community has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Community.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|School[] List of School objects
     */
    public function getSchoolsJoinState($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SchoolQuery::create(null, $criteria);
        $query->joinWith('State', $join_behavior);

        return $this->getSchools($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Community is new, it will return
     * an empty collection; or if this Community has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Community.
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
     * Otherwise if this Community is new, it will return
     * an empty collection; or if this Community has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Community.
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->name = null;
        $this->city = null;
        $this->state_id = null;
        $this->isactive = null;
        $this->time_zone_id = null;
        $this->contactname = null;
        $this->contactphone = null;
        $this->contactemail = null;
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
            if ($this->collSchools) {
                foreach ($this->collSchools as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aState instanceof Persistent) {
              $this->aState->clearAllReferences($deep);
            }
            if ($this->aTimeZone instanceof Persistent) {
              $this->aTimeZone->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collSchools instanceof PropelCollection) {
            $this->collSchools->clearIterator();
        }
        $this->collSchools = null;
        $this->aState = null;
        $this->aTimeZone = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommunityPeer::DEFAULT_STRING_FORMAT);
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
