<?php


/**
 * Base class that represents a query for the 'basemap' table.
 *
 *
 *
 * @method BasemapQuery orderById($order = Criteria::ASC) Order by the id column
 * @method BasemapQuery orderByKey($order = Criteria::ASC) Order by the key column
 * @method BasemapQuery orderByRegionId($order = Criteria::ASC) Order by the region_id column
 * @method BasemapQuery orderByVersion($order = Criteria::ASC) Order by the version column
 * @method BasemapQuery orderByLastVersion($order = Criteria::ASC) Order by the last_version column
 * @method BasemapQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method BasemapQuery orderByVersionTitle($order = Criteria::ASC) Order by the version_title column
 * @method BasemapQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method BasemapQuery orderByRegions($order = Criteria::ASC) Order by the regions column
 * @method BasemapQuery orderByBorders($order = Criteria::ASC) Order by the borders column
 * @method BasemapQuery orderByKeys($order = Criteria::ASC) Order by the keys column
 * @method BasemapQuery orderByRawData($order = Criteria::ASC) Order by the raw_data column
 * @method BasemapQuery orderByMapshaperParameters($order = Criteria::ASC) Order by the mapshaper_parameters column
 * @method BasemapQuery orderByTopojson($order = Criteria::ASC) Order by the topojson column
 * @method BasemapQuery orderByIsPublic($order = Criteria::ASC) Order by the is_public column
 *
 * @method BasemapQuery groupById() Group by the id column
 * @method BasemapQuery groupByKey() Group by the key column
 * @method BasemapQuery groupByRegionId() Group by the region_id column
 * @method BasemapQuery groupByVersion() Group by the version column
 * @method BasemapQuery groupByLastVersion() Group by the last_version column
 * @method BasemapQuery groupByTitle() Group by the title column
 * @method BasemapQuery groupByVersionTitle() Group by the version_title column
 * @method BasemapQuery groupByCreatedAt() Group by the created_at column
 * @method BasemapQuery groupByRegions() Group by the regions column
 * @method BasemapQuery groupByBorders() Group by the borders column
 * @method BasemapQuery groupByKeys() Group by the keys column
 * @method BasemapQuery groupByRawData() Group by the raw_data column
 * @method BasemapQuery groupByMapshaperParameters() Group by the mapshaper_parameters column
 * @method BasemapQuery groupByTopojson() Group by the topojson column
 * @method BasemapQuery groupByIsPublic() Group by the is_public column
 *
 * @method BasemapQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method BasemapQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method BasemapQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method BasemapQuery leftJoinRegion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Region relation
 * @method BasemapQuery rightJoinRegion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Region relation
 * @method BasemapQuery innerJoinRegion($relationAlias = null) Adds a INNER JOIN clause to the query using the Region relation
 *
 * @method Basemap findOne(PropelPDO $con = null) Return the first Basemap matching the query
 * @method Basemap findOneOrCreate(PropelPDO $con = null) Return the first Basemap matching the query, or a new Basemap object populated from the query conditions when no match is found
 *
 * @method Basemap findOneByKey(string $key) Return the first Basemap filtered by the key column
 * @method Basemap findOneByRegionId(int $region_id) Return the first Basemap filtered by the region_id column
 * @method Basemap findOneByVersion(int $version) Return the first Basemap filtered by the version column
 * @method Basemap findOneByLastVersion(int $last_version) Return the first Basemap filtered by the last_version column
 * @method Basemap findOneByTitle(string $title) Return the first Basemap filtered by the title column
 * @method Basemap findOneByVersionTitle(string $version_title) Return the first Basemap filtered by the version_title column
 * @method Basemap findOneByCreatedAt(string $created_at) Return the first Basemap filtered by the created_at column
 * @method Basemap findOneByRegions(string $regions) Return the first Basemap filtered by the regions column
 * @method Basemap findOneByBorders(string $borders) Return the first Basemap filtered by the borders column
 * @method Basemap findOneByKeys(string $keys) Return the first Basemap filtered by the keys column
 * @method Basemap findOneByRawData(string $raw_data) Return the first Basemap filtered by the raw_data column
 * @method Basemap findOneByMapshaperParameters(string $mapshaper_parameters) Return the first Basemap filtered by the mapshaper_parameters column
 * @method Basemap findOneByTopojson(string $topojson) Return the first Basemap filtered by the topojson column
 * @method Basemap findOneByIsPublic(boolean $is_public) Return the first Basemap filtered by the is_public column
 *
 * @method array findById(int $id) Return Basemap objects filtered by the id column
 * @method array findByKey(string $key) Return Basemap objects filtered by the key column
 * @method array findByRegionId(int $region_id) Return Basemap objects filtered by the region_id column
 * @method array findByVersion(int $version) Return Basemap objects filtered by the version column
 * @method array findByLastVersion(int $last_version) Return Basemap objects filtered by the last_version column
 * @method array findByTitle(string $title) Return Basemap objects filtered by the title column
 * @method array findByVersionTitle(string $version_title) Return Basemap objects filtered by the version_title column
 * @method array findByCreatedAt(string $created_at) Return Basemap objects filtered by the created_at column
 * @method array findByRegions(string $regions) Return Basemap objects filtered by the regions column
 * @method array findByBorders(string $borders) Return Basemap objects filtered by the borders column
 * @method array findByKeys(string $keys) Return Basemap objects filtered by the keys column
 * @method array findByRawData(string $raw_data) Return Basemap objects filtered by the raw_data column
 * @method array findByMapshaperParameters(string $mapshaper_parameters) Return Basemap objects filtered by the mapshaper_parameters column
 * @method array findByTopojson(string $topojson) Return Basemap objects filtered by the topojson column
 * @method array findByIsPublic(boolean $is_public) Return Basemap objects filtered by the is_public column
 *
 * @package    propel.generator.datawrapper.om
 */
