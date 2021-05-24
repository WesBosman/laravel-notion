# Laravel Notion API Wrapper
This repo is a work in progress. The setup needs work. Need to figure out how to add filters to database and user queries.

## Setup
```php
    // Create a notion client (essentially a guzzle client with specific http headers for Notion)
    $client = new NotionClient();
```

## Notion Database
```php
    // Create a notion database object with a client and the base_url (will be moved to config variable)
    $notion_db = new NotionDatabase($client);

    // Get all databases
    $response = $notion_db->all();

    $response = $notion_db->get('your database id');

    return $response->getBody()->getContents();
```

## Notion User
```php
    $notion_user = new NotionUser($client);

    // Get all the users
    $response = $notion_user->all();

    // Get a specific user
    $response = $notion_user->get('your user id');

    return $response->getBody()->getContents();
```