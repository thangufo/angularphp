<?php


/**
 * Base class that represents a row from the 'sponsors' table.
 *
 *
 *
 * @package    propel.generator.beaconnow_app.om
 */
abstract class BaseSponsor extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SponsorPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SponsorPeer
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
     * The value for the contact_id field.
     * @var        int
     */
    protected $contact_id;

    /**
     * The value for the state_id field.
     * @var        int
     */
    protected $state_id;

    /**
     * The value for the sponsorlogo field.
     * @var        string
     */
    protected $sponsorlogo;

    /**
     * The value for the sponsorname field.
     * @var        string
     */
    protected $sponsorname;

    /**
     * The value for the sponsormessage field.
     * @var        string
     */
    protected $sponsormessage;

    /**
     * The value for the sponsortextmessage field.
     * @var        string
     */
    protected $sponsortextmessage;

    /**
     * The value for the maketingcontact field.
     * @var        string
     */
    protected $maketingcontact;

    /**
     * The value for the maketingphone field.
     * @var        string
     */
    protected $maketingphone;

    /**
     * The value for the maketingemail field.
     * @var        string
     */
    protected $maketingemail;

    /**
     * The value for the website field.
     * @var        string
     */
    protected $website;

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
     * The value for the created field.
     * @var        string
     */
    protected $created;

    /**
     * The value for the modified field.
     * @var        string
     */
    protected $modified;

    /**
     * @var        Contact
     */
    protected $aContact;

    /**
     * @var        State
     */
    protected $aState;

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
     * Get the [contact_id] column value.
     *
     * @return int
     */
    public function getContactId()
    {

        return $this->contact_id;
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
     * Get the [sponsorlogo] column value.
     *
     * @return string
     */
    public function getSponsorlogo()
    {

        return $this->sponsorlogo;
    }

    /**
     * Get the [sponsorname] column value.
     *
     * @return string
     */
    public function getSponsorname()
    {

        return $this->sponsorname;
    }

    /**
     * Get the [sponsormessage] column value.
     *
     * @return string
     */
    public function getSponsormessage()
    {

        return $this->sponsormessage;
    }

    /**
     * Get the [sponsortextmessage] column value.
     *
     * @return string
     */
    public function getSponsortextmessage()
    {

        return $this->sponsortextmessage;
    }

    /**
     * Get the [maketingcontact] column value.
     *
     * @return string
     */
    public function getMaketingcontact()
    {

        return $this->maketingcontact;
    }

    /**
     * Get the [maketingphone] column value.
     *
     * @return string
     */
    public function getMaketingphone()
    {

        return $this->maketingphone;
    }

    /**
     * Get the [maketingemail] column value.
     *
     * @return string
     */
    public function getMaketingemail()
    {

        return $this->maketingemail;
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
     * Get the [created] column value.
     *
     * @return string
     */
    public function getCreated()
    {

        return $this->created;
    }

    /**
     * Get the [modified] column value.
     *
     * @return string
     */
    public function getModified()
    {

        return $this->modified;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = SponsorPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [contact_id] column.
     *
     * @param  int $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setContactId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->contact_id !== $v) {
            $this->contact_id = $v;
            $this->modifiedColumns[] = SponsorPeer::CONTACT_ID;
        }

        if ($this->aContact !== null && $this->aContact->getId() !== $v) {
            $this->aContact = null;
        }


        return $this;
    } // setContactId()

    /**
     * Set the value of [state_id] column.
     *
     * @param  int $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setStateId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->state_id !== $v) {
            $this->state_id = $v;
            $this->modifiedColumns[] = SponsorPeer::STATE_ID;
        }

        if ($this->aState !== null && $this->aState->getId() !== $v) {
            $this->aState = null;
        }


        return $this;
    } // setStateId()

    /**
     * Set the value of [sponsorlogo] column.
     *
     * @param  string $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setSponsorlogo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sponsorlogo !== $v) {
            $this->sponsorlogo = $v;
            $this->modifiedColumns[] = SponsorPeer::SPONSORLOGO;
        }


        return $this;
    } // setSponsorlogo()

    /**
     * Set the value of [sponsorname] column.
     *
     * @param  string $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setSponsorname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sponsorname !== $v) {
            $this->sponsorname = $v;
            $this->modifiedColumns[] = SponsorPeer::SPONSORNAME;
        }


        return $this;
    } // setSponsorname()

    /**
     * Set the value of [sponsormessage] column.
     *
     * @param  string $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setSponsormessage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sponsormessage !== $v) {
            $this->sponsormessage = $v;
            $this->modifiedColumns[] = SponsorPeer::SPONSORMESSAGE;
        }


        return $this;
    } // setSponsormessage()

    /**
     * Set the value of [sponsortextmessage] column.
     *
     * @param  string $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setSponsortextmessage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sponsortextmessage !== $v) {
            $this->sponsortextmessage = $v;
            $this->modifiedColumns[] = SponsorPeer::SPONSORTEXTMESSAGE;
        }


        return $this;
    } // setSponsortextmessage()

    /**
     * Set the value of [maketingcontact] column.
     *
     * @param  string $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setMaketingcontact($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->maketingcontact !== $v) {
            $this->maketingcontact = $v;
            $this->modifiedColumns[] = SponsorPeer::MAKETINGCONTACT;
        }


        return $this;
    } // setMaketingcontact()

    /**
     * Set the value of [maketingphone] column.
     *
     * @param  string $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setMaketingphone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->maketingphone !== $v) {
            $this->maketingphone = $v;
            $this->modifiedColumns[] = SponsorPeer::MAKETINGPHONE;
        }


        return $this;
    } // setMaketingphone()

    /**
     * Set the value of [maketingemail] column.
     *
     * @param  string $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setMaketingemail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->maketingemail !== $v) {
            $this->maketingemail = $v;
            $this->modifiedColumns[] = SponsorPeer::MAKETINGEMAIL;
        }


        return $this;
    } // setMaketingemail()

    /**
     * Set the value of [website] column.
     *
     * @param  string $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setWebsite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->website !== $v) {
            $this->website = $v;
            $this->modifiedColumns[] = SponsorPeer::WEBSITE;
        }


        return $this;
    } // setWebsite()

    /**
     * Set the value of [note] column.
     *
     * @param  string $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setNote($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->note !== $v) {
            $this->note = $v;
            $this->modifiedColumns[] = SponsorPeer::NOTE;
        }


        return $this;
    } // setNote()

    /**
     * Set the value of [city] column.
     *
     * @param  string $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setCity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->city !== $v) {
            $this->city = $v;
            $this->modifiedColumns[] = SponsorPeer::CITY;
        }


        return $this;
    } // setCity()

    /**
     * Set the value of [zipcode] column.
     *
     * @param  string $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setZipcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->zipcode !== $v) {
            $this->zipcode = $v;
            $this->modifiedColumns[] = SponsorPeer::ZIPCODE;
        }


        return $this;
    } // setZipcode()

    /**
     * Set the value of [created] column.
     *
     * @param  string $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setCreated($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->created !== $v) {
            $this->created = $v;
            $this->modifiedColumns[] = SponsorPeer::CREATED;
        }


        return $this;
    } // setCreated()

    /**
     * Set the value of [modified] column.
     *
     * @param  string $v new value
     * @return Sponsor The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = SponsorPeer::MODIFIED;
        }


        return $this;
    } // setModified()

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
            $this->contact_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->state_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->sponsorlogo = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->sponsorname = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->sponsormessage = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->sponsortextmessage = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->maketingcontact = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->maketingphone = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->maketingemail = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->website = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->note = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->city = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->zipcode = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->created = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->modified = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 16; // 16 = SponsorPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Sponsor object", $e);
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

        if ($this->aContact !== null && $this->contact_id !== $this->aContact->getId()) {
            $this->aContact = null;
        }
        if ($this->aState !== null && $this->state_id !== $this->aState->getId()) {
            $this->aState = null;
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
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SponsorPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aContact = null;
            $this->aState = null;
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
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SponsorQuery::create()
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
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SponsorPeer::addInstanceToPool($this);
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

            if ($this->aContact !== null) {
                if ($this->aContact->isModified() || $this->aContact->isNew()) {
                    $affectedRows += $this->aContact->save($con);
                }
                $this->setContact($this->aContact);
            }

            if ($this->aState !== null) {
                if ($this->aState->isModified() || $this->aState->isNew()) {
                    $affectedRows += $this->aState->save($con);
                }
                $this->setState($this->aState);
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

        $this->modifiedColumns[] = SponsorPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SponsorPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SponsorPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(SponsorPeer::CONTACT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`contact_id`';
        }
        if ($this->isColumnModified(SponsorPeer::STATE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`state_id`';
        }
        if ($this->isColumnModified(SponsorPeer::SPONSORLOGO)) {
            $modifiedColumns[':p' . $index++]  = '`sponsorLogo`';
        }
        if ($this->isColumnModified(SponsorPeer::SPONSORNAME)) {
            $modifiedColumns[':p' . $index++]  = '`sponsorName`';
        }
        if ($this->isColumnModified(SponsorPeer::SPONSORMESSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`sponsorMessage`';
        }
        if ($this->isColumnModified(SponsorPeer::SPONSORTEXTMESSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`sponsorTextMessage`';
        }
        if ($this->isColumnModified(SponsorPeer::MAKETINGCONTACT)) {
            $modifiedColumns[':p' . $index++]  = '`maketingContact`';
        }
        if ($this->isColumnModified(SponsorPeer::MAKETINGPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`maketingPhone`';
        }
        if ($this->isColumnModified(SponsorPeer::MAKETINGEMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`maketingEmail`';
        }
        if ($this->isColumnModified(SponsorPeer::WEBSITE)) {
            $modifiedColumns[':p' . $index++]  = '`website`';
        }
        if ($this->isColumnModified(SponsorPeer::NOTE)) {
            $modifiedColumns[':p' . $index++]  = '`note`';
        }
        if ($this->isColumnModified(SponsorPeer::CITY)) {
            $modifiedColumns[':p' . $index++]  = '`city`';
        }
        if ($this->isColumnModified(SponsorPeer::ZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = '`zipcode`';
        }
        if ($this->isColumnModified(SponsorPeer::CREATED)) {
            $modifiedColumns[':p' . $index++]  = '`created`';
        }
        if ($this->isColumnModified(SponsorPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`modified`';
        }

        $sql = sprintf(
            'INSERT INTO `sponsors` (%s) VALUES (%s)',
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
                    case '`contact_id`':
                        $stmt->bindValue($identifier, $this->contact_id, PDO::PARAM_INT);
                        break;
                    case '`state_id`':
                        $stmt->bindValue($identifier, $this->state_id, PDO::PARAM_INT);
                        break;
                    case '`sponsorLogo`':
                        $stmt->bindValue($identifier, $this->sponsorlogo, PDO::PARAM_STR);
                        break;
                    case '`sponsorName`':
                        $stmt->bindValue($identifier, $this->sponsorname, PDO::PARAM_STR);
                        break;
                    case '`sponsorMessage`':
                        $stmt->bindValue($identifier, $this->sponsormessage, PDO::PARAM_STR);
                        break;
                    case '`sponsorTextMessage`':
                        $stmt->bindValue($identifier, $this->sponsortextmessage, PDO::PARAM_STR);
                        break;
                    case '`maketingContact`':
                        $stmt->bindValue($identifier, $this->maketingcontact, PDO::PARAM_STR);
                        break;
                    case '`maketingPhone`':
                        $stmt->bindValue($identifier, $this->maketingphone, PDO::PARAM_STR);
                        break;
                    case '`maketingEmail`':
                        $stmt->bindValue($identifier, $this->maketingemail, PDO::PARAM_STR);
                        break;
                    case '`website`':
                        $stmt->bindValue($identifier, $this->website, PDO::PARAM_STR);
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
                    case '`created`':
                        $stmt->bindValue($identifier, $this->created, PDO::PARAM_STR);
                        break;
                    case '`modified`':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_STR);
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

            if ($this->aContact !== null) {
                if (!$this->aContact->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aContact->getValidationFailures());
                }
            }

            if ($this->aState !== null) {
                if (!$this->aState->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aState->getValidationFailures());
                }
            }


            if (($retval = SponsorPeer::doValidate($this, $columns)) !== true) {
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
        $pos = SponsorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getContactId();
                break;
            case 2:
                return $this->getStateId();
                break;
            case 3:
                return $this->getSponsorlogo();
                break;
            case 4:
                return $this->getSponsorname();
                break;
            case 5:
                return $this->getSponsormessage();
                break;
            case 6:
                return $this->getSponsortextmessage();
                break;
            case 7:
                return $this->getMaketingcontact();
                break;
            case 8:
                return $this->getMaketingphone();
                break;
            case 9:
                return $this->getMaketingemail();
                break;
            case 10:
                return $this->getWebsite();
                break;
            case 11:
                return $this->getNote();
                break;
            case 12:
                return $this->getCity();
                break;
            case 13:
                return $this->getZipcode();
                break;
            case 14:
                return $this->getCreated();
                break;
            case 15:
                return $this->getModified();
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
        if (isset($alreadyDumpedObjects['Sponsor'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Sponsor'][$this->getPrimaryKey()] = true;
        $keys = SponsorPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getContactId(),
            $keys[2] => $this->getStateId(),
            $keys[3] => $this->getSponsorlogo(),
            $keys[4] => $this->getSponsorname(),
            $keys[5] => $this->getSponsormessage(),
            $keys[6] => $this->getSponsortextmessage(),
            $keys[7] => $this->getMaketingcontact(),
            $keys[8] => $this->getMaketingphone(),
            $keys[9] => $this->getMaketingemail(),
            $keys[10] => $this->getWebsite(),
            $keys[11] => $this->getNote(),
            $keys[12] => $this->getCity(),
            $keys[13] => $this->getZipcode(),
            $keys[14] => $this->getCreated(),
            $keys[15] => $this->getModified(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aContact) {
                $result['Contact'] = $this->aContact->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aState) {
                $result['State'] = $this->aState->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = SponsorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setContactId($value);
                break;
            case 2:
                $this->setStateId($value);
                break;
            case 3:
                $this->setSponsorlogo($value);
                break;
            case 4:
                $this->setSponsorname($value);
                break;
            case 5:
                $this->setSponsormessage($value);
                break;
            case 6:
                $this->setSponsortextmessage($value);
                break;
            case 7:
                $this->setMaketingcontact($value);
                break;
            case 8:
                $this->setMaketingphone($value);
                break;
            case 9:
                $this->setMaketingemail($value);
                break;
            case 10:
                $this->setWebsite($value);
                break;
            case 11:
                $this->setNote($value);
                break;
            case 12:
                $this->setCity($value);
                break;
            case 13:
                $this->setZipcode($value);
                break;
            case 14:
                $this->setCreated($value);
                break;
            case 15:
                $this->setModified($value);
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
        $keys = SponsorPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setContactId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStateId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSponsorlogo($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSponsorname($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSponsormessage($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSponsortextmessage($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMaketingcontact($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMaketingphone($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMaketingemail($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setWebsite($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNote($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCity($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setZipcode($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCreated($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setModified($arr[$keys[15]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SponsorPeer::DATABASE_NAME);

        if ($this->isColumnModified(SponsorPeer::ID)) $criteria->add(SponsorPeer::ID, $this->id);
        if ($this->isColumnModified(SponsorPeer::CONTACT_ID)) $criteria->add(SponsorPeer::CONTACT_ID, $this->contact_id);
        if ($this->isColumnModified(SponsorPeer::STATE_ID)) $criteria->add(SponsorPeer::STATE_ID, $this->state_id);
        if ($this->isColumnModified(SponsorPeer::SPONSORLOGO)) $criteria->add(SponsorPeer::SPONSORLOGO, $this->sponsorlogo);
        if ($this->isColumnModified(SponsorPeer::SPONSORNAME)) $criteria->add(SponsorPeer::SPONSORNAME, $this->sponsorname);
        if ($this->isColumnModified(SponsorPeer::SPONSORMESSAGE)) $criteria->add(SponsorPeer::SPONSORMESSAGE, $this->sponsormessage);
        if ($this->isColumnModified(SponsorPeer::SPONSORTEXTMESSAGE)) $criteria->add(SponsorPeer::SPONSORTEXTMESSAGE, $this->sponsortextmessage);
        if ($this->isColumnModified(SponsorPeer::MAKETINGCONTACT)) $criteria->add(SponsorPeer::MAKETINGCONTACT, $this->maketingcontact);
        if ($this->isColumnModified(SponsorPeer::MAKETINGPHONE)) $criteria->add(SponsorPeer::MAKETINGPHONE, $this->maketingphone);
        if ($this->isColumnModified(SponsorPeer::MAKETINGEMAIL)) $criteria->add(SponsorPeer::MAKETINGEMAIL, $this->maketingemail);
        if ($this->isColumnModified(SponsorPeer::WEBSITE)) $criteria->add(SponsorPeer::WEBSITE, $this->website);
        if ($this->isColumnModified(SponsorPeer::NOTE)) $criteria->add(SponsorPeer::NOTE, $this->note);
        if ($this->isColumnModified(SponsorPeer::CITY)) $criteria->add(SponsorPeer::CITY, $this->city);
        if ($this->isColumnModified(SponsorPeer::ZIPCODE)) $criteria->add(SponsorPeer::ZIPCODE, $this->zipcode);
        if ($this->isColumnModified(SponsorPeer::CREATED)) $criteria->add(SponsorPeer::CREATED, $this->created);
        if ($this->isColumnModified(SponsorPeer::MODIFIED)) $criteria->add(SponsorPeer::MODIFIED, $this->modified);

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
        $criteria = new Criteria(SponsorPeer::DATABASE_NAME);
        $criteria->add(SponsorPeer::ID, $this->id);

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
     * @param object $copyObj An object of Sponsor (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setContactId($this->getContactId());
        $copyObj->setStateId($this->getStateId());
        $copyObj->setSponsorlogo($this->getSponsorlogo());
        $copyObj->setSponsorname($this->getSponsorname());
        $copyObj->setSponsormessage($this->getSponsormessage());
        $copyObj->setSponsortextmessage($this->getSponsortextmessage());
        $copyObj->setMaketingcontact($this->getMaketingcontact());
        $copyObj->setMaketingphone($this->getMaketingphone());
        $copyObj->setMaketingemail($this->getMaketingemail());
        $copyObj->setWebsite($this->getWebsite());
        $copyObj->setNote($this->getNote());
        $copyObj->setCity($this->getCity());
        $copyObj->setZipcode($this->getZipcode());
        $copyObj->setCreated($this->getCreated());
        $copyObj->setModified($this->getModified());

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
     * @return Sponsor Clone of current object.
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
     * @return SponsorPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SponsorPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Contact object.
     *
     * @param                  Contact $v
     * @return Sponsor The current object (for fluent API support)
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
            $v->addSponsor($this);
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
                $this->aContact->addSponsors($this);
             */
        }

        return $this->aContact;
    }

    /**
     * Declares an association between this object and a State object.
     *
     * @param                  State $v
     * @return Sponsor The current object (for fluent API support)
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
            $v->addSponsor($this);
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
                $this->aState->addSponsors($this);
             */
        }

        return $this->aState;
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
     * @return Sponsor The current object (for fluent API support)
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
     * If this Sponsor is new, it will return
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
                    ->filterBySponsor($this)
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
     * @return Sponsor The current object (for fluent API support)
     */
    public function setSchools(PropelCollection $schools, PropelPDO $con = null)
    {
        $schoolsToDelete = $this->getSchools(new Criteria(), $con)->diff($schools);


        $this->schoolsScheduledForDeletion = $schoolsToDelete;

        foreach ($schoolsToDelete as $schoolRemoved) {
            $schoolRemoved->setSponsor(null);
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
                ->filterBySponsor($this)
                ->count($con);
        }

        return count($this->collSchools);
    }

    /**
     * Method called to associate a School object to this object
     * through the School foreign key attribute.
     *
     * @param    School $l School
     * @return Sponsor The current object (for fluent API support)
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
        $school->setSponsor($this);
    }

    /**
     * @param	School $school The school object to remove.
     * @return Sponsor The current object (for fluent API support)
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
            $school->setSponsor(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sponsor is new, it will return
     * an empty collection; or if this Sponsor has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sponsor.
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
     * Otherwise if this Sponsor is new, it will return
     * an empty collection; or if this Sponsor has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sponsor.
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
     * Otherwise if this Sponsor is new, it will return
     * an empty collection; or if this Sponsor has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sponsor.
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
     * Otherwise if this Sponsor is new, it will return
     * an empty collection; or if this Sponsor has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sponsor.
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
     * Otherwise if this Sponsor is new, it will return
     * an empty collection; or if this Sponsor has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sponsor.
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
        $this->contact_id = null;
        $this->state_id = null;
        $this->sponsorlogo = null;
        $this->sponsorname = null;
        $this->sponsormessage = null;
        $this->sponsortextmessage = null;
        $this->maketingcontact = null;
        $this->maketingphone = null;
        $this->maketingemail = null;
        $this->website = null;
        $this->note = null;
        $this->city = null;
        $this->zipcode = null;
        $this->created = null;
        $this->modified = null;
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
            if ($this->aContact instanceof Persistent) {
              $this->aContact->clearAllReferences($deep);
            }
            if ($this->aState instanceof Persistent) {
              $this->aState->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collSchools instanceof PropelCollection) {
            $this->collSchools->clearIterator();
        }
        $this->collSchools = null;
        $this->aContact = null;
        $this->aState = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SponsorPeer::DEFAULT_STRING_FORMAT);
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
