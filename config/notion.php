<?php

return [
    /**
     * API Token for the notion integration
     */
    'token' => env('NOTION_TOKEN', null),

    /**
     * The version of the notion API
     * 
     * first version was 2021-05-13
     */
    'api_version' => '2021-05-13',

    /**
     * Base Url
     */
    'base_url' => 'https://api.notion.com/v1/'
];