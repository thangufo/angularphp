<?php


/**
 * Base class that represents a query for the 'states' table.
 *
 *
 *
 * @method StateQuery orderById($order = Criteria::ASC) Order by the id column
 * @method StateQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method StateQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method StateQuery groupById() Group by the id column
 * @method StateQuery groupByCode() Group by the code column
 * @method StateQuery groupByName() Group by the name column
 *
 * @method StateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method StateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method StateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method StateQuery leftJoinCommunity($relationAlias = null) Adds a LEFT JOIN clause to the query using the Community relation
 * @method StateQuery rightJoinCommunity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Community relation
 * @method StateQuery innerJoinCommunity($relationAlias = null) Adds a INNER JOIN clause to the query using the Community relation
 *
 * @method StateQuery leftJoinSponsor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sponsor relation
 * @method StateQuery rightJoinSponsor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sponsor relation
 * @method StateQuery innerJoinSponsor($relationAlias = null) Adds a INNER JOIN clause to the query using the Sponsor relation
 *
 * @method StateQuery leftJoinSchool($relationAlias = null) Adds a LEFT JOIN clause to the query using the School relation
 * @method StateQuery rightJoinSchool($relationAlias = null) Adds a RIGHT JOIN clause to the query using the School relation
 * @method StateQuery innerJoinSchool($relationAlias = null) Adds a INNER JOIN clause to the query using the School relation
 *
 * @method State findOne(PropelPDO $con = null) Return the first State matching the query
 * @method State findOneOrCreate(PropelPDO $con = null) Return the first State matching the query, or a new State object populated from the query conditions when no match is found
 *
 * @method State findOneByCode(string $code) Return the first State filtered by the code column
 * @method State findOneByName(string $name) Return the first State filtered by the name column
 *
 * @method array findById(int $id) Return State objects filtered by the id column
 * @method array findByCode(string $code) Return State objects filtered by the code column
 * @method array findByName(string $name) Return State objects filtered by the name column
 *
 * @package    propel.generator.beaconnow_app.om
 */
abstract class BaseStateQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseStateQuery object.
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
            $modelName = 'State';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new StateQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   StateQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return StateQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof StateQuery) {
            return $criteria;
        }
        $query = new StateQuery(null, null, $modelAlias);

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
     * @return   State|State[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = StatePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(StatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 State A model object, or null if the key is not found
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
     * @return                 State A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `code`, `name` FROM `states` WHERE `id` = :p0';
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
            $obj = new State();
            $obj->hydrate($row);
            StatePeer::addInstanceToPool($obj, (string) $key);
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
     * @return State|State[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|State[]|mixed the list of results, formatted by the current formatter
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
     * @return StateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(StatePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return StateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(StatePeer::ID, $keys, Criteria::IN);
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
     * @return StateQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(StatePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(StatePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%'); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StateQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $code)) {
                $code = str_replace('*', '%', $code);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StatePeer::CODE, $code, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StateQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StatePeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query by a related Community object
     *
     * @param   Community|PropelObjectCollection $community  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 StateQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommunity($community, $comparison = null)
    {
        if ($community instanceof Community) {
            return $this
                ->addUsingAlias(StatePeer::ID, $community->getStateId(), $comparison);
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
     * @return StateQuery The current query, for fluid interface
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
     * Filter the query by a related Sponsor object
     *
     * @param   Sponsor|PropelObjectCollection $sponsor  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 StateQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySponsor($sponsor, $comparison = null)
    {
        if ($sponsor instanceof Sponsor) {
            return $this
                ->addUsingAlias(StatePeer::ID, $sponsor->getStateId(), $comparison);
        } elseif ($sponsor instanceof PropelObjectCollection) {
            return $this
                ->useSponsorQuery()
                ->filterByPrimaryKeys($sponsor->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySponsor() only accepts arguments of type Sponsor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Sponsor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return StateQuery The current query, for fluid interface
     */
    public function joinSponsor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Sponsor');

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
            $this->addJoinObject($join, 'Sponsor');
        }

        return $this;
    }

    /**
     * Use the Sponsor relation Sponsor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SponsorQuery A secondary query class using the current class as primary query
     */
    public function useSponsorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSponsor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sponsor', 'SponsorQuery');
    }

    /**
     * Filter the query by a related School object
     *
     * @param   School|PropelObjectCollection $school  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 StateQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySchool($school, $comparison = null)
    {
        if ($school instanceof School) {
            return $this
                ->addUsingAlias(StatePeer::ID, $school->getStateId(), $comparison);
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
     * @return StateQuery The current query, for fluid interface
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
     * @param   State $state Object to remove from the list of results
     *
     * @return StateQuery The current query, for fluid interface
     */
    public function prune($state = null)
    {
        if ($state) {
            $this->addUsingAlias(StatePeer::ID, $state->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
