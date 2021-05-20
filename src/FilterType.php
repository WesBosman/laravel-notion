<?php

namespace WesBosman\LaravelNotion;

class FilterType
{
    const EQUALS = "equals";

    const STARTS_WITH = "starts_with";

    const ENDS_WITH = "ends_with";

    const DOES_NOT_EQUAL = "does_not_equal";

    const GREATER_THAN = "greater_than";

    const LESS_THAN = "less_than";

    const GREATER_OR_EQUAL = "greater_than_or_equal_to";

    const LESS_OR_EQUAL = "less_than_or_equal_to";

    const IS_EMPTY = "is_empty";

    const IS_NOT_EMPTY = "is_not_empty";

    // Multi-Select Specific

    const CONTAINS = "contains";

    const DOES_NOT_CONTAIN = "does_not_contain";

    // Date Specific
    
    const BEFORE = "before";

    const AFTER = "after";

    const ON_OR_BEFORE = "on_or_before";

    const ON_OR_AFTER = "on_or_after";

    const PAST_WEEK = "past_week";

    const PAST_MONTH = "past_month";

    const PAST_YEAR = "past_year";

    const NEXT_WEEK = "next_week";

    const NEXT_MONTH = "next_month";

    const NEXT_YEAR = "next_year";

    // Formula Specific

    const TEXT = "text";

    const CHECKBOX = "checkbox";

    const NUMBER = "number";

    const DATE = "date";

    // Compound Filters

    const OR_FILTER = "or";

    const AND_FILTER = "and";

    // Sort Objects

    const PROPERTY = "property";

    const TIMESTAMP = "timestamp";

    const DIRECTION = "direction";
}