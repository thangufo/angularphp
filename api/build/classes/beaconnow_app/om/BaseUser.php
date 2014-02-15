<?php


/**
 * Base class that represents a row from the 'users' table.
 *
 *
 *
 * @package    propel.generator.beaconnow_app.om
 */
abstract class BaseUser extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'UserPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        UserPeer
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
     * The value for the first_name field.
     * @var        string
     */
    protected $first_name;

    /**
     * The value for the last_name field.
     * @var        string
     */
    protected $last_name;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the password field.
     * @var        string
     */
    protected $password;

    /**
     * The value for the permissions field.
     * @var        string
     */
    protected $permissions;

    /**
     * The value for the last_login field.
     * @var        string
     */
    protected $last_login;

    /**
     * The value for the activation_code field.
     * @var        string
     */
    protected $activation_code;

    /**
     * The value for the activated_at field.
     * @var        string
     */
    protected $activated_at;

    /**
     * The value for the persist_code field.
     * @var        string
     */
    protected $persist_code;

    /**
     * The value for the reset_password_code field.
     * @var        string
     */
    protected $reset_password_code;

    /**
     * The value for the created_at field.
     * @var        string
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     * @var        string
     */
    protected $updated_at;

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
     * Get the [first_name] column value.
     *
     * @return string
     */
    public function getFirstName()
    {

        return $this->first_name;
    }

    /**
     * Get the [last_name] column value.
     *
     * @return string
     */
    public function getLastName()
    {

        return $this->last_name;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [password] column value.
     *
     * @return string
     */
    public function getPassword()
    {

        return $this->password;
    }

    /**
     * Get the [permissions] column value.
     *
     * @return string
     */
    public function getPermissions()
    {

        return $this->permissions;
    }

    /**
     * Get the [last_login] column value.
     *
     * @return string
     */
    public function getLastLogin()
    {

        return $this->last_login;
    }

    /**
     * Get the [activation_code] column value.
     *
     * @return string
     */
    public function getActivationCode()
    {

        return $this->activation_code;
    }

    /**
     * Get the [activated_at] column value.
     *
     * @return string
     */
    public function getActivatedAt()
    {

        return $this->activated_at;
    }

    /**
     * Get the [persist_code] column value.
     *
     * @return string
     */
    public function getPersistCode()
    {

        return $this->persist_code;
    }

    /**
     * Get the [reset_password_code] column value.
     *
     * @return string
     */
    public function getResetPasswordCode()
    {

        return $this->reset_password_code;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->created_at === null) {
            return null;
        }

        if ($this->created_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->created_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUpdatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->updated_at === null) {
            return null;
        }

        if ($this->updated_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->updated_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return User The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = UserPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [first_name] column.
     *
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setFirstName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->first_name !== $v) {
            $this->first_name = $v;
            $this->modifiedColumns[] = UserPeer::FIRST_NAME;
        }


        return $this;
    } // setFirstName()

    /**
     * Set the value of [last_name] column.
     *
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setLastName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->last_name !== $v) {
            $this->last_name = $v;
            $this->modifiedColumns[] = UserPeer::LAST_NAME;
        }


        return $this;
    } // setLastName()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = UserPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [password] column.
     *
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setPassword($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->password !== $v) {
            $this->password = $v;
            $this->modifiedColumns[] = UserPeer::PASSWORD;
        }


        return $this;
    } // setPassword()

    /**
     * Set the value of [permissions] column.
     *
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setPermissions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->permissions !== $v) {
            $this->permissions = $v;
            $this->modifiedColumns[] = UserPeer::PERMISSIONS;
        }


        return $this;
    } // setPermissions()

    /**
     * Set the value of [last_login] column.
     *
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setLastLogin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->last_login !== $v) {
            $this->last_login = $v;
            $this->modifiedColumns[] = UserPeer::LAST_LOGIN;
        }


        return $this;
    } // setLastLogin()

    /**
     * Set the value of [activation_code] column.
     *
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setActivationCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->activation_code !== $v) {
            $this->activation_code = $v;
            $this->modifiedColumns[] = UserPeer::ACTIVATION_CODE;
        }


        return $this;
    } // setActivationCode()

    /**
     * Set the value of [activated_at] column.
     *
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setActivatedAt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->activated_at !== $v) {
            $this->activated_at = $v;
            $this->modifiedColumns[] = UserPeer::ACTIVATED_AT;
        }


        return $this;
    } // setActivatedAt()

    /**
     * Set the value of [persist_code] column.
     *
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setPersistCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->persist_code !== $v) {
            $this->persist_code = $v;
            $this->modifiedColumns[] = UserPeer::PERSIST_CODE;
        }


        return $this;
    } // setPersistCode()

    /**
     * Set the value of [reset_password_code] column.
     *
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setResetPasswordCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reset_password_code !== $v) {
            $this->reset_password_code = $v;
            $this->modifiedColumns[] = UserPeer::RESET_PASSWORD_CODE;
        }


        return $this;
    } // setResetPasswordCode()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return User The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = UserPeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return User The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = UserPeer::UPDATED_AT;
            }
        } // if either are not null


        return $this;
    } // setUpdatedAt()

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
            $this->first_name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->last_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->email = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->password = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->permissions = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->last_login = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->activation_code = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->activated_at = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->persist_code = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->reset_password_code = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->created_at = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->updated_at = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = UserPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating User object", $e);
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
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = UserPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

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
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = UserQuery::create()
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
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                UserPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = UserPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . UserPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(UserPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(UserPeer::FIRST_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`first_name`';
        }
        if ($this->isColumnModified(UserPeer::LAST_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`last_name`';
        }
        if ($this->isColumnModified(UserPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(UserPeer::PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`password`';
        }
        if ($this->isColumnModified(UserPeer::PERMISSIONS)) {
            $modifiedColumns[':p' . $index++]  = '`permissions`';
        }
        if ($this->isColumnModified(UserPeer::LAST_LOGIN)) {
            $modifiedColumns[':p' . $index++]  = '`last_login`';
        }
        if ($this->isColumnModified(UserPeer::ACTIVATION_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`activation_code`';
        }
        if ($this->isColumnModified(UserPeer::ACTIVATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`activated_at`';
        }
        if ($this->isColumnModified(UserPeer::PERSIST_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`persist_code`';
        }
        if ($this->isColumnModified(UserPeer::RESET_PASSWORD_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`reset_password_code`';
        }
        if ($this->isColumnModified(UserPeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`created_at`';
        }
        if ($this->isColumnModified(UserPeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`updated_at`';
        }

        $sql = sprintf(
            'INSERT INTO `users` (%s) VALUES (%s)',
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
                    case '`first_name`':
                        $stmt->bindValue($identifier, $this->first_name, PDO::PARAM_STR);
                        break;
                    case '`last_name`':
                        $stmt->bindValue($identifier, $this->last_name, PDO::PARAM_STR);
                        break;
                    case '`email`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`password`':
                        $stmt->bindValue($identifier, $this->password, PDO::PARAM_STR);
                        break;
                    case '`permissions`':
                        $stmt->bindValue($identifier, $this->permissions, PDO::PARAM_STR);
                        break;
                    case '`last_login`':
                        $stmt->bindValue($identifier, $this->last_login, PDO::PARAM_STR);
                        break;
                    case '`activation_code`':
                        $stmt->bindValue($identifier, $this->activation_code, PDO::PARAM_STR);
                        break;
                    case '`activated_at`':
                        $stmt->bindValue($identifier, $this->activated_at, PDO::PARAM_STR);
                        break;
                    case '`persist_code`':
                        $stmt->bindValue($identifier, $this->persist_code, PDO::PARAM_STR);
                        break;
                    case '`reset_password_code`':
                        $stmt->bindValue($identifier, $this->reset_password_code, PDO::PARAM_STR);
                        break;
                    case '`created_at`':
                        $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
                        break;
                    case '`updated_at`':
                        $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
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


            if (($retval = UserPeer::doValidate($this, $columns)) !== true) {
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
        $pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getFirstName();
                break;
            case 2:
                return $this->getLastName();
                break;
            case 3:
                return $this->getEmail();
                break;
            case 4:
                return $this->getPassword();
                break;
            case 5:
                return $this->getPermissions();
                break;
            case 6:
                return $this->getLastLogin();
                break;
            case 7:
                return $this->getActivationCode();
                break;
            case 8:
                return $this->getActivatedAt();
                break;
            case 9:
                return $this->getPersistCode();
                break;
            case 10:
                return $this->getResetPasswordCode();
                break;
            case 11:
                return $this->getCreatedAt();
                break;
            case 12:
                return $this->getUpdatedAt();
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
        if (isset($alreadyDumpedObjects['User'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['User'][$this->getPrimaryKey()] = true;
        $keys = UserPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getFirstName(),
            $keys[2] => $this->getLastName(),
            $keys[3] => $this->getEmail(),
            $keys[4] => $this->getPassword(),
            $keys[5] => $this->getPermissions(),
            $keys[6] => $this->getLastLogin(),
            $keys[7] => $this->getActivationCode(),
            $keys[8] => $this->getActivatedAt(),
            $keys[9] => $this->getPersistCode(),
            $keys[10] => $this->getResetPasswordCode(),
            $keys[11] => $this->getCreatedAt(),
            $keys[12] => $this->getUpdatedAt(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
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
        $pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setFirstName($value);
                break;
            case 2:
                $this->setLastName($value);
                break;
            case 3:
                $this->setEmail($value);
                break;
            case 4:
                $this->setPassword($value);
                break;
            case 5:
                $this->setPermissions($value);
                break;
            case 6:
                $this->setLastLogin($value);
                break;
            case 7:
                $this->setActivationCode($value);
                break;
            case 8:
                $this->setActivatedAt($value);
                break;
            case 9:
                $this->setPersistCode($value);
                break;
            case 10:
                $this->setResetPasswordCode($value);
                break;
            case 11:
                $this->setCreatedAt($value);
                break;
            case 12:
                $this->setUpdatedAt($value);
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
        $keys = UserPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFirstName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLastName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEmail($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPassword($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPermissions($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLastLogin($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setActivationCode($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setActivatedAt($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPersistCode($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setResetPasswordCode($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCreatedAt($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setUpdatedAt($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(UserPeer::DATABASE_NAME);

        if ($this->isColumnModified(UserPeer::ID)) $criteria->add(UserPeer::ID, $this->id);
        if ($this->isColumnModified(UserPeer::FIRST_NAME)) $criteria->add(UserPeer::FIRST_NAME, $this->first_name);
        if ($this->isColumnModified(UserPeer::LAST_NAME)) $criteria->add(UserPeer::LAST_NAME, $this->last_name);
        if ($this->isColumnModified(UserPeer::EMAIL)) $criteria->add(UserPeer::EMAIL, $this->email);
        if ($this->isColumnModified(UserPeer::PASSWORD)) $criteria->add(UserPeer::PASSWORD, $this->password);
        if ($this->isColumnModified(UserPeer::PERMISSIONS)) $criteria->add(UserPeer::PERMISSIONS, $this->permissions);
        if ($this->isColumnModified(UserPeer::LAST_LOGIN)) $criteria->add(UserPeer::LAST_LOGIN, $this->last_login);
        if ($this->isColumnModified(UserPeer::ACTIVATION_CODE)) $criteria->add(UserPeer::ACTIVATION_CODE, $this->activation_code);
        if ($this->isColumnModified(UserPeer::ACTIVATED_AT)) $criteria->add(UserPeer::ACTIVATED_AT, $this->activated_at);
        if ($this->isColumnModified(UserPeer::PERSIST_CODE)) $criteria->add(UserPeer::PERSIST_CODE, $this->persist_code);
        if ($this->isColumnModified(UserPeer::RESET_PASSWORD_CODE)) $criteria->add(UserPeer::RESET_PASSWORD_CODE, $this->reset_password_code);
        if ($this->isColumnModified(UserPeer::CREATED_AT)) $criteria->add(UserPeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(UserPeer::UPDATED_AT)) $criteria->add(UserPeer::UPDATED_AT, $this->updated_at);

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
        $criteria = new Criteria(UserPeer::DATABASE_NAME);
        $criteria->add(UserPeer::ID, $this->id);

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
     * @param object $copyObj An object of User (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFirstName($this->getFirstName());
        $copyObj->setLastName($this->getLastName());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setPassword($this->getPassword());
        $copyObj->setPermissions($this->getPermissions());
        $copyObj->setLastLogin($this->getLastLogin());
        $copyObj->setActivationCode($this->getActivationCode());
        $copyObj->setActivatedAt($this->getActivatedAt());
        $copyObj->setPersistCode($this->getPersistCode());
        $copyObj->setResetPasswordCode($this->getResetPasswordCode());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

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
     * @return User Clone of current object.
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
     * @return UserPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new UserPeer();
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
     * @return User The current object (for fluent API support)
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
     * If this User is new, it will return
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
                    ->filterByUser($this)
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
     * @return User The current object (for fluent API support)
     */
    public function setSchools(PropelCollection $schools, PropelPDO $con = null)
    {
        $schoolsToDelete = $this->getSchools(new Criteria(), $con)->diff($schools);


        $this->schoolsScheduledForDeletion = $schoolsToDelete;

        foreach ($schoolsToDelete as $schoolRemoved) {
            $schoolRemoved->setUser(null);
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
                ->filterByUser($this)
                ->count($con);
        }

        return count($this->collSchools);
    }

    /**
     * Method called to associate a School object to this object
     * through the School foreign key attribute.
     *
     * @param    School $l School
     * @return User The current object (for fluent API support)
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
        $school->setUser($this);
    }

    /**
     * @param	School $school The school object to remove.
     * @return User The current object (for fluent API support)
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
            $school->setUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
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
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
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
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
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
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
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
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related Schools from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
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
        $this->first_name = null;
        $this->last_name = null;
        $this->email = null;
        $this->password = null;
        $this->permissions = null;
        $this->last_login = null;
        $this->activation_code = null;
        $this->activated_at = null;
        $this->persist_code = null;
        $this->reset_password_code = null;
        $this->created_at = null;
        $this->updated_at = null;
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

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

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
        return (string) $this->exportTo(UserPeer::DEFAULT_STRING_FORMAT);
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
