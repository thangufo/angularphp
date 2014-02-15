<?php


/**
 * Base class that represents a query for the 'communities' table.
 *
 *
 *
 * @method CommunityQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommunityQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method CommunityQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method CommunityQuery orderByStateId($order = Criteria::ASC) Order by the state_id column
 * @method CommunityQuery orderByIsactive($order = Criteria::ASC) Order by the isActive column
 * @method CommunityQuery orderByTimeZoneId($order = Criteria::ASC) Order by the time_zone_id column
 * @method CommunityQuery orderByContactname($order = Criteria::ASC) Order by the contactName column
 * @method CommunityQuery orderByContactphone($order = Criteria::ASC) Order by the contactPhone column
 * @method CommunityQuery orderByContactemail($order = Criteria::ASC) Order by the contactEmail column
 *
 * @method CommunityQuery groupById() Group by the id column
 * @method CommunityQuery groupByName() Group by the name column
 * @method CommunityQuery groupByCity() Group by the city column
 * @method CommunityQuery groupByStateId() Group by the state_id column
 * @method CommunityQuery groupByIsactive() Group by the isActive column
 * @method CommunityQuery groupByTimeZoneId() Group by the time_zone_id column
 * @method CommunityQuery groupByContactname() Group by the contactName column
 * @method CommunityQuery groupByContactphone() Group by the contactPhone column
 * @method CommunityQuery groupByContactemail() Group by the contactEmail column
 *
 * @method CommunityQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommunityQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommunityQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommunityQuery leftJoinState($relationAlias = null) Adds a LEFT JOIN clause to the query using the State relation
 * @method CommunityQuery rightJoinState($relationAlias = null) Adds a RIGHT JOIN clause to the query using the State relation
 * @method CommunityQuery innerJoinState($relationAlias = null) Adds a INNER JOIN clause to the query using the State relation
 *
 * @method CommunityQuery leftJoinTimeZone($relationAlias = null) Adds a LEFT JOIN clause to the query using the TimeZone relation
 * @method CommunityQuery rightJoinTimeZone($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TimeZone relation
 * @method CommunityQuery innerJoinTimeZone($relationAlias = null) Adds a INNER JOIN clause to the query using the TimeZone relation
 *
 * @method CommunityQuery leftJoinSchool($relationAlias = null) Adds a LEFT JOIN clause to the query using the School relation
 * @method CommunityQuery rightJoinSchool($relationAlias = null) Adds a RIGHT JOIN clause to the query using the School relation
 * @method CommunityQuery innerJoinSchool($relationAlias = null) Adds a INNER JOIN clause to the query using the School relation
 *
 * @method Community findOne(PropelPDO $con = null) Return the first Community matching the query
 * @method Community findOneOrCreate(PropelPDO $con = null) Return the first Community matching the query, or a new Community object populated from the query conditions when no match is found
 *
 * @method Community findOneByName(string $name) Return the first Community filtered by the name column
 * @method Community findOneByCity(string $city) Return the first Community filtered by the city column
 * @method Community findOneByStateId(int $state_id) Return the first Community filtered by the state_id column
 * @method Community findOneByIsactive(int $isActive) Return the first Community filtered by the isActive column
 * @method Community findOneByTimeZoneId(int $time_zone_id) Return the first Community filtered by the time_zone_id column
 * @method Community findOneByContactname(string $contactName) Return the first Community filtered by the contactName column
 * @method Community findOneByContactphone(string $contactPhone) Return the first Community filtered by the contactPhone column
 * @method Community findOneByContactemail(string $contactEmail) Return the first Community filtered by the contactEmail column
 *
 * @method array findById(int $id) Return Community objects filtered by the id column
 * @method array findByName(string $name) Return Community objects filtered by the name column
 * @method array findByCity(string $city) Return Community objects filtered by the city column
 * @method array findByStateId(int $state_id) Return Community objects filtered by the state_id column
 * @method array findByIsactive(int $isActive) Return Community objects filtered by the isActive column
 * @method array findByTimeZoneId(int $time_zone_id) Return Community objects filtered by the time_zone_id column
 * @method array findByContactname(string $contactName) Return Community objects filtered by the contactName column
 * @method array findByContactphone(string $contactPhone) Return Community objects filtered by the contactPhone column
 * @method array findByContactemail(string $contactEmail) Return Community objects filtered by the contactEmail column
 *
 * @package    propel.generator.beaconnow_app.om
 */
