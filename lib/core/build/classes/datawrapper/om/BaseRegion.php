<?php


/**
 * Base class that represents a row from the 'region' table.
 *
 *
 *
 * @package    propel.generator.datawrapper.om
 */
abstract class BaseRegion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RegionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RegionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the title field.
     * @var        string
     */
    protected $title;

    /**
     * The value for the aspect field.
     * @var        double
     */
    protected $aspect;

    /**
     * The value for the projection field.
     * @var        string
     */
    protected $projection;

    /**
     * The value for the area field.
     * @var        string
     */
    protected $area;

    /**
     * The value for the bounding_box field.
     * @var        string
     */
    protected $bounding_box;

    /**
     * The value for the outline_topojson field.
     * @var        string
     */
    protected $outline_topojson;

    /**
     * @var        PropelObjectCollection|Basemap[] Collection to store aggregation of Basemap objects.
     */
    protected $collBasemaps;
    protected $collBasemapsPartial;

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
    protected $basemapsScheduledForDeletion = null;

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
     * Get the [title] column value.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the [aspect] column value.
     *
     * @return double
     */
    public function getAspect()
    {
        return $this->aspect;
    }

    /**
     * Get the [projection] column value.
     *
     * @return string
     */
    public function getProjection()
    {
        return $this->projection;
    }

    /**
     * Get the [area] column value.
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Get the [bounding_box] column value.
     *
     * @return string
     */
    public function getBoundingBox()
    {
        return $this->bounding_box;
    }

    /**
     * Get the [outline_topojson] column value.
     *
     * @return string
     */
    public function getOutlineTopojson()
    {
        return $this->outline_topojson;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return Region The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = RegionPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [title] column.
     *
     * @param string $v new value
     * @return Region The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[] = RegionPeer::TITLE;
        }


        return $this;
    } // setTitle()

    /**
     * Set the value of [aspect] column.
     *
     * @param double $v new value
     * @return Region The current object (for fluent API support)
     */
    public function setAspect($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->aspect !== $v) {
            $this->aspect = $v;
            $this->modifiedColumns[] = RegionPeer::ASPECT;
        }


        return $this;
    } // setAspect()

    /**
     * Set the value of [projection] column.
     *
     * @param string $v new value
     * @return Region The current object (for fluent API support)
     */
    public function setProjection($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->projection !== $v) {
            $this->projection = $v;
            $this->modifiedColumns[] = RegionPeer::PROJECTION;
        }


        return $this;
    } // setProjection()

    /**
     * Set the value of [area] column.
     *
     * @param string $v new value
     * @return Region The current object (for fluent API support)
     */
    public function setArea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->area !== $v) {
            $this->area = $v;
            $this->modifiedColumns[] = RegionPeer::AREA;
        }


        return $this;
    } // setArea()

    /**
     * Set the value of [bounding_box] column.
     *
     * @param string $v new value
     * @return Region The current object (for fluent API support)
     */
    public function setBoundingBox($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bounding_box !== $v) {
            $this->bounding_box = $v;
            $this->modifiedColumns[] = RegionPeer::BOUNDING_BOX;
        }


        return $this;
    } // setBoundingBox()

    /**
     * Set the value of [outline_topojson] column.
     *
     * @param string $v new value
     * @return Region The current object (for fluent API support)
     */
    public function setOutlineTopojson($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->outline_topojson !== $v) {
            $this->outline_topojson = $v;
            $this->modifiedColumns[] = RegionPeer::OUTLINE_TOPOJSON;
        }


        return $this;
    } // setOutlineTopojson()

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
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->title = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->aspect = ($row[$startcol + 2] !== null) ? (double) $row[$startcol + 2] : null;
            $this->projection = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->area = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->bounding_box = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->outline_topojson = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 7; // 7 = RegionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Region object", $e);
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
            $con = Propel::getConnection(RegionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RegionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collBasemaps = null;

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
            $con = Propel::getConnection(RegionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RegionQuery::create()
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
            $con = Propel::getConnection(RegionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RegionPeer::addInstanceToPool($this);
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

            if ($this->basemapsScheduledForDeletion !== null) {
                if (!$this->basemapsScheduledForDeletion->isEmpty()) {
                    foreach ($this->basemapsScheduledForDeletion as $basemap) {
                        // need to save related object because we set the relation to null
                        $basemap->save($con);
                    }
                    $this->basemapsScheduledForDeletion = null;
                }
            }

            if ($this->collBasemaps !== null) {
                foreach ($this->collBasemaps as $referrerFK) {
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

        $this->modifiedColumns[] = RegionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RegionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RegionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(RegionPeer::TITLE)) {
            $modifiedColumns[':p' . $index++]  = '`title`';
        }
        if ($this->isColumnModified(RegionPeer::ASPECT)) {
            $modifiedColumns[':p' . $index++]  = '`aspect`';
        }
        if ($this->isColumnModified(RegionPeer::PROJECTION)) {
            $modifiedColumns[':p' . $index++]  = '`projection`';
        }
        if ($this->isColumnModified(RegionPeer::AREA)) {
            $modifiedColumns[':p' . $index++]  = '`area`';
        }
        if ($this->isColumnModified(RegionPeer::BOUNDING_BOX)) {
            $modifiedColumns[':p' . $index++]  = '`bounding_box`';
        }
        if ($this->isColumnModified(RegionPeer::OUTLINE_TOPOJSON)) {
            $modifiedColumns[':p' . $index++]  = '`outline_topojson`';
        }

        $sql = sprintf(
            'INSERT INTO `region` (%s) VALUES (%s)',
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
                    case '`title`':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case '`aspect`':
                        $stmt->bindValue($identifier, $this->aspect, PDO::PARAM_STR);
                        break;
                    case '`projection`':
                        $stmt->bindValue($identifier, $this->projection, PDO::PARAM_STR);
                        break;
                    case '`area`':
                        $stmt->bindValue($identifier, $this->area, PDO::PARAM_STR);
                        break;
                    case '`bounding_box`':
                        $stmt->bindValue($identifier, $this->bounding_box, PDO::PARAM_STR);
                        break;
                    case '`outline_topojson`':
                        $stmt->bindValue($identifier, $this->outline_topojson, PDO::PARAM_STR);
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
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = RegionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collBasemaps !== null) {
                    foreach ($this->collBasemaps as $referrerFK) {
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
        $pos = RegionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getTitle();
                break;
            case 2:
                return $this->getAspect();
                break;
            case 3:
                return $this->getProjection();
                break;
            case 4:
                return $this->getArea();
                break;
            case 5:
                return $this->getBoundingBox();
                break;
            case 6:
                return $this->getOutlineTopojson();
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
        if (isset($alreadyDumpedObjects['Region'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Region'][$this->getPrimaryKey()] = true;
        $keys = RegionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getTitle(),
            $keys[2] => $this->getAspect(),
            $keys[3] => $this->getProjection(),
            $keys[4] => $this->getArea(),
            $keys[5] => $this->getBoundingBox(),
            $keys[6] => $this->getOutlineTopojson(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collBasemaps) {
                $result['Basemaps'] = $this->collBasemaps->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RegionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setTitle($value);
                break;
            case 2:
                $this->setAspect($value);
                break;
            case 3:
                $this->setProjection($value);
                break;
            case 4:
                $this->setArea($value);
                break;
            case 5:
                $this->setBoundingBox($value);
                break;
            case 6:
                $this->setOutlineTopojson($value);
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
        $keys = RegionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTitle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAspect($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setProjection($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setArea($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setBoundingBox($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOutlineTopojson($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RegionPeer::DATABASE_NAME);

        if ($this->isColumnModified(RegionPeer::ID)) $criteria->add(RegionPeer::ID, $this->id);
        if ($this->isColumnModified(RegionPeer::TITLE)) $criteria->add(RegionPeer::TITLE, $this->title);
        if ($this->isColumnModified(RegionPeer::ASPECT)) $criteria->add(RegionPeer::ASPECT, $this->aspect);
        if ($this->isColumnModified(RegionPeer::PROJECTION)) $criteria->add(RegionPeer::PROJECTION, $this->projection);
        if ($this->isColumnModified(RegionPeer::AREA)) $criteria->add(RegionPeer::AREA, $this->area);
        if ($this->isColumnModified(RegionPeer::BOUNDING_BOX)) $criteria->add(RegionPeer::BOUNDING_BOX, $this->bounding_box);
        if ($this->isColumnModified(RegionPeer::OUTLINE_TOPOJSON)) $criteria->add(RegionPeer::OUTLINE_TOPOJSON, $this->outline_topojson);

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
        $criteria = new Criteria(RegionPeer::DATABASE_NAME);
        $criteria->add(RegionPeer::ID, $this->id);

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
     * @param object $copyObj An object of Region (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTitle($this->getTitle());
        $copyObj->setAspect($this->getAspect());
        $copyObj->setProjection($this->getProjection());
        $copyObj->setArea($this->getArea());
        $copyObj->setBoundingBox($this->getBoundingBox());
        $copyObj->setOutlineTopojson($this->getOutlineTopojson());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getBasemaps() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addBasemap($relObj->copy($deepCopy));
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
     * @return Region Clone of current object.
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
     * @return RegionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RegionPeer();
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
        if ('Basemap' == $relationName) {
            $this->initBasemaps();
        }
    }

    /**
     * Clears out the collBasemaps collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Region The current object (for fluent API support)
     * @see        addBasemaps()
     */
    public function clearBasemaps()
    {
        $this->collBasemaps = null; // important to set this to null since that means it is uninitialized
        $this->collBasemapsPartial = null;

        return $this;
    }

    /**
     * reset is the collBasemaps collection loaded partially
     *
     * @return void
     */
    public function resetPartialBasemaps($v = true)
    {
        $this->collBasemapsPartial = $v;
    }

    /**
     * Initializes the collBasemaps collection.
     *
     * By default this just sets the collBasemaps collection to an empty array (like clearcollBasemaps());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initBasemaps($overrideExisting = true)
    {
        if (null !== $this->collBasemaps && !$overrideExisting) {
            return;
        }
        $this->collBasemaps = new PropelObjectCollection();
        $this->collBasemaps->setModel('Basemap');
    }

    /**
     * Gets an array of Basemap objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Region is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Basemap[] List of Basemap objects
     * @throws PropelException
     */
    public function getBasemaps($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collBasemapsPartial && !$this->isNew();
        if (null === $this->collBasemaps || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collBasemaps) {
                // return empty collection
                $this->initBasemaps();
            } else {
                $collBasemaps = BasemapQuery::create(null, $criteria)
                    ->filterByRegion($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collBasemapsPartial && count($collBasemaps)) {
                      $this->initBasemaps(false);

                      foreach($collBasemaps as $obj) {
                        if (false == $this->collBasemaps->contains($obj)) {
                          $this->collBasemaps->append($obj);
                        }
                      }

                      $this->collBasemapsPartial = true;
                    }

                    $collBasemaps->getInternalIterator()->rewind();
                    return $collBasemaps;
                }

                if($partial && $this->collBasemaps) {
                    foreach($this->collBasemaps as $obj) {
                        if($obj->isNew()) {
                            $collBasemaps[] = $obj;
                        }
                    }
                }

                $this->collBasemaps = $collBasemaps;
                $this->collBasemapsPartial = false;
            }
        }

        return $this->collBasemaps;
    }

    /**
     * Sets a collection of Basemap objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $basemaps A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Region The current object (for fluent API support)
     */
    public function setBasemaps(PropelCollection $basemaps, PropelPDO $con = null)
    {
        $basemapsToDelete = $this->getBasemaps(new Criteria(), $con)->diff($basemaps);

        $this->basemapsScheduledForDeletion = unserialize(serialize($basemapsToDelete));

        foreach ($basemapsToDelete as $basemapRemoved) {
            $basemapRemoved->setRegion(null);
        }

        $this->collBasemaps = null;
        foreach ($basemaps as $basemap) {
            $this->addBasemap($basemap);
        }

        $this->collBasemaps = $basemaps;
        $this->collBasemapsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Basemap objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Basemap objects.
     * @throws PropelException
     */
    public function countBasemaps(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collBasemapsPartial && !$this->isNew();
        if (null === $this->collBasemaps || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collBasemaps) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getBasemaps());
            }
            $query = BasemapQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRegion($this)
                ->count($con);
        }

        return count($this->collBasemaps);
    }

    /**
     * Method called to associate a Basemap object to this object
     * through the Basemap foreign key attribute.
     *
     * @param    Basemap $l Basemap
     * @return Region The current object (for fluent API support)
     */
    public function addBasemap(Basemap $l)
    {
        if ($this->collBasemaps === null) {
            $this->initBasemaps();
            $this->collBasemapsPartial = true;
        }
        if (!in_array($l, $this->collBasemaps->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddBasemap($l);
        }

        return $this;
    }

    /**
     * @param	Basemap $basemap The basemap object to add.
     */
    protected function doAddBasemap($basemap)
    {
        $this->collBasemaps[]= $basemap;
        $basemap->setRegion($this);
    }

    /**
     * @param	Basemap $basemap The basemap object to remove.
     * @return Region The current object (for fluent API support)
     */
    public function removeBasemap($basemap)
    {
        if ($this->getBasemaps()->contains($basemap)) {
            $this->collBasemaps->remove($this->collBasemaps->search($basemap));
            if (null === $this->basemapsScheduledForDeletion) {
                $this->basemapsScheduledForDeletion = clone $this->collBasemaps;
                $this->basemapsScheduledForDeletion->clear();
            }
            $this->basemapsScheduledForDeletion[]= $basemap;
            $basemap->setRegion(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->title = null;
        $this->aspect = null;
        $this->projection = null;
        $this->area = null;
        $this->bounding_box = null;
        $this->outline_topojson = null;
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
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collBasemaps) {
                foreach ($this->collBasemaps as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collBasemaps instanceof PropelCollection) {
            $this->collBasemaps->clearIterator();
        }
        $this->collBasemaps = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RegionPeer::DEFAULT_STRING_FORMAT);
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
