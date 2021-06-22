<?php

namespace WesBosman\LaravelNotion;

class NotionPage
{
    protected $OBJ = "database";

    protected $id;

    protected $properties = [];

    protected $number_config = [
        'number',
        'number_with_commas',
        'percent',
        'dollar',
        'euro',
        'pound',
        'yen',
        'ruble',
        'rupee',
        'won',
        'yuan'
    ];



}