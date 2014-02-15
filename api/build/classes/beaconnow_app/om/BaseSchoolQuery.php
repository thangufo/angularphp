<?php


/**
 * Base class that represents a query for the 'schools' table.
 *
 *
 *
 * @method SchoolQuery orderById($order = Criteria::ASC) Order by the id column
 * @method SchoolQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method SchoolQuery orderBySponsorId($order = Criteria::ASC) Order by the sponsor_id column
 * @method SchoolQuery orderByStateId($order = Criteria::ASC) Order by the state_id column
 * @method SchoolQuery orderByTimeZoneId($order = Criteria::ASC) Order by the time_zone_id column
 * @method SchoolQuery orderByContactId($order = Criteria::ASC) Order by the contact_id column
 * @method SchoolQuery orderByCommunityId($order = Criteria::ASC) Order by the community_id column
 * @method SchoolQuery orderByServicenumber($order = Criteria::ASC) Order by the serviceNumber column
 * @method SchoolQuery orderBySchoolname($order = Criteria::ASC) Order by the schoolName column
 * @method SchoolQuery orderBySchoollogo($order = Criteria::ASC) Order by the schoolLogo column
 * @method SchoolQuery orderByNote($order = Criteria::ASC) Order by the note column
 * @method SchoolQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method SchoolQuery orderByZipcode($order = Criteria::ASC) Order by the zipcode column
 * @method SchoolQuery orderByWebsite($order = Criteria::ASC) Order by the website column
 *
 * @method SchoolQuery groupById() Group by the id column
 * @method SchoolQuery groupByUserId() Group by the user_id column
 * @method SchoolQuery groupBySponsorId() Group by the sponsor_id column
 * @method SchoolQuery groupByStateId() Group by the state_id column
 * @method SchoolQuery groupByTimeZoneId() Group by the time_zone_id column
 * @method SchoolQuery groupByContactId() Group by the contact_id column
 * @method SchoolQuery groupByCommunityId() Group by the community_id column
 * @method SchoolQuery groupByServicenumber() Group by the serviceNumber column
 * @method SchoolQuery groupBySchoolname() Group by the schoolName column
 * @method SchoolQuery groupBySchoollogo() Group by the schoolLogo column
 * @method SchoolQuery groupByNote() Group by the note column
 * @method SchoolQuery groupByCity() Group by the city column
 * @method SchoolQuery groupByZipcode() Group by the zipcode column
 * @method SchoolQuery groupByWebsite() Group by the website column
 *
 * @method SchoolQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SchoolQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SchoolQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SchoolQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method SchoolQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method SchoolQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method SchoolQuery leftJoinSponsor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sponsor relation
 * @method SchoolQuery rightJoinSponsor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sponsor relation
 * @method SchoolQuery innerJoinSponsor($relationAlias = null) Adds a INNER JOIN clause to the query using the Sponsor relation
 *
 * @method SchoolQuery leftJoinState($relationAlias = null) Adds a LEFT JOIN clause to the query using the State relation
 * @method SchoolQuery rightJoinState($relationAlias = null) Adds a RIGHT JOIN clause to the query using the State relation
 * @method SchoolQuery innerJoinState($relationAlias = null) Adds a INNER JOIN clause to the query using the State relation
 *
 * @method SchoolQuery leftJoinTimeZone($relationAlias = null) Adds a LEFT JOIN clause to the query using the TimeZone relation
 * @method SchoolQuery rightJoinTimeZone($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TimeZone relation
 * @method SchoolQuery innerJoinTimeZone($relationAlias = null) Adds a INNER JOIN clause to the query using the TimeZone relation
 *
 * @method SchoolQuery leftJoinContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the Contact relation
 * @method SchoolQuery rightJoinContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Contact relation
 * @method SchoolQuery innerJoinContact($relationAlias = null) Adds a INNER JOIN clause to the query using the Contact relation
 *
 * @method SchoolQuery leftJoinCommunity($relationAlias = null) Adds a LEFT JOIN clause to the query using the Community relation
 * @method SchoolQuery rightJoinCommunity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Community relation
 * @method SchoolQuery innerJoinCommunity($relationAlias = null) Adds a INNER JOIN clause to the query using the Community relation
 *
 * @method School findOne(PropelPDO $con = null) Return the first School matching the query
 * @method School findOneOrCreate(PropelPDO $con = null) Return the first School matching the query, or a new School object populated from the query conditions when no match is found
 *
 * @method School findOneByUserId(int $user_id) Return the first School filtered by the user_id column
 * @method School findOneBySponsorId(int $sponsor_id) Return the first School filtered by the sponsor_id column
 * @method School findOneByStateId(int $state_id) Return the first School filtered by the state_id column
 * @method School findOneByTimeZoneId(int $time_zone_id) Return the first School filtered by the time_zone_id column
 * @method School findOneByContactId(int $contact_id) Return the first School filtered by the contact_id column
 * @method School findOneByCommunityId(int $community_id) Return the first School filtered by the community_id column
 * @method School findOneByServicenumber(string $serviceNumber) Return the first School filtered by the serviceNumber column
 * @method School findOneBySchoolname(string $schoolName) Return the first School filtered by the schoolName column
 * @method School findOneBySchoollogo(string $schoolLogo) Return the first School filtered by the schoolLogo column
 * @method School findOneByNote(string $note) Return the first School filtered by the note column
 * @method School findOneByCity(string $city) Return the first School filtered by the city column
 * @method School findOneByZipcode(string $zipcode) Return the first School filtered by the zipcode column
 * @method School findOneByWebsite(string $website) Return the first School filtered by the website column
 *
 * @method array findById(int $id) Return School objects filtered by the id column
 * @method array findByUserId(int $user_id) Return School objects filtered by the user_id column
 * @method array findBySponsorId(int $sponsor_id) Return School objects filtered by the sponsor_id column
 * @method array findByStateId(int $state_id) Return School objects filtered by the state_id column
 * @method array findByTimeZoneId(int $time_zone_id) Return School objects filtered by the time_zone_id column
 * @method array findByContactId(int $contact_id) Return School objects filtered by the contact_id column
 * @method array findByCommunityId(int $community_id) Return School objects filtered by the community_id column
 * @method array findByServicenumber(string $serviceNumber) Return School objects filtered by the serviceNumber column
 * @method array findBySchoolname(string $schoolName) Return School objects filtered by the schoolName column
 * @method array findBySchoollogo(string $schoolLogo) Return School objects filtered by the schoolLogo column
 * @method array findByNote(string $note) Return School objects filtered by the note column
 * @method array findByCity(string $city) Return School objects filtered by the city column
 * @method array findByZipcode(string $zipcode) Return School objects filtered by the zipcode column
 * @method array findByWebsite(string $website) Return School objects filtered by the website column
 *
 * @package    propel.generator.beaconnow_app.om
 */
