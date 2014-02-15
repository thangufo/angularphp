<?php


/**
 * Base class that represents a row from the 'schools' table.
 *
 *
 *
 * @package    propel.generator.beaconnow_app.om
 */
abstract class BaseSchool extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SchoolPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SchoolPeer
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
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * The value for the sponsor_id field.
     * @var        int
     */
    protected $sponsor_id;

    /**
     * The value for the state_id field.
     * @var        int
     */
    protected $state_id;

    /**
     * The value for the time_zone_id field.
     * @var        int
     */
    protected $time_zone_id;

    /**
     * The value for the contact_id field.
     * @var        int
     */
    protected $contact_id;

    /**
     * The value for the community_id field.
     * @var        int
     */
    protected $community_id;

    /**
     * The value for the servicenumber field.
     * @var        string
     */
    protected $servicenumber;

    /**
     * The value for the schoolname field.
     * @var        string
     */
    protected $schoolname;

    /**
     * The value for the schoollogo field.
     * @var        string
     */
    protected $schoollogo;

    /**
     * The value for the note field.
     * @var        string
     */
    protected $note;

    /**
     * The value for the city field.
     * @var        string
     */
    protected $city;

    /**
     * The value for the zipcode field.
     * @var        string
     */
    protected $zipcode;

    /**
     * The value for the website field.
     * @var        string
     */
    protected $website;

    /**
     * @var        User
     */
    protected $aUser;

    /**
     * @var        Sponsor
     */
    protected $aSponsor;

    /**
     * @var        State
     */
    protected $aState;

    /**
     * @var        TimeZone
     */
    protected $aTimeZone;

    /**
     * @var        Contact
     */
    protected $aContact;

    /**
     * @var        Community
     */
    protected $aCommunity;

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
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [user_id] column value.
     *
     * @return int
     */
    public function getUserId()
    {

        return $this->user_id;
    }

    /**
     * Get the [sponsor_id] column value.
     *
     * @return int
     */
    public function getSponsorId()
    {

        return $this->sponsor_id;
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
     * Get the [time_zone_id] column value.
     *
     * @return int
     */
    public function getTimeZoneId()
    {

        return $this->time_zone_id;
    }

    /**
     * Get the [contact_id] column value.
     *
     * @return int
     */
    public function getContactId()
    {

        return $this->contact_id;
    }

    /**
     * Get the [community_id] column value.
     *
     * @return int
     */
    public function getCommunityId()
    {

        return $this->community_id;
    }

    /**
     * Get the [servicenumber] column value.
     *
     * @return string
     */
    public function getServicenumber()
    {

        return $this->servicenumber;
    }

    /**
     * Get the [schoolname] column value.
     *
     * @return string
     */
    public function getSchoolname()
    {

        return $this->schoolname;
    }

    /**
     * Get the [schoollogo] column value.
     *
     * @return string
     */
    public function getSchoollogo()
    {

        return $this->schoollogo;
    }

    /**
     * Get the [note] column value.
     *
     * @return string
     */
    public function getNote()
    {

        return $this->note;
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
     * Get the [zipcode] column value.
     *
     * @return string
     */
    public function getZipcode()
    {

        return $this->zipcode;
    }

    /**
     * Get the [website] column value.
     *
     * @return string
     */
    public function getWebsite()
    {

        return $this->website;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return School The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = SchoolPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return School The current object (for fluent API support)
     */
    public function setUserId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->user_id !== $v) {
            $this->user_id = $v;
            $this->modifiedColumns[] = SchoolPeer::USER_ID;
        }

        if ($this->aUser !== null && $this->aUser->getId() !== $v) {
            $this->aUser = null;
        }


        return $this;
    } // setUserId()

    /**
     * Set the value of [sponsor_id] column.
     *
     * @param  int $v new value
     * @return School The current object (for fluent API support)
     */
    public function setSponsorId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sponsor_id !== $v) {
            $this->sponsor_id = $v;
            $this->modifiedColumns[] = SchoolPeer::SPONSOR_ID;
        }

        if ($this->aSponsor !== null && $this->aSponsor->getId() !== $v) {
            $this->aSponsor = null;
        }


        return $this;
    } // setSponsorId()

    /**
     * Set the value of [state_id] column.
     *
     * @param  int $v new value
     * @return School The current object (for fluent API support)
     */
    public function setStateId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->state_id !== $v) {
            $this->state_id = $v;
            $this->modifiedColumns[] = SchoolPeer::STATE_ID;
        }

        if ($this->aState !== null && $this->aState->getId() !== $v) {
            $this->aState = null;
        }


        return $this;
    } // setStateId()

    /**
     * Set the value of [time_zone_id] column.
     *
     * @param  int $v new value
     * @return School The current object (for fluent API support)
     */
    public function setTimeZoneId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->time_zone_id !== $v) {
            $this->time_zone_id = $v;
            $this->modifiedColumns[] = SchoolPeer::TIME_ZONE_ID;
        }

        if ($this->aTimeZone !== null && $this->aTimeZone->getId() !== $v) {
            $this->aTimeZone = null;
        }


        return $this;
    } // setTimeZoneId()

    /**
     * Set the value of [contact_id] column.
     *
     * @param  int $v new value
     * @return School The current object (for fluent API support)
     */
    public function setContactId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->contact_id !== $v) {
            $this->contact_id = $v;
            $this->modifiedColumns[] = SchoolPeer::CONTACT_ID;
        }

        if ($this->aContact !== null && $this->aContact->getId() !== $v) {
            $this->aContact = null;
        }


        return $this;
    } // setContactId()

    /**
     * Set the value of [community_id] column.
     *
     * @param  int $v new value
     * @return School The current object (for fluent API support)
     */
    public function setCommunityId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->community_id !== $v) {
            $this->community_id = $v;
            $this->modifiedColumns[] = SchoolPeer::COMMUNITY_ID;
        }

        if ($this->aCommunity !== null && $this->aCommunity->getId() !== $v) {
            $this->aCommunity = null;
        }


        return $this;
    } // setCommunityId()

    /**
     * Set the value of [servicenumber] column.
     *
     * @param  string $v new value
     * @return School The current object (for fluent API support)
     */
    public function setServicenumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->servicenumber !== $v) {
            $this->servicenumber = $v;
            $this->modifiedColumns[] = SchoolPeer::SERVICENUMBER;
        }


        return $this;
    } // setServicenumber()

    /**
     * Set the value of [schoolname] column.
     *
     * @param  string $v new value
     * @return School The current object (for fluent API support)
     */
    public function setSchoolname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->schoolname !== $v) {
            $this->schoolname = $v;
            $this->modifiedColumns[] = SchoolPeer::SCHOOLNAME;
        }


        return $this;
    } // setSchoolname()

    /**
     * Set the value of [schoollogo] column.
     *
     * @param  string $v new value
     * @return School The current object (for fluent API support)
     */
    public function setSchoollogo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->schoollogo !== $v) {
            $this->schoollogo = $v;
            $this->modifiedColumns[] = SchoolPeer::SCHOOLLOGO;
        }


        return $this;
    } // setSchoollogo()

    /**
     * Set the value of [note] column.
     *
     * @param  string $v new value
     * @return School The current object (for fluent API support)
     */
    public function setNote($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->note !== $v) {
            $this->note = $v;
            $this->modifiedColumns[] = SchoolPeer::NOTE;
        }


        return $this;
    } // setNote()

    /**
     * Set the value of [city] column.
     *
     * @param  string $v new value
     * @return School The current object (for fluent API support)
     */
    public function setCity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->city !== $v) {
            $this->city = $v;
            $this->modifiedColumns[] = SchoolPeer::CITY;
        }


        return $this;
    } // setCity()

    /**
     * Set the value of [zipcode] column.
     *
     * @param  string $v new value
     * @return School The current object (for fluent API support)
     */
    public function setZipcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->zipcode !== $v) {
            $this->zipcode = $v;
            $this->modifiedColumns[] = SchoolPeer::ZIPCODE;
        }


        return $this;
    } // setZipcode()

    /**
     * Set the value of [website] column.
     *
     * @param  string $v new value
     * @return School The current object (for fluent API support)
     */
    public function setWebsite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->website !== $v) {
            $this->website = $v;
            $this->modifiedColumns[] = SchoolPeer::WEBSITE;
        }


        return $this;
    } // setWebsite()

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
            $this->user_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->sponsor_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->state_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->time_zone_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->contact_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->community_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->servicenumber = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->schoolname = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->schoollogo = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->note = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->city = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->zipcode = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->website = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = SchoolPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating School object", $e);
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

        if ($this->aUser !== null && $this->user_id !== $this->aUser->getId()) {
            $this->aUser = null;
        }
        if ($this->aSponsor !== null && $this->sponsor_id !== $this->aSponsor->getId()) {
            $this->aSponsor = null;
        }
        if ($this->aState !== null && $this->state_id !== $this->aState->getId()) {
            $this->aState = null;
        }
        if ($this->aTimeZone !== null && $this->time_zone_id !== $this->aTimeZone->getId()) {
            $this->aTimeZone = null;
        }
        if ($this->aContact !== null && $this->contact_id !== $this->aContact->getId()) {
            $this->aContact = null;
        }
        if ($this->aCommunity !== null && $this->community_id !== $this->aCommunity->getId()) {
            $this->aCommunity = null;
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
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SchoolPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUser = null;
            $this->aSponsor = null;
            $this->aState = null;
            $this->aTimeZone = null;
            $this->aContact = null;
            $this->aCommunity = null;
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
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SchoolQuery::create()
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
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SchoolPeer::addInstanceToPool($this);
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

            if ($this->aUser !== null) {
                if ($this->aUser->isModified() || $this->aUser->isNew()) {
                    $affectedRows += $this->aUser->save($con);
                }
                $this->setUser($this->aUser);
            }

            if ($this->aSponsor !== null) {
                if ($this->aSponsor->isModified() || $this->aSponsor->isNew()) {
                    $affectedRows += $this->aSponsor->save($con);
                }
                $this->setSponsor($this->aSponsor);
            }

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

            if ($this->aContact !== null) {
                if ($this->aContact->isModified() || $this->aContact->isNew()) {
                    $affectedRows += $this->aContact->save($con);
                }
                $this->setContact($this->aContact);
            }

            if ($this->aCommunity !== null) {
                if ($this->aCommunity->isModified() || $this->aCommunity->isNew()) {
                    $affectedRows += $this->aCommunity->save($con);
                }
                $this->setCommunity($this->aCommunity);
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

        $this->modifiedColumns[] = SchoolPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SchoolPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SchoolPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(SchoolPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(SchoolPeer::SPONSOR_ID)) {
            $modifiedColumns[':p' . $index++]  = '`sponsor_id`';
        }
        if ($this->isColumnModified(SchoolPeer::STATE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`state_id`';
        }
        if ($this->isColumnModified(SchoolPeer::TIME_ZONE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`time_zone_id`';
        }
        if ($this->isColumnModified(SchoolPeer::CONTACT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`contact_id`';
        }
        if ($this->isColumnModified(SchoolPeer::COMMUNITY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`community_id`';
        }
        if ($this->isColumnModified(SchoolPeer::SERVICENUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`serviceNumber`';
        }
        if ($this->isColumnModified(SchoolPeer::SCHOOLNAME)) {
            $modifiedColumns[':p' . $index++]  = '`schoolName`';
        }
        if ($this->isColumnModified(SchoolPeer::SCHOOLLOGO)) {
            $modifiedColumns[':p' . $index++]  = '`schoolLogo`';
        }
        if ($this->isColumnModified(SchoolPeer::NOTE)) {
            $modifiedColumns[':p' . $index++]  = '`note`';
        }
        if ($this->isColumnModified(SchoolPeer::CITY)) {
            $modifiedColumns[':p' . $index++]  = '`city`';
        }
        if ($this->isColumnModified(SchoolPeer::ZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = '`zipcode`';
        }
        if ($this->isColumnModified(SchoolPeer::WEBSITE)) {
            $modifiedColumns[':p' . $index++]  = '`website`';
        }

        $sql = sprintf(
            'INSERT INTO `schools` (%s) VALUES (%s)',
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
                    case '`user_id`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case '`sponsor_id`':
                        $stmt->bindValue($identifier, $this->sponsor_id, PDO::PARAM_INT);
                        break;
                    case '`state_id`':
                        $stmt->bindValue($identifier, $this->state_id, PDO::PARAM_INT);
                        break;
                    case '`time_zone_id`':
                        $stmt->bindValue($identifier, $this->time_zone_id, PDO::PARAM_INT);
                        break;
                    case '`contact_id`':
                        $stmt->bindValue($identifier, $this->contact_id, PDO::PARAM_INT);
                        break;
                    case '`community_id`':
                        $stmt->bindValue($identifier, $this->community_id, PDO::PARAM_INT);
                        break;
                    case '`serviceNumber`':
                        $stmt->bindValue($identifier, $this->servicenumber, PDO::PARAM_STR);
                        break;
                    case '`schoolName`':
                        $stmt->bindValue($identifier, $this->schoolname, PDO::PARAM_STR);
                        break;
                    case '`schoolLogo`':
                        $stmt->bindValue($identifier, $this->schoollogo, PDO::PARAM_STR);
                        break;
                    case '`note`':
                        $stmt->bindValue($identifier, $this->note, PDO::PARAM_STR);
                        break;
                    case '`city`':
                        $stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
                        break;
                    case '`zipcode`':
                        $stmt->bindValue($identifier, $this->zipcode, PDO::PARAM_STR);
                        break;
                    case '`website`':
                        $stmt->bindValue($identifier, $this->website, PDO::PARAM_STR);
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

            if ($this->aUser !== null) {
                if (!$this->aUser->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
                }
            }

            if ($this->aSponsor !== null) {
                if (!$this->aSponsor->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSponsor->getValidationFailures());
                }
            }

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

            if ($this->aContact !== null) {
                if (!$this->aContact->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aContact->getValidationFailures());
                }
            }

            if ($this->aCommunity !== null) {
                if (!$this->aCommunity->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommunity->getValidationFailures());
                }
            }


            if (($retval = SchoolPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = SchoolPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUserId();
                break;
            case 2:
                return $this->getSponsorId();
                break;
            case 3:
                return $this->getStateId();
                break;
            case 4:
                return $this->getTimeZoneId();
                break;
            case 5:
                return $this->getContactId();
                break;
            case 6:
                return $this->getCommunityId();
                break;
            case 7:
                return $this->getServicenumber();
                break;
            case 8:
                return $this->getSchoolname();
                break;
            case 9:
                return $this->getSchoollogo();
                break;
            case 10:
                return $this->getNote();
                break;
            case 11:
                return $this->getCity();
                break;
            case 12:
                return $this->getZipcode();
                break;
            case 13:
                return $this->getWebsite();
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
        if (isset($alreadyDumpedObjects['School'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['School'][$this->getPrimaryKey()] = true;
        $keys = SchoolPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getUserId(),
            $keys[2] => $this->getSponsorId(),
            $keys[3] => $this->getStateId(),
            $keys[4] => $this->getTimeZoneId(),
            $keys[5] => $this->getContactId(),
            $keys[6] => $this->getCommunityId(),
            $keys[7] => $this->getServicenumber(),
            $keys[8] => $this->getSchoolname(),
            $keys[9] => $this->getSchoollogo(),
            $keys[10] => $this->getNote(),
            $keys[11] => $this->getCity(),
            $keys[12] => $this->getZipcode(),
            $keys[13] => $this->getWebsite(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aUser) {
                $result['User'] = $this->aUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSponsor) {
                $result['Sponsor'] = $this->aSponsor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aState) {
                $result['State'] = $this->aState->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTimeZone) {
                $result['TimeZone'] = $this->aTimeZone->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aContact) {
                $result['Contact'] = $this->aContact->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommunity) {
                $result['Community'] = $this->aCommunity->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = SchoolPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setUserId($value);
                break;
            case 2:
                $this->setSponsorId($value);
                break;
            case 3:
                $this->setStateId($value);
                break;
            case 4:
                $this->setTimeZoneId($value);
                break;
            case 5:
                $this->setContactId($value);
                break;
            case 6:
                $this->setCommunityId($value);
                break;
            case 7:
                $this->setServicenumber($value);
                break;
            case 8:
                $this->setSchoolname($value);
                break;
            case 9:
                $this->setSchoollogo($value);
                break;
            case 10:
                $this->setNote($value);
                break;
            case 11:
                $this->setCity($value);
                break;
            case 12:
                $this->setZipcode($value);
                break;
            case 13:
                $this->setWebsite($value);
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
        $keys = SchoolPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSponsorId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setStateId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTimeZoneId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setContactId($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCommunityId($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setServicenumber($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSchoolname($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSchoollogo($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setNote($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCity($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setZipcode($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setWebsite($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SchoolPeer::DATABASE_NAME);

        if ($this->isColumnModified(SchoolPeer::ID)) $criteria->add(SchoolPeer::ID, $this->id);
        if ($this->isColumnModified(SchoolPeer::USER_ID)) $criteria->add(SchoolPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(SchoolPeer::SPONSOR_ID)) $criteria->add(SchoolPeer::SPONSOR_ID, $this->sponsor_id);
        if ($this->isColumnModified(SchoolPeer::STATE_ID)) $criteria->add(SchoolPeer::STATE_ID, $this->state_id);
        if ($this->isColumnModified(SchoolPeer::TIME_ZONE_ID)) $criteria->add(SchoolPeer::TIME_ZONE_ID, $this->time_zone_id);
        if ($this->isColumnModified(SchoolPeer::CONTACT_ID)) $criteria->add(SchoolPeer::CONTACT_ID, $this->contact_id);
        if ($this->isColumnModified(SchoolPeer::COMMUNITY_ID)) $criteria->add(SchoolPeer::COMMUNITY_ID, $this->community_id);
        if ($this->isColumnModified(SchoolPeer::SERVICENUMBER)) $criteria->add(SchoolPeer::SERVICENUMBER, $this->servicenumber);
        if ($this->isColumnModified(SchoolPeer::SCHOOLNAME)) $criteria->add(SchoolPeer::SCHOOLNAME, $this->schoolname);
        if ($this->isColumnModified(SchoolPeer::SCHOOLLOGO)) $criteria->add(SchoolPeer::SCHOOLLOGO, $this->schoollogo);
        if ($this->isColumnModified(SchoolPeer::NOTE)) $criteria->add(SchoolPeer::NOTE, $this->note);
        if ($this->isColumnModified(SchoolPeer::CITY)) $criteria->add(SchoolPeer::CITY, $this->city);
        if ($this->isColumnModified(SchoolPeer::ZIPCODE)) $criteria->add(SchoolPeer::ZIPCODE, $this->zipcode);
        if ($this->isColumnModified(SchoolPeer::WEBSITE)) $criteria->add(SchoolPeer::WEBSITE, $this->website);

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
        $criteria = new Criteria(SchoolPeer::DATABASE_NAME);
        $criteria->add(SchoolPeer::ID, $this->id);

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
     * @param object $copyObj An object of School (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUserId($this->getUserId());
        $copyObj->setSponsorId($this->getSponsorId());
        $copyObj->setStateId($this->getStateId());
        $copyObj->setTimeZoneId($this->getTimeZoneId());
        $copyObj->setContactId($this->getContactId());
        $copyObj->setCommunityId($this->getCommunityId());
        $copyObj->setServicenumber($this->getServicenumber());
        $copyObj->setSchoolname($this->getSchoolname());
        $copyObj->setSchoollogo($this->getSchoollogo());
        $copyObj->setNote($this->getNote());
        $copyObj->setCity($this->getCity());
        $copyObj->setZipcode($this->getZipcode());
        $copyObj->setWebsite($this->getWebsite());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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
     * @return School Clone of current object.
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
     * @return SchoolPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SchoolPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a User object.
     *
     * @param                  User $v
     * @return School The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUser(User $v = null)
    {
        if ($v === null) {
            $this->setUserId(NULL);
        } else {
            $this->setUserId($v->getId());
        }

        $this->aUser = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the User object, it will not be re-added.
        if ($v !== null) {
            $v->addSchool($this);
        }


        return $this;
    }


    /**
     * Get the associated User object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return User The associated User object.
     * @throws PropelException
     */
    public function getUser(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUser === null && ($this->user_id !== null) && $doQuery) {
            $this->aUser = UserQuery::create()->findPk($this->user_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUser->addSchools($this);
             */
        }

        return $this->aUser;
    }

    /**
     * Declares an association between this object and a Sponsor object.
     *
     * @param                  Sponsor $v
     * @return School The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSponsor(Sponsor $v = null)
    {
        if ($v === null) {
            $this->setSponsorId(NULL);
        } else {
            $this->setSponsorId($v->getId());
        }

        $this->aSponsor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Sponsor object, it will not be re-added.
        if ($v !== null) {
            $v->addSchool($this);
        }


        return $this;
    }


    /**
     * Get the associated Sponsor object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Sponsor The associated Sponsor object.
     * @throws PropelException
     */
    public function getSponsor(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSponsor === null && ($this->sponsor_id !== null) && $doQuery) {
            $this->aSponsor = SponsorQuery::create()->findPk($this->sponsor_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSponsor->addSchools($this);
             */
        }

        return $this->aSponsor;
    }

    /**
     * Declares an association between this object and a State object.
     *
     * @param                  State $v
     * @return School The current object (for fluent API support)
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
            $v->addSchool($this);
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
                $this->aState->addSchools($this);
             */
        }

        return $this->aState;
    }

    /**
     * Declares an association between this object and a TimeZone object.
     *
     * @param                  TimeZone $v
     * @return School The current object (for fluent API support)
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
            $v->addSchool($this);
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
                $this->aTimeZone->addSchools($this);
             */
        }

        return $this->aTimeZone;
    }

    /**
     * Declares an association between this object and a Contact object.
     *
     * @param                  Contact $v
     * @return School The current object (for fluent API support)
     * @throws PropelException
     */
    public function setContact(Contact $v = null)
    {
        if ($v === null) {
            $this->setContactId(NULL);
        } else {
            $this->setContactId($v->getId());
        }

        $this->aContact = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Contact object, it will not be re-added.
        if ($v !== null) {
            $v->addSchool($this);
        }


        return $this;
    }


    /**
     * Get the associated Contact object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Contact The associated Contact object.
     * @throws PropelException
     */
    public function getContact(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aContact === null && ($this->contact_id !== null) && $doQuery) {
            $this->aContact = ContactQuery::create()->findPk($this->contact_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aContact->addSchools($this);
             */
        }

        return $this->aContact;
    }

    /**
     * Declares an association between this object and a Community object.
     *
     * @param                  Community $v
     * @return School The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommunity(Community $v = null)
    {
        if ($v === null) {
            $this->setCommunityId(NULL);
        } else {
            $this->setCommunityId($v->getId());
        }

        $this->aCommunity = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Community object, it will not be re-added.
        if ($v !== null) {
            $v->addSchool($this);
        }


        return $this;
    }


    /**
     * Get the associated Community object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Community The associated Community object.
     * @throws PropelException
     */
    public function getCommunity(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommunity === null && ($this->community_id !== null) && $doQuery) {
            $this->aCommunity = CommunityQuery::create()->findPk($this->community_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommunity->addSchools($this);
             */
        }

        return $this->aCommunity;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->user_id = null;
        $this->sponsor_id = null;
        $this->state_id = null;
        $this->time_zone_id = null;
        $this->contact_id = null;
        $this->community_id = null;
        $this->servicenumber = null;
        $this->schoolname = null;
        $this->schoollogo = null;
        $this->note = null;
        $this->city = null;
        $this->zipcode = null;
        $this->website = null;
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
            if ($this->aUser instanceof Persistent) {
              $this->aUser->clearAllReferences($deep);
            }
            if ($this->aSponsor instanceof Persistent) {
              $this->aSponsor->clearAllReferences($deep);
            }
            if ($this->aState instanceof Persistent) {
              $this->aState->clearAllReferences($deep);
            }
            if ($this->aTimeZone instanceof Persistent) {
              $this->aTimeZone->clearAllReferences($deep);
            }
            if ($this->aContact instanceof Persistent) {
              $this->aContact->clearAllReferences($deep);
            }
            if ($this->aCommunity instanceof Persistent) {
              $this->aCommunity->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aUser = null;
        $this->aSponsor = null;
        $this->aState = null;
        $this->aTimeZone = null;
        $this->aContact = null;
        $this->aCommunity = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SchoolPeer::DEFAULT_STRING_FORMAT);
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
