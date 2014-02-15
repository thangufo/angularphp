<?php


/**
 * Base class that represents a query for the 'sponsors' table.
 *
 *
 *
 * @method SponsorQuery orderById($order = Criteria::ASC) Order by the id column
 * @method SponsorQuery orderByContactId($order = Criteria::ASC) Order by the contact_id column
 * @method SponsorQuery orderByStateId($order = Criteria::ASC) Order by the state_id column
 * @method SponsorQuery orderBySponsorlogo($order = Criteria::ASC) Order by the sponsorLogo column
 * @method SponsorQuery orderBySponsorname($order = Criteria::ASC) Order by the sponsorName column
 * @method SponsorQuery orderBySponsormessage($order = Criteria::ASC) Order by the sponsorMessage column
 * @method SponsorQuery orderBySponsortextmessage($order = Criteria::ASC) Order by the sponsorTextMessage column
 * @method SponsorQuery orderByMaketingcontact($order = Criteria::ASC) Order by the maketingContact column
 * @method SponsorQuery orderByMaketingphone($order = Criteria::ASC) Order by the maketingPhone column
 * @method SponsorQuery orderByMaketingemail($order = Criteria::ASC) Order by the maketingEmail column
 * @method SponsorQuery orderByWebsite($order = Criteria::ASC) Order by the website column
 * @method SponsorQuery orderByNote($order = Criteria::ASC) Order by the note column
 * @method SponsorQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method SponsorQuery orderByZipcode($order = Criteria::ASC) Order by the zipcode column
 * @method SponsorQuery orderByCreated($order = Criteria::ASC) Order by the created column
 * @method SponsorQuery orderByModified($order = Criteria::ASC) Order by the modified column
 *
 * @method SponsorQuery groupById() Group by the id column
 * @method SponsorQuery groupByContactId() Group by the contact_id column
 * @method SponsorQuery groupByStateId() Group by the state_id column
 * @method SponsorQuery groupBySponsorlogo() Group by the sponsorLogo column
 * @method SponsorQuery groupBySponsorname() Group by the sponsorName column
 * @method SponsorQuery groupBySponsormessage() Group by the sponsorMessage column
 * @method SponsorQuery groupBySponsortextmessage() Group by the sponsorTextMessage column
 * @method SponsorQuery groupByMaketingcontact() Group by the maketingContact column
 * @method SponsorQuery groupByMaketingphone() Group by the maketingPhone column
 * @method SponsorQuery groupByMaketingemail() Group by the maketingEmail column
 * @method SponsorQuery groupByWebsite() Group by the website column
 * @method SponsorQuery groupByNote() Group by the note column
 * @method SponsorQuery groupByCity() Group by the city column
 * @method SponsorQuery groupByZipcode() Group by the zipcode column
 * @method SponsorQuery groupByCreated() Group by the created column
 * @method SponsorQuery groupByModified() Group by the modified column
 *
 * @method SponsorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SponsorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SponsorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SponsorQuery leftJoinContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the Contact relation
 * @method SponsorQuery rightJoinContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Contact relation
 * @method SponsorQuery innerJoinContact($relationAlias = null) Adds a INNER JOIN clause to the query using the Contact relation
 *
 * @method SponsorQuery leftJoinState($relationAlias = null) Adds a LEFT JOIN clause to the query using the State relation
 * @method SponsorQuery rightJoinState($relationAlias = null) Adds a RIGHT JOIN clause to the query using the State relation
 * @method SponsorQuery innerJoinState($relationAlias = null) Adds a INNER JOIN clause to the query using the State relation
 *
 * @method SponsorQuery leftJoinSchool($relationAlias = null) Adds a LEFT JOIN clause to the query using the School relation
 * @method SponsorQuery rightJoinSchool($relationAlias = null) Adds a RIGHT JOIN clause to the query using the School relation
 * @method SponsorQuery innerJoinSchool($relationAlias = null) Adds a INNER JOIN clause to the query using the School relation
 *
 * @method Sponsor findOne(PropelPDO $con = null) Return the first Sponsor matching the query
 * @method Sponsor findOneOrCreate(PropelPDO $con = null) Return the first Sponsor matching the query, or a new Sponsor object populated from the query conditions when no match is found
 *
 * @method Sponsor findOneByContactId(int $contact_id) Return the first Sponsor filtered by the contact_id column
 * @method Sponsor findOneByStateId(int $state_id) Return the first Sponsor filtered by the state_id column
 * @method Sponsor findOneBySponsorlogo(string $sponsorLogo) Return the first Sponsor filtered by the sponsorLogo column
 * @method Sponsor findOneBySponsorname(string $sponsorName) Return the first Sponsor filtered by the sponsorName column
 * @method Sponsor findOneBySponsormessage(string $sponsorMessage) Return the first Sponsor filtered by the sponsorMessage column
 * @method Sponsor findOneBySponsortextmessage(string $sponsorTextMessage) Return the first Sponsor filtered by the sponsorTextMessage column
 * @method Sponsor findOneByMaketingcontact(string $maketingContact) Return the first Sponsor filtered by the maketingContact column
 * @method Sponsor findOneByMaketingphone(string $maketingPhone) Return the first Sponsor filtered by the maketingPhone column
 * @method Sponsor findOneByMaketingemail(string $maketingEmail) Return the first Sponsor filtered by the maketingEmail column
 * @method Sponsor findOneByWebsite(string $website) Return the first Sponsor filtered by the website column
 * @method Sponsor findOneByNote(string $note) Return the first Sponsor filtered by the note column
 * @method Sponsor findOneByCity(string $city) Return the first Sponsor filtered by the city column
 * @method Sponsor findOneByZipcode(string $zipcode) Return the first Sponsor filtered by the zipcode column
 * @method Sponsor findOneByCreated(string $created) Return the first Sponsor filtered by the created column
 * @method Sponsor findOneByModified(string $modified) Return the first Sponsor filtered by the modified column
 *
 * @method array findById(int $id) Return Sponsor objects filtered by the id column
 * @method array findByContactId(int $contact_id) Return Sponsor objects filtered by the contact_id column
 * @method array findByStateId(int $state_id) Return Sponsor objects filtered by the state_id column
 * @method array findBySponsorlogo(string $sponsorLogo) Return Sponsor objects filtered by the sponsorLogo column
 * @method array findBySponsorname(string $sponsorName) Return Sponsor objects filtered by the sponsorName column
 * @method array findBySponsormessage(string $sponsorMessage) Return Sponsor objects filtered by the sponsorMessage column
 * @method array findBySponsortextmessage(string $sponsorTextMessage) Return Sponsor objects filtered by the sponsorTextMessage column
 * @method array findByMaketingcontact(string $maketingContact) Return Sponsor objects filtered by the maketingContact column
 * @method array findByMaketingphone(string $maketingPhone) Return Sponsor objects filtered by the maketingPhone column
 * @method array findByMaketingemail(string $maketingEmail) Return Sponsor objects filtered by the maketingEmail column
 * @method array findByWebsite(string $website) Return Sponsor objects filtered by the website column
 * @method array findByNote(string $note) Return Sponsor objects filtered by the note column
 * @method array findByCity(string $city) Return Sponsor objects filtered by the city column
 * @method array findByZipcode(string $zipcode) Return Sponsor objects filtered by the zipcode column
 * @method array findByCreated(string $created) Return Sponsor objects filtered by the created column
 * @method array findByModified(string $modified) Return Sponsor objects filtered by the modified column
 *
 * @package    propel.generator.beaconnow_app.om
 */
