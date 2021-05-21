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
    'api_version' => env('NOTION_API_VERSION', null),

    /**
     * Base Url
     */
    'base_url' => 'https://api.notion.com/v1/'
];