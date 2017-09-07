<?php

namespace App\LiveNetworks;

use \Eloquent;

/**
 * Class Model
 * @package App\LiveNetworks
 *
 * An abstract class for models. It has sort and filter methods.
 */
abstract class LnModel extends Eloquent {

	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	/** Restrict query methods which can be called dynamically from the front-end */
	protected $filter = [];

	public function scopeSort($query, $sortParams = []) {
		foreach ($sortParams as $sortParam) {
			$scopeFunctionName = 'scopeSortBy' . ucfirst($sortParam->field);
			if (method_exists($this, $scopeFunctionName)) {
				$functionName = 'sortBy' . ucfirst($sortParam->field);
				$query = $query->{$functionName}($sortParam->type, $sortParam->request);
			}
			else {
				$query = $query->orderBy($sortParam->field, $sortParam->type);
			}
		}
		return $query;
	}

	public function scopeFilter($query, $filterParams = []) {
		foreach ($filterParams as $filterParam) {
			/** IMPORTANT: Case Sensitive Search **/
			if ($filterParam->request && !in_array($filterParam->field, $this->filter)) {
				continue;
			}
			/** Skip empty values */
			if (empty($filterParam->value)) {
				continue;
			}

			$scopeFunctionName = 'scopeFilterBy' . ucfirst($filterParam->field);
			if (method_exists($this, $scopeFunctionName)) {
				$functionName = 'filterBy' . ucfirst($filterParam->field);
				$query = $query->{$functionName}($filterParam->operator, $filterParam->value, $filterParam->request);
			} else {
				$query = $query->where($filterParam->field, '=', $filterParam->value);
			}
		}
		return $query;
	}

	public function buildJoin($query, $relationship, $withSelect = true) {
		if ($this->isJoined($query, $relationship)) {
			return $query;
		}

		$query = $query->leftJoin(
			$relationship->getRelated()->getTable(),
			$relationship->getParent()->getTable() . '.' . $relationship->getForeignKey(),
			'=',
			$relationship->getRelated()->getTable() . '.' . $relationship->getOtherKey());

		if ($withSelect) {
			$query = $query->select($relationship->getParent()->getTable() . '.*');
		}

		return $query;
	}

	public function isJoined($query, $relationship)
	{	$table = $relationship->getRelated()->getTable();
		$joins = $query->getQuery()->joins;

		if($joins == null) {
			return false;
		}

		foreach ($joins as $join) {
			if ($join->table == $table) {
				return true;
			}
		}

		return false;
	}
}