abstract class BaseSponsorQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSponsorQuery object.
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
            $modelName = 'Sponsor';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SponsorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SponsorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SponsorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SponsorQuery) {
            return $criteria;
        }
        $query = new SponsorQuery(null, null, $modelAlias);

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
     * @return   Sponsor|Sponsor[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SponsorPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SponsorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Sponsor A model object, or null if the key is not found
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
     * @return                 Sponsor A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `contact_id`, `state_id`, `sponsorLogo`, `sponsorName`, `sponsorMessage`, `sponsorTextMessage`, `maketingContact`, `maketingPhone`, `maketingEmail`, `website`, `note`, `city`, `zipcode`, `created`, `modified` FROM `sponsors` WHERE `id` = :p0';
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
            $obj = new Sponsor();
            $obj->hydrate($row);
            SponsorPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Sponsor|Sponsor[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Sponsor[]|mixed the list of results, formatted by the current formatter
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
     * @return SponsorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SponsorPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SponsorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SponsorPeer::ID, $keys, Criteria::IN);
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
     * @return SponsorQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(SponsorPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(SponsorPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SponsorPeer::ID, $id, $comparison);
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
     * @return SponsorQuery The current query, for fluid interface
     */
    public function filterByContactId($contactId = null, $comparison = null)
    {
        if (is_array($contactId)) {
            $useMinMax = false;
            if (isset($contactId['min'])) {
                $this->addUsingAlias(SponsorPeer::CONTACT_ID, $contactId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contactId['max'])) {
                $this->addUsingAlias(SponsorPeer::CONTACT_ID, $contactId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SponsorPeer::CONTACT_ID, $contactId, $comparison);
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
     * @return SponsorQuery The current query, for fluid interface
     */
    public function filterByStateId($stateId = null, $comparison = null)
    {
        if (is_array($stateId)) {
            $useMinMax = false;
            if (isset($stateId['min'])) {
                $this->addUsingAlias(SponsorPeer::STATE_ID, $stateId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stateId['max'])) {
                $this->addUsingAlias(SponsorPeer::STATE_ID, $stateId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SponsorPeer::STATE_ID, $stateId, $comparison);
    }

    /**
     * Filter the query on the sponsorLogo column
     *
     * Example usage:
     * <code>
     * $query->filterBySponsorlogo('fooValue');   // WHERE sponsorLogo = 'fooValue'
     * $query->filterBySponsorlogo('%fooValue%'); // WHERE sponsorLogo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sponsorlogo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorQuery The current query, for fluid interface
     */
    public function filterBySponsorlogo($sponsorlogo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sponsorlogo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sponsorlogo)) {
                $sponsorlogo = str_replace('*', '%', $sponsorlogo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorPeer::SPONSORLOGO, $sponsorlogo, $comparison);
    }

    /**
     * Filter the query on the sponsorName column
     *
     * Example usage:
     * <code>
     * $query->filterBySponsorname('fooValue');   // WHERE sponsorName = 'fooValue'
     * $query->filterBySponsorname('%fooValue%'); // WHERE sponsorName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sponsorname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorQuery The current query, for fluid interface
     */
    public function filterBySponsorname($sponsorname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sponsorname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sponsorname)) {
                $sponsorname = str_replace('*', '%', $sponsorname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorPeer::SPONSORNAME, $sponsorname, $comparison);
    }

    /**
     * Filter the query on the sponsorMessage column
     *
     * Example usage:
     * <code>
     * $query->filterBySponsormessage('fooValue');   // WHERE sponsorMessage = 'fooValue'
     * $query->filterBySponsormessage('%fooValue%'); // WHERE sponsorMessage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sponsormessage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorQuery The current query, for fluid interface
     */
    public function filterBySponsormessage($sponsormessage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sponsormessage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sponsormessage)) {
                $sponsormessage = str_replace('*', '%', $sponsormessage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorPeer::SPONSORMESSAGE, $sponsormessage, $comparison);
    }

    /**
     * Filter the query on the sponsorTextMessage column
     *
     * Example usage:
     * <code>
     * $query->filterBySponsortextmessage('fooValue');   // WHERE sponsorTextMessage = 'fooValue'
     * $query->filterBySponsortextmessage('%fooValue%'); // WHERE sponsorTextMessage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sponsortextmessage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorQuery The current query, for fluid interface
     */
    public function filterBySponsortextmessage($sponsortextmessage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sponsortextmessage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sponsortextmessage)) {
                $sponsortextmessage = str_replace('*', '%', $sponsortextmessage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorPeer::SPONSORTEXTMESSAGE, $sponsortextmessage, $comparison);
    }

    /**
     * Filter the query on the maketingContact column
     *
     * Example usage:
     * <code>
     * $query->filterByMaketingcontact('fooValue');   // WHERE maketingContact = 'fooValue'
     * $query->filterByMaketingcontact('%fooValue%'); // WHERE maketingContact LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maketingcontact The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorQuery The current query, for fluid interface
     */
    public function filterByMaketingcontact($maketingcontact = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maketingcontact)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $maketingcontact)) {
                $maketingcontact = str_replace('*', '%', $maketingcontact);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorPeer::MAKETINGCONTACT, $maketingcontact, $comparison);
    }

    /**
     * Filter the query on the maketingPhone column
     *
     * Example usage:
     * <code>
     * $query->filterByMaketingphone('fooValue');   // WHERE maketingPhone = 'fooValue'
     * $query->filterByMaketingphone('%fooValue%'); // WHERE maketingPhone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maketingphone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorQuery The current query, for fluid interface
     */
    public function filterByMaketingphone($maketingphone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maketingphone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $maketingphone)) {
                $maketingphone = str_replace('*', '%', $maketingphone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorPeer::MAKETINGPHONE, $maketingphone, $comparison);
    }

    /**
     * Filter the query on the maketingEmail column
     *
     * Example usage:
     * <code>
     * $query->filterByMaketingemail('fooValue');   // WHERE maketingEmail = 'fooValue'
     * $query->filterByMaketingemail('%fooValue%'); // WHERE maketingEmail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maketingemail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorQuery The current query, for fluid interface
     */
    public function filterByMaketingemail($maketingemail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maketingemail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $maketingemail)) {
                $maketingemail = str_replace('*', '%', $maketingemail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorPeer::MAKETINGEMAIL, $maketingemail, $comparison);
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
     * @return SponsorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SponsorPeer::WEBSITE, $website, $comparison);
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
     * @return SponsorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SponsorPeer::NOTE, $note, $comparison);
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
     * @return SponsorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SponsorPeer::CITY, $city, $comparison);
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
     * @return SponsorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SponsorPeer::ZIPCODE, $zipcode, $comparison);
    }

    /**
     * Filter the query on the created column
     *
     * Example usage:
     * <code>
     * $query->filterByCreated('fooValue');   // WHERE created = 'fooValue'
     * $query->filterByCreated('%fooValue%'); // WHERE created LIKE '%fooValue%'
     * </code>
     *
     * @param     string $created The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorQuery The current query, for fluid interface
     */
    public function filterByCreated($created = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($created)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $created)) {
                $created = str_replace('*', '%', $created);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorPeer::CREATED, $created, $comparison);
    }

    /**
     * Filter the query on the modified column
     *
     * Example usage:
     * <code>
     * $query->filterByModified('fooValue');   // WHERE modified = 'fooValue'
     * $query->filterByModified('%fooValue%'); // WHERE modified LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modified The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modified)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modified)) {
                $modified = str_replace('*', '%', $modified);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query by a related Contact object
     *
     * @param   Contact|PropelObjectCollection $contact The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SponsorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContact($contact, $comparison = null)
    {
        if ($contact instanceof Contact) {
            return $this
                ->addUsingAlias(SponsorPeer::CONTACT_ID, $contact->getId(), $comparison);
        } elseif ($contact instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SponsorPeer::CONTACT_ID, $contact->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return SponsorQuery The current query, for fluid interface
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
     * Filter the query by a related State object
     *
     * @param   State|PropelObjectCollection $state The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SponsorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByState($state, $comparison = null)
    {
        if ($state instanceof State) {
            return $this
                ->addUsingAlias(SponsorPeer::STATE_ID, $state->getId(), $comparison);
        } elseif ($state instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SponsorPeer::STATE_ID, $state->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return SponsorQuery The current query, for fluid interface
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
     * Filter the query by a related School object
     *
     * @param   School|PropelObjectCollection $school  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SponsorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySchool($school, $comparison = null)
    {
        if ($school instanceof School) {
            return $this
                ->addUsingAlias(SponsorPeer::ID, $school->getSponsorId(), $comparison);
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
     * @return SponsorQuery The current query, for fluid interface
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
     * @param   Sponsor $sponsor Object to remove from the list of results
     *
     * @return SponsorQuery The current query, for fluid interface
     */
    public function prune($sponsor = null)
    {
        if ($sponsor) {
            $this->addUsingAlias(SponsorPeer::ID, $sponsor->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