abstract class BaseSchoolQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSchoolQuery object.
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
            $modelName = 'School';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SchoolQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SchoolQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SchoolQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SchoolQuery) {
            return $criteria;
        }
        $query = new SchoolQuery(null, null, $modelAlias);

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
     * @return   School|School[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SchoolPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 School A model object, or null if the key is not found
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
     * @return                 School A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `user_id`, `sponsor_id`, `state_id`, `time_zone_id`, `contact_id`, `community_id`, `serviceNumber`, `schoolName`, `schoolLogo`, `note`, `city`, `zipcode`, `website` FROM `schools` WHERE `id` = :p0';
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
            $obj = new School();
            $obj->hydrate($row);
            SchoolPeer::addInstanceToPool($obj, (string) $key);
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
     * @return School|School[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|School[]|mixed the list of results, formatted by the current formatter
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
     * @return SchoolQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SchoolPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SchoolQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SchoolPeer::ID, $keys, Criteria::IN);
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
     * @return SchoolQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(SchoolPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(SchoolPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SchoolPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE user_id <= 12
     * </code>
     *
     * @see       filterByUser()
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SchoolQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(SchoolPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(SchoolPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SchoolPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the sponsor_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySponsorId(1234); // WHERE sponsor_id = 1234
     * $query->filterBySponsorId(array(12, 34)); // WHERE sponsor_id IN (12, 34)
     * $query->filterBySponsorId(array('min' => 12)); // WHERE sponsor_id >= 12
     * $query->filterBySponsorId(array('max' => 12)); // WHERE sponsor_id <= 12
     * </code>
     *
     * @see       filterBySponsor()
     *
     * @param     mixed $sponsorId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SchoolQuery The current query, for fluid interface
     */
    public function filterBySponsorId($sponsorId = null, $comparison = null)
    {
        if (is_array($sponsorId)) {
            $useMinMax = false;
            if (isset($sponsorId['min'])) {
                $this->addUsingAlias(SchoolPeer::SPONSOR_ID, $sponsorId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sponsorId['max'])) {
                $this->addUsingAlias(SchoolPeer::SPONSOR_ID, $sponsorId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SchoolPeer::SPONSOR_ID, $sponsorId, $comparison);
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
     * @return SchoolQuery The current query, for fluid interface
     */
    public function filterByStateId($stateId = null, $comparison = null)
    {
        if (is_array($stateId)) {
            $useMinMax = false;
            if (isset($stateId['min'])) {
                $this->addUsingAlias(SchoolPeer::STATE_ID, $stateId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stateId['max'])) {
                $this->addUsingAlias(SchoolPeer::STATE_ID, $stateId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SchoolPeer::STATE_ID, $stateId, $comparison);
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
     * @return SchoolQuery The current query, for fluid interface
     */
    public function filterByTimeZoneId($timeZoneId = null, $comparison = null)
    {
        if (is_array($timeZoneId)) {
            $useMinMax = false;
            if (isset($timeZoneId['min'])) {
                $this->addUsingAlias(SchoolPeer::TIME_ZONE_ID, $timeZoneId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeZoneId['max'])) {
                $this->addUsingAlias(SchoolPeer::TIME_ZONE_ID, $timeZoneId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SchoolPeer::TIME_ZONE_ID, $timeZoneId, $comparison);
    }

    /**
     * Filter the query on the contact_id column
     *
     * Example usage:
     * <code>
     * $query->filterByContactId(1234); // WHERE contact_id = 1234
     * $query->filterByContactId(array(12, 34)); // WHERE contact_id IN (12, 34)
     * $query->filterByContactId(array('min' => 12)); // WHERE contact_id >= 12
     * $query->filterByContactId(array('max' => 12)); // WHERE contact_id <= 12
     * </code>
     *
     * @see       filterByContact()
     *
     * @param     mixed $contactId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SchoolQuery The current query, for fluid interface
     */
    public function filterByContactId($contactId = null, $comparison = null)
    {
        if (is_array($contactId)) {
            $useMinMax = false;
            if (isset($contactId['min'])) {
                $this->addUsingAlias(SchoolPeer::CONTACT_ID, $contactId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contactId['max'])) {
                $this->addUsingAlias(SchoolPeer::CONTACT_ID, $contactId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SchoolPeer::CONTACT_ID, $contactId, $comparison);
    }

    /**
     * Filter the query on the community_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCommunityId(1234); // WHERE community_id = 1234
     * $query->filterByCommunityId(array(12, 34)); // WHERE community_id IN (12, 34)
     * $query->filterByCommunityId(array('min' => 12)); // WHERE community_id >= 12
     * $query->filterByCommunityId(array('max' => 12)); // WHERE community_id <= 12
     * </code>
     *
     * @see       filterByCommunity()
     *
     * @param     mixed $communityId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SchoolQuery The current query, for fluid interface
     */
    public function filterByCommunityId($communityId = null, $comparison = null)
    {
        if (is_array($communityId)) {
            $useMinMax = false;
            if (isset($communityId['min'])) {
                $this->addUsingAlias(SchoolPeer::COMMUNITY_ID, $communityId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($communityId['max'])) {
                $this->addUsingAlias(SchoolPeer::COMMUNITY_ID, $communityId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SchoolPeer::COMMUNITY_ID, $communityId, $comparison);
    }

    /**
     * Filter the query on the serviceNumber column
     *
     * Example usage:
     * <code>
     * $query->filterByServicenumber('fooValue');   // WHERE serviceNumber = 'fooValue'
     * $query->filterByServicenumber('%fooValue%'); // WHERE serviceNumber LIKE '%fooValue%'
     * </code>
     *
     * @param     string $servicenumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SchoolQuery The current query, for fluid interface
     */
    public function filterByServicenumber($servicenumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($servicenumber)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $servicenumber)) {
                $servicenumber = str_replace('*', '%', $servicenumber);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SchoolPeer::SERVICENUMBER, $servicenumber, $comparison);
    }

    /**
     * Filter the query on the schoolName column
     *
     * Example usage:
     * <code>
     * $query->filterBySchoolname('fooValue');   // WHERE schoolName = 'fooValue'
     * $query->filterBySchoolname('%fooValue%'); // WHERE schoolName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schoolname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SchoolQuery The current query, for fluid interface
     */
    public function filterBySchoolname($schoolname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schoolname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schoolname)) {
                $schoolname = str_replace('*', '%', $schoolname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SchoolPeer::SCHOOLNAME, $schoolname, $comparison);
    }

    /**
     * Filter the query on the schoolLogo column
     *
     * Example usage:
     * <code>
     * $query->filterBySchoollogo('fooValue');   // WHERE schoolLogo = 'fooValue'
     * $query->filterBySchoollogo('%fooValue%'); // WHERE schoolLogo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schoollogo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SchoolQuery The current query, for fluid interface
     */
    public function filterBySchoollogo($schoollogo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schoollogo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schoollogo)) {
                $schoollogo = str_replace('*', '%', $schoollogo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SchoolPeer::SCHOOLLOGO, $schoollogo, $comparison);
    }

    /**
     * Filter the query on the note column
     *
     * Example usage:
     * <code>
     * $query->filterByNote('fooValue');   // WHERE note = 'fooValue'
     * $query->filterByNote('%fooValue%'); // WHERE note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $note The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SchoolQuery The current query, for fluid interface
     */
    public function filterByNote($note = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($note)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $note)) {
                $note = str_replace('*', '%', $note);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SchoolPeer::NOTE, $note, $comparison);
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
     * @return SchoolQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SchoolPeer::CITY, $city, $comparison);
    }

    /**
     * Filter the query on the zipcode column
     *
     * Example usage:
     * <code>
     * $query->filterByZipcode('fooValue');   // WHERE zipcode = 'fooValue'
     * $query->filterByZipcode('%fooValue%'); // WHERE zipcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $zipcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SchoolQuery The current query, for fluid interface
     */
    public function filterByZipcode($zipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($zipcode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $zipcode)) {
                $zipcode = str_replace('*', '%', $zipcode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SchoolPeer::ZIPCODE, $zipcode, $comparison);
    }

    /**
     * Filter the query on the website column
     *
     * Example usage:
     * <code>
     * $query->filterByWebsite('fooValue');   // WHERE website = 'fooValue'
     * $query->filterByWebsite('%fooValue%'); // WHERE website LIKE '%fooValue%'
     * </code>
     *
     * @param     string $website The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SchoolQuery The current query, for fluid interface
     */
    public function filterByWebsite($website = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($website)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $website)) {
                $website = str_replace('*', '%', $website);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SchoolPeer::WEBSITE, $website, $comparison);
    }

    /**
     * Filter the query by a related User object
     *
     * @param   User|PropelObjectCollection $user The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SchoolQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof User) {
            return $this
                ->addUsingAlias(SchoolPeer::USER_ID, $user->getId(), $comparison);
        } elseif ($user instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SchoolPeer::USER_ID, $user->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUser() only accepts arguments of type User or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the User relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SchoolQuery The current query, for fluid interface
     */
    public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('User');

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
            $this->addJoinObject($join, 'User');
        }

        return $this;
    }

    /**
     * Use the User relation User object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UserQuery A secondary query class using the current class as primary query
     */
    public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
    }

    /**
     * Filter the query by a related Sponsor object
     *
     * @param   Sponsor|PropelObjectCollection $sponsor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SchoolQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySponsor($sponsor, $comparison = null)
    {
        if ($sponsor instanceof Sponsor) {
            return $this
                ->addUsingAlias(SchoolPeer::SPONSOR_ID, $sponsor->getId(), $comparison);
        } elseif ($sponsor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SchoolPeer::SPONSOR_ID, $sponsor->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return SchoolQuery The current query, for fluid interface
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
     * Filter the query by a related State object
     *
     * @param   State|PropelObjectCollection $state The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SchoolQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByState($state, $comparison = null)
    {
        if ($state instanceof State) {
            return $this
                ->addUsingAlias(SchoolPeer::STATE_ID, $state->getId(), $comparison);
        } elseif ($state instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SchoolPeer::STATE_ID, $state->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return SchoolQuery The current query, for fluid interface
     */
    public function joinState($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useStateQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @return                 SchoolQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTimeZone($timeZone, $comparison = null)
    {
        if ($timeZone instanceof TimeZone) {
            return $this
                ->addUsingAlias(SchoolPeer::TIME_ZONE_ID, $timeZone->getId(), $comparison);
        } elseif ($timeZone instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SchoolPeer::TIME_ZONE_ID, $timeZone->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return SchoolQuery The current query, for fluid interface
     */
    public function joinTimeZone($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useTimeZoneQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTimeZone($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TimeZone', 'TimeZoneQuery');
    }

    /**
     * Filter the query by a related Contact object
     *
     * @param   Contact|PropelObjectCollection $contact The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SchoolQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContact($contact, $comparison = null)
    {
        if ($contact instanceof Contact) {
            return $this
                ->addUsingAlias(SchoolPeer::CONTACT_ID, $contact->getId(), $comparison);
        } elseif ($contact instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SchoolPeer::CONTACT_ID, $contact->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByContact() only accepts arguments of type Contact or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Contact relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SchoolQuery The current query, for fluid interface
     */
    public function joinContact($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Contact');

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
            $this->addJoinObject($join, 'Contact');
        }

        return $this;
    }

    /**
     * Use the Contact relation Contact object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContactQuery A secondary query class using the current class as primary query
     */
    public function useContactQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinContact($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Contact', 'ContactQuery');
    }

    /**
     * Filter the query by a related Community object
     *
     * @param   Community|PropelObjectCollection $community The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SchoolQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommunity($community, $comparison = null)
    {
        if ($community instanceof Community) {
            return $this
                ->addUsingAlias(SchoolPeer::COMMUNITY_ID, $community->getId(), $comparison);
        } elseif ($community instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SchoolPeer::COMMUNITY_ID, $community->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return SchoolQuery The current query, for fluid interface
     */
    public function joinCommunity($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useCommunityQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommunity($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Community', 'CommunityQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   School $school Object to remove from the list of results
     *
     * @return SchoolQuery The current query, for fluid interface
     */
    public function prune($school = null)
    {
        if ($school) {
            $this->addUsingAlias(SchoolPeer::ID, $school->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
