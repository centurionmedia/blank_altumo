<?php


/**
 * Base class that represents a query for the 'state' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.0 on:
 *
 * Tue Aug  2 09:05:40 2011
 *
 * @method     StateQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     StateQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     StateQuery orderByIsoCode($order = Criteria::ASC) Order by the iso_code column
 * @method     StateQuery orderByIsoShortCode($order = Criteria::ASC) Order by the iso_short_code column
 * @method     StateQuery orderByCountryId($order = Criteria::ASC) Order by the country_id column
 * @method     StateQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     StateQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     StateQuery groupById() Group by the id column
 * @method     StateQuery groupByName() Group by the name column
 * @method     StateQuery groupByIsoCode() Group by the iso_code column
 * @method     StateQuery groupByIsoShortCode() Group by the iso_short_code column
 * @method     StateQuery groupByCountryId() Group by the country_id column
 * @method     StateQuery groupByCreatedAt() Group by the created_at column
 * @method     StateQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     StateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     StateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     StateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     StateQuery leftJoinCountry($relationAlias = null) Adds a LEFT JOIN clause to the query using the Country relation
 * @method     StateQuery rightJoinCountry($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Country relation
 * @method     StateQuery innerJoinCountry($relationAlias = null) Adds a INNER JOIN clause to the query using the Country relation
 *
 * @method     StateQuery leftJoinContactInformation($relationAlias = null) Adds a LEFT JOIN clause to the query using the ContactInformation relation
 * @method     StateQuery rightJoinContactInformation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ContactInformation relation
 * @method     StateQuery innerJoinContactInformation($relationAlias = null) Adds a INNER JOIN clause to the query using the ContactInformation relation
 *
 * @method     State findOne(PropelPDO $con = null) Return the first State matching the query
 * @method     State findOneOrCreate(PropelPDO $con = null) Return the first State matching the query, or a new State object populated from the query conditions when no match is found
 *
 * @method     State findOneById(int $id) Return the first State filtered by the id column
 * @method     State findOneByName(string $name) Return the first State filtered by the name column
 * @method     State findOneByIsoCode(string $iso_code) Return the first State filtered by the iso_code column
 * @method     State findOneByIsoShortCode(string $iso_short_code) Return the first State filtered by the iso_short_code column
 * @method     State findOneByCountryId(int $country_id) Return the first State filtered by the country_id column
 * @method     State findOneByCreatedAt(string $created_at) Return the first State filtered by the created_at column
 * @method     State findOneByUpdatedAt(string $updated_at) Return the first State filtered by the updated_at column
 *
 * @method     array findById(int $id) Return State objects filtered by the id column
 * @method     array findByName(string $name) Return State objects filtered by the name column
 * @method     array findByIsoCode(string $iso_code) Return State objects filtered by the iso_code column
 * @method     array findByIsoShortCode(string $iso_short_code) Return State objects filtered by the iso_short_code column
 * @method     array findByCountryId(int $country_id) Return State objects filtered by the country_id column
 * @method     array findByCreatedAt(string $created_at) Return State objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return State objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
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
	public function __construct($dbName = 'propel', $modelName = 'State', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new StateQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    StateQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof StateQuery) {
			return $criteria;
		}
		$query = new StateQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    State|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = StatePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    StateQuery The current query, for fluid interface
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
	 * @return    StateQuery The current query, for fluid interface
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
	 * $query->filterById(array('min' => 12)); // WHERE id > 12
	 * </code>
	 *
	 * @param     mixed $id The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StateQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(StatePeer::ID, $id, $comparison);
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
	 * @return    StateQuery The current query, for fluid interface
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
	 * Filter the query on the iso_code column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIsoCode('fooValue');   // WHERE iso_code = 'fooValue'
	 * $query->filterByIsoCode('%fooValue%'); // WHERE iso_code LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $isoCode The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StateQuery The current query, for fluid interface
	 */
	public function filterByIsoCode($isoCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($isoCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $isoCode)) {
				$isoCode = str_replace('*', '%', $isoCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(StatePeer::ISO_CODE, $isoCode, $comparison);
	}

	/**
	 * Filter the query on the iso_short_code column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIsoShortCode('fooValue');   // WHERE iso_short_code = 'fooValue'
	 * $query->filterByIsoShortCode('%fooValue%'); // WHERE iso_short_code LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $isoShortCode The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StateQuery The current query, for fluid interface
	 */
	public function filterByIsoShortCode($isoShortCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($isoShortCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $isoShortCode)) {
				$isoShortCode = str_replace('*', '%', $isoShortCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(StatePeer::ISO_SHORT_CODE, $isoShortCode, $comparison);
	}

	/**
	 * Filter the query on the country_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCountryId(1234); // WHERE country_id = 1234
	 * $query->filterByCountryId(array(12, 34)); // WHERE country_id IN (12, 34)
	 * $query->filterByCountryId(array('min' => 12)); // WHERE country_id > 12
	 * </code>
	 *
	 * @see       filterByCountry()
	 *
	 * @param     mixed $countryId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StateQuery The current query, for fluid interface
	 */
	public function filterByCountryId($countryId = null, $comparison = null)
	{
		if (is_array($countryId)) {
			$useMinMax = false;
			if (isset($countryId['min'])) {
				$this->addUsingAlias(StatePeer::COUNTRY_ID, $countryId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($countryId['max'])) {
				$this->addUsingAlias(StatePeer::COUNTRY_ID, $countryId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StatePeer::COUNTRY_ID, $countryId, $comparison);
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
	 * @return    StateQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(StatePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(StatePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StatePeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
	 * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
	 * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $updatedAt The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StateQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(StatePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(StatePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StatePeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related Country object
	 *
	 * @param     Country|PropelCollection $country The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StateQuery The current query, for fluid interface
	 */
	public function filterByCountry($country, $comparison = null)
	{
		if ($country instanceof Country) {
			return $this
				->addUsingAlias(StatePeer::COUNTRY_ID, $country->getId(), $comparison);
		} elseif ($country instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(StatePeer::COUNTRY_ID, $country->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByCountry() only accepts arguments of type Country or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Country relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    StateQuery The current query, for fluid interface
	 */
	public function joinCountry($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Country');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Country');
		}
		
		return $this;
	}

	/**
	 * Use the Country relation Country object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CountryQuery A secondary query class using the current class as primary query
	 */
	public function useCountryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCountry($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Country', 'CountryQuery');
	}

	/**
	 * Filter the query by a related ContactInformation object
	 *
	 * @param     ContactInformation $contactInformation  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StateQuery The current query, for fluid interface
	 */
	public function filterByContactInformation($contactInformation, $comparison = null)
	{
		if ($contactInformation instanceof ContactInformation) {
			return $this
				->addUsingAlias(StatePeer::ID, $contactInformation->getStateId(), $comparison);
		} elseif ($contactInformation instanceof PropelCollection) {
			return $this
				->useContactInformationQuery()
					->filterByPrimaryKeys($contactInformation->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByContactInformation() only accepts arguments of type ContactInformation or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the ContactInformation relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    StateQuery The current query, for fluid interface
	 */
	public function joinContactInformation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ContactInformation');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'ContactInformation');
		}
		
		return $this;
	}

	/**
	 * Use the ContactInformation relation ContactInformation object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ContactInformationQuery A secondary query class using the current class as primary query
	 */
	public function useContactInformationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinContactInformation($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ContactInformation', 'ContactInformationQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     State $state Object to remove from the list of results
	 *
	 * @return    StateQuery The current query, for fluid interface
	 */
	public function prune($state = null)
	{
		if ($state) {
			$this->addUsingAlias(StatePeer::ID, $state->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseStateQuery
