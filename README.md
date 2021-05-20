# Laravel Notion API Wrapper
This repo is a work in progress. The setup needs work. Need to figure out how to add filters to database and user queries.

## Setup (Needs work)
```php
   // Get the secret for the Notion Integration
    $secret = config('notion.token');

    // Get the API version (this will be moved to a config variable)
    $notion_version = Constants::getNotionVersion1();

    // Create a notion headers object (Should probably create custom request or middleware)
    $notion_headers = new NotionHeaders($secret, $notion_version);

    // Create a guzzle http client using the headers
    $client = new Client($notion_headers->getHeaders());
```

## Notion Database
```php
    // Create a notion database object with a client and the base_url (will be moved to config variable)
    $notion_db = new NotionDatabase($client, Constants::getBaseUrlV1());

    // Get all databases
    $response = $notion_db->all();

    $response = $notion_db->get('your database id');

    return $response->getBody()->getContents();
```

## Notion User
```php
    $notion_user = new NotionUser($client, Constants::getBaseUrlV1());

    // Get all the users
    $response = $notion_user->all();

    // Get a specific user
    $response = $notion_user->get('your user id');

    return $response->getBody()->getContents();
```