abstract class BaseCommunityQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommunityQuery object.
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
            $modelName = 'Community';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommunityQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommunityQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommunityQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommunityQuery) {
            return $criteria;
        }
        $query = new CommunityQuery(null, null, $modelAlias);

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
     * @return   Community|Community[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommunityPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommunityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Community A model object, or null if the key is not found
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
     * @return                 Community A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `name`, `city`, `state_id`, `isActive`, `time_zone_id`, `contactName`, `contactPhone`, `contactEmail` FROM `communities` WHERE `id` = :p0';
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
            $obj = new Community();
            $obj->hydrate($row);
            CommunityPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Community|Community[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Community[]|mixed the list of results, formatted by the current formatter
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
     * @return CommunityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommunityPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommunityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommunityPeer::ID, $keys, Criteria::IN);
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
     * @return CommunityQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommunityPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommunityPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommunityPeer::ID, $id, $comparison);
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
     * @return CommunityQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommunityPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the city column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
     * $query->filterByCity('%fooValue%'); // WHERE city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommunityQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $city)) {
                $city = str_replace('*', '%', $city);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommunityPeer::CITY, $city, $comparison);
    }

    /**
     * Filter the query on the state_id column
     *
     * Example usage:
     * <code>
     * $query->filterByStateId(1234); // WHERE state_id = 1234
     * $query->filterByStateId(array(12, 34)); // WHERE state_id IN (12, 34)
     * $query->filterByStateId(array('min' => 12)); // WHERE state_id >= 12
     * $query->filterByStateId(array('max' => 12)); // WHERE state_id <= 12
     * </code>
     *
     * @see       filterByState()
     *
     * @param     mixed $stateId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommunityQuery The current query, for fluid interface
     */
    public function filterByStateId($stateId = null, $comparison = null)
    {
        if (is_array($stateId)) {
            $useMinMax = false;
            if (isset($stateId['min'])) {
                $this->addUsingAlias(CommunityPeer::STATE_ID, $stateId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stateId['max'])) {
                $this->addUsingAlias(CommunityPeer::STATE_ID, $stateId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommunityPeer::STATE_ID, $stateId, $comparison);
    }

    /**
     * Filter the query on the isActive column
     *
     * Example usage:
     * <code>
     * $query->filterByIsactive(1234); // WHERE isActive = 1234
     * $query->filterByIsactive(array(12, 34)); // WHERE isActive IN (12, 34)
     * $query->filterByIsactive(array('min' => 12)); // WHERE isActive >= 12
     * $query->filterByIsactive(array('max' => 12)); // WHERE isActive <= 12
     * </code>
     *
     * @param     mixed $isactive The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommunityQuery The current query, for fluid interface
     */
    public function filterByIsactive($isactive = null, $comparison = null)
    {
        if (is_array($isactive)) {
            $useMinMax = false;
            if (isset($isactive['min'])) {
                $this->addUsingAlias(CommunityPeer::ISACTIVE, $isactive['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isactive['max'])) {
                $this->addUsingAlias(CommunityPeer::ISACTIVE, $isactive['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommunityPeer::ISACTIVE, $isactive, $comparison);
    }

    /**
     * Filter the query on the time_zone_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeZoneId(1234); // WHERE time_zone_id = 1234
     * $query->filterByTimeZoneId(array(12, 34)); // WHERE time_zone_id IN (12, 34)
     * $query->filterByTimeZoneId(array('min' => 12)); // WHERE time_zone_id >= 12
     * $query->filterByTimeZoneId(array('max' => 12)); // WHERE time_zone_id <= 12
     * </code>
     *
     * @see       filterByTimeZone()
     *
     * @param     mixed $timeZoneId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommunityQuery The current query, for fluid interface
     */
    public function filterByTimeZoneId($timeZoneId = null, $comparison = null)
    {
        if (is_array($timeZoneId)) {
            $useMinMax = false;
            if (isset($timeZoneId['min'])) {
                $this->addUsingAlias(CommunityPeer::TIME_ZONE_ID, $timeZoneId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeZoneId['max'])) {
                $this->addUsingAlias(CommunityPeer::TIME_ZONE_ID, $timeZoneId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommunityPeer::TIME_ZONE_ID, $timeZoneId, $comparison);
    }

    /**
     * Filter the query on the contactName column
     *
     * Example usage:
     * <code>
     * $query->filterByContactname('fooValue');   // WHERE contactName = 'fooValue'
     * $query->filterByContactname('%fooValue%'); // WHERE contactName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommunityQuery The current query, for fluid interface
     */
    public function filterByContactname($contactname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contactname)) {
                $contactname = str_replace('*', '%', $contactname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommunityPeer::CONTACTNAME, $contactname, $comparison);
    }

    /**
     * Filter the query on the contactPhone column
     *
     * Example usage:
     * <code>
     * $query->filterByContactphone('fooValue');   // WHERE contactPhone = 'fooValue'
     * $query->filterByContactphone('%fooValue%'); // WHERE contactPhone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactphone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommunityQuery The current query, for fluid interface
     */
    public function filterByContactphone($contactphone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactphone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contactphone)) {
                $contactphone = str_replace('*', '%', $contactphone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommunityPeer::CONTACTPHONE, $contactphone, $comparison);
    }

    /**
     * Filter the query on the contactEmail column
     *
     * Example usage:
     * <code>
     * $query->filterByContactemail('fooValue');   // WHERE contactEmail = 'fooValue'
     * $query->filterByContactemail('%fooValue%'); // WHERE contactEmail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactemail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommunityQuery The current query, for fluid interface
     */
    public function filterByContactemail($contactemail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactemail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contactemail)) {
                $contactemail = str_replace('*', '%', $contactemail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommunityPeer::CONTACTEMAIL, $contactemail, $comparison);
    }

    /**
     * Filter the query by a related State object
     *
     * @param   State|PropelObjectCollection $state The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommunityQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByState($state, $comparison = null)
    {
        if ($state instanceof State) {
            return $this
                ->addUsingAlias(CommunityPeer::STATE_ID, $state->getId(), $comparison);
        } elseif ($state instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommunityPeer::STATE_ID, $state->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByState() only accepts arguments of type State or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the State relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommunityQuery The current query, for fluid interface
     */
    public function joinState($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('State');

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
            $this->addJoinObject($join, 'State');
        }

        return $this;
    }

    /**
     * Use the State relation State object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   StateQuery A secondary query class using the current class as primary query
     */
    public function useStateQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinState($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'State', 'StateQuery');
    }

    /**
     * Filter the query by a related TimeZone object
     *
     * @param   TimeZone|PropelObjectCollection $timeZone The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommunityQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTimeZone($timeZone, $comparison = null)
    {
        if ($timeZone instanceof TimeZone) {
            return $this
                ->addUsingAlias(CommunityPeer::TIME_ZONE_ID, $timeZone->getId(), $comparison);
        } elseif ($timeZone instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommunityPeer::TIME_ZONE_ID, $timeZone->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByTimeZone() only accepts arguments of type TimeZone or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TimeZone relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommunityQuery The current query, for fluid interface
     */
    public function joinTimeZone($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TimeZone');

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
            $this->addJoinObject($join, 'TimeZone');
        }

        return $this;
    }

    /**
     * Use the TimeZone relation TimeZone object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TimeZoneQuery A secondary query class using the current class as primary query
     */
    public function useTimeZoneQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTimeZone($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TimeZone', 'TimeZoneQuery');
    }

    /**
     * Filter the query by a related School object
     *
     * @param   School|PropelObjectCollection $school  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommunityQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySchool($school, $comparison = null)
    {
        if ($school instanceof School) {
            return $this
                ->addUsingAlias(CommunityPeer::ID, $school->getCommunityId(), $comparison);
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
     * @return CommunityQuery The current query, for fluid interface
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
     * @param   Community $community Object to remove from the list of results
     *
     * @return CommunityQuery The current query, for fluid interface
     */
    public function prune($community = null)
    {
        if ($community) {
            $this->addUsingAlias(CommunityPeer::ID, $community->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
