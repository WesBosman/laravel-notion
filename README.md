# Laravel Notion API Wrapper
This repo is a work in progress.

```php
    // Get the secret for the Notion Integration
    $secret = config('notion.token');

    // Get the API version (this will be moved to a config variable)
    $notion_version = Constants::getNotionVersion1();

    // Create a notion headers object (Should probably create custom request or middleware)
    $notion_headers = new NotionHeaders($secret, $notion_version);

    // Create a guzzle http client using the headers
    $client = new Client($notion_headers->getHeaders());

    // Create a notion database object with a client and the base_url (will be moved to config variable)
    $notion_db = new NotionDatabase($client, Constants::getBaseUrlV1());

    $response = $notion_db->all();

    return $response->getBody()->getContents();
```