abstract class BaseBasemapQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseBasemapQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'datawrapper', $modelName = 'Basemap', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new BasemapQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   BasemapQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return BasemapQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof BasemapQuery) {
            return $criteria;
        }
        $query = new BasemapQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Basemap|Basemap[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = BasemapPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(BasemapPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Basemap A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Basemap A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `key`, `region_id`, `version`, `last_version`, `title`, `version_title`, `created_at`, `regions`, `borders`, `keys`, `raw_data`, `mapshaper_parameters`, `topojson`, `is_public` FROM `basemap` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Basemap();
            $obj->hydrate($row);
            BasemapPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Basemap|Basemap[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Basemap[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(BasemapPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(BasemapPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(BasemapPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(BasemapPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BasemapPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the key column
     *
     * Example usage:
     * <code>
     * $query->filterByKey('fooValue');   // WHERE key = 'fooValue'
     * $query->filterByKey('%fooValue%'); // WHERE key LIKE '%fooValue%'
     * </code>
     *
     * @param     string $key The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByKey($key = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($key)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $key)) {
                $key = str_replace('*', '%', $key);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BasemapPeer::KEY, $key, $comparison);
    }

    /**
     * Filter the query on the region_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRegionId(1234); // WHERE region_id = 1234
     * $query->filterByRegionId(array(12, 34)); // WHERE region_id IN (12, 34)
     * $query->filterByRegionId(array('min' => 12)); // WHERE region_id >= 12
     * $query->filterByRegionId(array('max' => 12)); // WHERE region_id <= 12
     * </code>
     *
     * @see       filterByRegion()
     *
     * @param     mixed $regionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByRegionId($regionId = null, $comparison = null)
    {
        if (is_array($regionId)) {
            $useMinMax = false;
            if (isset($regionId['min'])) {
                $this->addUsingAlias(BasemapPeer::REGION_ID, $regionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($regionId['max'])) {
                $this->addUsingAlias(BasemapPeer::REGION_ID, $regionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BasemapPeer::REGION_ID, $regionId, $comparison);
    }

    /**
     * Filter the query on the version column
     *
     * Example usage:
     * <code>
     * $query->filterByVersion(1234); // WHERE version = 1234
     * $query->filterByVersion(array(12, 34)); // WHERE version IN (12, 34)
     * $query->filterByVersion(array('min' => 12)); // WHERE version >= 12
     * $query->filterByVersion(array('max' => 12)); // WHERE version <= 12
     * </code>
     *
     * @param     mixed $version The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByVersion($version = null, $comparison = null)
    {
        if (is_array($version)) {
            $useMinMax = false;
            if (isset($version['min'])) {
                $this->addUsingAlias(BasemapPeer::VERSION, $version['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($version['max'])) {
                $this->addUsingAlias(BasemapPeer::VERSION, $version['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BasemapPeer::VERSION, $version, $comparison);
    }

    /**
     * Filter the query on the last_version column
     *
     * Example usage:
     * <code>
     * $query->filterByLastVersion(1234); // WHERE last_version = 1234
     * $query->filterByLastVersion(array(12, 34)); // WHERE last_version IN (12, 34)
     * $query->filterByLastVersion(array('min' => 12)); // WHERE last_version >= 12
     * $query->filterByLastVersion(array('max' => 12)); // WHERE last_version <= 12
     * </code>
     *
     * @param     mixed $lastVersion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByLastVersion($lastVersion = null, $comparison = null)
    {
        if (is_array($lastVersion)) {
            $useMinMax = false;
            if (isset($lastVersion['min'])) {
                $this->addUsingAlias(BasemapPeer::LAST_VERSION, $lastVersion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastVersion['max'])) {
                $this->addUsingAlias(BasemapPeer::LAST_VERSION, $lastVersion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BasemapPeer::LAST_VERSION, $lastVersion, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BasemapPeer::TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the version_title column
     *
     * Example usage:
     * <code>
     * $query->filterByVersionTitle('fooValue');   // WHERE version_title = 'fooValue'
     * $query->filterByVersionTitle('%fooValue%'); // WHERE version_title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $versionTitle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByVersionTitle($versionTitle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($versionTitle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $versionTitle)) {
                $versionTitle = str_replace('*', '%', $versionTitle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BasemapPeer::VERSION_TITLE, $versionTitle, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(BasemapPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(BasemapPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BasemapPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the regions column
     *
     * Example usage:
     * <code>
     * $query->filterByRegions('fooValue');   // WHERE regions = 'fooValue'
     * $query->filterByRegions('%fooValue%'); // WHERE regions LIKE '%fooValue%'
     * </code>
     *
     * @param     string $regions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByRegions($regions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($regions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $regions)) {
                $regions = str_replace('*', '%', $regions);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BasemapPeer::REGIONS, $regions, $comparison);
    }

    /**
     * Filter the query on the borders column
     *
     * Example usage:
     * <code>
     * $query->filterByBorders('fooValue');   // WHERE borders = 'fooValue'
     * $query->filterByBorders('%fooValue%'); // WHERE borders LIKE '%fooValue%'
     * </code>
     *
     * @param     string $borders The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByBorders($borders = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($borders)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $borders)) {
                $borders = str_replace('*', '%', $borders);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BasemapPeer::BORDERS, $borders, $comparison);
    }

    /**
     * Filter the query on the keys column
     *
     * Example usage:
     * <code>
     * $query->filterByKeys('fooValue');   // WHERE keys = 'fooValue'
     * $query->filterByKeys('%fooValue%'); // WHERE keys LIKE '%fooValue%'
     * </code>
     *
     * @param     string $keys The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByKeys($keys = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($keys)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $keys)) {
                $keys = str_replace('*', '%', $keys);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BasemapPeer::KEYS, $keys, $comparison);
    }

    /**
     * Filter the query on the raw_data column
     *
     * Example usage:
     * <code>
     * $query->filterByRawData('fooValue');   // WHERE raw_data = 'fooValue'
     * $query->filterByRawData('%fooValue%'); // WHERE raw_data LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rawData The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByRawData($rawData = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rawData)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rawData)) {
                $rawData = str_replace('*', '%', $rawData);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BasemapPeer::RAW_DATA, $rawData, $comparison);
    }

    /**
     * Filter the query on the mapshaper_parameters column
     *
     * Example usage:
     * <code>
     * $query->filterByMapshaperParameters('fooValue');   // WHERE mapshaper_parameters = 'fooValue'
     * $query->filterByMapshaperParameters('%fooValue%'); // WHERE mapshaper_parameters LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mapshaperParameters The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByMapshaperParameters($mapshaperParameters = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mapshaperParameters)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mapshaperParameters)) {
                $mapshaperParameters = str_replace('*', '%', $mapshaperParameters);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BasemapPeer::MAPSHAPER_PARAMETERS, $mapshaperParameters, $comparison);
    }

    /**
     * Filter the query on the topojson column
     *
     * Example usage:
     * <code>
     * $query->filterByTopojson('fooValue');   // WHERE topojson = 'fooValue'
     * $query->filterByTopojson('%fooValue%'); // WHERE topojson LIKE '%fooValue%'
     * </code>
     *
     * @param     string $topojson The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByTopojson($topojson = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($topojson)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $topojson)) {
                $topojson = str_replace('*', '%', $topojson);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BasemapPeer::TOPOJSON, $topojson, $comparison);
    }

    /**
     * Filter the query on the is_public column
     *
     * Example usage:
     * <code>
     * $query->filterByIsPublic(true); // WHERE is_public = true
     * $query->filterByIsPublic('yes'); // WHERE is_public = true
     * </code>
     *
     * @param     boolean|string $isPublic The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByIsPublic($isPublic = null, $comparison = null)
    {
        if (is_string($isPublic)) {
            $isPublic = in_array(strtolower($isPublic), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BasemapPeer::IS_PUBLIC, $isPublic, $comparison);
    }

    /**
     * Filter the query by a related Region object
     *
     * @param   Region|PropelObjectCollection $region The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 BasemapQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRegion($region, $comparison = null)
    {
        if ($region instanceof Region) {
            return $this
                ->addUsingAlias(BasemapPeer::REGION_ID, $region->getId(), $comparison);
        } elseif ($region instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BasemapPeer::REGION_ID, $region->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByRegion() only accepts arguments of type Region or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Region relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function joinRegion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Region');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Region');
        }

        return $this;
    }

    /**
     * Use the Region relation Region object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RegionQuery A secondary query class using the current class as primary query
     */
    public function useRegionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRegion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Region', 'RegionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Basemap $basemap Object to remove from the list of results
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function prune($basemap = null)
    {
        if ($basemap) {
            $this->addUsingAlias(BasemapPeer::ID, $basemap->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
