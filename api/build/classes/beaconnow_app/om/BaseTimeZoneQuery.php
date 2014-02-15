<?php


/**
 * Base class that represents a query for the 'time_zones' table.
 *
 *
 *
 * @method TimeZoneQuery orderById($order = Criteria::ASC) Order by the id column
 * @method TimeZoneQuery orderByTimezonevalue($order = Criteria::ASC) Order by the timeZoneValue column
 * @method TimeZoneQuery orderByTimezonename($order = Criteria::ASC) Order by the timeZoneName column
 *
 * @method TimeZoneQuery groupById() Group by the id column
 * @method TimeZoneQuery groupByTimezonevalue() Group by the timeZoneValue column
 * @method TimeZoneQuery groupByTimezonename() Group by the timeZoneName column
 *
 * @method TimeZoneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TimeZoneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TimeZoneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TimeZoneQuery leftJoinCommunity($relationAlias = null) Adds a LEFT JOIN clause to the query using the Community relation
 * @method TimeZoneQuery rightJoinCommunity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Community relation
 * @method TimeZoneQuery innerJoinCommunity($relationAlias = null) Adds a INNER JOIN clause to the query using the Community relation
 *
 * @method TimeZoneQuery leftJoinSchool($relationAlias = null) Adds a LEFT JOIN clause to the query using the School relation
 * @method TimeZoneQuery rightJoinSchool($relationAlias = null) Adds a RIGHT JOIN clause to the query using the School relation
 * @method TimeZoneQuery innerJoinSchool($relationAlias = null) Adds a INNER JOIN clause to the query using the School relation
 *
 * @method TimeZone findOne(PropelPDO $con = null) Return the first TimeZone matching the query
 * @method TimeZone findOneOrCreate(PropelPDO $con = null) Return the first TimeZone matching the query, or a new TimeZone object populated from the query conditions when no match is found
 *
 * @method TimeZone findOneByTimezonevalue(int $timeZoneValue) Return the first TimeZone filtered by the timeZoneValue column
 * @method TimeZone findOneByTimezonename(string $timeZoneName) Return the first TimeZone filtered by the timeZoneName column
 *
 * @method array findById(int $id) Return TimeZone objects filtered by the id column
 * @method array findByTimezonevalue(int $timeZoneValue) Return TimeZone objects filtered by the timeZoneValue column
 * @method array findByTimezonename(string $timeZoneName) Return TimeZone objects filtered by the timeZoneName column
 *
 * @package    propel.generator.beaconnow_app.om
 */
abstract class BaseTimeZoneQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTimeZoneQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'beaconnow_app';
        }
        if (null === $modelName) {
            $modelName = 'TimeZone';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TimeZoneQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TimeZoneQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TimeZoneQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TimeZoneQuery) {
            return $criteria;
        }
        $query = new TimeZoneQuery(null, null, $modelAlias);

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
     * @return   TimeZone|TimeZone[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TimeZonePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TimeZonePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TimeZone A model object, or null if the key is not found
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
     * @return                 TimeZone A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `timeZoneValue`, `timeZoneName` FROM `time_zones` WHERE `id` = :p0';
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
            $obj = new TimeZone();
            $obj->hydrate($row);
            TimeZonePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TimeZone|TimeZone[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TimeZone[]|mixed the list of results, formatted by the current formatter
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
     * @return TimeZoneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TimeZonePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TimeZoneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TimeZonePeer::ID, $keys, Criteria::IN);
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
     * @return TimeZoneQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TimeZonePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TimeZonePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TimeZonePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the timeZoneValue column
     *
     * Example usage:
     * <code>
     * $query->filterByTimezonevalue(1234); // WHERE timeZoneValue = 1234
     * $query->filterByTimezonevalue(array(12, 34)); // WHERE timeZoneValue IN (12, 34)
     * $query->filterByTimezonevalue(array('min' => 12)); // WHERE timeZoneValue >= 12
     * $query->filterByTimezonevalue(array('max' => 12)); // WHERE timeZoneValue <= 12
     * </code>
     *
     * @param     mixed $timezonevalue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TimeZoneQuery The current query, for fluid interface
     */
    public function filterByTimezonevalue($timezonevalue = null, $comparison = null)
    {
        if (is_array($timezonevalue)) {
            $useMinMax = false;
            if (isset($timezonevalue['min'])) {
                $this->addUsingAlias(TimeZonePeer::TIMEZONEVALUE, $timezonevalue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timezonevalue['max'])) {
                $this->addUsingAlias(TimeZonePeer::TIMEZONEVALUE, $timezonevalue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TimeZonePeer::TIMEZONEVALUE, $timezonevalue, $comparison);
    }

    /**
     * Filter the query on the timeZoneName column
     *
     * Example usage:
     * <code>
     * $query->filterByTimezonename('fooValue');   // WHERE timeZoneName = 'fooValue'
     * $query->filterByTimezonename('%fooValue%'); // WHERE timeZoneName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $timezonename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TimeZoneQuery The current query, for fluid interface
     */
    public function filterByTimezonename($timezonename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timezonename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $timezonename)) {
                $timezonename = str_replace('*', '%', $timezonename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TimeZonePeer::TIMEZONENAME, $timezonename, $comparison);
    }

    /**
     * Filter the query by a related Community object
     *
     * @param   Community|PropelObjectCollection $community  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TimeZoneQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommunity($community, $comparison = null)
    {
        if ($community instanceof Community) {
            return $this
                ->addUsingAlias(TimeZonePeer::ID, $community->getTimeZoneId(), $comparison);
        } elseif ($community instanceof PropelObjectCollection) {
            return $this
                ->useCommunityQuery()
                ->filterByPrimaryKeys($community->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommunity() only accepts arguments of type Community or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Community relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TimeZoneQuery The current query, for fluid interface
     */
    public function joinCommunity($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Community');

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
            $this->addJoinObject($join, 'Community');
        }

        return $this;
    }

    /**
     * Use the Community relation Community object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommunityQuery A secondary query class using the current class as primary query
     */
    public function useCommunityQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommunity($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Community', 'CommunityQuery');
    }

    /**
     * Filter the query by a related School object
     *
     * @param   School|PropelObjectCollection $school  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TimeZoneQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySchool($school, $comparison = null)
    {
        if ($school instanceof School) {
            return $this
                ->addUsingAlias(TimeZonePeer::ID, $school->getTimeZoneId(), $comparison);
        } elseif ($school instanceof PropelObjectCollection) {
            return $this
                ->useSchoolQuery()
                ->filterByPrimaryKeys($school->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySchool() only accepts arguments of type School or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the School relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TimeZoneQuery The current query, for fluid interface
     */
    public function joinSchool($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('School');

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
            $this->addJoinObject($join, 'School');
        }

        return $this;
    }

    /**
     * Use the School relation School object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SchoolQuery A secondary query class using the current class as primary query
     */
    public function useSchoolQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSchool($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'School', 'SchoolQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   TimeZone $timeZone Object to remove from the list of results
     *
     * @return TimeZoneQuery The current query, for fluid interface
     */
    public function prune($timeZone = null)
    {
        if ($timeZone) {
            $this->addUsingAlias(TimeZonePeer::ID, $timeZone->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
