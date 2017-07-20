<?php


/**
 * Base class that represents a query for the 'basemap' table.
 *
 *
 *
 * @method BasemapQuery orderById($order = Criteria::ASC) Order by the id column
 * @method BasemapQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method BasemapQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method BasemapQuery orderByRegions($order = Criteria::ASC) Order by the regions column
 * @method BasemapQuery orderByBorders($order = Criteria::ASC) Order by the borders column
 * @method BasemapQuery orderByAspect($order = Criteria::ASC) Order by the aspect column
 * @method BasemapQuery orderByProjection($order = Criteria::ASC) Order by the projection column
 * @method BasemapQuery orderByBoundingBox($order = Criteria::ASC) Order by the bounding_box column
 * @method BasemapQuery orderByArea($order = Criteria::ASC) Order by the area column
 * @method BasemapQuery orderByKeys($order = Criteria::ASC) Order by the keys column
 * @method BasemapQuery orderByRawData($order = Criteria::ASC) Order by the raw_data column
 * @method BasemapQuery orderByMapshaperParameters($order = Criteria::ASC) Order by the mapshaper_parameters column
 * @method BasemapQuery orderByTopojson($order = Criteria::ASC) Order by the topojson column
 * @method BasemapQuery orderByOutlineTopojson($order = Criteria::ASC) Order by the outline_topojson column
 * @method BasemapQuery orderByLastEditStep($order = Criteria::ASC) Order by the last_edit_step column
 * @method BasemapQuery orderByIsPublic($order = Criteria::ASC) Order by the is_public column
 * @method BasemapQuery orderByPublishedMap($order = Criteria::ASC) Order by the published_map column
 *
 * @method BasemapQuery groupById() Group by the id column
 * @method BasemapQuery groupByCreatedAt() Group by the created_at column
 * @method BasemapQuery groupByTitle() Group by the title column
 * @method BasemapQuery groupByRegions() Group by the regions column
 * @method BasemapQuery groupByBorders() Group by the borders column
 * @method BasemapQuery groupByAspect() Group by the aspect column
 * @method BasemapQuery groupByProjection() Group by the projection column
 * @method BasemapQuery groupByBoundingBox() Group by the bounding_box column
 * @method BasemapQuery groupByArea() Group by the area column
 * @method BasemapQuery groupByKeys() Group by the keys column
 * @method BasemapQuery groupByRawData() Group by the raw_data column
 * @method BasemapQuery groupByMapshaperParameters() Group by the mapshaper_parameters column
 * @method BasemapQuery groupByTopojson() Group by the topojson column
 * @method BasemapQuery groupByOutlineTopojson() Group by the outline_topojson column
 * @method BasemapQuery groupByLastEditStep() Group by the last_edit_step column
 * @method BasemapQuery groupByIsPublic() Group by the is_public column
 * @method BasemapQuery groupByPublishedMap() Group by the published_map column
 *
 * @method BasemapQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method BasemapQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method BasemapQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Basemap findOne(PropelPDO $con = null) Return the first Basemap matching the query
 * @method Basemap findOneOrCreate(PropelPDO $con = null) Return the first Basemap matching the query, or a new Basemap object populated from the query conditions when no match is found
 *
 * @method Basemap findOneByCreatedAt(string $created_at) Return the first Basemap filtered by the created_at column
 * @method Basemap findOneByTitle(string $title) Return the first Basemap filtered by the title column
 * @method Basemap findOneByRegions(string $regions) Return the first Basemap filtered by the regions column
 * @method Basemap findOneByBorders(string $borders) Return the first Basemap filtered by the borders column
 * @method Basemap findOneByAspect(double $aspect) Return the first Basemap filtered by the aspect column
 * @method Basemap findOneByProjection(string $projection) Return the first Basemap filtered by the projection column
 * @method Basemap findOneByBoundingBox(string $bounding_box) Return the first Basemap filtered by the bounding_box column
 * @method Basemap findOneByArea(string $area) Return the first Basemap filtered by the area column
 * @method Basemap findOneByKeys(string $keys) Return the first Basemap filtered by the keys column
 * @method Basemap findOneByRawData(string $raw_data) Return the first Basemap filtered by the raw_data column
 * @method Basemap findOneByMapshaperParameters(string $mapshaper_parameters) Return the first Basemap filtered by the mapshaper_parameters column
 * @method Basemap findOneByTopojson(string $topojson) Return the first Basemap filtered by the topojson column
 * @method Basemap findOneByOutlineTopojson(string $outline_topojson) Return the first Basemap filtered by the outline_topojson column
 * @method Basemap findOneByLastEditStep(int $last_edit_step) Return the first Basemap filtered by the last_edit_step column
 * @method Basemap findOneByIsPublic(boolean $is_public) Return the first Basemap filtered by the is_public column
 * @method Basemap findOneByPublishedMap(string $published_map) Return the first Basemap filtered by the published_map column
 *
 * @method array findById(string $id) Return Basemap objects filtered by the id column
 * @method array findByCreatedAt(string $created_at) Return Basemap objects filtered by the created_at column
 * @method array findByTitle(string $title) Return Basemap objects filtered by the title column
 * @method array findByRegions(string $regions) Return Basemap objects filtered by the regions column
 * @method array findByBorders(string $borders) Return Basemap objects filtered by the borders column
 * @method array findByAspect(double $aspect) Return Basemap objects filtered by the aspect column
 * @method array findByProjection(string $projection) Return Basemap objects filtered by the projection column
 * @method array findByBoundingBox(string $bounding_box) Return Basemap objects filtered by the bounding_box column
 * @method array findByArea(string $area) Return Basemap objects filtered by the area column
 * @method array findByKeys(string $keys) Return Basemap objects filtered by the keys column
 * @method array findByRawData(string $raw_data) Return Basemap objects filtered by the raw_data column
 * @method array findByMapshaperParameters(string $mapshaper_parameters) Return Basemap objects filtered by the mapshaper_parameters column
 * @method array findByTopojson(string $topojson) Return Basemap objects filtered by the topojson column
 * @method array findByOutlineTopojson(string $outline_topojson) Return Basemap objects filtered by the outline_topojson column
 * @method array findByLastEditStep(int $last_edit_step) Return Basemap objects filtered by the last_edit_step column
 * @method array findByIsPublic(boolean $is_public) Return Basemap objects filtered by the is_public column
 * @method array findByPublishedMap(string $published_map) Return Basemap objects filtered by the published_map column
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
        $sql = 'SELECT `id`, `created_at`, `title`, `regions`, `borders`, `aspect`, `projection`, `bounding_box`, `area`, `keys`, `raw_data`, `mapshaper_parameters`, `topojson`, `outline_topojson`, `last_edit_step`, `is_public`, `published_map` FROM `basemap` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
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
     * $query->filterById('fooValue');   // WHERE id = 'fooValue'
     * $query->filterById('%fooValue%'); // WHERE id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $id The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($id)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $id)) {
                $id = str_replace('*', '%', $id);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BasemapPeer::ID, $id, $comparison);
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
     * Filter the query on the aspect column
     *
     * Example usage:
     * <code>
     * $query->filterByAspect(1234); // WHERE aspect = 1234
     * $query->filterByAspect(array(12, 34)); // WHERE aspect IN (12, 34)
     * $query->filterByAspect(array('min' => 12)); // WHERE aspect >= 12
     * $query->filterByAspect(array('max' => 12)); // WHERE aspect <= 12
     * </code>
     *
     * @param     mixed $aspect The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByAspect($aspect = null, $comparison = null)
    {
        if (is_array($aspect)) {
            $useMinMax = false;
            if (isset($aspect['min'])) {
                $this->addUsingAlias(BasemapPeer::ASPECT, $aspect['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aspect['max'])) {
                $this->addUsingAlias(BasemapPeer::ASPECT, $aspect['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BasemapPeer::ASPECT, $aspect, $comparison);
    }

    /**
     * Filter the query on the projection column
     *
     * Example usage:
     * <code>
     * $query->filterByProjection('fooValue');   // WHERE projection = 'fooValue'
     * $query->filterByProjection('%fooValue%'); // WHERE projection LIKE '%fooValue%'
     * </code>
     *
     * @param     string $projection The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByProjection($projection = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($projection)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $projection)) {
                $projection = str_replace('*', '%', $projection);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BasemapPeer::PROJECTION, $projection, $comparison);
    }

    /**
     * Filter the query on the bounding_box column
     *
     * Example usage:
     * <code>
     * $query->filterByBoundingBox('fooValue');   // WHERE bounding_box = 'fooValue'
     * $query->filterByBoundingBox('%fooValue%'); // WHERE bounding_box LIKE '%fooValue%'
     * </code>
     *
     * @param     string $boundingBox The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByBoundingBox($boundingBox = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($boundingBox)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $boundingBox)) {
                $boundingBox = str_replace('*', '%', $boundingBox);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BasemapPeer::BOUNDING_BOX, $boundingBox, $comparison);
    }

    /**
     * Filter the query on the area column
     *
     * Example usage:
     * <code>
     * $query->filterByArea(1234); // WHERE area = 1234
     * $query->filterByArea(array(12, 34)); // WHERE area IN (12, 34)
     * $query->filterByArea(array('min' => 12)); // WHERE area >= 12
     * $query->filterByArea(array('max' => 12)); // WHERE area <= 12
     * </code>
     *
     * @param     mixed $area The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByArea($area = null, $comparison = null)
    {
        if (is_array($area)) {
            $useMinMax = false;
            if (isset($area['min'])) {
                $this->addUsingAlias(BasemapPeer::AREA, $area['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($area['max'])) {
                $this->addUsingAlias(BasemapPeer::AREA, $area['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BasemapPeer::AREA, $area, $comparison);
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
     * Filter the query on the outline_topojson column
     *
     * Example usage:
     * <code>
     * $query->filterByOutlineTopojson('fooValue');   // WHERE outline_topojson = 'fooValue'
     * $query->filterByOutlineTopojson('%fooValue%'); // WHERE outline_topojson LIKE '%fooValue%'
     * </code>
     *
     * @param     string $outlineTopojson The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByOutlineTopojson($outlineTopojson = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($outlineTopojson)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $outlineTopojson)) {
                $outlineTopojson = str_replace('*', '%', $outlineTopojson);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BasemapPeer::OUTLINE_TOPOJSON, $outlineTopojson, $comparison);
    }

    /**
     * Filter the query on the last_edit_step column
     *
     * Example usage:
     * <code>
     * $query->filterByLastEditStep(1234); // WHERE last_edit_step = 1234
     * $query->filterByLastEditStep(array(12, 34)); // WHERE last_edit_step IN (12, 34)
     * $query->filterByLastEditStep(array('min' => 12)); // WHERE last_edit_step >= 12
     * $query->filterByLastEditStep(array('max' => 12)); // WHERE last_edit_step <= 12
     * </code>
     *
     * @param     mixed $lastEditStep The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByLastEditStep($lastEditStep = null, $comparison = null)
    {
        if (is_array($lastEditStep)) {
            $useMinMax = false;
            if (isset($lastEditStep['min'])) {
                $this->addUsingAlias(BasemapPeer::LAST_EDIT_STEP, $lastEditStep['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastEditStep['max'])) {
                $this->addUsingAlias(BasemapPeer::LAST_EDIT_STEP, $lastEditStep['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BasemapPeer::LAST_EDIT_STEP, $lastEditStep, $comparison);
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
     * Filter the query on the published_map column
     *
     * Example usage:
     * <code>
     * $query->filterByPublishedMap('fooValue');   // WHERE published_map = 'fooValue'
     * $query->filterByPublishedMap('%fooValue%'); // WHERE published_map LIKE '%fooValue%'
     * </code>
     *
     * @param     string $publishedMap The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BasemapQuery The current query, for fluid interface
     */
    public function filterByPublishedMap($publishedMap = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($publishedMap)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $publishedMap)) {
                $publishedMap = str_replace('*', '%', $publishedMap);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BasemapPeer::PUBLISHED_MAP, $publishedMap, $comparison);
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
