<?php


/**
 * Base static class for performing query and update operations on the 'basemap' table.
 *
 *
 *
 * @package propel.generator.datawrapper.om
 */
abstract class BaseBasemapPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'datawrapper';

    /** the table name for this class */
    const TABLE_NAME = 'basemap';

    /** the related Propel class for this table */
    const OM_CLASS = 'Basemap';

    /** the related TableMap class for this table */
    const TM_CLASS = 'BasemapTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the id field */
    const ID = 'basemap.id';

    /** the column name for the created_at field */
    const CREATED_AT = 'basemap.created_at';

    /** the column name for the title field */
    const TITLE = 'basemap.title';

    /** the column name for the regions field */
    const REGIONS = 'basemap.regions';

    /** the column name for the borders field */
    const BORDERS = 'basemap.borders';

    /** the column name for the aspect field */
    const ASPECT = 'basemap.aspect';

    /** the column name for the projection field */
    const PROJECTION = 'basemap.projection';

    /** the column name for the bounding_box field */
    const BOUNDING_BOX = 'basemap.bounding_box';

    /** the column name for the area field */
    const AREA = 'basemap.area';

    /** the column name for the keys field */
    const KEYS = 'basemap.keys';

    /** the column name for the raw_data field */
    const RAW_DATA = 'basemap.raw_data';

    /** the column name for the mapshaper_parameters field */
    const MAPSHAPER_PARAMETERS = 'basemap.mapshaper_parameters';

    /** the column name for the topojson field */
    const TOPOJSON = 'basemap.topojson';

    /** the column name for the outline_topojson field */
    const OUTLINE_TOPOJSON = 'basemap.outline_topojson';

    /** the column name for the last_edit_step field */
    const LAST_EDIT_STEP = 'basemap.last_edit_step';

    /** the column name for the is_public field */
    const IS_PUBLIC = 'basemap.is_public';

    /** the column name for the published_map field */
    const PUBLISHED_MAP = 'basemap.published_map';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of Basemap objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Basemap[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. BasemapPeer::$fieldNames[BasemapPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'CreatedAt', 'Title', 'Regions', 'Borders', 'Aspect', 'Projection', 'BoundingBox', 'Area', 'Keys', 'RawData', 'MapshaperParameters', 'Topojson', 'OutlineTopojson', 'LastEditStep', 'IsPublic', 'PublishedMap', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'createdAt', 'title', 'regions', 'borders', 'aspect', 'projection', 'boundingBox', 'area', 'keys', 'rawData', 'mapshaperParameters', 'topojson', 'outlineTopojson', 'lastEditStep', 'isPublic', 'publishedMap', ),
        BasePeer::TYPE_COLNAME => array (BasemapPeer::ID, BasemapPeer::CREATED_AT, BasemapPeer::TITLE, BasemapPeer::REGIONS, BasemapPeer::BORDERS, BasemapPeer::ASPECT, BasemapPeer::PROJECTION, BasemapPeer::BOUNDING_BOX, BasemapPeer::AREA, BasemapPeer::KEYS, BasemapPeer::RAW_DATA, BasemapPeer::MAPSHAPER_PARAMETERS, BasemapPeer::TOPOJSON, BasemapPeer::OUTLINE_TOPOJSON, BasemapPeer::LAST_EDIT_STEP, BasemapPeer::IS_PUBLIC, BasemapPeer::PUBLISHED_MAP, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'CREATED_AT', 'TITLE', 'REGIONS', 'BORDERS', 'ASPECT', 'PROJECTION', 'BOUNDING_BOX', 'AREA', 'KEYS', 'RAW_DATA', 'MAPSHAPER_PARAMETERS', 'TOPOJSON', 'OUTLINE_TOPOJSON', 'LAST_EDIT_STEP', 'IS_PUBLIC', 'PUBLISHED_MAP', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'created_at', 'title', 'regions', 'borders', 'aspect', 'projection', 'bounding_box', 'area', 'keys', 'raw_data', 'mapshaper_parameters', 'topojson', 'outline_topojson', 'last_edit_step', 'is_public', 'published_map', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. BasemapPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'CreatedAt' => 1, 'Title' => 2, 'Regions' => 3, 'Borders' => 4, 'Aspect' => 5, 'Projection' => 6, 'BoundingBox' => 7, 'Area' => 8, 'Keys' => 9, 'RawData' => 10, 'MapshaperParameters' => 11, 'Topojson' => 12, 'OutlineTopojson' => 13, 'LastEditStep' => 14, 'IsPublic' => 15, 'PublishedMap' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'createdAt' => 1, 'title' => 2, 'regions' => 3, 'borders' => 4, 'aspect' => 5, 'projection' => 6, 'boundingBox' => 7, 'area' => 8, 'keys' => 9, 'rawData' => 10, 'mapshaperParameters' => 11, 'topojson' => 12, 'outlineTopojson' => 13, 'lastEditStep' => 14, 'isPublic' => 15, 'publishedMap' => 16, ),
        BasePeer::TYPE_COLNAME => array (BasemapPeer::ID => 0, BasemapPeer::CREATED_AT => 1, BasemapPeer::TITLE => 2, BasemapPeer::REGIONS => 3, BasemapPeer::BORDERS => 4, BasemapPeer::ASPECT => 5, BasemapPeer::PROJECTION => 6, BasemapPeer::BOUNDING_BOX => 7, BasemapPeer::AREA => 8, BasemapPeer::KEYS => 9, BasemapPeer::RAW_DATA => 10, BasemapPeer::MAPSHAPER_PARAMETERS => 11, BasemapPeer::TOPOJSON => 12, BasemapPeer::OUTLINE_TOPOJSON => 13, BasemapPeer::LAST_EDIT_STEP => 14, BasemapPeer::IS_PUBLIC => 15, BasemapPeer::PUBLISHED_MAP => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'CREATED_AT' => 1, 'TITLE' => 2, 'REGIONS' => 3, 'BORDERS' => 4, 'ASPECT' => 5, 'PROJECTION' => 6, 'BOUNDING_BOX' => 7, 'AREA' => 8, 'KEYS' => 9, 'RAW_DATA' => 10, 'MAPSHAPER_PARAMETERS' => 11, 'TOPOJSON' => 12, 'OUTLINE_TOPOJSON' => 13, 'LAST_EDIT_STEP' => 14, 'IS_PUBLIC' => 15, 'PUBLISHED_MAP' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'created_at' => 1, 'title' => 2, 'regions' => 3, 'borders' => 4, 'aspect' => 5, 'projection' => 6, 'bounding_box' => 7, 'area' => 8, 'keys' => 9, 'raw_data' => 10, 'mapshaper_parameters' => 11, 'topojson' => 12, 'outline_topojson' => 13, 'last_edit_step' => 14, 'is_public' => 15, 'published_map' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $toNames = BasemapPeer::getFieldNames($toType);
        $key = isset(BasemapPeer::$fieldKeys[$fromType][$name]) ? BasemapPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(BasemapPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, BasemapPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return BasemapPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. BasemapPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(BasemapPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(BasemapPeer::ID);
            $criteria->addSelectColumn(BasemapPeer::CREATED_AT);
            $criteria->addSelectColumn(BasemapPeer::TITLE);
            $criteria->addSelectColumn(BasemapPeer::REGIONS);
            $criteria->addSelectColumn(BasemapPeer::BORDERS);
            $criteria->addSelectColumn(BasemapPeer::ASPECT);
            $criteria->addSelectColumn(BasemapPeer::PROJECTION);
            $criteria->addSelectColumn(BasemapPeer::BOUNDING_BOX);
            $criteria->addSelectColumn(BasemapPeer::AREA);
            $criteria->addSelectColumn(BasemapPeer::KEYS);
            $criteria->addSelectColumn(BasemapPeer::RAW_DATA);
            $criteria->addSelectColumn(BasemapPeer::MAPSHAPER_PARAMETERS);
            $criteria->addSelectColumn(BasemapPeer::TOPOJSON);
            $criteria->addSelectColumn(BasemapPeer::OUTLINE_TOPOJSON);
            $criteria->addSelectColumn(BasemapPeer::LAST_EDIT_STEP);
            $criteria->addSelectColumn(BasemapPeer::IS_PUBLIC);
            $criteria->addSelectColumn(BasemapPeer::PUBLISHED_MAP);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.title');
            $criteria->addSelectColumn($alias . '.regions');
            $criteria->addSelectColumn($alias . '.borders');
            $criteria->addSelectColumn($alias . '.aspect');
            $criteria->addSelectColumn($alias . '.projection');
            $criteria->addSelectColumn($alias . '.bounding_box');
            $criteria->addSelectColumn($alias . '.area');
            $criteria->addSelectColumn($alias . '.keys');
            $criteria->addSelectColumn($alias . '.raw_data');
            $criteria->addSelectColumn($alias . '.mapshaper_parameters');
            $criteria->addSelectColumn($alias . '.topojson');
            $criteria->addSelectColumn($alias . '.outline_topojson');
            $criteria->addSelectColumn($alias . '.last_edit_step');
            $criteria->addSelectColumn($alias . '.is_public');
            $criteria->addSelectColumn($alias . '.published_map');
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
        $criteria->setPrimaryTableName(BasemapPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            BasemapPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(BasemapPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(BasemapPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Basemap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = BasemapPeer::doSelect($critcopy, $con);
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
        return BasemapPeer::populateObjects(BasemapPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(BasemapPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            BasemapPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(BasemapPeer::DATABASE_NAME);

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
     * @param      Basemap $obj A Basemap object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            BasemapPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Basemap object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Basemap) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Basemap object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(BasemapPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   Basemap Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(BasemapPeer::$instances[$key])) {
                return BasemapPeer::$instances[$key];
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
      if ($and_clear_all_references)
      {
        foreach (BasemapPeer::$instances as $instance)
        {
          $instance->clearAllReferences(true);
        }
      }
        BasemapPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to basemap
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

        return (string) $row[$startcol];
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
        $cls = BasemapPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = BasemapPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = BasemapPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                BasemapPeer::addInstanceToPool($obj, $key);
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
     * @return array (Basemap object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = BasemapPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = BasemapPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + BasemapPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = BasemapPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            BasemapPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(BasemapPeer::DATABASE_NAME)->getTable(BasemapPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseBasemapPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseBasemapPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new BasemapTableMap());
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
        return BasemapPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Basemap or Criteria object.
     *
     * @param      mixed $values Criteria or Basemap object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BasemapPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Basemap object
        }


        // Set the correct dbName
        $criteria->setDbName(BasemapPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Basemap or Criteria object.
     *
     * @param      mixed $values Criteria or Basemap object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BasemapPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(BasemapPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(BasemapPeer::ID);
            $value = $criteria->remove(BasemapPeer::ID);
            if ($value) {
                $selectCriteria->add(BasemapPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(BasemapPeer::TABLE_NAME);
            }

        } else { // $values is Basemap object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(BasemapPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the basemap table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BasemapPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(BasemapPeer::TABLE_NAME, $con, BasemapPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BasemapPeer::clearInstancePool();
            BasemapPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Basemap or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Basemap object or primary key or array of primary keys
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
            $con = Propel::getConnection(BasemapPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            BasemapPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Basemap) { // it's a model object
            // invalidate the cache for this single object
            BasemapPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(BasemapPeer::DATABASE_NAME);
            $criteria->add(BasemapPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                BasemapPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(BasemapPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            BasemapPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Basemap object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Basemap $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(BasemapPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(BasemapPeer::TABLE_NAME);

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

        return BasePeer::doValidate(BasemapPeer::DATABASE_NAME, BasemapPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Basemap
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = BasemapPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(BasemapPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(BasemapPeer::DATABASE_NAME);
        $criteria->add(BasemapPeer::ID, $pk);

        $v = BasemapPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Basemap[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BasemapPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(BasemapPeer::DATABASE_NAME);
            $criteria->add(BasemapPeer::ID, $pks, Criteria::IN);
            $objs = BasemapPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseBasemapPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseBasemapPeer::buildTableMap();

