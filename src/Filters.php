<?php

namespace WesBosman\LaravelNotion;

use WesBosman\LaravelNotion\FilterType;

class Filters
{
    const TEXT_FILTERS = [
        FilterType::EQUALS,
        FilterType::DOES_NOT_EQUAL,
        FilterType::CONTAINS,
        FilterType::DOES_NOT_CONTAIN,
        FilterType::STARTS_WITH,
        FilterType::ENDS_WITH,
        FilterType::IS_EMPTY,
        FilterType::IS_NOT_EMPTY
    ];

    const NUMBER_FILTERS = [
        FilterType::EQUALS,
        FilterType::DOES_NOT_EQUAL,
        FilterType::GREATER_THAN,
        FilterType::LESS_THAN,
        FilterType::GREATER_OR_EQUAL,
        FilterType::LESS_OR_EQUAL,
        FilterType::IS_EMPTY,
        FilterType::IS_NOT_EMPTY
    ];

    const CHECKBOX_FILTERS = [
        FilterType::EQUALS,
        FilterType::DOES_NOT_EQUAL
    ];

    const SELECT_FILTERS = [
        FilterType::EQUALS,
        FilterType::DOES_NOT_EQUAL,
        FilterType::IS_EMPTY,
        FilterType::IS_NOT_EMPTY
    ];

    const MULTI_SELECT_FILTERS = [
        FilterType::CONTAINS,
        FilterType::DOES_NOT_CONTAIN,
        FilterType::IS_EMPTY,
        FilterType::IS_NOT_EMPTY
    ];

    const DATE_FILTERS = [
        FilterType::EQUALS,
        FilterType::BEFORE,
        FilterType::AFTER,
        FilterType::ON_OR_BEFORE,
        FilterType::IS_EMPTY,
        FilterType::IS_NOT_EMPTY,
        FilterType::ON_OR_AFTER,
        FilterType::PAST_WEEK,
        FilterType::PAST_MONTH,
        FilterType::PAST_YEAR,
        FilterType::NEXT_WEEK,
        FilterType::NEXT_MONTH,
        FilterType::NEXT_YEAR
    ];

    const PEOPLE_FILTERS = [
        FilterType::CONTAINS,
        FilterType::DOES_NOT_CONTAIN,
        FilterType::IS_EMPTY,
        FilterType::IS_NOT_EMPTY
    ];

    const FILES_FILTER = [
        FilterType::IS_EMPTY,
        FilterType::IS_NOT_EMPTY
    ];

    const RELATION_FILTERS = [
        FilterType::CONTAINS,
        FilterType::DOES_NOT_CONTAIN,
        FilterType::IS_EMPTY,
        FilterType::IS_NOT_EMPTY
    ];

    const FORMULA_FILTERS = [
        FilterType::TEXT,
        FilterType::CHECKBOX,
        FilterType::NUMBER,
        FilterType::DATE
    ];

    const COMPOUND_FILTERS = [
        FilterType::OR_FILTER,
        FilterType::AND_FILTER
    ];

    const SORT_FILTERS = [
        FilterType::PROPERTY,
        FilterType::TIMESTAMP,
        FilterType::DIRECTION
    ];
}