<?php


/**
 * Base class that represents a query for the 'region' table.
 *
 *
 *
 * @method RegionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method RegionQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method RegionQuery orderByAspect($order = Criteria::ASC) Order by the aspect column
 * @method RegionQuery orderByProjection($order = Criteria::ASC) Order by the projection column
 * @method RegionQuery orderByArea($order = Criteria::ASC) Order by the area column
 * @method RegionQuery orderByBoundingBox($order = Criteria::ASC) Order by the bounding_box column
 * @method RegionQuery orderByOutlineTopojson($order = Criteria::ASC) Order by the outline_topojson column
 *
 * @method RegionQuery groupById() Group by the id column
 * @method RegionQuery groupByTitle() Group by the title column
 * @method RegionQuery groupByAspect() Group by the aspect column
 * @method RegionQuery groupByProjection() Group by the projection column
 * @method RegionQuery groupByArea() Group by the area column
 * @method RegionQuery groupByBoundingBox() Group by the bounding_box column
 * @method RegionQuery groupByOutlineTopojson() Group by the outline_topojson column
 *
 * @method RegionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RegionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RegionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RegionQuery leftJoinBasemap($relationAlias = null) Adds a LEFT JOIN clause to the query using the Basemap relation
 * @method RegionQuery rightJoinBasemap($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Basemap relation
 * @method RegionQuery innerJoinBasemap($relationAlias = null) Adds a INNER JOIN clause to the query using the Basemap relation
 *
 * @method Region findOne(PropelPDO $con = null) Return the first Region matching the query
 * @method Region findOneOrCreate(PropelPDO $con = null) Return the first Region matching the query, or a new Region object populated from the query conditions when no match is found
 *
 * @method Region findOneByTitle(string $title) Return the first Region filtered by the title column
 * @method Region findOneByAspect(double $aspect) Return the first Region filtered by the aspect column
 * @method Region findOneByProjection(string $projection) Return the first Region filtered by the projection column
 * @method Region findOneByArea(string $area) Return the first Region filtered by the area column
 * @method Region findOneByBoundingBox(string $bounding_box) Return the first Region filtered by the bounding_box column
 * @method Region findOneByOutlineTopojson(string $outline_topojson) Return the first Region filtered by the outline_topojson column
 *
 * @method array findById(string $id) Return Region objects filtered by the id column
 * @method array findByTitle(string $title) Return Region objects filtered by the title column
 * @method array findByAspect(double $aspect) Return Region objects filtered by the aspect column
 * @method array findByProjection(string $projection) Return Region objects filtered by the projection column
 * @method array findByArea(string $area) Return Region objects filtered by the area column
 * @method array findByBoundingBox(string $bounding_box) Return Region objects filtered by the bounding_box column
 * @method array findByOutlineTopojson(string $outline_topojson) Return Region objects filtered by the outline_topojson column
 *
 * @package    propel.generator.datawrapper.om
 */
abstract class BaseRegionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRegionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'datawrapper', $modelName = 'Region', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RegionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RegionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RegionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RegionQuery) {
            return $criteria;
        }
        $query = new RegionQuery();
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
     * @return   Region|Region[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RegionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RegionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Region A model object, or null if the key is not found
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
     * @return                 Region A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `title`, `aspect`, `projection`, `area`, `bounding_box`, `outline_topojson` FROM `region` WHERE `id` = :p0';
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
            $obj = new Region();
            $obj->hydrate($row);
            RegionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Region|Region[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Region[]|mixed the list of results, formatted by the current formatter
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
     * @return RegionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RegionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RegionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RegionPeer::ID, $keys, Criteria::IN);
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
     * @return RegionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RegionPeer::ID, $id, $comparison);
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
     * @return RegionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RegionPeer::TITLE, $title, $comparison);
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
     * @return RegionQuery The current query, for fluid interface
     */
    public function filterByAspect($aspect = null, $comparison = null)
    {
        if (is_array($aspect)) {
            $useMinMax = false;
            if (isset($aspect['min'])) {
                $this->addUsingAlias(RegionPeer::ASPECT, $aspect['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aspect['max'])) {
                $this->addUsingAlias(RegionPeer::ASPECT, $aspect['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RegionPeer::ASPECT, $aspect, $comparison);
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
     * @return RegionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RegionPeer::PROJECTION, $projection, $comparison);
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
     * @return RegionQuery The current query, for fluid interface
     */
    public function filterByArea($area = null, $comparison = null)
    {
        if (is_array($area)) {
            $useMinMax = false;
            if (isset($area['min'])) {
                $this->addUsingAlias(RegionPeer::AREA, $area['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($area['max'])) {
                $this->addUsingAlias(RegionPeer::AREA, $area['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RegionPeer::AREA, $area, $comparison);
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
     * @return RegionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RegionPeer::BOUNDING_BOX, $boundingBox, $comparison);
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
     * @return RegionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RegionPeer::OUTLINE_TOPOJSON, $outlineTopojson, $comparison);
    }

    /**
     * Filter the query by a related Basemap object
     *
     * @param   Basemap|PropelObjectCollection $basemap  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RegionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByBasemap($basemap, $comparison = null)
    {
        if ($basemap instanceof Basemap) {
            return $this
                ->addUsingAlias(RegionPeer::ID, $basemap->getRegionId(), $comparison);
        } elseif ($basemap instanceof PropelObjectCollection) {
            return $this
                ->useBasemapQuery()
                ->filterByPrimaryKeys($basemap->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBasemap() only accepts arguments of type Basemap or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Basemap relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RegionQuery The current query, for fluid interface
     */
    public function joinBasemap($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Basemap');

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
            $this->addJoinObject($join, 'Basemap');
        }

        return $this;
    }

    /**
     * Use the Basemap relation Basemap object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   BasemapQuery A secondary query class using the current class as primary query
     */
    public function useBasemapQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBasemap($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Basemap', 'BasemapQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Region $region Object to remove from the list of results
     *
     * @return RegionQuery The current query, for fluid interface
     */
    public function prune($region = null)
    {
        if ($region) {
            $this->addUsingAlias(RegionPeer::ID, $region->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
