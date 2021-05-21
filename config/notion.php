<?php

return [
    /**
     * API Token for the notion integration
     */
    'api_token' => env('NOTION_API_TOKEN', null),

    /**
     * The version of the notion API
     * 
     * first version was 2021-05-13
     */
    'api_version' => env('NOTION_API_VERSION', '2021-05-13'),

    /**
     * Base Url
     */
    'base_url' => 'https://api.notion.com/v1/'
];